<div class="app__container">
<div class="grid">
            <div class="grid-row app__content">
                <div class="grid__column-12">
                    <div class="home-product">
                        <div class="grid__rows">
                        <?php
                            
                            foreach ( $sphome1  as $sp ) {
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
                    
                    
                    </div>

            </div>    
        </div>
</div>