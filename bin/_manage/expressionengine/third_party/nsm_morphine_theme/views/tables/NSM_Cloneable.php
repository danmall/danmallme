<div class="tg" id="NSM_Cloneable">
	<h2>Simple table (Cloneable)</h2>
	<div class="alert info">
		<p>A table containing cloneable tbody > tr rows. Autoatically updates s_order and delete keys on add and delete events.</p>
		<pre><code>$("#table-cloneable table").NSM_Cloneable({
	cloneTemplate: $("&lt;tr&gt;"
		+ "&lt;td&gt;Order: &lt;input type='text' name='clone1[][s_order]' value='' style='width:20px;' /&gt;&lt;/td&gt;"
		+ "&lt;td&gt;&nbsp;&lt;/td&gt;"
		+ "&lt;td&gt;&lt;span class='icon delete'&gt;Delete&lt;/span&gt;&lt;/td&gt;"
	+ "&lt;/tr&gt;")
}).NSM_UpdateInputsOnChange();</code></pre>
	</div>
	<table id="clone1" class="data cloneable NSM_Stripeable">
		<thead>
			<tr>
				<th scope="col">Order</th>
				<th scope="col" style="width:18px">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<div class="actions">
		<span class="icon add">Add a row</span>
	</div>
</div>

<script type="text/javascript" charset="utf-8">
	$("#NSM_Cloneable table").NSM_Cloneable({
		addTrigger: function(){return $(this).next().find(".add")},
		cloneTemplate: $("<tr>"
			+ "<td><input type='text' name='clone1[][s_order]' value='' style='width:20px;' /></td>"
			+ "<td><span class='icon delete' type='button'>Delete</span></td>"
			+ "</tr>"
		)
    })
	.NSM_UpdateInputsOnChange();
</script>
