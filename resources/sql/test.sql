-- 
CREATE TABLE `laravel_exercise`.`student` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL DEFAULT '\"\"',
    `mobile` VARCHAR(20) NOT NULL DEFAULT '\"\"',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;
-- 

-- 
ALTER TABLE
    `student` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
    CHANGE `name` `name` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '\"\"' COMMENT '姓名',
    CHANGE `mobile` `mobile` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '\"\"' COMMENT '電話';
-- 

-- 
INSERT INTO
    `student` (`id`, `name`, `mobile`)
VALUES
    (NULL, 'Apple', '0911'),
    (NULL, 'Banana', '0922')
-- 

--
CREATE TABLE `laravel_exercise`.`cats` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL DEFAULT '\"\"' COMMENT '姓名',
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET = utf8mb4 COLLATE utf8mb4_unicode_ci;
--

--
INSERT INTO
    `cats` (`id`, `name`)
VALUES
    (NULL, 'Apple'),
    (NULL, 'Banana')
--