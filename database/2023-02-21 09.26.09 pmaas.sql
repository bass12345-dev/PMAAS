SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: cso
#

DROP TABLE IF EXISTS `cso`;

CREATE TABLE `cso` (
  `cso_id` int(20) NOT NULL AUTO_INCREMENT,
  `cso_name` varchar(250) NOT NULL,
  `cor` varchar(150) NOT NULL,
  `by_laws` varchar(150) NOT NULL,
  `article` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact_person` varchar(150) NOT NULL,
  `contact_number` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`cso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (1, 'Toliyok Women Association', '', '', '', '', '', '2147483647', '', '2023-02-20 07:24:58');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (2, 'Oroquieta Goldenhands Health and Wellness Association', '', '', '', '', '', '0', '', '2023-02-20 07:25:08');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (3, 'DTI', '', '', '', '', '', '0', '', '2023-02-20 07:25:14');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (13, 'sample', '678491873.pdf', '1196372703.pdf', '600293219.pdf', 'asdsad', 'aazdasd', '213213', 'marcojoskentceasarey@gmail.com', '2023-02-21 04:53:16');


#
# TABLE STRUCTURE FOR: responsibility_center
#

DROP TABLE IF EXISTS `responsibility_center`;

CREATE TABLE `responsibility_center` (
  `res_center_id` int(20) NOT NULL AUTO_INCREMENT,
  `res_center_code` varchar(50) NOT NULL,
  `res_center_name` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`res_center_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (9, '213', 'SADASD', '2023-02-21 08:01:16');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (11, '123', 'SADASD', '2023-02-21 08:03:08');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (12, '213213', 'SDSAD', '2023-02-21 08:03:11');


#
# TABLE STRUCTURE FOR: type_of_activity
#

DROP TABLE IF EXISTS `type_of_activity`;

CREATE TABLE `type_of_activity` (
  `type_act_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_act_name` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`type_act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (2, 'Regular Monthly Meeting', '2023-02-21 08:39:48');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (3, 'Regular Monthly COOP Visit', '2023-02-21 08:39:58');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (4, 'Job Vacancy Solicitation', '2023-02-21 08:40:03');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (5, 'Regular Monthly Project Monitoring', '2023-02-21 08:40:08');
INSERT INTO `type_of_activity` (`type_act_id`, `type_act_name`, `created`) VALUES (6, 'Training', '2023-02-21 08:40:15');


#
# TABLE STRUCTURE FOR: type_of_monitoring
#

DROP TABLE IF EXISTS `type_of_monitoring`;

CREATE TABLE `type_of_monitoring` (
  `type_mon_id` int(20) NOT NULL AUTO_INCREMENT,
  `type_mon_name` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`type_mon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (3, 'Cooperative & Livelihood', '2023-02-21 08:34:43');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (4, 'Employment', '2023-02-21 08:34:48');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (5, 'Manpower Dev\'t', '2023-02-21 08:34:53');


#
# TABLE STRUCTURE FOR: under_type_of_activity
#

DROP TABLE IF EXISTS `under_type_of_activity`;

CREATE TABLE `under_type_of_activity` (
  `under_type_act_id` int(25) NOT NULL AUTO_INCREMENT,
  `typ_ac_id` int(25) NOT NULL,
  `under_type_act_name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`under_type_act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (1, 6, 'asdasd', '2023-02-21 08:56:27');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `extension` varchar(10) NOT NULL,
  `profile_pic` varchar(150) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `extension`, `profile_pic`, `user_type`, `username`, `password`, `created`) VALUES (1, 'Basil John', 'C.', 'Mañabo', '', '1893947325.png', 'admin', 'admin', 'admin', '2023-02-20 07:12:54');
INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `extension`, `profile_pic`, `user_type`, `username`, `password`, `created`) VALUES (4, 'Juan', '', 'Tamad', '', '382887275.png', 'user', 'user', 'user', '2023-02-21 06:42:25');


SET foreign_key_checks = 1;
