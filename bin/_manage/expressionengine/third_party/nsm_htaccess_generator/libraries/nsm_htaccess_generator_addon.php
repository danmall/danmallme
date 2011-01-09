<?php
/**
 * NSM .htaccess Generator Display
 * 
 * Usage:
 * 
 * $this->EE->load->library("nsm_example_addon_addon", null, "nsm_example_addon"); // or
 * $this->EE->load->library("{$this->addon_id}_addon", null, $this->addon_id);
 *
 * #  Add the custom field stylesheet to the header 
 * $this->EE->nsm_example_addon->addCSS('custom_field.css');
 * 
 * # Load the JS for the iframe
 * $this->EE->nsm_example_addon->addJS('custom_field.js');
 * $this->EE->nsm_example_addon->addJS('../lib/jquery.cookie.js');
 * 
 * @package			NsmExampleAddon
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-example-addon
 */

class Nsm_htaccess_generator_addon{

	/**
	 * The addon ID
	 *
	 * @access private
	 * @var string
	 */
	private $addon_id;

	/**
	 * Constructs the class and sets the addon id
	 */
	public function __construct(){
		$this->addon_id = strtolower(substr(__CLASS__, 0, -8));
	}

	/**
	 * Adds CSS to the CP
	 * 
	 * @access public
	 * @return void
	 * @var $css string The CSS filepath or content
	 * @var $options array The options for this include
	 */
	public function addCSS($css, $options = array())
	{
		$options = array_merge(array(
			"where" => "head",
			"type" => "css",
		), $options);
		$this->addThemeAsset($css, $options);
	}

	/**
	 * Adds JS to the CP
	 * 
	 * @access public
	 * @return void
	 * @var $js string The JS filepath or content
	 * @var $options array The options for this include
	 */
	public function addJS($js, $options = array())
	{
		$options = array_merge(array(
			"where" => "foot",
			"type" => "js",
		), $options);
		$this->addThemeAsset($js, $options);
	}

	/**
	 * Adds either CSS or JS to the CP
	 * 
	 * @access public
	 * @return void
	 * @var $content string The CSS/JS content or filepath
	 * @var $options array The options for this include
	 */
	public function addThemeAsset($content, $options)
	{
		$EE =& get_instance();

		$options = array_merge(array(
			"where" => "head",
			"type" => "css",
			"file" => TRUE,
			"theme_url" => $this->_getThemeURL()
		), $options);

		switch ($options["type"]) {
			case 'css':
				if($options["file"])
					$content = '<link rel="stylesheet" type="text/css" href="'.$options["theme_url"] . "/styles/" . $content.'" />';
				else
					$content = '<style type="text/css" media="screen">'.$content.'</style>';
				break;
			
			case 'js':
				if($options["file"])
					$content = '<script type="text/javascript" charset="utf-8" src="'.$options["theme_url"] . "/scripts/" . $content.'"></script>';
				else
					$content = '<script type="text/javascript" charset="utf-8">'.$content.'</script>';
				break;
		}

		$method = "add_to_".$options["where"];
		$EE->cp->$method($content);

	}

	/**
	 * Get the current themes URL from the theme folder + / + the addon id
	 * 
	 * @access private
	 * @return string The theme URL
	 */
	private function _getThemeUrl()
	{
		$EE =& get_instance();
		if(!isset($EE->session->cache[$this->addon_id]['theme_url']))
		{
			$theme_url = $EE->config->item('theme_folder_url');
			if (substr($theme_url, -1) != '/') $theme_url .= '/';
			$theme_url .= "third_party/" . $this->addon_id;
			$EE->session->cache[$this->addon_id]['theme_url'] = $theme_url;
		}
		return $EE->session->cache[$this->addon_id]['theme_url'];
	}

