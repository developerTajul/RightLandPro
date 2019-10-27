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
class BdevsAbout extends \Elementor\Widget_Base {

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
		return 'bdevs-about';
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
		return __( 'About', 'bdevs-elementor' );
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
		return [ 'about' ];
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
				'label' => esc_html__( 'About', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'about-style-1'  => esc_html__( 'About Style 1', 'bdevs-elementor' ),
					'about-style-2' => esc_html__( 'About With List', 'bdevs-elementor' ),
					'about-style-3' => esc_html__( 'About With Video', 'bdevs-elementor' ),
					'about-style-4' => esc_html__( 'About With BG', 'bdevs-elementor' ),
				],
				'default'   => 'about-style-1',
			]
		);


		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub heading', 'bdevs-elementor' ),
				'default'     => __( 'It is sub heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'heading_suffix',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading Suffix', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading suffix', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);		

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is content', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);


		$this->end_controls_section();


		/** 
		*	Link section 
		**/
		$this->start_controls_section(
			'link_section_content',
			[
				'label' => esc_html__( 'Link Info', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1']
				],
			]
		);		

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Our Services', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'bdevs-elementor' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'plugin-domain' ),
				'show_external' => true,
				'default' => [
					'url' => '#',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
	

		$this->end_controls_section();


		/** 
		*	Layout section 
		**/
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
			'show_heading',
			[
				'label'   => esc_html__( 'Show Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);			

		$this->add_control(
			'show_sub_heading',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_desc',
			[
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
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

		$this->add_control(
			'show_btn',
			[
				'label'   => esc_html__( 'Show Button', 'bdevs-elementor' ),
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
				'condition' => [
					'chose_style' => ['about-style-1',  'about-style-2']
				],
			]
		);

		$this->add_control(
			'sub_heading_n_heading_gap',
			[
				'label'       => __( 'Heading & Sub Heading Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1',  'about-style-5']
				],
			]
		);

		$this->add_control(
			'sub_heading_color',
			[
				'label'       => __( 'Sub Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1',  'about-style-5']
				],
			]
		);

		
		$this->add_control(
			'divider-1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['about-style-1',  'about-style-5']
				],
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
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
				'placeholder' => __( 'Select Heading', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'heading_font_size',
			[
				'label'       => __( 'Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);


		$this->add_control(
			'heading_line_height',
			[
				'label'       => __( 'Heading Line Height', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Line Height here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);

		$this->add_control(
			'heading_n_desc_gap',
			[
				'label'       => __( 'Heading & Description Gap', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter heading & description gap', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);


		$this->add_control(
			'heading_color',
			[
				'label'       => __( 'Heading Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);


		$this->add_control(
			'divider-55',
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
				'condition' => [
					'chose_style' => ['about-style-1']
				],
			]
		);

		$this->add_control(
			'heading_suffix_color',
			[
				'label'       => __( 'Heading Suffix Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1']
				],
			]
		);


		$this->add_control(
			'divider-2',
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
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);

		$this->add_control(
			'divider-2555',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
			]
		);


		$this->add_control(
			'link_font_size',
			[
				'label'       => __( 'Link Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);

		$this->add_control(
			'link_color',
			[
				'label'       => __( 'Link Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['about-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
				],
			]
		);


		$this->end_controls_section();



	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);
		

		// sub heading info
		$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? 'font-size:'.$settings['sub_heading_font_size'] : '';
		$sub_heading_n_heading_gap = !empty($settings['sub_heading_n_heading_gap']) ? 'margin-bottom:'.$settings['sub_heading_n_heading_gap'] : '';
		$sub_heading_color = !empty($settings['sub_heading_color']) ? 'color:'.$settings['sub_heading_color'] : '';

		$sub_heading_border_color = ($settings['sub_heading_color']) ? 'background-color:'.$settings['sub_heading_color'] : '';


		// heading info
		$heading_font_size = !empty($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
		$heading_line_height = !empty($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
		$heading_color = !empty($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
		$heading_n_desc_gap = !empty($settings['heading_n_desc_gap']) ? 'margin-bottom:'.$settings['heading_n_desc_gap'] : '';
		$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

	    // heading suffix
		$heading_suffix_font_size = !empty($settings['heading_suffix_font_size']) ? 'font-size:'.$settings['heading_suffix_font_size'] : '';
		$heading_suffix_color = !empty($settings['heading_suffix_color']) ? 'color:'.$settings['heading_suffix_color'] : '';

	    // info
		$desc_font_size = !empty($settings['desc_font_size']) ? 'font-size:'.$settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? 'color:'.$settings['desc_color'] : '';	    

		// link info
		$link_font_size = !empty($settings['link_font_size']) ? 'font-size:'.$settings['link_font_size'] : '';
		$link_color = !empty($settings['link_color']) ? 'color:'.$settings['link_color'] : '';


		if( $chose_style == 'about-style-1' ): 

		?>

            <div class="about-text">
            	<?php 
            	if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
					<span style="<?php print esc_attr( $sub_heading_font_size ); ?>; <?php print esc_attr( $sub_heading_color ); ?>; <?php print esc_attr( $sub_heading_n_heading_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
				<?php 
				endif; ?>	 

				<?php 
				if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
					<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>; <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php echo wp_kses_post($settings['heading']); ?> <span style="<?php print esc_attr( $heading_suffix_font_size ); ?>; <?php print esc_attr( $heading_suffix_color ); ?>;"><?php echo wp_kses_post($settings['heading_suffix']); ?> </span></<?php print esc_attr( $heading_type ); ?>>
				<?php
				endif; ?>	

				<?php 
				if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
					<p style="<?php print esc_attr( $desc_font_size ); ?>; <?php print esc_attr( $desc_color ); ?>;"><?php print wp_kses_post($settings['desc']); ?></p>
				<?php
				endif; ?>	

				<?php 
				if (( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] )) : ?>
                    <a <?php echo $this->get_render_attribute_string( 'link' ); ?> style="<?php print esc_attr( $link_font_size ); ?>; <?php print esc_attr( $link_color ); ?>;"><?php echo esc_html($settings['link_text']); ?></a>
                <?php 
            	endif; ?>


            	<?php 
				if (( ! empty( $settings['link']['url'] )) && ( $settings['show_btn'] )) : ?>
					<div class="about-button">
                        <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php echo esc_html($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
                    </div>
                <?php 
            	endif; ?>

            </div>

		<?php elseif( $chose_style == 'about-style-2' ): ?>
			<!-- NOt tested yet -->
		<section class="about-area about-area-mid pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="row">
	                    <?php foreach ( $settings['tabs'] as $item ) : 
							extract($item);
						?>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="feature-box mb-40">
									<?php
									if ( '' !== $icon['id'] )  :  
										$image_src = wp_get_attachment_image_src( $icon['id'], 'full' );
										$image_url = $image_src ? $image_src[0] : '';
									?>
                                    <div class="feature-small-icon mb-35">
										<img src="<?php print esc_url($image_url); ?>" alt="<?php print wp_kses_post($tab_title); ?>">
									</div>
                                	<?php endif; ?>

                                    <div class="feature-small-content">
                                        <h3><?php print wp_kses_post($title); ?></h3>
                                        <?php if ( '' !== $tab_content ) : ?>
										<p><?php print wp_kses_post($this->parse_text_editor( $tab_content )); ?></p>
										<?php endif; ?>
                                    </div>
                                </div>
                            </div>

	                    <?php
						endforeach;
						?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-11">
                        <div class="about-right-side pt-25 mb-30">
                            <div class="about-title mb-20">
                            	<?php if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
								<h5 class="pink-color"><?php echo wp_kses_post( $sub_heading ); ?></h5>
								<?php endif; ?>	 

								<?php if (( '' !== $heading ) && ( $show_heading )) : ?>
								<h1><?php echo wp_kses_post($heading); ?></h1>
								<?php endif; ?>
                            </div>
                            <div class="about-text">
                               <?php echo wp_kses_post($settings['desc']); ?>
                            </div>
                            <div class="about-text-list mb-40">
                                <ul>
			                        <?php foreach ( $settings['tab_lists'] as $item ) : 
										extract($item);
									?>

			                            <li><i class="fa fa-check"></i><span><?php print wp_kses_post($title); ?></span></li>

				                    <?php
									endforeach;
									?>
                                </ul>
                            </div>
                           
                           <?php if (( ! empty( $settings['link']['url'] )) ): ?>
                            <div class="button-area">
		                        <a <?php echo $this->get_render_attribute_string( 'link' ); ?>><span><?php print esc_html_e('+', 'bdevs-elementor'); ?></span> <?php echo esc_html($settings['link_text']); ?></a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php elseif( $chose_style == 'about-style-3' ): ?>

        <section class="about-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-left-side pos-rel mb-30">
                            <div class="about-front-img pos-rel">
                        		<?php
								if ( '' !== $preview_image['id'] )  :  
									$image_src = wp_get_attachment_image_src( $preview_image['id'], 'full' );
									$image_url = $image_src ? $image_src[0] : '';
								?>
                                    <img src="<?php print esc_url($image_url); ?>" alt="Preview Image">
                                <?php endif; ?>
                               
                                <a class="popup-video about-video-btn white-video-btn" href="<?php print esc_url( $video_link ); ?>"><i class="fas fa-play"></i></a>
                            </div>
                            <?php if( $settings['show_shape'] ): ?>
                            <div class="about-shape">
                                <img src="<?php print get_template_directory_uri(); ?>/img/about/about-shape.png" alt="">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side pt-55 mb-30">
                            <div class="about-title mb-20">
                            	<?php if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
								<h5><?php echo wp_kses_post( $sub_heading ); ?></h5>
								<?php endif; ?>	 

								<?php if (( '' !== $heading ) && ( $show_heading )) : ?>
								<h1><?php echo wp_kses_post($heading); ?></h1>
								<?php endif; ?>
                            </div>
                            <div class="about-text mb-50">
                                <?php echo wp_kses_post($settings['desc']); ?>
                            </div>
                            <div class="our-destination">
                                <?php 
		                        $x = 1;
		                        foreach ( $settings['tabs'] as $item ) : 
									extract($item);
									if( $x == 1 ){
										$class = 'mb-30';
									}
									$x++;
								?>
                                <div class="single-item <?php print esc_attr( $class ); ?>">
									<?php
									if ( '' !== $icon['id'] )  :  
										$image_src = wp_get_attachment_image_src( $icon['id'], 'full' );
										$image_url = $image_src ? $image_src[0] : '';
									?>
                                    <div class="mv-icon f-left">
                                        <img src="<?php print esc_url($image_url); ?>" alt="<?php print wp_kses_post($tab_title); ?>">
                                    </div>
                                    <?php endif; ?>

                                    <div class="mv-title fix">
                                        <h3><?php print wp_kses_post($title); ?></h3>
                                        <?php if ( '' !== $tab_content ) : ?>
										<p><?php print wp_kses_post($this->parse_text_editor( $tab_content )); ?></p>
										<?php endif; ?>
                                    </div>
                                </div>
	                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php elseif( $chose_style == 'about-style-4' ): 
	   		$image_src = wp_get_attachment_image_src( $settings['image']['id'], 'full' );
			$bg_url = $image_src ? $image_src[0] : ''; 
			$this->add_render_attribute(
				[
					'link' => [
						'class' => [
							'btn',
						],
						'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
						'target' => $settings['link']['is_external'] ? '_blank' : '_self'
					]
				], '', '', true
			);

		?>

        <section class="appoinment-section pt-120 pb-120" data-background="<?php print esc_url($bg_url); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="appoinment-box white">
                            <div class="appoinment-content">
                            	<?php if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
								<span class="small-text"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
								<?php endif; ?>	 

								<?php if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
								<h1><?php echo wp_kses_post($settings['heading']); ?></h1>
								<?php endif; ?>	
                                <?php echo wp_kses_post($settings['desc']); ?>
								<ul class="professinals-list pt-30 mb-60">                               
								        <?php foreach ( $settings['tab_lists'] as $item ) : 
										extract($item);
									?>
								        <li><i class="fa fa-check"></i><?php print wp_kses_post($title); ?></li>
								    <?php
									endforeach;
									?>
								</ul>
                            </div>

                            <?php if (( ! empty( $settings['link']['url'] )) ): ?>
							<a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
							 	<?php echo esc_html($settings['link_text']); ?> <i class="fas fa-angle-double-right"></i>
							 </a>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php endif; ?>	
	<?php
	}

}