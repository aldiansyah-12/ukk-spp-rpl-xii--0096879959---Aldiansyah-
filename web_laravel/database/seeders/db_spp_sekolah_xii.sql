-- Active: 1794274232427@@127.0.0.1@3306@db_spp_sekolah_xii
-- Active: 1794274232427@@127.0.0.1@3306
CREATE DATABASE db_spp_sekolah_xii;
create table spp(
    spp INT AUTO_INCREMENT PRIMARY KEY,
    tahun int NOT NULL,
    nominal int not NULL,
    kategori VARCHAR(100),
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
create TABLE kelas