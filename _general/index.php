<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/functions.php"); echo "\n"; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/doctype.php"); echo "\n"; ?>
<head>    
    <title></title>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/meta.php"); echo "\n"; ?>        

    <?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/cssReference.php"); echo "\n"; ?>        

</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- ========= Headings ======== -->

    <h1>Heading 1</h1>

    <h2>Heading 2</h2>

    <h3>Heading 3</h3>

    <h4>Heading 4</h4>

    <h5>Heading 5</h5>

    <h6>Heading 6</h6>




    <!-- ========= Fake Headings ======== -->

    <h1 class="dm-u-heading--xxl">Fake Heading 1</h1>

    <h1 class="dm-u-heading--xl">Fake Heading 2</h1>

    <h1 class="dm-u-heading--l">Fake Heading 3</h1>

    <h1 class="dm-u-heading--m">Fake Heading 4</h1>

    <h1 class="dm-u-heading--s">Fake Heading 5</h1>

    <h1 class="dm-u-heading--xs">Fake Heading 6</h1>




    <!-- ========= Resizing Text ======== -->

    <p class="dm-u-text--xxl">Resizing Text 1</p>

    <p class="dm-u-text--xl">Resizing Text 1</p>

    <p class="dm-u-text--l">Resizing Text 2</p>

    <p class="dm-u-text--m">Resizing Text 3</p>

    <p class="dm-u-text--s">Resizing Text 4</p>

    <p class="dm-u-text--xs">Resizing Text 5</p>


    <!-- ========= Generic Content Elements (Block Level) ======== -->

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco <a href="#">laboris</a> nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p><img src="http://placekitten.com/400/300" alt="Kitty" /></p>

    <ul>
    	<li>Unordered List Item 1</li>
    	<li>Unordered List Item 2</li>
    	<li>Unordered List Item 3</li>
    	<li>Unordered List Item 4</li>
    	<li>Unordered List Item 5</li>
    </ul>

    <ol>
    	<li>Ordered List Item 1</li>
    	<li>Ordered List Item 2</li>
    	<li>Ordered List Item 3</li>
    	<li>Ordered List Item 4</li>
    	<li>Ordered List Item 5</li>
    </ol>

    <blockquote>
    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua.</p>
    </blockquote>


    <!-- ========= Generic Content Elements (Inline) ======== -->

    <p><em>Emphasized</em></p>

    <p><strong>Strong</strong></p>

    <p><i>Italic</i></p>

    <p><b>Bold</b></p>

    <p><code>&lt;p&gt;This is HTML code&lt;p&gt;</code></p>

    <p><kbd>File &gt; Save</kbd></p>

    <p>The <abbr title="Justice League of America">JLA</abbr> can beat the Avengers any day.</p>

    <p>This is superscript text<sup>superscript</sup>. This is a subscript text <sub>subscript</sub>.</p>


    <!-- ========= Forms ======== -->

    <form action="#" method="post">

    	<div class="form-row">
    		<label for="label1">Text Input</label>
    		<input type="text" id="label1" placeholder="Placeholder Text" />
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<label for="label2">Password Input</label>
    		<input type="password" id="label2" />
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<label for="label3">Select Box</label>
    		<select id="label3">
    			<option value="">Select an option</option>
    			<option value="Option 1">Option 1</option>
    			<option value="Option 2">Option 2</option>
    			<option value="Option 3">Option 3</option>
    			<option value="Option 4">Option 4</option>
    		</select>
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<label for="label4">Textarea</label>
    		<textarea id="label4" rows="10" cols="60"></textarea>
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<input type="checkbox" id="label5" />
    		<label for="label5">Checkbox 1</label>    		
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<input type="checkbox" id="label6" />
    		<label for="label6">Checkbox 2</label>    		
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<input type="radio" name="radios" id="label7" />
    		<label for="label7">Radio 1</label>    		
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<input type="radio" name="radios" id="label8" />
    		<label for="label8">Radio 2</label>    		
    	</div><!-- .form-row -->

    	<div class="form-row">
    		<input type="submit" value="Submit" />
    	</div><!-- .form-row -->

    </form>


    <!-- ========= Tables ======== -->

    <table>

		<thead>
			<tr>
				<th scope="col">Drink</th>
				<th scope="col">Calories</th>
				<th scope="col">Fat (g)</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th scope="col">Caramel Frappuccino&reg; Light Blended Coffee</th>
				<td>130</td>
				<td>1</td>
			</tr>
			<tr>
				<th scope="col">Coffee Frappuccino&reg; Blended Coffee</th>
				<td >180</td>
				<td >2.5</td>
			</tr>
			<tr>
				<th scope="col">Shaken Tazo&reg; Iced Passion&reg; Tea (unsweetened)</th>
				<td>0</td>
				<td>0</td>
			</tr>
			<tr>
				<th scope="col">Shaken Tazo&reg; Iced Black Tea Lemonade</th>
				<td >100</td>
				<td >0</td>
			</tr>
			<tr>
				<th scope="col">Nonfat Iced Vanilla Latte</th>
				<td>120</td>
				<td>0</td>
			</tr>
		</tbody>
	</table>



<?php require($_SERVER["DOCUMENT_ROOT"]."/-/_inc/close.php"); echo "\n"; ?>    