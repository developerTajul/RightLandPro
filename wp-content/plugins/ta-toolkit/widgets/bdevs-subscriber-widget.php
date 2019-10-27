<?php
	/**
	 * Medodove Social Widget
	 *
	 *
	 * @author 		basictheme
	 * @category 	Widgets
	 * @package 	Medodove/Widgets
	 * @version 	1.0.1
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'bdevs_subscriber_widget');
	function bdevs_subscriber_widget() {
		register_widget('bdevs_subscriber_widget');
	}
	
	
	class Bdevs_Subscriber_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('bdevs_subscriber_widget',esc_html__('Torun Subscriber','bdevs-toolkit'),array(
				'description' => esc_html__('Torun Subscriber Widget','bdevs-toolkit'),
			));
		}
		
		public function widget($args,$instance){
			extract($args);
			extract($instance);
		 	print $before_widget; 
		?>

			<?php 
			if( $subscribe_style === 'style_1'): ?>
				<div class="subscribes-form">
	            	<?php
	                if($mailchimp_shortcode!=''){
						print do_shortcode($mailchimp_shortcode);
					}
					?>
	            </div>

			<?php 
			elseif( $subscribe_style === 'style_2' ): ?>
                <div class="single-newsletter ">
                    <div class="newsletter-form">
                        <form action="#">
                            <input placeholder="Enter Your Email :" type="email">
                            <button class="btn" type="submit"><span class="btn-text">subscribe <i class="far fa-long-arrow-right"></i></span> <span class="btn-border"></span></button>
                        </form>
                    </div>
                </div>
	        <?php 
	    	endif; ?>    

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
			$subscribe_style  = isset($instance['subscribe_style'])? $instance['subscribe_style'] : 'style_1';
			$mailchimp_shortcode  = isset($instance['mailchimp_shortcode'])? $instance['mailchimp_shortcode']:'';
			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  class="widefat" name="<?php print esc_attr($this->get_field_name('title')); ?>" value="<?php print esc_attr($title); ?>">

			<p>
				<label for="<?php echo $this->get_field_id('subscribe_style'); ?>">Choose Style</label>
				<select name="<?php echo $this->get_field_name('subscribe_style'); ?>" id="<?php echo $this->get_field_id('subscribe_style'); ?>" class="widefat">

					<option value="" disabled="disabled">Select Social Style</option>
					<option value="style_1" <?php if($subscribe_style === 'style_1'){ echo 'selected="selected"'; } ?>>Style 1</option>
					<option value="style_2" <?php if($subscribe_style === 'style_2'){ echo 'selected="selected"'; } ?>>Style 2</option>
					<option value="style_3" <?php if($subscribe_style === 'style_3'){ echo 'selected="selected"'; } ?>>Style 3</option>

				</select>
			</p>


			<p>
				<label for="title"><?php esc_html_e('Mailchimp Shortcode:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('mailchimp_shortcode')); ?>" class="widefat" name="<?php print esc_attr($this->get_field_name('mailchimp_shortcode')); ?>" value="<?php print esc_attr($mailchimp_shortcode); ?>">
			
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['subscribe_style'] = ( ! empty( $new_instance['subscribe_style'] ) ) ? strip_tags( $new_instance['subscribe_style'] ) : '';

			$instance['mailchimp_shortcode'] = ( ! empty( $new_instance['mailchimp_shortcode'] ) ) ? strip_tags( $new_instance['mailchimp_shortcode'] ) : '';
			return $instance;
		}
	}