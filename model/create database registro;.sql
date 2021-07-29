create database reg;
use reg;
CREATE TABLE `reg`.`t_registro` (
  `id_registro` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidoP` VARCHAR(45) NOT NULL,
  `apeliidoM` VARCHAR(45) NOT NULL,
  `matricula` VARCHAR(45) NOT NULL,
  `fecha` DATE NOT NULL,
  `espacialidad` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_registro`));
ALTER TABLE `reg`.`t_registro` 
ADD COLUMN `sexo` VARCHAR(45) NOT NULL AFTER `especualidad`;
ALTER TABLE `reg`.`t_registro` 
ADD COLUMN `nombreArchivo` VARCHAR(45) NOT NULL AFTER `sexo`;