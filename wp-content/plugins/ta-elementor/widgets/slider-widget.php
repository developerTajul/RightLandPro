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
class BdevsSlider extends \Elementor\Widget_Base {

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
		return 'bdevs-slider';
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
		return __( 'Slider', 'bdevs-elementor' );
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
		return 'eicon-slideshow';
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
		return [ 'slides', 'carousel' ];
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
			'section_content_sliders',
			[
				'label' => esc_html__( 'Sliders', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'slider-style-1'  => esc_html__( 'Slider Style 1', 'bdevs-elementor' ),
					'slider-style-2' => esc_html__( 'Slider Style 2', 'bdevs-elementor' ),
					'slider-style-3' => esc_html__( 'Slider Style 3', 'bdevs-elementor' ),
					'slider-style-4' => esc_html__( 'Slider Style 4', 'bdevs-elementor' ),
				],
				'default'   => 'slider-style-1',
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Slider Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Slide #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [
					[
						'name'        => 'tab_sub_title',
						'label'       => esc_html__( 'Sub Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Slide Sub Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],					
					[
						'name'        => 'tab_sub_title_tag',
						'label'       => esc_html__( 'Sub Title Tag', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Slide Sub Title Tag' , 'bdevs-elementor' ),
						'label_block' => true,
					],					
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Slide Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'    => 'tab_thumbnail',
						'label'   => esc_html__( 'Slide Thumb Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Content', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Slide Content', 'bdevs-elementor' ),
						'show_label' => true,
					],
					[
						'name'       => 'tab_content_list',
						'label'      => esc_html__( 'List', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Slide Content List', 'bdevs-elementor' ),
						'show_label' => true,
					],
					[
						'name'        => 'tab_link',
						'label'       => esc_html__( 'Link Left Button', 'bdevs-elementor' ),
						'type'        => Controls_Manager::URL,
						'dynamic'     => [ 'active' => true ],
						'placeholder' => 'http://your-link.com',
						'default'     => [
							'url' => '#',
						],
					],
					[
						'name'        => 'tab_link_right',
						'label'       => esc_html__( 'Link Right Button', 'bdevs-elementor' ),
						'type'        => Controls_Manager::URL,
						'dynamic'     => [ 'active' => true ],
						'placeholder' => 'http://your-link.com',
						'default'     => [
							'url' => '#',
						],
					],
					[
						'name'        => 'tab_video_link',
						'label'       => esc_html__( 'Video URL', 'bdevs-elementor' ),
						'type'        => Controls_Manager::URL,
						'dynamic'     => [ 'active' => true ],
						'placeholder' => 'http://your-link.com',
						'default'     => [
							'url' => '#',
						],
					],
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
			'show_title',
			[
				'label'   => esc_html__( 'Show Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);		

		$this->add_control(
			'show_sub_title',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_sub_title_tag',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdevs-elementor' ),
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
			'show_left_button',
			[
				'label'   => esc_html__( 'Show Left Button', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_right_button',
			[
				'label'   => esc_html__( 'Show Right Button', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_video',
			[
				'label'   => esc_html__( 'Show Video', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);		


		$this->end_controls_section();

		

		$this->start_controls_section(
			'section_content_button',
			[
				'label'     => esc_html__( 'Button', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'button_icon',
			[
				'label'       => esc_html__( 'Left Button Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'far fa-long-arrow-right', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Fontawesome Icon Fonts', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'left_button_text',
			[
				'label'       => esc_html__( 'Left Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Learn More', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Learn More', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'right_button_text',
			[
				'label'       => esc_html__( 'Right Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'How It works', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'How It works', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'video_icon',
			[
				'label'       => esc_html__( 'Video Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'fas fa-play', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Fontawesome Icon Fonts', 'bdevs-elementor' ),
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
				'condition' => [
					'chose_style' => ['slider-style-3',  'slider-style-5']
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
					'chose_style' => ['slider-style-3',  'slider-style-5']
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
					'chose_style' => ['slider-style-3',  'slider-style-5']
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
					'chose_style' => ['slider-style-3',  'slider-style-5']
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
					'chose_style' => ['slider-style-3',  'slider-style-5']
				],
			]
		);

		
		$this->add_control(
			'divider-1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['slider-style-3',  'slider-style-5']
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
				'condition' => [
					'chose_style' => ['slider-style-1', 'slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
				],
				'placeholder' => __( 'Select Heading', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['slider-style-1', 'slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
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
					'chose_style' => ['slider-style-1', 'slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
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
					'chose_style' => ['slider-style-1', 'slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
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
					'chose_style' => ['slider-style-1', 'slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
				],
			]
		);

		$this->add_control(
			'divider-2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['slider-style-1',  'slider-style-3', 'slider-style-4', 'slider-style-5']
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
					'chose_style' => ['slider-style-1',  'slider-style-4', 'slider-style-5']
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
					'chose_style' => ['slider-style-1', 'slider-style-4', 'slider-style-5']
				],
			]
		);


		$this->add_control(
			'divider-50',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['slider-style-2']
				],
			]
		);

		$this->add_control(
			'sub_title_font_size',
			[
				'label'       => __( 'Subtitle Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
				],
			]
		);

		$this->add_control(
			'sub_title_color',
			[
				'label'       => __( 'Subtitle Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['slider-style-2', 'slider-style-3', 'slider-style-4', 'slider-style-5']
				],
			]
		);


		$this->add_control(
			'divider-60',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['slider-style-2']
				],
			]
		);

		$this->add_control(
			'sub_title_tag_font_size',
			[
				'label'       => __( 'Subtitle Tag Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['slider-style-2']
				],
			]
		);

		$this->add_control(
			'sub_title_tag_bg_color',
			[
				'label'       => __( 'Subtitle Tag BG Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['slider-style-2']
				],
			]
		);

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		$chose_style = $settings['chose_style'];
		?>

		<?php if( $chose_style == 'slider-style-1' ): 

		// slider style 1 er heading info
	    $heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
	    $heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
	    $heading_n_desc_gap = !empty($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '';
	    $heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
	    $heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

	    // slider style 1 er paragraph info
		$desc_font_size = !empty($settings['desc_font_size']) ? $settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? $settings['desc_color'] : '';
		?>

            <div class="slider-area slider-style-1">
                <div class="slider-active">
				<?php $counter = 1; ?>
				<?php foreach ( $settings['tabs'] as $item ) : ?>

					<?php 
					$this->add_render_attribute(
						[
							'slider-link' => [
								'class' => [
									'btn btn-icon ml-0',
								],
								'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
								'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-link-right' => [
								'class' => [
									'play-btn popup-video',
								],
								'href'   => $item['tab_link_right']['url'] ? esc_url($item['tab_link_right']['url']) : '#',
								'target' => $item['tab_link_right']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-video-link' => [
								'class' => [
									'play-btn popup-video',
								],
								'href'   => $item['tab_video_link']['url'] ? esc_url($item['tab_video_link']['url']) : '#',
								'target' => $item['tab_video_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 


					?>

					<?php 
				   	if ( '' !== $item['tab_image'] )  : 
				   		$image_src = wp_get_attachment_image_src( $item['tab_image']['id'], 'full' );
						$image = $image_src ? $image_src[0] : ''; 
				   		?>
					<?php 
					endif; ?>
                    <div class="single-slider slider-height slider-overlay d-flex align-items-center"
                        style="background-image:url(<?php print esc_url($image); ?>)">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="slider-content">
										<?php 
										if (( '' !== $item['tab_title'] ) && ( $settings['show_title'] )) : ?>
											<<?php print esc_attr( $heading_type ); ?> 
	                                			class="wow fadeInUp" 
	                                			data-wow-delay="0.2s" 
	                                			data-animation="fadeInLeft" 
	                                			data-delay=".3s" style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;">
	                                				<?php echo wp_kses_post($item['tab_title']); ?>
	                                		</<?php print esc_attr( $heading_type ); ?>>
										<?php 
										endif; ?>
                                            
										<?php 
										if (( '' !== $item['tab_content'] ) && ( $settings['show_desc'] )) : ?>
											<p class="wow fadeInUp" style="font-size: <?php print esc_attr( $desc_font_size ); ?>; color: <?php print esc_attr( $desc_color ); ?>;" data-animation="fadeInLeft" data-delay=".5s"><?php echo $this->parse_text_editor( $item['tab_content'] ); ?></p>
										<?php 
										endif; ?>

                                        <div class="slider-button" data-animation="fadeInUp" data-delay=".7s">
                                            <?php 
                                            if (( ! empty( $item['tab_link']['url'] )) && ( $settings['show_left_button'] )): ?>
                                            	<a <?php echo $this->get_render_attribute_string( 'slider-link' ); ?> class="btn"><span class="btn-text"><?php echo esc_html($settings['left_button_text']); ?> <i class="<?php echo esc_attr($settings['button_icon']); ?>"></i></span> </a>
                                            <?php 
                                        	endif; ?>

											<?php 
											if (( ! empty( $item['tab_link_right']['url'] )) && ( $settings['show_right_button'] )): ?> 
	 	                                        <a class="text-link" <?php echo $this->get_render_attribute_string( 'slider-link-right' ); ?>><?php echo esc_html($settings['right_button_text']); ?></a>
                                            <?php 
                                        	endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-3 d-none d-lg-block">
                                    <div class="slider-video text-md-right">
                                    	<?php 
										if (( ! empty( $item['tab_video_link']['url'] )) && ( $settings['show_video'] )): ?>
 	                                        <a class="popup-video" <?php echo $this->get_render_attribute_string( 'slider-video-link' ); ?>><i class="<?php echo esc_attr($settings['video_icon']); ?>"></i></a>
                                        <?php 
                                    	endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


					<?php
					$counter++;
					endforeach;
					?>
            </div>
        </section>
       <?php elseif( $chose_style == 'slider-style-2' ):
		// slider style 2 er heading info
	    $heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
	    $heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
	    $heading_n_desc_gap = !empty($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '';
	    $heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
	    $heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

	    // slider style 2 er subtitle info
		$sub_title_font_size = !empty($settings['sub_title_font_size']) ? $settings['sub_title_font_size'] : '';
		$sub_title_color = !empty($settings['sub_title_color']) ? $settings['sub_title_color'] : '';	    

		// slider style 3 er subtitle tag info
		$sub_title_tag_font_size = !empty($settings['sub_title_tag_font_size']) ? $settings['sub_title_tag_font_size'] : '';
		$sub_title_tag_bg_color = !empty($settings['sub_title_tag_bg_color']) ? $settings['sub_title_tag_bg_color'] : '';

       ?>
            <!-- slider-start -->
            <div class="slider-area sldier-style-2">
                <div class="slider-active">
				<?php $counter = 1; ?>
				<?php foreach ( $settings['tabs'] as $item ) : ?>

					<?php 
					$this->add_render_attribute(
						[
							'slider-link' => [
								'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
								'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-link-right' => [
								'href'   => $item['tab_link_right']['url'] ? esc_url($item['tab_link_right']['url']) : '#',
								'target' => $item['tab_link_right']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-video-link' => [
								'href'   => $item['tab_video_link']['url'] ? esc_url($item['tab_video_link']['url']) : '#',
								'target' => $item['tab_video_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					?>

					<?php 
				   	if ( '' !== $item['tab_image'] )  : 
				   		$image_src = wp_get_attachment_image_src( $item['tab_image']['id'], 'full' );
						$image = $image_src ? $image_src[0] : ''; 
				   		?>
					<?php 
					endif; ?>                	
	                    <div class="single-slider slider-1-height d-flex align-items-center"
	                        style="background-image:url(<?php print esc_url($image); ?>)">
	                        <div class="container">
	                            <div class="row ">
	                                <div class="col-xl-8 col-lg-12">
	                                    <div class="slider-content slider-2-content">

	                                    	<?php 
											if (( '' !== $item['tab_sub_title'] ) && ( $settings['show_sub_title'] )) : ?>
												<span data-animation="fadeInLeft" data-delay=".3s" style="font-size: <?php print esc_attr( $sub_title_font_size ); ?>; color: <?php print esc_attr( $sub_title_color ); ?>;"><?php echo wp_kses_post($item['tab_sub_title']); ?></span>
											<?php 
											endif; ?>

	                                    	<?php 
											if (( '' !== $item['tab_sub_title_tag'] ) && ( $settings['show_sub_title_tag'] )) : ?>
												<span data-animation="fadeInLeft" data-delay=".3s" class="agency" style="font-size: <?php print esc_attr( $sub_title_tag_font_size ); ?>; background-color: <?php print esc_attr( $sub_title_tag_bg_color ); ?>;"><?php echo wp_kses_post($item['tab_sub_title_tag']); ?></span>
											<?php 
											endif; ?>

											<?php 
											if (( '' !== $item['tab_title'] ) && ( $settings['show_title'] )) : ?>
												<<?php print esc_attr( $heading_type ); ?> 
													data-animation="fadeInLeft" 
													data-delay=".5s"
													style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"
													>
															<?php echo wp_kses_post($item['tab_title']); ?>
												</<?php print esc_attr( $heading_type ); ?>>
											<?php 
											endif; ?>

	                                        <div class="slider-button" data-animation="fadeInUp" data-delay=".7s">
		                                        <?php 
	                                            if (( ! empty( $item['tab_link']['url'] )) && ( $settings['show_left_button'] )): ?>
	                                            	<a class="btn" <?php echo $this->get_render_attribute_string( 'slider-link' ); ?>><span class="btn-text"><?php echo esc_html($settings['left_button_text']); ?> <i class="<?php echo esc_attr($settings['button_icon']); ?>"></i></span> </a>
	                                            <?php 
	                                        	endif; ?>

												<?php 
												if (( ! empty( $item['tab_link_right']['url'] )) && ( $settings['show_right_button'] )): ?> 
		 	                                    	<a class="slider-btn" <?php echo $this->get_render_attribute_string( 'slider-link-right' ); ?>><?php echo esc_html($settings['right_button_text']); ?> <i class="far fa-long-arrow-right"></i> </a>
	                                            <?php 
	                                        	endif; ?>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php
					$counter++;
					endforeach;
					?>
                </div>
            </div>
            <!-- slider-start -->

	   <?php elseif( $chose_style == 'slider-style-3' ):
        // slider style 1 er heading info
	    $heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
	    $heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
	    $heading_n_desc_gap = !empty($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '';
	    $heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
	    $heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

	    // slider style 3 er subtitle info
		$sub_title_font_size = !empty($settings['sub_title_font_size']) ? $settings['sub_title_font_size'] : '';
		$sub_title_color = !empty($settings['sub_title_color']) ? $settings['sub_title_color'] : '';
       ?>
            <!-- slider-start -->
            <div class="slider-area slider-style-3">
                <div class="slider-active">
				<?php $counter = 1; ?>
				<?php foreach ( $settings['tabs'] as $item ) : ?>

					<?php 
					$this->add_render_attribute(
						[
							'slider-link' => [
								'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
								'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-link-right' => [
								'href'   => $item['tab_link_right']['url'] ? esc_url($item['tab_link_right']['url']) : '#',
								'target' => $item['tab_link_right']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-video-link' => [
								'href'   => $item['tab_video_link']['url'] ? esc_url($item['tab_video_link']['url']) : '#',
								'target' => $item['tab_video_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 


				   	if ( '' !== $item['tab_image'] )  : 
				   		$image_src = wp_get_attachment_image_src( $item['tab_image']['id'], 'full' );
						$image = $image_src ? $image_src[0] : '';  
					endif; 

				   	if ( '' !== $item['tab_thumbnail'] )  : 
				   		$slide_image_src = wp_get_attachment_image_src( $item['tab_thumbnail']['id'], 'full' );
						$slide_thumbnail_url = $slide_image_src ? $slide_image_src[0] : '';  
					endif; 
					?> 

	                    <div class="single-slider slider-height-3 d-flex align-items-center align-items-xl-end"
	                         style="background-image:url(<?php print esc_url($image); ?>)">
	                        <div class="container">
	                            <div class="row ">
	                                <div class="col-xl-6 col-lg-10">
	                                    <div class="slider-content slider-content-3">

	                                		<?php 
											if (( '' !== $item['tab_sub_title'] ) && ( $settings['show_sub_title'] )) : ?>
												<span data-animation="fadeInLeft" data-delay=".3s" style="font-size: <?php print esc_attr( $sub_title_font_size ); ?>; color: <?php print esc_attr( $sub_title_color ); ?>;"><?php echo wp_kses_post($item['tab_sub_title']); ?></span>
											<?php 
											endif; ?>

											<?php 
											if (( '' !== $item['tab_title'] ) && ( $settings['show_title'] )) : ?>
												<<?php print esc_attr( $heading_type ); ?> 
													data-animation="fadeInLeft" 
													data-delay=".5s"
													style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"
													>
														<?php echo wp_kses_post($item['tab_title']); ?>
												</<?php print esc_attr( $heading_type ); ?>>
											<?php 
											endif; ?>

                                        	<div class="slider-button" data-animation="fadeInUp" data-delay=".7s">
	                                        	<?php 
	                                            if (( ! empty( $item['tab_link']['url'] )) && ( $settings['show_left_button'] )): ?>
	                                            	<a class="btn" <?php echo $this->get_render_attribute_string( 'slider-link' ); ?>><span class="btn-text"><?php echo esc_html($settings['left_button_text']); ?> <i class="<?php echo esc_attr($settings['button_icon']); ?>"></i></span> </a>
	                                            <?php 
	                                        	endif; ?>

												<?php 
												if (( ! empty( $item['tab_link_right']['url'] )) && ( $settings['show_right_button'] )): ?>
		 	                                    	<a class="text-link" <?php echo $this->get_render_attribute_string( 'slider-link-right' ); ?>><?php echo esc_html($settings['right_button_text']); ?></a>
	                                            <?php 
	                                        	endif; ?>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="col-xl-6 col-lg-3 d-none d-xl-block">
	                                    <div class="slider-thumb" data-animation="fadeInRight" data-delay=".9s">
	                                        <img src="<?php print esc_url( $slide_thumbnail_url ); ?>" alt="Thumbnail Image">
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
					<?php
					$counter++;
					endforeach;
					?>
                </div>
            </div>
            <!-- slider-start -->  
		
		<?php elseif( $chose_style == 'slider-style-4' ): 
        // slider style 1 er heading info
	    $heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
	    $heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
	    $heading_n_desc_gap = !empty($settings['heading_n_desc_gap']) ? $settings['heading_n_desc_gap'] : '';
	    $heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
	    $heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

	    // slider style 1 er paragraph info
		$desc_font_size = !empty($settings['desc_font_size']) ? $settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? $settings['desc_color'] : '';
       ?>

            <!-- slider-start -->
            <div class="slider-area slider-style-4">
                <div class="slider-active">
				<?php $counter = 1; ?>
				<?php foreach ( $settings['tabs'] as $item ) : ?>
					<?php 
					$this->add_render_attribute(
						[
							'slider-link' => [
								'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
								'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-link-right' => [
								'href'   => $item['tab_link_right']['url'] ? esc_url($item['tab_link_right']['url']) : '#',
								'target' => $item['tab_link_right']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 

					$this->add_render_attribute(
						[
							'slider-video-link' => [
								'href'   => $item['tab_video_link']['url'] ? esc_url($item['tab_video_link']['url']) : '#',
								'target' => $item['tab_video_link']['is_external'] ? '_blank' : '_self'
							]
						], '', '', true
					); 


				   	if ( '' !== $item['tab_image'] )  : 
				   		$image_src = wp_get_attachment_image_src( $item['tab_image']['id'], 'full' );
						$image = $image_src ? $image_src[0] : '';  
					endif; 

				   	if ( '' !== $item['tab_thumbnail'] )  : 
				   		$slide_image_src = wp_get_attachment_image_src( $item['tab_thumbnail']['id'], 'full' );
						$slide_thumbnail_url = $slide_image_src ? $slide_image_src[0] : '';  
					endif; 
					?> 
                    <div class="single-slider slider-height-4 d-flex align-items-center"
                         style="background-image:url(<?php print esc_url($image); ?>)">
                        <div class="container">
                            <div class="row ">
                                <div class="col-xl-9 col-lg-9">
                                    <div class="slider-content slider-content-4 ">

										<?php 
										if (( '' !== $item['tab_title'] ) && ( $settings['show_title'] )) : ?>
											<<?php print esc_attr( $heading_type ); ?> 
												data-animation="fadeInLeft" 
												data-delay=".3s"
												style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"
												>
													<?php echo wp_kses_post($item['tab_title']); ?>
											</<?php print esc_attr( $heading_type ); ?>>
										<?php 
										endif; ?>

										<?php 
										if (( '' !== $item['tab_content'] ) && ( $settings['show_desc'] )) : ?>
											<p data-animation="fadeInLeft" data-delay=".5s" style="font-size: <?php print esc_attr( $desc_font_size ); ?>; color:<?php print esc_attr( $desc_color ); ?>;"><?php echo $this->parse_text_editor( $item['tab_content'] ); ?></p>
										<?php 
										endif; ?>

                                        <ul class="slider-list d-none d-md-block" style="font-size: <?php print esc_attr( $desc_font_size ); ?>; color:<?php print esc_attr( $desc_color ); ?>;" data-animation="fadeInLeft" data-delay=".7s">
                                            <?php print $item['tab_content_list']; ?>
                                        </ul>
                                        <div class="slider-button" data-animation="fadeInUp" data-delay=".9s">
                                        	<?php 
                                            if (( ! empty( $item['tab_link']['url'] )) && ( $settings['show_left_button'] )): ?>
                                            	<a class="btn" <?php echo $this->get_render_attribute_string( 'slider-link' ); ?>><span class="btn-text"><?php echo esc_html($settings['left_button_text']); ?> <i class="<?php echo esc_attr($settings['button_icon']); ?>"></i></span> </a>
                                            <?php 
                                        	endif; ?>

											<?php 
											if (( ! empty( $item['tab_link_right']['url'] )) && ( $settings['show_right_button'] )): ?>
	 	                                    	<a class="border-btn" <?php echo $this->get_render_attribute_string( 'slider-link-right' ); ?>><span class="btn-text"><?php echo esc_html($settings['right_button_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
                                            <?php 
                                        	endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

					<?php
					$counter++;
					endforeach;
					?>
                </div>
            </div>
            <!-- slider-start -->  

       <?php endif; ?>	

	<?php
	}

}
