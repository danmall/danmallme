<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM .htaccess Generator Extension
 *
 * @package			NsmHtaccessGenerator
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-htaccess-generator
 * @see 			http://expressionengine.com/public_beta/docs/development/extensions.html
 */

class Nsm_htaccess_generator_ext
{
	public $version			= '1.0.0';
	public $name			= 'NSM .htaccess Generator';
	public $description		= 'Generates .htaccess rules for include method';
	public $docs_url		= 'http://expressionengine-addons.com/nsm-htaccess-generator';
	public $settings_exist	= TRUE;
	public $settings		= array();

	// At leaset one hook is needed to install an extension
	public $hooks = array('entry_submission_end', 'update_template_end');

	public $default_site_settings = array(
		'enabled' => TRUE,
		'path' => '',
		'template' => '# secure .htaccess file
<Files .htaccess>
 order allow,deny
 deny from all
</Files>

# EE 404 page for missing pages
ErrorDocument 404 /index.php/{ee:404}

# Simple 404 for missing files
<FilesMatch "(\.jpe?g|gif|png|bmp|css|js|flv)$">
  ErrorDocument 404 "File Not Found"
</FilesMatch>

# Although highly unlikely, your host may have +FollowSymLinks enabled at the root level, yet disallow its addition in .htaccess; in which case, adding +FollowSymLinks will break your setup (probably a 500 error), so just remove it, and your rules should work fine.
Options +FollowSymlinks
RewriteEngine On
RewriteBase /

# remove the www - Uncomment to activate
# RewriteCond %{HTTP_HOST} ^www\.(.*) [NC]
# RewriteRule ^(.*)$ http://%1/$1 [R=301,NC,L]

# Remove the trailing slash to paths without an extension
# Uncomment to activate
# RewriteCond %{REQUEST_URI} /$
# RewriteCond %{REQUEST_FILENAME} !-d
# RewriteRule ^(.+)/$ $1 [L,R=301]

# Remove index.php
# Uses the "include method"
# http://expressionengine.com/wiki/Remove_index.php_From_URLs/#Include_List_Method
RewriteCond %{QUERY_STRING} !^(ACT=.*)$ [NC]
RewriteCond %{REQUEST_URI} !(\.[a-zA-Z0-9]{1,5})$
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} ^/({ee:template_groups}{ee:pages}members|P[0-9]{2,8}) [NC]
RewriteRule (.*) /index.php/$1 [L]'

	);


	// ====================================
	// = Delegate & Constructor Functions =
	// ====================================

	/**
	 * PHP5 constructor function.
	 *
	 * @access public
	 * @return void
	 **/
	function __construct()
	{
		// set the addon id
		$this->addon_id = strtolower(substr(__CLASS__, 0, -4));
	
		// Create a singleton reference
		$EE =& get_instance();

		// define a constant for the current site_id rather than calling $PREFS->ini() all the time
		if (defined('SITE_ID') == FALSE)
			define('SITE_ID', $EE->config->item('site_id'));

		// Load the addons model and check if the the extension is installed
		// Get the settings if it's installed
		$EE->load->model('addons_model');
		if($EE->addons_model->extension_installed($this->addon_id))
			$this->settings = $this->_getSettings();

		// Init the cache
		$this->_initCache();
	}

	/**
	 * Initialises a cache for the addon
	 * 
	 * @access private
	 * @return void
	 */
	private function _initCache()
	{
		// Create a singleton reference
		$EE =& get_instance();

		// Sort out our cache
		// If the cache doesn't exist create it
		if (! isset($EE->session->cache[$this->addon_id]))
			$EE->session->cache[$this->addon_id] = array();

		// Assig the cache to a local class variable
		$this->cache =& $EE->session->cache[$this->addon_id];
	}






	// ===============================
	// = Hook Functions =
	// ===============================

	public function entry_submission_end($entry_id, $entry_meta, $data)
	{
		$EE =& get_instance();
		$response = $this->_generateHtaccess();
		$type = ($response["success"]) ? "message_success" : "message_failure";
		$EE->session->set_flashdata($type, $this->name . ": ". $response["msg"]);
	}

	public function update_template_end($template_id, $message)
	{
		$EE =& get_instance();
		if($message != $EE->lang->line('template_updated')) return;
		$response = $this->_generateHtaccess();
		$type = ($response["success"]) ? "message_success" : "message_failure";
		$EE->session->set_flashdata($type , $this->name . ": ". $response["msg"]);
	}

	/**
	 * Generate the .htaccess file and save it
	 *
	 * @access	private
	 * @return array The response status and msg string
	 */
	private function _generateHtaccess()
	{
		$EE =& get_instance();
		$EE->load->helper('file');
		$EE->lang->loadfile($this->addon_id);

		$new_htaccess = "";
		$response['success'] = FALSE;

		// Check the old .htaccess file exists
		$old_htaccess = read_file(trim($this->settings['path']));
		if($old_htaccess === FALSE)
		{
			$response['msg'] = sprintf($EE->lang->line("alert.error.file_doesnt_exist"), $this->settings['path']);
			return $response;
		}

		$hash = "*lg:" . $EE->functions->hash(time()) . "*";
		$tmpl = str_replace('$', $hash, $this->settings['template']);
		$new_htaccess = "# -- NSM .htaccess Generator Start --".
						"\n# .htaccess generated by NSM .htaccess Generator v{$this->version}".
						"\n# @see: {$this->docs_url}".
						"\n\n{$tmpl}".
						"\n\n# -- NSM .htaccess Generator End --";

		// replace template groups
		if(strpos($new_htaccess, "{ee:template_groups}") !== FALSE)
		{
			$template_groups = array();
			$query = $EE->db->get_where('template_groups', array('site_id' => SITE_ID));

			if ($query->num_rows > 0)
			{
				foreach ($query->result() as $row)
				{
					$template_groups[] = $row->group_name;
				}
			}
			$new_htaccess = str_replace("{ee:template_groups}", implode("|", $template_groups) . "|", $new_htaccess);
		}

		// replace pages
		if(strpos($new_htaccess, "{ee:pages}") !== FALSE)
		{
			$pages = $EE->config->item('site_pages');
			$pages_string = FALSE;

			if(isset($pages[SITE_ID]))
			{
				$page_roots = array();
				
				foreach ($pages[SITE_ID]['uris'] as $page_id => $page_url)
				{
					$parts = explode("/", ltrim($page_url, "/"));
					if(!empty($parts[0]))
						$page_roots[] = $parts[0];
				}
				$pages_string = implode("|", array_unique($page_roots)) . "|";
			}

			$new_htaccess = str_replace("{ee:pages}", $pages_string, $new_htaccess);
		}

		// replace 404
		$new_htaccess = str_replace("{ee:404}", $EE->config->item("site_404"), $new_htaccess);

		$htaccess = (strpos($old_htaccess, "# -- NSM .htaccess Generator Start --") !== FALSE)
						? preg_replace("/# -- NSM \.htaccess Generator Start --.*?# -- NSM \.htaccess Generator End --/s", $new_htaccess, $old_htaccess)
						: $old_htaccess . "\n\n" . $new_htaccess;

		// open the file again for reading and writing
		if(!write_file(trim($this->settings["path"]), str_replace($hash, '$', $htaccess)))
		{
			$response['msg'] = $EE->lang->line('alert.error.htaccess_not_generated');
			return $response;
		}

		$response['success'] = TRUE;
		$response['msg'] = $EE->lang->line('alert.success.htaccess_generated');

		return $response;
	}




	// ===============================
	// = Setting Functions =
	// ===============================

	/**
	 * Render the custom settings form and processes post vars
	 *
	 * @access public
	 * @return The settings form HTML
	 */
	public	function settings_form()
	{
		$EE =& get_instance();
		$EE->lang->loadfile($this->addon_id);
		$EE->load->library($this->addon_id."_addon", NULL, $this->addon_id);
	
		// Create the variable array
		$vars = array(
			'addon_id' => $this->addon_id,
			'error' => FALSE,
			'input_prefix' => __CLASS__,
			'message' => FALSE,
		);
	
		// Are there settings posted from the form?
		if($data = $EE->input->post(__CLASS__))
		{
			if(!isset($data["enabled"]))
				$data["enabled"] = TRUE;
	
			// No errors ?
			if(! $vars['error'] = validation_errors())
			{
				$this->settings = $this->_saveSettings($data);

				$response = $this->_generateHtaccess();

				if($response["success"])
				{
					$msg[] = $this->name . ": ". $response["msg"];
				}
				else
				{
					$EE->session->set_flashdata('message_failure', $this->name . ": ". $response["msg"]);
				}
				$msg[] = $this->name . ": ". $EE->lang->line('alert.success.extension_settings_saved');
				$EE->session->set_flashdata('message_success', implode("<br />", $msg));

				$EE->functions->redirect(BASE.AMP.'C=addons_extensions');
			}
		}
		else
		{
			// Sometimes we may need to parse the settings
			$data = $this->settings;
		}
	
		$vars["data"] = $data;
	
		// $js = "console.log('nsm_htaccess_generator JS Loaded from ".__CLASS__.":" . __LINE__ ."')";
		// $EE->nsm_htaccess_generator->addJS($js, array("file"=>FALSE));

		// We can also Load JS Files
		// $EE->nsm_htaccess_generator->addJS('extension_settings.js');
	
		// Return the view.
		return $EE->load->view('/extension/settings', $vars, TRUE);
	}

	/**
	 * Builds default settings for the site
	 *
	 * @access private
	 * @param int $site_id The site id
	 * @param array The default site settings
	 */
	private function _buildDefaultSiteSettings($site_id = FALSE)
	{
		$EE =& get_instance();
		$default_settings = $this->default_site_settings;

		// No site id, use the current one.
		if(!$site_id)
			$site_id = SITE_ID;

		// Channel preferences (if required)
		if(isset($this->default_settings["channels"]))
		{
			$channels = $EE->channel_model->get_channels($site_id);
			if ($channels->num_rows() > 0)
			{
				foreach($channels->result() as $channel)
				{
					$default_settings['channels'][$channel->channel_id] = $this->_buildChannelSettings($channel->channel_id);
				}
			}
		}

		// Member group settings (if required)
		if(isset($this->default_settings["member_groups"]))
		{
			$member_groups = $EE->member_model->get_member_groups();
			if ($member_groups->num_rows() > 0)
			{
				foreach($member_groups->result() as $member_group)
				{
					$default_settings['member_groups'][$member_group->group_id] = $this->_buildMemberGroupSettings($member_group->group_id);
				}
			}
		}

		// return settings
		return $default_settings;
	}

	/**
	 * Build the default channel settings
	 *
	 * @access private
	 * @param array $channel_id The target channel
	 * @return array The new channel settings
	 */
	private function _buildChannelSettings($channel_id)
	{
		return $this->default_channel_settings;
	}

	/**
	 * Build the default member group settings
	 *
	 * @access private
	 * @param array $group_id The target group
	 * @return array The new member group settings
	 */
	private function _buildMemberGroupSettings($group_id)
	{
		return $this->default_member_group_settings;
	}




	// ===============================
	// = Class and Private Functions =
	// ===============================

	/**
	 * Called by ExpressionEngine when the user activates the extension.
	 *
	 * @access		public
	 * @return		void
	 **/
	public function activate_extension()
	{
		$this->_createSettingsTable();
		$this->settings = $this->_getSettings();
		$this->_registerHooks();
	}

	/**
	 * Called by ExpressionEngine when the user disables the extension.
	 *
	 * @access		public
	 * @return		void
	 **/
	public function disable_extension()
	{
		$this->_unregisterHooks();
	}

	/**
	 * Called by ExpressionEngine updates the extension
	 *
	 * @access public
	 * @return void
	 **/
	public function update_extension($current=FALSE){}





	// ======================
	// = Settings Functions =
	// ======================

	/**
	 * The settings table
	 *
	 * @access		private
	 **/
	private static $settings_table = 'nsm_addon_settings';

	/**
	 * The settings table fields
	 *
	 * @access		private
	 **/
	private static $settings_table_fields = array(
		'id'						=> array(	'type'			 => 'int',
												'constraint'	 => '10',
												'unsigned'		 => TRUE,
												'auto_increment' => TRUE,
												'null'			 => FALSE),
		'site_id'					=> array(	'type'			 => 'int',
												'constraint'	 => '5',
												'unsigned'		 => TRUE,
												'default'		 => '1',
												'null'			 => FALSE),
		'addon_id'					=> array(	'type'			 => 'varchar',
												'constraint'	 => '255',
												'null'			 => FALSE),
		'settings'					=> array(	'type'			 => 'mediumtext',
												'null'			 => FALSE)
	);
	
	/**
	 * Creates the settings table table if it doesn't already exist.
	 *
	 * @access		protected
	 * @return		void
	 **/
	protected function _createSettingsTable()
	{
		$EE =& get_instance();
		$EE->load->dbforge();
		$EE->dbforge->add_field(self::$settings_table_fields);
		$EE->dbforge->add_key('id', TRUE);

		if (!$EE->dbforge->create_table(self::$settings_table, TRUE))
		{
			log_message('error', "Unable to create settings table for ".__CLASS__.": " . $EE->config->item('db_prefix') . self::$settings_table);
			show_error("Unable to create settings table for ".__CLASS__.": " . $EE->config->item('db_prefix') . self::$settings_table);
		}
	}

	/**
	 * Get the addon settings
	 *
	 * 1. Load settings from the session
	 * 2. Load settings from the DB
	 * 3. Create new settings and save them to the DB
	 * 
	 * @access private
	 * @param boolean $refresh Load the settings from the DB not the session
	 * @return mixed The addon settings 
	 */
	private function _getSettings($refresh = FALSE)
	{
		$EE =& get_instance();
		$settings = FALSE;

		if (
			// if there are settings in the settings cache
			isset($this->cache[SITE_ID]['settings']) === TRUE 
			// and we are not forcing a refresh
			AND $refresh != TRUE
		)
		{
			// get the settings from the session cache
			$settings = $this->cache[SITE_ID]['settings'];
		}
		else
		{
			$settings_query = $EE->db->get_where(
									self::$settings_table,
									array(
										'addon_id' => $this->addon_id,
										'site_id' => SITE_ID
									)
								);
			// there are settings in the DB
			if ($settings_query->num_rows())
			{
				$settings = json_decode($settings_query->row()->settings, TRUE);
				$this->_saveSettingsToSession($settings);
			}
			// no settings for the site
			else
			{
				$settings = $this->_buildDefaultSiteSettings(SITE_ID);
				$this->_saveSettings($settings);
			}
			
		}

		// Merge config settings
		foreach ($settings as $key => $value)
		{
			if($EE->config->item($this->addon_id . "_" . $key))
				$settings[$key] = $EE->config->item($this->addon_id . "_" . $key);
		}

		return $settings;
	}

	/**
	 * Get the channel settings if the exist or load defaults
	 *
	 * @access private
	 * @param int $channel_id The channel id
	 * @return array the channel settings
	 */
	private function _channelSettings($channel_id){
		return (isset($this->settings["channels"][$channel_id]))
					? $this->settings["channels"][$channel_id]
					: $this->_buildChannelSettings($channel_id);
	}

	/**
	 * Get the member group settings if the exist or load defaults
	 *
	 * @access private
	 * @param int $group_id The member group id
	 * @return array the member group settings
	 */
	private function _memberGroupSettings($group_id){
		return (isset($this->settings["member_groups"][$group_id]))
					? $this->settings["member_groups"][$group_id]
					: $this->_buildMemberGroupSettings($group_id);
	}

	/**
	 * Save settings to DB and to the session
	 *
	 * @access private
	 * @param array $settings
	 */
	private function _saveSettings($settings)
	{
		$this->_saveSettingsToDatabase($settings);
		$this->_saveSettingsToSession($settings);
		return $settings;
	}

	/**
	 * Save settings to DB
	 *
	 * @access private
	 * @param array $settings
	 * @return array The settings
	 */
	private function _saveSettingsToDatabase($settings)
	{
		$EE =& get_instance();
		$data = array(
			'settings'	=> json_encode($settings),
			'addon_id'	=> $this->addon_id,
			'site_id'	=> SITE_ID
		);
		$settings_query = $EE->db->get_where(
							'nsm_addon_settings',
							array(
								'addon_id' =>  $this->addon_id,
								'site_id' => SITE_ID
							), 1);

		if ($settings_query->num_rows() == 0)
		{
			$query = $EE->db->insert('exp_nsm_addon_settings', $data);
			log_message('info', __METHOD__ . ' Inserting settings: $query => ' . $query);
		}
		else
		{
			$query = $EE->db->update(
							'exp_nsm_addon_settings',
							$data,
							array(
								'addon_id' => $this->addon_id,
								'site_id' => SITE_ID
							));
			log_message('info', __METHOD__ . ' Updating settings: $query => ' . $query);
		}
		return $settings;
	}

	/**
	 * Save the settings to the session
	 *
	 * @access private
	 * @param array $settings The settings to push to the session
	 * @return array the settings unmodified
	 */
	private function _saveSettingsToSession($settings){
		$this->cache[SITE_ID]['settings'] = $settings;
		return $settings;
	}




	// ======================
	// = Hook Functions     =
	// ======================

	/**
	 * Sets up and subscribes to the hooks specified by the $hooks array.
	 *
	 * @access private
	 * @param array $hooks A flat array containing the names of any hooks that this extension subscribes to. By default, this parameter is set to FALSE.
	 * @return void
	 * @see http://expressionengine.com/public_beta/docs/development/extension_hooks/index.html
	 **/
	private function _registerHooks($hooks = FALSE)
	{
		$EE =& get_instance();

		if($hooks == FALSE && isset($this->hooks) == FALSE)
			return;

		if (!$hooks)
			$hooks = $this->hooks;

		$hook_template = array(
			'class'    => __CLASS__,
			'settings' => "a:0:{}",
			'version'  => $this->version,
		);

		foreach ($hooks as $key => $hook)
		{
			if (is_array($hook))
			{
				$data['hook'] = $key;
				$data['method'] = (isset($hook['method']) === TRUE) ? $hook['method'] : $key;
				$data = array_merge($data, $hook);
			}
			else
			{
				$data['hook'] = $data['method'] = $hook;
			}

			$hook = array_merge($hook_template, $data);
			$EE->db->insert('exp_extensions', $hook);
		}
	}

	/**
	 * Removes all subscribed hooks for the current extension.
	 * 
	 * @access private
	 * @return void
	 * @see http://expressionengine.com/public_beta/docs/development/extension_hooks/index.html
	 **/
	private function _unregisterHooks()
	{
		$EE =& get_instance();
		$EE->db->where('class', __CLASS__);
		$EE->db->delete('exp_extensions'); 
	}
}