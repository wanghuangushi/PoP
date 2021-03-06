<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_Template_Processor_PostAdditionalLayoutsBase extends GD_Template_ProcessorBase {

	function get_template_source($template_id, $atts) {
	
		return GD_TEMPLATESOURCE_LAYOUT_POSTADDITIONAL_MULTILAYOUT_LABEL;
	}

	function get_data_fields($template_id, $atts) {
	
		return array('post-type', 'cat');
	}

	function init_atts($template_id, &$atts) {

		$this->append_att($template_id, $atts, 'class', 'pop-multilayout-label');		
		return parent::init_atts($template_id, $atts);
	}
}