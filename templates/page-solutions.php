<?php
/** Template name: Solutions */
get_header(); ?>

    <div class="main page page-solutions">
        <?php get_template_part('parts/top', 'block'); ?>
        <div id="scroll"></div>
        <div class="solutions-block">
            <div class="wrapper">
                <div class="wrap grid col-2">
                    <?php if( have_rows('sprendimai_1_sprendimai') ): ?>
                        <?php while( have_rows('sprendimai_1_sprendimai') ): the_row(); ?>
                            <?php $id = get_sub_field('paslauga'); ?>
                            <a href="<?php echo get_permalink($id); ?>" class="single">
                                <div class="single-overlay"></div>
                                <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                                    <div class="overlay black opc-40 black-opc-40"></div>
                                </div>
                                <div class="txt">
                                    <h4><?php the_sub_field('antraste'); ?></h4>
                                    <p><?php the_sub_field('tekstas'); ?></p>
                                    <div class="link-wrap" style="display: none;">
                                        <div class="link">
                                            <div class="circle"></div>
                                            <span>More</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_template_part('parts/cta', 'block'); ?>
    </div>

<?php get_footer(); ?>