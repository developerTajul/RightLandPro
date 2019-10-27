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
class BdevsBlogPost extends \Elementor\Widget_Base {

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
		return 'bdevs-blog-post';
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
		return __( 'Latest Blog', 'bdevs-elementor' );
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
		return [ 'blog-post' ];
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
			'sub_title',
			[
				'label'       => __( 'Sub Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'It is sub heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter your subheading here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'title',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'It is heading', 'bdevs-elementor' ),
				'placeholder' => __( 'Enter your heading here...', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'link_text',
			[
				'label'       => esc_html__( 'Button Text', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => esc_html__( 'our blog', 'bdevs-elementor' ),
				'placeholder' => esc_html__( 'Link Text', 'bdevs-elementor' ),
				'label_block' => true,
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
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_service_post',
			[
				'label' => esc_html__( 'Blog Post', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Chose Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'blog-style-1'  => esc_html__( 'Latest Blog Style 1', 'bdevs-elementor' ),
					'blog-style-2' => esc_html__( 'Latest Blog Style 2', 'bdevs-elementor' ),
				],
				'default'   => 'blog-style-1',
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
					'2'  => esc_html__( '2', 'bdevs-elementor' ),
					'3'  => esc_html__( '3', 'bdevs-elementor' ),
					'6' => esc_html__( '6', 'bdevs-elementor' ),
					'9' => esc_html__( '9', 'bdevs-elementor' ),
					'12' => esc_html__( '12', 'bdevs-elementor' ),
				],
				'default'   => '2',
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

		$this->add_control(
			'cat',
			[
				'label'       => __( 'Category Slug', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter category slug here...', 'bdevs-elementor' ),
				'label_block' => true,
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
			'show_title',
			[
				'label'   => esc_html__( 'Show title', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'show_heading_section' => 'yes'
				],
			]
		);	

		$this->add_control(
			'show_sub_title',
			[
				'label'   => esc_html__( 'Show Sub Title', 'bdevs-elementor' ),
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
				'condition' => [
					'chose_style' => ['blog-style-1']
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
			'divider-10',
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

		$this->add_render_attribute(
			[
				'link' => [
					'href'   => $settings['link']['url'] ? esc_url($settings['link']['url']) : '#',
					'target' => $settings['link']['is_external'] ? '_blank' : '_self'
				]
			], '', '', true
		);

	    $cat = get_term_by('slug', $cat, 'category');

	    if( !empty($cat->term_id) ){
	        $term_id = $cat->term_id;
	    }else{
	        $term_id = 1;
	    }

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

		if( $chose_style == 'blog-style-1' ): ?>

            <!-- blog-area-start -->
            <div class="blog-area pt-120 pb-100">
                <div class="container">
                	<?php 
            		if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row mb-55">
	                        <div class="col-xl-6 col-lg-6 col-md-8 mb-30">
	                            <div class="section-title">
						            <?php if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
						                <span class="b-sm-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
	                                	<span class="b-sm-left-2" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span class="sub-t-left" style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_title ); ?></span>
						            <?php endif; ?> 

	                        		<?php if (( '' !== $title ) && ( $show_title )) : ?>
						                <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
						            <?php endif; ?> 
	                            </div>
	                        </div>
		                    <?php 
		                    if (( '' !== $link['url'] ) && ( $show_link == 'yes' )) : ?>
		                        <div class="col-xl-6 col-lg-6 col-md-4 mb-30">
		                            <div class="bolg-top-button text-md-right mt-90">
		                                <a class="btn" <?php echo $this->get_render_attribute_string( 'link' ); ?>><span class="btn-text"><?php echo esc_html($settings['link_text']); ?> <i class="far fa-long-arrow-right"></i></span> </a>
		                            </div>
		                        </div>
		                    <?php 
		                	endif; ?>
	                    </div>
                	<?php 
            		endif; ?>

                    <div class="row">
						<div class="col-xl-4 col-lg-4 col-md-12 mb-30">
		                	<?php 
			                $q = new \WP_Query(array(
			                    'post_type'     => 'post',
			                    'posts_per_page'=> 1,
			                    'orderby'       => 'menu_order title',
			                    'order'         => $order,
			                    'tax_query' => array(
			                        array(
			                            'taxonomy' => 'post_format',
			                            'field'    => 'slug',
										'terms' => array( 
							                'post-format-image', 
							            ),
			                            'operator' => 'IN',
			                        ),
			                    ),
			                ));

			                if($q->have_posts()):
			                    while($q->have_posts()): $q->the_post();  ?>
			                
		                            <div class="blog-wrapper <?php print esc_attr( $text_alignment ); ?>">
		                                <div class="blog-img">
		                                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
		                                </div>
		                                <div class="blog-meta">
		                                    <span> <i class="far fa-user"></i> <?php print get_the_author(); ?></span>
		                                    <span> <i class="fal fa-calendar-alt"></i> <?php the_time(get_option('date_format')); ?></span>
		                                    <span> <i class="far fa-comments"></i> (<?php comments_popup_link('0', '01', '%comments', 'latest-blog-comment', 'Comment Off'); ?>)</span>
		                                </div>
		                                <div class="blog-text">
		                                    <h3><a href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 15, ''); ?></a></h3> 
		                                    <p><?php print wp_trim_words(get_the_content(), 24, ''); ?></p>   
		                                    <a href="<?php the_permalink(); ?>"> <span class="blog-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
		                                </div>
		                            </div>
		                        
			                    <?php 
			                    endwhile;  
			                    wp_reset_postdata();
			                endif; 
			                ?>
	                	</div>

                        <div class="col-xl-8 col-lg-8">
                            <?php 
			                $q = new \WP_Query(array(
			                    'post_type'     => 'post',
			                    'posts_per_page'=> $number,
			                    'orderby'       => 'menu_order title',
			                    'order'         => $order,
			                    'offset'		=> 1,
			                    'tax_query' => array(
			                        array(
			                            'taxonomy' => 'post_format',
			                            'field'    => 'slug',
										'terms' => array( 
							                'post-format-image', 
							            ),
			                            'operator' => 'IN',
			                        ),
			                    ),
			                ));

			                if($q->have_posts()):
			                    while($q->have_posts()): $q->the_post();  ?>
			                        <div class="blog-border mb-30 <?php print esc_attr( $text_alignment ); ?>">
		                                <div class="row">
		                                    <div class="col-xl-6 col-lg-6">
		                                        <div class="blog-img">
		                                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
		                                        </div>   
		                                    </div>   
		                                    <div class="col-xl-6 col-lg-6">
		                                        <div class="single-blog">
		                                            <div class="blog-meta">
		                                                <span> <i class="far fa-user"></i> <?php print get_the_author(); ?></span>
		                                                <span> <i class="fal fa-calendar-alt"></i> <?php the_time(get_option('date_format')); ?></span>
		                                                <span> <i class="far fa-comments"></i> (<?php comments_popup_link('0', '01', '%comments', 'latest-blog-comment', 'Comment Off'); ?>)</span>
		                                            </div>
		                                            <div class="blog-text">
		                                                <h3><a href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 15, ''); ?></a></h3> 
		                                    			<p><?php print wp_trim_words(get_the_content(), 24, ''); ?></p>   
		                                            </div>
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
            </div>
            <!-- blog-area-end -->

		<?php elseif ($chose_style == 'blog-style-2') : ?>
            <!-- blog-area-start -->
            <div class="blog-area pt-120 pb-100">
                <div class="container">
                	<?php 
            		if( $settings['show_heading_section'] == 'yes'): ?>
	                    <div class="row">
	                        <div class="col-xl-6 col-lg-8 offset-lg-2 offset-xl-3">
	                            <div class="section-title ml-50 mr-50 mb-75">
	                                
	                                <?php 
	                                if (( '' !== $sub_title ) && ( $show_sub_title )) : ?>
	                                	<span class="border-left-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						                <span style="<?php print esc_attr( $sub_heading_font_size ); ?>;  <?php print esc_attr( $sub_heading_color ); ?>;  <?php print esc_attr( $sub_heading_n_title_gap ); ?>;"><?php print wp_kses_post( $sub_title ); ?></span>
						                <span class="border-right-1" style="<?php print esc_attr( $sub_heading_border_color ); ?>;"></span>
						            <?php 
						        	endif; ?> 
	                                
	                                <?php 
	                                if (( '' !== $title ) && ( $show_title )) : ?>
						               <<?php print esc_attr( $heading_type ); ?> style=" <?php print esc_attr( $heading_font_size ); ?>;  <?php print esc_attr( $heading_color ); ?>; <?php print esc_attr( $heading_line_height ); ?>; margin-bottom: <?php print esc_attr( $heading_n_desc_gap ); ?>;"><?php print wp_kses_post( $title ); ?></<?php print esc_attr( $heading_type ); ?>>
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
		                    'post_type'     => 'post',
		                    'posts_per_page'=> $number,
		                    'orderby'       => 'menu_order title',
		                    'order'         => $order,
		                    'tax_query' => array(
		                        array(
		                            'taxonomy' => 'post_format',
		                            'field'    => 'slug',
									'terms' => array( 
						                'post-format-image', 
						            ),
		                            'operator' => 'IN',
		                        ),
		                    ),
		                ));

		                if($q->have_posts()):
		                    while($q->have_posts()): $q->the_post();  ?>

			                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
		                            <div class="blog-wrapper <?php print esc_attr( $text_alignment ); ?>">
		                                <div class="blog-img">
		                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		                                </div>
		                                <div class="blog-meta">
		                                    <span> <i class="far fa-user"></i> <?php print get_the_author(); ?></span>
		                                    <span> <i class="fal fa-calendar-alt"></i> <?php the_time(get_option('date_format')); ?></span>
		                                    <span> <i class="far fa-comments"></i> (<?php comments_popup_link('0', '01', '%comments', 'latest-blog-comment', 'Comment Off'); ?>)</span>
		                                </div>
		                                <div class="blog-text">
		                                    <h3><a href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 7, ''); ?></a></h3>
		                                    <p><?php print wp_trim_words(get_the_content(), 14, ''); ?></p>   
		                                    <a href="<?php the_permalink(); ?>"> <span class="blog-button">read more <i class="far fa-long-arrow-right"></i></span> </a>
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
            <!-- blog-area-end -->
		<?php endif; ?>
	<?php
	}
}