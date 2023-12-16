/*
 create TABLE `php_lrv_c0123i1`.`product` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `price` DOUBLE NULL,
  PRIMARY KEY (`id`));
  
  INSERT INTO `php_lrv_c0123i1`.`products` (`id`, `name`, `price`) VALUES ('1', 'Iphone 11 pro', '1000');
  
  ALTER TABLE `php_lrv_c0123i1`.`products` 
ADD COLUMN `create_at` DATE NULL AFTER `price`;


ALTER TABLE `php_lrv_c0123i1`.`products` 
CHANGE COLUMN `price` `price` FLOAT NULL DEFAULT NULL ;

  */
  
-- Tạo bảng: 
 create table `products`(
	`id` bigint not null auto_increment,
    `name` varchar(255) null,
    `price` double null,
    primary key (`id`));
    
    
-- Thêm dữ liệu
insert into `products` (`id`, `name`, `price`) values (1, 'Iphone 11 promax', '1000');
insert into `products` (`id`, `name`, `price`) values (2, 'Iphone 12', '15000');
-- insert into `products` (`id`, `name`, `price`) values (2, 'Iphone 12', '15000');				-- Nếu cố tình chèn thêm: thì bị lỗi khóa chính
-- insert into `products` ( `name`, `price`) values ( 'Iphone 12', '15000');						-- Nếu ko thêm cột ID thì sẽ áp dụng tự động tăng


-- dữ liệu dạng datetime: yyyy-mm-dd hh:mm:ss, dạng date: yyyy-mm-dd
-- SAU KHI TẠO BẢNG muốn thêm  1 cột date: create_at vào bảng products
alter table products
add column `create_at` date null after `name`;


-- SAU KHI TẠO muốn sửa dữ liệu 1 cột
alter table products
change column `price` `price` float null default null;

insert into `products` (`name`, `create_at`) values ( 'Iphone 12', '2023-05-20');


ALTER TABLE `products` 
ADD COLUMN `category_id` BIGINT NULL AFTER `price`
;

-- Tạo khóa ngoại liên kết tới bảng categories
ALTER TABLE `products` 
ADD CONSTRAINT `fk_category_id_categories`
  FOREIGN KEY (`category_id`)
  REFERENCES `categories` (`id`);
