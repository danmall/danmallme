<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>
    <title>&ldquo;Test,&rdquo; an article by Dan Mall</title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/jsReference.php"); echo "\n"; ?>
    <style>

        #article-area { background: #000; color: #fff; padding: 6em 0 3em; }
        #article-area a:link, .comment-list header h1 a:link { color: red; }
        #split { width: 800px; margin: 0 auto; }
        #one { width: 400px; float: left; }
        #two { width: 300px; margin-left: 300px; }

    </style>
    
</head>

<body id="article" class="articles">	
	
	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/header.php"); echo "\n"; ?>
	
	<div id="article-area-wrap">
	    
	    <section id="article-area">
	        
	        <div id="split">

                <div id="one">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">Duis aute irure dolor</a> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div id="two">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                
            </div>
	        
	    </section><!-- /#article-area -->
	    
	    
	</div><!-- /#article-area-wrap -->
	
	
	<div id="comments">
	
	    <section id="article-meta">

	        <header class="easy-clearing">
	            <?php /* ?><h1>{if comment_total == 0}No comments <a href="#comment-form">yet</a>&hellip;{if:else}{comment_total} Comments{/if}</h1>
	            <p>Posted in {categories backspace="2"}<a href="{path='channel/index'}">{category_name}</a>, {/categories}</p><?php */ ?>
	        </header>
        
	    </section><!-- /#article-meta -->	    	    
	    
	    <div id="comments-wrap">    
            
            
            <div class="main">
                
                <div id="disqus_thread"></div>
                <script>
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'danielmall'; // required: replace example with your forum shortname

                    // The following are highly recommended additional parameters. Remove the slashes in front to use.
                    var disqus_identifier = 'unique_dynamic_id_1234';
                    var disqus_url = 'http://example.com/permalink-to-page.html';
                    var disqus_developer = 1;

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
                
                <?php /* ?>
                
                {!--
        	    <ol class="comment-list">
                    <li>
                        <header>	                    
                            <h1><a href="#">Kevin Cornell</a> shouts&hellip;</h1>
                            <time datetime="2008-01-27T11:55:00"><a href="#comment1" title="Link to this comment">At 11:55 AM on January 27, 2008</a></time>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </li>
                    <li>
                        <header>	                    
                            <h1><a href="#">Kevin Cornell</a> shouts&hellip;</h1>
                            <time datetime="2008-01-27T11:55:00"><a href="#comment2" title="Link to this comment">At 11:55 AM on January 27, 2008</a></time>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </li>
                </ol><!-- /.comment-list --> --}
                
        
                {exp:comment:entries sort="asc"}                
                {if count == 1}<ol class="comment-list no-marker">{/if}
                    {!--<li id="comment{comment_id}">--}
                    <li id="comment{count}">
                        <header>	                    
                            <h1>
                                {if url}<a href="{url}">{/if}
                                    <img class="gravatar" src="{exp:gravatar name="{name}" size="40" rating="R" default="{site_url}/i/gravatar-temp.gif"}" alt="{name}" />
                                    {name}
                                {if url}</a>{/if}
                                 shouts&hellip;
                            </h1>
                            {!--<time datetime="{comment_date format="%Y-%m-%dT%g:%i:00"}"><a href="#comment{comment_id}" title="Link to this comment">{count}. At {comment_date format="%g:%i %A on %F %j %Y"}</a></time>--}
                            <time datetime="{comment_date format="%Y-%m-%dT%g:%i:00"}"><a href="#comment{count}" title="Link to this comment">{count}. At {comment_date format="%g:%i %A on %F %j %Y"}</a></time>
                        </header>
                        {comment}
                    </li>
                {if count == total_results}</ol>{/if}
                {/exp:comment:entries}
                
                
                <section id="comment-form">
            
                    {exp:comment:form channel="articles" preview="channel/preview" form_id="comment-form"}
                    
                    {if logged_out}
                    <div>
                        <label for="comment-name">Name <em>(required)</em></label>
                        <input type="text" id="comment-name" name="name" required />
                    </div>
                    
                    <div>
                        <label for="comment-email">Email Address <em>(required)</em></label>
                        <input type="text" id="comment-email" name="email" required />
                    </div>
            
                    <div>
                        <label for="comment-website">Website</label>
                        <input type="text" id="comment-website" name="url" />
                    </div>
                    {!--
                    <div>
                        <label for="comment-inflection">Inflection</label>
                        <select id="comment-inflection" name="">
                            <option value="says">says</option>
                            <option value="shouts">shouts</option>
                            <option value="says">whispers</option>
                            <option value="says">hesitates</option>
                            <option value="other">other</option>
                        </select>
                    </div>--}
                    
                    {/if}
            
                    <div>
                        <label for="comment-message">Comment <em>(required)</em></label>
                        <textarea id="comment-message" name="comment" cols="70" rows="10" required></textarea>
                    </div>
            
                    <div class="options">
                        <div>
                            <input type="checkbox" id="comment-save-info" name="{save_info}" />
                            <label for="comment-save-info">Save my info</label>                        
                        </div>
                        <div>
                            <input type="checkbox" id="comment-notify" name="{notify_me}" />
                            <label for="comment-notify">Notify me by email of follow-up comments</label>                        
                        </div>
                    </div>
            
                    <div class="submit">
                        <input type="submit" value="Post" />
                    </div>

                    {/exp:comment:form}
            
                </section><!-- /#comment-form -->
                
                <?php */ ?>
                
            </div><!-- /.main -->
	    
	    
    	    <div class="sub">
	        
    	        <section id="article-info">
        	        <header>
        	            <h2>Article Info</h2>
        	        </header>
        	        <time datetime="2009-01-27T">Published January 27, 2009 at 11:45 <abbr title="Ante Meridian">AM</abbr></time>
    	        </section><!-- /#article-info -->
    	        
    	        
    	        <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/carbon.php"); echo "\n"; ?>
	        
	            
	            <?php /* ?>
    	        <section id="article-tags">
        	        <header>
        	            <h2>Tags</h2>
        	        </header>
    	        
        	        <ul class="no-marker">
        	            <li><a href="#">redesign</a></li>
        	            <li><a href="#">bearskinrug</a></li>
        	            <li><a href="#">markhuot</a></li>
        	            <li><a href="#">expressionengine</a></li>
        	        </ul>
    	        
    	        </section><!-- #article-tags --><?php */ ?>
	        
	        
    	    </div><!-- /.sub -->
    	    
    	    
    	</div><!-- #comments-wrap -->
	    
	        
	</div><!-- #comments -->
	
	
	<div class="wrap">
    	
    	<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/footer.php"); echo "\n"; ?>
    	
    	
    </div><!-- #wrap -->
    
	
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>