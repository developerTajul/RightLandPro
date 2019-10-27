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
class BdevsWhatwedo  extends \Elementor\Widget_Base {

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
		return 'whatwe_do';
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
		return __( 'What We Do ', 'bdevs-elementor' );
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
		return [ 'whatwedo ', 'service' ];
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

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_wedo',
			[
				'label' => esc_html__( 'Waht We Do', 'bdevs-elementor' ),
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
				'default'   => 'text-center',
			]
		);

		$this->add_control(
			'wedo_tabs',
			[
				'label' => esc_html__( 'Waht We Do Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Waht We Do #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					],
					[
						'tab_title'   => esc_html__( 'Waht We Do #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'I am item content. Click edit button to change this text.', 'bdevs-elementor' ),
					]
				],
				'fields' => [		
					[
						'name'    => 'tab_icon',
						'label'   => esc_html__( 'Tab Icon', 'bdevs-elementor' ),
						'type'    => Controls_Manager::TEXT,
						'dynamic' => [ 'active' => true ],
						'default'     => esc_html__( 'fal fa-laptop-code' , 'bdevs-elementor' ),
						'label_block' => true,
					],			
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Its Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Content', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Its Content', 'bdevs-elementor' ),
						'show_label' => false,
					],
					[
						'name'        => 'tab_link',
						'label'       => esc_html__( 'Button Link', 'bdevs-elementor' ),
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
				'label'   => esc_html__( 'Show Tab Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_button',
			[
				'label'   => esc_html__( 'Show Button', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

		

		$this->start_controls_section(
			'section_content_button',
			[
				'label'     => esc_html__( 'Button', 'bdevs-elementor' ),
				'condition' => [
					'show_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'button_text',
			[
				'label'       => esc_html__( 'Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Read More', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Read More', 'bdevs-elementor' ),
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

		    <!-- services-area-start -->
            <div class="services-area">
                <div class="container">
                	<?php if( $show_heading_section == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
	                            <div class="section-title ml-50 mr-50 mb-80 pr-50 pl-50">
	                                
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
                	<?php endif; ?>
                    <div class="row">

						<?php foreach ( $settings['wedo_tabs'] as $item ) : 
							$this->add_render_attribute(
								[
									'wedo-link' => [
										'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
										'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
									]
								], '', '', true
							); 
							?>
			                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
			                        <div class="single-services <?php print esc_attr( $text_alignment ); ?>">
			                    		<?php 
										if (( '' !== $item['tab_icon'] ) && ( $settings['show_tab_icon'] )) : ?>
										    <div class="services-icon">
			                                    <i class="<?php echo wp_kses_post($item['tab_icon']); ?>"></i>
			                                </div>
										<?php 
										endif; ?>

			                            <div class="services-text">
											<?php 
											if (( '' !== $item['tab_title'] ) && ( $settings['show_tab_title'] )) : ?>
												<h3><?php echo wp_kses_post($item['tab_title']); ?></h3>
											<?php 
											endif; ?>

											<?php 
											if (( '' !== $item['tab_content'] ) && ( $settings['show_tab_content'] )) : ?>
												<p><?php echo $this->parse_text_editor( $item['tab_content'] ); ?></p>
											<?php 
											endif; ?>
			                                
			                                <?php 
			                                if (( ! empty( $item['tab_link']['url'] )) && ( $settings['show_button'] )): ?>
			                                    <a <?php echo $this->get_render_attribute_string( 'wedo-link' ); ?>> <span class="services-button"><?php echo esc_html($settings['button_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
											<?php 
											endif; ?>
			                            </div>
			                        </div>
			                    </div>
							<?php
							endforeach;
							?>           

                    </div>
                </div>
            </div>
            <!-- services-area-end -->
	<?php
	}

}
