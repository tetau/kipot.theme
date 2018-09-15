<?php
    if(!empty($post->post_content)){
        if(has_excerpt()){
            $desc = $post->post_excerpt;
        } else{
            $desc = strip_tags(apply_filters('the_content', $post->post_content));
        }
    }else{
        $desc = get_bloginfo('description');
    }
    $desc = str_replace(array("&nbsp;","\r\n","\r","\n"," ","　","   "), '', $desc );
    $current_url = esc_url( home_url() . $_SERVER['REQUEST_URI'] );
?>
<?php if( is_home()):?>
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="<?php echo $current_url  ?>" />
<?php elseif(is_singular( 'journey' )) : ?>
    <?php
    $postid = get_the_id();
    $post_thumbnail_id = get_post_thumbnail_id(get_the_id());
    $image = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
    $attachments = get_children("post_parent=$postid&post_type=attachment&post_mime_type=image&numberposts=4&order=asc");
    $template_uri = get_template_directory_uri();
        if ($attachments){
            if (has_post_thumbnail()){
                $post_thumbnail_id = get_post_thumbnail_id();
                $image = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
                echo '<meta property="og:image" content="' . esc_attr($image[0]) . '">'."\n";
            } else {
                if (is_array($attachments) ){
                    $i = 0;
                    $count = 4;
                    foreach($attachments as $attachment) :
                        if($i >= $count){
                            break;
                        } else {
                        $thumbM = wp_get_attachment_image_src($attachment->ID , 'full');
                        echo '<meta property="og:image" content="' . $thumbM[0] . '" />'."\n";
                        $i++;
                        }
                    endforeach;
                }
            }
        } else {
            echo '<meta property="og:image" content="' . esc_html($template_uri) . '/assets/images/ogp1200x630.jpg" />'."\n";
        }
    ?>
<meta property="og:url" content="<?php echo $current_url  ?>" />
<?php elseif( is_post_type_archive( 'tour' )):?>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $current_url  ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp_tour1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<?php elseif(is_tax( array('tourcat','tour_destination','tourtag') ) ) : ?>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $current_url  ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp_tour1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<?php elseif( is_singular( 'tour' )):?>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $current_url  ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp_tour1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<?php else: ?>
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo $current_url  ?>" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp1200x630.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<?php endif; ?>

<?php if( is_home()):?>
<meta property="og:title" content="小型バスから大型バスまで、送迎・貸し切りバスなら白浜の田辺観光バス(株式会社トラフィックコンフォート)" />
<meta property="og:description" content="和歌山県白浜町の田辺観光バス・TCトラベル（株式会社トラフィックコンフォート）の公式webサイト。貸切バス、バスツアー、航空券や新幹線、宿泊施設などの旅行手配はお任せください。バスでの送迎、少人数の個人・家族旅行から町内会など各種団体・社員旅行まで幅広くご相談いただけます。白浜・田辺発着のバスツアーはもちろん、白浜・熊野古道・串本・勝浦などの紀南の旅行プランも。ご相談・お見積もりは専門の旅行デスクが無料にて承ります。"/>
<?php elseif( is_singular( 'journey' )):?>
<meta property="og:title" content="<?php the_title();?>" />
<meta property="og:description" content="<?php echo mb_substr($desc, 0, 160); ?>"/>
<?php elseif( is_post_type_archive( 'tour' )):?>
<meta property="og:title" content="田辺観光バスのバスツアー「たな缶ツアー」" />
<meta property="og:description" content="魅力いっぱいのツアーを気軽に楽しめる田辺観光バスのバスツアー「たな缶ツアー」。企画担当者のビーグル犬、たな犬がグイグイ引率してくれます。旅の楽しみのグルメもいっぱい。お子様にも人気で、リピート続出。安全で快適なバスに乗って参加しましょう。"/>
<?php elseif(is_tax( array('tourcat','tour_destination','tourtag') ) ) : ?>
<?php $term_object = get_queried_object();?>
<meta property="og:title" content="<?php echo esc_attr($term_object->name);?> 田辺観光バスのバスツアー「たな缶ツアー」" />
<meta property="og:description" content="<?php echo esc_attr($term_object->name);?>一覧ページ。魅力いっぱいのツアーを気軽に楽しめる田辺観光バスのバスツアー「たな缶ツアー」。企画担当者のビーグル犬、たな犬がグイグイ引率してくれます。旅の楽しみのグルメもいっぱい。お子様にも人気で、リピート続出。安全で快適なバスに乗って参加しましょう。"/>
<?php elseif( is_singular( 'tour' )):?>
<meta property="og:title" content="「たな缶ツアー」 <?php the_title();?>" />
<meta property="og:description" content="<?php the_title();?> <?php if(get_field('tour_sales')): ?><?php echo stripslashes(strip_tags(strip_shortcodes(mb_substr(get_field('tour_sales'), 0, 100))));?><?php endif; ?>"/>
<?php else: ?>
<meta property="og:title" content="<?php bloginfo('name'); ?> <?php the_title(); ?>" />
<meta property="og:description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>"/>
<?php endif; ?>
<meta property="og:site_name" content="田辺観光バス Traffic Confort" />
<meta property="fb:app_id" content="293819258070572" />


