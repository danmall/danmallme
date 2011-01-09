<div class="tg" id="complex">
	<h2>Complex table!</h2>
	<table class="data cloneable row-sortable col-sortable NSM_MagicCheckboxes NSM_Stripeable">
		<thead>
			<tr>
				<th scope="col" class="{sorter: false}">&nbsp;</th>
				<th scope="col">Original order (time added)</th>
				<th scope="col">Sorted order</th>
				<th scope="col" class="{sorter: false}"><input type="checkbox" class="NSM_MagicCheckboxesTrigger" /></th>
				<th scope="col" class="{sorter: false}" style="width:18px">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	<div class="actions">
		<span class="icon add" href="#">Add a row</span>
	</div>
</div>
<script type="text/javascript" charset="utf-8">
	$("#complex table").NSM_Cloneable({
		addTrigger: function(){return $(this).next().find(".add")},
		cloneTemplate: $("<tr>"
			+ "<td class='dragHandle'><span class='sort icon'>Drag to reorder</span></td>"
			+ "<td class='date'></td>"
			+ "<td>Order: <input type='text' name='king[][s_order]' value='' style='width:20px;' /></td>"
			+ "<td><input type='checkbox' name='toggle[]' /></td>"
			+ "<td><span class='icon delete' type='button'>Delete</span></td>"
			+ "</tr>")
	})
	.NSM_UpdateInputsOnChange({inputName:"king"})
	.tableDnD({dragHandle:'dragHandle'})
	.bind("addCloneEnd.NSM_Cloneable", function(e, clone){ 
		$(clone).find(".date").text(new Date().getTime());
		$(this).trigger("update").tableDnDUpdate();
	})
	.bind("deleteCloneEnd.NSM_Cloneable", function(e, clone){ 
		$(this).trigger("update").tableDnDUpdate();
	});
</script>