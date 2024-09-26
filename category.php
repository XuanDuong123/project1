<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<style>
    .home-product-item__img {
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    padding-top: 100%;
}
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

<div class="app__container">
            <div class="grid">
                <div class="grid-row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class=" category__heading-icon fa-solid fa-list"></i>
                                Thương hiệu
                            </h3>
                            <ul class="category-list">
                                <?php
                                foreach ($dsdm as $dm) {
                                    echo '<li class="category-item category-item--active">
                                    <a href="index.php?act=category&id='.$dm['id'].'" class="category-item-link">'.$dm['tendm'].'</a>
                                </li>';
                                }
                                ?> 
                                
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>
    
                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="seclect-input__icon fa-solid fa-sort-down"></i>
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá:Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá:Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/14
                                    
                                </span>
                                <div class="home-filter__page-control">
                                    <a class="home-filter__page-btn home-filter__page-btn--disabled" href="">
                                        <i class=" home-filter__page-icon fa-solid fa-angle-left"></i>
                                    </a>
                                    <a class="home-filter__page-btn" href="">
                                        <i class=" home-filter__page-icon fa-solid fa-angle-right"></i>
                                    </a>
                                    </a>
                                </div>   
                            </div>
                        </div>
                        <div class="home-product">
                            <p style="font-size: 16px;">Sản phẩm
                            <?php
                            if( $catename!="")
                            echo ">> ".$catename['tendm'];
                             ?></p>
                        <div class="grid__rows">          
                            <?php
                            
                            foreach ( $dssp as $sp ) {
                                $phanTramGiamGia = ($sp['giacu'] - $sp['giasp']) / $sp['giacu'] * 100;
                                echo'  <div class="grid__column-2-4">
                                <!--Product item-->  
                                <a class="home-product-item" href="index.php?act=product&id='.$sp['id'].'">
                                  <div class="home-product-item__img" style="background-image: url(\'' . $sp['img'] . '\');">                  
                                  </div>
                                  <h4 class="home-product-item__name">'.$sp['tensp'].'</h4>
                                  <div class="home-product-item__price">
                                    <span class="home-product-item__price-old">' . number_format($sp['giacu'],0,'.',',') . '<span>đ</span></span>  
                                    <span class="home-product-item__price-current">' . number_format($sp['giasp'],0,'.',',') . '<span>đ</span></span>  
                                  </div>
                                  <div class="home-product-item__action">
                                      <span class="home-product-item__like home-product-item__like--liked">
                                          <i class="home-product-item__like-icon-empty far fa-heart"></i>
                                          <i class="home-product-item__like-icon-fill  fa-solid fa-heart"></i> 
                                      </span>
                                      <div class="home-product-item__rating">
                                          <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                          <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                          <i class="home-product-item__star--gold fa-solid fa-star"></i> 
                                          <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                      </div>
                                      <span class="home-product-item__sold">67 đã bán</span>
                                  </div>
                                  <div class="home-product-item__origin">
                                      <span class="home-product-item__brand"></span>
                                      <span class="home-product-item__origin-name"></span>
                                  </div>
                                  <div class="home-product-item__favourite">
                                      <i class="fa-solid fa-check"></i>
                                      <span>Yêu thích</span>
                                  </div>
                                  <div class="home-product-item__sale-off">
                                      <span class="home-product-item__sale-off-percent">' . round($phanTramGiamGia) . '%</span>
                                      <span class="home-product-item__sale-off-label">GIẢM</span>
                                  </div>
                                </a>
                              </div>';
                            }
                            ?>
                              
                            </div>
                        </div>
    
                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-left"></i>
                                </a>
                                
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">1</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">5</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                                
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fas fa-angle-right"></i>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>