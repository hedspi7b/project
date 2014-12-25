<!-- BEGIN: main -->
<div class="grid_16">
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Tên Khách Hàng</th>
                                <th>email</th>
                                <th>Điện Thoại</th>
                                <th>Sản phẩm</th>
                                <th>Tổng tiền cần trả</th>
                                <th>Địa Chỉ Khách Hàng</th>
								<th colspan="2" width="10%">Actions</th> 
							</tr>
						</thead>
<?php
$id = $_GET['do'];
$query = "SELECT * FROM hoadon WHERE id = $id";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$a = $row['idsp'];
echo $a;
?>
                        
                        
					<tbody>
                    <!-- BEGIN: list_cat -->
							<tr>
								<td>{cat.id}</td>
                                <td>{cat.name}</td>
                                <td>{cat.email}</td>
                                <td>{cat.dienthoai}</td>
                                <td>{ten}</td>
                                <td>{tien} đ</td>
                                <td>{cat.diachi}</td>
     <!--                           <td><a href="index.php?admin=thanhtoan&do=23" class="edit">Edit</a></td>-->
                                <td><a href="admin.php?admin=thanhtoan&do={cat.id}&xoa=1" class="delete">Delete</a></td>
							</tr>
                     <!-- END: list_cat -->
						</tbody>
</table>
</div>
<!-- END: main -->