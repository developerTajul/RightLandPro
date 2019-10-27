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
class BdevsCaseStudiesGallery extends \Elementor\Widget_Base {

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
		return 'bdevs-case-study-gallery-post';
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
		return __( 'Case Study Gallery', 'bdevs-elementor' );
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
		return [ 'case study gallery' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_content_heading',
			[
				'label' => esc_html__( 'Section Heading', 'bdevs-elementor' ),
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

		$this->end_controls_section();


		$this->start_controls_section(
			'section_content_case_study_grid_post',
			[
				'label' => esc_html__( 'Case Study Post', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'case_study_gallery_style_1' => esc_html__( 'Case Study Gallery Style 01', 'bdevs-elementor' ),
					'case_study_gallery_style_2' => esc_html__( 'Case Study Gallery Style 02', 'bdevs-elementor' ),
				],
				'default'   => 'case_study_gallery_style_1',
				'label_block'   => 'true',
			]
		);

		$this->add_control(
			'post_number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'3'  => esc_html__( '3', 'bdevs-elementor' ),
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

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display(); 
		extract($settings);
		$order = $settings['post_order'];
		$post_number = $settings['post_number'];
		$chose_style = $settings['chose_style'];

	    $q = new \WP_Query(array(
	    	'posts_per_page' => $post_number,
	    	'post_type' => 'bdevs-case-studies',
	    	'orderby' => 'menu_order title',
	    	'order' => $post_order
	    ));
	    
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

		$text_alignment = !empty( $settings['post_contnet_alignment'] ) ? $settings['post_contnet_alignment'] : '';
		?>

		<?php if( $chose_style == 'case_study_gallery_style_1' ): ?>
            <!-- case-area-start -->
            <div class="case-area pt-120 pb-100">
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
	                            <div class="section-title ml-50 mr-50 mb-80">
	                               
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
                    <?php 
                	endif; ?>
                    <div class="row">


 						<?php 
				        $j = 0;
				        while($q->have_posts()) : $q->the_post(); 
				        ?>      

                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-wrapper mb-30 <?php print esc_attr( $text_alignment ); ?>">
                                <div class="case-img">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('torun-case-studies-gallery'); ?></a>
                                </div>
                                <div class="case-text">
                                    <span>
	                                    <?php 
			                            $cats = get_the_terms(get_the_ID(), 'case_study_categories');

			                            if( is_array($cats) ){
			                                $cats_count = count($cats); $count = 1;
			                                 foreach ( $cats as $cat ) {
			                                    $exatra = ( $cats_count > $count ) ? ', ' : '';
			                                     print esc_html($cat->name . $exatra);

			                                    $count++;
			                                }
			                            }
			                       		?>
		                        	</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </div>

						<?php   
				        endwhile; 
				        wp_reset_postdata();
				    ?>
                    </div>
                </div>
            </div>
            <!-- case-area-end -->

        <?php elseif( $chose_style == 'case_study_gallery_style_2' ): ?>
            <!-- case-studies-start -->
            <div class="case-studies pt-120 pb-100">
                <div class="container">
                	<?php 
                	if( $settings['show_heading_section'] == 'yes'): ?>
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
                    <?php 
                	endif; ?>
                    <div class="row">
 						<?php 
				        $j = 0;
				        while($q->have_posts()) : $q->the_post(); 
				        ?>                       	
	                        <div class="col-xl-4 col-lg-4 col-md-6">
	                            <div class="case-studies-wrapper mb-30">
	                                <div class="case-studies-img">
	                                	<?php the_post_thumbnail('torun-case-studies-gallery-thumb'); ?>
	                                    <div class="case-studies-text <?php print esc_attr( $text_alignment ); ?>">
	                                        <span>	                                    
	                                        	<?php 
					                            $cats = get_the_terms(get_the_ID(), 'case_study_categories');

					                            if( is_array($cats) ){
					                                $cats_count = count($cats); $count = 1;
					                                 foreach ( $cats as $cat ) {
					                                    $exatra = ( $cats_count > $count ) ? ', ' : '';
					                                     print esc_html($cat->name . $exatra);

					                                    $count++;
					                                }
					                            }
					                       		?>
			                       			</span>
	                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	                                    </div>
	                                </div>
	                                <div class="case-studies-content <?php print esc_attr( $text_alignment ); ?>">
	                                    <p><?php print wp_trim_words(get_the_content(), 30, ''); ?></p>
	                                </div>
	                            </div>  
	                        </div>
						<?php   
				        endwhile; 
				        wp_reset_postdata();
				    ?>
                    </div>
                </div>
            </div>
            <!-- case-studies-end -->

        <?php endif; ?>		

	<?php
	}

}