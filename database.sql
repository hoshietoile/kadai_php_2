create table forms (
  id int not null auto_increment primary key,
  category varchar(255),
  company varchar(255),
  url varchar(255),
  name varchar(255),
  nameKana varchar(255),
  mail varchar(255),
  telNum varchar(255),
  contact varchar(255),
  kikkake varchar(255),
  request varchar(255),
  _datetime datetime
);
