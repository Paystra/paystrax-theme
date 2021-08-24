<div class="top-block">
    <div class="left">
        <div class="left-bg"></div>
        <div class="wrap">
            <div class="headlines">
                <?php if(get_field('virsus_1_papildoma_antraste')) : ?>
                    <h4><?php the_field('virsus_1_papildoma_antraste'); ?></h4>
                <?php else : ?>
                    <h4><?php the_title(); ?></h4>
                <?php endif; ?>
                <h2><?php the_field('virsus_1_pagrindine_antraste'); ?></h2>
            </div>
            <div class="text">
                <?php the_field('virsus_1_tekstas'); ?>
            </div>
            <a href="#scroll" class="smooth scroll-bottom">
                <div class="circle white"></div>
                <img src="<?php img(); ?>/icon-scroll-arrow.svg" class="arrow">
            </a>
        </div>
    </div>
    <div class="right wow fadeInRight">
        <?php if(get_field('virsus_1_tipas_2') == "photo") : ?>
            <div class="photo" style="background: url('<?php echo wp_get_attachment_image_src(get_field('virsus_1_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;"></div>
        <?php else : ?>
            <div class="text-wrap">
                <div class="text">
                    <?php if(get_field('virsus_1_tekstas_desine')) : ?>
                        <?php the_field('virsus_1_tekstas_desine'); ?>
                    <?php else : ?>
                        <div class="pricing-text">
                            <div class="txt-top">
                                <span class="txt-left"><?php the_field('virsus_1_tekstas_desine_kaire'); ?></span>
                                <span class="txt-center"><?php the_field('virsus_1_tekstas_desine_centras'); ?></span>
                                <span class="txt-right"><?php the_field('virsus_1_tekstas_desine_desine'); ?></span>
                            </div>
                            <div class="txt-bottom">
                                <span><?php the_field('virsus_1_tekstas_desine_apacia'); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>