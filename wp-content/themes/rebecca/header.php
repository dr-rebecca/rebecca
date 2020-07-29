<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendors.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/vendor.css">
    <link rel="stylesheet" href="<?php echo THEME_URL ?>/dist/theme.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?> >
<?php wp_body_open() ?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <a href="/"><img src="<?php echo THEME_URL?>/src/images/Logo.jpg"></a>
            </div>
            <div class="col-sm-3 col-md-9 col-lg-9">
                <button>Book Now</button>
            </div>
        </div>

    </div>
</header>
</html>