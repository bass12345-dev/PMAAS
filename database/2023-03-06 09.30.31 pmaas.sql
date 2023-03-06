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

INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (1, 'Toliyok Women Association', '1529984193.pdf', '1999615632.pdf', '1233945408.pdf', 'dasdsad', 'sasadas', '2147483647', 'sadsad@asdasdsad', '2023-02-20 07:24:58');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (2, 'Oroquieta Goldenhands Health and Wellness Association', '79827261.pdf', '121144496.pdf', '918846688.pdf', 'sadsad', 'asdsad', '213213213', 'asdsadsadasd', '2023-02-20 07:25:08');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (3, 'DTI', '1486979118.docx', '2010561541.pdf', '972445960.pdf', 'asdsad', 'asdsadsad', '123213213213', 'aasdsad@sdadasd', '2023-02-20 07:25:14');
INSERT INTO `cso` (`cso_id`, `cso_name`, `cor`, `by_laws`, `article`, `address`, `contact_person`, `contact_number`, `email`, `created`) VALUES (13, 'samp', '972383895.pdf', '1731749979.pdf', '343485789.pdf', 'asdsad', 'aazdasd', '213213', 'mabasdsa@gmail.com', '2023-02-21 04:53:16');


#
# TABLE STRUCTURE FOR: project_monitoring
#

DROP TABLE IF EXISTS `project_monitoring`;

CREATE TABLE `project_monitoring` (
  `project_monitoring_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_title` varchar(250) NOT NULL,
  `period` date NOT NULL,
  `attendance_present` int(150) NOT NULL,
  `attendance_absent` int(150) NOT NULL,
  `nom_borrowers_delinquent` int(150) NOT NULL,
  `nom_borrowers_overdue` int(150) NOT NULL,
  `total_production` decimal(10,2) NOT NULL,
  `total_collection_sales` decimal(10,2) NOT NULL,
  `total_released_purchases` decimal(10,2) NOT NULL,
  `total_delinquent_account` decimal(10,2) NOT NULL,
  `total_over_due_account` decimal(10,2) NOT NULL,
  `cash_in_bank` decimal(10,2) NOT NULL,
  `cash_on_hand` decimal(10,2) NOT NULL,
  `inventories` varchar(150) NOT NULL,
  PRIMARY KEY (`project_monitoring_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (9, '213', 'SADASD', '2023-02-21 08:01:16');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (11, '123', 'SADASD', '2023-02-21 08:03:08');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (13, '13112', 'adsasdasd', '2023-03-02 08:39:22');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (14, '123213', 'asdasdas', '2023-03-02 08:39:24');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (15, '123213231', 'asdsadasd', '2023-03-02 08:39:29');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (16, '1', 'qadasd', '2023-03-02 08:39:32');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (17, '2', 'adasd', '2023-03-02 08:39:34');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (18, '3', 'asdasd', '2023-03-02 08:39:37');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (19, '4', 'asdasd', '2023-03-02 08:39:40');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (20, '5', 'asdasd', '2023-03-02 08:39:42');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (21, '6', 'sample', '2023-03-02 08:45:57');
INSERT INTO `responsibility_center` (`res_center_id`, `res_center_code`, `res_center_name`, `created`) VALUES (22, '12321323', 'adasd', '2023-03-06 03:17:27');


#
# TABLE STRUCTURE FOR: trainings
#

DROP TABLE IF EXISTS `trainings`;

CREATE TABLE `trainings` (
  `training_id` int(50) NOT NULL AUTO_INCREMENT,
  `transact_id` int(11) NOT NULL,
  `title_of_training` varchar(250) NOT NULL,
  `no_of_participants` int(50) NOT NULL,
  `female` int(50) NOT NULL,
  `over_all_ratings` int(50) NOT NULL,
  `name_of_trainor` varchar(150) NOT NULL,
  PRIMARY KEY (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# TABLE STRUCTURE FOR: transactions
#

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `transaction_id` int(50) NOT NULL AUTO_INCREMENT,
  `pmas_no` varchar(50) NOT NULL,
  `date_and_time_filed` datetime NOT NULL,
  `type_of_monitoring_id` int(20) NOT NULL,
  `type_of_activity_id` int(20) NOT NULL,
  `under_type_of_activity_id` int(20) DEFAULT NULL,
  `responsibility_center_id` int(20) NOT NULL,
  `date_time` datetime NOT NULL,
  `cso_Id` int(20) NOT NULL,
  `is_project_monitoring` int(1) NOT NULL,
  `is_training` int(1) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `transactions` (`transaction_id`, `pmas_no`, `date_and_time_filed`, `type_of_monitoring_id`, `type_of_activity_id`, `under_type_of_activity_id`, `responsibility_center_id`, `date_time`, `cso_Id`, `is_project_monitoring`, `is_training`) VALUES (17, '2023-03-3', '2023-03-06 16:19:01', 3, 6, 0, 16, '1970-01-01 01:00:00', 1, 0, 1);
INSERT INTO `transactions` (`transaction_id`, `pmas_no`, `date_and_time_filed`, `type_of_monitoring_id`, `type_of_activity_id`, `under_type_of_activity_id`, `responsibility_center_id`, `date_time`, `cso_Id`, `is_project_monitoring`, `is_training`) VALUES (18, '2023-03-', '1970-01-01 01:00:00', 3, 3, 0, 16, '2023-03-07 16:29:24', 1, 0, 0);
INSERT INTO `transactions` (`transaction_id`, `pmas_no`, `date_and_time_filed`, `type_of_monitoring_id`, `type_of_activity_id`, `under_type_of_activity_id`, `responsibility_center_id`, `date_time`, `cso_Id`, `is_project_monitoring`, `is_training`) VALUES (19, '2023-03-2', '2023-03-15 16:29:48', 3, 4, 0, 16, '2023-03-06 16:30:07', 2, 0, 0);


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (3, 'Cooperative & Livelihood', '2023-02-21 08:34:43');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (4, 'Employment', '2023-02-21 08:34:48');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (5, 'Manpower Dev\'t', '2023-02-21 08:34:53');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (6, 'sample', '2023-02-27 04:11:10');
INSERT INTO `type_of_monitoring` (`type_mon_id`, `type_mon_name`, `created`) VALUES (7, 'Samplejr77', '2023-02-27 04:11:10');


#
# TABLE STRUCTURE FOR: under_type_of_activity
#

DROP TABLE IF EXISTS `under_type_of_activity`;

CREATE TABLE `under_type_of_activity` (
  `under_type_act_id` int(25) NOT NULL AUTO_INCREMENT,
  `typ_ac_id` int(25) NOT NULL,
  `under_type_act_name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`under_type_act_id`),
  KEY `typ_ac_id` (`typ_ac_id`),
  CONSTRAINT `under_type_of_activity_ibfk_1` FOREIGN KEY (`typ_ac_id`) REFERENCES `type_of_activity` (`type_act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (17, 6, 'Skills', '2023-02-25 11:04:15');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (18, 6, 'Mandatory', '2023-02-25 11:04:41');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (19, 6, 'Capability Development', '2023-02-25 11:04:49');
INSERT INTO `under_type_of_activity` (`under_type_act_id`, `typ_ac_id`, `under_type_act_name`, `created`) VALUES (20, 6, 'PRS', '2023-02-25 11:04:55');


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
