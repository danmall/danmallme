<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine LogMeIn Plugin
 *
 * @package		LogMeIn
 * @subpackage		Plugins
 * @category		Plugins
 * @author		Ben Croker
 * @link			http://www.putyourlightson.net/projects/logmein/
 */

$plugin_info = array(
				'pi_name'			=> 'LogMeIn',
				'pi_version'		=> '1.4',
				'pi_author'			=> 'Ben Croker',
				'pi_author_url'	=> 'http://www.putyourlightson.net/',
				'pi_description'	=> 'Logs a specified user in',
				'pi_usage'			=> Logmein::usage()
			);


class Logmein {	
			
		
	/**
	  *  Constructor
	  */
	function Logmein()
	{
		// make a local reference to the ExpressionEngine super object
		$this->EE =& get_instance();
	}

	// --------------------------------------------------------------------
	
	/**
	  *  Log the user in now
	  */
	function now()
	{
		if ($this->EE->TMPL->fetch_param('if_member_group'))
		{
			if ($this->EE->session->userdata['group_id'] != $this->EE->TMPL->fetch_param('if_member_group'))
			{
				return;
			}
		}
		
		if (!$username = $this->EE->TMPL->fetch_param('username'))
		{
			return 'You must enter a username';
		}
		
		
		/** ----------------------------------------
		/**  Fetch member data
		/** ----------------------------------------*/
		
		$sql = "SELECT exp_members.username, exp_members.password, exp_members.unique_id, exp_members.member_id, exp_members.group_id
				FROM	exp_members, exp_member_groups
				WHERE  username = '".$this->EE->db->escape_str($username)."'
				AND	exp_members.group_id = exp_member_groups.group_id
				AND		exp_member_groups.site_id = '".$this->EE->db->escape_str($this->EE->config->item('site_id'))."'";

		$query = $this->EE->db->query($sql);
		
		
		/** ----------------------------------------
		/**  Invalid Username
		/** ----------------------------------------*/
		
		if ($query->num_rows() == 0)
		{
			return 'Username does not exist';
		}
		
		
		/** ----------------------------------------
		/**  Set cookie expiration
		/** ----------------------------------------*/
		
		// set default expiration to one day
		$expire = $this->EE->TMPL->fetch_param('expire') ? $this->EE->TMPL->fetch_param('expire') : 60*60*24;
	
	
		/** ----------------------------------------
		/**  Set cookies
		/** ----------------------------------------*/
		
		$this->EE->functions->set_cookie($this->EE->session->c_expire , time() + $expire, $expire);
		$this->EE->functions->set_cookie($this->EE->session->c_uniqueid , $query->row('unique_id'), $expire);		
		$this->EE->functions->set_cookie($this->EE->session->c_password , $query->row('password'),  $expire);	
		$this->EE->functions->set_cookie($this->EE->session->c_anon , 1, $expire);
		
		
		/** ----------------------------------------
		/**  Create a new session
		/** ----------------------------------------*/
		
		$session_id = $this->EE->session->create_new_session($query->row('member_id') , TRUE);
		$this->EE->session->userdata['username']  = $query->row('username');
		$this->EE->session->userdata['group_id']  = $query->row('group_id');
	}
	/* END */
	
	// --------------------------------------------------------------------

	/**
	  *  Log the user out
	  */
	function logout()
	{
		/** ----------------------------------------
		/**  Kill the session and cookies
		/** ----------------------------------------*/
		
		$this->EE->db->query("DELETE FROM exp_online_users WHERE site_id = '".$this->EE->db->escape_str($this->EE->config->item('site_id'))."' AND ip_address = '".$this->EE->input->ip_address()."' AND member_id = '".$this->EE->session->userdata('member_id')."'");

		$this->EE->db->query("DELETE FROM exp_sessions WHERE session_id = '".$this->EE->session->userdata['session_id']."'");

		$this->EE->functions->set_cookie($this->EE->session->c_uniqueid);
		$this->EE->functions->set_cookie($this->EE->session->c_password);
		$this->EE->functions->set_cookie($this->EE->session->c_session);
		$this->EE->functions->set_cookie($this->EE->session->c_expire);
		$this->EE->functions->set_cookie($this->EE->session->c_anon);
		$this->EE->functions->set_cookie('read_topics');
		$this->EE->functions->set_cookie('tracker');
	}
	/* END */
	
	
// ----------------------------------------
//  Plugin Usage
// ----------------------------------------

// This function describes how the plugin is used.
//  Make sure and use output buffering

function usage()
{
ob_start(); 
?>

Put the following line into any template to log the current visitor in. 

{exp:logmein:now username="priveleged_guest" if_member_group="3" expire="300"}

The username parameter is required.
The if_member_group parameter is optional and defines the member group id that the current user must belong to.
The expire parameter is optional and sets the expiration time in seconds of the cookie.

To log the current member out use:

{exp:logmein:logout}

<?php
$buffer = ob_get_contents();
	
ob_end_clean(); 

return $buffer;
}
/* END */


}
// END CLASS

/* End of file mcp.firemail.php */
/* Location: ./system/expressionengine/third_party/logmein/pi.logmein.php */
?>