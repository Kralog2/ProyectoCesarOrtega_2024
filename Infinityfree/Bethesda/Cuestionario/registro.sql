CREATE TABLE  `respuesta`(
`numero` int(11) NOT NULL,  
`nombre` TEXT NOT NULL,
`email` TEXT NOT NULL,
`gameTipe` TEXT NOT NULL,
`likeBethesdagames` TEXT NOT NULL,
`BethesdaSagas` TEXT NOT NULL,
`favoriteGame` TEXT NOT NULL,
`opinion` TEXT,
`fecha_registro` DATETIME NOT NULL DEFAULT current_timestamp
)engine=Innodb default charset=utf8;

ALTER TABLE `respuesta` 
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`numero`);

