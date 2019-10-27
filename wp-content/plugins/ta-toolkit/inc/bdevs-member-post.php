<?php 
class BdevsMemberPost 
{
	function __construct() {
		add_action( 'init', array( $this, 'register_custom_post_type' ) );
		add_action( 'init', array( $this, 'create_cat' ) );
		add_filter( 'cmb2_meta_boxes', array( $this, 'add_meta' ) );
		add_filter( 'cmb2_meta_boxes', array( $this, 'add_experience' ) );
		add_filter( 'cmb2_admin_init', array( $this, 'add_left_skills_meta' ) );
		add_filter( 'cmb2_admin_init', array( $this, 'add_right_skills_meta' ) );
		add_filter( 'cmb2_admin_init', array( $this, 'add_contact_meta' ) );
		add_filter( 'cmb2_meta_boxes', array( $this, 'add_social_profiles_meta' ) );
		add_filter( 'template_include', array( $this, 'member_template_include' ) );
	}
	
	public function member_template_include( $template ) {
		if ( is_singular( 'bdevs-member' ) ) {
			return $this->get_template( 'single-bdevs-member.php');
		}
		return $template;
	}
	
	public function get_template( $template ) {
		if ( $theme_file = locate_template( array( $template ) ) ) {
			$file = $theme_file;
		} 
		else {
			$file = BDEVS_TOOLKIT_DIR . '/template/'. $template;
		}
		return apply_filters( __FUNCTION__, $file, $template );
	}
	
	
	public function register_custom_post_type() {

		$labels = array(
			'name'               => __( 'Member', 'Post Type General Name', 'bdevs-toolkit'),
			'singular_name'      => __( 'Member', 'Post Type Singular Name', 'bdevs-toolkit'),
			'menu_name'          => __( 'Member', 'bdevs-toolkit'),
			'parent_item_colon'  => __( 'Parent member', 'bdevs-toolkit'),
			'all_items'          => __( 'All  Members', 'bdevs-toolkit'),
			'view_item'          => __( 'View  Member', 'bdevs-toolkit'),
			'add_new_item'       => __( 'Add New  member', 'bdevs-toolkit'),
			'add_new'            => __( 'Add New  member', 'bdevs-toolkit'),
			'edit_item'          => __( 'Edit  Member', 'bdevs-toolkit'),
			'update_item'        => __( 'Update  Member', 'bdevs-toolkit'),
			'search_items'       => __( 'Search  Member', 'bdevs-toolkit'),
			'not_found'          => __( 'Not found', 'bdevs-toolkit'),
			'not_found_in_trash' => __( 'Not found in Trash', 'bdevs-toolkit'),
		);

		$args   = array(
			'label'               => __( 'Member', 'bdevs-toolkit'),
			'description'         => __( 'Create and manage all bdevs member', 'bdevs-toolkit'),
			'labels'              => $labels,
			'supports'            => array( 'title','thumbnail', 'editor'),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 14,
			'rewrite'             =>  array( 'slug' => 'member', 'with_front' => false ),
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'menu_icon'           => 'dashicons-id-alt',
		);

		register_post_type( 'bdevs-member', $args );
	}
	
	public function create_cat() {

		$name = 'Member';

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
			'rewrite'           => array( 'slug' => 'member_cat' ),
		);

