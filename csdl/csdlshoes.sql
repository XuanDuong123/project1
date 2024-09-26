-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2024 lúc 04:33 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdlshoes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `iddh` int(10) NOT NULL,
  `idpro` int(9) NOT NULL,
  `tensp` varchar(20) NOT NULL,
  `img` varchar(200) NOT NULL,
  `size` varchar(20) NOT NULL,
  `soluong` varchar(50) NOT NULL,
  `dongia` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`iddh`, `idpro`, `tensp`, `img`, `size`, `soluong`, `dongia`) VALUES
(3, 1, 'GIÀY THỂ THAO ADIDAS', 'https://admin.thegioigiay.com/upload/product/2023/08/giay-the-thao-adidas-forum-exhibit-low-h01674-mau-trang-do-64c9c837783a6-02082023100631.jpg', '37', '4', 1990000),
(5, 2, 'Giày Adidas Yeezy Bo', 'https://tyhisneaker.com/wp-content/uploads/2023/11/giay-adidas-yeezy-boost-350-v2-tail-light-fx9017-like-auth.jpg', '37', '1', 920000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `uutien` int(4) NOT NULL DEFAULT 0,
  `hienthi` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `tendm`, `uutien`, `hienthi`) VALUES
(1, 'Adidas', 0, 1),
(3, 'Nike', 0, 1),
(4, 'Asics', 0, 1),
(5, 'Balenciaga', 0, 1),
(6, 'Doma', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(5) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `tongdonhang` double(10,0) DEFAULT 0,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `iduser` int(6) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `madh`, `tongdonhang`, `pttt`, `iduser`, `hoten`, `address`, `email`, `tel`) VALUES
(1, 'HR305379', 0, 1, 0, 'Nguyễn Văn Thái', 'Nam Định', 'dinhxuanduong2002@gmail.com', '0377145350'),
(2, 'HR487901', 0, 1, 0, 'Nguyễn Văn Thái', 'Nam Định', 'dinhxuanduong2002@gmail.com', '0377145350'),
(3, 'HR415631', 0, 0, 0, 'Đinh Xuân Dương', 'Nam Định', 'dinhxuanduong2002@gmail.com', '0377145350'),
(4, 'HR475820', 0, 1, 0, 'Nguyễn Văn Thái', 'Nam Định', 'dinhxuanduong2002@gmail.com', '0377145350'),
(5, 'HR646118', 0, 1, 0, 'Phan tiến đạt', 'Nam Định', 'dinhxuanduong2002@gmail.com', '0377145350');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(4) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL,
  `giacu` double(10,0) NOT NULL DEFAULT 0,
  `giasp` double(10,0) NOT NULL DEFAULT 0,
  `iddm` int(4) NOT NULL,
  `view` int(4) NOT NULL DEFAULT 0,
  `mota` varchar(200) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `thuonghieu` text NOT NULL,
  `img_thh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `tensp`, `img`, `giacu`, `giasp`, `iddm`, `view`, `mota`, `detail`, `thuonghieu`, `img_thh`) VALUES
(1, 'GIÀY THỂ THAO ADIDAS FORUM EXHIBIT LOW H01674 MÀU ', 'https://admin.thegioigiay.com/upload/product/2023/08/giay-the-thao-adidas-forum-exhibit-low-h01674-mau-trang-do-64c9c837783a6-02082023100631.jpg', 2850000, 1990000, 1, 0, 'với thiết kế ôm chân đến từ thương hiệu nổi tiếng Adidas. Giày Thể Thao Adidas Forum Exhibit Low H01674 Màu Trắng Đỏ mạnh mẽ, sử dụng chất liệu nhẹ và thoáng khí, mang lại trải nghiệm tốt nhất khi lên', 'được làm từ chất liệu vài dệt cao cấp bền đẹp lâu dài trong quá trình sử dụng. Thiết kế form dáng chuẩn đẹp với các đường nét vô cùng tỉ mỉ, tinh tế đến từng chi tiết.  Giày được lấy tone màu đen làm chủ đạo và điểm đế trắng cùng họa tiết bắt mắt để tạo điểm nhấn cho sự trẻ trung, cá tính.\r\n\r\nPhần đế giày được làm bằng cao su cao cấp áp dụng theo công nghệ cao với độ ma sát cao hạn chế trơn trượt, cùng độ nâng phù hợp giúp đôi chân vững vàng hơn khi di chuyển và hoạt động.', ' là một nhà sản xuất dụng cụ thể thao của Đức, một thành viên của Adidas Group, bao gồm cả công ty dụng cụ thể thao Reebok, công ty golf Taylormade, công ty sản xuất bóng golf Maxfli và Adidas golf. Adidas là nhà sản xuất dụng cụ thể thao lớn thứ hai trên thế giới.', 'https://admin.thegioigiay.com/upload/news/content/2022/12/thuong-hieu-adidas-jpg-1670579250-09122022164730-jpg-1671243539-17122022091859.jpg'),
(2, 'Giày Adidas Yeezy Boost 350 V2 ‘Tail Light’ FX9017', 'https://tyhisneaker.com/wp-content/uploads/2023/11/giay-adidas-yeezy-boost-350-v2-tail-light-fx9017-like-auth.jpg', 1800000, 920000, 1, 0, 'tinh tế & màu sắc vô cùng dễ phối đồ. Vậy nên đôi giày này trở nên phổ biến, mang tính biểu tượng và được rất nhiều giới trẻ yêu thích.Và nếu bạn cũng là một người đam mê dòng sneaker dễ mang, dễ phố ', 'Giày Adidas Yeezy Boost 350 V2 ‘Tail Light’ FX9017 là một sản phẩm đặc biệt trong dòng Yeezy được phát triển bởi Adidas và Kanye West. Đây là một trong những mẫu giày đình đám và được mong đợi, thể hiện sự kết hợp tinh tế giữa phong cách thể thao và thiết kế hiện đại.Đôi giày này thường có màu sắc chủ đạo là xám nhạt kết hợp với các đường vạch màu đỏ nổi bật trên thân giày. Thiết kế Primeknit đặc trưng với đường vân đồng nhất trên phần thân giày, kết hợp cùng với công nghệ Boost của Adidas trong đế giày, tạo ra sự êm ái và linh hoạt cho người mang.', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `email`, `user`, `pass`, `role`) VALUES
(1, NULL, NULL, NULL, 'admin', '123', 1),
(2, NULL, NULL, NULL, 'duong', '12345', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`iddh`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `iddh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
