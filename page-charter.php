<?php get_header(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sliderPro.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider-pro.min.css" />

<main class="contents_wrap" role="main">

    <div class="md_mv__wrap">
        <figure class="md_mv bus">
            <figcaption class="md_mv__caption bus">いつのまにか、<br>寝ちゃってた。</figcaption>
            <span class="md_mv__safty"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/safty_mark.svg" width="50" alt="貸切バス事業者安全性評価認定制度認定事業者"></span>
        </figure>
    </div>

    <div class="md_intro__wrap">
        <div class="innr p_60">
            <h3 class="fz_42 fw700 md_intro__read">夢でも旅の続きを。</h3>
            <p class="fz_18 fw700 md_intro__description">いつのまにか寝ちゃってた。<br>ワクワクする体験をして、<br>美味しいもの食べて、<br>いっぱい買い物もして。<br>お腹も頭も心も満腹。<br>いつもの毎日に、バスの旅というエッセンスを。<br>安心できるバスで、旅に出よう。</p>
        </div>
    </div>

    <nav class="md_page__nav page p_60">
        <div class="l_row">
            <ul class="md_page__navList">
                <li>
                    <a href="#lineup" class="innr">
                        <figure class="md_page__navImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav14.svg" width="300" alt="バスの種類"></figure>
                        <h3 class="fz_22 fw700 md_page__navTtl">バスの種類</h3>
                    </a>
                </li>
                <li>
                    <a href="#charge" class="innr">
                        <figure class="md_page__navImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav15.svg" width="300" alt="料金について"></figure>
                        <h3 class="fz_22 fw700 md_page__navTtl">料金について</h3>
                    </a>
                </li>
                <li>
                    <a href="#performance" class="innr">
                        <figure class="md_page__navImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav16.svg" width="300" alt="使い方例"></figure>
                        <h3 class="fz_22 fw700 md_page__navTtl">使い方例</h3>
                    </a>
                </li>
                <li>
                    <a href="#safety" class="innr">
                        <figure class="md_page__navImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav18.svg" width="300" alt="安心安全の取組"></figure>
                        <h3 class="fz_22 fw700 md_page__navTtl">安心安全の取組</h3>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url(); ?>/charter/bus_flow/" class="innr">
                        <figure class="md_page__navImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav17.svg" width="300" alt="ご利用の流れ"></figure>
                        <h3 class="fz_22 fw700 md_page__navTtl">ご利用の流れ</h3>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="md_separater charter"></div>

    <section class="pg_charter__section p_60 lineup" id="lineup">
        <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Line up</em>バスの種類</h2>
        <div class="l_row">
            <ul class="pg_charter__lineup">
<!--                 <li class="column flex">
                    <div class="l_imgwrap">
                        <a href="bus_salonlrg/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents06.jpg" alt="大型サロンバス"></a>
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_28 fw700 lineup_ttl"><em>車内で賑やかに楽しむなら、サロンタイプ。</em>大型サロンバス</h3>
                        <div class="fz_14 lineup_summary">
                            <p>~45名</p>
                            <p>11列45座席正シート車。後部13席が回転し、サロンタイプとしてご利用いただけます。テーブルを囲んでお互いの顔をみながら、ワイワイ盛り上がれるのがサロンタイプのよさ。社員旅行や各種団体旅行などでゲームやワークショップなどのイベントを行いたい時はもちろん、親睦を深めたい時に選びたいバスです。</p>
                        </div>
                        <div class="lineup_link">
                            <a href="bus_salonlrg/" class="fz_13 list"><span>座席表</span><span>車内装備</span></a>
                            <div class="fz_15 md_page__navLink left detail">
                                <a href="bus_salonlrg/" class="md_arrow__btn">詳しく見る</a>
                            </div>
                        </div>
                    </div>
                </li> -->
                <li class="column">
                    <div class="l_imgwrap">
                        <a href="bus_salonlrg/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents06.jpg" alt="大型サロンバス"></a>
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_22 fw700 lineup_ttl">大型サロンバス</h3>
                        <p class="fz_15 lineup_size">~45名</p>
                        <div class="lineup_link">
                            <a href="bus_salonlrg/" class="fz_12 list"><span>座席表</span><span>車内装備</span></a>
                            <div class="fz_15 md_page__navLink"><a href="bus_salonlrg/" class="md_arrow__btn">詳しく見る</a></div>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <div class="l_imgwrap">
                        <a href="bus_lrg/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents03.jpg" alt="大型"></a>
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_22 fw700 lineup_ttl">大型バス</h3>
                        <p class="fz_15 lineup_size">~49名</p>
                        <div class="lineup_link">
                            <a href="bus_lrg/" class="fz_12 list"><span>座席表</span><span>車内装備</span></a>
                            <div class="fz_15 md_page__navLink"><a href="bus_lrg/" class="md_arrow__btn">詳しく見る</a></div>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <div class="l_imgwrap">
                        <a href="bus_med/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents04.jpg" alt="中型サロンバス"></a>
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_22 fw700 lineup_ttl">中型サロンバス</h3>
                        <p class="fz_15 lineup_size">~27名</p>
                        <div class="lineup_link">
                            <a href="bus_med/" class="fz_12 list"><span>座席表</span><span>車内装備</span></a>
                            <div class="fz_15 md_page__navLink"><a href="bus_med/" class="md_arrow__btn">詳しく見る</a></div>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <div class="l_imgwrap">
                        <a href="bus_micro/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents05.jpg" alt="マイクロバス"></a>
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_22 fw700 lineup_ttl">マイクロバス</h3>
                        <p class="fz_15 lineup_size">~21名</p>
                        <div class="lineup_link">
                            <a href="bus_micro/" class="fz_12 list"><span>座席表</span><span>車内装備</span></a>
                            <div class="fz_15 md_page__navLink"><a href="bus_micro/" class="md_arrow__btn">詳しく見る</a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

        <section class="pg_charter__section p_60 cost" id="charge">
            <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Cost</em>料金について</h2>
            <p class="fz_15 pg_charter__summary">貸切バスの料金は、近畿圏で設定されています。</p>
            <ul class="pg_charter__cost">
                <li class="column">
                    <div class="l_imgwrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav19.svg" width="300" alt="かかった時間">
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_16 fw700 cost_ttl">かかった時間<span>×</span>時間あたり運賃</h3>
                    </div>
                </li>
                <li class="column">
                    <div class="l_imgwrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav20.svg" width="300" alt="かかった時間">
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_16 fw700 cost_ttl">走った距離<span>×</span>キロ当たり運賃</h3>
                    </div>
                </li>
                <li class="column">
                    <div class="l_imgwrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav21.svg" width="300" alt="かかった時間">
                    </div>
                    <div class="l_txtwrap">
                        <h3 class="fz_16 fw700 cost_ttl">かかった時間<span>×</span>時間あたり運賃</h3>
                    </div>
                </li>
            </ul>
            <div class="fz_16 md_more cost_more">
                <a href="bus_charge/" class="md_arrow right long">料金について</a>
            </div>
        </section>

        <section class="pg_charter__section p_60 performance" id="performance">
            <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Performance</em>こんな使い方はいかがでしょうか？</h2>

            <script>
                (function($) {
                    $(function(){
                        $( '#thumb-h' ).sliderPro({
                            width: '100%',
                            aspectRatio: -1,
                            mageScaleMode:'cover',
                            forceSize: 'fullWidth',
                            arrows: false,
                            buttons: false,
                            autoplay:false,
                            autoplayDelay: 7000,
                            loop: true,
                            fade: false,
                            touchSwipe:true,
                            autoHeight: true,
                            updateHash: false,
                            visibleSize: 'auto',
                            slideDistance:0,
                            thumbnailWidth: 220,
                            thumbnailHeight: 265,
                            breakpoints: {
                                979: {
                                    thumbnailWidth: 160,
                                    thumbnailHeight: 160,
                                },
                                600: {
                                    thumbnailWidth: 120,
                                    thumbnailHeight: 120,
                                },
                            }
                        });
                    });
                })(jQuery);
            </script>

        <?php
        $args = array(
            'post_type'=>'journey',
            'posts_per_page' => 7,
            'order' => 'DESC',
            'orderby' => 'rand',
            'post_status'=> 'publish',
            'ignore_sticky_posts'=> 1,
        );
        $journey_post = get_posts( $args );
        ?>

        <?php if($journey_post):?>
            <div class="pg_charter__planWrap">
                <div id="thumb-h" class="pg_charter__plan">
                    <div class="sp-slides pg_charter__planInner">
                        <?php foreach($journey_post as $post) : setup_postdata( $post );?>
                            <div class="sp-slide">
                                <article class="pg_charter__slide">
                                    <div class="l_imgwrap">
                                     <?php
                                     if(has_post_thumbnail()) {
                                        echo '<a href="' . get_permalink() . '">';
                                        the_post_thumbnail('original_thumbsq_lrg', array('alt' =>$title, 'title' => $title, 'class' => 'pg_charter__slideImg'));
                                        the_post_thumbnail('original_16-9__mid', array('alt' =>$title, 'title' => $title, 'class' => 'pg_charter__slideImgsp'));
                                        echo '</a>';
                                    }
                                    ?>

                                    </div>
                                    <div class="l_txtwrap">
                                        <h3 class="fz_24 fw700 slide_ttl"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <?php if(has_term('','journeycat')): ?>
                                            <div class="slide_tag">
                                                <?php
                                                $journey_terms = wp_get_object_terms($post->ID, array( 'journeycat'), $args );
                                                if(!empty($journey_terms)){
                                                    if(!is_wp_error( $journey_terms )){
                                                        foreach($journey_terms as $term){
                                                            echo '<span>'.$term->name.'</span>';
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if(get_field('journey_excerpt')): ?>
                                            <p class="fz_15 slide_summary">
                                                <?php
                                                $content = mb_substr(strip_tags(get_field('journey_excerpt')),0,120,'utf-8').'…';
                                                echo $content;
                                                ?>
                                            </p>
                                        <?php endif; ?>
                                    <!-- <div class="slide_price">
                                        <span class="fz_15 ttl">参考料金：お一人</span><span class="fz_22 price">35,000円</span>
                                    </div> -->
                                    <div class="fz_14 md_page__navLink left"><a href="<?php the_permalink();?>" class="md_arrow__btn">詳しく見る</a></div>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
                <div class="sp-thumbnails">
                    <?php foreach($journey_post as $post) : setup_postdata( $post );?>
                        <div class="sp-thumbnail">
                            <div class="pg_charter__thumbnail">
                                <?php
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail('original_thumbsq_lrg', array('alt' =>$title, 'title' => $title, 'class' => 'slide_thumb__img'));
                                }
                                ?>
                                <?php if(get_field('journey_thumbtitle')): ?>
                                    <p class="fz_15 fw700 slide_thumb__ttl"><?php the_field('journey_thumbtitle'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>

        </section>


        <section class="pg_charter__destination" id="destination">
            <h2 class="fz_28 fw700 destination_ttl">バスで行くオススメの目的地</h2>
            <p class="fz_15 destination_summary">日本全国、バスで行けないところはありません。<br>かと言って移動が長すぎるのも考えもの。<br>バスで移動するのがオススメできるエリアをご紹介します。</p>
            <div class="fz_12 destination_point">
                <span class="area day1">日帰りエリア</span>
                <span class="area day2">1泊2日エリア</span>
                <span class="area day3">2泊3日エリア</span>
            </div>
        </section>
        <section class="pg_charter__plus p_60">
            <div class="innr">
                <figure class="pg_charter__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gl_nav03.svg" width="200" alt="">
                </figure>
                <div class="l_txtwrap">
                    <h2 class="fz_28 fw700 plus_ttl">バス以外もお任せ下さい。<em>航空機や新幹線などの手配もいたします。</em></h2>
                    <p class="fz_15">バスを使うのか、飛行機の方が良いのか、それも決めずにご相談いただいて大丈夫です。ご要望にもっとも合うプランをご提案させていただきます。</p>
                    <!-- <p class="fz_14 fw700 plus_link"><a href="#" class="md_anchor__link">団体旅行について</a></p> -->
                </div>
            </div>
        </section>


        <section class="pg_charter__section p_60 safety" id="safety">
            <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Safe and Secure environment</em>安心・安全への取り組み<span class="subttl">安心の理由 その1</span></h2>
            <ul class="pg_charter__safety">
                <li class="column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents10.jpg" alt="安全性評価認定制度">
                    <h3 class="fz_22 safety_ttl"><a href="<?php echo home_url(); ?>/safe_and_secure/?id=s01"><span class="gf_crimson num">01</span><strong>安全性評価認定制度</strong></a></h3>
                    <div class="safety_summary">
                        <p class="fz_14">登録すれば簡単に通る認定制度とは違い、実際に会社に訪問して実態をみられ、また毎年更新しなければならない、比較的厳しい認定制度です。</p>
                        <div class="fz_16 md_summary__more">
                            <a href="<?php echo home_url(); ?>/safe_and_secure/?id=s01" class="md_arrow right short"></a>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents08.jpg" alt="安全管理規程">
                    <h3 class="fz_22 safety_ttl"><a href="<?php echo home_url(); ?>/safe_and_secure/?id=s02"><span class="gf_crimson num">02</span><strong>安全管理規程</strong></a></h3>
                    <div class="safety_summary">
                        <p class="fz_14">国土交通省が定める安全管理規定を田辺観光バスでも定めています。</p>
                        <div class="fz_16 md_summary__more">
                            <a href="<?php echo home_url(); ?>/safe_and_secure/?id=s02" class="md_arrow right short"></a>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents07.jpg" alt="事故対策マニュアル">
                    <h3 class="fz_22 safety_ttl"><a href="<?php echo home_url(); ?>/safe_and_secure/?id=s03"><span class="gf_crimson num">03</span><strong>事故対策マニュアル</strong></a></h3>
                    <div class="safety_summary">
                        <p class="fz_14">万が一のことが起こった際の対応を明記した対策マニュアルを、全運転士・搭乗員に徹底しています。</p>
                        <div class="fz_16 md_summary__more">
                            <a href="<?php echo home_url(); ?>/safe_and_secure/?id=s03" class="md_arrow right short"></a>
                        </div>
                    </div>
                </li>
                <li class="column">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_charter__contents09.jpg" alt="運転手の12か条">
                    <h3 class="fz_22 safety_ttl"><a href="<?php echo home_url(); ?>/safe_and_secure/?id=s04"><span class="gf_crimson num">04</span><strong>運転手の12か条</strong></a></h3>
                    <div class="safety_summary">
                        <p class="fz_14">運転士でもある代表取締役が自分の経験を生かして作成した運転手の12か条はお客様の快適な旅のために、徹底しています。</p>
                        <div class="fz_16 md_summary__more">
                            <a href="<?php echo home_url(); ?>/safe_and_secure/?id=s04" class="md_arrow right short"></a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="fz_16 md_more">
                <a href="<?php echo home_url(); ?>/safe_and_secure/" class="md_arrow right long">もっと詳しく</a>
            </div>
<!--         <div class="pg_charter__safetyMore">
            <a href="/quality/">
                <h3 class="subttl"><span class="fz_18">安心の理由 その2</span><strong class="fz_30 gf_crimson">TANABE KANKO QUOLITY</strong></h3>
            </a>
        </div> -->
    </section>

<!--     <section class="pg_charter__section p_60 flow" id="flow">
        <h2 class="fz_28 fw700 pg_section__subttl"><em class="gf_crimson">Service flow</em>貸切バス ご利用の流れ</h2>
        <ol class="pg_charter__flow">
            <li><span class="gf_crimson num">1</span><strong class="fz_16">ご相談</strong></li>
            <li><span class="gf_crimson num">2</span><strong class="fz_16">ご提案・お見積もり</strong></li>
            <li><span class="gf_crimson num">3</span><strong class="fz_16">お打ち合わせ・ご予約</strong></li>
            <li><span class="gf_crimson num">4</span><strong class="fz_16">お支払い</strong></li>
            <li><span class="gf_crimson num">5</span><strong class="fz_16">事前のご連絡</strong></li>
            <li><span class="gf_crimson num">6</span><strong class="fz_16">ご利用当日</strong></li>
        </ol>
        <div class="fz_16 md_more">
            <a href="<?php echo home_url(); ?>/charter/bus_flow/" class="md_arrow right long">もっと詳しく</a>
        </div>
    </section> -->

    <section class="pg_charter__section p_60 reservation">
        <div class="pg_charter__reserve">
            <h2 class="fz_28 fw700 reservation_ttl">空いていれば前日でも手配いたします。<br>ご予約は先着順となります。お早めにご相談ください。</h2>
            <p class="fz_15 reservation_summary">繁忙期には早めに予約が埋まってしまうことも。できるだけ早めにご相談いただいた方が確実です。</p>
            <div class="fz_16 md_more">
                <a href="<?php echo home_url(); ?>/contact/" class="md_arrow right long">お問い合わせ</a>
            </div>
        </div>
    </section>


    <nav class="fz_14 md_page__fixnav" id="fixnav">
        <div class="l_row">
            <ul class="md_page__fixnavList">
                <li><a href="#lineup" class="innr">バスの種類</a></li>
                <li><a href="#charge" class="innr">料金について</a></li>
                <li><a href="#performance" class="innr">使い方例</a></li>
                <li><a href="#safety" class="innr">安心安全の取組</a></li>
                <li><a href="<?php echo home_url(); ?>/charter/bus_flow/" class="innr">ご利用の流れ</a></li>
            </ul>
        </div>
    </nav>


</main><!-- contents_wrap -->


<?php get_footer(); ?>
