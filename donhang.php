<style>
    .payment {
    padding: 60px 0;
}
.rows{
    display: flex;
    margin-left: 40px;
    margin-right: 40px;
}
.payment-top-wrap {
    display: flex;
    justify-content:center;
    align-items: center;
}
.payment__list-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    align-items: center;
    justify-content:space-between;
    margin: 50px 0 100px;
   
}
.payment-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    background-color: #fff;
}
.payment-top-item i {
    color:#dddddd;
}
.payment__list-top-payment {
    border: 1px solid #0DB7EA;
}
.payment__list-top-payment i {
    color: #0DB7EA;
}

.row {
    display: flex;
    flex-wrap: wrap;
}
.delivery__content {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}
.delivery__content-left-heading {
    padding-left: 20px;
    
}
.delivery {
    padding: 0px 0;
}
.delivery-top-wrap {
    display: flex;
    justify-content:center;
    align-items: center;
}
.delivery__list-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    align-items: center;
    justify-content:space-between;
    margin: 50px 0 100px;
   
}
.delivery-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    background-color: #fff;
}
.delivery-top-item i {
    color:#dddddd;
}
.delivery__list-top-address {
    border: 1px solid #0DB7EA;
}
.delivery__list-top-address i {
    color: #0DB7EA;
}
.delivery__content-left {
    width: 60%;
    padding-right:12px ;

}
.delivery__content-left label {
    font-size: 12px;
    margin-bottom: 6px;
    display: block;
}
.delivery__content-left-heading {
    font-size: 16px;
    font-weight: 500;
}
.delivery__content-left-login {
    margin-top: 12px;
}
.delivery__content-left-login i {
    font-size: 12px;
    margin-right: 12px;
}
.delivery__content-left-checkbox {
    margin: 12px 0;
}
.delivery__content-left-checkbox input {
    margin-right: 12px;
}
.delivery__content-left-sign  {
    margin-bottom: 20px;
}
.delivery__content-left-sign input {
    margin-right: 12px;
}
.delivery__content-left-input-top {
    justify-content: space-between;
}
.delivery__content-left-input-top-item {
    width: calc(50% - 12px);
}
.delivery__content-left-input-top-item input{
    width: 100%;
    height: 35px;
    border: 1px solid #dddddd;
    padding-left: 6px;
    outline: none;
}
.delivery__content-left-input-top-item-adress label {
    
}
.delivery__content-left-input-top-item-adress input {
    width:100%;
    height: 35px;
    border: 1px solid #dddddd;
    outline: none;
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
    padding-left: 6px;
    transition: all 0.3s ease-in;
}
.delivery__content-left-button button:hover {
    background-color: #000;
    color: #fff;
}
</style>
<div class="payment__list">
            <div class="payment-top-wrap">
                <div class="payment__list-top">
                    <div class="payment__list-top-cart payment-top-item">
                        
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="payment__list-top-address payment-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="payment__list-top-payment payment-top-item">
                    
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
                                  echo '<table>
                                 <tr> 
                                  <th>Tên sản phẩm</th>
                                  <th>Hình ảnh</th>
                                  <th>Size</th>
                                  <th>Số lượng</th>
                                  <th>Đơn giá</th>
                                  <th>Thành tiền</th>
                                  
                                  </tr>';
                                 $tong=0;
                                 $i=0;
                                   foreach ($getshowcart as $item) {
                                    $tt=$item['soluong'] * $item['dongia'];
                                    $tong+=$tt;
                                   
                                     echo '<tr>
                                     <td>'.$item['tensp'].'</td>
                                     <td><img src="'.$item['img'].'" alt="" width="60px"></td>
                                     <td>'.$item['size'].'</td>
                                     <td>'.$item['soluong'].'</td>
                                     <td>'.number_format($item['dongia']).' VNĐ</td>
                                     <td><span style="font-weight: 500;color:red;">'.number_format($tt).'</span>VNĐ</td>
                                     </tr>';
                                    $i++;
                                    

                                }
                            }
                                echo ' <tr>
                                <td style="font-weight: bold;" colspan="4">Tổng giá trị đơn hàng</td>
                                <td style="font-weight: bold;">'.number_format($tong).'</td>
                            </tr>
                           ';
                                 echo '</table>';
                              } else {
                                   // Giỏ hàng trống
                                   //echo 'Giỏ hàng trống.<a href="index.php">Tiếp tục đặt hàng</a>';
                               }
                         ?>
                          <div class="delivery__list">
                            <?php
                          if(isset($_SESSION['iddh'])&&($_SESSION['iddh']>0)){
                            $orderinfo=getorderinfo($_SESSION['iddh']);
                            if(count($orderinfo)>0){
                            ?>
          
              <div class="delivery__content">     
                <div class="delivery__content-left">
                    <p class="delivery__content-left-heading">Thông tin đơn hàng</p>
                    <h3>Mã Đơn hàng:<br><?=$orderinfo[0]['madh'];?></h3>
                     <table>
                        <tr>
                            <td>Tên người nhận:<br><?=$orderinfo[0]['hoten']; ?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ người nhận:<br><?=$orderinfo[0]['address']; ?></td>
                        </tr>
                        <tr>
                            <td>Email người nhận:<br><?=$orderinfo[0]['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại người nhận:<br><?=$orderinfo[0]['tel']; ?></td>
                        </tr>
                     </table>
                     <tr>
                        <td><strong>Phương thức thanh toán</strong></td><br>
                        <?php
                        switch ($orderinfo[0]['pttt']) {
                            case '1':
                                $txtmess="Thanh toán khi nhận hàng";
                                break;
                            case '2':
                                $txtmess="Thanh toán chuyển khoản";
                                break;
                            case '3':
                                $txtmess="Thanh toán ví MoMo";
                                break;
                            case '4':
                                $txtmess="Thanh toán Online";
                                break;
                            
                                default:
                                $txtmess="Quý khách chưa chọn...";
                                break;
                            }
                            echo $txtmess;

                        ?>
                       
                        
                     </tr>
                    <div class="delivery__content-left-button row">
                        <a href="delivery.php"><p><< Quay lại giỏ hàng</p></a>
                        
                    </div>
                </div>   
            <?php
            }
            }
            ?>
                </div>
              </div> 
     </div>