<div class="main">
    <h2>Cập nhật sản phẩm</h2>
    <div class="category-list">
    <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data ">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
            $iddmcur=$spct[0]['iddm'];
            if(isset($dsdm)){
                foreach ($dsdm as $dm) {
                    if($dm['id']==$iddmcur)
                    echo' <option value="'.$dm['id'].'" selected>'.$dm['tendm'].'</option>';
                else
                echo' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
            }
        }
            ?>

        </select>
        <input type="text" name="tensp" id="" value="<?=$spct[0]['tensp']?>">
        <input type="file" name="image" id="">
        <img src="<?=$spct[0]['img']?>" width="80px" alt="">
        <?php
        if(isset($uploadOk)&&($uploadOk==0)){
            echo "Yêu cầu nhập đúng file hình ảnh";
        }
        ?>
        <input type="text" name="giasp" id="" value="<?=$spct[0]['giasp']?>">
        <input type="hidden" name="id"  value="<?=$spct[0]['id']?>">
        <input class="submit" type="submit" name="capnhat" value="Cập nhật">
    </form>

        <table>
            <tr>
                <th>STT</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Quản lý</th>
            </tr>
            <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach($kq as $item) {
                    echo '<tr>
                         <td>'.$i.'</td>
                         <td>'.$item['tensp'].'</td>
                         <td><img src="'.$item['img'].'" style="width:100px"></td>
                         <td>'.$item['giasp'].'</td>
                         <td><a href="index.php?act=updatespform&id='.$item['id'].'">Sửa</a> |<a href="index.php?act=delsp&id='.$item['id'].'">Xóa</a></td>
                      </tr>';
                      $i++;
                }
            }
            ?>
        </table>
    </div>
</div>