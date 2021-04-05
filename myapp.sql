-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 05, 2021 lúc 08:57 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `myapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_24_190248_post', 1),
(5, '2021_03_02_065635_create_tbl_categories', 2),
(6, '2021_03_08_193044_create_post_table', 3),
(7, '2021_03_12_103514_create_table_properties', 4),
(8, '2021_03_12_110112_create_table_properties', 5),
(9, '2021_03_29_034045_create_brand', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `created_at`, `updated_at`) VALUES
(1, 'Macalan', '2021-03-30 05:11:39', '2021-03-30 05:11:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ROBB SOCIETY', NULL, '2021-03-08 12:11:06'),
(2, 'STYLE', NULL, '2021-03-08 12:11:22'),
(3, 'VEHICLES', '2021-03-01 17:00:00', '2021-03-08 12:11:36'),
(4, 'LIFESTYLE', '2021-03-02 03:31:22', '2021-03-08 12:12:11'),
(5, 'WATCHES & JEWELLERY', '2021-03-04 13:51:53', '2021-03-08 12:12:26'),
(6, 'NEWS', '2021-03-09 04:39:16', '2021-03-09 04:39:16'),
(7, 'MONEY', '2021-03-09 04:45:24', '2021-03-09 04:45:24'),
(8, 'SPACE', '2021-03-09 04:52:22', '2021-03-09 04:52:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) NOT NULL,
  `level` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `description`, `img`, `link`, `category_id`, `brand_id`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Giám đốc điều hành Red Apron Fine Wines & Spirits: “Sự hiểu biết của người Việt về vang tương đương Singapore”', 'Giám đốc điều hành Red Apron Fine Wines & Spirits: “Sự hiểu biết của người Việt về vang tương đương Singapore”', 'Ms20210308194355.jpg', 'https://www.robbreport.com.vn/giam-doc-dieu-hanh-red-apron-fine-wines-spirits-su-hieu-biet-cua-nguoi-viet-ve-vang-tuong-duong-singapore/', 1, 1, 0, '2021-03-08 12:43:55', '2021-03-08 12:43:55'),
(2, 'Những thay đổi lớn tại triển lãm du thuyền Monaco Yacht Show 2021', 'Những thay đổi lớn tại triển lãm du thuyền Monaco Yacht Show 2021', '320210309112733.png', 'https://www.robbreport.com.vn/nhung-thay-doi-lon-tai-trien-lam-du-thuyen-monaco-yacht-show-2021/', 1, 1, 0, '2021-03-09 04:27:33', '2021-03-09 04:27:33'),
(3, '5 “bí ẩn” có thể bạn chưa biết về bò Wagyu', '5 “bí ẩn” có thể bạn chưa biết về bò Wagyu', 'wolfgang-puck-cut-wagyu20210309112815.jpg', 'https://www.robbreport.com.vn/5-dieu-co-the-ban-chua-biet-ve-bo-wagyu/', 4, 1, 0, '2021-03-09 04:28:15', '2021-03-09 04:28:15'),
(4, 'Ba “siêu phẩm” máy làm tóc của Dyson phái đẹp không thể bỏ lỡ', 'Ba “siêu phẩm” máy làm tóc của Dyson phái đẹp không thể bỏ lỡ', 'Gallery_710x400_ROW-1140x70820210309112852.jpg', 'https://www.robbreport.com.vn/ba-sieu-pham-may-lam-toc-cua-dyson-phai-dep-khong-the-bo-lo/', 2, 1, 0, '2021-03-09 04:28:52', '2021-03-09 04:28:52'),
(5, 'Hai khách sạn 5 sao ở Việt Nam được vinh danh tại các giải thưởng quốc tế uy tín', 'Hai khách sạn 5 sao ở Việt Nam được vinh danh tại các giải thưởng quốc tế uy tín', 'Sofitel-Legend-Metropole-Hanoi-Exterior-1-1140x64120210309113021.jpg', 'https://www.robbreport.com.vn/hai-khach-san-5-sao-o-viet-nam-duoc-vinh-danh-tai-cac-giai-thuong-quoc-te-uy-tin/', 1, 1, 0, '2021-03-09 04:30:21', '2021-03-09 04:30:21'),
(6, 'Aston Martin trở lại giải đua F1 sau hơn 6 thập kỷ vắng bóng', 'Aston Martin trở lại giải đua F1 sau hơn 6 thập kỷ vắng bóng', 'amr210320210309113108.jpg', 'https://www.robbreport.com.vn/aston-martin-tro-lai-giai-dua-f1-sau-hon-6-thap-ky-vang-bong/', 3, 1, 0, '2021-03-09 04:31:08', '2021-03-09 04:31:08'),
(7, 'Porsche Studio chính thức ra mắt tại Hà Nội', 'Porsche Studio chính thức ra mắt tại Hà Nội', 'Porsche-Studio-Hanoi-ra-mat-1-1140x64120210309113214.jpg', 'https://www.robbreport.com.vn/porsche-studio-chinh-thuc-ra-mat-tai-ha-noi/', 1, 1, 0, '2021-03-09 04:32:14', '2021-03-09 04:32:14'),
(8, 'Xu hướng du lịch nổi bật năm 2021: Xê dịch thông thái', 'Xu hướng du lịch nổi bật năm 2021: Xê dịch thông thái', 'InterContinental-Phu-Quoc-Splash-1-1140x64120210309113301.jpg', 'https://www.robbreport.com.vn/xu-huong-du-lich-noi-bat-nam-2021-xe-dich-thong-thai/', 4, 1, 0, '2021-03-09 04:33:01', '2021-03-09 04:33:01'),
(9, 'Accor hợp tác quản lý các khách sạn Novotel và Mövenpick mới tại Việt Nam', 'Accor hợp tác quản lý các khách sạn Novotel và Mövenpick mới tại Việt Nam', 'NOV-PT-8-1140x64120210309113345.jpg', 'https://www.robbreport.com.vn/accor-hop-tac-quan-ly-cac-khach-san-novotel-va-movenpick-moi-tai-viet-nam/', 4, 1, 0, '2021-03-09 04:33:45', '2021-03-09 04:33:45'),
(10, 'Trang sức cao cấp cho ngày 8/3: Món quà đặc biệt chinh phục phái đẹp', 'Trang sức cao cấp cho ngày 8/3: Món quà đặc biệt chinh phục phái đẹp', 'High-jewelry-women-1140x64120210309113440.jpg', 'https://www.robbreport.com.vn/trang-suc-cao-cap-cho-ngay-8-3-mon-qua-dac-biet-chinh-phuc-phai-dep/', 5, 1, 0, '2021-03-09 04:34:40', '2021-03-09 04:34:40'),
(11, 'Richard Mille sẽ hợp tác với Ferrari trong những lĩnh vực nào?', 'Richard Mille sẽ hợp tác với Ferrari trong những lĩnh vực nào?', 'Richard-Mille-Ferrari-Collabs20210309113718.jpg', 'https://www.robbreport.com.vn/richard-mille-se-hop-tac-voi-ferrari-trong-nhung-linh-vuc-nao/', 1, 1, 0, '2021-03-09 04:37:18', '2021-03-09 04:37:18'),
(12, 'Rapper Jay-Z bán 50% cổ phần Champagne Armand de Brignac cho “đế chế xa xỉ” LVMH', 'Rapper Jay-Z bán 50% cổ phần Champagne Armand de Brignac cho “đế chế xa xỉ” LVMH', 'Armand-de-Brignac20210309113811.jpg', 'https://www.robbreport.com.vn/rapper-jay-z-ban-50-co-phan-champagne-armand-de-brignac-cho-de-che-xa-xi-lvmh/', 1, 1, 0, '2021-03-09 04:38:11', '2021-03-09 04:38:11'),
(13, 'Thị trường du thuyền Việt Nam năm 2021 từ góc nhìn của các chuyên gia', 'Thị trường du thuyền Việt Nam năm 2021 từ góc nhìn của các chuyên gia', 'sailing-yacht-1140x64120210309113841.jpg', 'https://www.robbreport.com.vn/thi-truong-du-thuyen-viet-nam-nam-2021-tu-goc-nhin-cua-cac-chuyen-gia/', 1, 1, 0, '2021-03-09 04:38:41', '2021-03-09 04:38:41'),
(14, 'Doanh số Hermès tăng 16% trong Quý 4/2020', 'Doanh số Hermès tăng 16% trong Quý 4/2020', 'Hermes-boutique-vietnam-11-1140x64120210309113956.jpg', 'https://www.robbreport.com.vn/doanh-so-hermes-tang-16-trong-quy-4-2020/', 6, 1, 0, '2021-03-09 04:39:56', '2021-03-09 04:39:56'),
(15, 'Bộ sưu tập công trình mang tính biểu tượng của kiến trúc sư tài ba David Adjaye', 'Bộ sưu tập công trình mang tính biểu tượng của kiến trúc sư tài ba David Adjaye', 'IMG_149420210309114032.jpg', 'https://www.robbreport.com.vn/bo-suu-tap-cong-trinh-mang-tinh-bieu-tuong-cua-kien-truc-su-tai-ba-david-adjaye/', 1, 1, 0, '2021-03-09 04:40:32', '2021-03-09 04:40:32'),
(16, 'Tam Sơn Yachting bàn giao thuyền câu thể thao Barracuda 9 thứ tư', 'Tam Sơn Yachting bàn giao thuyền câu thể thao Barracuda 9 thứ tư', 'Barracuda-9-Tamson-Yachting-1-1140x64120210309114110.jpg', 'https://www.robbreport.com.vn/tam-son-yachting-ban-giao-thuyen-cau-the-thao-barracuda-9-thu-tu/', 1, 1, 0, '2021-03-09 04:41:10', '2021-03-09 04:41:10'),
(17, 'Robb Report Vietnam “số hóa” trên các chuyến bay của Vietnam Airlines', 'Robb Report Vietnam “số hóa” trên các chuyến bay của Vietnam Airlines', 'RRVN-Ereader-0121-p6-1-1140x64120210309114143.jpg', 'https://www.robbreport.com.vn/robb-report-vietnam-so-hoa-tren-cac-chuyen-bay-cua-vietnam-airlines/', 1, 1, 0, '2021-03-09 04:41:43', '2021-03-09 04:41:43'),
(18, 'Robb Report Best of the Best 2020 Awards vinh danh những thương hiệu xuất sắc nhất trong năm', 'Robb Report Best of the Best 2020 Awards vinh danh những thương hiệu xuất sắc nhất trong năm', 'Best-of-the-best-awards-2020-00-1140x64120210309114214.jpg', 'https://www.robbreport.com.vn/robb-report-best-of-the-best-2020-awards-vinh-danh-nhung-thuong-hieu-xuat-sac-nhat-trong-nam/', 1, 1, 0, '2021-03-09 04:42:14', '2021-03-09 04:42:14'),
(19, 'Accor tham vọng mở 37 khách sạn vào năm 2021', 'Accor tham vọng mở 37 khách sạn vào năm 2021', 'Fairmont-Ambassador-Seoul-1-1140x64120210309114252.jpg', 'https://www.robbreport.com.vn/accor-tham-vong-mo-37-khach-san-vao-nam-2021/', 4, 1, 0, '2021-03-09 04:42:52', '2021-03-09 04:42:52'),
(20, 'Ra mắt chứng nhận Goût Français cho các thương hiệu ẩm thực đúng chuẩn Pháp', 'Ra mắt chứng nhận Goût Français cho các thương hiệu ẩm thực đúng chuẩn Pháp', 'French-certificate-2120210309114325.jpg', 'https://www.robbreport.com.vn/ra-mat-chung-nhan-gout-francais-cho-cac-thuong-hieu-am-thuc-dung-chuan-phap/', 1, 1, 0, '2021-03-09 04:43:25', '2021-03-09 04:43:25'),
(21, 'Thương hiệu Wink Hotels giới thiệu khách sạn đầu tiên tại Sài Gòn', 'Thương hiệu Wink Hotels giới thiệu khách sạn đầu tiên tại Sài Gòn', 'facade-final-1140x64120210309114356.jpg', 'https://www.robbreport.com.vn/khach-san-hang-sang-dau-tien-cua-wink-hotels-mo-cua-thang-3-2021/', 1, 1, 0, '2021-03-09 04:43:56', '2021-03-09 04:43:56'),
(22, 'Hoiana Shores Golf Club là đại diện Việt Nam duy nhất được vinh danh trong Top 100 Sân Golf Tốt Nhất Thế Giới', 'Hoiana Shores Golf Club là đại diện Việt Nam duy nhất được vinh danh trong Top 100 Sân Golf Tốt Nhất Thế Giới', 'Hoiana-Shores-Golf-Club-2-1140x64120210309114425.jpg', 'https://www.robbreport.com.vn/hoiana-shores-golf-club-la-dai-dien-viet-nam-duy-nhat-duoc-vinh-danh-trong-top-100-san-golf-tot-nhat-the-gioi/', 1, 1, 0, '2021-03-09 04:44:25', '2021-03-09 04:44:25'),
(23, 'KTS Nguyễn Hoàng Mạnh & hoài bão đưa thiên nhiên vào không gian sống', 'KTS Nguyễn Hoàng Mạnh & hoài bão đưa thiên nhiên vào không gian sống', 'KTS-Hoang-Manh-1-1140x64120210309114455.jpg', 'https://www.robbreport.com.vn/kts-nguyen-hoang-manh-hoai-bao-dua-thien-nhien-vao-khong-gian-song/', 1, 1, 0, '2021-03-09 04:44:55', '2021-03-09 04:44:55'),
(24, 'Nhóm khách hàng trẻ tuổi đã “tiếp sức” cho các thương hiệu xa xỉ vượt qua giai đoạn 2020 như thế nào?', 'Nhóm khách hàng trẻ tuổi đã “tiếp sức” cho các thương hiệu xa xỉ vượt qua giai đoạn 2020 như thế nào?', 'RR-Young-Shoppers-2-1140x64120210309114607.jpg', 'https://www.robbreport.com.vn/nhom-khach-hang-tre-tuoi-da-tiep-suc-cho-cac-thuong-hieu-xa-xi-vuot-qua-giai-doan-2020-nhu-the-nao/', 1, 1, 0, '2021-03-09 04:46:07', '2021-03-09 04:46:07'),
(25, 'Chiếc Merry Fisher 1095 Fly đầu tiên tại Việt Nam được bàn giao ở Nha Trang', 'Chiếc Merry Fisher 1095 Fly đầu tiên tại Việt Nam được bàn giao ở Nha Trang', 'vietyacht-ban-giao-du-thuyen-cau-Merry-Fisher-1095-Fly-dau-tien-cua-thi-truong-Vietnam-tai-Nha-trang-2-1140x64120210309114644.jpg', 'https://www.robbreport.com.vn/chiec-merry-fisher-1095-fly-dau-tien-tai-viet-nam-duoc-ban-giao-o-nha-trang/', 1, 1, 0, '2021-03-09 04:46:44', '2021-03-09 04:46:44'),
(26, 'Cuộc thi sắc đẹp gắn với golf lần đầu tiên tổ chức tại Việt Nam chính thức khởi động', 'Cuộc thi sắc đẹp gắn với golf lần đầu tiên tổ chức tại Việt Nam chính thức khởi động', 'Miss-Golf-Vietnam-2021-1-1140x64120210309114808.jpg', 'https://www.robbreport.com.vn/cuoc-thi-sac-dep-gan-voi-golf-lan-dau-tien-to-chuc-tai-viet-nam-chinh-thuc-khoi-dong/', 1, 1, 0, '2021-03-09 04:48:08', '2021-03-09 04:48:08'),
(27, 'DAFC sẽ trở thành nhà phân phối thương hiệu Tiffany&Co. tại Việt Nam', 'DAFC sẽ trở thành nhà phân phối thương hiệu Tiffany&Co. tại Việt Nam', 'Tiffany-Co-1140x64120210309115116.jpg', 'https://www.robbreport.com.vn/dafc-se-tro-thanh-nha-phan-phoi-thuong-hieu-tiffanyco-tai-viet-nam/', 1, 1, 0, '2021-03-09 04:51:16', '2021-03-09 04:51:16'),
(28, 'Toyota Woven City – đô thị thông minh của tương lai', 'Toyota Woven City – đô thị thông minh của tương lai', '10_BIG_TWC_Toyota-Woven-City_Typical-Block_Image-by-BIG-Bjarke-Ingels-Group-1140x64120210309115309.jpg', 'https://www.robbreport.com.vn/toyota-woven-city-do-thi-thong-minh-cua-tuong-lai/', 8, 1, 0, '2021-03-09 04:53:09', '2021-03-09 04:53:09'),
(29, 'Lời giải nào cho cuộc khủng hoảng Cashmere? (Kỳ 2)', 'Lời giải nào cho cuộc khủng hoảng Cashmere? (Kỳ 2)', '10_RR_Cashmere-Cashmere-Group-1-1140x64120210309115343.jpg', 'https://www.robbreport.com.vn/loi-giai-nao-cho-cuoc-khung-hoang-cashmere-ky-2/', 8, 1, 0, '2021-03-09 04:53:43', '2021-03-09 04:53:43'),
(30, 'Lời giải nào cho cuộc khủng hoảng Cashmere? (Kỳ 1)', 'Lời giải nào cho cuộc khủng hoảng Cashmere? (Kỳ 1)', 'Cashmere-crysis-1-1140x64120210309115414.jpg', 'https://www.robbreport.com.vn/loi-giai-nao-cho-cuoc-khung-hoang-cashmere-ky-1/', 7, 1, 0, '2021-03-09 04:54:14', '2021-03-09 04:54:14'),
(31, 'New York – Thị trường bất động sản hạng sang cho thuê đắt đỏ bậc nhất thế giới', 'New York – Thị trường bất động sản hạng sang cho thuê đắt đỏ bậc nhất thế giới', 'The-vessel-hudson-yards20210309115457.jpg', 'https://www.robbreport.com.vn/new-york-thi-truong-bat-dong-san-hang-sang-cho-thue-dat-do-bac-nhat-the-gioi/', 8, 1, 0, '2021-03-09 04:54:57', '2021-03-09 04:54:57'),
(32, 'Bậc thầy pha chế Jim Beveridge và câu chuyện về một tuyệt tác phương Tây', 'Bậc thầy pha chế Jim Beveridge và câu chuyện về một tuyệt tác phương Tây', 'di-san-do-uong-tru-danh-120210309115534.jpg', 'https://www.robbreport.com.vn/bac-thay-pha-che-jim-beveridge-va-cau-chuyen-ve-mot-tuyet-tac-phuong-tay/', 1, 1, 0, '2021-03-09 04:55:34', '2021-03-09 04:55:34'),
(33, 'Rolls-Royce chính thức có đại lý ủy quyền mới tại Việt Nam', 'Rolls-Royce chính thức có đại lý ủy quyền mới tại Việt Nam', 'RR-Rolls-Royce-3-1140x64120210309115607.jpg', 'https://www.robbreport.com.vn/rolls-royce-chinh-thuc-co-dai-ly-uy-quyen-moi-tai-viet-nam/', 1, 1, 0, '2021-03-09 04:56:07', '2021-03-09 04:56:07'),
(34, 'Bên trong Trung tâm công nghệ của McLaren', 'Bên trong Trung tâm công nghệ của McLaren', 'MTC-1140x64120210309115650.jpg', 'https://www.robbreport.com.vn/ben-trong-trung-tam-cong-nghe-cua-mclaren/', 3, 1, 0, '2021-03-09 04:56:50', '2021-03-09 04:56:50'),
(35, 'Trò chuyện cùng Daisy Knatchbull – nhà sáng lập cửa hiệu may đo suit tùy biến đầu tiên dành cho phái nữ ở Savile Row', 'Trò chuyện cùng Daisy Knatchbull – nhà sáng lập cửa hiệu may đo suit tùy biến đầu tiên dành cho phái nữ ở Savile Row', 'Daisy-Knatchbull-Photo-Credit-Charlie-Taylor-1140x64120210309115730.jpg', 'https://www.robbreport.com.vn/tro-chuyen-cung-daisy-knatchbull-nha-sang-lap-cua-hieu-may-do-suit-tuy-bien-dau-tien-danh-cho-phai-nu-o-savile-row/', 1, 1, 0, '2021-03-09 04:57:30', '2021-03-09 04:57:30'),
(36, 'Không gian Sky Villa phiên bản giới hạn ghi điểm với hàng nghìn khách hàng', 'Không gian Sky Villa phiên bản giới hạn ghi điểm với hàng nghìn khách hàng', 'Sky-villa-1140x64120210309115836.jpg', 'https://www.robbreport.com.vn/khong-gian-sky-villa-phien-ban-gioi-han-ghi-diem-voi-hang-nghin-khach-hang/', 1, 1, 0, '2021-03-09 04:58:36', '2021-03-09 04:58:36'),
(37, 'Eurasia Concept chính thức khai trương showroom đầu tiên tại Hà Nội', 'Eurasia Concept chính thức khai trương showroom đầu tiên tại Hà Nội', 'Eurasia-Concept-Hanoi-8-1140x64120210309115906.jpg', 'https://www.robbreport.com.vn/eurasia-concept-chinh-thuc-khai-truong-showroom-dau-tien-tai-ha-noi/', 1, 1, 0, '2021-03-09 04:59:06', '2021-03-09 04:59:06'),
(38, 'Accor “tiến công” phân khúc khách sạn phong cách sống với các thương vụ táo bạo', 'Accor “tiến công” phân khúc khách sạn phong cách sống với các thương vụ táo bạo', 'Accor-1140x64120210309115936.jpg', 'https://www.robbreport.com.vn/accor-tien-cong-phan-khuc-khach-san-phong-cach-song-voi-cac-thuong-vu-tao-bao/', 4, 1, 0, '2021-03-09 04:59:36', '2021-03-09 04:59:36'),
(39, 'Phân khúc bất động sản hạng sang tự tin chờ “bung lụa”', 'Phân khúc bất động sản hạng sang tự tin chờ “bung lụa”', 'BDS-VN-1140x64120210309120014.jpg', 'https://www.robbreport.com.vn/phan-khuc-bat-dong-san-hang-sang-tu-tin-cho-ngay-bung-lua/', 8, 1, 0, '2021-03-09 05:00:14', '2021-03-09 05:00:14'),
(40, 'Bí mật ở Arizona', 'Bí mật ở Arizona', '05_RR_featGEMSHOW06Extendright1inch20210309120049.jpg', 'https://www.robbreport.com.vn/bi-mat-o-arizona/', 5, 1, 0, '2021-03-09 05:00:49', '2021-03-09 05:00:49'),
(41, 'Bí thuật làm nên các tuyệt tác đồng hồ điểm chuông từ BST Les Cabinotiers của Vacheron Constantin', 'Bí thuật làm nên các tuyệt tác đồng hồ điểm chuông từ BST Les Cabinotiers của Vacheron Constantin', 'VAC_Symphonia_9200C-000R-B667_MO_2-1140x64120210309120128.jpg', 'https://www.robbreport.com.vn/bi-thuat-lam-nen-cac-tuyet-tac-dong-ho-diem-chuong-tu-bst-les-cabinotiers-cua-vacheron-constantin/', 5, 1, 0, '2021-03-09 05:01:28', '2021-03-09 05:01:28'),
(42, 'Giải pháp kinh doanh của các khách sạn và khu nghỉ dưỡng cao cấp trong bối cảnh covid-19', 'Giải pháp kinh doanh của các khách sạn và khu nghỉ dưỡng cao cấp trong bối cảnh covid-19', '4Wellbeing_S20210309120202.jpg', 'https://www.robbreport.com.vn/giai-phap-kinh-doanh-cua-cac-khach-san-va-khu-nghi-duong-cao-cap-trong-boi-canh-covid-19/', 4, 1, 0, '2021-03-09 05:02:02', '2021-03-09 05:02:02'),
(43, 'Hành trình định danh chất vang độc đáo từ bờ biển Tây Sonoma, Hoa Kỳ', 'Hành trình định danh chất vang độc đáo từ bờ biển Tây Sonoma, Hoa Kỳ', 'PR_good-day-time-shot-1140x64120210309120243.jpg', 'https://www.robbreport.com.vn/hanh-trinh-dinh-danh-chat-vang-doc-dao-tu-bo-bien-tay-sonoma-hoa-ky/', 4, 1, 0, '2021-03-09 05:02:43', '2021-03-09 05:02:43'),
(44, 'Sưu tầm whisky phiên bản giới hạn: Khi sở thích mang lại lợi nhuận khủng', 'Sưu tầm whisky phiên bản giới hạn: Khi sở thích mang lại lợi nhuận khủng', 'Phap-Lam-4-1140x64120210309120320.jpg', 'https://www.robbreport.com.vn/suu-tam-whisky-phien-ban-gioi-han-khi-so-thich-mang-lai-loi-nhuan-khung/', 4, 1, 0, '2021-03-09 05:03:20', '2021-03-09 05:03:20'),
(45, 'Tiên phong mở lối: câu chuyện từ di sản văn hóa đến nghỉ dưỡng đẳng cấp khác biệt của Sunshine Group', 'Tiên phong mở lối: câu chuyện từ di sản văn hóa đến nghỉ dưỡng đẳng cấp khác biệt của Sunshine Group', 'heritage_25-1140x64120210309120357.jpg', 'https://www.robbreport.com.vn/tien-phong-mo-loi-cau-chuyen-tu-di-san-van-hoa-den-nghi-duong-dang-cap-khac-biet-cua-sunshine-group/', 8, 1, 0, '2021-03-09 05:03:57', '2021-03-09 05:03:57'),
(46, 'Jean Schlumberger, bậc thầy kim hoàn với những biến hóa phi thường dành cho Tiffany &amp; Co.', 'Jean Schlumberger, bậc thầy kim hoàn với những biến hóa phi thường dành cho Tiffany &amp; Co.', 'Jean-Schlumberger-V2-1140x64220210309120437.jpg', 'https://www.robbreport.com.vn/jean-schlumberger-bac-thay-kim-hoan-voi-nhung-bien-hoa-phi-thuong-danh-cho-tiffany-co/', 4, 1, 0, '2021-03-09 05:04:37', '2021-04-01 08:03:03'),
(47, 'The Icon định hình chuẩn sống sang áaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'The Icon định hình chuẩn sống sang', 'upload-ff322f85-949d-4688-aff3-890f6aa77f5020210322075613.jpg', 'https://readymag.com/longform/2618748/2/', 4, 1, 0, '2021-03-22 00:56:13', '2021-04-04 02:10:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_properties`
--

CREATE TABLE `tbl_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title_min` int(10) NOT NULL,
  `seo_title_max` int(10) NOT NULL,
  `seo_description_min` int(10) NOT NULL,
  `seo_description_max` int(10) NOT NULL,
  `number_posts_show` int(10) NOT NULL,
  `day_change_posts_show` int(11) NOT NULL,
  `original_date` datetime NOT NULL DEFAULT current_timestamp(),
  `change_date` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_properties`
--

INSERT INTO `tbl_properties` (`id`, `banner_image`, `seo_title_min`, `seo_title_max`, `seo_description_min`, `seo_description_max`, `number_posts_show`, `day_change_posts_show`, `original_date`, `change_date`, `created_at`, `updated_at`) VALUES
(1, 'You might also like', 60, 65, 120, 150, 3, 1, '2021-04-04 04:24:22', '2021-04-05 04:24:22', '2021-03-12 11:03:11', '2021-04-03 23:28:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tam', 'ntk74199@gmail.com', '2021-02-05 17:59:08', 'e10adc3949ba59abbe56e057f20f883e', 1, '123456789', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_properties`
--
ALTER TABLE `tbl_properties`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tbl_properties`
--
ALTER TABLE `tbl_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
