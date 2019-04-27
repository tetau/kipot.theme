
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

<?php if(is_home()): ?><?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>

<?php if(is_page(array('contact','tour_reservation'))): ?>
    <?php if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
        wpcf7_enqueue_styles();
    }?>
<?php endif; ?>

</body>
</html>

