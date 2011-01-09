<?php

/**
 * View for Control Panel Settings Form
 * This file is responsible for displaying the user-configurable settings for the NSM Multi Language extension in the ExpressionEngine control panel.
 *
 * @package Nsm_addon_example
 * @version 1.0.0
 * @author Leevi Graham <http://leevigraham.com.au>
 * @copyright Copyright (c) 2007-2010 Newism <http://newism.com.au>
 * @license Commercial - please see LICENSE file included with this distribution
 **/

$EE =& get_instance();

?>

<div class="mor">
	<?= form_open(
			'C=addons_extensions&M=extension_settings&file=' . $addon_id,
			array('id' => $addon_id . '_prefs'),
			array($input_prefix."[enabled]" => TRUE)
		)
	?>

	<!-- 
	===============================
	Alert Messages
	===============================
	-->

	<?php if($error) : ?>
		<div class="alert error"><?php print($error); ?></div>
	<?php endif; ?>

	<?php if($message) : ?>
		<div class="alert success"><?php print($message); ?></div>
	<?php endif; ?>
	
	<div class="tg">
		<h2><?= lang('htaccess_config_title'); ?></h2>
		<div class="alert info"><?= lang("htaccess_config_info") ?></div>
		<table>
			<tbody>
				<tr class="even">
					<th scope="row">
						.htaccess path
					</th>
					<td>
						<input 
							type="text" 
							name="<?= $input_prefix ?>[path]" 
							value="<?= $data["path"] ?>
						" />
					</td>
				</tr>
				<tr>
					<th scope="row">.htaccess template</th>
					<td>
						<textarea style="height:470px" name="<?= $input_prefix ?>[template]"><?= $data["template"] ?></textarea>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="actions">
		<input type="submit" class="submit" value="<?= lang('save_extension_settings') ?>" />
	</div>

	<?= form_close(); ?>
</div>