		register_taxonomy('member_categories','bdevs-member', $args );
	}

	public function add_meta(array $bdevs) {

		$bdevs[] = array(
			'id'           => 'bdevs-member-section',
			'title'        => esc_html__( 'Member Details Info', 'bdevs-toolkit' ),
			'object_types' => array( 'bdevs-member'),
			'fields'       => array(	      	
		      	array(
			        'name' => esc_html__('Member Image ','bdevs-toolkit'),
			        'type' => 'file',
			        'id' => 'member_single_img'
		      	),		      	
		      	array(
			        'name' => esc_html__('Title ','bdevs-toolkit'),
			        'type' => 'text',
			        'id' => 'member_title'
		      	),
				array(
			        'name' => esc_html__('Designation','bdevs-toolkit'),
			        'type' => 'text',
			        'id' => 'member_designation'
		      	),
		      	array(
			        'name' => esc_html__('Short Description ','bdevs-toolkit'),
			        'type' => 'textarea',
			        'id' => 'member_short_desc'
		      	),					
			)
		);
		
		return $bdevs;
	}

	public function add_experience(array $bdevs) {

		$bdevs[] = array(
			'id'           => 'bdevs-experience-section',
			'title'        => esc_html__( 'Experience Info', 'bdevs-toolkit' ),
			'object_types' => array( 'bdevs-member'),
			'fields'       => array(	 
				array(
			        'name' => esc_html__('Title ','bdevs-toolkit'),
			        'type' => 'text',
			        'id' => 'video_title'
		      	),     	
		      	array(
			        'name' => esc_html__('Short Description ','bdevs-toolkit'),
			        'type' => 'textarea',
			        'id' => 'video_short_desc'
		      	),     	
		      	array(
			        'name' => esc_html__('Video Link','bdevs-toolkit'),
			        'type' => 'text',
			        'id' => 'video_link'
		      	),		
		      	array(
			        'name' => esc_html__('Video Proview Image','bdevs-toolkit'),
			        'type' => 'file',
			        'id' => 'video_preview_image'
		      	),		      	
			
			)
		);
		
		return $bdevs;
	}


	public function add_contact_meta() {

		$education = new_cmb2_box( array(
			'title'   => 'Contact Info Section',
			'id'    => 'contact-info-section',
			'object_types'  => array('bdevs-member')
		));
		

		$group_field_id = $education->add_field( array(
			'id'          => 'contact_info_repeat_group',
			'type'        => 'group',
			'description' => __( 'Contact Info Details', 'bdevs-toolkit' ),
			'repeatable'  => true, // use false if you want non-repeatable group
			'options'     => array(
			'group_title'   => __( 'Contact Info', 'bdevs-toolkit' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'bdevs-toolkit' ),
			'remove_button' => __( 'Remove Entry', 'bdevs-toolkit' ),
			'sortable'      => true, // beta
			'closed'     => false, // true to have the groups closed by default
		),
		) );

		// name
		$education->add_group_field( $group_field_id, array(
			'name' => esc_html__('Icon','bdevs-toolkit'),
			'type' => 'file',
			'id' => 'contact_icon'
		) );

		// your status
		$education->add_group_field( $group_field_id, array(
			'name' => esc_html__('Label','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'contact_label'
		) );

		// your picture
		$education->add_group_field( $group_field_id, array(
			'name' => esc_html__('Contact Info','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'contact_info'
		) );

	}



	public function add_left_skills_meta() {

		$left_skills = new_cmb2_box( array(
			'title'   => 'Left Skill Section',
			'id'    => 'left-skill-section',
			'object_types'  => array('bdevs-member')
		));
		

		$group_field_id = $left_skills->add_field( array(
			'id'          => 'left_skills_repeat_group',
			'type'        => 'group',
			'description' => __( 'Left Skill Details', 'bdevs-toolkit' ),
			'repeatable'  => true, // use false if you want non-repeatable group
			'options'     => array(
			'group_title'   => __( 'Left Skill Info', 'bdevs-toolkit' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'bdevs-toolkit' ),
			'remove_button' => __( 'Remove Entry', 'bdevs-toolkit' ),
			'sortable'      => true, // beta
			'closed'     => false, // true to have the groups closed by default
		),
		) );

		// your status
		$left_skills->add_group_field( $group_field_id, array(
			'name' => esc_html__('Label','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'left_skill_label'
		) );

		// your picture
		$left_skills->add_group_field( $group_field_id, array(
			'name' => esc_html__('Skill Info','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'left_skill_info'
		) );

	}


	public function add_right_skills_meta() {

		$right_skills = new_cmb2_box( array(
			'title'   => 'Right Skill Section',
			'id'    => 'right-skill-section',
			'object_types'  => array('bdevs-member')
		));
		

		$group_field_id = $right_skills->add_field( array(
			'id'          => 'right_skills_repeat_group',
			'type'        => 'group',
			'description' => __( 'Right Skill Details', 'bdevs-toolkit' ),
			'repeatable'  => true, // use false if you want non-repeatable group
			'options'     => array(
			'group_title'   => __( 'Right Skill Info', 'bdevs-toolkit' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'bdevs-toolkit' ),
			'remove_button' => __( 'Remove Entry', 'bdevs-toolkit' ),
			'sortable'      => true, // beta
			'closed'     => false, // true to have the groups closed by default
		),
		) );

		// your status
		$right_skills->add_group_field( $group_field_id, array(
			'name' => esc_html__('Label','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'right_skill_label'
		) );

		// your picture
		$right_skills->add_group_field( $group_field_id, array(
			'name' => esc_html__('Skill Info','bdevs-toolkit'),
			'type' => 'text',
			'id' => 'right_skill_info'
		) );

	}


	public function add_social_profiles_meta(array $bdevs) {

		$bdevs[] = array(
			'id'           => 'bdevs-social-profile-section',
			'title'        => esc_html__( 'Social Profiles', 'bdevs-toolkit' ),
			'object_types' => array( 'bdevs-member'),
			'fields'       => array(
		      	array(
			        'name' => esc_html__( 'Facebook Url', 'bdevs-toolkit'),
			        'id'   => 'profile_fb_url',
			        'type' => 'text_url',
			    ),
			    array(
			        'name' => esc_html__( 'Twitter Url', 'bdevs-toolkit'),
			        'id'   => 'profile_twitter_url',
			        'type' => 'text_url',
			    ),
			    array(
			        'name' => esc_html__( 'Instagram Url', 'bdevs-toolkit'),
			        'id'   => 'profile_instagram_url',
			        'type' => 'text_url',
			    ),
			    array(
			        'name' => esc_html__( 'Google Url', 'bdevs-toolkit'),
			        'id'   => 'profile_google_url',
			        'type' => 'text_url',
			    ),
			)
		);
		
		return $bdevs;
	}

}

new BdevsMemberPost();
