<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rightlandpro
 */

get_header();

$blog_column = is_active_sidebar( 'right-sidebar' ) ? 8 : 12 ;

?>

<section class="blog-area pt-120 pb-80">
    <div class="container">
        <div class="row">
			<div class="col-lg-<?php print esc_attr($blog_column); ?> blog-post-items blog-padding">
				<div class="blog-wrapper blog-details-text blog-details-wrapper">
					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_format() );

						?>
					
						<?php if( get_previous_post_link() AND get_next_post_link() ) : ?>

						<div class="blog-details-border">
							<div class="row">

								<?php if(get_previous_post_link()) : ?>
								    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left mb-30">
                                            <span><a href="#"><?php print esc_html__( 'Prev Post', 'rightlandpro' ); ?></a></span>
                                            <h4><?php print get_previous_post_link('%link ', '%title'); ?></h4>
                                        </div>
                                    </div>
								<?php endif; ?>

                                <div class="col-xl-2 col-lg-2 col-md-2 ">
                                    <div class="bakix-filter text-left text-md-center mb-30">
                                        <a href="#"><img src="<?php print get_template_directory_uri(); ?>/img/icon/filter.png" alt=""></a>
                                    </div>
                                </div>


								<?php if(get_next_post_link()) : ?>
								    <div class="col-xl-5 col-lg-5 col-md-5">
                                        <div class="bakix-navigation b-next-post text-left text-md-right  mb-30">
                                            <span><a href="#"><?php print esc_html__( 'Next Post', 'rightlandpro' ); ?></a></span>
                                            <h4><?php print get_next_post_link( '%link ', '%title' ); ?></h4>
                                        </div>
                                    </div>
								<?php endif; ?>
								
							</div>
						</div>
						<?php endif; ?>

						<?php

						get_template_part( 'template-parts/biography');

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
			<?php if ( is_active_sidebar( 'right-sidebar' ) ) { ?>
		        <div class="col-lg-4 sidebar-blog right-side">
					<?php get_sidebar(); ?>
	            </div>
			<?php
			}
			?>
		</div>
	</div>
</section>

<?php
get_footer();
