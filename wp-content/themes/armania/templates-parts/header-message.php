<?php
$header_message = armania_theme_option_meta(
    '_custom_metabox_theme_options',
    'header_message',
    'metabox_header_message',
    ''
);
if ( !empty( $header_message ) ) : ?>
    <div class="header-message">
        <p>
            <?php
            $title = str_replace(
                array( '{', '}' ),
                array( '<span class="highlight">', '</span>' ),
                $header_message
            );
            echo wp_specialchars_decode( $title );
            ?>
        </p>
    </div>
<?php endif;