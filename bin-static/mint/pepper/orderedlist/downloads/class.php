<?php
/******************************************************************************
 Pepper
 
 Developer		: Steve Smith
 Plug-in Name	: Download Counter
 
 http://orderedlist.com/
 
 ******************************************************************************

 The onEvent handlers must be present even if they perform no action.
 
 The $Mint object will always be available to the plug-in.

 ******************************************************************************/

$installPepper = "OL_Downloads";
class OL_Downloads extends Pepper { 
	var $version	= 131;

	// Used to display info about this plug-in
	var $info		= array
	(
		'pepperName'	=> 'Download Counter',
		'pepperUrl'		=> 'http://orderedlist.com/download/',
		'pepperDesc'	=> 'Does pretty much what it says.  Counts downloads.',
		'developerName'	=> 'Steve Smith',
		'developerUrl'	=> 'http://orderedlist.com/'
	);
	var $panes = array
	(
		'Download Counter' => array
		(
			'Most Common',
			'By Type'
		)
	);
	var $prefs = array
	(
		// Common resolutions widths minus worst-case browser chrome width (56)
		'fileExtensions' => 'zip,pdf,rar,mpg,mp3,mov,jpg,gif'
	);
	var $manifest = array
	(
		'visit'	=> array
		(
			'is_download' => "SMALLINT(1) NOT NULL DEFAULT '0'"
		)
	);
	var $data = array
	(
		'downloads' => array(),
		'download_types' => array()
	);
	
	function isCompatible()
	{
		if ($this->Mint->version >= 120)
		{
			return array
			(
				'isCompatible'	=> true
			);
		}
		else
		{
			return array
			(
				'isCompatible'	=> false,
				'explanation'	=> '<p>This Pepper is only compatible with Mint 1.2 and higher.</p>'
			);
		}
	}
	
	/**************************************************************************
	 onJavaScript()
	 **************************************************************************/
	function onJavaScript() {
		$prefs = $this->prefs;
		$js = "pepper/orderedlist/downloads/script.js";
		echo "\n\nvar ol_extensions = '{$prefs['fileExtensions']}';\nvar ol_download_script = '{$this->Mint->cfg['installDir']}/pepper/orderedlist/downloads/download.php';\n\n";
		if (file_exists($js)) { include_once($js); }
		}
	
	/**************************************************************************
	 onRecord()
	 Operates on existing $_GET values, values generated as a result of the 
	 JavaScript output below or existing $_SERVER variables and returns an 
	 associative array with a column name as the index and the value to be 
	 stored in that column as the value.
	 **************************************************************************/
	function onRecord() {	
 		if (empty($_GET)) { return array(); }
 		
		/**********************************************************************
		 Record Downloads
		 **********************************************************************/
		// Get stored download data
		$is_download	= $_GET['is_download'];
		
		if ($is_download) {
			$_GET['is_download'] = 1;
			$prefs = $this->prefs;
			$ext_array = explode(',',$prefs['fileExtensions']);
			
			$data = $this->data;
			$downloads = $data['downloads'];
			$download_types = $data['download_types'];
			
			$path_info = pathinfo($_GET['resource']);
			$ext = $path_info['extension'];
			if (!in_array($ext, $ext_array)) exit();
			
			$file = substr($_GET['resource_title'],11,strlen($_GET['resource_title']));
			if (!$downloads[$file]) {
				$downloads[$file] = 1;
			} else {
				$downloads[$file]++;
			}
			if (!$download_types[$ext]) {
				$download_types[$ext] = 1;
			} else {
				$download_types[$ext]++;
			}
			
			
			
			$data['downloads'] = $downloads;
			$data['download_types'] = $download_types;
			$this->data = $data;
		}
 		
 		return array();
	}
		
