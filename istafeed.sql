/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100116
 Source Host           : localhost:3306
 Source Schema         : db_academic

 Target Server Type    : MySQL
 Target Server Version : 100116
 File Encoding         : 65001

 Date: 15/03/2021 15:47:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for program_study_detail
-- ----------------------------
DROP TABLE IF EXISTS `program_study_detail`;
CREATE TABLE `program_study_detail`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ProdiID` int(11) NOT NULL,
  `Host` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `FileLogo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `FileLogoP` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `UserIDIG` varchar(26) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `TokenIG` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `TokenIGNew` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `LinkVisitor` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `IG` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of program_study_detail
-- ----------------------------
INSERT INTO `program_study_detail` VALUES (1, 1, 'arc.podomorouniversity.ac.id', 'ARC_L.png', 'ARC_P.png', '3242147127', '3242147127.1677ed0.8bc88a01e10b4580b8af3c763cf80637', NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4330281,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4330281&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'hmarspu|ciibelgres');
INSERT INTO `program_study_detail` VALUES (2, 2, 'cem.podomorouniversity.ac.id', NULL, 'CEM_P.png', '5600747485', '5600747485.1677ed0.505bdd23d09b4137afccecf9f500c06d', NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331012,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331012&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'cem.podomorouniversity|mrk.program');
INSERT INTO `program_study_detail` VALUES (3, 3, 'ent.podomorouniversity.ac.id', NULL, 'ENT_P.png', '5562245340', '5562245340.1677ed0.ffd63f5a414243a7aa56863879471ecf', NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331013,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331013&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'Entrepreneurshippodomoro|Podomoroentre');
INSERT INTO `program_study_detail` VALUES (4, 4, 'acc.podomorouniversity.ac.id', NULL, 'ACC_P.png', NULL, NULL, 'EAAKikGHZCZBiwBAAbXKsEPNfQbCwpzvUk3m7vbwCVUZBOb3ZAqfZC5RvGUCCkXprZBb2CM1UaKKVBzNZCTbwECGKseVas5gEsq5Gy1lsDGiXTmqx0IbiqlmRRyT8sgz4KLo5fsUNQZAz073LD9cUyFXuChOSZAhZCCYqHDPz5UfUWpfAZDZD', '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331015,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331015&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', '');
INSERT INTO `program_study_detail` VALUES (5, 5, 'hbp.podomorouniversity.ac.id', NULL, 'HBP_P.png', '8980333156', '8980333156.1677ed0.62dc5dcdd96647c49d67aa2453d7c091', NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331016,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331016&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'Hmbp.pu|Himahbp2019');
INSERT INTO `program_study_detail` VALUES (6, 6, 'law.podomorouniversity.ac.id', NULL, 'BLP_P.png', '3037529826', '3037529826.1677ed0.3a8919e59ac54a2c9e47f9263fab0298', NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331017,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331017&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'blp.podomorouniv|businesslaw');
INSERT INTO `program_study_detail` VALUES (7, 8, 'ste.podomorouniversity.ac.id', NULL, 'STE_P.png', NULL, NULL, NULL, '  <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331018,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331018&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', NULL);
INSERT INTO `program_study_detail` VALUES (8, 9, 'urp.podomorouniversity.ac.id', NULL, 'URP_P.png', '5558569792', '5558569792.1677ed0.6425e8facedf4e5581c40f96514de690', NULL, '\r\n   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331019,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331019&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', 'urp.podomorouniversity|PWKpodomoro1');
INSERT INTO `program_study_detail` VALUES (9, 11, 'pdp.podomorouniversity.ac.id', NULL, 'PDP_P.png', NULL, NULL, NULL, '   <!-- Histats.com  (div with counter) --><div id=\"histats_counter\"></div>\r\n<!-- Histats.com  START  (aync)-->\r\n<script type=\"text/javascript\">var _Hasync= _Hasync|| [];\r\n_Hasync.push([\'Histats.start\', \'1,4331020,4,604,110,55,00011111\']);\r\n_Hasync.push([\'Histats.fasi\', \'1\']);\r\n_Hasync.push([\'Histats.track_hits\', \'\']);\r\n(function() {\r\nvar hs = document.createElement(\'script\'); hs.type = \'text/javascript\'; hs.async = true;\r\nhs.src = (\'//s10.histats.com/js15_as.js\');\r\n(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(hs);\r\n})();</script>\r\n<noscript><a href=\"/\" target=\"_blank\"><img  src=\"//sstatic1.histats.com/0.gif?4331020&101\" alt=\"\" border=\"0\"></a></noscript>\r\n<!-- Histats.com  END  -->', NULL);

SET FOREIGN_KEY_CHECKS = 1;
