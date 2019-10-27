<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsServicePost extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-service-post';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Post Services', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-post-content';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'service-post' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_content_heading',
			[
				'label' => esc_html__( 'Section Heading', 'bdevs-elementor' ),
			]
		);
		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your prefix Heading', 'bdevs-elementor' ),
				'default'     => __( 'Awesome Features', 'bdevs-elementor' ),
				'label_block' => true
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true
			]
		);


		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'bdevs-elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'bdevs-elementor' ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
				'condition' => [
					'chose_style' => 'service_thumb_icon',
				],
				'label_block' => true
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'more services ', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'View All Services', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => 'service_thumb_icon',
				],
				'label_block' => true
			]
		);		

		$this->add_control(
			'link_icon',
			[
				'label'       => esc_html__( 'Link Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'far fa-long-arrow-right', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Type Your Icon Name', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => 'service_thumb_icon',
				],
				'label_block' => true
			]
		);

		$this->add_control(
			'show_link',
			[
				'label'   => esc_html__( 'Show Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_link_icon',
			[
				'label'   => esc_html__( 'Show Link Icon', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_link' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_service_post',
			[
				'label' => esc_html__( 'Section Service Post', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'service_icon'  => esc_html__( 'Service Icon', 'bdevs-elementor' ),
					'service_thumb' => esc_html__( 'Service Thumb', 'bdevs-elementor' ),
					'service_thumb_icon' => esc_html__( 'Service Thumb Icon 4 Column', 'bdevs-elementor' ),
					'service_thumb_icon_3_column' => esc_html__( 'Service Thumb Icon 3 Column', 'bdevs-elementor' ),
				],
				'default'   => 'service_thumb',
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Background Image', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['service_thumb']
				],
			]
		);

		$this->add_control(
			'post_number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'3'  => esc_html__( '3', 'bdevs-elementor' ),
					'4' => esc_html__( '4', 'bdevs-elementor' ),
					'6' => esc_html__( '6', 'bdevs-elementor' ),
					'9' => esc_html__( '9', 'bdevs-elementor' ),
					'12' => esc_html__( '12', 'bdevs-elementor' ),
				],
				'default'   => '3',
			]
		);

		$this->add_control(
			'post_order',
			[
				'label'     => esc_html__( 'Post Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'desc',
			]
		);

		$this->add_control(
			'post_contnet_alignment',
			[
				'label'     => esc_html__( 'Content Alignment', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'text-left'  => esc_html__( 'Left', 'bdevs-elementor' ),
					'text-center' => esc_html__( 'Center', 'bdevs-elementor' ),
					'text-right' => esc_html__( 'Right', 'bdevs-elementor' ),
				],
				'default'   => 'text-left',
			]
		);

		$this->add_control(
			'service_link_text',
			[
				'label'       => esc_html__( 'Service Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Read More ', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'label_block' => true
			]
		);		

		$this->add_control(
			'service_icon_name',
			[
				'label'       => esc_html__( 'Service btn Icon Name', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'far fa-long-arrow-right', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'icon name here', 'bdevs-elementor' ),
				'label_block' => true
			]
		);

		$this->add_control(
			'service_btn_on',
			[
				'label'   => esc_html__( 'Service BTN Switch', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'service_icon_on',
			[
				'label'   => esc_html__( 'Service icon Switch', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);


		$this->add_control(
			'show_heading_section',
			[
				'label'   => esc_html__( 'Show Heading Section', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_sub_heading',
			[
				'label'   => esc_html__( 'Show Sub Heading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_heading_section' => 'yes'
				],
			]
		);	

		$this->add_control(
			'show_heading',
			[
				'label'   => esc_html__( 'Show Heading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_heading_section' => 'yes'
				],
			]
		);	



		$this->end_controls_section();

		
		/** typography **/
		$this->start_controls_section(
			'typography_section',
			[
				'label' => esc_html__( 'Custom Typography', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'sub_heading_font_size',
			[
				'label'       => __( 'Sub Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'sub_heading_line_height',
			[
				'label'       => __( 'Sub Heading Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'sub_heading_n_title_gap',
			[
				'label'       => __( 'Heading & Sub Heading Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'sub_heading_color',
			[
				'label'       => __( 'Sub Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-10',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'heading_type',
			[
				'label'     => esc_html__( 'Heading Type', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'h1'  => esc_html__( 'H1', 'bdevs-elementor' ),
					'h2'  => esc_html__( 'H2', 'bdevs-elementor' ),
					'h3'  => esc_html__( 'H3', 'bdevs-elementor' ),
					'h4'  => esc_html__( 'H4', 'bdevs-elementor' ),
					'h5'  => esc_html__( 'H5', 'bdevs-elementor' ),
					'h6'  => esc_html__( 'H6', 'bdevs-elementor' ),
				],
			]
		);

		$this->add_control(
			'heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'heading_line_height',
			[
				'label'       => __( 'Heading Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'heading_n_desc_gap',
			[
				'label'       => __( 'Heading & Description Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		$this->end_controls_section();


	}

	public function render() {

		$settings  = $this->get_settings_for_display(); 
		extract( $settings );
		$order = $settings['post_order'];
		$post_number = $settings['post_number'];
		$chose_style = $settings['chose_style'];

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

		$image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_url = $image_src ? $image_src[0] : '';

		// sub heading info
		$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? 'font-size:'.$settings['sub_heading_font_size'] : '';
		$sub_heading_n_title_gap = !empty($settings['sub_heading_n_title_gap']) ? 'margin-bottom:'.$settings['sub_heading_n_title_gap'] : '';
		$sub_heading_color = !empty($settings['sub_heading_color']) ? 'color:'.$settings['sub_heading_color'] : '';

		$sub_heading_border_color = !empty($settings['sub_heading_color']) ? 'background-color:'.$settings['sub_heading_color'] : '';

		// heading info
		$heading_font_size = !empty($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
		$heading_line_height = !empty($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
		$heading_color = !empty($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
		$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';
		?>

		<?php if( $chose_style == 'service_thumb' ): ?>
            <!-- services-area-start -->
            <div class="services-area service-style-1 pt-120 pb-100" style="background-image:url(<?php print esc_url( $bg_url ); ?>)">
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>

	                    <div class="row">
	                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
	                            <div class="section-title ml-50 mr-50 mb-80">
	                                
	                                <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?> 
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>

	                            </div>
	                        </div>
	                    </div>

                	<?php 
                	endif; ?>
                    <div class="row">

                        <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-service',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post();
							$icon_thumb = get_post_meta(get_the_id(), 'service_icon_thumb', true);
							?>      
		                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
		                            <div class="services-wrapper <?php print esc_attr( $text_alignment ); ?>">
	                        			<?php 
	                        			if( $icon_thumb ): ?>
			                                <div class="services-img">
			                                    <img src="<?php print esc_url( $icon_thumb ); ?>" alt="icon thumb small">
			                                </div>
		                            	<?php 
		                            	endif; ?>
		                                <div class="services-text">
		                                    <h3><?php the_title(); ?></h3>
		                                    <p><?php print wp_trim_words(get_the_content(), 30, ''); ?></p>
											<?php 
											if ( $settings['service_btn_on'] ) : ?>
		                                    	<a href="<?php the_permalink(); ?>"> <span class="services-button"><?php echo wp_kses_post($settings['service_link_text']); ?> 
												<?php if( $settings['service_icon_on']): ?>
		                                    		<i class="<?php echo wp_kses_post( $settings['service_icon_name'] ); ?>"></i>
												<?php endif; ?>
		                                    </span> </a>
											<?php 
											endif; ?>
		                                </div>
		                            </div>
		                        </div>
							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>

                    </div>
                </div>
            </div>
            <!-- services-area-end -->

        <?php elseif( $chose_style == 'service_thumb_icon' ): ?>
            <!-- our-services-area-start -->
            <div class="our-services-area service-style-2 grey-bg-2 pt-120 pb-130 pr-45 pl-45">
            	<?php 
                if( $settings['show_heading_section'] == 'yes'): ?>
	                <div class="container">
	                    <div class="row">
	                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
	                            <div class="section-title  ml-50 mr-50 mb-85">
	                               <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?> 
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                <?php 
            	endif; ?>
                <div class="container-fluid">
                    <div class="row">
                        <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-service',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post();
								$icon_name = get_post_meta(get_the_id(), 'service_icon', true);
								$icon_thumb = get_post_meta(get_the_id(), 'service_icon_thumb', true);
							?> 
		                        <div class="col-xl-3 col-lg-3 col-md-6">
		                            <div class="our-services-wrapper mb-30 <?php print esc_attr( $text_alignment ); ?>">
		                            	<?php 
		                            	if( has_post_thumbnail() ): ?>
			                                <div class="our-services-img">
			                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Servoce Thumb">
			                                </div>
		                            	<?php 
		                            	endif; ?>
		                                <div class="our-services-content">
		                                    <div class="our-services-icon">
		                                        <i class="<?php print esc_attr( $icon_name ); ?>"></i>
		                                    </div>
		                                    <div class="our-services-text text-left">
		                                        <h3><?php the_title(); ?></h3> 
		                                        <p><?php print wp_trim_words(get_the_content(), 20, ''); ?></p>
			                                    <?php 
												if ( $settings['service_btn_on'] ) : ?>
				    				                <a href="<?php the_permalink(); ?>"><?php echo wp_kses_post($settings['service_link_text']); ?> 
				                                    	<?php if( $settings['service_icon_on']): ?>
				                                    		<i class="<?php echo wp_kses_post( $settings['service_icon_name'] ); ?>"></i>
				                                    	<?php endif; ?>
				                                    </a>
												<?php 
												endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>
                    </div>

					<?php 
					if ( ( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] == 'yes') ): ?>
	                    <div class="row">
	                        <div class="col-xl-12">
	                            <div class="services-button text-center mt-30">
	                                <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php print esc_html( $settings['link_text']); ?> 
									<?php if( $settings['show_link_icon']): ?>
	                                	<i class="<?php print esc_html( $settings['link_icon']); ?>"></i>
									<?php endif; ?>
	                                </span> </a>
	                            </div>
	                        </div>
	                    </div>
                    <?php 
                	endif; ?>
                	
                </div>
            </div>
            <!-- our-services-area-end -->
        <?php elseif( $chose_style == 'service_thumb_icon_3_column' ): ?>


            <!-- our-services-area-start -->
            <div class="our-services-area grey-bg-2 pt-120 pb-130">
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
	                            <div class="section-title ml-50 mr-50 mb-85">
	                               <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?> 
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                    </div>
	                <?php 
	                endif; ?>    
                    <div class="row">
                    	<?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-service',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post();
								$icon_name = get_post_meta(get_the_id(), 'service_icon', true);
								$icon_thumb = get_post_meta(get_the_id(), 'service_icon_thumb', true);
							?> 
	                        	<div class="col-xl-4 col-lg-4 col-md-6">
		                            <div class="our-services-wrapper mb-30 <?php print esc_attr( $text_alignment ); ?>">
		                            	<?php 
		                            	if( has_post_thumbnail() ): ?>
			                                <div class="our-services-img">
			                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Servoce Thumb">
			                                </div>
		                                <?php 
		                            	endif; ?>

		                                <div class="our-services-content">
		                                    <div class="our-services-icon">
		                                        <i class="<?php print esc_attr( $icon_name ); ?>"></i>
		                                    </div>
		                                    <div class="our-services-text">
		                                        <h3><?php the_title(); ?></h3> 
		                                        <p><?php print wp_trim_words(get_the_content(), 20, ''); ?></p>
		                                        <?php 
												if ( $settings['service_btn_on'] ) : ?>
				    				                <a href="<?php the_permalink(); ?>"><?php echo wp_kses_post($settings['service_link_text']); ?> 
				                                    	<?php if( $settings['service_icon_on']): ?>
				                                    		<i class="<?php echo wp_kses_post( $settings['service_icon_name'] ); ?>"></i>
				                                    	<?php endif; ?>
				                                    </a>
												<?php 
												endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>
                    </div>

					<?php 
					if ( ( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] == 'yes') ): ?>
	                    <div class="row">
	                        <div class="col-xl-12">
	                            <div class="services-button text-center mt-30">
	                                <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php print esc_html( $settings['link_text']); ?> 
									<?php if( $settings['show_link_icon']): ?>
	                                	<i class="<?php print esc_html( $settings['link_icon']); ?>"></i>
									<?php endif; ?>
	                                </span> </a>
	                            </div>
	                        </div>
	                    </div>
                    <?php 
                	endif; ?>
                </div>
            </div>
            <!-- our-services-area-end -->

        <?php elseif( $chose_style == 'service_icon' ): ?>

            <!-- services-area-start -->
            <div class="services-area pt-120 pb-60">
                <div class="container">
	                <?php 
	                if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
	                            <div class="section-title ml-50 mr-50 mb-80">
	                                
	                               <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?> 
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>

	                            </div>
	                        </div>
	                    </div>
	                <?php 
	                endif; ?>    
                    <div class="row">

                        <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-service',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post();
								$icon_name = get_post_meta(get_the_id(), 'service_icon', true);
								$icon_thumb = get_post_meta(get_the_id(), 'service_icon_thumb', true);
							?> 

								<div class="col-xl-4 col-lg-4 col-md-6 mb-75">
		                            <div class="services-2-wrapper <?php print esc_attr( $text_alignment ); ?>">
	                        			<?php 
	                        			if( $icon_thumb ): ?>
			                               	<div class="services-img">
		                                    	<img src="<?php print esc_url($icon_thumb); ?>" alt="icon">
		                                	</div>
		                            	<?php 
		                            	endif; ?>

		                                <div class="services-text">
		                                    <h3><?php the_title(); ?></h3> 
		                                    <p><?php print wp_trim_words(get_the_content(), 20, ''); ?></p>
											<?php 
											if ( $settings['service_btn_on'] ) : ?>
			                                    <a href="<?php the_permalink(); ?>"> <span class="services-button"><?php echo wp_kses_post($settings['service_link_text']); ?> 
			                                    	<?php if( $settings['service_icon_on']): ?>
			                                    		<i class="<?php echo wp_kses_post( $settings['service_icon_name'] ); ?>"></i>
			                                    	<?php endif; ?>
			                                    </span> </a>
											<?php 
											endif; ?>
		                                </div>
		                            </div>
		                        </div>
							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>

                    </div>
                </div>
            </div>
            <!-- services-area-end -->

		<?php endif; ?>	

	<?php
	}

}