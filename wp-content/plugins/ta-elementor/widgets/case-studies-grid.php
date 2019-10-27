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
class BdevsCaseStudiesGrid extends \Elementor\Widget_Base {

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
		return 'bdevs-case-study-post';
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
		return __( 'Case Study Grid', 'bdevs-elementor' );
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
		return [ 'case study grid' ];
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
					'chose_style' => 'portfolio_three_collumn',
				],
				'label_block' => true
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'view more ', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'View All Services', 'bdevs-elementor' ),
				'condition' => [
					'chose_style' => 'portfolio_three_collumn',
				],
				'label_block' => true
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
					'chose_style' => 'portfolio_three_collumn',
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
					'portfolio_two_collumn'  => esc_html__( 'Portfolio Two Collumn', 'bdevs-elementor' ),
					'portfolio_three_collumn' => esc_html__( 'Portfolio Three Collumn', 'bdevs-elementor' ),
				],
				'default'   => 'portfolio_three_collumn',
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

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

	    $q = new \WP_Query(array(
	    	'posts_per_page' => $post_number,
	    	'post_type' => 'bdevs-case-studies',
	    	'orderby' => 'menu_order title',
	    	'order' => $order
	    ));
	    

	    //other style
	    $args = array(
	    	'posts_per_page' => $post_number,
	    	'post_type' => 'bdevs-case-studies',
	    	'orderby' => 'menu_order title',
	    	'order' => $order
	    );
	    $filteArr = array();
	    $postArr = new \WP_Query($args);

	    if( is_array($postArr->posts) && !empty($postArr->posts) ) {

	        foreach($postArr->posts as $item) {
	            $taxsArr = wp_get_post_terms($item->ID, 'case_study_categories', array("fields" => "all"));
	            if(is_array($taxsArr) && !empty($taxsArr)) {
	                foreach($taxsArr as $tax) {
	                    $filteArr[$tax->slug] = $tax->name;
	                }
	            }
	        }
	    }

	    // var_dump($filteArr);
	    if( is_array($filteArr) && !empty($filteArr) ):

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

		?>

		<?php if( $chose_style == 'portfolio_three_collumn' ): ?>
            <!-- latest-gallery-area -->
            <div class="gallery-area pt-125 pb-130">
                <div class="container">
                	<?php 
            		if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row mb-40">
	                        <div class="col-xl-5 col-lg-5">
	                            <div class="section-title  mb-30">
	                                
	                                <?php 
	                                if (( '' !== $sub_heading ) && ( $show_sub_heading )) : ?>
	                                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>"></span>
						                <span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_heading ); ?></span>
						            <?php 
						        	endif; ?>
	                                
	                                <?php 
	                                if (( '' !== $heading ) && ( $show_heading )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style="<?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>;"><?php print wp_kses_post( $heading ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php 
						        	endif; ?>
	                            </div>
	                        </div>
	                        <div class="col-xl-7 col-lg-7mb-30">
	                            <div class="portfolio-menu mt-120 text-lg-right mb-30">
	                                <button class="active" data-filter="*"><?php print esc_html__('All Project','bdevs-elementor'); ?></button>
									<?php 
				                    foreach($filteArr as $tax_slug => $tax_name) { ?>
	                                <button data-filter=".<?php print esc_attr($tax_slug); ?>"><?php print esc_html($tax_name); ?></button>
									<?php 
				                    }
				                    ?>
	                            </div>
	                        </div>
	                    </div>
                	<?php endif;
                	?>
                    <div id="portfolio-grid" class="row row-portfolio">
                        <div class="grid-sizer"></div>
				        <?php 
				        $j = 0;
				        while($q->have_posts()) : $q->the_post(); 

				        $j++;
				        $column_num = ( $j%1 == 0 AND $j < 2 ) ? 8 : 4;    
				        $item_classes = '';
				        $item_cats = get_the_terms( get_the_id(), 'case_study_categories' );
				        if($item_cats):
				            foreach($item_cats as $item_cat) {
				                $item_classes .= $item_cat->slug . ' ';
				            }
				        endif;//endif

				        ?>                        
	                        <div class="col-xl-4 col-lg-4 col-md-6 grid-item mb-30 <?php print esc_attr($item_classes); ?>">
	                            <div class="portfolio-wrapper">
	                                <div class="portfolio-img">
	                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('torun-case-studies-grid'); ?></a>
	                                    <div class="portfolio-text">
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
	                                        <a class="btn" href="<?php the_permalink(); ?>"><span class="btn-text">learn more <i class="far fa-long-arrow-right"></i></span> </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
						<?php   
				        endwhile; 
				        wp_reset_postdata();
				    ?>
                    </div>


					<?php 
					if ( ( ! empty( $settings['link']['url'] )) && ( $settings['show_link'] == 'yes') ): ?>
		                <div class="row">
	                        <div class="col-xl-12">
	                            <div class="portfolio-button text-center mt-30">
	                                <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php print esc_html( $settings['link_text']); ?>
	                                <?php if( $settings['show_link_icon']): ?>
	                                	<i class="<?php print esc_html( $settings['link_icon']); ?>"></i>
									<?php endif; ?>
	                             </span> </a>
	                            </div>
	                        </div>
	                    </div>
                    <?php 
                	endif; ?>
                </div>
            </div>
            <!-- gallery-area-end -->



        <?php elseif( $chose_style == 'portfolio_two_collumn' ): ?>
        <section class="portfolio-area pt-115 pb-90">
            <div class="container">
                <div class="row">
                    <!-- START PORTFOLIO FILTER AREA -->
                    <div class="col-12">
                        <div class="text-center">
                            <div class="portfolio-filter mb-40">
                                <button class="active" data-filter="*"><?php print esc_html__('Show all','bdevs-elementor'); ?></button>
								<?php 
			                    foreach($filteArr as $tax_slug => $tax_name) { ?>
                                <button data-filter=".<?php print esc_attr($tax_slug); ?>"><?php print esc_html($tax_name); ?></button>
								<?php 
			                    }
			                    ?>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTFOLIO FILTER AREA -->
                </div>
                <div id="portfolio-grid" class="row row-portfolio">
                    <div class="col-lg-6 col-md-6 grid-sizer"></div>
			        <?php 
			        $j = 0;
			        while($q->have_posts()) : $q->the_post(); 

			        $j++;
			        $column_num = ( $j%1 == 0 AND $j < 2 ) ? 8 : 4;    
			        $item_classes = '';
			        $item_cats = get_the_terms( get_the_id(), 'portfolio_categories' );
			        if($item_cats):
			            foreach($item_cats as $item_cat) {
			                $item_classes .= $item_cat->slug . ' ';
			            }
			        endif;//endif

			        ?>
                    <div class="col-lg-6 col-md-6 grid-item <?php print esc_attr($item_classes); ?>">
                        <div class="portfolio-item mb-30">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-image">
                                    <?php the_post_thumbnail('bdevs-gallery-thumb'); ?>
                                    <div class="view-icon">
                                    	<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                                        <a class="popup-image" href="<?php print esc_url($featured_img_url); ?>">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-caption">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <p>
	                                    <?php 
				                            $cats = get_the_terms(get_the_ID(), 'portfolio_categories');

				                            if( is_array($cats) ){
				                                $cats_count = count($cats); $count = 1;
				                                 foreach ( $cats as $cat ) {
				                                    $exatra = ( $cats_count > $count ) ? ', ' : '';
				                                     print esc_html($cat->slug . $exatra);

				                                    $count++;
				                                }
				                            }
				                        ?>
			                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php   
				        endwhile; 
				        wp_reset_postdata();
				    ?>
                </div>
            </div>
        </section>
        <?php endif; ?>		


		<?php endif; ?>
	<?php
	}

}