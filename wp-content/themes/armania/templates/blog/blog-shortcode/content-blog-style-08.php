<div class="post-inner">
	<?php armania_post_thumbnail( 436, 280 ); ?>
    <div class="post-info">
        <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
            <span class="day"><?php echo get_the_date( 'dS' ); ?></span>
            <span class="month"><?php echo get_the_date( 'M' ); ?></span>
        </a>
        <div class="info-inner">
            <?php armania_post_title(); ?>
            <div class="post-meta">
                <p class="date"><?php echo get_the_date( 'M d, Y' ); ?></p>
                <?php armania_post_author( esc_html__( 'by', 'armania' ) ); ?>
            </div>
        </div>
    </div>
</div>