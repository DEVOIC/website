<script type='text/javascript' src='/public/assets/js/jquery.js'></script>

<script type='text/javascript'
    src='/public/assets/js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.event.move.js'></script>
<script type='text/javascript'
    src='/public/assets/js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/jquery.twentytwenty.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/before-after-image-comparison-slider-for-elementor/assets/js/main.js'>
</script>
<script type='text/javascript' src='/public/assets/js/imagesloaded.min.js'></script>
<script type='text/javascript' src='/public/assets/js/masonry.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/jquery.lazy.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/modulobox.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/jquery.parallax-scroll.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/jquery.smoove.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/parallax.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/jquery.sticky-kit.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/starto-elementor.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/jquery-blockui/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/public/assets/js/ui/core.min.js'></script>
<script type='text/javascript' src='/public/assets/js/ui/effect.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/tweenmax.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/waypoints.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/jquery.stellar.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/core/custom_plugins.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/core/custom.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/jquery.tooltipster.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/loftloader/assets/js/loftloader.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/switchery.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/starto-elementor/assets/js/typed.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/js/frontend-modules.min.js'></script>
<script type='text/javascript' src='/public/assets/js/ui/position.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/lib/dialog/dialog.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/lib/waypoints/waypoints.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/lib/swiper/swiper.min.js'></script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/lib/share-link/share-link.min.js'></script>


<script type='text/javascript'>
    jQuery(function($) {
        jQuery("img.lazy").each(function() {
            var currentImg = jQuery(this);
            jQuery(this).Lazy({
                onFinishedAll: function() {
                    currentImg.parent("div.post-featured-image-hover").removeClass("lazy");
                    currentImg.parent(".starto_gallery_lightbox").parent(
                        "div.gallery_grid_item").removeClass("lazy");
                    currentImg.parent("div.gallery_grid_item").removeClass("lazy");
                }
            });
        });
    });
</script>

<script type='text/javascript'>
    jQuery(function($) {
        jQuery("#page-content-wrapper .sidebar-wrapper").stick_in_parent({
            offset_top: 100
        });
        if (jQuery(window).width() < 768 || is_touch_device()) {
            jQuery("#page-content-wrapper .sidebar-wrapper").trigger("sticky_kit:detach");
        }
    });
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var tgAjax = {
        "ajaxurl": "#",
        "ajax_nonce": "ca39257e78"
    };
    /* ]]> */
</script>
<script type='text/javascript' id='starto-custom-plugins-js-extra'>
    /* <![CDATA[ */
    var startoPluginParams = {
        "backTitle": "Back"
    };
    /* ]]> */
</script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var startoParams = {
        "menulayout": "leftalign",
        "fixedmenu": "1",
        "footerreveal": "",
        "headercontent": "content",
        "lightboxthumbnails": "thumbnail",
        "lightboxtimer": "7000"
    };
    /* ]]> */
</script>
<script type='text/javascript'>
    jQuery(function($) {
        jQuery(".demotip").tooltipster({
            position: "left",
            multiple: true,
            theme: "tooltipster-shadow",
            delay: 0
        });
    });
</script>

<script type='text/javascript' id='typedjs-script-js-after'>
    jQuery(function($) {
        jQuery(".type-wrap").show();
        jQuery("#typed").typed({
            stringsElement: jQuery("#typed-strings"),
            typeSpeed: 65,
            backDelay: 2500,
            loop: true,
            loopCount: Infinity,
            contentType: "html", // or text
            loopCount: true
        });
    });
</script>

<script type='text/javascript'>
    var elementorFrontendConfig = {
        environmentMode: {
            edit: false,
            wpPreview: false
        },
        i18n: {
            shareOnFacebook: "Share on Facebook",
            shareOnTwitter: "Share on Twitter",
            pinIt: "Pin it",
            download: "Download",
            downloadImage: "Download image",
            fullscreen: "Fullscreen",
            zoom: "Zoom",
            share: "Share",
            playVideo: "Play Video",
            previous: "Previous",
            next: "Next",
            close: "Close",
        },
        is_rtl: false,
        breakpoints: {
            xs: 0,
            sm: 480,
            md: 768,
            lg: 1025,
            xl: 1440,
            xxl: 1600
        },
        version: "3.0.13",
        is_static: false,
        legacyMode: {
            elementWrappers: true
        },
        urls: {
            assets: "#"
        },
        settings: {
            page: [],
            editorPreferences: []
        },
        kit: {
            global_image_lightbox: "yes",
            lightbox_enable_counter: "yes",
            lightbox_enable_fullscreen: "yes",
            lightbox_enable_zoom: "yes",
            lightbox_enable_share: "yes",
            lightbox_title_src: "title",
            lightbox_description_src: "description"
        },
        post: {
            id: 7785,
            title: "starto",
            excerpt: "",
            featuredImage: false
        },
    };
</script>
<script type='text/javascript' src='/public/assets/js/plugins/elementor/assets/js/frontend.min.js'></script>
