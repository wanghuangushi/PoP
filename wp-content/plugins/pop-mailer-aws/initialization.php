<?php
class PoP_Mailer_AWS_Initialization {

	function initialize(){

		/**---------------------------------------------------------------------------------------------------------------
		 * Load the configuration
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'config/load.php';

		/**---------------------------------------------------------------------------------------------------------------
		 * Load the Plug-ins Library
		 * ---------------------------------------------------------------------------------------------------------------*/
		require_once 'plugins/load.php';
	}
}