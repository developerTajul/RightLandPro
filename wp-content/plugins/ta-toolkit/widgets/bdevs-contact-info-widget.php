<?php
	/**
	 * Contact Info Widget
	 *
	 *
	 * @author 		Nilartstudio
	 * @category 	Widgets
	 * @package 	pohat/Widgets
	 * @version 	1.0.0
	 * @extends 	WP_Widget
	 */
	add_action('widgets_init', 'zomata_contact_info_widget');
	function zomata_contact_info_widget() {
		register_widget('zomata_contact_info_widget');
	}
	
	
	class Zomata_Contact_Info_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('zomata_contact_info_widget',esc_html__('Contact Info', 'bdevs-toolkit'),array(
				'description' => esc_html__('Zomata Contact Info Widget', 'bdevs-toolkit'),
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

                    <div class="footer-info">
                        <p>But I must explain to you 
                            how all this mistaken</p>
                    </div>
                    <ul class="contact-link">
						<?php 
						if($phone_number): ?>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="contact-address-text">
                                    <h4><?php print esc_html($phone_number); ?></h4>
                                </div>
                            </li>
						<?php 
						endif; ?>


						<?php 
						if($email): ?>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="contact-address-text">
                                    <h4><?php print esc_html($email); ?></h4>
                                </div>
                            </li>
						<?php 
						endif; ?>


						<?php if($address): ?>
							<li>
                                <div class="contact-address-icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-address-text">
                                    <h4><?php print esc_html($address); ?></h4>
                                </div>
                            </li>
						<?php endif; ?>
                    </ul>
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
			$desc  = isset($instance['desc'])? $instance['desc']:'';
			$address  = isset($instance['address'])? $instance['address']:'';
			$email  = isset($instance['email'])? $instance['email']:'';
			$phone_number  = isset($instance['phone_number'])? $instance['phone_number']:'';
			?>
			<p>
				<label for="title"><?php esc_html_e('Title:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('title')); ?>"  name="<?php print esc_attr($this->get_field_name('title')); ?>" class="widefat" value="<?php print esc_attr($title); ?>">

			<p>
				<label for="title"><?php esc_html_e('Description:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('desc')); ?>"  name="<?php print esc_attr($this->get_field_name('desc')); ?>" class="widefat" value="<?php print esc_attr($desc); ?>">

			<p>
				<label for="title"><?php esc_html_e('Address:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('address')); ?>"  name="<?php print esc_attr($this->get_field_name('address')); ?>" class="widefat" value="<?php print esc_attr($address); ?>">

			<p>
				<label for="title"><?php esc_html_e('Email Address:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('email')); ?>"  name="<?php print esc_attr($this->get_field_name('email')); ?>" class="widefat" value="<?php print esc_attr($email); ?>">

			<p>
				<label for="title"><?php esc_html_e('Phone Number:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('phone_number')); ?>"  name="<?php print esc_attr($this->get_field_name('phone_number')); ?>" class="widefat" value="<?php print esc_attr($phone_number); ?>">
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? strip_tags( $new_instance['desc'] ) : '';
			$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';

			$instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';

			$instance['phone_number'] = ( ! empty( $new_instance['phone_number'] ) ) ? strip_tags( $new_instance['phone_number'] ) : '';

			return $instance;
		}
	}