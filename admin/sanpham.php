<div class="main">
    <h2>Nhập sản phẩm</h2>
    <div class="category-list">
    <!-- <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data ">
        <select name="iddm" id="">
            <option value="0">Chọn danh mục</option>
            <?php
           // if(isset($dsdm)){
              //  foreach ($dsdm as $dm) {
                //    echo' <option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
          //  }
       // }
            ?>

        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="hinh" id="">
       <?php 
        //if(isset($uploadOk)&&($uploadOk==0)){
         //   echo "Yêu cầu nhập đúng file hình ảnh";
        //}
       // ?>//
        <input type="text" name="giasp" id="">
        <input class="submit" type="submit" name="themmoi" value="Thêm mới">
    </form> -->
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
        <select name="iddm" id="">
        <?php
            if(isset($dsdm)&&(count($dsdm)>0)){
                
                foreach($dsdm as $dm) {
                    echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                    
                }
            }
            ?>
        </select>
        <input type="text" name="tensp" id="">
        <input type="file" name="image" id="">
        <input type="text" name="giasp" id="">
        <input class="list-input" type="submit" name="themmoi" value="Thêm mới">
        <Style>
            .category-list {
                display: block;
            }
           .list-input:hover{
            color: #fff;
            background-color: black;

           }

        </Style>
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
                         <td><img src="'.$item['img'].'" width="80px"></td>
                         <td>'.$item['giasp'].'</td>
                         <td><a  href="index.php?act=updatespform&id='.$item['id'].'">Sửa</a> |<a href="index.php?act=delsp&id='.$item['id'].'">Xóa</a></td>
                      </tr>';
                      $i++;
                }
            }
            ?>
        </table>
    </div>
</div>