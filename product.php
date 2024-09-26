<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <title>Document</title>
</head>
<body>
    <!-- Product -->
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
</style>
    <section class="product">
        <div class="containers">
           
            <div class="product-top">
                <ul class="page-header-breadcrumb breadcrumb mb-0">
                    <li class="breadcrumb-item breadcrumb-item-back">
                        <a href="index.php?act=category" class="breadcrumb-item-back">
                            <span class="text-uppercase letter-spacing-2 fw-7">Quay lại</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index.php" class="breadcrumb-item-back">Trang chủ</a>
                    </li>
                    
                    <li class="breadcrumb-item">
                        <span>
                        <?php
            if(isset($kq)&& count($kq)>0){
                echo $kq[0]['tensp'];
            }else{
                echo "Sản phẩm chi tiết";
            }
            ?>
                      
                        </span>
                    </li>
                </ul>
            </div>
            <div class="product-content row">
                <div class="product-content-left">
                   
                        <div class="product-content-left-big-img">
                            <img src="<?=$kq[0]['img']?>" alt="">
                            
                        </div>
                        
                    </div>
                    
                    <div class="product-content-right">
                    <form action="index.php?act=addcart" method="post">
                                    <input type="hidden" name="id" value="<?=$kq[0]['id']?>">
                                    <input type="hidden" name="img" value="<?=$kq[0]['img']?>">
                                    <input type="hidden" name="tensp" value="<?=$kq[0]['tensp']?>">
                                    <input type="hidden" name="giasp" value="<?=$kq[0]['giasp']?>">
                                    <input type="hidden" name="soluong" value="1">
                        <div class="product-content-right-name">
                            <h1><?=$kq[0]['tensp']?></h1>
                            <div class="product-content-right-product-code">
                                "Mã SP :"
                                <strong><?=$kq[0]['id']?></strong>
                               
                            </div>
                        </div>
                        <div class="product-content-right-product-price">
                            <span><?= number_format($kq[0]['giasp'])?>₫</span>
                            <del><?= number_format($kq[0]['giacu'])?>đ</del>
                        </div>
                        
                        <div class="product-content-right-product-introduction">
                            <p>
                                <strong><?=$kq[0]['tensp']?></strong>
                                <span>-<?=$kq[0]['mota']?></span>
                            </p>
                        </div>
                        <div class="product-content-right-product-size">
                            <span style="font-weight: 600;">Size:</span>
                            <input style="outline: none;" type="number" name="size" min="37" max="42">
                        </div>
                        <div class="quantity">
                            <div class="product-content-right-product-quantity">
                                <span style="font-weight: 600;">Số lượng:</span>
                                <input type="number" name="sl" >
                            </div>
                            <div class="product-content-right-product-button">
                                <a href="#" class="btn btn-primary add_to_cart">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                    <input style="background: none; color:#fff;border:none;" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        
                        </div>
                        </form>

                    <ul class="product-content-right-product-transport">
                        <li class="list-item">
                            <i class="list-item-icon fa-regular fa-circle-check"></i>
                            CAM KẾT HÀNG CHÍNH HÃNG
                            100%
                        
                        </li>
                        <li class="list-item">
                            <i class="list-item-icon fa-solid fa-box-archive"></i>
                            ĐẦY ĐỦ PHỤ KIỆN : TAG VÀ BOX
                        </li>
                        <li class="list-item">
                            <i class="list-item-icon fa-solid fa-thumbs-up"></i>
                            ĐƯỢC KIỂM TRA HÀNG TRƯỚC KHI THANH TOÁN
                        </li>
                        <li class="list-item">
                            <i class="list-item-icon fa-solid fa-circle-notch"></i>
                            ĐỔI HÀNG TRONG VÒNG 5 NGÀY
                        </li>
                        <li class="list-item">
                            <i class="list-item-icon fa-solid fa-truck-fast"></i>
                            MIỄN PHÍ SHIP VỚI CÁC ĐƠN HÀNG TỪ 399K ( TRONG NỘI THÀNH HÀ NỘI VÀ THÀNH PHỐ HCM)
                        </li>
                    
                    </ul>
                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">&#8744</div>
                        <div class="product-content-right-bottom-middle">
                           <div class="product-content-right-bottom-title row">
                               <div class="product-content-right-bottom-title-item detail">
                                <span>Chi tiết</span>
                               </div>
                            
                               <div class="product-content-right-bottom-title-item trademark">
                                <span>Thương hiệu</span>
                               </div>
                            
                               <div class="product-content-right-bottom-title-item preserve">
                                <span>Hướng dẫn bảo quản</span>
                               </div>
                           </div> 
                           <div class="product-content-right-bottom-body">
                            <!-- <p></p> -->
                               <div class="product-content-right-bottom-body-detail">
                                   <span><?=$kq[0]['tensp']?></span>
                                   <p class="body-detail">-<?=$kq[0]['detail']?> 

                                   </p>
                               </div>
                               <div class="product-content-right-bottom-body-brand">
                                <p><?=$kq[0]['thuonghieu']?></p>
                                <img width="500" src="<?=$kq[0]['img_thh']?>" alt="">
                               </div>
                               <div class="product-content-right-bottom-brand">
                                <ul class="product-content-right-bottom-brand-list">
                                    <li>- Nếu bạn thường thuyên đi giày nên vệ sinh 1-2 lần/1 tuần.</li>
                                    <li>- Không nên giặt b ằng máy giặt vì sẽ làm cho đôi giày trở nên biến dạng mất form giày.</li>
                                    <li>- Tránh ngâm trong nước quá lâu.</li>
                                    <li>- Không sử dụng chất tẩy rửa.</li>
                                    <li>- Tránh tiếp xúc với các chất gây loang màu.</li>
                                    <li>- Nên để giày trong kệ riêng giúp bảo quản giày tốt và bền hơn.</li>
                                </ul>
                               </div>
                           </div>
                        </div>
                    </div>
                   
                </div>

            </div>
        </div>
    </section>
   
</body>
<script src="./js/product.js"></script>
</html>