
</div><!-- .wrapper-->

<footer>
    <div class="md_footer p_60" role="contentinfo">
        <div class="l_row pd_side">
            <div class="md_footer__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_wh.svg" alt="田辺観光バス Traffic Comfort" width="200"></a></div>
            <div class="md_foot__info">
                <h2 class="fz_14 md_foot__companyname">株式会社 Traffic Comfort</h2>
                <p class="fz_12 md_foot__address">〒649‐2201 和歌山県西牟婁郡白浜町堅田2434‐1</p>
                <div class="md_foot__contact">
                    <p class="fz_15 md_foot__contactLink"><a href="tel:0739-43-3363" class="col">TEL 0739-43-3363</a></p>
                    <p class="fz_15 md_foot__contactLink"><span class="col">FAX 0739-43-1317</span></p>
                    <p class="fz_15 md_foot__contactLink"><a href="mailto:info@tk-bus.jp" class="col">info@tk-bus.jp</a></p>
                    <p class="fz_15 md_foot__contactLink"><a href="<?php echo home_url(); ?>/contact/" class="col">お問い合わせ窓口</a></p>
                </div>
            </div>
        </div>
        <div class="md_login"><a href="<?php echo wp_login_url(); ?>"><i class="fas fa-sign-in-alt"></i></a></div>
    </div>
</footer>

<!-- .sidr-->
<div class="md_drawer__cover" id="drawer_cover"></div>
<div id="drawer_menu" class="md_drawer__menu">
    <div class="md_drawer__contents">
        <div class="sidr_slide__close"><span></span><span></span></div>
        <div class="fz_15 md_slide__totop"><a href="/" class="md_arrow left">トップへ戻る</a></div>
        <div class="md_slide__nav">
            <ol class="md_slide__navColumn">
                <li class="innr lrg">
                    <a href="<?php echo home_url(); ?>/charter/" class="num_link">
                        <h4 class="fz_36 ttl"><span class="gf_crimson num">01</span><em>バスを借りる</em></h4>
                    </a>
                    <ul class="fz_15 list">
                        <li><a href="<?php echo home_url(); ?>/charter/?id=lineup">バスラインナップ</a></li>
                        <li><a href="<?php echo home_url(); ?>/charter/bus_charge/">料金について</a></li>
                        <li><a href="<?php echo home_url(); ?>/charter/?id=performance">こんな使い方はいかがでしょう</a></li>
                        <li><a href="<?php echo home_url(); ?>/charter/?id=destination">バスで行くオススメの目的地</a></li>
                        <li><a href="<?php echo home_url(); ?>/charter/safe_and_secure/">安心・安全への取り組み</a></li>
                        <li><a href="<?php echo home_url(); ?>/charter/bus_flow/">ご利用の流れ</a></li>
                    </ul>
                </li>
                <li class="innr lrg">
                    <a href="<?php echo home_url(); ?>/tour/" class="num_link">
                        <h4 class="fz_36 ttl"><span class="gf_crimson num">02</span><em>たな缶ツアー</em></h4>
                    </a>
                    <ul class="fz_15 list">
                        <li><span>募集中のバスツアー</span></li>
                        <!-- <li><span>過去のバスツアーのご報告</span></li>
                        <li><span>田辺観光バスのバスツアー</span></li> -->
                    </ul>
                </li>
                <li class="innr small">
                    <a href="<?php echo home_url(); ?>/journey/" class="num_link">
                        <h4 class="fz_28 ttl"><span class="gf_crimson num small">03</span><em>旅のサンプル帖</em></h4>
                    </a>
                </li>
                <li class="innr small">
                    <a href="https://onsenbus.jp" class="num_link">
                        <h4 class="fz_28 ttl"><span class="gf_crimson num small">04</span><em>おんせんバス</em></h4>
                    </a>
                </li>
                <li class="innr small">
                    <a href="<?php echo home_url(); ?>/information/" class="num_link">
                        <h4 class="fz_28 ttl"><span class="gf_crimson num small">05</span><em>会社概要</em></h4>
                    </a>
                </li>
                <li class="innr small">
                    <a href="<?php echo home_url(); ?>/contact/" class="num_link">
                        <h4 class="fz_28 ttl"><span class="gf_crimson num small">06</span><em>お問い合わせ</em></h4>
                    </a>
                </li>
                <li class="innr small">
                    <a href="<?php echo home_url(); ?>/recruit/" class="num_link">
                        <h4 class="fz_28 ttl"><span class="gf_crimson num small">07</span><em>採用情報</em></h4>
                    </a>
                </li>
            </ol>
        </div>
        <div class="fz_13 md_slide__navSub">
            <a href="<?php echo home_url(); ?>/privacypolicy/">個人情報保護方針</a>
        </div>
        <div class="fz_13 md_slide__navSns">
            <a href="https://www.facebook.com/Traffic.Comfort/"><i class="fab fa-facebook-f"></i>Facebookでいいね！して最新の情報を受け取ろう。</a>
        </div>
    </div>
</div>

<!-- .sidr-->

<?php wp_footer(); ?>

<?php if(is_home()): ?>

<?php endif; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sidr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.touchwipe.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>


<?php if(is_page(array('contact','tour_reservation'))): ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
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
        $("#accept input[type='checkbox']").change(function(){
            if($(this).is(":checked")){
                $(this).next('span').children('.chk_target').addClass("c_on");
            }else{
                $(this).next('span').children('.chk_target').removeClass("c_on");
            }
        });
    });
})(jQuery);
</script>
<?php endif; ?>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
    FB.AppEvents.logPageView();
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>
