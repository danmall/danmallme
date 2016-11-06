<section class="windows-nav">

                <h1 class="windows-nav_heading">More from #dangoeswindows</h1>

                <nav class="series-nav">
                    <ol class="series-nav-list">

                    	<?php if($_SERVER['REQUEST_URI'] == '/articles/opening-windows/') { ?>
                    	<li><mark class="windows-nav--currentArticle">Opening Windows</mark></li>
                        <?php } else { ?>
                        <li><a href="/articles/opening-windows/">Opening Windows</a></li>
                        <?php } ?>

                    	<?php if($_SERVER['REQUEST_URI'] == '/articles/setting-up-windows/') { ?>
                    	<li><mark class="windows-nav--currentArticle">Setting up Windows</mark></li>
                        <?php } else { ?>
                        <li><a href="/articles/setting-up-windows/">Setting Up Windows</a></li>
                        <?php } ?>

                    </ol>
                </nav>

            </section>