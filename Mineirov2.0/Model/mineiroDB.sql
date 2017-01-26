-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 01:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mineiro`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho_compras`
--

CREATE TABLE `carrinho_compras` (
  `id` int(11) NOT NULL,
  `id_venda` int(11) DEFAULT NULL,
  `id_Produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Equipamentos'),
(2, 'Acessorios'),
(3, 'Mulher'),
(4, 'Crianca'),
(5, 'Bilhetes'),
(6, 'Promocao');

-- --------------------------------------------------------

--
-- Table structure for table `metodo_pagamento`
--

CREATE TABLE `metodo_pagamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_tipo_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `preco`, `id_categoria`, `id_tipo_produto`, `quantidade`, `imagem`, `descricao`) VALUES
(1, 'Camisola Principal', 'Nike', 48.99, 1, 1, 0, 'tshirt1.png', 'Camisola Oficial da Equipa A 2016 2017.'),
(2, 'Camisola Alternativa', 'Nike', 48.99, 1, 1, 0, 'tshirt2.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(3, 'Calsões Principal', 'Nike', 30.99, 1, 2, 0, 'calsoes1.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(4, 'Calsoes Alternativa', 'Nike', 30.99, 1, 2, 0, 'calsoes2.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(5, 'Bola Liga', 'Puma', 15.99, 2, 13, 1, 'bola1.png', 'Bola oficial da Liga 16 17.'),
(6, 'Caneca Liga dos Campeões', NULL, 9.99, 2, 4, 0, 'mug1.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `valor_promocao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_produto`
--

CREATE TABLE `tipo_produto` (
  `id` int(11) NOT NULL,
  `drescricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_produto`
--

INSERT INTO `tipo_produto` (`id`, `drescricao`) VALUES
(1, 'Camisolas'),
(2, 'Calsões'),
(3, 'Meias'),
(4, 'Canecas'),
(5, 'BoxSet'),
(6, 'Treino'),
(7, 'Saida'),
(8, 'Acessorios'),
(9, 'KidsKits'),
(10, 'Peluches'),
(11, 'KitsCloath'),
(12, 'KidsShoes'),
(13, 'Bolas'),
(14, 'Cachecois'),
(15, 'Carteiras'),
(16, 'Home'),
(17, 'Mochilas'),
(18, 'PortaChaves');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `ultimo_nome` varchar(50) DEFAULT NULL,
  `morada` varchar(50) DEFAULT NULL,
  `NIF` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `contacto` varchar(9) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cod_postal` varchar(10) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `id_utilizador` int(11) DEFAULT NULL,
  `id_metodo_pagamento` int(11) DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodo_pagamento`
--
ALTER TABLE `metodo_pagamento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
