<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'expressionengine';
$active_record = TRUE;


if($_SERVER['SERVER_NAME'] == 'hybrid2.danielmall.com'){ // testing
    
    $db['expressionengine']['hostname'] = "internal-db.s54386.gridserver.com";
    $db['expressionengine']['username'] = "db54386";
    $db['expressionengine']['password'] = "Krypton1te";
    $db['expressionengine']['database'] = "db54386_danielmall_v3_ee2";
    
}else if($_SERVER['SERVER_NAME'] == 'danielmall.com'){ // live

    /*$db['expressionengine']['hostname'] = "localhost";
    $db['expressionengine']['username'] = "root";
    $db['expressionengine']['password'] = "root";
    $db['expressionengine']['database'] = "danielmall_v3_ee2";*/

    
}else{ // testing locally
    
    $db['expressionengine']['hostname'] = "localhost";
    $db['expressionengine']['username'] = "root";
    $db['expressionengine']['password'] = "root";
    $db['expressionengine']['database'] = "danielmall_v3_ee2";
    
}

$db['expressionengine']['dbdriver'] = "mysql";
$db['expressionengine']['dbprefix'] = "exp_";
$db['expressionengine']['pconnect'] = FALSE;
$db['expressionengine']['swap_pre'] = "exp_";
$db['expressionengine']['db_debug'] = TRUE;
$db['expressionengine']['cache_on'] = FALSE;
$db['expressionengine']['autoinit'] = FALSE;
$db['expressionengine']['char_set'] = "utf8";
$db['expressionengine']['dbcollat'] = "utf8_general_ci";
$db['expressionengine']['cachedir'] = "/path/to/your/admin/expressionengine/cache/db_cache/";

/* End of file database.php */
/* Location: ./system/expressionengine/config/database.php */

/*print_r(realpath(dirname(__FILE__) . '/../../config_bootstrap.php'));
require(realpath(dirname(__FILE__) . '/../../config_bootstrap.php'));*/