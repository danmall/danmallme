<div id="simple">

	<div class="tg">
		<h2>Simple table group w/ multiple tables</h2>
		<div class="alert info">A sample info alert</div>
		<table>
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">Heading 1</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">Heading 2</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">Heading 3</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
		<table>
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">Heading 1</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">Heading 2</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">Heading 3</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tg">
		<h2>Simple table group w/ alerts</h2>
		<div class="alert info">A sample info alert</div>
		<div class="alert error">A sample error alert</div>
		<div class="alert warning">A sample warning alert</div>
		<div class="alert success">A sample success alert</div>
		<table>
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">Heading 1</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">Heading 2</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">Heading 3</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tg">
		<h2>Data Table</h2>
		<div class="alert info">Simple data table.</div>
		<table class="data">
			<thead>
				<tr>
					<th scope="col">Heading 1</th>
					<th scope="col">Heading 2</th>
					<th scope="col">Heading 3</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td>td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tg">
		<h2>Table with sub headings</h2>
		<div class="alert info">A sample info alert</div>
		<table>
			<tfoot>
				<tr>
					<td>&nbsp;</td>
					<td>Foot 2</td>
					<td>Foot 3</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class="even">
					<th scope="row">th[scope=row]</th>
					<td colspan="2">td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">th[scope=row]</th>
					<td colspan="2">td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th scope="row" rowspan="2">th[scope=row]</th>
					<th class="sub-heading">Sub heading</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="even">
					<th class="sub-heading">Sub heading</th>
					<td>td</td>
					<td>td</td>
				</tr>
				<tr class="odd">
					<th scope="row">th[scope=row]</th>
					<td colspan="2">td</td>
					<td>td</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="tg">
		<h2>Table group with filtering</h2>
		<div class="alert info">A sample info alert</div>
		<ul class="menu tabs">
			<li><a href="#tg2-t1">Table 1</a></li>
			<li><a href="#tg2-t2">Table 2</a></li>
			<li><a href="#tg2-show_all">Show all</a></li>
		</ul>
		<div id="tg2-t1">
			<h3>Table 1</h3>
			<table>
				<thead>
					<tr>
						<th scope="col">Heading 1</th>
						<th scope="col">Heading 2</th>
						<th scope="col">Heading 3</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td>&nbsp;</td>
						<td>Foot 2</td>
						<td>Foot 3</td>
					</tr>
				</tfoot>
				<tbody>
					<tr class="even">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
					<tr class="odd">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
					<tr class="even">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id="tg2-t2">
			<h3>Table 2</h3>
			<table>
				<thead>
					<tr>
						<th scope="col">Heading 1</th>
						<th scope="col">Heading 2</th>
						<th scope="col">Heading 3</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td>&nbsp;</td>
						<td>Foot 2</td>
						<td>Foot 3</td>
					</tr>
				</tfoot>
				<tbody>
					<tr class="even">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
					<tr class="odd">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
					<tr class="even">
						<th scope="row">th[scope=row]</th>
						<td>td</td>
						<td>td</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

