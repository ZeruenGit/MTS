-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Dez-2019 às 16:02
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm_user`
--

DROP TABLE IF EXISTS `adm_user`;
CREATE TABLE IF NOT EXISTS `adm_user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `adm_user`
--

TRUNCATE TABLE `adm_user`;
--
-- Extraindo dados da tabela `adm_user`
--

INSERT INTO `adm_user` (`idUser`, `user`, `pass`, `nome`) VALUES
(2, 'adm', 'adminmtspass', 'Matheus'),
(3, 'admin', '123', 'Administrador'),
(5, 'Guilherme', '123456', 'Guilherme');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agua`
--

DROP TABLE IF EXISTS `agua`;
CREATE TABLE IF NOT EXISTS `agua` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `agua`
--

TRUNCATE TABLE `agua`;
--
-- Extraindo dados da tabela `agua`
--

INSERT INTO `agua` (`cod`, `titulo`, `texto`) VALUES
(1, 'FaÃ§a a captaÃ§Ã£o, aproveite a Ã¡gua da chuva', 'Utilize a agua da chuva para a lavagem de quintais, ajudando tambÃ©m o meio ambiente e sua fatura no final do mÃªs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo`
--

DROP TABLE IF EXISTS `consumo`;
CREATE TABLE IF NOT EXISTS `consumo` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `consumo`
--

TRUNCATE TABLE `consumo`;
--
-- Extraindo dados da tabela `consumo`
--

