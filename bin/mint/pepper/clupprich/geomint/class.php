<?php

/******************************************************************************
 Geo Mint Pepper
 
 Developer		: Christoph Lupprich
 Plug-in Name	: Geo Mint
 Version        : 0.55
 http://www.stopbeingcarbon.com/geomint/
 http://www.stopbeingcarbon.com
 ---
 Credits go to Geoffrey Hughes who implemented his own features into GeoMint,
 which did it at least partially into this release.
 -----
 
 ******************************************************************************/

$installPepper = "CL_GeoMint";

class CL_GeoMint extends Pepper { 

  var $version    = 55;
  var $info       = array
  (
    'pepperName'    => 'Geo Mint',
    'pepperUrl'     => 'http://www.stopbeingcarbon.com/geomint',
    'pepperDesc'    => 'This pepper collects the locations of your visitors and draws it on a Google Map.',
    'developerName' => 'Christoph Lupprich',
    'developerUrl'  => 'http://www.stopbeingcarbon.com/'
  );
  
  var $panes = array
  (
    'Geo Mint' => array
    (
      'Map',
      'Last Visitors',
      'Country Data'
    )
  );
   
  var $prefs = array
  (
    'googleAPI' => '',
    'plotNum' => 10,
    'plotWidth' => "100%",
    'plotHeight' => "350px",
    'plotLongitude' => 16,
    'plotLatitude' => 47,
    'plotZoom' => 15,
    'dataOption' => 1,
    'daysDisplay' => 7
  );

  var $manifest = array
  (
    'geo' => array
    (
      'id'            => "INT(11) NOT NULL auto_increment",
      'ip'            => "INT(10) NOT NULL default '0'",
      'country_abrv'  => "CHAR(3) NOT NULL default ''",
      'country'       => "VARCHAR(25) NOT NULL default ''",
      'city'          => "VARCHAR(40) NOT NULL default ''",
      'latitude'      => "FLOAT NOT NULL default '0'",
      'longitude'     => "FLOAT NOT NULL default '0'"
    )
  );
    
  var $serverUnavailable = false;

  /**************************************************************************
  update()
  **************************************************************************/
  function update()
  {
    $tbl_Prefix = $this->Mint->db['tblPrefix'];
    
    // Update all cities from 'unknown city' to ''
    $query = "UPDATE {$tbl_Prefix}geo SET city = '' WHERE LCASE(city) REGEXP 'unknown city'";
    $result_city = $this->query($query);
    
    // Update all country abbreviations from '' to 'Unk'
    $query = "UPDATE {$tbl_Prefix}geo SET country_abrv = 'Unk' WHERE country_abrv = ''";
    $result_country = $this->query($query);
    
    if (($result_city == TRUE) && ($result_country == TRUE))
      return true;
    else
      return false;
  }

  /**************************************************************************	
  isCompatible()
  **************************************************************************/
  function isCompatible()
  {
    if($this->Mint->version >= 120)
    {
      return array
      (
        'isCompatible' => true
      );
    }
    else
    {
      return array
      (
        'isCompatible' => false,
        'explanation' => '<p>GeoMint is only compatible with Mint 1.2 and above.</p>'
      );
    }
  }
    
  /**************************************************************************	
  onRecord()

  Operates on existing $_GET values, values generated as a result of the
  JavaScript output below or existing $_SERVER variables and returns an
  associative array with a column name as the index and the value to be
  stored in that column as the value.
  **************************************************************************/

  function onRecord() {
    return array();
  }
  
  /**************************************************************************
   onDisplaySupplemental()
   Any additional CSS or JavaScript required by a pane. CSS should be included
   either via the <link> tag or inline in a <style> tag. JavaScript should be
   enclosed in a <script> tag.
  **************************************************************************/
  function onDisplaySupplemental($pane) 
  {
    $prefs = $this->prefs;
    return "<script type=\"text/javascript\" src=\"http://maps.google.com/maps?file=api&v=2&key={$prefs['googleAPI']}\">//Google API</script>";
	
  }
    
