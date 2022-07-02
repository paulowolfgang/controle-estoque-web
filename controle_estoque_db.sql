-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Fev-2022 às 22:43
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_estoque_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `ref_product` varchar(20) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `description_product` varchar(200) NOT NULL,
  `cost_price_product` float NOT NULL,
  `sale_price_product` float NOT NULL,
  `stock_product` int(11) NOT NULL,
  `category_product` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id_product`, `ref_product`, `name_product`, `description_product`, `cost_price_product`, `sale_price_product`, `stock_product`, `category_product`) VALUES
(1, '000.000AA', 'I Phone 12', '512 GB de armazenamento.', 4999.99, 9999.99, 10, 'Eletrônicos'),
(2, '000.111BB', 'Samsung Galaxy A20', 'Cor azul, carregador e fone inclusos.', 900, 1200, 20, 'Eletrônicos'),
(3, '000.001AA', 'I Phone 12 Pro', 'Cor preto, não acompanha carregador e fones.', 8999, 10000, 10, 'Eletrônicos'),
(4, '000.003AA', 'I Phone 11', 'Cor branco, não acompanha carregador e fones.', 4999.99, 9999.99, 10, 'Eletrônicos'),
(5, '000.003AA', 'I Phone 11', 'Cor preto, não acompanha carregador e fones.', 4999.99, 9999.99, 20, 'Eletrônicos'),
(6, '000.111CC', 'I Phone 10', '256 GB de armazenamento, cor preto.', 4000, 6599, 5, 'Eletrônicos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `name_supplier` varchar(100) NOT NULL,
  `social_supplier` varchar(100) NOT NULL,
  `cnpj_supplier` varchar(20) NOT NULL,
  `adress_supplier` varchar(100) NOT NULL,
  `city_supplier` varchar(50) NOT NULL,
  `state_supplier` varchar(20) NOT NULL,
  `email_supplier` varchar(50) NOT NULL,
  `phone_supplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `name_supplier`, `social_supplier`, `cnpj_supplier`, `adress_supplier`, `city_supplier`, `state_supplier`, `email_supplier`, `phone_supplier`) VALUES
(1, 'Exemplo B. E. LTDA', 'Exemplo B. E.', '00.000.000/0001-00', 'Rua da Paz, 21', 'Belém', 'Pará', 'contato@exemplo.com.br', '(91) 0.0000-0000'),
(2, 'Exemplo C. E. Ltda', 'Exemplo C. E.', '00.000.000/0001-01', 'Rua da Glória, 35', 'São Paulo', 'São Paulo', 'contato@exemplo.com.br', '(91) 0.0000-0001'),
(3, 'Exemplo C. D. LTDA', 'Exemplo C. D.', '00.000.000/0001-01', 'Rua das Flores, 30', 'Rio de Janeiro', 'Rio de Janeiro', 'contato@exemplo.com.br', '(91) 0.0000-0000'),
(4, 'Exemplo Nova Empresa S.A', 'Exemplo Nova Empresa', '00.000.000/0001-03', 'Ruas das Tulipas, 90', 'Belo Horizonte', 'Minas Gerais', 'contato@exemplo.com.br', '(91) 0.0000-0011');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `pass_user` varchar(32) NOT NULL,
  `type_user` varchar(20) NOT NULL,
  `status_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `pass_user`, `type_user`, `status_user`) VALUES
(1, 'Paulo Victor', 'paulo@teste.com.br', '12345', 'Administrador', 'Ativado'),
(2, 'João Carlos', 'joao@teste.com.br', '12345', 'Conferente', 'Ativado'),
(3, 'Maria Silva', 'maria@teste.com.br', '12345', 'Conferente', 'Ativado'),
(4, 'Ana Sophia', 'ana@teste.com.br', '12345', 'Conferente', 'Ativado'),
(5, 'Pedro Henrique', 'pedro@teste.com.br', '123abc', 'Conferente', 'Ativado'),
(6, 'Carlos Rafael', 'carlos@teste.com.br', '123456', 'Administrador', 'Ativado'),
(7, 'Samara Silva', 'samara@teste.com.br', '12345', 'Conferente', 'Ativado'),
(8, 'Daiana Helena', 'daiana@teste.com.br', '123abc', 'Administrador', 'Ativado'),
(9, 'Ana Rafaela', 'rafaela@teste.com.br', '12345', 'Conferente', 'Ativado'),
(10, 'Ana Simone', 'anasimone@teste.com.br', '123456', 'Conferente', 'Ativado'),
(11, 'Ana Maria', 'ana_maria@teste.com.br', '12345', 'Conferente', 'Ativado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Índices para tabela `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
