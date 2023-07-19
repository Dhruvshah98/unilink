<?php

/* Template Name: Home */

/**

 * The template for displaying all pages

 * 

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package blank

 */

get_header();

?>
<!-- Main Container Starts -->
<?php //bloginfo('template_url'); 
?>
<div class="main-container">

    <div class="home-banner">
        <div class="banner-swiper swiper">
            <div class="swiper-wrapper">
                <?php while (have_rows('banner')) : the_row();
                    // vars
                    $banner_image = get_sub_field('banner_image');
                ?>
                <div class="swiper-slide">
                    <div class="banner-bg">
                        <img src="<?php echo esc_url($banner_image['url']) ?>" alt="">
                    </div>
                    <div class="container">
                        <div class="main-head">
                            <h1>
                                <?php the_sub_field('banner_title'); ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <!-- About US -->
    <div class="comm-section">
        <div class="container">
            <div class="comm-head">
                <h3> <span><?php the_field('about_us_title'); ?></span><?php the_field('about_us_content'); ?> </h3>
            </div>
        </div>
    </div>


    <div class="comm-section">
        <div class="container">
            <div class="hassle-free-wrap">
                <div class="f-row f-2 f-990-1">
                    <div class="f-col">
                        <div class="hf-img-wrap">
                            <?php
                            $hassle_image = get_field('hassle_image');
                            $hassle_image_tag = get_field('hassle_image_tag');
                            $hassle_free_icon = get_field('hassle_free_icon');
                            ?>
                            <img src="<?php  echo esc_url($hassle_image['url']) ?>" alt="">
                            <div class="circle">
                                <img src="<?php  echo esc_url($hassle_image_tag['url']) ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="f-col">
                        <div class="hassle-txt">
                            <div class="hassle-icon">
                                <img src="<?php  echo esc_url($hassle_free_icon['url']) ?>" alt="">
                            </div>
                            <h3><?php the_field('hassle_title'); ?></h3>
                            <h4><?php the_field('hassle_subtitle'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Shipping Destinations -->
    <div class="comm-section">
        <div class="container">
            <div class="right-head">
                <h2>
                    <?php the_field('shiping_title'); ?>
                </h2>
                <p><?php the_field('shipping_subtitle'); ?></p>
            </div>
            <div class="sd-wrap">
                <div class="f-row">
                    <div class="w60 w-1200-100">
                        <div class="sd-list">
                            <ul>
                                <?php while (have_rows('shipping_location_list')) : the_row(); ?>
                                <li><?php the_sub_field('country_names'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="w40 w-1200-100">
                        <div class="sd-img">
                            <?php
                            $shipping_image = get_field('shipping_image');
                            ?>
                            <img src="<?php  echo esc_url($shipping_image['url']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Happy Customers -->
    <div class="comm-section">
        <div class="container">
            <div class="customers-wrap">
                <div class="f-row">
                    <div class="w100">
                        <div class="happy-head">
                            <h3> <?php the_field('customers_title'); ?></h3>
                        </div>
                        <div class="customer-txt-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('customer_review')) : the_row(); ?>
                                <div class="swiper-slide">
                                    <div class="customer-txt">
                                        <h3><?php the_sub_field('review_title'); ?></h3>
                                        <p><?php the_sub_field('review_content'); ?></p>
                                        <h5><?php the_sub_field('reviewer_name'); ?></h5>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <div class="swiper-nav">
                                <div class="swiper-button-prev">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/left-arrow.svg" alt="">
                                </div>
                                <div class="swiper-button-next">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/right-arrow.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="w50">
                        <div class="customer-img-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php while (have_rows('customer_review')) : the_row();
                                    // vars
                                    $reviewer_image = get_sub_field('reviewer_image');
                                ?>
                                <div class="swiper-slide">
                                    <div class="customer-img">
                                        <img src="<?php echo esc_url($reviewer_image['url']) ?>" alt="">
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


    <div class="comm-section">
        <div class="container">
            <div class="right-head">
                <h2>
                    <?php the_field('our_partners_title'); ?>
                </h2>
            </div>
            <h4>Multiple Service Providers</h4>
        </div>
    </div>


    <div id="contact" style="position:relative;top:-50px"></div>
    <!-- Get Your Free Quote -->
    <div class="comm-section">
        <div class="container">
            <div class="f-row">
                <div class="w50 w-1200-100">
                    <div class="happy-head">
                        <h3>
                            <?php the_field('free_quote_title'); ?>
                        </h3>
                        <p><?php the_field('free_quote_subtitle'); ?></p>
                    </div>
                </div>
                <div class="w50 w-1200-100">
                    <div class="quote-form">
                        <!-- <form action=""> -->
                        <!-- <div class="f-row">
                                <div class="w100">
                                    <p class="form-subtitle">From</p>
                                    <div class="f-row">
                                        <div class="w50">
                                            <div class="form-grp">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-input" name="" id="">
                                                    <option selected disabled>Country</option>
                                                    <option>India</option>
                                                    <option>USA</option>
                                                    <option>Russia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50">
                                            <div class="form-grp">
                                                <label for="" class="form-label">Zip Code*</label>
                                                <input type="number" required class="form-input" placeholder="Zip Code*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w100">
                                    <p class="form-subtitle">To</p>
                                    <div class="f-row">
                                        <div class="w50">
                                            <div class="form-grp">
                                                <label for="" class="form-label">Country</label>
                                                <select class="form-input" name="" id="">
                                                    <option selected disabled>Country</option>
                                                    <option>India</option>
                                                    <option>USA</option>
                                                    <option>Russia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="w50">
                                            <div class="form-grp">
                                                <label for="" class="form-label">Zip Code*</label>
                                                <input type="number" required class="form-input" placeholder="Zip Code*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w50">
                                    <p class="form-subtitle">Number of Boxes</p>
                                    <div class="form-grp">
                                        <select class="form-input">
                                            <option selected>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w50">
                                    <p class="form-subtitle">Total Box Weight</p>
                                    <div class="form-grp">
                                        <input type="number" required class="form-input" placeholder="0.1kg">
                                    </div>
                                </div>
                                <div class="w100">
                                    <div class="form-grp">
                                        <p class="form-subtitle">Email*</p>
                                        <input type="email" required class="form-input" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="w100">
                                    <div class="form-grp">
                                        <p class="form-subtitle">Phone*</p>
                                        <input type="number" required class="form-input" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="w100">
                                    <button class="button">Check Rates</button>
                                </div>
                            </div> -->
                        <!-- </form> -->
                        <?php echo apply_shortcodes('[contact-form-7 id="67" title="Free Quote"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Main Container Ends -->
<?php

get_footer();