INSERT INTO `consumo` (`cod`, `titulo`, `texto`) VALUES
(1, 'Diminua o uso de descartÃ¡veis:', 'Diminua o uso de descartÃ¡veis:\r\nProcure utilizar refis ao invÃ©s de embalagens descartÃ¡veis, evite tambÃ©m o uso excessivo de embrulho em produtos.\r\n\r\nConsuma apenas o necessÃ¡rio: Ã© possÃ­vel viver com menos. Reflita sobre suas necessidades reais.\r\nAvalie os impactos do que consome, ao comprar, leve em conta danos que a fabricaÃ§Ã£o e o uso do produto causam ao meio ambiente e Ã  sociedade.\r\nReutilize produtos e embalagens, se vocÃª pode consertar, transformar e reutilizar, por quer comprar outra vez?\r\nValorize a responsabilidade social das empresas, o valor de um produto vai alÃ©m de seu preÃ§o e sua qualidade. Ele pode incluir a responsabilidade do fabricante com funcionÃ¡rios, sociedade e meio ambiente.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `energia`
--

DROP TABLE IF EXISTS `energia`;
CREATE TABLE IF NOT EXISTS `energia` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `energia`
--

TRUNCATE TABLE `energia`;
--
-- Extraindo dados da tabela `energia`
--

INSERT INTO `energia` (`cod`, `titulo`, `texto`) VALUES
(1, 'Energia solar Ã© muito mais econÃ´mica:', 'Energia solar Ã© muito mais econÃ´mica:\r\n\r\nReduza custos, utilizando sistemas de aquecimento solar para chuveiros e torneiras de Ã¡gua quente. Um aquecedor solar gasta R$ 0,0035, enquanto um aquecedor de gÃ¡s R$ 0,64, e um chuveiro elÃ©trico R$ 0,89.'),
(2, 'Dicas para economizar ENERGIA ELÃ‰TRICA:', 'Utilize lÃ¢mpadas de LED\r\n\r\nAs lÃ¢mpadas de LED Ã© uma excelente soluÃ§Ã£o para economizar, reduz em mÃ©dia 80% do consumo, jÃ¡ que utilizam pouca energia.\r\n\r\nAproveite a LUZ NATURAL\r\n\r\nDurante o dia, deixe as janelas e cortinas abertas e utilize as lÃ¢mpadas apenas e utilize as lÃ¢mpadas apenas se forem extremamente necessÃ¡rias. AlÃ©m disso, janelas abertas de dia arejam mais os cÃ´modos, reduzindo a necessidade do ar-condicionado.\r\nRetire os equipamentos da tomada\r\n\r\nOs aparelhos que tem o modo stand-by podem ser responsÃ¡veis por 12% da sua conta, jÃ¡ que consomem, mesmo estando desligados.\r\n\r\nOtimize o funcionamento dos seus eletrodomÃ©sticos\r\n\r\nMantenha todos os seus eletrodomÃ©sticos em boas condiÃ§Ãµes de uso, pois aparelhos em curto ou com algum problema podem gastar mais energia.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `dat` date NOT NULL,
  `autor` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_noticia_autor` (`autor`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `noticias`
--

TRUNCATE TABLE `noticias`;
--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`codigo`, `titulo`, `dat`, `autor`, `texto`) VALUES
(3, 'Noticia de testes', '2019-11-15', 'null', 'Testando o envio de noticias para a pagina'),
(4, 'Lorem Ipsum', '2019-11-15', 'null', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at orci cursus, rhoncus libero efficitur, bibendum dui. Nam ex est, tincidunt mattis leo at, laoreet consequat ligula. Vestibulum lorem ligula, suscipit quis felis eu, finibus consequat nulla. Etiam a tortor ut nunc congue lobortis. Praesent vitae mauris aliquet, dapibus dui eu, consectetur orci. Morbi sit amet luctus purus. Maecenas tempus finibus vestibulum. Duis dignissim condimentum quam id hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et justo hendrerit, dapibus justo at, fringilla massa. Nam lacus massa, pulvinar id risus vel, vestibulum volutpat nunc. Suspendisse et urna sem. Etiam quis ex et tellus consectetur pellentesque. In quis tincidunt tortor. Ut tempor nisi eget velit ullamcorper, eget pharetra risus accumsan. Duis vitae mattis dui, sed lacinia velit.\r\n\r\n'),
(5, 'Lorem Ipsum', '2019-11-15', 'null', 'Proin at nisl lectus. Aenean ac ipsum ante. Duis sit amet felis vel urna placerat mattis. Ut hendrerit, felis eget euismod molestie, diam dui aliquam sem, eget suscipit neque ex sit amet tortor. Vivamus ac sem bibendum, ultrices diam non, commodo urna. Nullam lobortis risus enim, sed elementum lorem sollicitudin at. Integer diam mauris, feugiat id mauris ut, sollicitudin dapibus felis. Aliquam vulputate velit ut arcu rhoncus posuere. Integer placerat et quam ac porttitor.\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reciclagem`
--

DROP TABLE IF EXISTS `reciclagem`;
CREATE TABLE IF NOT EXISTS `reciclagem` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `reciclagem`
--

TRUNCATE TABLE `reciclagem`;
--
-- Extraindo dados da tabela `reciclagem`
--

INSERT INTO `reciclagem` (`cod`, `titulo`, `texto`) VALUES
(1, 'Dicas de Reciclagem:', 'Devemos separar em casa trÃªs tipos de resÃ­duos: lixo orgÃ¢nico, lixo material nÃ£o reciclÃ¡vel e lixo material reciclÃ¡vel.\r\nLixo reciclÃ¡vel: limpe os reciclÃ¡veis antes de jogar no seu devido lugar, potes e embalagens sujas podem gerar odores desagradÃ¡veis, pode atrair insetos, ratos e outros animais.\r\nDevem ser entregues em locais apropriados: Equipamentos eletrÃ´nicos, pilhas, baterias de celular e lÃ¢mpadas, alguns estabelecimentos comerciais recolhem estes produtos que serÃ£o encaminhados Ã  empresas que fazem o descarte de forma apropriada, sem prejudicar o meio ambiente.\r\nMateriais que vocÃª pode separar na coleta seletiva e encaminhar para a reciclagem: potes, garrafas e embalagens de plÃ¡stico e vidro, papel sulfite, jornais, papelÃ£o, revistas, embalagens de metal, materiais de ferro, garrafas PET, sacos plÃ¡sticos, canos de plÃ¡stico ou metal, tecidos, couro, fios elÃ©tricos, pregos e parafusos.\r\nMateriais nÃ£o reciclÃ¡veis: papel carbono, papel celofane, etiquetas adesivas, fitas adesivas, fotografias, latas de tinta e verniz, esponjas de aÃ§o, embalagens metalizadas, espumas, cabo de panela, esponjas de limpeza, embalagens de produtos tÃ³xicos, vidros temperados, espelhos, porcelana, cerÃ¢mica, vidros refratÃ¡rios, cristais e isopor.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `usuario`
--

TRUNCATE TABLE `usuario`;
--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `nome`) VALUES
('piyor16614@iwebtm.com', 'Matheus Rodrigues Aguilar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
