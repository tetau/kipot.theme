<?php get_header(); ?>



<main class="md_main page" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="md_page__head">
        <h1 class="fz_28 fw700 md_title"><?php the_title();?></h1>
    </div>

    <div class="md_pCommon contact">
        <div class="md_pCommon__head">
            <div class="l_row mx_1024 pd_side5">
                <div class="fz_15 md_section__summary tac">
                    <p>下記のフォームに必要項目を入力の上、「お問い合わせを送信する」ボタンを押してください。後ほど弊社よりお問合せに対するご回答をお送りいたします。なお、内容によっては、ご連絡までお時間がかかるものがございますので、あらかじめご了承ください。</p>
                </div>
            </div>
        </div>
        <div class="pContact">
            <div class="l_row mx_1024 pd_side5">
                <div class="pContact_intro">
                    <section class="column">
                        <h3 class="fz_20 fw700 pContact_intro__ttl">お問い合わせの前に</h3>
                        <div class="fz_15 pContact_intro__summary">
                            <p>お客さまから寄せられたよくあるご質問を掲載しています。お問い合わせ前にご確認ください。</p>
                        </div>
                        <div class="fz_15 md_sausageBtn pContact_btn"><a href="<?php echo home_url('/'); ?>faq/">Q & A</a></div>
                    </section>
                    <section class="column">
                        <h3 class="fz_20 fw700 pContact_intro__ttl">イベント託児のお申し込みはこちらから</h3>
                        <div class="fz_15 md_sausageBtn pContact_btn"><a href="<?php echo home_url('/'); ?>entry/">イベント託児のお申し込み</a></div>
                    </section>
                </div>
            </div><!-- l_row -->
            <div class="pContact_form">
                <div class="l_row mx_1024 pd_side5">
                    <h3 class="fz_20 fw700 pContact_form__ttl">お問い合わせフォーム</h3>
                    <?php the_content(); ?>
                </div><!-- l_row -->
            </div>
            <div class="pContact_note">
                <div class="l_row mx_1024 pd_side5">
                    <h3 class="fz_16 fw700 pContact_note__ttl">お問い合わせの際のご注意</h3>
                    <ul class="fz_14">
                        <li>お問い合わせいただいたお客様の個人情報は、お客様のご同意がない限り、お問い合わせの対応に限って使用いたします。</li>
                        <li>お客様の個人情報のお取り扱いの詳しいご案内は、<a href="<?php echo home_url('/'); ?>privacypolicy/">個人情報保護方針</a>をご覧ください。</li>
                        <li>お問い合わせの内容および繁忙期や諸般の事情等により、回答を差し上げるまでに時間を要する場合がございます。ご了承ください。</li>
                        <li>Webフォームからお問い合わせにつきましては、原則としてメールでの対応とさせていただきますが内容によりお電話でお答えさせて頂く場合もございます。</li>
                        <li>システムの不具合等でフォームより送信ができない場合は、大変お手数ではございますが、info@ki-pot.comまで直接ご連絡下さいませ。</li>
                    </ul>
                </div><!-- l_row -->
            </div>
        </div>
    </div>
<?php endwhile; ?>

</main><!-- contents_wrap -->

<?php get_footer(); ?>
