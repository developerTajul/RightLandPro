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
class BdevsVideoContent extends \Elementor\Widget_Base {

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
		return 'bdevs-video-content';
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
		return __( 'Video Content', 'bdevs-elementor' );
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
		return [ 'video content' ];
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
			'section_content_videos',
			[
				'label' => esc_html__( 'Video Content', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'video-style-1'  => esc_html__( 'Video Style 1', 'bdevs-elementor' ),
					'video-style-2' => esc_html__( 'Video Style 2', 'bdevs-elementor' ),
				],
				'default'   => 'video-style-1',
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
			'desc',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is content', 'bdevs-elementor' ),
				'label_block' => true,
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

		$this->end_controls_section();


		/** 
		*	Link section 
		**/
		$this->start_controls_section(
			'link_section_content',
			[
				'label' => esc_html__( 'Video Info', 'bdevs-elementor' ),
			]
		);		

		$this->add_control(
			'video_preview_img',
			[
				'label'   => esc_html__( 'Video Preview Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Video Preview Image', 'bdevs-elementor' ),
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
				'label_block' => true
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

		$this->end_controls_section();


		/** typography **/
		$this->start_controls_section(
			'typography_section',
			[
				'label' => esc_html__( 'Custom Typography', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'sub_heading_type',
			[
				'label'     => esc_html__( 'Sub Heading Type', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'h1'  => esc_html__( 'H1', 'bdevs-elementor' ),
					'h2'  => esc_html__( 'H2', 'bdevs-elementor' ),
					'h3'  => esc_html__( 'H3', 'bdevs-elementor' ),
					'h4'  => esc_html__( 'H4', 'bdevs-elementor' ),
					'h5'  => esc_html__( 'H5', 'bdevs-elementor' ),
					'h6'  => esc_html__( 'H6', 'bdevs-elementor' ),
					'span'  => esc_html__( 'Span', 'bdevs-elementor' ),
				],
				'condition' => [
					'chose_style' => ['video-style-1']
				],
			]
		);

		$this->add_control(
			'sub_heading_font_size',
			[
				'label'       => __( 'Sub Heading Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['video-style-1',  'about-style-2']
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
					'chose_style' => ['video-style-1',  'about-style-5']
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
					'chose_style' => ['video-style-1',  'about-style-5']
				],
			]
		);

		
		$this->add_control(
			'divider-1',
			[
				'type' => \Elementor\Controls_Manager::DIVIDER,
				'condition' => [
					'chose_style' => ['video-style-1',  'about-style-5']
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
					'chose_style' => ['video-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
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
					'chose_style' => ['video-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
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
					'chose_style' => ['video-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
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
					'chose_style' => ['video-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
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
					'chose_style' => ['video-style-1', 'about-style-2', 'about-style-3', 'about-style-4', 'about-style-5']
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
					'chose_style' => ['video-style-1']
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
					'chose_style' => ['video-style-1']
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

		$background_bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$background_bg_image_url = $background_bg_src ? $background_bg_src[0] : '';

		$video_preview_img = wp_get_attachment_image_src( $settings['video_preview_img']['id'], 'full' );
		$video_preview_img_url = $video_preview_img ? $video_preview_img[0] : '';



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


	    // info
		$desc_font_size = !empty($settings['desc_font_size']) ? $settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? $settings['desc_color'] : '';

		if( $chose_style == 'video-style-1' ): 
		?>

            <!-- video-area-start -->
            <div class="video-area pt-130" style="background-image:url(<?php print esc_url( $background_bg_image_url ); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 mb-30">
                            <div class="video-img">
                                <img src="<?php print esc_url( $video_preview_img_url ); ?>" alt="Video Image">
                                <div class="video-icon">
                                    <a class="popup-video" <?php echo $this->get_render_attribute_string( 'link' ); ?> tabindex="0"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 mb-30">
				           <div class="video-wrapper">
				                <div class="section-title section-title-white">
					            	<?php 
					            	if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
					      				<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
				                    	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
										<span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
									<?php 
									endif; ?>

					                <?php 
									if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
										<<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
									<?php
									endif; ?>

	                        		<?php 
									if (( '' !== $desc ) && ( $show_desc )) : ?>
										<p style="font-size: <?php print esc_attr( $desc_font_size ); ?>; color: <?php print esc_attr( $desc_color ); ?>;"><?php echo wp_kses_post( $desc ); ?></p>
									<?php 
									endif; ?>

				                </div>
				            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- video-area-end -->

		<?php elseif( $chose_style == 'video-style-2' ): ?>

			<!-- here is the second style -->

		<?php endif; ?>	
	<?php
	}

}