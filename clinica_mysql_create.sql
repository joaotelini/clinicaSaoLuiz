CREATE TABLE `Paciente` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`nome` varchar(255) NOT NULL,
	`cpf` numeric NOT NULL UNIQUE,
	`email` TEXT(255) NOT NULL UNIQUE,
	`telefone` char NOT NULL,
	`rg` varchar(255) NOT NULL UNIQUE,
	`data_nascimento` varchar(255) NOT NULL,
	`logradouro` TEXT NOT NULL,
	`cidade` varchar(255) NOT NULL,
	`bairro` varchar(255) NOT NULL,
	`estado` varchar(2) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Especialista` (
	`id` int NOT NULL AUTO_INCREMENT UNIQUE,
	`nome` varchar(255) NOT NULL,
	`especialidade` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`conselho_regional` TEXT NOT NULL UNIQUE,
	`telefone` char NOT NULL UNIQUE,
	`cpf` numeric NOT NULL UNIQUE,
	`rg` varchar(255) NOT NULL UNIQUE,
	`logradouro` varchar(255) NOT NULL,
	`cidade` varchar(255) NOT NULL,
	`bairro` varchar(255) NOT NULL,
	`estado` varchar(2) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Servico` (
	`id` int NOT NULL AUTO_INCREMENT,
	`area` TEXT NOT NULL,
	`tipo_servico` TEXT NOT NULL,
	`duracao_media` TEXT NOT NULL,
	`preco` BOOLEAN NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Agendamento` (
	`id` int NOT NULL AUTO_INCREMENT,
	`id_paciente` int NOT NULL,
	`id_especialista` int NOT NULL,
	`id_servico` int NOT NULL,
	`data_consulta` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Servico` ADD CONSTRAINT `Servico_fk0` FOREIGN KEY (`area`) REFERENCES `Especialista`(`especialidade`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk0` FOREIGN KEY (`id_paciente`) REFERENCES `Paciente`(`id`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk1` FOREIGN KEY (`id_especialista`) REFERENCES `Especialista`(`id`);

ALTER TABLE `Agendamento` ADD CONSTRAINT `Agendamento_fk2` FOREIGN KEY (`id_servico`) REFERENCES `Servico`(`id`);

