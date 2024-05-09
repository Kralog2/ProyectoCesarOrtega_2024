CREATE TABLE  `respuesta`(
`numero` int(11) NOT NULL,  
`nombre` VARCHAR (45) NOT NULL,
`email` VARCHAR (45) NOT NULL,
`gameTipe` VARCHAR (45) NOT NULL,
`likeBethesdagames` VARCHAR (45) NOT NULL,
`BethesdaSagas` VARCHAR (45) NOT NULL,
`favoriteGame` VARCHAR (45) NOT NULL,
`opinion` VARCHAR (45),
`fecha_registro` DATETIME NOT NULL DEFAULT current_timestamp
)engine=Innodb default charset=utf8;

ALTER TABLE `respuesta` 
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`numero`);

