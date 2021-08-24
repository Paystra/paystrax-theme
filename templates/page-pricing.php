<?php
/** Template name: Pricing */
get_header(); ?>

    <div class="main page page-pricing">
        <?php get_template_part('parts/top', 'block'); ?>
        <div id="scroll"></div>
        <div class="small-text-block">
            <div class="wrapper">
                <div class="wrap grid col-3">
                    <?php if( have_rows('kainos_1_korteles') ): ?>
                        <?php while( have_rows('kainos_1_korteles') ): the_row(); ?>
                            <div class="single <?php the_sub_field('spalva'); ?>">
                                <h4><?php the_sub_field('antraste'); ?></h4>
                                <p><?php the_sub_field('tekstas'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="merchant-block">
            <div class="wrapper">
                <div class="left">
                    <h2><?php the_field('kainos_2_antraste'); ?></h2>
                    <div class="text">
                        <?php the_field('kainos_2_tekstas'); ?>
                    </div>
                </div>
                <div class="right">
                    <div class="circle wow fadeInRight" style="background: url('<?php echo wp_get_attachment_image_src(get_field('kainos_2_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                        <div class="overlay black opc-40 black-opc-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>