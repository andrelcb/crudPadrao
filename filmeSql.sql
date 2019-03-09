-- -----------------------------------------------------
-- Schema filme
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `filme` DEFAULT CHARACTER SET utf8 ;
USE `filme` ;

-- -----------------------------------------------------
-- Table `filme`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `filme`.`categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `status` ENUM('A', 'I') NOT NULL DEFAULT 'A',
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `filme`.`filmes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `filme`.`filmes` (
  `idfilmes` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  `ator` VARCHAR(45) NOT NULL,
  `diretor` VARCHAR(45) NOT NULL,
  `imagem` VARCHAR(60) NOT NULL,
  `categoria_idcategoria` INT NOT NULL,
  PRIMARY KEY (`idfilmes`),
  INDEX `fk_filmes_categoria_idx` (`categoria_idcategoria` ASC),
  CONSTRAINT `fk_filmes_categoria`
    FOREIGN KEY (`categoria_idcategoria`)
    REFERENCES `filme`.`categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