  /**************************************************************************
   onJavaScript()
   Returns a JavaScript string responsible for extracting the necessary values
   (if any) necessary for this plug-in.
   
   Should follow format of the new SI Object()
   **************************************************************************/
  function onJavaScript() {
  }
  
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
      case 'Geo Mint': 
        switch($tab) {
          case 'Map':
            $html .= $this->plotMap();      // drawing the map
            break;
          case 'Last Visitors':
            $html .= $this->showData();     // showing table data;
            break;
          case 'Country Data':
            $html .= $this->showCountries();
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
	  
    if (!($this->Mint->getPepperByClassName("SI_SecretCrush"))) {
	  
      $preferences['Important Pepper Information'] = <<<HERE
<table>
  <tr>
    <td><b>Secret Crush Pepper is not installed. GeoMint will not work!</b></td>
  </tr>
</table>
HERE;
	  }
    
    $preferences['General Settings']	= <<<HERE
<table>
  <tr>
    <th scope="row">GMaps Key<br /></th>
    <td><span><input type="text" id="googleAPI" name="googleAPI" value="{$prefs['googleAPI']}" /></span></td>
  </tr>
  <tr>
    <td colspan="2">Your Google API. Get one at <a href="http://www.google.com/apis/maps/signup.html">http://www.google.com/apis/maps/signup.html</a>.</td>
  </tr>
  <tr>
    <th scope="row">Queries<br /></th>
    <td><span><input type="text" id="plotNum" name="plotNum" value="{$prefs['plotNum']}" /></span></td>
  </tr>
  <tr>
    <td colspan="2">The number of queries (try 50 first, then 100).</td>
  </tr>
  <tr>
    <th scope="row"># of days to display<br /></th>
    <td><span><input type="text" id="daysDisplay" name="daysDisplay" value="{$prefs['daysDisplay']}" /></span></td>
  </tr>
  <tr>
    <td colspan="2">The number of days to display in the map (0 means no limit).</td>
  </tr>
</table><br />
HERE;

    $preferences['Pepper Display Settings']    = <<<HERE
<table>
  <tr>
    <th scope="row">Height of the Google Map</th>
    <td><span><input type="text" id="plotHeight" name="plotHeight" value="{$prefs['plotHeight']}" /></span></td>
  </tr>
  <tr>
    <th scope="row">Width of the Google Map</th>
    <td><span><input type="text" id="plotWidth" name="plotWidth" value="{$prefs['plotWidth']}" /></span></td>
  </tr>
  <tr><td colspan="2">The Height and Width of the Google Map.  You must add 'px' or '%'.</td></tr>
</table><br />
HERE;
    
    $preferences['Google Maps Settings']    = <<<HERE
<table>
  <tr>
    <th scope="row">Starting Longitude</th>
    <td><span><input type="text" id="plotLongitude" name="plotLongitude" value="{$prefs['plotLongitude']}" /></span></td>
  </tr>
  <tr>
    <th scope="row">Starting Latitude</th>
    <td><span><input type="text" id="plotLatitude" name="plotLatitude" value="{$prefs['plotLatitude']}" /></span></td>
  </tr>
  <tr>
    <th scope="row">Zoom Value</th>
    <td><span><input type="text" id="plotZoom" name="plotZoom" value="{$prefs['plotZoom']}" /></span></td>
  </tr>
  <tr><td colspan="2">Enter values for the center of the map and the default zoom level.</td></tr>
</table><br />
HERE;

    $dataOption = array (
      '0' => "",
      '1' => ""
    );

    for ($i = 1; $i <= count($dataOption)+1; $i++) {
      if ($this->prefs['dataOption'] == ($i)) {
        $dataOption[$i] = "checked";
      }
    }

    $preferences['Information Settings']    = <<<HERE
<table>
    <tr>
        <td><label><input type="radio" id="dataOption" name="dataOption" value="1" {$dataOption['1']} /> Display only complete data sets in the data pane.</label></td>
    </tr>
    <tr>
        <td><label><input type="radio" id="dataOption" name="dataOption" value="2" {$dataOption['2']}  /> Display incomplete data sets in the data pane.</label></td>
    </tr>
</table>
HERE;

    return $preferences;
  }
  
