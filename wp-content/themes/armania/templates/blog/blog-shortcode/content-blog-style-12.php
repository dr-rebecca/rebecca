<div class="post-inner">
    <?php armania_post_thumbnail( 450, 300 ); ?>
    <div class="post-info">
        <?php armania_post_title(); ?>
        <div class="post-meta">
            <?php armania_post_author(); ?>
            <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
                <?php echo get_the_date( 'F d, Y' ); ?>
            </a>
        </div>
        <?php armania_post_excerpt( 20 ); ?>
    </div>
</div>