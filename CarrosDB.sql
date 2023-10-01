-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.25-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela carros_crud.carro
CREATE TABLE IF NOT EXISTS `carro` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `placa` varchar(7) DEFAULT NULL,
  `renavam` varchar(11) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `cor` int(1) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `ano_modelo` int(4) DEFAULT NULL,
  `ano_fabricacao` int(4) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela carros_crud.carro: ~5 rows (aproximadamente)
INSERT INTO `carro` (`codigo`, `placa`, `renavam`, `data_compra`, `marca`, `modelo`, `cor`, `tipo`, `ano_modelo`, `ano_fabricacao`) VALUES
	(2, 'JYD6365', '17083931133', '2000-07-27', 'Plymouth', 'Gran Voyager LE 2.5', 11, 'r', 1992, 1990),
	(4, 'KLG7603', '02718669815', '2017-02-15', 'EFFA', 'ULC VAN 1.0 8V 5p', 6, 'e', 2007, 2010),
	(5, 'AEQ8545', '60956515979', '2020-04-03', 'Kia Motors', 'SOUL 1.6/ 1.6 16V FLEX Mec.', 15, 'a', 2009, 2005),
	(6, 'HZM6749', '30845379862', '1999-09-09', 'Fiat', 'Uno CSL 1.6 4p (Argentino)', 4, 'a', 1991, 2001),
	(7, 'HQM2977', '38010191825', '2014-07-25', 'BMW', 'X1 XDRIVE 28i 3.0 24V 4x4 Aut.', 3, 'e', 2010, 2009);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
