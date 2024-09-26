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
    
</body>
</html>
<div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
           <!--Register form-->
          <!-- <div class="auth-form">
               <div class="auth-form__container">
                <div class="auth-form__header">
                    <h3 class="auth-form__heading">Đăng ký</h3>
                    <span class="auth-form__switch-btn">Đăng nhập</span>
                </div>
                <div class="auth-form__form">
                   <div class="auth-form__group">
                    <input type="text" class="auth-form__input" placeholder="Nhập email">
                   </div>
                   <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập mật khẩu">
                   </div>
                   <div class="auth-form__group">
                    <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu">
                   </div>
                </div>
                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">
                        Tôi đã đọc và đồng ý với
                        <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                    </p>
                </div>
                <div class="auth-form__control">
                    <button class="btn btn--normal auth-form__control-black">TRỞ LẠI</button>
                    <button class="btn btn--primary">ĐĂNG KÝ</button>
                </div>
                
               </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                       <span class="auth-form__socials-title">Kết nối với Facebook</span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">Kết nối với Google</span>
                    </a>
                </div>
            </div> -->
             <!--Login  form-->
             <form action="index.php?act=login" method="post">
                 <div class="auth-form ">
                <div class="auth-form__container">
                 <div class="auth-form__header">
                     <h3 class="auth-form__heading">Đăng nhập</h3>
                     <span class="auth-form__switch-btn">Đăng ký</span>
                 </div>
                 <div class="auth-form__form">
                    <div class="auth-form__group">
                     <input type="text" name="user" class="auth-form__input" placeholder="Nhập email">
                    </div>
                    <div class="auth-form__group">
                     <input type="password" name="pass" class="auth-form__input" placeholder="Nhập mật khẩu">
                    </div>
                 </div>
                 <div class="auth-form__aside">
                    <div class="auth-form__help">
                        <a href="" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <span class="auth-form__help-separate"></span>
                        <a href="" class="auth-form__help-link">Cần Trợ Giúp?</a>
                    </div>
                 </div>
                 <div class="auth-form__control">
                     <button class="btn btn--normal auth-form__control-black">TRỞ LẠI</button>
                     <input type="submit"  class="btn btn--primary" name="login" value="Đăng nhập">
                 </div>
                 
                </div>
                 <div class="auth-form__socials">
                     <a href="" class="auth-form__socials--facebook btn btn--size btn--with-icon">
                         <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">Kết nối với Facebook</span>
                     </a>
                     <a href="" class="auth-form__socials--google btn btn--size btn--with-icon">
                         <i class="auth-form__socials-icon fa-brands fa-google"></i>
                         <span class="auth-form__socials-title">Kết nối với Google</span>
                     </a>
                 </div>
             </div>
            </div>
        </div>
     </form>


    <!-- <li class="nav-item dropdown-mega header__navbar-item--has-notify">
                    <a class="nav-link" href="">Tin Tức</a>
                    <div class="header_notify">
                        <div class="header__notify-header">
                            <h3>Thông báo mới nhất</h3>
                        </div>
                        <ul class="header__notify-list">
                            <li class="header__notify-item header__notify-item--viewed">
                               <a class="header__notify-link" href="">
                                 <img class="header__notify-img" src="./image/image2.jpg" alt="">
                                 <div class="header__notify-info">
                                     <span class="header__notify-name">Giày thể thao chính hãng</span>
                                     <span class="header__notify-descriotion">Mô tả giày chính hãng</span>
                                 </div>
                               </a> 
                            </li>
                            <li class="header__notify-item">
                               <a class="header__notify-link" href="">
                                 <img class="header__notify-img" src="./image/image2.jpg" alt="">
                                 <div class="header__notify-info">
                                     <span class="header__notify-name">Giày thể thao chính hãng</span>
                                     <span class="header__notify-descriotion">Mô tả giày chính hãng</span>
                                 </div>
                               </a> 
                            </li>
                            <li class="header__notify-item">
                               <a class="header__notify-link" href="">
                                 <img class="header__notify-img" src="./image/image2.jpg" alt="">
                                 <div class="header__notify-info">
                                     <span class="header__notify-name">Giày thể thao chính hãng</span>
                                     <span class="header__notify-descriotion">Mô tả giày chính hãng</span>
                                 </div>
                               </a> 
                            </li>
                        </ul>
                        <footer class="header__notify-footer">
                            <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                        </footer>
                    </div>
                </li> -->
