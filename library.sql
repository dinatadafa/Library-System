-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2023 at 02:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `noktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `file_ktp` varchar(255) DEFAULT NULL,
  `idstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`noktp`, `nama`, `password`, `alamat`, `kota`, `email`, `no_telp`, `file_ktp`, `idstatus`) VALUES
('111222333', 'David Johnson', 'password3', '789 Oak St', 'Chicago', 'davidjohnson@example.com', '1111111111', 'ktp3.jpg', 1),
('111777333', 'William Wilson', 'password9', '789 Sequoia St', 'Denver', 'williamwilson@example.com', '1234556789', 'ktp9.jpg', 1),
('123456111', 'Jessica Davis', 'password8', '456 Cedar St', 'Houston', 'jessicadavis@example.com', '9999999999', 'ktp8.jpg', 1),
('123456789', 'John Doe', 'password1', '123 Main St', 'New York', 'johndoe@example.com', '1234567890', 'ktp1.jpg', 1),
('222111333', 'Jennifer Lee', 'password6', '987 Pine St', 'Boston', 'jenniferlee@example.com', '2222222222', 'ktp6.jpg', 1),
('444555666', 'Emily Brown', 'password4', '321 Maple St', 'San Francisco', 'emilybrown@example.com', '4444444444', 'ktp4.jpg', 1),
('777888999', 'Michael Wilson', 'password5', '654 Birch St', 'Miami', 'michaelwilson@example.com', '7777777777', 'ktp5.jpg', 1),
('888777555', 'Christopher Miller', 'password7', '123 Redwood St', 'Seattle', 'christophermiller@example.com', '8888888888', 'ktp7.jpg', 0),
('987654321', 'Jane Smith', 'password2', '456 Elm St', 'Los Angeles', 'janesmith@example.com', '9876543210', 'ktp2.jpg', 1),
('999888777', 'Sarah Taylor', 'password10', '321 Palm St', 'Phoenix', 'sarahtaylor@example.com', '5555555555', 'ktp10.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idbuku` int(11) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `idkategori` int(11) DEFAULT NULL,
  `pengarang` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `kota_terbit` varchar(255) DEFAULT NULL,
  `editor` varchar(255) DEFAULT NULL,
  `file_gambar` varchar(255) DEFAULT NULL,
  `tgl_insert` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stok` int(11) DEFAULT NULL,
  `stok_tersedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idbuku`, `isbn`, `judul`, `idkategori`, `pengarang`, `penerbit`, `kota_terbit`, `editor`, `file_gambar`, `tgl_insert`, `tgl_update`, `stok`, `stok_tersedia`) VALUES
(1, '1234567890', 'To Kill a Mockingbird', 1, 'Harper Lee', 'HarperCollins', 'New York', 'Test2', 'image1.jpg', '2023-10-21 13:11:05', '2023-10-24 15:42:42', 50, 50),
(2, '9876543210', 'The Great Gatsby', 1, 'F. Scott Fitzgerald', 'Scribner', 'New York', 'Editor B', 'image2.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 30, 30),
(3, '5678901234', 'Pride and Prejudice', 1, 'Jane Austen', 'Penguin Classics', 'London', 'Editor C', 'image3.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 20, 20),
(4, '2345678901', 'Sherlock Holmes', 2, 'Arthur Conan Doyle', 'Penguin Books', 'London', 'Editor D', 'image4.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 40, 40),
(5, '7890123456', 'Steve Jobs', 5, 'Walter Isaacson', 'Simon & Schuster', 'New York', 'Editor E', 'image5.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 10, 10),
(6, '3456789012', 'Harry Potter and the Philosopher\'s Stone', 6, 'J.K. Rowling', 'Bloomsbury', 'London', 'Editor F', 'image6.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 60, 60),
(7, '9012345678', 'The History of Rome', 7, 'Titus Livius', 'Penguin Classics', 'London', 'Editor G', 'image7.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 70, 70),
(8, '4567890123', 'The 7 Habits of Highly Effective People', 8, 'Stephen R. Covey', 'Simon & Schuster', 'New York', 'Editor H', 'image8.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 90, 90),
(9, '1122334455', 'The Joy of Cooking', 8, 'Irma S. Rombauer', 'Scribner', 'New York', 'Editor I', 'image9.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 25, 25),
(10, '9988776655', 'Into the Wild', 9, 'Jon Krakauer', 'Anchor Books', 'New York', 'Editor J', 'image10.jpg', '2023-10-21 13:11:05', '2023-10-21 13:11:05', 15, 15),
(40, '5273658716', 'Cara jadi boti', 2, 'Alvin', 'Gramedia', 'Jaksel', 'Gua', 'image11.jpg', '2023-10-26 07:11:17', '2023-10-26 07:11:17', 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idbuku` int(11) DEFAULT NULL,
  `tgl_kembali` timestamp NULL DEFAULT NULL,
  `denda` decimal(10,2) DEFAULT NULL,
  `idpetugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`idtransaksi`, `idbuku`, `tgl_kembali`, `denda`, `idpetugas`) VALUES
(1, 1, '2023-10-21 20:00:00', 0.00, 1),
(2, 2, '2023-10-21 21:00:00', 0.00, 2),
(3, 3, '2023-10-22 22:00:00', 0.00, 1),
(4, 4, '2023-10-26 05:22:53', 0.00, 2),
(5, 5, '2023-10-26 07:36:55', 0.00, 1),
(6, 6, '2023-10-23 01:00:00', 0.00, 2),
(7, 7, '2023-10-23 02:00:00', 0.00, 1),
(8, 8, '2023-10-23 03:00:00', 0.00, 2),
(9, 9, '2023-10-23 04:00:00', 0.00, 1),
(10, 10, NULL, 7000.00, 2),
(11, 2, NULL, 0.00, 3),
(12, 2, NULL, 0.00, 3),
(13, 10, NULL, 0.00, 1);

--
-- Triggers `detail_transaksi`
--
DELIMITER $$
CREATE TRIGGER `calculate_denda` BEFORE INSERT ON `detail_transaksi` FOR EACH ROW BEGIN
    DECLARE tgl_kembali_date DATE;
    DECLARE tgl_pinjam_date DATE;
    DECLARE denda_amount DECIMAL(10, 2);

    -- Convert the timestamp to a date
    SET tgl_kembali_date = DATE(NEW.tgl_kembali);
    SET tgl_pinjam_date = DATE((SELECT tgl_pinjam FROM peminjaman WHERE idtransaksi = NEW.idtransaksi));

    -- Calculate the difference in days
    SET denda_amount = DATEDIFF(NOW(), tgl_pinjam_date);

    -- Calculate the denda based on the conditions
    IF NEW.tgl_kembali IS NULL THEN
        -- Calculate denda only if tgl_kembali is NULL
        IF denda_amount > 14 THEN
            SET NEW.denda = (denda_amount - 14) * 1000.00;
        ELSE
            SET NEW.denda = 0.00;
        END IF;
    ELSE
        SET NEW.denda = 0.00;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama`) VALUES
