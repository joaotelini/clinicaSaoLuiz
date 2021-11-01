-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2021 às 17:06
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

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

CREATE TABLE `atendente` (
  `id_atendente` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data_consulta` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `especialista` (
  `id_especialista` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `conselho_regional` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `cpf` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `nome_completo`, `conselho_regional`, `email`, `id_departamento`, `telefone`, `cpf`) VALUES
(65, 'Maria', '34212341243', 'jobastico0987@gmail.com', 73, 1234, 74159626050),
(66, 'Lucas', '2341234', 'joasdfasfdao@gmail.com', 73, 2147483647, 74159626050),
(67, 'joao pedro', '1234523523', 'joao@gmail.com', 73, 32141234, 84070630023),
(68, 'Maria', '5676432', 'joasdfasfdao@gmail.com', 73, 98765432, 74159626050),
(69, 'lkjhgfds', '0987654', 'joao@gmail.com', 73, 2147483647, 84070630023),
(70, 'joao pedro', '563234546', 'joasdfasfdao@gmail.com', 73, 2147483647, 84070630023),
(71, 'joao pedro', '456324', 'joasdfasfdao@gmail.com', 73, 19999999999, 74159626050);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `dia_semana` int(11) NOT NULL,
  `comeco_espediente` time NOT NULL,
  `fim_espediente` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario_especialista`
--

CREATE TABLE `horario_especialista` (
  `id_especialista` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `rg` bigint(255) NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_completo`, `rg`, `cpf`, `email`, `senha`, `telefone`, `data_nascimento`, `logradouro`, `numero`, `cep`) VALUES
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

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `nome_servico` varchar(255) NOT NULL,
  `descricao_servico` varchar(500) NOT NULL,
  `valor` double NOT NULL,
  `duracao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `id_departamento`, `nome_servico`, `descricao_servico`, `valor`, `duracao`) VALUES
(9, 73, 'Isame de rotina', 'um isame feito na rotina', 25, 15),
(12, 71, 'Manutenção do aparelho', 'manutenção mensal no aparelho dental', 100, 25);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`id_atendente`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Índices para tabela `especialista`
--
ALTER TABLE `especialista`
  ADD PRIMARY KEY (`id_especialista`);

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendente`
--
ALTER TABLE `atendente`
  MODIFY `id_atendente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
