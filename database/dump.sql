-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: elsaraf_dashboard
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `about_site`
--

DROP TABLE IF EXISTS `about_site`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_site` (
  `id` int NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `terms` text COLLATE utf8mb4_unicode_ci,
  `privacy_policy` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_site`
--

LOCK TABLES `about_site` WRITE;
/*!40000 ALTER TABLE `about_site` DISABLE KEYS */;
INSERT INTO `about_site` VALUES (1,'<p style=\"text-align: justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>','<p style=\"text-align: justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>','<p style=\"text-align: justify;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<p style=\"text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humours.</p>',NULL,NULL);
/*!40000 ALTER TABLE `about_site` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` int DEFAULT NULL,
  `support` int DEFAULT NULL,
  `promo` int DEFAULT NULL,
  `message` int DEFAULT NULL,
  `deposit` int DEFAULT NULL,
  `settlement` int DEFAULT NULL,
  `transfer` int DEFAULT NULL,
  `request_money` int DEFAULT NULL,
  `donation` int DEFAULT NULL,
  `single_charge` int DEFAULT NULL,
  `subscription` int DEFAULT NULL,
  `merchant` int DEFAULT NULL,
  `invoice` int DEFAULT NULL,
  `charges` int DEFAULT NULL,
  `store` int DEFAULT NULL,
  `blog` int DEFAULT NULL,
  `bill` int DEFAULT NULL,
  `vcard` int DEFAULT NULL,
  `crypto` int DEFAULT NULL,
  `remember_token` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'','','$2y$10$gJ55pI6ziCGWsupNpPIVeeN7WfWw5nGr2elYHhBfFwYsylTc7sRrO','admin',1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,'Nlt9rOzCN7HKsOqNsTcAgjH0qPT3hZvVP4ix4yzuXkoQzUlayDEVIzyhCKqR',NULL,NULL);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_bank`
--

DROP TABLE IF EXISTS `admin_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_bank` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `swift` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iban` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acct_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_bank`
--

LOCK TABLES `admin_bank` WRITE;
/*!40000 ALTER TABLE `admin_bank` DISABLE KEYS */;
INSERT INTO `admin_bank` VALUES (1,'Boomchart','Boomchart bank','Somewhere in uk','5444','5678876','12345678982',1,NULL,NULL);
/*!40000 ALTER TABLE `admin_bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audit_logs`
--

DROP TABLE IF EXISTS `audit_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `audit_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `trx` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=572 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audit_logs`
--

LOCK TABLES `audit_logs` WRITE;
/*!40000 ALTER TABLE `audit_logs` DISABLE KEYS */;
INSERT INTO `audit_logs` VALUES (1,11,'VG7katZFPIv9HnOE','Started Transfer request',NULL,NULL),(2,11,'Bt5mrUzYb95Goo1u','Started Transfer request',NULL,NULL),(3,11,'W2W0A0ltHEzEmh3F','Transfered $10 to user22@test.com',NULL,NULL),(4,27,'xm9Z1EKDZNLOo3VN','Created payment link Customization services',NULL,NULL),(5,11,'V7j9Tes0S5mqzGzH','Created payment link -  E bank customization',NULL,NULL),(6,11,'IXt7hyCR4gwtD6Ys','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(7,11,'BoRFrqLxsZvZftMC','You just received payment for VqoMNcuujF02vI5z',NULL,NULL),(8,11,'fFsbvhXqsui1OHv7','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(9,11,'WCW7Ej1ZtxeHtOGn','You just received payment for VqoMNcuujF02vI5z',NULL,NULL),(10,11,'1dLTQxKSSvCdEv4U','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(11,11,'9SF4z9P2KcoMUVhZ','You just received payment for VqoMNcuujF02vI5z',NULL,NULL),(12,11,'uxYcwqE3PiRrRq4t','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(13,11,'AUAW0SN3WhpAGSqR','You just received payment for VqoMNcuujF02vI5z',NULL,NULL),(14,11,'TMSS0IC0FVYPjkSk','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(15,11,'gIOs0sBxCat93U0D','You just received payment for VqoMNcuujF02vI5z',NULL,NULL),(16,11,'b51uDOLLtIOQe5gW','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(17,11,'NgUZP7b9vxwHTsP2','Received payment for Payment LinkVqoMNcuujF02vI5z',NULL,NULL),(18,11,'SLeq1h6fvXzttPY6','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(19,11,'jeFWOICFUEQ8giFK','Received payment for Payment LinkVqoMNcuujF02vI5z',NULL,NULL),(20,11,'qo3zV3Ry1GSwz5vn','Payment for VqoMNcuujF02vI5z was successful',NULL,NULL),(21,11,'tTURugFcXNaUroPG','Received payment for Payment LinkVqoMNcuujF02vI5z',NULL,NULL),(22,11,'sMP342ZO0qT6N1K0','Created Donation Page -  Lumen Water Business',NULL,NULL),(23,11,'LrbTqKwRtJv5FM5Z','Donation for 1cf81JY3s3PEIb56 was successful',NULL,NULL),(24,11,'f2yiC7zts92sOamh','Received Donation for Payment Link1cf81JY3s3PEIb56',NULL,NULL),(25,11,'j4mdozZSlLo9d06V','Donation for 1cf81JY3s3PEIb56 was successful',NULL,NULL),(26,11,'ZsjypbbFVzq9ha2W','Received Donation for Payment Link1cf81JY3s3PEIb56',NULL,NULL),(27,11,'qRtoeQMjd9pl4qbs','Donation for 1cf81JY3s3PEIb56 was successful',NULL,NULL),(28,11,'27rEu3dD9L5U1ul6','Received Donation for Payment Link1cf81JY3s3PEIb56',NULL,NULL),(29,11,'9GKpom4rAiGZL9ev','Donation for 1cf81JY3s3PEIb56 was successful',NULL,NULL),(30,11,'Rwwd35bJoMrYcVUX','Received Donation for Payment Link1cf81JY3s3PEIb56',NULL,NULL),(31,11,'bCrWL11wEUX3bEKS','Donation for 1cf81JY3s3PEIb56 was successful',NULL,NULL),(32,11,'zpfKLFmJAUtA7JpU','Received Donation for Payment Link1cf81JY3s3PEIb56',NULL,NULL),(33,11,'R90f8XUgT8vPst9h','Created Donation Page -  Oh Ramona project',NULL,NULL),(34,11,'LNlURj5FodbfT4Tg','Created Donation Page -  Oh Ramona project',NULL,NULL),(35,11,'iBAVOhCAU8yQ526g','Donation for oUl1fw2faM8LtOhG was successful',NULL,NULL),(36,11,'Zmhp9nXbGTSK0NDP','Received Donation for Payment LinkoUl1fw2faM8LtOhG',NULL,NULL),(37,11,'W78Cj6wt3XWW0sHJ','Donation for oUl1fw2faM8LtOhG was successful',NULL,NULL),(38,11,'fWbaqDAv9SrHR6xu','Received Donation for Payment LinkoUl1fw2faM8LtOhG',NULL,NULL),(39,11,'3w5RBu7fWIczjlmD','Donation for oUl1fw2faM8LtOhG was successful',NULL,NULL),(40,11,'GWOFpCzJbUmOHkti','Received Donation for Payment LinkoUl1fw2faM8LtOhG',NULL,NULL),(41,11,'EyDYKji36tO46zcL','Started Transfer request',NULL,NULL),(42,11,'UKZ29u1yAFqfb0lz','Transfered $1000 to e@d.com',NULL,NULL),(43,11,'Tpxmk64hEjEiIpBT','Created Plan -  Boompay',NULL,NULL),(44,11,'FIedOco4tiM094YV','Created Plan -  Apple Music',NULL,NULL),(45,11,'fdIuTNgHt0D6Vq7G','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(46,11,'dV8WjZBC4NfWImbL','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(47,11,'m9S73umaQ6EDHqYR','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(48,11,'FwYMgvmN5myyUJYU','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(49,11,'Tz7WnakzZi1ChdL9','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(50,11,'eEADELk91F9AXvpq','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(51,11,'Yt4cbfR7VAB11Sjv','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(52,11,'MW3j7F8h5WmLQgbT','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(53,11,'1N1N724vqcT2qLmz','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(54,11,'iZnHUntBWSqoFRWa','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(55,11,'tXNl6ZXeuxRHT2OJ','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(56,11,'8Ln3x1QvjG3NTgmD','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(57,11,'pEPI49amKNSEjbP5','Updated account details',NULL,NULL),(58,11,'Aoy7s5Bc9m7lv92k','Updated account details',NULL,NULL),(59,11,'oKRgz1zWcMU7CtFC','Updated account details',NULL,NULL),(60,11,'3mFc4zrjlUAXEmwQ','Updated account details',NULL,NULL),(61,11,'vq0S9VYHxm3Xtv77','Updated account details',NULL,NULL),(62,11,'tRW9sMJPBir7jDIL','Updated account details',NULL,NULL),(63,11,'SRtoWzhTdl203Qhh','Updated account details',NULL,NULL),(64,11,'O8bACpC2XM2AHNJ5','Updated account details',NULL,NULL),(65,40,'92CNpTPzHOnsYF6z','Logged out - ::1',NULL,NULL),(66,11,'BsDREVVGJq25cDkY','Created Funding Request of 100NGN via Flutterwave',NULL,NULL),(67,11,'MzBui8XjBOLkTyWG','Created Funding Request of 1000NGN via Paystack',NULL,NULL),(68,11,'UEDXOSEHlylYnEuB','Created Funding Request of 1000NGN via Flutterwave',NULL,NULL),(69,11,'65cfVrkZH90Ya4Zc','Created Funding Request of 1000NGN via Flutterwave',NULL,NULL),(70,11,'KkPpLdapS70SAnns','Created Funding Request of 1000NGN via Perfect Money',NULL,NULL),(71,11,'9ezEk3FMitHAEkiP','Created Funding Request of 1000NGN via Skrill',NULL,NULL),(72,11,'qPwdMBXJmLjdRa0f','Created Funding Request of 300NGN via Flutterwave',NULL,NULL),(73,11,'qs3m45r3dvKqxyDg','Created Funding Request of 1000NGN via Paystack',NULL,NULL),(74,11,'p456h1G6a6hfN2TW','Created Funding Request of 10000NGN via Paystack',NULL,NULL),(75,11,'tDWjjKeGFVx5VROS','Created Funding Request of 1000NGN via Paystack',NULL,NULL),(76,11,'bZIqKAXsswgsiCSb','Created Funding Request of 1000NGN via Voguepay',NULL,NULL),(77,11,'B6aceETK7fp9V1NW','Created Funding Request of 2000NGN via Stripe',NULL,NULL),(78,11,'8H1o7CtMc3fVQJ8t','Created Funding Request of 4000NGN via Flutterwave',NULL,NULL),(79,11,'EcmBXUkZyZuuDv7Z','Created Funding Request of 1000NGN via Paystack',NULL,NULL),(80,11,'1mTgbXOljHoTDsO7','Created Funding Request of 2000NGN via Stripe',NULL,NULL),(81,11,'kLzhjjvh5PxEGIvX','Created Funding Request of 2000NGN via Stripe',NULL,NULL),(82,11,'W2jU1gk0gPCXGUHs','Verified Funding Request of 2020NGN via Stripe',NULL,NULL),(83,11,'LOk5ORBzsPCregrL','Created Funding Request of 3000NGN via Stripe',NULL,NULL),(84,11,'coglW5k2mLTwU6Uu','Verified Funding Request of 3030NGN via Stripe',NULL,NULL),(85,11,'jTHHzWkWJ3b3yE2Z','Created Funding Request of 100NGN via Stripe',NULL,NULL),(86,11,'CCSaSPQJvnzMNtsz','Created Funding Request of 1000NGN via Paystack',NULL,NULL),(87,11,'nxx44WCIYHvJX6cM','Verified Funding Request of 2020NGN via Card',NULL,NULL),(88,11,'5hB7dDhSwwjEy9uI','Created Funding Request of 4000NGN via Card',NULL,NULL),(89,11,'0Jv8BGvkOtjRNkx4','Verified Funding Request of 4040NGN via Card',NULL,NULL),(90,11,'EmQQIoJRxJPzpRQZ','Created Payment Link -  Giftworld',NULL,NULL),(91,11,'VCqcGnZ0tbD4B9JG','Requested ₦20000 from support@boomchart.com.ng',NULL,NULL),(92,11,'mCNSopy0upqwpcVZ','Requested ₦20000 from support@boomchart.com.ng',NULL,NULL),(93,11,'6Z2lBCERfLTdGqqT','Requested ₦20000 from support@boomchart.com.ng',NULL,NULL),(94,11,'uJQb29gYspNcZMPq','Requested ₦3000 from support@boomchart.com.ng',NULL,NULL),(95,11,'TzmTI27CgK2CUwOn','Started Transfer request',NULL,NULL),(96,11,'0FZzGPFtrkV7WnUM','Transfered ₦1000 to support@boomchart.com.ng',NULL,NULL),(97,11,'jKsZP75wnh5XoTyg','Transfered ₦10000 to support@boomchart.com.ng',NULL,NULL),(98,11,'1Kl6SxgERg0vEAJo','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(99,11,'2PTZtWgAcXvHuTSf','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(100,11,'vSSDgSB6cLXqq06p','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(101,11,'5l56oUIC37jZvTEz','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(102,11,'jKxJFGBCE4iRu4QF','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(103,11,'M3kcP1Irgge2aDPD','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(104,11,'qNmp9Hd9sCR67cia','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(105,11,'mSGNkV0dMD2DfCGZ','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(106,11,'K9dLM4J9xu92f1PK','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(107,11,'YNRqJUcyyWDIPgjp','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(108,11,'7qP1J6bqeWYhlj8O','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(109,11,'ogdky15w8Ntewwuh','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(110,11,'womXN3X5HKY5fPeV','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(111,32,'24GCuWC2bLEZcBNx','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(112,11,'V1Av1j6Eh4STIcsf','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(113,11,'kOLhFkr0XujKEAyI','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(114,11,'zzGwwzrppOkrIRvg','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(115,11,'YTuea6eRkBVzpCH9','Created Donation Page -  Foster Home Care',NULL,NULL),(116,11,'hnl2nP2sQg7H0blM','Donation for fpuTgCuh3OaWiJTD was successful',NULL,NULL),(117,11,'ZZPdqZDltHrJVDkz','Received Donation for Payment LinkfpuTgCuh3OaWiJTD',NULL,NULL),(118,32,'zC0Jp6FET4sJphWc','Donation for fpuTgCuh3OaWiJTD was successful',NULL,NULL),(119,11,'UACRxaZFfx6PiAnd','Received Donation for Payment LinkfpuTgCuh3OaWiJTD',NULL,NULL),(120,32,'red7f5mSIiNOswhr','Donation for fpuTgCuh3OaWiJTD was successful',NULL,NULL),(121,11,'hUWDg5OAxEDHzXBB','Received Donation for Payment LinkfpuTgCuh3OaWiJTD',NULL,NULL),(122,11,'FzL65vva5TMkrKCR','Received Donation for Payment LinkfpuTgCuh3OaWiJTD',NULL,NULL),(123,11,'GfTs32CakQR3zhTm','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(124,11,'sgGjyhxNU5kW6k07','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(125,11,'IEhmCs4mWdd3ft2v','Donation for fpuTgCuh3OaWiJTD was successful',NULL,NULL),(126,11,'JLXEsrUFjZ7JZUht','Received Donation for Payment LinkfpuTgCuh3OaWiJTD',NULL,NULL),(127,11,'LYTJOSRQhQPzkmRT','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(128,11,'FpkzqX6Pq5NjGIbr','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(129,11,'ddPNzknYA7Ft6ivM','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(130,11,'M28sRhYtYfenD2hT','Created Donation Page -  Wild Life Conservation',NULL,NULL),(131,11,'EZEphE07kZanfuGE','Created Donation Page -  Pollution Degradation',NULL,NULL),(132,11,'bECmOYgcpubVn5WN','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(133,11,'Zl4bjK9fTX3e5fT3','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(134,11,'5sm3SlCfe91VdvAU','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(135,11,'evttBwSsEn9khTOc','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(136,11,'OoQmtz9EaQzlRQuz','Requested ₦50000 from support@boomchart.com.ng',NULL,NULL),(137,11,'R29SjdJS607f1yEz','Created Plan -  Cleaning service',NULL,NULL),(138,11,'nwDQ7zGgXKZk68Lz','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(139,11,'UPiEQGF9BnHID7dD','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(140,11,'6TvwK7LK19LnLP8A','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(141,11,'8gfp52MOj1gYogKQ','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(142,11,'gWLtE2cPIZrXn50G','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(143,11,'nYmq92V4PvvpcDdZ','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(144,32,'viWfq3SLkLLmjOXI','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(145,32,'upWrxHTZFkauBObS','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(146,32,'VPhWt3ZdSmSntulJ','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(147,11,'pUJmK1FwaanOj8lF','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(148,11,'qLOVvWhQRSy7li9C','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(149,11,'eqhtOVehwQcIX9LT','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(150,11,'AOI7o8DFYimIw0OT','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(151,32,'GeVxvGkgI5g7elQq','Payment for NiHCrzG209klLTzW was successful',NULL,NULL),(152,11,'eLqPwtUUhdX7JnQk','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(153,11,'erYcJ85xors2KfyY','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(154,11,'QuVurWxCsZGBfdpn','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(155,11,'ONKjoG6CfvGYacAA','Payment for CWlRsWg8epPeSt97 was successful',NULL,NULL),(156,11,'CX8OkjlbfqOXpZyj','Payment for 4XgznlZBZXXCUqlK was successful',NULL,NULL),(157,11,'RZuP4TksPOliikTr','Created Payment Link -  Febreze',NULL,NULL),(158,32,'eL2KIhXjdguQHFLr','Payment for mwbUixBFLuaJYlbc was successful',NULL,NULL),(159,11,'Ut5HrFBiUZPFqBvO','Received payment for Payment LinkmwbUixBFLuaJYlbc',NULL,NULL),(160,32,'LSnI7JB5XDVF8Y0G','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(161,11,'CcaE3iUyQdytIQPY','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(162,32,'NLv03MJJNxzFNCyF','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(163,11,'x3JXPGiFAG7Ljk4s','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(164,32,'06k0ocN3s6Ghhvq1','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(165,11,'9JnkGtrCOSDu2OZx','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(166,32,'Cww76vn07cBuyMZX','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(167,11,'i8L9LpT8JABczHK1','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(168,32,'W6ZMjgRxKqKDkwOe','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(169,11,'DCcWED2qGIWLSNm9','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(170,32,'AtHUPOIvuAvRRlfW','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(171,11,'lkVztHTlyfSks7S7','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(172,32,'9pldEPoQOuKhHhwW','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(173,11,'upupN5tJb0rvRF4B','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(174,32,'cZHaWjesXmrDo5Gx','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(175,11,'oRU1gHdJXfPNFb28','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(176,32,'G57P3FO9kaINJw6L','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(177,11,'yyMSGjZco7seGaJK','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(178,11,'Krcso6Hj73iPVifX','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(179,11,'l2wmGom12tCMcMMA','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(180,32,'GptMkyWluzEGdaV9','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(181,11,'y9N5IHgCM5B4VkJB','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(182,32,'2pBRhZqpteftkUI0','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(183,11,'hyJRqb6fcistY9Hu','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(184,32,'2ewBGcorh82xKZLI','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(185,11,'pb9ty8G6X54bfi3H','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(186,32,'ynXm65PY0KBGvaMI','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(187,11,'N8NzQdKSzfiMoGDF','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(188,32,'BZcG9DSdo5A1QsUV','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(189,11,'j7Zaw4RP1F1aY6fE','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(190,32,'YG7MBJ3jvJzpZhOC','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(191,11,'5N0BshpQnys6fqXx','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(192,32,'GysAS5yqpNAFWG1w','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(193,11,'HKNsQuBq08RCsLec','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(194,32,'2SzKjXW7qTSTSM9S','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(195,11,'zFHRNOk2fHHkyUju','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(196,32,'NuT1GvbvEsFdJD2F','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(197,11,'RJzORn7IlJYH4REs','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(198,32,'doY7UBJEIVAEQ2MW','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(199,11,'0jEuj99W8Fvby3XU','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(200,32,'BoXbRldGD8iXxbtj','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(201,11,'nSw3mqd932YkONK3','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(202,32,'zibGOwvgs3ZfiLTu','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(203,11,'ylY3wJ6K0v5hNBLz','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(204,32,'C1WQXoXmumnHDEj7','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(205,11,'E7cz0V4MBGwujq0E','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(206,32,'C8jwSoJscWXRzIyc','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(207,11,'oJGvjjvp7dVpEyZa','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(208,32,'o9cEOnkN1pG9Cvxx','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(209,11,'sO4vVTLuL46oJE3n','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(210,32,'MYL1IrgjNUoSQVcF','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(211,11,'ZIFRqOgCGUWS8myh','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(212,32,'OGADKFKUAfdiPMUd','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(213,11,'JYyrjLygnykpquuS','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(214,32,'66CinlZUfzJ5otvr','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(215,11,'8M4mWpmAurIlCOlw','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(216,32,'1N6SzTAipxS6I2rr','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(217,11,'0okojmBilrQyjSjY','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(218,32,'hiQq8nqAsXojuSus','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(219,11,'oBNxCTsKMV9VHhPX','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(220,32,'Uo5I3bOC9QDn5Fu3','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(221,11,'uwqel0Uqso1lYsvT','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(222,32,'YyiJiJ8WZDKrPPVB','Payment for owSaV7mXYdidocr1 was successful',NULL,NULL),(223,11,'Td2BxWwmyNCYshzm','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(224,11,'aKM228RrfYBJpxRn','Received payment for Payment LinkowSaV7mXYdidocr1',NULL,NULL),(225,32,'u0jZ73wKIBq71YD7','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(226,11,'vCmtt7W7ARD7hecO','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(227,32,'h5p0e1jEjFtDPe5t','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(228,11,'45oECO5QHfT0EXl7','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(229,32,'lWaDsJ9MtsjUlTdN','Donation for FCJBLZHPFRtKFrYN was successful',NULL,NULL),(230,11,'zvnQAz4DNk4nCjIi','Received Donation for Payment LinkFCJBLZHPFRtKFrYN',NULL,NULL),(231,11,'k2k0N1Yn1cyZ8daY','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(232,11,'IPmwejdo1bhL2gc0','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(233,32,'rhWXXfT5QY4pSRoJ','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(234,11,'5XD8Whn2hOf3IWzy','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(235,32,'l8i18gblm8h1zISZ','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(236,11,'uX0ATG6wfXRV1xRk','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(237,32,'TmxT5nhigjRF1RUN','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(238,11,'bCDJOsiBbMsPIHXW','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(239,32,'jiNDWUy32LqoGvGD','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(240,11,'cPK5IDPgDLOtZMZc','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(241,32,'VCZvQ9R5I6QcxRvb','Payment for mwbUixBFLuaJYlbc was successful',NULL,NULL),(242,11,'HzVeh15hiMGiiJZo','Received payment for Payment LinkmwbUixBFLuaJYlbc',NULL,NULL),(243,32,'4l0M4Bxei3ZxNUts','Payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(244,11,'eT3Fi4YIkDDfKuRr','Received payment for subscription #ksP4sVmZz0NhejBG - Apple Music was successful',NULL,NULL),(245,11,'XALzHI8J7sJKQHVg','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(246,11,'YoHZcEPL8jfMsXfh','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(247,11,'nf1UVIF59WEjUkxs','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(248,11,'aonejjhTSsGp2KcD','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(249,11,'4bQkDnuS5vXUoEdf','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(250,11,'YfHFqH8CipBDwa7i','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(251,11,'cIXrAEVAYAMGWNqP','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(252,11,'Px5f1HiYkJNnl7yT','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(253,11,'0kn5ICFBm6U33Njo','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(254,11,'yNB3lPiPaLMHXzIg','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(255,11,'R03RZW8wofY5Rp8C','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(256,11,'KDaIzuxgtCvJt1WZ','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(257,11,'yQ7S9NsNrgQMwhHY','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(258,11,'QPN4YEsww1hAtTuB','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(259,32,'Navlk8rilftnymgF','Payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(260,11,'RRBOMU4q4BIW0ect','Received payment for subscription #QtaKGl8xQlL7FcDZ - Boompay was successful',NULL,NULL),(261,32,'chsUs9oGIxHu1b0C','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(262,11,'Npi3gsaLGgJsaZ43','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(263,32,'ahan9UogiYD86QzD','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(264,11,'UqbGeQm4YWgRA3hx','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(265,32,'XFs3rDABEcrwXLzN','Payment for ohiPZNvRTCF7zMIk was successful',NULL,NULL),(266,32,'IynoBRBDxyTwzcXS','Payment for PCwsx7mY9XDJjhVt was successful',NULL,NULL),(267,11,'gTMtRCmar8CCgDfX','Requested ₦40000 from support@boomchart.net',NULL,NULL),(268,11,'3Yu47kfyHlM4fst5','Requested ₦40000 from support@boomchart.net',NULL,NULL),(269,11,'TDD8J8QHgr6D9RzQ','Requested ₦40000 from support@boomchart.net',NULL,NULL),(270,11,'ZWenH2b8b12l2Xr0','Requested ₦40000 from support@boomchart.net',NULL,NULL),(271,32,'PyXOLkizcEBGajdE','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(272,11,'w4Qkn0KM9joBrm0z','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(273,11,'ejD22XRfD9FMbokY','Requested ₦2000 from support@boomchart.net',NULL,NULL),(274,11,'QDw4vLWtrBuRIgQG','Requested ₦3000000 from support@boomchart.net',NULL,NULL),(275,11,'ciNKW7WhHFCJKilQ','Requested ₦3000000 from support@boomchart.net',NULL,NULL),(276,11,'rC3pteIOadb9o9T5','Transfered ₦3000 to support@boomchart.net',NULL,NULL),(277,11,'rwYvRO4k7Kn662lW','Transfered ₦3000 to support@boomchart.net',NULL,NULL),(278,11,'32cjF3OZ7LmU0iE8','Requested ₦3000000 from support@boomchart.net',NULL,NULL),(279,11,'fEwT0HUugiL3PCHE','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(280,11,'XaNLzOLEpz7K7JKX','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(281,11,'1TvuthGqnnQTs6Fm','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(282,11,'VsNZTK4Ttsz9I7Ft','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(283,11,'encbx0Bu4Rh5cfzB','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(284,11,'Vu4AhICUeCSzn5cR','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(285,11,'gCs64YJy7bKGet3W','Transfered ₦1000 to support@boomchart.net',NULL,NULL),(286,11,'ct07sF01fhYpOSjN','Transfered ₦60000 to support@boomchart.net',NULL,NULL),(287,11,'9jBNchpXXebmIsvC','Transfered ₦5900 to inyamachidi355@gmail.com',NULL,NULL),(288,11,'ht0UdyI67RAhHuzR','Transfered ₦5900 to inyamachidi355@gmail.com',NULL,NULL),(289,11,'OJyZuLm4pSywH6OI','Transfered ₦5900 to inyamachidi355@gmail.com',NULL,NULL),(290,11,'lUI9IerkFkoZk9f5','Transfered ₦5900 to inyamachidi355@gmail.com',NULL,NULL),(291,11,'VpfRW7Zg5AKv91GY','Transfered ₦69000 to inyamachidi355@gmail.com',NULL,NULL),(292,11,'iGjajgSyaMCvShZb','Payment for mwbUixBFLuaJYlbc was successful',NULL,NULL),(293,11,'CMayJivlDWjIa7Cy','Received payment for Payment LinkmwbUixBFLuaJYlbc',NULL,NULL),(294,32,'fT2ApkAVCgIeuFdo','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(295,11,'5AJKjuyWgZpW8501','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(296,32,'jfwr86rEFTeEOqdW','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(297,11,'2GSveA5nSYsq5Hsr','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(298,11,'sl8HXpotV8tmmqfX','Received payment for order #1H0l5kG3s8DELwPq',NULL,NULL),(299,11,'Xnps0FRgaC7uo57S','Received payment for order #PP8orD0hwanUqaKG',NULL,NULL),(300,11,'EHQwTcapmn49SJgL','Received payment for order #PP8orD0hwanUqaKG',NULL,NULL),(301,11,'R80fUZDptgX7qnNP','Received payment for order #WoX29u8VcPbKlDqy',NULL,NULL),(302,11,'UPPHfG3YbRHBnqOB','Received payment for order #zjIGAmxEAkqBDMcI',NULL,NULL),(303,11,'iFC78hsYrLsKdP2P','Received payment for order #zjIGAmxEAkqBDMcI',NULL,NULL),(304,11,'gv8dOJhr166r76Hn','Received payment for order #zjIGAmxEAkqBDMcI',NULL,NULL),(305,32,'35v20peQKhJocfjB','Payment for B5xm3vZ5EZhs0xcj was successful',NULL,NULL),(306,32,'roH7PP3xEdXg1Ajc','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(307,11,'aBA4jY5qpoecBRpn','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(308,32,'2KsCCHGYl3AUXWhL','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(309,11,'gEq7AXZDih5WOxel','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(310,32,'J40sq5hwx2oAxufL','Payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(311,11,'eccTSgR1kAmLqovD','Received payment for subscription #LwoEgBP2rhygeBxw - Cleaning service was successful',NULL,NULL),(312,11,'MJ7uJ9Yv8iKYLvu5','Logged out - ::1',NULL,NULL),(313,41,'HtjDsdwC5AhS4SRx','Created Payment Link -  Credit Card',NULL,NULL),(314,41,'9txpAbCuEh2TbvcJ','Payment for pVRvxl7PF9V6f79F was successful',NULL,NULL),(315,41,'lexHn2DuynmjqpsU','Received payment for Payment LinkpVRvxl7PF9V6f79F',NULL,NULL),(316,41,'vsJIL28SsQ6DRO2K','Transfered ₦1000 to freakboss3@gmail.com',NULL,NULL),(317,41,'ruZkbUbRZWE9GBup','Transfered ₦1000 to info@boomchart.net',NULL,NULL),(318,41,'J2PoEsulIPmZMTvp','Transfered ₦2000 to freakboss3@gmail.com',NULL,NULL),(319,41,'5rJWdYoeEjmN3TC3','Transfered ₦2000 to freakboss3@gmail.com',NULL,NULL),(320,41,'hJScsBzbOrfPtmCc','Transfered ₦2000 to freakboss3@gmail.com',NULL,NULL),(321,41,'0fQaCPMTvkfJofYW','Created Donation Page -  Fish Farming',NULL,NULL),(322,41,'Uj8TtWZQGIiv89vl','Donation for 76BgHHh8Fvg2DNnI was successful',NULL,NULL),(323,41,'8HCIEuLK91Oad1Wj','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(324,43,'Lhcp5VzVQX1ByDM2','Created Payment Link -  ddddd',NULL,NULL),(325,43,'xZoXyLwG31qC4IMt','Received payment for Payment Linkdc2oHEL3qNENrL1u',NULL,NULL),(326,43,'82Sj1yYQONBBenD5','Created Funding Request of 3333NGN via Card',NULL,NULL),(327,43,'q6U7x2XEFOltcUqJ','Verified Funding Request of 3366.33NGN via Card',NULL,NULL),(328,41,'nKnNoljfM7sif8O6','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(329,41,'wdKyqLlIahrWGzjV','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(330,41,'ODHLRsjebsahQ5GW','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(331,41,'yVU5QVWgdqQB2ggd','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(332,41,'pwK8yja4caz1Ct3q','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(333,41,'AUdMJ9qsvEjj3YJo','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(334,41,'Bfvc3ewoyNT0lYVx','Requested ₦2000 from freakboss3@gmail.com',NULL,NULL),(335,41,'3lzUap6h463NXIAk','Created Payment Link -  Ps5',NULL,NULL),(336,41,'IEtaxnaaGuruhgDh','Created Payment Link -  Lhassa Apso',NULL,NULL),(337,41,'1mvAhQvrTNMGyu0m','Created Payment Link -  Zone',NULL,NULL),(338,41,'K7aMdrsIar6Y686h','Payment for uLbtGuqp2UNdkDnL was successful',NULL,NULL),(339,41,'eduFe6rQ0L6GJi4o','Received payment for Payment LinkuLbtGuqp2UNdkDnL',NULL,NULL),(340,41,'kmP69Il8Hbip12aQ','Received payment for Payment LinkejE4BNdtIa2wFUKU',NULL,NULL),(341,41,'BTzeaNDDDG7eQsUY','Donation for 76BgHHh8Fvg2DNnI was successful',NULL,NULL),(342,41,'9ttExvoSOB0GB9Ok','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(343,41,'E9IyYKExiRSqIjJF','Donation for 76BgHHh8Fvg2DNnI was successful',NULL,NULL),(344,41,'Si6TObdjaXKfZUdT','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(345,41,'GGZ13M6EVWSVA38b','Created Donation Page -  Apple Farm',NULL,NULL),(346,41,'BB6c21BcCrH5Hj0x','Donation for xufj59LTUjUS6TZ5 was successful',NULL,NULL),(347,41,'2iAb71V3JyqYPUJM','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(348,41,'nLeDs9R0xuoVOqBp','Donation for xufj59LTUjUS6TZ5 was successful',NULL,NULL),(349,41,'mTzNtjjApU2o1DsR','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(350,41,'ZSAOcowpWzZZm4ug','Donation for xufj59LTUjUS6TZ5 was successful',NULL,NULL),(351,41,'Y9enrgCgI119hEps','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(352,41,'lfav8KPP2erna4nq','Donation for xufj59LTUjUS6TZ5 was successful',NULL,NULL),(353,41,'mIfthlAEqM31ozaS','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(354,41,'5RE2cFpwwjcqcqxu','Donation for xufj59LTUjUS6TZ5 was successful',NULL,NULL),(355,41,'OuLydSTZOlLksopF','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(356,41,'ZuLBW7gUvWF2GhxX','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(357,41,'GZv35kWDmZ6Hxjhg','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(358,41,'2fGwxADEnT5zOuv4','Created Donation Page -  Macbook M1 Chip',NULL,NULL),(359,41,'md9pHDjsWzIwi03P','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(360,41,'dL9DFJ1ktLiyCXUc','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(361,41,'BYFOStnaXiud2i1e','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(362,41,'RCA30Kvv2W2XE9Ui','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(363,41,'QW8RLztsP4MsZJc8','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(364,41,'5uF7DisFImvxHeSY','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(365,41,'espz7n56owwhZa7A','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(366,41,'um3k7cJ8xyosra23','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(367,41,'qejcXucgrJRWBdOo','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(368,41,'iQpy6mc60zJpLSDk','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(369,41,'vN0Auin6S31TtVwh','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(370,41,'JwWfQO4PAwjOkkTJ','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(371,41,'uYzMeRHZQQAVaAws','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(372,41,'ag8vaelUMZAKgVBM','Created Funding Request of 1000NGN via Deposit with Card',NULL,NULL),(373,41,'Ty46ZHNrGkDOKncv','Created Funding Request of 2000NGN via Deposit with Card',NULL,NULL),(374,41,'yZCIbUGwYOG5wKOD','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(375,41,'HAyE4J6V9eI8S3L6','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(376,41,'N5L6tRkM67WeTENZ','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(377,41,'3JeJLMPPdEzdL7wK','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(378,41,'DjlFd8Ah7mDVrPGK','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(379,41,'88oaDKfLoKHCl7Rw','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(380,41,'EPBSJaDZLvuY1BYZ','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(381,41,'1JPRrxsStDJW2fTs','Created Funding Request of 100NGN via Deposit with Card',NULL,NULL),(382,41,'4KJsCiaJwIyX3ufK','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(383,41,'sClH1MIh5A3Vr7Pe','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(384,41,'T6BClr5177uDXvSN','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(385,41,'oXqsx2AqwHcmp0df','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(386,41,'tb8Tjec4XM17iNtM','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(387,41,'JDUaHuLAFzWfCadK','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(388,41,'166LGnx61XwEMjYu','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(389,41,'wfdm5zVFG7nFgw2J','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(390,41,'bcQsgFPpFpEKIekN','Created Funding Request of 200NGN via Deposit with Card',NULL,NULL),(391,41,'Y8T2ypvFMuUXDW55','Verified Funding Request of 206NGN via Deposit with Card',NULL,NULL),(392,41,'ehQMaTkczO9vuF5y','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(393,41,'RdkxWFEzn8oUvNgL','Verified Funding Request of 4120NGN via Deposit with Card',NULL,NULL),(394,41,'0DmLSEi1H1wrGXSe','Created Plan -  Dog food',NULL,NULL),(395,41,'pfOVNQ4MbgyRtMxZ','Payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(396,41,'HX47cI9QhHPrufLS','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(397,41,'rXKfi1Voj2iVcRXa','Created Funding Request of 40NGN via Deposit with Card',NULL,NULL),(398,41,'adX8lo10bzs8gBEk','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(399,41,'Qx7eA7clXcj1hTpl','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(400,41,'OMGi773ArncffVVb','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(401,41,'knPsu56KvCRJ0vfW','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(402,41,'WMlp3Vl5XQZzSrVi','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(403,41,'O86XwuQDWS2vd2OL','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(404,41,'1P7U6DHmkslav95l','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(405,41,'FjTSIoYYRMPA7NAw','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(406,41,'z6pBLII4sWoU5RGQ','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(407,41,'tF4fAnt94VKlj72N','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(408,41,'4nrMsC0aN7UqIqNm','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(409,41,'jfyHonJb7bAdWWWO','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(410,41,'sEsbZQZeUOzGLKC5','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(411,41,'PaTSXUWIVIV9FPEY','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(412,41,'lsnkAOCRLqzQz3MX','Created Funding Request of 30000NGN via Deposit with Card',NULL,NULL),(413,41,'sefuhlbCUZYeujJs','Verified Funding Request of 30900NGN via Deposit with Card',NULL,NULL),(414,41,'t6HqV5img6z41WkM','Created Funding Request of 50000NGN via Deposit with Card',NULL,NULL),(415,41,'a5PHvlmn5qP6t5eD','Verified Funding Request of 51500NGN via Deposit with Card',NULL,NULL),(416,41,'DMZyVwy2KLVQ5DAD','Created Funding Request of 400NGN via Deposit with Card',NULL,NULL),(417,41,'9U7N86KdTau3rzFZ','Verified Funding Request of 412NGN via Deposit with Card',NULL,NULL),(418,41,'KHg71bhh3fYOudcK','Created Funding Request of 3444NGN via Deposit with Card',NULL,NULL),(419,41,'eVkOTVLTLTjPEac7','Verified Funding Request of 3547.32NGN via Deposit with Card',NULL,NULL),(420,41,'sx1k0pZOazd7hMWf','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(421,41,'21Wwfj1lIkbOYcny','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(422,41,'bcl8tvqIngYGB7EB','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(423,41,'1pzElpI8DKaABewz','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(424,41,'CKpQq7TV6xap4OM4','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(425,41,'4FPqZmKczHvgE6fa','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(426,41,'uQnQl0GRBKh4TFv2','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(427,41,'XbZ1lWRamvJ9mlfg','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(428,41,'z6Seekc1v8UiIn01','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(429,41,'mBKdKmlTuoLwlqL6','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(430,41,'TsFPamzdGgdpdHa0','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(431,41,'Hpm3Chp0guRChhlV','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(432,41,'IR5zp73uUndoxxlo','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(433,41,'QKxXOby5D68oYmZp','Created Funding Request of 4444NGN via Deposit with Card',NULL,NULL),(434,41,'f5h6Um7BTPBbM4Yr','Created Funding Request of 4000NGN via Deposit with Card',NULL,NULL),(435,41,'KnhppsiRwSIRaGrv','Created Funding Request of 3333NGN via Deposit with Card',NULL,NULL),(436,41,'uHqQM05BCzyzL677','Created Funding Request of 3333NGN via Deposit with Card',NULL,NULL),(437,41,'H5SmhDvys4E1uARG','Created Funding Request of 3333NGN via Deposit with Card',NULL,NULL),(438,41,'zwkxRngYqMQpxo5V','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(439,41,'T8doRGHqVneepXK5','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(440,41,'tosKZRFMqSqb3S38','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(441,41,'7VCM2oikN4OQ9bdh','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(442,41,'0SIZaWE4q7LAYn6b','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(443,41,'FsXAlyVSp5h8qvya','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(444,41,'0xsgW0mgpj2n9rwH','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(445,41,'e6XePShsOrQLbSxO','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(446,41,'Rzap8YjRl9HB4USK','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(447,41,'KjxCwJECTA152K3U','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(448,41,'l9xMTtGMbHlGdBFB','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(449,41,'B1x21rLiwlANTOo2','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(450,41,'gvZg0FbrcRxmS6uS','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(451,41,'meyHEoBwdaxhRgAU','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(452,41,'VRpQTOSplq3KVjqb','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(453,41,'w7VzgA4e4EP4FUj1','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(454,41,'c1JXk3u7Uv4Zal1d','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(455,41,'ccFp3sZkUEloDbDt','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(456,41,'7n91KDYTOiPewZq6','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(457,41,'ZZXP2RH4PwfXEtVK','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(458,41,'jFetNyZd5kzq2qFk','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(459,41,'8OybYgzH9cgE8q8w','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(460,41,'5KTmdWHj2T9jknQS','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(461,41,'DqHezHauTZ4NIKYr','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(462,41,'ckmaAfeaIiRvlY59','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(463,41,'sayDXHWhApomD7wD','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(464,41,'nMBGl8jBQ9yAQSQ2','Created Funding Request of 4333NGN via Deposit with Card',NULL,NULL),(465,41,'oGpd46P89wimZGrn','Created Funding Request of 3000NGN via Deposit with Card',NULL,NULL),(466,41,'CFZktfQQA8fLfys8','Verified Funding Request of 3090NGN via Deposit with Card',NULL,NULL),(467,41,'32fdbU5IHzX7JEel','Received payment for Payment LinkuLbtGuqp2UNdkDnL',NULL,NULL),(468,41,'4f9zUrDUeolpZFqx','Received payment for Payment LinkuLbtGuqp2UNdkDnL',NULL,NULL),(469,41,'sfKfiGlIatyEDVks','Received Donation for Payment LinkAivKD8mR7anHUVWV',NULL,NULL),(470,41,'srhRNby5nBY7L3xT','Received payment for order #2tYSgbm2pIhyz5l5',NULL,NULL),(471,41,'R59KZB0QqHUPpsuD','Charges for BTC purchase #71FWQbbCDamd3IxA',NULL,NULL),(472,41,'xh79JYr0Vqokr6up','Sent request for BTC sale #Dt9HCkRh1Ji0LvUJ',NULL,NULL),(473,41,'IIaNH5h6ecZ6UEXC','Sent request for BTC sale #dm7zUIJfune1xOEn',NULL,NULL),(474,41,'swXLNrU3kIAhIaUV','Sent request for ETH sale #Lsc5zZqE8g8vt5ZK',NULL,NULL),(475,41,'uuqeWtXzV4ZR7Awu','ETH purchase #KqZUVS5uwauFQMLh',NULL,NULL),(476,41,'dB9EuxP0qnmIP6cM','Sent request for ETH sale #8207bt5uX1TgLRPr',NULL,NULL),(477,41,'FIOSTFjUO62ASBX0','Sent request for ETH sale #z1jECVsYfR8tmY68',NULL,NULL),(478,41,'40RkJVoXqiE6rG8T','Payment for 5d3rcP1lNxcfNIAL was successful',NULL,NULL),(479,41,'gqr9CpzuMxQySKep','Payment for qVW7obiJP5BuVaxf was successful',NULL,NULL),(480,41,'WSQxKQMKjJcPUe6b','Payment for 9gF5dSURbdXCfoKv was successful',NULL,NULL),(481,41,'pIWW5NbfAbuUkaS8','Payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(482,41,'PV1Wme6YXNTWfgKc','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(483,41,'LDp6jnGj32sQdbps','Sent request for BTC sale #WAmuusz5vp4cq5zB',NULL,NULL),(484,41,'TR-H8eznc','Transfered ₦40000 to freakboss3@gmail.com',NULL,NULL),(485,41,'jxNLR6DGC7cKoeg6','BTC purchase #BTC-qwlp6S',NULL,NULL),(486,41,'x8Up6NT5m3AIzyfK','Requested ₦300 from freakboss3@gmail.com',NULL,NULL),(487,41,'o3gu6OPlofwG3pqd','Created Plan -  Map',NULL,NULL),(488,41,'XAo24xRQJMsOXzzn','Activated 2fa',NULL,NULL),(489,41,'pLmzHS1sWUpqvmCr','Sent request for BTC sale #BTC-I5j401',NULL,NULL),(490,41,'DWgk0k5nxWqHAAkM','Payment for MER-sgDbmI was successful',NULL,NULL),(491,41,'J2MFKTu0ceu5TjCf','ETH purchase #ETH-pq61OU',NULL,NULL),(492,41,'IU0Bxd4e8W2bk1RH','Requested ₦40000 from freakboss3@gmail.com',NULL,NULL),(493,41,'yjbNWvtb0QgG6MkU','Payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(494,41,'dsWojD1lzJwuAzVv','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(495,41,'dcW93lSOsSPLTxA1','Payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(496,41,'npS7RUeU0GEIZpvP','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(497,41,'TR-LNyPGo','Transfered ₦20000 to freakboss3@gmail.com',NULL,NULL),(498,41,'jQJTJYXgiRpBkBlx','BTC purchase #BTC-FrWmFM',NULL,NULL),(499,41,'dCqFvbjZq139z2O4','Sent request for BTC sale #BTC-XeXJcV',NULL,NULL),(500,41,'RQ-QBYJJD','Requested ₦3000 from freakboss3@gmail.com',NULL,NULL),(501,41,'4km8ydUlBbEXpkwA','Created Payment Link - SC-525n8z',NULL,NULL),(502,41,'DN-YjbEuN','Created Donation Page - DN-YjbEuN',NULL,NULL),(503,41,'zzUkUVhY7SYHsAp4','Received payment for order #au6xy8JqzMGL7fKF',NULL,NULL),(504,41,'SC-0HvHrn','Received payment for Payment LinkSC-525n8z',NULL,NULL),(505,41,'rzQgzSPtUHTfsNeH','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(506,44,'3WsoGijKOim5ABBt','Donation for DN-YjbEuN was successful',NULL,NULL),(507,41,'AEqGpN5T3bOmIPXS','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(508,41,'ZrbGN2XoFAk9euuO','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(509,41,'cleBCCrTmEjvTA0G','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(510,44,'NiRR0K880KE2VBrb','Donation for DN-YjbEuN was successful',NULL,NULL),(511,41,'Ge2ptufAr1v3qo59','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(512,41,'XIpqiPeuFIkgXphw','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(513,41,'SC-afRhSZ','Received payment for Payment LinkSC-525n8z',NULL,NULL),(514,41,'TR-6Jv7VJ','Transfered ₦40000 to info@boomchart.net',NULL,NULL),(515,41,'TR-yn8OHf','Transfered ₦3000 to info@boomchart.net',NULL,NULL),(516,41,'TR-Tn9LaK','Transfered ₦4000 to f@f.com',NULL,NULL),(517,41,'TR-VYN4im','Transfered ₦40000 to info@boomchart.net',NULL,NULL),(518,41,'fprBuPAI9tgr6cwa','Received payment for order #vh0NeXY7ZTeAe6WK',NULL,NULL),(519,41,'pENO4QtPTtbkRVBg','Created Funding Request of 20000NGN via Card',NULL,NULL),(520,41,'glKEOcAdbuQutVWY','Verified Funding Request of 20200NGN via Card',NULL,NULL),(521,41,'vJu9bD9mtYsVQy39','Created Funding Request of 20000NGN via Card',NULL,NULL),(522,41,'iEcpPKOU5iRoFoHa','Verified Funding Request of 20200NGN via Card',NULL,NULL),(523,44,'tpGvAFEignMai347','Updated account details',NULL,NULL),(524,44,'aLBBP32hRqEmFvc1','Updated account details',NULL,NULL),(525,44,'YfIeCBa41mLgqiko','BTC purchase #BTC-5UkIKZ',NULL,NULL),(526,44,'DN-Qbky3T','Created Donation Page - DN-Qbky3T',NULL,NULL),(527,44,'du0qqPucfDanWWnD','Created Payment Link - SC-6EUz4i',NULL,NULL),(528,41,'MER-8i0cqX','Payment for MER-8i0cqX was successful',NULL,NULL),(529,41,'MER-e6rF2A','Received Payment for MER-e6rF2A was successful',NULL,NULL),(530,41,'MER-VSXLqn','Payment for MER-VSXLqn was successful',NULL,NULL),(531,41,'MER-TFUIZ8','Received Payment for MER-TFUIZ8 was successful',NULL,NULL),(532,45,'LqaF79kNZfk8rsWH','Updated account details',NULL,NULL),(533,41,'L2GnBZmQ48i1ROZM','Donation for DN-YjbEuN was successful',NULL,NULL),(534,41,'wqq2FZ8zJYX1s0KL','Received Donation for Payment LinkDN-YjbEuN',NULL,NULL),(535,41,'hSuGClgmUv0e1kPv','BTC purchase #BTC-lg7Ooj',NULL,NULL),(536,41,'UeTpfH37sFlrfuQR','Received payment for order #ORD-QPlOPF',NULL,NULL),(537,41,'5AD8zWezY3sMPRjC','Received payment for order #ORD-DA5kcd',NULL,NULL),(538,41,'e0ju3tLc2FiCELH6','Received payment for order #ORD-8eR6JQ',NULL,NULL),(539,41,'pAJEeRh9AHirHuT3','Received payment for order #ORD-bhYtqO',NULL,NULL),(540,41,'RHkgFZ99gHrs0TdV','Received payment for order #ORD-LrQkhA',NULL,NULL),(541,41,'BEUyUE9iXTMhAj7k','Received payment for order #ORD-LrQkhA',NULL,NULL),(542,41,'nCy0kA3kVueF4C2A','Received payment for order #ORD-zdQdj2',NULL,NULL),(543,41,'H4Vc1sCfSPrmyNGF','Received payment for order #ORD-mItFzn',NULL,NULL),(544,44,'raRBSBxviH5NIqFx','Received payment for order #ORD-Lxt0Jf',NULL,NULL),(545,44,'06qv4i8HMCfEGREV','Received payment for order #ORD-lbb0e1',NULL,NULL),(546,44,'3eDiMN9dGDPsG3qx','Received payment for order #ORD-4Ryxyz',NULL,NULL),(547,44,'eH9fsDBBX5cCrTvc','Received payment for order #ORD-ZeIDlk',NULL,NULL),(548,44,'bNHVU7M8KNXtIoL7','Received payment for order #ORD-vziNpF',NULL,NULL),(549,44,'V4wnrd3kIwYZ9JV2','Received payment for order #ORD-OspreT',NULL,NULL),(550,44,'jPMYeoHYekqi6KeT','Received payment for order #ORD-Hfv4FG',NULL,NULL),(551,44,'ed2Js3WgQOQ1loGY','Received payment for order #ORD-KaMFJO',NULL,NULL),(552,44,'FgP4A0T8hOq3zVQ9','Received payment for order #ORD-QRzRnN',NULL,NULL),(553,41,'6opUQnfVuS5t0WEl','Received payment for order #ORD-4a0ZTS',NULL,NULL),(554,44,'vFzNQ6Y7MWWUoCHl','Updated account details',NULL,NULL),(555,44,'zKM6nMhsjyZgsa8Y','Updated account details',NULL,NULL),(556,41,'WsqbAp64MBEOXecO','Received payment for order #ORD-K2vyGg',NULL,NULL),(557,41,'IxtqEojdUhk6jNte','Received payment for order #ORD-zCliof',NULL,NULL),(558,41,'G0c8aeIEI5sw8no1','Updated compliance form',NULL,NULL),(559,41,'bAzW2QEe4w9azRPk','Updated compliance form',NULL,NULL),(560,41,'UrAZhgGranjLjMp3','Updated compliance form',NULL,NULL),(561,41,'6cF3dpoXMBGpom3D','Updated compliance form',NULL,NULL),(562,41,'g55MWYDjMbyFiUBe','Updated compliance form',NULL,NULL),(563,48,'02Vs6X4k1mfO6vml','Created Funding Request of 30000NGN via Card',NULL,NULL),(564,48,'HsAtgtn669QsH6tD','Verified Funding Request of 30300NGN via Card',NULL,NULL),(565,41,'TR-uxkqHX','Transfered $2000 to s@site.com',NULL,NULL),(566,48,'bZm1sYatCtPy1E51','Updated compliance form',NULL,NULL),(567,48,'yZYF8RdnNz7njQ83','Updated compliance form',NULL,NULL),(568,48,'iKpSPDwGdNI2Tdod','Updated compliance form',NULL,NULL),(569,41,'MCpciGrKF5y18Fcy','Terminated Virtual Card #VC-ZA7hEb',NULL,NULL),(570,41,'3SsRYWPnf169MbRy','Updated account details','2021-02-09 21:21:47','2021-02-09 21:21:47'),(571,41,'UWwh0oSVzQ6P1qKJ','Created Funding Request of 12EGP via Card','2021-02-09 21:22:04','2021-02-09 21:22:04');
/*!40000 ALTER TABLE `audit_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `bank_id` int DEFAULT NULL,
  `acct_no` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acct_name` text COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank`
--

LOCK TABLES `bank` WRITE;
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
INSERT INTO `bank` VALUES (9,41,3,'345678965','xdrfgchvjb',0,NULL,NULL),(10,41,1,'345678987654','xdrcfgvhbjn',1,NULL,NULL),(16,48,1,'1234567655','tttfff gggg',1,NULL,NULL);
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_supported`
--

DROP TABLE IF EXISTS `bank_supported`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_supported` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_supported`
--

LOCK TABLES `bank_supported` WRITE;
/*!40000 ALTER TABLE `bank_supported` DISABLE KEYS */;
INSERT INTO `bank_supported` VALUES (1,'Zenith Bank','033',156,NULL,NULL),(2,'First Bank','012',13,NULL,NULL),(3,'GTB','22d',156,NULL,NULL),(5,'Castro Bank','2233',226,NULL,NULL);
/*!40000 ALTER TABLE `bank_supported` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_transfer`
--

DROP TABLE IF EXISTS `bank_transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_transfer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `trx` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_transfer`
--

LOCK TABLES `bank_transfer` WRITE;
/*!40000 ALTER TABLE `bank_transfer` DISABLE KEYS */;
INSERT INTO `bank_transfer` VALUES (18,41,'ym1TFK1p1MMIAqXr',2000,1,NULL,NULL),(19,41,'2mti3Lb0m8RBipIM',12432,0,'2021-02-09 21:22:31','2021-02-09 21:22:31');
/*!40000 ALTER TABLE `bank_transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill_transactions`
--

DROP TABLE IF EXISTS `bill_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bill_transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `type` int NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biller` text COLLATE utf8mb4_unicode_ci,
  `ref` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx_ref` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_transactions`
--

LOCK TABLES `bill_transactions` WRITE;
/*!40000 ALTER TABLE `bill_transactions` DISABLE KEYS */;
INSERT INTO `bill_transactions` VALUES (4,41,1,'1000','100','AIRTEL VTU','wDZtJDT7','9057550480','CF-FLYAPI-20201228081430880146',NULL,NULL),(5,41,2,'1000','100','MTN 1.5 GB','7u6Pb7mr','9057550480','CF-FLYAPI-20201228091923247473',NULL,NULL),(6,41,1,'300','30','GLO VTU','W1bnjVeo','9057550480','CF-FLYAPI-20201228103143776531',NULL,NULL),(7,41,1,'300','30','AIRTEL VTU','XeOFoEeH','9072963268','CF-FLYAPI-20201228103237801634',NULL,NULL),(8,41,1,'100','10','AIRTIME','PQ766D15','9072963268','CF-FLYAPI-20201228111426447987',NULL,NULL),(9,41,2,'100','10','AIRTEL 100 MB data bundle','mo8BEVo7','9072963268','CF-FLYAPI-20201228111643570741',NULL,NULL),(10,41,2,'50','5','AIRTEL 40 MB data bundle','VtinoWDT','09072963268','CF-FLYAPI-20201228114145154024',NULL,NULL),(11,41,1,'50','5','AIRTIME','v4ytWkr0','09057550480','CF-FLYAPI-20201228114836815027',NULL,NULL),(12,41,1,'50','5','AIRTIME','DFO04z0x','09072963268','CF-FLYAPI-20201228124232234629',NULL,NULL),(13,41,1,'50','1.5','AIRTIME','BP-n7j9hh','09072963268','CF-FLYAPI-20210105113706777531',NULL,NULL),(14,41,1,'50','1.5','AIRTIME','BP-wQvGqW','07012311644','CF-FLYAPI-20210107065355116042',NULL,NULL),(15,41,1,'100','3','AIRTIME','BP-5hOGj9','09057550480','CF-FLYAPI-20210120014701952865',NULL,NULL);
/*!40000 ALTER TABLE `bill_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int NOT NULL,
  `postal_code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (3,'Histol','Indonesia','Georgia','43567865433567',4365443,'3454447567','Hell',NULL,NULL),(4,'Bilson','Antigua & Barbuda','Georgia','13245678786',300216,'2423','Sekupang Batamg',NULL,NULL),(6,'Manchester','England','Bigboss','13245678786',300216,'2423','47 Nungua Link Road 2nd Floor',NULL,NULL);
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'brand_1595624243.png','Capterra',1,NULL,NULL),(2,'brand_1595624257.png','crowd',1,NULL,NULL),(3,'brand_1595624229.png','Getapp',1,NULL,NULL),(4,'brand_1595624268.png','softwareadvice',1,NULL,NULL),(5,'brand_1595624280.png','trustpilot',1,NULL,NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `btc_trades`
--

DROP TABLE IF EXISTS `btc_trades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `btc_trades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `type` int DEFAULT NULL,
  `trx` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` int DEFAULT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` text COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `btc_trades`
--

LOCK TABLES `btc_trades` WRITE;
/*!40000 ALTER TABLE `btc_trades` DISABLE KEYS */;
INSERT INTO `btc_trades` VALUES (1,11,1,'bZZFt73UIIKY0PlD','460','99820',NULL,NULL,'217.3913043478261','wertyuiouytrewrty',2,NULL,NULL),(2,11,2,'D17KZDTl8C0zX0s9','450',NULL,NULL,2,'450000',NULL,1,NULL,NULL),(3,11,1,'eZHvqHg6IJJ1s0pb','460',NULL,NULL,NULL,'434.7826086956522','dsfghjgfddghjgfdhjfd',1,NULL,NULL),(4,11,3,'W0Dgf6979FzPv0M8','300',NULL,NULL,6,'600000',NULL,0,NULL,NULL),(5,11,3,'onOTJH5frQuxCPyi','300',NULL,NULL,6,'600000',NULL,1,NULL,NULL),(6,11,3,'WLjTO2iMB9khXbeP','300',NULL,NULL,2,'60000',NULL,0,NULL,NULL),(7,11,3,'YekZ9VF9vL6KPYVU','300',NULL,NULL,2,'120000',NULL,0,NULL,NULL),(8,11,3,'C3HM2UBWLjeUBTTr','300',NULL,NULL,2,'195000',NULL,0,NULL,NULL),(9,11,1,'QqGgwD3F4nZvzwlk','460','99820',NULL,NULL,'217.3913043478261','uejygeugueueubb',1,NULL,NULL),(10,11,2,'RPbBJxBMlQInnSuu','450',NULL,NULL,2,'1350000',NULL,0,NULL,NULL),(11,11,1,'G9ZLgysbNJn5w2QD','450','50000',NULL,NULL,'111.11111111111111','ibvfvkfjv fjvkf',0,NULL,NULL),(12,11,4,'KnNcVOhI64gTAUJi','450','60000',NULL,NULL,'133.33333333333334','ldlc idl jd',1,NULL,NULL),(13,11,1,'MWs82A7jXanhJ23e','460','100000',NULL,NULL,'217.3913043478261','444444gttkg bt5gj',0,NULL,NULL),(14,11,2,'hi35OzXD3LZ7L4gp','450','300',NULL,2,'135000',NULL,0,NULL,NULL),(15,41,1,'71FWQbbCDamd3IxA','460','200000','6000',NULL,'434.7826086956522','jbhdbvch hvbrb vhjbr',0,NULL,NULL),(16,41,2,'Dt9HCkRh1Ji0LvUJ','456','4000','120',NULL,'1824000',NULL,0,NULL,NULL),(17,41,2,'dm7zUIJfune1xOEn','456','2000','27360',NULL,'912000',NULL,1,NULL,NULL),(18,41,2,'Lsc5zZqE8g8vt5ZK','460','300','6900',NULL,'138000',NULL,0,NULL,NULL),(19,41,4,'KqZUVS5uwauFQMLh','450','60000','1800',NULL,'133.33333333333334','dsfghjgfdsfgh',1,NULL,NULL),(20,41,2,'8207bt5uX1TgLRPr','460','300','6900',NULL,'138000',NULL,1,NULL,NULL),(21,41,5,'z1jECVsYfR8tmY68','460','300','6900',NULL,'138000',NULL,1,NULL,NULL),(22,41,2,'WAmuusz5vp4cq5zB','456','300','4104',NULL,'136800',NULL,1,NULL,NULL),(23,41,1,'BTC-qwlp6S','460','400000','12000',NULL,'869.5652173913044','dfkvnf vj fjkv v rjv r',0,NULL,NULL),(24,41,2,'BTC-I5j401','456','3000','41040',NULL,'1368000',NULL,0,NULL,NULL),(25,41,4,'ETH-pq61OU','450','400000','12000',NULL,'888.8888888888889','ttsdtdysctcstds',0,NULL,NULL),(26,41,1,'BTC-FrWmFM','460','100000','3000',NULL,'217.3913043478261','cbiudsbvubsd',0,NULL,NULL),(27,41,2,'BTC-XeXJcV','456','300','4104',NULL,'136800',NULL,0,NULL,NULL),(28,44,1,'BTC-5UkIKZ','460','100000','3000',NULL,'217.3913043478261','cjhdvchdv hddd',0,NULL,NULL),(29,41,1,'BTC-lg7Ooj','460','100000','3000',NULL,'217.3913043478261','sdfghjkgfdsfghjjgf',0,NULL,NULL);
/*!40000 ALTER TABLE `btc_trades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uniqueid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `store` int DEFAULT NULL,
  `total` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (184,'VSsJA0T',16,'Baby Towel',3,20000,NULL,NULL),(185,'VSsJA0T',15,'Bottle',1,20000,NULL,NULL),(186,'VSsJA0T',7,'Lg Tv 2.0',1,300000,NULL,NULL),(187,'VSsJA0T',6,'2020 Camry SE',1,2500000,1,NULL),(189,'rNzA6fl',15,'Bottle',3,20000,1,'60000'),(200,'P2aGXCZ',9,'Fish',1,2000,3,'2000'),(201,'NwIfW6x',9,'Fish',3,2000,3,'6000'),(202,'M5dV8pl',9,'Fish',1,2000,3,'2000'),(203,'r5oUpd5',9,'Fish',3,2000,3,'6000'),(204,'BjREcXy',9,'Fish',2,2000,3,'4000'),(205,'ccaixXO',7,'Lg Tv 2.0',1,300000,1,'300000'),(206,'pb9KuaD',15,'Bottle',1,20000,1,'20000'),(207,'pb9KuaD',6,'2020 Camry SE',1,2500000,1,'2500000'),(208,'TuCtVsk',17,'Bread',1,10000,4,'10000');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `charges`
--

DROP TABLE IF EXISTS `charges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `charges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tx_ref` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finn` int DEFAULT NULL,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `charges`
--

LOCK TABLES `charges` WRITE;
/*!40000 ALTER TABLE `charges` DISABLE KEYS */;
INSERT INTO `charges` VALUES (174,41,'1.98',NULL,NULL,NULL,NULL,'eNxkwyyUkWbhZ5kV','Received payment for Payment Link #pVRvxl7PF9V6f79F',NULL,NULL),(175,41,'50',NULL,NULL,NULL,NULL,'0HkumOXUJmQXpyQH','Charges for transfer #tVbGU7h2KodlvZKt',NULL,NULL),(176,41,'50',NULL,NULL,NULL,NULL,'phVzzFxUm3AS7CxT','Charges for transfer #C74JZL4XfYgKmN13',NULL,NULL),(177,41,'100',NULL,NULL,NULL,NULL,'kpgOzf4Q9sExtYuZ','Charges for transfer #1VZ1vfA9BCSOxdT8',NULL,NULL),(178,41,'100',NULL,NULL,NULL,NULL,'GgcgHeYegGKq70c7','Charges for transfer #DNEDXOop0BfSPKAq',NULL,NULL),(179,41,'100',NULL,NULL,NULL,NULL,'WQINaqXF9ZTa6vjW','Charges for transfer #5OC0N1igPJgT9ieY',NULL,NULL),(180,41,'30',NULL,NULL,NULL,NULL,'RjoV1nlAfoM96hvy','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(181,41,'30',NULL,NULL,NULL,NULL,'UG6ylEPXAnVS9mez','Charges for withdrawal 83dfIrdT004qxuLJ',NULL,NULL),(184,41,'200',NULL,NULL,NULL,NULL,'WVR4uakQsd0qk9r0','Virtual Card creation charge #',NULL,NULL),(185,41,'200',NULL,NULL,NULL,NULL,'2T7jjN55z7WKpVC7','Virtual Card creation charge #',NULL,NULL),(186,41,'200',NULL,NULL,NULL,NULL,'DqRHOz0g14xZhrKG','Virtual Card creation charge #',NULL,NULL),(187,41,'30',NULL,NULL,NULL,NULL,'nTH4qGVHDC5vv2n7','Charges for withdrawal OWgXxI7Ja5X3a8Qh',NULL,NULL),(188,41,'200',NULL,NULL,NULL,NULL,'afyGZFEJ3eFbzOBS','Virtual Card creation charge #',NULL,NULL),(189,41,'30',NULL,NULL,NULL,NULL,'NRyQzFg7bgPyVujd','Virtual Card funding charge #',NULL,NULL),(190,41,'30',NULL,NULL,NULL,NULL,'2SvubBVLWmittjbV','Virtual Card funding charge #',NULL,NULL),(191,41,'200',NULL,NULL,NULL,NULL,'AYszYoeLZPydJttF','Virtual Card funding charge #',NULL,NULL),(192,41,'70',NULL,NULL,NULL,NULL,'6Ar6eb2m5R07hFpV','Virtual Card funding charge #',NULL,NULL),(193,41,'70',NULL,NULL,NULL,NULL,'YO54LGi3XrCMzIc1','Virtual Card funding charge #',NULL,NULL),(194,41,'30',NULL,NULL,NULL,NULL,'HQfn5F8SxLy6JFzA','Virtual Card funding charge #',NULL,NULL),(195,41,'300',NULL,NULL,NULL,NULL,'6EtGdkgL542671ul','Virtual Card funding charge #',NULL,NULL),(196,41,'400',NULL,NULL,NULL,NULL,'4BaidwPCkLHwiDdY','Virtual Card creation charge #',NULL,NULL),(197,41,'12',NULL,NULL,NULL,NULL,'Cf0ceCD7OGx84Pl4','Received payment for Payment Link #uLbtGuqp2UNdkDnL',NULL,NULL),(198,41,'4200',NULL,NULL,NULL,NULL,'9iqDcnW9VssOxjJJ','Received payment for Payment Link #ejE4BNdtIa2wFUKU',NULL,NULL),(199,41,'2000',NULL,NULL,NULL,NULL,'u3O5qNQcGqHiJDG6','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(200,41,'10',NULL,NULL,NULL,NULL,'hgKt2E2SmVpQiTKf','Received Donation for Payment Link76BgHHh8Fvg2DNnI',NULL,NULL),(201,41,'300',NULL,NULL,NULL,NULL,'wgnHReh8DqHLQNIX','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(202,41,'500',NULL,NULL,NULL,NULL,'uEekfjBC8BTj5umT','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(203,41,'400',NULL,NULL,NULL,NULL,'fhIILpsNe0HWzA4F','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(204,41,'400',NULL,NULL,NULL,NULL,'YGclZfURKCRVXEWC','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(205,41,'400',NULL,NULL,NULL,NULL,'6M8qpHpfa9grnsFj','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(206,41,'500',NULL,NULL,NULL,NULL,'i1P3aDgkKwyrxcvm','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(207,41,'30000',NULL,NULL,NULL,NULL,'LqKaDgFnlMBDANf5','Received Donation for Payment Linkxufj59LTUjUS6TZ5',NULL,NULL),(208,41,'300',NULL,NULL,NULL,NULL,'O3sc4jhnYCO3W3D1','Virtual Card creation charge #',NULL,NULL),(209,41,'6',NULL,NULL,NULL,NULL,'8NLpKpfpeev2mxnG','Verified Funding Request of 206NGN via Deposit with Card',NULL,NULL),(210,41,'120',NULL,NULL,NULL,NULL,'VSPzOAUeiv24aneV','Verified Funding Request of 4120NGN via Deposit with Card',NULL,NULL),(211,41,'1500',NULL,NULL,NULL,NULL,'CIdwQQMvZLumnqHK','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(212,41,'30',NULL,NULL,NULL,NULL,'L18jrxB4MqeIfJ1O','Bill payment for #fKu7nJf9',NULL,NULL),(213,41,'30',NULL,NULL,NULL,NULL,'lfozZIo9pZWufi3o','Bill payment for #qA1cC9CF',NULL,NULL),(214,41,'30',NULL,NULL,NULL,NULL,'YwLo0i6Pgj2PVzYN','Bill payment for #2qMsa8g0',NULL,NULL),(215,41,'30',NULL,NULL,NULL,NULL,'LCksLE08RdZARMa5','Bill payment for #mhSMBmj4',NULL,NULL),(216,41,'50',NULL,NULL,NULL,NULL,'9ckidCKJv5rtxs9w','Bill payment for #lvxJsjk8',NULL,NULL),(217,41,'60',NULL,NULL,NULL,NULL,'azpPrpwwlDgK0qk1','Bill payment for #e8SWnvKF',NULL,NULL),(218,41,'60',NULL,NULL,NULL,NULL,'yc3N6I35pRCPBNLi','Bill payment for #cewTQj97',NULL,NULL),(219,41,'100',NULL,NULL,NULL,NULL,'jwTnaZgHWHIqVpZE','Bill payment for #wDZtJDT7',NULL,NULL),(220,41,'100',NULL,NULL,NULL,NULL,'LuOaPI1wtjdBT0TD','Bill payment for #7u6Pb7mr',NULL,NULL),(221,41,'30',NULL,NULL,NULL,NULL,'u70pwBr3nphHqXmy','Bill payment for #W1bnjVeo',NULL,NULL),(222,41,'30',NULL,NULL,NULL,NULL,'npcKbPZesCEyDyCm','Bill payment for #XeOFoEeH',NULL,NULL),(223,41,'10',NULL,NULL,NULL,NULL,'FYGk8YjM69vOwRvo','Bill payment for #PQ766D15',NULL,NULL),(224,41,'10',NULL,NULL,NULL,NULL,'QlAikp5ZX8I1lXdy','Bill payment for #mo8BEVo7',NULL,NULL),(225,41,'5',NULL,NULL,NULL,NULL,'Lnc3fXfJOdVzlFiq','Bill payment for #VtinoWDT',NULL,NULL),(226,41,'5',NULL,NULL,NULL,NULL,'M0nklwmhSNYjCPRy','Bill payment for #v4ytWkr0',NULL,NULL),(227,41,'5',NULL,NULL,NULL,NULL,'2eFZrtd3n9T2O5f0','Bill payment for #mkidxE87',NULL,NULL),(228,41,'5',NULL,NULL,NULL,NULL,'Vgaeotr5T0bi4A6d','Bill payment for #B91QIOXh',NULL,NULL),(229,41,'5',NULL,NULL,NULL,NULL,'g0Jbb1WtW2ggNnPm','Bill payment for #DFO04z0x',NULL,NULL),(230,41,'10',NULL,NULL,NULL,NULL,'RILYFaS2G0ua0h7d','Virtual Card creation charge #',NULL,NULL),(231,41,'900',NULL,NULL,NULL,NULL,'A4pgDcQEeghYaNJU','Verified Funding Request of 30900NGN via Deposit with Card',NULL,NULL),(232,41,'1500',NULL,NULL,NULL,NULL,'KPq4nRU5iuvdWAkO','Verified Funding Request of 51500NGN via Deposit with Card',NULL,NULL),(233,41,'12',NULL,NULL,NULL,NULL,'kkB1MsoV8qL6VuGn','Verified Funding Request of 412NGN via Deposit with Card',NULL,NULL),(234,41,'103.32',NULL,NULL,NULL,NULL,'fkegXHSHk4FtWtkd','Verified Funding Request of 3547.32NGN via Deposit with Card',NULL,NULL),(235,41,'90',NULL,NULL,NULL,NULL,'CHzEv4YtfMF3wgDD','Verified Funding Request of 3090NGN via Deposit with Card',NULL,NULL),(236,41,'46000',NULL,NULL,NULL,NULL,'MJ5t1pyZfTjs0WrH','Charges for invoice #qhnAOpLAOVjMvCUI',NULL,NULL),(237,41,'180',NULL,NULL,NULL,NULL,'i8brCaRzJxbUTO21','Received payment for Payment Link #uLbtGuqp2UNdkDnL',NULL,NULL),(238,41,'180',NULL,NULL,NULL,NULL,'HFALHcxGWA7GIuXS','Received payment for Payment Link #uLbtGuqp2UNdkDnL',NULL,NULL),(239,41,'3000',NULL,NULL,NULL,NULL,'zdpu8ziw79mSiuxQ','Received Donation for Payment LinkAivKD8mR7anHUVWV',NULL,NULL),(240,41,'30000',NULL,NULL,NULL,NULL,'S1FmBPFXYzohTTYP','Received payment for order #2tYSgbm2pIhyz5l5',NULL,NULL),(241,41,'6000',NULL,NULL,NULL,NULL,'7gRAKKq087OmQNIK','Charges for BTC purchase #71FWQbbCDamd3IxA',NULL,NULL),(242,41,'3000',NULL,NULL,NULL,NULL,'c4DPnxtjKaYvDuwL','Charges for ETH purchase #KqZUVS5uwauFQMLh',NULL,NULL),(243,41,'10.302999999999999',NULL,NULL,NULL,NULL,'7IW9yth31eKolJVi','Charges for merchant #5d3rcP1lNxcfNIAL',NULL,NULL),(244,41,'20.555',NULL,NULL,NULL,NULL,'rYxIsfUGGYaOkFc5','Charges for merchant #qVW7obiJP5BuVaxf',NULL,NULL),(245,41,'308.07',NULL,NULL,NULL,NULL,'eopT6AeaviASpRwV','Charges for merchant #9gF5dSURbdXCfoKv',NULL,NULL),(246,41,'1500',NULL,NULL,NULL,NULL,'zrdSw6t3DaMJhXHR','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(247,41,'2000','40000','TR-H8eznc','TR',2,'Kb6bNa4rLgieb0d0','Charges for transfer #H8eznc',NULL,NULL),(248,41,'1.5','50','BP-n7j9hh','BP',2,'vpIquf3maboR5Dgy','Bill payment for #BP-n7j9hh',NULL,NULL),(249,41,'6900','300','BTC-DTNKc7','BTC',1,'tJxvtQV1NAagPPNC','Charges for BTC sold #BTC-DTNKc7',NULL,NULL),(250,41,'6900','138000','BTC-Omo6I5','BTC',1,'CfsX6vTGwDvzVcxH','Charges for BTC sold #BTC-Omo6I5',NULL,NULL),(251,41,'27360','912000','BTC-67Poca','BTC',1,'4gmKk2oAgpZ4G0E5','Charges for BTC sold #BTC-67Poca',NULL,NULL),(252,41,'12000','400000','BTC-qwlp6S','BTC',2,'Re5YzAB0rxf6YDtf','Charges for BTC purchase #BTC-qwlp6S',NULL,NULL),(253,41,'900','30000','ST-mg4WML84','ST',2,'P1Lro9TnGi82ILZn','Charges for withdrawal #ST-mg4WML84',NULL,NULL),(254,41,'1.5','50','BP-wQvGqW','BP',2,'31Kuq0iHHuI4D0Xm','Bill payment for #BP-wQvGqW',NULL,NULL),(255,41,'103.03','103.03','MER-sgDbmI','MER',1,'jPDQX3RljAy6xg01','Charges for merchant #MER-sgDbmI',NULL,NULL),(256,41,'20000','400000','ETH-pq61OU','ETH',2,'Y4ExuELzak5wA9L4','Charges for ETH purchase #ETH-pq61OU',NULL,NULL),(257,41,'12000','400000','ST-hFLZmrGf','ST',2,'uD1fw0Cff2vBRtxm','Charges for withdrawal #ST-hFLZmrGf',NULL,NULL),(258,41,'0','0','RQ-VkIlkJ','RQ',2,'9vgu0KfPGJoNXFjB','Charges for request money #RQ-VkIlkJ',NULL,NULL),(259,41,'1500',NULL,NULL,NULL,NULL,'EV4T65hHFEkxbt9V','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(260,41,'1500',NULL,NULL,NULL,NULL,'HLwdG2huahxqmME0','Received payment for subscription #1Udf0bj465M9ecoz - Dog food was successful',NULL,NULL),(261,41,'400','4000','VC-1qm62j','VC',2,'Cj79kKTtj4LtJh8P','Virtual Card creation charge #',NULL,NULL),(262,41,'300','3000','VC-GELtK7','VC',2,'K9VHShKe3dnwd8N9','Virtual Card funding charge #',NULL,NULL),(263,41,'300','3000','VC-Z52fyM','VC',2,'NQFntoKxt2IGyMtb','Virtual Card funding charge #',NULL,NULL),(264,41,'1000',NULL,NULL,NULL,NULL,'TR-LNyPGo','Charges for transfer #TR-LNyPGo',NULL,NULL),(265,41,'400',NULL,NULL,NULL,NULL,'VC-mLQl0h','Virtual Card creation charge #',NULL,NULL),(266,41,'300',NULL,NULL,NULL,NULL,'VC-SpDqlM','Virtual Card funding charge #',NULL,NULL),(267,41,'300',NULL,NULL,NULL,NULL,'VC-wZERnF','Virtual Card funding charge #',NULL,NULL),(268,41,'300',NULL,NULL,NULL,NULL,'VC-zwyPGG','Virtual Card funding charge #',NULL,NULL),(269,41,'300',NULL,NULL,NULL,NULL,'VC-LjBDgP','Virtual Card creation charge #',NULL,NULL),(270,41,'300',NULL,NULL,NULL,NULL,'VC-LOB5t1','Virtual Card funding charge #',NULL,NULL),(271,41,'100',NULL,NULL,NULL,NULL,'VC-hxb94j','Virtual Card funding charge #',NULL,NULL),(272,41,'100',NULL,NULL,NULL,NULL,'VC-uGffx2','Virtual Card funding charge #',NULL,NULL),(273,41,'3',NULL,NULL,NULL,NULL,'BP-5hOGj9','Bill payment for #BP-5hOGj9',NULL,NULL),(274,41,'3000',NULL,NULL,NULL,NULL,'mOcgvrbmZ0373KPP','Charges for BTC purchase #BTC-FrWmFM',NULL,NULL),(275,41,'90',NULL,NULL,NULL,NULL,'ST-oe1UWN','Charges for withdrawal #ST-oe1UWN',NULL,NULL),(276,41,'120',NULL,NULL,NULL,NULL,'ST-kDCd9b','Charges for withdrawal #ST-kDCd9b',NULL,NULL),(279,41,'30000',NULL,NULL,NULL,NULL,'au6xy8JqzMGL7fKF','Received payment for order #au6xy8JqzMGL7fKF',NULL,NULL),(280,41,'276','2760','INV-rkQsl5','INV',1,'BAprogiNnPx94Hff','Charges for invoice #INV-rkQsl5',NULL,NULL),(281,41,'372','3720','INV-uPCJgY','INV',1,'HObeRxf1dXv0BzmX','Charges for invoice #INV-uPCJgY',NULL,NULL),(282,41,'372','3720','INV-uPCJgY','INV',1,'fat7Ih349MWyBZDO','Charges for invoice #INV-uPCJgY',NULL,NULL),(283,41,'24000',NULL,NULL,NULL,NULL,'SC-0HvHrn','Received payment for Payment Link #SC-525n8z',NULL,NULL),(284,41,'180',NULL,NULL,NULL,NULL,'DN-QKsjbx','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(285,41,'180',NULL,NULL,NULL,NULL,'DN-MhCI4g','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(286,41,'3000',NULL,NULL,NULL,NULL,'DN-sNsDLd','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(287,41,'1200',NULL,NULL,NULL,NULL,'DN-5PD6fN','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(288,41,'180',NULL,NULL,NULL,NULL,'DN-RQq6pA','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(289,41,'180',NULL,NULL,NULL,NULL,'DN-ExHG1w','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(290,41,'24000',NULL,NULL,NULL,NULL,'SC-afRhSZ','Received payment for Payment Link #SC-525n8z',NULL,NULL),(291,41,'2000',NULL,NULL,NULL,NULL,'TR-6Jv7VJ','Charges for transfer #TR-6Jv7VJ',NULL,NULL),(292,41,'150',NULL,NULL,NULL,NULL,'TR-yn8OHf','Charges for transfer #TR-yn8OHf',NULL,NULL),(293,41,'200',NULL,NULL,NULL,NULL,'TR-Tn9LaK','Charges for transfer #TR-Tn9LaK',NULL,NULL),(294,41,'2000',NULL,NULL,NULL,NULL,'TR-VYN4im','Charges for transfer #TR-VYN4im',NULL,NULL),(295,41,'46000','460000','qhnAOpLAOVjMvCUI','INV',1,'x7VQJpwZ94Wz0Z6K','Charges for invoice #qhnAOpLAOVjMvCUI',NULL,NULL),(296,41,'846',NULL,NULL,NULL,NULL,'INV-NCjgDm','Charges for invoice #INV-C7ShAS',NULL,NULL),(297,41,'380',NULL,NULL,NULL,NULL,'vh0NeXY7ZTeAe6WK','Received payment for order #vh0NeXY7ZTeAe6WK',NULL,NULL),(298,41,'200',NULL,NULL,NULL,NULL,'ixgU2ABlgdlQcdrd','Verified Funding Request of 20200NGN via Card',NULL,NULL),(299,41,'200',NULL,NULL,NULL,NULL,'hUH2gUV0V3CwuMZF','Verified Funding Request of 20200NGN via Card',NULL,NULL),(303,41,'102.571',NULL,NULL,NULL,NULL,'MER-8i0cqX','Charges for merchant payment #MER-8i0cqX',NULL,NULL),(304,41,'102.571',NULL,NULL,NULL,NULL,'MER-8i0cqX','Charges for merchant payment #MER-8i0cqX',NULL,NULL),(305,41,'1025.71',NULL,NULL,NULL,NULL,'MER-e6rF2A','Charges for merchant payment #MER-e6rF2A',NULL,NULL),(306,41,'1025.71',NULL,NULL,NULL,NULL,'MER-e6rF2A','Charges for merchant payment #MER-e6rF2A',NULL,NULL),(309,41,'103.03',NULL,NULL,NULL,NULL,'MER-VSXLqn','Charges for merchant payment #MER-VSXLqn',NULL,NULL),(310,41,'1025.71',NULL,NULL,NULL,NULL,'MER-TFUIZ8','Charges for merchant payment #MER-TFUIZ8',NULL,NULL),(311,41,'3000',NULL,NULL,NULL,NULL,'ST-TEJJnY','Charges for withdrawal #ST-TEJJnY',NULL,NULL),(312,41,'3000',NULL,NULL,NULL,NULL,'ST-82pfm6','Charges for withdrawal #ST-82pfm6',NULL,NULL),(313,41,'1800',NULL,NULL,NULL,NULL,'ST-BR5OW6','Charges for withdrawal #ST-BR5OW6',NULL,NULL),(314,41,'2100',NULL,NULL,NULL,NULL,'ST-Fb0bY7','Charges for withdrawal #ST-Fb0bY7',NULL,NULL),(315,41,'300',NULL,NULL,NULL,NULL,'ST-uOraAn','Charges for withdrawal #ST-uOraAn',NULL,NULL),(316,41,'150',NULL,NULL,NULL,NULL,'ST-BfWN1z','Charges for withdrawal #ST-BfWN1z',NULL,NULL),(317,41,'150',NULL,NULL,NULL,NULL,'ST-JD0D00','Charges for withdrawal #ST-JD0D00',NULL,NULL),(318,41,'1500',NULL,NULL,NULL,NULL,'ST-ADDdyQ','Charges for withdrawal #ST-ADDdyQ',NULL,NULL),(319,41,'3600',NULL,NULL,NULL,NULL,'ST-82wlvW','Charges for withdrawal #ST-82wlvW',NULL,NULL),(320,41,'3000',NULL,NULL,NULL,NULL,'ST-xKvDnN','Charges for withdrawal #ST-xKvDnN',NULL,NULL),(321,41,'1800',NULL,NULL,NULL,NULL,'DN-vArCAQ','Received Donation for Payment Link #DN-YjbEuN',NULL,NULL),(322,41,'3000',NULL,NULL,NULL,NULL,'WLFH42Zeb4yeD3Lz','Charges for BTC purchase #BTC-lg7Ooj',NULL,NULL),(323,41,'0',NULL,NULL,NULL,NULL,'ORD-QPlOPF','Received payment for order #ORD-QPlOPF',NULL,NULL),(324,41,'2000',NULL,NULL,NULL,NULL,'ORD-DA5kcd','Received payment for order #ORD-DA5kcd',NULL,NULL),(325,41,'4000',NULL,NULL,NULL,NULL,'ORD-8eR6JQ','Received payment for order #ORD-8eR6JQ',NULL,NULL),(326,41,'2000',NULL,NULL,NULL,NULL,'ORD-bhYtqO','Received payment for order #ORD-bhYtqO',NULL,NULL),(327,41,'8000',NULL,NULL,NULL,NULL,'ORD-LrQkhA','Received payment for order #ORD-LrQkhA',NULL,NULL),(328,41,'8000',NULL,NULL,NULL,NULL,'ORD-LrQkhA','Received payment for order #ORD-LrQkhA',NULL,NULL),(329,41,'6000',NULL,NULL,NULL,NULL,'ORD-zdQdj2','Received payment for order #ORD-zdQdj2',NULL,NULL),(330,41,'6000',NULL,NULL,NULL,NULL,'ORD-mItFzn','Received payment for order #ORD-mItFzn',NULL,NULL),(340,41,'30300',NULL,NULL,NULL,NULL,'ORD-4a0ZTS','Received payment for order #ORD-4a0ZTS',NULL,NULL),(341,41,'252300',NULL,NULL,NULL,NULL,'ORD-K2vyGg','Received payment for order #ORD-K2vyGg',NULL,NULL),(342,41,'1400',NULL,NULL,NULL,NULL,'ORD-zCliof','Received payment for order #ORD-zCliof',NULL,NULL),(343,48,'300',NULL,NULL,NULL,NULL,'MyGaczx3n0V0hxSO','Verified Funding Request of 30300NGN via Card',NULL,NULL),(344,48,'500',NULL,NULL,NULL,NULL,'VC-lnYXIr','Virtual Card creation charge #',NULL,NULL),(345,48,'100',NULL,NULL,NULL,NULL,'VC-wkjL2i','Virtual Card funding charge #',NULL,NULL),(346,48,'400',NULL,NULL,NULL,NULL,'VC-U2m2hN','Virtual Card creation charge #',NULL,NULL),(347,41,'100',NULL,NULL,NULL,NULL,'TR-uxkqHX','Charges for transfer #TR-uxkqHX',NULL,NULL),(348,41,'1000',NULL,NULL,NULL,NULL,'VC-ZA7hEb','Virtual Card creation charge #',NULL,NULL),(349,41,'500',NULL,NULL,NULL,NULL,'VC-xEYulb','Virtual Card creation charge #',NULL,NULL);
/*!40000 ALTER TABLE `charges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compliance`
--

DROP TABLE IF EXISTS `compliance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compliance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `first_name` text COLLATE utf8mb4_unicode_ci,
  `last_name` text COLLATE utf8mb4_unicode_ci,
  `day` int DEFAULT NULL,
  `month` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` text COLLATE utf8mb4_unicode_ci,
  `id_type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcard` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `website` text COLLATE utf8mb4_unicode_ci,
  `country` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `city` text COLLATE utf8mb4_unicode_ci,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `phone_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_type` text COLLATE utf8mb4_unicode_ci,
  `industry` text COLLATE utf8mb4_unicode_ci,
  `category` text COLLATE utf8mb4_unicode_ci,
  `staff_size` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `trading_name` text COLLATE utf8mb4_unicode_ci,
  `legal_name` text COLLATE utf8mb4_unicode_ci,
  `proof` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compliance`
--

LOCK TABLES `compliance` WRITE;
/*!40000 ALTER TABLE `compliance` DISABLE KEYS */;
INSERT INTO `compliance` VALUES (2,41,'asdfgh','sadfgh',30,'Mar','2001','Anguilla','International Passport','idcard1611705156png','aasdfghj',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Starter Business','Incorporated Company','Health','Herbal Medicine','1-5','asdfgh','Boomchart',NULL,'proof1611705067jpg',2,NULL,NULL),(3,48,'sdfgh','asdsfgh',12,'Mar','1994','-1','Voters Card','idcard1611868864png','qwedfg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Registered Business','Free Zone Entity','Hospitality','Restaurants','1-5','asdfg','sdfghj','aasdfgh','proof1611868919png',1,NULL,NULL);
/*!40000 ALTER TABLE `compliance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country` (
  `id` int NOT NULL AUTO_INCREMENT,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` smallint DEFAULT NULL,
  `phonecode` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'AF','AFGHANISTAN','Afghanistan','AFG',4,93),(2,'AL','ALBANIA','Albania','ALB',8,355),(3,'DZ','ALGERIA','Algeria','DZA',12,213),(4,'AS','AMERICAN SAMOA','American Samoa','ASM',16,1684),(5,'AD','ANDORRA','Andorra','AND',20,376),(6,'AO','ANGOLA','Angola','AGO',24,244),(7,'AI','ANGUILLA','Anguilla','AIA',660,1264),(8,'AQ','ANTARCTICA','Antarctica',NULL,NULL,0),(9,'AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28,1268),(10,'AR','ARGENTINA','Argentina','ARG',32,54),(11,'AM','ARMENIA','Armenia','ARM',51,374),(12,'AW','ARUBA','Aruba','ABW',533,297),(13,'AU','AUSTRALIA','Australia','AUS',36,61),(14,'AT','AUSTRIA','Austria','AUT',40,43),(15,'AZ','AZERBAIJAN','Azerbaijan','AZE',31,994),(16,'BS','BAHAMAS','Bahamas','BHS',44,1242),(17,'BH','BAHRAIN','Bahrain','BHR',48,973),(18,'BD','BANGLADESH','Bangladesh','BGD',50,880),(19,'BB','BARBADOS','Barbados','BRB',52,1246),(20,'BY','BELARUS','Belarus','BLR',112,375),(21,'BE','BELGIUM','Belgium','BEL',56,32),(22,'BZ','BELIZE','Belize','BLZ',84,501),(23,'BJ','BENIN','Benin','BEN',204,229),(24,'BM','BERMUDA','Bermuda','BMU',60,1441),(25,'BT','BHUTAN','Bhutan','BTN',64,975),(26,'BO','BOLIVIA','Bolivia','BOL',68,591),(27,'BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70,387),(28,'BW','BOTSWANA','Botswana','BWA',72,267),(29,'BV','BOUVET ISLAND','Bouvet Island',NULL,NULL,0),(30,'BR','BRAZIL','Brazil','BRA',76,55),(31,'IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL,246),(32,'BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96,673),(33,'BG','BULGARIA','Bulgaria','BGR',100,359),(34,'BF','BURKINA FASO','Burkina Faso','BFA',854,226),(35,'BI','BURUNDI','Burundi','BDI',108,257),(36,'KH','CAMBODIA','Cambodia','KHM',116,855),(37,'CM','CAMEROON','Cameroon','CMR',120,237),(38,'CA','CANADA','Canada','CAN',124,1),(39,'CV','CAPE VERDE','Cape Verde','CPV',132,238),(40,'KY','CAYMAN ISLANDS','Cayman Islands','CYM',136,1345),(41,'CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140,236),(42,'TD','CHAD','Chad','TCD',148,235),(43,'CL','CHILE','Chile','CHL',152,56),(44,'CN','CHINA','China','CHN',156,86),(45,'CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL,61),(46,'CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL,672),(47,'CO','COLOMBIA','Colombia','COL',170,57),(48,'KM','COMOROS','Comoros','COM',174,269),(49,'CG','CONGO','Congo','COG',178,242),(50,'CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180,242),(51,'CK','COOK ISLANDS','Cook Islands','COK',184,682),(52,'CR','COSTA RICA','Costa Rica','CRI',188,506),(53,'CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384,225),(54,'HR','CROATIA','Croatia','HRV',191,385),(55,'CU','CUBA','Cuba','CUB',192,53),(56,'CY','CYPRUS','Cyprus','CYP',196,357),(57,'CZ','CZECH REPUBLIC','Czech Republic','CZE',203,420),(58,'DK','DENMARK','Denmark','DNK',208,45),(59,'DJ','DJIBOUTI','Djibouti','DJI',262,253),(60,'DM','DOMINICA','Dominica','DMA',212,1767),(61,'DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214,1809),(62,'EC','ECUADOR','Ecuador','ECU',218,593),(63,'EG','EGYPT','Egypt','EGY',818,20),(64,'SV','EL SALVADOR','El Salvador','SLV',222,503),(65,'GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226,240),(66,'ER','ERITREA','Eritrea','ERI',232,291),(67,'EE','ESTONIA','Estonia','EST',233,372),(68,'ET','ETHIOPIA','Ethiopia','ETH',231,251),(69,'FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238,500),(70,'FO','FAROE ISLANDS','Faroe Islands','FRO',234,298),(71,'FJ','FIJI','Fiji','FJI',242,679),(72,'FI','FINLAND','Finland','FIN',246,358),(73,'FR','FRANCE','France','FRA',250,33),(74,'GF','FRENCH GUIANA','French Guiana','GUF',254,594),(75,'PF','FRENCH POLYNESIA','French Polynesia','PYF',258,689),(76,'TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL,0),(77,'GA','GABON','Gabon','GAB',266,241),(78,'GM','GAMBIA','Gambia','GMB',270,220),(79,'GE','GEORGIA','Georgia','GEO',268,995),(80,'DE','GERMANY','Germany','DEU',276,49),(81,'GH','GHANA','Ghana','GHA',288,233),(82,'GI','GIBRALTAR','Gibraltar','GIB',292,350),(83,'GR','GREECE','Greece','GRC',300,30),(84,'GL','GREENLAND','Greenland','GRL',304,299),(85,'GD','GRENADA','Grenada','GRD',308,1473),(86,'GP','GUADELOUPE','Guadeloupe','GLP',312,590),(87,'GU','GUAM','Guam','GUM',316,1671),(88,'GT','GUATEMALA','Guatemala','GTM',320,502),(89,'GN','GUINEA','Guinea','GIN',324,224),(90,'GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624,245),(91,'GY','GUYANA','Guyana','GUY',328,592),(92,'HT','HAITI','Haiti','HTI',332,509),(93,'HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL,0),(94,'VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336,39),(95,'HN','HONDURAS','Honduras','HND',340,504),(96,'HK','HONG KONG','Hong Kong','HKG',344,852),(97,'HU','HUNGARY','Hungary','HUN',348,36),(98,'IS','ICELAND','Iceland','ISL',352,354),(99,'IN','INDIA','India','IND',356,91),(100,'ID','INDONESIA','Indonesia','IDN',360,62),(101,'IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364,98),(102,'IQ','IRAQ','Iraq','IRQ',368,964),(103,'IE','IRELAND','Ireland','IRL',372,353),(104,'IL','ISRAEL','Israel','ISR',376,972),(105,'IT','ITALY','Italy','ITA',380,39),(106,'JM','JAMAICA','Jamaica','JAM',388,1876),(107,'JP','JAPAN','Japan','JPN',392,81),(108,'JO','JORDAN','Jordan','JOR',400,962),(109,'KZ','KAZAKHSTAN','Kazakhstan','KAZ',398,7),(110,'KE','KENYA','Kenya','KEN',404,254),(111,'KI','KIRIBATI','Kiribati','KIR',296,686),(112,'KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408,850),(113,'KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410,82),(114,'KW','KUWAIT','Kuwait','KWT',414,965),(115,'KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417,996),(116,'LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418,856),(117,'LV','LATVIA','Latvia','LVA',428,371),(118,'LB','LEBANON','Lebanon','LBN',422,961),(119,'LS','LESOTHO','Lesotho','LSO',426,266),(120,'LR','LIBERIA','Liberia','LBR',430,231),(121,'LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434,218),(122,'LI','LIECHTENSTEIN','Liechtenstein','LIE',438,423),(123,'LT','LITHUANIA','Lithuania','LTU',440,370),(124,'LU','LUXEMBOURG','Luxembourg','LUX',442,352),(125,'MO','MACAO','Macao','MAC',446,853),(126,'MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807,389),(127,'MG','MADAGASCAR','Madagascar','MDG',450,261),(128,'MW','MALAWI','Malawi','MWI',454,265),(129,'MY','MALAYSIA','Malaysia','MYS',458,60),(130,'MV','MALDIVES','Maldives','MDV',462,960),(131,'ML','MALI','Mali','MLI',466,223),(132,'MT','MALTA','Malta','MLT',470,356),(133,'MH','MARSHALL ISLANDS','Marshall Islands','MHL',584,692),(134,'MQ','MARTINIQUE','Martinique','MTQ',474,596),(135,'MR','MAURITANIA','Mauritania','MRT',478,222),(136,'MU','MAURITIUS','Mauritius','MUS',480,230),(137,'YT','MAYOTTE','Mayotte',NULL,NULL,269),(138,'MX','MEXICO','Mexico','MEX',484,52),(139,'FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583,691),(140,'MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498,373),(141,'MC','MONACO','Monaco','MCO',492,377),(142,'MN','MONGOLIA','Mongolia','MNG',496,976),(143,'MS','MONTSERRAT','Montserrat','MSR',500,1664),(144,'MA','MOROCCO','Morocco','MAR',504,212),(145,'MZ','MOZAMBIQUE','Mozambique','MOZ',508,258),(146,'MM','MYANMAR','Myanmar','MMR',104,95),(147,'NA','NAMIBIA','Namibia','NAM',516,264),(148,'NR','NAURU','Nauru','NRU',520,674),(149,'NP','NEPAL','Nepal','NPL',524,977),(150,'NL','NETHERLANDS','Netherlands','NLD',528,31),(151,'AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530,599),(152,'NC','NEW CALEDONIA','New Caledonia','NCL',540,687),(153,'NZ','NEW ZEALAND','New Zealand','NZL',554,64),(154,'NI','NICARAGUA','Nicaragua','NIC',558,505),(155,'NE','NIGER','Niger','NER',562,227),(156,'NG','NIGERIA','Nigeria','NGA',566,234),(157,'NU','NIUE','Niue','NIU',570,683),(158,'NF','NORFOLK ISLAND','Norfolk Island','NFK',574,672),(159,'MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580,1670),(160,'NO','NORWAY','Norway','NOR',578,47),(161,'OM','OMAN','Oman','OMN',512,968),(162,'PK','PAKISTAN','Pakistan','PAK',586,92),(163,'PW','PALAU','Palau','PLW',585,680),(164,'PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL,970),(165,'PA','PANAMA','Panama','PAN',591,507),(166,'PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598,675),(167,'PY','PARAGUAY','Paraguay','PRY',600,595),(168,'PE','PERU','Peru','PER',604,51),(169,'PH','PHILIPPINES','Philippines','PHL',608,63),(170,'PN','PITCAIRN','Pitcairn','PCN',612,0),(171,'PL','POLAND','Poland','POL',616,48),(172,'PT','PORTUGAL','Portugal','PRT',620,351),(173,'PR','PUERTO RICO','Puerto Rico','PRI',630,1787),(174,'QA','QATAR','Qatar','QAT',634,974),(175,'RE','REUNION','Reunion','REU',638,262),(176,'RO','ROMANIA','Romania','ROM',642,40),(177,'RU','RUSSIAN FEDERATION','Russian Federation','RUS',643,70),(178,'RW','RWANDA','Rwanda','RWA',646,250),(179,'SH','SAINT HELENA','Saint Helena','SHN',654,290),(180,'KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659,1869),(181,'LC','SAINT LUCIA','Saint Lucia','LCA',662,1758),(182,'PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666,508),(183,'VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670,1784),(184,'WS','SAMOA','Samoa','WSM',882,684),(185,'SM','SAN MARINO','San Marino','SMR',674,378),(186,'ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678,239),(187,'SA','SAUDI ARABIA','Saudi Arabia','SAU',682,966),(188,'SN','SENEGAL','Senegal','SEN',686,221),(189,'CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL,381),(190,'SC','SEYCHELLES','Seychelles','SYC',690,248),(191,'SL','SIERRA LEONE','Sierra Leone','SLE',694,232),(192,'SG','SINGAPORE','Singapore','SGP',702,65),(193,'SK','SLOVAKIA','Slovakia','SVK',703,421),(194,'SI','SLOVENIA','Slovenia','SVN',705,386),(195,'SB','SOLOMON ISLANDS','Solomon Islands','SLB',90,677),(196,'SO','SOMALIA','Somalia','SOM',706,252),(197,'ZA','SOUTH AFRICA','South Africa','ZAF',710,27),(198,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL,0),(199,'ES','SPAIN','Spain','ESP',724,34),(200,'LK','SRI LANKA','Sri Lanka','LKA',144,94),(201,'SD','SUDAN','Sudan','SDN',736,249),(202,'SR','SURINAME','Suriname','SUR',740,597),(203,'SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744,47),(204,'SZ','SWAZILAND','Swaziland','SWZ',748,268),(205,'SE','SWEDEN','Sweden','SWE',752,46),(206,'CH','SWITZERLAND','Switzerland','CHE',756,41),(207,'SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760,963),(208,'TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158,886),(209,'TJ','TAJIKISTAN','Tajikistan','TJK',762,992),(210,'TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834,255),(211,'TH','THAILAND','Thailand','THA',764,66),(212,'TL','TIMOR-LESTE','Timor-Leste',NULL,NULL,670),(213,'TG','TOGO','Togo','TGO',768,228),(214,'TK','TOKELAU','Tokelau','TKL',772,690),(215,'TO','TONGA','Tonga','TON',776,676),(216,'TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780,1868),(217,'TN','TUNISIA','Tunisia','TUN',788,216),(218,'TR','TURKEY','Turkey','TUR',792,90),(219,'TM','TURKMENISTAN','Turkmenistan','TKM',795,7370),(220,'TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796,1649),(221,'TV','TUVALU','Tuvalu','TUV',798,688),(222,'UG','UGANDA','Uganda','UGA',800,256),(223,'UA','UKRAINE','Ukraine','UKR',804,380),(224,'AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784,971),(225,'GB','UNITED KINGDOM','United Kingdom','GBR',826,44),(226,'US','UNITED STATES','United States','USA',840,1),(227,'UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL,1),(228,'UY','URUGUAY','Uruguay','URY',858,598),(229,'UZ','UZBEKISTAN','Uzbekistan','UZB',860,998),(230,'VU','VANUATU','Vanuatu','VUT',548,678),(231,'VE','VENEZUELA','Venezuela','VEN',862,58),(232,'VN','VIET NAM','Viet Nam','VNM',704,84),(233,'VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92,1284),(234,'VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850,1340),(235,'WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876,681),(236,'EH','WESTERN SAHARA','Western Sahara','ESH',732,212),(237,'YE','YEMEN','Yemen','YEM',887,967),(238,'ZM','ZAMBIA','Zambia','ZMB',894,260),(239,'ZW','ZIMBABWE','Zimbabwe','ZWE',716,263);
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country_supported`
--

DROP TABLE IF EXISTS `country_supported`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `country_supported` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country_supported`
--

LOCK TABLES `country_supported` WRITE;
/*!40000 ALTER TABLE `country_supported` DISABLE KEYS */;
INSERT INTO `country_supported` VALUES (1,13,NULL,NULL),(2,81,NULL,NULL),(3,156,NULL,NULL),(4,81,NULL,NULL),(5,80,NULL,NULL),(6,98,NULL,NULL),(7,229,NULL,NULL);
/*!40000 ALTER TABLE `country_supported` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currency` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currency`
--

LOCK TABLES `currency` WRITE;
/*!40000 ALTER TABLE `currency` DISABLE KEYS */;
INSERT INTO `currency` VALUES (1,'Albania','Leke','ALL','Lek',NULL,0,NULL,NULL),(3,'Afghanistan','Afghanis','AFN','؋',NULL,0,NULL,NULL),(4,'Argentina','Pesos','ARS','$',NULL,0,NULL,NULL),(5,'Aruba','Guilders','AWG','ƒ',NULL,0,NULL,NULL),(6,'Australia','Dollars','AUD','$',NULL,0,NULL,NULL),(7,'Azerbaijan','New Manats','AZN','ман',NULL,0,NULL,NULL),(8,'Bahamas','Dollars','BSD','$',NULL,0,NULL,NULL),(9,'Barbados','Dollars','BBD','$',NULL,0,NULL,NULL),(10,'Belarus','Rubles','BYR','p.',NULL,0,NULL,NULL),(11,'Belgium','Euro','EUR','€',NULL,0,NULL,NULL),(12,'Beliz','Dollars','BZD','BZ$',NULL,0,NULL,NULL),(13,'Bermuda','Dollars','BMD','$',NULL,0,NULL,NULL),(14,'Bolivia','Bolivianos','BOB','$b',NULL,0,NULL,NULL),(15,'Bosnia and Herzegovina','Convertible Marka','BAM','KM',NULL,0,NULL,NULL),(16,'Botswana','Pula','BWP','P',NULL,0,NULL,NULL),(17,'Bulgaria','Leva','BGN','лв',NULL,0,NULL,NULL),(18,'Brazil','Reais','BRL','R$',NULL,0,NULL,NULL),(19,'Britain (United Kingdom)','Pounds','GBP','£',NULL,0,NULL,NULL),(20,'Brunei Darussalam','Dollars','BND','$',NULL,0,NULL,NULL),(21,'Cambodia','Riels','KHR','៛',NULL,0,NULL,NULL),(22,'Canada','Dollars','CAD','$',NULL,0,NULL,NULL),(23,'Cayman Islands','Dollars','KYD','$',NULL,0,NULL,NULL),(24,'Chile','Pesos','CLP','$',NULL,0,NULL,NULL),(25,'China','Yuan Renminbi','CNY','¥',NULL,0,NULL,NULL),(26,'Colombia','Pesos','COP','$',NULL,0,NULL,NULL),(27,'Costa Rica','Colón','CRC','₡',NULL,0,NULL,NULL),(28,'Croatia','Kuna','HRK','kn',NULL,0,NULL,NULL),(29,'Cuba','Pesos','CUP','₱',NULL,0,NULL,NULL),(30,'Cyprus','Euro','EUR','€',NULL,0,NULL,NULL),(31,'Czech Republic','Koruny','CZK','Kč',NULL,0,NULL,NULL),(32,'Denmark','Kroner','DKK','kr',NULL,0,NULL,NULL),(33,'Dominican Republic','Pesos','DOP ','RD$',NULL,0,NULL,NULL),(34,'East Caribbean','Dollars','XCD','$',NULL,0,NULL,NULL),(35,'Egypt','Pounds','EGP','£',NULL,1,NULL,'2021-02-09 21:12:03'),(36,'El Salvador','Colones','SVC','$',NULL,0,NULL,NULL),(37,'England (United Kingdom)','Pounds','GBP','£',NULL,0,NULL,NULL),(38,'Euro','Euro','EUR','€',NULL,0,NULL,NULL),(39,'Falkland Islands','Pounds','FKP','£',NULL,0,NULL,NULL),(40,'Fiji','Dollars','FJD','$',NULL,0,NULL,NULL),(41,'France','Euro','EUR','€',NULL,0,NULL,NULL),(42,'Ghana','Cedis','GHS','¢',NULL,0,NULL,NULL),(43,'Gibraltar','Pounds','GIP','£',NULL,0,NULL,NULL),(44,'Greece','Euro','EUR','€',NULL,0,NULL,NULL),(45,'Guatemala','Quetzales','GTQ','Q',NULL,0,NULL,NULL),(46,'Guernsey','Pounds','GGP','£',NULL,0,NULL,NULL),(47,'Guyana','Dollars','GYD','$',NULL,0,NULL,NULL),(48,'Holland (Netherlands)','Euro','EUR','€',NULL,0,NULL,NULL),(49,'Honduras','Lempiras','HNL','L',NULL,0,NULL,NULL),(50,'Hong Kong','Dollars','HKD','$',NULL,0,NULL,NULL),(51,'Hungary','Forint','HUF','Ft',NULL,0,NULL,NULL),(52,'Iceland','Kronur','ISK','kr',NULL,0,NULL,NULL),(53,'India','Rupees','INR','Rp',NULL,0,NULL,NULL),(54,'Indonesia','Rupiahs','IDR','Rp',NULL,0,NULL,NULL),(55,'Iran','Rials','IRR','﷼',NULL,0,NULL,NULL),(56,'Ireland','Euro','EUR','€',NULL,0,NULL,NULL),(57,'Isle of Man','Pounds','IMP','£',NULL,0,NULL,NULL),(58,'Israel','New Shekels','ILS','₪',NULL,0,NULL,NULL),(59,'Italy','Euro','EUR','€',NULL,0,NULL,NULL),(60,'Jamaica','Dollars','JMD','J$',NULL,0,NULL,NULL),(61,'Japan','Yen','JPY','¥',NULL,0,NULL,NULL),(62,'Jersey','Pounds','JEP','£',NULL,0,NULL,NULL),(63,'Kazakhstan','Tenge','KZT','лв',NULL,0,NULL,NULL),(64,'Korea (North)','Won','KPW','₩',NULL,0,NULL,NULL),(65,'Korea (South)','Won','KRW','₩',NULL,0,NULL,NULL),(66,'Kyrgyzstan','Soms','KGS','лв',NULL,0,NULL,NULL),(67,'Laos','Kips','LAK','₭',NULL,0,NULL,NULL),(68,'Latvia','Lati','LVL','Ls',NULL,0,NULL,NULL),(69,'Lebanon','Pounds','LBP','£',NULL,0,NULL,NULL),(70,'Liberia','Dollars','LRD','$',NULL,0,NULL,NULL),(71,'Liechtenstein','Switzerland Francs','CHF','CHF',NULL,0,NULL,NULL),(72,'Lithuania','Litai','LTL','Lt',NULL,0,NULL,NULL),(73,'Luxembourg','Euro','EUR','€',NULL,0,NULL,NULL),(74,'Macedonia','Denars','MKD','ден',NULL,0,NULL,NULL),(75,'Malaysia','Ringgits','MYR','RM',NULL,0,NULL,NULL),(76,'Malta','Euro','EUR','€',NULL,0,NULL,NULL),(77,'Mauritius','Rupees','MUR','₨',NULL,0,NULL,NULL),(78,'Mexico','Pesos','MXN','$',NULL,0,NULL,NULL),(79,'Mongolia','Tugriks','MNT','₮',NULL,0,NULL,NULL),(80,'Mozambique','Meticais','MZN','MT',NULL,0,NULL,NULL),(81,'Namibia','Dollars','NAD','$',NULL,0,NULL,NULL),(82,'Nepal','Rupees','NPR','₨',NULL,0,NULL,NULL),(83,'Netherlands Antilles','Guilders','ANG','ƒ',NULL,0,NULL,NULL),(84,'Netherlands','Euro','EUR','€',NULL,0,NULL,NULL),(85,'New Zealand','Dollars','NZD','$',NULL,0,NULL,NULL),(86,'Nicaragua','Cordobas','NIO','C$',NULL,0,NULL,NULL),(87,'Nigeria','Nairas','NGN','₦',390,0,NULL,'2021-02-09 21:12:03'),(88,'North Korea','Won','KPW','₩',NULL,0,NULL,NULL),(89,'Norway','Krone','NOK','kr',NULL,0,NULL,NULL),(90,'Oman','Rials','OMR','﷼',NULL,0,NULL,NULL),(91,'Pakistan','Rupees','PKR','₨',NULL,0,NULL,NULL),(92,'Panama','Balboa','PAB','B/.',NULL,0,NULL,NULL),(93,'Paraguay','Guarani','PYG','Gs',NULL,0,NULL,NULL),(94,'Peru','Nuevos Soles','PEN','S/.',NULL,0,NULL,NULL),(95,'Philippines','Pesos','PHP','Php',NULL,0,NULL,NULL),(96,'Poland','Zlotych','PLN','zł',NULL,0,NULL,NULL),(97,'Qatar','Rials','QAR','﷼',NULL,0,NULL,NULL),(98,'Romania','New Lei','RON','lei',NULL,0,NULL,NULL),(99,'Russia','Rubles','RUB','руб',NULL,0,NULL,NULL),(100,'Saint Helena','Pounds','SHP','£',NULL,0,NULL,NULL),(101,'Saudi Arabia','Riyals','SAR','﷼',NULL,0,NULL,NULL),(102,'Serbia','Dinars','RSD','Дин.',NULL,0,NULL,NULL),(103,'Seychelles','Rupees','SCR','₨',NULL,0,NULL,NULL),(104,'Singapore','Dollars','SGD','$',NULL,0,NULL,NULL),(105,'Slovenia','Euro','EUR','€',NULL,0,NULL,NULL),(106,'Solomon Islands','Dollars','SBD','$',NULL,0,NULL,NULL),(107,'Somalia','Shillings','SOS','S',NULL,0,NULL,NULL),(108,'South Africa','Rand','ZAR','R',NULL,0,NULL,NULL),(109,'South Korea','Won','KRW','₩',NULL,0,NULL,NULL),(110,'Spain','Euro','EUR','€',NULL,0,NULL,NULL),(111,'Sri Lanka','Rupees','LKR','₨',NULL,0,NULL,NULL),(112,'Sweden','Kronor','SEK','kr',NULL,0,NULL,NULL),(113,'Switzerland','Francs','CHF','CHF',NULL,0,NULL,NULL),(114,'Suriname','Dollars','SRD','$',NULL,0,NULL,NULL),(115,'Syria','Pounds','SYP','£',NULL,0,NULL,NULL),(116,'Taiwan','New Dollars','TWD','NT$',NULL,0,NULL,NULL),(117,'Thailand','Baht','THB','฿',NULL,0,NULL,NULL),(118,'Trinidad and Tobago','Dollars','TTD','TT$',NULL,0,NULL,NULL),(119,'Turkey','Lira','TRY','TL',NULL,0,NULL,NULL),(120,'Turkey','Liras','TRL','£',NULL,0,NULL,NULL),(121,'Tuvalu','Dollars','TVD','$',NULL,0,NULL,NULL),(122,'Ukraine','Hryvnia','UAH','₴',NULL,0,NULL,NULL),(123,'United Kingdom','Pounds','GBP','£',NULL,0,NULL,NULL),(124,'United States of America','Dollars','USD','$',NULL,0,NULL,NULL),(125,'Uruguay','Pesos','UYU','$U',NULL,0,NULL,NULL),(126,'Uzbekistan','Sums','UZS','лв',NULL,0,NULL,NULL),(127,'Vatican City','Euro','EUR','€',NULL,0,NULL,NULL),(128,'Venezuela','Bolivares Fuertes','VEF','Bs',NULL,0,NULL,NULL),(129,'Vietnam','Dong','VND','₫',NULL,0,NULL,NULL),(130,'Yemen','Rials','YER','﷼',NULL,0,NULL,NULL),(131,'Zimbabwe','Zimbabwe Dollars','ZWD','Z$',NULL,0,NULL,NULL),(132,'India','Rupees','INR','₹',NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposit`
--

DROP TABLE IF EXISTS `deposit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deposit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `token` int NOT NULL,
  `trans_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposit`
--

LOCK TABLES `deposit` WRITE;
/*!40000 ALTER TABLE `deposit` DISABLE KEYS */;
INSERT INTO `deposit` VALUES (29,11,'100','2','2019-08-16 13:27:35',0,242331,'',''),(30,11,'1000000','2','2019-08-29 05:18:12',0,1567048693,'zMwZ8WWAasBqbeu7hmMK','Paid'),(31,11,'0','Bitcoin','2019-09-06 17:55:51',0,1567785352,'xpAGtoelWiDdPVgiBMGr','Domain purchase');
/*!40000 ALTER TABLE `deposit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deposits`
--

DROP TABLE IF EXISTS `deposits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deposits` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `gateway_id` int DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_amo` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `secret` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` text COLLATE utf8mb4_unicode_ci,
  `status_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deposits`
--

LOCK TABLES `deposits` WRITE;
/*!40000 ALTER TABLE `deposits` DISABLE KEYS */;
INSERT INTO `deposits` VALUES (1,41,103,'12.12','0.12',NULL,NULL,'EBnyd2IXqQx62Rog',0,'q72GkmSC',NULL,NULL,'2021-02-09 21:22:02','2021-02-09 21:22:02');
/*!40000 ALTER TABLE `deposits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `anonymous` int NOT NULL DEFAULT '0',
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donations`
--

LOCK TABLES `donations` WRITE;
/*!40000 ALTER TABLE `donations` DISABLE KEYS */;
INSERT INTO `donations` VALUES (15,NULL,'20000',1,0,'o3Lte67WR09KwLLc',7,NULL,NULL),(22,NULL,'4000',1,1,'Z2aSP4hsu1asN9YL',9,NULL,NULL),(23,NULL,'10000',1,1,'13CNtowdkEkRLg36',9,NULL,NULL),(36,41,'300',1,1,'P4gjLYgEo8lys7df',12,NULL,NULL),(37,41,'20000',1,0,'srYdShdMjpJIuknr',12,NULL,NULL),(38,41,'100',1,1,'vlWZnv0UZ5RaEjhV',12,NULL,NULL),(39,41,'3000',1,0,'vVwpJyGqEeJQ0P45',17,NULL,NULL),(40,41,'5000',1,0,'Ftmn3WgppeSl5cT0',17,NULL,NULL),(41,41,'4000',1,1,'d3Um9xCe3CTuRZju',17,NULL,NULL),(42,41,'4000',1,1,'dp0qxarG2V7PDu9v',17,NULL,NULL),(43,41,'4000',1,1,'TBeRbqUzjCz6vFoK',17,NULL,NULL),(44,NULL,'5000',1,1,'1siwUNWx4SCK2wmu',17,NULL,NULL),(45,NULL,'300000',1,1,'nSvWnmUy1lcyAFXu',17,NULL,NULL),(46,NULL,'30000',1,1,'GgGSZ8y7iwaCvwmO',18,NULL,NULL),(47,NULL,'3000',0,0,'DN-jOqZPA',20,NULL,NULL),(48,NULL,'3000',1,0,'DN-QKsjbx',20,NULL,NULL),(50,NULL,'50000',1,1,'DN-sNsDLd',20,NULL,NULL),(51,NULL,'3000',0,0,'DN-QA0Qxy',20,NULL,NULL),(52,NULL,'20000',1,1,'DN-5PD6fN',20,NULL,NULL),(54,NULL,'3000',1,1,'DN-ExHG1w',20,NULL,NULL),(55,41,'30000',1,1,'DN-vArCAQ',20,NULL,NULL);
/*!40000 ALTER TABLE `donations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ext_transfer`
--

DROP TABLE IF EXISTS `ext_transfer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ext_transfer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `quantity` int DEFAULT NULL,
  `reference` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `receiver_id` int DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `charge` int DEFAULT NULL,
  `merchant_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callback_url` text COLLATE utf8mb4_unicode_ci,
  `tx_ref` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `merchant_key` (`merchant_key`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ext_transfer`
--

LOCK TABLES `ext_transfer` WRITE;
/*!40000 ALTER TABLE `ext_transfer` DISABLE KEYS */;
INSERT INTO `ext_transfer` VALUES (23,'user@test.com','Finn','Marshal','::1',NULL,'account','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'qVW7obiJP5BuVaxf',41,41,205.55,2055.5,21,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','xXIJ4T7hyekpKXJ6',1,NULL,NULL),(24,'user@test.com','Finn','Marshal','::1',NULL,'account','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'9gF5dSURbdXCfoKv',41,41,308.07,3080.7,308,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','PDcqQbFc4SGJmJrP',1,NULL,NULL),(25,'user@test.com','Finn','Marshal','::1',NULL,'account','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'MER-sgDbmI',41,41,103.03,1030.3,103,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','PlYgZjyzZmx1We4B',1,NULL,NULL),(26,'user@test.com','Finn','Marshal','::1',NULL,'card','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'MER-8i0cqX',NULL,41,1025.71,10257.1,103,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','51Dy72ohHyW0p1fQ',1,NULL,NULL),(27,'user@test.com','Finn','Marshal','::1',NULL,'card','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'MER-e6rF2A',NULL,41,1025.71,10257.1,103,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','70Vkm7WVlvF9INko',1,NULL,NULL),(28,'user@test.com','Finn','Marshal','::1',NULL,'account','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'MER-VSXLqn',41,41,103.03,1030.3,103,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','Z1aoPK4Z415VRGgu',1,NULL,NULL),(29,'user@test.com','Finn','Marshal','::1',NULL,'card','Tesla Model S','lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.',10,'MER-TFUIZ8',NULL,41,1025.71,10257.1,103,'3S1XUuTO5yp7fjeV','http://localhost/kingsmen/ipnboompay','Fr71CHZAN2cB2WLi',1,NULL,NULL);
/*!40000 ALTER TABLE `ext_transfer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (43,'What is corporate internate banking?','<p>Corporate internet banking is a secure online banking platform that enables cutomers make transfers to anyone in the world, 24 hours a day, 7 days a week</p>',NULL,NULL),(44,'Can i update my account details from any branch?','<p>Yes account update requsests can be made at any of the branches</p>',NULL,NULL),(45,'How long does it take before my account becomes inactive?','<p>Accounts become dormant after 6 months of inactivity</p>',NULL,NULL),(46,'Is it possible to open an account in the coutry and operate the account while out of the country?','<p>Yes, the account can be operated through any of our internet banking solution.</p>',NULL,NULL);
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gateways`
--

DROP TABLE IF EXISTS `gateways`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gateways` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=507 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gateways`
--

LOCK TABLES `gateways` WRITE;
/*!40000 ALTER TABLE `gateways` DISABLE KEYS */;
INSERT INTO `gateways` VALUES (101,'Paypal','Paypal','paypal.png','20','200000','1','dafuture355@gmail.com','',NULL,NULL,1,NULL,NULL),(103,'Stripe','Card','stripe.png','20','200000','1','pk_test_51HTQdaDV81Cn4OcKSjOuNkqo1KZVr1t3XbQEJvbKlqEOkwDVvcR4SXTeYfwiRatftReH9GHmIcALpTlVRz8SaHib00m65YW6mK','sk_test_51HTQdaDV81Cn4OcKm8Gpj26Em9zWcTSOj92zQrJtGHIhBDAqwXbGHxyx2lT8ScfT5iMw58cjLhozVno4y2IDEScY00TAByE3tf',NULL,NULL,1,NULL,NULL),(107,'Paystack','Paystack','paystack.png','20','200000','1','pk_live_293d04f581857487ef9b5cd8cd0f843f7728c3be','',NULL,NULL,1,NULL,NULL),(108,'Flutter','Flutter','flutter.png','20','200000','1','FLWPUBK-06d63b05eb29e07b774db3f6dc871b90-X','FLWSECK-6b1abf0e8e65353d3c18262706f164ee-X',NULL,NULL,1,NULL,NULL),(505,'Bitcoin','CoinPayment BTC','btc.png','10','50000','3','9c4a052c343dc0f52a9e468fc4c51fa58a85539fa161bbc56404fb47acfb4e7f','17A0F59aFefaFf7876C8176626e8c256fE91F2A655b502004297f73a2cd1D761',NULL,NULL,1,NULL,NULL),(506,'Ethereum','CoinPayment ETH','eth.png','10','50000','3','954466792454d50b4a7235c6b04731f8b3562d85d12ca9782f0ba7e84dbcf28b','58b485659b7EA60Dbadf247CcD756FFa10900974dbc0acEAC01f2dfd5350dAAF',NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `gateways` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main` int NOT NULL,
  `type` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,41,'21000','TR-LNyPGo',1,2,1,NULL,NULL),(2,41,'4400','VC-mLQl0h',1,2,1,NULL,NULL),(3,41,'3300','VC-SpDqlM',0,2,1,NULL,NULL),(4,41,'3300','VC-wZERnF',0,2,1,NULL,NULL),(5,41,'3300','VC-zwyPGG',0,2,1,NULL,NULL),(6,41,'3300','VC-LjBDgP',1,2,1,NULL,NULL),(7,41,'3300','VC-LOB5t1',0,2,1,NULL,NULL),(8,41,'1100','VC-hxb94j',0,2,1,NULL,NULL),(9,41,'1100','VC-uGffx2',0,2,1,NULL,NULL),(10,41,'103','BP-5hOGj9',1,2,1,NULL,NULL),(11,41,'103000','BTC-FrWmFM',1,2,1,NULL,NULL),(12,41,'140904','BTC-XeXJcV',1,1,1,NULL,NULL),(13,41,'4000','ST-kDCd9b',1,1,0,NULL,NULL),(15,41,'400000','SC-525n8z',1,NULL,1,NULL,NULL),(16,41,'1000000','DN-YjbEuN',1,NULL,1,NULL,NULL),(17,41,NULL,'MER-fDmla4',1,NULL,1,NULL,NULL),(18,41,'2484','INV-rkQsl5',1,1,1,NULL,NULL),(19,41,'270000','au6xy8JqzMGL7fKF',1,1,1,NULL,NULL),(20,41,'3348','INV-uPCJgY',1,1,1,NULL,NULL),(21,41,'376000','SC-0HvHrn',0,1,1,NULL,NULL),(22,41,'2700','DN-QKsjbx',0,1,1,NULL,NULL),(23,41,'2700','DN-MhCI4g',0,1,1,NULL,NULL),(24,41,'45000','DN-sNsDLd',0,1,1,NULL,NULL),(25,41,'18000','DN-5PD6fN',0,1,1,NULL,NULL),(26,41,'2700','DN-RQq6pA',0,1,1,NULL,NULL),(27,41,'2700','DN-ExHG1w',0,1,1,NULL,NULL),(28,41,'376000','SC-afRhSZ',0,1,1,NULL,NULL),(29,41,'42000','TR-6Jv7VJ',1,2,1,NULL,NULL),(30,41,'3150','TR-yn8OHf',1,2,1,NULL,NULL),(31,41,'4200','TR-Tn9LaK',1,2,1,NULL,NULL),(32,41,'42000','TR-VYN4im',1,2,1,NULL,NULL),(34,41,'7614','INV-C7ShAS',1,1,1,NULL,NULL),(35,41,'7614','INV-NCjgDm',0,1,1,NULL,NULL),(36,41,'3420','ORD-123456',1,1,1,NULL,NULL),(45,41,'102.571','MER-8i0cqX',0,1,1,NULL,NULL),(46,41,'1025.71','MER-e6rF2A',0,1,1,NULL,NULL),(47,41,'1025.71','MER-e6rF2A',0,1,1,NULL,NULL),(50,41,'103.03','MER-VSXLqn',0,1,1,NULL,NULL),(51,41,'1025.71','MER-TFUIZ8',0,1,1,NULL,NULL),(52,41,'100000','ST-TEJJnY',1,1,0,NULL,NULL),(53,41,'100000','ST-82pfm6',1,1,0,NULL,NULL),(54,41,'60000','ST-BR5OW6',1,1,0,NULL,NULL),(55,41,'70000','ST-Fb0bY7',1,1,0,NULL,NULL),(56,41,'10000','ST-uOraAn',1,1,0,NULL,NULL),(57,41,'5000','ST-BfWN1z',1,1,0,NULL,NULL),(58,41,'5000','ST-JD0D00',1,1,0,NULL,NULL),(59,41,'50000','ST-ADDdyQ',1,1,0,NULL,NULL),(60,41,'60000','ST-82wlvW',1,1,0,NULL,NULL),(61,41,'50000','ST-xKvDnN',1,1,0,NULL,NULL),(63,41,'27000','DN-vArCAQ',0,1,1,NULL,NULL),(64,41,'103000','BTC-lg7Ooj',1,2,1,NULL,NULL),(65,41,'0','ORD-QPlOPF',1,1,1,NULL,NULL),(66,41,'18000','ORD-DA5kcd',1,1,1,NULL,NULL),(67,41,'36000','ORD-8eR6JQ',1,1,1,NULL,NULL),(68,41,'18000','ORD-bhYtqO',1,1,1,NULL,NULL),(69,41,'72000','ORD-LrQkhA',1,1,1,NULL,NULL),(70,41,'72000','ORD-LrQkhA',1,1,1,NULL,NULL),(71,41,'54000','ORD-zdQdj2',1,1,1,NULL,NULL),(72,41,'54000','ORD-mItFzn',1,1,1,NULL,NULL),(82,41,'272700','ORD-4a0ZTS',1,1,1,NULL,NULL),(83,41,'2270700','ORD-K2vyGg',1,1,1,NULL,NULL),(84,41,'12600','ORD-zCliof',1,1,1,NULL,NULL),(85,48,'5500','VC-lnYXIr',1,2,1,NULL,NULL),(86,48,'1100','VC-wkjL2i',0,2,1,NULL,NULL),(87,48,'4400','VC-U2m2hN',1,2,1,NULL,NULL),(88,41,'2100','TR-uxkqHX',1,2,1,NULL,NULL),(89,48,'2000','TR-uxkqHX',1,1,1,NULL,NULL),(90,41,'11000','VC-ZA7hEb',1,2,1,NULL,NULL),(91,41,'5500','VC-xEYulb',1,2,1,NULL,NULL),(92,41,'163.566','INV-w6ltcA',1,1,1,'2021-02-09 21:44:28','2021-02-09 21:44:28');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` int NOT NULL,
  `due_date` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sent_date` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` int DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `quantity` int NOT NULL,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `ref_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` int DEFAULT NULL,
  `total` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `sent` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT INTO `invoices` VALUES (14,41,'info@boomchart.net',334533,'12/30/2020',NULL,2,10,1,'Sony Play station 5',NULL,'qhnAOpLAOVjMvCUI','500000',41400,'460000',1,0,NULL,NULL),(15,41,'demo@boomchart.net',33333,'2021-01-20 16:41:47',NULL,2,10,3,'idfbvu',NULL,'INV-GXAhuI','1000',NULL,'2760',0,0,NULL,NULL),(16,41,'demo@boomchart.net',33333,'2021-01-20 16:41:47',NULL,2,10,3,'idfbvu',NULL,'INV-rkQsl5','1000',248,'2760',0,0,NULL,NULL),(17,41,'info@boomchart.net',478674,'2021-01-20 18:03:27',NULL,3,10,2,'hgdvgcdg',NULL,'INV-uPCJgY','2000',335,'3720',1,0,NULL,NULL),(18,41,'info@boomchart.net',332333,'2021-01-20 20:18:42',NULL,4,10,3,'dehjcvdhv',NULL,'INV-C7ShAS','3000',761,'8460',1,0,NULL,NULL),(19,41,'ahmed1amen.g@gmail.com',12233,'2021-02-09 23:44:15',NULL,1,23,1,'sadasd',NULL,'INV-w6ltcA','233',NULL,'181.74',0,0,'2021-02-09 21:44:28','2021-02-09 21:44:28');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logo`
--

DROP TABLE IF EXISTS `logo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logo` (
  `id` int NOT NULL,
  `image_link` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link2` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dark` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logo`
--

LOCK TABLES `logo` WRITE;
/*!40000 ALTER TABLE `logo` DISABLE KEYS */;
INSERT INTO `logo` VALUES (1,'images/logo_1601871271.png','images/favicon_1610092046.jpg','images/logo_1601821066.png',NULL,NULL);
/*!40000 ALTER TABLE `logo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchants`
--

DROP TABLE IF EXISTS `merchants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `merchants` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `merchant_key` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `merchant_key_3` (`merchant_key`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchants`
--

LOCK TABLES `merchants` WRITE;
/*!40000 ALTER TABLE `merchants` DISABLE KEYS */;
INSERT INTO `merchants` VALUES (42,41,'ABRgVASTvWO7G60r','sadfg','freakboss3@gmail.com',NULL,1,NULL,NULL),(43,41,'3S1XUuTO5yp7fjeV','Stakecrypto','info@boomchart.net',NULL,1,NULL,NULL),(44,41,'88MpaPYglF6qfACI','Boomchain',NULL,'MER-fDmla4',1,NULL,NULL);
/*!40000 ALTER TABLE `merchants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2021_02_09_162627_create_sessions_table',1),(3,'2021_02_09_222322_create_about_site_table',1),(4,'2021_02_09_222322_create_admin_bank_table',1),(5,'2021_02_09_222322_create_admin_table',1),(6,'2021_02_09_222322_create_audit_logs_table',1),(7,'2021_02_09_222322_create_bank_supported_table',1),(8,'2021_02_09_222322_create_bank_table',1),(9,'2021_02_09_222322_create_bank_transfer_table',1),(10,'2021_02_09_222322_create_bill_transactions_table',1),(11,'2021_02_09_222322_create_branch_table',1),(12,'2021_02_09_222322_create_brands_table',1),(13,'2021_02_09_222322_create_btc_trades_table',1),(14,'2021_02_09_222322_create_cart_table',1),(15,'2021_02_09_222322_create_charges_table',1),(16,'2021_02_09_222322_create_compliance_table',1),(17,'2021_02_09_222322_create_contact_table',1),(18,'2021_02_09_222322_create_country_supported_table',1),(19,'2021_02_09_222322_create_country_table',1),(20,'2021_02_09_222322_create_currency_table',1),(21,'2021_02_09_222322_create_deposit_table',1),(22,'2021_02_09_222322_create_deposits_table',1),(23,'2021_02_09_222322_create_donations_table',1),(24,'2021_02_09_222322_create_ext_transfer_table',1),(25,'2021_02_09_222322_create_faq_table',1),(26,'2021_02_09_222322_create_gateways_table',1),(27,'2021_02_09_222322_create_history_table',1),(28,'2021_02_09_222322_create_invoices_table',1),(29,'2021_02_09_222322_create_logo_table',1),(30,'2021_02_09_222322_create_merchants_table',1),(31,'2021_02_09_222322_create_orders_table',1),(32,'2021_02_09_222322_create_pages_table',1),(33,'2021_02_09_222322_create_password_resets_table',1),(34,'2021_02_09_222322_create_payment_link_table',1),(35,'2021_02_09_222322_create_plan_table',1),(36,'2021_02_09_222322_create_product_category_table',1),(37,'2021_02_09_222322_create_product_image_table',1),(38,'2021_02_09_222322_create_products_table',1),(39,'2021_02_09_222322_create_reply_support_table',1),(40,'2021_02_09_222322_create_request_table',1),(41,'2021_02_09_222322_create_review_table',1),(42,'2021_02_09_222322_create_sell_cards_table',1),(43,'2021_02_09_222322_create_services_table',1),(44,'2021_02_09_222322_create_settings_table',1),(45,'2021_02_09_222322_create_shipping_table',1),(46,'2021_02_09_222322_create_social_links_table',1),(47,'2021_02_09_222322_create_storefront_products_table',1),(48,'2021_02_09_222322_create_storefront_table',1),(49,'2021_02_09_222322_create_subaccounts_table',1),(50,'2021_02_09_222322_create_subscribers_table',1),(51,'2021_02_09_222322_create_support_table',1),(52,'2021_02_09_222322_create_transactions_table',1),(53,'2021_02_09_222322_create_transfers_table',1),(54,'2021_02_09_222322_create_trending_cat_table',1),(55,'2021_02_09_222322_create_trending_table',1),(56,'2021_02_09_222322_create_ui_design_table',1),(57,'2021_02_09_222322_create_users_table',1),(58,'2021_02_09_222322_create_virtual_cards_table',1),(59,'2021_02_09_222322_create_virtual_transactions_table',1),(60,'2021_02_09_222322_create_w_history_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `first_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_id` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `charge` int DEFAULT NULL,
  `shipping_fee` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `town` text COLLATE utf8mb4_unicode_ci,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '0',
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `ship_id` int DEFAULT NULL,
  `store_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (15,27,'Julius','Boom',11,'freakboss3@gmail.com',NULL,NULL,NULL,3,5,500,2500,100,'0','Hell','Indonesia','Banten','Georgia','RCFckqqCYMrIZaPD',1,'2345568',NULL,NULL,NULL,NULL,NULL),(16,27,'Julius','Boom',11,'freakboss3@gmail.com',NULL,NULL,NULL,3,4,500,2000,80,'0','Hell','Algeria','Ain Temouchent','Georgia','R02diqM8cXivXM2Z',1,'2345568',NULL,NULL,NULL,NULL,NULL),(17,27,'Julius','Boom',11,'freakboss3@gmail.com',NULL,NULL,NULL,3,2,500,960,40,'0','Hell','Papua New Guinea','Manus','Georgia','R02diqM8cXivXM2Z',1,'2345568',NULL,NULL,NULL,NULL,NULL),(28,NULL,'wqert','sadfg',11,'sdafghsd@w.com',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghs','Afghanistan','Badakhshan','dfgh','WoX29u8VcPbKlDqy',1,'2345678986543',NULL,NULL,NULL,NULL,NULL),(29,NULL,'wqert','sadfg',11,'sdafghsd@w.com',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghs','Afghanistan','Badakhshan','dfgh','WoX29u8VcPbKlDqy',1,'2345678986543',NULL,NULL,NULL,NULL,NULL),(30,NULL,'wqert','sadfg',11,'sdafghsd@w.com',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghs','Afghanistan','Badakhshan','dfgh','WoX29u8VcPbKlDqy',1,'2345678986543',NULL,NULL,NULL,NULL,NULL),(31,NULL,'wqert','sadfg',11,'sdafghsd@w.com',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghs','Afghanistan','Badakhshan','dfgh','WoX29u8VcPbKlDqy',1,'2345678986543',NULL,NULL,NULL,NULL,NULL),(32,NULL,'asdfg','asdfg',11,'support@boomchart.net',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghjasdfgh','Albania','Delvine','sadfgh','zjIGAmxEAkqBDMcI',1,'2345678543',NULL,NULL,NULL,NULL,NULL),(33,NULL,'asdfg','asdfg',11,'support@boomchart.net',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghjasdfgh','Albania','Delvine','sadfgh','zjIGAmxEAkqBDMcI',1,'2345678543',NULL,NULL,NULL,NULL,NULL),(34,NULL,'asdfg','asdfg',11,'support@boomchart.net',NULL,NULL,NULL,3,1,500,3360,140,'3000','asdfghjasdfgh','Albania','Delvine','sadfgh','zjIGAmxEAkqBDMcI',1,'2345678543',NULL,NULL,NULL,NULL,NULL),(35,NULL,'dasfg','sdfgh',41,'d@s.com',NULL,NULL,NULL,7,1,300000,270000,30000,'0',NULL,NULL,NULL,NULL,'2tYSgbm2pIhyz5l5',1,'234567865432',NULL,NULL,NULL,NULL,NULL),(36,NULL,'asDF','ASDFG',41,'a@d.com',NULL,NULL,NULL,7,1,300000,270000,30000,'0',NULL,NULL,NULL,NULL,'au6xy8JqzMGL7fKF',1,'2345675432',NULL,NULL,NULL,NULL,NULL),(38,41,NULL,NULL,41,NULL,NULL,NULL,NULL,16,NULL,20000,0,0,NULL,NULL,NULL,NULL,NULL,'ORD-QPlOPF',1,NULL,NULL,NULL,NULL,NULL,NULL),(39,41,NULL,NULL,41,NULL,NULL,NULL,NULL,16,1,20000,18000,2000,'0','sdfg','American Samoa','Manu\'a','asdfgh','ORD-DA5kcd',1,NULL,NULL,NULL,NULL,NULL,NULL),(41,41,'idbjfd','jhcdd',41,'demo@boomchart.net',NULL,NULL,NULL,16,1,20000,18000,2000,NULL,'sadf','Albania','Devoll (Bilisht)','sadfg','ORD-bhYtqO',1,NULL,NULL,NULL,NULL,NULL,NULL),(43,41,'idbjfd','jhcdd',41,'demo@boomchart.net',NULL,NULL,NULL,16,4,20000,72000,8000,'3200','ZXzcv','Argentina','Jujuy','saadfgh','ORD-LrQkhA',1,NULL,NULL,3,NULL,NULL,NULL),(44,41,NULL,NULL,41,NULL,NULL,NULL,NULL,15,3,20000,54000,6000,NULL,NULL,NULL,NULL,NULL,'ORD-zdQdj2',1,NULL,NULL,NULL,NULL,NULL,NULL),(45,41,NULL,NULL,41,NULL,NULL,NULL,NULL,15,3,20000,54000,6000,NULL,NULL,NULL,NULL,NULL,'ORD-mItFzn',1,NULL,NULL,NULL,NULL,NULL,NULL),(52,NULL,'Rashford','kim',44,'info@boomchart.net',NULL,NULL,NULL,9,3,2000,-600,600,NULL,NULL,NULL,NULL,NULL,'ORD-OspreT',1,NULL,NULL,NULL,3,NULL,NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (4,'AML Policy','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>',1,NULL,NULL),(6,'Diversity','<header>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>&nbsp;</div>\n</div>\n<div>\n<div>\n<div>\n<h1>Diversity</h1>\n<p>Individuals. Ideas. Inspiration. Yes, we\'re open</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</header>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div data-nn-conditional=\"\">\n<div>\n<p>Diversity and inclusion matter in our business. An inclusive and diverse workforce makes us better leaders and contributes to a more innovative, dynamic and, ultimately, more successful company. And, variety helps us meet the needs of our diverse client base.</p>\n<p>&nbsp;</p>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div>\n<div>\n<div>\n<div>\n<div>\n<div data-nn-conditional=\"\">\n<h2 id=\"col1textimage\">Inclusiveness</h2>\n<div>\n<p>We promote inclusion and encourage open dialogue to draw out everyone\'s opinions and perspectives. We recognize a diverse range of contributions to keep our people energetic, engaged and inspired. And we are a signatory to the UN Standards of Conduct for Business regarding tackling LGBTI discrimination around the world.</p>\n<p>&nbsp;</p>\n</div>\n</div>\n</div>\n</div>\n<div>\n<div>\n<div data-nn-conditional=\"\">\n<h2 id=\"col2textimage\">Flexibility</h2>\n<div>\n<p>We offer a modern, flexible working environment. We work where and how it\'s most appropriate according to individual, role and team requirements.</p>\n</div>\n</div>\n</div>\n<div>\n<div>&nbsp;</div>\n</div>\n</div>\n</div>\n</div>\n</div>',1,NULL,NULL),(7,'Sponsoring','<div>\n<span>The big picture</span>\n</div>\n<div>\n<div>\n<p>We’re passionate about supporting the places where we live and work. Through our long-standing sponsorships of motor sports and contemporary art, we connect with communities in new and exciting ways every day. It’s our way of understanding how the world works, one pit stop and brush stroke at a time.</p>\n</div>\n</div>',1,NULL,NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_link`
--

DROP TABLE IF EXISTS `payment_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payment_link` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `ref_id` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `type` int DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect_link` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `active` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_link`
--

LOCK TABLES `payment_link` WRITE;
/*!40000 ALTER TABLE `payment_link` DISABLE KEYS */;
INSERT INTO `payment_link` VALUES (1,27,'XEPIruSFH3avCJ33',NULL,1,'Customization services','Customization service for investment project',NULL,NULL,0,1,NULL,NULL),(12,41,'76BgHHh8Fvg2DNnI',30000,2,'Fish Farming','dszfxgchvjbn',NULL,'donation1608643391.jpg',0,1,NULL,NULL),(14,41,'7NydPhSrCv526euc',400000,1,'Ps5','Latest Console',NULL,NULL,0,1,NULL,NULL),(15,41,'ejE4BNdtIa2wFUKU',70000,1,'Lhassa Apso','A stubborn and fun dog',NULL,NULL,0,1,NULL,NULL),(16,41,'uLbtGuqp2UNdkDnL',NULL,1,'Zone','sdfdfg',NULL,NULL,0,1,NULL,NULL),(17,41,'xufj59LTUjUS6TZ5',4000000,2,'Apple Farm','Apple farm',NULL,'donation1608643366.jpg',0,1,NULL,NULL),(18,41,'AivKD8mR7anHUVWV',500000,2,'Macbook M1 Chip','Macbook M1 Chip',NULL,'donation1608643351.jpg',0,1,NULL,NULL),(19,41,'SC-525n8z',400000,1,'Iphone 12','New Phone',NULL,NULL,0,1,NULL,NULL),(20,41,'DN-YjbEuN',1000000,2,'Boomchain','dewcd',NULL,'donation1611153952.jpg',0,1,NULL,NULL);
/*!40000 ALTER TABLE `payment_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intervals` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `times` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `active` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` VALUES (4,41,'1Udf0bj465M9ecoz','Dog food','5000','1 Week',3,0,1,NULL,NULL),(5,41,'PLAN-n0SjNy','Map','3000','1 Month',4,0,1,NULL,NULL);
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_category`
--

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` VALUES (1,41,'Technology',NULL,NULL),(2,41,'Gadgets',NULL,NULL),(4,41,'Cleaning',NULL,NULL),(6,41,'Food Items',NULL,NULL);
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (17,3,'1590272746.jpeg',NULL,NULL),(30,15,'1611594647.jpg',NULL,NULL),(31,7,'1611595108.jpg',NULL,NULL),(32,7,'1611595118.jpg',NULL,NULL),(34,6,'1611595306.jpg',NULL,NULL),(36,16,'1611601026.jpg',NULL,NULL),(37,9,'1611659092.jpg',NULL,NULL),(38,17,'1611690325.jpg',NULL,NULL),(39,17,'1611690339.jpg',NULL,NULL),(40,17,'1611690348.jpg',NULL,NULL),(41,17,'1611690359.jpg',NULL,NULL);
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `cat_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `sold` int DEFAULT '0',
  `rq` int DEFAULT NULL,
  `charge` int DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `add_status` int NOT NULL DEFAULT '0',
  `quantity_status` int NOT NULL DEFAULT '0',
  `note_status` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `active` int DEFAULT '1',
  `ref_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new` int DEFAULT '0',
  `shipping_status` int NOT NULL DEFAULT '0',
  `shipping_fee` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (6,41,NULL,'2020 Camry SE','2500000',3,1,NULL,NULL,NULL,NULL,1,0,1,NULL,1,1,'B0a6ucScVJ',1,0,NULL,NULL,NULL),(7,41,NULL,'Lg Tv 2.0','300000',0,1,NULL,NULL,NULL,NULL,0,0,0,'Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',1,1,'CLJEnfOGxB',1,0,NULL,NULL,NULL),(15,41,4,'Bottle','20000',3,3,NULL,NULL,NULL,NULL,0,0,0,NULL,1,1,'PRD-75lms6',1,0,NULL,NULL,NULL),(16,41,4,'Baby Towel','20000',8,4,NULL,NULL,NULL,NULL,0,0,0,NULL,0,1,'PRD-ZGKYQ7',1,1,NULL,NULL,NULL),(17,41,6,'Bread','10000',89,1,NULL,NULL,NULL,NULL,0,0,0,NULL,1,0,'PRD-2wzBQF',1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply_support`
--

DROP TABLE IF EXISTS `reply_support`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reply_support` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ticket_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `staff_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply_support`
--

LOCK TABLES `reply_support` WRITE;
/*!40000 ALTER TABLE `reply_support` DISABLE KEYS */;
INSERT INTO `reply_support` VALUES (6,'XvuX4mNrFIMp0KpI','sdfghfd',1,NULL,NULL,NULL),(7,'2eADkpESfSdctt2f','ok',0,NULL,NULL,NULL),(8,'2eADkpESfSdctt2f','<script>\n$(\'#customFileLang\').on(\'change\',function(){\n//get the file name\nvar fileName = $(this).val().replace(\'C:\\\\fakepath\\\\\', \" \");\n//replace the \"Choose a file\" label\n$(this).next(\'.custom-file-label\').html(fileName);\n})\n$(\'.carousel\').carousel({\ninterval: 2000\n})\npopulateCountries(\"country\", \"state\");\nfunction sellVals(){\nvar quantity = $(\"#quantity\").val();\nvar amount = $(\"#amount\").val();\nvar ship_fee = $(\"#ship_fee\").val();\nvar subtotal = parseInt(amount)*parseInt(quantity);\nvar total = parseInt(subtotal)+parseInt(ship_fee);\n$(\"#product1\").text(quantity);\n$(\"#subtotal1\").text(subtotal);\n$(\"#total1\").text(total);\n}\n$(\"#quantity\").change(sellVals);\nsellVals();\n</script>',1,NULL,NULL,NULL),(9,'AW1GaEObUOPORtwA','Ok we will look into your report',0,NULL,NULL,NULL),(10,'AW1GaEObUOPORtwA','Thanks',1,NULL,NULL,NULL),(11,'AW1GaEObUOPORtwA','We are running our investigations',0,1,NULL,NULL),(12,'AW1GaEObUOPORtwA','We are running our investigations',0,1,NULL,NULL),(13,'DZgX0Gln7g1xI1aX','hello',1,NULL,NULL,NULL),(14,'DZgX0Gln7g1xI1aX','hey',0,NULL,NULL,NULL),(15,'DZgX0Gln7g1xI1aX','ddd',0,4,NULL,NULL),(16,'DZgX0Gln7g1xI1aX','Rate Our customer support',0,1,NULL,NULL);
/*!40000 ALTER TABLE `reply_support` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `confirm` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `request`
--

LOCK TABLES `request` WRITE;
/*!40000 ALTER TABLE `request` DISABLE KEYS */;
INSERT INTO `request` VALUES (19,'9JSOi2QSERPIzGVs',41,'freakboss3@gmail.com',2000,'100',0,'mUt5z5ZW',NULL,NULL),(20,'RQ-73OKuxlx',41,'freakboss3@gmail.com',300,'15',0,'sCol2Z07',NULL,NULL),(21,'RQ-qcuJh9',41,'freakboss3@gmail.com',40000,'2000',0,'wfT3Ly0e',NULL,NULL),(22,'RQ-VkIlkJ',41,'freakboss3@gmail.com',40000,'2000',0,'w1Drjefw',NULL,NULL),(23,'RQ-9kb2rr',41,'freakboss3@gmail.com',3000,'150',0,'kRGEwXpT',NULL,NULL);
/*!40000 ALTER TABLE `request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `review` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` VALUES (11,'Jason Well','Forex trader','update_1595666475.jpg','As YC\'s first Nigerian startup Boompay leads the charge of great companies coming out of Africa, powering modern payments for an entire continent.',1,NULL,NULL),(12,'JacK Mill','Market analyst','update_1595666510.jpg','Our investment in Boompay aligns with the kind of investments we look for - those that will help extend our reach into the global commerce ecosystem',1,NULL,NULL),(14,'Big brother','Web developer','update_1595666519.jpg','Boompay is highly technical and fanatically customer oriented. We’re excited to back such people in one of the world’s fastest-growing regions.',1,NULL,NULL);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell_cards`
--

DROP TABLE IF EXISTS `sell_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sell_cards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `trx` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `plan_id` int DEFAULT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` int DEFAULT NULL,
  `rate` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `c_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell_cards`
--

LOCK TABLES `sell_cards` WRITE;
/*!40000 ALTER TABLE `sell_cards` DISABLE KEYS */;
INSERT INTO `sell_cards` VALUES (8,'5NDGsfwwtq',11,13,'100',NULL,2,'240','24000',1,NULL,NULL,NULL),(9,'VV8e2IHT1uzo1p6I',11,17,'200',NULL,2,'260','52000',1,NULL,NULL,NULL),(10,'C02GNirhZZBb4Ti3',11,17,'200',NULL,2,'260','52000',2,'reason_1605291491.png',NULL,NULL),(11,'r3dnAvEhQ4fwXjQk',11,17,'200',NULL,2,'260','52000',0,NULL,NULL,NULL);
/*!40000 ALTER TABLE `sell_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Promote sales','Intelligent value-added services for digital banking, sales.','service_1587646811.png',NULL,NULL),(2,'Life saving solutions','Data-based solutions for retail, analytics, and risk management.','service_1587646963.png',NULL,NULL),(3,'Easy payment system','A centralized payment solution for accepting cards.','service_1587647149.png',NULL,NULL),(5,'Secure payments','We keep your financial details private and transactions secure.',NULL,NULL,NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `sessions` VALUES ('4aex1brbOjW3yvUWB0as4C8LWfK7F7zwRg4agKVR',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaHJBU2xJa0V5SmVnOEtRQkdISjJZQ2tGWTl2eFpkTWpXdU1aY3k3NSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9lbHNhcmFmLnRlc3QvaW52b2ljZS9JTlYtdzZsdGNBIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MToibG9naW5fdXNlcl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQxO3M6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9',1612914292),('tib6vepQxTCzYARG9qRkOEsm0LHhAWSQaS8TzEfC',NULL,'127.0.0.1','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1l6WUFrQWF4Rm5SVVhFc0ZBa2NUQTd3alVhR2JteHlQeERrZTk0diI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo1MToiaHR0cDovL2Vsc2FyYWYudGVzdC91c2VyL3ByZXZpZXctaW52b2ljZS9JTlYtdzZsdGNBIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9lbHNhcmFmLnRlc3QvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1612914312);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_desc` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_reg` int DEFAULT NULL,
  `email_notify` int DEFAULT NULL,
  `sms_notify` int DEFAULT NULL,
  `kyc` int DEFAULT NULL,
  `transfer_charge` int DEFAULT NULL,
  `min_transfer` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_charge` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bill_charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtual_createcharge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `virtual_charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verification` int DEFAULT NULL,
  `sms_verification` int DEFAULT NULL,
  `registration` int DEFAULT NULL,
  `withdraw_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_limit` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starter_limit` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `withdraw_duration` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant` int NOT NULL,
  `transfer` int NOT NULL DEFAULT '1',
  `request_money` int NOT NULL DEFAULT '1',
  `invoice` int NOT NULL DEFAULT '1',
  `store` int NOT NULL DEFAULT '1',
  `donation` int NOT NULL DEFAULT '1',
  `single` int NOT NULL DEFAULT '1',
  `subscription` int NOT NULL DEFAULT '1',
  `bill` int DEFAULT '1',
  `vcard` int DEFAULT NULL,
  `livechat` text COLLATE utf8mb4_unicode_ci,
  `language` int DEFAULT '0',
  `recaptcha` int DEFAULT '0',
  `next_settlement` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `period` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vc_no` int DEFAULT NULL,
  `vc_min` double DEFAULT NULL,
  `vc_max` double DEFAULT NULL,
  `btc_wallet` text COLLATE utf8mb4_unicode_ci,
  `btc_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_wallet` text COLLATE utf8mb4_unicode_ci,
  `eth_buy` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_sell` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethereum` int DEFAULT NULL,
  `min_btcsell` int DEFAULT NULL,
  `min_btcbuy` int DEFAULT NULL,
  `min_ethsell` int DEFAULT NULL,
  `min_ethbuy` int DEFAULT NULL,
  `bitcoin` int DEFAULT NULL,
  `btc_charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eth_charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Stay focused on your business','Boompay','Make it as easy as possible to pay. Modular or combined with other services, our payment technologies ensure swift implementation. What’s more, you can flexibly adapt our proven standard solutions to suit each country and application. Lastingly slash your operating costs and boost your sales.','test@boomchart.net','test@boomchart.net','12345675432',2000,0,0,1,5,'1000','10','10','10','6','10','30','3','10','10',0,0,1,'3','300000','2000000',NULL,1,1,1,1,1,1,1,1,1,1,NULL,1,0,'2021-02-11 14:05:41','2','Day',2,3000,10000,'kjdbd-djkdjdj-2o32-2jebk2j','456','460','kjdbd-djkdjdj-2o32-2jebk2s','450','460',1,300,200,NULL,100,1,'3','5',NULL,'2021-02-09 21:04:30');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shipping` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `region` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping`
--

LOCK TABLES `shipping` WRITE;
/*!40000 ALTER TABLE `shipping` DISABLE KEYS */;
INSERT INTO `shipping` VALUES (1,41,'Lagos','3000',NULL,NULL),(2,41,'Delta','4000',NULL,NULL),(3,41,'Castro Town','3200',NULL,NULL);
/*!40000 ALTER TABLE `shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_links`
--

DROP TABLE IF EXISTS `social_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `social_links` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` longtext COLLATE utf8mb4_unicode_ci,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_links`
--

LOCK TABLES `social_links` WRITE;
/*!40000 ALTER TABLE `social_links` DISABLE KEYS */;
INSERT INTO `social_links` VALUES (1,'facebook','https://facebook.com/',NULL,NULL),(2,'instagram','https://instagram.com/',NULL,NULL),(3,'twitter','https://twitter.com/',NULL,NULL),(4,'skype',NULL,NULL,NULL),(5,'pinterest',NULL,NULL,NULL),(7,'linkedin',NULL,NULL,NULL),(8,'youtube',NULL,NULL,NULL),(9,'whatsapp','https://whatsapp.com/',NULL,NULL),(10,'telegram','https://telegram.com/',NULL,NULL);
/*!40000 ALTER TABLE `social_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storefront`
--

DROP TABLE IF EXISTS `storefront`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `storefront` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `store_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `store_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `store_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `revenue` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `shipping_status` int NOT NULL DEFAULT '0',
  `note_status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storefront`
--

LOCK TABLES `storefront` WRITE;
/*!40000 ALTER TABLE `storefront` DISABLE KEYS */;
INSERT INTO `storefront` VALUES (1,41,'Boomchart','sADFGH',1,'Boomchart-GlTBvl','Drinks','2270700',1,1,NULL,NULL),(2,41,'ffdddd','werty',1,'ffdddd','Baby Products','0',0,0,NULL,NULL),(4,41,'Nadia','sell and buy everything in Nigeria',1,'Nadia','Restaurant','12600',1,2,NULL,NULL),(5,41,'Castro','asdfgh',1,'Castro','Baby Products','0',1,1,NULL,NULL);
/*!40000 ALTER TABLE `storefront` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storefront_products`
--

DROP TABLE IF EXISTS `storefront_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `storefront_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `store_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storefront_products`
--

LOCK TABLES `storefront_products` WRITE;
/*!40000 ALTER TABLE `storefront_products` DISABLE KEYS */;
INSERT INTO `storefront_products` VALUES (1,1,6,NULL,NULL),(2,1,7,NULL,NULL),(8,1,15,NULL,NULL),(9,2,16,NULL,NULL),(10,3,9,NULL,NULL),(11,4,17,NULL,NULL),(14,4,15,NULL,NULL),(15,4,16,NULL,NULL),(16,5,7,NULL,NULL);
/*!40000 ALTER TABLE `storefront_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subaccounts`
--

DROP TABLE IF EXISTS `subaccounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subaccounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` int NOT NULL,
  `country` int DEFAULT NULL,
  `type` int DEFAULT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acct_no` text COLLATE utf8mb4_unicode_ci,
  `acct_name` text COLLATE utf8mb4_unicode_ci,
  `active` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subaccounts`
--

LOCK TABLES `subaccounts` WRITE;
/*!40000 ALTER TABLE `subaccounts` DISABLE KEYS */;
INSERT INTO `subaccounts` VALUES (4,41,'Bryt','d@s.com',1,156,2,'10','12345678','Finn Marshall',1,NULL,NULL),(6,41,'Boomchart','s@s.com',2,13,1,'30000','123456789654','Finn',1,NULL,NULL);
/*!40000 ALTER TABLE `subaccounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `plan_id` int NOT NULL,
  `expiring_date` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '1',
  `times` int DEFAULT NULL,
  `notify` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
INSERT INTO `subscribers` VALUES (12,41,4,'2021-01-23 21:50:28','5000','1500','Q15sgSoFlVKRYlLd',1,0,1,NULL,NULL);
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support`
--

DROP TABLE IF EXISTS `support`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `support` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `files` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL,
  `user_id` int NOT NULL,
  `ticket_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_no` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support`
--

LOCK TABLES `support` WRITE;
/*!40000 ALTER TABLE `support` DISABLE KEYS */;
INSERT INTO `support` VALUES (16,'sdfgh','Low','sdfgh','subscription','[\"support_WwE9ljgfRj.png\"]',0,41,'RC85IcDNcyU1QcEY',NULL,NULL,NULL);
/*!40000 ALTER TABLE `support` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_id` int DEFAULT NULL,
  `receiver_id` int NOT NULL,
  `amount` double NOT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int NOT NULL,
  `payment_type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int DEFAULT '0',
  `payment_link` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (56,NULL,NULL,'::1',NULL,NULL,41,41,300,'30',2,'account','P4gjLYgEo8lys7df',1,12,NULL,NULL),(58,NULL,NULL,'::1',NULL,NULL,41,41,200,'12',1,'account','SWTJ9Axhn1Z3VAXi',1,16,NULL,NULL),(59,'info@boomchart.net',NULL,'::1','ddddd','fffff',NULL,41,70000,'4200',1,'card','hxYBQDGeTpW1oVYz',1,15,NULL,NULL),(60,NULL,NULL,'::1',NULL,NULL,41,41,20000,'2000',2,'account','srYdShdMjpJIuknr',1,12,NULL,NULL),(61,NULL,NULL,'::1',NULL,NULL,41,41,100,'10',2,'account','vlWZnv0UZ5RaEjhV',1,12,NULL,NULL),(62,NULL,NULL,'::1',NULL,NULL,41,41,3000,'300',2,'account','vVwpJyGqEeJQ0P45',1,17,NULL,NULL),(63,NULL,NULL,'::1',NULL,NULL,41,41,5000,'500',2,'account','Ftmn3WgppeSl5cT0',1,17,NULL,NULL),(64,NULL,NULL,'::1',NULL,NULL,41,41,4000,'400',2,'account','d3Um9xCe3CTuRZju',1,17,NULL,NULL),(65,NULL,NULL,'::1',NULL,NULL,41,41,4000,'400',2,'account','dp0qxarG2V7PDu9v',1,17,NULL,NULL),(66,NULL,NULL,'::1',NULL,NULL,41,41,4000,'400',2,'account','TBeRbqUzjCz6vFoK',1,17,NULL,NULL),(67,'info@boomchart.net',NULL,'::1','wjvdhvh','ej dhe h',NULL,41,5000,'500',1,'card','1siwUNWx4SCK2wmu',1,17,NULL,NULL),(68,'info@boomchart.net',NULL,'::1','dwfeee','cfefee',NULL,41,300000,'30000',1,'card','nSvWnmUy1lcyAFXu',1,17,NULL,NULL),(69,'freakboss3@gmail.com','4242 4242 4242 4242','::1','ffddd','ggggg',NULL,41,460000,NULL,3,NULL,'q5HcnfkJ12mUwX8o',0,14,NULL,NULL),(70,'freakboss3@gmail.com','4242 4242 4242 4242','::1','ffddd','ggggg',NULL,41,460000,NULL,3,NULL,'FUCy9f2N4w8HSqdS',0,14,NULL,NULL),(71,'freakboss3@gmail.com','4242 4242 4242 4242','::1','ffddd','ggggg',NULL,41,460000,NULL,3,NULL,'h02snQY3Ak6gCUpJ',0,14,NULL,NULL),(72,'freakboss3@gmail.com','4242 4242 4242 4242','::1','ffddd','ggggg',NULL,41,460000,'46000',3,NULL,'2Cqn7XI36uIBbMXL',1,14,NULL,NULL),(73,'freak@f.com',NULL,'::1','sadfg','dsfg',NULL,41,3000,'180',1,'card','Xl38bQUP9KGeMNKo',1,16,NULL,NULL),(74,'f@s.com',NULL,'::1','sadfg','dsfg',NULL,41,3000,'180',1,'card','KyH2oGwEBTLEsh8d',1,16,NULL,NULL),(75,'d@s.com',NULL,'::1','sdfgf','fffff',NULL,41,30000,'3000',1,'card','GgGSZ8y7iwaCvwmO',1,18,NULL,NULL),(76,'freakboss3@gmail.com',NULL,'::1','chhch','dj d c',NULL,41,3000,NULL,1,'card','SC-UAB0oC',0,16,NULL,NULL),(77,'support@boomchart.com.ng','4242 4242 4242 4242','::1','Castro','King',NULL,41,2760,'276',3,'card','7vzjXe7j8PYx69n4',1,16,NULL,NULL),(78,'info@boomchart.net','4242 4242 4242 4242','::1','kjebv','dvduvbc',NULL,41,3720,'372',3,'card','S6DTIfvxQwobCxh7',1,17,NULL,NULL),(80,'info@boomchart.net',NULL,'::1','sjdch','sdhcvh',NULL,41,400000,'24000',1,'card','SC-0HvHrn',1,19,NULL,NULL),(81,'info@boomchart.net',NULL,'::1','sdf','adsf',NULL,41,3000,NULL,1,'card','DN-jOqZPA',0,20,NULL,NULL),(82,'info@boomchart.net',NULL,'::1','sdf','adsf',NULL,41,3000,'300',1,'card','DN-QKsjbx',1,20,NULL,NULL),(84,'info@boomchart.net','4242 4242 4242 4242','::1','weef','dadf',NULL,41,50000,'5000',1,'card','DN-sNsDLd',1,20,NULL,NULL),(92,NULL,NULL,'::1',NULL,NULL,41,41,103.03,NULL,4,'account','MER-VSXLqn',0,28,NULL,NULL),(93,'user@test.com','4242 4242 4242 4242','::1','Finn','Marshal',NULL,41,1025.71,NULL,4,'card','MER-TFUIZ8',0,29,NULL,NULL),(94,NULL,NULL,'::1',NULL,NULL,41,41,30000,'3000',2,'account','DN-vArCAQ',1,20,NULL,NULL);
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transfers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` int DEFAULT NULL,
  `sender_id` int NOT NULL,
  `receiver_id` int DEFAULT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfers`
--

LOCK TABLES `transfers` WRITE;
/*!40000 ALTER TABLE `transfers` DISABLE KEYS */;
INSERT INTO `transfers` VALUES (72,'TR-uxkqHX','2000',100,41,48,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `transfers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trending`
--

DROP TABLE IF EXISTS `trending`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trending` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trending`
--

LOCK TABLES `trending` WRITE;
/*!40000 ALTER TABLE `trending` DISABLE KEYS */;
INSERT INTO `trending` VALUES (9,'Budget for Your Winter Trip to Cancun','<p>It may be cold at home, but winter months are the peak season for Caribbean beaches, and for good reason: With beautiful scenery, tropical weather, and a dazzling array of adventure opportunities, a trip to sunny Mexico can be the perfect cure for the winter blues.</p>','post_1595630633.jpg',2,25,1,NULL,NULL),(10,'We are still choosing to help you grow your money and your confidence','<p>We don’t have a crystal ball, and can’t predict when rates will change again, but we wanted to clearly communicate what’s happening today. We believe that maintaining our high Protected Goals Account rates—and rewarding the choice to save—will help our customers continue to feel confident with their money.</p>','post_1595630773.jpg',2,4,1,NULL,NULL),(11,'Prioritize your savings goals based on what you really want.','<p>You know you should be saving, but what should you save for first? Prioritizing your savings goals can be confusing. Here’s how to sift through it all.</p>','post_1595630790.jpg',2,11,1,NULL,NULL);
/*!40000 ALTER TABLE `trending` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trending_cat`
--

DROP TABLE IF EXISTS `trending_cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trending_cat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categories` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trending_cat`
--

LOCK TABLES `trending_cat` WRITE;
/*!40000 ALTER TABLE `trending_cat` DISABLE KEYS */;
INSERT INTO `trending_cat` VALUES (2,'Inspiration',NULL,NULL),(3,'Company',NULL,NULL),(4,'Engineering',NULL,NULL);
/*!40000 ALTER TABLE `trending_cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ui_design`
--

DROP TABLE IF EXISTS `ui_design`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ui_design` (
  `id` int NOT NULL AUTO_INCREMENT,
  `s6_title` text COLLATE utf8mb4_unicode_ci,
  `s7_title` text COLLATE utf8mb4_unicode_ci,
  `s7_body` text COLLATE utf8mb4_unicode_ci,
  `s7_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s8_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s8_title` text COLLATE utf8mb4_unicode_ci,
  `s8_body` text COLLATE utf8mb4_unicode_ci,
  `s9_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s9_title` text COLLATE utf8mb4_unicode_ci,
  `s9_body` text COLLATE utf8mb4_unicode_ci,
  `s6_body` text COLLATE utf8mb4_unicode_ci,
  `s5_title` text COLLATE utf8mb4_unicode_ci,
  `s5_body` text COLLATE utf8mb4_unicode_ci,
  `s4_title` text COLLATE utf8mb4_unicode_ci,
  `s4_body` text COLLATE utf8mb4_unicode_ci,
  `s4_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s3_title` text COLLATE utf8mb4_unicode_ci,
  `s3_body` text COLLATE utf8mb4_unicode_ci,
  `s3_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s2_title` text COLLATE utf8mb4_unicode_ci,
  `s2_body` text COLLATE utf8mb4_unicode_ci,
  `s1_title` text COLLATE utf8mb4_unicode_ci,
  `header_title` text COLLATE utf8mb4_unicode_ci,
  `header_body` text COLLATE utf8mb4_unicode_ci,
  `nav_type` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ui_design`
--

LOCK TABLES `ui_design` WRITE;
/*!40000 ALTER TABLE `ui_design` DISABLE KEYS */;
INSERT INTO `ui_design` VALUES (1,'Accepting payments worldwide','What our happy client say about our success','Boompay is backed by notable investors as well as some of the best payments companies on the planet.','section7_1595629930.png','section8_1586432780.png','Reliable asset program','Join our program and learn to invest on asset. Earn from buying, selling and exchanging assets. Asset can also be transferred within platform. The value of asset changes every 1hour based on live market prices','section9_1586432802.png','Easy access to loan','We charge 10% of loaned amount as interest fee. Balance must exceed or equal to 50% of loaned amount as collateral. Participation in save 4 me & PY scheme will not be allowed until loan is paid.','Boost your sales with our modular service portfolio. For one, you can accept and process payments via various sales channels.','Build your savings without even trying.','Turn on Round-up Rules and start saving up effortlessly. Whenever you make a purchase, Goals make it easy to save for the things you want or want to do. There’s no need for spreadsheets or extra apps to budget and track your money.','Reliable asset program','Join our program and learn to invest on asset. Earn from buying, selling and exchanging assets. Asset can also be transferred within platform. The value of asset changes every 1hour based on live market prices','section3_1612152049.png','Optimize your business processes with your own solutions','Introduce your own payment solution for your customers and employees to use worldwide. Everything is possible, from card products all the way to digital banking and payment apps.\n\nWe’re your specialists for issuing and technically integrating payment solutions. With us, you get everything from one source: modular end-to-end solutions, flexibly configurable white-label products.','section2_1595626647.png','section1_1595628336.png','Trusted by 60,000+ businesses','<p>Over 10,000 businesses of all sizes use Boompay to accept payments online, including some of Africa\'s biggest brands.</p>\n<p>Your customers will love the simple, secure payment experience, and if you need any help, our friendly Support team is only a quick phone call (or email) away.</p>\n<p>Thank you for choosing Boompay. We look forward to being a reliable growth engine and partner to you, your team, and your business.</p>','Market leaders use app to reach their brand & business.','The easy way to pay is right here','Give your customers the gift of modern, frictionless, painless payments. Integrate once and let your customers pay you however they want.',1,NULL,NULL);
/*!40000 ALTER TABLE `ui_design` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `support_email` text COLLATE utf8mb4_unicode_ci,
  `balance` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `ip_address` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_link` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kyc_status` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` text COLLATE utf8mb4_unicode_ci,
  `website_link` text COLLATE utf8mb4_unicode_ci,
  `developer` int DEFAULT '0',
  `verification_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verify` tinyint NOT NULL,
  `email_time` datetime NOT NULL,
  `googlefa_secret` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fa_status` int NOT NULL DEFAULT '0',
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fa_expiring` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_level` int NOT NULL DEFAULT '1',
  `shipping` int NOT NULL DEFAULT '0',
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (41,'MediaGate','Studios','MediaGate Studios','MediaGate Studios1612912285.png','merchant@mediagate.com','merchant@mediagate.com','3573071.735','229','$2y$10$gJ55pI6ziCGWsupNpPIVeeN7WfWw5nGr2elYHhBfFwYsylTc7sRrO',NULL,0,'::1','2021-02-01 06:28:33','1609059216_png',0,'nS0UCs5iHl4KabLKkOqaOoRtQ1z8MC48zhZkInuD8RcNctyCWAe9bZwpotsv',NULL,NULL,0,'LOMICU',1,'2020-10-13 16:59:20','A2EN3UBUQW2TAKBT',0,'https://facebook.com','https://twitter.com/',NULL,NULL,NULL,'2021-02-01 05:58:16','PUB-boJXLxpvdv5jvF8E5ptfb4FSRp6uxbAL','SEC-Su4MD0XjDrMWFX6TN6Ra6oqvKx5h7UwQ',2,1,NULL,NULL,NULL,'2021-02-09 21:20:16',NULL),(48,'fghj','dfghj','gggg','person.png','s@site.com',NULL,'23000','156','$2y$10$4KOZ4OmC7uhbxaRbB1Wgq.lEkR5XMBui3DHTCkhD5SIeuMwyrG7ti','2345678765',0,'::1','2021-01-28 22:19:23',NULL,0,'4vIlUuaD45P7lPZvmZCCnLL0tsFlRWQ2mLlVskWC8iJTWTDSZfoZ5lnEWbks',NULL,NULL,0,'R148QV',1,'2021-01-28 11:09:03',NULL,0,NULL,NULL,NULL,NULL,NULL,'2021-01-28 13:50:39','PUB-9Rcxuc0pnaWIqIFoVhdaJVDdPQqgBTZy','SEC-U4ONkyws9RntPqOcb3AwPZuSdWh3sils',2,0,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `virtual_cards`
--

DROP TABLE IF EXISTS `virtual_cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `virtual_cards` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `account_id` int NOT NULL,
  `card_hash` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_pan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masked_card` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` int NOT NULL,
  `expiration` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_on_card` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `callback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `ref_id` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8mb4_unicode_ci,
  `state` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `zip_code` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `virtual_cards`
--

LOCK TABLES `virtual_cards` WRITE;
/*!40000 ALTER TABLE `virtual_cards` DISABLE KEYS */;
INSERT INTO `virtual_cards` VALUES (8,41,118661,'993b7edd-de5a-4d13-96ca-4cae52807f2c','5366139800942370','536613*******2370',208,'2024-01','mastercard','idbjfd jhcdd','http://localhost/new-pay/use-virtual','VC-LjBDgP','8000.00','300',1,'VC-LjBDgP',NULL,NULL,NULL,NULL,NULL,'2021-02-09 23:04:06'),(9,44,118661,'e9bc954b-261c-4d70-a1c5-2c64fd3c716c','5366135864840013','536613*******0013',799,'2024-01','mastercard','Rashford kim','http://localhost/new-pay/use-virtual','VC-C4nBtK','3000','300',1,'VC-C4nBtK',NULL,NULL,NULL,NULL,NULL,'2021-02-09 23:04:06'),(10,48,118661,'261c4a37-7cc1-4a92-9411-c2c979e9f991','5366132423730116','536613*******0116',149,'2024-01','mastercard','fghj dfghj','http://localhost/new-pay/use-virtual','VC-lnYXIr','6000.00','500',1,'VC-lnYXIr',NULL,NULL,NULL,NULL,NULL,'2021-02-09 23:04:06'),(11,48,118661,'0d3b95be-4aee-4092-bac2-d48b7ae32ce0','5563388086145536','556338*******5536',843,'2024-01','mastercard','fghj dfghj','http://localhost/new-pay/use-virtual','VC-U2m2hN','4000','400',1,'VC-U2m2hN',NULL,NULL,NULL,NULL,NULL,'2021-02-09 23:04:06'),(12,41,118661,'97560e24-3542-44a7-a507-cc47e58ffc55','5563388648907886','556338*******7886',156,'2024-01','mastercard','idbjfd jhcdd','http://localhost/new-pay/use-virtual','VC-ZA7hEb','0','1000',0,'VC-ZA7hEb',NULL,NULL,NULL,NULL,NULL,'2021-02-09 23:04:06'),(13,41,118661,'460606e6-45b4-4600-86a6-3e80d78fc1fe','5366138187338285','536613*******8285',989,'2024-01','mastercard','idbjfd jhcdd','http://localhost/new-pay/use-virtual','VC-xEYulb','5000','500',1,'VC-xEYulb','Lekki','Lagos',NULL,'23401',NULL,'2021-02-09 23:04:06');
/*!40000 ALTER TABLE `virtual_cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `virtual_transactions`
--

DROP TABLE IF EXISTS `virtual_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `virtual_transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `virtual_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trx` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `virtual_transactions`
--

LOCK TABLES `virtual_transactions` WRITE;
/*!40000 ALTER TABLE `virtual_transactions` DISABLE KEYS */;
INSERT INTO `virtual_transactions` VALUES (1,41,'7','3000','Virtual Card Funding','VC-Z52fyM',1,NULL,NULL),(2,41,'333fee70-3004-4cb0-9d85-cd21f311833e','3000','Virtual Card Funding','VC-SpDqlM',1,NULL,NULL),(3,41,'7','3000','Virtual Card Funding','VC-wZERnF',1,NULL,NULL),(4,41,'4','3000','Virtual Card Funding','VC-zwyPGG',1,NULL,NULL),(5,41,'8','3000','Virtual Card Funding','VC-LOB5t1',1,NULL,NULL),(6,41,'8','1000','Virtual Card Funding','VC-hxb94j',1,NULL,NULL),(7,41,'8','1000','Virtual Card Funding','VC-uGffx2',1,NULL,NULL),(8,48,'10','1000','Virtual Card Funding','VC-wkjL2i',1,NULL,NULL);
/*!40000 ALTER TABLE `virtual_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `w_history`
--

DROP TABLE IF EXISTS `w_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `w_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int NOT NULL,
  `amount` int NOT NULL,
  `charge` int DEFAULT NULL,
  `status` int NOT NULL,
  `bank_id` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int DEFAULT NULL,
  `sub_id` int DEFAULT NULL,
  `next_settlement` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `w_history`
--

LOCK TABLES `w_history` WRITE;
/*!40000 ALTER TABLE `w_history` DISABLE KEYS */;
INSERT INTO `w_history` VALUES (113,'ST-ADDdyQ',NULL,41,30000,NULL,0,NULL,2,6,'2021-02-11 14:05:41',NULL,'2021-02-09 21:04:30'),(114,'ST-ADDdyQ',NULL,41,15000,1500,0,'10',1,NULL,'2021-02-11 14:05:41',NULL,'2021-02-09 21:04:31'),(115,'ST-82wlvW','mSQmT5',41,6000,NULL,0,NULL,2,4,'2021-02-11 14:05:41',NULL,'2021-02-09 21:04:31'),(116,'ST-82wlvW','9ka1Uw',41,30000,NULL,1,NULL,2,6,'2021-01-28 14:05:41',NULL,NULL),(117,'ST-82wlvW',NULL,41,24000,3600,0,'10',1,NULL,'2021-02-11 14:05:41',NULL,'2021-02-09 21:04:31'),(118,'ST-xKvDnN','enxuSE',41,5000,NULL,0,NULL,2,4,'2021-02-11 14:05:41',NULL,'2021-02-09 21:04:31'),(119,'ST-xKvDnN','lrH62K',41,30000,NULL,1,NULL,2,6,'2021-01-28 14:05:41',NULL,NULL),(120,'ST-xKvDnN',NULL,41,15000,3000,1,'10',1,NULL,'2021-01-28 14:05:41',NULL,NULL);
/*!40000 ALTER TABLE `w_history` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-10  1:46:26
