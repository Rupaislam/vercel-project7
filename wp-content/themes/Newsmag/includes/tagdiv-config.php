<?php

/**
 * Theme configuration
 *
 */

define("TD_THEME_NAME", "Newsmag");
define("TD_THEME_VERSION", "5.4.2");
define("TD_THEME_OPTIONS_NAME", "td_010");

//if no deploy mode is selected, we use the final deploy built
if (!defined('TD_DEPLOY_MODE')) {
    define("TD_DEPLOY_MODE", 'deploy');
}


switch (TD_DEPLOY_MODE) {
    default:
        //deploy version - this is the version that we ship!
        define("TD_DEBUG_LIVE_THEME_STYLE", false);
        define("TD_DEBUG_IOS_REDIRECT", false);
        define("TD_DEBUG_USE_LESS", false);
        break;

    case 'dev':
        //dev version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        define("TD_DEBUG_IOS_REDIRECT", false);
        define("TD_DEBUG_USE_LESS", true); //use less on dev
        break;

    case 'demo':
        //demo version
        define("TD_DEBUG_LIVE_THEME_STYLE", true);
        ///this was changed to false because it doesn't remove the iframe anymore
        define("TD_DEBUG_IOS_REDIRECT", false); // remove themeforest iframe from ios devices on demo only!
        define("TD_DEBUG_USE_LESS", false);
        break;
}


class tagdiv_config {

