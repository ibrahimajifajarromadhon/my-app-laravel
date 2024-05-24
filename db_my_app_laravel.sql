-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2024 pada 07.23
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_my_app_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Elektronik', 'elektronik', '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(2, 'Food', 'food', '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(3, 'Fashion', 'fashion', '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(7, 'Alat Mandi', 'alat-mandi', '2024-02-22 12:46:24', '2024-02-22 12:52:29'),
(8, 'Alat Makan', 'alat-makan', '2024-02-22 12:52:39', '2024-02-22 12:52:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_22_143812_create_posts_table', 1),
(6, '2024_01_27_141211_create_products_table', 1),
(7, '2024_01_27_154714_create_categories_table', 1),
(8, '2024_01_30_011828_create_shops_table', 1),
(9, '2024_02_22_191512_add_is_admin_to_shops_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `shop_id`, `nama`, `slug`, `harga`, `deskripsi`, `gambar`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 1, 3, 'Sunt id qui.', 'beatae-saepe', '747430', 'Tenetur commodi cupiditate sunt repellendus qui laborum. Explicabo temporibus est itaque sunt perferendis. Et atque et repellendus voluptatum provident culpa est voluptas. Voluptatem voluptas magni reprehenderit vel rerum. Nulla sed ab qui et aliquid ullam voluptatibus doloremque. Mollitia officiis nemo quo voluptatem vitae voluptatum. Inventore deleniti nemo beatae unde nulla. Possimus quaerat consequatur est. Quasi eos aut eum.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+qui', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(3, 2, 2, 'Aut accusamus.', 'doloribus-eaque', '5916831', 'Quia perferendis natus praesentium. Omnis consequatur ut pariatur voluptas molestiae tenetur dolorem. Aut autem omnis dolor. Cum eveniet omnis ullam perferendis voluptatibus. Cupiditate praesentium libero eos asperiores. Est quam laudantium totam sit voluptas. Sunt nulla sint consequatur id fuga. Nostrum est delectus autem consequuntur nesciunt rerum nulla. Veniam sint nulla eius ipsa eum. Et similique cupiditate quis ut dolore. Qui ullam quas quas temporibus molestiae hic commodi.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+et', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(4, 1, 2, 'Ut quos.', 'laborum-possimus-minima', '9714778', 'Quaerat vero velit voluptas dicta placeat. Et sint ab illo doloremque porro. Repellendus rerum repellat laboriosam nihil in ipsa. Quasi necessitatibus placeat sed est repudiandae fugiat. Hic nemo qui voluptas est quia tenetur itaque a. Molestiae sapiente illum suscipit laboriosam fuga dolorem maiores et. Est corrupti consequatur dolores nisi assumenda.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+error', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(5, 1, 3, 'Fugiat enim maiores.', 'molestiae-quam-tenetur', '5155813', 'Consequatur ipsum omnis hic ad. Id tempora laborum ipsam iusto. Excepturi ipsam enim repudiandae ipsam incidunt. Assumenda magnam odit enim inventore adipisci quae consequatur esse. Quo dolore optio ea harum beatae sint. Et consequatur voluptas a. Architecto optio enim qui fuga ipsa architecto. Sed est hic voluptatem ipsa in cupiditate alias. Eaque officia est dolorem odio non dolorum. Error voluptatem minus labore ea illum quisquam porro. Tempora voluptatem ratione in iste. Nobis suscipit et voluptatem et occaecati laborum fuga.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+velit', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(6, 1, 2, 'Alias sit veritatis magnam qui.', 'sit-dolorem-facilis', '9534908', 'Quod est voluptas exercitationem officiis tempore. Dolor excepturi cumque deserunt tempora illo. Voluptate ducimus cumque asperiores perferendis quis aspernatur quo. Quo rerum eos totam ab aut id. Tempora cupiditate ea consequatur veniam modi. Sed dolores aut adipisci dolores quis consequatur. Ex beatae dicta nisi ut labore.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+autem', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(8, 3, 2, 'Aut id unde rerum reprehenderit nihil.', 'assumenda-ut-eveniet', '9108248', 'Non nisi aut aspernatur velit. Distinctio enim rem ut ex culpa. Quisquam praesentium in eveniet dolorum magni sint. Ex voluptatem qui facilis cumque. Eius quia asperiores distinctio et harum temporibus.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+molestiae', NULL, '2024-02-20 05:26:17', '2024-02-20 05:26:17'),
(10, 3, 2, 'Eligendi placeat optio corporis.', 'id-reiciendis', '3680884', 'Quibusdam animi aut sunt temporibus quibusdam velit non velit. Eos consequatur iure architecto aut adipisci maxime. Libero ad rerum ea explicabo consequatur. Est qui accusantium ipsam earum non. Minus voluptate molestias commodi et esse consequuntur.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+ducimus', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(11, 2, 2, 'Iure voluptates commodi unde repudiandae ipsam.', 'reiciendis-quia', '2880060', 'Harum dolores perspiciatis rem laudantium est quaerat eligendi. Enim quis dolores quibusdam qui expedita et. Optio iusto quis provident atque vel. Ipsum est dolor earum eum qui illo ut veniam. Aut voluptates dicta velit quasi deserunt. In eum voluptatum non laboriosam. Officiis culpa ducimus tenetur omnis ea molestiae. Voluptatem rerum doloremque eaque omnis provident. Sed quam sit assumenda dolorum exercitationem.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+aut', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(13, 1, 2, 'Reprehenderit ut non dolorem.', 'quo-autem', '9953991', 'Iste mollitia minima aperiam sint nesciunt sapiente quia. Enim nisi incidunt voluptatem perspiciatis eligendi. Aperiam sed molestiae doloremque assumenda aut. Et beatae totam beatae voluptatem non voluptas. Minima dolor possimus et odio enim recusandae. Molestiae eos doloremque earum tenetur qui. Veniam possimus magni vel laboriosam est ad.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+ipsum', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(14, 3, 2, 'Molestiae deserunt.', 'voluptatibus-occaecati', '7062464', 'Possimus amet quia quis ipsa. Reiciendis qui consequatur cupiditate molestiae labore. Non fugit impedit unde ut dolores ipsum officiis impedit. Sint tempora porro consectetur veritatis cupiditate veniam expedita. Non officiis possimus autem est voluptas. Aliquid molestiae minima odit aspernatur quod sed voluptates. Tempora consequatur necessitatibus fuga. Dolore iusto omnis aspernatur minima quaerat.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+assumenda', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(15, 1, 3, 'Eligendi occaecati molestiae cum deleniti.', 'nihil-ea-vel', '8792373', 'Ut ut laudantium aut corrupti pariatur. Autem explicabo alias et perferendis ipsam beatae. Perspiciatis sequi possimus culpa voluptatem est suscipit. Molestiae aut assumenda animi minus saepe et. Quam id assumenda adipisci. Et consequuntur veritatis dolorem similique nesciunt officiis.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+tenetur', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(16, 2, 3, 'Cumque qui ea vitae.', 'molestiae-sunt', '758931', 'Dolorem tenetur quis et impedit iure similique. Et aut autem doloremque architecto ea. Similique quaerat nihil earum qui recusandae maxime libero. Consequuntur voluptates asperiores neque cupiditate soluta praesentium. Atque facere dicta sunt quasi sit nesciunt. Omnis exercitationem enim dolorem dolor quibusdam tempora eum. Libero dignissimos voluptatem quidem.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+ducimus', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(17, 2, 2, 'Et voluptas aut.', 'aut-et', '6122390', 'Qui dolorum id aspernatur eos totam magni. Quas sit dolorem unde. Tempore officiis vel quaerat atque sed. Nulla quis non rerum sint et ut voluptatum dolores. Non nam ut est non assumenda. Error suscipit tempore dignissimos mollitia odio aut corporis. Non qui quisquam perspiciatis vero qui harum.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+et', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(18, 3, 2, 'Deleniti accusamus eum voluptatem ipsa.', 'nisi-illum', '6182421', 'Vero quibusdam nihil sed totam odio totam quia. Consequuntur odit enim vero omnis tenetur. Quo excepturi dolorum esse est consequatur aliquam soluta. Nihil tenetur dolorum cupiditate autem repellendus quos est. Quidem accusamus tempora illum perferendis. Excepturi et rerum accusantium quas minus labore vel.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+minus', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(19, 1, 2, 'Voluptas sint corrupti cum.', 'iusto-consequatur', '4834951', 'Odit ad rerum beatae saepe. Quis repellendus omnis qui laborum voluptatem illum. Voluptas veniam sunt debitis deserunt asperiores vero. Aspernatur exercitationem veritatis aut ratione. Laudantium explicabo facilis impedit rerum enim dignissimos. Iusto et in sequi. Et magnam aspernatur debitis odit. Aperiam ut similique recusandae eius. Sequi inventore officiis quia sed quidem. Voluptatem nam doloremque repudiandae et. Aut culpa voluptas voluptate laboriosam ipsa perferendis praesentium. Laudantium iusto sunt soluta accusamus assumenda. Eligendi pariatur ut earum sit sed animi.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+officiis', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(20, 2, 3, 'Deleniti nobis ut repellendus eligendi.', 'sit-perspiciatis-omnis', '7089335', 'Aut voluptatem est eveniet nemo iure. Perspiciatis aut deserunt aut aut nihil alias. Ut voluptatibus consequatur in consequatur et. Ut vel recusandae ut quam at. Totam quaerat rerum tenetur officiis laudantium dolore quas. Ut quaerat ea corrupti rerum doloribus. Tempore assumenda sunt eos qui. Nulla mollitia voluptatem et distinctio. Et illo et quas vero.', 'https://via.placeholder.com/360x360.jpg/CCCCCC?text=animals+dogs+ea', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18'),
(22, 1, 1, 'iPhone 13', 'iphone-13-2', '100000', '<p>s</p>', 'S3fnsrvrITyGAcGEHrPxbiRe1bVBD92RGKhLy0sq.png', NULL, '2024-02-21 07:25:55', '2024-02-21 07:25:55'),
(23, 1, 1, 'iPhone 13 Pro Max', 'iphone-13-pro-max', '150000', '<p>a</p>', 'xmPs4BuzIfuIf6VIaGxrpifVeJ8tlP3sNvbGjrFz.png', NULL, '2024-02-21 07:33:12', '2024-02-21 07:33:12'),
(25, 3, 1, 'Walpaper Keren', 'walpaper-keren', '300000', '<h1><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. </strong></h1>\r\n\r\n<p>Est inventore voluptatem dolor iure, quibusdam, voluptatum perferendis explicabo repellendus facere libero minima voluptatibus aperiam a culpa totam error sit atque? Repellendus incidunt suscipit praesentium accusamus, accusantium quia fugit nisi aliquid iusto! Inventore, tempore eligendi rerum dolores officia nisi temporibus a perferendis recusandae tempora ex quisquam aliquam tenetur adipisci quia deleniti perspiciatis? Sequi omnis libero temporibus, eaque est at laudantium magnam quisquam, totam aperiam quo quasi saepe officiis labore eos voluptas a nihil voluptate in culpa eius? Non voluptatem rem, et dicta blanditiis incidunt commodi aut laboriosam aliquam animi. Quis fuga provident, perspiciatis sequi architecto omnis aspernatur recusandae alias iste velit deleniti eum aliquid qui nesciunt laboriosam accusamus fugiat repudiandae aut voluptatum modi a explicabo. Sit, perferendis sed molestiae accusantium, repudiandae commodi quidem aperiam, maxime totam excepturi deleniti quibusdam architecto doloribus? Ducimus sint aspernatur expedita maiores distinctio quaerat inventore corrupti pariatur dolore molestiae nostrum dolor vel magnam, mollitia reiciendis? Id, amet. Ex fugiat magni quia fuga accusamus voluptatum delectus soluta itaque aliquam? Possimus voluptatum quam veritatis, eaque libero repudiandae iusto recusandae porro officiis ea perferendis assumenda, voluptas minus, excepturi et vel dicta quibusdam deleniti dolorum. Reiciendis amet sit minima, quos aliquam perferendis a modi ex sapiente error tempore officiis tempora odit sequi numquam suscipit enim adipisci eos, praesentium facere doloremque repudiandae. Corrupti rem saepe quidem beatae atque suscipit unde autem porro, necessitatibus dicta temporibus cupiditate, sint, sapiente asperiores blanditiis amet vel. Delectus adipisci alias nemo. Architecto quis iure veniam rem quas corporis neque earum id. Atque commodi, sed corrupti doloribus quaerat nemo voluptatibus. Sunt accusantium fugit ut nam optio ad, nesciunt ullam atque omnis sit mollitia tempore, voluptatum sint praesentium quo exercitationem necessitatibus perferendis, consequatur facere placeat. A blanditiis deserunt ipsum voluptatum. Praesentium pariatur excepturi consequuntur fugit facilis, cumque quis. Odio, aliquam?</p>', 'ZSsSJyUEEN0e2qGmKcGl1iTzKEGLyWFOX8peR5Bd.jpg', NULL, '2024-02-22 05:38:44', '2024-02-22 07:13:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `nama`, `harga`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 13', '150000', '<p>asdsdadasd</p>', 'pC2GEXUE0vA7Sb3GdMGiBXEEJKcYGfubP940UNPy.png', '2024-02-20 09:34:03', '2024-02-22 07:00:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shops`
--

INSERT INTO `shops` (`id`, `nama`, `nama_toko`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Ibrahim Aji Fajar Romadhon', 'ibrahim-aji-fajar', 'ibrahim@gmail.com', NULL, '$2y$10$I3f2JREsNW/kw.ENsqRxVuMxWVsM446zp9srprxh5vrWUWLKESCk2', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18', 1),
(2, 'Budi Asoy', 'budi-asoy', 'budi@gmail.com', NULL, '$2y$10$Jc1kACBDSG2CfpItvuiXQuXXuWEXhe/88FjaEUTMq7Fsz4v58nm9q', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18', 1),
(3, 'Ahmad Slebew', 'ahmad-slebew', 'Ahmad@gmail.com', NULL, '$2y$10$TUsfdUftNHeTgEpi.j/eLOsv1SXjki5M8WZC/uebFnSDFq5ym2X1q', NULL, '2024-02-20 05:26:18', '2024-02-20 05:26:18', 0),
(4, 'Alex', 'alex', 'alex@gmail.com', NULL, '$2y$10$LE1nWyqhg0OQyiVRtQLCduCtkeVJKan9abxFHJfjOO7mcogBs9jom', NULL, '2024-02-22 13:28:32', '2024-02-22 13:28:32', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_nama_toko_unique` (`nama_toko`),
  ADD UNIQUE KEY `shops_email_unique` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
