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


    });
})(jQuery);

