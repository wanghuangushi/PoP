<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_Template_Processor_AlertsBase extends GD_Template_ProcessorBase {

	function get_template_source($template_id, $atts) {

		return GD_TEMPLATESOURCE_ALERT;
	}

	function get_layout($template_id) {

		return null;
	}

	function get_modules($template_id) {
	
		$ret = parent::get_modules($template_id);

		$ret[] = $this->get_layout($template_id);
		
		return $ret;
	}

	function get_template_configuration($template_id, $atts) {

		$ret = parent::get_template_configuration($template_id, $atts);
	
		global $gd_template_processor_manager;
		
		$ret[GD_JS_TITLES/*'titles'*/] = array(
			'dismiss' => __('Dismiss', 'pop-coreprocessors')
		);

		$layout = $this->get_layout($template_id);
		$ret[GD_JS_SETTINGSIDS/*'settings-ids'*/]['layout'] = $gd_template_processor_manager->get_processor($layout)->get_settings_id($layout);
		
		return $ret;
	}

	function get_block_jsmethod($template_id, $atts) {

		$ret = parent::get_block_jsmethod($template_id, $atts);	
		$this->add_jsmethod($ret, 'cookies');		
		return $ret;
	}
}
