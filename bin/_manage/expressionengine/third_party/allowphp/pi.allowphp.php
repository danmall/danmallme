<?php

/*
=====================================================
 ExpressionEngine - by pMachine
-----------------------------------------------------
 http://www.pmachine.com/
=====================================================
 This plugin was created by Lodewijk Schutte
 - lodewijk@gmail.com
 - http://loweblog.com/
 This software is licensed under a GNU license.
 - http://www.gnu.org/copyleft/gpl.html
=====================================================
 File: pi.allowphp.php
-----------------------------------------------------
 Purpose: Allow PHP plugin
=====================================================
*/


$plugin_info = array(
						'pi_name'			=> 'Allow PHP',
						'pi_version'		=> '1.0',
						'pi_author'			=> 'Lodewijk Schutte',
						'pi_author_url'	=> 'http://loweblog.com/',
						'pi_description'	=> 'Treats the text inside the tags as PHP',
						'pi_usage'			=> allowphp::usage()
					);


class Allowphp {

    var $return_data;

    // ----------------------------------------
    //  Allow the PHP
    // ----------------------------------------

    function Allowphp()
    {
        global $TMPL;
        
        ob_start();
        @eval($TMPL->tagdata);
        $output = ob_get_contents();
        ob_end_clean(); 
                        
		  $this->return_data = $output;
    }
    // END
    
// ----------------------------------------
//  Plugin Usage
// ----------------------------------------

// This function describes how the plugin is used.

function usage()
{
ob_start(); 
?>
Wrap anything you want to be processed between the tag pairs.

{exp:allowphp}

echo "hello world!";

{/exp:allowphp}

Result: hello world!

<?php
$buffer = ob_get_contents();
	
ob_end_clean(); 

return $buffer;
}
// END


}
// END CLASS
?>