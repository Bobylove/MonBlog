--
-- DbNinja v3.2.6 for MySQL
--
-- Dump date: 2017-04-06 21:42:54 (UTC)
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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `counts_comment` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publier` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Data for table: comments
--
LOCK TABLES `comments` WRITE;
ALTER TABLE `comments` DISABLE KEYS;

INSERT INTO `comments` (`id`,`content`,`user_id`,`post_id`,`created_at`,`updated_at`) VALUES (58,'TASTY',20,75,'2017-04-06 17:36:06','2017-04-06 17:36:06'),(59,'salut !',20,80,'2017-04-06 20:21:35','2017-04-06 20:21:35'),(61,'sa marche gros',47,80,'2017-04-06 20:25:03','2017-04-06 20:25:03'),(62,'test heur',20,80,'2017-04-06 20:40:44','2017-04-06 20:40:44'),(63,'wé !',20,80,'2017-04-06 20:48:13','2017-04-06 20:48:13'),(64,'hey',20,80,'2017-04-06 21:52:13','2017-04-06 21:52:13'),(65,'dd',20,80,'2017-04-06 22:52:33','2017-04-06 22:52:33'),(66,'nice',20,80,'2017-04-06 22:53:26','2017-04-06 22:53:26'),(67,'trop cool',20,80,'2017-04-06 23:06:36','2017-04-06 23:06:36');

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

INSERT INTO `posts` (`id`,`name`,`slug`,`content`,`counts_comment`,`user_id`,`created_at`,`updated_at`,`publier`) VALUES (75,'Bruschetta (Italie)','bruschetta-italie','Temps de préparation : 15 minutes\r\nTemps de cuisson : 0 minutes\r\nIngrédients (pour 4 personnes) :\r\n- 8 tranches de pain de campagne un peu épaisses\r\n- 8 tomates de la variété \'Roma\' (forme allongée)\r\n- 2 cuillères à soupe d\'huile d\'olive\r\n- sel\r\n- 1 gousse d\'ail\r\nPréparation de la recette :\r\nDécouper les tomates en petits dés après avoir retiré la partie verte en haut, les mettre dans un petit saladier avec une bonne huile d\'olive et du sel.\r\nFaire griller les tranches de pain de campagne, puis les frotter d\'ail. \r\nDisposer le mélange tomate/huile d\'olive généreusement sur la tartine, à déguster aussitôt (tiède).',1,20,'2017-04-06 17:35:36','2017-04-06 20:21:16',1),(76,'Ramequins fondants au chocolat','ramequins-fondants-au-chocolat','Temps de préparation : 10 minutes\r\nTemps de cuisson : 12 minutes\r\nIngrédients (pour 4 personnes) :\r\n- 120 g de chocolat noir + 8 carrés (5 g)\r\n- 3 oeufs\r\n- 80 g de sucre semoule\r\n- 35 g de beurre doux\r\n- 1 cuillère à soupe de farine\r\nPréparation de la recette :\r\nPréchauffez le four à 210°C (thermostat 7).\r\nFaites fondre dans une casserole le chocolat et le beurre, en remuant régulièrement pour former une pâte homogène et onctueuse.\r\nDans un saladier, mélangez les oeufs, le sucre et la farine.\r\nIncorporez la préparation chocolatée et mélangez.\r\nVersez 1/3 de la préparation dans des ramequins individuels. \r\nDéposez deux carrés de chocolat dans chacun des 4 ramequins, puis recouvrez-les avec le reste de la préparation chocolatée.\r\nPlacez les ramequins au four pendant environ 12 minutes, pas plus!',0,20,'2017-04-06 17:38:26','2017-04-06 17:38:26',1),(77,'Meringue pour les nuls','meringue-pour-les-nuls','Temps de préparation : 5 minutes\r\nTemps de cuisson : 60 minutes\r\nIngrédients (pour 20 pièces) :\r\n- 4 blancs d\'oeufs\r\n- 250 g de sucre semoule\r\nPréparation de la recette :\r\nQuelques trucs pour bien réussir ces meringues : sortir les oeufs du réfrigérateur un quart d\'heure avant de les utiliser.\r\nNe surtout pas mélanger de jaunes aux blancs d\'oeuf.\r\nAjouter une pincée de sel avant de battre les blancs en neige.\r\nUtiliser un récipient plus haut que large et utiliser un batteur électrique (bien plus rapide et moins fatiguant)! On peut commencer :\r\nBattre les blancs d\'oeuf en neige ferme.\r\nAjouter le sucre par petites quantités tout en continuant de battre.\r\nPréchauffer le four à 120°C (thermostat 4).\r\nDéposer immédiatement de petits tas de meringue sur une plaque de four préalablement recouverte de papier sulfurisé.\r\nCuire entre 30 minutes et 1 heure à 120°C.\r\nAu bout de 30 minutes, on obtient des meringues blanches et moelleuses.\r\nAu bout d\'1 heure, on obtient des meringues rosées, craquantes et fondantes avec un coeur moelleux.\r\nUne fois cuites, décoller les meringues délicatement dès la sortie du four et laisser refroidir sur une grille.',0,20,'2017-04-06 17:39:43','2017-04-06 17:39:43',1),(78,'Kanban (développement)','kanban-developpement','Kanban est une méthode de gestion des connaissances relatives au travail, qui met l’accent sur une organisation de type Juste-à-temps en fournissant l\'information ponctuellement aux membres de l\'équipe afin de ne pas les surcharger. Dans cette approche, le processus complet de l\'analyse des tâches jusqu’à leur livraison au client est consultable par tous les participants, chacun prenant ses tâches depuis une file d\'attente.\r\n\r\nDans le cadre du développement logiciel, Kanban peut être un système visuel de gestion des processus qui indique, quoi produire, quand le produire et en quelle quantité ; cette approche est directement inspirée du système de production de Toyota et des méthodes « lean ».\r\n\r\nDans le développement de logiciel, un système Kanban virtuel est utilisé afin de limiter les tâches-en-cours. Bien que le nom Kanban provienne du japonais, qu’il puisse être traduit comme \"carte de signalisation\", et que l’on utilise des cartes dans la plupart des mises en application de Kanban au développement de logiciel, ces cartes ne fonctionnent pas comme des signalisations dont on se servirait pour tirer plus de travail. Elles représentent des éléments de travail.\r\n\r\nLa méthode Kanban telle qu’énoncée par David J. Anderson1,2, est une approche augmentée et évolutive des changements de processus et de systèmes au sein des organisations. Elle emploie un système de tirage limité de tâches-en-cours comme mécanisme central, afin de déterminer les processus du système et stimuler la collaboration dans le but d’une amélioration continue du système.\r\n\r\nsource ( https://fr.wikipedia.org/wiki/Kanban_(d%C3%A9veloppement)',0,20,'2017-04-06 17:41:46','2017-04-06 17:41:46',1),(79,'Méthodes agiles','methodes-agiles','Les méthodes agiles sont des groupes de pratiques de pilotage et de réalisation de projets. Elles ont pour origine le manifeste Agile, rédigé en 2001, qui consacre le terme d\'« agile » pour référencer de multiples méthodes existantes.\r\n\r\nLes méthodes agiles se veulent plus pragmatiques que les méthodes traditionnelles. Elles impliquent au maximum le demandeur (client) et permettent une grande réactivité à ses demandes.\r\n\r\nLes méthodes agiles reposent sur un cycle de développement itératif, incrémental et adaptatif. Elles doivent respecter quatre valeurs fondamentales déclinées en douze principes desquels découlent une base de pratiques, soit communes, soit complémentaires.\r\n\r\nLes méthodes pouvant être qualifiées d\'agiles, depuis la publication de l\'agile manifesto, sont le RAD (développement rapide d\'applications) (1991) avec DSDM, la version anglaise du RAD (1995) ainsi que plusieurs autres méthodes, comme ASD ou FDD qui reconnaissent leur parenté directe avec RAD. Les deux méthodes agiles désormais les plus utilisées sont : la méthode Scrum qui fut présentée en 1995 par Ken Schwaber1puis publiée en 2001 par lui-même et Mike Beedle pour enfin être diffusée mondialement par Jeff Sutherland ainsi que la méthode XP Extreme programming publiée en 1999 par Kent Beck. Ces deux méthodes sont d\'ailleurs techniquement complémentaires dans le cas d\'un projet de développement de SI, XP proposant alors les techniques d\'obtention de la qualité du code.',0,20,'2017-04-06 17:42:26','2017-04-06 17:42:26',1),(80,'Laravel','laravel','Laravel est un framework web open-source écrit en PHP respectant le principe modèle-vue-contrôleur et entièrement développé en programmation orientée objet. Laravel est distribué sous licence MIT, avec ses sources hébergées sur GitHub.\r\nLaravel a été créé par Taylor Otwell en juin 20113.\r\n\r\nLe référentiel Laravel/laravel présent sur le site GitHub contient le code source des premières versions de Laravel. À partir de la cinquième version, le framework est développé au sein du référentiel Laravel/framework.\r\n\r\nEn peu de temps, une communauté d\'utilisateurs du framework s\'est constituée, et il est devenu en 2016 le projet PHP le mieux noté de GitHub\r\n\r\nLa version 5.0 de Laravel nécessite au minimum PHP 5.45 et son installation est basée sur le gestionnaire de paquets Composer.\r\n\r\nLaravel fournit des fonctionnalités en termes de routage de requête, de mapping objet-relationnel (un système baptisé Eloquent implémentant Active Record), d\'authentification, de vue (avec Blade), de migration de base de données, de gestion des exceptions et de test unitaire.\r\n\r\nL\'équipe Laravel propose également un micro-framework plus léger, Lumen.\r\n\r\nDepuis la version 5.3, Laravel nécessite PHP 5.6 au minimum.\r\n\r\nsources ( https://fr.wikipedia.org/wiki/Laravel   ,  https://laravel.com/)',8,20,'2017-04-06 17:44:31','2017-04-06 23:06:36',1);

ALTER TABLE `posts` ENABLE KEYS;
UNLOCK TABLES;
COMMIT;

--
-- Data for table: users
--
LOCK TABLES `users` WRITE;
ALTER TABLE `users` DISABLE KEYS;

INSERT INTO `users` (`id`,`username`,`email`,`password`,`remember_token`,`is_admin`,`created_at`,`updated_at`,`firstname`,`lastname`,`avatar`) VALUES (20,'salut','fredo@gmail.com','$2y$10$1yUsIgfJVdhFRqr.Appih.lKPqTIOfXdKv6D0mrNDOWgJE11mjU22','l0VyZqgKa7foTMJZhbu6l2dWhRwKsssZJThszSr0k806m5ZYf3wvq9PuPrwa',1,'2017-03-29 16:18:03','2017-04-06 23:16:49','Fredo','delon',NULL),(44,NULL,'guest2@gmail.com','$2y$10$ANhI0qPInAGzYc1SRpYkB.Z44c7rvorsuPUuyMtjRh5ksXxxFbUvW','whIOxKE6KRnIeFZ4wT6q0zVWbvi2bcLT1QqdslFnGW8LOjziMX5Ov5LUuwMF',0,'2017-04-04 09:27:26','2017-04-06 20:23:23','boby','dylan',NULL),(47,NULL,'dany@gmail.com','$2y$10$5o6gNTRzALcDbGs4qfEN3OO44OjJLU3a..sFaw.ISTCI2j7C8Ucwu','huWcwZzYFwF0Petve6fd6z98y2rdrjngmvaiYN3dx35uINQusADcyw3eH1MZ',0,'2017-04-06 20:24:05','2017-04-06 22:25:37','Dany','lambi',NULL);

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

