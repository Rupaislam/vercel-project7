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


//contact page needed in header menu
//homepage
$td_contactpage_id = td_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/contact.txt',
    'template' => 'page-pagebuilder-title.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => 'no_sidebar',
    'homepage' => false
));


/*  ----------------------------------------------------------------------------
    menu
 */
//top menu
$td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', 'top-menu');
td_demo_menus::add_link(array(
    'title' => 'Blog',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Forums',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//add the contact-page to the menu
td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'page_id' => $td_contactpage_id,
    'parent_id' => ''
));

td_demo_menus::add_link(array(
    'title' => 'Purchase Theme',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'url' => 'http://themeforest.net/item/newsmag-news-magazine-newspaper/9512331',
    'parent_id' => ''
));


//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');


//footer menu
$td_demo_footer_menu = td_demo_menus::create_menu('td-demo-footer-menu', 'footer-menu');
td_demo_menus::add_link(array(
    'title' => 'Disclaimer',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Privacy',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Advertisement',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));
td_demo_menus::add_link(array(
    'title' => 'Contact Us',
    'add_to_menu_id' => $td_demo_footer_menu,
    'url' => '#',
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */
td_demo_misc::update_background('');
td_demo_misc::update_background_login('td_pic_p4');
td_demo_misc::update_background_mobile('td_pic_p2');
td_demo_misc::update_background_footer('td_pic_p4');



/*  ----------------------------------------------------------------------------
    logo
 */
td_demo_misc::update_logo(array(
    'normal' => 'td_pic_logo',
    'retina' => 'td_pic_logo',
    'mobile' => 'td_pic_logo_footer'
));


//footer
td_demo_misc::update_footer_logo(array(
    'normal' => 'td_pic_logo_footer',
    'retina' => 'td_pic_logo_footer'
));


/*  ----------------------------------------------------------------------------
    footer text
 */
td_demo_misc::update_footer_text('Newsmag is your news, entertainment, music fashion website. We provide you with the latest breaking news and videos straight from the entertainment industry.');



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
td_demo_misc::add_ad_image('header', 'td_default_ad_full');
td_demo_misc::add_ad_image('sidebar', 'td_default_ad_sidebar');
td_demo_misc::add_ad_image('custom_ad_1', 'td_default_ad_tablet');
td_demo_misc::add_ad_image('custom_ad_2', 'td_default_ad_full');


/*  ----------------------------------------------------------------------------
    sidebars
 */

//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_social_counter_widget',
	array (
		'facebook' => 'tagdiv',
		'twitter' => 'tagdivofficial',
		'youtube' => 'tagdiv',
		'border_top'=> 'no_border_top'
	)
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_ad_box_widget',
    array (
        'spot_title' => '- Advertisement -',
        'spot_id' => 'sidebar'
    )
);
td_demo_widgets::add_widget_to_sidebar('default', 'td_block_9_widget',
    array (
        'sort' => 'random_posts',
        'custom_title' => 'EDITOR PICKS',
        'limit' => '4',
        'header_color' => '',
        'ajax_pagination' => "next_prev"
    )
);



/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Fashion',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#e33a77'
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'New Look 2015',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Street Fashion',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'tdc_category_td_grid_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Style Hunter',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Vogue',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_6_id =td_demo_category::add_category(array(
    'category_name' => "Video",
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#5c69c1'
));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Tech',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#a444bd'
));
    $demo_cat_8_id =td_demo_category::add_category(array(
        'category_name' => 'Apple',
        'parent_id' => $demo_cat_7_id,
        'category_template' => '',
        'top_posts_style' => '',
        'tdc_category_td_grid_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#3baaf7'
    ));
    $demo_cat_9_id =td_demo_category::add_category(array(
        'category_name' => 'Entertainment',
        'parent_id' => $demo_cat_7_id,
        'category_template' => '',
        'top_posts_style' => '',
        'tdc_category_td_grid_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#3fbcd5'
    ));
    $demo_cat_10_id =td_demo_category::add_category(array(
        'category_name' => 'Gadgets',
        'parent_id' => $demo_cat_7_id,
        'category_template' => '',
        'top_posts_style' => '',
        'tdc_category_td_grid_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#2f9688'
    ));
    $demo_cat_11_id =td_demo_category::add_category(array(
        'category_name' => 'Internet',
        'parent_id' => $demo_cat_7_id,
        'category_template' => '',
        'top_posts_style' => '',
        'tdc_category_td_grid_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
        'tdc_color' => '#5aaf4a'
    ));
$demo_cat_12_id =td_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'tdc_category_td_grid_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'tdc_color' => '#4ac5db'
));



