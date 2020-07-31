<div class="post-inner">
    <?php armania_post_thumbnail(90, 60); ?>
    <div class="post-info">
        <?php armania_post_title(); ?>
        <div class="post-meta">
            <a class="post-date" href="<?php echo armania_post_link('date'); ?>">
                <i class="icon fa fa-clock-o" aria-hidden="true"></i>
                <?php echo get_the_date('M d, Y'); ?>
            </a>
            <a href="<?php echo armania_post_link(); ?>#comments" class="comment">
                <span class="icon fa fa-comment-o"></span>
                (<?php comments_number('0', '1', '%'); ?>)
            </a>
        </div>
    </div>
</div>