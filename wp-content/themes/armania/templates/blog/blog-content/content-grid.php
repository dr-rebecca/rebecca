<?php
/**
 * Name: Blog Grid
 **/
?>
<?php
$page_layout  = armania_page_layout();
if ( $page_layout['layout'] == 'left' || $page_layout['layout'] == 'right' ){
    $width  = 328;
    $height = 210;
} else {
    $width  = 448;
    $height = 280;
}
?>
<div class="blog-content blog-grid response-content equal-container better-height row">
	<?php while ( have_posts() ): the_post(); ?>
		<article <?php post_class( 'post-item style-01 col-bg-4 col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ts-12' ); ?>>
            <?php
            armania_get_template(
                "templates/blog/blog-style/content-blog-style-01.php",
                array(
                    'width'  => $width,
                    'height' => $height,
                )
            );
            ?>
		</article>
	<?php endwhile; ?>
</div>
<?php armania_post_pagination(); ?>
