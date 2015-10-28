<!DOCTYPE html>
<html>
<head>
    <title>Name</title>
    <meta charset="utf-8"/>
    <meta name="HandheldFriendly" content="false"/>
    <meta name="viewport" content="user-scalable=yes, width=device-width"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/js/lib/html5.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/js/lib/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/js/lib/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/js/js.js"></script>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/theme/css/styles.css" rel="stylesheet" type="text/css">
</head>


<body>
<header class="header-wrapper">
    <div class="header-top">
        <div class="site-container">
            <ul>
                <li class="reg"><a href="#">Регистрация</a></li>
                <li class="enter"><a href="#">Вход</a></li>
            </ul>
        </div>
    </div>

    <div class="header-bottom">
        <div class="site-container">
            <nav>
                <?php
                if ( function_exists( 'wp_nav_menu' ) )
                    wp_nav_menu(
                        array(
                            'theme_location' => 'custom-menu',
                            'fallback_cb'=> 'custom_menu',
                            'container' => 'ul',
                            'menu_id' => 'nav',
                            'menu_class' => 'nav')
                    );
                else custom_menu();
                ?>
            </nav>
        </div>
    </div>
</header>