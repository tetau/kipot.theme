<?php get_header(); ?>


<main class="contents_wrap" role="main">

    <div class="pg_common__head p_60">
        <div class="innr">
            <div class="pg_common__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" width="300" alt="田辺観光バス"></div>
            <h2 class="fz_36 fw700 pg_common__ttl responsive_n">お問い合わせ</h2>
        </div>
    </div>

    <div class="pg_contact p_60">
        <div class="innr">
            <div class="pg_contact__wrap">
                <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Contact Us</em>お問い合わせ窓口</h2>
                <ul class="contact__list">
                    <li>
                        <p class="fz_20 fw700 contact__listTtl">お電話でのお問い合わせ</p>
                        <div class="fz_28 fw700 contact__listTxt">
                            <a href="tel:0739433363">0739-43-3363</a>
                            <p class="fz_13 fw400 contact__listNote">年中無休 営業時間 9:00 ~ 18:00</p>
                        </div>
                    </li>
                    <li>
                        <p class="fz_20 fw700 contact__listTtl">Eメールでのお問い合わせ</p>
                        <div class="fz_28 fw700 contact__listTxt"><a href="mailto:info@tk-bus.jp">info@tk-bus.jp</a></div>
                    </li>
                    <li>
                        <p class="fz_20 fw700 contact__listTtl">FAXでのお問い合わせ</p>
                        <div class="fz_28 fw700 contact__listTxt">
                            <p>0739-43-1317</p>
                            <p class="fz_13 fw400 contact__listNote">ご質問シートの<a href="<?php echo get_template_directory_uri(); ?>/assets/images/contact.pdf">ダウンロード</a></p>
                        </div>
                    </li>
                    <li>
                        <p class="fz_20 fw700 contact__listTtl">ご来店でのお問い合わせ</p>
                        <div class="fz_16 fw700 contact__listTxt">
                            <p>〒649‐2201 <br>和歌山県西牟婁郡白浜町堅田2434‐1</p>
                            <p class="fz_13 fw400">年中無休 営業時間 9:00 ~ 18:00</p>
                            <a href="https://goo.gl/maps/G3fA9XUSFYR2" class="googlemap" target="_blank" rel="nofollow">Google Map</a>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="pg_contact grey p_60">
        <div class="innr">
            <div class="pg_contact__wrap">
                <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Contact Form</em>お問い合わせフォーム</h2>
                <p class="fz_14 pg_contact__note">
                下記のフォームに必要項目を入力の上、「お問い合わせを送信する」ボタンを押してください。<br>なお、内容によっては、ご連絡までお時間がかかるものがございますので、あらかじめご了承ください。</p>
                <?php if(have_posts()) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="pg_contact__form">
                        <?php remove_filter('the_content', 'wpautop'); ?>
                        <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="pg_contact__attention">
                    <h3 class="fz_18 fw700 pg_contact__attentionTtl">お問い合わせの際のご注意</h3>
                    <ul class="fz_13">
                        <li>お問い合わせいただいたお客様の個人情報は、お客様のご同意がない限り、お問い合わせの対応に限って使用いたします。</li>
                        <li>お客様の個人情報のお取り扱いの詳しいご案内は、<a href="/privacypolicy/">個人情報保護方針</a>をご覧ください。</li>
                        <li>お問い合わせの内容および繁忙期や諸般の事情等により、回答を差し上げるまでに時間を要する場合がございます。ご了承ください。</li>
                        <li>Webフォームからお問い合わせにつきましては、原則としてメールでの対応とさせていただきますが内容によりお電話でお答えさせて頂く場合もございます。</li>
                        <li>システムの不具合等でフォームより送信ができない場合は、大変お手数ではございますが、info@tk-bus.jp まで直接ご連絡下さいませ。</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main><!-- contents_wrap -->


<?php get_footer(); ?>
