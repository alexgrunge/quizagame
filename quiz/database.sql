/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ quiz /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE quiz;

DROP TABLE IF EXISTS preguntas;
CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(255) NOT NULL,
  `respuestaverdadera` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `respuestaverdadera` (`respuestaverdadera`),
  KEY `pregunta` (`pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS resultados;
CREATE TABLE `resultados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jugador` varchar(255) NOT NULL,
  `pregunta1` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `respuestausuario1` varchar(255) NOT NULL,
  `pregunta2` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `respuestausuario2` varchar(255) NOT NULL,
  `pregunta3` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `respuestausuario3` varchar(255) NOT NULL,
  `pregunta4` varchar(255) NOT NULL,
  `respuesta4` varchar(255) NOT NULL,
  `respuestausuario4` varchar(255) NOT NULL,
  `pregunta5` varchar(255) NOT NULL,
  `respuesta5` varchar(255) NOT NULL,
  `respuestausuario5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8mb4;