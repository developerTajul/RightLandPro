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
class BdevsCounter extends \Elementor\Widget_Base {

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
		return 'bdevs-counter';
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
		return __( 'Counter List', 'bdevs-elementor' );
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
		return [ 'Counter' ];
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
				'label' => esc_html__( 'Counter', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'counter-style-1'  => esc_html__( 'Counter Style Blue', 'bdevs-elementor' ),
					'counter-style-2' => esc_html__( 'Counter Style White', 'bdevs-elementor' ),
					'counter-style-3' => esc_html__( 'Counter Style Blue With Heading', 'bdevs-elementor' ),
					'counter-style-4' => esc_html__( 'Counter Single Style 1', 'bdevs-elementor' ),
				],
				'default'   => 'counter-style-1',
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your prefix Heading', 'bdevs-elementor' ),
				'default'     => __( 'Awesome Features', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-3']
				],
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-3']
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
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-3']
				],
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'more services ', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'join with us', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-3']
				],
			]
		);		

		$this->add_control(
			'link_icon',
			[
				'label'       => esc_html__( 'Link Icon', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'far fa-long-arrow-right', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Type Your Icon Name', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['counter-style-3']
				],
				'label_block' => true
			]
		);

		$this->add_control(
			'show_link',
			[
				'label'   => esc_html__( 'Show Link', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'chose_style' => ['counter-style-3']
				],
			]
		);

		$this->add_control(
			'show_link_icon',
			[
				'label'   => esc_html__( 'Show Link Icon', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_link' => 'yes',
				],
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Background Image', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['counter-style-1', 'counter-style-3']
				],
			]
		);

		$this->add_control(
			'bg_color',
			[
				'label'       => __( 'Background Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'default'		=> '#096BD8',
				'condition' => [
					'chose_style' => ['counter-style-1', 'counter-style-3']
				],
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Counter Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'Counter #i', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'Project Complate', 'bdevs-elementor' ),
					],
				],
				'fields' => [								
					[
						'name'        => 'icon',
						'label'       => esc_html__( 'Icon', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'label_block' => true,
						'description' => esc_html__( 'Enter Icon Name from here', 'bdevs-elementor' ),
					],					
					[
						'name'        => 'number',
						'label'       => esc_html__( 'Number', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'	 => 569,
						'placeholder' => 'Enter Number here....',
						'label_block' => true,
					],
					[
						'name'       => 'heading',
						'label'      => esc_html__( 'Heading', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXT,
						'dynamic'    => [ 'active' => true ],
						'default'	 => 'Expert Doctors',
						'placeholder' => 'Content Here..',
						'show_label' => true,
						'label_block' => true,
					],
				]
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'single_content_layout',
			[
				'label' => esc_html__( 'Single Content', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['counter-style-4']
				],
			]
		);


		$this->add_control(
			'single_icon',
			[
				'label'       => __( 'Icon Name', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'fal fa-box-check', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-4']
				],
			]
		);

		$this->add_control(
			'single_number',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your number', 'bdevs-elementor' ),
				'default'     => __( '569', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-4']
				],
			]
		);

		$this->add_control(
			'single_heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['counter-style-4']
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
			'show_tab_heading',
			[
				'label'   => esc_html__( 'Show Tab Heading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);		

		$this->add_control(
			'show_tab_number',
			[
				'label'   => esc_html__( 'Show Tab Number', 'bdevs-elementor' ),
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
			'counter_text_font_size',
			[
				'label'       => __( 'Counter Text Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'counter_text_line_height',
			[
				'label'       => __( 'Counter Text Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'counter_text_n_title_gap',
			[
				'label'       => __( 'Number & Counter Text Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter number & counter text gap', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'counter_text_color',
			[
				'label'       => __( 'Counter Text Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'counter_number_font_size',
			[
				'label'       => __( 'Number Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'counter_number_line_height',
			[
				'label'       => __( 'Number Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'counter_number_n_desc_gap',
			[
				'label'       => __( 'Number & Text Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter number & text gap', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'counter_number_color',
			[
				'label'       => __( 'Number Color', 'bdevs-elementor' ),
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
			'icon_font_size',
			[
				'label'       => __( 'Icon Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label'       => __( 'Icon Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'divider-255',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'number_icon_font_size',
			[
				'label'       => __( 'Number Icon Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'number_icon_color',
			[
				'label'       => __( 'Number Icon Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract( $settings );

		$image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_url = $image_src ? $image_src[0] : ''; 


		// counter text info
		$counter_text_font_size = ($settings['counter_text_font_size']) ? 'font-size:'.$settings['counter_text_font_size'] : '';
		$counter_text_n_title_gap = ($settings['counter_text_n_title_gap']) ? 'margin-bottom:'.$settings['counter_text_n_title_gap'] : '';
		$counter_text_color = ($settings['counter_text_color']) ? 'color:'.$settings['counter_text_color'] : '';

		$counter_text_border_color = ($settings['counter_text_color']) ? 'background-color:'.$settings['counter_text_color'] : '';
		
		// counter number info
		$counter_number_font_size = ($settings['counter_number_font_size']) ? 'font-size:'.$settings['counter_number_font_size'] : '';
		$counter_number_line_height = ($settings['counter_number_line_height']) ? 'line-height:'.$settings['counter_number_line_height'] : '';
		$counter_number_color = ($settings['counter_number_color']) ? 'color:'.$settings['counter_number_color'] : '';	

		// counter icon info
		$icon_font_size = ($settings['icon_font_size']) ? 'font-size:'.$settings['icon_font_size'] : '';
		$icon_color = ($settings['icon_color']) ? 'color:'.$settings['icon_color'] : '';

		// number icon info
		$number_icon_font_size = ($settings['number_icon_font_size']) ? 'font-size:'.$settings['number_icon_font_size'] : '';
		$number_icon_color = ($settings['number_icon_color']) ? 'color:'.$settings['number_icon_color'] : '';


		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';


		if( $chose_style == 'counter-style-1' ): ?>

            <!-- counter-area-start -->
            <div class="counter-area pt-130 pb-100" style="background-image:url(<?php print esc_url( $bg_url ); ?>); background-color: <?php print esc_attr( $settings['bg_color'] ); ?>">
                <div class="container">
                    <div class="row">

					<?php 
                    foreach ( $settings['tabs'] as $item ) : 
						extract($item);
						?>
							<div class="col-xl-3 col-lg-3 col-md-6">
	                            <div class="counter-wrapper mb-30">
	                            	<?php 
		                            if($settings['show_tab_icon']): ?>
		                                <div class="counter-icon">
		                                    <i class="<?php print wp_kses_post( $item['icon'] ); ?>" style=" <?php print esc_attr( $icon_font_size ); ?>;  <?php print esc_attr( $icon_color ); ?>;"></i>
		                                </div>
		                            <?php 
		                            endif; ?>   

	                                <div class="counter-text">
	                                	<?php 
	                            		if($settings['show_tab_number']): ?>
	                                    	<h1 ><span class="counter" style=" <?php print esc_attr( $counter_number_font_size ); ?>;  <?php print esc_attr( $counter_number_color ); ?>; <?php print esc_attr( $counter_number_line_height ); ?>; margin-bottom: <?php print esc_attr( $counter_number_n_desc_gap ); ?>;"><?php print wp_kses_post( $item['number'] ); ?></span><span class="plus-icon" style="<?php print esc_attr( $number_icon_font_size ); ?>; <?php print esc_attr( $number_icon_color ); ?>;">+</span></h1>
	                                    <?php 
	                                    endif; ?>	

	                                    <?php 
	                            		if($settings['show_tab_heading']): ?>
	                                    	<p style="<?php print esc_attr( $counter_text_font_size ); ?>;  <?php print esc_attr( $counter_text_color ); ?>;  <?php print esc_attr( $counter_text_n_title_gap ); ?>;"><?php print wp_kses_post( $item['heading'] ); ?></p>
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
            <!-- counter-area-end -->

		<?php elseif ( $chose_style == 'counter-style-2' ) : ?>

            <!-- counter-area-start -->
            <div class="counter-area pb-100">
                <div class="container">
                    <div class="row">
                    	<?php 
                    	foreach ( $settings['tabs'] as $item ) : 
						extract($item);
						?> 
	                        <div class="col-xl-3 col-lg-3 col-md-6">
	                            <div class="counter-wrapper single-counter mb-30">
	                            	<?php 
	                            	if($settings['show_tab_icon']): ?>
		                                <div class="counter-icon">
		                                    <i class="<?php print wp_kses_post( $item['icon'] ); ?>" style=" <?php print esc_attr( $icon_font_size ); ?>;  <?php print esc_attr( $icon_color ); ?>;"></i>
		                                </div>
	                            	<?php 
	                            	endif; ?>

	                                <div class="counter-text">
	                                	<?php 
	                            		if($settings['show_tab_number']): ?>
	                                    	<h1 ><span class="counter" style=" <?php print esc_attr( $counter_number_font_size ); ?>;  <?php print esc_attr( $counter_number_color ); ?>; <?php print esc_attr( $counter_number_line_height ); ?>; margin-bottom: <?php print esc_attr( $counter_number_n_desc_gap ); ?>;"><?php print wp_kses_post( $item['number'] ); ?></span><span class="plus-icon" style="<?php print esc_attr( $counter_number_color ); ?>;">+</span></h1>
	                                    <?php 
	                            		endif; ?>
	
	                                    <?php 
	                            		if($settings['show_tab_heading']): ?>
	                                    	<p style="<?php print esc_attr( $counter_text_font_size ); ?>;  <?php print esc_attr( $counter_text_color ); ?>;  <?php print esc_attr( $counter_text_n_title_gap ); ?>;"><?php print wp_kses_post( $item['heading'] ); ?></p>
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
            <!-- counter-area-end -->

        <?php elseif ( $chose_style == 'counter-style-3' ) : ?>

            <!-- fact-area-start -->
            <div class="fact-are-area pt-130 pb-100" style="background-image:url(<?php print esc_url( $bg_url ); ?>); background-color: <?php print esc_attr( $settings['bg_color'] ); ?>">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-5 col-lg-5 mb-30">

	                        <div class="fact-text">
	                            <?php 
                				if( $settings['show_heading_section'] == 'yes'): ?>

	                            	<?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
						                <span><?php print wp_kses_post( $sub_heading ); ?></span>
						            <?php 
						        	endif; ?>

	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <h1><?php print wp_kses_post( $heading ); ?></h1>
						            <?php 
						        	endif; ?>

						        <?php 
		                        endif; ?> 	
	                                
								<?php 
								if ( ( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] == 'yes') ): ?>
									<a <?php echo $this->get_render_attribute_string( 'link' ); ?>><?php print esc_html( $settings['link_text']); ?> 
										<?php if( $settings['show_link_icon']): ?>
					                        <i class="<?php print esc_html( $settings['link_icon']); ?>"></i>
										<?php endif; ?>
									</a>
			                    <?php 
			                	endif; ?>
	                        </div>   
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="row justify-content-between">
		                        <?php 
		                    	foreach ( $settings['tabs'] as $item ) : 
								extract($item);
								?> 
	                                <div class="col-xl-4 col-lg-4 col-md-4 mb-30">
	                                    <div class="progress-wrapper">
	                                    	<?php 
		                            		if($settings['show_tab_icon']): ?>
	                                        	<div class="circular-progress" data-percent="<?php print esc_attr( $item['number'] ); ?>" data-scale-color="#fff"><span><i class="fal fa-heart" style=" <?php print esc_attr( $icon_font_size ); ?>;  <?php print esc_attr( $icon_color ); ?>;"></i></span>
	                                        	</div>
	                                        <?php endif; ?>	

	                                        <div class="progress-content">
	                                        	<?php 
		                            			if($settings['show_tab_number']): ?>
	                                            	<h1 style=" <?php print esc_attr( $counter_number_font_size ); ?>;  <?php print esc_attr( $counter_number_color ); ?>; <?php print esc_attr( $counter_number_line_height ); ?>; margin-bottom: <?php print esc_attr( $counter_number_n_desc_gap ); ?>;"><?php print wp_kses_post( $item['number'] ); ?>%</h1>
				                            	<?php 
				                            	endif; ?>

		                                        <?php 
			                            		if($settings['show_tab_heading']): ?>
			                                    	<span style="<?php print esc_attr( $counter_text_font_size ); ?>;  <?php print esc_attr( $counter_text_color ); ?>;  <?php print esc_attr( $counter_text_n_title_gap ); ?>;"><?php print wp_kses_post( $item['heading'] ); ?></span>
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
                </div>
            </div>
            <!-- fact-area-end -->

		<?php elseif ( $chose_style == 'counter-style-4' ) : ?>

                <div class="counter-wrapper mb-30">
                    <div class="counter-icon">
                        <i class="<?php print wp_kses_post( $settings['single_icon'] ); ?>" style=" <?php print esc_attr( $icon_font_size ); ?>;  <?php print esc_attr( $icon_color ); ?>;"></i>
                    </div>
                    <div class="counter-text">
                        <h1 ><span class="counter" style=" <?php print esc_attr( $counter_number_font_size ); ?>;  <?php print esc_attr( $counter_number_color ); ?>; <?php print esc_attr( $counter_number_line_height ); ?>; margin-bottom: <?php print esc_attr( $counter_number_n_desc_gap ); ?>;"><?php print wp_kses_post( $settings['single_number'] ); ?></span><span class="plus-icon" style="<?php print esc_attr( $number_icon_font_size ); ?>; <?php print esc_attr( $number_icon_color ); ?>;">+</span></h1>
                        <p style="<?php print esc_attr( $counter_text_font_size ); ?>;  <?php print esc_attr( $counter_text_color ); ?>;  <?php print esc_attr( $counter_text_n_title_gap ); ?>;"><?php print wp_kses_post( $settings['single_heading'] ); ?></p>
                    </div>
                </div>

		<?php endif; ?>
	<?php
	}

}