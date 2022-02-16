-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2022 às 22:53
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

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
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_fornecedor` int(11) NOT NULL,
  `nome_fantasia_fornecedor` varchar(100) NOT NULL,
  `razao_social_fornecedor` varchar(100) NOT NULL,
  `cnpj_fornecedor` varchar(20) NOT NULL,
  `endereco_fornecedor` varchar(100) NOT NULL,
  `cidade_fornecedor` varchar(50) NOT NULL,
  `uf_fornecedor` varchar(20) NOT NULL,
  `email_fornecedor` varchar(50) NOT NULL,
  `telefone_fornecedor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_fornecedor`, `nome_fantasia_fornecedor`, `razao_social_fornecedor`, `cnpj_fornecedor`, `endereco_fornecedor`, `cidade_fornecedor`, `uf_fornecedor`, `email_fornecedor`, `telefone_fornecedor`) VALUES
(1, 'Exemplo B. E. LTDA', 'Exemplo B. E.', '00.000.000/0001-00', 'Rua da Paz, 21', 'Belém', 'Pará', 'contato@exemplo.com.br', '(91) 0.0000-0000'),
(2, 'Exemplo C. E. Ltda', 'Exemplo C. E.', '00.000.000/0001-01', 'Rua da Glória, 35', 'São Paulo', 'São Paulo', 'contato@exemplo.com.br', '(91) 0.0000-0001');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `referencia_produto` varchar(20) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `descricao_produto` varchar(200) NOT NULL,
  `custo_produto` float NOT NULL,
  `preco_produto` float NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `categoria_produto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `referencia_produto`, `nome_produto`, `descricao_produto`, `custo_produto`, `preco_produto`, `quantidade_produto`, `categoria_produto`) VALUES
(1, '000.000AA', 'I Phone 12', '512 GB de armazenamento.', 4999.99, 9999.99, 10, 'Eletrônicos'),
(2, '000.111BB', 'Samsung Galaxy A20', 'Cor azul, carregador e fone inclusos.', 900, 1200, 20, 'Eletrônicos'),
(3, '000.001AA', 'I Phone 12 Pro', 'Cor preto, não acompanha carregador e fones.', 8999, 10000, 10, 'Eletrônicos'),
(4, '000.003AA', 'I Phone 11', 'Cor branco, não acompanha carregador e fones.', 4999.99, 9999.99, 10, 'Eletrônicos'),
(5, '000.003AA', 'I Phone 11', 'Cor preto, não acompanha carregador e fones.', 4999.99, 9999.99, 20, 'Eletrônicos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `status_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `tipo_usuario`, `status_usuario`) VALUES
(1, 'Paulo Victor', 'paulo@teste.com.br', '12345', 'Administrador', 'Ativado'),
(2, 'João Carlos', 'joao@teste.com.br', '12345', 'Conferente', 'Ativado'),
(3, 'Maria Silva', 'maria@teste.com.br', '12345', 'Conferente', 'Ativado'),
(4, 'Ana Sophia', 'ana@teste.com.br', '12345', 'Conferente', 'Ativado'),
(5, 'Pedro Henrique', 'pedro@teste.com.br', '123abc', 'Conferente', 'Ativado'),
(6, 'Carlos Rafael', 'carlos@teste.com.br', '123456', 'Administrador', 'Ativado'),
(7, 'Samara Silva', 'samara@teste.com.br', '12345', 'Conferente', 'Ativado'),
(8, 'Daiana Helena', 'daiana@teste.com.br', '123abc', 'Administrador', 'Ativado'),
(9, 'Ana Rafaela', 'rafaela@teste.com.br', '12345', 'Conferente', 'Ativado'),
(10, 'Ana Simone', 'anasimone@teste.com.br', '123456', 'Conferente', 'Ativado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
