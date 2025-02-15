-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sahabat_difabel
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disabilitas`
--

DROP TABLE IF EXISTS `disabilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disabilitas` (
  `disabilitas_id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_disabilitas_id` int NOT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`disabilitas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disabilitas`
--

LOCK TABLES `disabilitas` WRITE;
/*!40000 ALTER TABLE `disabilitas` DISABLE KEYS */;
INSERT INTO `disabilitas` VALUES (1,'Galih Saptono','L','2023-09-15','Bukittinggi','Dk. Kali No. 657, Cilegon 81116, DIY',1,'Apoteker',NULL,NULL),(2,'Prayoga Simbolon','P','1989-11-20','Blitar','Jln. Bank Dagang Negara No. 541, Balikpapan 55544, Bali',3,'Kepolisian RI (POLRI)',NULL,NULL),(4,'Siska Rahimah S.Kom','P','1992-06-30','Jambi','Dk. Bakau No. 843, Pematangsiantar 16355, Sulut',3,'Tukang Kayu',NULL,NULL),(5,'Raina Nurdiyanti','P','2014-12-03','Bontang','Ds. Moch. Toha No. 696, Palopo 33888, Kaltara',1,'Presiden',NULL,NULL),(6,'Ratih Zalindra Yuniar','L','1972-01-16','Pangkal Pinang','Jln. Sutoyo No. 742, Samarinda 61837, Sulteng',2,'Satpam',NULL,NULL),(7,'Ian Sihombing','P','2000-09-01','Bekasi','Jr. Flora No. 682, Administrasi Jakarta Barat 24665, Bengkulu',1,'Pegawai Negeri Sipil (PNS)',NULL,NULL),(9,'Rahayu Wulandari M.Farm','P','1983-08-17','Malang','Gg. Gedebage Selatan No. 806, Yogyakarta 76542, Jambi',3,'Buruh Tani / Perkebunan',NULL,NULL),(10,'Emong Wibowo','P','1978-08-09','Binjai','Gg. Hayam Wuruk No. 875, Sawahlunto 90590, Kalbar',2,'Seniman',NULL,NULL),(11,'Akarsana Jailani M.Kom.','P','2009-09-17','Probolinggo','Kpg. Mahakam No. 390, Kendari 46986, Sulsel',3,'Tukang Gigi',NULL,NULL),(13,'Slamet Vinsen Nainggolan S.Sos','L','2007-02-07','Samarinda','Ds. Mulyadi No. 848, Mataram 21599, Jateng',2,'Notaris',NULL,NULL),(14,'Cemani Panca Lazuardi S.H.','P','1993-12-07','Administrasi Jakarta Utara','Psr. Juanda No. 85, Depok 68066, Bali',2,'Perdagangan',NULL,NULL),(15,'Ajiono Dongoran','L','2019-06-19','Blitar','Gg. Lada No. 740, Bogor 56853, Bali',1,'Penulis',NULL,NULL),(16,'Jarwadi Karma Siregar S.H.','L','1978-12-02','Banjarmasin','Dk. Cut Nyak Dien No. 621, Administrasi Jakarta Selatan 94352, Bengkulu',3,'Psikiater / Psikolog',NULL,NULL),(17,'Prabu Wasita S.E.I','P','2020-11-09','Sorong','Dk. Cokroaminoto No. 410, Blitar 66070, Jateng',2,'Penulis',NULL,NULL),(18,'Cengkir Emil Maheswara','P','1994-06-11','Jayapura','Ki. Raya Setiabudhi No. 517, Bandung 14291, Pabar',3,'Buruh Nelayan / Perikanan',NULL,NULL),(20,'Cawisono Hutasoit','P','1992-07-24','Bandung','Ds. Ters. Pasir Koja No. 768, Cilegon 41560, Malut',3,'Tukang Batu',NULL,NULL),(21,'Harjasa Saefullah','L','1977-01-25','Palopo','Ki. Elang No. 873, Banjarmasin 78259, Jabar',2,'Perdagangan',NULL,NULL),(22,'Putu Samosir','L','1975-05-01','Parepare','Dk. Baranang Siang Indah No. 394, Tangerang 47409, Sulteng',4,'Kondektur',NULL,NULL),(23,'Anita Yolanda S.Gz','L','2012-06-05','Dumai','Kpg. Bakin No. 339, Bogor 79969, Bengkulu',4,'Penyiar Radio',NULL,NULL),(24,'Kiandra Rahimah S.I.Kom','L','2007-04-15','Sungai Penuh','Psr. Ekonomi No. 520, Cimahi 86374, DIY',1,'Pilot',NULL,NULL),(25,'Asirwanda Gangsa Winarno S.Kom','P','1971-03-20','Sawahlunto','Kpg. Aceh No. 912, Samarinda 76473, Sulsel',4,'Wakil Presiden',NULL,NULL),(26,'Lala Wulan Suartini S.E.I','L','1972-05-02','Administrasi Jakarta Selatan','Ki. Casablanca No. 757, Makassar 31898, Sulteng',4,'Penata Rambut',NULL,NULL),(28,'Ratih Rahayu','P','2007-10-19','Administrasi Jakarta Timur','Psr. Perintis Kemerdekaan No. 191, Prabumulih 22080, Sulut',4,'Penyiar Televisi',NULL,NULL),(29,'Ghaliyati Lala Uyainah M.Ak','L','2002-03-02','Cilegon','Dk. Mahakam No. 745, Cirebon 51823, Aceh',1,'Buruh Nelayan / Perikanan',NULL,NULL),(30,'Adinata Mustofa M.M.','L','1989-05-17','Kendari','Gg. Baranang No. 591, Malang 36343, Malut',1,'Promotor Acara',NULL,NULL),(31,'Usyi Ida Purwanti','L','2014-12-09','Bogor','Ki. Bakti No. 604, Bandar Lampung 88081, Sulsel',4,'Karyawan Honorer',NULL,NULL),(32,'Mala Safitri','L','1997-07-30','Tegal','Kpg. Fajar No. 609, Malang 73362, Kaltara',4,'Paraji',NULL,NULL),(33,'Rahayu Suartini S.Sos','L','1972-06-22','Padangsidempuan','Gg. Rajawali Barat No. 274, Gorontalo 24310, Babel',2,'Tukang Gigi',NULL,NULL),(34,'Dian Wastuti S.Gz','P','1977-05-09','Cirebon','Ki. Ekonomi No. 242, Tasikmalaya 16509, Maluku',2,'Penyiar Radio',NULL,NULL),(35,'Wardi Nababan','L','1997-06-08','Gunungsitoli','Gg. Sugiono No. 755, Samarinda 65204, Bengkulu',4,'Tukang Las / Pandai Besi',NULL,NULL),(36,'Ina Aurora Kuswandari','P','2001-05-19','Sukabumi','Ds. Padang No. 22, Sibolga 22379, Kaltim',3,'Tukang Sol Sepatu',NULL,NULL),(37,'Hendri Narji Rajasa S.Kom','L','1995-07-25','Solok','Dk. Labu No. 133, Pangkal Pinang 79263, Sulbar',2,'Apoteker',NULL,NULL),(38,'Rina Salsabila Hassanah S.Gz','P','2006-07-29','Mojokerto','Gg. Basuki No. 598, Jayapura 67310, Sulbar',1,'Bidan',NULL,NULL),(40,'Sarah Laksita','L','2016-04-28','Tangerang','Gg. Pelajar Pejuang 45 No. 992, Bengkulu 95065, Kepri',3,'Pramusaji',NULL,NULL),(41,'Edi Saputra','L','2005-01-30','Tanjung Pinang','Jr. Dahlia No. 828, Depok 89604, Aceh',2,'Buruh Peternakan',NULL,NULL),(42,'Hadi Ardianto','P','2002-06-26','Sorong','Gg. Achmad Yani No. 113, Surabaya 64940, Kalbar',3,'Notaris',NULL,NULL),(43,'Gilda Fitriani Handayani','P','2003-04-15','Pekalongan','Gg. Aceh No. 270, Pekalongan 85708, DKI',1,'Wiraswasta',NULL,NULL),(44,'Galiono Halim','P','1992-04-20','Mataram','Jln. Bahagia  No. 161, Lhokseumawe 67323, Sulbar',2,'Mengurus Rumah Tangga',NULL,NULL),(45,'Maimunah Kartika Wijayanti','P','2005-05-02','Madiun','Dk. Baja No. 736, Batu 13897, Sultra',2,'Psikiater / Psikolog',NULL,NULL),(46,'Kemba Damu Haryanto','L','1976-04-25','Batam','Gg. Raden No. 44, Makassar 11040, Jatim',4,'Hakim',NULL,NULL),(47,'Wardaya Widodo','L','1987-07-20','Sorong','Kpg. Kalimalang No. 759, Salatiga 66133, Maluku',3,'Perangkat Desa',NULL,NULL),(48,'Narji Marpaung','P','2023-12-16','Samarinda','Jr. Bara No. 54, Tomohon 91138, Riau',4,'Pengacara',NULL,NULL),(49,'Bella Hariyah','P','1995-04-20','Administrasi Jakarta Barat','Ds. Labu No. 779, Yogyakarta 73440, Aceh',3,'Karyawan BUMN',NULL,NULL),(50,'Emas Balapati Budiyanto','P','2001-02-15','Ambon','Psr. Cihampelas No. 723, Dumai 71912, Sumut',4,'Karyawan BUMD',NULL,NULL),(52,'Anton','L','2002-05-21','Banjar','sfgaskufgkasfaslfiasilfsa',2,'Ngganggur','2024-11-20 05:04:32','2024-11-20 05:04:32'),(53,'Lina Tri Sulistia','P','2001-03-15','Sini aja','sini aja',4,'Mahasiswa','2025-02-14 21:00:05','2025-02-14 21:00:05');
/*!40000 ALTER TABLE `disabilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_disabilitas`
--

DROP TABLE IF EXISTS `jenis_disabilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis_disabilitas` (
  `jenis_disabilitas_id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`jenis_disabilitas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_disabilitas`
