<?php
/** Template name: Company */
get_header(); ?>

    <div class="main page page-company">
        <?php get_template_part('parts/top', 'block'); ?>
        <div id="scroll"></div>
        <div class="photo-text-block">
            <div class="wrapper">
                <div class="img wow fadeInLeft">
                    <div class="circle" style="background: url('<?php echo wp_get_attachment_image_src(get_field('kompanija_1_nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;">
                        <div class="overlay black opc-40 black-opc-40"></div>
                    </div>
                </div>
                <div class="content">
                    <h2><?php the_field('kompanija_1_antraste'); ?></h2>
                    <div class="text col-2">
                        <?php the_field('kompanija_1_tekstas'); ?>
                    </div>
                    <div class="plus">
                        <?php if( have_rows('kompanija_1_punktai') ): ?>
                            <?php while( have_rows('kompanija_1_punktai') ): the_row(); ?>
                                <p><?php the_sub_field('tekstas'); ?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-block" style="display: none;">
            <div class="wrapper">
                <h2><?php the_field('kompanija_2_antraste'); ?></h2>
                <div class="wrap grid col-3">
                    <a href="#" class="single">
                        <div class="top">
                            <span class="cat">Technology</span>
                            <span class="date">12 Jun</span>
                        </div>
                        <h5>Lyft expands tax-saving commuter benefits to all Lyft Line cities</h5>
                        <p>Bunch of components will help you to prototype, design & build much faster.</p>
                    </a>
                    <a href="#" class="single">
                        <div class="top">
                            <span class="cat">Technology</span>
                            <span class="date">12 Jun</span>
                        </div>
                        <h5>Lyft expands tax-saving commuter benefits to all Lyft Line cities</h5>
                        <p>Bunch of components will help you to prototype, design & build much faster.</p>
                    </a>
                    <a href="#" class="single">
                        <div class="top">
                            <span class="cat">Technology</span>
                            <span class="date">12 Jun</span>
                        </div>
                        <h5>Lyft expands tax-saving commuter benefits to all Lyft Line cities</h5>
                        <p>Bunch of components will help you to prototype, design & build much faster.</p>
                    </a>
                </div>
                <div class="center-btn">
                    <a href="#" class="load-more btn border">Load more</a>
                </div>
            </div>
        </div>
        <div class="sertifications-block" style="display: none;">
            <div class="wrapper">
                <h2><?php the_field('kompanija_3_antraste'); ?></h2>
                <div class="text col-2">
                    <?php the_field('kompanija_3_tekstas'); ?>
                </div>
                <div class="wrap grid col-4">
                    <?php if( have_rows('kompanija_3_sertifikatai') ): ?>
                        <?php while( have_rows('kompanija_3_sertifikatai') ): the_row(); ?>
                            <div class="single" style="background: url('<?php echo wp_get_attachment_image_src(get_sub_field('nuotrauka'), 'large')[0]; ?>') center / cover no-repeat;"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="jobs-block" style="display: none;">
            <div class="wrapper">
                <h2>Want to join the company that makes lifes easier?</h2>
                <h4>We are hiring!</h4>
                <div class="tabs">
                    <div id="tabs">
                        <ul>
                            <li><a href="#working">Working at Paystra</a></li>
                            <li><a href="#location">Location</a></li>
                            <li><a href="#perks">Perks</a></li>
                        </ul>
                        <div id="working" class="tab-content">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div id="location" class="tab-content">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div id="perks" class="tab-content">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-block" style="display: none;">
            <h2>Follow us</h2>
            <div class="wrap">
                <div class="single">
                    <a href="#" target="_blank">
                        <img src="<?php img(); ?>/temp/icon-pinterest.svg">
                    </a>
                </div>
                <div class="single">
                    <a href="#" target="_blank">
                        <img src="<?php img(); ?>/temp/icon-pinterest.svg">
                    </a>
                </div>
                <div class="single">
                    <a href="#" target="_blank">
                        <img src="<?php img(); ?>/temp/icon-pinterest.svg">
                    </a>
                </div>
                <div class="single">
                    <a href="#" target="_blank">
                        <img src="<?php img(); ?>/temp/icon-pinterest.svg">
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>