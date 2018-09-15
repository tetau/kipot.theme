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
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124844484-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-124844484-1');
    </script>
</head>

<body<?php if(is_page('information')){ echo ' onload="initialize();"'; } ?>>
    <div class="wrapper" id="top">
        <header class="md_header" data-role="header">
            <div class="md_head__navWrap">
                <div class="md_glnavi__triger" id="drawer_trigger">
                    <span></span><span></span><span></span>
                </div>
                <div class="md_glnavi__totop" id="totop">
                    <a href="#contents" class="md_arrow bottom glm"></a>
                </div>
            </div>
            <div class="md_head__ttlWrap">
                <h1 class="fz_15 md_head__ttl<?php if(is_home()){ echo ' home'; } ?>"><a href="<?php echo home_url(); ?>">田辺観光バス<span>Traffic Confort</span></a></h1>
                <div class="md_head__info">
                    <p class="md_head__sns"><a href="https://www.facebook.com/Traffic.Comfort/"><i class="fab fa-facebook-f"></i></a></p>
                    <p class="fz_12 md_head__copy">&copy; Traffic Comfort Inc.</p>
                </div>
            </div>
        </header>
