<!-- BEGIN: main -->
<form action="admin.php?admin=news&do=save" method="post" enctype="multipart/form-data"><!--khai bao de up file -->
<div class="grid_5">
	<p>
		<label for="title">Tên</label>
		<input type="text" name="name" />
	</p>
</div>
<div class="grid_16">
	<p>
		<label for="title">Giá</label>
		<input type="int" name="gia" />
	</p>
</div>
<div class="grid_16">
	<p>
		<label for="title">Số Lượng</label>
		<input type="int" name="soluong" />
	</p>
</div>

<div class="grid_16">
	<p>
		<label for="title">Ghi chú</label>
		<input type="text" name="ghichu" />
	</p>
</div>
<div class="grid_5">
	<p>
		<label for="title">Hinh dai dien</label>
		<input type="file" name="upFile" />
	</p>
</div>

<div class="grid_6">
	<p>
		<label for="title">Loại sản phẩm</label>
		<select name="cat_id" >
        <!-- BEGIN: select_cat -->
        <option value="{cat.cat_id}">{cat.cat_name}</option>
        <!-- END: select_cat -->
        </select>
	</p>
</div>

<div class="grid_6">
	<p>
		<label for="title">Hãng sản xuất</label>
		<select name="id" >
        <!-- BEGIN: select_cat2 -->
        <option value="{the.id}">{the.name}</option>
        <!-- END: select_cat2 -->
        </select>
	</p>
</div>
<div class="grid_16">
     <p class="submit">
         <input type="reset" value="Reset">
         <input type="submit" value="Save">
     </p>
</div>
</form>
<!-- END: main -->