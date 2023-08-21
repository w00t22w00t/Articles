<?php
global $post;

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since silkblog 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function silkblog_front_page_template($template)
{
    return is_home() ? '' : $template;
}
add_filter('frontpage_template', 'silkblog_front_page_template');

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function silkblog_custom_excerpt_length($length)
{
    return 40;
}
add_filter('excerpt_length', 'silkblog_custom_excerpt_length', 999);


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function silkblog_excerpt_more($more)
{
    if (true == get_theme_mod('checkbox_read_more', false)) :
        if (is_front_page() && is_home()) {
            // Default homepage
            return '<a href="' . esc_url(get_permalink()) . '" class="readmore clear primary button"> ' . esc_html__('Read more…', 'silk-blog') . '</a>';
        } elseif (is_front_page()) {
            // static homepage
            return '...';
        } elseif (is_home()) {
            // blog page
            return '<a href="' . esc_url(get_permalink()) . '" class="readmore clear primary button">' . esc_html__('Read more…', 'silk-blog') . '</a>';
        } else {
            //everything else
            return '<a href="' . esc_url(get_permalink()) . '" class="readmore clear primary button"> ' . esc_html__('Read more…', 'silk-blog') . '</a>';
        }
    else :
        return '...';
    endif;
}
add_filter('excerpt_more', 'silkblog_excerpt_more');

/**
 * Converts Hex color code into RGB
 *
 * @param  string $color    hex color code.
 * @param  string $percentage rgba format.
 * @return string         converted rgb value
 */
function silkblog_hex2rgba($color, $percentage = 0.5)
{
    $color = trim($color, '#');

    if (strlen($color) === 3) {
        $r = hexdec(substr($color, 0, 1) . substr($color, 0, 1));
        $g = hexdec(substr($color, 1, 1) . substr($color, 1, 1));
        $b = hexdec(substr($color, 2, 1) . substr($color, 2, 1));
    } elseif (strlen($color) === 6) {
        $r = hexdec(substr($color, 0, 2));
        $g = hexdec(substr($color, 2, 2));
        $b = hexdec(substr($color, 4, 2));
    } else {
        return $color;
    }

    return "rgba( $r, $g, $b, $percentage )";
}


/**
 * Link thumbnails to their posts based on attr
 *
 * @param $html
 * @param int $pid
 * @param int $post_thumbnail_id
 * @param int $size
 * @param array $attr
 *
 * @return string
 */

function silkblog_filter_post_thumbnail_html($html, $pid, $post_thumbnail_id, $size, $attr)
{

    if (!empty($attr['link_thumbnail'])) {

        $html = sprintf(
            '<a class="img-link" href="%s" title="%s" rel="nofollow"><span class="thumbnail-resize" >%s</span></a>',
            esc_url(get_permalink($pid)),
            esc_attr(get_the_title($pid)),
            $html
        );
    }

    return $html;
}

add_filter('post_thumbnail_html', 'silkblog_filter_post_thumbnail_html', 10, 5);


/**
 * comments meta
 */
