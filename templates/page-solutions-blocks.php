<?php
/** Template name: Solutions blocks */
get_header(); ?>

    <div class="main page page-solutions-blocks">
        <?php get_template_part('parts/top', 'block'); ?>
        <div id="scroll"></div>
        <?php if( have_rows('sprendimu_blokai') ):
            while ( have_rows('sprendimu_blokai') ) : the_row();

                if( get_row_layout() == 'korteles' ) : ?>

                    <div class="small-text-block">
                        <div class="wrapper">
                            <div class="wrap grid col-3">
                                <?php if( have_rows('korteles') ): ?>
                                    <?php while( have_rows('korteles') ): the_row(); ?>
                                        <div class="single <?php the_sub_field('spalva'); ?>">
                                            <h4><?php the_sub_field('antraste'); ?></h4>
                                            <p><?php the_sub_field('tekstas'); ?></p>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'tekstas_su_nuotrauka_ir_punktais' ) : ?>

                    <?php if(get_sub_field('papildomo_bloko_statusas') == "on") : ?>
                        <?php $bonus = "bonus-block"; ?>
                    <?php else : ?>
                        <?php $bonus = "no-bonus"; ?>
                    <?php endif; ?>

                    <div class="photo-text-block <?php the_sub_field('fono_spalva'); ?> <?php echo $bonus; ?>">
                        <div class="wrapper">
                            <div class="img wow fadeInLeft">
                                <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                                    <div class="overlay black opc-40 black-opc-40"></div>
                                </div>
                            </div>
                            <div class="content">
                                <h2><?php the_sub_field('antraste'); ?></h2>
                                <div class="text col-2">
                                    <?php the_sub_field('tekstas'); ?>
                                </div>
                                <div class="text-columns grid col-2">
                                    <?php if( have_rows('punktai') ): ?>
                                        <?php while( have_rows('punktai') ): the_row(); ?>
                                            <div class="single">
                                                <h4><?php the_sub_field('antraste'); ?></h4>
                                                <p><?php the_sub_field('tekstas'); ?></p>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php if(get_sub_field('papildomo_bloko_statusas') == "on") : ?>
                                    <div class="bonus-text">
                                        <?php if(get_sub_field('papildomo_bloko_antraste')) : ?>
                                            <h4><?php the_sub_field('papildomo_bloko_antraste'); ?>></h4>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('papildomo_bloko_tekstas')) : ?>
                                            <div class="text col-2">
                                                <?php the_sub_field('papildomo_bloko_tekstas'); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'tekstas_su_iliustracija' ) : ?>

                    <div class="text-illustration-block">
                        <div class="wrapper">
                            <h2><?php the_sub_field('antraste'); ?></h2>
                            <div class="wrap">
                                <div class="text col-2">
                                    <?php the_sub_field('tekstas'); ?>
                                </div>
                                <img src="<?php echo wp_get_attachment_image_src(get_sub_field('iliustracija'), 'full')[0]; ?>" class="illustration">
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'val_48_diegimas' ) : ?>

                    <div class="hours-48">
                        <div class="wrapper">
                            <div class="left">
                                <div class="text">
                                    <?php the_sub_field('tekstas'); ?>
                                </div>
                                <div class="icons grid col-3">
                                    <?php if( have_rows('punktai') ): ?>
                                        <?php while( have_rows('punktai') ): the_row(); ?>
                                            <div class="single">
                                                <div class="circle"></div>
                                                <div class="txt">
                                                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('ikona'), 'full')[0]; ?>">
                                                    <h5><?php the_sub_field('ikona'); ?></h5>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <?php
                                $link = get_sub_field('mygtukas');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="right">
                                <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                                    <div class="overlay black opc-70 black-opc-70"></div>
                                    <div class="wrap">
                                        <?php if(get_sub_field('nuotraukos_antraste')) : ?>
                                            <h4><?php the_sub_field('nuotraukos_antraste'); ?></h4>
                                        <?php endif; ?>
                                        <?php if(get_sub_field('nuotraukos_tekstas')) : ?>
                                            <h2><?php the_sub_field('nuotraukos_tekstas'); ?></h2>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'kainos' ) : ?>

                    <div class="pricing-block">
                        <div class="wrapper">
                            <?php if(get_sub_field('antraste')) : ?>
                                <h2><?php the_sub_field('antraste'); ?></h2>
                            <?php endif; ?>
                            <div class="pricing-wrap">
                                <div class="left">
                                    <div class="btns">
                                        <?php if( have_rows('kainos') ): ?>
                                            <?php $i = 1; ?>
                                            <?php while( have_rows('kainos') ): the_row(); ?>
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
                                        <?php if( have_rows('kainos') ): ?>
                                            <?php $z = 1; ?>
                                            <?php while( have_rows('kainos') ): the_row(); ?>
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
                                        $link = get_sub_field('mygtukas');
                                        if( $link ):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                            <a class="btn round" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <p class="disclaimer" style="display: none;">Volume discount available.<br/>
                                        *Prices are always subject to risk assessment based on business type and transaction history.</p>
                                </div>
                                <div class="right">
                                    <?php if(get_sub_field('antraste_2')) : ?>
                                        <h3><?php the_sub_field('antraste_2'); ?></h3>
                                    <?php endif; ?>
                                    <?php if(get_sub_field('papildoma_antraste')) : ?>
                                        <h4><?php the_sub_field('papildoma_antraste'); ?></h4>
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
                                    <?php if(get_sub_field('tekstas')) : ?>
                                        <div class="text">
                                            <?php the_sub_field('tekstas'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'valiutos' ) : ?>

                    <div class="currencies-block">
                        <div class="wrapper">
                            <?php if( have_rows('blokas') ): ?>
                                <?php while( have_rows('blokas') ): the_row(); ?>
                                    <div class="currencies">
                                        <h4><?php the_sub_field('antraste'); ?></h4>
                                        <div class="wrap grid col-3">
                                            <?php if( have_rows('valiutos') ): ?>
                                                <?php while( have_rows('valiutos') ): the_row(); ?>
                                                    <div class="single">
                                                        <img src="<?php echo wp_get_attachment_image_src(get_sub_field('veliava'), 'full')[0]; ?>">
                                                        <div class="info">
                                                            <span class="name"><?php the_sub_field('pavadinimas'); ?></span>
                                                            <span class="letters"><?php the_sub_field('simbolis'); ?></span>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'metodai' ) : ?>

                    <div class="methods-block">
                        <div class="top-bar">
                            <div class="wrapper">
                                <div class="img">
                                    <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                                        <div class="overlay black opc-40 black-opc-40"></div>
                                    </div>
                                </div>
                                <div class="logos">
                                    <?php if( have_rows('logotipai') ): ?>
                                        <?php while( have_rows('logotipai') ): the_row(); ?>
                                            <img src="<?php echo wp_get_attachment_image_src(get_sub_field('logotipas'), 'full')[0]; ?>">
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-bar">
                            <div class="wrapper">
                                <div class="wrap">
                                    <?php if( have_rows('punktai') ): ?>
                                        <?php while( have_rows('punktai') ): the_row(); ?>
                                            <div class="single">
                                                <div class="text-b">
                                                    <h2><?php the_sub_field('antraste'); ?></h2>
                                                    <div class="text">
                                                        <p><?php the_sub_field('tekstas'); ?></p>
                                                    </div>
                                                </div>
                                                <div class="img circle">
                                                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('iliustracija'), 'full')[0]; ?>">
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php elseif( get_row_layout() == 'terminalai' ) : ?>

                    <div class="terminals-block">
                        <div class="wrapper">
                            <div class="left">
                                <h2><?php the_sub_field('antraste'); ?></h2>
                                <div class="text">
                                    <?php the_sub_field('tekstas'); ?>
                                </div>
                            </div>
                            <div class="right">
                                <div class="wrap grid col-2">
                                    <?php if( have_rows('terminalai') ): ?>
                                        <?php while( have_rows('terminalai') ): the_row(); ?>
                                            <div class="single">
                                                <div class="img-wrap">
                                                    <img src="<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'full')[0]; ?>">
                                                </div>
                                                <h4><?php the_sub_field('antraste'); ?></h4>
                                                <div class="text">
                                                    <?php the_sub_field('tekstas'); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif;

            endwhile;
        endif; ?>
        <?php get_template_part('parts/cta', 'block'); ?>
    </div>

<?php get_footer(); ?>