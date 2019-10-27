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
class BdevsExperience extends \Elementor\Widget_Base {

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
		return 'bdevs-experience';
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
		return __( 'Experience', 'bdevs-elementor' );
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
			'title',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title_suffix',
			[
				'label'       => __( 'Heading Suffix', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is heading suffix', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Suffix Here...', 'bdevs-elementor' ),
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
			'background_bg',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Backgrond Image', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();



		$this->start_controls_section(
			'section_experience',
			[
				'label' => esc_html__( 'Experience Skills', 'bdevs-elementor' ),
			]
		);

		/** experience 1 **/
		$this->add_control(
			'experience_icon_1',
			[
				'label'   => esc_html__( 'Experience Icon 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Experience Icon', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'experience_title_1',
			[
				'label'       => __( 'Experience Heading 1', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'experience_desc_1',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'It is description', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Description Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		/** experience 2 **/
		$this->add_control(
			'experience_icon_2',
			[
				'label'   => esc_html__( 'Experience Icon 2', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Experience Icon', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'experience_title_2',
			[
				'label'       => __( 'Experience Heading 2', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'experience_desc_2',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'It is description', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Description Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		/** experience 3 **/
		$this->add_control(
			'experience_icon_3',
			[
				'label'   => esc_html__( 'Experience Icon 3', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Experience Icon', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'experience_title_3',
			[
				'label'       => __( 'Experience Heading 3', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);


		$this->add_control(
			'experience_desc_3',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => esc_html__( 'It is description', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter Description Here...', 'bdevs-elementor' ),
				'label_block' => true,
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
			'show_title',
			[
				'label'   => esc_html__( 'Show Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_heading_section' => 'yes'
				],
			]
		);	

		$this->add_control(
			'show_desc',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_heading_section' => 'yes'
				],
			]
		);			


		$this->add_control(
			'show_experience_icon_1',
			[
				'label'   => esc_html__( 'Show Experience Icon 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_experience_title_1',
			[
				'label'   => esc_html__( 'Show Experience Title 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_experience_desc_1',
			[
				'label'   => esc_html__( 'Show Experience Description 1', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_experience_icon_2',
			[
				'label'   => esc_html__( 'Show Experience Icon 2', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_experience_title_2',
			[
				'label'   => esc_html__( 'Show Experience Title 2', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	
		
		$this->add_control(
			'show_experience_desc_2',
			[
				'label'   => esc_html__( 'Show Experience Desc 2', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	


		$this->add_control(
			'show_experience_icon_3',
			[
				'label'   => esc_html__( 'Show Experience Icon 3', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_experience_title_3',
			[
				'label'   => esc_html__( 'Show Experience Title 3', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_experience_desc_3',
			[
				'label'   => esc_html__( 'Show Experience Desc 3', 'bdevs-elementor' ),
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
			'divider-3000',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'heading_suffix_font_size',
			[
				'label'       => __( 'Heading Suffix Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'heading_suffix_color',
			[
				'label'       => __( 'Heading Suffix Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-2000',
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
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'divider-15000',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'ex1_heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex1_heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex1_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex1_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'divider-25000',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'ex2_heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex2_heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex2_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex2_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-35000',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'ex3_heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex3_heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex3_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'ex3_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		extract($settings);

	   	$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$bg_url = $bg_src ? $bg_src[0] : ''; 

	   	$ex_1 = wp_get_attachment_image_src( $settings['experience_icon_1']['id'], 'full' );
		$ex_1_url = $ex_1 ? $ex_1[0] : ''; 

	   	$ex_2 = wp_get_attachment_image_src( $settings['experience_icon_2']['id'], 'full' );
		$ex_2_url = $ex_2 ? $ex_2[0] : ''; 

	   	$ex_3 = wp_get_attachment_image_src( $settings['experience_icon_3']['id'], 'full' );
		$ex_3_url = $ex_3 ? $ex_3[0] : ''; 



		// heading info
		$heading_font_size = !empty($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
		$heading_line_height = !empty($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
		$heading_color = !empty($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
		$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';

		// desc info
		$desc_font_size = !empty($settings['desc_font_size']) ? 'font-size:'.$settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? 'color:'.$settings['desc_color'] : '';		

		// suffix heading info
		$heading_suffix_font_size = !empty($settings['heading_suffix_font_size']) ? 'font-size:'.$settings['heading_suffix_font_size'] : '';
		$heading_suffix_color = !empty($settings['heading_suffix_color']) ? 'color:'.$settings['heading_suffix_color'] : '';

		// experience info
		$ex1_heading_font_size = !empty($settings['ex1_heading_font_size']) ? 'font-size:'.$settings['ex1_heading_font_size'] : '';
		$ex1_heading_color = !empty($settings['ex1_heading_color']) ? 'color:'.$settings['ex1_heading_color'] : '';
		$ex1_font_size = !empty($settings['ex1_font_size']) ? 'font-size:'.$settings['ex1_font_size'] : '';
		$ex1_color = !empty($settings['ex1_color']) ? 'color:'.$settings['ex1_color'] : '';

		// experience info
		$ex2_heading_font_size = !empty($settings['ex2_heading_font_size']) ? 'font-size:'.$settings['ex2_heading_font_size'] : '';
		$ex2_heading_color = !empty($settings['ex2_heading_color']) ? 'color:'.$settings['ex2_heading_color'] : '';
		$ex2_font_size = !empty($settings['ex2_font_size']) ? 'font-size:'.$settings['ex2_font_size'] : '';
		$ex2_color = !empty($settings['ex2_color']) ? 'color:'.$settings['ex2_color'] : '';

		// experience info
		$ex3_heading_font_size = !empty($settings['ex3_heading_font_size']) ? 'font-size:'.$settings['ex3_heading_font_size'] : '';
		$ex3_heading_color = !empty($settings['ex3_heading_color']) ? 'color:'.$settings['ex3_heading_color'] : '';
		$ex3_font_size = !empty($settings['ex3_font_size']) ? 'font-size:'.$settings['ex3_font_size'] : '';
		$ex3_color = !empty($settings['ex3_color']) ? 'color:'.$settings['ex3_color'] : '';

		
		?>
            <!-- services-area-start -->
            <div class="services-area pt-95 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="section-title text-center ml-50 mr-50 mb-80">
	                            <?php 
	                            if (( '' !== $title ) && ( $show_title )) : ?>
							        <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $title ); ?>
											<?php 
											if( '' !== $title_suffix ): ?>
                                    				<span style="<?php print esc_attr( $heading_suffix_font_size ); ?>; <?php print esc_attr( $heading_suffix_color ); ?>;"><?php print wp_kses_post( $title_suffix ); ?></span>
                                    		<?php 
                                    		endif; ?>	
							    </<?php print esc_attr( $heading_type ); ?>>
							    <?php 
								endif; ?> 

	                            <?php 
	                            if (( '' !== $desc ) && ( $show_desc )) : ?>
                                	<p style="<?php print esc_attr( $desc_font_size ); ?>; <?php print esc_attr( $desc_color ); ?>;"><?php print wp_kses_post( $desc ); ?></p>
                            	<?php 
                            	endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30 pr-0 service-padding">
                            <div class="services-3-wrapper mt-115 text-center">
                                <div class="services-img">
                                    <img src="<?php print esc_url( $ex_1_url ); ?>" alt="Experience 1">
                                </div>
                                <div class="services-text">
                                	<?php 
	                            	if (( '' !== $experience_title_1 ) && ( $show_experience_title_1 )) : ?>
                                    	<h3 style="<?php print esc_attr( $ex1_heading_font_size ); ?>; <?php print esc_attr( $ex1_heading_color ); ?>;"><?php print wp_kses_post( $settings['experience_title_1'] ); ?></h3>
                                    <?php 
                                	endif; ?>

                                	<?php 
	                            	if (( '' !== $experience_desc_1 ) && ( $show_experience_desc_1 )) : ?>
                                    	<p style="<?php print esc_attr( $ex1_font_size ); ?>; <?php print esc_attr( $ex1_color ); ?>;"><?php print wp_kses_post( $settings['experience_desc_1'] ); ?></p>
                                    <?php 
                                	endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                            <div class="services-3-img text-center d-none d-lg-block">
                                <img src="<?php print esc_url( $bg_url ); ?>" alt="Experience">
                            </div>
                            <div class="services-shape-left d-none d-lg-block">
                                <img src="<?php print get_template_directory_uri(); ?>/img/shape/line-01.png" alt="">
                            </div>
                            <div class="services-shape-right d-none d-lg-block">
                                <img src="<?php print get_template_directory_uri(); ?>/img/shape/line-02.png" alt="">
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2 pl-0 col-md-12 service-1-padding">
                                    <div class="services-3-wrapper mt-80 text-center">
                                        <div class="services-img">
                                            <img src="<?php print esc_url( $ex_2_url ); ?>" alt="Experience 2">
                                        </div>
                                        <div class="services-text">
		                                	<?php 
			                            	if (( '' !== $experience_title_2 ) && ( $show_experience_title_2 )) : ?>
		                                    	<h3 style="<?php print esc_attr( $ex2_heading_font_size ); ?>; <?php print esc_attr( $ex2_heading_color ); ?>;"><?php print wp_kses_post( $settings['experience_title_2'] ); ?></h3>
		                                    <?php 
		                                	endif; ?>

		                                	<?php 
			                            	if (( '' !== $experience_desc_2 ) && ( $show_experience_desc_2 )) : ?>
		                                    	<p style="<?php print esc_attr( $ex2_font_size ); ?>; <?php print esc_attr( $ex2_color ); ?>;"><?php print wp_kses_post( $settings['experience_desc_2'] ); ?></p>
		                                    <?php 
		                                	endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30 pl-0 service-1-padding">
                            <div class="services-3-wrapper mt-115 text-center">
                                <div class="services-img">
                                    <img src="<?php print esc_url( $ex_3_url ); ?>" alt="Experience 3">
                                </div>
                                <div class="services-text">
                                	<?php 
	                            	if (( '' !== $experience_title_3 ) && ( $show_experience_title_3 )) : ?>
                                    	<h3 style="<?php print esc_attr( $ex3_heading_font_size ); ?>; <?php print esc_attr( $ex3_heading_color ); ?>;"><?php print wp_kses_post( $settings['experience_title_3'] ); ?></h3>
                                    <?php 
                                	endif; ?>

                                	<?php 
	                            	if (( '' !== $experience_desc_3 ) && ( $show_experience_desc_3 )) : ?>
                                    	<p style="<?php print esc_attr( $ex3_font_size ); ?>; <?php print esc_attr( $ex3_color ); ?>;"><?php print wp_kses_post( $settings['experience_desc_3'] ); ?></p>
                                    <?php 
                                	endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- services-area-end -->
	<?php
	}

}