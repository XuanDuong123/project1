<?php

// Thiết lập header để trình duyệt hiểu rằng đây là một file Excel
header("Content-Type: application/vnd.ms-excel");

// Thiết lập tên của tệp tin khi người dùng tải về
header('Content-Disposition: attachment; filename="export_data.xls"');

// Dữ liệu Excel của bạn sẽ được xuất ở đây
echo "Tên sản phẩm\tHình ảnh\tSize\tSố lượng\tĐơn giá\tThành tiền\n";
echo "Sản phẩm 1\tẢnh 1\tSize 1\t2\t1000\t2000\n";
echo "Sản phẩm 2\tẢnh 2\tSize 2\t3\t1500\t4500\n";

// Kết thúc chương trình
exit;
?>
