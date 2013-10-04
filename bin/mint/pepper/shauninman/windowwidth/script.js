if (!Mint.SI) { Mint.SI = new Object(); }
Mint.SI.WindowWidth = 
{
	onsave	: function() 
	{
		var width = -1;
		if (window.innerWidth)
		{
			width = window.innerWidth;
		}
		else if (document.getElementsByTagName)
		{
			var html = document.getElementsByTagName('html');
			if (html[0].offsetWidth)
			{
				width = html[0].offsetWidth;
			}
		}
		return '&window_width=' + width;
	}
};
