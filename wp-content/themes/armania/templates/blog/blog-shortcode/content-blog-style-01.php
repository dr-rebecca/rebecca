<div class="post-inner">
	<?php armania_post_thumbnail( 440, 280 ); ?>
    <div class="post-info">
		<?php
		armania_get_term_list();
        armania_post_title();
		?>
        <div class="post-meta">
			<?php armania_post_author(); ?>
            <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
                <i class="icon fa fa-clock-o" aria-hidden="true"></i>
				<?php echo get_the_date( 'Y-M-d' ); ?>
            </a>
        </div>
    </div>
</div>