  /**************************************************************************
   onSavePreferences()
   
   **************************************************************************/
  function onSavePreferences() {

    $prefs['googleAPI']	    = (isset($_POST['googleAPI']))?$_POST['googleAPI']:'';
    $prefs['plotNum']	    = (isset($_POST['plotNum']))?$_POST['plotNum']:'';
    $prefs['plotHeight']	= (isset($_POST['plotHeight']))?$_POST['plotHeight']:'';
    $prefs['plotWidth']	    = (isset($_POST['plotWidth']))?$_POST['plotWidth']:'';
    $prefs['plotLongitude']	= (isset($_POST['plotLongitude']))?$_POST['plotLongitude']:'';
    $prefs['plotLatitude']	= (isset($_POST['plotLatitude']))?$_POST['plotLatitude']:'';
    $prefs['plotZoom']	    = (isset($_POST['plotZoom']))?$_POST['plotZoom']:'';

    $prefs['dataOption']	= (isset($_POST['dataOption'])) ? $_POST['dataOption'] : 0;
    
    $prefs['daysDisplay']	= (isset($_POST['daysDisplay'])) ? $_POST['daysDisplay'] : 0;
        
    $this->prefs = $prefs;
    
  }
  
  /**************************************************************************
   onCustom()
   
   **************************************************************************/
  function onCustom() {
    
  }
  
    
  /**************************************************************************
   queryHostIP($ip_adr)
    This is the function which queries HostIP.info and stores the data in our
    local db
  **************************************************************************/
  function queryHostIP($ip_adr) {
    $tbl_Prefix = $this->Mint->db['tblPrefix'];
    $ip_adr_ip = long2ip($ip_adr);
    
    $useCURL = in_array('curl', get_loaded_extensions());
    
    $host     = 'api.hostip.info';
    $gateway  = '/get_html.php';
    $post     =  'ip='.$ip_adr_ip.'&position=true';
    $data = '';
        
    if ($useCURL) {
      $handle	 = curl_init();
      curl_setopt($handle, CURLOPT_URL, "http://{$host}{$gateway}");
      curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 4);
      curl_setopt($handle, CURLOPT_RETURNTRANSFER, 1);
      
      curl_setopt($handle, CURLOPT_POST, true);
      curl_setopt($handle, CURLOPT_POSTFIELDS, $post);
      
      $data = curl_exec($handle);
      if (curl_errno($handle))
      {
        $error = 'Could not connect to Gateway (using cURL): '.curl_error($handle);
      }
      curl_close($handle);
    } else {
      //Use fopen
      $handle = fopen("http://{$host}{$gateway}?{$post}", 'rb');  // open connection to hostip.info
      
      while (!feof($handle)) { $data .= fread($handle, 8192); }
      fclose($handle);
    }
    
    $pos = strpos($data, "City:");
    $tmp_string = substr($data, 0, $pos);
    $tmp_string = trim($tmp_string);
    $tmp_string = substr($tmp_string, 9, strlen($tmp_string));
        
    $country = substr($tmp_string, 0, strpos($tmp_string, "("));
    $country = mysql_escape_string($country);
        
    $country_abrv = substr($tmp_string, strpos($tmp_string, "("), strlen($tmp_string));
    $country_abrv = trim($country_abrv, "()");
    if ($country_abrv == '')
      $country_abrv = 'Unk';
        
    $tmp_string = substr($data, $pos, strpos($data, "Latitude:") - $pos);
    $city = substr($tmp_string, 5, strlen($tmp_string));
    $city = trim($city);
    if (preg_match("/unknown city/i", $city))
      $city = '';
    else
      $city = mysql_escape_string($city);

    $tmp_string = substr($data, strpos($data, "Latitude:"), strlen($data));
    $lat = substr($tmp_string, 9, strpos($tmp_string, "Longitude:") - 9);
    $lat = trim($lat);
        
    $tmp_string = substr($tmp_string, strpos($tmp_string, "Longitude:"), strlen($tmp_string));
    $long = substr($tmp_string, 10, strlen($tmp_string));
    $long = trim($long);
        
    if ($lat == NULL)
      $lat = 0;
        
    if ($long == NULL)
      $long = 0;

      
    $query_store_coords = "INSERT INTO {$tbl_Prefix}geo (ip, country, country_abrv, city, latitude, longitude)
                           VALUES ('$ip_adr', '$country', '$country_abrv', '$city', $lat, $long)";
        
