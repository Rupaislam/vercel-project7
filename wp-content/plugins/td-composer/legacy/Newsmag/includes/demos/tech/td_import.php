<?php
/**
 * Created by ra on 5/14/2015.
 */



/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//top menu
$td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', 'top-menu');
td_demo_menus::add_link(array(
    'title' => 'Events',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Guides',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Advertise',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Buy Now',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => 'http://themeforest.net/item/newsmag-news-magazine-newspaper/9512331',
    'parent_id' => ''
));


//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');


//footer menu
$td_demo_footer_menu = td_demo_menus::create_menu('td-demo-footer-menu', 'footer-menu');
td_demo_menus::add_link(array(
    'title' => 'About us',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
	'title' => 'Advertise',
	'add_to_menu_id' => $td_demo_footer_menu,
	'url' => '#',
	'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Send us a tip!',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Write a review',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Contact us',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */
td_demo_misc::update_background('');
td_demo_misc::update_background_login('td_pic_12');
td_demo_misc::update_background_mobile('td_pic_12');


/*  ----------------------------------------------------------------------------
    logo
 */
td_demo_misc::update_logo(array(
    'normal' => 'td_pic_logo',
    'retina' => 'td_pic_logo'
));


//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_pic_logo_footer',
    'retina' => 'td_pic_logo_footer'
));


/*  ----------------------------------------------------------------------------
    footer text
 */
td_demo_misc::update_footer_text('We provide you with the latest breaking news and videos straight from the entertainment industry.');



/*  ----------------------------------------------------------------------------
    socials
 */
td_demo_misc::add_social_buttons(array(
    'facebook' => 'https://www.facebook.com/TagDiv/',
    'twitter' => 'https://twitter.com/tagdivofficial',
    'googleplus' => 'https://plus.google.com/+tagdivThemes',
    'instagram' => 'https://www.instagram.com/tagdiv/',
    'youtube' => 'https://www.youtube.com/user/tagdiv'
));


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('header', 'td_tech_ad_full');
td_demo_misc::add_ad_image('sidebar', 'td_tech_ad_sidebar');


/*  ----------------------------------------------------------------------------
    sidebars
 */

//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_ad_box_widget',
    array (
        'spot_title' => '- Advertisement -',
        'spot_id' => 'sidebar'
    )
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_9_widget',
    array (
        'sort' => 'random_posts',
        'custom_title' => 'APPLICATIONS',
        'limit' => '4',
        'header_color' => ''
    )
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_6_widget',
    array (
        'sort' => 'random_posts',
        'custom_title' => 'HOT NEWS',
        'limit' => '1',
        'header_color' => '',
        'ajax_pagination' => "next_prev"
    )
);


//category sidebar
td_demo_widgets::add_sidebar('td_demo_category');
td_demo_widgets::add_widget_to_sidebar('td_demo_category', 'td_block_ad_box_widget',
	array (
		'spot_title' => '- Advertisement -',
		'spot_id' => 'sidebar'
	)
);
td_demo_widgets::add_widget_to_sidebar('td_demo_category', 'td_block_6_widget',
	array (
		'sort' => 'random_posts',
		'custom_title' => 'APPLE',
		'limit' => '1',
		'header_color' => ''
	)
);
td_demo_widgets::add_widget_to_sidebar('td_demo_category', 'td_block_9_widget',
    array (
        'sort' => '',
        'custom_title' => 'RECENT POSTS',
        'limit' => '4',
        'header_color' => ''
    )
);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Tech today',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#53a5f8'
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Android',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => 'td_demo_category',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#3ea498'
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Windows Phone',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => 'td_demo_category',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'iPhone',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => 'td_demo_category',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#5c69c1'
    ));
$demo_cat_5_id =td_demo_category::add_category(array(
    'category_name' => "Apple",
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#5c69c1'
));

$demo_cat_6_id =td_demo_category::add_category(array(
    'category_name' => 'Geeks',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#a444bd'
));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Linux',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#4ac5db'
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Applications',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#3ea498'
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Bluetooth',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => "",
    'background_td_pic_id' => '',
    'sidebar_id' => 'td_demo_category',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#ec5a4d'
));
$demo_cat_10_id =td_demo_category::add_category(array(
	'category_name' => 'Accessories',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'tdc_category_td_grid_style' => '',
	'description' => "",
	'background_td_pic_id' => '',
	'sidebar_id' => 'td_demo_category',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
	'tdc_color' => '#ec5a4d'
));



/*  ----------------------------------------------------------------------------
    pages
 */
