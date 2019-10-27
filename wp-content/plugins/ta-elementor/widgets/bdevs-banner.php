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
class BdevsBanner extends \Elementor\Widget_Base {

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
		return 'bdevs-banner';
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
		return __( 'Banner', 'bdevs-elementor' );
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
		return 'eicon-favorite';
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
		return [ 'Banner' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'bdevs-elementor'),
	        'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
	        'center'        => esc_html__('Center', 'bdevs-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'banner_content_section',
			[
				'label' => esc_html__( 'Banner Content', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'banner-style-1'  => esc_html__( 'Banner Style 1', 'bdevs-elementor' ),
					'banner-style-2' => esc_html__( 'Banner Style 2', 'bdevs-elementor' ),
					'banner-style-3' => esc_html__( 'Banner Style 3', 'bdevs-elementor' ),
					'banner-style-4' => esc_html__( 'Banner Style 4', 'bdevs-elementor' ),
					'banner-style-5' => esc_html__( 'Banner Style 5', 'bdevs-elementor' ),
				],
				'default'   => 'banner-style-1',
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Sub Heading', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);


		$this->add_control(
			'sub_heading_type',
			[
				'label'     => esc_html__( 'Sub Heading Type', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'h1'  => esc_html__( 'H1', 'bdevs-elementor' ),
					'h2'  => esc_html__( 'H2', 'bdevs-elementor' ),
					'h3'  => esc_html__( 'H3', 'bdevs-elementor' ),
					'h4'  => esc_html__( 'H4', 'bdevs-elementor' ),
					'h5'  => esc_html__( 'H5', 'bdevs-elementor' ),
					'h6'  => esc_html__( 'H6', 'bdevs-elementor' ),
					'span'  => esc_html__( 'Span', 'bdevs-elementor' ),
				],
				'default'   => 'Select Sub Heading',
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);

		$this->add_control(
			'sub_heading_font_size',
			[
				'label'       => __( 'Sub Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);


		$this->add_control(
			'sub_heading_line_height',
			[
				'label'       => __( 'Sub Heading Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);

		$this->add_control(
			'sub_heading_n_title_gap',
			[
				'label'       => __( 'Heading & Sub Heading Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);

		$this->add_control(
			'sub_heading_color',
			[
				'label'       => __( 'Sub Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-2', 'banner-style-3',  'banner-style-5']
				],
			]
		);

		$this->add_control(
			'divider-1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
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
				'default'   => 'Select Heading',
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->add_control(
			'heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);


		$this->add_control(
			'heading_line_height',
			[
				'label'       => __( 'Heading Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->add_control(
			'heading_n_desc_gap',
			[
				'label'       => __( 'Heading & Description Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);


		$this->add_control(
			'heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->add_control(
			'divider-2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your description text', 'bdevs-elementor' ),
				'default'     => __( 'Description Here...', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->add_control(
			'desc_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);

		$this->end_controls_section();


		/** banner images **/
		$this->start_controls_section(
			'banner_images_section',
			[
				'label' => esc_html__( 'Banner Images', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Backgroud Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Background Image', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-3', 'banner-style-4', 'banner-style-5']
				],
			]
		);


		$this->end_controls_section();

		/** 
		*	Link section 
		**/
		$this->start_controls_section(
			'link_section_content',
			[
				'label' => esc_html__( 'Link Info', 'bdevs-elementor' ),
			]
		);		

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Discover Now', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['banner-style-1']
				],
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link Url', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'condition' => [
					'chose_style' => ['banner-style-1']
				],
			]
		);

		$this->add_control(
			'left_link_text',
			[
				'label'       => __( 'Left Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Get Started', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);

		$this->add_control(
			'left_link',
			[
				'label' => __( 'Left Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);
	
		$this->add_control(
			'right_link_text',
			[
				'label'       => __( 'Right Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Learn More', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);

		$this->add_control(
			'right_link',
			[
				'label' => __( 'Right Link', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
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
				'default'      => 'center',
			]
		);

		$this->add_control(
			'show_heading',
			[
				'label'   => esc_html__( 'Show Heading', 'bdevs-elementor' ),
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
			]
		);

		$this->add_control(
			'show_desc',
			[
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);		

		$this->add_control(
			'show_banner_image',
			[
				'label'   => esc_html__( 'Show Banner Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_link',
			[
				'label'   => esc_html__( 'Show Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['banner-style-1']
				],
			]
		);	

		$this->add_control(
			'show_left_link',
			[
				'label'   => esc_html__( 'Show Left Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);	

		$this->add_control(
			'show_right_link',
			[
				'label'   => esc_html__( 'Show Right Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['banner-style-1', 'banner-style-2']
				],
			]
		);

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);
		
   		$bg_image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_image_url = $bg_image_src ? $bg_image_src[0] : '';	


		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

		$this->add_render_attribute(
			[
				'left_link' => [
					'href'   => $settings['left_link']['url'] ? esc_url($settings['left_link']['url']) : '#',
					'target' => $settings['left_link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

		$this->add_render_attribute(
			[
				'right_link' => [
					'href'   => $settings['right_link']['url'] ? esc_url($settings['right_link']['url']) : '#',
					'target' => $settings['right_link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

		// banner style 1 er heading info
	    $heading_font_size = ($settings['heading_font_size']) ? $settings['heading_font_size'] : '85px';
	    $heading_line_height = ($settings['heading_line_height']) ? $settings['heading_line_height'] : '1';
	    $heading_n_desc_gap = ($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '38px';
	    $heading_color = ($settings['heading_color']) ? $settings['heading_color'] : '#42495b';
	    $heading_type = ($settings['heading_type']) ? $settings['heading_type'] : 'h1';


	    // banner style 1 er paragraph info
		$desc_font_size = ($settings['desc_font_size']) ? $settings['desc_font_size'] : '18px';
		$desc_color = ($settings['desc_color']) ? $settings['desc_color'] : '#5f5f5f';
	   ?>
			<style>
				/** banner style 1 **/
				.header-info {
					font-size: <?php print esc_attr( $heading_font_size ); ?>;
					line-height: <?php print esc_attr( $heading_line_height ); ?>;
					margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;
					color: <?php print esc_attr( $heading_color ); ?>;
				}				
				.desc-info {
					font-size: <?php print esc_attr( $desc_font_size ); ?>;
					color: <?php print esc_attr( $desc_color ); ?>;
				}


				/** banner style 2 **/
				.banner-style-2-sub-heading-info {
					font-size: <?php print esc_attr( $sub_heading_font_size ); ?> !important;
					line-height: <?php print esc_attr( $sub_heading_line_height ); ?> !important;
					margin-bottom: <?php print esc_attr( $sub_heading_n_title_gap ); ?> !important;
					color: <?php print esc_attr( $sub_heading_color ); ?> !important;
				}
				.banner-style-2-heading-info {
					font-size: <?php print esc_attr( $heading_font_size ); ?> !important;
					line-height: <?php print esc_attr( $heading_line_height ); ?> !important;
					margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?> !important;
					color: <?php print esc_attr( $heading_color ); ?> !important;
				}

				.s-slider-content h5 span{
					background-color: <?php print esc_attr( $sub_heading_color ); ?> !important;
				}


				/** banner style 3 **/
				.banner-style-3-sub-heading-info {
					font-size: <?php print esc_attr( $sub_heading_font_size ); ?> !important;
					color: <?php print esc_attr( $sub_heading_color ); ?> !important;
					margin-bottom: <?php print esc_attr( $sub_heading_n_title_gap ); ?> !important;
					border: 2px solid #ecf1ff;
				}
				.banner-style-3-heading-info {
					font-size: <?php print esc_attr( $heading_font_size ); ?> !important;
					line-height: <?php print esc_attr( $heading_line_height ); ?> !important;
					margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?> !important;
					color: <?php print esc_attr( $heading_color ); ?> !important;
				}

				/** banner style 4 **/
				.banner-style-4-heading-info {
					font-size: <?php print esc_attr( $heading_font_size ); ?> !important;
					line-height: <?php print esc_attr( $heading_line_height ); ?> !important;
					margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?> !important;
					color: <?php print esc_attr( $heading_color ); ?> !important;
				}


			</style>

			<?php 

		if( $chose_style == 'banner-style-1' ): ?>

           <!-- slider-start -->
            <div class="slider-area">
                <div class="slider-active">

                    <div class="single-slider slider-height slider-overlay d-flex align-items-center"
                        style="background-image:url(<?php print esc_url( $bg_image_url ); ?>)">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="slider-content">
		                            	<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>					
	                                		<<?php print esc_attr( $heading_type ); ?> 
	                                		class="wow fadeInUp header-info" 
	                                		data-wow-delay="0.2s" 
	                                		data-animation="fadeInLeft" 
	                                		data-delay=".3s">
	                                			<?php echo wp_kses_post($settings['heading']); ?>
	                                		</<?php print esc_attr( $heading_type ); ?>>
										<?php endif; ?>	

										<?php 
										if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
											<p class="wow fadeInUp desc-info" data-animation="fadeInLeft" data-delay=".5s"><?php echo wp_kses_post($settings['desc']); ?></p>
										<?php 
										endif; ?>	

										<div class="slider-button" data-animation="fadeInUp" data-delay=".7s">
		                                	<?php 
		                                	if (( '' !== $settings['left_link'] ) && ( $settings['show_left_link'] )) : ?>							
												<a <?php echo $this->get_render_attribute_string( 'left_link' ); ?> class="btn"><span class="btn-text"><?php echo esc_html($settings['left_link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
											<?php 
											endif; ?>

											<?php 
											if (( '' !== $settings['right_link'] ) && ( $settings['show_right_link'] )) : ?>
		                                   		<a <?php echo $this->get_render_attribute_string( 'right_link' ); ?> class="text-link"><?php echo esc_html($settings['right_link_text']); ?></a>
		                                    <?php 
		                                	endif; ?>
		                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-3 d-none d-lg-block">
                                    <div class="slider-video text-md-right">
                                    	<?php 
                                    	if (( '' !== $settings['link'] ) && ( $settings['show_link'] )) : ?>							
											<a class="popup-video" <?php echo $this->get_render_attribute_string( 'link' ); ?>><i class="fas fa-play"></i></a>
										<?php 
										endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

           
                </div>
            </div>
            <!-- slider-start -->

		<?php	elseif( $chose_style == 'banner-style-2' ): ?>
            <!-- slider-area -->
            <section class="slider-area p-relative fix">
                <div class="container-fluid s-slider-padding">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="slider-content s-slider-content">
                            	<?php if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
                                	<<?php print esc_attr( $sub_heading_type ); ?> class="wow fadeInUp banner-style-2-sub-heading-info" data-wow-delay="0.2s"><span></span><?php echo wp_kses_post($settings['sub_heading']); ?></<?php print esc_attr( $sub_heading_type ); ?>>
								<?php endif; ?>	

                            	<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                                	<<?php print esc_attr( $heading_type ); ?> class="wow fadeInUp banner-style-2-heading-info" data-wow-delay="0.2s"><span></span><?php echo wp_kses_post($settings['heading']); ?></<?php print esc_attr( $heading_type ); ?>>
								<?php endif; ?>	

                            	<?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
									<p class="wow fadeInUp desc-info" data-wow-delay="0.4s"><?php echo wp_kses_post($settings['desc']); ?></p>
								<?php endif; ?>

                                <div class="slider-btn mt-55">
                                	<?php if (( '' !== $settings['left_link'] ) && ( $settings['show_left_link'] )) : ?>
                                    	<a <?php echo $this->get_render_attribute_string( 'left_link' ); ?> class="btn purple-btn wow fadeInLeft" data-wow-delay="0.6s"><?php echo esc_html($settings['left_link_text']); ?></a>
									<?php endif; ?>

									<?php if (( '' !== $settings['right_link'] ) && ( $settings['show_right_link'] )) : ?>
                                   		<a <?php echo $this->get_render_attribute_string( 'right_link' ); ?> class="slider-play popup-video wow fadeInRight" data-wow-delay="0.6s"><i class="far fa-play"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="slider-img s-slider-img">
                                <img src="<?php print esc_url( $banner_image_url ); ?>" class="s-slider-main-img" alt="img">

                                <img src="<?php print esc_url($banner_image_1_url); ?>" class="ss-single-short s-img-shape wow slideInLeftS d-none d-xl-block" data-wow-delay="0.8s" alt="img">

                                <img src="<?php print esc_url($banner_image_2_url); ?>" class="ss-single-short s-img-shape-two wow slideInRight d-none d-xl-block" data-wow-delay="1s" alt="img">

                                <img src="<?php print esc_url($banner_image_3_url); ?>" class="ss-single-short s-progress-img wow slideInDown d-none d-xl-block" data-wow-delay="1.2s" alt="img">

                                <img src="<?php print esc_url($banner_image_4_url); ?>" class="ss-single-short gear_shape01 wow slideInDown d-none d-xl-block" data-wow-delay="1.4s" alt="img">

                                <img src="<?php print esc_url($banner_image_5_url); ?>" class="ss-single-short gear_shape02 wow slideInDown d-none d-xl-block" data-wow-delay="1.6s" alt="img">

                                <img src="<?php print esc_url($banner_image_6_url); ?>" class="ss-single-short sofa-man wow slideInLeftS d-none d-xl-block" data-wow-delay="1.8s" alt="img">

                                <img src="<?php print esc_url($banner_image_7_url); ?>" class="ss-single-short s-arrow-shape wow fadeInUp d-none d-xl-block" data-wow-delay="2s" alt="img">

                                <img src="<?php print esc_url($banner_image_8_url); ?>" class="ss-single-short chair-man wow slideInRight d-none d-xl-block" data-wow-delay="2.2s" alt="img">

                                <img src="<?php print esc_url($banner_image_9_url); ?>" class="ss-single-short search-shape wow fadeInUp d-none d-xl-block" data-wow-delay="2.6s" alt="img">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-slider-circle wow animated zoomIn" data-wow-duration="1s" data-wow-delay=".5s" data-parallax='{"x": 200, "y": -200}'><img src="<?php print esc_url($banner_image_10_url); ?>" alt="img"></div>
                <div class="s-slider-shape"><img src="<?php print esc_url($banner_image_11_url); ?>" alt="img"></div>
            </section>
            <!-- slider-area-end -->
        <?php	elseif( $chose_style == 'banner-style-3' ): ?>
            <!-- slider-area -->
            <section class="slider-area slider-md-p p-relative fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="slider-content t-slider-content">
                            	<?php if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
                                	<<?php print esc_attr( $sub_heading_type ); ?> class="wow fadeInUp banner-style-3-sub-heading-info" data-wow-delay="0.2s"><?php echo wp_kses_post($settings['sub_heading']); ?></<?php print esc_attr( $sub_heading_type ); ?>>
								<?php endif; ?>	

                            	<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                                	<<?php print esc_attr( $heading_type ); ?> class="wow fadeInUp banner-style-3-heading-info" data-wow-delay="0.2s"><?php echo wp_kses_post($settings['heading']); ?></h2>	
								<?php endif; ?>	

                            	<?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
									<p class="wow fadeInUp desc-info" data-wow-delay="0.4s"><?php echo wp_kses_post($settings['desc']); ?></p>
								<?php endif; ?>

                                <?php if (( '' !== $settings['link'] ) && ( $settings['show_link'] )) : ?>
	                                <div class="t-slider-btn display-ib wow fadeInLeft" data-wow-delay="0.6s">
	                                    <a <?php echo $this->get_render_attribute_string( 'link' ); ?> class="btn gradient-btn"><?php echo esc_html($settings['link_text']); ?></a>
	                                </div>
								<?php endif; ?>

                                <div class="app-download-btn display-ib wow fadeInRight" data-wow-delay="0.6s">
                                    <ul>
										<?php if (( '' !== $settings['playstore_link'] ) && ( $settings['show_playstore_link'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'playstore_link' ); ?>><i class="fab fa-google-play"></i></a></li>
                                        <?php endif; ?>	

										<?php  if (( '' !== $settings['android_link'] ) && ( $settings['show_android_link'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'android_link' ); ?>><i class="fab fa-android"></i></a></li>
										<?php  endif; ?>

                                        <?php  if (( '' !== $settings['windows_link'] ) && ( $settings['show_windows_link'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'windows_link' ); ?>><i class="fab fa-windows"></i></a></li>
                                        <?php  endif; ?>	
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php  if (( '' !== $settings['banner_image'] ) && ( $settings['show_banner_image'] )) : ?>
	                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
	                            <div class="app-slider-img wow fadeInRight" data-wow-delay="0.8s">
	                                <img src="<?php print esc_url( $banner_image_url ); ?>" class="alltuchtopdown" alt="img">
	                            </div>
	                        </div>
                    	<?php endif; ?>
                    </div>
                </div>
                <div class="app-slider-bg"><img src="<?php print esc_url( $bg_image_url ); ?>" alt="Banner BG"></div>
                <div class="app-slider-shape"><img src="<?php print esc_url( $banner_shape_url ); ?>" alt="Banner Shape"></div>
            </section>
            <!-- slider-area-end -->
        <?php	elseif( $chose_style == 'banner-style-4' ): ?>
            
            <!-- slider-area -->
            <section class="slider-area slider-md-p sass-slider-bg p-relative" data-background="<?php print esc_url( $bg_image_url ); ?>">
                <div class="container-fluid sass-slider-padding">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="slider-content sass-slider-content">
                            	<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
                                	<<?php print esc_attr( $heading_type ); ?> class="wow fadeInUp banner-style-4-heading-info" data-wow-delay="0.2s"><?php echo wp_kses_post($settings['heading']); ?></<?php print esc_attr( $heading_type ); ?>>	
								<?php endif; ?>	

                            	<?php if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
									<p class="wow fadeInUp desc-info" data-wow-delay="0.4s"><?php echo wp_kses_post($settings['desc']); ?></p>
								<?php endif; ?>


								<?php if (( '' !== $settings['link'] ) && ( $settings['show_link'] )) : ?>
	                                <div class="sass-slider-btn mt-45 wow fadeInUp" data-wow-delay="0.6s">
	                                    <a <?php echo $this->get_render_attribute_string( 'link' ); ?> class="btn sass-btn"><?php echo esc_html($settings['link_text']); ?></a>
	                                </div>
								<?php endif; ?>

                            </div>
                        </div>
                        <?php  
                        if (( '' !== $settings['banner_image'] ) && ( $settings['show_banner_image'] )) : ?>
	                        <div class="col-xl-7 col-lg-6 d-none d-lg-block">
	                            <div class="sass-slider-img">
	                                <img src="<?php print esc_url( $banner_image_url ); ?>" alt="img">
	                            </div>
	                        </div>
                    	<?php 
                    	endif; ?>
                    </div>
                </div>
                <div class="sass-slider-shape sss-one rotateme"><img src="<?php print get_template_directory_uri(); ?>/img/shape/sass_slider_shape01.png" alt=""></div>
                <div class="sass-slider-shape sss-two alltuchtopdown"><img src="<?php print get_template_directory_uri(); ?>/img/shape/sass_slider_shape02.png" alt=""></div>
                <div class="sass-slider-shape sss-three rotateme"><img src="<?php print get_template_directory_uri(); ?>/img/shape/sass_slider_shape03.png" alt=""></div>
                <div class="sass-slider-shape sss-four alltuchtopdown"><img src="<?php print get_template_directory_uri(); ?>/img/shape/sass_slider_shape04.png" alt=""></div>
                <div class="sass-slider-shape sss-five moveshape-one"><img src="<?php print get_template_directory_uri(); ?>/img/shape/sass_slider_shape05.png" alt=""></div>
            </section>
            <!-- slider-area-end -->
 		<?php	elseif( $chose_style == 'banner-style-5' ): 

			// sub heading 
		   $sub_heading_font_size = ($settings['sub_heading_font_size']) ? $settings['sub_heading_font_size'] : '45px';
		   $sub_heading_color = ($settings['sub_heading_color']) ? $settings['sub_heading_color'] : '#fff';
		   $sub_heading_n_title_gap = ($settings['sub_heading_n_title_gap']) ? $settings['sub_heading_n_title_gap'] : '20px';
		   $sub_heading_line_height = ($settings['sub_heading_line_height']) ? $settings['sub_heading_line_height'] : '1';


			// sub heading 
 			$heading_n_desc_gap = ($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '35px';
		   	$heading_font_size = ($settings['heading_font_size']) ? $settings['heading_font_size'] : '22px';
		   	$heading_line_height = ($settings['heading_line_height']) ? $settings['heading_line_height'] : '2';
		    $heading_color = ($settings['heading_color']) ? $settings['heading_color'] : '#42495b';
		   	$heading_type = ($settings['heading_type']) ? $settings['heading_type'] : 'h2';

		   	// description
		   	$desc_font_size = ($settings['desc_font_size']) ? $settings['desc_font_size'] : '18px';
			$desc_color = ($settings['desc_color']) ? $settings['desc_color'] : '#b79eff';
 		?>

 			<style>

				/** banner style 5 **/
				.banner-style-5-sub-heading-info {
					line-height: <?php print esc_attr( $sub_heading_line_height ); ?> !important;
					font-size: <?php print esc_attr( $sub_heading_font_size ); ?> !important;
					color: <?php print esc_attr( $sub_heading_color ); ?> !important;
					margin-bottom: <?php print esc_attr( $sub_heading_n_title_gap ); ?> !important;
				}
				
				/** sub heading info **/
				.portfolio-headline {
					margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?> !important;
				}
				.cd-words-wrapper b {
					font-size: <?php print esc_attr( $heading_font_size ); ?> !important;
					line-height: <?php print esc_attr( $heading_line_height ); ?> !important;
					color: <?php print esc_attr( $heading_color ); ?> !important;
				}

				/** descriptino info **/
				.portfolio-slider-content p {
					font-size: <?php print esc_attr( $desc_font_size ); ?>;
					color: <?php print esc_attr( $desc_color ); ?>;
				}

 			</style>

            <!-- slider-area -->
            <section class="slider-area slider-md-p portfolio-slider fix" data-background="<?php print esc_url( $bg_image_url ); ?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="portfolio-slider-content">

                            	<?php 
                            	if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
                            		<<?php print esc_attr( $sub_heading_type ); ?> class="banner-style-5-sub-heading-info"><?php echo wp_kses_post($settings['sub_heading']); ?>
                            		</<?php print esc_attr( $sub_heading_type ); ?>>
								<?php 
								endif; ?>	

                            	<?php 
                            	if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
	                                <<?php print esc_attr( $heading_type ); ?> class="cd-headline rotate-1 portfolio-headline">
	                                    <span class="cd-words-wrapper">
	                                        <?php echo wp_kses_post($settings['heading']); ?>
	                                    </span>
	                                </<?php print esc_attr( $heading_type ); ?>>	
								<?php 
								endif; ?>

								<?php 
								if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
									<p><?php echo wp_kses_post($settings['desc']); ?></p>
								<?php 
								endif; ?>

								<?php 
								if (( '' !== $settings['link'] ) && ( $settings['show_link'] )) : ?>
	                                <div class="p-slider-btn display-ib">
	                                    <a <?php echo $this->get_render_attribute_string( 'link' ); ?> class="btn p-btn"><?php echo esc_html($settings['link_text']); ?></a>
	                                </div>
								<?php 
								endif; ?>

                                <div class="pslider-social display-ib">
                                    <ul>
                                        <?php 
										if (( '' !== $settings['facebook_url'] ) && ( $settings['show_facebook'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'facebook_url' ); ?>><i class="<?php print esc_attr( $facebook_icon ); ?>"></i></a></li>
                                    	<?php endif; ?>

										<?php 
										if (( '' !== $settings['twitter_url'] ) && ( $settings['show_twitter'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'twitter_url' ); ?>><i class="<?php print esc_attr( $twitter_icon ); ?>"></i></a></li>
										<?php endif; ?>

										<?php 
										if (( '' !== $settings['google_plus_url'] ) && ( $settings['show_google+'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'google_plus_url' ); ?>><i class="<?php print esc_attr( $google_plus_icon ); ?>"></i></a></li>
										<?php endif; ?>

										<?php 
										if (( '' !== $settings['behance_url'] ) && ( $settings['show_behance'] )) : ?>
                                        	<li><a <?php echo $this->get_render_attribute_string( 'behance_url' ); ?>><i class="<?php print esc_attr( $behance_icon ); ?>"></i></a></li>
                                    	<?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="p-slider-img p-relative">
                                <img src="<?php print esc_url( $portfolio_banner_img_url ); ?>" alt="img">
                                <img src="<?php print esc_url( $banner_tag_image_url ); ?>" alt="img" class="p-slider-tag alltuchtopdown">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

		<?php endif; ?>		

	<?php
	}

}