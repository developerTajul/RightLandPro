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
class BdevsCTA extends \Elementor\Widget_Base {

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
		return 'bdevs-cta';
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
		return __( 'Call To Action', 'bdevs-elementor' );
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
		return [ 'cta' ];
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
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'cta-style-1'  => esc_html__( 'CTA Style 1', 'bdevs-elementor' ),
					'cta-style-2' => esc_html__( 'CTA Style 2', 'bdevs-elementor' ),
					'cta-style-3' => esc_html__( 'CTA Style 3', 'bdevs-elementor' ),
				],
				'default'   => 'cta-style-1',
			]
		);


		$this->add_control(
			'sub_title',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is sub heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter your sub heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'It is description', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Description Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'join with us', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'label_block' => true,
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
				'label_block' => true,
			]
		);

		/** right button **/
		$this->add_control(
			'link_text_right',
			[
				'label'       => esc_html__( 'Button Text Right', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'get started', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link_right',
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
				'label_block' => true,
			]
		);

		$this->add_control(
			'phone_number',
			[
				'label'       => esc_html__( 'Phone Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( '+812 (345) 789 88', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'background_bg',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Backgrond Image', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'background_color',
			[
				'label'   => esc_html__( 'Background Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
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
				'condition' => [
					'chose_style' => ['cta-style-1', 'cta-style-3']
				],
			]
		);	

		$this->add_control(
			'show_desc',
			[
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['cta-style-2']
				],
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
			'show_link_right',
			[
				'label'   => esc_html__( 'Show Right Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['cta-style-2', 'cta-style-3']
				],
			]
		);	

		$this->add_control(
			'show_phone_number',
			[
				'label'   => esc_html__( 'Show Phone Number', 'bdevs-elementor' ),
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
			'sub_heading_n_heading_gap',
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
			'divider-20',
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
			'desc_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['cta-style-1', 'cta-style-2', 'cta-style-3']
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
					'chose_style' => ['cta-style-1', 'cta-style-2', 'cta-style-3']
				],
			]
		);

		$this->add_control(
			'divider-30',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'phone_font_size',
			[
				'label'       => __( 'Phone Number Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'phone_color',
			[
				'label'       => __( 'Phone Number Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-40',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'btn_font_size',
			[
				'label'       => __( 'Button Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'btn_color',
			[
				'label'       => __( 'Button Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'btn_bg_color',
			[
				'label'       => __( 'Button BG Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-340',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'right_btn_font_size',
			[
				'label'       => __( 'Button Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'right_btn_color',
			[
				'label'       => __( 'Button Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'right_btn_border_color',
			[
				'label'       => __( 'Button BG Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		extract($settings);
		
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
				'link_right' => [
					'href'   => $settings['link_right']['url'] ? esc_url($settings['link_right']['url']) : '#',
					'target' => $settings['link_right']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

	   	$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$bg_url = $bg_src ? $bg_src[0] : ''; 

		if( $chose_style == 'cta-style-1' ): 
			// sub heading info
			$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? $settings['sub_heading_font_size'] : '';
			$sub_heading_n_heading_gap = !empty($settings['sub_heading_n_heading_gap']) ? $settings['sub_heading_n_heading_gap'] : '';
			$sub_heading_color = !empty($settings['sub_heading_color']) ? $settings['sub_heading_color'] : '';
			
			// heading info
			$heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
			$heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
			$heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
			$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';		

			// phone info
			$phone_font_size = !empty($settings['phone_font_size']) ? 'font-size:' .$settings['phone_font_size'] : '';
			$phone_color = !empty($settings['phone_color']) ? 'color:'.$settings['phone_color'] : '';

			// phone info
			$right_btn_font_size = !empty($settings['right_btn_font_size']) ? $settings['right_btn_font_size'] : '';
			$right_btn_color = !empty($settings['right_btn_color']) ? $settings['right_btn_color'] : '';
			$right_btn_border_color = !empty($settings['right_btn_border_color']) ? $settings['right_btn_border_color'] : '';

			// background
			$bg_color = !empty($settings['background_color']) ? $settings['background_color'] : '#096BD8';
		?>

            <!-- cta-area-start -->
            <div class="cta-area cta-style-1 pt-125 pb-95" style="background-image:url(<?php print esc_url($bg_url); ?>); background-color: <?php print esc_attr( $bg_color ); ?>">
                <div class="container">
                    <div class="row">
                       <div class="col-xl-7 col-lg-7">
                            <div class="cta-text mb-30">
                        		<?php 
                        		if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
					                <span style="font-size: <?php print esc_attr( $sub_heading_font_size ); ?>; color: <?php print esc_attr( $sub_heading_color ); ?>; margin-bottom: <?php print esc_attr( $sub_heading_n_heading_gap ); ?>;"><?php print wp_kses_post( $sub_title ); ?></span>
					            <?php 
					        	endif; ?> 

								<?php 
								if (( '' !== $title ) && ( $show_title )) : ?>
					                <h1 style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></h1>
					            <?php 
					        	endif; ?> 
                            </div>
                       </div> 
                       <div class="col-xl-5 col-lg-5">
                            <div class="cta-button text-lg-right mb-30">
			                    <?php 
			                    if (( '' !== $link['url'] ) && ( $show_link )) : ?> 
									<a <?php echo $this->get_render_attribute_string( 'link' ); ?>><span style="font-size: <?php print esc_attr( $btn_font_size ); ?>; color: <?php print esc_attr( $btn_color ); ?>;" class="btn btn-white btn-none" class="btn-text"><?php echo esc_html($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
			                    <?php 
			                	endif; ?>

			                    <?php 
			                    if (( '' !== $settings['phone_number'] ) && ( $show_phone_number )) : ?> 
                                	<a style="<?php print esc_attr( $phone_font_size ); ?>; <?php print esc_attr( $phone_color ); ?>;" class="cta-link" href="#"><i class="far fa-phone"></i> <?php print $settings['phone_number']; ?></a>
                            	<?php 
                            	endif; ?>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
            <!-- cta-area-end -->

        <?php elseif ($chose_style == 'cta-style-2'): 
		
			// heading info
			$heading_font_size = !empty($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
			$heading_line_height = !empty($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
			$heading_color = !empty($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
			$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';	

			// desc info
			$desc_font_size = !empty($settings['desc_font_size']) ? 'font-size:'.$settings['desc_font_size'] : '';
			$desc_color = !empty($settings['desc_color']) ? 'color:'.$settings['desc_color'] : '';	

			// btn left info
			$btn_font_size = !empty($settings['btn_font_size']) ? 'font-size:'.$settings['btn_font_size'] : '';
			$btn_color = !empty($settings['btn_color']) ? 'color:'.$settings['btn_color'] : '';
			$btn_bg_color = !empty($settings['btn_bg_color']) ? 'background-color:'.$settings['btn_bg_color'] : '';

			// btn right info
			$right_btn_font_size = !empty($settings['right_btn_font_size']) ? 'font-size:'.$settings['right_btn_font_size'] : '';
			$right_btn_color = !empty($settings['right_btn_color']) ? 'color:'.$settings['right_btn_color'] : '';
			$right_btn_border_color = !empty($settings['right_btn_border_color']) ? 'border-color :' . $settings['right_btn_border_color'] : '';

			// background
			$bg_color = !empty($settings['background_color']) ? 'background-color:'.$settings['background_color'] : '#096BD8';
        ?>

            <!-- cta-area-start -->
            <div class="cta-area cta-style-2 pt-180 pb-160" style="background-image:url(<?php print esc_url($bg_url); ?>); <?php print esc_attr( $bg_color ); ?>">
                <div class="container">
                    <div class="row">
                       <div class="col-xl-8 col-lg-8">
                            <div class="cta-content mb-30">
								<?php 
								if (( '' !== $title ) && ( $show_title )) : ?>
					                <h1 style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>;  <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></h1>
					            <?php 
					        	endif; ?> 

                                <?php 
								if (( '' !== $desc ) && ( $show_desc )) : ?>
					                <p style="<?php print esc_attr( $desc_font_size ); ?>; <?php print esc_attr( $desc_color ); ?>;"><?php print wp_kses_post( $desc ); ?></p>
					            <?php 
					        	endif; ?> 
                                
                                <div class="cta-2-button">
	                                <?php 
				                    if (( '' !== $link['url'] ) && ( $show_link )) : ?> 
										<a class="btn" style="<?php print esc_attr( $btn_bg_color ); ?>" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text" style="<?php print esc_attr( $btn_font_size ); ?>; <?php print esc_attr( $btn_color ); ?>;"><?php echo wp_kses_post($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
				                    <?php 
				                	endif; ?>	  

				                	<?php 
				                    if (( '' !== $link_right['url'] ) && ( $show_link_right )) : ?> 
										<a class="border-btn" style="<?php print esc_attr( $right_btn_border_color ); ?>" <?php echo $this->get_render_attribute_string( 'link_right' ); ?>><span class="btn-text" style="<?php print esc_attr( $right_btn_font_size ); ?>; <?php print esc_attr( $right_btn_color ); ?>;"><?php echo wp_kses_post($settings['link_text_right']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
				                    <?php 
				                	endif; ?>
                                </div>
                            </div>
                       </div> 
                       <div class="col-xl-4 col-lg-4">
                            <?php 
		                    if (( '' !== $settings['phone_number'] ) && ( $show_phone_number )) : ?> 
			                    <div class="ctas-info mb-30">	
	                        		<h3 style="font-size: <?php print esc_attr( $phone_font_size ); ?>; color: <?php print esc_attr( $phone_color ); ?>;"><?php print wp_kses_post($settings['phone_number']); ?></h3>
	                        	</div>
                        	<?php 
                        	endif; ?>
                       </div>
                    </div>
                </div>
            </div>
            <!-- cta-area-end -->
            <?php elseif ($chose_style == 'cta-style-3'): 

            // sub heading info
			$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? 'font-size:'.$settings['sub_heading_font_size'] : '';
			$sub_heading_n_heading_gap = !empty($settings['sub_heading_n_heading_gap']) ? 'margin-bottom:'.$settings['sub_heading_n_heading_gap'] : '';
			$sub_heading_color = !empty($settings['sub_heading_color']) ? 'color:'.$settings['sub_heading_color'] : '';
		
			// heading info
			$heading_font_size = !empty($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
			$heading_line_height = !empty($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
			$heading_color = !empty($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
			$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';	


			// btn left info
			$btn_font_size = !empty($settings['btn_font_size']) ? 'font-size:'.$settings['btn_font_size'] : '';
			$btn_color = !empty($settings['btn_color']) ? 'color:'.$settings['btn_color'] : '';
			$btn_bg_color = !empty($settings['btn_bg_color']) ? 'background-color:'.$settings['btn_bg_color'] : '';

			// btn right info
			$right_btn_font_size = !empty($settings['right_btn_font_size']) ? 'font-size:'.$settings['right_btn_font_size'] : '';
			$right_btn_color = !empty($settings['right_btn_color']) ? 'color:'.$settings['right_btn_color'] : '';
			$right_btn_border_color = !empty($settings['right_btn_border_color']) ? 'border-color :' . $settings['right_btn_border_color'] : '';

			// background
			$bg_color = !empty($settings['background_color']) ? 'background-color:'.$settings['background_color'] : '#096BD8';
        	?>    

	        	<div class="cta-area pt-125 pb-95" style="background-image:url(<?php print esc_url($bg_url); ?>); <?php print esc_attr( $bg_color ); ?>">
	                <div class="container">
	                    <div class="row">
	                       <div class="col-xl-7 col-lg-7">
	                            <div class="cta-text mb-30">
		                            <?php 
	                        		if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_heading_gap ); ?>;">
						                	<?php print wp_kses_post( $sub_title ); ?>
										</span>
						            <?php 
						        	endif; ?> 

	                                <?php 
									if (( '' !== $title ) && ( $show_title )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>;  <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?> 
	                            </div>
	                       </div> 
	                       <div class="col-xl-5 col-lg-6">
	                            <div class="cta-button text-lg-right mb-30">
	                                <?php 
				                    if (( '' !== $link['url'] ) && ( $show_link )) : ?>
										<a class="btn btn-white btn-none" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php echo wp_kses_post($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
				                    <?php 
				                	endif; ?>	  

				                	<?php 
				                    if (( '' !== $link_right['url'] ) && ( $show_link_right )) : ?> 
				                    	<a class="btn btn-white btn-none btn-margin" <?php echo $this->get_render_attribute_string( 'link_right' ); ?>><span class="btn-text"><?php echo wp_kses_post($settings['link_text_right']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
				                    <?php 
				                	endif; ?>
	                            </div>
	                       </div>
	                    </div>
	                </div>
	            </div>

        <?php endif; ?>
	<?php
	}

}