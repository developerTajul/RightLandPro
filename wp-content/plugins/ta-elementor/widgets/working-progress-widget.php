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
class BdevsWorkingProgress extends \Elementor\Widget_Base {

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
		return 'bdevs-working-progress';
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
		return __( 'Working Progress', 'bdevs-elementor' );
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
		return [ 'challenge' ];
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
			'section_content_features',
			[
				'label' => esc_html__( 'Counter', 'bdevs-elementor' ),
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
				'label' => esc_html__( 'Counter Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_icon'   => esc_html__( 'fal fa-head-side-brain', 'bdevs-elementor' ),
						'tab_title'   => esc_html__( 'Fact One', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Project Complate', 'bdevs-elementor' ),
					],
				],
				'fields' => [	
					[
						'name'        => 'tab_icon',
						'label'       => esc_html__( 'Icon Name', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_attr__( 'fal fa-head-side-brain' , 'bdevs-elementor' ),
						'label_block' => true,
					],		
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Tab Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Tab Description', 'bdevs-elementor' ),
						'label_block' => true,
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
				'default'      => 'left',
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
			'show_tab_icon',
			[
				'label'   => esc_html__( 'Show Tab Icon', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->add_control(
			'show_tab_title',
			[
				'label'   => esc_html__( 'Show Tab Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->add_control(
			'show_tab_content',
			[
				'label'   => esc_html__( 'Show Tab Content', 'bdevs-elementor' ),
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
		$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$bg_url = $bg_src ? $bg_src[0] : '';

		// background-color
		$bg_color = ($settings['background_color']) ? $settings['background_color'] : '#096BD8';

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

		   	<!-- working-process-area-start -->
            <div class="working-process-area pos-rel pt-120 pb-100" style="background-image:url(<?php print esc_url($bg_url); ?>); background-color: <?php print esc_attr( $bg_color ); ?>">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item wor-01 rotateme"><img src="<?php print get_template_directory_uri(); ?>/img/shape/shape-2.png" alt="shape icon"></div>
                    <div class="shape-item wor-02 rotateme"><img src="<?php print get_template_directory_uri(); ?>/img/shape/shape-3.png" alt="shape icon"></div>
                </div>
                <div class="container">
					<?php 
					if($settings['show_header_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
	                            <div class="section-title section-title-white ml-50 mr-50 mb-75">
	                                
	                                <?php 
	                                if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
										<span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
										<span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
									<?php 
									endif; ?>
	                                
	                                <?php 
	                                if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
										<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
									<?php 
									endif; ?>

	                            </div>
	                        </div>
	                    </div>
                	<?php 
                	endif; ?>

                    <div class="row justify-content-between">
                        <?php 
                        $number = 1;
						foreach ( $settings['tabs'] as $item ) : ?>
	                        <div class="col-xl-3 col-lg-3 col-md-6">
	                            <div class="working-process-wrapper <?php print esc_attr( $text_alignment ); ?> mb-30">
	                                <div class="working-process-icon">
	                                	<?php 
										if (( '' !== $item['tab_icon'] ) && ( $settings['show_tab_icon'] )) : ?>
											<i class="<?php print esc_attr( $item['tab_icon']); ?>"></i>
										<?php 
										endif; ?>

	                                    <?php 
	                                    if( $number <= 2): ?>
		                                    <div class="angle-icon">
		                                        <img src="<?php print get_template_directory_uri(); ?>/img/shape/line.png" alt="">
		                                    </div>
	                                	<?php 
	                                	endif; ?>
	                                </div>

	                                <div class="working-process-text">
	                                	<?php 
										if (( '' !== $item['tab_title'] ) && ( $settings['show_tab_title'] )) : ?>
											<h3><?php echo wp_kses_post($item['tab_title']); ?></h3>
										<?php 
										endif; ?>

	                                    <?php 
										if (( '' !== $item['tab_content'] ) && ( $settings['show_tab_content'] )) : ?>
											<p><?php echo wp_kses_post($item['tab_content']); ?></p>
										<?php endif; ?>
	                                </div>
	                            </div>
	                        </div>
                        <?php
                        $number++;
						endforeach;
						?>
                    </div>
                </div>
            </div>
            <!-- working-process-area-end -->

	<?php
	}

}