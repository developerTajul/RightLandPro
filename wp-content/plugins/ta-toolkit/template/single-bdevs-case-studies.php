<?php 
/** 
 * The main template file
 *
 * @package  WordPress
 * @subpackage  torun
 */
get_header(); ?>


            <!-- case-details-area-start -->
            <div class="case-details-area pt-130 pb-130">
                <div class="container">
                    <div class="row">
                    <?php 
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                            $service_subtitle = get_post_meta(get_the_ID(),'service_subtitle',true);
                            $bdevs_service_thumb = get_post_meta(get_the_ID(),'service_thumb',true);
                            ?>
                            <div class="col-xl-12">
                                <div class="case-details-wrapper">
                                    <div class="case-details-img">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 mb-30">
                                        <div class="case-details-text">
                                            <h1><?php the_title(); ?></h1>
                                            <span>Our expertise allows business owners to reap the benefits of tapping our IT speciists without having to hire a full-time emploee. In ation, it also reduces the risks associated with not properly maintaining core</span>
                                            <div class="case-post-tag">
                                                <span>Project Tags :</span>
                                                <a href="#">IT,</a>
                                                <a href="#">Management,</a>
                                                <a href="#">Strategy, </a>
                                                <a href="#">Product Design</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-7 mb-30">
                                        <div class="case-details-content">
                                            <p><?php the_content(); ?></p>
                                            <div class="case-share-icon">
                                                <span>Project Share :</span>
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                                <a href="#"><i class="fab fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gallery-layout-bg mt-55">
                                    <div class="gallery-layout-info">
                                        <span>Case Name</span>
                                        <h5>IT Consultancy</h5>
                                    </div>
                                    <div class="gallery-layout-info">
                                        <span>Category</span>
                                        <h5>Product Design</h5>
                                    </div>
                                    <div class="gallery-layout-info">
                                        <span>Date</span>
                                        <h5>10 Sep 2019</h5>
                                    </div>
                                    <div class="gallery-layout-info">
                                        <span>Clients</span>
                                        <h5>BDevs Ltd</h5>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        endwhile; wp_reset_query();
                    endif; 
                    ?>
                    </div>
                </div>
            </div>
            <!-- case-details-area-end -->

            <!-- case-studies-start -->
            <div class="case-studies grey-bg pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-studies-wrapper mb-30">
                                <div class="case-studies-img">
                                    <img src="assets/img/project/c-01.jpg" alt="">
                                    <div class="case-studies-text">
                                        <span>Design strategy</span>
                                        <h3><a href="#">Creative Idea Buildup</a></h3>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-studies-wrapper mb-30">
                                <div class="case-studies-img">
                                    <img src="assets/img/project/c-02.jpg" alt="">
                                    <div class="case-studies-text">
                                        <span>Design strategy</span>
                                        <h3><a href="#">Creative Idea Buildup</a></h3>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-studies-wrapper mb-30">
                                <div class="case-studies-img">
                                    <img src="assets/img/project/c-03.jpg" alt="">
                                    <div class="case-studies-text">
                                        <span>Design strategy</span>
                                        <h3><a href="#">Creative Idea Buildup</a></h3>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="case-studies-info">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- case-studies-end -->

<?php get_footer();  ?>