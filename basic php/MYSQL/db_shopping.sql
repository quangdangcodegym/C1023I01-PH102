/*
CREATE TABLE `php_lrv_shopping`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `php_lrv_shopping`.`product_extras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url_image` VARCHAR(255) NULL,
  `url_video` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `php_lrv_shopping`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` FLOAT NULL,
  `create_at` DATE NULL,
  `category_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_category_id_categories_idx` (`category_id` ASC) VISIBLE,
  CONSTRAINT `fk_category_id_categories`
    FOREIGN KEY (`category_id`)
    REFERENCES `php_lrv_shopping`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


*/

-- Tạo bảng categories
CREATE TABLE `categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
  
  
-- Tạo bảng product_extras
CREATE TABLE `php_lrv_shopping`.`product_extras` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `url_image` VARCHAR(255) NULL,
  `url_video` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
  
  
-- Tạo bảng product gồm khóa ngoại tham chiếu qua bảng categories
-- constraint: ràng buộc, REFERENCES: tham chiếu 
CREATE TABLE `products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` FLOAT NULL,
  `create_at` DATE NULL,
  `category_id` INT NULL,
  
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_category_id_categories`
    FOREIGN KEY (`category_id`)
    REFERENCES `categories` (`id`));
    
    
-- Tạo bảng orders
CREATE TABLE `php_lrv_shopping`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `create_at` DATE NULL,
  `total` FLOAT NULL,
  `fullname` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
  
  
-- Tạo bảng order_detail
CREATE TABLE `order_details` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `order_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`id`));
  
  
-- Cập bảng order_detail sau khi tạo

ALTER TABLE `order_details` 
ADD CONSTRAINT `fk_order_id_orders`
  FOREIGN KEY (`order_id`)
  REFERENCES `orders` (`id`),
ADD CONSTRAINT `fk_product_id_products`
  FOREIGN KEY (`product_id`)
  REFERENCES `products` (`id`);
  
  
-- Insert dữ liệu cho bảng categories
INSERT INTO `categories` (`id`, `name`) VALUES ('1', 'Laptop');
INSERT INTO `categories` (`id`, `name`) VALUES ('2', 'Phone');

-- Insert dữ liệu cho bảng product_extras
INSERT INTO `product_extras` (`id`, `url_image`, `url_video`) 
VALUES ('2', 'https://dev.mysql.com/downloads/mysql/', 'https://dev.mysql.com/downloads/mysql/');


-- Thêm khóa ngoại cho bảng products
ALTER TABLE `products` 
ADD COLUMN `product_extra_id` INT NULL AFTER `category_id`;

ALTER TABLE `products` 
ADD CONSTRAINT `fk_product_extra_id_product_extras`
  FOREIGN KEY (`product_extra_id`)
  REFERENCES `product_extras` (`id`);
  
-- Thêm dữ liệu cho bảng products
INSERT INTO `products` (`id`, `name`, `price`, `create_at`, `category_id`, `product_extra_id`) 
VALUES ('1', 'Iphone 11', '1000000', '2023-10-20', '1', '1');
INSERT INTO `products` (`id`, `name`, `price`, `create_at`, `category_id`, `product_extra_id`) 
VALUES ('2', 'Iphone 12', '1000000', '2023-10-20', '1', NULL);



  



  
  
