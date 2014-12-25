<!-- BEGIN: main -->
<div class="grid_16">
					<table>
						<thead>
							<tr>
								<th>Chuyen muc ID</th>
								<th>Ten chuyen muc</th>
								<th colspan="2" width="10%">Actions</th>
							</tr>
						</thead>
					<tbody>
                    <!-- BEGIN: list_cat -->
							<tr>
								<td>{cat.cat_id}</td>
                                <td>{cat.cat_name}</td>
                                <td><a href="admin.php?admin=category&do=edit&id={cat.cat_id}" class="edit">Edit</a></td>
                                <td><a href="admin.php?admin=category&do=delete&id={cat.cat_id}" class="delete">Delete</a></td>
							</tr>
                     <!-- END: list_cat -->
						</tbody>
</table>
</div>
<!-- END: main -->