<?php if(get_field('apacia_1_statusas') == "on") : ?>
    <div class="why-block">
        <div class="wrapper">
            <div class="left">
                <h2><?php the_field('apacia_1_antraste'); ?></h2>
                <div class="text col-2">
                    <?php the_field('apacia_1_tekstas'); ?>
                </div>
                <?php if( have_rows('apacia_1_punktai') ): ?>
                    <div class="icons grid col-3">
                        <?php while( have_rows('apacia_1_punktai') ): the_row(); ?>
                            <div class="single">
                                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('ikona'), 'full')[0]; ?>">
                                <h4><?php the_sub_field('antraste'); ?></h4>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <style>
                        .why-block .wrapper .right .circle {
                            bottom: -200px;
                        }
                    </style>
                <?php endif; ?>
            </div>
            <div class="right wow fadeInRight">
                <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_field('apacia_1_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                    <div class="overlay black opc-70"></div>
                    <div class="wrap">
                        <?php if(get_field('apacia_1_nuotraukos_antraste')) : ?>
                            <h4><?php the_field('apacia_1_nuotraukos_antraste'); ?></h4>
                        <?php endif; ?>
                        <?php if(get_field('apacia_1_nuotraukas_tekstas')) : ?>
                            <h2><?php the_field('apacia_1_nuotraukas_tekstas'); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if(get_field('apacia_2_statusas') == "on") : ?>
    <div class="cta-block">
        <div class="wrapper">
            <div class="left">
                <h2><?php the_field('apacia_2_antraste'); ?></h2>
                <div class="text">
                    <p><?php the_field('apacia_2_aprasymas'); ?></p>
                </div>
                <div class="center-btn">
                    <?php
                    $link = get_field('apacia_2_mygtukas');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <div class="wrap">
                    <h4><?php the_field('apacia_2_antraste_2'); ?></h4>
                    <div class="text">
                        <p><?php the_field('apacia_2_aprasymas_2'); ?></p>
                    </div>
                    <?php
                    $link = get_field('apacia_2_mygtukas');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                            <div class="circle"></div>
                            <img src="<?php img(); ?>/icon-scroll-arrow.svg" class="arrow">
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>