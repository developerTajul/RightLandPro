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
class BdevsAppointment extends \Elementor\Widget_Base {

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
		return 'bdevs-appointment';
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
		return __( 'Appointment', 'bdevs-elementor' );
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
		return [ 'appointment' ];
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
					'style_01'  => esc_html__( 'Appointment', 'bdevs-elementor' ),
					'style_02' => esc_html__( 'Quote Calculator', 'bdevs-elementor' ),
					'style_03' => esc_html__( 'Appointment BG Image', 'bdevs-elementor' ),
				],
				'default'   => 'style_01',
				'label_block'   => 'true',
			]
		);

		$this->add_control(
			'sub_title',
			[
				'label'       => __( 'Sub Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Subtitle Here...', 'bdevs-elementor' ),
				'default'		=> __('Its sub title.', 'bdevs-elementor'),
				'placeholder'		=> __('Free Consultation.', 'bdevs-elementor'),
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title Here...', 'bdevs-elementor' ),
				'default'		=> __('Its Title', 'bdevs-elementor'),
				'placeholder'	=> __('Get An Appointment', 'bdevs-elementor'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'sec_text',
			[
				'label'       => __( 'Heading Info', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your info text', 'bdevs-elementor' ),
				'default'     => __( 'It is description', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => 'style_02',
				],
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
					'chose_style' => 'style_02',
				],
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'Make Appointment', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => 'style_02',
				],
			]
		);

		$this->add_control(
			'background_bg',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Mission Icon', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'shortcode',
			[
				'label'   => esc_html__( 'Shortcode', 'bdevs-elementor' ),
				'type'    => Controls_Manager::TEXT,
				'dynamic' => [ 'active' => true ],
				'default'		=> __('Shortcode', 'bdevs-elementor'),
				'description' => esc_html__( 'Add Your shortcode here', 'bdevs-elementor' ),
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
			'show_link',
			[
				'label'   => esc_html__( 'Show Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		extract($settings);		
	   	$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$bg_url = $bg_src ? $bg_src[0] : ''; 
		$chose_style = $settings['chose_style'];

		$this->add_render_attribute(
			[
				'link' => [
					'class' => [
						'btn btn-icon btn-icon-green ml-0',
					],
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);
	   	?>

	   	<?php if( $chose_style == 'style_01' ): ?>
        <section class="appoinment-area gray-bg pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="appoinment-box-2">
                            <div class="row no-gutters">
                                <div class="col-xl-8 col-lg-12">
                                    <div class="appoinment-box-content">
                                        <div class="about-title mb-40">
		                                <?php if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
							                <h5 class="pink-color"><?php print wp_kses_post( $sub_title ); ?></h5>
							            <?php endif; ?> 

							            <?php if (( '' !== $title ) && ( $show_title )) : ?>
							                <h1><?php print wp_kses_post( $title ); ?></h1>
							            <?php endif; ?>
                                        </div>
                                        <div class="app-form-box">
                                            <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="appoinment-right f-right">
                                        <img src="<?php print esc_url( $bg_url ); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php elseif( $chose_style == 'style_02' ): ?>
        <section class="calculate-area pos-rel pt-115 pb-120" data-background="<?php print esc_url( $bg_url ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-10">
                        <div class="section-title calculate-section pos-rel mb-45">
                            <div class="section-text section-text-white pos-rel">
								<?php if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
					                <h5><?php print wp_kses_post( $sub_title ); ?></h5>
					            <?php endif; ?> 
								<?php if (( '' !== $title ) && ( $show_title )) : ?>
					                <h1 class="white-color"><?php print wp_kses_post( $title ); ?></h1>
					            <?php endif; ?>
                                <?php if (( '' !== $settings['sec_text']  )) : ?>
								<p><?php echo wp_kses_post($settings['sec_text']); ?></p>
								<?php endif; ?>	
                            </div>
                        </div>
                        <div class="section-button section-button-left mb-30">
                        	<a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
								<span>+</span> <?php echo esc_html($settings['link_text']); ?>
							</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="calculate-box white-bg">
                            <div class="calculate-content">
                            	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php elseif( $chose_style == 'style_03' ): ?>
        <section class="appointment-area appointment-area-3 pos-rel pt-115 pb-120" data-background="<?php print esc_url( $bg_url ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="calculate-box white-bg">
                        	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>	
        	
	<?php
	}

}