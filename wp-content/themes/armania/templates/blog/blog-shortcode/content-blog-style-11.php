<div class="post-inner">
	<?php armania_post_thumbnail( 330, 450 ); ?>
	<div class="post-info">
		<?php armania_post_title(); ?>
		<div class="post-meta">
			<a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
				<?php echo get_the_date( 'F d, Y' ); ?>
			</a>
			<?php armania_post_author(
				esc_html__( 'by', 'armania' )
			); ?>
		</div>
		<?php
		armania_post_excerpt( 23 );
		armania_post_readmore();
		?>
	</div>
</div>