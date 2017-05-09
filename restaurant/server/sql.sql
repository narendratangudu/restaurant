CREATE TABLE `orders2` (
  `o_id` INT AUTO_INCREMENT,
  `cname` VARCHAR(20),
  `call` VARCHAR(20),
  `tableno` VARCHAR(12),
  `list` LONGTEXT,
  `totalcost` INT(20),
  `status` VARCHAR(25),
  `ordertime` DATETIME,
  PRIMARY KEY (`o_id`)
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