<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package rightlandpro
 */

/**
*
* rightlandpro header
*/
add_action('rightlandpro_header_style', 'rightlandpro_check_header', 10);

function rightlandpro_check_header() {
    $rightlandpro_header_style = get_post_meta( get_the_ID(), 'rightlandpro_choice_header_style', true );
    $rightlandpro_default_header_style = get_theme_mod('choose_default_header', 'header-style-1' );

    if( $rightlandpro_header_style == 'header-style-1' ) {
        rightlandpro_header_style_1();
    }
    elseif( $rightlandpro_header_style == 'header-style-2' ) {
        rightlandpro_header_style_2();
    }  
    elseif( $rightlandpro_header_style == 'header-style-3' ) {
        rightlandpro_header_style_3();
    }  
    elseif( $rightlandpro_header_style == 'header-style-4' ) {
        rightlandpro_header_style_4();
    }
    else {
        
        /** default header style **/
        if($rightlandpro_default_header_style == 'header-style-1'){
            rightlandpro_header_style_1();
        }elseif($rightlandpro_default_header_style == 'header-style-2'){
            rightlandpro_header_style_2();
        }elseif($rightlandpro_default_header_style == 'header-style-3'){
            rightlandpro_header_style_3();
        }elseif($rightlandpro_default_header_style == 'header-style-4'){
            rightlandpro_header_style_4();
        }

    }

}


/**
* header style 1 + default
*/
function rightlandpro_header_style_1() {
    $rightlandpro_topbar_switch = get_theme_mod('rightlandpro_topbar_switch');
    $rightlandpro_header_lang            = get_theme_mod('rightlandpro_header_lang');
    ?>
    <!--begin header -->
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
            
            <!--begin container -->
            <div class="container">
        
                <!--begin navbar -->
                <div class="navbar-header">

                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <!--logo -->
                    <a href="<?php echo home_url(); ?>" class="navbar-brand" id="logo">Howdy</a>

                </div>
                        
                <div id="navbar-collapse-02" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#home_wrapper">Home</a></li>

                        <li><a href="#about">About</a></li>

                        <li><a href="#gallery">Gallery</a></li>

                        <li><a href="#team">Team</a></li>

                        <li><a href="#pricing">Pricing</a></li>

                        <li><a href="#features">Features</a></li>

                        <li><a href="#blog">Blog</a></li>

                        <li><a href="#contact" class="discover-btn">Get Started</a></li>
                       
                    </ul>
                </div>
                <!--end navbar -->
                                    
            </div>
            <!--end container -->
            
        </nav>
        <!--end nav -->
        
    </header>
    <!--end header -->

<?php 
}


/**
* header style 2
*/
function rightlandpro_header_style_2() {
    ?>
        <!-- header-start -->
        <header>
            <div id="sticky-header" class="main-menu-area menu-2 pl-45 pr-45">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 d-flex align-items-center">
                            <div class="logo">
                                <?php rightlandpro_header_logo(); ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu text-center">
                                <?php rightlandpro_header_menu(); ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="header-right f-right "> 
                                <div class="header-icon header-2-icon f-right">
                                    <?php rightlandpro_header_social_profiles(); ?>
                                </div>
                                <?php rightlandpro_header_lang_defualt(); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-start -->
        <main>
<?php 
}

/**
* header style 3
*/
function rightlandpro_header_style_3() {
    $rightlandpro_topbar_switch = get_theme_mod('rightlandpro_topbar_switch');
    $rightlandpro_phone_icon = get_theme_mod('rightlandpro_header_phone_icon', 'far fa-phone');
    $header_phone_label = get_theme_mod('rightlandpro_header_phone_label', 'We are available');
    $rightlandpro_phone_number = get_theme_mod('icon_phone', '812 (345) 6789');
    ?>
        <!-- header-start -->
        <header class="header-transparent">
            <div class="main-menu-area menu-3 pl-125 pr-45">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-1 col-lg-2 d-flex align-items-center">
                            <div class="logo">
                               <?php rightlandpro_header_logo(); ?>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8">
                            <div class="main-menu text-center">
                                <?php rightlandpro_header_menu(); ?>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-2 d-none d-lg-block">
                            <div class="header-2-right f-right"> 
                                <div class="header-cta-text f-right d-none d-xl-block">
                                    <span><i class="<?php print esc_attr( $rightlandpro_phone_icon ); ?>"></i> <?php print wp_kses_post( $header_phone_label ); ?> </span>
                                    <p><?php print wp_kses_post( $rightlandpro_phone_number ); ?></p>
                                </div>
                                <div class="header-2-button f-right">
                                    <?php rightlandpro_header_button(); ?> 
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-start -->
    
        <main>

<?php 
}

