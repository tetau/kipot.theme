(function($) {
    $(function(){
        // AOS
        AOS.init();

        // スムーズスクロール
        var notList = '#togmenu a[href^="#"], a.remodal-close,a[href^="#0"],a[href^="#wpcf7"]';
        $('a[href^="#"]').not(notList).click(function(){
            var speed = 300;
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - 60;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });
        var url = $(location).attr('href');
        if (url.indexOf("?id=") == -1) {
        }else{
            var url_sp = url.split("?id=");
            var hash   = '#' + url_sp[url_sp.length - 1];
            var tgt    = $(hash);
            var pos    = tgt.offset().top;
            $("html, body").animate({scrollTop:pos}, 300, "swing");
        }

        //header fix
        if($('#fixheader').length){
            var trigger = $('#fixheader').offset().top;
            var showFlag = false;
            console.log(trigger);
            $(window).scroll(function () {
                var windowTop = $(this).scrollTop();
                if (windowTop >= trigger) {
                    if (showFlag == false) {
                        showFlag = true;
                        $('#fixheader').addClass('fixed')
                    }
                } else if (windowTop <= trigger) {
                    if (showFlag) {
                        showFlag = false;
                        $('#fixheader').removeClass('fixed');
                    }
                }
            });
        }

        //sidrメニュー
        $('.md_glnavi__triger').sidr({
            name: 'drawer',
            source: '#drawer_menu',
            side: 'right',
            renaming: false,
            displace: false,
            timing: 'ease-out',
            onOpen: function() {
                $('.md_glnavi__triger').addClass('open');
                $('#drawer_cover').fadeIn(300);
                $('.sidr_slide__close').show();
                $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no');
            },
            onClose: function() {
                $('#drawer_cover').fadeOut(300);
                $('.sidr_slide__close').hide();
                $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=yes');
            }
        });
        $('#drawer_cover').on("click", function () {
            $.sidr('close', 'drawer');
        });
        $('.sidr_slide__close').on("click", function () {
            $.sidr('close', 'drawer');
        });
        $(window).touchwipe({
            wipeRight: function() {
            $.sidr('close', 'drawer');
            },
            // wipeLeft: function() {
            //  $.sidr('open', 'drawer');
            // },
            preventDefaultEvents: false
        });

    });
})(jQuery);

