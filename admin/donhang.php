<table style="width: 80%; text-align:center">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên người nhận</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Ngày tạo</th>
        <th>In đơn</th>
    </tr>
    <?php
    // echo var_dump($dh);
    ?>
    <?php
    if(isset($dh) && (count($dh) > 1)){
        $i = 1;
        foreach ($dh as $row){
            echo '<tr>
                <td>'.$row['madh'].'</td>
                <td>'.$row['hoten'].'</td>
                <td>'.$row['address'].'</td>
                <td>'.$row['tel'].'</td>
                <td>'.date('d/m/Y H:i').'</td>
                <td><a href="index.php?act=print&id='.$row['id'].'" target="_blank">IN</a></td>
            </tr>';
            $i++;
        }
    }
    ?>
</table>
