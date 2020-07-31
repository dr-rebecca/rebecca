<?php while ( have_posts() ): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-item single-post' ); ?>>
		<?php
		armania_post_title( false );
		armania_post_meta( true );
		?>
		<?php if ( has_post_thumbnail() ) : ?>
            <div class="thumb-wrap">
				<?php armania_post_formats(); ?>
            </div>
		<?php endif; ?>
		<?php
		armania_get_term_list();
		armania_post_content();
		armania_about_author();
		$share = armania_get_option( 'enable_share_post' );
		$terms = get_the_terms( get_the_ID(), 'post_tag' );
		if ( ( !is_wp_error( $terms ) && ! empty( $terms ) ) || $share == 1 ):
			?>
            <div class="footer-post">
				<?php
				$before = '';
				$before .= '<div class="tag-list">';
				$before .= '<span class="title">' . esc_html__( 'Tags:', 'armania' ) . '</span>';
				$before .= '<div class="tagcloud">';
				echo get_the_term_list( get_the_ID(), 'post_tag',
					$before,
					'',
					'</div></div>'
				);
				?>
				<?php if ( $share == 1 ): ?>
                    <div class="share-list">
                        <span class="title"><?php echo esc_html__( 'Share this post:', 'armania' ) ?></span>
						<?php armania_share_social( get_the_ID() ); ?>
                    </div>
				<?php endif; ?>
				<?php armania_pagination_post(); ?>
            </div>
		<?php
		endif;
		armania_latest_post();
		/*If comments are open or we have at least one comment, load up the comment template.*/
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>
    </article>
<?php endwhile;