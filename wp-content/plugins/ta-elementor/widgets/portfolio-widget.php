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
class BdevsPortfolio extends \Elementor\Widget_Base {

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
		return 'bdevs-portfolio-post';
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
		return __( 'Portfolio', 'bdevs-elementor' );
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
		return [ 'portfolio' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_portfolio_post',
			[
				'label' => esc_html__( 'Portfolio Post', 'bdevs-elementor' ),
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
			'show_service_link',
			[
				'label'   => esc_html__( 'Show Service Link', 'bdevs-elementor' ),
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
				'label'   => esc_html__( 'Show Heading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_image',
			[
				'label'   => esc_html__( 'Show Image', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display(); 
		$order = $settings['post_order'];
		$post_number = $settings['post_number'];
		$chose_style = $settings['chose_style'];

	    $q = new \WP_Query(array(
	    	'posts_per_page' => $post_number,
	    	'post_type' => 'bdevs-portfolio',
	    	'orderby' => 'menu_order title',
	    	'order' => $order
	    ));
	    

	    //other style
	    $args = array(
	    	'posts_per_page' => $post_number,
	    	'post_type' => 'bdevs-portfolio',
	    	'orderby' => 'menu_order title',
	    	'order' => $order
	    );
	    $filteArr = array();
	    $postArr = new \WP_Query($args);

	    if( is_array($postArr->posts) && !empty($postArr->posts) ) {

	        foreach($postArr->posts as $item) {
	            $taxsArr = wp_get_post_terms($item->ID, 'portfolio_categories', array("fields" => "all"));
	            if(is_array($taxsArr) && !empty($taxsArr)) {
	                foreach($taxsArr as $tax) {
	                    $filteArr[$tax->slug] = $tax->name;
	                }
	            }
	        }
	    }

	    // var_dump($filteArr);
	    if( is_array($filteArr) && !empty($filteArr) ):


		?>

		<?php if( $chose_style == 'portfolio_three_collumn' ): ?>
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
                    <div class="col-lg-4 col-md-6 grid-sizer"></div>
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
                    <div class="col-lg-4 col-md-6 grid-item <?php print esc_attr($item_classes); ?>">
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