(1, 'Fiction'),
(2, 'Science'),
(3, 'Romance'),
(4, 'Mystery'),
(5, 'Biography'),
(6, 'Fantasy'),
(7, 'History'),
(8, 'Self-Help'),
(9, 'Cooking'),
(10, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_buku`
--

CREATE TABLE `komentar_buku` (
  `idkomentar` int(11) NOT NULL,
  `idbuku` int(11) DEFAULT NULL,
  `noktp` varchar(255) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar_buku`
--

INSERT INTO `komentar_buku` (`idkomentar`, `idbuku`, `noktp`, `komentar`) VALUES
(1, 1, '123456789', 'Great book!'),
(2, 2, '987654321', 'I loved it!'),
(3, 3, '111222333', 'Not my favorite.'),
(4, 4, '444555666', 'Interesting read.'),
(5, 5, '777888999', 'Highly recommended.'),
(6, 6, '222111333', 'Enjoyed every page.'),
(7, 7, '888777555', 'A classic.'),
(8, 8, '123456111', 'Good recipes!'),
(9, 9, '111777333', 'Fascinating story.'),
(10, 10, '999888777', 'Inspiring journey.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idtransaksi` int(11) NOT NULL,
  `noktp` varchar(255) DEFAULT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT current_timestamp(),
  `idpetugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`idtransaksi`, `noktp`, `tgl_pinjam`, `idpetugas`) VALUES
(1, '123456789', '2023-10-21 13:11:05', 1),
(2, '987654321', '2023-10-21 13:11:05', 2),
(3, '111222333', '2023-10-21 13:11:05', 1),
(4, '444555666', '2023-10-21 13:11:05', 2),
(5, '777888999', '2023-10-21 13:11:05', 1),
(6, '222111333', '2023-10-21 13:11:05', 2),
(7, '888777555', '2023-10-21 13:11:05', 1),
(8, '123456111', '2023-10-21 13:11:05', 2),
(9, '111777333', '2023-10-21 13:11:05', 1),
(10, '999888777', '2023-10-05 13:11:05', 2),
(11, '123456111', '2023-10-26 07:34:06', 3),
(12, '222111333', '2023-10-26 07:34:45', 3),
(13, '123456111', '2023-10-26 07:36:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nama`, `email`, `password`) VALUES
(1, 'Samsul', 'petugas1@example.com', 'password1'),
(2, 'Yanto', 'petugas2@example.com', 'password2'),
(3, 'Arya', 'arya@gmail.com', 'arya123');

-- --------------------------------------------------------

--
-- Table structure for table `rating_buku`
--

CREATE TABLE `rating_buku` (
  `idbuku` int(11) DEFAULT NULL,
  `noktp` varchar(255) DEFAULT NULL,
  `skor_rating` int(11) DEFAULT NULL,
  `tgl_rating` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating_buku`
--

INSERT INTO `rating_buku` (`idbuku`, `noktp`, `skor_rating`, `tgl_rating`) VALUES
(1, '123456789', 4, '2023-10-21 03:00:00'),
(2, '987654321', 5, '2023-10-21 04:00:00'),
(3, '111222333', 3, '2023-10-21 05:00:00'),
(4, '444555666', 4, '2023-10-21 06:00:00'),
(5, '777888999', 5, '2023-10-21 07:00:00'),
(6, '222111333', 4, '2023-10-21 08:00:00'),
(7, '888777555', 5, '2023-10-21 09:00:00'),
(8, '123456111', 3, '2023-10-21 10:00:00'),
(9, '111777333', 4, '2023-10-21 11:00:00'),
(10, '999888777', 5, '2023-10-21 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `kondisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `kondisi`) VALUES
(0, 'tidak aktif'),
(1, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`noktp`),
  ADD KEY `fk_anggota_status` (`idstatus`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `idbuku` (`idbuku`),
  ADD KEY `idpetugas` (`idpetugas`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `komentar_buku`
--
ALTER TABLE `komentar_buku`
  ADD PRIMARY KEY (`idkomentar`),
  ADD KEY `idbuku` (`idbuku`),
  ADD KEY `noktp` (`noktp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `noktp` (`noktp`),
  ADD KEY `idpetugas` (`idpetugas`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `rating_buku`
--
ALTER TABLE `rating_buku`
  ADD KEY `idbuku` (`idbuku`),
  ADD KEY `noktp` (`noktp`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `komentar_buku`
--
ALTER TABLE `komentar_buku`
  MODIFY `idkomentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `fk_anggota_status` FOREIGN KEY (`idstatus`) REFERENCES `status` (`id`);

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`);

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`idbuku`) REFERENCES `buku` (`idbuku`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`);

--
-- Constraints for table `komentar_buku`
--
ALTER TABLE `komentar_buku`
  ADD CONSTRAINT `komentar_buku_ibfk_1` FOREIGN KEY (`idbuku`) REFERENCES `buku` (`idbuku`),
  ADD CONSTRAINT `komentar_buku_ibfk_2` FOREIGN KEY (`noktp`) REFERENCES `anggota` (`noktp`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`noktp`) REFERENCES `anggota` (`noktp`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`);

--
-- Constraints for table `rating_buku`
--
ALTER TABLE `rating_buku`
  ADD CONSTRAINT `rating_buku_ibfk_1` FOREIGN KEY (`idbuku`) REFERENCES `buku` (`idbuku`),
  ADD CONSTRAINT `rating_buku_ibfk_2` FOREIGN KEY (`noktp`) REFERENCES `anggota` (`noktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
