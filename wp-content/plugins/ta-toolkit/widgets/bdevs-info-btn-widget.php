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
	add_action('widgets_init', 'bdevs_info_button_widget');
	function bdevs_info_button_widget() {
		register_widget('bdevs_info_button_widget');
	}
	
	
	class Bdevs_Info_button_Widget  extends WP_Widget{
		
		public function __construct(){
			parent::__construct('bdevs_info_button_widget',esc_html__('Footer Info Button','bdevs-toolkit'),array(
				'description' => esc_html__('Torun Footer Info Button Widget','bdevs-toolkit'),
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
                    <div class="footer-text">
                        <p><?php print $description; ?></p>
                        <a class="btn" href="<?php print esc_url( $btn_url ); ?>" tabindex="0"><span class="btn-text"><?php print esc_html($btn_text); ?> <i class="far fa-long-arrow-right"></i></span> </a> 
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
			$description  = isset($instance['description'])? $instance['description']:'';
			$logo_white  = isset($instance['white_logo'])? $instance['white_logo']:'';
			$btn_text  = isset($instance['btn_text'])? $instance['btn_text']:'';
			$btn_url  = isset($instance['btn_url'])? $instance['btn_url']:'';

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
				<label for="title"><?php esc_html_e('Short Description:','bdevs-toolkit'); ?></label>
			</p>

			<textarea class="widefat" rows="7" cols="15" id="<?php print esc_attr($this->get_field_id('description')); ?>" value="<?php print esc_attr($description); ?>" name="<?php print esc_attr($this->get_field_name('description')); ?>"><?php print esc_attr($description); ?></textarea>

			<p>
				<label for="title"><?php esc_html_e('Button Text:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('btn_text')); ?>"  name="<?php print esc_attr($this->get_field_name('btn_text')); ?>" class="widefat" value="<?php print esc_attr($btn_text); ?>">

			<p>
				<label for="title"><?php esc_html_e('Button Link:','bdevs-toolkit'); ?></label>
			</p>
			<input type="text" id="<?php print esc_attr($this->get_field_id('btn_url')); ?>"  name="<?php print esc_attr($this->get_field_name('btn_url')); ?>" class="widefat" value="<?php print esc_attr($btn_url); ?>">
			
			<?php
		}
				
		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
			$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';

			$instance['btn_text'] = ( ! empty( $new_instance['btn_text'] ) ) ? strip_tags( $new_instance['btn_text'] ) : '';

			$instance['btn_url'] = ( ! empty( $new_instance['btn_url'] ) ) ? strip_tags( $new_instance['btn_url'] ) : '';


			$instance['white_logo'] = ( ! empty( $new_instance['white_logo'] ) ) ? strip_tags( $new_instance['white_logo'] ) : '';
			return $instance;
		}
	}