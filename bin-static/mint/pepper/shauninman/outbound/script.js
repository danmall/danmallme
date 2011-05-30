
function Mint_SI_addEvent( obj, type, fn )
{
	if (obj.addEventListener)
	{
		obj.addEventListener( type, fn, false );
	}
	else if (obj.attachEvent)
	{
		obj["e"+type+fn] = fn;
		obj[type+fn] = function() { obj["e"+type+fn]( window.event ); }
		obj.attachEvent( "on"+type, obj[type+fn] );
	};
};
function Mint_SI_IO()
{
	if (document.getElementsByTagName)
	{
		var links = document.getElementsByTagName('a');
		for (var i=0; i<links.length; i++)
		{
			var link = links[i];
			if (link.href && !Mint_SI_IO_isLocal(link.href)  && link.href.indexOf('javascript:')==-1)
			{
				Mint_SI_addEvent(links[i], 'mousedown', Mint_SI_IO_save);
			};
		};
	};
};
function Mint_SI_IO_isLocal(url)
{
	return /^([^:]+):\/\/([a-z0-9]+[\._-])*(<?php echo str_replace('.', '\.', implode('|', $this->Mint->domains));?>)/i.test(url);
};
function Mint_SI_IO_save()
{
	var now		= new Date();
	var then	= now.getTime() + 300;
	var path	= '<?php echo $this->Mint->cfg['installFull']; ?>/pepper/shauninman/outbound/click.php?'+now.getTime();
	path 		= path.replace(/^https?:/, window.location.protocol);
	
	var encoded = 0;
	if (typeof Mint_SI_DocumentTitle == 'undefined') { Mint_SI_DocumentTitle = document.title; }
	else { encoded = 1; };
	var to			= (window.decodeURI)?window.decodeURI(this.href):this.href;
	var from		= (window.decodeURI)?window.decodeURI(document.URL):document.URL;
	var to_title 	= (this.title && this.title != '')?this.title:this.innerHTML;
	
	path += '&to=' + escape(to) + '&to_title=' + escape(to_title) + '&from=' + escape(from) + '&from_title=' + escape(Mint_SI_DocumentTitle) + '&from_title_encoded=' + encoded;
	var img = new Image();
	img.src = path;
	
	while (now.getTime() < then) { now = new Date(); };
};
Mint_SI_addEvent(window, 'load', Mint_SI_IO);
