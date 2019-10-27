<?php
	/**
	 * Torun Profile Widget
	 *
	 *
	 * @author 		Nilartstudio
	 * @category 	Widgets
	 * @package 	torun/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'bdevs_profile_socials_widget');
	function bdevs_profile_socials_widget() {
		register_widget('bdevs_profile_socials_widget');
	}
	
	
	class Bdevs_Profile_Socials_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('bdevs_profile_socials_widget',esc_html__('Torun Footer Social','bdevs-toolkit'),array(
				'description' => esc_html__('Torun Footer Info Social Widget','bdevs-toolkit'),
			));
		}
		
		public function widget($args, $instance){
			extract($args);
			extract($instance);
			
			 print $before_widget; 
                                 
		        if ( ! empty( $title ) ) {
					print $before_title . apply_filters( 'widget_title', $title ) . $after_title;
				}
		?>
                <div class="footer-logo">
                    <a href="<?php  print home_url(); ?>"><img src="<?php print $white_logo; ?>" alt=""></a>
                </div>
                <div class="footer-2-icon footer-4-icon">
                    <?php if($facebook): ?>
                    	<a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
                	<?php endif; ?>

					<?php if($twitter): ?>
                    	<a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>

					<?php if($instagram): ?>
                    	<a href="<?php print esc_url($instagram); ?>"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>

					<?php if($google_plus): ?>	
                    	<a href="<?php print esc_url($google_plus); ?>"><i class="fab fa-google-plus-g"></i></a>
                	<?php endif; ?>
                </div>

             	<?php print $after_widget; ?>
			<?php 
		}
		

		/**
		 * widget function.
		 *
		 * @see WP_Widget
		 * @access public
		 * @param array $instance
		 * @return void
		 */
		public function form($instance){

			$title  = isset($instance['title'])? $instance['title']:'';
			$logo_white  = isset($instance['white_logo'])? $instance['white_logo']:'';
			$twitter  = isset($instance['twitter'])? $instance['twitter']:'';
			$facebook  = isset($instance['facebook'])? $instance['facebook']:'';
			$instagram  = isset($instance['instagram'])? $instance['instagram']:'';
			$google_plus  = isset($instance['google_plus'])? $instance['google_plus']:'';

			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  name="<?php print esc_attr($this->get_field_name('title')); ?>" class="widefat" value="<?php print esc_attr($title); ?>">

			<p>
				<button type="submit" class="button button-secondary" id="primary_logo_info">Upload Logo</button>
				<input type="hidden" name="<?php print esc_attr($this->get_field_name('white_logo')); ?>" class="primary_logo_link" value="<?php print $logo_white ; ?>">
				<div class="primary-logo-show">
					<img src="<?php print $logo_white ; ?>" alt="" width="150" height="auto">
				</div>	
			</p>

			<p>
				<label for="title"><?php esc_html_e('Facebook:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('facebook')); ?>"  name="<?php print esc_attr($this->get_field_name('facebook')); ?>" class="widefat" value="<?php print esc_attr($facebook); ?>">

			<p>
				<label for="title"><?php esc_html_e('Twitter:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('twitter')); ?>"  name="<?php print esc_attr($this->get_field_name('twitter')); ?>" class="widefat" value="<?php print esc_attr($twitter); ?>">

			<p>
				<label for="title"><?php esc_html_e('instagram:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('instagram')); ?>"  name="<?php print esc_attr($this->get_field_name('instagram')); ?>" class="widefat" value="<?php print esc_attr($instagram); ?>">
			<p>
				<label for="title"><?php esc_html_e('google_plus:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('google_plus')); ?>"  name="<?php print esc_attr($this->get_field_name('google_plus')); ?>" class="widefat" value="<?php print esc_attr($google_plus); ?>">
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

			$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';

			$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';

			$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';

			$instance['google_plus'] = ( ! empty( $new_instance['google_plus'] ) ) ? strip_tags( $new_instance['google_plus'] ) : '';


			$instance['white_logo'] = ( ! empty( $new_instance['white_logo'] ) ) ? strip_tags( $new_instance['white_logo'] ) : '';
			return $instance;
		}
	}