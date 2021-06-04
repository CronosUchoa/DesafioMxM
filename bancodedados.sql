CREATE DATABASE mxm;
USE mxm;

CREATE TABLE `mxm`.`registro` (
  `idRegistro` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT NULL,
  `cep` INT NULL,
  `bairro` VARCHAR(45) NULL,
  `localidade` VARCHAR(45) NULL,
  `logradouro` VARCHAR(45) NULL,
  PRIMARY KEY (`idRegistro`));