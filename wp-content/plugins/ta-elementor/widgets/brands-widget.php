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
class BdevsBrand extends \Elementor\Widget_Base {

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
		return 'bdevs-brand';
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
		return __( 'Brands', 'bdevs-elementor' );
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
		return 'eicon-post-content';
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
		return [ 'brand' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_content_sliders',
			[
				'label' => esc_html__( 'Brands', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Brand Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Brand #1', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Project Complate', 'bdevs-elementor' ),
					],
				],
				'fields' => [			
					[
						'name'        => 'icon',
						'label'       => esc_html__( 'Brand Logo', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
						'label_block' => true,
						'description' => esc_html__( 'Upload Brand Logo from here', 'bdevs-elementor' ),
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

		$this->end_controls_section();

	}

	public function render() {
	$settings  = $this->get_settings_for_display(); 
	extract($settings);
	?>
            <!-- brand-area-start -->
            <div class="brand-area">
                <div class="container">
                    <div class="row">
                        <div class="brand-active owl-carousel">
		                    <?php 
		                    foreach ( $settings['tabs'] as $item ) : 
								extract($item);
								?>
	                            <div class="col-xl-12">
	                                <div class="brand-img text-center">
			                            <?php
										if ( '' !== $icon['id'] )  :  
											$image_src = wp_get_attachment_image_src( $icon['id'], 'full' );
											$image_url = $image_src ? $image_src[0] : '';
										?>                        	
			                            	<img src="<?php print esc_url($image_url); ?>" alt="<?php print wp_kses_post($tab_title); ?>">
										<?php 
										endif; ?>
	                                </div>
	                            </div>
			                <?php
							endforeach;
							?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
	<?php
	}

}