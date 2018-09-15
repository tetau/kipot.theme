<?php $keyword_default = '田辺観光バス,貸切バス,旅行代理店,旅行手配,TrafficComfort,白浜' ; ?>
<?php $title_default = '小型バスから大型バスまで、送迎・貸し切りバスなら白浜の田辺観光バス' ; ?>


<?php
if(!empty($post->post_content)){
    if(has_excerpt()){
        $desc = $post->post_excerpt;
    } else{
        $desc = $post->post_content;
    }
}else{
    $desc = get_bloginfo('description');
}
$desc = stripslashes(strip_tags(strip_shortcodes($desc)));
$desc = str_replace(array("\r\n","\r","\n"," ","　"," "), '', $desc );
$desc = trim($desc);
?>
<meta name="keywords" content="<?php echo $keyword_default ; ?>" />
<?php if (is_home() || is_front_page()) : ?>
<meta name="description" content="和歌山県白浜町の田辺観光バス・TCトラベル（株式会社トラフィックコンフォート）の公式webサイト。貸切バス、バスツアー、航空券や新幹線、宿泊施設などの旅行手配はお任せください。バスでの送迎、少人数の個人・家族旅行から町内会など各種団体・社員旅行まで幅広くご相談いただけます。白浜・田辺発着のバスツアーはもちろん、白浜・熊野古道・串本・勝浦などの紀南の旅行プランも。ご相談・お見積もりは専門の旅行デスクが無料にて承ります。" />
<title><?php bloginfo('name'); ?> | <?php echo $title_default ; ?></title>
<?php elseif( is_singular( 'journey' )):?>
<meta name="description" content="<?php the_title();?> <?php echo mb_substr($desc, 0, 160); ?>" />
<title><?php the_title();?> | <?php bloginfo('name'); ?></title>

<?php elseif( is_post_type_archive( 'tour' )):?>
<meta name="description" content="魅力いっぱいのツアーを気軽に楽しめる田辺観光バスのバスツアー「たな缶ツアー」。企画担当者のビーグル犬、たな犬がグイグイ引率してくれます。旅の楽しみのグルメもいっぱい。お子様にも人気で、リピート続出。安全で快適なバスに乗って参加しましょう。和歌山県・白浜町から出発し、朝来（上富田）、田辺、芳養、みなべなどに停車。全ツアー出発保証。お土産やお菓子・コーヒー付き。全てのツアーに旅行保険も付き。" />
<title>田辺観光バスのバスツアー「たな缶ツアー」 | <?php bloginfo('name'); ?></title>

<?php elseif(is_tax( array('tourcat','tour_destination','tourtag') ) ) : ?>
    <?php $term_object = get_queried_object();?>
    <meta name="description" content="<?php echo esc_attr($term_object->name);?>一覧ページ。魅力いっぱいのツアーを気軽に楽しめる田辺観光バスのバスツアー「たな缶ツアー」。企画担当者のビーグル犬、たな犬がグイグイ引率してくれます。旅の楽しみのグルメもいっぱい。お子様にも人気で、リピート続出。安全で快適なバスに乗って参加しましょう。和歌山県・白浜町から出発し、朝来（上富田）、田辺、芳養、みなべなどに停車。全ツアー出発保証。お土産やお菓子・コーヒー付き。全てのツアーに旅行保険も付き。" />
    <title><?php echo esc_attr($term_object->name);?> 田辺観光バスのバスツアー「たな缶ツアー」| <?php bloginfo('name'); ?></title>

<?php elseif( is_singular( 'tour' )):?>
<meta name="description" content="<?php the_title();?> <?php if(get_field('tour_sales')): ?><?php echo stripslashes(strip_tags(strip_shortcodes(mb_substr(get_field('tour_sales'), 0, 160))));?><?php endif; ?>" />
<title>「たな缶ツアー」 <?php the_title();?> | <?php bloginfo('name'); ?></title>


<?php else: ?>
<meta name="description" content="<?php bloginfo('name'); ?>の<?php the_title(); ?>ページです。<?php echo mb_substr($desc, 0, 160); ?>" />
<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
<?php endif; ?>
