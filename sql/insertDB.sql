USE vaivendb;

INSERT INTO rol (description_rol) VALUES
('administrator'),
('operator');

INSERT INTO user (nick_user, name_user, lastname_user, email_user, pass_userL, activity_user, saldo_user, rol_id) VALUES
('root', 'SuperUser', 'Administrador', nomail@vaiven.com, 'N8l4$26', 1, 0, 1);