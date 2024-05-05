CREATE TABLE  `respuesta`(
`numero` int(11) NOT NULL,  
`nombre` text not null,
`email` text not null,
`gameTipe` text not null,
`likeBethesdagames` text not null,
`BethesdaSagas` text not null,
`favoriteGame` varchar (200) not null,
`opinion` varchar (1500),
`fecha_registro` datetime not null default current_timestamp
)engine=Innodb default charset=utf8;

ALTER TABLE `respuesta` 
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`numero`);
;
