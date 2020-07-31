<div class="post-inner">
    <?php armania_post_thumbnail(450, 258); ?>
    <div class="post-info">
        <div class="post-meta">
            <a class="post-date" href="<?php echo armania_post_link('date'); ?>">
                <?php echo get_the_date('F d, Y'); ?>
            </a>
            <?php armania_post_author(
                esc_html__('by', 'armania')
            ); ?>
            <a href="<?php echo armania_post_link(); ?>#comments" class="comment">
                <span class="icon fa fa-comment-o"></span>
                <?php comments_number(
                    esc_html__('No Comments', 'armania'),
                    esc_html__('1 Comment', 'armania'),
                    esc_html__('% Comments', 'armania')
                );
                ?>
            </a>
        </div>
        <?php
        armania_post_title();
        armania_post_excerpt(17);
        armania_post_readmore();
        ?>
    </div>
</div>