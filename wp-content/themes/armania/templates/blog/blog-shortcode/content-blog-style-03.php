<div class="post-inner">
	<?php armania_post_thumbnail( 430, 300 ); ?>
    <div class="post-info">
		<?php
		armania_get_term_list();
		armania_post_title();
		?>
        <div class="post-meta">
            <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
                <?php echo get_the_date( 'dS M, Y' ); ?>
            </a>
            <?php armania_post_author(
                esc_html__( 'by', 'armania' )
            ); ?>
        </div>
    </div>
</div>