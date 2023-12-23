 <h3>Thêm sản phẩm</h3>
 <table border="1" width="50%" style="border-collapse: collapse;">
     <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
         <tr>
             <th colspan="2">Nhập thông tin sản phẩm</th>
         </tr>
         <tr>
             <td>Mã sản phẩm</td>
             <td><input type="text" name="masp"></td>
         </tr>
         <tr>
             <td>Tên sản phẩm</td>
             <td><input type="text" name="tensanpham"></td>
         </tr>
         <tr>
             <td>Giá</td>
             <td><input type="text" name="giasp"></td>
         </tr>
         <tr>
             <td>Giảm giá</td>
             <td><input type="text" name="giamGia"></td>
         </tr>
         <tr>
             <td>Hình ảnh</td>
             <td><input type="file" name="hinhanh"></td>

         </tr>
         <tr>

             <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
         </tr>
     </form>
 </table>