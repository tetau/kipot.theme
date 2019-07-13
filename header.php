<!DOCTYPE html>
<html dir="ltr" <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php if(is_home()){ echo 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#'; }else{ echo 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#'; } ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width initial-scale=1, user-scalable=yes">
<?php get_template_part( '_modules_meta' ); ?>
<?php wp_head();?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css?20190713" />


<body>
    <div class="wrapper" id="top">
        <?php if(is_home()) :?>
            <div class="l_mainVisual home">
                <h2 class="l_mainVisual__copy"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mv_copy.svg" alt="子どもの未来のために今できることを考える。" width="500"></h2>
            </div>
        <?php endif; ?>

        <div class="md_header__outer">
            <header class="md_header <?php if(!is_home()){echo 'fixed';}?>" data-role="header" id="fixheader">
                <div class="l_row mx_1366 pd_side">
                    <div class="md_header__wrap">
                        <?php if(is_home()) :?>
                            <h1 class="md_head__logo">
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_tagline.svg" alt="ママの笑顔が子供の笑顔" width="200" class="tagline">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.svg" alt="キポット" width="180" class="logo">
                                </a>
                            </h1>
                        <?php else :?>
                            <h2 class="md_head__logo">
                                <a href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/main_logo.svg" alt="キポット" width="180"class="logo">
                                </a>
                            </h2>
                        <?php endif; ?>
                        <nav class="fz_16 fw700 md_head__navWrap">
                            <ul>
                                <li class="priority1"><a href="<?php echo home_url('/'); ?>about/">キポットとは？</a></li>
                                <li class="priority1"><a href="#">イベントの託児</a></li>
                                <li class="priority2"><a href="#">セミナー事業</a></li>
                                <li class="priority2"><a href="#">ちょいジョブ</a></li>
                                <li class="priority1"><a href="<?php echo home_url('/'); ?>contact/">お問い合わせ</a></li>
                                <li class="fb"><a href="https://www.facebook.com/kipot.ink/" target="new" rel="noopener noreferrer nofollow">Facebook</a></li>
                                <li><div class="md_glnavi__triger" id="drawer_trigger"><span></span><span></span><span></span></div></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>





