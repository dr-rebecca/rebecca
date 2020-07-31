<div class="post-inner">
    <?php armania_post_thumbnail(350, 350); ?>
    <div class="post-info">
        <div class="post-meta">
            <a class="post-date" href="<?php echo armania_post_link('date'); ?>">
                <?php echo get_the_date('M d, Y'); ?>
            </a>
            <?php echo get_the_term_list(get_the_ID(), 'category',
                '<div class="cat-list">',
                ', ',
                '</div>'
            ); ?>
        </div>
        <?php
        armania_post_title();
        armania_post_excerpt(12);
        armania_post_readmore();
        ?>
    </div>
</div>