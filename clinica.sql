-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2021 às 02:11
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
  `data_cusulta` date NOT NULL,
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
(11, 'Cardiologia', 'cuida do meu amor por você'),
(12, 'Ortopedia', 'Cuida do pé na bunda que você me deu'),
(13, 'Ginecologista', 'precisa de descrição?'),
(14, 'Pediatria', 'cuida das criaça'),
(15, 'Otorrinolaringologista', 'acho que cuida do ouvido'),
(16, 'Odontologia', 'cuida desse seu sorriso lindo\r\n');

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
  `telefone` int(11) NOT NULL,
  `cpf` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialista`
--

INSERT INTO `especialista` (`id_especialista`, `nome_completo`, `conselho_regional`, `email`, `id_departamento`, `telefone`, `cpf`) VALUES
(27, 'Juliana Cristina', '12341243', 'julia', 14, 2147483647, 37591162055),
(28, 'Maria Eduarda de Carvalho', '0917234098', 'mariaed@gmail.com', 11, 1977448394, 13959218060),
(29, 'João Pedro Domingues Telini', '12349087', 'joaodomingues@gmail.com', 15, 2147483647, 73965591037),
(30, 'Pedro de Oliveira', '12341234', 'joao@gmail.com', 11, 2147483647, 84070630023),
(31, 'Lucas Martins ', '1234234', 'joao@gmail.com', 12, 2147483647, 74159626050),
(32, 'Carolina Machado Pinto', '1234234', 'joao@gmail.com', 14, 2147483647, 74159626050),
(33, 'Jair Messias Bolsonaro', '1234234', 'souzzaleitte@gmail.com', 12, 0, 13959218060),
(34, 'Luis Inacio Lula da Silva', '12341234', 'joao@gmail.com', 14, 2147483647, 74159626050),
(35, 'Padre Fabio de Melo', '324123412', 'joasdfasfdao@gmail.com', 13, 0, 74159626050),
(36, 'Gabriel de Oliveira Pinto', '1234234', 'souzzaleitte@gmail.com', 14, 2147483647, 74159626050),
(37, 'Pedrinho do get', '45234244', 'joasdfasfdao@gmail.com', 12, 0, 73965591037),
(38, 'Luccinha da Boca', '1234234', 'joao@gmail.com', 13, 2147483647, 74159626050),
(39, 'Rafaela Zamarim', '1234124', 'rafa@gmail.com', 16, 2147483647, 84070630023),
(40, 'Maria', '12341234', 'joao@gmail.com', 11, 0, 84070630023);

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
(54, 'joao pedro', 948339278, 74159626050, 'joasdfasfdao@gmail.com', '3a12d3cec7682462c057a5a6bd342137', 2147483647, '2021-08-11', 'R. carlinhos maia', 420, 1234123),
(55, 'Maria', 35564, 74159626050, 'joao@gmail.com', 'd553456d37de5308559af174396d34dc', 2147483647, '2021-10-05', 'R. Arrombado', 69, 77813250),
(56, 'Carlos Calinhos Carlão', 1234543425, 73965591037, 'joasdfasfdao@gmail.com', 'ae5aea606774cede67f41c7ed7a61f0e', 2147483647, '2021-10-04', 'R. ABC', 123, 77813250),
(57, 'Pedrinho de Oliveira', 12341234, 73965591037, 'joao@gmail.com', 'a9d035b4d49680817e23885817c96bc9', 0, '2021-10-13', 'R. dos Arrombadinhos', 420, 77813250),
(58, 'Maria Zelia da Silva', 1234987, 73965591037, 'mariazelis@gmail.com', 'c0309be2ca245c9d090ad3a46fe592c4', 2147483647, '2021-10-13', 'R. Padre Ferraz', 420, 77813250);

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
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `id_departamento`, `nome_servico`, `descricao`, `valor`, `duracao`) VALUES
(2, 5, 'Geral', 'consulta geral', 50, 20),
(3, 14, 'Consulta Geral', 'consulta geral', 50, 15),
(4, 16, 'Manutenção do aparelho', 'manutenção...', 100, 15),
(5, 16, 'limpeza geral', 'limpeza geral na boca, lingua e dentes', 75, 20),
(6, 16, 'Reparo dental', 'repado dental', 150, 45);

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
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
