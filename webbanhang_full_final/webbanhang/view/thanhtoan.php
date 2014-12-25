<!-- BEGIN: main -->
<link href="cart.css" rel="stylesheet" type="text/css" />
   
        <div class="content-right">
          <h2 class="title-sale">Giỏ hàng</h2>
          <div class="table-box">
          <table class="table-stacked table shoppingCartTable table-bordered" id="shoppingCartTable">
            <tbody>
              <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
              
                <th>Tổng</th>
              </tr>
              {chen}
            </tbody>
            <tfoot>
              <tr>
                <td class="action"></td>
                <td class="product"></td>
                <td class="price"><b>Tổng cộng: </b></td>
               
                <td class="total">{tong}&nbsp;₫</td>
              </tr>
            </tfoot>
          </table>
          </div>
          <div class="cart-button">
          		<a class="btn" href="index.php">Tiếp tục mua hàng</a>
                <a class="btn" href="sanpham.php?do=xoa">Xoá</a>                
                <a class="btn btn-checkout" href="sanpham.php?do=hd">THANH TOÁN</a>
          </div>
      </div>
<!-- END: main -->