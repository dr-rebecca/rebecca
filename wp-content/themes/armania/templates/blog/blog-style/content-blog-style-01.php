<div class="post-inner">
    <?php armania_post_thumbnail_simple(); ?>
    <div class="post-info">
		<div class="equal-elem">
            <?php
            armania_get_term_list();
            armania_post_title();
            armania_post_meta( true );
            armania_post_excerpt( 12 );
            ?>
        </div>
        <?php
        armania_post_readmore(
            esc_html__( 'CONTINUE READING', 'armania' )
        );
        ?>
    </div>
</div>