/*  ----------------------------------------------------------------------------
    pages
 */
//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'News',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '1',
    'homepage' => true
));
//menu dropdown homepages
$td_homepage_fashion_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Fashion',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_fashion.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '14',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_tech_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Tech',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_tech.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '12',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_sport_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Sport',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_sport.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '11',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_full_post_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Full Post Featured',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_full_post.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '2',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_infinite_scroll_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Infinite Scroll',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_infinite_scroll.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_newspaper_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Newspaper',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_newspaper.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '1',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_magazine_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Magazine',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_magazine.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_loop_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Loop',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_loop.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_big_slide_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Big Slide',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_big_slide.txt',
    'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '1',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_less_images_id = td_demo_content::add_page(array(
    'title' => 'Homepage - Less Images',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_less_images.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => false
));
//menu dropdown homepages
$td_homepage_random_id = td_demo_content::add_page(array(
	'title' => 'Homepage - Random',
	'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/homepage_random.txt',
	'template' => 'page-pagebuilder-latest.php',   // the page template full file name with .php, for default no extension needed
	'td_layout' => '',
	'homepage' => false
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
    'title' => 'Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));
td_demo_menus::add_mega_menu(array(
	'title' => 'Tech',
	'add_to_menu_id' => $td_demo_header_menu_id,
	'category_id' => $demo_cat_7_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Video',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id
));


// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Homepages',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_page(array(
    'title' => 'Homepage - Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_fashion_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Random',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_random_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Tech',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_tech_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Sport',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_sport_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Full Post Featured',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_full_post_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Infinite Scroll',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_infinite_scroll_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Newspaper',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_newspaper_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Magazine',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_magazine_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Loop',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_loop_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Big Slide',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_big_slide_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_page(array(
    'title' => 'Homepage - Less Images',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_less_images_id,
    'parent_id' => $parent_submenu_id
));

/*  ---------------------------------------------------------------------------
    posts
*/
// post in featured category
td_demo_content::add_post(array(
    'title' => 'Five things you may have missed over the weekend',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_3',
    'template' => ''
));
td_demo_content::add_post(array(
    'title' => 'Apple sells 10 million iPhone 6 and iPhone 6 Pluses',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_11',
    'template' => ''
));
td_demo_content::add_post(array(
    'title' => 'Experiencing the new Oculus Rift VR headset',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10',
    'template' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'What Do I Need To Make It In Business?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_5',
    'template' => ''
));
td_demo_content::add_post(array(
    'title' => 'Simple form creation and storage, built for developers.',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_13',
    'template' => 'single_template_3'
));
td_demo_content::add_post(array(
    'title' => "Robots helped inspire deep learning might become",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9',
    'template' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "Express Recipes: How to make Creamy Papaya Raita",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_15',
    'template' => ''
));
td_demo_content::add_post(array(
    'title' => "Apple Server Most Powerful rack optimized server",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_10',
    'template' => ''
));


//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Starbucks secret menu the drinks you didn’t know you can ask for",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Designer fashion show kicks off Variety Week",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "My microwave is too small to fit the microwave popcorn bag",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => "This watermelon I bought on a whim is pretty good, but I can definitely imagine a better one.",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "Modern Language Wars, PHP vs Python vs Ruby",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id,$demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_3'
));



//  ----------------------------------------------------------------------------
//  Mix Cat
td_demo_content::add_post(array(
    'title' => "Scalable code without bloat: DCI, Use Cases, and You",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => "Game of Hacks – See How Good You Are",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_14'
));
td_demo_content::add_post(array(
    'title' => 'Moogle Corp: Company you might be working for',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "Terraform – Cross PaaS configuration management?",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => "50 Tips and Insights About Productivity, Happiness, and Life",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => "After Effects Guru: Tracking and Stabilizing Footage",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_18'
));
td_demo_content::add_post(array(
    'title' => "After Effects Guru: Tracking and Stabilizing Footage",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));


