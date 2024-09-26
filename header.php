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
<header class="header">  
<div class="logo">
            <a href=""><img class="logo__img" src="./image/logo.png" alt=""></a>

        </div>
        <div class="menu">
            <li class="menu__list">
                <a href="index.php" class="header-link">Trang chủ</a>
            </li>
            <li class="menu__list">
                <a class="header-link" href="">Loại Giày <i class="fa-solid fa-caret-down"></i></a>
                <div class="dropdown-menu">
                    <div class="menu__item">
                    <?php
                    foreach ($dsdm as $dm) {
                        echo '<div class="drodown">
                        <a class="dropdown__header" href="index.php?act=category&id='.$dm['id'].'">'.$dm['tendm'].'</a>
                         </div>';

                    }
                    ?>
                    </div>
                </div>
            </li>
            <li class="menu__list">
                <a class="header-link" href="index.php?act=tintuc">Tin Tức</a>
            </li>
            <li class="menu__list">
                <a class="header-link" href="index.php?act=lienhe">Liên hệ</a>
            </li>
        </div>
        <div class="other">
            <li><input type="text" class="other__input" placeholder="Tìm kiếm sản phẩm...">
                <i class="other__search fas fa-search" ></i>
            </li>
            <li><a href="index.php?quanly=giohang"><i class="header__cart-icon fa-solid fa-cart-shopping"></i></a></li>
            <?php 
                    if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
                        echo'<li class="header__navbar-user-item">
                        <a href="index.php?act=userinfo">'.$_SESSION['username'].'</a>
                    </li>';
                        echo'<li class="header__navbar-user-item">
                        <a href="index.php?act=thoat">Thoát</a>
                    </li>';
                    }else{
                    
                    ?>
            <li class="header__navbar-item header__navbar-user">
                <i class="header__user fa fa-user"></i>
                <ul class="header__navbar-user-menu">
                 <li class="header__navbar-user-item">
                     <a href="index.php?act=dangnhap">Đăng nhập</a>
                     
                 </li>
                 <li class="header__navbar-user-item">
                     <a href="index.php?act=dangky">Đăng ký</a>
                 </li>
             </ul> 
            </li>
            <?php
                    }
            ?>
        </div>
</header>