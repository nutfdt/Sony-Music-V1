drop database if exists sony_music;
create database sony_music;
use sony_music;

create table categorie(
    idcategorie Int (3) Auto_increment NOT NULL,
    type varchar(50),
    CONSTRAINT categorie_PK PRIMARY KEY (idcategorie)
);

create table partenairedigital(
    idpartenaired Int (3) Auto_increment NOT NULL,
    entreprise Varchar(50),
    adresseMaisonMere Varchar(50),
    nbSiteStreaming Varchar(50),
    CONSTRAINT partenairedigital_PK PRIMARY KEY (idpartenaired)
);

create table partenairephysique(
    idpartenairep Int (3) Auto_increment NOT NULL,
    entreprise Varchar(50),
    adresseSiegeSocial Varchar(50),
    nbMagasins Int(3),
    CONSTRAINT partenairephysique_PK PRIMARY KEY (idpartenairep)
);

create table label(
    idlabel Int (3) Auto_increment NOT NULL,
    nom Varchar(50),
    adresse Varchar(250),
    telephone Varchar(10),
    email Varchar(250),
    nbEmployes Int(6),
    CONSTRAINT label_PK PRIMARY KEY (idlabel)
);


create table agent(
    idagent Int (3) Auto_increment NOT NULL,
    nom Varchar(50),
    prenom Varchar(50),
    email Varchar(250),
    telephone Varchar(20),
    idlabel Int,
    CONSTRAINT agent_PK PRIMARY KEY (idagent),
    CONSTRAINT agent_label_FK FOREIGN KEY (idlabel) REFERENCES label (idlabel)
);

create table artiste(
    idartiste Int (3)Auto_increment NOT NULL,
    nom Varchar(250),
    prenom Varchar(250),
    nomDeScene Varchar(250),
    typePrincipal Varchar(50),
    email Varchar(50),
    telephone Varchar(50),
    images varchar(250),
    idlabel Int (3),
    CONSTRAINT artiste_PK PRIMARY KEY (idartiste),
    CONSTRAINT artiste_a_label_FK FOREIGN KEY (idlabel) REFERENCES label (idlabel)
);

create table album(
    idalbum Int (3) Auto_increment NOT NULL,
    nom Varchar(50),
    anneeSortie int (4),
    idartiste Int,
    CONSTRAINT album_PK PRIMARY KEY (idalbum),
    CONSTRAINT album_artiste_FK FOREIGN KEY (idartiste) REFERENCES artiste (idartiste)
);

create table chanson(
    idchanson Int (3) Auto_increment NOT NULL,
    titre Varchar(50),
    sortie date,
    duree Varchar(50),
    idartiste Int NOT NULL,
    idalbum Int NOT NULL,
    idcategorie Int NOT NULL,
    CONSTRAINT chanson_PK PRIMARY KEY (idchanson),
    CONSTRAINT chanson_artiste_FK FOREIGN KEY (idartiste) REFERENCES artiste (idartiste),
    CONSTRAINT chanson_album_FK FOREIGN KEY (idalbum) REFERENCES album (idalbum),
    CONSTRAINT chanson_categorie_FK FOREIGN KEY (idcategorie) REFERENCES categorie (idcategorie)
);

create table ventedigitale(
    idvented Int (3) Auto_increment NOT NULL,
    nbVente Int (8),
    prixParVente Float,
    date Date,
    idpartenaired Int(3) NOT NULL,
    idchanson Int(3) NOT NULL,
    idartiste Int(3) not NULL,
    CONSTRAINT ventedigitale_PK PRIMARY KEY (idvented),
    CONSTRAINT ventedigitale_partenaired_FK FOREIGN KEY (idpartenaired) REFERENCES partenairedigital (idpartenaired),
    CONSTRAINT ventedigitale_artiste_FK FOREIGN KEY (idartiste) REFERENCES artiste (idartiste),
    CONSTRAINT ventedigitale_chanson_FK FOREIGN KEY (idchanson) REFERENCES chanson (idchanson)
);

create table ventephysique(
    idventep Int (3) Auto_increment NOT NULL,
    nbVente Int (8),
    prixParVente Float,
    date Date,
    idpartenairep int (3) not NULL,
    idartiste int (3) not null,
    idalbum int (3) not null,
    CONSTRAINT ventephysique_PK PRIMARY KEY (idventep),
    CONSTRAINT ventephysique_partenairep_FK FOREIGN KEY (idpartenairep) REFERENCES partenairephysique (idpartenairep),
    CONSTRAINT ventephysique_artiste_FK FOREIGN KEY (idartiste) REFERENCES artiste (idartiste),
    CONSTRAINT ventephysique_album_FK FOREIGN KEY (idalbum) REFERENCES album (idalbum)
);

create table user (
    iduser  Int (3) Auto_increment NOT NULL,
    nom Varchar(250),
    prenom Varchar(250),
    service varchar(250),
    email varchar(250),
    mdp varchar(250),
    role enum('admin', 'market', 'partenaireD', 'partenaireP', 'label'),
    CONSTRAINT user_PK PRIMARY KEY (iduser)
);
insert into user values (null,"Garance","DUGIMONT","IT","admin@gmail.com","123","admin");
insert into user values (null,"Julia","CHARDON","marketting","market@gmail.com","123","market");
insert into user values (null,"john","white","partenairep","partp@gmail.com","123","partenaireP");
insert into user values (null,"steve","rogers","partenaired","partd@gmail.com","123","partenaireD");
insert into user values (null,"idunno","meh","label","label@gmail.com","123","label");