	/**
	 * Creates a select box
	 *
	 * @access public
	 * @param string $input_name The name of the input eg: Lg_polls_ext[log_ip]
	 * @param array $select_options The select box options in a multi-dimensional array. Array keys are used as the option label, array values are used as the option value
	 * @param mixed $selected_options The selected value or an array of values
	 * @param array $options Optional arguments.
	 * @return string Select box html
	 */
	public function selectbox($input_name, array $select_options, $selected_options, array $options = array())
	{
		$valid_options = array(
			"input_id" => FALSE,
			"use_lang" => TRUE,
			"value_is_label" => FALSE,
			"attributes" => array()
		);

		foreach ($valid_options as $option => $default_value)
		{
			$$option = (isset($options[$option])) ? $options[$option] : $default_value;
		}
		
		$input_id = ($input_id === FALSE) ? str_replace(array("[]", "[", "]"), array("", "_", ""), $input_name) : $input_id;

		$attributes = array_merge(array(
			"name" => $input_name,
			"id" => $input_id
		), $attributes);

		$attributes_str = "";
		foreach ($attributes as $key => $value)
			$attributes_str .= " {$key}='{$value}' ";

		$ret = "<select{$attributes_str}>";

		foreach($select_options as $option_label => $option_value)
		{
			$option_label = ($value_is_label && $option_value) ? lang($option_value) : $option_label;
			// print($selected. ":" .$option_value . "<br />");
			if(!is_array($selected_options))
				$selected_options = array($selected_options);

			foreach ($selected_options as $selected_value)
			{
				$selected = ($selected_value === $option_value) ? " selected='selected' " : "";
				if($selected) continue;
			}
			$ret .= "<option value='{$option_value}'{$selected}>{$option_label}</option>";
		}

		$ret .= "</select>";
		return $ret;
	}


	/**
	 * Creates a checkbox w/ optional label
	 *
	 * @access public
	 * @param string $input_name The name of the input eg: Lg_polls_ext[log_ip]
	 * @param string $input_label The label for the input eg: Polls
	 * @param boolean $checked Is the checkbox checked
	 * @param array $options Optional arguments
	 * @return string Checkbox html
	 */
 	public function checkbox($input_name, $input_value, $checked, array $options = array())
	{

		$valid_options = array(
			"input_id" => FALSE,
			"generate_shadow" => FALSE,
			"shadow_value" => FALSE,
			"attributes" => array(),
			"label" => FALSE
		);

		foreach ($valid_options as $option => $default_value)
		{
			$$option = (isset($options[$option])) ? $options[$option] : $default_value;
		}

		$input_id = ($input_id === FALSE) ? str_replace(array("[]", "[", "]"), array("", "_", ""), $input_name) : $input_id;

		$checked = ($checked == TRUE) ? "checked='checked'" : "";

		$attributes = array_merge(array(
			"name" => $input_name,
			"id" => $input_id,
			"value" => $input_value,
		), $attributes);

		$attributes_str = "";
		foreach ($attributes as $key => $value)
		{
			$attributes_str .= " {$key}='{$value}' ";
		}

		$ret = '<input type="checkbox" '. $attributes_str . $checked . ' />';

		if($label !== FALSE)
		{
			$ret = '<label class="checkbox" for="'.$input_id.'">' . $ret . ' ' . lang($label) . '</label>';
		}

		if ($generate_shadow != FALSE)
		{
			$ret = '<input type="hidden" name="' . $input_name . '" value="'.$shadow_value.'" />' . $ret;
		}

		return $ret;
	}

	/**
	 * Yes / No radio group
	 *
	 * @access public
	 * @param string $input_name The name of the input eg: Lg_polls_ext[log_ip]
	 * @param string $input_label The label for the input eg: Polls
	 * @param boolean $checked_value TRUE for yes, FALSE for no
	 * @param array $options Optional arguments
	 * @return string Checkbox html
	 */
	public function yesNoRadioGroup($input_name, $checked_value, $options = array())
	{
		
		$valid_options = array(
			"attributes" => array(),
			"input_id" => FALSE
		);

		foreach ($valid_options as $option => $default_value)
		{
			$$option = (isset($options[$option])) ? $options[$option] : $default_value;
		}
		
		$input_id = ($input_id === FALSE) ? str_replace(array("[]", "[", "]"), array("", "_", ""), $input_name) : $input_id;
		$attributes = array_merge(array(
			"name" => $input_name
		), $attributes);

		$attributes_str = "";
		foreach ($attributes as $key => $value)
		{
			$attributes_str .= " {$key}='{$value}' ";
		}

		$checked_str = ($checked_value == 1) ? " checked='checked' " : FALSE;
		$ret = '<label for="'.$input_id.'_yes">';
		$ret .= '<input type="radio" value="1" '.$checked_str.' id="'.$input_id.'_yes" '. $attributes_str . ' />';
		$ret .= 'Yes </label>';

		$checked_str = ($checked_value == 0) ? " checked='checked' " : FALSE;
		$ret .= '<label for="'.$input_id.'_no">';
		$ret .= '<input type="radio" value="0" '.$checked_str.' id="'.$input_id.'_no" '. $attributes_str . ' />';
		$ret .= 'No </label>';
		
		return $ret;
	}


}