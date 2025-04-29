<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-sm z-50 shadow-sm">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="site-branding">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                ?>
                <div class="text-2xl font-bold text-primary flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </div>
                <?php
            }
            ?>
        </div>

        <nav id="site-navigation" class="main-navigation hidden md:flex items-center space-x-6">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'primary-menu',
                'container' => false,
                'menu_class' => 'flex space-x-6',
                'link_before' => '<span class="text-gray-700 hover:text-primary transition-colors duration-200">',
                'link_after' => '</span>',
            ));
            ?>
            <a href="#contact" class="btn btn-primary">Записаться</a>
        </nav>

        <button id="menu-toggle" class="menu-toggle md:hidden">
            <span class="menu-icon"></span>
        </button>
    </div>

    <div id="mobile-menu" class="mobile-menu hidden">
        <div class="container mx-auto px-4 py-3">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id' => 'mobile-primary-menu',
                'container' => 'nav',
                'container_class' => 'flex flex-col space-y-4 py-2',
                'menu_class' => 'mobile-menu-list',
                'link_before' => '<span class="text-gray-700 hover:text-primary py-2 transition-colors duration-200">',
                'link_after' => '</span>',
            ));
            ?>
            <a href="#contact" class="btn btn-primary w-full text-center mt-4">Записаться</a>
        </div>
    </div>
</header>