if (!function_exists('silkblog_meta_comment')) :
    function silkblog_meta_comment()
    {
        if (!post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            /* translators: %s: post title */
            comments_popup_link(sprintf(wp_kses(__('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'silk-blog'), array('span' => array('class' => array()))), get_the_title()));
            echo '</span>';
        }
    }
endif;

/**
 * social icons
 */
if (!function_exists('slickblog_topbar_social')) :
    function slickblog_topbar_social()
    { ?>
        <?php $all_social_icons = get_theme_mod('all_social_icons', ''); ?>
        <?php if (!empty($all_social_icons)) : ?>
            <div class="social-btns">
                <?php foreach ($all_social_icons as $row) : ?>
                    <a class="btn <?php echo esc_attr($row['social_icon']); ?>" target="_blank" href="<?php echo esc_url($row['social_url']); ?>">
                        <i class="fa fa-<?php echo esc_attr($row['social_icon']); ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
<?php }
endif;
/**
 * Site branding function
 */


/**
 * Prints categories list.
 */
if (!function_exists('silkblog_category_list')) :
    function silkblog_category_list()
    {
        $categories = get_the_category();

        $output = '';
        if (is_single()) {
            $separator = '';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $output .=
                        '<a class="button secondary radius " href="' . esc_url(get_category_link($category->term_id)) .
                        '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'silk-blog'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                }
            }
        } else {
            $separator = '';
            if (!empty($categories)) {
                foreach ($categories as $category) {
                    $output .=
                        '<a class="hollow button secondary radius " href="' . esc_url(get_category_link($category->term_id)) .
                        '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'silk-blog'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
                }
            }
        }
        echo trim($output, $separator);
    }
endif;


/**
 * Prints first category link and name
 */
if (!function_exists('silkblog_firstcategory_link')) :
    function silkblog_firstcategory_link()
    {
        $categories = get_the_category();
        if (!empty($categories)) {
            echo  '<a class="cat-info-el" href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
        }
    }
endif;


if (!function_exists('silkblog_meta_tag')) :
    /**
     * Prints HTML with meta information for the tags .
     */
    function silkblog_meta_tag()
    {

        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('<sapn class="button-group"><button class="hollow button secondary radius">', '</button><button class="hollow button secondary radius">', '</button></span>');
            if ($tags_list) {
                echo '<span class="single-tag-text">';
                _e('Tagged:', 'silk-blog');
                echo '</span>';
                echo $tags_list;
            }
        }
    }
endif;

if (!function_exists('silkblog_edit_link')) :
    /**
     * Prints HTML with meta information for the tags .
     */
    function silkblog_edit_link()
    {
        edit_post_link(
            sprintf(
                /* translators: %s: Name of current post */
                esc_html__('Edit %s', 'silk-blog'),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ),
            '<button class="hollow button secondary" >',
            '</button>'
        );
    }
endif;



if (!function_exists('silkblog_time_link')) :
    /**
     * Gets a nicely formatted string for the published date.
     */
    function silkblog_time_link()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

        $time_string = sprintf(
            $time_string,
            get_the_date(DATE_W3C),
            get_the_date(),
            get_the_modified_date(DATE_W3C),
            get_the_modified_date()
        );
        $archive_year  = get_the_time('Y');
        $archive_month = get_the_time('m');


        // Wrap the time string in a link, and preface it with 'Posted on'.
        return sprintf(
            /* translators: %s: post date */
            __('<span class="screen-reader-text">Posted on</span> %s', 'silk-blog'),
            '<span class="meta-info meta-info-date is-font-size-6"> <a href="' . esc_url(get_month_link($archive_year, $archive_month)) . '" rel="bookmark">' . $time_string . '</a></span>'
        );
    }
endif;

/* Function which displays your post date in time ago format */
function silkblog_time_ago()
{
    return human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ' . esc_html__('ago', 'silk-blog');
}

if (!function_exists('silkblog_author_bio')) :

    function silkblog_author_bio()
    {
        // Post meta author
        $author = sprintf(
            esc_html_x('Posts by: %s', 'post author', 'silk-blog'),
            esc_html(get_the_author())
        );
        echo  $author;
    }
endif;
/**
 * Post page title “Category:”, “Tag:”, “Author:”, “Archives:” and “Other taxonomy name:”
 */
if (!function_exists('silkblog_page_title_call')) :
    function silkblog_page_title_call()
    {
        if (is_category()) {
            $title = single_cat_title('', false);
        } elseif (is_tag()) {
            $title = single_tag_title('', false);
        } elseif (is_author()) {
            $title = silkblog_author_bio();
        } elseif (is_archive()) {
            $title = the_archive_title();
        } elseif (is_tax()) {
            $title = single_term_title('', false);
        } elseif (is_search()) {
            $title  = sprintf(esc_html__('Search Results for: %s', 'silk-blog'), esc_html(get_search_query()));
        }
        return $title;
    }
endif;



// Print categories for 2nd layout
if (!function_exists('silkblog_category_masonry')) :
    function silkblog_category_masonry()
    {
        $categories = get_the_category();

        $output = '';

        $separator = '';
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $output .=
                    '<a class="clear button secondary" href="' . esc_url(get_category_link($category->term_id)) .
                    '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'silk-blog'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
            }
        }
        echo trim($output, $separator);
    }
endif;


/*----------- sidebar layout Blog Page-----------*/
if (!function_exists('silkblog_sidebar_layout')) :
    function silkblog_sidebar_layout()
    {
        $sidbar_position = get_theme_mod('sidbar_position_gen', 'right');
        $blogpost_style = get_theme_mod('layout_page_post', 'layout1');
        if (!is_active_sidebar('right-sidebar') || 'full' == $sidbar_position) {
            if ('layout1' == $blogpost_style) :
                $siderbar = 'large-20';
            else :
                $siderbar = 'large-24';
            endif;
        } elseif (is_active_sidebar('right-sidebar') || ('right' == $sidbar_position)) {
            $siderbar = ' ';
        } elseif (is_active_sidebar('right-sidebar') || ('left' == $sidbar_position)) {
            $siderbar = ' ';
        }
        $siderbars = $siderbar;
        return $siderbars;
    }
endif;

/*----------- Slider functions-----------*/


// Print categories for slider_setup

if (!function_exists('silkblog_category_slider')) :
    function silkblog_category_slider()
    {
        $categories = get_the_category();

        $output = '';

        $separator = '';
        if (!empty($categories)) {
            foreach ($categories as $category) {
                $output .=
                    '<a class="hollow button secondary radius " href="' . esc_url(get_category_link($category->term_id)) .
                    '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'silk-blog'), $category->name)) . '">' . esc_html($category->name) . '</a>' . $separator;
            }
        }
        echo trim($output, $separator);
    }
endif;
