
</div><!-- .wrapper-->

<footer>
    <div class="md_footer" role="contentinfo">
        <div class="l_row mx_1366 pd_side">
            <nav class="md_footer__infoWrap">
                <ul class="fz_16 fw700 md_footer__mainNav">
                    <li class="md_footer__logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_wht.svg" alt="ママの笑顔が子供の笑顔" width="240"></a></li>
                    <li ><a href="#">会社概要</a></li>
                    <li><a href="#">お問い合わせ</a></li>
                    <li><a href="#">個人情報保護方針</a></li>
                </ul>
                <div class="md_footer__listWrap">
                    <h3 class="fz_16 fw700 md_footer__listNavTtl"><a href="">イベント託児 キポットプレイス</a></h3>
                    <ul class="fz_14 md_footer__listNav">
                        <li><a href="#">費用・時間・対応エリア</a></li>
                        <li><a href="#">特徴「泣かせない託児」</a></li>
                        <li>
                            <a href="#">会社概要</a>
                            <ul class="subnav">
                                <li><a href="#">事業内容</a></li>
                            </ul>
                        </li>
                        <li><a href="#">お申し込み</a></li>
                    </ul>
                </div>
                <div class="md_footer__listWrap">
                    <h3 class="fz_16 fw700 md_footer__listNavTtl"><a href="">働くママのためのセミナー事業</a></h3>
                    <ul class="fz_14 md_footer__listNav">
                        <li><a href="#">費用・時間・対応エリア</a></li>
                        <li><a href="#">特徴「泣かせない託児」</a></li>
                        <li><a href="#">会社概要</a></li>
                        <li><a href="#">お申し込み</a></li>
                    </ul>
                </div>
                <div class="md_footer__listWrap">
                    <h3 class="fz_16 fw700 md_footer__listNavTtl"><a href="">ちょいジョブ</a></h3>
                    <ul class="fz_14 md_footer__listNav">
                        <li><a href="#">費用・時間・対応エリア</a></li>
                        <li><a href="#">特徴「泣かせない託児」</a></li>
                    </ul>
                    <h3 class="fz_16 fw700 md_footer__listNavTtl marginTop"><a href="">ちょいジョブ</a></h3>
                    <ul class="fz_14 md_footer__listNav">
                        <li><a href="#">費用・時間・対応エリア</a></li>
                        <li><a href="#">特徴「泣かせない託児」</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.touchwipe.js"></script>
<!-- .sidr-->
<div class="md_drawer__cover" id="drawer_cover"></div>
<div id="drawer_menu" class="md_drawer__menu">
    <div class="drawer_head">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_tagline.svg" alt="ママの笑顔が子供の笑顔" width="200" class="tagline">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.svg" alt="キポット" width="160" class="logo">
    </div>
    <nav class="drawer_nav">
        <div class="sidr_slide__close"><span></span><span></span></div>
        <p><a href="<?php echo home_url('/'); ?>entry/">イベント託児のお申し込み</a></p>
        <p><a href="<?php echo home_url('/'); ?>privacypolicy/">プライバシーポリシー</a></p>
        <p><a href="<?php echo home_url('/'); ?>recruit/">求人情報</a></p>
        <p><a href="<?php echo home_url('/'); ?>faq/">イベント託児Q&A</a></p>
        <p><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></p>
        <p><a href="<?php echo home_url('/'); ?>dowloadform/">資料ダウンロードページ</a></p>
        <p><a href="<?php echo home_url('/'); ?>download/">資料ダウンロードフォーム</a></p>
        <p><a href="<?php echo home_url('/'); ?>link/">関連リンク集</a></p>
    </nav>
</div>

<?php if(is_home()): ?><?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php if(is_page(array('contact'))): ?>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <?php if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
        wpcf7_enqueue_styles();
    }?>
    <script>
        (function($) {
            $(function(){
              $('#zip').keyup(function(){
                AjaxZip3.zip2addr(this, '', 'pref', 'address');
            })
            //checkbox
            $("[id^=accept] input[type='checkbox']").change(function(){
                if($(this).is(":checked")){
                    $(this).next('span').children('.chk_target').addClass("c_on");
                }else{
                    $(this).next('span').children('.chk_target').removeClass("c_on");
                }
            });
            var check_count__def = $("[id^=accept] input[type='checkbox']").length;
            $("#submit input[type='submit']").prop('disabled', true);
            $("[id^=accept] input[type='checkbox']").on('click', function() {
                var check_count = $("[id^=accept] input[type='checkbox']:checked").length;
                if (check_count === check_count__def ){
                    $("#submit input[type='submit']").prop('disabled', false);
                } else {
                    $("#submit input[type='submit']").prop('disabled', true);
                }
            });
        });
        })(jQuery);
    </script>
    <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location.replace('<?php echo esc_url(home_url()) . '/contact/thanks/'; ?>');
    }, false );
    </script>
<?php endif; ?>


</body>
</html>

