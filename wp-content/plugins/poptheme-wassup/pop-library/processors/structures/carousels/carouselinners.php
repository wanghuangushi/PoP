<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_CAROUSELINNER_USERS', PoP_TemplateIDUtils::get_template_definition('carouselinner-users'));

define ('POP_HOOK_CAROUSEL_USERS_GRIDCLASS', 'carousel-users-gridclass');

class GD_Template_Processor_CustomCarouselInners extends GD_Template_Processor_CarouselInnersBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_CAROUSELINNER_USERS,
		);
	}

	function get_layout_grid($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSELINNER_USERS:

				return array(
					'row-items' => 12, 
					// Allow ThemeStyle Expansive to change the class
					'class' => apply_filters(POP_HOOK_CAROUSEL_USERS_GRIDCLASS, 'col-xs-4 col-sm-2 no-padding'),
					'divider' => 12
				);
		}

		return parent::get_layout_grid($template_id, $atts);
	}

	function get_layouts($template_id) {

		$ret = parent::get_layouts($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_CAROUSELINNER_USERS:

				$ret[] = GD_TEMPLATE_LAYOUT_POPOVER_USER_AVATAR;
				break;
		}

		return $ret;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_CustomCarouselInners();