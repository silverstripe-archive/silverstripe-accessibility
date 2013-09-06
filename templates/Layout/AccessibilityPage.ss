$Content
<% if AccessKeys %>
<table class="table">
	<thead>
		<tr>
			<th>Key</th> 
			<th>Page</th>
		</tr>
	</thead>
	<tbody>
		<% loop AccessKeys %>
			<tr>
				<td>$AccessKey</td>
				<td><a href="$Link">$Title</a></td>
			</tr>
		<% end_loop %>
	</tbody>
</table>
<% end_if %>
$Form
$PageComments