--

LOCK TABLES `jenis_disabilitas` WRITE;
/*!40000 ALTER TABLE `jenis_disabilitas` DISABLE KEYS */;
INSERT INTO `jenis_disabilitas` VALUES (1,'Gangguan Penglihatan'),(2,'Gangguan Pendengaran'),(3,'Autisme'),(4,'Disabilitas Fisik');
/*!40000 ALTER TABLE `jenis_disabilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'default','{\"uuid\":\"ebf1f566-cecf-4ada-be17-af37e9241766\",\"displayName\":\"App\\\\Jobs\\\\reduceStockLayananKeperluan\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\reduceStockLayananKeperluan\",\"command\":\"O:36:\\\"App\\\\Jobs\\\\reduceStockLayananKeperluan\\\":0:{}\"}}',0,NULL,1739560425,1739560425);
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keperluan_disabilitas`
--

DROP TABLE IF EXISTS `keperluan_disabilitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keperluan_disabilitas` (
  `keperluan_disabilitas_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan_layanan_id` int NOT NULL,
  `disabilitas_id` int NOT NULL,
  `status_diterima` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`keperluan_disabilitas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keperluan_disabilitas`
--

LOCK TABLES `keperluan_disabilitas` WRITE;
/*!40000 ALTER TABLE `keperluan_disabilitas` DISABLE KEYS */;
INSERT INTO `keperluan_disabilitas` VALUES ('9d78a915-4adf-4fdb-9641-b8992321cfea',1,1,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-4eae-47ff-b20e-b48b37f8804d',2,1,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-4f1d-4455-be18-34ce99658268',3,1,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-4f78-4b42-8bb9-7e4bc143f290',4,1,1,'2024-11-12 05:46:23','2024-11-13 06:39:54'),('9d78a915-4fdb-43c6-a85b-ee371d8b3606',5,1,1,'2024-11-12 05:46:23','2024-11-13 06:39:58'),('9d78a915-5078-406d-936f-fa76dc29c13e',1,2,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-50e1-41a1-8ace-5961f0328839',2,2,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-514a-4d8d-9c91-d8a5b4cb0e51',3,2,1,'2024-11-12 05:46:23','2025-02-14 20:00:55'),('9d78a915-5222-4d41-a09e-03a14b6350d8',1,4,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5276-4871-bd08-4ea34408ce03',2,4,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-52c7-4296-9196-805c173de946',3,4,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5317-4ce5-a795-fc749ea184cd',4,4,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5364-44fa-beaf-2005bc9bcbaa',5,4,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-53c0-4cf9-accd-8b2e4c4b19d6',7,4,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-542e-4ff6-9af4-17637e0da0d6',1,5,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5482-451d-a7f7-6112b20e03fd',2,5,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-54d6-4032-bc4c-4d7ffa7f31f7',3,5,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-556c-4f21-979c-073eca666b04',4,5,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-55f9-45af-9356-cb3a418cb3c1',1,6,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-564f-4c7e-a766-98f6870548eb',2,6,1,'2024-11-12 05:46:23','2025-02-14 20:09:12'),('9d78a915-56c3-45e6-898f-703c7b23d265',1,7,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5721-4691-8c62-3e260304a749',2,7,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5778-44c6-bcc3-37bf7b7b65c4',3,7,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-57c6-40da-9e2b-322e1ede7637',4,7,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-581b-4878-b487-873d01dcd846',5,7,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-59c9-4906-80d9-2387259de2db',1,9,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5a4f-443a-b45a-3bf5fa44ba0c',1,10,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5ac1-4133-bc81-804b454cf5e4',2,10,1,'2024-11-12 05:46:23','2025-02-14 20:09:49'),('9d78a915-5b40-48be-ac6e-ea5350377c9f',1,11,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5bb8-46f3-8ebf-0495469d5b22',2,11,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5c45-4e09-a22d-b2cb6ec1ded0',3,11,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5ccd-4ebd-8d5e-c0d69c2e673a',4,11,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5d2a-4f9c-aae2-fb804b8bc1cf',5,11,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5d7b-4b44-bc89-dcca0f035560',7,11,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5eb8-41bf-9bac-d5bc6fd59e1d',1,13,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5f08-46e7-b5fc-1a82fb05eeb7',2,13,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5f57-4006-a2de-e65fcf01aaf2',3,13,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-5fd6-4477-8d2a-840fd5cdfdd9',4,13,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-602a-41b5-befd-73b41721e837',5,13,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6084-4a80-a04d-a72d47f87e0e',7,13,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-60fc-47aa-8027-6b5a34f4ac33',1,14,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6179-4fcd-ad0f-60e69974e9d9',1,15,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6222-4737-97cd-db32a71ee752',2,15,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-627f-453c-b5b5-d89835c5043c',3,15,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-62db-474d-b470-fbceba50c210',4,15,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6333-4062-8d83-1cbd949f4be4',5,15,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-639f-4b45-b0ae-fdd8b74d5085',1,16,1,'2024-11-12 05:46:23','2025-02-14 20:43:54'),('9d78a915-63f3-443d-8262-badf2e67f3c4',2,16,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-646f-4561-ade3-a73bbdb16713',1,17,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-64d4-4943-81ad-af49e3f2143d',2,17,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-652c-4be1-b4ff-51d22d64f683',3,17,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-65a9-4e1b-9c07-a0e440f5c135',1,18,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-65ff-461e-9770-698265e20d02',2,18,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-684e-4df9-9700-9aba52a85e63',1,20,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-68a0-4c48-a1de-a37bff206a32',2,20,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-68ea-47ae-af4a-08ee7b654542',3,20,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6959-42c5-b887-2128b76b4fb6',4,20,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-69ab-4503-bd23-73577043e576',5,20,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-69fd-4452-8371-6f0f7b95f64e',7,20,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6a67-496b-935e-7507adc1764c',1,21,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6aca-4972-8025-dd815d784ebe',1,22,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6b17-4ca1-baab-a8b460917000',2,22,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6b64-445f-ba72-297080cc65ea',3,22,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6bb9-4023-9727-3eceaa88fc23',4,22,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6c0c-46b6-92f0-8ec0f9770e1d',5,22,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6c68-4fe0-9266-12767766004d',7,22,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6cd6-488a-a6df-4344ee7007f0',1,23,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6d32-4213-b271-a05d2365dfc8',2,23,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6db8-4854-97fd-c3e9cbe5c59d',3,23,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6e0e-4f93-bad5-2a871dfa5e2d',4,23,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6e75-424e-9469-ecb8e2c2de98',1,24,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6eca-4f34-aeca-1cf40d9e2136',2,24,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6f2e-4fda-a386-9e33d3d785df',3,24,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6f87-4a3c-9b05-1c64c55ac5e8',4,24,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-6ffd-47c0-835f-f93302a5f6df',1,25,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-704b-4610-8754-09135fd025b1',2,25,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7098-4bfb-8f5a-3c1124d213a0',3,25,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-70e4-40d3-9a13-5acac14544aa',4,25,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7135-4d7f-a0bf-ec793755c911',5,25,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-71a6-4480-9238-6145f9c869d8',7,25,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7216-4242-8aa8-928e15c28e5d',1,26,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7266-4485-a7b9-c6164a2ab418',2,26,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-72b6-4788-ba6a-9bca6cbb46a1',3,26,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7305-40df-a886-ddcac6632b9b',4,26,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-736a-46da-843b-971948f74230',5,26,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-73db-4c48-83e3-aadf604de90d',1,27,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7439-47c9-9c91-ab03ea6e4575',2,27,1,'2024-11-12 05:46:23','2025-02-14 12:18:22'),('9d78a915-7490-4d1d-811d-725f51819d1d',3,27,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-74e3-47ef-a719-eaec0361dd74',4,27,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-752f-49fb-aa71-e5aa003bd418',5,27,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7581-4b94-8345-2bddec429819',7,27,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-75e5-4263-8168-359a07ae1362',1,28,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-764b-4cc4-8d12-74d1dc717b04',1,29,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-769f-41c5-a2e6-ed5e67ac9e4e',2,29,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-76f9-4e85-b6e4-fed652b3482e',3,29,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7759-4c92-b80f-2f955d37b263',4,29,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-77ca-4c41-8c1c-7e706ea33360',1,30,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-781d-4625-8577-838db7e39297',2,30,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7868-46cb-bd52-d9f7a8c1defa',3,30,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-78cd-4058-a68e-b68d4e1cc11f',1,31,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-793c-424c-acb7-d34ec1ccd2cf',1,32,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7990-4cfb-94d0-96237e3842f0',2,32,1,'2024-11-12 05:46:23','2025-02-14 20:10:10'),('9d78a915-79dc-4e3a-b8df-5c8ca9eb3c76',3,32,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7a2b-4866-b936-3381f2934930',4,32,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7a78-43a6-af7d-f7f1f11579a8',5,32,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7ae3-4cd9-9570-d81fa8ae032d',1,33,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7b30-4dcb-92f9-8a2f64f4d055',2,33,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7b7a-4c99-b6e3-5f10cd97ff1f',3,33,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7bc4-4627-8be7-6deb67aa1fc5',4,33,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7c45-4bcb-9426-80940a37e966',1,34,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7c96-4f16-9f9d-2770904fffa6',2,34,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7d03-4f0e-89cf-98dce9694f59',1,35,1,'2024-11-12 05:46:23','2025-02-14 12:13:45'),('9d78a915-7d51-4c5f-9c25-3337f58b9852',2,35,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7d99-4448-867c-c3fc1d2f0689',3,35,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7de7-452c-bd88-9b69c779d0c1',4,35,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7e34-4160-b128-f192aae029d8',5,35,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7e92-427c-a9c5-708477a2fb82',1,36,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7ee9-4f3f-b6c2-f65409257c51',2,36,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7f3f-4b27-8895-1b7388f5d31c',3,36,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-7fb2-4ee1-9be4-66bf50324d45',1,37,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8006-4b08-a939-43d61a0c1de7',2,37,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-805e-4d71-be2c-99f37f05f0b6',3,37,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-80c9-46f3-b4c5-6171a0208f11',4,37,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8126-460b-bf69-bf9836bacf2f',5,37,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8175-4e5c-8b1a-a6f8f7152e2d',7,37,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-81e7-42d1-b428-e6c66143e3d9',1,38,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8253-43ac-9085-76aa5ee4fd90',1,39,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-82b3-49bf-86b5-3524238c770b',2,39,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-82fd-453e-ba1c-881ebd362a27',3,39,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-835e-4c83-9f0c-e09799145260',1,40,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-83b1-4e74-b328-fc56eaeb0b27',2,40,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8408-4bc7-ac2e-19311e672e9a',3,40,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8453-4005-a908-01bd64af6b37',4,40,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-84a3-4466-bcf8-13570bd63da6',5,40,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-84f1-431c-b28e-47a65eee6c15',7,40,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-855d-4329-a318-5e913e839b07',1,41,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-85c3-445f-a239-3bc586cf71bc',2,41,1,'2024-11-12 05:46:23','2025-02-14 20:10:30'),('9d78a915-8623-4d9e-8cf7-44429a98d4d6',3,41,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-866e-4a92-bce2-649c90a4798d',4,41,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-86b9-4340-b354-32e1258f70db',5,41,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8724-43b2-9d8d-e6928fbbee5c',1,42,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-87a0-4f0c-b9fb-c47d7695711e',1,43,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8800-4879-b3cc-ef698f80807d',2,43,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-886f-4ae1-8e4f-ee86aed8b652',3,43,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-88da-44a7-bde0-0970a43d76cb',4,43,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-895b-4903-a704-45a521e70762',1,44,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-89da-4d5c-a69c-6e55afc442ce',1,45,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8a4b-4ccf-94c0-b2d17da91abb',2,45,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8ab8-4831-a469-3f317621ea2f',3,45,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8b4b-47ec-a2f7-b5c6a275a078',1,46,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8be7-4489-8689-ff42edf05f1d',2,46,1,'2024-11-12 05:46:23','2025-02-14 20:09:29'),('9d78a915-8c62-4a84-a3bc-b16463f3cd89',1,47,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8cba-4513-aac6-e961925c7a44',2,47,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8d0d-4720-af94-12ecfec5b193',3,47,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8d5f-404c-b5db-fcc20bca0408',4,47,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8db3-42ba-8289-43e5041fc384',5,47,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8dff-4745-a2e7-a427252cb888',7,47,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8e68-443d-a0bb-f9f23779738f',1,48,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8eb7-4a41-9f27-248f0a8e012e',2,48,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8f00-4de6-84c7-ae1fe7c5f621',3,48,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8f4b-44d7-babd-a0f2929bbde5',4,48,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8f96-454d-8e82-9cfbf43b4ac1',5,48,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-8fe2-421c-af8c-353d59cdb798',7,48,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-905b-4b5e-99b6-25541f34e13e',1,49,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-90d0-4d0d-b0d0-7da31fb74003',1,50,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-912e-4f6c-bc6b-3319f8160083',2,50,1,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-917e-45f4-b22a-c3f30687f9b6',3,50,0,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d78a915-91db-4dfc-81a7-a36e90b5e7a0',4,50,2,'2024-11-12 05:46:23','2024-11-12 05:46:23'),('9d7a64d7-4901-4b3f-89fd-ef69d8d6e756',7,35,0,'2024-11-13 02:27:14','2024-11-13 02:27:14'),('9d7a658b-4f94-48c6-869c-02cee422b61a',4,31,0,'2024-11-13 02:29:12','2024-11-13 02:29:12'),('9e36f57f-0e6e-47aa-a416-7b382aa610c3',2,52,1,'2025-02-14 20:07:21','2025-02-14 20:07:47'),('9e36f58d-086b-48cd-84d7-69a66a81e857',5,52,1,'2025-02-14 20:07:30','2025-02-14 20:07:50'),('9e36f7a2-7173-46d0-bb19-812dae93839b',2,38,0,'2025-02-14 20:13:20','2025-02-14 20:13:20'),('9e370872-2304-4e2a-b4f4-3f6c38983335',9,53,1,'2025-02-14 21:00:20','2025-02-14 21:00:50'),('9e370882-8516-4875-9ad8-c4ba568dd504',7,53,1,'2025-02-14 21:00:31','2025-02-14 21:01:04');
/*!40000 ALTER TABLE `keperluan_disabilitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keperluan_layanan`
--

DROP TABLE IF EXISTS `keperluan_layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `keperluan_layanan` (
  `keperluan_layanan_id` int unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int DEFAULT '0',
  PRIMARY KEY (`keperluan_layanan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keperluan_layanan`
--

LOCK TABLES `keperluan_layanan` WRITE;
/*!40000 ALTER TABLE `keperluan_layanan` DISABLE KEYS */;
INSERT INTO `keperluan_layanan` VALUES (1,'Kursi Roda',10),(2,'Alat Bantu Dengar',4),(3,'Tongkat Putih / Alat Bantu Navigasi',9),(4,'Tempat Tidur Khusus',10),(5,'Alat Komunikasi (AAC)',10),(7,'Psikiater',14),(9,'Tongkat Penyangga',13);
/*!40000 ALTER TABLE `keperluan_layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'0001_01_01_000000_create_users_table',1),(5,'0001_01_01_000001_create_cache_table',1),(6,'0001_01_01_000002_create_jobs_table',1),(7,'2024_11_10_133857_create_disabilitas_table',2),(8,'2024_11_10_133914_create_keperluan_disabilitas_table',2),(9,'2024_11_10_133947_create_keperluan_layanan_table',2),(10,'2024_11_10_134009_create_jenis_disabilitas_table',2),(11,'buat_keperluan_disabilitas',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('8IZmsaNhBVEAhcbVLk9YqorfMi2wgrqu6fG3vaHY',7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:135.0) Gecko/20100101 Firefox/135.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN0d6cnFIVG1LMmdSanNQRWNXMm4yclpDOXV5Rko2Y25YQ29oREVXTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo3O30=',1739592140),('CuTgvEqu56hZ5sYMi3PiacH86UelxIHR1l3QRwA0',5,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:135.0) Gecko/20100101 Firefox/135.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjVYQVlIM1U1UE5DWW05TGR1ZmlsTnM3cTJyRG5LUHJuZUZ3TnFiayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=',1739592037);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','petugas') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'petugas',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@example.com',NULL,'$2y$12$36/3U5ngCH0JTGaQobu6W.Eurjis3O1GsmwTsIwBzEXIjf/2yqgqy','admin',NULL,NULL,NULL),(5,'petugas2','petugas@example.com',NULL,'$2y$12$cjHTVpbwwI0hEoKmyjrIG.EfihkVQFaaoFZGvGSoZhzWoXW1UVWyq','petugas',NULL,'2024-11-10 04:18:21','2024-11-10 04:18:21'),(6,'cihuy ubah','cihuy@gmail.com',NULL,'$2y$12$15miQ4KmYOIEgRzPMrMxv.bVJG9QuOSxQG.QZCKOvsTQBsGggXDR6','admin',NULL,'2024-11-10 05:05:43','2024-11-10 05:20:33'),(7,'coba tambah','cekekkk@gmail.com',NULL,'$2y$12$zlUlvAvv/MW.t7A73kqyW.BurJKz8WxAIArvl5x/po2r1iV.H3eM6','admin',NULL,'2024-11-10 05:26:11','2024-11-10 05:26:11');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sahabat_difabel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-15 11:04:50