    $result_store_coords = $this->query($query_store_coords);
    return;
  }
     
  /**************************************************************************
   plotMap()
   **************************************************************************/
  function plotMap() {
  
    $html = '';
    $cnt_querieslocal = 0;        // some ugly vars
    $cnt_querieshostip = 0;
    $n_host_msg = '';
    $cnt_points = 0;
  
    $tbl_Prefix = $this->Mint->db['tblPrefix'];
    $prefs = $this->prefs;
    
    $tableData['thead'] = array (
      array('value'=>'Showing Map','class'=>''),
    );
    
    // The most important part, the sql-query. Gets the latest, DISTINCT IPs by date dt. Main Mint db
    $query = "SELECT ip_long, dt
              FROM {$tbl_Prefix}visit
              GROUP BY ip_long
              ORDER BY dt DESC
              LIMIT 0, {$prefs['plotNum']}";
    
    if ($result = $this->query($query)) {
      if ($this->serverUnavailable == false) {
        while ($r = mysql_fetch_array($result)) {
        
          $query = "SELECT ip, country, country_abrv, city, latitude, longitude
                    FROM {$tbl_Prefix}geo
                    WHERE ip = '{$r['ip_long']}'";
                    
          $result_geo = mysql_query($query);          // Get geodata by ip from the upper query
          $num_rows = mysql_num_rows($result_geo);
                        
          if ($num_rows == 0) {                   // It may be better not to to a single sql query for every result we get from the mint db.
            mysql_free_result($result_geo);
            $this->queryHostIP($r['ip_long']);       // Not in our local db? Query HostIP
            $cnt_querieshostip++;
          }
        }
      } else {
        $n_host_msg = 'HostIP.info unavailable.';
      }
      mysql_free_result($result_geo);
    }
    
    
    $html_js = <<<HERE
var registered = false;
var map;

function createMarker(point, number)
{
  var marker = new GMarker(point);
  var html = number;
  GEvent.addListener(marker, 'click', function() {
    marker.openInfoWindowHtml(html);
  });
  return marker;
}

function showMap() {
  if (GBrowserIsCompatible()) {
    var mapDOM = document.getElementById('map');
    mapDOM.setAttribute('style', 'width: {$prefs['plotWidth']}; height: {$prefs['plotHeight']};');
    
    map = new GMap2(mapDOM);
    map.addControl(new GSmallMapControl());
    map.addControl(new GMapTypeControl());
    map.setCenter(new GLatLng({$prefs['plotLatitude']}, {$prefs['plotLongitude']}), {$prefs['plotZoom']});
HERE;
    
    if ($prefs['daysDisplay']) {
      $dt_limit = time() - 86400 * $prefs['daysDisplay'];
      $daysDisplay_query = "HAVING dt_max > {$dt_limit}";
    }
    
    $query = "SELECT ip, country, country_abrv, city, latitude, longitude, dt,
              {$tbl_Prefix}visit.ip_long, MAX({$tbl_Prefix}visit.dt) AS dt_max
              FROM {$tbl_Prefix}visit
              INNER JOIN {$tbl_Prefix}geo ON {$tbl_Prefix}visit.ip_long = {$tbl_Prefix}geo.ip
              WHERE city <> ''
              GROUP BY ip_long
              {$daysDisplay_query}
              ORDER BY dt_max DESC
              LIMIT 0 , {$prefs['plotNum']}";
  
    $result_geo = $this->query($query);
    $num_rows = mysql_num_rows($result_geo);
                
    while ($row = mysql_fetch_array($result_geo)) {
        
      $row['ip'] = long2ip($row['ip']);
      $cnt_querieslocal++;
      $cnt_points++;
      
      $row['ip'] = htmlspecialchars($row['ip']);
      $row['city'] = htmlspecialchars($row['city']);
      $row['country'] = htmlspecialchars($row['country']);
      
      $tmp_date = $this->Mint->formatDateTimeRelative($row['dt_max']);
      $tmp = "<div style=white-space: nowrap;>{$row['ip']}</div>";
      $tmp .= "<div style=white-space: nowrap;>{$row['city']}, {$row['country']}</div><div style=white-space: nowrap;>{$tmp_date}</div>";
      
$html_js .= <<<HERE
    var point = new GLatLng({$row['latitude']}, {$row['longitude']});
    var marker = createMarker(point, '{$tmp}');
    map.addOverlay(marker);
    
HERE;
    }
$html_js .= <<<HERE
  }
}
HERE;
    mysql_free_result($result_geo);


$html_geo = <<<HERE
<!--[if IE]>
<style type="text/css">
#map{ width: {$prefs['plotWidth']}; height: {$prefs['plotHeight']} }
</style>
<![endif]-->

<div id="map" style="width: {$prefs['plotWidth']}; height: {$prefs['plotHeight']};"></div>
HERE;

$html_geo .= <<<HERE
<img src="pepper/clupprich/geomint/blank.gif" style="position:absolute;width:0px;height:0px" onload="(function(){
	{$html_js}
    function init(){
      showMap();
	}
	var _interval = setInterval(function(){
		if(document.getElementById('map')){
			clearInterval(_interval);
			init();
		}
	}, 10);

})()" />

