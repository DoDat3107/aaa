-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 01:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(37, 'LAPTOP'),
(38, 'MÁY TÍNH ĐỂ BÀN'),
(39, 'MÀN HÌNH MÁY TÍNH'),
(40, 'LINH KIỆN'),
(41, 'PHỤ KIỆN GAME NET'),
(44, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaisp`
--

CREATE TABLE `tbl_loaisp` (
  `id_loaisp` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_loaisp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_loaisp`
--

INSERT INTO `tbl_loaisp` (`id_loaisp`, `id_danhmuc`, `ten_loaisp`) VALUES
(35, 37, 'LAPTOP MSI'),
(36, 37, 'LAPTOP ACER'),
(37, 37, 'LAPTOP ASUS'),
(38, 37, 'LAPTOP HP'),
(39, 38, 'MÁY TÍNH ĐỒNG BỘ'),
(40, 38, 'MÁY TÍNH ASEAN'),
(41, 39, 'MÀN HÌNH BENQ'),
(42, 39, 'MÀN HÌNH ASUS'),
(43, 39, 'MÀN HÌNH VIEWSONIC'),
(44, 39, 'MÀN HÌNH LENOVO'),
(45, 39, 'MÀN HÌNH SAMSUNG'),
(46, 40, 'CHUỘT PC'),
(47, 40, 'TAI NGHE'),
(48, 40, 'BÀN  PHÍM'),
(49, 40, 'WEBCAM'),
(50, 40, 'LOA MÁY TÍNH'),
(51, 41, 'BÀN GHẾ'),
(52, 41, 'TAY CHƠI GAME'),
(53, 41, 'TẢN NHIỆT GPU'),
(59, 37, 'LAPTOP DELL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `gia_sanpham` varchar(255) NOT NULL,
  `giakm_sanpham` varchar(255) NOT NULL,
  `km_sanpham` varchar(500) NOT NULL,
  `desc_sanpham` varchar(500) NOT NULL,
  `dac_biet` int(1) NOT NULL,
  `img_sanpham` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `ten_sanpham`, `id_danhmuc`, `id_loaisp`, `gia_sanpham`, `giakm_sanpham`, `km_sanpham`, `desc_sanpham`, `dac_biet`, `img_sanpham`) VALUES
(51, 'Máy tính Đồng Bộ DELL VOS3910MT- 9M2DD1', 38, 39, '13990000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>- CPU: Intel Core i5-12400 (2.5 GHz - 4.4 GHz/18MB/6 nh&acirc;n, 12 lu&ocirc;̀ng) - RAM: 1 x 8GB DDR4 3200MHz (2 Khe cắm, - Đồ họa: Intel UHD Graphics 730 - Lưu trữ: 256GB M.2 NVMe SSD/ - Keyboard + Mouse: USB</p>\r\n', 1, 'pc1.jpg'),
(52, 'Máy tính đồng bộ HP 280 Pro G5 SFF 60M20PA ', 38, 39, '7890000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>Ch&iacute;p xử l&yacute;: Intel Pentium Gold G6405 up to 4.1GHz Bộ nhớ Ram: 4GB DDR4 2666 MHz (1 x 4GB), 2 khe cắm Ram Ổ đĩa cứng: 256GB SSD PCIe NVMe (x1 HDD 3.5&quot; sata) Card đồ họa: Intel UHD Graphics Ph&iacute;m chuột : USB DVDRW: Kh&ocirc;ng Hệ điều h&agrave;nh: Windows 11 Home</p>\r\n', 1, 'pc2.jpg'),
(53, 'Máy tính để bàn HP 280 Pro G5 SFF (60H32PA)', 38, 39, '15800000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>Ch&iacute;p xử l&yacute;: Intel Core i7-10700 2.9GHz up to 4.8GHz, 16MB Bộ nhớ Ram: 8GB DDR4 2933MHz (1 x 8GB), 2 khe cắm Ram Ổ đĩa cứng: 256GB SSD PCIe NVMe (x1 HDD 3.5&quot; sata) Kết nối mạng: LanGigabit, Wifi + Bluetooth Ph&iacute;m chuột: Đi k&egrave;m (USB c&oacute; d&acirc;y) Card đồ họa: Intel UHD Graphics 630 Hệ điều h&agrave;nh: Windows 11 Home 64bit</p>\r\n', 1, 'pc3.jpg'),
(54, 'Máy tính để bàn HP 280 Pro G9', 38, 39, '13190000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>CPU: Intel Core i5-12500 (Up To 4.40GHz, 6 Nh&acirc;n 12 Luồng,18MB Cache RAM: 8GB (1 x 8GB) DDR4-3200 MHz (x2 slot) Ổ cứng: 256GB PCIe&reg; NVMe&trade; M.2 SSD (x1 HDD 3.5&quot; sata) VGA: Intel&reg; UHD Graphics 730 Kết nối mạng: Wlan + Bluetooth M&agrave;u sắc: Đen Hệ điều h&agrave;nh: Windows 11 Home 64bit</p>\r\n', 1, 'pc4.jpg'),
(55, 'Máy tính để bàn HP 280 Pro G5 SFF (60H31PA)', 38, 39, '12890000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>Ch&iacute;p xử l&yacute;: Intel Core i5-10400 2.9GHz up to 4.3GHz, 12MB Bộ nhớ Ram: 8GB DDR4 2666MHz (1 x 8GB), 2 khe cắm Ram Ổ đĩa cứng: 256GB SSD PCIe NVMe (x1 HDD 3.5&quot; sata3) Ph&iacute;m chuột: C&oacute; d&acirc;y cổng USB Ổ đĩa quang: Kh&ocirc;ng Kết nối mạng: Lan Gigabit, Wifi + Bluetooth Card đồ họa: Intel UHD Graphics 630 Hệ điều h&agrave;nh: Windows 11 Home 64bit</p>\r\n', 1, 'pc5.jpg'),
(56, 'LAPTOP MSI GF63 Thin 11SC-664VN', 37, 35, '16990000', '', 'Túi quai xách+ Chuột không dây + Bàn di chuột+ Tặng phiếu vệ sinh bảo dưỡng Laptop', '<p>CPU Intel Core i5-11400H (12MB, up to 4.50GHz) RAM 8GB DDR4 3200MHz SSD 512GB NVMe PCIe VGA NVIDIA GeForce GTX 1650 Max-Q 4GB GDDR6 Display 15.6Inch FHD IPS 144Hz 45%NTSC Pin 3Cell 51WHrs Color Black (Đen) Backlight Keyboard (Single-Color, Red) Weight 1.86 kg OS Windows 11 Home</p>\r\n', 1, 'laptop1.jpg'),
(57, 'Laptop MSI Gaming Katana GF66 (12UCK-699VN)', 37, 35, '20990000', '', 'Túi quai xách+ Chuột không dây + Bàn di chuột+ Tặng phiếu vệ sinh bảo dưỡng Laptop', '<p>CPU: Intel Core i5 12450H RAM: 8GB Ổ cứng: 512GB SSD VGA: NVIDIA RTX3050 4GB M&agrave;n h&igrave;nh: 15.6 inch FHD 144Hz B&agrave;n ph&iacute;m: c&oacute; đ&egrave;n nền HĐH: Win 11 M&agrave;u: Đen</p>\r\n', 1, 'laptop2.png'),
(58, 'LAPTOP Asus VivoBook S14 S433EA-AM2307W', 37, 37, '15790000', '', '- Túi quai xách+ Chuột không dây + Bàn di chuột+ Tặng phiếu vệ sinh bảo dưỡng Laptop', '<p>CPU Intel Core i5-1135G7 (8MB, up to 4.20GHz) RAM 8GB DDR4 3200MHz Onboard SSD 512GB M.2 NVMe PCIe 3.0 VGA Intel Iris Xe Graphics Display 14.0Inch FHD Anti-Glare Pin 3Cell 50WHrs Color Indie Black (Đen) T&iacute;nh năng Numberpad Weight 1.40 kg OS Windows 11 Home</p>\r\n', 1, 'laptop3.jpg'),
(59, 'Laptop HP 15s-fq5077TU 6K797PA', 37, 38, '16990000', '', 'Túi quai xách+ Chuột không dây + Bàn di chuột+ Tặng phiếu vệ sinh bảo dưỡng Laptop', '<p>Intel Core i7-1255U (12MB Cache, 3.50GHZ up to 4.70GHz, 10 cores, 12 Threads) Memory Ram 8GB DDR4 Buss 3200(4GB + 4GB) (N&acirc;ng Max 32GB) SSD 512GB PCIe NVMe M.2 SSD, VGA Intel Iris Xe Graphics Display 15.6 Inch FHD (1920 x 1080) micro edge, anti glare, 250 Nits, 45% NTSC Audio Dual speakers, Wireless Realtek RTL8822CE 802 and Bluetooth 5.0, Battery 3 Cells 41Whrs, OS Windows 11 M&agrave;u Sắc Silver, Weight 1.6 Kg</p>\r\n', 1, 'laptop4.jpg'),
(60, 'Laptop ACER Nitro 5 Eagle AN515-57-54MV', 37, 36, '19990000', '', 'Ba lô Acer Gaming SUV', '<p>- CPU: Intel Core i5-11400H<br />\r\n- M&agrave;n h&igrave;nh: 15.6&quot; IPS (1920 x 1080),144Hz<br />\r\n- RAM: 1 x 8GB DDR4 3200MHz<br />\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics<br />\r\n- Lưu trữ: 512GB SSD M.2 NVMe /<br />\r\n- Hệ điều h&agrave;nh: Windows 11<br />\r\n- Pin: 4 cell 57 Wh Pin liền<br />\r\n- Khối lượng: 2.2kg</p>\r\n', 1, 'laptop5.jpg'),
(61, 'Màn hình Asus VZ22EHE', 39, 42, '2450000', '', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<p>M&agrave;n h&igrave;nh IPS 21,45 inch Full HD (1920 x 1080) với kiểu d&aacute;ng si&ecirc;u mỏng thời trang chỉ mỏng 6,5 mm Tốc độ l&agrave;m mới l&ecirc;n tới 75Hz v&agrave; MPRT 1ms với c&ocirc;ng nghệ đồng bộ h&oacute;a th&iacute;ch ứng để loại bỏ dấu vết v&agrave; đảm bảo ph&aacute;t lại video sắc n&eacute;t v&agrave; r&otilde; r&agrave;ng Chức năng GamePlus độc quyền được thiết kế tinh tế cho mọi nhu cầu chơi game Chứng nhận TUV Rheinland cho c&ocirc;ng nghệ Flicker-free v&agrave; Low Bl', 1, 'manhinh1.jpg'),
(62, 'Màn hình Asus TUF VG27AQ', 39, 42, '8890000', '', '', '<p>K&iacute;ch thước m&agrave;n h&igrave;nh 27&rdquo; Độ ph&acirc;n giải 2560x1440 (2K) Tần số qu&eacute;t 165hz G&oacute;c nh&igrave;n 178&deg; (H) / 178&deg; (V) M&agrave;u m&agrave;n h&igrave;nh 16.8 triệu Độ s&aacute;ng 350 cd/m2 Thời gian phản ứng 1 ms (MPRT) Tấm nền IPS</p>\r\n', 1, 'manhinh2.jpg'),
(63, 'Màn Hình ASUS VA27EHE', 39, 42, '4300000', '', '', '<p>M&agrave;n h&igrave;nh c&ocirc;ng nghệ IPS 27&rdquo; với độ ph&acirc;n giải FHD (1920&times;1080), g&oacute;c nh&igrave;n rộng 178&deg; Tần số qu&eacute;t l&ecirc;n đến 75Hz hỗ trợ Adaptive Sync khử giật lag x&eacute; h&igrave;nh, cho trải nghiệm chơi game ổn định M&agrave;n h&igrave;nh Eye Care của ASUS hỗ trợ c&ocirc;ng nghệ &Aacute;nh s&aacute;ng xanh thấp v&agrave; Khử nhấp nh&aacute;y được Chứng nhận bởi T&Uuml;V Rheinland Loại m&agrave;n h&igrave;nh: Phẳng Tỉ lệ: 16:9 K&iacute;ch thước:', 1, 'manhinh3.png'),
(64, 'Màn hình Samsung LS27B800PXEXXV', 39, 45, '11750000', '', '', '<p>K&iacute;ch thước m&agrave;n h&igrave;nh 27 inch Tỷ lệ m&agrave;n h&igrave;nh 16 : 9 Độ ph&acirc;n giải 3840 x 2168 UHD Tần số qu&eacute;t 60Hz 5ms Tấm nền IPS Độ tương phản 1000:1(Typ) Độ s&aacute;ng 400cd/m2 G&oacute;c nh&igrave;n 178&deg;(H)/178&deg;(V) M&agrave;u sắc hiển thị 1.07 tỉ m&agrave;u Cổng kết nối: HDMI (hỗ trợ HDCP 2.2), DisplayPort, giắc Audio, USB-C hỗ trợ sạc 90W, cổng LAN</p>\r\n', 1, 'manhinh6.jpg'),
(65, 'Màn hình Viewsonic VX2476', 39, 43, '3500000', '', '', '<p>- Model: VX2476 - Tấm nền : IPS - K&iacute;ch thước m&agrave;n h&igrave;nh: 23.8 inch - Độ ph&acirc;n giải: 1920x1080 - Độ s&aacute;ng :250 cd/m2 - Kết nối : VGA, HDMI, DisplayPort - Phụ kiện : c&aacute;p nguồn, c&aacute;p vga</p>\r\n', 1, 'manhinh7.png'),
(66, 'CHUỘT EDRA EM624 TRẮNG (USB)', 40, 46, '339000', '459000', 'Tặng Voucher 50.000đ khi mua thêm Bàn di chuột Gaming cỡ lớn LED RGB', '<ul>\r\n	<li>Chuột Edra EM624</li>\r\n	<li>Mắt cảm biến 6662IC</li>\r\n	<li>DPI: 12000 DPI</li>\r\n	<li>Switch bấm Huano với tuổi thọ 50 triệu lần nhấn</li>\r\n	<li>Led RGB</li>\r\n</ul>\r\n', 1, 'chuot6.jpg'),
(67, 'CHUỘT CHƠI GAME ASUS TUF M3 (USB/ĐEN)', 40, 46, '389000', '759.000', 'Tặng Voucher 50.000đ khi mua thêm Bàn di chuột Gaming cỡ lớn LED RGB', '<ul>\r\n	<li>Chuột chơi game Asus TUF M3</li>\r\n	<li>Thiết kế c&ocirc;ng th&aacute;i học v&agrave; trọng lượng nhẹ để thao t&aacute;c tốc độ cao tiện lợi bằng kiểu cầm chuột claw hoặc fingertip grip.</li>\r\n	<li>Cảm biến quang 7000-dpi đẳng cấp chơi game để theo d&otilde;i ch&iacute;nh x&aacute;c điểm ảnh c&ugrave;ng với hai n&uacute;t DPI để điều chỉnh độ nhạy khi di chuyển.</li>\r\n	<li>Lớp mạ chuy&ecirc;n dụng đ&atilde; được kiểm chứng với t&aacute;c vụ kh&oacute; cho độ bền cao hơn, 20 triệu lần n', 1, 'chuot7.png'),
(68, 'CHUỘT GAME KHÔNG DÂY ASUS TUF M4 WIRELESS (USB)', 40, 46, '939000', '1.299.000', 'Tặng Voucher 50.000đ khi mua thêm Bàn di chuột Gaming cỡ lớn LED RGB', '<ul>\r\n	<li>Chuột game kh&ocirc;ng d&acirc;y Asus TUF M4 Wireless</li>\r\n	<li>Chuẩn kết nối: Wireless 2.4Ghz / Bluetooth</li>\r\n	<li>Mắt cảm biến PMW3331 với độ ph&acirc;n giải 12k DPI cho độ ch&iacute;nh x&aacute;c cao</li>\r\n	<li>Trọng lượng si&ecirc;u nhẹ 62g (chưa bao gồm pin)</li>\r\n	<li>C&ocirc;ng nghệ xử l&yacute; kh&aacute;ng khuẩn gi&uacute;p chuột lu&ocirc;n sạch sẽ</li>\r\n	<li>6 n&uacute;t c&oacute; thể lập tr&igrave;nh</li>\r\n</ul>\r\n', 1, 'chuot8.jpg'),
(69, 'CHUỘT KHÔNG DÂY DAREU LM115G MULTI COLOR PANDA_TM176G08607G', 40, 46, '249000', '279.000', 'Tặng Bàn di chuột trị giá 39.000đ (PADM768/PADM776) - Áp dụng đến hết 30/6/2023', '<ul>\r\n	<li>Chuột DareU LM115G</li>\r\n	<li>Độ ph&acirc;n giải : 800-1200-1600 DPI</li>\r\n	<li>Kết nối kh&ocirc;ng d&acirc;y c&ocirc;ng nghệ wireless 2.4Ghz</li>\r\n	<li>Thiết kế ph&ugrave; hợp cho t&aacute;c vụ văn ph&ograve;ng</li>\r\n</ul>\r\n', 1, 'chuot9.jpg'),
(70, 'CHUỘT GAME KHÔNG DÂY LOGITECH G705 RGB AURORA OFF WHITE (910-006369)', 40, 46, '1899000', '2.499.000', 'Tặng Voucher 50.000đ khi mua thêm Bàn di chuột Gaming cỡ lớn LED RGB', '<p>Thiết kế tạo sự thoải m&aacute;i tuyệt đối</p>\r\n\r\n<p>Kết nối Wireless v&agrave; Bluetooth tiện lợi</p>\r\n\r\n<p>Led RGB ấn tượng</p>\r\n\r\n<p>Pin: L&ecirc;n đến 40h (c&oacute; bật led RGB)</p>\r\n\r\n<p>N&uacute;t: 6 (Ho&agrave;n to&agrave;n c&oacute; thể lập tr&igrave;nh)</p>\r\n\r\n<p>K&iacute;ch thước: 39,4 mm x 68,1 mm x 105,8 mm</p>\r\n', 1, 'chuot10.jpg'),
(71, 'LAPTOP MSI GAMING KATANA 15 ', 37, 35, '35799000', '37999000', 'BỘ QUÀ TẶNG TRỊ GIÁ 2.589.000Đ', '<ul>\r\n	<li>CPU: Intel&reg; Core&trade; i7 13620H 3.6 GHz (24M Cache, up to 4.9 GHz)</li>\r\n	<li>RAM: 16GB DDR5-5200 SO-DIMM</li>\r\n	<li>Ổ cứng: 1TB PCIe&reg; 4.0 NVMe&trade; M.2 SSD</li>\r\n	<li>VGA: NVIDIA&reg; GeForce RTX4060 8GB</li>\r\n	<li>M&agrave;n h&igrave;nh: 15.6&quot; FHD (1920x1080), 144Hz, IPS-Level</li>\r\n	<li>T&iacute;nh năng: Đ&egrave;n nền b&agrave;n ph&iacute;m led RGB 4 v&ugrave;ng</li>\r\n</ul>\r\n', 0, 'laptopmsi.png'),
(72, 'LAPTOP MSI CREATOR Z17', 37, 35, '66699000', '85989000', 'BỘ QUÀ TẶNG TRỊ GIÁ 2.999.000Đ', '<ul>\r\n	<li>CPU: Intel Core i9 12900H</li>\r\n	<li>RAM: 32GB</li>\r\n	<li>Ổ cứng: 2TB SSD</li>\r\n	<li>VGA: NVIDIA RTX3070Ti Max Q 8G/</li>\r\n	<li>M&agrave;n h&igrave;nh: 17 inch QHD 165Hz Touch</li>\r\n	<li>B&agrave;n ph&iacute;m: c&oacute; đ&egrave;n nền</li>\r\n</ul>\r\n', 0, 'laptopmsi1.png'),
(73, 'LAPTOP MSI GAMING CROSSHAIR', 37, 35, '42849000', '44989000', 'BỘ QUÀ TẶNG TRỊ GIÁ 2.598.000Đ', '<ul>\r\n	<li>CPU: Intel Core i7 12700H</li>\r\n	<li>RAM: 16GB</li>\r\n	<li>Ổ cứng: 1TB SSD</li>\r\n	<li>VGA: Nvidia RTX3060 6G</li>\r\n	<li>M&agrave;n h&igrave;nh: 17.3 inch FHD 300Hz</li>\r\n	<li>HĐH: win 11)</li>\r\n</ul>\r\n', 1, 'laptopmsi2.jpg'),
(74, 'LAPTOP MSI DRAGON', 37, 35, '24000000', '25000000', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<ul>\r\n	<li>CPU: Intel Core i7 12700H</li>\r\n	<li>RAM: 16GB</li>\r\n	<li>Ổ cứng: 1TB SSD</li>\r\n	<li>VGA: Nvidia RTX3060 6G</li>\r\n	<li>M&agrave;n h&igrave;nh: 17.3 inch FHD 300Hz</li>\r\n	<li>HĐH: win 11)</li>\r\n</ul>\r\n', 0, 'laptop1.jpg'),
(75, 'LAPTOP MSI DRAGON', 37, 35, '24000000', '25000000', 'KHUYẾN MẠI: GÓI DỊCH VỤ HỖ TRỢ KHÁCH HÀNG TẬN NƠI TRỊ GIÁ 450.000Đ', '<ul>\r\n	<li>CPU: Intel Core i7 12700H</li>\r\n	<li>RAM: 16GB</li>\r\n	<li>Ổ cứng: 1TB SSD</li>\r\n	<li>VGA: Nvidia RTX3060 6G</li>\r\n	<li>M&agrave;n h&igrave;nh: 17.3 inch FHD 300Hz</li>\r\n	<li>HĐH: win 11)</li>\r\n</ul>\r\n', 0, 'laptop1.jpg'),
(76, 'LAPTOP MSI GAMING KATANA 15 ', 37, 35, '35799000', '37999000', 'BỘ QUÀ TẶNG TRỊ GIÁ 2.589.000Đ', '<ul>\r\n	<li>CPU: Intel&reg; Core&trade; i7 13620H 3.6 GHz (24M Cache, up to 4.9 GHz)</li>\r\n	<li>RAM: 16GB DDR5-5200 SO-DIMM</li>\r\n	<li>Ổ cứng: 1TB PCIe&reg; 4.0 NVMe&trade; M.2 SSD</li>\r\n	<li>VGA: NVIDIA&reg; GeForce RTX4060 8GB</li>\r\n	<li>M&agrave;n h&igrave;nh: 15.6&quot; FHD (1920x1080), 144Hz, IPS-Level</li>\r\n	<li>T&iacute;nh năng: Đ&egrave;n nền b&agrave;n ph&iacute;m led RGB 4 v&ugrave;ng</li>\r\n</ul>\r\n', 0, 'laptopmsi.png'),
(77, 'LAPTOP MSI CREATOR Z17', 37, 35, '66699000', '85989000', 'BỘ QUÀ TẶNG TRỊ GIÁ 2.999.000Đ', '<ul>\r\n	<li>CPU: Intel Core i9 12900H</li>\r\n	<li>RAM: 32GB</li>\r\n	<li>Ổ cứng: 2TB SSD</li>\r\n	<li>VGA: NVIDIA RTX3070Ti Max Q 8G/</li>\r\n	<li>M&agrave;n h&igrave;nh: 17 inch QHD 165Hz Touch</li>\r\n	<li>B&agrave;n ph&iacute;m: c&oacute; đ&egrave;n nền</li>\r\n</ul>\r\n', 0, 'laptopmsi1.png'),
(78, 'Laptop ACER Nitro 5 Eagle AN515-57-54MV', 37, 36, '19990000', '', 'Ba lô Acer Gaming SUV', '<p>- CPU: Intel Core i5-11400H<br />\r\n- M&agrave;n h&igrave;nh: 15.6&quot; IPS (1920 x 1080),144Hz<br />\r\n- RAM: 1 x 8GB DDR4 3200MHz<br />\r\n- Đồ họa: RTX 3050 4GB GDDR6 / Intel UHD Graphics<br />\r\n- Lưu trữ: 512GB SSD M.2 NVMe /<br />\r\n- Hệ điều h&agrave;nh: Windows 11<br />\r\n- Pin: 4 cell 57 Wh Pin liền<br />\r\n- Khối lượng: 2.2kg</p>\r\n', 1, 'laptop5.jpg'),
(79, 'Ghế công thái học ergonomic WARRIOR – Hero series – WEC502', 41, 51, '3390000', '', '', '<p>Ghế c&ocirc;ng th&aacute;i học Lưng lưới Fibone &ndash; M&acirc;m ngồi Foam Lạnh Ngả lưng True Tilt Tựa đầu 3D, K&ecirc; tay 3D Piston Class 3 bền bỉ Lưng ghế t&ugrave;y chỉnh c&ocirc;ng th&aacute;i học Ch&acirc;n nhựa thiết kế chịu lực Tải trọng tối đa 120kg Chiều cao tối đa 190cm</p>\r\n', 0, 'banghe.png'),
(80, 'Ghế công thái học ergonomic WARRIOR – Hero series – WEC502', 41, 51, '3390000', '', '', '<p>Ghế c&ocirc;ng th&aacute;i học Lưng lưới Fibone &ndash; M&acirc;m ngồi Foam Lạnh Ngả lưng True Tilt Tựa đầu 3D, K&ecirc; tay 3D Piston Class 3 bền bỉ Lưng ghế t&ugrave;y chỉnh c&ocirc;ng th&aacute;i học Ch&acirc;n nhựa thiết kế chịu lực Tải trọng tối đa 120kg Chiều cao tối đa 190cm</p>\r\n', 0, 'banghe.png'),
(81, 'Ghế công thái học ergonomic WARRIOR – Hero series – WEC502', 41, 51, '3390000', '', '', '<p>Ghế c&ocirc;ng th&aacute;i học Lưng lưới Fibone &ndash; M&acirc;m ngồi Foam Lạnh Ngả lưng True Tilt Tựa đầu 3D, K&ecirc; tay 3D Piston Class 3 bền bỉ Lưng ghế t&ugrave;y chỉnh c&ocirc;ng th&aacute;i học Ch&acirc;n nhựa thiết kế chịu lực Tải trọng tối đa 120kg Chiều cao tối đa 190cm</p>\r\n', 0, 'banghe.png'),
(82, 'Ghế công thái học ergonomic WARRIOR – Hero series – WEC502', 41, 51, '3390000', '', '', '<p>Ghế c&ocirc;ng th&aacute;i học Lưng lưới Fibone &ndash; M&acirc;m ngồi Foam Lạnh Ngả lưng True Tilt Tựa đầu 3D, K&ecirc; tay 3D Piston Class 3 bền bỉ Lưng ghế t&ugrave;y chỉnh c&ocirc;ng th&aacute;i học Ch&acirc;n nhựa thiết kế chịu lực Tải trọng tối đa 120kg Chiều cao tối đa 190cm</p>\r\n', 0, 'banghe.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD PRIMARY KEY (`id_loaisp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_loaisp` (`id_loaisp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_loaisp`
--
ALTER TABLE `tbl_loaisp`
  ADD CONSTRAINT `tbl_loaisp_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`id_loaisp`) REFERENCES `tbl_loaisp` (`id_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
