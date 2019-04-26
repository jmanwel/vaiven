CREATE TABLE IF NOT EXISTS user(
id_user INT auto_increment PRIMARY KEY NOT NULL,
nick_user VARCHAR(50),
name_user VARCHAR(50) NOT NULL,
lastname_user VARCHAR(50) NOT NULL,
email_user VARCHAR(100) NOT NULL,
pass_user VARCHAR(40) NOT NULL,
activity_user BOOLEAN,
saldo_user INT,
rol_id TINYINT NOT NULL,
CONSTRAINT user_id_rol FOREIGN KEY (rol_id) REFERENCES rol (id_rol));