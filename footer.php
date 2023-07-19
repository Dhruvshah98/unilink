<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>
<footer>

    <div class="footer-box">
        <div class="container">

            <div class="f-row">
                <div class="w30 w-990-100">
                    <div class="footer-logo">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer-logo.svg" alt="">
                    </div>
                </div>
                <div class="w40 w-990-100">
                    <div class="footer-list">
                        <div class="footer-links">
                            <ul>
                                <li>
                                    <a href="<?php echo get_site_url() . '/' ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url() . '/about/' ?>">ABOUT</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url() . '/contact/' ?>">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w30 w-990-100">
                    <div class="reach-us">
                        <h4>Reach Us</h4>
                        <ul>
                            <li>
                                6 A, Al Matam Building , Meena Bazar, Burdubai, Dubai, U.A.E
                            </li>
                            <li>
                                <a href="tel:+971 55 1404131 ">+971 55 1404131 / 04-3443196 <br />
                                    04-2969096</a>
                            </li>
                            <li>
                                <a href="mailto:sales@unilinkcargo.com">sales@unilinkcargo.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>