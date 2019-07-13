<?php get_header(); ?>
<main class="md_main page" role="main">
    <div class="md_page__head">
        <h1 class="fz_28 fw700 md_title">イベント託児Q&A</h1>
    </div>
    <?php if(have_posts()) : ?>
        <div class="md_aFaq">
            <div class="l_row mx_1200 pd_side5">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>

