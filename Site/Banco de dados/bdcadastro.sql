
create database if not exists bdcadastro;
use bdcadastro;

-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Jun-2019 às 10:42
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bdcadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--


CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(200) primary key NOT NULL,
  `nome` varchar(200) NOT NULL
  );


 
CREATE TABLE IF NOT EXISTS adm_user(
idUser int primary key not null auto_increment,
user varchar(200) not null,
pass varchar(200) not null,
nome varchar(200) not null);

CREATE TABLE IF NOT EXISTS noticias(
 codigo int auto_increment primary key not null,
 titulo varchar(200) not null,
 dat date not null,
 autor int,
 texto text not null);
 
