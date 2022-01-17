#create database escola_univap;
#use escola_univap;



/*create table tbl_turma(
id_turma int primary key not null,
nome_turma varchar(2) not null,
nome_curso varchar(50) not null
);

create table tbl_aluno(
matricula int primary key not null AUTO_INCREMENT,
nome varchar(50) not null,
rg varchar(9) not null,
cpf varchar(11) not null,
data_nascimento varchar(10) not null,
id_turma int not null,
FOREIGN KEY (id_turma) references tbl_turma (id_turma));*/

#select * from tbl_turma;
#select * from tbl_aluno;

#update tbl_aluno set nome ='Maria', rg = '123', cpf = '123', data_nascimento = '21/11/2004', id_turma = 1 where matricula = 50100111;
#update tbl_turma set nome_turma = '3F', nome_curso = 'Administração' where id_turma='1';

#delete from tbl_aluno where matricula = 50200113;
#delete from tbl_turma where id_turma = 1;

#insert into tbl_turma (id_turma, nome_turma, nome_curso) values (1, "2F", "Informática");
#insert into tbl_aluno(matricula, nome, rg, cpf, data_nascimento, id_turma) values (50200111, "Renato Minoru", "123456789", "12345678911","05/01/2005", 1);
