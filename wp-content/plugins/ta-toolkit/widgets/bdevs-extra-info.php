<?php
	/**
	 * Contact Info Widget
	 *
	 *
	 * @author 		Nilartstudio
	 * @category 	Widgets
	 * @package 	torun/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'torun_extra_info_widget');
	function torun_extra_info_widget() {
		register_widget('torun_extra_info_widget');
	}
	
	
	class torun_Extra_Info_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('torun_extra_info_widget',esc_html__('torun Extra Info', 'bdevs-toolkit'),array(
				'description' => esc_html__('torun Extra Info Widget', 'bdevs-toolkit'),
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
                <div class="footer-contact-info-2">
                	<?php if($phone_number): ?>
					
                    <div class="f-contact-info-box fix mb-30">
                        <div class="footer-co-icon f-left">
                            <img src="<?php print get_template_directory_uri(); ?>/img/icon/footer-co-icon-1.png" alt="">
                        </div>
                        <div class="footer-co-content">
                            <span><?php print esc_html($time); ?></span>
                            <h4><?php print esc_html($phone_number); ?></h4>
                        </div>
                    </div>
					<?php endif; ?>

					<?php if($email): ?>
                    <div class="f-contact-info-box fix mb-30">
                        <div class="footer-co-icon f-left">
                            <img src="<?php print get_template_directory_uri(); ?>/img/icon/footer-co-icon-2.png" alt="">
                        </div>
                        <div class="footer-co-content">
                            <span><?php print esc_html_e('do you have a question?', 'bdevs-toolkit'); ?></span>
                            <h4><?php print esc_html($email); ?></h4>
                        </div>
                    </div>
					<?php endif; ?>


                    <div class="f-contact-info-box fix mb-30">
                    	<?php if(!empty($facebook) OR !empty($twitter) OR !empty($instagram) OR !empty($youtube) OR !empty($pinterest)): ?>
                        <div class="footer-co-icon f-left">
                            <img src="<?php print get_template_directory_uri(); ?>/img/icon/footer-co-icon-2.png" alt="">
                        </div>
                    <?php endif; ?>
                        <div class="footer-co-content">
                        	<?php if(!empty($facebook) OR !empty($twitter) OR !empty($instagram) OR !empty($youtube) OR !empty($pinterest)): ?>
                            <span><?php print esc_html_e('socials network', 'bdevs-toolkit'); ?></span>
                        	<?php endif; ?>
                            <ul>
	                        <?php if( !empty($facebook) ) : ?>
	                        	<li><a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
	                    	<?php endif; ?>

							<?php if( !empty($twitter) ): ?>
	                        	<li><a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a></li>
	                        <?php endif; ?>

							<?php if( !empty($instagram) ): ?>
	                        	<li><a href="<?php print esc_url($instagram); ?>"><i class="fab fa-instagram"></i></a></li>
							<?php endif; ?>


							<?php if( !empty($youtube) ): ?>	
	                        	<li><a href="<?php print esc_url($youtube); ?>"><i class="fab fa-youtube"></i></a></li>
	                    	<?php endif; ?>

							<?php if( !empty($pinterest) ): ?>	
	                        	<li><a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest-p"></i></a></li>
	                    	<?php endif; ?>
	                        </ul>
                        </div>
                    </div>
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
			$time  = isset($instance['time'])? $instance['time']:'';
			$email  = isset($instance['email'])? $instance['email']:'';
			$phone_number  = isset($instance['phone_number'])? $instance['phone_number']:'';

			$twitter  = isset($instance['twitter'])? $instance['twitter']:'';
			$facebook  = isset($instance['facebook'])? $instance['facebook']:'';
			$instagram  = isset($instance['instagram'])? $instance['instagram']:'';
			$youtube  = isset($instance['youtube'])? $instance['youtube']:'';
			$pinterest  = isset($instance['pinterest'])? $instance['pinterest']:'';
			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  name="<?php print esc_attr($this->get_field_name('title')); ?>" class="widefat" value="<?php print esc_attr($title); ?>">

			<p>
				<label for="title"><?php esc_html_e('Time :','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('time')); ?>"  name="<?php print esc_attr($this->get_field_name('time')); ?>" class="widefat" value="<?php print esc_attr($time); ?>">

			<p>
				<label for="title"><?php esc_html_e('Phone Number:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('phone_number')); ?>"  name="<?php print esc_attr($this->get_field_name('phone_number')); ?>" class="widefat" value="<?php print esc_attr($phone_number); ?>">

			<p>
				<label for="title"><?php esc_html_e('Email Address:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('email')); ?>"  name="<?php print esc_attr($this->get_field_name('email')); ?>" class="widefat" value="<?php print esc_attr($email); ?>">

			<p>
				<label for="title"><?php esc_html_e('Facebook:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" class="widefat" id="<?php print esc_attr($this->get_field_id('facebook')); ?>"  name="<?php print esc_attr($this->get_field_name('facebook')); ?>" value="<?php print esc_attr($facebook); ?>">


			<p>
				<label for="title"><?php esc_html_e('Twitter:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" class="widefat" id="<?php print esc_attr($this->get_field_id('twitter')); ?>"  name="<?php print esc_attr($this->get_field_name('twitter')); ?>" value="<?php print esc_attr($twitter); ?>">

			<p>
				<label for="title"><?php esc_html_e('Instagram:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" class="widefat" id="<?php print esc_attr($this->get_field_id('instagram')); ?>"  name="<?php print esc_attr($this->get_field_name('instagram')); ?>" value="<?php print esc_attr($instagram); ?>">
			<p>
				<label for="title"><?php esc_html_e('Youtube:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" class="widefat" id="<?php print esc_attr($this->get_field_id('youtube')); ?>"  name="<?php print esc_attr($this->get_field_name('youtube')); ?>" value="<?php print esc_attr($youtube); ?>">

			<p>
				<label for="title"><?php esc_html_e('Pinterest:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" class="widefat" id="<?php print esc_attr($this->get_field_id('pinterest')); ?>"  name="<?php print esc_attr($this->get_field_name('pinterest')); ?>" value="<?php print esc_attr($pinterest); ?>">
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['time'] = ( ! empty( $new_instance['time'] ) ) ? strip_tags( $new_instance['time'] ) : '';

			$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';

			$instance['phone_number'] = ( ! empty( $new_instance['phone_number'] ) ) ? strip_tags( $new_instance['phone_number'] ) : '';
			$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';

			$instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';

			$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';

			$instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';

			$instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';

			return $instance;
		}
	}