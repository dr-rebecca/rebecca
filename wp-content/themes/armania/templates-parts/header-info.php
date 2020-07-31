<?php
$header_info = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_info',
    'metabox_header_info',
    ''
);
?>
<?php if ( !empty( $header_info ) ) : ?>
    <div class="header-info-wrap">
        <?php foreach ( $header_info as $item ) : ?>
            <div class="header-info">
                <?php if ( $item['info_icon'] != "" ): ?>
                    <div class="icon">
                        <span class="<?php echo esc_attr( $item['info_icon'] ); ?>"></span>
                    </div>
                <?php endif; ?>
                <div class="content">
                    <?php if ( $item['info_subtitle'] != "" ): ?>
                        <p class="subtitle"><?php echo esc_html( $item['info_subtitle'] ); ?></p>
                    <?php endif; ?>
                    <?php if ( $item['info_title'] != "" ): ?>
                        <p class="title">
                            <?php if ( !empty( $item['info_link']) ) : ?>
                                <a href="<?php echo esc_attr( $item['info_link'] ); ?>"><?php echo esc_html( $item['info_title'] ); ?></a>
                            <?php else : ?>
                                <?php echo esc_html( $item['info_title'] ); ?>
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>