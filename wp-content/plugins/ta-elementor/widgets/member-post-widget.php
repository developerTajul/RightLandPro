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
class BdevsMemberPost extends \Elementor\Widget_Base {

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
		return 'bdevs-member-post';
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
		return __( 'Member Posts', 'bdevs-elementor' );
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
		return [ 'member-post' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'heading_section',
			[
				'label' => esc_html__( 'Heading Section', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'sub_heading',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your heading', 'bdevs-elementor' ),
				'label_block' => true,
				'default'     => __( 'Its Sub Title', 'bdevs-elementor' ),
				'default'     => __( 'It is sub heading', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Type section title here', 'bdevs-elementor' ),
				'label_block' => true,
				'default'     => __( 'Its Title', 'bdevs-elementor' ),
				'default'     => __( 'It is Heading', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'placeholder' => __( 'Type Description here', 'bdevs-elementor' ),
				'label_block' => true,
				'default'     => __( 'Its description', 'bdevs-elementor' ),
				'default'     => __( 'It is description', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'Make Appointment', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'plugin-domain' ),
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
			'shape_image',
			[
				'label'   => esc_html__( 'Shape Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Shape Image', 'bdevs-elementor' ),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_service_post',
			[
				'label' => esc_html__( 'Member Post', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'member-style-1'  => esc_html__( 'Member Style 1', 'bdevs-elementor' ),
					'member-style-2' => esc_html__( 'Member Style 2', 'bdevs-elementor' ),
				],
				'default'   => 'member-style-1',
			]
		);

		$this->add_control(
			'order',
			[
				'label'     => esc_html__( 'Post Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'desc',
			]
		);		

		$this->add_control(
			'number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'3'  => esc_html__( '3', 'bdevs-elementor' ),
					'4'  => esc_html__( '4', 'bdevs-elementor' ),
					'6' => esc_html__( '6', 'bdevs-elementor' ),
					'8' => esc_html__( '8', 'bdevs-elementor' ),
					'9' => esc_html__( '9', 'bdevs-elementor' ),
					'12' => esc_html__( '12', 'bdevs-elementor' ),
				],
				'default'   => '4',
			]
		);

		$this->add_control(
			'post_contnet_alignment',
			[
				'label'     => esc_html__( 'Content Alignment', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'text-left'  => esc_html__( 'Left', 'bdevs-elementor' ),
					'text-center' => esc_html__( 'Center', 'bdevs-elementor' ),
					'text-right' => esc_html__( 'Right', 'bdevs-elementor' ),
				],
				'default'   => 'text-center',
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
			'divider-200',
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
					'chose_style' => ['member-style-1', 'member-style-2', 'member-style-3', 'member-style-4', 'member-style-5']
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
					'chose_style' => ['member-style-1', 'member-style-2', 'member-style-3', 'member-style-4', 'member-style-5']
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


   	$shape_image_src = wp_get_attachment_image_src( $settings['shape_image']['id'], 'full' );
	$shape_image_url = $shape_image_src ? $shape_image_src[0] : ''; 

	$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';

	if( $chose_style == 'member-style-1' ): 
		// sub heading info
		$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? $settings['sub_heading_font_size'] : '';
		$sub_heading_n_title_gap = !empty($settings['sub_heading_n_title_gap']) ? $settings['sub_heading_n_title_gap'] : '';
		$sub_heading_color = !empty($settings['sub_heading_color']) ? $settings['sub_heading_color'] : '';

		$sub_heading_border_color = ($settings['sub_heading_color']) ? 'background-color:'.$settings['sub_heading_color'] : '';
		
		// heading info
		$heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
		$heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
		$heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
		$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

		// desc info
		$desc_font_size = !empty($settings['desc_font_size']) ? $settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? $settings['desc_color'] : '';

	?>

            <!-- team-area-start -->
            <div class="team-area team-style-1 pt-120 pb-100 pos-rel">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item team-01 bounce-animate"><img src="<?php print esc_url( $shape_image_url ); ?>" alt="shape image"></div>
                </div>
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>

	                    <div class="row mb-50">
	                        <div class="col-xl-4 col-lg-6">
	                            <div class="section-title  mb-30">
	                                <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
	                                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
										<span class="sub-t-left"  style="font-size: <?php print esc_attr( $sub_heading_font_size ); ?>; color: <?php print esc_attr( $sub_heading_color ); ?>; margin-bottom: <?php print esc_attr( $sub_heading_n_heading_gap ); ?>;"><?php echo wp_kses_post( $sub_heading ); ?></span>
									<?php 
									endif; ?>

									<?php 
									if (( '' !== $heading ) && ( $show_heading )) : ?>
										<<?php print esc_attr( $heading_type ); ?> class="member-style-1-heading-info" style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php echo wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
									<?php 
									endif; ?>
	                            </div>
	                        </div>
	                        <div class="col-xl-5 offset-xl-3 col-lg-6">
	                            <div class="team-section mb-30">
	                        		<?php 
									if (( '' !== $desc ) && ( $show_desc )) : ?>
										<p style="font-size: <?php print esc_attr( $desc_font_size ); ?>; color: <?php print esc_attr( $desc_color ); ?>;"><?php echo wp_kses_post( $desc ); ?></p>
									<?php 
									endif; ?>

				                    <?php 
				                    if (( ! empty( $settings['link']['url'] )) ): ?>
										<a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php echo esc_html($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
				                    <?php 
				                	endif; ?>	
	                            </div>
	                        </div>
	                    </div>

                    <?php 
                	endif; ?>

                    <div class="row">
		                <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-member',
						    'posts_per_page'=> $number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post(); 
								$designation = get_post_meta(get_the_ID(), 'member_designation', true);
								$facebook = get_post_meta(get_the_ID(), 'profile_fb_url', true);
								$twitter = get_post_meta(get_the_ID(), 'profile_twitter_url', true);
								$behance = get_post_meta(get_the_ID(), 'profile_behance_url', true);
								$pinterest = get_post_meta(get_the_ID(), 'profile_pinterest_url', true);
								$linkedin = get_post_meta(get_the_ID(), 'profile_linkedin_url', true);
							?>
		                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
		                            <div class="team-wrapper">
		                                <div class="team-img">
		                                    <a href="<?php the_permalink(); ?>">
		                                    	<?php the_post_thumbnail('torun-member-thumb'); ?>
		                                    </a>
		                                </div>
		                                <div class="team-text <?php print esc_attr( $text_alignment ); ?>">
		                                    <h4><?php the_title(); ?></h4>
		                                    <span><?php echo wp_kses_post( $designation ); ?></span>
		                                    <div class="team-icon">
		                                        <?php 
		                                        if ($facebook): ?>
			                                    	<a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
			                                	<?php 
			                                	endif; ?>

			                                	<?php 
			                                	if ($twitter): ?>
			                                    	<a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($behance): ?>
			                                    	<a href="<?php print esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($pinterest): ?>
			                                    	<a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($linkedin): ?>
			                                    	<a href="<?php print esc_url($linkedin); ?>"><i class="fab fa-linkedin"></i></a>
			                                    <?php 
			                                	endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>

                    </div>
                </div>
            </div>
            <!-- team-area-end -->
	<?php elseif( $chose_style == 'member-style-2' ): 
		// sub heading info
		$sub_heading_font_size = !empty($settings['sub_heading_font_size']) ? $settings['sub_heading_font_size'] : '';
		$sub_heading_n_title_gap = !empty($settings['sub_heading_n_title_gap']) ? $settings['sub_heading_n_title_gap'] : '';
		$sub_heading_color = !empty($settings['sub_heading_color']) ? $settings['sub_heading_color'] : '';
		
		// heading info
		$heading_font_size = !empty($settings['heading_font_size']) ? $settings['heading_font_size'] : '';
		$heading_line_height = !empty($settings['heading_line_height']) ? $settings['heading_line_height'] : '';
		$heading_color = !empty($settings['heading_color']) ? $settings['heading_color'] : '';
		$heading_type = !empty($settings['heading_type']) ? $settings['heading_type'] : 'h1';

		// desc info
		$desc_font_size = !empty($settings['desc_font_size']) ? $settings['desc_font_size'] : '';
		$desc_color = !empty($settings['desc_color']) ? $settings['desc_color'] : '';
	?>

            <!-- team-area-start -->
            <div class="team-area pt-95 pb-100 pos-rel">
                <div class="shape d-none d-xl-block">
                    <div class="shape-item team-02 bounce-animate"><img src="<?php print esc_url( $shape_image_url ); ?>" alt="Shape Image"></div>
                </div>
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
	                        <div class="section-title mb-75">
	                    		<?php 
								if (( '' !== $heading ) && ( $show_heading )) : ?>
									<<?php print esc_attr( $heading_type ); ?> class="member-style-1-heading-info" style="font-size: <?php print esc_attr( $heading_font_size ); ?>; color: <?php print esc_attr( $heading_color ); ?>; line-height: <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php echo wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
								<?php 
								endif; ?>
	                        </div>
	                    </div>
                    <?php 
                	endif; ?>
                    <div class="row">
		                <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-member',
						    'posts_per_page'=> $number,
						    'orderby' 		=> 'menu_order title',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							while($q->have_posts()): $q->the_post(); 
								$designation = get_post_meta(get_the_ID(), 'member_designation', true);
								$facebook = get_post_meta(get_the_ID(), 'profile_fb_url', true);
								$twitter = get_post_meta(get_the_ID(), 'profile_twitter_url', true);
								$behance = get_post_meta(get_the_ID(), 'profile_behance_url', true);
								$pinterest = get_post_meta(get_the_ID(), 'profile_pinterest_url', true);
								$linkedin = get_post_meta(get_the_ID(), 'profile_linkedin_url', true);
							?>
		                        <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
		                            <div class="team-wrapper">
		                                <div class="team-img">
		                                    <a href="<?php the_permalink(); ?>">
		                                    	<?php the_post_thumbnail('torun-member-thumb'); ?>
		                                    </a>
		                                </div>
		                                <div class="team-text">
		                                    <h4><?php the_title(); ?></h4>
		                                    <span><?php echo wp_kses_post( $designation ); ?></span>
		                                    <div class="team-icon">
		                                        <?php 
		                                        if ($facebook): ?>
			                                    	<a href="<?php print esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a>
			                                	<?php 
			                                	endif; ?>

			                                	<?php 
			                                	if ($twitter): ?>
			                                    	<a href="<?php print esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($behance): ?>
			                                    	<a href="<?php print esc_url($behance); ?>"><i class="fab fa-behance"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($pinterest): ?>
			                                    	<a href="<?php print esc_url($pinterest); ?>"><i class="fab fa-pinterest"></i></a>
			                                    <?php 
			                                	endif; ?>

			                                    <?php 
			                                    if ($linkedin): ?>
			                                    	<a href="<?php print esc_url($linkedin); ?>"><i class="fab fa-linkedin"></i></a>
			                                    <?php 
			                                	endif; ?>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>

							<?php 
							endwhile; 
							wp_reset_postdata(); 
						endif; 
						?>
                    </div>
                </div>
            </div>
            <!-- team-area-end -->

	<?php endif; ?>

	<?php
	}

}