<div class="post-inner">
    <?php armania_post_thumbnail(350, 300); ?>
    <div class="post-info">
        <a class="post-date" href="<?php echo armania_post_link('date'); ?>">
            <span class="day"><?php echo get_the_date('dS'); ?></span>
            <span class="month"><?php echo get_the_date('M'); ?></span>
        </a>
        <?php armania_post_title(); ?>
        <div class="post-meta">
            <?php
            armania_post_time_diff();
            armania_post_viewer();
            ?>
        </div>
        <?php
        armania_post_excerpt(10);
        armania_post_readmore();
        ?>
    </div>
</div>