SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `wbb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `wbb` ;

-- -----------------------------------------------------
-- Table `wbb`.`SEX`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`SEX` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`privilege`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`privilege` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`member`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`member` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NULL,
  `lname` VARCHAR(45) NULL,
  `email` VARCHAR(50) NULL,
  `birthday` DATE NULL,
  `tell` VARCHAR(10) NULL,
  `SEX_id` INT NOT NULL,
  `enabled` TINYINT(1) NULL DEFAULT 0,
  `registerdate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `privilege_id` INT NOT NULL,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `confirmmember` VARCHAR(45) NULL,
  `profile` VARCHAR(100) NULL,
  PRIMARY KEY (`id`, `SEX_id`, `privilege_id`),
  INDEX `fk_member_SEX_idx` (`SEX_id` ASC),
  INDEX `fk_member_privilege1_idx` (`privilege_id` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `fk_member_SEX`
    FOREIGN KEY (`SEX_id`)
    REFERENCES `wbb`.`SEX` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_member_privilege1`
    FOREIGN KEY (`privilege_id`)
    REFERENCES `wbb`.`privilege` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`group` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`supgroup`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`supgroup` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NULL,
  `group_id` INT NOT NULL,
  PRIMARY KEY (`id`, `group_id`),
  INDEX `fk_supgroup_group1_idx` (`group_id` ASC),
  CONSTRAINT `fk_supgroup_group1`
    FOREIGN KEY (`group_id`)
    REFERENCES `wbb`.`group` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`post`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`post` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `topic` VARCHAR(45) NULL,
  `content` TEXT NULL,
  `created` TIMESTAMP NULL,
  `updated` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` INT NOT NULL,
  `supgroup_id` INT NOT NULL,
  `supgroup_group_id` INT NOT NULL,
  `editabled` TINYINT(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`, `member_id`, `supgroup_id`, `supgroup_group_id`),
  INDEX `fk_post_member1_idx` (`member_id` ASC),
  INDEX `fk_post_supgroup1_idx` (`supgroup_id` ASC, `supgroup_group_id` ASC),
  CONSTRAINT `fk_post_member1`
    FOREIGN KEY (`member_id`)
    REFERENCES `wbb`.`member` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_post_supgroup1`
    FOREIGN KEY (`supgroup_id` , `supgroup_group_id`)
    REFERENCES `wbb`.`supgroup` (`id` , `group_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_id` INT NOT NULL,
  `comment` TEXT NULL,
  `member_id` INT NOT NULL,
  `created` DATETIME NULL,
  `updated` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `post_id`, `member_id`),
  INDEX `fk_comment_post1_idx` (`post_id` ASC),
  INDEX `fk_comment_member1_idx` (`member_id` ASC),
  CONSTRAINT `fk_comment_post1`
    FOREIGN KEY (`post_id`)
    REFERENCES `wbb`.`post` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comment_member1`
    FOREIGN KEY (`member_id`)
    REFERENCES `wbb`.`member` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `wbb`.`member_has_group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `wbb`.`member_has_group` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `member_id` INT NOT NULL,
  `group_id` INT NOT NULL,
  PRIMARY KEY (`id`, `member_id`, `group_id`),
  INDEX `fk_member_has_group_group1_idx` (`group_id` ASC),
  INDEX `fk_member_has_group_member1_idx` (`member_id` ASC),
  CONSTRAINT `fk_member_has_group_member1`
    FOREIGN KEY (`member_id`)
    REFERENCES `wbb`.`member` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_member_has_group_group1`
    FOREIGN KEY (`group_id`)
    REFERENCES `wbb`.`group` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
