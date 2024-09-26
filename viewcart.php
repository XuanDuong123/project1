<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/delivery.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body>
<section class="cart" >
        <div class="cart__list">
            <div class="cart-top-wrap">
                <div class="cart__list-top">
                    
                    <div class="cart__list-top-cart cart-top-item">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="cart__list-top-address cart-top-item">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="cart__list-top-pay cart-top-item">
                        <i class="fa-regular fa-credit-card"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart__list">
            <div class="cart__content row">
                <div class="cart__content-left">
                    
                        <?php
                            session_start();

                            //echo var_dump($_SESSION['giohang']);

                             // ... Các mã khác ở đây ...

                             // Kiểm tra xem giỏ hàng có tồn tại hay không
                             if (isset($_SESSION['giohang']) && (count($_SESSION['giohang']) > 0)) {
                                 // Xử lý thông tin giỏ hàng
                                 echo '<table>
                                 <tr> 
                                 <th>Tên sản phẩm</th>
                                 <th>Hình ảnh</th>
                                 <th>Size</th>
                                 <th>Số lượng</th>
                                 <th>Đơn giá</th>
                                 <th>Thành tiền</th>
                                 <th>Xóa</th>
                                 </tr>';
                                 $tong=0;
                                 $i=0;
                                 $tongSoLuong = 0;
                                   foreach ($_SESSION['giohang'] as $item) {
                                    $soLuong = $item[4];

        // Cập nhật thành tiền theo số lượng mới (đơn giá * số lượng)
        $tt = $item[5] * $soLuong;
        $tong += $tt;
        $tongSoLuong += $soLuong;

        echo '<tr>
            <td>' . $item[1] . '</td>
            <td><img src="' . $item[2] . '" alt="" width="60px"></td>
            <td>' . $item[3] . '</td>
            <td>' . $soLuong . '</td>
            <td>' . number_format($item[5]) . ' VNĐ</td>
            <td><span style="font-weight: 500;color:red;">' . number_format($tt) . '</span>VNĐ</td>
            <td><a class="cart__content-left-icon fa-solid fa-trash-can" href="index.php?act=delcart&i=' . $i . '"></a></td>
        </tr>';
        $i++;

                                }
                                echo '</table>';
                             } else {
                                  // Giỏ hàng trống
                                  echo 'Giỏ hàng trống.<a href="index.php">Tiếp tục đặt hàng</a>';
                              }
                        // ?>
                        <a href="index.php?act=delcart">Xóa giỏ hàng</a>

                    
                    
                </div>
                <div class="cart__content-right">
                    <table>
                        <tr>
                            <th colspan="2">Tổng tiền giỏ hàng</th>
                        </tr>
                        <tr>
                            <td>Tổng sản phẩm</td>
                            <td id="total"> <?=  $tongSoLuong ; ?></td>
                            
                        </tr>
                        <tr>
                            <td>Tổng tiền hàng</td>
                            <td><span><?=number_format($tong);
                            
                            ?></span> VNĐ</td>
                        </tr>
                        <tr>
                            <td>Tạm tính</td>
                            <td><span style="font-weight: 500;color:black;"><?=number_format($tong);
                            
                            ?></span> VNĐ</td>
                        </tr>
                        <tr>
                            <td>Thành tiền</td>
                            <td><span style="font-weight: 500;color:red;"><?=number_format($tong);
                            
                            ?></span> VNĐ</td>
                        </tr>
                    </table>
                    <div class="cart-content-right-text">
                        <p>Freeship cho tất cả đơn hàng có giá trị từ 2.000.000đ</p>
                    </div>
                    <div class="cart-content-right-button">
                        <a href="index.php"><input type="submit" value="Mua Thêm"></a>
                        <a href="index.php?act=delivery"><input type="submit" value="Đặt hàng"></a>
                    </div>
                    <div class="cart-content-right-login">
                        <p>Tài khoản của bạn</p>
                        <p>Hãy <a href="">Đăng nhập</a> tài khoản của bạn để tích điểm thẻ thành viên</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>
</html>
