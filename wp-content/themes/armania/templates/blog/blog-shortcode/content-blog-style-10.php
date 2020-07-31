<div class="post-inner">
    <?php armania_post_thumbnail(270, 180); ?>
    <div class="post-info">
        <?php
        armania_get_term_list();
        armania_post_title();
        ?>
        <div class="post-meta">
            <?php armania_post_author(
                esc_html__('by', 'armania')
            ); ?>
            <a href="<?php echo armania_post_link(); ?>#comments" class="comment">
                <?php comments_number(
                    esc_html__('0 Comment(s)', 'armania'),
                    esc_html__('1 Comment(s)', 'armania'),
                    esc_html__('% Comment(s)', 'armania')
                ); ?>
            </a>
        </div>
    </div>
</div>