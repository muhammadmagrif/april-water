# april-water
a web-based application project for April Water.

----
## Installation
### Database setup.
* Create the databse.
```sql
create database april;
 ```
* use the database, then create tables.
 ```sql
create table session (
    id varchar(40) not null,
    ip_address varchar(45) not null,
    timestamp int(100) not null,
    data blob not null
);

CREATE TABLE karyawan (
    id int(11) NOT NULL AUTO_INCREMENT,
    nama varchar(30) NOT NULL,
    tanggal_lahir date NOT NULL,
    alamat varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    nomer text NOT NULL,
    job varchar(20) NOT NULL,
    ijazah varchar(50) NOT NULL,
    cv varchar(50) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE kritik (
    id_kritik int(11) NOT NULL AUTO_INCREMENT,
    nama varchar(50) NOT NULL,
    email varchar(200) NOT NULL,
    pesan varchar(2000) NOT NULL,
    tanggal_upload date NOT NULL,
    PRIMARY KEY(id_kritik)
);

CREATE TABLE pengiriman (
    kode_pengiriman int(10) NOT NULL AUTO_INCREMENT,
    nama_penerima varchar(50) NOT NULL,
    alamat_penerima text NOT NULL,
    telepon_penerima text NOT NULL,
    nama_pemesan varchar(25) NOT NULL,
    pemesanan varchar(10) NOT NULL,
    kurir varchar(25) NOT NULL,
    status varchar(20) NOT NULL,
    tanggal_kirim date DEFAULT NULL,
    PRIMARY KEY(kode_pengiriman)
);

CREATE TABLE pesan (
    id_pesanan int(11) NOT NULL AUTO_INCREMENT,
    id_barang int(11) NOT NULL,
    id_user int(11) NOT NULL,
    jml_barang int(11) NOT NULL,
    harga int(11) NOT NULL,
    alamat varchar(50) NOT NULL,
    PRIMARY KEY(id_pesanan)
);

CREATE TABLE tb_barang (
    id_barang int(11) NOT NULL,
    nama_barang varchar(20) NOT NULL,
    harga int(11) NOT NULL,
    PRIMARY KEY(id_barang)
);

CREATE TABLE tb_transaksi (
    id_trx int(10) NOT NULL AUTO_INCREMENT,
    tanggal_transaksi date NOT NULL,
    id_user varchar(100) NOT NULL,
    id_barang varchar(100) NOT NULL,
    total_barang int(10) NOT NULL,
    total_harga int(10) NOT NULL,
    status int(1) NOT NULL COMMENT '2=lunas, 3=belum',
    PRIMARY KEY(id_trx)
);

CREATE TABLE tb_user (
    id_user int(100) NOT NULL AUTO_INCREMENT,
    nama_user varchar(100) NOT NULL,
    username varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    PRIMARY KEY(id_user)
);

CREATE TABLE customer(
 nama varchar(50),
 ktp varchar(30) NOT NULL,
 PRIMARY KEY(ktp)
);

CREATE TABLE pesan(
 ktp varchar(30),
 id_pesanan int NOT NULL AUTO_INCREMENT,
 alamat varchar(100),
 noHp varchar(15),
 jml int,
 jenis varchar(50),
 metode_pembayaran varchar(20),
 tanggal_pemesanan date,
 status_pemesanan varchar(20),
 PRIMARY KEY(id_pesanan)
);

 ```
 ----
## Troubleshoot
In case of '500 internal server error' message, please enable mod_rewrite by following the steps below:
* open `apache/conf/`
* open `httpd.conf`
* find the following line: 
```
#LoadModule rewrite_module modules/mod_rewrite.so
```
* uncomment it, then restart your apache.
----