//  ----------------------------------------------------------------------------
//
td_demo_content::add_post(array(
    'title' => "Cheryl Steals Kate Middleton’s Beauty Icon Status",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "We Found the Sexiest Lingerie on the Internet",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "The 5 New Watch Trends To Try Now",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => "The 10 Runway Trends You’ll Be Wearing This Year",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "We Found the Sexiest Lingerie on the Internet",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => "Home Run Kitten Favored in Competitive San Simeon",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_15'
));
td_demo_content::add_post(array(
    'title' => "WhatsApp’s Android app gets a Material Design makeover",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "OneNote for iOS and Mac lets you attach files",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "SSL Connectivity for all Central Repository users Underway",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "The future steps of Scala – What to expect from upcoming releases",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => 'I built an app that does triangulation of points on the earth',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "Sandbox to try out the code written in almost all languages",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => "10 Ways to Make Extra Money as a Graphic Designer",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_16'
));
td_demo_content::add_post(array(
    'title' => "Erik Jones has day he won’t soon forget as Denny backup",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_6'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Beginner: Are you stuck in programming should not do",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_13'
));
td_demo_content::add_post(array(
    'title' => "Facebook is open sourcing dfuse, D language bindings for FUSE",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_14'
));
td_demo_content::add_post(array(
    'title' => 'A first glimpse at Java 9: Early access release of JDK9 on OpenJDK',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "Show HN: ResMaps – See who is viewing your resume are looking",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "Thinklab – Building a startup team to fix science and government",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "Design better graphics with The Premium Photoshop Add-On Bundle",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_17'
));
td_demo_content::add_post(array(
    'title' => "What happens when your carryon is over the limit",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "StreetScore scores a street view based on how safe it looks to a human",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => "Mathematica 10 released on Raspberry Pi",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "50 Tips and Insights About Productivity, Happiness, and Life",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "Show HN: Full Stack Entrepreneur – A Full Stack Guide To Entrepreneurship",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => "Kim Kardashian Shows Off Deep Cleavage In Plunging Top & Mini",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_8'
));
td_demo_content::add_post(array(
    'title' => "7 unique egg decorating ideas for you to try this Easter",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_18'
));
td_demo_content::add_post(array(
    'title' => "Lollapalooza 2014: Chromeo – Interview with Dave 1 and P-Thugg",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => 'Why you should choose Microsoft over Linux',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Going Beyond Amazon: A New Model for Authors, Retailers, and Publishers",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => "Wind and solar power are even more expensive than is commonly thought",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_2',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Building an API in 60 seconds, without any server setup',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));
td_demo_content::add_post(array(
    'title' => "FCC chair accuses Verizon of throttling unlimited data to boost profits",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_13'
));
td_demo_content::add_post(array(
    'title' => "Bayside Ranch a perfect canvas for interior designer 2016",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_15'
));
td_demo_content::add_post(array(
    'title' => "Workout Routine for Big Forearms and a Crushing Grip",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_5'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "UK to allow driverless cars on public roads in January",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_14'
));
td_demo_content::add_post(array(
    'title' => "Let’s Build a Traditional City and Make a Profit",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => 'Building a Gimbal in Rust: An Introduction',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));
td_demo_content::add_post(array(
    'title' => "How Internet Providers Get Around War Zones",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));
td_demo_content::add_post(array(
    'title' => "Audio Tour App Detour Steers You Away from the Typical Tourist Traps",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_4',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "How To Use Basic Design Principles To Decorate Your Home",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_16'
));
td_demo_content::add_post(array(
    'title' => "The dangers of eating too much restaurant food",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_15'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Announcing a specification for PHP",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));
td_demo_content::add_post(array(
    'title' => 'Show HN: Appsites – Beautiful websites for mobile',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => "How to drive growth through customer support",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));
td_demo_content::add_post(array(
    'title' => 'The Ideal Length of Everything Online, Backed by Research',
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_8',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "The hand rail is going a little faster than the moving sidewalk.",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));
td_demo_content::add_post(array(
    'title' => "Creative decorating with houseplants, from floor to ceiling",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_17'
));
td_demo_content::add_post(array(
    'title' => "Melbourne calling: Three reasons why you should visit it",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

//  ----------------------------------------------------------------------------
td_demo_content::add_post(array(
    'title' => "Marriott Plays With Sensory-Rich Virtual Reality Getaways",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_10'
));
td_demo_content::add_post(array(
    'title' => "Android L Will Keep Your Secrets Safer",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => "Gadget Ogling: Amazon on Fire, Virtual Reality, True Nature and Energy Relief",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2',
    'template' => 'single_template_8',
    'featured_video_url' => 'https://www.youtube.com/watch?v=TUdVeZ1pbuc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => "My work only allows Internet Explorer, so I have to manually",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));
td_demo_content::add_post(array(
    'title' => "Xbox One to launch in China this month after all",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_1'
));
td_demo_content::add_post(array(
    'title' => "SpringFest One Fashion Show at the University of Michigan",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_18'
));
td_demo_content::add_post(array(
    'title' => "Health star ratings Kellogg reveals the cereal",
    'file' => TDC_PATH_LEGACY . '/includes/demos/default/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));