/**
* rightlandpro header style 4
*/
function rightlandpro_header_style_4() {
    $rightlandpro_topbar_switch = get_theme_mod('rightlandpro_topbar_switch');
    $rightlandpro_header_default_search            = get_theme_mod('rightlandpro_header_default_search');
    ?>
        <!-- header-start -->
        <header class="header-transparent">
            <div class="main-menu-area menu-2  menu-4 pl-45 pr-45">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-2 d-flex align-items-center">
                            <div class="logo">
                                <?php rightlandpro_header_logo(); ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu text-center">
                                <?php rightlandpro_header_menu(); ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="header-right f-right "> 
                                <div class="header-icon header-2-icon f-right">
                                    <?php rightlandpro_header_social_profiles(); ?>
                                </div>
                                <?php rightlandpro_header_lang_defualt(); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-start -->
    
        <main>
<?php 
}



/** 
 * [rightlandpro_header_lang description]
 * @return [type] [description]
 */
function rightlandpro_header_lang_defualt() {
    $rightlandpro_header_lang            = get_theme_mod('rightlandpro_header_lang');
    if( $rightlandpro_header_lang ): ?>
    <div class="header-lang pos-rel f-right d-none d-xl-block">
        <div class="lang-icon">
            <img src="<?php print get_template_directory_uri(); ?>/img/icon/flag.png" alt="">
            <a href="#"><?php print esc_html__('English', 'rightlandpro'); ?> <i class="far fa-angle-down"></i></a>
        </div>
        <?php do_action('rightlandpro_language'); ?>
    </div>
    <?php endif; ?>
<?php 
}


/** 
 * [rightlandpro_language_list description]
 * @return [type] [description]
 */
function _rightlandpro_language($mar) {
        return $mar;
}
function rightlandpro_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul class="header-lang-list">';
            foreach($languages as $lan){
                $active = $lan['active']==1?'active':'';
                $mar .= '<li class="'.$active.'"><a href="'.$lan['url'].'">'.$lan['translated_name'].'</a></li>';
            }
        $mar .= '</ul>';
    }else{
        //remove this code when send themeforest reviewer team
        $mar .= '<ul class="header-lang-list">';
            $mar .= '<li><a href="#">'.esc_html__('USA','rightlandpro').'</a></li>';
            $mar .= '<li><a href="#">'.esc_html__('UK','rightlandpro').'</a></li>';
            $mar .= '<li><a href="#">'.esc_html__('CA','rightlandpro').'</a></li>';
            $mar .= '<li><a href="#">'.esc_html__('AU','rightlandpro').'</a></li>';
        $mar .= ' </ul>';
    }
    print _rightlandpro_language($mar);
}
add_action('rightlandpro_language','rightlandpro_language_list');

// favicon logo
function rightlandpro_favicon_logo_func() {
    $rightlandpro_favicon = get_template_directory_uri() . '/img/logo/favicon.png';
    $rightlandpro_favicon_url = get_theme_mod('favicon_url', $rightlandpro_favicon);
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $rightlandpro_favicon_url ); ?>">

    <?php   
} 
add_action('wp_head', 'rightlandpro_favicon_logo_func');

// header logo
function rightlandpro_header_logo() {
    ?>
            <?php 
            $rightlandpro_logo_on = get_post_meta(get_the_ID(), 'rightlandpro_enable_sec_logo', true);
            $rightlandpro_logo = get_template_directory_uri() . '/img/logo/logo.png';
            $rightlandpro_logo_white = get_template_directory_uri() . '/img/logo/logo-white.png';

            $rightlandpro_retina_logo = get_template_directory_uri().'/img/logo/logo@2x.png';
            $rightlandpro_retina_logo_white = get_template_directory_uri().'/img/logo/logo-white@2x.png';

            $rightlandpro_retina_logo  = get_theme_mod('retina_logo',$rightlandpro_retina_logo);
            $rightlandpro_retina_logo_white  = get_theme_mod('retina_secondary_logo',$rightlandpro_retina_logo_white);

            $rightlandpro_site_logo = get_theme_mod('logo', $rightlandpro_logo);
            $rightlandpro_secondary_logo = get_theme_mod('seconday_logo', $rightlandpro_logo_white);
            ?>
             
             <?php
            if( has_custom_logo()){
                the_custom_logo();
            }else{
                
                if($rightlandpro_logo_on === 'on') { ?>
                    <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($rightlandpro_secondary_logo); ?>" alt="<?php print esc_attr('logo','rightlandpro'); ?>" />
                    </a>
                    <a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($rightlandpro_retina_logo_white); ?>" alt="<?php print esc_attr('logo','rightlandpro'); ?>" />
                    </a>
                <?php 
                }
                else{ ?>
                    <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($rightlandpro_site_logo); ?>" alt="<?php print esc_attr('logo','rightlandpro'); ?>" />
                    </a>
                    <a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($rightlandpro_retina_logo); ?>" alt="<?php print esc_attr('logo','rightlandpro'); ?>" />
                    </a>
                <?php 
                }
            }   
            ?>
    <?php 
} 


