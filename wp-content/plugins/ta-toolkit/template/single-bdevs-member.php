<?php 
/** 
 * The main template file
 *
 * @package  WordPress
 * @subpackage  torun
 */
get_header(); ?>

        <?php 
            if( have_posts() ):
            while( have_posts() ):the_post();
                    $title = get_post_meta(get_the_ID(), 'member_title', true);
                    $designation = get_post_meta(get_the_ID(), 'member_designation', true);
                    $short_desc = get_post_meta(get_the_ID(), 'member_short_desc', true);
                    $member_single_img_url = get_post_meta( get_the_ID(), 'member_single_img', true );

                    $contact_info_repeat_group = get_post_meta(get_the_ID(), 'contact_info_repeat_group', true); 
                    $left_skills_repeat_group = get_post_meta(get_the_ID(), 'left_skills_repeat_group', true); 
                    $right_skills_repeat_group = get_post_meta(get_the_ID(), 'right_skills_repeat_group', true); 

                    $video_title = get_post_meta(get_the_ID(), 'video_title', true); 
                    $video_short_desc = get_post_meta(get_the_ID(), 'video_short_desc', true); 
                    $video_link = get_post_meta(get_the_ID(), 'video_link', true); 
                    $video_preview_image = get_post_meta(get_the_ID(), 'video_preview_image', true); 

                    $facebook = get_post_meta(get_the_ID(), 'profile_fb_url', true);
                    $twitter = get_post_meta(get_the_ID(), 'profile_twitter_url', true);
                    $instagram = get_post_meta(get_the_ID(), 'profile_instagram_url', true);
                    $google = get_post_meta(get_the_ID(), 'profile_google_url', true);
                    ?>
            <!-- single-team-area-start -->
            <div class="single-team-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="single-img">
                                <img src="<?php print esc_url( $member_single_img_url ); ?>" alt="Member Image">
                            </div>
                        </div>
                        <div class="col-xl-6  col-lg-6 mb-30">
                            <div class="single-team-wrapper">
                                <div class="single-team-text">
                                    <h1><?php print wp_kses_post( $title ); ?></h1>
                                    <span><?php print wp_kses_post( $designation ); ?></span>
                                    <p><?php print wp_kses_post( $short_desc ); ?></p>
                                    
                                    <?php 
                                    if(is_array($contact_info_repeat_group)): ?>         
                                    <div class="team-single">
                                        <?php   
                                        foreach ($contact_info_repeat_group as $value) { ?>
                                            <div class="single-team-info">
                                                <div class="single-team-icon">
                                                    <img src="<?php print $value['contact_icon']; ?>" alt="">
                                                </div>
                                                <div class="team-info">
                                                    <span><?php print $value['contact_label']; ?></span>
                                                    <h4><?php print $value['contact_info']; ?></h4>
                                                </div>
                                            </div>
                                        <?php  
                                        } 
                                        ?> 
                                    </div>
                                    <?php 
                                    endif; ?>

                                    <div class="team-2-icon">
                                        <span>Follow Me</span>
                                        <a href="<?php print esc_url( $facebook ); ?>"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?php print esc_url( $twitter ); ?>"><i class="fab fa-twitter"></i></a>
                                        <a href="<?php print esc_url( $instagram ); ?>"><i class="fab fa-instagram"></i></a>
                                        <a href="<?php print esc_url( $google ); ?>"><i class="fab fa-google"></i></a>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-team-area-end -->

            <!-- our-skill-area-start -->
            <div class="our-skill-area">
                <div class="container">
                    <div class="skill-bg">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="progress-wrapper pr-25">
                                    <div class="progress-bar-text">
                                        <?php 
                                        if(is_array($left_skills_repeat_group)): ?> 
                                            <div class="progress-skill">
                                                <?php   
                                                foreach ($left_skills_repeat_group as $value) { ?>
                                                    <div class="single-skill mb-35">
                                                        <div class="bar-title">
                                                            <h4><?php print wp_kses_post($value['left_skill_label']); ?></h4>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: <?php print esc_attr($value['left_skill_info']); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                                                                <span><?php print wp_kses_post($value['left_skill_info']); ?>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  
                                                } 
                                                ?> 
                                            </div>
                                        <?php 
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="progress-wrapper pl-25">
                                    <div class="progress-bar-text progress-bar-2-text">
                                        <?php 
                                        if(is_array($right_skills_repeat_group)): ?>                                         
                                            <div class="progress-skill">
                                                <?php   
                                                foreach ($right_skills_repeat_group as $value) { ?>
                                                    <div class="single-skill mb-35">
                                                        <div class="bar-title">
                                                            <h4><?php print wp_kses_post($value['right_skill_label']); ?></h4>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar wow slideInLeft" role="progressbar" style="width: <?php print esc_attr($value['right_skill_info']); ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
                                                                <span><?php print wp_kses_post($value['right_skill_info']); ?>%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  
                                                } 
                                                ?> 
                                            </div>
                                        <?php 
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
            <!-- our-skill-area-end -->

            <!-- experience-area-satrt -->
            <div class="experience-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 mb-30">
                            <div class="experience-text">
                                <h1><?php print wp_kses_post( $video_title ); ?></h1>
                                <?php print wp_kses_post( $video_short_desc ); ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="experience-single mb-30">
                                <div class="experience-img">
                                    <img src="<?php print esc_url( $video_preview_image ); ?>" alt="Preview Image">
                                    <div class="experience-video">
                                        <a class="popup-video" href="<?php print esc_url( $video_link ); ?>" tabindex="0"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- experience-area-end -->
                <?php 
                endwhile; wp_reset_query();
            endif; 
        ?>


<?php get_footer();  ?>