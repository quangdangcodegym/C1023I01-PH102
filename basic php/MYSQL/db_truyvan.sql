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

-- Truy vấn exists - tồn tại, all
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
    
-- SẮP XẾP với keyword order by [cột] [ASC (default)|DESC]
SELECT * FROM products
order by category_id desc;

-- TRUY VẤN group by
select c.name, count(*) as soluong  
from products p join categories as c on p.category_id = c.id
group by category_id
having count(*) > 2;

-- Các hàm gộp tính tổng (sum), trung bình (avg)
SELECT avg(price) as trungbinhgia FROM php_lrv_shopping.products;


-- Tìm ra những sản phẩm không bán được
select *
from products as p
where p.id NOT IN (select oddt.product_id from order_details as oddt);


-- Tìm ra những sản phẩm không bán được dùng EXISTS
select *
from products as p
where NOT EXISTS (select * from order_details as oddt where p.id = oddt.product_id);


-- Tìm sản phẩm (MASP, TENSP) có tổng số lượng bán ra thấp nhất trong năm 2006.
select ct.MaSP, count(*) as countMin
from cthd as ct 
join hoadon as hd
	on ct.SoHD = hd.SoHoaDon
where year(hd.NgayMuaHang)  = 2006
group by ct.MaSP
having countMin = (
					select count(*) as countMin
	from cthd as ct 
	join hoadon as hd
		on ct.SoHD = hd.SoHoaDon
	where year(hd.NgayMuaHang)  = 2006
	group by ct.MaSP
    having countMin <=ALL ( 
		select count(*) as countMin
		from cthd as ct 
		join hoadon as hd
			on ct.SoHD = hd.SoHoaDon
		where year(hd.NgayMuaHang)  = 2006
        group by ct.MaSP
    )
    limit 1
					);
-- Trong 10 khách hàng có doanh số cao nhất, 
-- tìm khách hàng có số lần mua nhiều nhất
select hd.MaKH, count(*)
from (
	select * 
	from khachhang as kh
	order by kh.DoanhSo desc
	limit 10) as temp
join hoadon as hd on temp.MaKH = hd.MaKH
group by hd.MaKH
limit 1;

-- ĐẾM xem mỗi khách hàng đã mua bao nhiêu hóa đơn
select *, (select count(*) from hoadon as hd where kh.MaKh = hd.MaKH) as soluong
from khachhang as kh





	





