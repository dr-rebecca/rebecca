<div class="post-inner">
    <?php armania_post_thumbnail(683, 456); ?>
    <div class="post-info">
        <div class="box">
            <?php
            echo get_the_term_list(get_the_ID(), 'category',
                '<div class="cat-list">',
                ', ',
                '</div>'
            );
            ?>
            <div class="post-meta">
                <a class="post-date" href="<?php echo armania_post_link('date'); ?>">
                    <?php echo get_the_date('M d, Y'); ?>
                </a>
                <?php armania_post_author(
                    esc_html__('by', 'armania')
                ); ?>
            </div>
        </div>
        <?php armania_post_title(); ?>
    </div>
</div>