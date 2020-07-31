<div class="post-inner">
    <?php armania_post_thumbnail( 330, 315 ); ?>
    <div class="post-info">
        <?php
        echo get_the_term_list(get_the_ID(), 'category',
            '<div class="cat-list"># ',
            ', ',
            '</div>'
        );
        armania_post_title();
        ?>
        <div class="post-meta">
            <?php armania_post_author(
                esc_html__('by:', 'armania')
            ); ?>
            <a class="post-date" href="<?php echo armania_post_link( 'date' ); ?>">
                <?php echo get_the_date( 'd M' ); ?>
            </a>
            <a href="<?php echo armania_post_link(); ?>#comments" class="comment">
                <?php comments_number(
                    esc_html__('No Comments', 'armania'),
                    esc_html__('1 Comment', 'armania'),
                    esc_html__('% Comments', 'armania')
                );
                ?>
            </a>
        </div>
        <?php armania_post_readmore(); ?>
    </div>
</div>