<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Morphine Theme Tab
 *
 * @package			NsmMorphineTheme
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com>
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-morphine-theme
 * @see				http://expressionengine.com/public_beta/docs/development/modules.html#tab_file
 */
class Nsm_morphine_theme_tab
{
	public function __construct(){}

	/**
	 * This function creates the fields that will be displayed on the publish page. It must return $settings, a multidimensional associative array specifying the display settings and values associated with each of your custom fields.
	 *
	 * The settings array:
	 * field_id: The name of the field
	 * field_type: The field type
	 * field_label: The field label- typically a language variable is used here
	 * field_instructions: Instructions for the field
	 * field_required: Indicates whether to include the 'required' class next to the field label: y/n
	 * field_data: The current data, if applicable
	 * field_list_items: An array of options, otherwise an empty string.
	 * options: An array of options, otherwise an empty string.
	 * selected: The selected value if applicable to the field_type
	 * field_fmt: Allowed field format options, if applicable: an associative array or empty string.
	 * field_show_fmt: Determines whether the field format dropdown shows: y/n. Note- if 'y', you must specify the options available in field_fmt
	 * field_pre_populate: Allows you to pre-populate a field when it is a new entry.
	 * field_text_direction: The direction of the text: ltr/rtl
	 *
	 * @param int $channel_id The channel_id the entry is currently being created in
	 * @param mixed $entry_id The entry_id if an edit, false for new entries
	 * @return array The settings array
	 */
	public function publish_tabs($channel_id, $entry_id = FALSE)
	{
		$field_settings[] = array(
					'field_id'             => 'nsm_morphine_theme',
					'field_label'          => "NSM Morphine Theme",
					'field_required'       => 'n',
					'field_data'           => '',
					'field_list_items'     => '',
					'field_fmt'            => '',
					'field_instructions'   => '',
					'field_show_fmt'       => 'n',
					'field_pre_populate'   => 'n',
					'field_text_direction' => 'ltr',
					'field_type'           => 'nsm_morphine_theme'
				);

		return $field_settings;
	}

	/**
	 * Allows you to validate the data after the publish form has been submitted but before any additions to the database. Returns FALSE if there are no errors, an array of errors otherwise.
	 *
	 * @param $params  multidimensional associative array containing all of the data available on the current submission.
	 * @return mixed Returns FALSE if there are no errors, an array of errors otherwise
	 */
	public function validate_publish()
	{
		return TRUE;
	}

	/**
	 * Allows the insertion of data after the core insert/update has been done, thus making available the current $entry_id. Returns nothing.
	 *
	 * @param array $params an associative array, the top level arrays consisting of: 'meta', 'data', 'mod_data', and 'entry_id'.
	 * @return void
	 */
	public function publish_data_db($params)
	{
	}

	/**
	 * Called near the end of the entry delete function, this allows you to sync your records if any are tied to channel entry_ids. Returns nothing.
	 *
	 * @param array $entry_ids The deleted entries
	 * @return void
	 */
	public function publish_data_delete_db($params)
	{
	}
} // END publiclass