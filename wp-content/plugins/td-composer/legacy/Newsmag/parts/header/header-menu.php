<div id="td-header-menu" role="navigation">
    <?php if ( td_util::get_option('tds_hide_mobile_menu') != 'hide' ) { ?>
    <div id="td-top-mobile-toggle"><span><i class="td-icon-font td-icon-mobile"></i></span></div>
    <?php } ?>
    <div class="td-main-menu-logo td-logo-in-header">
        <?php
        if (td_util::get_option('tds_logo_menu_upload') == '') {
            require_once('logo.php');
        } else {
            require_once('logo-mobile.php');
        }?>
    </div>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'header-menu',
        'menu_class'=> 'sf-menu',
        'fallback_cb' => 'td_wp_page_menu',
        'walker' => new td_tagdiv_walker_nav_menu()
    ));


    //if no menu
    function td_wp_page_menu() {
        //this is the default menu
        echo '<ul class="sf-menu">';
        echo '<li class="menu-item-first"><a href="' . esc_url(home_url( '/' )) . 'wp-admin/nav-menus.php?action=locations">Click here - to select or create a menu</a></li>';
        echo '</ul>';
    }
    ?>
</div>

<div class="td-search-wrapper">
    <div id="td-top-search">
        <!-- Search -->
        <div class="header-search-wrap">
            <div class="dropdown header-search">
                <a id="td-header-search-button" href="#" role="button" aria-label="search icon" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></a>
                <?php if ( td_util::get_option('tds_hide_mobile_search') != 'hide' ) { ?>
                <span id="td-header-search-button-mob" class="dropdown-toggle " data-toggle="dropdown"><i class="td-icon-search"></i></span>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="header-search-wrap">
	<div class="dropdown header-search">
		<div class="td-drop-down-search">
			<form method="get" class="td-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
				<div role="search" class="td-head-form-search-wrap">
					<input class="needsclick" id="td-header-search" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="<?php _etd('Search')?>" />
				</div>
			</form>
			<div id="td-aj-search"></div>
		</div>
	</div>
</div>