    <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet -->
    <script>
        var _gaq = [['_setAccount', 'UA-6227622-1'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.async = true;
            g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
        })(document, 'script');
    </script>
    
	<?php /* ?>
    <div id="clicky" class="real-hide">
        <a title="Google Analytics Alternative" href="http://getclicky.com/66439102"><img alt="Google Analytics Alternative" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
        <script src="//static.getclicky.com/js"></script>
        <script type="text/javascript">try{ clicky.init(66439102); }catch(e){}</script>
        <noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/66439102ns.gif" /></p></noscript>
    </div><!-- #clicky -->
	<?php */ ?>
    
    <!-- Chartbeat -->
    <script type="text/javascript">
      var _sf_async_config = { uid: 40863, domain: 'danielmall.com' };
      (function() {
        function loadChartbeat() {
          window._sf_endpt = (new Date()).getTime();
          var e = document.createElement('script');
          e.setAttribute('language', 'javascript');
          e.setAttribute('type', 'text/javascript');
          e.setAttribute('src',
            (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
            "js/chartbeat.js");
          document.body.appendChild(e);
        };
        var oldonload = window.onload;
        window.onload = (typeof window.onload != 'function') ?
          loadChartbeat : function() { oldonload(); loadChartbeat(); };
      })();
    </script>

</body>
</html>