/** 
 * [rightlandpro_header_social_profiles description]
 * @return [type] [description]
 */
function rightlandpro_header_social_profiles() {
    $rightlandpro_topbar_fb_url             = get_theme_mod('rightlandpro_topbar_fb_url', '#');
    $rightlandpro_topbar_twitter_url       = get_theme_mod('rightlandpro_topbar_twitter_url', '#');
    $rightlandpro_topbar_instagram_url      = get_theme_mod('rightlandpro_topbar_instagram_url', '#');
    $rightlandpro_topbar_youtube_url        = get_theme_mod('rightlandpro_topbar_youtube_url', '#');
    ?>

        <?php if ($rightlandpro_topbar_fb_url != '#'): ?>
          <a href="<?php print esc_url($rightlandpro_topbar_fb_url); ?>"><i class="fab fa-facebook-f"></i></a>
        <?php endif; ?>

        <?php if ($rightlandpro_topbar_twitter_url != '#'): ?>
            <a href="<?php print esc_url($rightlandpro_topbar_twitter_url); ?>"><i class="fab fa-twitter"></i></a>
        <?php endif; ?>

        <?php if ($rightlandpro_topbar_instagram_url != '#'): ?>
            <a href="<?php print esc_url($rightlandpro_topbar_instagram_url); ?>"><i class="fab fa-instagram"></i></a>
        <?php endif; ?>

        <?php if ($rightlandpro_topbar_youtube_url != '#'): ?>
            <a href="<?php print esc_url($rightlandpro_topbar_youtube_url); ?>"><i class="fab fa-youtube"></i></a>
        <?php endif; ?>
<?php 
}


/** 
 * [rightlandpro_header_address description]
 * @return [type] [description]
 */
function rightlandpro_header_address() {
    $rightlandpro_header_address = get_theme_mod('rightlandpro_header_address', '15 Hamston Street, West');
    $rightlandpro_address_icon = get_theme_mod('rightlandpro_header_address_icon', 'far fa-map-marker-alt');
    ?>
        <span><i class="<?php print esc_attr( $rightlandpro_address_icon ); ?>"> </i> <?php print wp_kses_post( $rightlandpro_header_address ); ?></span>
<?php 
}

/** 
 * [rightlandpro_header_phone description]
 * @return [type] [description]
 */
function rightlandpro_header_phone() {
    $rightlandpro_phone_icon = get_theme_mod('rightlandpro_header_phone_icon', 'far fa-phone');
    $header_phone_label = get_theme_mod('rightlandpro_header_phone_label', 'We are available');
    $rightlandpro_phone_number = get_theme_mod('icon_phone', '812 (345) 6789');
    ?>
        <span class="header-ph"><i class="<?php print esc_attr( $rightlandpro_phone_icon ); ?>"> </i> <?php print wp_kses_post( $rightlandpro_phone_number ); ?></span>
<?php 
}


/** 
 * [rightlandpro_header_email_address description]
 * @return [type] [description]
 */
function rightlandpro_header_email_address() {
    $header_email_icon = get_theme_mod('rightlandpro_header_email_icon', 'far fa-envelope-open');
    $header_email_address = get_theme_mod('rightlandpro_header_email_address', 'support@gmail.com');
    ?>
        <span class="header-en"><i class="<?php print esc_attr( $header_email_icon ); ?>"></i> <?php print wp_kses_post( $header_email_address ); ?></span>
<?php 
}


/** 
 * [rightlandpro_header_button description]
 * @return [type] [description]
 */
