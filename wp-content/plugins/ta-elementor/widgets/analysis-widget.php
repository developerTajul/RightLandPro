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
class BdevsAnalysis extends \Elementor\Widget_Base {

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
		return 'bdevs-analysis';
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
		return __( 'Analysis', 'bdevs-elementor' );
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
		return [ 'Analysis' ];
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
			'section_content_features',
			[
				'label' => esc_html__( 'Analysis', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'image',
			[
				'label'   => esc_html__( 'Analysis Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Analysis Image', 'bdevs-elementor' ),
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
			'desc',
			[
				'label'       => __( 'Analysis Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your analysis text', 'bdevs-elementor' ),
				'default'     => __( 'Awesome Features', 'bdevs-elementor' ),
			]
		);



		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Analysis Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_content' => esc_html__( 'Focus On Email Marketing', 'bdevs-elementor' ),
					],
					[
						'tab_content' => esc_html__( 'Support Content Marketing', 'bdevs-elementor' ),
					],
				],
				'fields' => [	
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Content', 'bdevs-elementor' ),
						'type'       => Controls_Manager::WYSIWYG,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Feature Content', 'bdevs-elementor' ),
						'show_label' => false,
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
			'show_image',
			[
				'label'   => esc_html__( 'Show Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);


		$this->add_control(
			'show_content',
			[
				'label'   => esc_html__( 'Show Content', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();

		?>

		<div class="promo-area pt-110 pb-85">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6">
						<div class="promos-img mb-30">
							<?php 
						   	if ( '' !== $settings['image'] )  : 
						   		$image_src = wp_get_attachment_image_src( $settings['image']['id'], 'full' );
								$image = $image_src ? $image_src[0] : ''; 
						   		?>
							   <img src="<?php print esc_url($image); ?>" alt="<?php print wp_kses_post($settings['image']); ?>">
							<?php 
							endif; ?>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="single-promo mb-30">
							<div class="promo-text promos-text">
								<?php if (( '' !== $settings['heading'] ) && ( $settings['show_title'] )) : ?>
								<h1><?php echo wp_kses_post($settings['heading']); ?></h1>
								<?php endif; ?>	

								<p><?php echo wp_kses_post($settings['desc']); ?></p>

								<ul class="promos-link">
									<?php 
									foreach ( $settings['tabs'] as $item ) : ?>
									<li class="<?php echo $this->get_render_attribute_string( 'slide-item' ); ?>">
										<div class="promos-info">
											<div class="promos-icon">
												<i class="dripicons-checkmark"></i>
											</div>
										</div>
										<div class="promos-text">
											<?php 
											if (( '' !== $item['tab_content'] ) && ( $settings['show_content'] )) : ?>
											<span><?php echo wp_kses_post($item['tab_content']); ?></span>
											<?php endif; ?>	
										</div>
									</li>
								<?php
								endforeach;
								?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<?php
	}

}