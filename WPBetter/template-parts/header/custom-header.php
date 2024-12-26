<header class="custom-header">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
        </div>

        <div class="auth-section">
            <?php if (is_user_logged_in()) : ?>
                <div class="profile-info">
                    <?php 
                        $current_user = wp_get_current_user();
                        echo $current_user->display_name;
                    ?>
                    <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                </div>
            <?php else : ?>
                <a href="<?php echo wp_login_url(); ?>">Login</a>
                <a href="<?php echo wp_registration_url(); ?>">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <div class="main-nav">
        <!-- Left Menu -->
        <nav class="left-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
            ));
            ?>
        </nav>

        <!-- Center Content Area -->
        <div class="center-content">
            <!-- Your center content here -->
        </div>

        <!-- Right Icons Menu -->
        <div class="right-icons">
            <a href="#" class="icon-link"><i class="icon-search"></i></a>
            <a href="#" class="icon-link"><i class="icon-cart"></i></a>
            <a href="#" class="icon-link"><i class="icon-notifications"></i></a>
        </div>
    </div>
</header>
