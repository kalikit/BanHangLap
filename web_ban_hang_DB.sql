-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 10:44 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_ban_hang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `add_cart`
--

CREATE TABLE `add_cart` (
  `id_cart` int(12) NOT NULL,
  `ma_sp` varchar(50) NOT NULL,
  `ten_sp` varchar(500) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `gia_moi` double NOT NULL,
  `so_luong` int(11) NOT NULL,
  `tong_gia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `camera_quansat`
--

CREATE TABLE `camera_quansat` (
  `id` int(11) NOT NULL,
  `ma_sp` varchar(20) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `ten_sp` varchar(500) NOT NULL,
  `infor_sp` varchar(1000) NOT NULL,
  `gia_cu` double NOT NULL,
  `gia_moi` double NOT NULL,
  `tinh_trang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `camera_quansat`
--

INSERT INTO `camera_quansat` (`id`, `ma_sp`, `anh_sp`, `ten_sp`, `infor_sp`, `gia_cu`, `gia_moi`, `tinh_trang`) VALUES
(3000, 'cam125', 'camera Hikvision.jpg', 'camera hikvision fdfvd', ' thdbgng cj,pilioliol,', 2.356, 1.35, 'Còn hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infor_user`
--

CREATE TABLE `infor_user` (
  `id_user` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `so_dt` int(11) NOT NULL,
  `mat_khau` varchar(20) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(150) NOT NULL,
  `tinh_tp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `infor_user`
--

INSERT INTO `infor_user` (`id_user`, `ho_ten`, `email`, `so_dt`, `mat_khau`, `gioi_tinh`, `ngay_sinh`, `dia_chi`, `tinh_tp`) VALUES
(138, 'thang', 'nhocquan142@gmail.com', 348070196, 'aasdfgh', 'on', '0000-00-00', 'viet tri', 'Phú Thọ'),
(139, 'thang', 'nhocquan142@gmail.com', 348070196, '12345678', 'on', '0000-00-00', 'viet tri', 'Phú Thọ'),
(140, 'thang', 'nhocquan142@gmail.com', 2147483647, '12345678', 'on', '0000-00-00', 'viet tri', 'Phú Thọ'),
(141, 'thang', 'nhocquan142@gmail.com', 2452424, '12345678', 'on', '0000-00-00', 'viet tri', 'Phú Thọ'),
(142, 'thang', 'nhocquan142@gmail.com', 165165165, '12345678', 'on', '0000-00-00', 'viet tri', 'Phú Thọ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mat_hang_laptop`
--

CREATE TABLE `mat_hang_laptop` (
  `id` int(11) NOT NULL,
  `ma_sp` varchar(20) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `ten_sp` varchar(400) NOT NULL,
  `infor_sp` varchar(1000) NOT NULL,
  `gia_cu` double NOT NULL,
  `gia_moi` double NOT NULL,
  `tinh_trang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mat_hang_laptop`
--

INSERT INTO `mat_hang_laptop` (`id`, `ma_sp`, `anh_sp`, `ten_sp`, `infor_sp`, `gia_cu`, `gia_moi`, `tinh_trang`) VALUES
(1, 'lt01', 'laptop acer.png', 'Laptop Acer Gaming Aspire 7 A715-41G-R150 (NH.Q8SSV.004) (Ryzen 7 3750H/8GB RAM/512GB SSD/ GTX1650Ti', ' CPU: AMD Ryzen 7 3750H RAM: 8GB Ổ cứng: 512GB SSD VGA: NVIDIA GTX1650Ti 4G DDR6 Màn hình: 15.6 inch FHD IPS HĐH: Win 10 Màu: Đen', 21.489, 19.989, 'Còn hàng'),
(3, 'lt12', 'laptop lg gram 14Z90N.png', 'Laptop LG Gram 14Z90N-V.AR52A5 (i5 1035G7/8GB RAM/256GB SSD/14.0inch FHD/FP/Win10 Home/Xám Bạc) (mod', 'CPU: Intel Core i5 1035G7 RAM: 8GB Ổ cứng: 256GB SSD VGA: Onboard Màn hình: 14.0 inch FHD HĐH: Win 10 Home Màu: Xám Bạc', 31.989, 27.999, 'Còn hàng'),
(4, 'lt54', 'laptop dell inspiron7501.png', 'Laptop Dell Inspiron 7501 X3MRY1 (i7 10750H/8GB RAM/ 512GB SSD/GTX1650Ti 4G/ 15.6 inch FHD/Win 10/Bạ', 'CPU: Intel Core i7 10750H RAM: 8GB Ổ cứng: 512GB SSD VGA: Nvidia GTX1650Ti 4G Màn hình: 15.6 inch FHD HĐH: Win 10 Màu: bạc', 29.989, 29.689, 'Liên hệ'),
(5, 'lt87', 'laptop hp envy360.png', 'Laptop HP Envy x360 Convertible 13-ay0069AU (171N3PA) (R7 4700U/8GB RAM/256GB SSD/13.3 FHD Touch/Bút', 'CPU: AMD R7 4700U RAM: 8GB Ổ cứng: 256GB SSD VGA: Onboard Màn hình: 13.3 FHD Touch HĐH: Win 10 Màu: Đen', 27.999, 27.499, 'Còn hàng'),
(6, 'lt124', 'apple macbook air13.jpg', 'Apple Macbook Air 13 (MVH22) (i5 1.1Ghz/8GB /512GB SSD/13.3 inch IPS/MacOS/Xám) (2020)', '    Thông số sản phẩm\r\nCPU: Intel Core i5 1.1Ghz\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: Onboard\r\nMàn hình: 13.3 inch FHD\r\nBàn phím: có đèn led\r\nHĐH: Mac OS', 33.989, 31.455, 'Còn hàng'),
(7, 'lt29', 'Apple Macbook Pro 13 Touchbar.jpg', 'Apple Macbook Pro 13 Touchbar (MXK62) (i5 1.4Ghz/8GB /256GB SSD/13.3 inchIPS/Mac OS/Bạc) (2020)', '\r\nCPU: Intel Core i5 1.4Ghz\r\nRAM: 8GB\r\nỔ cứng: 256GB SSD\r\nVGA: Onboard\r\nMàn hình: 13.3 inch FHD\r\nBàn phím: có đèn led\r\nHĐH: Mac OS', 35.689, 32.989, 'Còn hàng'),
(8, 'msf14', 'Microsoft surface pro7.jpg', 'Microsoft Surface Pro 7 (i5 1035G4/8GB RAM/128GB SSD/12.3\" Cảm ứng/Win10 Home/Bạc)', '\r\nCPU: Intel® Core™ i5-1035G4\r\nCard đồ họa: Intel® Iris™ Plus Graphics\r\nBộ nhớ trong: 128 GB SSD\r\nRAM: 8 GB\r\nKích thước màn hình: 12.3” PixelSense™ Display\r\nĐộ phân giải: 2736 x 1824 pixels (267 PPI)\r\nTrọng lượng: 0.775 kg\r\n', 23.999, 19.999, 'Còn hàng'),
(9, 'lt159', 'Laptop Lenovo Gaming 3-15IMH05.png', 'Laptop Lenovo Gaming 3-15IMH05 (81Y4006SVN) (i5 10300H/8GB RAM/512GB SSD/15.6 FHD/GTX1650 4G/Win/Đen', '\r\nCPU: Intel Core i5 10300H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: GTX1650 4G\r\nMàn hình: 15.6 inch FHD\r\nHĐH: Win 10\r\nMàu: Đen', 20.999, 20.999, 'Còn hàng'),
(15, 'lt83', 'laptop_asus_gaming.png', 'Laptop Asus Gaming TUF FX516PE-HN005T (i7 1137H/8GB RAM/512GB SSD/15.6 FHD 144hz/RTX 3050Ti 4GB/Win10/Xám)', ' CPU: Intel Core i7 1137H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: NVIDIA RTX 3050Ti 4GB\r\nMàn hình: 15.6 inch FHD 144hz\r\nBàn phím: có đèn led\r\nHĐH: Win 10\r\nMàu: xám\r\n', 30.299, 28.789, 'Còn hàng'),
(16, 'lt45', 'Laptop Asus Gaming TUF FX506LH-HN002T.jpg', 'Laptop Asus Gaming TUF FX506LH-HN002T (i5 10300H/8GB RAM/512GB SSD/15.6 FHD 144Hz /GTX 1650 4GB/Win10/Xám)', ' CPU: Intel Core i5 10300H\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: NVIDIA GTX 1650 4GB\r\nMàn hình: 15.6 inch FHD 144Hz\r\nPhím: có đèn led\r\nHĐH: Win 10\r\nMàu: Xám\r\n', 21.209, 20.909, 'Còn hàng'),
(18, 'lt126', 'Laptop Asus VivoBook S S533EQ.png', 'Laptop Asus VivoBook S S533EQ-BN338T (i5 1135G7/8GB RAM/512GB SSD/15.6 FHD/MX350 2GB/Win10/Đen)', ' CPU: Intel Core i5 1135G7\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nVGA: MX350 2GB\r\nMàn hình: 15.6 inch FHD\r\nHĐH: Win 10\r\nMàu: Đen (ảnh thật mình họa có thể khác màu )\r\nXem Đầy Đủ ', 22.119, 22.019, 'Liên hệ'),
(19, 'lt143', 'Laptop LG Gram 14ZD90P-G.AX51A5.jpg', 'Laptop LG Gram 14ZD90P-G.AX51A5 (i5 1135G7/8GB RAM/256GB SSD/14.0 inch WUXGA/Trắng) (2021)', ' Màn hình 14\" IPS, độ phân giải WUXGA (1920x1280)\r\nBộ vi xử lí Intel® Core™ i thế hệ thứ 11\r\nTrọng lượng 999g\r\nPin 72Wh (lên tới 18.5h)\r\nThunderbolt™, Cảm biến vân tay\r\nKhông kèm theo Hệ điều hành', 33.229, 33.829, 'Còn hàng'),
(1003, 'gng', '', 'ngfnfnf', ' fgnfgnfnfn', 321, 123.2, 'Còn hàng'),
(1005, 'hjnh', 'Array', 'hgmg', 'gmghmgm', 215, 5345, 'Liên hệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pc_gaming_dohoa`
--

CREATE TABLE `pc_gaming_dohoa` (
  `id` int(11) NOT NULL,
  `ma_sp` varchar(20) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `ten_sp` varchar(500) NOT NULL,
  `infor_sp` varchar(1000) NOT NULL,
  `gia_cu` double NOT NULL,
  `gia_moi` double NOT NULL,
  `tinh_trang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pc_gaming_dohoa`
--

INSERT INTO `pc_gaming_dohoa` (`id`, `ma_sp`, `anh_sp`, `ten_sp`, `infor_sp`, `gia_cu`, `gia_moi`, `tinh_trang`) VALUES
(1000, 'van', '', 'gmgmghmghm', '  vbgmgmg', 3.4543, 2.534, 'Liên hệ'),
(1001, 'hmhm', '', 'pc gaming', ' gaming chien', 12.548, 10.898, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pc_van_phong`
--

CREATE TABLE `pc_van_phong` (
  `id` int(11) NOT NULL,
  `ma_sp` varchar(20) NOT NULL,
  `anh_sp` varchar(100) NOT NULL,
  `ten_sp` varchar(400) NOT NULL,
  `infor_sp` varchar(1000) NOT NULL,
  `gia_cu` double NOT NULL,
  `gia_moi` double NOT NULL,
  `tinh_trang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `pc_van_phong`
--

INSERT INTO `pc_van_phong` (`id`, `ma_sp`, `anh_sp`, `ten_sp`, `infor_sp`, `gia_cu`, `gia_moi`, `tinh_trang`) VALUES
(2000, 'PCvpdell', '55804_dell_vostro_3681_001.jpg', 'PC Dell Vostro 3681 (i7-10700/8GB RAM/512GB SSD/DVDRW/WL+BT/K+M/Win 10)', '   CPU: Core i7-10700\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nỔ quang: có\r\nWifi: có\r\nBluetooth: có\r\nHệ điều hành: Windows 10 Home', 19.189, 18.179, 'Còn hàng'),
(2001, 'PCAC096', '49060_pc_acer_tc_865_a__0_.jpg', 'PC Acer TC-865 Pentium (G5420/4GB RAM/1TB HDD/DVDRW/K+M/Endless OS) (DT.BARSV.009)', '  CPU: Intel Pentium G5420\r\nRAM: DDR4 4GB\r\nỔ cứng: HDD 1TB\r\nPhụ kiện đi kèm: Bàn phím + chuột\r\nKết nối không dây: Không\r\nHệ điều hành: Endless', 8.069, 7.479, 'Còn hàng'),
(2002, 'PCHT029', 'Máy tính INTEL NUC7CJYH Celeron.jpg', 'Máy tính INTEL NUC7CJYH Celeron J4005', '  Lưu ý: Sản phẩm chưa bao gồm ổ lưu trữ (SSD / HDD) và RAM.', 3.989, 3.389, 'Còn hàng'),
(2003, 'PCHP551', 'PC HP Pavilion TP01-1116d.jpg', 'PC HP Pavilion TP01-1116d (i5-10400F/8GB RAM/1TB HDD/WL+BT/DVDRW/GT730 2GB/K+M/Win 10) (180S6AA)', '  CPU: Core i5-10400F\r\nRAM: 8GB\r\nVGA: GT730 2GB\r\nỔ cứng: 1TB HDD\r\nHệ điều hành: Windows 10', 14.739, 13.889, 'Liên hệ'),
(2004, 'PCDE650', 'PC Dell OptiPlex All in One 7480.jpg', 'PC Dell OptiPlex All in One 7480 (i5-10500/8GB RAM/512GB SSD/23.8 inch FHD/Touch/WL+BT/K+M/Ubuntu)', '  CPU: Core i5-10500\r\nRAM: 8GB\r\nỔ cứng: 512GB SSD\r\nMàn hình: 23.8 inch FHD Touch\r\nWebcam: có\r\nỔ quang: không có\r\nWifi: có', 30.299, 28.989, 'Còn hàng'),
(2005, 'PCLE230', 'PC Lenovo V50s.png', 'PC Lenovo V50s (i3-10100/4GB RAM/256GB SSD/DVDRW/WL+BT/K+M/No OS) (11EF003HVA)', ' CPU: Core i3-10100\r\nRAM: 4GB\r\nỔ cứng: 256GB SSD\r\nỔ quang: có\r\nWifi: có\r\nBluetooth: có\r\nHệ điều hành: không có', 9.089, 9.039, 'Liên hệ'),
(2006, 'PCHP653', 'PC HP ProDesk 400 G7 MT.jpg', 'PC HP ProDesk 400 G7 MT (i7-10700/8GB RAM/256GB SSD/WL+BT/K+M/Win 10) (46L52PA)', ' CPU: Core i7-10700\r\nRAM: 8GB\r\nỔ cứng: 256GB SSD\r\nỔ quang: Không có\r\nWifi+Bluetooth: Có\r\nHệ điều hành: Windows 10', 17.269, 17.169, 'Còn hàng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `camera_quansat`
--
ALTER TABLE `camera_quansat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `infor_user`
--
ALTER TABLE `infor_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `mat_hang_laptop`
--
ALTER TABLE `mat_hang_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pc_gaming_dohoa`
--
ALTER TABLE `pc_gaming_dohoa`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pc_van_phong`
--
ALTER TABLE `pc_van_phong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `id_cart` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `camera_quansat`
--
ALTER TABLE `camera_quansat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;

--
-- AUTO_INCREMENT cho bảng `infor_user`
--
ALTER TABLE `infor_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT cho bảng `pc_gaming_dohoa`
--
ALTER TABLE `pc_gaming_dohoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT cho bảng `pc_van_phong`
--
ALTER TABLE `pc_van_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
