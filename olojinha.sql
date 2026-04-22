create database olojinha;
use olojinha;
create table categorias
(
    catid int primary key auto_increment,
    catnome varchar(150),
    catativo boolean default 1
);
create table subcategorias
(
    subid int primary key auto_increment,
    subnome varchar(150),
    subcatid int,
    subativo boolean default 1,
    constraint fksubcatid foreign key (subcatid) references categorias (catid)
);
create table produtos
(
    proid int primary key auto_increment,
    pronome varchar(150),
    prodescricao varchar(1024),
    provalorcusto double,
    provalorvenda double,
    proquantidade int,
    prosubid int,
    proativo boolean default 1,
    constraint fkprosubid foreign key (prosubid) references subcategorias (subid)
);
create table fotosproduto
(
    fotid int primary key auto_increment,
    fotcaminho varchar(1024),
    fotdescricao varchar(150),
    fotproid int,
    fotprincipal boolean default 0,
    fotativo boolean default 1,
    constraint fkfotproid foreign key (fotproid) references produtos (proid)
);

insert into categorias (catnome) values
('Acessórios para Veículos'),
('Agro'),
('Alimentos e Bebidas'),
('Pet Shop'),
('Antiguidades e Coleções'),
('Arte, Papelaria e Armarinho'),
('Bebês'),
('Beleza e Cuidado Pessoal'),
('Brinquedos e Hobbies'),
('Calçados, Roupas e Bolsas'),
('Câmeras e Acessórios'),
('Carros, Motos e Outros'),
('Casa, Móveis e Decoração'),
('Celulares e Telefones'),
('Construção'),
('Eletrodomésticos'),
('Eletrônicos, Áudio e Vídeo'),
('Esportes e Fitness'),
('Ferramentas'),
('Festas e Lembrancinhas'),
('Games'),
('Imóveis'),
('Indústria e Comércio'),
('Informática'),
('Ingressos'),
('Instrumentos Musicais'),
('Joias e Relógios'),
('Livros, Revistas e Comics'),
('Música, Filmes e Seriados'),
('Saúde'),
('Serviços'),
('Mais Categorias');

select 
    proid,
    pronome,
    prodescricao,
    provalorcusto,
    provalorvenda,
    proquantidade,
    prosubid,
    proativo,
    subnome,
    subcatid,
    subativo,
    catnome,
    catativo
from 
    produtos,subcategorias,categorias
where 
    prosubid = subid
and
    subcatid = catid