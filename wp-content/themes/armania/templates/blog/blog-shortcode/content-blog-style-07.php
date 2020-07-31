<div class="post-inner">
	<?php armania_post_thumbnail( 380, 250 ); ?>
    <div class="post-info equal-elem">
        <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
            <span class="day"><?php echo get_the_date( 'd' ); ?></span>
            <span class="month"><?php echo get_the_date( 'M' ); ?></span>
        </a>
		<?php
		armania_get_term_list();
		armania_post_title();
		?>
        <div class="post-meta">
			<?php armania_post_author(
				esc_html__( 'Post by', 'armania' )
			); ?>
        </div>
    </div>
</div>