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
class BdevsFeatures extends \Elementor\Widget_Base {

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
		return 'bdevs-features';
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
		return __( 'Features List', 'bdevs-elementor' );
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
		return [ 'features' ];
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
				'label' => esc_html__( 'Features', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Feature Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Feature One', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Focus On Email Marketing', 'bdevs-elementor' ),
					],
					[
						'tab_title'   => esc_html__( 'Feature Two', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Support Content Marketing', 'bdevs-elementor' ),
					],
					[
						'tab_title'   => esc_html__( 'Feature Three', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Focus On Email Marketing', 'bdevs-elementor' ),
					],
				],
				'fields' => [	
				    [
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Feature Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],			
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Feature Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Content', 'bdevs-elementor' ),
						'type'       => Controls_Manager::WYSIWYG,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Feature Content', 'bdevs-elementor' ),
						'show_label' => false,
					],
					[
						'name'        => 'tab_link',
						'label'       => esc_html__( 'Link', 'bdevs-elementor' ),
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

		$this->add_control(
			'icon',
			[
				'label'       => esc_html__( 'Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::ICON,
				'label_block' => true,
			]
		);

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();

		?>

		<div class="awesome-features-area pb-90 bg-none" data-background="img/bg/fea.jpg">
			<div class="container">
				<div class="row">
					<?php 
					foreach ( $settings['tabs'] as $item ) :

						$this->add_render_attribute(
							[
								'feature-link' => [
									'class' => [
										'bdt-slide-link',
									],
									'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
									'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
								]
							], '', '', true
						); ?>

						<div class="col-xl-4 col-lg-4 col-md-6 <?php echo $this->get_render_attribute_string( 'slide-item' ); ?>">
							<div class="awesome-features-wrapper text-center mb-30">

								<?php if (( '' !== $item['tab_image'] ) && ( $settings['show_image'] )) : ?>
								<div class="awesome-features-icon-img"><?php
									$image_src = wp_get_attachment_image_src( $item['tab_image']['id'], 'full' );
									$image = $image_src ? $image_src[0] : ''; 
							   		?>
								   <img src="<?php print esc_url($image); ?>" alt="<?php print wp_kses_post($item['tab_title']); ?>">
								</div>
								<?php endif; ?>	
								
								<div class="awesome-features-text">
									<?php 
									if (( '' !== $item['tab_title'] ) && ( $settings['show_title'] )) : ?>
									<h3><?php echo wp_kses_post($item['tab_title']); ?></h3>
									<?php endif; ?>	

									<?php 
									if (( '' !== $item['tab_content'] ) && ( $settings['show_content'] )) : ?>
									<p><?php echo wp_kses_post($item['tab_content']); ?></p>
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
	<?php
	}

}