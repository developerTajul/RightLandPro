<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rightlandpro
 */

if( is_single() ): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox post format-image mb-40'); ?> >
        <?php if(has_post_thumbnail()): ?>
        <div class="postbox__thumb mb-35">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
            <a class="popup-video video-btn" href="<?php print esc_url(get_post_meta(get_the_id(), '_video-url', true )); ?>">
                <i class="fas fa-play"></i>
            </a>
        </div>
        <?php endif; ?>
        <div class="postbox__text bg-none">
            <div class="post-meta mb-15">
                <span><i class="far fa-calendar-check"></i> <?php the_time(get_option('date_format')); ?> </span>
                <span>
                    <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <i class="far fa-user"></i> <?php print get_the_author(); ?>
                    </a>
                </span>
                <span><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> <?php comments_number(); ?></a></span>
            </div>
            <h3 class="blog-title">
                <?php the_title(); ?>
            </h3>
            <div class="post-text mb-20">
                <?php the_content(); ?>
                <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'rightlandpro' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ) );
                ?>
            </div>
            <?php print rightlandpro_get_tag(); ?>
        </div>
    </article>
<?php
else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('postbox post format-video mb-40'); ?> >
        <?php if( has_post_thumbnail() ): ?>
        <div class="postbox__video mb-30">
            <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
            <a class="popup-video video-btn" href="<?php print esc_url(get_post_meta(get_the_id(), '_video-url', true )); ?>">
                <i class="fas fa-play"></i>
            </a>
        </div>
        <?php endif; ?>
        <div class="postbox__text p-50">
            <div class="post-meta mb-15">
                <span><i class="far fa-calendar-check"></i> <?php the_time(get_option('date_format')); ?></span>
                <span><a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="far fa-user"></i> <?php print get_the_author(); ?></a></span>
                <span><a href="<?php comments_link(); ?>"><i class="far fa-comments"></i> <?php comments_number(); ?></a></span>
            </div>
            <h3 class="blog-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="post-text mb-20">
                <?php the_excerpt(); ?>
            </div>
            <!-- blog btn -->
              <?php 
                $rightlandpro_blog_btn     = get_theme_mod('rightlandpro_blog_btn','Read More text'); 
                $rightlandpro_blog_btn_icon     = get_theme_mod('rightlandpro_blog_btn_icon','far fa-long-arrow-right'); 
                $rightlandpro_blog_btn_switch     = get_theme_mod('rightlandpro_blog_btn_switch'); 
                $rightlandpro_blog_btn_icon_switch     = get_theme_mod('rightlandpro_blog_btn_icon_switch'); 

            if( $rightlandpro_blog_btn_switch ): ?>
                <div class="read-more mt-30">
                    <a class="btn" href="<?php the_permalink(); ?>"><span class="btn-text"><?php print esc_html($rightlandpro_blog_btn); ?> 
                        <?php if( $rightlandpro_blog_btn_icon_switch ): ?>
                        <i class=" <?php print esc_attr($rightlandpro_blog_btn_icon); ?>"></i>
                        <?php endif; ?></span> 
                    </a>
                </div>
            <?php 
            endif; ?>
        </div>
    </article>
<?php
endif; ?>


