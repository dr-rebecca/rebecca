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
        'third'  => 'Third'
    ));
}
add_action('after_setup_theme','setup_theme')
