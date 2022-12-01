CREATE DATABASE DULIEU;
USE DULIEU;

-- create table
CREATE TABLE phongban (
	IDPB VARCHAR(50) ,
    Tenpb VARCHAR(50),
    Mota VARCHAR(50),
    CONSTRAINT PK_phongban PRIMARY KEY (IDPB)
);

CREATE TABLE nhanvien (
	IDNV VARCHAR(50),
    Hoten VARCHAR(50),
    IDPB VARCHAR(50) ,
    Diachi VARCHAR(50),
    CONSTRAINT PK_nhanvien PRIMARY KEY (IDNV),
    CONSTRAINT FK_nhanvien_phongban FOREIGN KEY (IDPB) REFERENCES phongban(IDPB)	
);

-- insert data
INSERT INTO phongban(IDPB, Tenpb, Mota)
VALUES ('PB01', 'Phong ban so 1', 'AAA'),
	   ('PB02', 'Phong ban so 2', 'BBB'),
       ('PB03', 'Phong ban so 3', 'CCC');
       
INSERT INTO nhanvien(IDNV, Hoten, IDPB, Diachi)
VALUES ('NV01', 'Le A', 'PB01', 'Da Nang'),
       ('NV02', 'Tran B', 'PB02', 'Quang Nam'),
       ('NV03', 'Nguyen C', 'PB03', 'Quang Ngai'),
       ('NV04', 'Mac D', 'PB01', 'Hue'),
       ('NV05', 'Truong E', 'PB02', 'Gia Lai');