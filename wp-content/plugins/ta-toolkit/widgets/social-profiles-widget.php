<?php
	/**
	 * pohat Social Widget
	 *
	 *
	 * @author 		Nilartstudio
	 * @category 	Widgets
	 * @package 	pohat/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'social_profiles_widget');
	function social_profiles_widget() {
		register_widget('social_profiles_widget');
	}
	
	
	class Social_Profiles_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('social_profiles_widget',esc_html__('rightland-pro Social Profile','bdevs-toolkit'),array(
				'description' => esc_html__('Social Profile Widget by rightland-pro','bdevs-toolkit'),
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
			<?php if( $social_style === 'style_1'): ?>

				<div class="footer-2-icon footer-3-icon">
					<?php if($facebook): ?>
		            <a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
		        	<?php endif; ?>

					<?php if($twitter): ?>
		            <a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
		            <?php endif; ?>

					<?php if($behance): ?>
		            <a href="<?php print esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
					<?php endif; ?>

					<?php if($youtube): ?>	
		            <a href="<?php print esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a>
		        	<?php endif; ?>

					<?php if($pinterest): ?>	
		            <a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
		        	<?php endif; ?>
				</div>

			<?php elseif( $social_style === 'style_2' ): ?>

				<div class="social-profile">
					<?php if($facebook): ?>
		            <a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
		        	<?php endif; ?>

					<?php if($twitter): ?>
		            <a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
		            <?php endif; ?>

					<?php if($behance): ?>
		            <a href="<?php print esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
					<?php endif; ?>

					<?php if($youtube): ?>	
		            <a href="<?php print esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a>
		        	<?php endif; ?>

					<?php if($pinterest): ?>	
		            <a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
		        	<?php endif; ?>
				</div>

			<?php elseif( $social_style === 'style_3' ): ?>

				<div class="footer-2-icon text-lg-right">
                    <?php if($facebook): ?>
		            <a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
		        	<?php endif; ?>

					<?php if($twitter): ?>
		            <a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
		            <?php endif; ?>

					<?php if($behance): ?>
		            <a href="<?php print esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
					<?php endif; ?>

					<?php if($youtube): ?>	
		            <a href="<?php print esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a>
		        	<?php endif; ?>

					<?php if($pinterest): ?>	
		            <a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
		        	<?php endif; ?>
                 </div>

			<?php endif; ?>
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
			$social_style  = isset($instance['social_style'])? $instance['social_style'] : 'style_1';
			$twitter  = isset($instance['twitter'])? $instance['twitter']:'';
			$facebook  = isset($instance['facebook'])? $instance['facebook']:'';
			$behance  = isset($instance['behance'])? $instance['behance']:'';
			$youtube  = isset($instance['youtube'])? $instance['youtube']:'';
			$pinterest  = isset($instance['pinterest'])? $instance['pinterest']:'';

			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','bdevs-toolkit'); ?></label>
			</p>

			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  name="<?php print esc_attr($this->get_field_name('title')); ?>" class="widefat" value="<?php print esc_attr($title); ?>">


			<p>
				<label for="<?php echo $this->get_field_id('social_style'); ?>">Choose Style</label>
				<select name="<?php echo $this->get_field_name('social_style'); ?>" id="<?php echo $this->get_field_id('social_style'); ?>" class="widefat">

					<option value="" disabled="disabled">Select Social Style</option>
					<option value="style_1" <?php if($social_style === 'style_1'){ echo 'selected="selected"'; } ?>>Style 1</option>
					<option value="style_2" <?php if($social_style === 'style_2'){ echo 'selected="selected"'; } ?>>Style 2</option>
					<option value="style_3" <?php if($social_style === 'style_3'){ echo 'selected="selected"'; } ?>>Style 3</option>

				</select>
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
				<label for="title"><?php esc_html_e('Behance:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('behance')); ?>"  name="<?php print esc_attr($this->get_field_name('behance')); ?>" class="widefat" value="<?php print esc_attr($behance); ?>">
			<p>
				<label for="title"><?php esc_html_e('Youtube:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('youtube')); ?>"  name="<?php print esc_attr($this->get_field_name('youtube')); ?>" class="widefat" value="<?php print esc_attr($youtube); ?>">

			<p>
				<label for="title"><?php esc_html_e('Pinterest:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('pinterest')); ?>"  name="<?php print esc_attr($this->get_field_name('pinterest')); ?>" class="widefat" value="<?php print esc_attr($pinterest); ?>">
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

			$instance['social_style'] = ( ! empty( $new_instance['social_style'] ) ) ? strip_tags( $new_instance['social_style'] ) : '';


			$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';

			$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';

			$instance['behance'] = ( ! empty( $new_instance['behance'] ) ) ? strip_tags( $new_instance['behance'] ) : '';

			$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';

			$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';

			return $instance;
		}
	}