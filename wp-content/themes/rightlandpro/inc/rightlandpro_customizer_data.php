<?php
/** 
 * rightlandpro Customizer data
 */
function rightlandpro_customizer( $data ) {
	return array(
		'panel' => array ( 
			'id' => 'rightlandpro',
			'name' => esc_html__('rightlandpro Customizer','rightlandpro'),
			'priority' => 10,
			'section' => array(
				'header_setting' => array(
					'name' => esc_html__( 'Header Topbar Setting', 'rightlandpro' ),
					'priority' => 10,
					'fields' => array(
						array(
							'name'=>esc_html__('Header Topbar BG','rightlandpro'),
							'id'=>'rightlandpro_header_top_bg_color',
							'default'=> esc_html__('#F4F9FD','rightlandpro'),
							'transport'	=> 'refresh'  
						),
						array(
							'name' => esc_html__( 'Topbar Swicher', 'rightlandpro' ),
							'id' => 'rightlandpro_topbar_switch',
							'default' => true,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Top Address Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_header_address_icon',
							'default' => 'far fa-map-marker-alt',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Top Address', 'rightlandpro' ),
							'id' => 'rightlandpro_header_address',
							'default' => '15 Hamston Street, West',
							'type' => 'text',
							'transport'	=> 'refresh'
						),	
						array(
							'name' => esc_html__( 'Header Phone Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_header_phone_icon',
							'default' => 'far fa-phone',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Header Phone Text', 'rightlandpro' ),
							'id' => 'rightlandpro_header_phone_label',
							'default' => 'We are available',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),					
						array(
							'name' => esc_html__( 'Phone Number', 'rightlandpro' ),
							'id' => 'rightlandpro_header_phone_number',
							'default' => '+8 012 3456 7899',
							'type' => 'text',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Top Email Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_header_email_icon',
							'default' => 'far fa-envelope-open',
							'type' => 'text',
							'transport'	=> 'refresh'
						),							
						array(
							'name' => esc_html__( 'Email Address', 'rightlandpro' ),
							'id' => 'rightlandpro_header_email_address',
							'default' => 'support@gmail.com',
							'type' => 'text',
							'transport'	=> 'refresh'
						),		
						/** header button info **/							
						array(
							'name' => esc_html__( 'Show Button', 'rightlandpro' ),
							'id' => 'rightlandpro_show_header_button',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Text', 'rightlandpro' ),
							'id' => 'rightlandpro_header_btn_text',
							'default' => esc_html__('Consultancy','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_header_btn_icon',
							'default' => esc_html__('far fa-long-arrow-right','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Link', 'rightlandpro' ),
							'id' => 'rightlandpro_header_btn_link',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
					) 
				),
				'header_social_setting'=> array(
					'name'=> esc_html__('Header Social Setting','rightlandpro'),
					'priority'=> 11,
					'description' => esc_html__('To hide the field please use # in text field.', 'rightlandpro'),
					'fields'=> array(
						/** social profiles **/
						array(
							'name' => esc_html__( 'Facebook Url', 'rightlandpro' ),
							'id' => 'rightlandpro_topbar_fb_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Twitter Url', 'rightlandpro' ),
							'id' => 'rightlandpro_topbar_twitter_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'rightlandpro' ),
							'id' => 'rightlandpro_topbar_instagram_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Youtube Url', 'rightlandpro' ),
							'id' => 'rightlandpro_topbar_youtube_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
					)
				),
				'header_main_setting' => array(
					'name' => esc_html__( 'Header Setting', 'rightlandpro' ),
					'priority' => 12,
					'fields' => array(
						array(
							'name' => esc_html__( 'Choose Header Style', 'rightlandpro' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'header-style-1' => 'Header Style 1',
								'header-style-2' => 'Header Style 2',
								'header-style-3' => 'Header Style 3',
								'header-style-4' => 'Header Style 4',
							),
							'default' => 'header-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Logo', 'rightlandpro' ),
							'id' => 'logo',
							'default' => get_template_directory_uri() . '/img/logo/logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header White Logo', 'rightlandpro' ),
							'id' => 'seconday_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo-white.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Logo', 'rightlandpro' ),
							'id' => 'retina_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina White Logo', 'rightlandpro' ),
							'id' => 'retina_secondary_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo-white@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Favicon', 'rightlandpro' ),
							'id' => 'favicon_url',
							'default' => get_template_directory_uri() . '/img/logo/favicon.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Show Language', 'rightlandpro' ),
							'id' => 'rightlandpro_header_lang',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),							

						array(
							'name' => esc_html__( 'Show Header Search', 'rightlandpro' ),
							'id' => 'rightlandpro_header_default_search',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
					) 
				),	
				'page_title_setting'=> array(
					'name'=> esc_html__('Breadcrumb Setting','rightlandpro'),
					'priority'=> 13,
					'fields'=> array(
						array(
							'name'=>esc_html__('Breadcrumb BG Color','rightlandpro'),
							'id'=>'rightlandpro_breadcrumb_bg_color',
							'default'=> esc_html__('#f4f9fc','rightlandpro'),
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Breadcrumb Padding Top','rightlandpro'),
							'id'=>'rightlandpro_breadcrumb_spacing',
							'default'=> esc_html__('160px','rightlandpro'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),						
						array(
							'name'=>esc_html__('Breadcrumb Bottom Top','rightlandpro'),
							'id'=>'rightlandpro_breadcrumb_bottom_spacing',
							'default'=> esc_html__('160px','rightlandpro'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),
						array(
							'name' => esc_html__( 'Breadcrumb Background Image', 'rightlandpro' ),
							'id' => 'breadcrumb_bg_img',
							'default' => get_template_directory_uri() . '/img/bg/page-title.jpg',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Product Details Title', 'rightlandpro' ),
							'id' => 'breadcrumb_product_details',
							'default' => esc_html__('Product Details','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Department Details Title', 'rightlandpro' ),
							'id' => 'breadcrumb_department_details',
							'default' => esc_html__('Department Details','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Archive', 'rightlandpro' ),
							'id' => 'breadcrumb_archive',
							'default' => esc_html__('Archive for category','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Search', 'rightlandpro' ),
							'id' => 'breadcrumb_search',
							'default' => esc_html__('Search results for','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb tagged', 'rightlandpro' ),
							'id' => 'breadcrumb_post_tags',
							'default' => esc_html__('Posts tagged','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb posted by', 'rightlandpro' ),
							'id' => 'breadcrumb_artitle_post_by',
							'default' => esc_html__('Articles posted by','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page Not Found', 'rightlandpro' ),
							'id' => 'breadcrumb_404',
							'default' => esc_html__('Page Not Found','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page', 'rightlandpro' ),
							'id' => 'breadcrumb_page',
							'default' => esc_html__('Page','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Shop', 'rightlandpro' ),
							'id' => 'breadcrumb_shop',
							'default' => esc_html__('Shop','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Home', 'rightlandpro' ),
							'id' => 'breadcrumb_home',
							'default' => esc_html__('Home','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),					
					)
				),
				'blog_setting'=> array(
					'name'=> esc_html__('Blog Setting','rightlandpro'),
					'priority'=> 14,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Show Blog BTN', 'rightlandpro' ),
							'id' => 'rightlandpro_blog_btn_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Show Blog Btn Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_blog_btn_icon_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Blog Button text', 'rightlandpro' ),
							'id' => 'rightlandpro_blog_btn',
							'default' => esc_html__('Read More','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),							
						array(
							'name' => esc_html__( 'Blog Button Icon', 'rightlandpro' ),
							'id' => 'rightlandpro_blog_btn_icon',
							'default' => esc_html__('fas fa-angle-double-right','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Title', 'rightlandpro' ),
							'id' => 'breadcrumb_blog_title',
							'default' => esc_html__('Blog','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Details Title', 'rightlandpro' ),
							'id' => 'breadcrumb_blog_title_details',
							'default' => esc_html__('Blog Details','rightlandpro'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),

					)
				),
				'google_map_setting'=> array(
					'name'=> esc_html__('Google Map Setting','rightlandpro'),
					'priority'=> 15,
					'fields'=> array(
						array(
							'name'=>esc_html__('Map Api Key','rightlandpro'),
							'id'=>'rightlandpro_map_api',
							'default'=> esc_html__('AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY','rightlandpro'),
							'transport'	=> 'refresh',  
							'type' => 'text',
						),
						
					)
				),
				'rightlandpro_footer_setting'=> array(
					'name'=> esc_html__('Footer Setting','rightlandpro'),
					'priority'=> 16,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Choose Footer Style', 'rightlandpro' ),
							'id' => 'choose_default_footer',
							'type'     => 'select',
							'choices'  => array(
								'footer-style-1' => 'Footer Style 1',
								'footer-style-2' => 'Footer Style 2',
								'footer-style-3' => 'Footer Style 3',
								'footer-style-4' => 'Footer Style 4',
							),
							'default' => 'footer-style-2',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Footer Background Image', 'rightlandpro' ),
							'id' => 'rightlandpro_footer_bg',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name'=>esc_html__('Footer BG Color','rightlandpro'),
							'id'=>'rightlandpro_footer_bg_color',
							'default'=> esc_html__('#f4f9fc','rightlandpro'),
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Copy Right','rightlandpro'),
							'id'=>'rightlandpro_copyright',
							'default'=> esc_html__('Copyright &copy;2019 BDevs. All Rights Reserved Copyright','rightlandpro'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Company Info','rightlandpro'),
							'id'=>'rightlandpro_company_info',
							'default'=> esc_html__('<p>Design By <a href="#">BDevs</a></p>','rightlandpro'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),	
						array(
							'name'=>esc_html__('Scrollup Hide','rightlandpro'),
							'id'=>'rightlandpro_scrollup_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						)
					)
				),
				'color_setting'=> array(
					'name'=> esc_html__('Color Setting','rightlandpro'),
					'priority'=> 17,
					'fields'=> array(
						array(
							'name'=>esc_html__('Theme Color','rightlandpro'),
							'id'=>'rightlandpro_color_option',
							'default'=> esc_html__('#e12454','rightlandpro'),
							'transport'	=> 'refresh'  
						),							
						array(
							'name'=>esc_html__('Theme Sec Color','rightlandpro'),
							'id'=>'rightlandpro_sec_color_option',
							'default'=> esc_html__('#8fb569','rightlandpro'),
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Theme btn Color','rightlandpro'),
							'id'=>'rightlandpro_theme_btn_color',
							'default'=> esc_html__('#e12454','rightlandpro'),
							'transport'	=> 'refresh'  
						),							
						array(
							'name'=>esc_html__('Theme btn sec Color','rightlandpro'),
							'id'=>'rightlandpro_btn_sec_color',
							'default'=> esc_html__('#8fb569','rightlandpro'),
							'transport'	=> 'refresh'  
						)												
					)
				),
				'error_page_setting'=> array(
					'name'=> esc_html__('404 Setting','rightlandpro'),
					'priority'=> 18,
					'fields'=> array(
						array(
							'name'=>esc_html__('400 Text','rightlandpro'),
							'id'=>'rightlandpro_error_404_text',
							'default'=> esc_html__('404','rightlandpro'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Not Found Title','rightlandpro'),
							'id'=>'rightlandpro_error_title',
							'default'=> esc_html__('Page not found','rightlandpro'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Description Text','rightlandpro'),
							'id'=>'rightlandpro_error_desc',
							'default'=> esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted','rightlandpro'),
							'type'=>'textarea',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Link Text','rightlandpro'),
							'id'=>'rightlandpro_error_link_text',
							'default'=> esc_html__('Back To Home','rightlandpro'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						)
						
					)
				),
				'rtl_setting'=> array(
					'name'=> esc_html__('RTL Setting','rightlandpro'),
					'priority'=> 19,
					'fields'=> array(
						array(
							'name'=>esc_html__('Switch RTL','rightlandpro'),
							'id'=>'rtl_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						)
					)
				),
			),
		)
	);

}

add_filter('rightlandpro_customizer_data', 'rightlandpro_customizer');


