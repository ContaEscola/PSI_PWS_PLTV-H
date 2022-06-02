-- Conta Admin
CREATE USER 'admin'@'localhost'
IDENTIFIED BY 'adminConnection';

GRANT ALL PRIVILEGES ON pws_h.* TO 'admin'@'localhost' WITH GRANT OPTION;

-- Conta Cliente
CREATE USER 'cliente'@'localhost'
IDENTIFIED BY 'clienteConnection';

GRANT SELECT ON pws_h.* TO 'cliente'@'localhost';


-- Conta Funcionário
CREATE USER 'funcionario'@'localhost'
IDENTIFIED BY 'funcionarioConnection';

GRANT SELECT, CREATE, UPDATE ON pws_h.users TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE ON pws_h.faturas TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE ON pws_h.linhasfaturas TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE, DELETE ON pws_h.produtos TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE, DELETE ON pws_h.ivas TO 'funcionario'@'localhost';
GRANT SELECT, UPDATE ON pws_h.empresas TO 'funcionario'@'localhost';