	/**
	 * setup the global theme specific variables
	 * @depends tagdiv_global
	 */
	static function on_tagdiv_global_after_config() {

		/**
		 * theme plugins
		 */
		tagdiv_global::$theme_plugins_for_info_list = array (
			array(
				'name' => 'Revolution Slider',
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/rev-slider.png',
				'text' => 'Build amazing slide presentations for your website with ease<br><a href="https://forum.tagdiv.com/how-to-install-revolution-slider-v5/" target="_blank">How to install v5</a>',
				'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
				'slug' => 'revslider',
                'td_show_in_theme_plugins' => false, // custom field used to show the plugin in theme's plugins list
            ),
			array(
				'name' => 'Visual Composer',
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/visual-composer.png',
				'text' => 'Customize your pages and posts with this popular page builder<br><a href="https://forum.tagdiv.com/how-to-use-visual-composer/" target="_blank">Read more</a>',
				'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
				'slug' => 'js_composer',
                'td_show_in_theme_plugins' => false, // custom field used to show the plugin in theme's plugins list
            )
		);
		tagdiv_global::$theme_plugins_list = array(
			array(
				'name' => 'tagDiv Composer', // The plugin name
				'slug' => 'td-composer', // The plugin slug (typically the folder name)
				'source' => 'https://cloud.tagdiv.com/td_plugins/td-composer/f09a2553c2f758cf35a47c65e9bef969/td-composer.zip', // The plugin source
				'required' => true, // If false, the plugin is only 'recommended' instead of required
				'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' => '', // If set, overrides default API URL and points to an external URL
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/td-composer.png',
				'text' => 'Create beautiful pages with this custom frontend drag and drop builder<br><a href="https://forum.tagdiv.com/tagdiv-composer-tutorial/" target="_blank">Read more</a>',
				'required_label' => 'required', //the text for required/recommended label - used also as a class for label bg color
				'td_activate' => false, // custom field used to activate the plugin
				'td_install' => false, // custom field used to install the plugin
				'td_class' => 'tdc_version_check', // class used to recognize the plugin is activated
				'td_install_in_welcome' => true, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            ),
			array(
				'name' => 'tagDiv Social Counter', // The plugin name
				'slug' => 'td-social-counter', // The plugin slug (typically the folder name)
				'source' => 'https://cloud.tagdiv.com/td_plugins/td-social-counter/2ed7fe863d425d73a6ed286703ee234b/td-social-counter.zip', // The plugin source
				'required' => true, // If false, the plugin is only 'recommended' instead of required
				'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' => '', // If set, overrides default API URL and points to an external URL
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/social.png',
				'text' => 'Display your activity on social networks with style using this cool feature<br><a href="https://forum.tagdiv.com/tagdiv-social-counter-tutorial/" target="_blank">Read more</a>',
				'required_label' => 'required', //the text for required/recommended label - used also as a class for label bg color
				'td_activate' => false, // custom field used to activate the plugin
				'td_install' => false, // custom field used to install the plugin
				'td_class' => 'td_social_counter_plugin', // class used to recognize the plugin is activated
				'td_install_in_welcome' => true, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            ),
			array(
				'name' => 'tagDiv Newsletter', // The plugin name
				'slug' => 'td-newsletter', // The plugin slug (typically the folder name)
				'source' => 'https://cloud.tagdiv.com/td_plugins/td-newsletter/34a5749be48de23015036cdfbdca02e1/td-newsletter.zip', // The plugin source
				'required' => false, // If false, the plugin is only 'recommended' instead of required
				'version' => '1.0.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' => '', // If set, overrides default API URL and points to an external URL
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/tagdiv-newsletter.png',
				'text' => 'tagDiv\'s Newsletter plugin, beautifully designed with over 8 styles',
				'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
				'td_activate' => false, // custom field used to activate the plugin
				'td_install' => false, // custom field used to install the plugin
				'td_class' => 'td_newsletter_version_check', // class used to recognize the plugin is activated
				'td_install_in_welcome' => false, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            ),
            array(
                'name' => 'tagDiv Opt-In Builder', // The plugin name
                'slug' => 'td-subscription', // The plugin slug (typically the folder name)
                'source' => 'https://cloud.tagdiv.com/td_plugins/td-subscription/td-subscription.zip', // The plugin source
                'required' => false, // If false, the plugin is only 'recommended' instead of required
                'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
                'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
                'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
                'external_url' => '', // If set, overrides default API URL and points to an external URL
                'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/tagdiv-optin.png',
                'text' => 'Generate leads & convert visitors to subscribers with opt-in content lockers',
                'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
                'td_activate' => false, // custom field used to activate the plugin
                'td_install' => false, // custom field used to install the plugin
                'td_class' => 'tds_version_check', // class used to recognize the plugin is activated
                'td_install_in_welcome' => false, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            ),
			array(
				'name' => 'tagDiv Mobile Theme', // The plugin name
				'slug' => 'td-mobile-plugin', // The plugin slug (typically the folder name)
				'source' => 'https://cloud.tagdiv.com/td_plugins/td-mobile-plugin/cd46972e145ee7f8326f48bd537ad46c/td-mobile-plugin.zip', // The plugin source
				'required' => false, // If false, the plugin is only 'recommended' instead of required
				'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url' => '', // If set, overrides default API URL and points to an external URL
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/mobile.png',
				'text' => 'Make your website lighter and faster on all mobile devices<br><a href="https://forum.tagdiv.com/the-mobile-theme/" target="_blank">Read more</a>',
				'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
				'td_activate' => false, // custom field used to activate the plugin
				'td_install' => false, // custom field used to install the plugin
				'td_class' => 'td_mobile_theme', // class used to recognize the plugin is activated
				'td_install_in_welcome' => false, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            ),
			array(
				'name' => 'Official AMP for WP', // The plugin name
				'slug' => 'amp', // The plugin slug (typically the folder name)
				'required' => false, // If false, the plugin is only 'recommended' instead of required
				'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				'img' => get_template_directory_uri() . '/includes/wp-booster/wp-admin/images/plugins/tagdiv-amp.png',
				'text' => 'Mobile Theme requires the AMP plugin to give your site the best results<br><a href="https://tagdiv.com/amp-newspaper-theme/" target="_blank">Read more</a>',
				'required_label' => 'optional', //the text for required/recommended label - used also as a class for label bg color
				'td_class' => 'AMP_Autoloader', // class used to recognize the plugin is activated
				'td_install_in_welcome' => false, // custom field used to install/update/activate the plugin from theme welcome panel
                'td_show_in_theme_plugins' => true, // custom field used to show the plugin in theme's plugins list
                'td_demo_plugin' => false, // custom field used to show the plugin in theme's plugins list
            )
		);
	}
}
