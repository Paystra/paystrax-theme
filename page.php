<?php get_header(); ?>

    <div class="main page-default">
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>
            <div class="text">
                <?php the_field('tekstinis_tekstas'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>