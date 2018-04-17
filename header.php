<!DOCTYPE html>
<html <?php language_attributes();?>

    <head><?php wp_head(); ?>
    </head>
    <body class="size-1140">
        <!-- TOP NAV WITH LOGO -->
        <header class="margin-bottom">
            <div class="line">
                <nav>
                    <div class="top-nav">
                        <p class="nav-text"></p>
                        <a class="logo" href="/">
                            Fashion<span>Nails</span>
                        </a>
                        <ul class="top-ul right">
                            <?php wp_nav_menu([
                                    'theme_location' => 'main_menu',
                                    'items_wrap' => '%3$s',
                                    'container' => ''
                                ]);?>
                            <div class="social right">
                                <a target="_blank" href="//facebook.com">
                                    <i class="icon-facebook_circle icon2x"></i>
                                </a>
                                <a target="_blank" href="//instagram.com">
                                    <i class="icon-instagram_circle icon2x"></i>
                                </a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
