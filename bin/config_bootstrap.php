<?php
/**
 * Custom configuration bootstrap file for ExpressionEngine
 *
 * Place config.php in your site root
 * Add require(realpath(dirname(__FILE__) . '/../../config.php')); to the bottom of system/expressionengine/config/config.php
 * Add require(realpath(dirname(__FILE__) . '/../../config.php')); to the bottom of system/expressionengine/config/database.php
 * If you have moved your site root you'll need to update the require_once path
 *
 * Also includes custom DB configuration file based on your environment
 *
 * Posiible DB configuration options
 *
 * $env_db_config['hostname'] = "";
 * $env_db_config['username'] = "";
 * $env_db_config['password'] = "";
 * $env_db_config['database'] = "";
 *
 * @author Leevi Graham <http://leevigraham.com>
 * @link http://expressionengine.com/index.php?affiliate=leevigraham&page=wiki/EE_2_Config_Overrides/
 * @link http://eeinsider.com/blog/eeci-2010-how-erskine-rolls-with-ee/ - Hat tip to: Erskine from EECI2010 Preso
 */

// Setup the environment
if(!defined('NSM_ENV'))
{
  define('NSM_SERVER_NAME', $_SERVER['SERVER_NAME']);
  define('NSM_SITE_URL', 'http://'.NSM_SERVER_NAME);
  define('NSM_DOC_ROOT', dirname(__FILE__));
  define('NSM_SYSTEM_FOLDER', '_manage');

  // Set the environment
  if ( strstr( NSM_SERVER_NAME, 'dan.local:8888' ) ) define('NSM_ENV', 'local');
  elseif( strstr( NSM_SERVER_NAME, 'dev.' ) ) define('NSM_ENV', 'dev');
  elseif( strstr( NSM_SERVER_NAME, 'stage.' ) ) define('NSM_ENV', 'stage');
  else define('NSM_ENV', 'production');
}

// Define the environment settings

$env_config = array();
$env_db_config = array();
$env_global_vars = array();

// Set the environmental config and global vars
if (NSM_ENV == 'local'){ 
  $env_db_config = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'database' => 'danielmall_v3_ee2',
  );
  // $env_global_vars = array();
}
elseif(NSM_ENV == 'dev'){}
elseif(NSM_ENV == 'stage'){}
else{}

