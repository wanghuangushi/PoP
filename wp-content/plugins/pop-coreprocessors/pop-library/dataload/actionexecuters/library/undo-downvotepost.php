<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Data Load Library
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class GD_UndoDownvotePost extends GD_DownvoteUndoDownvotePost {

	protected function validate(&$errors, $form_data) {

		parent::validate($errors, $form_data);

		if (!$errors) {

			$vars = GD_TemplateManager_Utils::get_vars();
			$user_id = $vars['global-state']['current-user-id']/*get_current_user_id()*/;
			$target_id = $form_data['target_id'];

			// Check that the logged in user does currently follow that user
			$value = GD_MetaManager::get_user_meta($user_id, GD_METAKEY_PROFILE_DOWNVOTESPOSTS);
			if (!in_array($target_id, $value)) {
				
				$errors[] = sprintf(
					__('You had not down-voted <em><strong>%s</strong></em>.', 'pop-coreprocessors'),
					get_the_title($target_id)
				);
			}
		}
	}

	/**
	 * Function to override
	 */
	protected function additionals($target_id, $form_data) {

		parent::additionals($target_id, $form_data);
		do_action('gd_undodownvotepost', $target_id, $form_data);
	}

	protected function update($form_data) {

		$vars = GD_TemplateManager_Utils::get_vars();
		$user_id = $vars['global-state']['current-user-id']/*get_current_user_id()*/;
		$target_id = $form_data['target_id'];

		// Update value
		GD_MetaManager::delete_user_meta($user_id, GD_METAKEY_PROFILE_DOWNVOTESPOSTS, $target_id);
		GD_MetaManager::delete_post_meta($target_id, GD_METAKEY_POST_DOWNVOTEDBY, $user_id);

		// Update the count
		$count = GD_MetaManager::get_post_meta($target_id, GD_METAKEY_POST_DOWNVOTECOUNT, true);
		GD_MetaManager::update_post_meta($target_id, GD_METAKEY_POST_DOWNVOTECOUNT, ($count - 1), true);

		return parent::update($form_data);
	}

	/**
	 * Function to be called by the opposite function (Up-vote/Down-vote)
	 */
	function undo($form_data) {

		return $this->update($form_data);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialize
 * ---------------------------------------------------------------------------------------------------------------*/
global $gd_undodownvotepost;
$gd_undodownvotepost = new GD_UndoDownvotePost();