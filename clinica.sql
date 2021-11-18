-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2021 às 23:21
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
  `hora_fim` time NOT NULL,
  `status_consulta` varchar(100) NOT NULL DEFAULT 'Pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `id_departamento`, `id_servico`, `id_especialista`, `id_paciente`, `data_consulta`, `hora_inicio`, `hora_fim`, `status_consulta`) VALUES
(37, 72, 17, 75, 64, '2021-11-15', '11:00:00', '12:00:00', 'Realizada'),
(38, 72, 14, 75, 64, '2021-11-15', '12:00:00', '12:20:00', 'Pendente'),
(39, 72, 14, 75, 64, '2021-11-15', '15:20:00', '15:40:00', 'Pendente'),
(40, 72, 17, 75, 64, '2021-11-15', '16:00:00', '17:00:00', 'Pendente'),
(41, 72, 16, 73, 60, '2021-11-30', '09:00:00', '09:30:00', 'Em Atendimento'),
(42, 72, 16, 75, 60, '2021-11-30', '11:30:00', '12:00:00', 'Pendente'),
(43, 72, 17, 75, 60, '2021-11-29', '10:00:00', '11:00:00', 'Pendente'),
(44, 72, 14, 75, 60, '2021-11-29', '11:20:00', '11:40:00', 'Pendente'),
(45, 72, 15, 75, 60, '2021-11-29', '12:45:00', '13:30:00', 'Pendente'),
(46, 73, 18, 72, 60, '2021-11-29', '08:30:00', '08:45:00', 'Pendente'),
(47, 73, 18, 72, 60, '2021-11-29', '09:00:00', '09:15:00', 'Pendente'),
(48, 72, 16, 73, 64, '2021-11-14', '16:00:00', '16:30:00', 'Pendente'),
(49, 72, 16, 73, 64, '2021-11-14', '12:00:00', '12:30:00', 'Pendente'),
(50, 72, 17, 73, 62, '2021-11-14', '17:00:00', '18:00:00', 'Pendente');

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
  `nome_especialista` varchar(255) DEFAULT NULL,
  `conselho_regional` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `cpf` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `id_especialista` int(11) NOT NULL,
  `dia_semana` int(11) NOT NULL,
  `comeco_espediente` time NOT NULL,
  `fim_espediente` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id_horario`, `id_especialista`, `dia_semana`, `comeco_espediente`, `fim_espediente`) VALUES
(41, 75, 1, '09:00:00', '19:00:00'),
(42, 75, 2, '08:00:00', '18:00:00'),
(43, 75, 3, '08:00:00', '18:00:00'),
(44, 73, 1, '08:00:00', '18:00:00'),
(45, 73, 2, '08:00:00', '18:00:00'),
(46, 73, 3, '08:00:00', '18:00:00'),
(47, 72, 1, '08:00:00', '18:00:00'),
(48, 73, 7, '08:00:00', '18:00:00');

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
  `sexo_paciente` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `rg`, `cpf`, `email`, `senha`, `telefone`, `data_nascimento`, `logradouro`, `numero`, `cep`, `sexo_paciente`) VALUES
(66, 'João Pedro da Silva Rocha', 35564, 74159626050, 'joaopedrodasilva@gmail.com', 'bd688872ef28a394da2235f2d3d24512', 19995569283, '2021-11-08', 'R. Maria Pereira da silva', 69, 77813250, 'M'),
(67, 'joao pedro', 948339278, 98573533048, 'joasdfasfdao@gmail.com', '27bf375df4b06adaa6ae2864632c96a9', 19995569283, '2021-11-22', 'R. carlinhos maia', 69, 12342134, 'M'),
(68, 'Maria Luiza', 148001701, 42927268096, 'marialuiza@gmail.com', 'eeab41d760814ea20ff5834c10271589', 19995569283, '1999-02-09', 'R. Padre Ferraz', 420, 77813250, 'F'),
(69, 'Pedro de Oliveira', 372912023, 73571046056, 'pedro@gmail.com', '484de90d1b78af8f3eb2efdff3f84d66', 199996688763, '2004-10-20', 'R. Padre Amorim', 737, 77813250, 'M'),
(70, 'joao pedro', 35564, 95564341007, 'souzzaleitte@gmail.com', '42a87fb988bd92077efc9da585d5b150', 19995569283, '2021-11-01', 'R. Pedrinho Machado', 69, 12342134, 'M'),
(71, 'joao pedro', 35564, 82233240081, 'joasdfasfdao@gmail.com', '2436ebd21173bf073a2a8558f95450b9', 19995569283, '2018-02-13', 'R das Magnólias', 420, 12342134, 'F');

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
(14, 72, 'Manutenção no aparelho', 'manutenção no aparelho', 100, 20),
(15, 72, 'Reparo dental', 'reparo dental', 150, 45),
(16, 72, 'limpeza dental', 'limpeza dental', 75, 30),
(17, 72, 'servico de 1h', 'serviço com duração de 1h', 149, 60),
(18, 73, 'exame de rotina', 'exame de rotina ', 50, 15);

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
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
