CREATE TABLE usuarios(
  id_user INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome  VARCHAR(255) NULL,
  login VARCHAR(255) NULL,
  senha VARCHAR(255) NULL,
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id_user)
);



CREATE TABLE comentarios(
  comentarios text NOT NULL AUTO_INCREMENT,
  id_info INTEGER,
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY(id_info)
  CONSTRAINT fk_teste FOREIGN KEY (id_info) REFERENCES usuarios (id_user)
);

CREATE TABLE forum(
  id_forum INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  id_user INT,
  comentarios TEXT, 
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_forum),
  CONSTRAINT FK_forum FOREIGN KEY(id_user) REFERENCES usuarios(id_user)
  );


  /*Duda version - FK_KEY*/
Create table forum (
ID_info integer not null PRIMARY KEY AUTO_INCREMENT,
ID_user integer null,
comentarios TEXT,
CONSTRAINT fk_UserPres FOREIGN KEY (ID_user) REFERENCES usuarios (ID_user)
);


/*backup-forum*/
Create table forum (
id_info integer not null PRIMARY KEY AUTO_INCREMENT,
id_user integer null,
nome varchar(255),
comentarios TEXT,
data_post TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
