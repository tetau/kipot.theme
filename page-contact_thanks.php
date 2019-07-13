<?php get_header(); ?>

<main class="md_main page" role="main">
    <div class="md_pCommon error">
        <h1 class="fz_28 fw700 page_error__title"><span><?php the_title();?></span></h1>
        <div class="l_row mx_1024 pd_side8">
            <div class="fz_15 md_section__summary">
                <p>お問い合せいただきありがとうございました。</p>
                <p>ご送信いただいた内容を確認したうえで、弊社担当者より折り返しご連絡差し上げますので、今しばらくお待ちください。</p>
                <p>3営業日以上経過しても弊社より連絡ない場合はシステムの不具合も考えられますので、大変お手数ですがinfo@ki-pot.comでお問い合わせくださいませ。</p>
                <p>また、メール設定やセキュリティ設定などで迷惑メールとして処理される可能性がございます。迷惑メールフォルダ等にメールが届いていないかご確認ください。</p>
                <p><a href="<?php echo home_url('/'); ?>" class="totop">トップへ戻る <i class="fas fa-arrow-right"></i></a></p>
            </div>
        </div>
    </div>
</main><!-- contents_wrap -->

<?php get_footer(); ?>
