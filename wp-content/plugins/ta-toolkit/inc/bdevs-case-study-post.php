<?php 
class BdevsCaseStudies 
{
	function __construct() {
		add_action( 'init', array( $this, 'register_custom_post_type' ) );
		add_action( 'init', array( $this, 'create_cat' ) );
		add_filter( 'cmb2_meta_boxes', array( $this, 'add_meta' ) );
		add_filter( 'template_include', array( $this, 'case_studies_template_include' ) );
	}
	
	public function case_studies_template_include( $template ) {
		if ( is_singular( 'bdevs-case-studies' ) ) {
			return $this->get_template( 'single-bdevs-case-studies.php');
		}
		return $template;
	}
	
	public function get_template( $template ) {
		if ( $theme_file = locate_template( array( $template ) ) ) {
			$file = $theme_file;
		} else {
			$file = BDEVS_TOOLKIT_DIR . '/template/'. $template;
		}
		return apply_filters( __FUNCTION__, $file, $template );
	}
	
	
	public function register_custom_post_type() {

		$labels = array(
			'name'               => __( 'Case Studies', 'Post Type General Name', 'bdevs-toolkit'),
			'singular_name'      => __( 'Case Study', 'Post Type Singular Name', 'bdevs-toolkit'),
			'menu_name'          => __( 'Case Studies', 'bdevs-toolkit'),
			'parent_item_colon'  => __( 'Parent Case Study', 'bdevs-toolkit'),
			'all_items'          => __( 'All  Case Studies', 'bdevs-toolkit'),
			'view_item'          => __( 'View  Case Studies', 'bdevs-toolkit'),
			'add_new_item'       => __( 'Add New  Case Study', 'bdevs-toolkit'),
			'add_new'            => __( 'Add New  Case Study', 'bdevs-toolkit'),
			'edit_item'          => __( 'Edit  Case Study', 'bdevs-toolkit'),
			'update_item'        => __( 'Update  Case Studies', 'bdevs-toolkit'),
			'search_items'       => __( 'Search  Case Studies', 'bdevs-toolkit'),
			'not_found'          => __( 'Not found', 'bdevs-toolkit'),
			'not_found_in_trash' => __( 'Not found in Trash', 'bdevs-toolkit'),
		);

		$args   = array(
			'label'               => __( 'Case Studies', 'bdevs-toolkit'),
			'description'         => __( 'Create and manage all bdevs portfolio', 'bdevs-toolkit'),
			'labels'              => $labels,
			'supports'            => array( 'title','thumbnail', 'editor'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 14,
			'rewrite'             =>  array( 'slug' => 'case-study', 'with_front' => false ),
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'menu_icon'           => 'dashicons-awards',
		);

		register_post_type( 'bdevs-case-studies', $args );
	}
	
	public function create_cat() {

		$name = 'Category';

		$labels = array(
			'name'              => esc_html($name),
			'singular_name'     => esc_html($name),
			'search_items'      => sprintf(esc_html__( 'Search %s:', 'bdevs-toolkit' ),$name),
			'all_items'      	=> sprintf(esc_html__( 'All %s:', 'bdevs-toolkit' ),$name),
			'parent_item'      	=> sprintf(esc_html__( 'Parent  %s:', 'bdevs-toolkit' ),$name),
			'parent_item_colon' => sprintf(esc_html__( 'Parent  %s:', 'bdevs-toolkit' ),$name),
			'edit_item'     	=> sprintf(esc_html__( 'Edit  %s:', 'bdevs-toolkit' ),$name),
			'update_item'     	=> sprintf(esc_html__( 'Update %s:', 'bdevs-toolkit' ),$name),
			'add_new_item'      => sprintf(esc_html__( 'Add New %s:', 'bdevs-toolkit' ),$name),
			'new_item_name'     => sprintf(esc_html__( 'New  %s Name:', 'bdevs-toolkit' ),$name),
			'menu_name'      	=> esc_html($name),
		);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'case-study-cat' ),
		);

		register_taxonomy('case_study_categories','bdevs-case-studies', $args );
	}



	
	public function add_meta(array $bdevs) {

		$bdevs[] = array(
			'id'           => 'bdevs-case-studies',
			'title'        => esc_html__( 'Portfolio Info', 'bdevs-toolkit' ),
			'object_types' => array( 'bdevs-case-studies'),
			'fields'       => array(
				array(
		          'name' => esc_html__( 'Date', 'bdevs-toolkit'),
		          'id'   => 'portfolio_date',
		          'type' => 'text_date',
		        ),
		        array(
		          'name' => esc_html__( 'Company Name', 'bdevs-toolkit'),
		          'id'   => 'company_name',
		          'type' => 'text',
		        ),        
		        array(
		          'name' => esc_html__( 'Company Location', 'bdevs-toolkit'),
		          'id'   => 'company_location',
		          'type' => 'text',
		        ),
		        array(
		          'name' => esc_html__( 'Gallery Image', 'bdevs-toolkit'),
		          'id'   => 'project_images',
		          'type' => 'file_list',
		        ),
		        array(
		          'name' => esc_html__( 'Project URL', 'bdevs-toolkit'),
		          'id'   => 'project_link',
		          'type' => 'text',
		        ),		        
				array(
			        'name' => esc_html__('Gallery Image','bdevs-toolkit'),
			        'type' => 'file',
			        'id' => 'portfolio_thumb'
		      	)
			)
		);
		
		return $bdevs;
	}

}

new BdevsCaseStudies();