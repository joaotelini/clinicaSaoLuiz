-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Set-2021 às 03:19
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
  `id_serviço` int(11) NOT NULL,
  `hora_inicio` datetime NOT NULL,
  `hora_fim` datetime NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `data_consulta` datetime(6) NOT NULL
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
(5, 'Pediatria', 'Cuida de criança'),
(6, 'Ortopedi', 'cuida do pé'),
(7, 'Cardiologia', 'cuida do meu amor por você'),
(8, 'Otorrinolaringologista', 'Acho que cuida do ouvido, só acho, não tenho certeza'),
(9, 'asdfasdf', 'asdfasdf'),
(10, 'Patologia', 'Estudo dos patogenos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialista`
--

CREATE TABLE `especialista` (
  `id_especialista` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `conselho_regional` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_departamento` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `cpf` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `nome_completo`, `conselho_regional`, `email`, `id_departamento`, `telefone`, `cpf`) VALUES
(14, 'joao pedro', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(15, 'joao pedro', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(16, 'Maria', '1234234', 'joao@gmail.com', '2', 2147483647, 84070630023),
(17, 'Maria', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(18, 'Maria', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(19, 'Maria', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(20, 'Maria', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 84070630023),
(21, 'Julia', '120948', 'joao@gmail.com', '2', 2147483647, 84070630023),
(22, 'Lucas', '234234', 'joasdfasfdao@gmail.com', '2', 2147483647, 74159626050),
(23, 'joao pedro', '234234', 'joasdfasfdao@gmail.com', '1', 2147483647, 84070630023);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `dia_semana` varchar(15) NOT NULL,
  `comeco_espediente` time NOT NULL,
  `fim_espediente` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id_horario`, `id_especialista`, `dia_semana`, `comeco_espediente`, `fim_espediente`) VALUES
(7, 15, 'Segunda-Feira', '08:30:00', '18:30:00'),
(8, 15, 'Segunda-Feira', '08:30:00', '18:30:00'),
(9, 17, 'Segunda-Feira', '23:19:00', '00:20:00');

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
  `telefone` int(11) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_completo`, `rg`, `cpf`, `email`, `senha`, `telefone`, `data_nascimento`, `logradouro`, `numero`, `cep`) VALUES
(54, 'joao pedro', 948339278, 74159626050, 'joasdfasfdao@gmail.com', '3a12d3cec7682462c057a5a6bd342137', 2147483647, '2021-08-11', 'R. carlinhos maia', 420, 1234123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `nome_servico` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `duracao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`id_consulta`);

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
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
