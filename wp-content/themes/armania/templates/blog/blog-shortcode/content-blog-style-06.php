<div class="post-inner">
    <div class="thumb-wrap">
        <?php armania_post_thumbnail( 420, 364 ); ?>
        <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
            <span class="day"><?php echo get_the_date( 'dS' ); ?></span>
            <span class="month"><?php echo get_the_date( 'M' ); ?></span>
        </a>
    </div>
    <div class="post-info">
        <?php armania_post_title(); ?>
        <div class="post-meta">
            <?php armania_post_author(
                esc_html__( 'by', 'armania' )
            ); ?>
        </div>
        <?php
        armania_post_excerpt( 21 );
        ?>
    </div>
</div>