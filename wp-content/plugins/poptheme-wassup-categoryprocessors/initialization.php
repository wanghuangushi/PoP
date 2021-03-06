<?php
class PoPTheme_Wassup_CategoryProcessors_Initialization {

	function initialize(){

		load_plugin_textdomain('poptheme-wassup-categoryprocessors', false, dirname(plugin_basename(__FILE__)).'/languages');

		// Set the plugin namespace for the processors
		PoP_TemplateIDUtils::set_namespace('ad');
		
		/**---------------------------------------------------------------------------------------------------------------
		 * Global Variables and Configuration
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'config/load.php';

		/**---------------------------------------------------------------------------------------------------------------
		 * Load the PoP Library
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'pop-library/load.php';

		/**---------------------------------------------------------------------------------------------------------------
		 * Load the Plugins Library
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'plugins/load.php';
	
		if (!is_admin()) {

			// After PoPTheme MESYM
			add_action('wp_print_styles', array($this, 'register_styles'), 110);
		}
	}

	function register_styles() {

		// Only if not doing code splitting then load the resources. Otherwise, the resources will be loaded by the ResourceLoader
		if (!PoP_Frontend_ServerUtils::use_code_splitting()) {

			$css_folder = POPTHEME_WASSUP_CATEGORYPROCESSORS_URL.'/css';
			$dist_css_folder = $css_folder . '/dist';
			
			if (PoP_Frontend_ServerUtils::use_bundled_resources()) {

				$bundles_css_folder = $dist_css_folder . '/bundles';
				wp_register_style('poptheme-wassup-categoryprocessors', $bundles_css_folder . '/poptheme-wassup-categoryprocessors.bundle.min.css', array('bootstrap'), POPTHEME_WASSUP_CATEGORYPROCESSORS_VERSION);
				wp_enqueue_style('poptheme-wassup-categoryprocessors');
			}
			else {

				$libraries_css_folder = (PoP_Frontend_ServerUtils::use_minified_resources() ? $dist_css_folder : $css_folder).'/libraries';
				$suffix = PoP_Frontend_ServerUtils::use_minified_resources() ? '.min' : '';

				wp_register_style('poptheme-wassup-categoryprocessors-layout', $libraries_css_folder.'/category-layout'.$suffix.'.css', array('bootstrap'), POPTHEME_WASSUP_CATEGORYPROCESSORS_VERSION);
				wp_enqueue_style('poptheme-wassup-categoryprocessors-layout');
			}
		}
	}
}