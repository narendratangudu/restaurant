CREATE TABLE `appoint` (
  `id` INT AUTO_INCREMENT,
  `pname` VARCHAR(20),
  `phone` VARCHAR(20),
  `email` VARCHAR(12),
  `date` VARCHAR(25),
  `address` LONGTEXT,
  `oldornew` VARCHAR(25),
  `p_id` VARCHAR(25),
  `subdate` DATETIME,
  PRIMARY KEY (`id`)
);

CREATE TABLE `patient` (
  `p_id` INT AUTO_INCREMENT,
  `pname` VARCHAR(20),
  `phone` VARCHAR(20),
  `email` VARCHAR(12),
  `address` LONGTEXT,
  `gender` VARCHAR(20),
  `age` INT(20),
  `symptoms` LONGTEXT,
  `joindate` DATETIME,
  PRIMARY KEY (`p_id`)
);

CREATE TABLE `suggest` (
  `visit_id` INT AUTO_INCREMENT,
  `pname` VARCHAR(200),
  `symptoms` LONGTEXT,
  `joindate` DATETIME,
  PRIMARY KEY (`visit_id`)
);