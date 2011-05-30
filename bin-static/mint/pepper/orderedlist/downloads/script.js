var is_download = 0;

function getExtension(value) {
  return value.substring(value.lastIndexOf('.') + 1,value.length);
}

function isdefined( variable) {
    return (typeof(window[variable]) == "undefined")?  false: true;
}

function ol_get_domain(str) {
	if (str.substr(0,7) == 'http://') str = str.substr(7);
	if (str.substr(0,8) == 'https://') str = str.substr(8);
	str = str.substr(0,str.indexOf('/'));
	str = str.replace('www.','');
	return str;
}

if (!isdefined('addLoadEvent')) {
	function addLoadEvent(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				oldonload();
				func();
			}
		}
	}
}

function activateDownloads() {
	ext_list = ol_extensions.split(',');
	var e=document.getElementsByTagName("a");
	for(var i=0;i<e.length;i++) {
		for (var j = 0; j <ext_list.length; j++) {
			if (getExtension(e[i].href) == ext_list[j]) {
				if (ol_get_domain(e[i].href) == ol_get_domain(document.URL)) {
						e[i].onMouseOver = function() { thelink = this.href; target = unescape(thelink.substr(thelink.indexOf('='))); window.status = 'Download: ' + target; }
						e[i].onMouseOut = function() { window.status = ''; } 
						e[i].href = ol_download_script + '?file=' + escape(e[i].href);
				}
			}
		}
	}
}

addLoadEvent(activateDownloads);
