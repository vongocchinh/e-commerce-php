-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 06, 2020 at 09:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `baiviet_id` int(11) NOT NULL,
  `baiviet_td` varchar(100) NOT NULL,
  `baiviet_name` mediumtext NOT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`baiviet_id`, `baiviet_td`, `baiviet_name`, `img`) VALUES
(4, 'Kế hoạch ra mắt iPhone 12 có thể bị hoãn, thời gian đẩy xuống tháng 11', '<h1>Kế hoạch ra mắt iPhone 12 c&oacute; thể bị ho&atilde;n, thời gian đẩy xuống th&aacute;ng 11</h1>\r\n\r\n<p>&nbsp;28/05/2020, 16:36 GMT+07:00</p>\r\n\r\n<p><img src=\"https://static1.yan.vn/2019/theme/images/icon_messenger.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Theo c&aacute;c nguồn tin, do ảnh hưởng của dịch bệnh, sản phẩm mới của Apple sẽ ra mắt chậm hơn, muộn khoảng 2 th&aacute;ng so với th&ocirc;ng thường.</h2>\r\n\r\n<p>C&aacute;c sản phẩm đến từ nh&agrave; &quot;t&aacute;o khuyết&quot; từ xưa đến nay lu&ocirc;n thu h&uacute;t sự quan t&acirc;m của c&ocirc;ng đảo dư luận. Đặc biệt, mẫu iPhone mới sắp ra mắt được d&acirc;n t&igrave;nh gọi với c&aacute;i t&ecirc;n iPhone&nbsp;12 cũng l&agrave; 1 trong những sản phẩm g&acirc;y ch&uacute; &yacute;.</p>\r\n\r\n<p><a href=\"https://www.yan.vn/hoahauvietnam2020/du-thi-hoa-hau-viet-nam-2020-ban-da-nam-duoc-mau-don-dang-ky-228983.html\" target=\"_blank\"><img src=\"https://static1.yan.vn/banner/fbbanner/banner_dangky_hhvn2020.jpg\" /></a></p>\r\n\r\n<p>Theo một số nguồn tin, rất c&oacute; thể sản phẩm mới của nh&agrave; &quot;t&aacute;o khuyết&quot; sẽ được tr&igrave;nh l&agrave;ng v&agrave;o th&aacute;ng 11 tới.&nbsp;</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-4a35a347.jpg\"><img alt=\" \r\niPhone 12 là sản phẩm đang được mong chờ nhất hiện nay​. (Ảnh: Appleinsider)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-4a35a347.jpg\" /></a><br />\r\n<em>iPhone 12&nbsp;l&agrave; sản phẩm đang được mong&nbsp;chờ nhất hiện nay​.&nbsp;</em><em>(Ảnh: Appleinsider)</em></p>\r\n\r\n<p><strong><em>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;</em></strong><a href=\"https://www.yan.vn/iphone-12-se-co-gia-re-hon-du-kien-ra-mat-them-3-mau-pastel-moi-228407.html?utm_campaign=InternallinkYAN&amp;utm_source=230371&amp;utm_medium=noniadesktop\" target=\"_blank\"><em>iPhone 12 sẽ c&oacute; gi&aacute; rẻ hơn, dự kiến ra mắt th&ecirc;m 3 m&agrave;u pastel mới</em></a></p>\r\n\r\n<p><strong>iPhone 12 dự kiến ra mắt th&aacute;ng 11</strong></p>\r\n\r\n<p>H&atilde;ng ph&acirc;n t&iacute;ch&nbsp;Cowen đ&atilde; đưa ra 1 b&aacute;o c&aacute;o mới đ&acirc;y, theo đ&oacute;, kế hoạch ra mắt iPhone 12 sẽ c&oacute; thể tiếp tục bị tr&igrave; ho&atilde;n. Nếu như trước đ&oacute; c&oacute; th&ocirc;ng tin ra mắt muộn hơn khoảng 1 th&aacute;ng so với lịch th&ocirc;ng thường th&igrave; nay thời gian c&oacute; thể chậm hơn tới 2 th&aacute;ng. Như vậy, dự kiến iPhone 12 sẽ tr&igrave;nh l&agrave;ng v&agrave;o th&aacute;ng 11 năm nay.</p>\r\n\r\n<p>Sở dĩ, nguy&ecirc;n do của sự chậm trễ n&agrave;y l&agrave; bởi ảnh hưởng từ dịch Covid-19. T&igrave;nh h&igrave;nh dịch bệnh b&ugrave;ng ph&aacute;t tại nhiều quốc gia đ&atilde; khiến c&aacute;c kế hoạch sản xuất bị tr&igrave; trệ. T&iacute;nh ri&ecirc;ng trong qu&yacute;&nbsp;II/2020, Apple chỉ đạt&nbsp;35 triệu sản phẩm, sản lượng iPhone sản xuất thấp hơn 13% với c&ugrave;ng kỳ năm ngo&aacute;i.</p>\r\n\r\n<p>Đặc biệt, iPhone thế hệ mới cũng được mở rộng dải sản phẩm. Điều n&agrave;y cũng l&agrave; 1 trong những nguy&ecirc;n nh&acirc;n khiến kế hoạch&nbsp;ra mắt phải l&ugrave;i lại.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-c2d04624.jpg\"><img alt=\" \r\nSản phẩm dự kiến trình làng vào tháng 11. (Ảnh: Techpit)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-c2d04624.jpg\" /></a><br />\r\n<em>Sản phẩm dự kiến tr&igrave;nh l&agrave;ng v&agrave;o th&aacute;ng 11. (Ảnh: Techpit)</em></p>\r\n\r\n<p><em><strong>&gt;&gt;&gt; C&oacute; thể bạn quan t&acirc;m:&nbsp;</strong><a href=\"https://www.yan.vn/ro-ri-dien-mao-cua-iphone-12-plus-tai-tho-nho-gon-canh-may-vuong-vuc-228650.html?utm_campaign=InternallinkYAN&amp;utm_source=230371&amp;utm_medium=noniadesktop\" target=\"_blank\">R&ograve; rỉ diện mạo của iPhone 12 Plus: Tai thỏ nhỏ gọn, cạnh m&aacute;y vu&ocirc;ng vức</a></em></p>\r\n\r\n<p><strong>iPhone 12 cải tiến vượt trội</strong></p>\r\n\r\n<p>Theo nhiều nguồn tin, sản phẩm mới nh&agrave; &quot;t&aacute;o khuyết&quot; sẽ c&oacute; nhiều cải tiến vượt bậc. Về thiết kế, mẫu iPhone 12 được dự đo&aacute;n c&oacute; thiết kế tai thỏ nhỏ gọn. Ngo&agrave;i ra, sản phẩm c&ograve;n sử dụng m&agrave;n h&igrave;nh OLED. Vẫn sử dụng thiết kế 2 k&iacute;nh c&ugrave;ng những chiếc&nbsp;kim loại cứng c&aacute;p như c&aacute;c sản phẩm thế hệ trước, tuy nhi&ecirc;n iPhone 12 sẽ kh&ocirc;ng c&ograve;n bo cong m&agrave; c&oacute; thiết kế v&aacute;t phẳng như iPhone 4s.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-b65b9878.jpg\"><img alt=\" \r\niPhone 12 thiết kế vát phẳng. (Ảnh: androidauthority)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-b65b9878.jpg\" /></a><br />\r\n<em>iPhone 12 thiết kế v&aacute;t phẳng. (Ảnh:&nbsp;androidauthority)</em></p>\r\n\r\n<p>K&iacute;ch thước của iPhone 12 sẽ nhỏ hơn iPhone 11 Pro, tuy nhi&ecirc;n lại&nbsp;lớn hơn 11 Pro Max được ra mắt năm ngo&aacute;i, nằm trong khoảng từ&nbsp;5,4 đến 6,7 inch. Theo đ&oacute;, sản phẩm c&oacute; thể&nbsp;sẽ được t&iacute;ch hợp c&ocirc;ng nghệ 5G.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về cấu h&igrave;nh, với 2 nh&oacute;m ti&ecirc;u chuẩn v&agrave; cao cấp, iPhone 12 đều sử dụng&nbsp;chip A14 tiến tr&igrave;nh 5 nm mới được sản xuất bởi&nbsp;TSMC. Phi&ecirc;n bản dung lượng bộ nhớ 64 GB sẽ&nbsp;bị loại bỏ, chỉ khởi điểm với 128 GB. C&aacute;c model thấp c&oacute; m&agrave;n h&igrave;nh&nbsp;5,4 v&agrave; 6,1 inch,&nbsp;dung lượng l&agrave; RAM 4 GB. Trong khi&nbsp;đ&oacute;, 2&nbsp;model cao&nbsp;hơn sẽ sở hữu&nbsp;m&agrave;n h&igrave;nh 6,1 v&agrave; 6,7 inch, RAM c&oacute; dung lượng 6 GB.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-1b839a50.jpg\"><img alt=\" \r\nMàn hình dự kiến của iPhone 12. (Ảnh: androidauthority)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/ke-hoach-ra-mat-iphone-12-co-the-bi-hoan-thoi-gian-day-xuong-thang-11-1b839a50.jpg\" /></a><br />\r\n<em>M&agrave;n h&igrave;nh dự kiến của iPhone 12. (Ảnh:&nbsp;androidauthority)</em></p>\r\n\r\n<p><em>C&ugrave;ng đ&oacute;n đọc những tin tức về c&ocirc;ng nghệ kh&aacute;c tr&ecirc;n&nbsp;</em><a href=\"https://www.facebook.com/yancongnghe/\">https://www.facebook.com/yancongnghe/</a><em>&nbsp;nh&eacute;!</em></p>\r\n', 'ip12.jpg'),
(5, 'Dân mạng \"cà khịa\" người dùng điện thoại gặp lỗi Android Recovery', '<h1>D&acirc;n mạng &quot;c&agrave; khịa&quot; người d&ugrave;ng điện thoại gặp lỗi Android Recovery</h1>\r\n\r\n<p>&nbsp;24/05/2020, 14:25 GMT+07:00</p>\r\n\r\n<p><img src=\"https://static1.yan.vn/2019/theme/images/icon_messenger.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Trong khi người d&ugrave;ng Samsung đang &quot;t&aacute; hỏa&quot; v&igrave; m&agrave;n h&igrave;nh bỗng to&agrave;n chữ xanh chữ đỏ th&igrave; người d&ugrave;ng iPhone lẫn d&acirc;n mạng lại được phen đi &quot;c&agrave; khịa&quot;.</h2>\r\n\r\n<p>V&agrave;i ng&agrave;y qua, người d&ugrave;ng điện thoại Samsung kh&ocirc;ng khỏi lo lắng khi chiếc&nbsp;<a href=\"https://www.facebook.com/yancongnghe/\" target=\"_blank\">smartphone</a>&nbsp;y&ecirc;u qu&yacute; của m&igrave;nh bất ngờ gặp lỗi. Theo th&ocirc;ng tin cho biết, những chiếc điện thoại n&agrave;y bỗng dưng hiển thị m&agrave;n h&igrave;nh Android Recovery d&ugrave; người d&ugrave;ng kh&ocirc;ng c&oacute; bất kỳ t&aacute;c động g&igrave;.</p>\r\n\r\n<p>Ngay sau khi điện thoại bị trục trặc, kh&ocirc;ng &iacute;t người d&ugrave;ng l&ecirc;n mạng x&atilde; hội than v&atilde;n, t&igrave;m c&aacute;ch khắc phục. Thế nhưng, &ldquo;dở kh&oacute;c dở cười&rdquo; ở chỗ c&aacute;c fan nh&agrave; T&aacute;o khuyết v&agrave; một v&agrave;i h&atilde;ng điện thoại kh&aacute;c lại &ldquo;c&agrave; khịa&rdquo; người d&ugrave;ng Samsung khiến d&acirc;n mạng được phen cười b&ograve;.</p>\r\n\r\n<p><br />\r\n<em>Người d&ugrave;ng Samsung &quot;t&aacute; hỏa&quot; v&igrave; điện thoại gặp lỗi. (Ảnh: VNExpress).</em></p>\r\n\r\n<p><strong>Cư d&acirc;n mạng cười b&ograve; v&igrave; iFan &quot;c&agrave; khịa&quot; người d&ugrave;ng Samsung</strong></p>\r\n\r\n<p>Trong những b&agrave;i đăng về việc chiếc điện thoại thuộc h&atilde;ng nổi tiếng của xứ H&agrave;n gặp lỗi, dễ d&agrave;ng bắt gặp những b&igrave;nh luận &ldquo;c&agrave; khịa&rdquo; của c&aacute;c fan nh&agrave; T&aacute;o khuyết. Thậm ch&iacute;, chủ nh&acirc;n của những chiếc điện thoại đang gặp lỗi c&ograve;n đau khổ hơn khi nhiều người d&ugrave;ng m&aacute;y h&atilde;ng kh&aacute;c cũng chạy v&agrave;o ch&acirc;m chọc, khiến&nbsp;<a href=\"https://www.facebook.com/yancongdongmang/\" target=\"_blank\">d&acirc;n mạng</a>&nbsp;được phen &ldquo;dở kh&oacute;c dở cười&rdquo;. C&ugrave;ng xem qua một v&agrave;i b&igrave;nh luận nh&eacute;:</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/dan-mang-ca-khia-nguoi-dung-dien-thoai-samsung-gap-loi-7cbe16cb.JPG\"><img alt=\" \r\nMột số bình luận của cư dân mạng. (Ảnh: Chụp màn hình).\" src=\"https://static2.yan.vn/YanNews/2167221/202005/dan-mang-ca-khia-nguoi-dung-dien-thoai-samsung-gap-loi-7cbe16cb.JPG\" /></a><br />\r\n<em>Một số b&igrave;nh luận của cư d&acirc;n mạng. (Ảnh: Chụp m&agrave;n h&igrave;nh).</em></p>\r\n\r\n<p><em>- &ldquo;M&igrave;nh d&ugrave;ng iPhone kh&ocirc;ng thấy lỗi g&igrave;, thật lạ&rdquo;.</em></p>\r\n\r\n<p><em>- &ldquo;C&ugrave;ng h&atilde;ng nhưng kh&ocirc;ng bị lỗi, chắc do ăn ở&rdquo;.</em></p>\r\n\r\n<p><em>- &ldquo;May qu&aacute; x&agrave;i Nokia kh&ocirc;ng thấy lỗi, mọi người c&oacute; bị lỗi kh&ocirc;ng?&rdquo;</em></p>\r\n\r\n<p><em>- &ldquo;Sửa như n&agrave;o vậy mọi người ơi, s&aacute;ng ra thấy n&oacute; đơ m&aacute;y m&agrave; buồn d&atilde; man&rdquo;.</em></p>\r\n\r\n<p><em>- &ldquo;Cứ cắm sạc v&agrave;o l&agrave; được bạn ạ, con iPhone 5s c&ugrave;i bắp của m&igrave;nh cắm sạc đầy pin c&ograve;n chạy ph&agrave; ph&agrave; đ&acirc;y n&agrave;y&rdquo;.</em></p>\r\n\r\n<p><br />\r\n<em>Người d&ugrave;ng iPhone được phen &quot;c&agrave; khịa&quot; c&aacute;c fan Samsung. (Ảnh minh họa: Tehelka).</em></p>\r\n\r\n<p><em>&gt;&gt; C&oacute; thể bạn chưa xem:&nbsp;<a href=\"https://www.yan.vn/nhan-vien-samsung-dung-iphone-189209.html?utm_campaign=InternallinkYAN&amp;utm_source=229996&amp;utm_medium=noniadesktop\" target=\"_blank\">Cười ra nước mắt chuyện nh&acirc;n vi&ecirc;n Samsung d&ugrave;ng iPhone đăng post quảng c&aacute;o cho... Samsung</a></em></p>\r\n\r\n<p><strong>Điện thoại Samsung gặp lỗi h&agrave;ng loạt</strong></p>\r\n\r\n<p>Được biết trước đ&oacute;, v&agrave;o ng&agrave;y 23/5, nhiều người d&ugrave;ng Samsung tại Việt Nam cho biết chiếc điện thoại của họ bất ngờ gặp lỗi. Hầu hết c&aacute;c m&aacute;y đều hiển thị m&agrave;n h&igrave;nh Android Recovery d&ugrave; cho người d&ugrave;ng kh&ocirc;ng hề t&aacute;c động v&agrave;o m&aacute;y. Việc n&agrave;y đ&atilde; g&acirc;y kh&oacute; khăn, lo lắng cho người d&ugrave;ng v&igrave; họ kh&ocirc;ng thể sử dụng điện thoại, thậm ch&iacute; c&oacute; người tắt v&agrave; bật lại nguồn vẫn kh&ocirc;ng thể khắc phục sự cố.</p>\r\n\r\n<p><br />\r\n<em>Người d&ugrave;ng lo lắng điện thoại của m&igrave;nh sẽ biến th&agrave;nh &quot;cục gạch&quot;&nbsp;(Ảnh: Vietnamnet).</em></p>\r\n\r\n<p><em>&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://www.yan.vn/apple-tra-dua-samsung-bang-loat-anh-long-lanh-tu-iphone-6-49210.html?utm_campaign=InternallinkYAN&amp;utm_source=229996&amp;utm_medium=noniadesktop\" target=\"_blank\">Apple &quot;trả đũa&quot; Samsung bằng loạt ảnh long lanh từ iPhone 6</a></em></p>\r\n\r\n<p><strong>C&aacute;ch khắc phục sự cố</strong></p>\r\n\r\n<p>Theo th&ocirc;ng tin từ b&aacute;o Người Lao Động, lỗi hiển thị m&agrave;n h&igrave;nh Android Recovery hay c&ograve;n được gọi l&agrave; lỗi treo Recovery được khắc phục như sau: Khi tiến h&agrave;nh khắc phục sự cố, cần gắn thẻ SIM cho m&aacute;y, sau đ&oacute; lần lượt tiến h&agrave;nh c&aacute;c bước như hướng dẫn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bước 1:&nbsp;Chọn &ldquo;Try Again&rdquo; (thử lại) trong chế độ&nbsp;&ldquo;Recovery Mode&rdquo; (chế độ phục hồi), sau đ&oacute; đợi m&agrave;n h&igrave;nh đen hiện l&ecirc;n.</p>\r\n\r\n<p>Bước 2:&nbsp;Sử dụng điện thoại kh&aacute;c gọi v&agrave;o m&aacute;y bị lỗi, tiếp đ&oacute; nhấn &ldquo;Nhận cuộc gọi&rdquo; tr&ecirc;n m&aacute;y đang bị lỗi.</p>\r\n\r\n<p>Bước 3:&nbsp;Khi m&aacute;y bị lỗi đang nhận cuộc gọi, h&atilde;y vuốt m&agrave;n h&igrave;nh từ tr&ecirc;n xuống v&agrave; chọn &ldquo;C&agrave;i đặt&rdquo;.</p>\r\n\r\n<p>Bước 4:&nbsp;Nếu m&aacute;y vẫn bị đưa về m&agrave;n h&igrave;nh &ldquo;Recovery Mode&rdquo; h&atilde;y l&agrave;m lại c&aacute;c&nbsp;bước như tr&ecirc;n để cập nhật phần mềm cho tới khi c&oacute; th&ocirc;ng b&aacute;o: &ldquo;Đ&atilde; cập nhật phần mềm mới nhất&rdquo;.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/202005/202005240215107504-4f0d2b26-0281-4571-8e2f-33be20f7e50e.jpeg\"><img alt=\" \r\nĐã có cách khắc phục cho lỗi mà điện thoại gặp phải. (Ảnh: Người Lao Động).\" src=\"https://static2.yan.vn/YanNews/202005/202005240215107504-4f0d2b26-0281-4571-8e2f-33be20f7e50e.jpeg\" /></a><br />\r\n<em>Đ&atilde; c&oacute; c&aacute;ch khắc phục cho lỗi m&agrave; điện thoại gặp phải. (Ảnh: Người Lao Động).</em></p>\r\n\r\n<p><em>&gt;&gt; C&oacute; thể bạn quan t&acirc;m:&nbsp;<a href=\"https://www.yan.vn/samsung-che-camera-cua-iphone-6-khong-bang-galaxy-s6-49109.html?utm_campaign=InternallinkYAN&amp;utm_source=229996&amp;utm_medium=noniadesktop\" target=\"_blank\">Samsung ch&ecirc; camera của iPhone 6 kh&ocirc;ng bằng Galaxy S6</a></em></p>\r\n\r\n<p>Mặc d&ugrave; tr&ecirc;u chọc người d&ugrave;ng Samsung, song d&acirc;n mạng vẫn rất tốt bụng, hướng dẫn họ c&aacute;ch khắc phục lỗi hiển thị m&agrave;n h&igrave;nh &ldquo;Recovery Mode&rdquo;. Hi vọng người d&ugrave;ng sẽ sớm khắc phục được sự cố để c&oacute; thể sử dụng lại điện thoại của m&igrave;nh nh&eacute;!</p>\r\n\r\n<p>C&ugrave;ng đ&oacute;n đọc những tin tức mới nhất từ&nbsp;<a href=\"https://www.yan.vn/?utm_campaign=InternallinkYAN&amp;utm_source=229996&amp;utm_medium=noniadesktop\" target=\"_blank\">YAN</a>&nbsp;nha!</p>\r\n\r\n<p><em>Facebook h&ocirc;m nay lại c&oacute; tin g&igrave; hot nhất? Đ&atilde; c&oacute;&nbsp;<a href=\"https://www.facebook.com/yancongdongmang/\">YAN Netizen</a>&nbsp;cập nhật gi&uacute;p bạn. Follow ngay để bắt nhịp xu thế!</em></p>\r\n', 'loij6.jpg'),
(6, 'CĐM truyền tay nhau mẫu iPhone 12 Flip giống đối thủ cạnh tranh', '<h2>Ngay sau khi đoạn video cho thấy mẫu thiết kế của iPhone 12 phi&ecirc;n bản gập được đăng tải, cư d&acirc;n mạng đ&atilde; để lại kh&aacute; nhiều &yacute; kiến tr&aacute;i chiều.</h2>\r\n\r\n<p>iPhone hiện nay của Apple vẫn l&agrave; một trong những d&ograve;ng điện thoại đi đầu xu hướng v&agrave; được ưa chuộng tr&ecirc;n thế giới. V&igrave; thế m&agrave; nhiều l&uacute;c ngay cả khi c&aacute;c mẫu điện thoại c&ograve;n chưa ra mắt, đ&atilde; c&oacute; rất nhiều lời đồn đo&aacute;n về thiết kế lẫn gi&aacute; tiền của chiếc điện thoại n&agrave;y.</p>\r\n\r\n<p><a href=\"https://www.yan.vn/hoahauvietnam2020/du-thi-hoa-hau-viet-nam-2020-ban-da-nam-duoc-mau-don-dang-ky-228983.html\" target=\"_blank\"><img src=\"https://static1.yan.vn/banner/fbbanner/banner_dangky_hhvn2020.jpg\" /></a></p>\r\n\r\n<p>C&aacute;ch đ&acirc;y kh&ocirc;ng l&acirc;u, một đoạn clip về mẫu điện thoại iPhone 12 Flip đ&atilde; được đăng tải tr&ecirc;n mạng x&atilde; hội khiến kh&ocirc;ng &iacute;t iFan x&ocirc;n xao. Đ&aacute;ng n&oacute;i l&agrave; mẫu thiết kế kiểu m&aacute;y gập n&agrave;y đ&atilde; được h&atilde;ng điện thoại đối thủ của Apple&nbsp;cho ra mắt gần đ&acirc;y.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-b82c297b.jpg\"><img alt=\" \r\nMẫu iPhone 12 Flip lộ diện trang MXH. Ảnh: ConceptsiPhone\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-b82c297b.jpg\" /></a><br />\r\n<em>Mẫu iPhone 12 Flip lộ diện trang MXH.&nbsp;Ảnh:&nbsp;ConceptsiPhone</em></p>\r\n\r\n<p><strong>Nhiều người kh&ocirc;ng qu&aacute; mặn m&agrave; với mẫu điện thoại mới</strong></p>\r\n\r\n<p>Tr&aacute;i với những &yacute; kiến ủng hộ, mong chờ giống như những lần nh&aacute; h&agrave;ng mẫu điện thoại iPhone trước đ&oacute;, thật ngạc nhi&ecirc;n l&agrave; phi&ecirc;n bản gập của iPhone 12 lại c&oacute; vẻ kh&ocirc;ng được l&ograve;ng iFan cho lắm. Rất nhiều người cho rằng việc thiết kế kiểu d&aacute;ng gập n&agrave;y l&agrave; điều thừa th&atilde;i v&agrave; dĩ nhi&ecirc;n, v&igrave; đối thủ đ&atilde; đi trước rồi n&ecirc;n nếu Apple chắc cũng kh&ocirc;ng hết &yacute; tưởng đến mức m&agrave; sử dụng lại kiểu d&aacute;ng điện thoại n&agrave;y.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-76e99380.jpg\"><img alt=\" \r\nNhiều ý kiến trái chiều được đưa ra xung quanh mẫu thiết kế này. Ảnh: Chụp màn hình\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-76e99380.jpg\" /></a><br />\r\n<em>Nhiều&nbsp;&yacute; kiến tr&aacute;i chiều&nbsp;được&nbsp;đưa ra xung quanh mẫu thiết kế n&agrave;y.&nbsp;Ảnh: Chụp m&agrave;n h&igrave;nh</em></p>\r\n\r\n<p>Tuy nhi&ecirc;n một số kh&aacute;c lại tỏ ra kh&aacute; th&iacute;ch th&uacute; với kiểu d&aacute;ng điện thoại độc đ&aacute;o n&agrave;y. V&agrave;&nbsp;<a href=\"https://www.facebook.com/yancongdongmang/\" target=\"_blank\">cư d&acirc;n mạng</a>&nbsp;cũng cho rằng nếu thực sự Apple sản xuất iPhone 12 Flip th&igrave; hẳn l&agrave; mức gi&aacute; cũng khiến nhiều người &ldquo;nh&oacute;i thận&rdquo;.</p>\r\n\r\n<p><em>- M&igrave;nh kh&ocirc;ng thấy việc l&agrave;m bản flip c&oacute; &yacute; nghĩa g&igrave;. D&ugrave; h&atilde;ng n&agrave;o th&igrave; cũng c&ugrave;ng c&acirc;u hỏi.</em></p>\r\n\r\n<p><em>- Trước đ&acirc;y chỉ nghĩ h&atilde;ng kh&aacute;c đạo lại thiết kế của iPhone chứ kh&ocirc;ng nghĩ iPhone sẽ lấy &yacute; tưởng&nbsp; của h&atilde;ng kh&aacute;c.</em></p>\r\n\r\n<p><em>- C&oacute; ai c&ugrave;ng suy nghĩ kh&ocirc;ng hay mỗi m&igrave;nh thấy n&oacute; kh&ocirc;ng đẹp nhỉ.</em></p>\r\n\r\n<p><em>- Th&agrave; cứ thiết kế b&igrave;nh thường m&agrave; đầu tư v&agrave;o chip, camera với m&agrave;u sắc c&ograve;n hơn.</em></p>\r\n\r\n<p><em>&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://www.yan.vn/phien-ban-iphone-12-hoan-toan-khac-co-5-camera-sau-kem-man-hinh-phu-229462.html?utm_campaign=InternallinkYAN&amp;utm_source=229824&amp;utm_medium=noniadesktop\" target=\"_blank\">Phi&ecirc;n bản iPhone 12 ho&agrave;n to&agrave;n kh&aacute;c c&oacute; 5 camera sau k&egrave;m m&agrave;n h&igrave;nh phụ</a></em></p>\r\n\r\n<p><strong>Sự thật về mẫu thiết kế iPhone 12 Flip</strong></p>\r\n\r\n<p>Tr&ecirc;n thực tế, đ&acirc;y kh&ocirc;ng phải l&agrave; mẫu thiết kế ch&iacute;nh thức đến từ Apple m&agrave; l&agrave; của một nh&agrave; thiết kế với k&ecirc;nh YouTube ConceptsiPhone. Sau khi chứng kiến sự ra đời của mẫu điện thoại từ đối thủ của&nbsp;Apple, người n&agrave;y đ&atilde; tạo ra thiết kế m&aacute;y gập tương tự đối với iPhone 12 sắp được Apple cho ra mắt.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-a46c345c.jpg\"><img alt=\" \r\nMẫu iPhone 12 Flip chỉ là phiên bản 3D được dựng lên bởi một nhà thiết kế mà thôi. Ảnh: ConceptsiPhone\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-a46c345c.jpg\" /></a><br />\r\n<em>Mẫu iPhone 12 Flip chỉ l&agrave; phi&ecirc;n bản 3D&nbsp;được dựng l&ecirc;n bởi một nh&agrave; thiết kế m&agrave; th&ocirc;i.&nbsp;Ảnh:&nbsp;ConceptsiPhone</em></p>\r\n\r\n<p>M&agrave;n h&igrave;nh của bản iPhone 12 Flip n&agrave;y cũng sẽ được gập đ&ocirc;i, nửa sau m&aacute;y sẽ được t&iacute;ch hợp th&ecirc;m m&agrave;n h&igrave;nh phụ. C&aacute;c th&ocirc;ng số cũng được k&ecirc;nh YouTube n&agrave;y đăng tải kh&aacute; cụ thể như k&iacute;ch thước m&agrave;n h&igrave;nh full sẽ l&agrave; 6,7 inch, sở hữu 4 camera c&oacute; m&aacute;y qu&eacute;t LiDAR từng xuất hiện tr&ecirc;n iPad Pro 2020.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-c8c2cfd4.png\"><img alt=\" \r\nNgoài 4 camera ở mặt sau thì iPhone 12 Flip còn có màn hình tràn full viền. Ảnh: Weibo\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-c8c2cfd4.png\" /></a><br />\r\n<em>Ngo&agrave;i 4 camera&nbsp;ở mặt sau th&igrave; iPhone 12 Flip c&ograve;n c&oacute; m&agrave;n h&igrave;nh tr&agrave;n full viền.&nbsp;Ảnh:&nbsp;Weibo</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>&gt;&gt;&nbsp;Đừng bỏ lỡ:&nbsp;<a href=\"https://www.yan.vn/ro-ri-dien-mao-cua-iphone-12-plus-tai-tho-nho-gon-canh-may-vuong-vuc-228650.html?utm_campaign=InternallinkYAN&amp;utm_source=229824&amp;utm_medium=noniadesktop\" target=\"_blank\">R&ograve; rỉ diện mạo của iPhone 12 Plus: Tai thỏ nhỏ gọn, cạnh m&aacute;y vu&ocirc;ng vức</a></em></p>\r\n\r\n<p><strong>L&yacute; do khiến nhiều người tin rằng mẫu thiết kế n&agrave;y l&agrave; bất khả thi</strong></p>\r\n\r\n<p>Mặc d&ugrave; iPhone 12 Flip l&agrave; một &yacute; tưởng kh&aacute; mới mẻ v&agrave; độc đ&aacute;o song qua ph&acirc;n t&iacute;ch của nhiều&nbsp; người th&igrave; gần như sẽ chẳng c&oacute; khả năng n&agrave;o Apple sẽ sản xuất n&oacute;, &iacute;t nhất l&agrave; trong tương lai gần. Chỉ nh&igrave;n qua về độ rủi ro trong vấn đề kĩ thuật hay sự h&agrave;o hứng đ&oacute;n nhận của iFan l&agrave; đ&atilde; thấy Apple sẽ kh&oacute; m&agrave; chấp nhận phi vụ mạo hiểm n&agrave;y.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-cc6255fe.jpg\"><img alt=\" \r\nTuy nhiên cho ra mắt mẫu iPhone này không chỉ là thách thức mà còn là rủi ro với Apple. Ảnh: ConceptsiPhone\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-cc6255fe.jpg\" /></a><br />\r\n<em>Tuy nhi&ecirc;n cho ra mắt mẫu iPhone n&agrave;y kh&ocirc;ng chỉ l&agrave; th&aacute;ch thức m&agrave; c&ograve;n l&agrave; rủi ro với Apple.&nbsp;Ảnh:&nbsp;ConceptsiPhone</em></p>\r\n\r\n<p>Th&ecirc;m v&agrave;o đ&oacute;, nếu sản xuất điện thoại phi&ecirc;n bản gập n&agrave;y th&igrave; iPhone 12 Flip sẽ l&agrave; &ldquo;đứa con&rdquo; lạc lo&agrave;i duy nhất giữa loạt mẫu iPhone từ trước đến n&agrave;y. V&agrave; c&oacute; nhiều &yacute; kiến c&ograve;n cho rằng, nếu sử dụng mẫu thiết kế n&agrave;y th&igrave; họ kh&ocirc;ng c&ograve;n cảm nhận được l&agrave; m&igrave;nh đang d&ugrave;ng iPhone nữa.</p>\r\n\r\n<p><em>&gt;&gt; C&oacute; thể bạn quan t&acirc;m:&nbsp;<a href=\"https://www.yan.vn/iphone-12-se-co-gia-re-hon-du-kien-ra-mat-them-3-mau-pastel-moi-228407.html?utm_campaign=InternallinkYAN&amp;utm_source=229824&amp;utm_medium=noniadesktop\" target=\"_blank\">iPhone 12 sẽ c&oacute; gi&aacute; rẻ hơn, dự kiến ra mắt th&ecirc;m 3 m&agrave;u pastel mới</a></em></p>\r\n\r\n<p>X&eacute;t cho c&ugrave;ng, cơ hội để hiện thực h&oacute;a mẫu iPhone 12 Flip n&agrave;y l&agrave; kh&aacute; thấp. Tuy nhi&ecirc;n với những người y&ecirc;u th&iacute;ch th&igrave; ho&agrave;n to&agrave;n c&oacute; thể tưởng tượng v&agrave; mơ ước phải kh&ocirc;ng n&agrave;o.</p>\r\n\r\n<p>C&ugrave;ng cập nhật th&ecirc;m nhiều th&ocirc;ng tin tại&nbsp;<a href=\"https://www.yan.vn/?utm_campaign=InternallinkYAN&amp;utm_source=229824&amp;utm_medium=noniadesktop\" target=\"_blank\">YAN</a>&nbsp;nh&eacute;!</p>\r\n', 'cu-dan-mang-truyen-tay-nhau-mau-thiet-ke-iphone-12-flip-giong-samsung-a46c345c.jpg'),
(7, 'Cách tạo mã QR độc đáo để tỏ tình khiến crush \"đổ gục\" trong tích tắc', '<h2>Bạn nghĩ sao thay v&igrave; tỏ t&igrave;nh bằng một d&ograve;ng tin nhắn dễ d&agrave;ng đo&aacute;n &yacute;, ch&uacute;ng ta sẽ sử dụng m&atilde; QR khiến crush kh&ocirc;ng khỏi &quot;rụng tim&quot;, c&aacute;ch để tạo m&atilde; rất đơn giản.</h2>\r\n\r\n<p>L&agrave;m thế n&agrave;o để&nbsp;tỏ t&igrave;nh vừa hiện đại m&agrave; lại g&acirc;y bất ngờ nhất cho đối phương, c&aacute;ch n&agrave;y kh&ocirc;ng phải nến v&agrave; hoa, cũng kh&ocirc;ng phải những c&acirc;u thả th&iacute;nh ngọt lịm m&agrave; chỉ bằng một chiếc code QR kh&ocirc;ng đụng h&agrave;ng ai.</p>\r\n\r\n<p><a href=\"https://www.yan.vn/hoahauvietnam2020/du-thi-hoa-hau-viet-nam-2020-ban-da-nam-duoc-mau-don-dang-ky-228983.html\" target=\"_blank\"><img src=\"https://static1.yan.vn/banner/fbbanner/banner_dangky_hhvn2020.jpg\" /></a></p>\r\n\r\n<p>M&atilde; QR kh&ocirc;ng đơn giản chỉ để quản l&yacute; h&agrave;ng h&oacute;a, sử dụng để đăng nhập phần mềm m&agrave; giờ đ&acirc;y người ta c&ograve;n sử dụng rộng r&atilde;i loại m&atilde; n&agrave;y như c&aacute;ch gi&uacute;p&nbsp;truyền đi những tin nhắn, số điện thoại, địa chỉ,... hay một th&ocirc;ng điệp n&agrave;o đ&oacute;. Loại m&atilde; n&agrave;y c&oacute; t&iacute;nh ứng dụng rất cao trong đời sống nhưng lại chưa được nhiều người biết đến.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-0ebf72c5.jpg\"><img alt=\" \r\nThiệp mời đám cười cũng phải dùng mã QR chỉ đường mới &quot;xịn&quot;. (Nguồn: T.H)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-0ebf72c5.jpg\" /></a><br />\r\n<em>Thiệp mời đ&aacute;m cười cũng phải d&ugrave;ng m&atilde; QR chỉ đường mới &quot;xịn&quot;. (Nguồn: T.H)</em></p>\r\n\r\n<p><em><strong>&gt;&gt;&gt; C&oacute; thể bạn muốn xem:&nbsp;</strong><a href=\"https://www.yan.vn/qr-code-la-gi-223440.html?utm_campaign=InternallinkYAN&amp;utm_source=229625&amp;utm_medium=noniadesktop\">QR Code l&agrave; g&igrave;? &Yacute; nghĩa của những &ocirc; vu&ocirc;ng tr&ecirc;n QR Code​</a></em></p>\r\n\r\n<p><strong>Tỏ t&igrave;nh bằng m&atilde; QR khiến crush &quot;ngất lịm&quot;</strong></p>\r\n\r\n<p>M&atilde; QR được ứng dụng trong đ&aacute;m cưới cũng đ&atilde; xuất hiện kh&aacute; phổ biến nhưng d&ugrave;ng m&atilde; QR để tỏ t&igrave;nh th&igrave; thật sự rất mới mẻ v&agrave; một bạn c&oacute; t&agrave;i khoản P.T.P.M mới đ&acirc;y đ&atilde; đăng một c&acirc;u chuyện rất ngọt ng&agrave;o về c&aacute;ch m&agrave; nửa kia tỏ t&igrave;nh với c&ocirc; g&aacute;i n&agrave;y.</p>\r\n\r\n<p><em>&quot;Em hay t&acirc;m sự với một anh bạn, bạn l&agrave;m em cảm thấy an t&acirc;m nhiều lắm, bạn tư vấn gi&uacute;p đỡ như một người anh vậy. Thế m&agrave; h&ocirc;m qua bạn ấy lỡ đ&ugrave;a hơi qu&aacute; l&agrave;m em quạo, em c&aacute;u l&ecirc;n rồi em bơ bạn. H&ocirc;m nay vừa đi học về v&agrave; t&acirc;m trạng vẫn kh&ocirc;ng được tốt th&igrave; bạn ấy lại gửi em c&aacute;i QR code thế n&agrave;y đ&acirc;y.&quot;</em>&nbsp;P.M chia sẻ</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-8c23dbca.jpg\"><img alt=\" \r\n&quot;Tớ Thương Cậu&quot; - Lời nhắn đáng yêu từ mã QR. (Nguồn: P.T.P.M)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-8c23dbca.jpg\" /></a><br />\r\n<em>&quot;Tớ Thương Cậu&quot; - Lời nhắn đ&aacute;ng y&ecirc;u từ m&atilde; QR. (Nguồn:&nbsp;P.T.P.M)</em></p>\r\n\r\n<p>Chỉ một lời nhắn đơn giản nhưng vẫn đủ sức &quot;hạ gục&quot; tr&aacute;i tim c&aacute;c thiếu nữ. Việc tạo niềm vui cho người kh&aacute;c th&ocirc;ng qua một h&agrave;nh động bất ngờ kh&ocirc;ng phải ch&agrave;ng trai n&agrave;o cũng nghĩ ra v&agrave; chịu t&igrave;m t&ograve;i để l&agrave;m người ấy vui.</p>\r\n\r\n<p>C&oacute; rất nhiều c&aacute;ch để chinh phục một c&ocirc; g&aacute;i nhưng c&oacute; vẻ chiếc m&atilde; QR n&agrave;y đ&atilde; gi&uacute;p ch&agrave;ng trai ở c&acirc;u chuyện tr&ecirc;n r&uacute;t ngắn khoảng c&aacute;ch đến tr&aacute;i tim của bạn nữ rồi. Những điều nhỏ b&eacute; vẫn lu&ocirc;n tiềm t&agrave;ng sức mạnh như vậy, vậy c&ograve;n bạn, bạn c&oacute; muốn chinh phục crush của m&igrave;nh kh&ocirc;ng?</p>\r\n\r\n<p><em>&gt;&gt;&gt; Bạn vẫn chưa biết chinh phục n&agrave;ng thế n&agrave;o, h&atilde;y để c&aacute;c cao thủ t&igrave;nh trường chia sẻ kinh nghiệm tại fanpage&nbsp;<a href=\"https://www.facebook.com/tinhduoc.bky/\"><strong>T&igrave;nh dược&nbsp;</strong></a>nh&eacute;.</em></p>\r\n\r\n<p><strong>C&aacute;ch tạo m&atilde; QR tr&ecirc;n điện thoại hệ điều h&agrave;nh Android</strong></p>\r\n\r\n<p>Nếu bạn đang sở hữu một chiếc điện thoại chạy bằng hệ điều h&agrave;nh Android th&igrave; h&atilde;y t&igrave;m phần mềm c&oacute; t&ecirc;n QR Code Generator ho&agrave;n to&agrave;n miễn ph&iacute; tr&ecirc;n ứng dụng Google Play Store hoặc CH Play.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-625cdaa2.jpg\"><img alt=\" \r\nỨng dụng QR Code Generator\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-625cdaa2.jpg\" /></a><br />\r\n<em>Ứng dụng QR Code Generator</em></p>\r\n\r\n<p>Bước đầu ti&ecirc;n bạn h&atilde;y mở ứng dụng v&agrave; nhấn v&agrave;o Text ở tr&ecirc;n c&ugrave;ng để chọn loại m&atilde; QR muốn tạo. Tiếp đ&oacute; chọn loại th&ocirc;ng điệp m&agrave; bạn muốn sử dụng để tiếp tục, với v&iacute; dụ trong b&agrave;i viết l&agrave; số điện thoại.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-344c1000.jpg\"><img alt=\" \r\nBước 1\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-344c1000.jpg\" /></a><br />\r\n<em>Bước 1</em></p>\r\n\r\n<p>G&otilde; v&agrave;o một số điện thoại cụ thể (hoặc bất kỳ th&ocirc;ng tin m&agrave; bạn cần phải g&otilde; v&agrave;o dựa tr&ecirc;n m&atilde; QR đang tạo), sau đ&oacute; chạm v&agrave;o Generate ở g&oacute;c tr&ecirc;n b&ecirc;n phải.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-c7ae50f3.jpg\"><img alt=\" \r\nCó rất nhiều ứng dụng cho phép chia sẻ mã QR\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-c7ae50f3.jpg\" /></a><br />\r\n<em>C&oacute; rất nhiều ứng dụng cho ph&eacute;p chia sẻ m&atilde; QR</em></p>\r\n\r\n<p>Đến đ&acirc;y một m&atilde; QR đ&atilde; được tạo ra v&agrave; bạn sẽ c&oacute; một v&agrave;i lựa chọn. Lựa chọn đầu ti&ecirc;n l&agrave; để lưu h&igrave;nh ảnh m&atilde; QR v&agrave;o thư viện h&igrave;nh ảnh của điện thoại bằng c&aacute;ch nhấn v&agrave;o n&uacute;t đĩa mềm ở g&oacute;c tr&ecirc;n b&ecirc;n phải.</p>\r\n\r\n<p>Ngo&agrave;i ra bạn cũng c&oacute; thể bấm v&agrave;o n&uacute;t Share (khoanh tr&ograve;n trong ảnh) để gửi m&atilde; QR đến bất kỳ t&agrave;i khoản n&agrave;o tr&ecirc;n Dropbox hay Google Drive, hoặc thậm ch&iacute; gửi n&oacute; qua Hangouts cũng như tin nhắn văn bản.</p>\r\n\r\n<p><em><strong>&gt;&gt;&gt; Đọc th&ecirc;m:&nbsp;</strong></em><a href=\"https://www.yan.vn/cach-chan-tin-nhan-rac-tren-dien-thoai-viettel-mobifone-vinaphone-225771.html?utm_campaign=InternallinkYAN&amp;utm_source=229625&amp;utm_medium=noniadesktop\"><em>C&aacute;ch chặn tin nhắn r&aacute;c tr&ecirc;n điện thoại v&agrave; messenger hiệu quả</em></a></p>\r\n\r\n<p><strong>C&aacute;ch tạo m&atilde; QR tr&ecirc;n điện thoại hệ điều h&agrave;nh IOS</strong></p>\r\n\r\n<p>Nếu bạn sử dụng iPhone, bạn c&oacute; thể tải về ứng dụng mang t&ecirc;n QR Reader miễn ph&iacute;. Ứng dụng n&agrave;y kh&ocirc;ng chỉ cho ph&eacute;p tạo m&atilde; QR m&agrave; c&ograve;n nhiều t&iacute;nh năng tuy nhi&ecirc;n b&agrave;i viết n&agrave;y sẽ chỉ hướng dẫn c&aacute;ch tạo m&atilde; QR.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Video xem th&ecirc;m:&nbsp;Anh ch&agrave;ng bắt tr&uacute;ng iPhone X đang rơi khi đi t&agrave;u si&ecirc;u tốc</em></p>\r\n\r\n<p>Sau khi tải ứng dụng về (như trong h&igrave;nh), chạm v&agrave;o mũi t&ecirc;n hướng xuống ở g&oacute;c tr&ecirc;n c&ugrave;ng b&ecirc;n phải của m&agrave;n h&igrave;nh. Sau đ&oacute; chạm v&agrave;o biểu tượng m&atilde; QR ở cuối.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-fb4fdde0.jpg\"><img alt=\" \r\nQR Reader là một ứng dụng miễn phí dành cho người dùng iPhone. (Nguồn: Thanh niên)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-fb4fdde0.jpg\" /></a><br />\r\n<em>QR Reader&nbsp;l&agrave; một ứng dụng miễn ph&iacute; d&agrave;nh cho người d&ugrave;ng iPhone. (Nguồn: Thanh ni&ecirc;n)</em></p>\r\n\r\n<p>Nhấn n&uacute;t dấu cộng (+) ở g&oacute;c tr&ecirc;n c&ugrave;ng b&ecirc;n tr&aacute;i để bắt đầu qu&aacute; tr&igrave;nh tạo m&atilde; QR. Tiếp theo, chọn loại m&atilde; QR m&agrave; bạn muốn thực hiện từ danh s&aacute;ch được cung cấp.</p>\r\n\r\n<p>Nếu muốn m&atilde; QR của bạn dẫn đến trang web,&nbsp;h&atilde;y ấn chọn Website. Bạn cuộn xuống để c&oacute; nhiều t&ugrave;y chọn hơn, đến đ&acirc;y c&aacute;ch chọn sẽ t&ugrave;y v&agrave;o mục đ&iacute;ch th&ocirc;ng điệp m&agrave; bạn tạo code.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-b7839b2f.jpg\"><img alt=\" \r\nỨng dụng này ung cấp nhiều lựa chọn chia sẻ hơn so với QR Code Generator. (Nguồn: Thanh niên)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-b7839b2f.jpg\" /></a><br />\r\n<em>Ứng dụng n&agrave;y ung cấp nhiều lựa chọn chia sẻ hơn so với QR Code Generator. (Nguồn: Thanh ni&ecirc;n)</em></p>\r\n\r\n<p>Cuối c&ugrave;ng m&atilde; QR của bạn sẽ được tạo v&agrave; xuất hiện trong danh s&aacute;ch m&atilde; QR t&ugrave;y chỉnh. B&acirc;y giờ, bạn c&oacute; thể dừng lại ở đ&acirc;y v&agrave; sử dụng ứng dụng để lưu m&atilde; QR lại hoặc xuất ch&uacute;ng sang ứng dụng cũng như dịch vụ kh&aacute;c, để l&agrave;m điều n&agrave;y, h&atilde;y bấm v&agrave;o văn bản của m&atilde; QR v&agrave; sau đ&oacute; chọn Share.</p>\r\n\r\n<p>Giống như ở phần mềm QR Code Generator, bạn c&oacute; thể lưu h&igrave;nh ảnh m&atilde; QR v&agrave;o Camera Roll bằng c&aacute;ch nhấn v&agrave;o Save Image hoặc gửi m&atilde; QR tới bất kỳ ứng dụng hoặc dịch vụ n&agrave;o m&agrave; m&igrave;nh đ&atilde; kết nối.</p>\r\n', 'cach-tao-ma-qr-doc-dao-de-to-tinh-khien-crush-do-guc-trong-tich-tac-8c23dbca.jpg'),
(8, 'Thực hư chuyện iPhone X giá chỉ còn 3,6 triệu đồng', '<h2>Với mức gi&aacute; &ldquo;rẻ như cho&rdquo;, những chiếc iPhone X được rao b&aacute;n với gi&aacute; 3,6 triệu đồng. Nhưng nếu kh&ocirc;ng t&igrave;m hiểu kỹ bạn sẽ &ldquo;sập bẫy&rdquo; v&agrave; rất c&oacute; thể mất tiền oan.</h2>\r\n\r\n<p>Tr&ecirc;n thị trường, b&ecirc;n cạnh những d&ograve;ng&nbsp;<a href=\"https://www.yan.vn/iphone.htm?utm_campaign=InternallinkYAN&amp;utm_source=228340&amp;utm_medium=noniadesktop\" target=\"_blank\">iPhone</a>&nbsp;ch&iacute;nh h&atilde;ng, x&aacute;ch tay hay phi&ecirc;n bản lock, th&igrave; c&ograve;n c&oacute; 1 d&ograve;ng iPhone mang t&ecirc;n &quot;bypass&quot; được ch&agrave;o b&aacute;n với mức gi&aacute; chỉ bằng 1/4 hoặc &iacute;t hơn nhiều so với sản phẩm gốc.</p>\r\n\r\n<p><a href=\"https://www.yan.vn/hoahauvietnam2020/du-thi-hoa-hau-viet-nam-2020-ban-da-nam-duoc-mau-don-dang-ky-228983.html\" target=\"_blank\"><img src=\"https://static1.yan.vn/banner/fbbanner/banner_dangky_hhvn2020.jpg\" /></a></p>\r\n\r\n<p>Vậy tại sao c&aacute;c sản phẩm n&agrave;y lại c&oacute; mức gi&aacute; rẻ đến vậy v&agrave; thực hư chuyện 1 chiếc iPhone X chỉ c&oacute; gi&aacute; 3,6 triệu đồng ra sao, h&atilde;y c&ugrave;ng t&igrave;m hiểu trong b&agrave;i viết dưới đ&acirc;y.</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/thuc-hu-chuyen-iphone-x-gia-chi-con-36-trieu-dong-a7eed90d.jpg\"><img alt=\" \r\nThực hư chuyện iPhone X giá chỉ còn 3,6 triệu đồng​? (Nguồn ảnh: Tuổi trẻ)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/thuc-hu-chuyen-iphone-x-gia-chi-con-36-trieu-dong-a7eed90d.jpg\" /></a><br />\r\n<em>Thực hư chuyện iPhone X gi&aacute; chỉ c&ograve;n 3,6 triệu đồng​? (Nguồn ảnh: Tuổi trẻ)</em></p>\r\n\r\n<p><strong>iPhone bypass l&agrave; g&igrave;?</strong></p>\r\n\r\n<p>Những chiếc điện thoại c&oacute; t&ecirc;n iPhone bypass thực chất l&agrave; c&aacute;c thiết bị d&iacute;nh iCloud v&agrave; được b&ecirc;n thứ 3 sử dụng 1 loại phần mềm để vượt qua Activation Lock. Sau khi đ&atilde; vượt qua &ldquo;bức tường th&agrave;nh&rdquo; iCloud th&agrave;nh c&ocirc;ng, người d&ugrave;ng c&oacute; thể sử dụng c&aacute;c chức năng cơ bản tr&ecirc;n m&aacute;y 1 c&aacute;ch b&igrave;nh thường. Tuy nhi&ecirc;n 1 số t&iacute;nh năng vẫn sẽ tạm bị v&ocirc; hiệu h&oacute;a.&nbsp;</p>\r\n\r\n<p><strong><em>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;</em></strong><a href=\"https://www.yan.vn/gia-re-chay-hang-iphone-11-lock-trai-nghiem-khac-gi-voi-may-thuong-218989.html?utm_campaign=InternallinkYAN&amp;utm_source=228340&amp;utm_medium=noniadesktop\"><em>iPhone 11 lock ch&aacute;y h&agrave;ng v&igrave; gi&aacute; rẻ, trải nghiệm kh&aacute;c g&igrave; m&aacute;y thường?</em></a></p>\r\n\r\n<p><strong>Mức gi&aacute; rẻ hấp dẫn</strong></p>\r\n\r\n<p>Những sản phẩm iPhone bypass thường l&agrave; sản phẩm cũ, thậm ch&iacute; nhiều khi kh&ocirc;ng r&otilde; nguồn gốc, n&ecirc;n gi&aacute; thường rẻ hơn cả bản iPhone Lock (phi&ecirc;n bản kh&oacute;a mạng), chỉ bằng 1/4 thậm ch&iacute; c&ograve;n rẻ hơn nữa so với m&aacute;y mới ch&iacute;nh h&atilde;ng.</p>\r\n\r\n<p>Như iPhone 7 h&agrave;ng đ&atilde; qua sử dụng gi&aacute; 3,8 triệu đồng, bản Lock gi&aacute; 2,7 triệu đồng th&igrave; m&aacute;y bypass chỉ c&ograve;n 1,5 triệu đồng m&agrave; th&ocirc;i. Tương tự với iPhone 7, iPhone X bypass cũng được ch&agrave;o b&aacute;n với mức gi&aacute; 3,6 triệu, c&oacute; những nơi chỉ b&aacute;n tr&ecirc;n 2 triệu đồng.</p>\r\n\r\n<p><em>Nếu bạn quan t&acirc;m đến c&aacute;c sản phẩm c&ocirc;ng nghệ th&igrave; đừng qu&ecirc;n like fanpage&nbsp;<a href=\"https://www.facebook.com/yancongnghe/\"><strong>YAN Tech</strong></a>.</em></p>\r\n\r\n<p><strong><em>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;</em></strong><a href=\"https://www.yan.vn/gia-re-iphone-se-2020-van-qua-loi-thoi-so-voi-iphone-11-226596.html?utm_campaign=InternallinkYAN&amp;utm_source=228340&amp;utm_medium=noniadesktop\"><em>Gi&aacute; rẻ, iPhone SE 2020 vẫn qu&aacute; lỗi thời so với iPhone 11</em></a></p>\r\n\r\n<p><strong>C&oacute; n&ecirc;n mua iPhone &ldquo;gi&aacute; rẻ&rdquo;?</strong></p>\r\n\r\n<p>V&igrave; phần mềm gi&uacute;p vượt qua bức tường iCloud l&agrave; kh&ocirc;ng ch&iacute;nh thống n&ecirc;n khi người d&ugrave;ng kh&ocirc;i phục lại m&aacute;y, hệ thống sẽ trở về trạng th&aacute;i ban đầu, m&aacute;y&nbsp;c&oacute; thể bị kh&oacute;a cứng.</p>\r\n\r\n<p>Ch&iacute;nh v&igrave; thể lựa chọn iPhone bypass gi&aacute; rẻ khiến người d&ugrave;ng gặp rủi ro cao. Chưa kể nếu c&oacute; sử dụng được, bạn cũng chỉ c&oacute; thể d&ugrave;ng những t&iacute;nh năng cơ bản v&agrave; nhiều ứng dụng kh&aacute;c bị hạn chế trong qu&aacute; tr&igrave;nh sử dụng.&nbsp;</p>\r\n\r\n<p><a href=\"https://static2.yan.vn/YanNews/2167221/202005/thuc-hu-chuyen-iphone-x-gia-chi-con-36-trieu-dong-51192996.jpg\"><img alt=\" \r\nNhững chiếc iPhone bypass thường gặp rủi ro cao khi sử dụng. (Nguồn ảnh: Vietnamnet)\" src=\"https://static2.yan.vn/YanNews/2167221/202005/thuc-hu-chuyen-iphone-x-gia-chi-con-36-trieu-dong-51192996.jpg\" /></a><br />\r\n<em>Những chiếc iPhone bypass thường gặp rủi ro cao khi sử dụng. (Nguồn ảnh: Vietnamnet)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một số ứng dụng bạn c&oacute; thể sử dụng tr&ecirc;n iPhone bypass như Safari, b&aacute;o thức, danh bạ, mail, maps, Skype, YouTube,... Thế nhưng những ứng dụng n&agrave;y chỉ được sử dụng tr&ecirc;n web chứ kh&ocirc;ng thể tải app về từ Apple Store. B&ecirc;n cạnh đ&oacute; c&aacute;c dữ liệu cũng sẽ bị mất c&oacute; kh&ocirc;ng thể lưu.&nbsp;</p>\r\n\r\n<p>V&igrave; vậy khi chọn mua c&aacute;c sản phẩm iPhone cũ, để tr&aacute;nh mua nhầm sản phẩm bypass, bạn c&oacute; thể d&ugrave;ng số serial hoặc IMEI kiểm tra t&igrave;nh trạng iCloud. Nếu th&ocirc;ng b&aacute;o mục iCloud status l&agrave; Clean tức l&agrave; m&aacute;y b&igrave;nh thường v&agrave; ngược lại.</p>\r\n\r\n<p>Bạn cũng c&oacute; thể Restore m&aacute;y về trạng th&aacute;i ban đầu để kiểm tra bằng c&aacute;ch v&agrave;o Settings (c&agrave;i đặt) - General (c&agrave;i đặt chung) - Reset (đặt lại) - Erase all content and settings (x&oacute;a tất cả nội dung v&agrave; c&agrave;i đặt), nhập mật m&atilde; khi được y&ecirc;u cầu.</p>\r\n\r\n<p><em>Những tin tức mới nhất tr&ecirc;n mạng x&atilde; hội sẽ li&ecirc;n tục được cập nhật tại fanpage&nbsp;<a href=\"https://www.facebook.com/yancongdongmang/\"><strong>YAN Netizen</strong></a>.</em></p>\r\n\r\n<p><strong><em>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;</em></strong><a href=\"https://www.yan.vn/apple-bat-ngo-ban-iphone-xs-va-xs-max-voi-gia-re-hon-8-trieu-dong-220754.html?utm_campaign=InternallinkYAN&amp;utm_source=228340&amp;utm_medium=noniadesktop\"><em>Apple bất ngờ b&aacute;n iPhone Xs v&agrave; Xs Max với gi&aacute; rẻ hơn 8 triệu đồng</em></a></p>\r\n\r\n<p>Mua được sản phẩm tốt, ch&iacute;nh h&atilde;ng với mức gi&aacute; &ldquo;rẻ như cho&rdquo; l&agrave; điều kh&ocirc;ng thể v&igrave; gi&aacute; cả đi đ&ocirc;i với chất lượng. V&igrave; vậy muốn hạn chế rủi ro, tốt nhất ch&uacute;ng ta n&ecirc;n nhận diện v&agrave; lựa chọn sản phẩm thật kỹ c&agrave;ng trước khi quyết định dốc hầu bao.</p>\r\n', 'thuc-hu-chuyen-iphone-x-gia-chi-con-36-trieu-dong-a7eed90d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `bill_sl` int(11) NOT NULL,
  `bill_tongtien` int(11) NOT NULL,
  `login_mail` varchar(100) NOT NULL,
  `login_diachi` varchar(100) NOT NULL,
  `bill_ngay` date NOT NULL,
  `bill_name` varchar(50) NOT NULL,
  `login_sdt` varchar(50) NOT NULL,
  `tinh` varchar(1000) NOT NULL,
  `huyen` varchar(1000) NOT NULL,
  `xa` varchar(1000) NOT NULL,
  `so_nha` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `login_id`, `bill_sl`, `bill_tongtien`, `login_mail`, `login_diachi`, `bill_ngay`, `bill_name`, `login_sdt`, `tinh`, `huyen`, `xa`, `so_nha`) VALUES
