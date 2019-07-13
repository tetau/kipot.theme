<?php get_header(); ?>

<main class="md_main page" role="main">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="md_page__head">
        <h1 class="fz_28 fw700 md_title"><?php the_title();?></h1>
    </div>

    <div class="md_pCommon contact">
        <div class="md_pCommon__head">
            <div class="l_row mx_1100 pd_side5">
                <div class="fz_15 md_section__summary tac">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolorem accusamus modi quia necessitatibus consectetur labore eum repellat, fugit, recusandae ab amet dolores, iste repellendus ad mollitia. Dolorum, commodi, obcaecati!</p>
                </div>
            </div>
        </div>
        <div class="pContact">
            <div class="l_row mx_1100 pd_side5">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>

</main><!-- contents_wrap -->

<?php get_footer(); ?>
