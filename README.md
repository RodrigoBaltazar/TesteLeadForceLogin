## TesteLeadForceLogin

### Reqs

LAMP stack

### Using

-------------------
#### Banco de Dados
-------------------
No mysql:

CREATE DATABASE foo;

USE foo;

CREATE TABLE users (
    id int AUTO_INCREMENT NOT NULL,
    user varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    primary key (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-------------------
Mude o código de conexão em controller/LoginController.php e em controller/RegisterController.php para suas credenciais.
-------------------


* Descompacte ou clone o repositorio em sua raiz onde o apache funciona (ubuntu 20.04 /var/www/html)
* Acesse no browser: http://localhost/view
* Cadastre um Usuario
* Faça login com um Usuario cadastrado
