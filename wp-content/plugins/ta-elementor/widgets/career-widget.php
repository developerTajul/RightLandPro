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
class BdevsCareer extends \Elementor\Widget_Base {

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
		return 'bdevs-career';
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
		return __( 'Career', 'bdevs-elementor' );
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
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'career_style_1' => esc_html__( 'Career Style 01', 'bdevs-elementor' ),
					'career_style_2' => esc_html__( 'Career Style 02', 'bdevs-elementor' ),
				],
				'default'   => 'career_style_1',
				'label_block'   => 'true',
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

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Learn More', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link_icon',
			[
				'label'       => __( 'Link Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Icon Name Here...', 'bdevs-elementor' ),
				'default'     => __( 'far fa-long-arrow-right', 'bdevs-elementor' ),
				'label_block' => true,
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
			'tabs',
			[
				'label' => esc_html__( 'Counter Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Fact One', 'bdevs-elementor' ),
						'tab_desc' => esc_html__( 'Project Complate', 'bdevs-elementor' ),
					],
				],
				'fields' => [	
					[
						'name'        => 'tab_icon',
						'label'       => esc_html__( 'Upload Icon', 'bdevs-elementor' ),
						'type'        => Controls_Manager::MEDIA,
						'dynamic'     => [ 'active' => true ],
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
						'name'        => 'tab_sub_title',
						'label'       => esc_html__( 'Sub Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Tab Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'       => 'tab_desc',
						'label'      => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Tab Description', 'bdevs-elementor' ),
						'label_block' => true,
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
			'show_tab_sub_title',
			[
				'label'   => esc_html__( 'Show Tab Sub Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->add_control(
			'show_tab_desc',
			[
				'label'   => esc_html__( 'Show Tab Content', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract( $settings );
		
		if( $chose_style == 'career_style_1' ): ?>
	        <section class="career-cat-area pt-120 pb-90">
	            <div class="container">
	            	<?php 
	            	if( $show_header_section === 'yes'): ?>
	                <div class="row">
	                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
	                        <div class="section-title text-center ml-50 mr-50 mb-75">
	                            <span class="border-left-1"></span>
	                            <?php 
	                            if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
									<span><?php echo wp_kses_post($settings['sub_heading']); ?></span>
								<?php 
								endif; ?>
	                            <span class="border-right-1"></span>
	                            <?php 
	                            if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
									<h1><?php echo wp_kses_post($settings['heading']); ?></h1>
								<?php 
								endif; ?>
	                        </div>
	                    </div>
	                </div>
	            	<?php 
	            	endif; ?>
	                <div class="row">
	                    <?php 
	                    $number = 1;
						foreach ( $settings['tabs'] as $item ) : ?>
	                        <div class="col-lg-3 col-md-4">
	                            <a href="#">
	                                <div class="carrer-cat text-center mb-30">
	                                    <?php
										if ( '' !== $item['tab_icon']['id'] )  :  
											$image_src = wp_get_attachment_image_src( $item['tab_icon']['id'], 'full' );
											$image_url = $image_src ? $image_src[0] : '';
										?>                        	
			                            	<img src="<?php print esc_url($image_url); ?>" alt="<?php print wp_kses_post($tab_title); ?>">
										<?php 
										endif; ?>

	                                    <?php 
										if (( '' !== $item['tab_title'] ) && ( $settings['show_tab_title'] )) : ?>
											<h3><?php echo wp_kses_post($item['tab_title']); ?></h3>
										<?php 
										endif; ?>
	                                </div>
	                            </a>
	                        </div>
	                    <?php
	                    $number++;
						endforeach;
						?>
	                </div>
	            </div>
	        </section>
        <?php elseif( $chose_style == 'career_style_2' ): ?>

            <section class="job-list-area">
                <div class="container">
                    <div class="row">
                    <?php 
                    $number = 1;
					foreach ( $settings['tabs'] as $item ) : 

						$this->add_render_attribute(
							[
								'link' => [
									'href'   => $item['tab_link']['url'] ? esc_url($item['tab_link']['url']) : '#',
									'target' => $item['tab_link']['is_external'] ? '_blank' : '_self'
								]
							], '', '', true
						); ?>

                        <div class="col-lg-6 col-md-6">
                            <div class="job-list mb-30">
                                <?php 
								if (( '' !== $item['tab_title'] ) && ( $settings['show_tab_title'] )) : ?>
									<h3><?php echo wp_kses_post($item['tab_title']); ?></h3>
								<?php 
								endif; ?>

								<?php 
								if (( '' !== $item['tab_sub_title'] ) && ( $settings['show_tab_sub_title'] )) : ?>
									<span><?php echo wp_kses_post($item['tab_sub_title']); ?></span>
								<?php 
								endif; ?>

								<?php 
								if (( '' !== $item['tab_desc'] ) && ( $settings['show_tab_desc'] )) : ?>
									<p><?php echo wp_kses_post($item['tab_desc']); ?></p>
								<?php 
								endif; ?>

								<?php 
								//if (( ! empty( $item['link']['url'] )) ): ?>
				                    <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php echo esc_html($settings['link_text']); ?> <i class="<?php echo esc_html($settings['link_icon']); ?>"></i></span> </a>
				                <?php 
				            	//endif; ?>

                            </div>
                        </div>
                    <?php
                    $number++;
					endforeach;
					?>
                    </div>
                </div>
            </section>

       	<?php endif; ?> 	
	<?php
	}

}