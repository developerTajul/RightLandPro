<?php get_header(); ?>
    <div class="project-details-area pt-120 pb-90 ">
        <div class="container">
			<?php if( have_posts() ):
					while( have_posts() ): the_post();
						$bdevs_portfolio_thumb = get_post_meta(get_the_ID(),'portfolio_thumb',true);
						$project_images_gallerys = get_post_meta(get_the_ID(),'project_images',true);
						$company_name = get_post_meta(get_the_ID(),'company_name',true);
						$company_location = get_post_meta(get_the_ID(),'company_location',true);
						$portfolio_date = get_post_meta(get_the_ID(),'portfolio_date',true);
						$project_link = get_post_meta(get_the_ID(),'project_link',true);
						?>	
			            <div class="row">
			                <div class="col-xl-4 col-lg-4">
			                    <div class="project-status mb-30">
			                        <ul>
			                            <li><b><?php esc_html_e('Date:', 'bdevs-toolkit'); ?></b> <span><?php print ($portfolio_date!='')?date('F, Y',strtotime($portfolio_date)):''; ?></span></li>
			                            <li><b><?php esc_html_e('Location:', 'bdevs-toolkit'); ?></b> <span><?php print ($company_location!='') ? $company_location: ''; ?></span></li>
			                            <li><b><?php esc_html_e('Client:', 'bdevs-toolkit'); ?></b> <span><?php print ($company_name!='') ? $company_name: ''; ?></span></li>
			                            <li><b><?php esc_html_e('Category:', 'bdevs-toolkit'); ?></b> <span><?php print bdevs_get_terms(get_the_ID(), 'portfolio_categories'); ?></span></li>
			                            <li><b><?php esc_html_e('Project Link:', 'bdevs-toolkit'); ?></b> <span><?php print ($project_link!='') ? $project_link: ''; ?></span></li>
			                        </ul>
			                    </div>
			                    <?php do_action("torun_portfolio_sidebar"); ?>
			                </div>
			                <div class="col-xl-8 col-lg-8">
			                	<div class="project-details-content">
				                    <div class="project-desc mb-30">
				                        <img src="<?php print esc_attr($bdevs_portfolio_thumb); ?>" alt="<?php the_title(); ?>" />
				                    </div>
				                    <div class="project-desc mb-30">
				                        <?php the_content(); ?>
				                    </div>

						            <?php 
						            if( $project_images_gallerys ){ ?>
							            <div class="row mt-50">

							            <?php 
							            	foreach ($project_images_gallerys as $key => $image) { ?>
							            	<div class="col-xl-6 col-lg-6 col-md-6">
							                    <div class="project-desc mb-30">
							                    	<?php print wp_get_attachment_image( $key, 'bdevs-gallery-thumb'); 
							                    	?>
							                    </div>
							                </div>
							            <?php }  ?>

							            </div>
						        	<?php } ?>

					        	</div>
			                </div>
			            </div>

						<?php 
					endwhile;
				endif; 
			?>
        </div>
    </div>
<?php get_footer(); ?>          