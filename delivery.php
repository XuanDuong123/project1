<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/delivery.css">
    <title>Document</title>
</head>
<body>
    <!--------------------- Cart ------------------------->
    <!--------------------- Delivery ------------------------->
    <style>
    .menu__item{
    position: absolute;
    z-index: 1;
    background-color: #D5D5D5;
    left: 50%;
    transform: translateX(-50%);
    display: grid;
    grid-template-columns: repeat(2,1fr);
    width: 280px;
    
}
.drodown{
    border: none;
    outline: none;
    cursor: pointer;
    line-height: 20px;
    margin: 10px;
}
.dropdown__header{
    width: 100px;
}
.dropdown__header:hover {
    text-decoration: underline;
}
.delivery__content-left-button input {
    display: inline-block;
    font-size: 12px;
   
}
.delivery__content-left-button {
    justify-content: space-between;
    padding-top: 20px;
}
.delivery__content-left-button a{
    color: #0DB7EA;

}
.delivery__content-left-button input {
    height: 35px;
    border: 1px solid #000;
    cursor: pointer;
    outline: none;
    padding: 0 6px;
 
    transition: all 0.3s ease-in;
}
.delivery__content-left-button input:hover {
    background-color: #000;
    color: #fff;
}
</style>

    <section class="delivery" >
        <div class="delivery__list">
            <div class="delivery-top-wrap">
                <div class="delivery__list-top">
                    <div class="delivery__list-top-delivery delivery-top-item">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="delivery__list-top-address delivery-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="delivery__list-top-pay delivery-top-item">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <?php

            if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
            $getshowcart=getshowcart($_SESSION['iddh']);

            //echo var_dump($_SESSION['giohang']);

             // ... Các mã khác ở đây ...

             // Kiểm tra xem giỏ hàng có tồn tại hay không
             if (isset($getshowcart) && (count($getshowcart) > 0)) {
                 // Xử lý thông tin giỏ hàng
                //  echo '<table>
                //  <tr> 
                //  <th>Tên sản phẩm</th>
                //  <th>Hình ảnh</th>
                //  <th>Size</th>
                 //  <th>Thành tiền</th>
                 //  <th>Xóa</th>
                 //  </tr>';
                  $tong=0;
                  $i=0;
                    foreach ($getshowcart as $item) {
                     $tt=$item['soluong'] * $item['dongia'];
                     $tong+=$tt;
       
                     // echo '<tr>
                     // <td>'.$item[1].'</td>
                     // <td><img src="'.$item[2].'" alt="" width="60px"></td>
                     // <td>'.$item[3].'</td>
                     // <td>'.$item[4].'</td>
                     // <td>'.number_format($item[5]).' VNĐ</td>
                     // <td><span style="font-weight: 500;color:red;">'.number_format($tt).'</span>VNĐ</td>
                     // <td><a class="cart__content-left-icon fa-solid fa-trash-can" href="index.php?act=delcart&i='.$i.'"></a></td>
                     // </tr>';
                     $i++;
             
                 }
             }
             //     echo '</table>';
               } else {
                    // Giỏ hàng trống
                    echo 'Đặt hàng thành công.<a href="index.php">Tiếp tục đặt hàng</a>';
                }
             ?>
                       
        <div class="delivery__list">
          <form action="index.php?act=thanhtoan" method="post">
            <input type="hidden" name="tongdonhang" value="<?=$tong;?>">
              <div class="delivery__content">     
                <div class="delivery__content-left">
                    <p class="delivery__content-left-heading">Vui lòng chọn địa chỉ và thanh toán giao hàng</p>
                    <div class="delivery__content-left-login row">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <p>Đăng nhập (Nếu bạn đã có tài khoản)</p>
                    </div>
                    <div class="delivery__content-left-checkbox row">
                       <input  name="loaikhach" type="radio"> 
                       <p><span style="font-weight: bold;">Khách lẻ</span>(Nếu bạn không muốn lưu lại thông tin)</p>
                    </div>
                    <div class="delivery__content-left-sign row">
                        <input  name="loaikhach" type="radio"> 
                       <p><span style="font-weight: bold;">Đăng ký</span>(Tạo mới tài khoản với thông tin bên dưới)</p>
                    </div>
                    
                    <div class="delivery__content-left-input-top row">
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Họ và tên <span style="color: red;">*</span></label>
                            <input type="text" name="hoten" placeholder="Họ tên người nhận">
                        </div>
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Email <span style="color: red;">*</span></label>
                            <input type="text" name="email" placeholder="Vui lòng nhập email">
                        </div>
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Điện thoại <span style="color: red;">*</span></label>
                            <input type="text" name="tel" placeholder="Vui lòng nhập số điện thoại">
                        </div>
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                            <input type="text" name="address" placeholder="Vui lòng nhập tỉnh thành phố">
                        </div>
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                            <input type="text" name="address" placeholder="Vui lòng nhập quận huyện">
            
                        </div>
                        <div class="delivery__content-left-input-top-item">
                            <label for="">Phường/Xã <span style="color: red;">*</span></label>
                            <input type="text" name="address" placeholder="Vui lòng nhập xã phường">
                            
                        </div>
                    </div>
                    <div class="delivery__content-left-input-top-item-adress">
                        <label for="">Địa chỉ<span style="color: red;">*</span></label>
                        <input type="text" name="address" placeholder="Vui lòng nhập địa chỉ">
                        
                    </div>
                    <div class="delivery__content-left-button row">
                        <a href="viewcart.php"><p><< Quay lại giỏ hàng</p></a>
                        <input type="submit" name="thanhtoan" value="Thanh toán và Nhận hàng">

                    </div>
                </div>
            
                 <div class="delivery__content-right">
                   <!-- <table>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>giảm giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>đ</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng</td>
                            <td style="font-weight: bold;">3.650.000₫</td>
                        </tr>
                       
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Thuế VAT</td>
                            <td style="font-weight: bold;">3.650.000₫</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" colspan="3">Tổng tiền hàng</td>
                            <td style="font-weight: bold;">3.650.000₫</td>
                        </tr>
                       
                    </table>-->
                    <div class="payment__list-body-left">
                    <div class="payment__list-body-left-method-delivery">
                        <p style="font-weight: bold;">Phương thức giao hàng</p>
                        <div class="payment__list-body-left-method-delivery-item">
                            <input type="radio" name="pttt" value="1">
                            <label for="">Giao hàng chuyển phát nhanh</label>
                        </div>
                    </div>
                    <div class="payment__list-body-left-method-delivery-payment">
                        <p style="font-weight: bold;">Hình thức thanh toán</p>
                        <p>Mọi giao dich đều được bảo mật và mã hóa.Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại</p>
                        <div class="payment__list-body-left-method-delivery-payment-item">
                            <input  name="pttt" type="radio" value="2">
                            <label for="">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="payment__list-body-left-method-delivery-payment-item">
                            <input  name="pttt" type="radio" value="3">
                            <label for="">Thanh toán bằng thẻ tín dụng(OnePay)</label>
                        </div>
                        <div class="payment__list-body-left-method-delivery-payment-item-img">
                          <img style="width:100px;" src="https://www.freepnglogos.com/uploads/visa-and-mastercard-logo-26.png" alt="" >
                        </div>
                        <div class="payment__list-body-left-method-delivery-payment-item">
                            <input name="pttt" type="radio" value="4">
                            <label for="">Thanh toán bằng thẻ ATM(OnePay)</label>
                        </div>
                        <div class="payment__list-body-left-method-delivery-payment-item-img">
                            <img style="width:70px;" src="https://inhoangkien.vn/wp-content/uploads/2020/04/BIDV-01-e1585972482948-300x126.png" alt="">
                            <img style="width:90px;" src="https://inhoangkien.vn/wp-content/uploads/2020/04/Techcombank-01-e1585972434854-300x77.png" alt="">
                            <img style="width:70px;" src="https://inhoangkien.vn/wp-content/uploads/2020/04/logo-ngan-hang-ACB-PNG-e1585972709842-300x148.png" alt="">
                            <img style="width:70px;" src="https://inhoangkien.vn/wp-content/uploads/2020/04/logo-ngan-hang-MB-01-e1585972573949-300x193.png" alt="">
                            <img style="width:70px;" src="https://inhoangkien.vn/wp-content/uploads/2020/04/BIDV-01-e1585972482948-300x126.png" alt="">
                        </div>
                          <div class="payment__list-body-left-method-delivery-payment-item">
                              <input  name="pttt" type="radio" value="5">
                              <label for="">Thanh toán bằng MOMO</label>
                          </div>
                          <div class="payment__list-body-left-method-delivery-payment-item-img">
                            <img style="width:70px;" src="https://developers.momo.vn/v3/vi/assets/images/logo-custom2-57d6118fe524633b89befe8cb63a3956.png" alt="" >
                          </div>
                    </div>

                </div>
            </form>
                </div>
              </div> 
     </div>
    </section>
  <!-- Footer -->
</body>
</html>