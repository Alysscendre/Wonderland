CREATE TABLE `rdb`.`users` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
 `username` VARCHAR(255) NOT NULL ,
 `password` VARCHAR(255) NOT NULL ,
 `email` VARCHAR(255) NOT NULL ,
 `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
 PRIMARY KEY (`id`),
 UNIQUE (`username`),
 UNIQUE (`email`)) ENGINE = MyISAM;