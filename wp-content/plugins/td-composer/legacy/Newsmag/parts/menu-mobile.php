<div class="td-menu-background"></div>
<div id="td-mobile-nav">
    <div class="td-mobile-container">
        <!-- mobile menu top section -->
        <div class="td-menu-socials-wrap">
            <!-- socials -->
            <div class="td-menu-socials">
                <?php
                //get the socials that are set by user
                $td_get_social_network = td_options::get_array('td_social_networks');

                if(!empty($td_get_social_network)) {
                    foreach($td_get_social_network as $social_id => $social_link) {
                        if(!empty($social_link)) {
                            echo td_social_icons::get_icon($social_link, $social_id, true);
                        }
                    }
                }
                ?>
            </div>
            <!-- close button -->
            <div class="td-mobile-close">
                <span><i class="td-icon-close-mobile"></i></span>
            </div>
        </div>

        <!-- login section -->
        <?php if (td_util::get_option('tds_login_sign_in_widget') == 'show') { ?>
            <div class="td-menu-login-section">
                <?php
                if ( is_user_logged_in() ) {
                    require_once('logged.php');
                } else {
                    require_once('login.php');
                }
                ?>
            </div>
        <?php } ?>

        <!-- menu section -->
        <div class="td-mobile-content">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class'=> 'td-mobile-main-menu',
                'fallback_cb' => 'td_wp_no_mobile_menu',
                'link_after' => '<i class="td-icon-menu-right td-element-after"></i>',
                'walker'  => new td_walker_mobile_menu()
            ));

            //if no menu
            function td_wp_no_mobile_menu() {
                //this is the default menu
                echo '<ul class="">';
                echo '<li class="menu-item-first"><a href="' . esc_url(home_url( '/' )) . 'wp-admin/nav-menus.php">Click here - to use the wp menu builder</a></li>';
                echo '</ul>';
            }

            ?>
        </div>
    </div>

    <!-- register/login section -->
    <?php if (td_util::get_option('tds_login_sign_in_widget') == 'show') { ?>
        <div id="login-form-mobile" class="td-register-section">
            <?php if ( !is_user_logged_in() ) {
                require_once('register.php');
            } ?>
        </div>
    <?php } ?>
</div>