//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'News',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/homepage.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '12',
    'homepage' => true
));


/*  ----------------------------------------------------------------------------
    menu
 */

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'News',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));


// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Tech today',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Apple',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_5_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Geeks',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Linux',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Applications',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));


// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_category(array(
    'title' => 'Windows Phone',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_3_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Android',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_2_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'iPhone',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_4_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
	'title' => 'Accessories',
	'add_to_menu_id' => $td_demo_header_menu_id,
	'category_id' => $demo_cat_10_id,
	'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Bluetooth',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id,
    'parent_id' => $parent_submenu_id
));



/*  ---------------------------------------------------------------------------
    posts
*/
// post in featured category
td_demo_content::add_post(array(
    'title' => 'Apple sells 10 million iPhone 6 and iPhone 6 Pluses',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Experiencing the new Oculus Rift VR headset',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Canon XC10 4K Digital Camcorder Is Out: Versatile And For Only $2,500',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => 'Simple form creation and storage, built for developers.',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => "Robots helped inspire deep learning might become",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "Huawei’s just bought an internet-of-things startup",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => "Apple Server Most Powerful rack optimized server",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_7'
));


//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "I can’t browse the sites I like at work because company firewall policy is too strict",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Client-side vs Server-side Validation in Web Applications",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "My microwave is too small to fit the microwave popcorn bag",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => "This watermelon I bought on a whim is pretty good, but I can definitely imagine a better one.",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "Modern Language Wars, PHP vs Python vs Ruby",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));



//  ----------------------------------------------------------------------------
//  Mix Cat
td_demo_content::add_post(array(
    'title' => "Scalable code without bloat: DCI, Use Cases, and You",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => "Game of Hacks – See How Good You Are",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => 'Moogle Corp: Company you might be working for',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Terraform – Cross PaaS configuration management?",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => "50 Tips and Insights About Productivity, Happiness, and Life",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_11'
));


//  ----------------------------------------------------------------------------
//
td_demo_content::add_post(array(
    'title' => "Cheryl Steals Kate Middleton’s Beauty Icon Status",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "We Found the Sexiest Lingerie on the Internet",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "The 5 New Watch Trends To Try Now",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => "The 10 Runway Trends You’ll Be Wearing This Year",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "We Found the Sexiest Lingerie on the Internet",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "OneNote for iOS and Mac lets you attach files",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "SSL Connectivity for all Central Repository users Underway",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "The future steps of Scala – What to expect from upcoming releases",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => 'I built an app that does triangulation of points on the earth',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => "Sandbox to try out the code written in almost all languages",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Beginner: Are you stuck in programming should not do",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "Facebook is open sourcing dfuse, D language bindings for FUSE",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => 'A first glimpse at Java 9: Early access release of JDK9 on OpenJDK',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "Show HN: ResMaps – See who is viewing your resume are looking",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "Thinklab – Building a startup team to fix science and government",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_10'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "StreetScore scores a street view based on how safe it looks to a human",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => "Mathematica 10 released on Raspberry Pi",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => "50 Tips and Insights About Productivity, Happiness, and Life",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "Show HN: Full Stack Entrepreneur – A Full Stack Guide To Entrepreneurship",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => "Kim Kardashian Shows Off Deep Cleavage In Plunging Top & Mini",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_8'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => 'Why you should choose Microsoft over Linux',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Going Beyond Amazon: A New Model for Authors, Retailers, and Publishers",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => "Wind and solar power are even more expensive than is commonly thought",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => 'Building an API in 60 seconds, without any server setup',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => "FCC chair accuses Verizon of throttling unlimited data to boost profits",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "UK to allow driverless cars on public roads in January",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => "Let’s Build a Traditional City and Make a Profit",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Building a Gimbal in Rust: An Introduction',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => "How Internet Providers Get Around War Zones",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "Audio Tour App Detour Steers You Away from the Typical Tourist Traps",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_4'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Announcing a specification for PHP",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => 'Show HN: Appsites – Beautiful websites for mobile',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "How to drive growth through customer support",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => 'The Ideal Length of Everything Online, Backed by Research',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => "The hand rail is going a little faster than the moving sidewalk.",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Marriott Plays With Sensory-Rich Virtual Reality Getaways",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "Android L Will Keep Your Secrets Safer",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => "Gadget Ogling: Amazon on Fire, Virtual Reality, True Nature and Energy Relief",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "My work only allows Internet Explorer, so I have to manually",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => "Xbox One to launch in China this month after all",
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_1'
));