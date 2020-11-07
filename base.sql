
CREATE DATABASE watch
USE watch

CREATE TABLE post
(
  id int(10) PRIMARY KEY IDENTITY NOT NULL,
  picture varchar(255) NOT NULL,
  cost varchar(10) NOT NULL,
  Description varchar(256) NOT NULL,
  name VARCHAR(255) NOT NULL
)
CREATE TABLE client
(
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255) PRIMARY KEY NOT NULL
)

CREATE TABLE receipt
(
  id int(10) PRIMARY KEY IDENTITY NOT NULL,
  Phonenumber int(20) NOT NULL,
  Address varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  IDproduct int(10) NOT NULL,
  Quantity int(10) NOT NULL,
  Emailofuser varchar(255) NOT NULL
)



INSERT INTO client
  (username, password, email)
VALUES
  ('admin', 12345, 'leductaiqnam2@gmail.com'),
  ('tai', 12345, 'leductaiqnam@gmail.com'),
  ('tai1', 12345, 'leductai2@gmail.com');

-- INSERT INTO post
--   (id, name, anhmattruoc, giabinhthuong, description)
-- VALUES
--   (6, 'Đồng Hồ Nam', 'donghonam2.jpg', '2.100.000đ', 'a'),
--   (8, 'Đồng Hồ Nam', 'donghonam4.jpg', '2.130.000đ', 'a'),
--   (9, 'Đồng Hồ Nam', 'donghonam5.jpg', '2.000.000đ', 'a'),
--   (10, 'Đồng Hồ Nam', 'donghonam6.jpg', '2.000.000đ', 'a'),
--   (11, 'Đồng Hồ Nam', 'donghonam7.jpg', '3.002.000đ', 'a'),
--   (12, 'Đồng Hồ Nam', 'donghonam8.jpg', '2.000.000đ', 'a'),
--   (13, 'Đồng Hồ Nam', 'donghonam9.jpg', '2.000.000đ', 'a'),
--   (14, 'Đồng Hồ Nam', 'donghonam10.jpg', '2.000.000đ', 'a'),
--   (15, 'Đồng Hồ Nam ', 'donghonam11.jpg', '2.000.000đ', 'a'),
--   (16, 'Đồng Hồ Nam', 'donghonam12.jpg', '2.000.000đ', 'a'),
--   (17, 'Đồng Hồ Nam', 'donghonam13.jpg', '2.000.000đ', 'a'),
--   (18, 'Đồng Hồ Nam', 'donghonam14.jpg', '2.000.000đ', 'a'),
--   (21, 'Đồng Hồ Nữ', 'donghonu1.jpg', '2.000.000đ', 'a'),
--   (22, 'Đồng Hồ Nữ', 'donghonu2.jpg', '2.000.000đ', 'a'),
--   (24, 'Đồng Hồ Nữ', 'donghonu3.jpg', '2.000.000đ', 'a');



