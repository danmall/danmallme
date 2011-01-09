<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Morphine Theme CP 
 *
 * @package			NsmMorphineTheme
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com>
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-morphine-theme
 * @see				http://expressionengine.com/public_beta/docs/development/modules.html#control_panel_file
 */
class Nsm_morphine_theme_mcp
{
	private $pages = array("index", "tables", "alerts", "buttons");

	public function __construct()
	{
		$this->EE =& get_instance();
		$this->cp_url = BASE.AMP.'C=addons_modules'.AMP.'M=show_module_cp'.AMP.'module=nsm_morphine_theme'.AMP;
	}

	public function index()
	{
		$out = $this->EE->load->view("dashboard/index", array(), TRUE);
		return $this->_renderLayout("index", $out);
	}

	public function tables()
	{
		$out = $this->EE->load->view("tables/index", array(), TRUE);
		return $this->_renderLayout("tables", $out);
	}

	public function alerts()
	{
		$out = $this->EE->load->view("alerts/index", array(), TRUE);
		return $this->_renderLayout("alerts", $out);
	}

	public function buttons()
	{
		$out = $this->EE->load->view("buttons/index", array(), TRUE);
		return $this->_renderLayout("buttons", $out);
	}

	public function _renderLayout($page, $out = FALSE)
	{
		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line("{$page}_page_title"));
		$this->EE->cp->set_breadcrumb($this->cp_url, $this->EE->lang->line('nsm_morphine_theme_module_name'));

		$nav = array();
		foreach ($this->pages as $page) {
			$nav[lang("{$page}_nav_title")] = $this->cp_url . "method=" . $page;
		}
		$this->EE->cp->set_right_nav($nav);
		return "<div class='mor'>{$out}</div>";
	}

}