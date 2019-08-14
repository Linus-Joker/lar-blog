-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: localhost:8889
-- 產生時間： 2019 年 08 月 14 日 23:59
-- 伺服器版本: 5.7.24
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mamp0429`
--

-- --------------------------------------------------------

--
-- 資料表結構 `art`
--

CREATE TABLE `art` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `art_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `art_content` varchar(511) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='文章內頁';

--
-- 資料表的匯出資料 `art`
--

INSERT INTO `art` (`art_id`, `art_title`, `art_pic`, `art_content`) VALUES
(1, '測試標題', NULL, NULL),
(2, '測試標題2', NULL, NULL),
(3, '測試標題3', NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `blog`
--

CREATE TABLE `blog` (
  `article_id` int(10) NOT NULL,
  `article_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `article_description` varchar(511) COLLATE utf8_unicode_ci NOT NULL,
  `article_pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='用戶名單';

--
-- 資料表的匯出資料 `blog`
--

INSERT INTO `blog` (`article_id`, `article_title`, `article_description`, `article_pic`, `created_at`, `updated_at`) VALUES
(1, 'The Biggest Contribution Of News To Humanity.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias accusantium culpa nam, ad ipsum quis debitis deleniti repellendus laborum consequuntur a, fuga fugit harum. Obcaecati ullam neque enim nam sunt.', 'images/2019050608.jpg', '2019-05-10', '2019-05-10'),
(3, 'How News Is Going', '丏浰炔啵苭讔稐愩囟仱俜庋坨彽妢溓乜虰奫詡。翐一柣祣嵁跲亍慲錸冇，眻乇恄荾蛪嵱乇碲巿仨。愅耵芀橕睕嶵妅一鄈軗烜刱戉珋丌，搟揕屮盱洿鉆芤卌屮岟嫬柶夃坯。堸佮汋醑葳儑机一粞捰茠妱丼胊乜，晸嵂丌岝洝睔枎扐丌矻颭炡丏狑。酖一炾淶崲煇屮蒚穇气，桻乇洊祩湓嗈兀幘旡卌。冘紓昃絅哅礸蜁暕圮艿耷囮侉竻忐犐乇芢漍豋。釪一庢袾鄁尳乜碞諻夬，珽兀复翍鈒雸乜滹亓圢。唵一柤酖堙葅乇墑樨爿，梬乜哅痐猌搊屮漼毌扐。', 'images/201905070750.jpg', '2019-05-11', '2019-05-11'),
(9, 'How News Is Going To 123', '<p><span style=\"color: #444444; font-family: sans-serif; font-size: 13.12px; background-color: #dfdfdf;\">無的了論的作兒費樓過有進眾可，</span></p>', 'images/201905141355.jpg', '2019-05-12', '2019-05-12'),
(11, 'How News Is Going To Change Your Business Strategies.', '<p>犉盱屼曋痹聬扙一觝啅珛侐庂俓亍，歆喁屮侔洉椳沝氻乇呣鳱俖丱屄。</p>', 'images/201905141403.jpg', '2019-05-11', '2019-05-12'),
(19, 'test0531', '<p>test0531</p>', 'images/201905310931.jpg', '2019-05-31', NULL),
(20, 'test0607', '<pre>\r\n如果你想使用文字來填充區塊，無論是中文、英文或任何內容，</pre>\r\n\r\n<p>都可透過線上中英文假字產生器來產生隨機文字，這些範例文字是由許多字所構成，</p>\r\n\r\n<p>乍看之下像是一篇文章，細讀卻沒有意義，更能專注於觀察字型或排版，很適合用來填滿文字空間區域、測試效果。</p>', 'images/201906070614.jpg', '2019-06-07', '2019-06-07'),
(22, 'test picture 0612', '<p>test picture 0612</p>', 'https://res.cloudinary.com/linus-li/image/upload/v1560329198/201906120846', '2019-06-12', '2019-06-12');

-- --------------------------------------------------------

--
-- 資料表結構 `blogclient`
--

CREATE TABLE `blogclient` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fcebook_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(21) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `remember_token` varchar(121) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `blogclient`
--

INSERT INTO `blogclient` (`id`, `name`, `password`, `fcebook_id`, `phone`, `mail`, `gender`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'apple', '123456', NULL, 123456, 'apple@mail.com', 'female', NULL, NULL, NULL),
(4, 'banana', '444', NULL, 922333444, 'banana@mail.com', 'female', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `client`
--

CREATE TABLE `client` (
  `id` int(8) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='客戶資料';

--
-- 資料表的匯出資料 `client`
--

INSERT INTO `client` (`id`, `name`) VALUES
(1, 'apple');

-- --------------------------------------------------------

--
-- 資料表結構 `data_table`
--

CREATE TABLE `data_table` (
  `id` int(11) NOT NULL,
  `first` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `data_table`
--

INSERT INTO `data_table` (`id`, `first`, `last`) VALUES
(1, 'apple', 'aa');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_08_140751_create_blogclient_table', 2),
(4, '2019_05_24_034458_create_users_table', 3),
(5, '2019_06_05_130140_add_facebook_id_to_users_table', 4),
(6, '2016_06_01_000001_create_oauth_auth_codes_table', 5),
(7, '2016_06_01_000002_create_oauth_access_tokens_table', 5),
(8, '2016_06_01_000003_create_oauth_refresh_tokens_table', 5),
(9, '2016_06_01_000004_create_oauth_clients_table', 5),
(10, '2016_06_01_000005_create_oauth_personal_access_clients_table', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'H3uOKLoxYo6axswwYOrQsqIYvkNK71j94NigRsIj', 'http://localhost', 1, 0, 0, '2019-06-19 00:05:18', '2019-06-19 00:05:18'),
(2, NULL, 'Laravel Password Grant Client', '8HV14r6hp7wrlATM0UtJFVCuJloUBTFTLWNCwtRz', 'http://localhost', 0, 1, 0, '2019-06-19 00:05:18', '2019-06-19 00:05:18'),
(3, NULL, 'Laravel Test Access Client', 'tJXFSJPLYUC3dw7zx1y3GxQOyG5fyCto8LcsTCm6', 'http://localhost/auth/callback', 0, 0, 0, '2019-06-19 00:36:31', '2019-06-19 00:36:31');

-- --------------------------------------------------------

--
-- 資料表結構 `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-06-19 00:05:18', '2019-06-19 00:05:18');

-- --------------------------------------------------------

--
-- 資料表結構 `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(101) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `remember_token`, `updated_at`, `created_at`) VALUES
(11, 'candy', '$2y$10$t3I0QHS6dT/lmAK5ybFRmOSJTLTpH1UK4VVX4oi7pinSFgB5p1Qg6', 'candy@mail.com', '1CUyIGTqxdWmpzpm4b7mVRPxrMiNfdfrVJP6ZYT5o7cvrrma0uzQTgnjdTaU', '2019-06-03', '2019-06-03'),
(10, 'apple', '$2y$10$ev8Q4WO9n10BqdSJROE3a.Qry8JdcgtZXoLzeO1oIY4gNczyprKja', 'apple@mail.com', 'qUy2CRWWeJELVK5MqIyPq6CSF4FNOtRhfyY1t8BRydkTkiCgBoImGp2BuBCH', '2019-05-29', '2019-05-29'),
(13, 'banana', '$2y$10$xrbl7ojLxLYGjhjqfkrixerdElphH.8PeWJlTtVTKlyoa04H9ZzTO', 'banana@mail.com', NULL, '2019-06-12', '2019-06-12');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`) USING BTREE;

--
-- 資料表索引 `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`article_id`);

--
-- 資料表索引 `blogclient`
--
ALTER TABLE `blogclient`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `data_table`
--
ALTER TABLE `data_table`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- 資料表索引 `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- 資料表索引 `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- 資料表索引 `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `blog`
--
ALTER TABLE `blog`
  MODIFY `article_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用資料表 AUTO_INCREMENT `blogclient`
--
ALTER TABLE `blogclient`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `data_table`
--
ALTER TABLE `data_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
