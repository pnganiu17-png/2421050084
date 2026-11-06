create database netflix;

-- phim
-- the_loai
-- quoc-gia
-- dien-vien
-- dao-dien
-- tap-phim
-- nguoi-dung

-- Table Người dùng(nguoi_dung)
id int
ten_dang_nhap varchar(30)
mat_khau varchar(30)
email varchar(30)
ho_ten varchar(50)
ngay_sinh date
so_dien_thoai varchar(10)
gioi_tinh boolean -- true:nam / false: nữ

CREATE TABLE if NOT EXISTS nguoi_dung(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean NOT NULL
  )

-- the_loai
CREATE TABLE if NOT EXISTS the_loai(
id int AUTO_INCREMENT PRIMARY KEY,
ten_the_loai varchar(255) NOT NULL,
)

-- dien_vien
CREATE TABLE if NOT EXISTS dien_vien(
id int AUTO_INCREMENT PRIMARY KEY,
ho_ten varchar(100) NOT NULL,
ngay_sinh date NOT NULL,
)

--dao_dien
CREATE TABLE if NOT EXISTS dao_dien(
id int AUTO_INCREMENT PRIMARY KEY,
ho_ten varchar(100) NOT NULL,
ngay_sinh date NOT NULL,
)

--phim
CREATE TABLE if NOT EXISTS phim(
id int AUTO_INCREMENT PRIMARY KEY,
ten_phim varchar(255) NOT NULL,
quoc_gia varchar(100) NOT NULL,
dao_dien_id int NOT NULL,
nam datetime NOT NULL,
do_tuoi int NOT NULL,
mo_ta varchar(255) NOT NULL
)

--phim_the_loai
CREATE TABLE if NOT EXISTS phim_the_loai(
id int AUTO_INCREMENT PRIMARY KEY,
phim_id int NOT NULL,
the_loai_id int NOT NULL,
)

--phim_dien_vien
CREATE TABLE if NOT EXISTS phim_dien_vien(
id int AUTO_INCREMENT PRIMARY KEY,
phim_id int NOT NULL,
dien_vien_id int NOT NULL
)


-- BUỔI 2:
-- Để thêm 1 bản ghi: INSERT 
INSERT INTO `the_loai`(`ten_the_loai`) VALUES ('Hoạt hình');
-- sau đó ấn select để tạo ra bảng
SELECT `id`, `ten_the_loai` FROM `the_loai` WHERE 1


-- Xoá 1 bản ghi: DELETE
DELETE FROM `the_loai` WHERE id=5 -- id=5 là xoá đi bản ghi thứ 5
-- sau đó ấn select để tạo ra bảng
SELECT `id`, `ten_the_loai` FROM `the_loai` WHERE 1


-- Lấy ra 1 thể loại bản ghi: SELECT*
SELECT * FROM `the_loai` WHERE ten_the_loai = 'Kinh dị'

-- Tìm thể loại(bản ghi) mà không nhớ hết tên: SELECT*
SELECT * FROM `the_loai` WHERE LIKE N'%dị%'


-- Cập nhật thông tin thể loại bị sai: UPDATE

-- Nhân vật:
INSERT INTO `dien_vien` (`ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Phương Ngân', '2006-10-16'); --năm-táng-ngày


-- Gộp thông tin các bảng:
SELECT p.ten_phim, dd.ho_ten AS `dao_dien`, tl.ten_the_loai FROM `phim` p
JOIN `dao_dien` dd
ON p.dao_dien_id = dd.id
JOIN phim_the_loai ptl
ON p.id = ptl.phim_id
JOIN the_loai tl
ON tl.id = ptl.the_loai_id
WHERE p.id = 1;


