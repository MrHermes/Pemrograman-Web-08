-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2023-04-29 11:54:36.615

-- tables
-- Table: user
CREATE TABLE user (
    id int  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(128)  NOT NULL,
    no_telp varchar(128)  NOT NULL,
    address varchar(128)  NOT NULL,
    email varchar(128)  NOT NULL,
    password varchar(128)  NOT NULL,
    is_admin bool  NOT NULL
);

-- Table: pesan
CREATE TABLE pesan (
    id int  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int  NOT NULL,
    created_at datetime NOT NULL,
    pesan varchar(128)  NOT NULL,
    balasan varchar(128)  NULL
);

-- foreign keys
-- Reference: pesan_user (table: pesan)
ALTER TABLE pesan ADD CONSTRAINT pesan_user FOREIGN KEY pesan_user (user_id)
    REFERENCES user (id);

-- insert user account
INSERT INTO user (name, no_telp, address, email, password, is_admin) VALUES
('Admin', '085161397832', 'Keputih Tegal Timur 2', 'admin@gmail.com', 'Admin12345', true),
('User', '085161397832', 'Keputih Tegal Timur 2', 'user@gmail.com', 'User12345', false);

-- End of file.

