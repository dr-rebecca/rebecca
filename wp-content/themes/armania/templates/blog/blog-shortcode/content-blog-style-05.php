<div class="post-inner">
	<?php armania_post_thumbnail( 430, 290, true, '', true ); ?>
    <div class="post-info equal-elem">
        <div class="post-meta">
            <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
				<?php echo get_the_date( 'F d, Y' ); ?>
            </a>
			<?php armania_post_author(
				esc_html__( 'by', 'armania' )
			); ?>
        </div>
		<?php
		armania_post_title();
		armania_post_excerpt( 12 );
		armania_post_readmore();
		?>
    </div>
</div>