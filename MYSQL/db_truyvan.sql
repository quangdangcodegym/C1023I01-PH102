-- * là chọn tất cả các trường
SELECT *, name, price FROM products
where category_id = 1;

-- toán tử like: 
-- % sẽ đại diện cho 0 hoặc nhiều kí tự, _ đại diện cho 1 kí tự
SELECT *, name, price FROM products
where name like '__phone%';

-- Mênh đề in: xuất hiện bên trong 1 tập hợp
SELECT *, name, price FROM products
where category_id IN (1, 2);

-- Mênh đề in: xuất hiện bên trong 1 tập hợp HOẶC câu select
SELECT *, name, price FROM products
where category_id IN (SELECT distinct category_id FROM products);

-- Truy vấn exists

-- Có thể đặt tên bí danh cho ngắn gọn: products p HOẶC products as p
-- Join để làm gì: nối 2 bảng theo định kiện JOIN (lấy thông tin của 2 bảng)
select * from products as p
	join categories as c on p.category_id = c.id
    where c.name like 'laptop';
    
-- LEFT JOIN
select * from categories as c
	left join products as p
    on c.id = p.category_id;
    
-- LEFT JOIN nâng cao: 
select * from categories as c
	left join products as p
    on c.id = p.category_id
    where p.id is null;


