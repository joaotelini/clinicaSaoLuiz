CREATE TABLE `Paciente` (
	`id_paciente` int(11) NOT NULL AUTO_INCREMENT,
	`nome_completo` varchar(255) NOT NULL,
	`rg` bigint(255) NOT NULL,
	`cpf` bigint(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`senha` varchar(255) NOT NULL,
	`telefone` int(11) NOT NULL,
	`data_nascimento` varchar(255) NOT NULL,
	`logradouro` varchar(255) NOT NULL,
	`numero` int(11) NOT NULL,
	`cep` int(11) NOT NULL,
	PRIMARY KEY (`id_paciente`)
);

CREATE TABLE `Especialista` (
	`id_especialista` int NOT NULL AUTO_INCREMENT,
	`nome_completo` varchar(255) NOT NULL,
	`conselho_regional` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`id_departamento` varchar(255) NOT NULL,
	`telefone` int(11) NOT NULL,
	`cpf` bigint(15) NOT NULL,
	PRIMARY KEY (`id_especialista`)
);

CREATE TABLE `Consulta` (
	`id_consulta` int(11) NOT NULL AUTO_INCREMENT,
	`id_serviço` int(11) NOT NULL,
	`hora_inicio` DATETIME NOT NULL,
	`hora_fim` DATETIME NOT NULL,
	`id_especialista` int(11) NOT NULL,
	`id_paciente` int NOT NULL,
	`data_consulta` DATETIME(6) NOT NULL,
	PRIMARY KEY (`id_consulta`)
);

CREATE TABLE `Departamento` (
	`id_departamento` int(11) NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`descricao` varchar(255) NOT NULL,
	PRIMARY KEY (`id_departamento`)
);

CREATE TABLE `Atendente` (
	`id_atendente` int(11) NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`cpf` bigint(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`senha` varchar(255) NOT NULL,
	PRIMARY KEY (`id_atendente`)
);

CREATE TABLE `Horario` (
	`id_horario` int NOT NULL AUTO_INCREMENT,
	`dia_semana` varchar(255) NOT NULL,
	`comeco_espediente` DATETIME NOT NULL,
	`fim_espediente` DATETIME NOT NULL,
	PRIMARY KEY (`id_horario`)
);

CREATE TABLE `Horario_especialista` (
	`id_especialista` int NOT NULL,
	`id_horario` int NOT NULL
);

CREATE TABLE `Servico` (
	`id_servico` int NOT NULL AUTO_INCREMENT,
	`id_departamento` int NOT NULL,
	`nome_servico` varchar(255) NOT NULL,
	`descricao` varchar(255) NOT NULL,
	`valor` double NOT NULL,
	`duracao` int(11) NOT NULL,
	PRIMARY KEY (`id_servico`)
);

ALTER TABLE `Especialista` ADD CONSTRAINT `Especialista_fk0` FOREIGN KEY (`id_departamento`) REFERENCES `Departamento`(`id_departamento`);

ALTER TABLE `Consulta` ADD CONSTRAINT `Consulta_fk0` FOREIGN KEY (`id_serviço`) REFERENCES `Servico`(`id_servico`);

ALTER TABLE `Consulta` ADD CONSTRAINT `Consulta_fk1` FOREIGN KEY (`id_especialista`) REFERENCES `Especialista`(`id_especialista`);

ALTER TABLE `Consulta` ADD CONSTRAINT `Consulta_fk2` FOREIGN KEY (`id_paciente`) REFERENCES `Paciente`(`id_paciente`);

ALTER TABLE `Horario_especialista` ADD CONSTRAINT `Horario_especialista_fk0` FOREIGN KEY (`id_especialista`) REFERENCES `Especialista`(`id_especialista`);

ALTER TABLE `Horario_especialista` ADD CONSTRAINT `Horario_especialista_fk1` FOREIGN KEY (`id_horario`) REFERENCES `Horario`(`id_horario`);

ALTER TABLE `Servico` ADD CONSTRAINT `Servico_fk0` FOREIGN KEY (`id_departamento`) REFERENCES `Departamento`(`id_departamento`);









