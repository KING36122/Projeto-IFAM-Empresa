-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Out-2018 às 19:03
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `salario` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nome`, `salario`) VALUES
(1, 'Programador', '5000.00'),
(2, 'Programador Jr.', '2000.00'),
(3, 'Analista de Sistema', '8000.00'),
(4, 'Gerente de Projetos', '15000.00'),
(5, 'DBA', '11000.00'),
(6, 'Contador', '3000.00'),
(7, 'Advogado', '10000.00'),
(11, 'lksdns', '10.00'),
(12, 'çksemnd', '112.00'),
(13, 'aksn', '11000.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `iddepartamento` int(11) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `chefe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`iddepartamento`, `nome`, `chefe`) VALUES
(1, 'Desenvolvimento', 6),
(2, 'Juridico', 0),
(3, 'Contabilidade', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `telefone1` varchar(16) DEFAULT NULL,
  `telefone2` varchar(16) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `logradouro` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `cep` varchar(11) DEFAULT NULL,
  `categoria` int(3) NOT NULL,
  `departamento` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `sobrenome`, `telefone1`, `telefone2`, `email`, `logradouro`, `bairro`, `numero`, `cep`, `categoria`, `departamento`) VALUES
(1, 'Abrilina', 'Décima Nona Caçapavana', '(92)99360-5029', '', 'gf36122@gmail.com', 'Av. Armindo Auzier', 'São Jorge', '1099', '69104030', 1, 1),
(2, 'Abrilina', 'Décima Nona Caçapavana', '92991xx-xxx1', '92991xx-yyy1', 'abrilina@gmail.com', 'Rua 1', 'São Jorge', '1099', '69100-000', 1, 1),
(3, 'Acheropita', 'Papazone', '92991xx-xxx2', '92991xx-yyy2', 'acheropita@gmail.com', 'Rua 2', 'Bairro 2', '1099', '69100001', 1, 1),
(4, 'Ácido Acético Etílico ', 'Da Silva', '92991xx-xxx3', '92991xx-yyy3', 'acido@gmail.com', 'Rua 3', 'Bairro 3', '1099', '69100002', 2, 1),
(5, 'Agrícola ', 'Beterraba Areia Leão', '92991xx-xxx4', '92991xx-yyy4', 'agricola@gmail.com', 'Rua 4', 'Bairro 4', '1099', '69100003', 3, 1),
(6, 'Amável ', 'Pinto', '92991xx-xxx5', '92991xx-yyy5', 'amavel@gmail.com', 'Rua 5', 'Bairro 5', '1099', '69100004', 4, 1),
(7, 'Amin ', 'Amou Amado', '92991xx-xxx6', '92991xx-yyy6', 'amin@gmail.com', 'Rua 6', 'Bairro 6', '1099', '69100005', 6, 3),
(8, 'Barrigudinha', 'Seleida', '92991xx-xxx7', '92991xx-yyy7', 'barrigudinha@gmail.com', 'Rua 7', 'Bairro 7', '1099', '69100006', 7, 2),
(9, 'Última Delícia ', 'do Casal Carvalho', '92991xx-xxx8', '92991xx-yyy8', 'ultimadelicia@gmail.com', 'Rua 8', 'Bairro 8', '1099', '69100007', 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `idprojeto` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`idprojeto`, `tipo`, `descricao`) VALUES
(1, 'Novo', 'Desenvolvimento de um sistema de RH Casas Mirasol'),
(2, 'Novo', 'Desenvolvimento de um e-commerce para Rede de Padarias Pão Seco'),
(3, 'Manutenção', 'Sistema de controle de estoque Empresa Souza'),
(4, 'Gerente de Projeto', 'Ficará 18 meses trabalhando no projeto'),
(5, 'Analista', 'Ficará 18 meses trabalhando no projeto'),
(6, 'Programador', 'Ficará 18 meses trabalhando no projeto'),
(7, 'DBA', 'Ficará 18 meses trabalhando no projeto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto_funcionario`
--

CREATE TABLE `projeto_funcionario` (
  `idprojetofuncionario` int(11) NOT NULL,
  `projeto` varchar(11) NOT NULL,
  `funcionario` varchar(11) NOT NULL,
  `inicio` date NOT NULL,
  `tempo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `projeto_funcionario`
--

INSERT INTO `projeto_funcionario` (`idprojetofuncionario`, `projeto`, `funcionario`, `inicio`, `tempo`) VALUES
(1, '2', '1', '2018-06-05', 24),
(2, '1', '3', '2018-06-05', 24),
(3, '1', '5', '2018-06-05', 24),
(4, '1', '4', '2018-06-05', 12),
(6, '2', '3', '2018-08-20', 12),
(7, '2', '4', '2018-08-06', 12),
(9, '3', '3', '2018-07-05', 6),
(10, '3', '5', '2018-07-06', 6),
(12, '2', '4', '2018-10-09', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idtelefone` int(11) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `funcionario_idfuncionario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`idtelefone`, `telefone`, `tipo`, `funcionario_idfuncionario`) VALUES
(1, '993605029', 'Fixo', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`idprojeto`);

--
-- Indexes for table `projeto_funcionario`
--
ALTER TABLE `projeto_funcionario`
  ADD PRIMARY KEY (`idprojetofuncionario`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idtelefone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `idprojeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `projeto_funcionario`
--
ALTER TABLE `projeto_funcionario`
  MODIFY `idprojetofuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idtelefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
