<?php

/**
 * NSM .htaccess Generator Language File
 *
 * @package			NsmHtaccessGenerator
 * @version			1.0.0
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://expressionengine-addons.com/nsm-htaccess-generator
 * @see				http://expressionengine.com/public_beta/docs/development/modules.html#lang_file
 */
$lang = array(

	/* Module */
	'nsm_htaccess_generator' => 'NSM .htaccess Generator',
	'nsm_htaccess_generator_module_name' => 'NSM .htaccess Generator: Module name',
	'nsm_htaccess_generator_module_description' => 'NSM .htaccess Generator: Module description',

	/* Extension */
	'save_extension_settings' => 'Save extension settings',

	'htaccess_config_title' => '.htaccess Configuration',
	'htaccess_config_info' => '	<p>NSM .htaccess Generator requires that an existing .htaccess file exists and is writable. Non NSM .htaccess rules these will not be modified by this extension.</p>
										<p>The tags below will be replaced with their associated values in the .htaccess template:</p>
										<ul>
											<li><strong><code>{ee:template_groups}</code></strong> will be replaced with a pipe delimited list of this sites template groups</li>
											<li><strong><code>{ee:pages}</code></strong> will be replaced with a pipe delimited list of this sites page urls</li>
											<li><strong><code>{ee:404}</code></strong> will be replaced with the sites 404 path ie: site/404</li>
										</ul>
										<p>Each of the tags above append a pipe character "|".
										<p>Read more about the "include method" of removing your sites index.php on the <a rel="external" target="_blank" href="http://expressionengine.com/index.php?affiliate=expressionengine-addons&amp;page=/wiki/Remove_index.php_From_URLs/#Include_List_Method">ExpressionEngine Wiki</a>.</p>',

	/* Messages / Alerts */
	'alert.error.file_doesnt_exist' => "File  couldn't be found at: %s",
	'alert.error.htaccess_not_generated' => 'File was not generated, check the files permissions',
	'alert.success.htaccess_generated' => 'File generated successfully',

	'alert.success.extension_settings_saved' 	=> 'Extension settings have been saved.',

);