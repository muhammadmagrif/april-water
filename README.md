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
