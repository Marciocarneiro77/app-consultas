# APP-CONSULTAS
Aplicativo web para controlar a agenda de um consultório médico.

### CADASTROD DE MÉDICOS
* Inclusão
* Alteração
* Exclusão
* Listagem de todos os médicos
* Filtro por área do médico

### CADASTRO DE PACIENTES
* Inclusão
* Alteração
* Exclusão
* Listagem de todos os pacientes
* Opção de pesquisar o paciente por qualquer parte do nome.

### CADASTRO DE AGENDAS
* Agendamento de paciente
* Alteração em uma agendamento
* Exclusão de um agendamento
* Listagem de todos os agendamentos

### TECNOLOGIAS USADAS:

* Apache (XAMPP)
* PHP- MariaDB
* HTML
* CSS
* Javascript
* jQuery
* Bootstrap

### SQL - BANCO DE DADOS:

# Criação do banco de dados
* CREATE DATABASE BD_CONSULTORIO CHARACTER SET utf8 COLLATE utf8_general_ci;

# Criação da tabela médicos
CREATE TABLE `bd_consultorio`.`tb_medicos` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `crm` VARCHAR(50) NOT NULL ,  
    `especialidade` VARCHAR(50) NOT NULL ,    
    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;

# Criação da tabela de pacientes
CREATE TABLE `bd_consultorio`.`tb_pacientes` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nome` VARCHAR(100) NOT NULL ,  
    `telefone` VARCHAR(20) NOT NULL ,  
    `data_nascimento` DATE NOT NULL ,  
    `convenio` VARCHAR(3) NOT NULL ,  
    `diagnostico` TEXT NOT NULL ,   
     PRIMARY KEY  (`id`)
) 

# Criação da tabela de agenda
CREATE TABLE `bd_consultorio`.`tb_agenda` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `data` DATE NOT NULL ,  
    `hora` TIME NOT NULL ,  
    `id_medico` INT NOT NULL ,  
    `sala` VARCHAR(20) NOT NULL ,  
    `id_paciente` INT NOT NULL ,    
    PRIMARY KEY  (`id`)
) 
ENGINE = InnoDB;

ALTER TABLE `tb_agenda` 
    ADD CONSTRAINT `fk_agenda_medico` 
FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos`(`id`),
    ADD CONSTRAINT `fk_agenda_paciente` 
FOREIGN KEY (`id_paciente`) REFERENCES `tb_pacientes`(`id`);

