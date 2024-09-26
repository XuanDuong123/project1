<div class="main">
    <h2>Danh Mục</h2>
    <form action="index.php?act=adddm" method="post">
        <input type="text" name="tendm" id="">
        <input class="submit" type="submit" name="themmoi" value="Thêm mới">
    </form>
    <div class="category-list">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Ưu tiên</th>
                <th>Hiển thị</th>
                <th>Quản lý</th>
            </tr>
            <?php
            // var_dump($kq);
            ?>
            <?php
            if(isset($kq)&&(count($kq)>0)){
                $i=1;
                foreach($kq as $dm) {
                    echo '<tr>
                         <td>'.$i.'</td>
                         <td>'.$dm['tendm'].'</td>
                         <td>'.$dm['uutien'].'</td>
                         <td>'.$dm['hienthi'].'</td>
                         <td><a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> |<a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a></td>
                      </tr>';
                      $i++;
                }
            }
            ?>
            
        </table>
    </div>
</div>