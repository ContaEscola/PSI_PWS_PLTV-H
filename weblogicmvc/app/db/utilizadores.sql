-- https://stackoverflow.com/questions/5555328/error-1396-hy000-operation-create-user-failed-for-jacklocalhost
-- Conta Admin
DROP USER IF EXISTS admin@localhost;
FLUSH privileges;
CREATE USER admin@localhost
IDENTIFIED BY 'adminConnection';

GRANT ALL PRIVILEGES ON pwsdb.* TO 'admin'@'localhost' WITH GRANT OPTION;

-- Conta Cliente
DROP USER IF EXISTS cliente@localhost;
FLUSH privileges;
CREATE USER cliente@localhost
IDENTIFIED BY 'clienteConnection';

GRANT SELECT ON pwsdb.* TO 'cliente'@'localhost';


-- Conta Funcionário
DROP USER IF EXISTS funcionario@localhost;
FLUSH privileges;
CREATE USER funcionario@localhost
IDENTIFIED BY 'funcionarioConnection';

GRANT SELECT, CREATE, UPDATE ON pwsdb.users TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE ON pwsdb.faturas TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE ON pwsdb.linhasfaturas TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE, DELETE ON pwsdb.produtos TO 'funcionario'@'localhost';
GRANT SELECT, CREATE, UPDATE, DELETE ON pwsdb.ivas TO 'funcionario'@'localhost';
GRANT SELECT, UPDATE ON pwsdb.empresas TO 'funcionario'@'localhost';