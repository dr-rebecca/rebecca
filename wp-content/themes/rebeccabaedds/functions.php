 <?php
define("THEME_URL", get_template_directory_uri());
function saigon_add_body_class($classes ){
    global $post;
    $suffix = '-ph';
    if( is_home() ){
     $classes[] = 'home'.$suffix;
    }
    if( is_page() ){
     if(in_array($post->post_name, array('dang-nhap', 'dang-ky'))){
      $classes[] = 'account' . $suffix;
     }
     if( $post->post_name === 'shop' ) $classes[] = 'product'. $suffix;
     else{
      $classes[] = $post->post_name . $suffix;
     }
    }
    if( is_singular('product') ){
     $classes[] = 'product'. $suffix;
    }
    return $classes;
   }
   add_filter( 'body_class', 'saigon_add_body_class' );

function setup_theme(){
    add_theme_support('post-thumnail');
    register_nav_menus(array(
        'primary' =>'Primary',
        'second' => 'Second',
        'third'  => 'Third',
        'all' => 'All'
    ));
}
add_action('after_setup_theme','setup_theme');
function init_widgets(){
    register_sidebar(
        array(
            'name'          => 'Header',
            'id'            => 'sidebar',
            'description'   => 'Add widgets here to appear in your header.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init','init_widgets');
