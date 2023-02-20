SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: responsibility_center
#

DROP TABLE IF EXISTS `responsibility_center`;

CREATE TABLE `responsibility_center` (
  `res_center_id` int(20) NOT NULL AUTO_INCREMENT,
  `res_center_code` int(20) NOT NULL,
  `res_center_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`res_center_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (11, 123213, 'Sample2', '2023-02-15 01:58:36');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (15, 123123, 'ssadsad', '2023-02-15 03:23:38');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (17, 3123213, 'asdas', '2023-02-15 06:55:48');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (18, 12321, 'qedwqe', '2023-02-15 06:56:09');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (21, 21321, 'asdsad', '2023-02-15 07:35:48');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (23, 234324, 'asdsad', '2023-02-15 07:37:06');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (27, 32123, 'asdsa', '2023-02-15 07:40:43');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (28, 13212312, 'sadsad', '2023-02-15 07:40:48');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (29, 213213, 'asdsad', '2023-02-15 07:40:51');


#
# TABLE STRUCTURE FOR: type_of_activity
#

DROP TABLE IF EXISTS `type_of_activity`;

CREATE TABLE `type_of_activity` (
  `type_act_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_act_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`type_act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (17, 'Regular Monthly Meeting', '2023-02-16 01:28:18');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (18, 'Regular Monthly COOP Visit', '2023-02-16 01:28:41');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (19, 'Job Vacancy Solicitation', '2023-02-16 01:29:08');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (20, 'Regular Monthly Project Monitoring', '2023-02-16 01:29:29');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (21, 'Training', '2023-02-16 01:29:37');


#
# TABLE STRUCTURE FOR: type_of_monitoring
#

DROP TABLE IF EXISTS `type_of_monitoring`;

CREATE TABLE `type_of_monitoring` (
  `type_mon_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_mon_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`type_mon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (7, 'Cooperative & Livelihood', '2023-02-16 06:48:24');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (8, 'Employment', '2023-02-16 06:48:35');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (9, 'Manpower Dev\'t', '2023-02-16 06:48:50');


#
# TABLE STRUCTURE FOR: under_type_of_activity
#

DROP TABLE IF EXISTS `under_type_of_activity`;

CREATE TABLE `under_type_of_activity` (
  `under_type_act_id` int(20) NOT NULL AUTO_INCREMENT,
  `typ_ac_id` int(25) NOT NULL,
  `under_type_act_name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`under_type_act_id`),
  KEY `typ_ac_id` (`typ_ac_id`),
  CONSTRAINT `under_type_of_activity_ibfk_1` FOREIGN KEY (`typ_ac_id`) REFERENCES `type_of_activity` (`type_act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (23, 21, 'Skill', '2023-02-16 04:12:06');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (24, 21, 'MDT', '2023-02-16 04:12:11');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (25, 21, 'CD', '2023-02-16 04:12:16');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (26, 21, 'PRS', '2023-02-16 04:12:22');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`user_id`, `username`, `password`, `created`) VALUES (1, 'sample', '$2y$10$UWICLmgH/NNYuILOCxa4.ewoeZYuzvSyBgYKAJN.xISSF4/WcigEO', '2023-02-15 09:34:25');


SET foreign_key_checks = 1;
