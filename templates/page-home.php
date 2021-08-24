<?php
/** Template name: Homepage */
get_header(); ?>

    <div class="main page page-home">
        <div class="top-home-block wow fadeInDown">
            <div class="bg" style="background: url('<?php echo wp_get_attachment_image_src(get_field('pradzia_1_nuotrauka'), 'full-hd')[0]; ?>') center 90% / cover no-repeat;">
                <div class="overlay"></div>
            </div>
            <div class="wrapper">
                <h1><?php the_field('pradzia_1_antraste'); ?></h1>
                <div class="icons">
                    <img src="<?php img(); ?>/temp/home-top.svg" class="wow fadeInDown" data-wow-delay="0.5s">
                    <span><?php the_field('pradzia_1_papildoma_antraste'); ?></span>
                </div>
            </div>
        </div>
        <div class="photo-text-block home-1">
            <div class="wrapper">
                <div class="img wow fadeInLeft">
                    <img src="<?php echo wp_get_attachment_image_src(get_field('pradzia_2_nuotrauka'), 'large')[0]; ?>">
                </div>
                <div class="content">
                    <div class="interactive">
                        <div class="dynamic">
                            <span><?php the_field('pradzia_2_antraste_1'); ?></span>
                            <div class="labels owl-carousel">
                                <?php if( have_rows('pradzia_2_karusele') ): ?>
                                    <?php $i = 1; ?>
                                    <?php while( have_rows('pradzia_2_karusele') ): the_row(); ?>
                                        <div class="single single-<?php echo $i; ?>">
                                            <span><?php the_sub_field('pavadinimas'); ?></span>
                                            <img src="<?php echo wp_get_attachment_image_src(get_sub_field('logotipas'), 'full')[0]; ?>">
                                        </div>
                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="logos">
                            <?php if( have_rows('pradzia_2_logotipai') ): ?>
                                <?php while( have_rows('pradzia_2_logotipai') ): the_row(); ?>
                                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('logotipas'), 'full')[0]; ?>">
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="dynamic">
                            <span><?php the_field('pradzia_2_antraste_2'); ?></span>
                        </div>
                    </div>
                    <div class="text col-2">
                        <?php the_field('pradzia_2_tekstas'); ?>
                    </div>
                    <div class="links grid col-2">
                        <?php if( have_rows('pradzia_2_punktai') ): ?>
                            <?php while( have_rows('pradzia_2_punktai') ): the_row(); ?>
                                <?php $id = get_sub_field('paslauga'); ?>
                                <a href="<?php echo get_permalink($id); ?>" class="single">
                                    <div class="circle wow fadeInLeft"></div>
                                    <div class="txt">
                                        <h4><?php the_sub_field('antraste'); ?></h4>
                                        <p><?php the_sub_field('tekstas'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="photo-text-block reversed home-2">
            <div class="wrapper">
                <div class="content">
                    <h2><?php the_field('pradzia_3_antraste'); ?></h2>
                    <div class="text">
                        <?php the_field('pradzia_3_tekstas'); ?>
                    </div>
                    <div class="links points grid col-2">
                        <?php if( have_rows('pradzia_3_punktai') ): ?>
                            <?php while( have_rows('pradzia_3_punktai') ): the_row(); ?>
                                <div class="single">
                                    <div class="circle wow fadeInLeft"></div>
                                    <div class="txt">
                                        <h4><?php the_sub_field('antraste'); ?></h4>
                                        <p><?php the_sub_field('tekstas'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="img wow fadeInRight">
                    <img src="<?php echo wp_get_attachment_image_src(get_field('pradzia_3_nuotrauka'), 'large')[0]; ?>">
                </div>
            </div>
        </div>
        <div class="photo-text-block home-3">
            <div class="wrapper">
                <div class="img wow fadeInLeft">
                    <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_field('pradzia_4_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                        <div class="bg black opc-40 black-opc-40"></div>
                    </div>
                    <?php
                    $link = get_field('pradzia_4_mygtukas');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="content">
                    <h2><?php the_field('pradzia_4_antraste'); ?></h2>
                    <div class="text short">
                        <?php the_field('pradzia_4_tekstas'); ?>
                    </div>
                    <div class="icons grid col-2">
                        <?php if( have_rows('pradzia_4_punktai') ): ?>
                            <?php while( have_rows('pradzia_4_punktai') ): the_row(); ?>
                                <div class="single">
                                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('ikona'), 'full')[0]; ?>" class="wow fadeIn">
                                    <h4><?php the_sub_field('antraste'); ?></h4>
                                    <p><?php the_sub_field('tekstas'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="hours-48">
            <div class="wrapper">
                <div class="left">
                    <div class="text">
                        <?php the_field('pradzia_5_tekstas'); ?>
                    </div>
                    <div class="icons grid col-3">
                        <?php if( have_rows('pradzia_5_punktai') ): ?>
                            <?php while( have_rows('pradzia_5_punktai') ): the_row(); ?>
                                <div class="single">
                                    <div class="circle wow fadeInLeft"></div>
                                    <div class="txt">
                                        <img src="<?php echo wp_get_attachment_image_src(get_sub_field('ikona'), 'full')[0]; ?>">
                                        <h5><?php the_sub_field('antraste'); ?></h5>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php
                    $link = get_field('pradzia_5_mygtukas');
                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="right wow fadeInRight">
                    <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_field('pradzia_5_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                        <div class="overlay black opc-70 black-opc-70"></div>
                        <div class="wrap">
                            <?php if(get_field('pradzia_5_nuotraukos_antraste')) : ?>
                                <h4><?php the_field('pradzia_5_nuotraukos_antraste'); ?></h4>
                            <?php endif; ?>
                            <?php if(get_field('pradzia_5_nuotraukos_tekstas')) : ?>
                                <h2><?php the_field('pradzia_5_nuotraukos_tekstas'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-block">
            <div class="wrapper">
                <?php if(get_field('pradzia_6_antraste')) : ?>
                    <h2><?php the_field('pradzia_6_antraste'); ?></h2>
                <?php endif; ?>
                <div class="pricing-wrap">
                    <div class="left">
                        <div class="btns">
                            <?php if( have_rows('pradzia_6_kainos') ): ?>
                                <?php $i = 1; ?>
                                <?php while( have_rows('pradzia_6_kainos') ): the_row(); ?>
                                    <?php if($i == 1) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    } ?>
                                    <a href="#" class="<?php echo $active; ?> pricing-btn pricing-btn-<?php echo $i; ?>">
                                        <span><?php the_sub_field('antraste'); ?></span>
                                    </a>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="text">
                            <?php if( have_rows('pradzia_6_kainos') ): ?>
                                <?php $z = 1; ?>
                                <?php while( have_rows('pradzia_6_kainos') ): the_row(); ?>
                                    <?php if($z == 1) {
                                        $active = "active";
                                    } else {
                                        $active = "";
                                    } ?>
                                    <div class="single <?php echo $active; ?> pricing-text pricing-text-<?php echo $z; ?>">
                                        <div class="top">
                                            <span class="left"><?php the_sub_field('kaire'); ?></span>
                                            <span class="center"><?php the_sub_field('centras'); ?></span>
                                            <span class="right"><?php the_sub_field('desine'); ?></span>
                                        </div>
                                        <div class="bottom">
                                            <span><?php the_sub_field('apacia'); ?></span>
                                        </div>
                                    </div>
                                    <?php $z++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="center-btn">
                            <?php
                            $link = get_field('pradzia_6_mygtukas');
                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                        <p class="disclaimer"><?php the_field('pradzia_6_ispejimas'); ?></p>
                    </div>
                    <div class="right">
                        <?php if(get_field('pradzia_6_antraste_2')) : ?>
                            <h3><?php the_field('pradzia_6_antraste_2'); ?></h3>
                        <?php endif; ?>
                        <?php if(get_field('pradzia_6_papildoma_antraste')) : ?>
                            <h4><?php the_field('pradzia_6_papildoma_antraste'); ?></h4>
                        <?php endif; ?>
                        <div class="links grid col-2" style="display: none;">
                            <a href="#" class="single">
                                <div class="circle"></div>
                                <h4>Retailer</h4>
                            </a>
                            <a href="#" class="single">
                                <div class="circle"></div>
                                <h4>Retailer</h4>
                            </a>
                            <a href="#" class="single">
                                <div class="circle"></div>
                                <h4>Retailer</h4>
                            </a>
                            <a href="#" class="single">
                                <div class="circle"></div>
                                <h4>Retailer</h4>
                            </a>
                        </div>
                        <?php if(get_field('pradzia_6_tekstas')) : ?>
                            <div class="text">
                                <?php the_field('pradzia_6_tekstas'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .main.page-home .photo-text-block.home-3 {
            padding-bottom: 175px;
        }
    </style>

    <script>
        /*
        jQuery( document ).ready( function( $ ) {
            setTimeout(function(){
                $('.labels .single-1').css('margin-top', '-109px');
            }, 2500);

            setTimeout(function(){
                $('.labels .single-1').css('margin-top', '-218px');
            }, 5000);
        });
         */
    </script>

<?php get_footer(); ?>