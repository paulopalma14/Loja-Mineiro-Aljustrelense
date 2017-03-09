-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 05:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

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
  `nome` varchar(50) NOT NULL,
  `ultimo_nome` varchar(50) NOT NULL,
  `morada` varchar(50) NOT NULL,
  `NIF` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `contacto` varchar(9) NOT NULL,
  `data_nascimento` date NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `cod_postal` varchar(10) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id`, `nome`, `ultimo_nome`, `morada`, `NIF`, `email`, `pass`, `contacto`, `data_nascimento`, `distrito`, `cod_postal`, `pais`, `cidade`) VALUES
(1, 'Cristina', 'Boga', 'Rua das Coves', '55555555555', 'cris@gmail.com', 'qwerty', '968504505', '2017-02-01', 'Beja', '7800-077', 'Portugal', 'Beja');

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `idMetodo` int(11) NOT NULL,
  `idUtilizador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrinho_compras_venda_id_fk` (`id_venda`),
  ADD KEY `carrinho_compras_produto_id_fk` (`id_Produto`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_categoria_id_fk` (`id_categoria`),
  ADD KEY `produto_tipo_produto_id_fk` (`id_tipo_produto`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promocoes_produto_id_fk` (`id_produto`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `idMetodo___fk` (`idMetodo`),
  ADD KEY `idUtilizador___fk` (`idUtilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `metodo_pagamento`
--
ALTER TABLE `metodo_pagamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipo_produto`
--
ALTER TABLE `tipo_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrinho_compras`
--
ALTER TABLE `carrinho_compras`
  ADD CONSTRAINT `carrinho_compras_produto_id_fk` FOREIGN KEY (`id_Produto`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `carrinho_compras_venda_id_fk` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id`);

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_categoria_id_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `produto_tipo_produto_id_fk` FOREIGN KEY (`id_tipo_produto`) REFERENCES `tipo_produto` (`id`);

--
-- Constraints for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD CONSTRAINT `promocoes_produto_id_fk` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`);

--
-- Constraints for table `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `idMetodo___fk` FOREIGN KEY (`idMetodo`) REFERENCES `metodo_pagamento` (`id`),
  ADD CONSTRAINT `idUtilizador___fk` FOREIGN KEY (`idUtilizador`) REFERENCES `utilizador` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