(21918120, 8, 1, 34200000, 'tycola123@gmail.com', 'hoa lien-hoa vang- da nang', '2020-05-30', 'chinhdien', '12233', 'hsgjk', '21231', '21231', '2123'),
(58446681, 7, 1, 18900000, 'ngocchinh1410@gmail.com', 'Quang Nam Binh Giang thăng bình', '2020-05-30', 'võ ngọc chính', '0763717084', 'Đà nẵng', 'quận liên chiểu', 'Hòa Khánh Nam', '61 pham như xương');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_detail_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `bill_detail_price` int(11) NOT NULL,
  `bill_detail_soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`bill_detail_id`, `bill_id`, `product_id`, `product_name`, `bill_detail_price`, `bill_detail_soluong`) VALUES
(2, 75268356, 8, 'admin1', 910000, 1),
(3, 25831666, 8, 'admin1', 910000, 3),
(4, 20179998, 10, 'Oppo A9', 32400000, 2),
(5, 68173122, 10, 'Oppo A9', 32400000, 2),
(6, 68173122, 22, 'laptop samsung', 36000000, 1),
(7, 6191830, 16, 'Iphone 10 pro', 23400000, 1),
(8, 6191830, 26, 'Iphone  6s', 1080000, 1),
(9, 97831730, 14, 'Vsmart 5', 17100000, 1),
(10, 97831730, 26, 'Iphone  6s', 1080000, 1),
(11, 88037939, 11, 'SamSung A51', 14175000, 1),
(12, 88037939, 26, 'Iphone  6s', 1080000, 1),
(13, 91717787, 13, 'Redmi NOTE 7', 21250000, 1),
(14, 58446681, 20, 'Oppo A56', 18900000, 1),
(15, 21918120, 12, 'Iphone 10 pro', 34200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(4, 'Oppo'),
(5, 'Redmi'),
(6, 'Sony'),
(7, 'Nokia'),
(8, 'Vsmart'),
(9, 'Hawai'),
(10, 'Dell'),
(11, 'vivo');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(8, 'Điện Thoại'),
(9, 'Phụ Kiện'),
(11, 'Máy Tính Bảng'),
(12, 'Lap-Top'),
(13, 'Máy Ảnh');

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `chuc_vu_id` int(11) NOT NULL,
  `chuc_vu_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(50) NOT NULL,
  `ct_mail` varchar(50) NOT NULL,
  `ct_massage` varchar(1000) NOT NULL,
  `ct_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ct_id`, `ct_name`, `ct_mail`, `ct_massage`, `ct_date`) VALUES
