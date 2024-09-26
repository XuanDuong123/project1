<style>
.order-detail{
    width: 370px;
    background-color: aqua;

}
.order-detail h2,h3 {
    text-align: center;

}
.order-detail li {
    list-style: none;
    display: block;
    margin: 5px;
    font-size: 14px;
    padding-left: 10px;
}
.order-detail-user  {
    display: block;
    margin: 5px;
    font-size: 14px;
    padding-left: 10px;
}
.order-detail-user span {
    padding-left: 10px;


}
</style>
<div class="order_detail-wrapper">
    <div class="order-detail">
        <h2>Hóa đơn thanh toán</h2>
        <label class="order-detail-user" for="">Người nhận:<span><?= $order[0]['hoten'] ?></span></label><br/>
        <label class="order-detail-user" for="">Địa chỉ:<span><?= $order[0]['address'] ?></span></label><br/>
        <label class="order-detail-user" for="">Số điện thoại:<span><?= $order[0]['tel']?></span></label><br/>
        <label class="order-detail-user" for="">Email người nhận:<span><?= $order[0]['email']?></span></label><br/>
        <hr/>

        <h3>Danh sách sản phẩm</h3>
        <ul>
            <?php
            $tong=0;
            $tongSoLuong = 0;
            foreach ($order as $row) {
                
                ?>
                <li>
                    <span class="item-name"><?=$row['tensp']?>
                    </span><br/>
                    <span class="item-name"> -Số lượng :<?=$row['soluong']?> sản phẩm
                    </span><br/>
                    <span class="item-name"> -Giá :<?= number_format($row['dongia'])?> 
                     đ</span><br/>
                    
                </li>
              <?php  
               $tt=$row['soluong'] * $row['dongia'];
               $tong+=$tt;
               $tongSoLuong +=$row['soluong'];
               
              
            }
            ?>
        </ul>
        <hr/>
        <label style="margin: 5px;" for="">Tổng số lượng: <?=$tongSoLuong ;?> sản phẩm</label><br/>
        <label for="">Tổng tiền: <?= number_format($tong);?> đ</label><br/>

    </div>
</div>