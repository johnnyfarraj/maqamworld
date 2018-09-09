$(window).on('load', function() {
    /* Make all card boxes the same height */
    if($(window).width() > 768) {
            var max = 0;
            $(".card").each(function() {
                if($(this).outerHeight() > max) {
                    max = $(this).outerHeight();
                }
            })
            $(".card").css('height', max);
    }
})
$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(this).scrollTop();
        if(scroll >= 100) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    })
    $(".show-side-menu").click(function(e) {
        e.preventDefault();
        $(".sub-menu").addClass("active");
        $("body").css("overflow-y", "hidden");
    })
    $(".hide-side-menu").click(function(e) {
        e.preventDefault();
        $(".sub-menu").removeClass("active");
        $("body").css("overflow-y", "visible");
    })
})
jQuery.expr[':'].regex = function(elem, index, match) {
    var matchParams = match[3].split(','),
        validLabels = /^(data|css):/,
        attr = {
            method: matchParams[0].match(validLabels) ? 
                        matchParams[0].split(':')[0] : 'attr',
            property: matchParams.shift().replace(validLabels,'')
        },
        regexFlags = 'ig',
        regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g,''), regexFlags);
    return regex.test(jQuery(elem)[attr.method](attr.property));
}

$(document).ready(function() {
    /* pronunciation */
    const pronunciation = new Plyr('#pronunciation-player', {controls: []});
    $(".pronunciation").click(function(e) {
        e.preventDefault();
        var song = $(this).data("audio");
        pronunciation.stop();
        pronunciation.source = {
            type: 'audio',
            sources: [
                {
                    src: song,
                    type: 'audio/mp3',
                }
            ],
        };
        pronunciation.play();
    });
    
    /* Initialisation of the player */
    const player = new Plyr('#player', {
        controls: ['play', 'progress', 'current-time', 'mute', 'volume']
    });
    player.on('play', function() {
        pronunciation.pause();
    })
    pronunciation.on('play', function() {
        player.pause();
    })
    
    /* On Track change */
    $("input[name=song]").change(function() {
        $(".track").removeClass("active");
        $(this).parents(".track").addClass("active");
        
        /* We get the Song location from the Data-song attribute */
        var songLocation = $(this).parents(".track").data("song");
        /* We get the Song title from our sibling element */
        var songTitle = $(this).siblings(".info").children("b").text();
        
        /* We stop the player */
        player.stop();
        
        /* We change the song */
        player.source = {
            type: 'audio',
            title: songTitle,
            sources: [
                {
                    src: songLocation,
                    type: 'audio/mp3',
                }
            ],
        };
        /* We start the player */
        player.play();
    })
    
    var youtubePlayer;
    /* YouTube Video Player */
    if($(".youtube-track").length > 0) {
        $("body").append('<div id="player-modal"><div class="text-right"><a href="#"><i class="fa fa-fw fa-times"></i></a></div><div class="box"><div class="plyr__video-embed" id="player"><iframe src="https://www.youtube.com/embed/bTqVqk7FSmY?origin='+window.location.href+'&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1" allowfullscreen allowtransparency allow="autoplay"></iframe></div></div></div>');
        youtubePlayer = new Plyr('#player');
    }
    $(".youtube-track").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var videoId = $(this).data("youtube");
        youtubePlayer.source = {
            type: 'video',
            sources: [
                {
                    src: videoId,
                    provider: 'youtube',
                },
            ],
        };
        if(videoId.indexOf("&t=") !== -1) {
            // We have time seek
            var parts = videoId.split("&t=");
            var timing = parts[1].replace("s", "");
            setTimeout(function(){ youtubePlayer.seek(timing); },300);
        }
        $("#player-modal").addClass("active");
        youtubePlayer.play();
    });
    $(".youtube-track a").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr("href");
        location.href = href;
    })
    $("#player-modal").click(function(e) {
        var target = $(e.target), article;
        if(!target.parents().is(".box") && !target.is(".box")) {
            if($("#player-modal").hasClass("active")) {
                youtubePlayer.stop();
                $("#player-modal").removeClass("active");
            }
        }
    });
    $("#player-modal .text-right a").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        youtubePlayer.stop();
        $("#player-modal").removeClass("active");
    })
    
    /* Gallery */
    var galleries = [];
    $(".gallery-album-area").each(function() {
        var galleryName = $(this).children(".gallery-album").attr("id");
        galleries[galleryName] = $('#' + galleryName).owlCarousel({
            loop:true,
            margin:5,
            responsiveClass:true,
            dots: false,
            nav: false,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                }
            }
        })
    })
    $(".gallery-album-area .go-left").click(function(e) {
        e.preventDefault();
        var galleryName = $(this).siblings(".gallery-album").attr("id");
        galleries[galleryName].trigger("prev.owl.carousel");
    })
    $(".gallery-album-area .go-right").click(function(e) {
        e.preventDefault();
        var galleryName = $(this).siblings(".gallery-album").attr("id");
        galleries[galleryName].trigger("next.owl.carousel");
    })
    
    /* Note player */
    $(".playNote").on("click", function(e) {
        e.preventDefault();
    });
    
    var myOscillator;
    
    $(".mapLink").on("mouseenter", function(e) {
        var parent = $(this).data("parent");
        var coords = $(this).attr("coords").split(",");
        var target = $(this).attr("href");
        $(parent).find(".linkArea").css("width", coords[2] - coords[0]);
        $(parent).find(".linkArea").css("height", coords[3] - coords[1]);
        $(parent).find(".linkArea").css("top", coords[1] - 0);
        $(parent).find(".linkArea").css("left", coords[0] - 0);
        $(parent).find(".linkArea").addClass("active");
        $(parent).find(".linkArea").attr("href", target);
    })
    $(".linkArea").on("mouseleave", function(e) {
        $(this).removeClass("active");
    })
    
    $(".shape").tooltip({
        html: true,
        template: '<div class="tooltip custom-tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    })
    $(".playNote").on("mouseenter", function(e) {
        var altText = $(this).attr("alt");
        var parent = $(this).data("parent");
        var coords = $(this).attr("coords").split(",");
        $(parent).find(".shape").css("width", coords[2] * 2 + 10).css("height", coords[2] * 2 + 10).css("top", coords[1] - coords[2] - 5).css("left", coords[0] - coords[2] - 5);
        $(parent).find(".shape").attr("data-html", "true").attr("data-original-title", altText).tooltip('show');
    });
    $(".playNote").on("mouseleave", function(e) {
        var parent = $(this).data("parent");
        $(parent).find(".shape").tooltip('hide');
    });
    $(".playNote").on("mousedown", function(e) {
        e.preventDefault();
        var frequency = $(this).data("frequency");
        var parent = $(this).data("parent");
        
        var coords = $(this).attr("coords").split(",");
        
        $(parent).find(".shape").css("width", coords[2] * 2 + 10).css("height", coords[2] * 2 + 10).css("top", coords[1] - coords[2] - 5).css("left", coords[0] - coords[2] - 5).addClass("active");
        
        const REAL_TIME_FREQUENCY = frequency;
        window.AudioContext = window.AudioContext||window.webkitAudioContext;
        let audioContext = new AudioContext();

            myOscillator = audioContext.createOscillator();
            myOscillator.frequency.value = REAL_TIME_FREQUENCY;

            myOscillator.connect(audioContext.destination);

            $(this).addClass("active");

            myOscillator.start();
        
    }).on("mouseup", function(e) {
        e.preventDefault();
        
        $(this).removeClass("active");
        $(".notation .shape").removeClass("active");
        
        myOscillator.stop();
    })
    $(document).on("mouseup", function() {
        if(myOscillator) {
            myOscillator.stop();
        }
        $(".playNote.active").removeClass("active");
        $(".notation .shape").removeClass("active");
    });
})