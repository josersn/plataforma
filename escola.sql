create database saphirEduc;
use saphirEduc;

create table alunos (
	aluno_id int primary key auto_increment,
    nome varchar(256),
    cpf varchar(11) unique,
    curso varchar(100),
    dataNascimento varchar(8),
    email varchar(256) unique,
    ra int unique,
    contato int,
    segundo_contato int
);

create table professores (
	professor_id int primary key auto_increment,
    nome varchar(256),
    cpf varchar(11) unique,
	email varchar(256) unique
);

create table cursos (
	id int primary key auto_increment,
    nome varchar(256),
    nivel_do_curso varchar(256),
    duracao int
    
);

create table turma (
	id int primary key,
    professor_id varchar(256),
    alunos varchar(256),
    foreign key(professor_id) references professores(professor_id),
    foreign key(alunos) references alunos(aluno_id)
    
);