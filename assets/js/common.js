(function($) {
    $(function(){

        //totop
        $(window).scroll(function () {
            var windowTop = $(this).scrollTop();
            if (windowTop >= 10) {
                $('#totop').addClass('totop');
                $('#totop').children('.md_arrow').addClass('totop');
                $('#totop').children('.md_arrow').attr("href", "#top")
            } else if (windowTop < 10) {
                $('#totop').removeClass('totop');
                $('#totop').children('.md_arrow').removeClass('totop');
                $('#totop').children('.md_arrow').attr("href", "#contents")
            }
        })


        // スムーズスクロール
        var notList = '#togmenu a[href^="#"], a.remodal-close,a[href^="#0"]';
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
        if($('#fixnav').length){
            var nav = $('#fixnav');
            var navTop = nav.offset().top + 600;
            var showFlag = false;
        }
        $(window).scroll(function () {
            var windowTop = $(this).scrollTop();
            if (windowTop >= navTop) {
                if (showFlag == false) {
                    showFlag = true;
                    nav.addClass('fixed');
                    $('#md_totop').fadeIn();
                }
            } else if (windowTop < navTop) {
                if (showFlag) {
                    showFlag = false;
                    nav.removeClass('fixed');
                    $('#md_totop').fadeOut();
                }
            }
        })

        //tournav fix
        if($('#tour_pnav').length){
            var tour_pnav = $('#tour_pnav');
            var tour_pnavHeight = tour_pnav.outerHeight();
            var tour_pnavTop = tour_pnav.offset().top;
            var showFlag = false;
        }
        $(window).scroll(function () {
            var windowTop = $(this).scrollTop();
            if (windowTop >= tour_pnavTop) {
                if (showFlag == false) {
                    showFlag = true;
                    tour_pnav.addClass('fixed');
                }
            } else if (windowTop < tour_pnavTop) {
                if (showFlag) {
                    showFlag = false;
                    tour_pnav.removeClass('fixed');
                }
            }
        })




        //sidrメニュー
        $('#drawer_trigger').sidr({
            name: 'drawer',
            source: '#drawer_menu',
            side: 'left',
            renaming: false,
            displace: false,
            onOpen: function() {
                $('#drawer_trigger').addClass('open');
                $('#drawer_triggerBtn').addClass('active');
                $('#drawer_cover').fadeIn(300);
                $('.sidr_slide__close').show();
                $("meta[name='viewport']").attr('content','width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no');
            },
            onClose: function() {
                $('#drawer_trigger').removeClass('open');
                $('#drawer_triggerBtn').removeClass('active');
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

        //ツアーページナビ
        $('#pnavList li a').on("click", function () {
            $('#pnavList li a').removeClass('current');
            $(this).toggleClass('current');
        });






        //ツアーtoggle
        // $('.tour_list__detail').hide();
        // $('.detail_open').on("click", function () {
        //     $(this).toggleClass('open');
        //     $(this).parents().children('.tour_list__detail').slideToggle('fast');
        //     $(this).parents().children('.tour_list__thumb').toggleClass('open');
        // });


    });
})(jQuery);