(1, 'võ ngọc chính', 'ngocchinh1410@gmail.com', 'hihi', '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `count_dem` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`, `count_dem`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `count_product`
--

CREATE TABLE `count_product` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count_product`
--

INSERT INTO `count_product` (`id`, `id_product`, `count`) VALUES
(18, 27, 4),
(19, 17, 12),
(20, 11, 10),
(22, 16, 5),
(25, 13, 13),
(27, 18, 6),
(28, 12, 2),
(29, 10, 6),
(30, 19, 2),
(32, 32, 4),
(33, 68, 25),
(34, 57, 1),
(35, 39, 1),
(36, 59, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `login_id` int(11) NOT NULL,
  `login_name` varchar(50) NOT NULL,
  `login_pass` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `chuc_vu` int(11) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `login_role` tinyint(1) NOT NULL,
  `login_ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`login_id`, `login_name`, `login_pass`, `sdt`, `chuc_vu`, `dia_chi`, `login_role`, `login_ten`) VALUES
(1, 'admin', 'admin', '1', 1, '1', 1, '1'),
(2, '1', '1', '1', 1, '1', 1, '1'),
(3, 'qw', 'qw', '', 0, 'qw', 0, ''),
(4, 'as', 'as', 'ddsd', 0, '1', 1, 'ddsd'),
(5, '1', '1', '1', 1, '1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `login_id` int(11) NOT NULL,
  `login_name` varchar(50) NOT NULL,
  `login_mail` varchar(50) NOT NULL,
  `login_sdt` varchar(50) NOT NULL,
  `login_diachi` varchar(50) NOT NULL,
  `login_pass` varchar(50) NOT NULL,
  `login_role` tinyint(1) NOT NULL,
  `login_ten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`login_id`, `login_name`, `login_mail`, `login_sdt`, `login_diachi`, `login_pass`, `login_role`, `login_ten`) VALUES
(9, 'chinhchinh', 'ngocchinh1410@gmail.com', '0763717084', 'Quang Nam Binh Giang thăng bình', '74053d087ed03ceb4efe885c256e8caa', 0, 'vo  ngoc  chinh'),
(19, 'chinh123', 'ngocchinh1410@gmail.com', '0763717084', 'Quang Nam Binh Giang thăng bình', 'eecf186270a88241f4f2f37a71a6cd1c', 0, 'vo  ngoc  chinh'),
(20, 'rrrrr', 'ngocchinh1410@gmail.com', '0763717084', 'Quang Nam Binh Giang thăng bình', '7392927530499bbeabc243cad1fa2d12', 0, '?ݜ?T?ukxsԏ\\g?wɐN??,?h?o???W'),
(21, 'aaaaa', 'ngocchinh1410@gmail.com', '0763717084', 'Quang Nam Binh Giang thăng bình', 'ded3826080a0b8fa42700da06537b4e9', 0, 'vo  ngoc  chinh'),
(22, 'thuy', 'ngocchinh1410@gmail.com', '0763717084', 'Quang Nam Binh Giang thăng bình', '11ce559da89df981f1038a3b8ec3b420', 0, 'vo  ngoc  chinh');

-- --------------------------------------------------------

--
-- Table structure for table `newserletter`
--

CREATE TABLE `newserletter` (
  `ser_id` int(11) NOT NULL,
  `ser_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_giamgia` int(11) NOT NULL,
  `cam_truoc` varchar(100) NOT NULL,
  `cam_sau` varchar(100) NOT NULL,
  `man_hinh` varchar(100) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `rom` varchar(100) NOT NULL,
  `hdh` varchar(100) NOT NULL,
  `phien_ban` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `ho_tro` varchar(100) NOT NULL,
  `chuc_nang` varchar(100) NOT NULL,
  `mo_ta` varchar(5000) NOT NULL,
  `product_img` varchar(1000) NOT NULL,
  `product_img2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand_id`, `category_id`, `product_name`, `product_price`, `product_giamgia`, `cam_truoc`, `cam_sau`, `man_hinh`, `ram`, `rom`, `hdh`, `phien_ban`, `size`, `ho_tro`, `chuc_nang`, `mo_ta`, `product_img`, `product_img2`) VALUES
(10, 4, 8, 'Oppo A9', 36000000, 10, '54', '36', 'Màn hình tràn viền', '128', '64', 'andoird', '19.6.2', '192x126', 'wifi ,buethool,4g,5g,...', 'Quay phim 4k', '<p>Bảo h&agrave;nh 14 th&aacute;ng</p>\r\n', 'a9.jpg', 'a9.jpg'),
(11, 2, 8, 'SamSung A51', 18900000, 25, '54', '36', '', '', '', '', '', '', '', '', '', 'a51_1.jpg', 'a51_1.jpg'),
(12, 1, 8, 'Iphone 10 pro', 36000000, 5, '', '', '', '', '', '', '', '', '', '', '', 'ip10.jpg', 'ip10.jpg'),
(13, 5, 8, 'Redmi NOTE 7', 25000000, 15, '', '', '', '', '', '', '', '', '', '', '', 'note7_p.png', 'note7_p.png'),
(14, 8, 8, 'Vsmart 5', 19000000, 10, '', '', '', '', '', '', '', '', '', '', '', '9892890ba86e39c3184fa1e1abccc745.jpg', '9892890ba86e39c3184fa1e1abccc745.jpg'),
(16, 1, 8, 'Iphone 10 pro', 26000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'shopping (1).png', 'shopping (1).png'),
(17, 1, 8, 'Iphone 10 pro', 16900000, 5, '', '', '', '', '', '', '', '', '', '', '', 'shopping (2).png', 'shopping (2).png'),
(18, 1, 8, 'Iphone 10 pro', 31000000, 0, '', '', '', '', '', '', '', '', '', '', '', '11.jpg', '11_2.jpg'),
(19, 1, 8, 'Iphone 9 pro', 34000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'ip9-pl.jpg', 'ip9-pl.jpg'),
(20, 4, 8, 'Oppo A56', 21000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'oppo-a91-trang-600x600-600x600_6.9.jpg', 'oppo-a91-trang-600x600-600x600_6.9.jpg'),
(21, 2, 12, 'laptop samsung', 19000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'laptop-ss.jpg', 'laptop-ss.jpg'),
(22, 2, 12, 'laptop samsung', 36000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'laptop-ss_2.jpg', 'laptop-ss_2.jpg'),
(23, 1, 11, 'Máy tính bảng Apple', 56000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'ipad-10-2-inch-wifi-128gb-2019-silver-400x400_11.jpg', 'ipad-10-2-inch-wifi-128gb-2019-silver-400x400_11.jpg'),
(25, 6, 13, 'Máy ảnh Sony15.3PE', 14000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'sny_12..png', 'sny_12..png'),
(26, 1, 8, 'Iphone  6s', 1200000, 10, '', '', '', '', '', '', '', '', '', '', '', 'ip6.jpg', 'ip6.jpg'),
(27, 4, 8, 'Oppo A50', 3600000, 10, '54', '36', 'Màn hình tràn viền', '8 GB', '64GB', 'andoird', '19.6.2', '192x126', 'wifi ,buethool,4g,5g,...', 'Quay phim 4k', '<p>Thương hiệu:BlackBerry</p>\r\n\r\n<p>Model: Keyone</p>\r\n\r\n<p>Phụ kiện đi k&egrave;m: 1 Pin dự ph&ograve;ng</p>\r\n\r\n<p>M&agrave;u: Đen Viền Bạc</p>\r\n\r\n<p>Loại m&agrave;n h&igrave;nh (C&ocirc;ng nghệ m&agrave;n h&igrave;nh): IPS LCD</p>\r\n\r\n<p>K&iacute;ch thước m&agrave;n h&igrave;nh: 4.5 inch</p>\r\n\r\n<p>Độ ph&acirc;n giải m&agrave;n h&igrave;nh: 1620 x 1080 pixels</p>\r\n\r\n<p>Camera trước: 8MP</p>\r\n\r\n<p>Camera sau: 12 MP</p>\r\n\r\n<p>Đ&egrave;n Flash: C&oacute;</p>\r\n\r\n<p>Quay phim: 1080p@30fps</p>\r\n\r\n<p>Bộ Nhớ RAM: 3GB</p>\r\n\r\n<p>Bộ nhớ trong (ROM): 32GB</p>\r\n\r\n<p>Hỗ trợ thẻ nhớ ngo&agrave;i: microSD</p>\r\n\r\n<p>Hỗ trợ thẻ tối đa: 256GB</p>\r\n\r\n<p>K&iacute;ch thước: (D&agrave;i x Rộng x D&agrave;y) 149.1 x 72.4 x 9.4 mm</p>\r\n\r\n<p>T&ecirc;n chip: Qualcomm MSM8953 Snapdragon 625</p>\r\n\r\n<p>Tốc độ chip (GHz): 2.0 GHz</p>\r\n\r\n<p>Chip đồ họa (GPU): Adreno 506</p>\r\n\r\n<p>Hệ điều h&agrave;nh: Android 7.1 Nougat</p>\r\n\r\n<p>Dung lượng pin (mAh): 3505mAh</p>\r\n\r\n<p>Loại pin: Li-Ion</p>\r\n\r\n<p>Pin c&oacute; thể th&aacute;o rời: Kh&ocirc;ng</p>\r\n\r\n<p>Loại Sim: Nano-SIM</p>\r\n\r\n<p>Số khe sim: 1</p>\r\n\r\n<p>FM radio: Kh&ocirc;ng</p>\r\n\r\n<p>SKU:5807246169547</p>\r\n', 'A5s.jpg', 'A5s.jpg'),
(28, 1, 8, 'Iphone  6', 7000000, 5, '', '', '', '', '', '', '', '', '', '', '', '6.jpg', '6.jpg'),
(29, 1, 8, 'iphone 8', 8000000, 0, '', '', '', '', '', '', '', '', '', '', '', '8.jpg', '8.jpg'),
(30, 1, 8, 'iphone 8 (bac)', 8600000, 30, '', '', '', '', '', '', '', '', '', '', '', '8_1.jpg', '8_1.jpg'),
(31, 1, 8, 'iphone 8 (đỏ)', 8600000, 5, '', '', '', '', '', '', '', '', '', '', '', '8_64.jpg', '8_64.jpg'),
(32, 2, 8, 'SamSung A71', 19000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'a_71_1.jpg', 'a_71_1.jpg'),
(33, 4, 8, 'Oppo Reno', 9600000, 10, '', '', '', '', '', '', '', '', '', '', '', '637061405889063261_oppo-reno-a-dd_12.jpg', '637061405889063261_oppo-reno-a-dd_12.jpg'),
(34, 2, 8, 'SamSung A51', 14700000, 20, '', '', '', '', '', '', '', '', '', '', '', 'a5_1.jpg', 'a5_1.jpg'),
(35, 4, 8, 'Oppo A5s', 3600000, 0, '', '', '', '', '', '', '', '', '', '', '', 'A5s.jpg', 'A5s.jpg'),
(36, 1, 8, 'Oppo f7', 2600000, 0, '', '', '', '', '', '', '', '', '', '', '', 'f7.jpg', 'f7.jpg'),
(37, 9, 11, 'Hawai M3', 11000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'hwm3.jpg', 'hwm3.jpg'),
(38, 1, 11, 'ipad 10', 7600000, 10, '', '', '', '', '', '', '', '', '', '', '', 'ipad-10-2-inch-wifi-cellular-128gb-2019-gray-600x600_15.jpg', 'ipad-10-2-inch-wifi-cellular-128gb-2019-gray-600x600_15.jpg'),
(39, 1, 11, 'ipad 7,9', 8100000, 0, '', '', '', '', '', '', '', '', '', '', '', 'ipad-mini-79-inch-wifi-2019-gold-400x400_13..jpg', 'ipad-mini-79-inch-wifi-2019-gold-400x400_13..jpg'),
(40, 1, 11, 'galaxy tab5', 21000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'glaxytab5.jpg', 'glaxytab5.jpg'),
(41, 2, 12, 'SamSung core i5', 20000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'laptop-ss_2.jpg', 'laptop-ss_2.jpg'),
(42, 10, 12, 'Laptop HP', 17000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'hp.png', 'hp.png'),
(43, 2, 12, 'laptop samsung', 19000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'laptop-ss_1.jpg', 'laptop-ss_1.jpg'),
(44, 6, 13, 'Máy ảnh Sony dsc', 12000000, 50, '', '', '', '', '', '', '', '', '', '', '', 'may-anh-sony-cyber-shot-dsc-hx99(2)_7.9.jpg', 'may-anh-sony-cyber-shot-dsc-hx99(2)_7.9.jpg'),
(45, 6, 13, 'Máy ảnh Sony dsc d26', 3600000, 0, '', '', '', '', '', '', '', '', '', '', '', 'sny_DSC_26.jpeg', 'sny_DSC_26.jpeg'),
(46, 6, 13, 'Máy ảnh Sony Markii 39', 5600000, 10, '', '', '', '', '', '', '', '', '', '', '', 'sny_markiii_39..png', 'sny_markiii_39..png'),
(47, 6, 13, 'Máy ảnh Sony A37 ', 12000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'sony-a7-mark-iii-body_43..jpg', 'sony-a7-mark-iii-body_43..jpg'),
(48, 6, 13, 'Máy ảnh Sony Cybershot', 7000000, 20, '', '', '', '', '', '', '', '', '', '', '', 'sony-cybershot-w810-bac_1.2.jpg', 'sony-cybershot-w810-bac_1.2.jpg'),
(49, 1, 9, 'Sạc Iphone 11', 600000, 0, '', '', '', '', '', '', '', '', '', '', '', 'sac-iphon-11.jpg', 'sac-iphon-11.jpg'),
(50, 2, 9, 'Tai Nghe samsung s10', 250000, 0, '', '', '', '', '', '', '', '', '', '', '', 'tainghess-s10.jpg', 'tainghess-s10.jpg'),
(51, 4, 9, 'Sạc oppo a37', 600000, 0, '', '', '', '', '', '', '', '', '', '', '', 'sac-op-a37.jpg', 'sac-op-a37.jpg'),
(52, 2, 9, 'Sạc samsung a10', 150000, 0, '', '', '', '', '', '', '', '', '', '', '', 'ss-10.jpg', 'ss-10.jpg'),
(53, 1, 9, 'Màn hinh ip 6s', 300000, 0, '', '', '', '', '', '', '', '', '', '', '', 'mh-iphone6.jpg', 'mh-iphone6.jpg'),
(54, 8, 8, 'Vsmart y91', 5100000, 10, '', '', '', '', '', '', '', '', '', '', '', 'y91_31.png', 'y91_31.png'),
(55, 8, 8, 'Vsmart 1 54s', 15400000, 0, '', '', '', '', '', '', '', '', '', '', '', 'vs1_54.png', 'vs1_54.png'),
(56, 5, 8, 'Redmi 9', 9700000, 0, '', '', '', '', '', '', '', '', '', '', '', 'red_9.png', 'red_9.png'),
(57, 2, 8, 'SamSung m32', 3900000, 20, '', '', '', '', '', '', '', '', '', '', '', 'm31.png', 'm31.png'),
(58, 11, 8, 'vivo y19_49s', 15000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'y19_49.png', 'y19_49.png'),
(59, 11, 8, 'vivo y17s', 19000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'v_17_1.jpg', 'v_17.jpg'),
(60, 5, 8, 'Redmi 9 SE', 4999000, 10, '', '', '', '', '', '', '', '', '', '', '', 'red_9_SE.jpg', 'red_9_SE.jpg'),
(61, 5, 8, 'Redmi 9 SE', 25000000, 25, '', '', '', '', '', '', '', '', '', '', '', 'red_9_SE.jpg', 'red_9_SE.jpg'),
(62, 4, 8, 'Oppo no 9', 2600000, 35, '', '', '', '', '', '', '', '', '', '', '', 'opneo9.jpg', 'opneo9.jpg'),
(63, 2, 8, 'SamSung m21 ư', 19000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'm21.png', 'm21.png'),
(64, 5, 8, 'Redmi 9 T', 3400000, 5, '', '', '', '', '', '', '', '', '', '', '', 'red_9_t.jpg', 'red_9_t.jpg'),
(65, 2, 8, 'SamSung S9+', 19000000, 10, '', '', '', '', '', '', '', '', '', '', '', 's9+.png', 's9+.png'),
(66, 2, 8, 'SamSung s8', 1100000, 0, '', '', '', '', '', '', '', '', '', '', '', 's8.png', 's8.png'),
(67, 2, 8, 'SamSung N9', 16900000, 5, '', '', '', '', '', '', '', '', '', '', '', 'n9.png', 'n9.png'),
(68, 2, 8, 'SamSung FOLD', 50000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'fold_50t.png', 'fold_50t.png'),
(69, 2, 8, 'SamSung A31', 5000000, 0, '', '', '', '', '', '', '', '', '', '', '', 'a3s.jpg', 'a3s_1.jpg'),
(70, 2, 8, 'SamSung A50', 9400000, 0, '', '', '', '', '', '', '', '', '', '', '', 'a50.png', 'a50.png'),
(71, 1, 11, 'ipad 10 amadzon9', 36000000, 10, '', '', '', '', '', '', '', '', '', '', '', 'ipadamazon.jpg', 'ipadamazon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `re_id` int(11) NOT NULL,
  `re_name` varchar(50) NOT NULL,
  `re_mail` varchar(50) NOT NULL,
  `re_star` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `re_cmt` varchar(1000) NOT NULL,
  `re_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`re_id`, `re_name`, `re_mail`, `re_star`, `product_id`, `re_cmt`, `re_date`) VALUES
