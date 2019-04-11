<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php if(is_home()){ echo 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#'; }else{ echo 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#'; } ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width initial-scale=1, user-scalable=yes">
    <?php get_template_part( '_modules_meta' ); ?>
    <?php get_template_part( '_modules_ogp' ); ?>
    <?php wp_deregister_script('jquery'); ?>
    <?php wp_head();?>
    <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
</head>

<body>
    <div class="wrapper" id="top">
        <div class="l_mainVisual">
            <h2 class="l_mainVisual__copy"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv_copy.svg" alt="子どもの未来のために今できることを考える。" width="500"></h2>
        </div>
        <header class="md_header" data-role="header">
            <div class="l_row mx_1366 pd_side">
                <div class="md_header__wrap">
                    <h1 class="md_head__logo">
                        <a href="<?php echo home_url('/'); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_tagline.svg" alt="ママの笑顔が子供の笑顔" width="200">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.svg" alt="キポット" width="200">
                        </a>
                    </h1>
                    <nav class="fz_16 fw700 md_head__navWrap">
                        <ul>
                            <li><a href="#">キポットとは？</a></li>
                            <li><a href="#">イベントの託児</a></li>
                            <li><a href="#">セミナー事業</a></li>
                            <li><a href="#">ちょいジョブ</a></li>
                            <li><a href="#">お問い合わせ</a></li>
                            <li class="fb"><a href="#">Facebook</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>



        <main role="main" class="md_main">

            <div class="md_glnavi__triger" id="drawer_trigger">
                <span></span><span></span><span></span>
            </div>


