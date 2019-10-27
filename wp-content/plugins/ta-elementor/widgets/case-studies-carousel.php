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
class BdevsCaseStudiesCarousel extends \Elementor\Widget_Base {

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
		return 'bdevs-case-studies-post';
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
		return __( 'Case Study Carousel', 'bdevs-elementor' );
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
		return [ 'case-study' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_portfolio_post',
			[
				'label' => esc_html__( 'Carousel Section', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'case-study-style-1'  => esc_html__( 'Case Study Carousel 1', 'bdevs-elementor' ),
					'case-study-style-2'  => esc_html__( 'Case Study Carousel 2', 'bdevs-elementor' ),
					// 'case-study-style-3'  => esc_html__( 'Gallery Two Column', 'bdevs-elementor' ),
				],
				'default'   => 'case-study-style-1',
				'label_block'   => 'true',
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
				'condition' => [
					'chose_style' => ['case-study-style-1', 'case-study-style-2','case-study-style-3', 'case-study-style-4', 'case-study-style-5']
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
					'chose_style' => ['case-study-style-1', 'case-study-style-2','case-study-style-3', 'case-study-style-4', 'case-study-style-5']
				],			
			]
		);		

		$this->add_control(
			'desc',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::WYSIWYG,
				'placeholder' => __( 'Enter your description', 'bdevs-elementor' ),
				'default'     => __( 'It is content', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
					'chose_style' => ['case-study-style-3', 'case-study-style-4', 'case-study-style-5']
				],
			]
		);

		$this->add_control(
			'background_bg',
			[
				'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::MEDIA,
				'dynamic' => [ 'active' => true ],
				'description' => esc_html__( 'Add Backgrond Image', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'background_color',
			[
				'label'   => esc_html__( 'Background Color', 'bdevs-elementor' ),
				'type'        => Controls_Manager::COLOR,
				'placeholder' => __( 'Enter Color Code', 'bdevs-elementor' ),
			]
		);


		$this->add_control(
			'post_number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'3'  => esc_html__( '3', 'bdevs-elementor' ),
					'5' => esc_html__( '5', 'bdevs-elementor' ),
					'6' => esc_html__( '6', 'bdevs-elementor' ),
					'9' => esc_html__( '9', 'bdevs-elementor' ),
					'12' => esc_html__( '12', 'bdevs-elementor' ),
				],
				'default'   => '6',
			]
		);

		$this->add_control(
			'post_order',
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
			'post_contnet_alignment',
			[
				'label'     => esc_html__( 'Content Alignment', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'text-left'  => esc_html__( 'Left', 'bdevs-elementor' ),
					'text-center' => esc_html__( 'Center', 'bdevs-elementor' ),
					'text-right' => esc_html__( 'Right', 'bdevs-elementor' ),
				],
				'default'   => 'text-left',
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
					'chose_style' => ['case-study-style-1', 'case-study-style-4', 'case-study-style-5']
				],
			]
		);		

		$this->add_control(
			'link_text',
			[
				'label'       => __( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Type Link Text Here...', 'bdevs-elementor' ),
				'default'     => __( 'View More', 'bdevs-elementor' ),
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
				'condition' => [
					'chose_style' => ['case-study-style-3', 'case-study-style-4', 'case-study-style-5']
				],
			]
		);

		$this->add_control(
			'desc_font_size',
			[
				'label'       => __( 'Description Font Size', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter font size here', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => ['case-study-style-3', 'case-study-style-4', 'case-study-style-5']
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
					'chose_style' => ['case-study-style-3', 'case-study-style-4', 'case-study-style-5']
				],
			]
		);


		$this->end_controls_section();


	}

	public function render() {

		$settings  = $this->get_settings_for_display(); 
		extract( $settings );
		$order = $settings['post_order'];
		$post_number = $settings['post_number'];
		$chose_style = $settings['chose_style'];

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

		// background image
		$bg_src = wp_get_attachment_image_src( $settings['background_bg']['id'], 'full' );
		$bg_url = $bg_src ? $bg_src[0] : ''; 

		// background color
		$bg_color = ($settings['background_color']) ? $settings['background_color'] : '#096BD8';

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


		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';

		if( $chose_style == 'case-study-style-1' ): ?>
			
            <!-- project-area-start -->
            <div class="project-area pt-125 pb-185  pl-140 pr-140">
            	<?php 
            	if( $settings['show_heading_section'] == 'yes'): ?>
	                <div class="container">
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
	                            <div class="section-title ml-50 mr-50 mb-75">
	                                <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?>
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				<?php 
				endif; ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="project-active owl-carousel">
                        <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-case-studies',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							$number = 0;
							while($q->have_posts()): $q->the_post(); 
							$number++;
							?>
	                            <div class="col-xl-12">
	                                <div class="project-wrapper">
	                                    <div class="project-img">
	                                        <a href="<?php the_permalink(); ?>">
	                                        	<?php the_post_thumbnail('torun-carousel'); ?>
	                                        </a>
	                                        <div class="project-text">
	                                            <span>
	                                            	<?php 
								                        $cats = get_the_terms(get_the_ID(), 'case_study_categories');

							                            if( is_array($cats) ){
							                                $cats_count = count($cats); $count = 1;
							                                 foreach ( $cats as $cat ) {
							                                    $exatra = ( $cats_count > $count ) ? ', ' : '';
							                                     print esc_html(ucwords($cat->name . $exatra));

							                                    $count++;
							                                }
							                            }
							                        ?>   
							                    </span>
	                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	             			<?php 
		         			endwhile; wp_reset_postdata(); 
						endif; 
						?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project-area-end -->


		<?php elseif( $chose_style == 'case-study-style-2' ): ?>

            <!-- our-case-area-start -->
            <div class="our-case-area pt-120  pr-55 pl-55 pb-220" style="background-image:url(<?php print esc_url($bg_url); ?>); background-color: <?php print esc_attr( $bg_color ); ?>">
            	<?php 
            	if( $settings['show_heading_section'] == 'yes'): ?>
	                <div class="container">
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
	                            <div class="section-title section-title-white ml-50 mr-50 mb-80">
	                                <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="border-left-1" style="background-color: <?php print esc_attr( $sub_heading_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						                <span class="border-right-1" style="background-color: <?php print esc_attr( $sub_heading_color ); ?>;"></span>
						            <?php 
						        	endif; ?>
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                <?php 
            	endif; ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="case-active owl-carousel">
                        <?php 
						$q = new \WP_Query(array(
							'post_type'     => 'bdevs-case-studies',
						    'posts_per_page'=> $post_number,
						    'orderby' 		=> 'menu_order',
						   	'order'			=> $order,
						));
						if($q->have_posts()):
							$number = 0;
							while($q->have_posts()): $q->the_post(); 
							$number++;
							?>
                            <div class="col-xl-12">
                                <div class="our-case-wrapper <?php print esc_attr( $text_alignment ); ?>">
                                    <div class="our-case-img">
                                        <a href="<?php the_permalink(); ?>">
                                        	<?php the_post_thumbnail('torun-case-studies-carousel'); ?>
                                        </a>
                                    </div>
                                    <div class="our-case-text ">
                                    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span>(
	                                            	<?php 
								                        $cats = get_the_terms(get_the_ID(), 'case_study_categories');

							                            if( is_array($cats) ){
							                                $cats_count = count($cats); $count = 1;
							                                 foreach ( $cats as $cat ) {
							                                    $exatra = ( $cats_count > $count ) ? ', ' : '';
							                                     print esc_html(ucwords($cat->name . $exatra));

							                                    $count++;
							                                }
							                            }
							                        ?>   
							                    )</span></a></h3>
                                        <p><?php print wp_kses_post( wp_trim_words(get_the_content(), 20, '') ); ?></p>
                                        <a href="<?php the_permalink(); ?>"> <span class="cases-button">learn more <i class="far fa-long-arrow-right"></i></span> </a>
                                    </div>
                                </div>
                            </div>
	             			<?php 
		         			endwhile; wp_reset_postdata(); 
						endif; 
						?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- our-case-area-end -->
        <?php endif; ?>		

	<?php
	}

}