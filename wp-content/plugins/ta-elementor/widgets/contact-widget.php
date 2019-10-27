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
class BdevsContact extends \Elementor\Widget_Base {

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
		return 'bdevs-contact';
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
		return __( 'Contact Form', 'bdevs-elementor' );
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
		return [ 'contact' ];
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
					'contact-style-1'  => esc_html__( 'Contact Style 1', 'bdevs-elementor' ),
					'contact-style-2' => esc_html__( 'Contact Style 2', 'bdevs-elementor' ),
					'contact-style-3' => esc_html__( 'Contact Style 3', 'bdevs-elementor' ),
					'contact-style-4' => esc_html__( 'Contact Style 4', 'bdevs-elementor' ),
					'contact-style-5' => esc_html__( 'Contact Style 5', 'bdevs-elementor' ),
				],
				'default'   => 'contact-style-1',
			]
		);

		$this->add_control(
			'sub_title',
			[
				'label'       => __( 'Sub Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Subtitle Here...', 'bdevs-elementor' ),
				'default'		=> __('Its sub title.', 'bdevs-elementor'),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['contact-style-1', 'contact-style-2', 'contact-style-4', 'contact-style-5']
				],
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title Here...', 'bdevs-elementor' ),
				'default'		=> __('Its Title', 'bdevs-elementor'),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['contact-style-1', 'contact-style-2', 'contact-style-3', 'contact-style-4', 'contact-style-5']
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
					'chose_style' => ['contact-style-1', 'contact-style-2']
				],
			]
		);

		$this->add_control(
			'shortcode',
			[
				'label'   => esc_html__( 'Shortcode', 'bdevs-elementor' ),
				'type'    => Controls_Manager::TEXT,
				'dynamic' => [ 'active' => true ],
				'default'		=> __('Contact Shortcode here', 'bdevs-elementor'),
				'description' => esc_html__( 'Add Your shortcode here', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'bg-image',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Image From Here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['contact-style-2', 'contact-style-3', 'contact-style-4']
				],
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'section_map_content',
			[
				'label' => esc_html__( 'Map Info', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'lat',
			[
				'label'       => __( 'Latitude', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Latitude', 'bdevs-elementor' ),
				'default'     => __( '23.5043', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'long',
			[
				'label'       => __( 'Longitude', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your Longitude', 'bdevs-elementor' ),
				'default'     => __( '90.34535', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'section_contact_info',
			[
				'label' => esc_html__( 'Contact Info', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'contact_us_icon',
			[
				'label'   => esc_html__( 'Contact Us Icon', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Image From Here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['contact-style-3']
				],
			]
		);

		$this->add_control(
			'contact_us_title',
			[
				'label'       => __( 'Title', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Title Here...', 'bdevs-elementor' ),
				'default'		=> __('Its Title', 'bdevs-elementor'),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['contact-style-3']
				],
			]
		);		


		$this->add_control(
			'contact_us_phone_number',
			[
				'label'       => __( 'Phone Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter Phone Number Here...', 'bdevs-elementor' ),
				'default'		=> __('Its Phone Number', 'bdevs-elementor'),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['contact-style-3']
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
			'show_contact_us_icon',
			[
				'label'   => esc_html__( 'Show Contact Us Icon', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_contact_us_title',
			[
				'label'   => esc_html__( 'Show Contact Us Title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_contact_us_phone_number',
			[
				'label'   => esc_html__( 'Show Contact Us Phone Number', 'bdevs-elementor' ),
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

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		extract($settings);	


		$image_src = wp_get_attachment_image_src( $settings['bg-image']['id'], 'full' );
		$bg_url = $image_src ? $image_src[0] : '';

		$icon_image_src = wp_get_attachment_image_src( $settings['contact_us_icon']['id'], 'full' );
		$icon_image_url = $icon_image_src ? $icon_image_src[0] : ''; 


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


		if( $chose_style == 'contact-style-1' ): 	
	   	?>
            <!-- contact-area-start -->
            <div class="contact-area contact-style-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
                            <div class="section-title section-title-white text-center ml-50 mr-50 mb-75">
                                <?php 
                                if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
									<span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post( $sub_title ); ?></span>
									<span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
								<?php 
								endif; ?>	

								<?php 
								if (( '' !== $title ) && ( $show_title )) : ?>
									<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
								<?php 
								endif; ?>	

                            </div>
                        </div>
                    </div>
                    <div class="contact-bg">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 mb-30">
                                <div class="map-wrapper">
                                    <div id="contact-map" class="contact-map"></div>
                                </div>

						        <div class="map-script-area">
									<div class="container">
										<div class="row">
											<div class="col-xl-12 col-lg-12">
												<script>
													jQuery(document).ready(function() {
														"use strict";
														 google.maps.event.addDomListener(window, "load", init);
										        
										            function init() {
										                var mapOptions = {
										                   
										                    zoom: 11,
										                    scrollwheel: false,
										                    center: new google.maps.LatLng(<?php print esc_html($settings['lat']); ?>, <?php print esc_html($settings['long']); ?>), // New York

										                   styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
										                };

										                var mapElement = document.getElementById("contact-map");

										                var map = new google.maps.Map(mapElement, mapOptions);

										                var marker = new google.maps.Marker({
										                    position: new google.maps.LatLng(<?php print esc_html($latitude); ?>, <?php print esc_html($longitude); ?>),
										                    map: map,
										                    title: "Snazzy!"
										                });
										            }

													});
												</script>
										    </div>
										</div>
									</div>
								</div>
								
                            </div>
                            <div class="col-xl-7 col-lg-7 mb-30">
                                <div class="appointment-wrapper">
                                    <div id="appointment-form">
                                        <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->
        <?php elseif($chose_style == 'contact-style-2'): ?>
            <!-- contact-area-start -->
            <div class="contact-2-area pt-130 pb-100 theme-bg contact-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 ">
                            <div class="contact-wrapper mb-30">
                                <div class="section-title section-title-white mb-25">
                                    
	                                <?php 
	                                if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
	                                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
										<span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post( $sub_title ); ?></span>
									<?php 
									endif; ?>
                                    
                                    <?php 
									if (( '' !== $title ) && ( $show_title )) : ?>
										<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
									<?php 
									endif; ?>
                                </div> 
                                <div  id="contact-form">
                                	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                    <p class="form-message"></p>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="map-img mb-30">
                            <img src="<?php print esc_url($bg_url); ?>" alt="google map">
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- contact-area-end -->

        <?php elseif($chose_style == 'contact-style-3'): ?>
        
            <!-- contact-us-area-start -->
            <div class="contact-us-area contact-style-3">
                <div class="container">
                    <div class="contact-us-bg pos-rel">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 d-none d-lg-block">
                                <div class="single-contact-us d-flex align-items-center justify-content-center" style="background-image:url(<?php print esc_url( $bg_url ); ?>)">
                                    <div class="contact-us-info">

	                                    <?php 
		                                if (( '' !== $icon_image_url ) && ( $settings['show_contact_us_icon'] == 'yes' )) : ?>
	                                        <div class="contact-us-icon">
	                                            <img src="<?php print esc_url( $icon_image_url ); ?>" alt="icon">
	                                        </div>
                                        <?php 
										endif; ?>

                                        <div class="contact-us-text">
		                                    <?php 
			                                if (( '' !== $contact_us_title ) && ( $show_contact_us_title )) : ?>
												<span class="sub-t-left"><?php echo wp_kses_post( $contact_us_title ); ?></span>
											<?php 
											endif; ?>
		                                    
		                                    <?php 
											if (( '' !== $contact_us_phone_number ) && ( $show_contact_us_phone_number )) : ?>
												<h4><?php echo wp_kses_post( $contact_us_phone_number ); ?></h4>
											<?php 
											endif; ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="contact-us-wrapper">
                        	        <?php 
									if (( '' !== $title ) && ( $show_title )) : ?>
	                                    <div class="contact-us-content">
											<h1><?php echo wp_kses_post( $title ); ?></h1>
	                                    </div>
                                    <?php 
									endif; ?>
                                    <div id="contact-us-form">
                                    	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- contact-us-area-end -->
		<?php elseif( $chose_style == 'contact-style-4'): ?>
            <!-- contact-us-area-start -->
            <div class="contact-2-area contact-style-4 pt-120 pb-130" style="background-image:url(<?php print esc_url( $bg_url ); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="section-title section-title-white ml-50 mr-50 mb-75">
                                
                            	<?php 
                                if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
									<span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post( $sub_title ); ?></span>
									<span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
								<?php 
								endif; ?>

                                <?php 
								if (( '' !== $title ) && ( $show_title )) : ?>
									<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
								<?php 
								endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="appointment-wrapper">
                            <div class="appointment-form">
                            	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-us-area-end -->

			<?php elseif( $chose_style == 'contact-style-5'): ?>
            <!-- contact-us-area-start -->
            <div class="contact-2-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
                            <div class="section-title text-center ml-50 mr-50 mb-75">
                            	<?php 
                                if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
									<span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php echo wp_kses_post( $sub_title ); ?></span>
									<span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
								<?php 
								endif; ?>

                                <?php 
								if (( '' !== $title ) && ( $show_title )) : ?>
									<<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
								<?php 
								endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="appointment-wrapper contact-form-page">
                            <div class="appointment-form">
                            	<?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-us-area-end -->

        <?php endif; ?>	
	<?php
	}

}