(26, 'võ ngọc chính', 'ngocchinh1410@gmail.com', 5, 20, 'Đẹp lắm shop ', '2020-05-15'),
(27, 'võ ngọc chính', 'ngocchinh1410@gmail.com', 5, 20, 'Đẹp lắm shop ', '2020-05-15'),
(28, 'võ ngọc chính', 'ngocchinh1410@gmail.com', 5, 20, 'Đẹp lắm shop ', '2020-05-15'),
(29, 'admin', 'thuypham19102001@gmail.com', 3, 20, 'Tạm ổn', '2020-05-15'),
(30, 'admin', 'thuypham19102001@gmail.com', 3, 20, 'Tạm ổn', '2020-05-15'),
(31, 'võ ngọc chính', 'ngocchinh1410@gmail.com', 5, 17, 'đẹp.', '2020-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `img_slider` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `product_id`, `img_slider`) VALUES
(1, 16, '1_hh.jpg'),
(2, 11, '4_hh.jpg'),
(3, 11, '2_hh.jpg'),
(5, 10, 'banner0.gif'),
(6, 10, 'banner1.png'),
(7, 10, 'banner2.png'),
(8, 10, 'banner6.png'),
(9, 10, 'banner8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tables_posts`
--

CREATE TABLE `tables_posts` (
  `id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tables_posts`
--

INSERT INTO `tables_posts` (`id`, `views`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`baiviet_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_detail_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`chuc_vu_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count_product`
--
ALTER TABLE `count_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `newserletter`
--
ALTER TABLE `newserletter`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tables_posts`
--
ALTER TABLE `tables_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `baiviet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97831731;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `bill_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  MODIFY `chuc_vu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `count_product`
--
ALTER TABLE `count_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newserletter`
--
ALTER TABLE `newserletter`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tables_posts`
--
ALTER TABLE `tables_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
