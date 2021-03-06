<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_CAROUSEL_EVENTS', PoP_TemplateIDUtils::get_template_definition('carousel-events'));
define ('GD_TEMPLATE_CAROUSEL_AUTHOREVENTS', PoP_TemplateIDUtils::get_template_definition('carousel-authorevents'));
define ('GD_TEMPLATE_CAROUSEL_TAGEVENTS', PoP_TemplateIDUtils::get_template_definition('carousel-tagevents'));

class GD_EM_Template_Processor_CustomCarousels extends GD_Template_Processor_CarouselsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_CAROUSEL_EVENTS,
			GD_TEMPLATE_CAROUSEL_AUTHOREVENTS,
			GD_TEMPLATE_CAROUSEL_TAGEVENTS,
		);
	}

	function init_atts($template_id, &$atts) {
			
		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_EVENTS:
			case GD_TEMPLATE_CAROUSEL_AUTHOREVENTS:
			case GD_TEMPLATE_CAROUSEL_TAGEVENTS:

				$this->append_att($template_id, $atts, 'class', 'slide');
				$this->append_att($template_id, $atts, 'class', 'widget widget-info');
				break;
		}
		
		return parent::init_atts($template_id, $atts);
	}

	function get_inner_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_EVENTS:

				return GD_TEMPLATE_CAROUSELINNER_EVENTS;

			case GD_TEMPLATE_CAROUSEL_AUTHOREVENTS:

				return GD_TEMPLATE_CAROUSELINNER_AUTHOREVENTS;

			case GD_TEMPLATE_CAROUSEL_TAGEVENTS:

				return GD_TEMPLATE_CAROUSELINNER_TAGEVENTS;
		}

		return parent::get_inner_template($template_id);
	}

	function get_mode($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_EVENTS:
			case GD_TEMPLATE_CAROUSEL_AUTHOREVENTS:
			case GD_TEMPLATE_CAROUSEL_TAGEVENTS:

				return 'static';
		}

		return parent::get_mode($template_id, $atts);
	}


	function get_controls_top_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSEL_EVENTS:

				return GD_TEMPLATE_CAROUSELCONTROLS_EVENTS;

			case GD_TEMPLATE_CAROUSEL_AUTHOREVENTS:

				return GD_TEMPLATE_CAROUSELCONTROLS_AUTHOREVENTS;

			case GD_TEMPLATE_CAROUSEL_TAGEVENTS:

				return GD_TEMPLATE_CAROUSELCONTROLS_TAGEVENTS;
		}

		return parent::get_controls_top_template($template_id);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_EM_Template_Processor_CustomCarousels();