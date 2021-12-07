-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2021 às 18:50
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
  `status_consulta` varchar(255) NOT NULL DEFAULT 'Espera'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `id_departamento`, `id_servico`, `id_especialista`, `id_paciente`, `data_consulta`, `hora_inicio`, `hora_fim`, `status_consulta`) VALUES
(52, 75, 21, 78, 73, '2021-12-27', '12:00:00', '12:45:00', 'Espera'),
(53, 75, 20, 76, 74, '2021-12-08', '08:00:00', '09:00:00', 'Espera'),
(54, 76, 23, 79, 75, '2021-12-08', '08:20:00', '08:40:00', 'Espera'),
(55, 77, 24, 86, 76, '2021-12-08', '09:00:00', '09:20:00', 'Espera'),
(56, 75, 20, 76, 77, '2021-12-08', '09:00:00', '10:00:00', 'Espera'),
(57, 76, 23, 79, 78, '2021-12-08', '10:40:00', '11:00:00', 'Espera'),
(58, 77, 24, 86, 79, '2021-12-08', '10:00:00', '10:20:00', 'Espera'),
(59, 75, 20, 76, 80, '2021-12-08', '10:00:00', '11:00:00', 'Espera'),
(60, 75, 19, 76, 80, '2021-12-08', '11:00:00', '11:45:00', 'Espera'),
(61, 77, 24, 86, 81, '2021-12-08', '13:20:00', '13:40:00', 'Espera'),
(62, 78, 22, 82, 82, '2021-12-08', '09:15:00', '09:30:00', 'Espera'),
(63, 75, 21, 77, 82, '2021-12-07', '08:15:00', '09:00:00', 'Realizada');

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
(75, 'Odontologia', 'O profissional formado em Odontologia é responsável pela saúde bucal das pessoas. Ele atua na prevenção, diagnóstico e tratamento de problemas relacionados à mordida, gengiva e dentes. O dentista realiza tratamentos estéticos e também intervenções relacio'),
(76, 'Cardiologia', 'A cardiologia em si é definida como um ramo da medicina responsável por estudar, cuidar e tratar o coração e os vasos sanguíneos. Ou seja, é uma das especialidades da medicina que cuida do coração e do sistema circulatório. A cardiologia é principalmente '),
(77, 'Ortopedia', 'A ortopedia ou traumato-ortopedia é a especialidade médica encarregada de tratar lesões, traumas e algumas deformidades que refletem no aparelho locomotor de um indivíduo, como tendões, ossos, ligamentos e articulações. Esta área também está relacionada à'),
(78, 'Dermatologia', 'A Dermatologia é uma especialidade médica cuja área de conhecimento se concentra no diagnóstico, prevenção e tratamento de doenças e afecções relacionadas à pele, pelos, mucosas, cabelo e unhas. É também especialidade indicada para atuação em procedimento');

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
(76, 'Lucas de Oliveira', '837281', 'lucasoliveira@gmail.com', 75, 19999999999, 43236035099),
(77, 'Mariana Vitória Gonsalves ', '547543', 'marianavitoria@gmail.com', 75, 19993377583, 93096723079),
(78, 'Paula da Silva Gomes', '543466', 'paulasilva@gmail.com', 75, 19994489384, 56609681040),
(79, 'Juliano Machado Souza', '883392', 'julianomachado@gmail.com', 76, 1999887777, 94757855079),
(80, 'Paola Oliveira', '367883', 'paolaoliveira@gmail.com', 76, 19993388494, 91003994008),
(81, 'Renato Castilho da Silva', '837483', 'renatocastinho@gmail.com', 76, 19995568899, 8689933018),
(82, 'Juliana Adriano', '878392', 'julianaadriano@gmail.com', 78, 19997788374, 65093220051),
(83, 'José Carlos da Silva', '788374', 'josecarlos@gmail.com', 78, 19995568899, 61360067078),
(84, 'Paulo Carvalho de Andrada', '739483', 'paulocarvalhodeandrada@gmail.com', 78, 19989473848, 15697272014),
(85, 'Matheus de Oliveira', '839283', 'matheusdeoliveira@gmail.com', 77, 1989447847, 96036662033),
(86, 'Pedro Henrique Pereira', '839983', 'pedrohenrique@gmail.com', 77, 19973857382, 44440236006);

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
(49, 76, 1, '08:00:00', '18:00:00'),
(50, 76, 3, '08:00:00', '18:00:00'),
(51, 76, 5, '08:00:00', '18:00:00'),
(52, 77, 2, '06:00:00', '16:00:00'),
(53, 77, 4, '08:00:00', '18:00:00'),
(54, 77, 6, '09:00:00', '20:00:00'),
(55, 78, 1, '09:00:00', '18:00:00'),
(56, 78, 4, '08:00:00', '18:00:00'),
(57, 78, 7, '08:00:00', '18:00:00'),
(58, 79, 1, '08:00:00', '18:00:00'),
(59, 79, 3, '08:00:00', '18:00:00'),
(60, 79, 6, '08:00:00', '18:00:00'),
(61, 80, 2, '08:00:00', '18:00:00'),
(62, 80, 4, '08:00:00', '18:00:00'),
(63, 80, 5, '08:00:00', '18:00:00'),
(64, 81, 1, '08:00:00', '18:00:00'),
(65, 81, 7, '08:00:00', '18:00:00'),
(66, 81, 3, '08:00:00', '18:00:00'),
(67, 82, 1, '08:00:00', '18:00:00'),
(68, 82, 4, '08:00:00', '18:00:00'),
(69, 82, 7, '08:00:00', '18:00:00'),
(70, 82, 5, '08:00:00', '18:00:00'),
(71, 83, 2, '08:00:00', '18:00:00'),
(72, 83, 4, '08:00:00', '18:00:00'),
(73, 83, 1, '08:00:00', '18:00:00'),
(74, 83, 7, '08:00:00', '18:00:00'),
(75, 84, 1, '08:00:00', '18:00:00'),
(76, 84, 4, '08:00:00', '18:00:00'),
(77, 84, 6, '08:00:00', '18:00:00'),
(78, 85, 7, '08:00:00', '18:00:00'),
(79, 85, 5, '08:00:00', '18:00:00'),
(80, 85, 6, '08:00:00', '18:00:00'),
(82, 85, 2, '08:00:00', '18:00:00'),
(83, 86, 1, '08:00:00', '18:00:00'),
(84, 86, 2, '08:00:00', '18:00:00'),
(85, 86, 3, '08:00:00', '18:00:00'),
(86, 86, 5, '08:00:00', '18:00:00'),
(87, 86, 7, '08:00:00', '18:00:00'),
(88, 82, 3, '08:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `id_paciente` int(11) NOT NULL,
  `nome_paciente` varchar(255) NOT NULL,
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

INSERT INTO `paciente` (`id_paciente`, `nome_paciente`, `cpf`, `email`, `senha`, `telefone`, `data_nascimento`, `logradouro`, `numero`, `cep`, `sexo_paciente`) VALUES
(73, 'João Pedro da Silva Rocha', 97868886005, 'joaopedro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19995568295, '1997-07-14', 'R. dos Andradas', 420, 77813250, 'M'),
(74, 'Maria Luiza da Silva', 94501298006, 'marialuiza@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19997384736, '1999-07-12', 'R. Carolina de Oliveira', 69, 1234123, 'M'),
(75, 'Juliana Cristina', 29393958025, 'juliana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19883392839, '1990-07-09', 'R. ABC', 83, 77813250, 'F'),
(76, 'Luca Bettini', 68092745021, 'lucasbetini@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19989745674, '2012-03-20', 'R. carlinhos maia', 231, 77813250, 'M'),
(77, 'Paola Caroline da Silva', 72875141090, 'paola@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19989743848, '1999-08-16', 'R. pedro piva', 47, 1234123, 'F'),
(78, 'Tales de Oliveira', 59481616096, 'tales@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19997783982, '1997-07-23', 'R def', 45, 12342134, 'M'),
(79, 'Bruno Marcelo da Silva', 71841917060, 'burno@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19997485746, '2008-06-25', 'R. carlinhos maia', 69, 1234123, 'M'),
(80, 'Poliana Camargo', 11867678047, 'poliana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19998746374, '1999-10-12', 'R. carlinhos maia', 123, 12342134, 'M'),
(81, 'David Castilho Pereira', 93201934011, 'david@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19995578839, '1999-07-07', 'R das Tupipas', 32, 1234123, 'M'),
(82, 'Felipe Rodrigues da Silva', 41756203032, 'felipe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 19995578893, '2000-08-08', 'R. das hortencias', 1234, 1234123, 'M');

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
(19, 75, 'limpeza geral', 'limpeza geral na boca e dentes', 100, 45),
(20, 75, 'reparo dental', 'reparo dental', 150, 60),
(21, 75, 'Clareamento ', 'clareamento dental', 100, 45),
(22, 78, 'exame ', 'exame ', 25, 15),
(23, 76, 'exame geral', 'exame de rotina', 50, 20),
(24, 77, 'exame geral', 'exame geral', 50, 20);

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
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de tabela `especialista`
--
ALTER TABLE `especialista`
  MODIFY `id_especialista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