function rightlandpro_header_button() {
    $header_show_button      = get_theme_mod('rightlandpro_show_header_button');
    $header_btn_text     = get_theme_mod('rightlandpro_header_btn_text', 'Consultancy');
    $header_btn_icon     = get_theme_mod('rightlandpro_header_btn_icon', 'far fa-long-arrow-right');
    $header_btn_link     = get_theme_mod('rightlandpro_header_btn_link', '#');

    if($header_show_button && !empty( $header_btn_text )): ?>
        <a class="btn" href="<?php print esc_url($header_btn_link); ?>"><span class="btn-text"><?php print esc_html($header_btn_text); ?> <i class="<?php print esc_attr( $header_btn_icon ); ?>"></i></span> </a>
    <?php endif; ?>

<?php 
} 


/** 
 * [rightlandpro_header_menu description]
 * @return [type] [description]
 */
function rightlandpro_header_menu() { ?>
    <nav id="mobile-menu">
            <?php 
            wp_nav_menu(array(
                'theme_location'    => 'main-menu',
                'menu_class'        => 'basic-menu',
                'container'         => '',
                'fallback_cb'       => 'rightlandpro_Navwalker::fallback',
                'walker'            => new rightlandpro_Navwalker
            ));
           ?>
    </nav>
    <?php 
}


/**
*
* rightlandpro footer
*/
add_action('rightlandpro_footer_style', 'rightlandpro_check_footer', 10);

function rightlandpro_check_footer() {
    $rightlandpro_footer_style = get_post_meta( get_the_ID(), 'rightlandpro_choice_footer_style', true );
    $rightlandpro_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-2' );
   

    if( $rightlandpro_footer_style == 'footer-style-1' ) {
        rightlandpro_footer_style_1();
    }
    elseif( $rightlandpro_footer_style == 'footer-style-2' ) {
        rightlandpro_footer_style_2();
    }
    elseif( $rightlandpro_footer_style == 'footer-style-3' ) {
        rightlandpro_footer_style_3();
    }
    elseif( $rightlandpro_footer_style == 'footer-style-4' ) {
        rightlandpro_footer_style_4();
    }
    else{

        /** default footer style **/
        if($rightlandpro_default_footer_style == 'footer-style-1'){
            rightlandpro_footer_style_1();
        }elseif($rightlandpro_default_footer_style == 'footer-style-2'){
           rightlandpro_footer_style_2();
        }elseif($rightlandpro_default_footer_style == 'footer-style-3'){
           rightlandpro_footer_style_3();
        }elseif($rightlandpro_default_footer_style == 'footer-style-4'){
           rightlandpro_footer_style_4();
        }

    }
}

