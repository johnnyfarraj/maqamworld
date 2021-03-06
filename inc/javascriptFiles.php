<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plyr.min.js"></script>
<script src="/js/plyr.polyfilled.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/custom.js?v=1.1"></script>
<script>
    $(document).ready(function() {
        var currentPage = "<?php echo $page; ?>";
        if(currentPage) {
            if($("a:regex(href, .*" + currentPage + "$)").parents(".sub-menu")) {
                $("a:regex(href, .*" + currentPage + "$)").parents("li").addClass("active");
            }
        }
    })
</script>