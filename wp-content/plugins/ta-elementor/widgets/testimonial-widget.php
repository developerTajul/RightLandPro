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
class BdevsTestimonials extends \Elementor\Widget_Base {

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
		return 'bdevs-testimonials';
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
		return __( 'Testimonials', 'bdevs-elementor' );
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
		return [ 'testimonial' ];
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
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is sub heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your prefix Heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_features',
			[
				'label' => esc_html__( 'Testimonials', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'testimonial-style-1'  => esc_html__( 'Testimonial Style 1', 'bdevs-elementor' ),
					'testimonial-style-2' => esc_html__( 'Testimonial Style 2', 'bdevs-elementor' ),
					'testimonial-style-3' => esc_html__( 'Testimonial Style 3', 'bdevs-elementor' ),
				],
				'default'   => 'testimonial-style-1',
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

			'tabs',
			[
				'label' => esc_html__( 'Testimonial Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Testimonial #1', 'bdevs-elementor' ),
					]
				],
				'fields' => [										
					[
						'name'        => 'tab_name',
						'label'       => esc_html__( 'Name', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Jon Haris' , 'bdevs-elementor' ),
						'label_block' => true,
					],					
					[
						'name'        => 'designation_name',
						'label'       => esc_html__( 'Designation Name ', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Web Developer' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'       => 'tab_desc',
						'label'      => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Description here....', 'bdevs-elementor' ),
						'placeholder'    => esc_html__( 'Enter Description here....', 'bdevs-elementor' ),
						'show_label' => true,
					],
					[
						'name'       => 'tab_extra_info',
						'label'      => esc_html__( 'Extra Info', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Good Skills', 'bdevs-elementor' ),
						'placeholder'    => esc_html__( 'Good Skills', 'bdevs-elementor' ),
						'show_label' => true,
					],
					[
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Testimonial Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
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
			'show_header_section',
			[
				'label'   => esc_html__( 'Show Header Section', 'bdevs-elementor' ),
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
					'show_header_section' => 'yes'
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
					'show_header_section' => 'yes'
				],
			]
		);

		$this->add_control(
			'show_tab_extra_info',
			[
				'label'   => esc_html__( 'Show Extra Info', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
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
			'divider-1',
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

		$this->add_control(
			'divider-2',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'testimonial_desc_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_desc_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_desc_n_name_gap',
			[
				'label'       => __( 'Description & Name Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter margin bottom value in px', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_desc_line_height',
			[
				'label'       => __( 'Description Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-6',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'testimonial_name_font_size',
			[
				'label'       => __( 'Testimonial Name Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_name_color',
			[
				'label'       => __( 'Testimonial Name Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_name_n_designation_gap',
			[
				'label'       => __( 'Testimonial Name & Name Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter margin bottom value in px', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_name_line_height',
			[
				'label'       => __( 'Testimonial Name Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-20',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'testimonial_designation_font_size',
			[
				'label'       => __( 'Testimonial Designation Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_designation_color',
			[
				'label'       => __( 'Testimonial Designation Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'testimonial_designation_line_height',
			[
				'label'       => __( 'Testimonial Designation Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();


	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract( $settings );

		// sub heading info
		$sub_heading_font_size = ($settings['sub_heading_font_size']) ? 'font-size:'.$settings['sub_heading_font_size'] : '';
		$sub_heading_n_title_gap = ($settings['sub_heading_n_title_gap']) ? 'margin-bottom:'.$settings['sub_heading_n_title_gap'] : '';
		$sub_heading_color = ($settings['sub_heading_color']) ? 'color:'.$settings['sub_heading_color'] : '';

		$sub_heading_border_color = ($settings['sub_heading_color']) ? 'background-color:'.$settings['sub_heading_color'] : '';

			
		// heading info
		$heading_font_size = ($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
		$heading_line_height = ($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
		$heading_color = ($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
		$heading_type = ($settings['heading_type']) ? $settings['heading_type'] : 'h1';


		// testimonial desc
		$testimonial_desc_font_size = ($settings['testimonial_desc_font_size']) ? 'font-size:'.$settings['testimonial_desc_font_size'] : '';
		$testimonial_desc_line_height = ($settings['testimonial_desc_line_height']) ? 'line-height:'.$settings['testimonial_desc_line_height'] : '';
		$testimonial_desc_color = ($settings['testimonial_desc_color']) ? 'color:'.$settings['testimonial_desc_color'] : '';
		$testimonial_desc_n_name_gap = ($settings['testimonial_desc_n_name_gap']) ? $settings['testimonial_desc_n_name_gap'] : '';

		// testimonial name
		$testimonial_name_font_size = ($settings['testimonial_name_font_size']) ? 'font-size:'.$settings['testimonial_name_font_size'] : '';
		$testimonial_name_line_height = ($settings['testimonial_name_line_height']) ? 'line-height:'.$settings['testimonial_name_line_height'] : '';
		$testimonial_name_color = ($settings['testimonial_name_color']) ? 'color:'.$settings['testimonial_name_color'] : '';
		$testimonial_name_n_designation_gap = ($settings['testimonial_name_n_designation_gap']) ? 'margin-bottom:'.$settings['testimonial_name_n_designation_gap'] : '';

		// testimonial designation
		$testimonial_designation_font_size = ($settings['testimonial_designation_font_size']) ? 'font-size:'.$settings['testimonial_designation_font_size'] : '';
		$testimonial_designation_line_height = ($settings['testimonial_designation_line_height']) ? $settings['testimonial_designation_line_height'] : '';
		$testimonial_designation_color = ($settings['testimonial_designation_color']) ? 'color:'.$settings['testimonial_designation_color'] : '';

		
		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';
		
		if( $chose_style == 'testimonial-style-1' ): ?>
   
            <div class="section-title  mb-45">
                <?php 
                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
                	<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
	                <span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
	            <?php 
	        	endif; ?> 

                <?php 
                if (( '' !== $heading ) && ( $show_heading )) : ?>
	                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
	            <?php 
	        	endif; ?>
            </div>
            <div class="testimonial-active owl-carousel">
                   <?php foreach ( $settings['tabs'] as $item ) : 
						extract($item);
					?>
		                <div class="testimonial-wrapper">
		                    <div class="testimonial-text">
		                        <p style="<?php print esc_attr( $testimonial_desc_font_size ); ?>; <?php print esc_attr( $testimonial_desc_color ); ?>; <?php print esc_attr( $testimonial_desc_n_name_gap ); ?>; "><?php print wp_kses_post( $tab_desc ); ?></p>
		                        <h4 style="<?php print esc_attr( $testimonial_name_font_size ); ?>; <?php print esc_attr( $testimonial_name_color ); ?>; <?php print esc_attr( $testimonial_name_n_designation_gap ); ?>; <?php print esc_attr( $testimonial_name_line_height ); ?>;"><?php print wp_kses_post( $tab_name ); ?></h4>
		                        <span style="<?php print esc_attr( $testimonial_designation_font_size ); ?>; <?php print esc_attr( $testimonial_designation_color ); ?>; <?php print esc_attr( $testimonial_designation_line_height ); ?>;"><?php print wp_kses_post( $designation_name ); ?></span>
		                    </div>
		                </div>

                    <?php
					endforeach;
					?>
            </div>




		<?php elseif( $chose_style == 'testimonial-style-2' ): ?>

            <!-- client-area-start -->
            <div class="client-area testimonial-style-2 dark pt-120 pb-100 grey-bg">
                <div class="container">
                	<?php 
					if($settings['show_header_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-7 col-lg-7">
	                            <div class="section-title  mb-70">
	                                <?php 
					                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
					                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
						                <span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						            <?php 
						        	endif; ?> 

					                <?php 
					                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                    </div>
                	<?php 
                	endif; ?>
                	
                    <div class="row">
                        <div class="client-active owl-carousel">
		                   <?php foreach ( $settings['tabs'] as $item ) : 
								extract($item);
							?>
				            <div class="col-xl-12">
                                <div class="client-say-wrapper text-left mb-30">
                                    <div class="client-say-text">
                                        <p class="testimonial_desc" style="<?php print esc_attr( $testimonial_desc_font_size ); ?>; <?php print esc_attr( $testimonial_desc_color ); ?>; <?php print esc_attr( $testimonial_desc_n_name_gap ); ?>; "><?php print wp_kses_post( $tab_desc ); ?></p>
                                        <div class="client-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="clientsay-name">
                                            <div class="client-say-img">
		                                        <?php
												if ( '' !== $tab_image['id'] )  :  
													$image_src = wp_get_attachment_image_src( $tab_image['id'], 'full' );
													$image_url = $image_src ? $image_src[0] : '';
												?>                        	
					                            	<img src="<?php print esc_url($image_url); ?>" alt="Member Image">
												<?php 
												endif; ?>
                                            </div>
                                            <div class="client-say-content">
                                                <h4 style="<?php print esc_attr( $testimonial_name_font_size ); ?>; <?php print esc_attr( $testimonial_name_color ); ?>; <?php print esc_attr( $testimonial_name_n_designation_gap ); ?>; <?php print esc_attr( $testimonial_name_line_height ); ?>;"><?php print wp_kses_post( $tab_name ); ?></h4>
				                        		<span style="<?php print esc_attr( $testimonial_designation_font_size ); ?>; <?php print esc_attr( $testimonial_designation_color ); ?>; <?php print esc_attr( $testimonial_designation_line_height ); ?>;"><?php print wp_kses_post( $designation_name ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
		                    <?php
							endforeach;
							?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- client-area-end -->


        <?php elseif( $chose_style == 'testimonial-style-3' ): ?>
        
                  <!-- testimonial-area-start -->
            <div class="testimonial-area fix pt-120 pb-180 pos-rel">
                <div class="container">
                    <div class="shape d-none d-xl-block">
                        <div class="shape-item test-01 bounce-animate"><img src="<?php print get_template_directory_uri(); ?>/img/shape/shape-4.png" alt="shape"></div>
                    </div>
                    <div class="shape d-none d-xl-block">
                        <div class="shape-item test-02 bounce-animate"><img src="<?php print get_template_directory_uri(); ?>/img/shape/shape-5.png" alt="shape"></div>
                    </div>
                    <?php 
					if($settings['show_header_section'] == 'yes'): ?>
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="section-title ml-50 mr-50 mb-70">
                                
                                <?php 
				                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
				                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
					                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
					                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
					            <?php 
					        	endif; ?>
                                
                                <?php 
				                if (( '' !== $heading ) && ( $show_heading )) : ?>
					                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
					            <?php 
					        	endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php 
                	endif; ?>
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 offset-lg-1 offset-xl-1">
                            <div class="testimonial-2-active owl-carousel">
                                <?php foreach ( $settings['tabs'] as $item ) : 
								extract($item);
								$tab_extra_info = ($item['tab_extra_info']) ? $item['tab_extra_info'] : '';
								?>
	                                <div class="single-testimonial <?php print esc_attr( $text_alignment ); ?>">
	                                    <div class="clientsay-name">
	                                    	<?php
												if ( '' !== $tab_image['id'] )  :  
													$image_src = wp_get_attachment_image_src( $tab_image['id'], 'full' );
													$image_url = $image_src ? $image_src[0] : '';
												?> 
	                                        <div class="client-say-img">                       	
					                            	<img src="<?php print esc_url($image_url); ?>" alt="Member Image">
	                                        </div>
	                                        <?php 
											endif; ?>
											
	                                        <div class="client-say-content">
	                                            <h4 style="<?php print esc_attr( $testimonial_name_font_size ); ?>; <?php print esc_attr( $testimonial_name_color ); ?>; <?php print esc_attr( $testimonial_name_n_designation_gap ); ?>; <?php print esc_attr( $testimonial_name_line_height ); ?>;"><?php print wp_kses_post( $tab_name ); ?></h4>
	                                            <span style="<?php print esc_attr( $testimonial_designation_font_size ); ?>; <?php print esc_attr( $testimonial_designation_color ); ?>; <?php print esc_attr( $testimonial_designation_line_height ); ?>;"><?php print wp_kses_post( $designation_name ); ?></span>
	                                        </div>
	                                    </div>
	                                    <div class="testimonial-2-text">
	                                        <p style="<?php print esc_attr( $testimonial_desc_font_size ); ?>; <?php print esc_attr( $testimonial_desc_color ); ?>; <?php print esc_attr( $testimonial_desc_n_name_gap ); ?>; "><?php print wp_kses_post( $tab_desc ); ?></p>
	                                        <div class="testimonial-skill">
				                                <?php 
								                if (( '' !== $tab_extra_info ) && ( $show_tab_extra_info )) : ?>
		                                            <span><?php print wp_kses_post( $tab_extra_info ); ?></span>
		                                            <span>
		                                                <i class="fas fa-star"></i>
		                                                <i class="fas fa-star"></i>
		                                                <i class="fas fa-star"></i>
		                                                <i class="fas fa-star"></i>
		                                                <i class="fas fa-star"></i>
		                                            </span>
	                                        	<?php endif; ?>
	                                        </div>
	                                    </div>
	                                </div>
			                    <?php
								endforeach;
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial-area-end -->    

		<?php endif; ?>

	<?php
	}

}