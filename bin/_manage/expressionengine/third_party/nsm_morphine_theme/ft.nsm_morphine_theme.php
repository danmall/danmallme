<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Morphine Theme Fieldtype
 *
 * @package			NsmMorphineTheme
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com>
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-example-addon
 * @see				http://expressionengine.com/public_beta/docs/development/fieldtypes.html
 */

class Nsm_morphine_theme_ft extends EE_Fieldtype
{
	/**
	 * Field info - Required
	 * 
	 * @access public
	 * @var array
	 */
	public $info = array(
		'name'		=> 'NSM Morphine Theme',
		'version'	=> '1.0.0'
	);

	/**
	 * The field settings array
	 * 
	 * @access public
	 * @var array
	 */
	public $settings = array();

	/**
	 * The field type - used for form field prefixes. Must be unique and match the class name. Set in the constructor
	 * 
	 * @access private
	 * @var string
	 */
	private $field_type = '';

	/**
	 * Constructor
	 * 
	 * @access public
	 * 
	 * Calls the parent constructor
	 * Sets the tiny_mce_config_path using the PATH_THRID variable
	 */
	public function __construct()
	{
		parent::EE_Fieldtype();
		$this->field_type = strtolower(substr(__CLASS__, 0, -3));
	}

	/**
	 * Display the field in the publish form
	 * 
	 * @access public
	 * @param $data String Contains the current field data. Blank for new entries.
	 * @return String The custom field HTML
	 * 
	 * Includes the TinyMCE base script and the field specific configuration.
	 * Returns a standard textarea with a configuration specific class
	 * 
	 * $this->settings = 
	 *  Array
	 *  (
	 *      [field_id] => Nsm_morphine_theme__Nsm_morphine_theme
	 *      [field_label] => NSM Better Meta
	 *      [field_required] => n
	 *      [field_data] => 
	 *      [field_list_items] => 
	 *      [field_fmt] => 
	 *      [field_instructions] => 
	 *      [field_show_fmt] => n
	 *      [field_pre_populate] => n
	 *      [field_text_direction] => ltr
	 *      [field_type] => Nsm_morphine_theme
	 *      [field_name] => Nsm_morphine_theme__Nsm_morphine_theme
	 *  )
	 */
	public function display_field($data)
	{
		$EE =& get_instance();
		$EE->lang->loadfile('nsm_morphine_theme');
		

		$theme_folder_url = $EE->config->item('theme_folder_url');
		
		if (substr($theme_folder_url, -1) != '/')
			$theme_folder_url .= '/';

		if($theme = $EE->config->item('member_theme'))
			$theme .= "/";

		$theme_folder_url .= "cp_themes/" . $theme . "nsm_morphine/";

		$out = "<div class='mor cf'>";
		$out .= $this->EE->load->view('alerts/index', array(), TRUE);
		$out .= $this->EE->load->view('tables/index', array(), TRUE);
		$out .= "</div>";
		
		return $out;
	}
}