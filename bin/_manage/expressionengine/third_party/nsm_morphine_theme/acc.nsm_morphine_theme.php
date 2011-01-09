<?php
/**
 * NSM Morphine Theme Accessory
 *
 * @package			NsmMorphineTheme
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-morphine-theme
 * @see				http://expressionengine.com/public_beta/docs/development/accessories.html
 */

class Nsm_morphine_theme_acc 
{
	var $name	 		= 'NSM Morphine theme';
	var $id	 			= 'nsm_morphine_theme';
	var $version	 	= '1.0.0';
	var $description	= 'Accessory for NSM Morphine theme.';
	var $sections	 	= array();

	/**
	* Set Sections
	*
	* Set content for the accessory
	*
	* @access	public
	* @return	void
	*/
	function set_sections()
	{
		$EE =& get_instance();

		$theme_folder_url = $EE->config->item('theme_folder_url');

		if (substr($theme_folder_url, -1) != '/')
			$theme_folder_url .= '/';

		$theme_folder_url .= "third_party/nsm_morphine_theme/";

		$EE->cp->add_to_head('<link rel="stylesheet" type="text/css" href="'.$theme_folder_url.'styles/screen.css" />');

		$js_libs = array('NSM_MagicCheckboxes', 'NSM_Stripeable',
		                'NSM_UpdateInputsOnChange', 'NSM_Cloneable', 'NSM_Navigation',
		                'tablednd.0.5', 'behaviours');

		foreach ($js_libs as $lib)
    	    $EE->cp->add_to_head('<script type="text/javascript" charset="utf-8" src="'.$theme_folder_url.'scripts/jquery.'.$lib.'.js"></script>');

		$this->sections[] = '<script type="text/javascript" charset="utf-8">$("#accessoryTabs a.nsm_morphine_theme").parent().remove();</script>';
	}
}