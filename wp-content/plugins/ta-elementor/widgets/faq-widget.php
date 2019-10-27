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
class BdevsFaq extends \Elementor\Widget_Base {

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
		return 'bdevs-faq';
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
		return __( 'FAQs', 'bdevs-elementor' );
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
		return [ 'faq' ];
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
				'label' => esc_html__( 'Section Faq Heading', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'faq-style-1'  => esc_html__( 'Faq Style 1', 'bdevs-elementor' ),
					'faq-style-2' => esc_html__( 'Faq Style 2', 'bdevs-elementor' ),
					'faq-style-3' => esc_html__( 'Faq Style 3', 'bdevs-elementor' ),
				],
				'default'   => 'faq-style-1',
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your prefix Heading', 'bdevs-elementor' ),
				'default'     => __( 'Awesome Features', 'bdevs-elementor' ),
				'label_block' => true
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
				'label_block' => true
			]
		);

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Enter your description', 'bdevs-elementor' ),
				'default'     => __( 'It is Description', 'bdevs-elementor' ),
				'label_block' => true
			]
		);


		$this->add_control(
			'link',
			[
				'label' => __( 'Video Link', 'bdevs-elementor' ),
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

		$this->add_control(
			'preview_image',
			[
				'label'   => esc_html__( 'Preview Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Preview Image', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'bg_image',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Your Background Image', 'bdevs-elementor' ),
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_faq',
			[
				'label' => esc_html__( 'FAQ', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'FAQ Item', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'default' => [
					[
						'tab_title'   => esc_html__( 'FAQ One', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'FAQ Content', 'bdevs-elementor' ),
					],
					[
						'tab_title'   => esc_html__( 'FAQ Two', 'bdevs-elementor' ),
						'tab_content' => esc_html__( 'FAQ Content', 'bdevs-elementor' ),
					],
				],
				'fields' => [			
					[
						'name'        => 'tab_title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Faq Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],									
					[
						'name'       => 'tab_content',
						'label'      => esc_html__( 'Content', 'bdevs-elementor' ),
						'type'       => Controls_Manager::TEXTAREA,
						'dynamic'    => [ 'active' => true ],
						'default'    => esc_html__( 'Faq Content', 'bdevs-elementor' ),
						'show_label' => false,
					]
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
			'divider-1',
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
			]
		);

		$this->add_control(
			'desc_color',
			[
				'label'       => __( 'Description Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		
		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();

		extract( $settings );

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);


		$image_src = wp_get_attachment_image_src( $settings['bg_image']['id'], 'full' );
		$bg_url = $image_src ? $image_src[0] : '';

		$preview_image_src = wp_get_attachment_image_src( $settings['preview_image']['id'], 'full' );
		$preview_image_url = $preview_image_src ? $preview_image_src[0] : '';

		// sub heading info
		$sub_heading_font_size = ($settings['sub_heading_font_size']) ? 'font-size:'.$settings['sub_heading_font_size'] : '';
		$sub_heading_n_title_gap = ($settings['sub_heading_n_title_gap']) ? 'margin-bottom:'.$settings['sub_heading_n_title_gap'] : '';
		$sub_heading_color = ($settings['sub_heading_color']) ? 'color:'.$settings['sub_heading_color'] : '';

		$sub_heading_border_color = ($settings['sub_heading_color']) ? 'background-color:'.$settings['sub_heading_color'] : '';
		
		// heading info
		$heading_font_size = ($settings['heading_font_size']) ? 'font-size:'.$settings['heading_font_size'] : '';
		$heading_line_height = ($settings['heading_line_height']) ? 'line-height:'.$settings['heading_line_height'] : '';
		$heading_color = ($settings['heading_color']) ? 'color:'.$settings['heading_color'] : '';
		$heading_type = ($settings['heading_type']) ? $settings['heading_type'] : 'h1';		

		// desc info
		$desc_font_size = ($settings['desc_font_size']) ? 'font-size:'.$settings['desc_font_size'] : '';
		$desc_color = ($settings['desc_color']) ? 'color:'.$settings['desc_color'] : '';	

		if( $chose_style == 'faq-style-1' ): ?>
      
            <div class="faq-wrapper pr-20">
            	<?php 
            	if( $show_heading_section == 'yes' ): ?>
	                <div class="section-title mb-45">

	                    <?php 
	                    if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
	                    	<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
	                    	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
							<span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
						<?php 
						endif; ?>	
						
						<?php 
						if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
							<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						<?php 
						endif; ?>

						<?php 
						if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
							<p style="<?php print esc_attr( $desc_font_size ); ?>;  <?php print esc_attr( $desc_color ); ?>;"><?php echo wp_kses_post($settings['desc']); ?></p>
						<?php 
						endif; ?>
						
	                </div>
            	<?php 
            	endif; ?>
                <div class="faq-box faq-2-box">
                    <div id="accordion">
					<?php 
					foreach ( $settings['tabs'] as $key => $item ) :
						$active_class = ($key == 0 ) ? '' : 'collapsed';
						$show = ($key == 0 ) ? 'show' : '';
						?>
	                        <div class="card">
	                            <div class="card-header" id="heading<?php print esc_attr($item['_id']); ?>">
	                                <h5 class="mb-0">
	                                	<?php if ( '' !== $item['tab_title'] ) : ?>
	                                    <a href="#" class="btn-link <?php print esc_attr($active_class); ?>" data-toggle="collapse" data-target="#collapse<?php print esc_attr($item['_id']); ?>"
	                                        aria-expanded="false" aria-controls="collapse<?php print esc_attr($item['_id']); ?>">
	                                        <?php echo wp_kses_post($item['tab_title']); ?>
	                                    </a>
	                                	<?php endif; ?>
	                                </h5>
	                            </div>
	                            <div id="collapse<?php print esc_attr($item['_id']); ?>" class="collapse <?php print esc_attr($show); ?>" aria-labelledby="heading<?php print esc_attr($item['_id']); ?>" data-parent="#accordion">
	                                <div class="card-body">
	                                    <p><?php echo wp_kses_post($item['tab_content']); ?></p>
	                                </div>
	                            </div>
	                        </div>
					<?php
					endforeach;
					?>
                    </div>
                </div>
            </div>
		<?php elseif( $chose_style == 'faq-style-2' ): ?>

            <!-- frequently-area-start -->
            <div class="frequently-area pt-120 pb-100" style="background-image:url(<?php print esc_url( $bg_url ); ?>)">
                <div class="container">
	            	<?php 
	            	if( $show_heading_section == 'yes' ): ?>
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-6">
	                            <div class="section-title section-title-white mb-55">

	                            	<?php 
		                    		if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
	                                	<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
	                                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
	                                	<span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
	                                <?php 
	                                endif; ?>

			                        <?php 
									if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
										<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
									<?php 
									endif; ?>

	                            </div>
	                        </div>
	                    </div>
					<?php 
					endif; ?>	

                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="frequently-wrapper mb-30">
                                <ul class="frequently-text">
				                    <?php 
									foreach ( $settings['tabs'] as $key => $item ) : ?>
	                                    <li>
	                                        <div class="frequently-content">
	                                            <h4><?php echo wp_kses_post($item['tab_title']); ?></h4> 
	                                            <p><?php echo wp_kses_post($item['tab_content']); ?></p>
	                                        </div> 
	                                    </li>
									<?php
									endforeach;
									?>
                                </ul>   
                            </div>
                        </div>

                       	<?php 
						if (( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] )) : ?>
	                        <div class="col-xl-4 col-lg-4">
	                            <div class="frequently-video text-lg-right mb-30">
	                                <a class="popup-video" <?php echo $this->get_render_attribute_string( 'link' ); ?> tabindex="0"><i class="fas fa-play"></i></a>
	                            </div>
	                        </div>
                        <?php 
                    	endif; ?>
                    </div>
                </div>
            </div>
            <!-- frequently-area-end -->

		<?php elseif( $chose_style == 'faq-style-3' ): ?>
            <!-- choose-area-start -->
            <div class="choose-area pt-130 pb-130" style="background-image:url(<?php print esc_url( $bg_url ); ?>)">
                <div class="choose-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="faq-wrapper">
                                    <div class="section-title mb-45">
				                        <?php 
					                    if (( '' !== $settings['sub_heading'] ) && ( $settings['show_sub_heading'] )) : ?>
					                    	<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
					                    	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
											<span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post($settings['sub_heading']); ?></span>
										<?php 
										endif; ?>	
										
										<?php 
										if (( '' !== $settings['heading'] ) && ( $settings['show_heading'] )) : ?>
											<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
										<?php 
										endif; ?>
                                    </div>
                                    <div class="faq-box faq-2-box">
                                        <div id="accordion">
                                           	<?php 
											foreach ( $settings['tabs'] as $key => $item ) :
												$active_class = ($key == 0 ) ? '' : 'collapsed';
												$show = ($key == 0 ) ? 'show' : '';
												?>
							                        <div class="card">
							                            <div class="card-header" id="heading<?php print esc_attr($item['_id']); ?>">
							                                <h5 class="mb-0">
							                                	<?php if ( '' !== $item['tab_title'] ) : ?>
							                                    <a href="#" class="btn-link <?php print esc_attr($active_class); ?>" data-toggle="collapse" data-target="#collapse<?php print esc_attr($item['_id']); ?>"
							                                        aria-expanded="false" aria-controls="collapse<?php print esc_attr($item['_id']); ?>">
							                                        <?php echo wp_kses_post($item['tab_title']); ?>
							                                    </a>
							                                	<?php endif; ?>
							                                </h5>
							                            </div>
							                            <div id="collapse<?php print esc_attr($item['_id']); ?>" class="collapse <?php print esc_attr($show); ?>" aria-labelledby="heading<?php print esc_attr($item['_id']); ?>" data-parent="#accordion">
							                                <div class="card-body">
							                                    <p><?php echo wp_kses_post($item['tab_content']); ?></p>
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
                            <div class="col-xl-6 col-lg-6 mb-30">
                                <div class="choose-wrapper">
                                    <div class="choose-text">
                                        <?php 
										if (( '' !== $settings['desc'] ) && ( $settings['show_desc'] )) : ?>
											<p style="<?php print esc_attr( $desc_font_size ); ?>;  <?php print esc_attr( $desc_color ); ?>;"><?php echo wp_kses_post($settings['desc']); ?></p>
										<?php 
										endif; ?>
                                    </div>
                                    <div class="choose-img">
                                        <img src="<?php print esc_url( $preview_image_url ); ?>" alt="Video Preview">
				                        <?php 
										if (( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] )) : ?>
				                            <div class="choose-video">
				                                <a class="popup-video" <?php echo $this->get_render_attribute_string( 'link' ); ?> tabindex="0"><i class="fas fa-play"></i></a>
				                            </div>
				                        <?php 
				                    	endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- choose-area-end -->
    	<?php endif; ?>	    

	<?php
	}

}