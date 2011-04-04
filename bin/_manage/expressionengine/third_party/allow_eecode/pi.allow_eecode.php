<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
						'pi_name'			=> 'Allow EE Code',
						'pi_version'		=> '1.4',
						'pi_author'			=> 'Paul Burdick',
						'pi_author_url'		=> 'http://expressionengine.com/',
						'pi_description'	=> 'Allows ExpressionEngine code to be used in entries',
						'pi_usage'			=> Allow_eecode::usage()
					);
/**
 * Allow_eecode Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			ExpressionEngine Dev Team
 * @copyright		Copyright (c) 2004 - 2009, EllisLab, Inc.
 * @link			http://expressionengine.com/downloads/details/allow_ee_code/
 */

class Allow_eecode {

    var $return_data;

	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */

    function Allow_eecode($str = '')
    {
        $this->EE =& get_instance();
	
		$str = ($str == '') ? $this->EE->TMPL->tagdata : $str;

        $query = ( ! $this->EE->TMPL->fetch_param('query') ) ? 'n' : $this->EE->TMPL->fetch_param('query');
        $embed = ( ! $this->EE->TMPL->fetch_param('embed') ) ? 'n' : $this->EE->TMPL->fetch_param('embed');

        if ($query != 'yes')
        {
        	$str = preg_replace("/&#123;exp:query(.*?)&#125;/","TgB903He0mnv3dd098$1TgB903He0mnv3dd099",$str);
			$str = str_replace('&#123;/exp:query&#125;', 'Mu87ddk2QPoid990iod', $str);
        }

		if ($embed != 'yes')
		{
			$str = str_replace('&#123;embed', 'a9f83fa8b65b27e43a9db5fa4b2f62c8a23330e6', $str);
		}

        $array1 = array('&#123;',	'&#125;',	'{&#47;');
        $array2 = array('{',		'}',		'{/');

        $str = str_replace($array1,$array2,$str);

		if (preg_match_all("#\{.+?}#si", $str, $matches))
		{
			for ($i = 0, $total = count($matches[0]); $i < $total; $i++)
			{
				$str = str_replace($matches['0'][$i],
									str_replace(array('&#8220;', '&#8221;', '&#8216;','&#8217;'), array('"', '"', "'", "'"), $matches['0'][$i]),
									$str);
			}	
		}
		
        if ($query == 'n')
        {
        	$str = str_replace('TgB903He0mnv3dd098', '&#123;exp:query', $str);
        	$str = str_replace('TgB903He0mnv3dd099', '&#125;', $str);
			$str = str_replace('Mu87ddk2QPoid990iod', '&#123;/exp:query&#125;', $str);
        }

		if ($embed == 'n')
		{
			$str = str_replace('a9f83fa8b65b27e43a9db5fa4b2f62c8a23330e6', '&#123;embed', $str);
		}

 		$this->return_data = $str;
	}

	// --------------------------------------------------------------------
	
	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */
	function usage()
	{

		ob_start(); 
		?>
		Wrap anything you want to be processed between the tag pairs.

		{exp:allow_eecode}

		field whose ExpressionEngine code you want processed (ex: {body})

		{/exp:allow_eecode}

		PARAMETERS:

		query - (y/n) Allow you to allow the use of the {exp:query} tag in your entries.  Set to 'n' by default.
		embed - (y/n) Allow you to allow the use of {embed} tags in your entries.  Set to 'n' by default.

		Version 1.0.1
		******************
		- Removed the ability to use the {exp:query} plugin by default for security reasons.
		- Added query parameter to tag to enable the use of {exp:query} in entries.

		Version 1.0.2
		******************
		- Fixed a bug where any code containing variables pairs would not work (ex:  {items} blah {/items})

		Version 1.1
		******************
		- Added embed parameter to tag to enable the use of {embed} tags in entries.

		Version 1.2
		******************
		- Fixed a bug where code containing single variables would not work

		Version 1.3
		******************
		- Updated plugin to work with 1.6.5's typography changes

		Version 1.4
		******************
		- Updated plugin to be 2.0 compatible

		<?php
		$buffer = ob_get_contents();
	
		ob_end_clean(); 

		return $buffer;
	}
	
	// --------------------------------------------------------------------

}
// END CLASS

/* End of file pi.allow_eecode.php */
/* Location: ./system/expressionengine/third_party/allow_eecode/pi.allow_eecode.php */