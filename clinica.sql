-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Nov-2021 às 14:07
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

DROP TABLE IF EXISTS `atendente`;
CREATE TABLE IF NOT EXISTS `atendente` (
  `id_atendente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id_atendente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE IF NOT EXISTS `consulta` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data_consulta` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  PRIMARY KEY (`id_consulta`),
  KEY `id_departamento` (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `id_departamento`, `id_servico`, `id_especialista`, `id_paciente`, `data_consulta`, `hora_inicio`, `hora_fim`) VALUES
(37, 72, 17, 75, 64, '2021-11-15', '11:00:00', '12:00:00'),
(38, 72, 14, 75, 64, '2021-11-15', '12:00:00', '12:20:00'),
(39, 72, 14, 75, 64, '2021-11-15', '15:20:00', '15:40:00'),
(40, 72, 17, 75, 64, '2021-11-15', '16:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nome`, `descricao`) VALUES
(71, 'Pediatria', 'Cuida de Criança'),
(72, 'Odontologia', 'cuida dos dentes'),
(73, 'Cardiologia', 'Cuida do meu coração');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialista`
--

DROP TABLE IF EXISTS `especialista`;
CREATE TABLE IF NOT EXISTS `especialista` (
  `id_especialista` int(11) NOT NULL AUTO_INCREMENT,
  `nome_especialista` varchar(255) DEFAULT NULL,
  `conselho_regional` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `cpf` bigint(15) NOT NULL,
  PRIMARY KEY (`id_especialista`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `nome_especialista`, `conselho_regional`, `email`, `id_departamento`, `telefone`, `cpf`) VALUES
(72, 'Maria Oliveira', '532498576', 'mariaoliveira@gmail.com', 73, 1999966385673, 96155250065),
(73, 'João Pedro Domigues Telini', '4563464356', 'joaopedrodomingues@gmail.com', 72, 19996637485, 4179644045),
(74, 'Pamela de Carvalho', '439876345', 'pamela@gmail.com', 71, 1999467736, 35398602071),
(75, 'Juliana Soares', '4356435643', 'juliana@gmail.com', 72, 1993647485, 3192088001);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `id_horario` int(11) NOT NULL AUTO_INCREMENT,
  `id_especialista` int(11) NOT NULL,
  `dia_semana` int(11) NOT NULL,
  `comeco_espediente` time NOT NULL,
  `fim_espediente` time NOT NULL,
  PRIMARY KEY (`id_horario`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id_horario`, `id_especialista`, `dia_semana`, `comeco_espediente`, `fim_espediente`) VALUES
(41, 75, 1, '09:00:00', '19:00:00'),
(42, 75, 2, '08:00:00', '18:00:00'),
(43, 75, 3, '08:00:00', '18:00:00'),
(44, 73, 1, '08:00:00', '18:00:00'),
(45, 73, 2, '08:00:00', '18:00:00'),
(46, 73, 3, '08:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_especialista`
--

DROP TABLE IF EXISTS `horario_especialista`;
CREATE TABLE IF NOT EXISTS `horario_especialista` (
  `id_especialista` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_paciente` varchar(255) NOT NULL,
  `rg` bigint(255) NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` int(11) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `rg`, `cpf`, `email`, `senha`, `telefone`, `data_nascimento`, `logradouro`, `numero`, `cep`) VALUES
(59, 'João Pedro da Silva Rocha', 838229477, 55535634026, 'joaopedro@gmail.com', 'b24700ad51957db6e2f6d91ddc6e8909', 2147483647, '2000-05-16', 'R. Carolina de Oliveto', 69, 58433121),
(60, 'Mariana Cecilia', 8493374883, 81772169021, 'marianacecilia@gmail.com', 'c13a9aac28d6309141f062aa7aa85f97', 2147483647, '1996-06-11', 'R. dos Andradas', 420, 64000290),
(61, 'Luccas Oliveira', 8473374883, 17809741080, 'lucas@gmail.com', '9e72de5c5956aff8941855feb09ff5b9', 1996657384, '2002-07-11', 'R. Francisco Glicério', 666, 77813250),
(62, 'Juliana Cristina', 839228399, 1590729056, 'juliana@gmail.com', '2b45b7a98fd172bda605cd2cc9597c90', 2147483647, '1993-11-11', 'R. Mariana Peixoto', 37, 12342134),
(63, 'joao pedro', 1234, 74159626050, 'joao@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 0, '2021-11-24', '1234', 69, 1234123),
(64, 'Maria', 35564, 74159626050, 'jobastico2@wr', '32d0b4481908a13480ad7eca300b2655', 1999368333, '2021-11-28', '42213', 1234, 1234123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `id_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `nome_servico` varchar(255) NOT NULL,
  `descricao_servico` varchar(500) NOT NULL,
  `valor` double NOT NULL,
  `duracao` int(11) NOT NULL,
  PRIMARY KEY (`id_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `id_departamento`, `nome_servico`, `descricao_servico`, `valor`, `duracao`) VALUES
(14, 72, 'Manutenção no aparelho', 'manutenção no aparelho', 100, 20),
(15, 72, 'Reparo dental', 'reparo dental', 150, 45),
(16, 72, 'limpeza dental', 'limpeza dental', 75, 30),
(17, 72, 'servico de 1h', 'serviço com duração de 1h', 149, 60);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
