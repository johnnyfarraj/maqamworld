<?php
include('../inc/functions.php');
function endsWith($haystack, $needle)
{
    $length = strlen($needle);

    return $length === 0 ||
    (substr($haystack, -$length) === $needle);
}
function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp)
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res)
            return null;

        // Clean up title: remove EOL's e excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
        return $title;
}
function curl_get_contents($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return strip_tags($data);
}
$files = array();
$cont = 0;
function searchDirectoryIterator($path, $string){
    global $files, $cont;
    $string = preg_replace('/[^A-Za-z0-9 "\']/', '', strip_tags(addslashes($string)));
    $dir = new DirectoryIterator($path);
    $totalFiles = 0;
    foreach ($dir as $file){
        if (!$file->isDot() && endsWith($file, ".php")) {
            if($file->getBasename() == "results.php" || $file->getBasename() == "search.php") {
                continue;
            }
            $content2 = curl_get_contents(str_replace('./', 'http://maqamworld.com/it/', $file->getPathname()));
            $content = strtolower($content2);
            $content = normalizeChars($content);
            if (strpos($content, strtolower($string)) !== false) {
                $res = preg_match("/<title>(.*)<\/title>/siU", $content2, $title_matches);
                $title = preg_replace('/\s+/', ' ', $title_matches[1]);
                $title = trim($title);

                $appeardTotal = substr_count($content, strtolower($string));

                array_push($files, array("title" => $title, "link" => str_replace('./', 'http://maqamworld.com/it/', $file->getPathname()), "appearances" => $appeardTotal));
                $cont++;
            }
        }
        if(!$file->isDot() && $file->isDir()) {
            searchDirectoryIterator(str_replace('\\','/',$file->getPathname()), $string);
        }
    }
    ksort($files);
}

if(isset($_GET['q']) && strip_tags($_GET['q']) != "" && strlen(strip_tags($_GET['q'])) > 3) {
    searchDirectoryIterator(".", strip_tags($_GET['q']));
    if($cont == 0) {
        $array = array('status' => "error", 'message' => "Nessun risultato.");
    } else {
        usort($files, function($a, $b) {
            return $b['appearances'] - $a['appearances'];
        });
        $array = array('status' => "success", 'files' => $files, 'totalFiles' => $cont);
    }
} else {
    $array = array('status' => "error", 'message' => "Per favore scrivi una parola chiave (minimo 4 lettere).");
}

echo json_encode($array);

?>