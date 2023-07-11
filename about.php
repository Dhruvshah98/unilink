<?php

/* Template Name: About */

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
                        <a href="" class="button line big">Contact Us<img
                                src="<?php bloginfo('template_url'); ?>/assets/img/arrow-outward.svg" alt=""></a>
                    </div>
                    <div class="f-col">
                        <div class="about-txt">
                            <p>
                                <?php the_field('about_us_paragraph_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience Starts -->
    <div class="comm-section">
        <div class="container">
            <div class="exp-wrap">
                <div class="exp-bg">
                    <?php
                    $experience_image = get_field('experience_image');
                    ?>
                    <img src="<?php echo esc_url($experience_image['url']) ?>" alt="">
                </div>
                <div class="exp-txt">
                    <h2><?php the_field('experience_text'); ?></h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Why Choose US -->
    <div class="comm-section">
        <div class="container">
            <div class="comm-head">
                <h3>
                    <?php the_field('choose_us_text'); ?>
                    <span class="comm-right"><?php the_field('choose_us_title'); ?></span>
                </h3>
            </div>

            <div class="choose-wrap">
                <div class="f-row f-3">
                    <?php while (have_rows('choose_us_reasons')) : the_row(); ?>
                    <div class="f-col">
                        <div class="choose-box">
                            <h3>0<?php echo get_row_index(); ?></h3>
                            <h2><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Our Services -->
    <div class="comm-section">
        <div class="container">
            <div class="right-head">
                <h2>
                    <?php the_field('service_title'); ?>
                </h2>
            </div>
            <div class="cargo-wrap">
                <?php while (have_rows('service_list')) : the_row();
                    $service_image = get_sub_field('service_image'); ?>
                <div class="cargo-box">
                    <div class="f-row f-2">
                        <div class="f-col">
                            <div class="cargo-txt">
                                <h3><?php the_sub_field('service_name'); ?></h3>
                                <p><?php the_sub_field('service_content'); ?></p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="cargo-img">
                                <img src="<?php echo esc_url($service_image['url']) ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- <div class="cargo-box">
                    <div class="f-row f-2">
                        <div class="f-col">
                            <div class="cargo-txt">
                                <h3>Sea Cargo</h3>
                                <p>With our broad range of Ocean Freight services covering different equipment types and consolidation
                                    services, we ensure your cargo reaches the right place, at the right time in a cost-efficient way.
                                </p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="cargo-img">
                                <img src="./img/cargo-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cargo-box">
                    <div class="f-row f-2">
                        <div class="f-col">
                            <div class="cargo-txt">
                                <h3>Import & Export</h3>
                                <p>Managing international import and export flows is at the heart of our business. We export and
                                    import massive tonnages to various destinations out of Dubai every month.</p>
                            </div>
                        </div>
                        <div class="f-col">
                            <div class="cargo-img">
                                <img src="./img/cargo-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div> -->
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

    <!-- Locations We Serve -->
    <div class="comm-section">
        <div class="container">
            <div class="locations-wrap">
                <div class="locations-left">
                    <div class="location-img">
                        <?php
                        $locations_image = get_field('locations_image');
                        ?>
                        <img src="<?php echo esc_url($locations_image['url']) ?>" alt="">
                    </div>
                </div>
                <div class="locations-right">
                    <div class="right-head">
                        <h2>
                            <?php the_field('locations_title'); ?>
                        </h2>
                        <a href="" class="button line">Reach Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Get Your Free Quote -->
    <div id="contact" style="position:relative;top:-50px"></div>

    <div class="comm-section">
        <div class="container">
            <div class="f-row">
                <div class="w50">
                    <div class="happy-head">
                        <h3>
                            <?php the_field('free_quote_title'); ?>
                        </h3>
                        <p><?php the_field('free_quote_subtitle'); ?></p>
                    </div>
                </div>
                <div class="w50">
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