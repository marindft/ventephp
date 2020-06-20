create table user (
  id_user INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  mail VARCHAR(50) UNIQUE,
  login VARCHAR(30) UNIQUE,
  password VARCHAR(255)
);

create table produit (
  id_prod INT PRIMARY KEY AUTO_INCREMENT,
  nomProd VARCHAR(50) UNIQUE,
  quantiteProd INT,
  prixProd INT,
  imgProd VARCHAR(50),
  descriptionProd VARCHAR(255)
);

create table meta_table (
  ordre INT PRIMARY KEY,
  label VARCHAR(50),
  type_balise VARCHAR(30),
  type_input VARCHAR(20),
  name VARCHAR(50),
  placeholder VARCHAR(50),
  maxlength INT,
  required VARCHAR(50),
  min INT,
  value VARCHAR(50),
  type_champ VARCHAR(50),
  type_format VARCHAR(70),
  table_cible VARCHAR(30)
);

insert into meta_table (ordre,label,type_balise,type_input,name,maxlength,required,type_champ,table_cible) values (1,'Nom produit','input','text','nomProd',50,'required','VARCHAR','produit');
insert into meta_table (ordre,label,type_balise,type_input,name,maxlength,min,required,type_champ,table_cible) values (2,'Quantite produit','input','number','quantiteProd',3,1,'required','INT','produit');
insert into meta_table (ordre,label,type_balise,type_input,name,maxlength,min,required,type_champ,table_cible) values (3,'Prix produit','input','number','prixProd',6,1,'required','INT','produit');
insert into meta_table (ordre,label,type_balise,type_input,name,value,required,type_champ,type_format,table_cible) values (4,'Image du produit','input','file','imgProd','Image Produit','required','VARCHAR','image/png,image/jpeg','produit');
insert into meta_table (ordre,type_balise,name,placeholder,maxlength,required,type_champ,table_cible) values (5,'textarea','descriptionProd','Description Produit',255,'required','VARCHAR','produit');


-- create table meta_table (
--   ordre INT PRIMARY KEY,
--   type_input VARCHAR(20),
--   name VARCHAR(50),
--   placeholder VARCHAR(50),
--   maxlength INT,
--   required VARCHAR(50),
--   id VARCHAR(50),
--   type_champ VARCHAR(50),
--   table_cible VARCHAR(30)
-- );
--
-- insert into meta_table (ordre,type_input,name,placeholder,maxlength,required,type_champ,table_cible) values (1,'text','nom','Nom',50,'required','VARCHAR','user');
-- insert into meta_table (ordre,type_input,name,placeholder,maxlength,required,type_champ,table_cible) values (2,'text','prenom','Prenom',50,'required','VARCHAR','user');
-- insert into meta_table (ordre,type_input,name,placeholder,maxlength,required,type_champ,table_cible) values (3,'email','mail','Adresse Mail',50,'required','VARCHAR','user');
-- insert into meta_table (ordre,type_input,name,placeholder,maxlength,required,type_champ,table_cible) values (4,'text','login',"Nom d'utilisateur",30,'required','VARCHAR','user');
-- insert into meta_table (ordre,type_input,name,placeholder,required,id,type_champ,table_cible) values (5,'password','password','Mot de passe','required','password','VARCHAR','user');
-- insert into meta_table (ordre,type_input,name,placeholder,required,id,type_champ,table_cible) values (6,'password','password1','Confirmer le mot de passe','required','password1','VARCHAR','user');
