DROP DATABASE Aulatarefas;
CREATE DATABASE AulaTarefas;
USE AulaTarefas;

CREATE TABLE tarefas (
ID int NOT NULL AUTO_INCREMENT,
TITULO TEXT,
STATUS TINYINT,
CREATED_AT DATETIME,
UPDATED_AT DATETIME,
PRIMARY KEY (ID)
);

INSERT INTO TAREFAS(TITULO, STATUS) VALUES ('Fazer os testes no Laravel', 1);
INSERT INTO TAREFAS(TITULO, STATUS) VALUES ('Testar MVC', 1);


Criando as tabelas:
php artisan migrate

Inserindo os dados:
php artisan db:seed
