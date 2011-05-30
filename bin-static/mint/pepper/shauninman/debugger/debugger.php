<?php
/******************************************************************************
 Pepper
 
 Developer		: Shaun Inman
 Plug-in Name	: Debug Pepper
 
 http://www.shauninman.com/

******************************************************************************
 Debugger
******************************************************************************/
if (!defined('MINT')) { header('Location:/'); }; // Prevent viewing this file 

function p($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function rel($diff)
{
	$return = '';
	if ($diff < 60)
	{
		$return = $diff.'s';
	}
	else
	{
		$diff = floor($diff / 60);
		if ($diff < 60)
		{
			$return = $diff.'m';
		}
		else
		{
			$diff = floor($diff / 60);
			if ($diff < 24)
			{
				$return = $diff.'h';
			}
			else
			{
				$diff = floor($diff / 24);
				$return = $diff.'d';
			}
		}
	}
	
	return $return;
}

list($filter, $ip, $previous) = (isset($_COOKIE['Debugger'])) ? explode('|', $_COOKIE['Debugger']) : array(0, '', time());
$Mint->bakeCookie('Debugger', $filter.'|'.$ip.'|'.time());

function total($col = '')
{
	global $Mint;
	$total = 0;
	
	$where = '';
	switch($col)
	{
		case 'untrackable':
			$where = 'WHERE `trackable` = 0';
		break;
		
		case 'uncookieable':
			$where = 'WHERE `cookieable` = 0 AND `trackable` = 1';
		break;
	}
	
	$distinct = (false) ? 'DISTINCT' : '';
	
	$query = "SELECT COUNT({$distinct} ip_long) AS 'total' FROM `{$Mint->db['tblPrefix']}debugger` {$where}";
	if ($result = mysql_query($query))
	{
		if ($r = mysql_fetch_assoc($result))
		{
			$total = $r['total'];
		}
	}
	return $total;
}

function percent($x, $out_of)
{
	$base = 0;
	if ($out_of > 0)
	{
		$base = round(($x / $out_of) * 100);
	}
	if ($base == 0)
	{
		$base = '&lt;1';
	}
	return "{$base}%";
}

// based on total traffic, not unique visitors
$total_rows		= total();
$untrackable	= percent(total('untrackable'), $total_rows);
$uncookieable	= percent(total('uncookieable'), $total_rows);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="refresh" content="30" />
<title>Mint: Debugging <?php echo $Mint->cfg['siteDisplay']?></title>
<script type="text/javascript" src="../../../app/scripts/si-object-mint.js"></script>
<script type="text/javascript" language="javascript">
// <![CDATA[
function refresh(form)
{
	var cookie	= SI.Cookie.get('Debugger');
	var config	= (cookie) ? cookie.split('|') : <?php echo "[{$filter}, '{$ip}', {$previous}]"; ?>;
	config[0]	= form.filter.options[form.filter.selectedIndex].value;
	config[1]	= form.ip.value;
	SI.Cookie.set('Debugger', config.join('|'));
	window.location.href = window.location.href;
}

function ip(e)
{
	var form = $('filter-form');
	form.ip.value = e.innerHTML;
	form.filter.selectedIndex = 0;
	refresh(form);
}
// ]]>
</script>
<style type="text/css" title="text/css" media="screen">
/* <![CDATA[ */
body
{
	position: relative;
	background-color: #FFF;
	margin: 0;
	padding: 48px;
	font: 76%/1.6em "Helvetica", "Lucida Grande", Verdana, Arial, sans-serif;
	color: #333;
}

h1
{
	font-weight: normal;
	line-height: 1.2em;
}

table
{
	border-collapse: collapse;
	margin: 0 0 1.0em;
}

th,td
{
	text-align: left;
	vertical-align: top;
	white-space: nowrap;
	padding: 2px 4px;
}

.wrap
{
	white-space: normal;
}

td
{
	border-top: 1px solid #DDD;
}

th.sub
{
	font-weight: normal;
	font-size: 0.9em;
	border-bottom: 2px solid #999;
}

tr.stale td
{
	color: #999;
}

tr.uncookied td,
tr.untracked td
{
	color: #FFF;
	background-color: #F11 !important;
	border-top: 1px solid #C00 !important;
}

td.unique
{
	background-color: #EEE;
}

tr.uncookied td.unique,
tr.untracked td.unique
{
	background-color: #F44 !important;
}

tr.uncookied td td,
tr.untracked td td
{
	border-top: 1px solid #F99 !important;
}

tr:first-child td,
tr.untracked:first-child td,
tr.uncookied:first-child td
{
	border-top: none !important;
}

.arrow-up
{
	display:block;
	width: 0;
	height: 0;
	overflow: hidden;
	border: 5px solid transparent;
	border-bottom: 5px solid #F11;
	margin: -8px 0 -2px -2px;
}

.arrow-up.total
{
	border-bottom-color: #CCC;
}

tr.uncookied .arrow-up,
tr.untracked .arrow-up
{
	border-bottom-color: #FFF;
}

tr.uncookied .arrow-up.total,
tr.untracked .arrow-up.total
{
	border-bottom-color: #F99;
}

#notice
{
	border: 1px solid #F2F2C2;
	background-color: #FFC;
	padding: 0.6em 1.0em;
}

.ip:hover
{
	text-decoration: underline;
	cursor: pointer;
}

/* ]]> */
</style>
</head>
<body>
<?php
function selected($value)
{
	global $filter;
	return ($filter == $value) ? ' selected="selected"' : '';
}
?>
<form action="?<?php echo $Debugger->prefs['password']?>" method="POST" onsubmit="refresh(this);" id="filter-form">
	IP Address <input type="text" name="ip" value="<?php echo $ip ?>" />
	<select name="filter" onchange="refresh(this.form);">
		<option value="0"<?php echo selected(0);?>></option>
		<option value="1"<?php echo selected(1);?>>Untrackable (<?php echo $untrackable ?>)</option>
		<option value="2"<?php echo selected(2);?>>Uncookieable (<?php echo $uncookieable ?>)</option>
	</select>
	<input type="button" value="Unfilter" onclick="this.form.ip.value='';this.form.filter.selectedIndex=0;refresh(this.form);" />
</form>

<table>
	<tr>
		<th>When</th>
		<th>Local</th>
		<th>Resource</th>
		<th>User Agent</th>
		<th>IP Address</th>
		<th>Cookies</th>
		<th>Visits</th>
	</tr>
<?
$debugger_table = "{$Mint->db['tblPrefix']}debugger";
$visit_table 	= "{$Mint->db['tblPrefix']}visit";

$debugger_map	= array_keys($Debugger->manifest['debugger']);
$visit_map		= array_keys($Mint->cfg['manifest']['visit']);
$visit_start 	= count($debugger_map);

$where = array();
switch($filter)
{
	case '1':
		$where[] = '`trackable` = 0';
	break;
	
	case '2':
		$where[] = '`cookieable` = 0 AND `trackable` = 1';
	break;
}

if ($ip)
{
	$where[] = 'mint_debugger.ip_long = '.ip2long($ip);
}

$where = (!empty($where)) ? 'WHERE '.join(' AND ', $where) : '';

$num = 36;
$query = "SELECT * FROM `{$debugger_table}` LEFT JOIN `{$visit_table}` ON {$debugger_table}.id = {$visit_table}.debug_id {$where} ORDER BY {$debugger_table}.dt DESC LIMIT 0, {$num}";
if ($result = $Mint->query($query))
{
	while ($row = mysql_fetch_row($result))
	{
		$debug = array();
		$visit = array();
		
		foreach($debugger_map as $i => $col)
		{
			$debug[$col] = $row[$i];
		}
		foreach($visit_map as $i => $col)
		{
			$visit[$col] = $row[$i + $visit_start];
		}
		
		$ip			= long2ip($debug['ip_long']);
		$when		= $Mint->offsetDate('h:i:s<\b\r />Y.m.d', $debug['dt']);
		$local		= $Mint->offsetDate('h:i:s<\b\r />Y.m.d', $debug['local_dt']);
		$diff		= '<br />~'.rel(abs($debug['dt'] - $debug['local_dt']));
		$cookies	= $Mint->safeUnserialize($debug['cookies']);
		$cookies_html = '<table>';
		if ($cookies)
		{
			foreach($cookies as $name => $value)
			{
				$cookies_html .= "<tr><th>{$name}</th><td>{$value}</td></tr>";
			}
		}
		$cookies_html .= '</table>';
		
		$visits_before	= $Mint->safeUnserialize($debug['visits_before']);
		$visits_after	= $Mint->safeUnserialize($debug['visits_after']);
		
		$visits_html  = <<<HTML
	<table>
		<tr>
			<th></th>
			<th colspan="2">Hour</th>
			<th colspan="2">Day</th>
			<th colspan="2">Week</th>
			<th colspan="2">Month</th>
			<th colspan="2">Since Install</th>
		</tr>
		<tr>
			<th></th>
			<td>Total</td>
			<td class="unique">Unique</td>
			<td>Total</td>
			<td class="unique">Unique</td>
			<td>Total</td>
			<td class="unique">Unique</td>
			<td>Total</td>
			<td class="unique">Unique</td>
			<td>Total</td>
			<td class="unique">Unique</td>
		</tr>
HTML;

		if (!empty($visits_after))
		{
			$visits_html .= '<tr><th>After</th>';
			foreach($visits_after as $dt => $visits)
			{
				$total_arrow 	= ($visits['total']		> $visits_before[$dt]['total'])		? '<span class="arrow-up total">&nbsp;</span>' : '';
				$unique_arrow 	= ($visits['unique']	> $visits_before[$dt]['unique'])	? '<span class="arrow-up">&nbsp;</span>' : '';
				$visits_html .= '<td>'.number_format($visits['total']).$total_arrow.'</td><td class="unique">'.number_format($visits['unique']).$unique_arrow.'</td>';
			}
			$visits_html .= '</tr>';
		}	
		
		$visits_html .= '<tr><th>Before</th>';
		foreach($visits_before as $dt => $visits)
		{
			$visits_html .= '<td>'.number_format($visits['total']).'</td><td class="unique">'.number_format($visits['unique']).'</td>';
		}
		$visits_html .= '</tr>';
		$visits_html .= '</table>';
		
		if (isset($visit['browser_family']))
		{
			$ua007_html = <<<HTML
			<tr>
				<td>{$visit['browser_family']}</td>
			</tr>
			<tr>
				<td>{$visit['browser_version']}</td>
			</tr>
			<tr>
				<td>{$visit['platform']}</td>
			</tr>
HTML;
		}
		else
		{
			$ua007_html = '';
		}
		
		$ua_html = <<<HTML
		<table>
			<tr>
				<th class="wrap">{$debug['ua']}</th>
			</tr>
			{$ua007_html}
		</table>
HTML;
		
		$classes = array();
		if (empty($visits_after))
		{
			$classes[] = 'untracked';
		}
		if (empty($cookies))
		{
			$classes[] = 'uncookied';
		}
		if ($debug['dt'] < $previous)
		{
			$classes[] = 'stale';
		}
		
		$class 				= (!empty($classes)) ? ' class="'.join(' ', $classes).'"' : '';
		$record_duration	= (!empty($visit['dt'])) ? '<br />~'.($visit['dt'] - $debug['dt']).'s' : '';
		$resource			= $Mint->abbr($debug['resource'], 32, true);
		
		echo <<<HTML
	<tr{$class}>	
		<td>{$when}{$record_duration}</td>
		<td>{$local}{$diff}</td>
		<td>{$resource}</td>
		<td>{$ua_html}</td>
		<td><span class="ip" onclick="ip(this);">{$ip}</span></td>
		<td>{$cookies_html}</td>
		<td>{$visits_html}</td>
	</tr>
HTML;
	}
}

/*

With JavaScript disabled Debugger is never called because /mint/?js is never retrieved.
With Cookies disabled Before and After can occur but we cannot determine a if this is a unique or repeat visit.
With Images disabled, Before is present but After isn't, no hit is recorded.
With Crawlers, Before is present but After isn't, no hit is recorded.

*/

?>
</table>

<?php echo $Mint->getFormattedVersion(); ?>

</body>
</html>