// Config bootsrap... GO!
if(isset($config))
{
  // Our default config. This shouldn't have to be changed if you're using the Newism EE2 template.
  $default_config = array(

    // General preferences
    'is_system_on' => 'y',
    'license_number' => '',
    'site_index' => '',
    'admin_session_type' => 'cs',
    'new_version_check' => 'y',
    'doc_url' => 'http://expressionengine.com/user_guide/',

    'site_url' => NSM_SITE_URL,
    'cp_url' => NSM_SITE_URL.'/'.NSM_SYSTEM_FOLDER.'/index.php',

    // Set this so we can use query strings
    'uri_protocol' => 'PATH_INFO',

    // Datbase preferences
    'db_debug' => 'n',
    'pconnect' => 'n',
    'enable_db_caching' => 'n',

    // Site preferences
    // Some of these preferences might actually need to be set in the index.php files.
    // Not sure which ones yet, I'll figure that out when I have my first MSM site.
    'is_site_on' => 'y',
    'site_name' => 'EE Template',
    'site_label' => 'EE Template',
    'site_short_name' => 'default_site',
    'site_description' => '',
    'site_404' => 'site/four04',

    //'webmaster_email' => 'admin@' . NSM_SERVER_NAME,
    //'webmaster_name' => 'Admin',

    // Localization preferences
    'server_timezone' => 'UP10',
    'server_offset' => FALSE,
    'time_format' => 'eu',
    'daylight_savings' => 'n',
    'honor_entry_dst' => 'y',

    // Channel preferences
    'word_separator' => '-',
    'reserved_category_word' => 'cat',

    // Template preferences
    'strict_urls' => 'y',
    'save_tmpl_files' => 'y',
    'save_tmpl_revisions' => 'y',
    'tmpl_file_basepath' => NSM_DOC_ROOT . '/templates/',

    // Theme preferences
    'theme_folder_path' => NSM_DOC_ROOT . '/content/themes/',
    'theme_folder_url' => NSM_SITE_URL . '/themes/',

    // Tracking preferences
    'enable_online_user_tracking' => 'n',
    'dynamic_tracking_disabling' => '500',
    'enable_hit_tracking' => 'n',
    'enable_entry_view_tracking' => 'n',
    'log_referrers' => 'n',

    // Member preferences
    'allow_registration' => 'n',
    'profile_trigger' => '--sdjhkj2lffgrerfvmdkndkfisolmfmsd',

    'prv_msg_upload_path' => NSM_DOC_ROOT . '/content/uploads/member/prv_messages',
    'enable_emoticons' => 'n',

    'enable_avatars' => 'n',
    'avatar_path' => NSM_DOC_ROOT . '/content/uploads/member/avatars/',
    'avatar_url' => NSM_SITE_URL . '/uploads/member/avatars/',
    'avatar_max_height' => 100,
    'avatar_max_width' => 100,
    'avatar_max_kb' => 100,

    'enable_photos' => 'n',
    'photo_path' => NSM_DOC_ROOT . '/content/uploads/member/photos/',
    'photo_url' => NSM_SITE_URL . '/uploads/member/photos/',
    'photo_max_height' => 200,
    'photo_max_width' => 200,
    'photo_max_kb' => 200,

    'sig_allow_img_upload' => 'n',
    'sig_img_path' => NSM_DOC_ROOT . '/content/uploads/member/signature_attachments/',
    'sig_img_url' => NSM_SITE_URL . '/uploads/member/signature_attachments/',
    'sig_img_max_height' => 80,
    'sig_img_max_width' => 480,
    'sig_img_max_kb' => 30,
    'sig_maxlength' => 500,

    'captcha_font' => 'y',
    'captcha_rand' => 'y',
    'captcha_require_members' => 'n',
    'captcha_path' => NSM_DOC_ROOT . '/content/'.NSM_SYSTEM_FOLDER.'/images/captchas/',
    'captcha_url' => NSM_SITE_URL.'/'.NSM_SYSTEM_FOLDER.'/images/captchas/',

    // NSM htaccess Generator
    'nsm_htaccess_generator_path' => NSM_DOC_ROOT . "/content/.htaccess",
    
  );

  // Build the new config object
  $config = array_merge($config, $default_config, $env_config);

  /**
   * Custom global variables
   *
   * This is a bit sucky as they are pulled straight from the $assign_to_config array.
   * See EE_Config.php around line 90 or search for: 'global $assign_to_config;'
   * Output the global vars in your template with: 
   * <?php $EE = get_instance(); print('<pre><code>'.print_r($EE->config->_global_vars, TRUE) . '</code></pre>');  ?>
   */
  $default_global_vars = array(
    // General
    'gv_env'            => NSM_ENV,

    // Tag parameters
    'gv_param_disable_default'    => 'disable="categories|pagination|data"',
    'gv_param_disable_all'      => 'disable="categories|custom_fields|data|pagination"',
    'gv_param_cache_param'      => 'cache="yes" refresh="10"',
    '-gv_param_cache_param'     => '-cache="yes" refresh="10"', // disable by adding a '-' to the front of the global

    // Date and time
    'gv_date_time'          => '%g:%i %a',
    'gv_date_short'         => '%F %d, %Y',
    'gv_date_full'          => '%F %d %Y, %g:%i %a',

    // Theme
    'gv_theme_url'          => '/themes/site_themes/default_site',
  );

  foreach ($_GET as $key => $value)
    if(!empty($value))
      $default_global_vars['gv_get_' . $key] = $value;

  // Make this global so we can add some of the config variables here
  global $assign_to_config;

  if(!isset($assign_to_config['global_vars']))
    $assign_to_config['global_vars'] = array();

  $assign_to_config['global_vars'] = array_merge($assign_to_config['global_vars'], $default_global_vars, $env_global_vars);
}

// DB bootsrap... GO!
if(isset($db['expressionengine']))
{
  $default_db_config = array("cachedir" => APPPATH . "cache/db_cache/");
  $db['expressionengine'] = array_merge($db['expressionengine'], $default_db_config, $env_db_config);
}