	/**************************************************************************
	 onJavaScript()
	 Returns a JavaScript string responsible for extracting the necessary values
	 (if any) necessary for this plug-in.
	 
	 Should follow format of the new SI Object()
	 **************************************************************************/
	
	
	/**************************************************************************
	 onDisplay()
	 Produces what the user sees when they are browsing their Mint install
	 
	 Returns an associative array of associative arrays that contain an HTML 
	 string for each display unit this plug-in is responsible for, plus a formal 
	 display name and the containing element's id (for ordering in preferences 
	 and anchor linking)
	 
	 **************************************************************************/
	function onDisplay($pane,$tab,$column='',$sort='') {
		$html = '';
		
		switch($pane) {
		/* User Agent 007 *****************************************************/
			case 'Download Counter': 
				switch($tab) {
				/* Browsers ***************************************************/
					case 'Most Common':
						$html .= $this->getDownloads_List();
						break;
				/* Platform ***************************************************/
					case 'By Type':
						$html .= $this->getDownloads_ByType();
						break;
					}
				break;
			}
		return $html;
		}
	
	/**************************************************************************
	 onWidget()
	 
	 **************************************************************************/
	function onWidget() { }
	
	/**************************************************************************
	 onDisplayPreferences()
	 
	 Should return an assoicative array (indexed by pane name) that contains the
	 HTML contents of that pane's preference. Preferences used by all panes in 
	 this plug-in should be indexed as 'global'. Any pane that isn't represeneted
	 by an index in the return array will simply display the string "This pane
	 does not have any preferences" (or similar).
	 
	 **************************************************************************/
	function onDisplayPreferences() {
		$prefs = $this->prefs;
 		
		/* Global *************************************************************/
		$preferences['Download Counter']	= <<<HERE
<table>
	<tr>
		<th scope="row">Extensions</th>
		<td><span><input type="text" id="fileExtensions" name="fileExtensions" value="{$prefs['fileExtensions']}" /></span></td>
	</tr>
	<tr>
		<td></td>
		<td>A list of comma delimited file extensions, eg. <code>pdf,zip,mpg,mov</code>.</td>
	</tr>
</table>

HERE;
		
		return $preferences;
		}
	
	/**************************************************************************
	 onSavePreferences()
	 
	 **************************************************************************/
	function onSavePreferences() {
	  $prefs['fileExtensions']	= (isset($_POST['fileExtensions']))?preg_replace('/[^a-zA-Z0-9,]/','',$_POST['fileExtensions']):'';
		$this->prefs = $prefs;
		}
		
	/**************************************************************************
	 getExtensions()
	 
	 **************************************************************************/
	 
	 function getExtensions() {
	 	 $prefs = $this->Mint->getPluginPreferences($this->plugin_id);
		 return $prefs['fileExtensions'];
	 }
	
	
	/**************************************************************************
	 getDownloads_List()
	 
	 **************************************************************************/
	function getDownloads_List() {
		$html = '';
		$prefs = $this->prefs;
		$ext_array = explode(',', $prefs['fileExtensions']);
		$data = $this->data;
		$downloads = $data['downloads'];
		
		foreach($downloads as $file => $total) {
			$this_path_info = pathinfo($file);
			if (!in_array($this_path_info['extension'],$ext_array)) unset($downloads[$file]);
		}
			
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array(
			// display name, CSS class(es) for each column
			array('value'=>'File Downloaded','class'=>''),
			array('value'=>'Total','class'=>'')
			);
		arsort($downloads);
		$i = 0;
		foreach ($downloads as $file=>$total) {
			$tableData['tbody'][] = array(
				$file,
				$total
				);
				$i++;
				if ($i == $this->Mint->cfg['preferences']['rows']) break;
			}
		
		$html = $this->Mint->generateTable($tableData);
		return $html;
		}
		
		
	/**************************************************************************
	 getDownloads_ByType()
	 
	 **************************************************************************/
	function getDownloads_ByType() {
		$html = '';
		$prefs = $this->prefs;
		$ext_array = explode(',', $prefs['fileExtensions']);
		$data = $this->data;
		$download_types = $data['download_types'];
		
		foreach ($download_types as $type => $number) {
			if (!in_array($type,$ext_array)) unset($download_types[$type]);
		}
		
		$tableData['table'] = array('id'=>'','class'=>'');
		$tableData['thead'] = array(
			// display name, CSS class(es) for each column
			array('value'=>'File Extension','class'=>''),
			array('value'=>'Total','class'=>'')
			);
		arsort($download_types);
		foreach ($download_types as $type=>$total) {
			$tableData['tbody'][] = array(
				$type,
				$total
				);
			}
		
		$html = $this->Mint->generateTable($tableData);
		return $html;
		}
		
	
	}