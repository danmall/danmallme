<div class="tg" id="draggable">
	<h2>Table draggable rows</h2>
	<div class="alert info"><pre><code>$("#table-draggable table")
    .tableDnD({dragHandle:'dragHandle'})
    .NSM_UpdateInputsOnChange({inputName:'dragTable'});</code></pre>
	</div>
	
	<table class="data row-sortable NSM_Stripeable">
		<thead>
			<tr>
				<th>&nbsp;</th>
				<th scope="col">Original order</th>
				<th scope="col">Order</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="dragHandle"><span class="icon sort">Drag me to reorder</span></td>
				<td>0</td>
				<td><input type="text" name="dragTable[][s_order]" value="0"></td>
			</tr>
			<tr>
				<td class="dragHandle"><span class="icon sort">Drag me to reorder</span></td>
				<td>1</td>
				<td><input type="text" name="dragTable[][s_order]" value="1"></td>
			</tr>
			<tr>
				<td class="dragHandle"><span class="icon sort">Drag me to reorder</span></td>
				<td>2</td>
				<td><input type="text" name="dragTable[][s_order]" value="2"></td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript" charset="utf-8">
	$("#draggable table")
		.tableDnD({dragHandle:'dragHandle'})
		.NSM_UpdateInputsOnChange({inputName:'dragTable'});
</script>