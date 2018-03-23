CREATE DATABASE compromissos;

CREATE TABLE compromisso(
    Id int(11) NOT NULL,
    Titulo varchar(128) NOT NULL,
    Data_Compromisso Date NOT NULL,
	Hora_Compromisso Time NOT NULL,
    PRIMARY KEY (id)
)
