<?php
// add_custom_background();


// This theme uses wp_nav_menu() in one location.
//register_nav_menus();

/**
 * 获取WordPress所有分类名字和ID
 * http://www.wpdaxue.com/show-wordpress-category.html
 */
//function show_category(){
//    global $wpdb;
//    $request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
//    $request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
//    $request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' ";
//    $request .= " ORDER BY term_id asc";
//    $categorys = $wpdb->get_results($request);
//    foreach ($categorys as $category) { //调用菜单
//        $output = '<span>'.$category->name."(<em>".$category->term_id.'</em>)</span>';
//        echo $output;
//    }
//}

//获取分类下文章数量
function wt_get_category_count($input = '') {
    global $wpdb;

    if($input == '') {
        $category = get_the_category();
        return $category[0]->category_count;
    }
    elseif(is_numeric($input)) {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
        return $wpdb->get_var($SQL);
    }
    else {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
        return $wpdb->get_var($SQL);
    }
}






function pagination($query_string){
    global $posts_per_page, $paged;
    $my_query = new WP_Query($query_string ."&posts_per_page=-1");
    $total_posts = $my_query->post_count;
    if(empty($paged))$paged = 1;
    $prev = $paged - 1;
    $next = $paged + 1;
    $range = 2; // only edit this if you want to show more page-links   
    $showitems = ($range * 2)+1;

    $pages = ceil($total_posts/$posts_per_page);
    if(1 != $pages){
        echo "<div class='pagination'>";
        echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."'>最前</a>":"";
        echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."'>上一页</a>":"";

        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }

        echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."'>下一页</a>" :"";
        echo ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."'>最后</a>":"";
        echo "</div>\n";
    }
}







add_theme_support('post-thumbnails');//开启特色图像


add_action('admin_init', 'wpjam_blogroll_settings_api_init');
function wpjam_blogroll_settings_api_init() {
    add_settings_field('wpjam_blogroll_setting', '友情链接', 'wpjam_blogroll_setting_callback_function', 'reading');
    register_setting('reading','wpjam_blogroll_setting');
}

function wpjam_blogroll_setting_callback_function() {
    echo '<textarea name="wpjam_blogroll_setting" rows="10" cols="50" id="wpjam_blogroll_setting" class="large-text code">' . get_option('wpjam_blogroll_setting') . '</textarea>';
}

function wpjam_blogroll(){
    $wpjam_blogroll_setting =  get_option('wpjam_blogroll_setting');
    if($wpjam_blogroll_setting){
        $wpjam_blogrolls = explode("\n", $wpjam_blogroll_setting);
        foreach ($wpjam_blogrolls as $wpjam_blogroll) {
            $wpjam_blogroll = explode("|", $wpjam_blogroll );
            echo ' | <a href="'.trim($wpjam_blogroll[0]).'" title="'.esc_attr(trim($wpjam_blogroll[1])).'">'.trim($wpjam_blogroll[1]).'</a>';
        }
    }
}


//王统获取文章第一张图代码
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',
        $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){ //Defines a default image
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}
?>