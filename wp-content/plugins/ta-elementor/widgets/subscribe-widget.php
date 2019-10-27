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
class BdevsSubscribe extends \Elementor\Widget_Base {

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
		return 'bdevs-subscribe';
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
		return __( 'Subscribe', 'bdevs-elementor' );
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
		return [ 'subscribe' ];
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
				// 'condition' => [
				// 	'chose_style' => 'service_icon',
				// ],
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'subscribe-style-1'  => esc_html__( 'Subscribe Style 01', 'bdevs-elementor' ),
					'subscribe-style-2' => esc_html__( 'Subscribe Style 02', 'bdevs-elementor' ),
				],
				'default'   => 'about-style-1',
			]
		);


		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Heading Here...', 'bdevs-elementor' ),
				'default'		=> __('It is heading', 'bdevs-elementor'),
				'placeholder'	=> __('Enter Heading Text', 'bdevs-elementor'),
			]
		);

		$this->add_control(
			'background_bg',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Background Image', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'shortcode',
			[
				'label'   => esc_html__( 'Shortcode', 'bdevs-elementor' ),
				'type'    => Controls_Manager::TEXT,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Subscribe shortcode here', 'bdevs-elementor' ),
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
			'show_heading',
			[
				'label'   => esc_html__( 'Show Title', 'bdevs-elementor' ),
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

		if( $chose_style == 'subscribe-style-1' ): 
	   	?>

        <!-- newsletter-area-start -->
        <div class="newsletter-area style-01 pt-75 pb-40" style="background-image:url(<?php print esc_url($bg_url); ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 mb-30">
                        <div class="newsletter-text">
                            <?php 
                            if (( '' !== $heading ) && ( $show_heading )) : ?>
					            <h1><?php print wp_kses_post( $heading ); ?></h1>
					        <?php 
					    	endif; ?>
                        </div>  
                    </div>
                    <div class="col-xl-6 col-lg-7 mb-30">
                        <div class="single-newsletters ">
                            <div class="newsletter-form">
                                <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter-area-end -->
		<?php elseif ( $chose_style == 'subscribe-style-2' ) : ?>
	
            <!-- newsletter-area-start -->
            <div class="newsletter-area style-02">
                <div class="container">
                    <div class="newsletter-2-bg pt-70 pb-50" style="background-image:url(<?php print esc_url($bg_url); ?>)">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 mb-30">
                                <div class="newsletter-text">
		                            <?php 
		                            if (( '' !== $heading ) && ( $show_heading )) : ?>
							            <h1><?php print wp_kses_post( $heading ); ?></h1>
							        <?php 
							    	endif; ?>
                                </div>  
                            </div>
                            <div class="col-xl-6 col-lg-7 mb-30">
                                <div class="single-newsletters ">
                                    <div class="newsletter-form">
                                        <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- newsletter-area-end -->


		<?php endif; ?>

	<?php
	}

}