HERE;
      
    $html_geo .= "Working with $cnt_points points\n<br />\n";
    $html_geo .= "$cnt_querieshostip queries from Hostip.info\n<br />\n";
    $html_geo .= "$cnt_querieslocal local queries\n<br />\n";
    $html_geo .= $n_host_msg;
        
    $tableData['tbody'][] = array ( $html_geo );
    $html = $this->Mint->generateTable($tableData);
    return $html;
  }
  
        
  /**************************************************************************
   showData()
   
   **************************************************************************/

  function showData() {
    $html = '';
    
    $tbl_Prefix = $this->Mint->db['tblPrefix'];
    $prefs = $this->prefs;
        
    $tableData['thead'] = array
    (
      // display name, CSS class(es) for each column
      array('value'=>'IP', 'class'=>''),
      array('value'=>'Location', 'class'=>''),
      array('value'=>'When', 'class'=>'')
    );
        
    if ($prefs['showHost']) {
      $showHost_query = ", {$tbl_Prefix}visit.xxx_hostname";
    }
        
    switch ($prefs['dataOption'])
    {
      case 1:
        $dataOption_query = "AND city <> ''";
        break;
      case 2:
        $dataOption_query = " ";
        break;
    }
    $query = "SELECT ip, country, country_abrv, city, latitude, longitude, dt,
              {$tbl_Prefix}visit.ip_long, MAX({$tbl_Prefix}visit.dt) AS dt_max {$showHost_query}
              FROM {$tbl_Prefix}visit
              INNER JOIN {$tbl_Prefix}geo ON {$tbl_Prefix}visit.ip_long = {$tbl_Prefix}geo.ip
              WHERE country_abrv <> 'Unk' {$dataOption_query}
              GROUP BY ip_long
              ORDER BY dt_max DESC
              LIMIT 0 , 20";

    $result_geo = $this->query($query);
    $num_rows = mysql_num_rows($result_geo);
    $act_row = 0;        
    
    while ($row = mysql_fetch_array($result_geo)) {
      $act_row++;
            
      $row['ip'] = long2ip($row['ip']);
      if ($row['city'] != "")
        $location = str_replace(" ","&nbsp;",$row['city']) . ",<br />" . str_replace(" ","&nbsp;",$row['country']);
      else
        $location = str_replace(" ","&nbsp;",$row['country']);
      
      $host_ip = $row['ip'];
      
      $tableData['tbody'][] = array
      (
        $host_ip,
        $location,
        $this->Mint->formatDateTimeRelative($row['dt_max']),
      );
    }
    
    mysql_free_result($result_geo);

    $html .= $this->Mint->generateTable($tableData);
    return $html;
  }

  /**************************************************************************
   showCountries()
   
  **************************************************************************/
  function showCountries() {
    $html = '';
    
    $tbl_Prefix = $this->Mint->db['tblPrefix'];
    $prefs = $this->prefs;
        
    $tableData['thead'] = array
    (
      // display name, CSS class(es) for each column
      array('value'=>'#','class'=>''),
      array('value'=>'Country','class'=>''),
      array('value'=>'Percentage','class'=>'')
    );
        
    $query = "SELECT COUNT(ip) AS total_ips FROM {$tbl_Prefix}geo";
    $result_count = $this->query($query);
    $row = mysql_fetch_array($result_count);
    $total_ips = $row['total_ips'];
        
    $query = "SELECT COUNT(ip) AS ip_count, country, country_abrv FROM {$tbl_Prefix}geo
              WHERE country_abrv <> 'Unk'
              GROUP BY country
              ORDER BY ip_count DESC
              LIMIT 0, 20";

    $result_geo = $this->query($query);
    $num_rows = mysql_num_rows($result_geo);
    $act_row = 0;        
    
    while ($row = mysql_fetch_array($result_geo)) {
      $act_row++;
      
      $tableData['tbody'][] = array
      (
        $act_row,
        $row['country'],
        round(($row['ip_count'] / $total_ips) * 100, 2) . '%' . ' (' . $row['ip_count'] . ')'
      );
    }
    
    mysql_free_result($result_geo);
        
    $html .= $this->Mint->generateTable($tableData);
    return $html;
  }
}
