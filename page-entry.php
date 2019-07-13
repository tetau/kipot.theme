<?php get_header(); ?>



<main class="md_main page" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="md_page__head">
        <h1 class="fz_28 fw700 md_title"><?php the_title();?></h1>
    </div>

    <div class="md_pCommon contact">
        <div class="md_pCommon__head">
            <div class="l_row mx_1024 pd_side5">
                <div class="fz_15 md_section__summary">
                    <p>詳細が決まっていなくても、お気軽にお問い合わせください。</p>
                    <p>予定日、場所、人数、目的、ご予算など、現段階でわかる範囲のことをお伺いし、ご要望にあったご提案をさせていただきます。</p>
                    <p>お客さまから寄せられたQ & Aを掲載しています。お申し込みの前にこちらもご確認ください。</p>
                    <div class="fz_15 md_sausageBtn pContact_btn"><a href="<?php echo home_url('/'); ?>faq/">Q & A</a></div>
                </div>
                <div class="pEntry entry">
                    <div class="pEntry_head">
                        <h4 class="fz_18 fw700 pEntry_head__ttl"><span>お急ぎの場合にはお電話でもお受けいたします</span></h4>
                        <div class="phone"><a href="tel:0368699117" class="">03-6869-9117</a><p class="fz_13 note">営業時間：平日9:00-17:00</p></div>
                        <div class="email"><a href="mailto:info@ki-pot.com" class="">info@ki-pot.com</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pContact">
            <div class="pContact_form">
                <div class="l_row mx_1024 pd_side5">
                    <h3 class="fz_20 fw700 pContact_form__ttl">お申し込みフォーム</h3>
                    <?php the_content(); ?>
                </div><!-- l_row -->
            </div>
            <div class="pContact_note">
                <div class="l_row mx_1024 pd_side5">
                    <h3 class="fz_16 fw700 pContact_note__ttl">お申し込みの際のご注意</h3>
                    <ul class="fz_14">
                        <li>お申し込み、お問い合わせいただいたお客様の個人情報は、お客様のご同意がない限り、お申し込み、お問い合わせの対応に限って使用いたします。</li>
                        <li>お客様の個人情報のお取り扱いの詳しいご案内は、<a href="<?php echo home_url('/'); ?>privacypolicy/">個人情報保護方針</a>をご覧ください。</li>
                        <li>お申し込み、お問い合わせの内容および繁忙期や諸般の事情等により、回答を差し上げるまでに時間を要する場合がございます。ご了承ください。</li>
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
