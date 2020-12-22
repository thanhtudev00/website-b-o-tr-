-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 27, 2020 lúc 11:27 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_tintuc` int(11) NOT NULL,
  `ma_loai` tinyint(11) NOT NULL DEFAULT 0,
  `ngay_bl` date NOT NULL,
  `ma_kh` int(11) DEFAULT 0,
  `user_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_tintuc`, `ma_loai`, `ngay_bl`, `ma_kh`, `user_name`) VALUES
(24, 'new', 74, 20, '2020-04-24', 0, 'anonymous'),
(25, '', 74, 20, '2020-04-24', 0, 'anonymous'),
(26, 'abc', 74, 20, '2020-04-24', 0, 'anonymous'),
(27, 'abc', 74, 20, '2020-04-27', 0, 'anonymous');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `hinh` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `kich_hoat` tinyint(1) DEFAULT 0,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ho_ten`, `mat_khau`, `hinh`, `email`, `kich_hoat`, `vai_tro`, `user_name`) VALUES
(31, 'channgo', '123', 'face_PNG5643.png', 'emailchan', 0, 0, 'chan'),
(33, 'channgo', '123', '', 'emailchan', 0, 0, 'thai'),
(44, 'tuthanh', '123', '', 'tuthanh@email.com', 1, 0, 'tu'),
(45, 'MirandaKer', '123', '', 'miranda@email.com', 1, 0, 'Miranda'),
(46, 'sythanh', '123', '', 'sita@email.com', 1, 0, 'sita'),
(47, 'nancy', '123', '', 'nancymomo@email.com', NULL, 0, 'nancy'),
(54, 'nhannguyen', '202cb962ac59075b964b07152d234b70', 'face_PNG11757.png', 'nhannhtps09970@fpt.edu.vn', 1, 1, 'nhan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `sap_xep` tinyint(11) DEFAULT 0,
  `parent` int(11) DEFAULT 0,
  `hinh` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 0,
  `vi_tri` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`, `sap_xep`, `parent`, `hinh`, `active`, `vi_tri`) VALUES
(17, 'Thế giới', 1, 1, '', 1, 6),
(18, 'Thể thao', 2, 0, '', 1, 2),
(20, 'Công nghệ', 4, 0, '', 1, 5),
(21, 'Kinh doanh', 5, 0, '', 1, 4),
(22, 'Giải trí', 6, 0, '', 1, 3),
(23, 'Y tế', 7, 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `ma_quangcao` int(11) NOT NULL,
  `ma_loai` tinyint(11) DEFAULT 0,
  `hinh` varchar(100) DEFAULT NULL,
  `vi_tri` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`ma_quangcao`, `ma_loai`, `hinh`, `vi_tri`) VALUES
(1, 0, 'qcn2.jpg', 1),
(2, 0, 'quangcaodoc1.jpg', 2),
(3, 0, '89752556-winter-sale-vertical-mobile-ad-banner.jpg', 3),
(9, 23, 'bannercovid19.png', 1),
(10, 22, 'etsy-shop-banner.jpeg', 1),
(11, 21, 'qckinhdoanh1.jpg', 1),
(12, 20, 'qcsamsung.jpg', 1),
(13, 18, 'nike-banner.jpg', 1),
(14, 17, 'EVENT-15-3-WEB-BANNER-EMAIL-SIGNATURE.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tintuc` int(11) NOT NULL,
  `ten_tintuc` varchar(100) NOT NULL,
  `hinh` varchar(100) DEFAULT NULL,
  `ma_loai` int(11) NOT NULL,
  `ngay_dang` date NOT NULL,
  `noi_dung` text DEFAULT NULL,
  `so_luot_xem` int(255) NOT NULL,
  `dacbiet_tintuc` tinyint(1) DEFAULT 0,
  `hot_tintuc` tinyint(1) DEFAULT 0,
  `tag` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tintuc`, `ten_tintuc`, `hinh`, `ma_loai`, `ngay_dang`, `noi_dung`, `so_luot_xem`, `dacbiet_tintuc`, `hot_tintuc`, `tag`) VALUES
(61, 'Thêm 17 bệnh nhân ra viện, cả nước còn 97 ca  ', '97cabenh.jpg', 23, '2020-04-14', 'Trong số các bệnh nhân ra viện hôm nay có 1 bệnh nhân người Pháp và 1 điều dưỡng của Trung tâm Bệnh Nhiệt đới, Bệnh viện Bạch Mai (bệnh nhân 87). Cụ thể, các bệnh nhân ra viện gồm: bệnh nhân 24 (nam, 69 tuổi, quốc tịch Anh); bệnh nhân 50 (nam, 50 tuổi, quốc tịch Việt Nam); bệnh nhân 87 (nữ, 32 tuổi, quốc tịch Việt Nam); bệnh nhân 109 (nam, 42 tuổi, quốc tịch Việt Nam); Bệnh nhân 114 (nam, 19 tuổi, quốc tịch Việt Nam); bệnh nhân 115 (nữ, 44 tuổi, quốc tịch Việt Nam); bệnh nhân 175 (nam 57 tuổi, quốc tịch Việt Nam); bệnh nhân 177 (nữ, 49 tuổi, quốc tịch Việt Nam); bệnh nhân 186 (nữ, 60 tuổi, quốc tịch Pháp); Bệnh nhân 189 (nữ, 46 tuổi, quốc tịch Việt Nam); bệnh nhân 190 (nữ, 49 tuổi, quốc tịch Việt Nam); bệnh nhân 199 (nữ, 57 tuổi, quốc tịch Việt Nam); bệnh nhân 208 (nữ, 38 tuổi, quốc tịch Việt Nam); bệnh nhân 214 (nữ, 45 tuổi, quốc tịch Việt Nam); bệnh nhân 220 (nam, 20 tuổi, quốc tịch Việt Nam); bệnh nhân 232 (nam, 67 tuổi, quốc tịch Việt Nam) và bệnh nhân 239 (nam, 71 tuổi, quốc tịch Việt Nam).', 0, 1, 1, ''),
(65, 'Sáng 15-4, thêm 1 ca bệnh COVID-19 từ ổ dịch Hạ Lôi, cả nước 267 ca', '267cacovid.jpg', 23, '2020-04-15', 'Theo đó bệnh nhân 267 là nam, 46 tuổi, xóm Hội, thôn Hạ Lôi, huyện Mê Linh, Hà Nội, là bố của bệnh nhân 257, chồng của bệnh nhân 258 và có tiếp xúc gần với bệnh nhân 243 tại nhà ngày 20-3. \r\n\r\nNgày 8-4, ông được cách ly tập trung tại Hà Nội. Ngày 13-4 ông khởi phát với triệu chứng sốt nhẹ, mệt mỏi, đau rát họng, đau người, được lấy mẫu bệnh phẩm. \r\n\r\nXét nghiệm ngày 14-4 cho kết quả dương tính với SARS-CoV-2. Hiện bệnh nhân được cách ly, điều trị tại Bệnh viện Bệnh Nhiệt đới trung ương cơ sở 2.', 0, 1, 1, ''),
(68, 'Thêm 1 ca liên quan Bạch Mai, Việt Nam 266 ca bệnh COVID-19', '266cacovid.jpg', 23, '2020-04-14', 'Theo đó, bệnh nhân 266 là nữ, 36 tuổi, trú tại Thường Tín, Hà Nội. Từ ngày 8 đến 10-3, bà đến chăm mẹ tại Khoa phục hồi chức năng Bệnh viện Bạch Mai. Ngày 12-3, bà có biểu hiện ngứa họng và cách ly tại nhà từ ngày 30-3. \r\n\r\nNgày 12-4, bà được lấy mẫu bệnh phẩm và cho kết quả xét nghiệm dương tính với SARS-CoV-2 vào ngày 14-4. Hiện bệnh nhân được cách ly, điều trị tại Bệnh viện Bệnh nhiệt đới trung ương cơ sở 2.\r\n\r\nNhư vậy đến nay Việt Nam ghi nhận 266 ca bệnh COVID-19, trong đó 169 ca đã được công bố khỏi bệnh và ra viện. Riêng ngày 14-4 có tất cả 23 bệnh nhân được ra viện, gồm 5 người điều trị ở TP.HCM, 17 người điều trị ở Hà Nội và 1 người điều trị ở Hà Tĩnh.', 0, 1, 1, ''),
(69, 'Phim Việt đầu năm 2020 quảng bá rầm rộ, chất lượng quá tệ', 'tien-nhieu-de-lam-gi-172-4read-only-1581954018108280677172.jpg', 22, '2020-02-18', 'Từ đầu năm đến hôm 15-2, số lượng phim Việt ra rạp là 7 phim: Bí mật đảo linh xà, 30 chưa phải tết, Gái già lắm chiêu 3, Đôi mắt âm dương, Tiền nhiều để làm gì?, Bí mật của gió (đã hoãn chiếu), Sắc đẹp dối trá (phim Việt duy nhất ra rạp đợt 14-2). Duy nhất Mắt biếc là phim của năm 2019 còn trụ rạp.', 0, 0, 1, ''),
(71, 'Nhiều doanh nghiệp xuất khẩu gạo \'xù\' hợp đồng cấp gạo dự trữ quốc gia', 'lua-gao-soc-trang-15-3read-only-1573866252591881381532-1586424544588817723904.jpg', 21, '2020-04-15', 'Trao đổi với Tuổi Trẻ Online tối 14-4, ông Tuấn cho biết qua rà soát số lượng doanh nghiệp đăng ký tờ khai xuất khẩu gạo vào ngày 12-4, Tổng cục Hải quan nhận thấy nhiều dấu hiệu bất thường.\r\n\r\nCụ thể, trong danh sách đăng ký tờ khai xuất khẩu gạo tháng 4 này, cơ quan này phát hiện nhiều doanh nghiệp đã trúng thầu cung cấp gạo dự trữ nhưng lại hủy hoặc từ chối ký hợp đồng. \r\n\r\nĐơn cử, ông Tuấn cho biết theo thông tin từ Tổng cục Dự trữ thì Tổng công ty Lương thực miền Bắc trúng thầu 4.500 tấn gạo nhưng đến nay chưa ký hợp đồng mà lại đăng ký xuất khẩu 8 tờ khai với số lượng 7.200 tấn. ', 0, 0, 1, ''),
(72, 'Vốn công: không xài cắt ngay', 'caotocbenluc-longthanhcaubinhkhanhnhabe4-5read-only-15868285501951852540182.jpg', 21, '2020-04-15', 'TP Hà Nội đang cắt, giảm, chuyển vốn đầu tư công từ 20 dự án chậm tiến độ sang các dự án có triển khai nhanh, giải ngân tốt. Như dự án xây dựng đường vành đai 1 đoạn Hoàng Cầu - Voi Phục, được giao vốn 1.500 tỉ đồng, dự kiến bị cắt khoảng 1.000 tỉ đồng để chuyển sang dự án giải ngân tốt hơn.', 0, 0, 0, ''),
(73, 'Tuần đầu học trực tuyến: \'Con thất học thì chịu, tiền đâu mua máy in, máy tính?\'', '9281101412995634804321806173224715801329664n-15868611611361289199502.jpg', 20, '2020-04-15', 'Tính đến ngày 13-4, việc chính thức học trực tuyến tại Hà Nội và nhiều tỉnh thành khác đã được một tuần. Một tuần ấy đã ghi nhận nhiều bất hợp lý và khó khăn...\r\n\r\nNhiều rối rắm do triển khai cập rập\r\n\r\nChị Minh Khuyên ở phường Hạ Đình, quận Thanh Xuân (Hà Nội), có hai con học Trường tiểu học K.Đ, cho biết nhà trường mở học trực tuyến hôm 6-4, mới học được một tuần nhưng thực sự thấy rất mệt mỏi và còn nhiều điều chưa ổn.\r\n\r\nTheo chị Khuyên, đầu tiên là việc in bài tập của con. Nội dung bài in khá nhiều, ngày ít cũng 4-5 trang, còn ngày nhiều như cuối tuần vừa rồi phải in tới vài chục trang, riêng toán với tiếng Việt mỗi môn hơn chục trang, chưa kể một số môn phụ khác. \r\n\r\n\"Khổ nỗi việc in còn liên quan tới mực in, giấy in trong khi các cửa hàng văn phòng phẩm đều đóng cửa chống dịch, không có chỗ để mua\", chị nói và cho rằng với những môn đã có bài tập trong sách giáo khoa như toán lẽ ra cô chỉ cần cho con làm bài tập trong sách thay vì ngày nào cũng in, \"không hiểu sao in nhiều thế\".', 0, 1, 1, ''),
(74, 'Không đi học vẫn thu phí: Đừng đẩy khó cho phụ huynh', 'minh-hoa-hoc-onlien-dad-15868372998531087983714.jpg', 20, '2020-04-15', 'Theo đó, từ sau Tết Nguyên đán đến nay, tất cả học sinh các cấp đều nghỉ ở nhà phòng tránh dịch COVID-19. Vậy mà nhiều trường vẫn gửi thông báo yêu cầu phụ huynh phải đóng học phí tháng 4 và 5 của năm học 2019-2020, trong khi học phí tháng 2 và 3 họ đã đóng đầy đủ mà học sinh thì không đến trường. \r\n\r\nCó trường còn yêu cầu phụ huynh phải đóng phí giữ chỗ và đóng học phí cho năm học sau (2020-2021), trong khi học phí học kỳ 2 của năm học này các phụ huynh đã đóng đầy đủ mà học sinh thì chỉ ở nhà học trực tuyến mà thôi.', 0, 1, 1, ''),
(77, 'Vì sao tỉnh Khánh Hòa chưa trao thưởng nóng SEA Games 30 cho Trần Nhật Hoàng?', 'nhat-hoang-sau-khi-gianh-hcv-400m-1586918928547688353505.jpg', 18, '2020-04-15', 'Trao đổi với Tuổi Trẻ Online sáng 15-4, Nhật Hoàng cho biết thời gian này dù dịch COVID-19 đang diễn biến phức tạp nhưng anh và đội tuyển điền kinh Việt Nam vẫn đang nỗ lực tập luyện tại Trung tâm huấn luyện thể thao quốc gia Hà Nội. Do trung tâm cấm trại nên từ sau tết âm lịch đến nay Nhật Hoàng gần như cũng chỉ ở trong trung tâm chứ không đi đâu.', 0, 0, 1, ''),
(78, 'Xavi: ‘Tôi đã sẵn sàng dẫn dắt Barca’', '15868092356650731586811250noticianormal-15869067648001868405229.jpg', 18, '2020-04-15', 'Xavi Hernandez là một huyền thoại tại sân Nou Camp trong giai đoạn 1998-2015 với 767 trận chơi cho Barcelona và cùng với đội bóng này chinh phục 25 danh hiệu, trong đó của 8 chức vô địch La Liga và 4 Champions League.\r\n\r\nHiệu tại, Xavi đang dẫn dắt CLB Al Sadd ở Giải vô địch Qatar. Hồi đầu năm nay, Xavi đã từng từ chối lời mời dẫn dắt Barcelona sau khi đội bóng này tìm người thay HLV Ernesto Valverde.\r\n\r\nNhưng hiện Xavi đã thay đổi quyết định. Cựu tiền vệ sinh năm 1980 này cho biết thời gian qua anh đã học hỏi được rất nhiều trong công tác huấn luyện và đã sẵn sàng để trở lại dẫn dắt Barcelona. ', 0, 0, 0, ''),
(79, 'Đưa tàu Hải Dương Địa Chất 8 trở lại: Trung Quốc mưu toan gì ở Biển Đông?', '928108371193008507706162431579290522353664n-2read-only-15869246996661467179849.jpg', 17, '2020-04-15', 'Trong diễn biến mới nhất, dữ liệu quan sát Marine Traffic ngày 14-4 cho thấy tàu khảo sát Hải Dương địa chất 8 cùng nhóm tàu hải cảnh hộ tống đã quay lại Biển Đông và chạy song song cách bờ biển của Việt Nam khoảng 158km, theo Hãng tin Reuters.', 0, 0, 1, ''),
(80, 'Ông Trump gây sốc khi tuyên bố quyền hành \'tối thượng\' với các tiểu bang', 'trump-corona-covid19-15868323934851264412006.jpg', 17, '2020-04-15', 'Theo Đài NBC, đây không phải là lần đầu tiên ông Trump khẳng định mình có đủ thẩm quyền để chấm dứt các biện pháp giãn cách xã hội, và mở cửa lại nền kinh tế trước các tác động chưa từng có của đại dịch COVID-19.\r\n\r\n\"Tôi sẽ nói rất đơn giản: tổng thống Mỹ có thẩm quyền làm những gì tổng thống có thẩm quyền làm. Tổng thống Mỹ là người ra quyết định cuối cùng\", ông Trump khẳng định trong cuộc họp báo rạng sáng 14-4 (giờ Việt Nam).\r\n\r\nTổng thống Mỹ Donald Trump nhấn mạnh nhiều điều khoản của Hiến pháp Mỹ cho ông quyền lực để áp đảo thống đốc các tiểu bang, những người đã ban bố sắc lệnh ở nhà tại các bang do mình nắm quyền. Chưa đủ, ông Trump còn cam đoan với với một phóng viên rằng ông sẽ cung cấp một bản tóm tắt pháp lý để chứng minh cho những điều vừa nói.', 0, 0, 1, ''),
(87, 'Ngày Messi bị Inter của Mourinho phong tỏa hoàn toàn', 'messi156.jpg', 18, '2020-04-22', 'Khi Barca của Pep Guardiola đối đầu với Inter ở bán kết Champions League 2009/10, không nhiều người nghĩ Nerazzurri có thể làm nên chuyện.\r\n\r\nBarca của Pep vừa vùi dập Arsenal 4-1 ở trận lượt về tại Camp Nou trong một show diễn của riêng Lionel Messi (ghi cả 4 bàn). Khi ấy, El Pulga có 40 bàn trên mọi đấu trường. Ngăn cản số 10 trở thành nhiệm vụ tối thượng của bất kỳ đội bóng nào.\r\n\r\nSong song với việc ngăn cản Messi, Ibrahimovic, Xavi, Pedro, Dani Alves... là những cái tên khác mà đối thủ của Barca phải để mắt tới.\r\n\r\nInter mới chỉ trở lại vòng bán kết lần đầu tiên sau 7 năm. Dù Jose Mourinho ở trên ghế huấn luyện cũng như dưới trướng ông là đội ngũ đầy kinh nghiệm và thiện chiến, rất khó để những CĐV trung lập ngày đó dám tin vào Inter trong nhiệm vụ lật đổ Barca.', 0, 0, 1, ''),
(88, 'Chùm phim đáng suy ngẫm về sự cô lập tinh thần và thể xác', 'sac-dep-doi-tra-172-3read-only-15819538426591192470478.jpg', 22, '2020-04-24', 'Nhưng 7 phim Việt đầu năm nay chưa thể đáp ứng kỳ vọng đó. Trong số 7 phim, chỉ Gái già lắm chiêu 3 có thiết kế sản xuất công phu, nội dung khá đầu tư dù cái kết gây hụt hẫng và phá hỏng một phần thông điệp ý nghĩa trước đó. Còn lại, các phim ở mức trung bình hoặc dưới trung bình.\r\n\r\nMới nhất, Sắc đẹp dối trá, phim đầu tay của hoa hậu Hương Giang trong vai trò diễn viên, gây thất vọng vì tiếp tục mắc điểm yếu cố hữu: kịch bản dở, không trọng tâm, ôm đồm quá nhiều chủ đề (chuyển giới, thi hoa hậu, truy sát) nhưng không một chủ đề nào được thể hiện kỹ.', 0, 0, 1, ''),
(89, 'Đạo diễn \'Gái già lắm chiêu\' bị kẻ gian chiếm Facebook để lừa đảo gần 100 triệu', '2816208315775958056634656895571408875752422o-1587539790311641100578.jpg', 22, '2020-04-24', 'Mới đây đạo diễn Bảo Nhân đã đăng thông báo trên trang cá nhân về việc đồng nghiệp của anh là đạo diễn Namcito bị kẻ gian chiếm đoạt tài khoản Facebook cá nhân để lừa đảo nhiều người với số tiền lên tới gần 100 triệu đồng.\r\n\r\n\"Ngày hôm qua Facebook của đạo diễn Namcito đã bị kẻ gian lừa đảo với thủ đoạn khá bài bản và tinh vi để chiếm đoạt quyền kiểm soát, đồng thời chiếm dụng các tài khoản liên quan khác như Fanpage, Instagram. Sau đó đi lừa tiền lên tới gần 100 triệu đồng các người quen và đối tác của Namcito qua Facebook\", đạo diễn Bảo Nhân viết.', 0, 0, 1, ''),
(90, 'Hứa Vĩ Văn bán tranh, Đại Nghĩa lắp \'ATM gạo\' và các sao Việt làm từ thiện trong mùa dịch', 'hua-vi-van-2-15875280320501813568000.jpg', 22, '2020-04-24', 'Hôm 20-4, Hứa Vĩ Văn chia sẻ cảm xúc tự hào khi hoàn tất hai đợt đấu giá tranh do chính anh vẽ. Nam diễn viên đến Bưu điện TP.HCM để chuyển số tranh đến tay các chủ nhân mới.\r\n\r\nAnh chia sẻ: \"Tổng số tiền quyên góp được cho tài khoản Ủy ban Mặt trận Tổ quốc TP.HCM phòng chống COVID-19 và ngập mặn, hạn hán miền Tây đợt 2 là 24,5 triệu đồng (7 bức tranh). Như vậy tổng số tiền cho cả 2 đợt đấu giá tranh là 56,5 triệu đồng. Một lần nữa chân thành cảm ơn các tấm lòng đã ủng hộ tinh thần này của mình\".', 0, 0, 1, ''),
(91, 'TP.HCM: Quán ăn phải đảm bảo khoảng cách giữa hai khách tối thiểu 1m', '9412411536793019654777124871246036179353600n-15876929158571917576429.jpg', 21, '2020-04-24', 'Đó là nội dung chính của văn bản Hướng dẫn tăng cường công tác phòng chống dịch COVID-19 vừa được Ban Quản lý an toàn thực phẩm TP.HCM gửi UBND 24 quận, huyện.\r\n\r\nTheo đó, Ban Quản lý an toàn thực phẩm TP.HCM đề nghị UBND các quận, huyện triển khai hướng dẫn cho các cơ sở kinh doanh dịch vụ ăn uống trên địa bàn như sau:\r\n\r\nĐối với các cơ sở (cửa hàng, quầy hàng, quán ăn, quán giải khát, nhà hàng, căngtin cơ quan, bệnh viện): thực hiện các qui định theo Bộ tiêu chí đánh giá an toàn phòng chống dịch COVID-19 đối với hoạt động kinh doanh dịch vụ ăn uống trên địa bàn TP được ban hành theo quyết định số 1369/QĐ-BCĐ ngày 23-4-2020 của Ban chỉ đạo phòng chống dịch COVID-19 của TP.', 0, 0, 1, ''),
(92, 'Bia không cồn - ‘chuẩn gu’ sống cân bằng của người trẻ hiện đại', 'photo-1-158762541252483073500.jpg', 21, '2020-04-24', 'Tại Đức, quốc gia nổi tiếng về bia, nghiên cứu của hãng Nielsen cho thấy \"thức uống không cồn là phân khúc duy nhất dẫn đầu thị trường mỗi năm, liên tục trong 10 năm\", dẫn chứng này được đề cập trên trang tin của đài truyền hình Đức DW viết trong bài \"Người Đức ngày càng uống nhiều bia không cồn hơn\" vào tháng 8-2019. \r\n\r\n\"Ở Đức giờ đây không ai phải nói không với bia ngay cả khi họ không muốn nạp cồn vào cơ thể\" - DW dẫn lời ông Marcus Strobl, chuyên viên của Nielsen.\r\n\r\nTương quan với những nghiên cứu trên tại thị trường quốc tế, sự đón nhận của người tiêu dùng Việt với bia không cồn hay thời của bia không cồn đã không còn là một tương lai xa vời.', 0, 0, 1, ''),
(93, 'Các chủ điểm Vietlott háo hức ngày trở lại', 'photo-1-1587652396156154432831.jpg', 21, '2020-04-24', '\"Trời ơi tôi mong quá chứ. Gần một tháng rồi không kinh doanh, vừa khó khăn vì thiếu thu nhập, vừa buồn khi khách quen hỏi nhiều mà không được dự thưởng nên tôi mong Vietlott trở lại lắm\", chị H. Oanh, chủ một điểm bán của Công ty TNHH MTV xổ số điện toán Việt Nam (Vietlott) tại Thủ Dầu Một, Bình Dương mong đợi.\r\n\r\nChị Oanh cho hay trong giai đoạn Vietlott ngừng quay số mở thưởng từ 1/4 để phục vụ công tác phòng chống COVID-19, chị mất hẳn doanh thu mà vẫn phải chi trả chi phí thuê địa điểm, hỗ trợ lương cho nhân viên nên không mong gì hơn ngoài việc Vietlott trở lại kinh doanh.\r\n\r\n\"Tiền nhà vẫn phải trả trong tháng 4. Chủ nhà có hỗ trợ nhưng không nhiều trong khi nhân viên của tôi hoàn cảnh cũng khó khăn, tôi vẫn duy trì lương để phần nào hỗ trợ các bạn trong dịch COVID-19\", chủ điểm bán này chia sẻ.', 0, 0, 1, ''),
(94, 'Gia đình nhà bác học Stephen Hawking tặng máy thở của ông cho bệnh viện', 'prof-stephen-hawking-reuters-1525321658091988035162.jpg', 20, '2020-04-24', 'Theo hãng tin Reuters, gia đình nhà vật lý lý thuyết Stephen Hawking đã tặng chiếc máy thở của ông cho bệnh viện Royal Papworth ở Cambridge, Vương quốc Anh.\r\n\r\nNhà khoa học vũ trụ nổi tiếng của nước Anh qua đời tháng 3-2018 ở tuổi 76 sau hơn nửa thế kỷ chung sống với căn bệnh Hội chứng xơ cứng teo cơ (ALS).\r\n\r\nThông cáo ngày 22-4 của bệnh viện Royal Papworth cho biết: \"Gia đình của giáo sư Stephen Hawking đã tặng chiếc máy thở của ông cho bệnh viện Royal Papworth để chúng tôi chăm sóc cho số người bệnh COVID-19 đang tăng lên\".\r\n\r\nBệnh viện cũng nói họ rất cảm ơn tấm lòng của gia đình cố giáo sư Stephen Hawking vì \"đã hỗ trợ chúng tôi trong thời điểm đầy thách thức này\".\r\n\r\nBệnh viện Royal Papworth cũng là một trung tâm hàng đầu thế giới về cấy ghép tim, phổi.', 0, 0, 1, ''),
(95, 'Royal School - kết nối thầy trò từ những giờ học trực tuyến', '22042020_royal_1.jpg', 20, '2020-04-24', 'Với hệ thống thiết bị hiện đại có lợi thế vượt trội trong việc tối ưu hóa hình thức dạy - học này, một số trường quốc tế đã đem lại cho học sinh trải nghiệm học tập \"thực\" nhất.\r\n\r\nĐiều đặc biệt hơn, mỗi giờ lên lớp trực tuyến không chỉ là việc truyền thụ của \"người dạy\" - tiếp thu của \"người học\" mà còn là sự kết nối đặc biệt, đem lại nguồn cảm hứng mới với bao \"câu chuyện học đường online\" thú vị.\r\n\r\nGhi nhận tại trường Song ngữ Quốc tế Hoàng Gia (Royal School), những giờ học trực tuyến sinh động, nhiều tương tác đang tạo được hứng thú cho các em học sinh cũng như được phụ huynh ủng hộ, đồng tình.\r\n\r\n\"Mềm hoá\" tiết học\r\n\r\nGiống như bạn bè cùng trang lứa, không gian học tập trực tuyến của học sinh Royal School cũng là máy tính, bàn phím, tai nghe,... nhưng cái khô cứng của thiết bị công nghệ đã được \"mềm hóa\" bằng tinh thần trao đổi, tương tác tích cực.\r\n\r\nHọc sinh không cần đồng phục nên \"mỗi bạn một vẻ\". Ở tại nhà nên cũng thoải mái hơn, tự do phát biểu, trao đổi cùng giáo viên và thỉnh thoảng còn... hỏi thăm nhau rằng \"Bạn ở nhà làm gì?\".\r\n\r\nĐôi khi thầy cô lại còn tâm lý, biến tiết học thành \"gameshow\" nhiều màu sắc giúp các bạn học sinh học tập nhẹ nhàng nhưng lại thích thú, hiệu quả hơn.\r\n\r\nKể về những giờ học thú vị của mình, em Bùi Văn Thế Hiển (học sinh lớp 4 - Royal School) hào hứng: \"Không được đi học ở trường nhưng học trực tuyến cũng có thể gặp các bạn, nói chuyện với thầy cô và các bạn. Học trên máy tính cũng hỏi thầy cô được, còn khi gặp cái gì muốn google thì cũng rất dễ...\".\r\n\r\nRoyal School: kết nối thầy trò từ những giờ học trực tuyến - ảnh 2', 0, 0, 1, ''),
(96, 'Buộc Trung Quốc chịu trách nhiệm ở Biển Đông', 'uss-indo-pacific-2read-only-15876965135941305953157.jpg', 17, '2020-04-24', 'Ngày 23-4, Ngoại trưởng Mỹ Mike Pompeo đã có cuộc họp với ngoại trưởng các quốc gia ASEAN. Cuộc họp này xoay quanh những nỗ lực chống COVID-19, và trong đó có vấn đề giữ vững an ninh để tập trung chống dịch.\r\n\r\nChi tiết này hóa ra lại là một điểm nhấn liên quan tới những hoạt động phi pháp của Trung Quốc ở Biển Đông, mà theo quan điểm của Mỹ, Bắc Kinh đang lợi dụng tình hình dịch bệnh để củng cố tham vọng.\r\n\r\nTrong tuyên bố với các nước ASEAN, Ngoại trưởng Pompeo nói thẳng Trung Quốc là một mối đe dọa lâu dài cho an ninh chung, xét tới những gì nước này đang làm trên Biển Đông.\r\n\r\nÔng nói: \"Ngay cả khi đang ứng phó với đại dịch, chúng ta vẫn cần nhớ rằng những mối đe dọa lâu dài đối với an ninh chung của chúng ta chưa hề biến mất. \r\n\r\nThực tế những mối đe dọa đó đã trở nên rõ ràng hơn. Bắc Kinh đã có bước đi tận dụng yếu tố gây mất tập trung, từ việc đơn phương thông báo về các đơn vị hành chính tại các đảo và khu vực hàng hải tới việc đâm chìm một tàu cá Việt Nam vào đầu tháng này, rồi cả các \"trạm nghiên cứu\" trên đá Chữ Thập và đá Subi. \r\n\r\nTrung Quốc tiếp tục điều động lực lượng dân quân biển tới khu vực quần đảo Trường Sa và mới đây nhất, họ đã điều một đội tàu gồm tàu khảo sát năng lượng với mục đích duy nhất là đe dọa các bên tuyên bố chủ quyền khác trong việc tham gia phát triển dầu khí ngoài khơi\".', 0, 0, 1, ''),
(97, 'Trục xuất người thẻ xanh bị kết án hình sự: Tòa tối cao Mỹ đứng về ông Trump', 'my-truc-xuat-nguoi-nhap-cu-15876940418721904398216.jpg', 17, '2020-04-24', 'Với 5 phiếu thuận và 4 phiếu chống, Tòa tối cao Mỹ ngày 23-4 đã giữ nguyên phán quyết của tòa cấp dưới, quyết định trục xuất Andre Martello Barton, một thường trú nhân Mỹ gốc Jamaica.\r\n\r\nBarton, quản lý một cửa hàng sửa xe và có 4 đứa con, bị trục xuất sau khi bị kết án hình sự ở Georgia vì dính tới ma túy và sở hữu súng bất hợp pháp. Ông này sau đó nộp đơn xin miễn bị trục xuất dựa theo một đạo luật nhập cư của liên bang.\r\n\r\nLuật này cho phép các thường trú nhân hợp pháp sống liên tục từ 7 năm trở lên tại Mỹ được nộp đơn xin hủy việc bị trả về nơi đến, trừ khi phạm phải một số tội hình sự nghiêm trọng. Tuy nhiên, nếu bị kết án hình sự, cho dù là tội nhẹ, trong giai đoạn 7 năm đầu này, thường trú nhân sẽ không được hưởng quyền xin miễn trục xuất.\r\n\r\nBarton đến Mỹ cùng mẹ vào năm 1989 rồi bị kết án vào năm 1996 tại Georgia vì sở hữu súng và tấn công người khác. Ông này cũng bị kết tội tàng trữ ma túy trong các năm 2007 và 2008. ', 0, 0, 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_ma_tintuc` (`ma_tintuc`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`ma_quangcao`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tintuc`),
  ADD KEY `fk_maloai` (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `ma_quangcao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_ma_tintuc` FOREIGN KEY (`ma_tintuc`) REFERENCES `tin_tuc` (`ma_tintuc`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `fk_maloai` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
