--
-- DbNinja v3.2.6 for MySQL
--
-- Dump date: 2017-04-04 15:38:14 (UTC)
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- Database: articles
--

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

CREATE DATABASE `articles` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `articles`;

--
-- Structure for table: comments
--
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Structure for table: migrations
--
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Structure for table: password_resets
--
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Structure for table: posts
--
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `counts_comment` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publier` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Structure for table: users
--
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` longblob,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Data for table: comments
--
LOCK TABLES `comments` WRITE;
ALTER TABLE `comments` DISABLE KEYS;

INSERT INTO `comments` (`id`,`content`,`user_id`,`post_id`,`created_at`,`updated_at`) VALUES (39,'Salut tu gere!',20,43,'2017-04-03 12:34:39','2017-04-03 12:34:39'),(47,'nice :',44,43,'2017-04-04 09:27:41','2017-04-04 09:27:41'),(49,'plop',20,49,'2017-04-04 10:25:31','2017-04-04 10:25:31'),(50,'yeah',20,48,'2017-04-04 10:28:50','2017-04-04 10:28:50'),(51,'GG',20,44,'2017-04-04 11:18:14','2017-04-04 11:18:14'),(52,'hey !!',20,50,'2017-04-04 14:51:30','2017-04-04 14:51:30');

ALTER TABLE `comments` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: migrations
--
LOCK TABLES `migrations` WRITE;
ALTER TABLE `migrations` DISABLE KEYS;

INSERT INTO `migrations` (`id`,`migration`,`batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_03_27_120438_posts',1),(4,'2017_03_27_120552_comments',1),(5,'2017_03_27_120735_categories',1);

ALTER TABLE `migrations` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: password_resets
--
LOCK TABLES `password_resets` WRITE;
ALTER TABLE `password_resets` DISABLE KEYS;

-- Table contains no data

ALTER TABLE `password_resets` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: posts
--
LOCK TABLES `posts` WRITE;
ALTER TABLE `posts` DISABLE KEYS;

INSERT INTO `posts` (`id`,`name`,`slug`,`content`,`counts_comment`,`user_id`,`created_at`,`updated_at`,`publier`) VALUES (43,'Mon tout 1er article :)))','mon-tout-1er-article','Voici l\'avancement des mon projet ! \r\nserais - ce une progression pour moi ? \r\noui !',2,20,'2017-04-03 12:32:50','2017-04-04 14:51:21',1),(44,'Mon 2ème !','mon-2eme','haha il est vraiment trop cool !',1,20,'2017-04-03 12:33:27','2017-04-03 12:37:21',1),(45,'Le numéro 3 !','le-numero-3','et oui jamais deux sans trois !',1,20,'2017-04-03 12:33:50','2017-04-04 07:51:10',1),(46,'Et le petit 4ème !','et-le-petit-4eme','Par gourmandise :!',0,20,'2017-04-03 12:34:19','2017-04-03 12:34:19',1),(47,'bananne jaune','bananne-jaune','cqscqscqscsq',0,20,'2017-04-04 08:01:09','2017-04-04 08:01:09',1),(48,'bananne vert','bananne-vert','cqscqscqscsq',1,20,'2017-04-04 08:01:15','2017-04-04 10:28:50',1),(49,'bananne rouge','bananne-rouge','cqscqscqscsq',1,20,'2017-04-04 08:01:22','2017-04-04 10:25:31',1),(50,'Encore une test','encore-une-test','plop la vie c bf',1,20,'2017-04-04 10:29:08','2017-04-04 14:51:30',1);

ALTER TABLE `posts` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: users
--
LOCK TABLES `users` WRITE;
ALTER TABLE `users` DISABLE KEYS;

INSERT INTO `users` (`id`,`username`,`email`,`password`,`remember_token`,`is_admin`,`created_at`,`updated_at`,`firstname`,`lastname`,`avatar`) VALUES (20,'salut','fredo@gmail.com','$2y$10$1yUsIgfJVdhFRqr.Appih.lKPqTIOfXdKv6D0mrNDOWgJE11mjU22','orK6YxQ14FzZoUgqIy5DyF2Py79VAbQ4qGKMfxik3bLKGSaBoza4FMIbMXkX',1,'2017-03-29 16:18:03','2017-04-04 16:51:42','Fredo','delon',NULL),(44,NULL,'guest2@gmail.com','$2y$10$ANhI0qPInAGzYc1SRpYkB.Z44c7rvorsuPUuyMtjRh5ksXxxFbUvW','whIOxKE6KRnIeFZ4wT6q0zVWbvi2bcLT1QqdslFnGW8LOjziMX5Ov5LUuwMF',0,'2017-04-04 09:27:26','2017-04-04 11:29:01','boby','dylan',NULL);

ALTER TABLE `users` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