/**
* footer  style 1
*/
function rightlandpro_footer_style_1() {
$rightlandpro_footer_bg_url = get_post_meta( get_the_ID(), 'rightlandpro_footer_bg', true );
?>
    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="footer-style-1 footer-area grey-bg pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <?php dynamic_sidebar('footer-widget-style-1-er-first-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <?php dynamic_sidebar('footer-widget-style-1-er-second-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <?php dynamic_sidebar('footer-widget-style-1-er-third-widget'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-1-er-fourth-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-1-er-fifth-widget'); ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area pt-50">
                <div class="container">
                    <div class="footer-bg-bottom">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="copyright">
                                    <p><i class="far fa-copyright"></i> <?php print rightlandpro_copyright_text(); ?></p>

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="footer-bottem-text text-md-right">
                                    <?php print rightlandpro_design_info(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
<?php 
}

/**
* footer  style 2 + default
*/
function rightlandpro_footer_style_2() {

    $rightlandpro_footer_bg_url_from_page = get_post_meta( get_the_ID(), 'rightlandpro_footer_bg', true );

    if( $rightlandpro_footer_bg_url_from_page ){
            $bg_img = get_post_meta( get_the_ID(), 'rightlandpro_footer_bg', true );
    }else{
            $bg_img = get_theme_mod('rightlandpro_footer_bg');
    }    

    $bg_color = get_theme_mod('rightlandpro_footer_bg_color', '#f4f9fc');
?>

    </main>
    <!-- footer-area-start -->
    <footer>
        <div class="footer-area footer-style-2 pt-80" style="background-image :url(<?php print esc_url($bg_img); ?> );  background-color: <?php print esc_attr( $bg_color ); ?>">
            <div class="container">

                <div class="newsletter-bg pb-50 mb-80">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 mb-30">
                            <div class="single-newsletter ">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input placeholder="Enter Your Email :" type="email">
                                        <button class="btn" type="submit"><span class="btn-text">subscribe <i class="far fa-long-arrow-right"></i></span> <span class="btn-border"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-5 mb-30">
                            <?php dynamic_sidebar('footer-top-widget-style-2'); ?>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-2-er-first-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-2-er-second-widget'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-2-er-third-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-2-er-fourth-widget'); ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area footer-2-bottom mt-50 pb-25 pt-25">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="copyright">
                                <p><i class="far fa-copyright"></i> <?php print rightlandpro_copyright_text(); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="footer-bottem-text text-md-right">
                                <?php print rightlandpro_design_info(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

<?php 
}

/**
* footer style 3
*/
function rightlandpro_footer_style_3() {
$rightlandpro_footer_bg_url = get_theme_mod('rightlandpro_footer_bg_url');
?>

    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="footer-area footer-style-3 grey-bg-2 pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-3-er-first-widget'); ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-3-er-second-widget'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-3-er-third-widget'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-3-er-fourth-widget'); ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area footer-3-bottom mt-50 pb-25 pt-25">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="copyright">
                                <p><i class="far fa-copyright"></i> <?php print rightlandpro_copyright_text(); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="footer-bottem-text text-md-right">
                                <?php print rightlandpro_design_info(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

<?php 
}

/**
* footer style 4 
*/
function rightlandpro_footer_style_4() {
$rightlandpro_footer_bg_url = get_theme_mod('rightlandpro_footer_bg_url');
?>

    </main>

    <!-- footer-area-start -->
    <footer>
        <div class="footer-area grey-bg pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-4-er-first-widget'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-4-er-second-widget'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-4-er-third-widget'); ?>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <?php dynamic_sidebar('footer-widget-style-4-er-fourth-widget'); ?>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area footer-3-bottom mt-50 pb-25 pt-25">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <div class="copyright">
                                <p><i class="far fa-copyright"></i> <?php print rightlandpro_copyright_text(); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="footer-bottem-text text-md-right">
                                <?php print rightlandpro_design_info(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
<?php 
}


function rightlandpro_copyright_text(){
    print get_theme_mod('rightlandpro_copyright', esc_html__('Copyright ©2019 BDevs. All Rights Reserved','rightlandpro'));
}


function rightlandpro_design_info(){
    print get_theme_mod('rightlandpro_company_info', esc_html__('<p>Design By <a href="#">BDevs</a></p>','rightlandpro'));
}

/** 
 * [rightlandpro_breadcrumb_func description]
 * @return [type] [description]
 */
function rightlandpro_breadcrumb_func() { 
    $rightlandpro_invisible_breadcrumb = get_post_meta( get_the_ID(), 'rightlandpro_invisible_breadcrumb', true );
    if( !$rightlandpro_invisible_breadcrumb ) {

        $breadcrumb_img_from_page = get_post_meta(get_the_ID(), 'breadcrumb_bg_img_from_page', true);
        $hide_breadcrumb_bg_img = get_post_meta(get_the_ID(), 'hide_breadcrumb_bg_img', true); 



        if( empty($hide_breadcrumb_bg_img ) ){

            if( $breadcrumb_img_from_page ){
                    $bg_img = get_post_meta(get_the_ID(), 'breadcrumb_bg_img_from_page', true);
                    $bg_img = 'background-image :url('.$bg_img.')';
            }else{
                    $bg_img = get_theme_mod('breadcrumb_bg_img');
                    $bg_img = 'background-image :url('.$bg_img.')';
            }    
        }else{
            $bg_img = "";
        }
        

        $breadcrumb_blog_title = get_theme_mod('breadcrumb_blog_title','Blog ');
        $breadcrumb_blog_title_details = get_theme_mod('breadcrumb_blog_title_details','Blog Details');
        $breadcrumb_doctor_details = get_theme_mod('breadcrumb_doctor_details','Doctor Details');
        $breadcrumb_product_details = get_theme_mod('breadcrumb_product_details','Product Details');
        $breadcrumb_department_details = get_theme_mod('breadcrumb_department_details','Department Details');

        $rightlandpro_blog_breadcrumb = get_theme_mod('rightlandpro_blog_breadcrumb', '');
        if ( is_front_page() && is_home() ) { ?>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1><?php print esc_html($breadcrumb_blog_title); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
        <?php   
        } elseif ( is_front_page()){?>
        <div class="breadcrumb-area breadcrumb-bg only-front-page breadcrumb-spacing">
        </div>
        <?php
        } elseif ( is_home()){ ?>
            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <?php 
                                if ( is_single() && 'post' == get_post_type() ) { 
                                    if ( $rightlandpro_blog_breadcrumb == '' ) { ?>
                                        <h1><?php print esc_html($breadcrumb_blog_title_details); ?></h1>
                                    <?php 
                                    }
                                    else { ?>
                                        <h1> <?php print esc_html($rightlandpro_blog_breadcrumb);?></h1>
                                    <?php 
                                    } ?>
                                    
                                    <?php 
                                }
                                else { ?>
                                    <h1><?php wp_title(''); ?></h1>
                                <?php 
                                } ?>
                                <ul class="breadcrumb-menu">
                                    <?php rightlandpro_breadcrumbs(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
        <?php
        }
        elseif ( is_single() && 'product' == get_post_type() ) { ?>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <?php 
                                if ( is_single() && 'product' == get_post_type() ) { 
                                    if ( $rightlandpro_blog_breadcrumb == '' ) { ?>
                                        <h1><?php print esc_html($breadcrumb_product_details); ?></h1>
                                    <?php 
                                    }
                                    else { ?>
                                        <h1> <?php print esc_html($rightlandpro_blog_breadcrumb);?></h1>
                                    <?php 
                                    } ?>
                                    
                                    <?php 
                                }
                                else { ?>
                                    <h1><?php wp_title(''); ?></h1>
                                <?php 
                                } 
                                ?>
                                <ul class="breadcrumb-menu">
                                    <?php rightlandpro_breadcrumbs(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
        <?php
        }
        elseif ( is_single() && 'bdevs-service' == get_post_type() ) { ?>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <?php 
                                    if ( is_single() && 'bdevs-service' == get_post_type() ) { 
                                        if ( $rightlandpro_blog_breadcrumb == '' ) { ?>
                                            <h2><?php print esc_html($breadcrumb_department_details); ?></h2>
                                        <?php 
                                        }
                                        else { ?>
                                            <h1> <?php print esc_html($rightlandpro_blog_breadcrumb);?></h1>
                                        <?php 
                                        } ?>
                                        
                                        <?php 
                                    }
                                    else { ?>
                                        <h1><?php wp_title(''); ?></h1>
                                    <?php 
                                } 
                                ?>
                                <ul class="breadcrumb-menu">
                                    <?php rightlandpro_breadcrumbs(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
        <?php
        }
        else { ?>
            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="<?php print esc_attr($bg_img);?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <?php 
                                if ( is_single() && 'post' == get_post_type() ) { 
                                    if ( $rightlandpro_blog_breadcrumb == '' ) { ?>
                                        <h2><?php print esc_html($breadcrumb_blog_title_details); ?></h2>
                                    <?php 
                                    }
                                    else { ?>
                                        <h2> <?php print esc_html($rightlandpro_blog_breadcrumb);?></h2>
                                    <?php 
                                    } ?>
                                    
                                    <?php 
                                }
                                else { ?>
                                    <h2><?php wp_title(''); ?></h2>
                                <?php 
                                } ?>
                                <ul class="breadcrumb-menu">
                                    <?php rightlandpro_breadcrumbs(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
        <?php
        }       
    }
}
add_action('rightlandpro_before_main_content', 'rightlandpro_breadcrumb_func');

if(!function_exists('rightlandpro_breadcrumbs')) {

    function _rightlandpro_home_callback($home) {
        return $home;
    }

    function _rightlandpro_breadcrumbs_callback($breadcrumbs) {
        return $breadcrumbs;
    }

    function rightlandpro_breadcrumbs() {
        global $post;

        $breadcrumb_archive = get_theme_mod('breadcrumb_archive','Archive for category ');
        $breadcrumb_search = get_theme_mod('breadcrumb_search','Search results for ');
        $breadcrumb_post_tags = get_theme_mod('breadcrumb_post_tags','Posts tagged ');
        $breadcrumb_artitle_post_by = get_theme_mod('breadcrumb_artitle_post_by','Articles posted by ');
        $breadcrumb_404 = get_theme_mod('breadcrumb_404','Page Not Found ');
        $breadcrumb_page = get_theme_mod('breadcrumb_page','Page ');
        $breadcrumb_shop = get_theme_mod('breadcrumb_shop','Shop ');
        $breadcrumb_home = get_theme_mod('breadcrumb_home','Home ');

        $home = '<li class="breadcrumb-list"><a href="'.esc_url(home_url('/')).'" title="'.esc_attr($breadcrumb_home).'">'.esc_html($breadcrumb_home).'</a></li>';
        $showCurrent = 1;               
        $homeLink = esc_url(home_url('/'));
        if ( is_front_page() ) { return; }  // don't display breadcrumbs on the homepage (yet)

        print _rightlandpro_home_callback($home);

        if ( is_category() ) {
            // category section
            $thisCat = get_category(get_query_var('cat'), false);
            if (!empty($thisCat->parent)) print get_category_parents($thisCat->parent, TRUE, ' ' . '/' . ' ');
            print '<li class="active">'.  esc_html($breadcrumb_archive).' "' . single_cat_title('', false) . '"' . '</li>';
        } 
        elseif ( is_search() ) {
            // search section
            print '<li class="active">' .  esc_html($breadcrumb_search).' "' . get_search_query() . '"' .'</li>';
        } 
        elseif ( is_day() ) {
            print '<li class="breadcrumb-list"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
            print '<li class="breadcrumb-list"><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> </li>';
            print '<li class="active">' . get_the_time('d') .'</li>';
        } 
        elseif ( is_month() ) {
            // monthly archive
            print '<li class="breadcrumb-list"><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> </li>';
            print '<li class=" active">' . get_the_time('F') .'</li>';
        } 
        elseif ( is_year() ) {
            // yearly archive
            print '<li class="active">'. get_the_time('Y') .'</li>';
        } 
        elseif ( is_single() && !is_attachment() ) {
            // single post or page
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                print '<li class="breadcrumb-list"><a href="' . $homeLink . '/?post_type=' . $slug['slug'] . '">' . $post_type->labels->singular_name . '</a></li>';
                if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
            } 
            else {
                $cat = get_the_category(); if (isset($cat[0])) {$cat = $cat[0];} else {$cat = false;}
                if ($cat) {$cats = get_category_parents($cat, TRUE, ' ' .' ' . ' ');} else {$cats=false;}
                if (!$showCurrent && $cats) $cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
                print '<li class="breadcrumb-list">'.$cats.'</li>';
                if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
            }
        } 
        elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            // some other single item
            $post_type = get_post_type_object(get_post_type());
            print '<li class="breadcrumb-list">' . $post_type->labels->singular_name .'<li>';
            if ( is_shop() && !get_query_var('paged') ) {
                print '<span class="active">'. esc_html($breadcrumb_shop) .'</span>';
            }
        } 
        elseif ( is_attachment() ) {
            // attachment section
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); if (isset($cat[0])) {$cat = $cat[0];} else {$cat=false;}
            if ($cat) print get_category_parents($cat, TRUE, ' ' . ' ' . ' ');
            print '<li class="breadcrumb-list"><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
            if ($showCurrent) print  '<li class="active">'. get_the_title() .'</li>';
        } 
        elseif ( is_page() && !$post->post_parent ) {

            // parent page
            if ($showCurrent) 
                print '<li class="breadcrumb-list"><a href="' . get_permalink() . '">'. get_the_title() .'</a></li>';
        } 
        elseif ( is_page() && $post->post_parent ) {
            // child page
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();

            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li class="breadcrumb-list"><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                print _rightlandpro_breadcrumbs_callback($breadcrumbs[$i]);
                if ($i != count($breadcrumbs)-1);
            }
            if ($showCurrent) print '<li class="active">'. get_the_title() .'</li>';
        } 
        elseif ( is_tag() ) {
            // tags archive
            print '<li class="breadcrumb-list">' .  esc_html($breadcrumb_post_tags).' "' . single_tag_title('', false) . '"' . '</li>';
        } 
        elseif ( is_author() ) {
            // author archive 
            global $author;
            $userdata = get_userdata($author);
            print '<li class="breadcrumb-list">' .  esc_html($breadcrumb_artitle_post_by). ' ' . $userdata->display_name . '</li>';
        } 
        elseif ( is_404() ) {
            // 404
            print '<li class="active salim">'. esc_html($breadcrumb_404) .'</li>';
        }
      
        if ( get_query_var('paged') ) {
            /**
            if ( is_shop() ) {
                print '<span class="active">'. esc_html($breadcrumb_page) . ' ' . get_query_var('paged') .'</span>';
            }
            else {
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print '<li class="breadcrumb-list"> (';
                print  '<li class="active">'.esc_html($breadcrumb_page) . ' ' . get_query_var('paged').'</li>';
                if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print ')</li>';
            }
            **/

        }
    }
}

/**
*
* pagination
*/
if( !function_exists('rightlandpro_pagination') ) {

    function _rightlandpro_pagi_callback($home) {
        return $home;
    }

    //page navegation
    function rightlandpro_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
        
        if( $pages=='' ){
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            
            if(!$pages)
                $pages = 1;
        }

        $pagination = array(
            'base' => add_query_arg('paged','%#%'),
            'format' => '',
            'total' => $pages,
            'current' => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type' => 'array'
        );

        //rewrite permalinks
        if( $wp_rewrite->using_permalinks() )
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

        if( !empty($wp_query->query_vars['s']) )
            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

        $pagi = '';
        if(paginate_links( $pagination )!=''){
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
                        foreach ($paginations as $key => $pg) {
                            $pagi.= '<li>'.$pg.'</li>';
                        }
            $pagi .= '</ul>';
        }

        print _rightlandpro_home_callback($pagi);
    }
}


add_action('admin_print_scripts', 'rightlandpro_scripts_for_admin_panel', 1000);

function rightlandpro_scripts_for_admin_panel(){
    if( get_post_type() == 'post' ) :
    ?>
        <script>
            (function ($) {
            "use strict";
                jQuery(document).ready(function(){

                    var tanveer = jQuery("input[name='post_format']:checked").attr('id');

                    if(tanveer == 'post-format-video'){
                        jQuery('.cmb2-id--video-url').show();
                    }else{
                        jQuery('.cmb2-id--video-url').hide();
                    }

                    if(tanveer == 'post-format-audio'){
                        jQuery('.cmb2-id--audio-url').show();
                    }else{
                        jQuery('.cmb2-id--audio-url').hide();
                    }

                    if(tanveer == 'post-format-gallery'){
                        jQuery('.cmb2-id--gallery-images').show();
                    }else{
                        jQuery('.cmb2-id--gallery-images').hide();
                    }

                    jQuery('input[name="post_format"]').change(function(){

                        var tanveer = jQuery("input[name='post_format']:checked").attr('id');

                        if(tanveer == 'post-format-video'){
                            jQuery('.cmb2-id--video-url').show();
                        }else{
                            jQuery('.cmb2-id--video-url').hide();
                        }

                        if(tanveer == 'post-format-audio'){
                            jQuery('.cmb2-id--audio-url').show();
                        }else{
                            jQuery('.cmb2-id--audio-url').hide();
                        }

                        if(tanveer == 'post-format-gallery'){
                            jQuery('.cmb2-id--gallery-images').show();
                        }else{
                            jQuery('.cmb2-id--gallery-images').hide();
                        }
                    });
                })

            })(jQuery);
        </script>

    <?php endif;

}


// header top bg color
function rightlandpro_breadcrumb_bg_color(){
    $color_code = get_theme_mod( 'rightlandpro_breadcrumb_bg_color','#f4f9fc');
    wp_enqueue_style( 'rightlandpro-breadcrumb-bg', RIGHTLANDPRO_THEME_CSS_DIR . '/color/rightlandpro-breadcrumb-bg.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: ".$color_code."}";

        wp_add_inline_style('rightlandpro-breadcrumb-bg',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'rightlandpro_breadcrumb_bg_color');

// breadcrumb-spacing top
function rightlandpro_breadcrumb_spacing(){
    $padding_px = get_theme_mod( 'rightlandpro_breadcrumb_spacing','160px');
    wp_enqueue_style( 'rightlandpro-breadcrumb-top-spacing', RIGHTLANDPRO_THEME_CSS_DIR . '/color/rightlandpro-breadcrumb-top-spacing.css', array());
    if($padding_px!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: ".$padding_px."}";

        wp_add_inline_style('rightlandpro-breadcrumb-top-spacing',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'rightlandpro_breadcrumb_spacing');

// breadcrumb-spacing bottom
function rightlandpro_breadcrumb_bottom_spacing(){
    $padding_px = get_theme_mod( 'rightlandpro_breadcrumb_bottom_spacing','160px');
    wp_enqueue_style( 'rightlandpro-breadcrumb-bottom-spacing', RIGHTLANDPRO_THEME_CSS_DIR . '/color/rightlandpro-breadcrumb-bottom-spacing.css', array());
    if($padding_px!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: ".$padding_px."}";

        wp_add_inline_style('rightlandpro-breadcrumb-bottom-spacing',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'rightlandpro_breadcrumb_bottom_spacing');


// scrollup
function rightlandpro_scrollup_switch(){
    $scrollup_switch = get_theme_mod( 'rightlandpro_scrollup_switch');
    wp_enqueue_style( 'rightlandpro-scrollup-switch', RIGHTLANDPRO_THEME_CSS_DIR . '/rightlandpro-scrollup-switch.css', array());
    if($scrollup_switch){
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style('rightlandpro-scrollup-switch',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'rightlandpro_scrollup_switch');


