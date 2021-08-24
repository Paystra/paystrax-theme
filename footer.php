<footer>
    <div class="top-part">
        <div class="wrapper">
            <div class="top">
                <a href="<?php echo site_url(); ?>" class="logo">
                    <img src="<?php img(); ?>/logo-blue.svg">
                </a>
            </div>
            <div class="bottom">
                <div class="col">
                    <h6>Solutions</h6>
                    <div class="wrap">
                        <?php
                        $defaults = array(
                            'theme_location' => 'footer_menu_1',
                            'container' => '',
                            'items_wrap' => '<ul class="navigation">%3$s</ul>'
                        );
                        wp_nav_menu($defaults);
                        ?>
                    </div>
                </div>
                <div class="col" style="display: none;">
                    <h6>Support</h6>
                    <div class="wrap">
                        <?php
                        $defaults = array(
                            'theme_location' => 'footer_menu_3',
                            'container' => '',
                            'items_wrap' => '<ul class="navigation">%3$s</ul>'
                        );
                        wp_nav_menu($defaults);
                        ?>
                    </div>
                </div>
                <div class="col">
                    <h6>Contacts</h6>
                    <div class="wrap">
                        <?php
                        $defaults = array(
                            'theme_location' => 'footer_menu_4',
                            'container' => '',
                            'items_wrap' => '<ul class="navigation">%3$s</ul>'
                        );
                        wp_nav_menu($defaults);
                        ?>
                    </div>
                </div>
                <div class="col">
                    <h6>Company</h6>
                    <div class="wrap">
                        <?php
                        $defaults = array(
                            'theme_location' => 'footer_menu_5',
                            'container' => '',
                            'items_wrap' => '<ul class="navigation">%3$s</ul>'
                        );
                        wp_nav_menu($defaults);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-part">
        <div class="wrapper">
            <div class="regulated">
                <p>PAYSTRAX uab is a licensed Payment Institution and supervised by the Bank of Lithuania, in accordance to the Republic of Lithuania Law on Payments and Law on Payment Institutions. PAYSTRAX uab holds a Principal Membership license with Mastercard and VISA.</p>
            </div>
            <p class="copyright">All rights reserved. Copyright © PAYSTRAX 2020</p>
            <a href="#" target="_blank" class="wam">
                <img src="<?php img(); ?>/logo-wam.svg">
            </a>
        </div>
    </div>
</footer>

<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset:       100,
            live: true,
            callback:     function(box) {
            }
        }
    );
    wow.init();
</script>

<?php wp_footer(); ?>

</body>

</html>