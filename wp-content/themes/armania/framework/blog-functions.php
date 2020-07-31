<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
/**
 *
 * TEMPLATES FUNCTION
 **/
if (!function_exists('armania_post_thumbnail_simple')) {
    function armania_post_thumbnail_simple(){
        if ( has_post_thumbnail() ) : ?>
        <div class="thumb-wrap">
            <div class="post-thumb">
                <a href="<?php echo armania_post_link(); ?>" class="thumb-link">
                    <?php the_post_thumbnail( 'full' ); ?>
                </a>
            </div>
        </div>
        <?php endif;
    }
}
if (!function_exists('armania_post_thumbnail')) {
    function armania_post_thumbnail($width, $height, $placeholder = true, $effect = '', $category = false)
    {
        $width  = apply_filters('armania_post_thumbnail_width', $width);
        $height = apply_filters('armania_post_thumbnail_height', $height);
        ?>
        <div class="post-thumb">
            <?php
            if ($category) {
                armania_get_term_list();
            }
            ?>
            <a href="<?php echo armania_post_link(); ?>" class="thumb-link <?php echo esc_attr($effect); ?>">
                <figure>
                    <?php
                    $thumb = armania_resize_image(get_post_thumbnail_id(), $width, $height, true, true, $placeholder);
                    echo wp_specialchars_decode($thumb['img']);
                    ?>
                </figure>
            </a>
            <?php do_action('armania_post_thumbnail_inner'); ?>
        </div>
        <?php
    }
}
if (!function_exists('armania_post_author')) {
    function armania_post_author($text = false)
    {
        ?>
        <a class="author" href="<?php echo armania_post_link('auth'); ?>">
            <?php if ($text): ?>
                <span class="text"><?php echo esc_html($text); ?></span>
            <?php else: ?>
                <i class="icon fa fa-pencil-square-o"></i>
            <?php endif; ?>
            <span class="name"><?php the_author(); ?></span>
        </a>
        <?php
    }
}
if (!function_exists('armania_post_time_diff')) {
    function armania_post_time_diff()
    {
        $posted = get_the_time('U');
        ?>
        <a class="posted" href="<?php echo armania_post_link(); ?>">
            <span class="icon main-icon-clock2"></span>
            <span class="text"><?php echo human_time_diff($posted, current_time('U')); ?></span>
        </a>
        <?php
    }
}
if (!function_exists('armania_post_viewer')) {
    function armania_post_viewer()
    {
        ?>
        <a class="viewer" href="<?php echo armania_post_link(); ?>">
            <span class="icon main-icon-user2"></span>
            <span class="text">
            <?php
            if (function_exists('ovic_get_post_views')) {
                ovic_get_post_views();
            }
            echo esc_html__(' Peoples', 'armania');
            ?>
            </span>
        </a>
        <?php
    }
}
if (!function_exists('armania_get_term_list')) {
    function armania_get_term_list($taxonomy = 'category')
    {
        echo get_the_term_list(get_the_ID(), $taxonomy,
            '<div class="cat-list">',
            ', ',
            '</div>'
        );
    }
}
if (!function_exists('armania_post_link')) {
    function armania_post_link($type = 'post', $id = 0)
    {
        global $post;

        switch ($type) {
            case 'date':
                $archive_year  = get_the_time('Y');
                $archive_month = get_the_time('m');
                $archive_day   = get_the_time('d');
                $permalink     = get_day_link($archive_year, $archive_month, $archive_day);
                break;
            case 'auth':

                if ($id == 0) {
                    $id = get_the_author_meta('ID');
                }
                $permalink = get_author_posts_url($id);
                break;
            default:

                if ($id == 0) {
                    $id = get_the_ID();
                }
                $permalink = get_the_permalink($id);
                break;
        }

        return apply_filters('ovic_loop_post_link', esc_url($permalink), $post);
    }
}
if (!function_exists('armania_post_formats')) {
    function armania_post_formats()
    {
        $value     = '';
        $format    = 'standard';
        $post_meta = get_post_meta(get_the_ID(), '_custom_metabox_post_options', true);
        if (!empty($post_meta['type']) && $post_meta['type'] != 'standard') {
            $format = $post_meta['type'];
            $value  = $post_meta[$format];
        }
        armania_get_template(
            "templates/blog/blog-formats/format-{$format}.php",
            array(
                'value' => $value,
            )
        );
    }
}
if (!function_exists('armania_post_pagination')) {
    function armania_post_pagination()
    {
        $args = array( // WPCS: XSS ok.
            'screen_reader_text' => '&nbsp;',
            'before_page_number' => '',
            'prev_text'          => esc_html__('Prev', 'armania'),
            'next_text'          => esc_html__('Next', 'armania'),
            'type'               => 'list',
        );

        $pagination = armania_get_option('blog_pagination', 'pagination');
        $blog_style = armania_get_option('blog_list_style', 'standard');
        $animate    = 'fadeInUp';
        if ($blog_style == 'masonry') {
            $animate = '';
        }

        if (function_exists('ovic_custom_pagination')) : ?>
            <div class="pagination-wrap">
                <?php
                ovic_custom_pagination(
                    array(
                        'pagination'    => $pagination,
                        'class'         => 'button',
                        'animate'       => $animate,
                        'text_loadmore' => esc_html__('Load more', 'armania'),
                        'text_infinite' => esc_html__('Loading', 'armania'),
                    ), $args
                );
                ?>
            </div>
        <?php else: ?>
            <div class="pagination-wrap">
                <nav class="woocommerce-pagination">
                    <?php echo paginate_links($args); ?>
                </nav>
            </div>
        <?php endif;
    }
}
if (!function_exists('armania_pagination_post')) {
    function armania_pagination_post()
    {
        $nav_button = armania_get_option('enable_nav_button');
        $prev_post  = get_previous_post();
        $next_post  = get_next_post();
        if ($nav_button == 1):
            ?>
            <nav class="pagination-thumb">
                <?php if (!empty($prev_post)): ?>
                    <div class="other-post prev">
                        <a class="link" href="<?php echo armania_post_link('post', $prev_post->ID); ?>">
                            <span class="icon"></span>
                            <span class="content">
                                <span class="text"><?php echo esc_html__('Previous Post', 'armania'); ?></span>
                                <span class="name"><?php echo esc_html($prev_post->post_title) ?></span>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($next_post)): ?>
                    <div class="other-post next">
                        <a class="link" href="<?php echo armania_post_link('post', $next_post->ID); ?>">
                            <span class="icon"></span>
                            <span class="content">
                                <span class="text"><?php echo esc_html__('Next Post', 'armania'); ?></span>
                                <span class="name"><?php echo esc_html($next_post->post_title) ?></span>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>
            </nav>
        <?php
        endif;
    }
}
if (!function_exists('armania_latest_post')) {
    function armania_latest_post()
    {
        $enable = armania_get_option('enable_related');
        if ($enable == 1) {
            echo armania_do_shortcode('ovic_blog', apply_filters('armania_latest_post_args', array(
                'title'    => esc_html__('Related Posts', 'armania'),
                'target'   => 'related',
                'orderby'  => 'rand',
                'limit'    => '6',
                'order'    => '',
                'carousel' => array(
                    'slidesToShow' => 3,
                    'slidesMargin' => 0,
                    'arrows'       => true,
                    'infinite'     => false,
                    'responsive'   => array(
                        array(
                            'breakpoint' => 992,
                            'settings'   => array(
                                'slidesToShow' => 2,
                            ),
                        ),
                        array(
                            'breakpoint' => 480,
                            'settings'   => array(
                                'slidesToShow' => 1,
                            ),
                        ),
                    ),
                ),
            )));
        }
    }
}
if (!function_exists('armania_about_author')) {
    function armania_about_author()
    {
        $enable    = armania_get_option('enable_about_author');
        $author_id = get_the_author_meta('ID');
        if (get_the_author_meta('description') != '' && $enable == 1):
            ?>
            <div class="author-content">
                <div class="author-avatar">
                    <?php echo get_avatar($author_id, 90); ?>
                </div>
                <div class="author-info">
                    <h3 class="name">
                        <?php the_author(); ?>
                    </h3>
                    <p class="desc"><?php echo nl2br(get_the_author_meta('description')); ?></p>
                    <a class="link" href="<?php echo armania_post_link('auth'); ?>">
                        <?php
                        echo sprintf('%s %s',
                            esc_html__('View all post by', 'armania'),
                            get_the_author()
                        )
                        ?>
                    </a>
                </div>
            </div>
        <?php
        endif;
    }
}
if (!function_exists('armania_post_title')) {
    function armania_post_title($link = true)
    {
        if (get_the_title()) {
            if ($link == true) {
                echo '<h2 class="post-title"><a href="'.armania_post_link().'">'.get_the_title().'</a></h2>';
            } else {
                echo '<h2 class="post-title"><span>'.get_the_title().'</span></h2>';
            }
        }
    }
}
if (!function_exists('armania_post_readmore')) {
    function armania_post_readmore($text = '')
    {
        ?>
        <div class="post-readmore">
            <a href="<?php echo armania_post_link(); ?>" class="button">
                <?php
                if (!empty($text)) {
                    echo esc_html($text);
                } else {
                    echo esc_html__('Read More', 'armania');
                }
                ?>
            </a>
        </div>
        <?php
    }
}
if (!function_exists('armania_callback_comment')) {
    /**
     * Ocolus comment template
     *
     * @param  array  $comment  the comment array.
     * @param  array  $args  the comment args.
     * @param  int  $depth  the comment depth.
     *
     * @since 1.0.0
     */
    function armania_callback_comment($comment, $args, $depth)
    {
        $tag = ('div' === $args['style']) ? 'div' : 'li';

        $commenter = wp_get_current_commenter();
        if ($commenter['comment_author_email']) {
            $moderation_note = esc_html__('Your comment is awaiting moderation.', 'armania');
        } else {
            $moderation_note = esc_html__('Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.',
                'armania');
        }
        ?>
        <<?php echo wp_specialchars_decode($tag); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? 'parent' : '',
        $comment); ?>>
        <div id="div-comment-<?php comment_ID(); ?>" class="comment-body">
            <?php if (0 != $args['avatar_size']): ?>
                <div class="comment-avatar">
                    <figure><?php echo get_avatar($comment, $args['avatar_size']); ?></figure>
                </div>
            <?php endif; ?>
            <div class="comment-info">
                <div class="comment-meta">
                    <div class="comment-author vcard">
                        <?php
                        /* translators: %s: comment author link */
                        printf('<b class="fn">%s</b>', get_comment_author_link($comment));
                        ?>
                    </div>
                    <div class="comment-date">
                        <a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
                            <time datetime="<?php comment_time('c'); ?>">
                                <?php
                                /* translators: 1: comment date, 2: comment time */
                                printf(esc_html__('%1$s at %2$s', 'armania'),
                                    get_comment_date('', $comment),
                                    get_comment_time()
                                );
                                ?>
                            </time>
                        </a>
                    </div>
                    <?php
                    edit_comment_link(
                        esc_html__('Edit', 'armania'),
                        '<span class="edit-link">',
                        '</span>'
                    );
                    comment_reply_link(
                        array_merge($args,
                            array(
                                'add_below' => 'div-comment',
                                'depth'     => $depth,
                                'max_depth' => $args['max_depth'],
                                'before'    => '<div class="reply">',
                                'after'     => '</div>',
                            )
                        )
                    );
                    ?>
                </div><!-- .comment-meta -->
                <?php if ('0' == $comment->comment_approved) : ?>
                    <em class="comment-awaiting-moderation"><?php echo esc_html($moderation_note); ?></em>
                <?php endif; ?>
                <div class="comment-text">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->
            </div>
        </div><!-- .comment-body -->
        <?php
    }
}
if (!function_exists('armania_post_excerpt')) {
    function armania_post_excerpt($count = 35)
    {
        ?>
        <div class="post-excerpt">
            <?php
            if ($count == null) {
                echo apply_filters('the_excerpt', get_the_excerpt());
            } else {
                echo wp_trim_words(apply_filters('the_excerpt', get_the_excerpt()), $count,
                    esc_html__('...', 'armania'));
            }
            ?>
        </div>
        <?php
    }
}
if (!function_exists('armania_post_content')) {
    function armania_post_content()
    {
        if (!is_search()):
            ?>
            <div class="post-content">
                <?php
                /* translators: %s: Name of current post */
                the_content(sprintf(
                        esc_html__('Continue reading %s', 'armania'),
                        the_title('<span class="screen-reader-text">', '</span>', false)
                    )
                );
                wp_link_pages(array(
                        'before'      => '<div class="post-pagination"><span class="title">'.esc_html__('Pages:',
                                'armania').'</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                    )
                );
                ?>
            </div>
        <?php
        endif;
    }
}
if (!function_exists('armania_post_meta')) {
    function armania_post_meta($date = false)
    {
        $share = armania_get_option('enable_share_post');
        ?>
        <div class="post-meta">
            <?php armania_post_author(); ?>
            <?php if ($date == true) : ?>
                <a href="<?php echo armania_post_link('date'); ?>" class="post-date">
                    <span class="icon fa fa-calendar"></span>
                    <?php echo get_the_date('d M'); ?>
                </a>
            <?php endif; ?>
            <a href="<?php echo armania_post_link(); ?>#comments" class="comment">
                <span class="icon fa fa-comment-o"></span>
                (<?php comments_number('0', '1', '%'); ?>)
            </a>
            <?php if ($share == 1): ?>
                <div class="share-post">
                    <a href="#" class="toggle">
                        <span class="icon fa fa-share-alt"></span>
                    </a>
                    <?php armania_share_social(get_the_ID()); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php
    }
}