-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jan-2021 às 19:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercantil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL,
  `quantidade` varchar(30) DEFAULT NULL,
  `valor` varchar(30) DEFAULT NULL,
  `imglink` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `titulo`, `descricao`, `quantidade`, `valor`, `imglink`) VALUES
(113, 'Arroz', 'Arroz', '1', '6,00', 'https://cereaiscelia.com.br/wp-content/uploads/2016/08/saco_arroz_branco_5kg.png'),
(115, 'FeijÃ£o', 'FeijÃ£o', '1', '10,00', 'https://www.camil.com.br/wp-content/uploads/sites/12/2020/06/7896006744115-feijao-carioca-camil-1kg-1.png'),
(116, 'MacarrÃ£o', 'MacarrÃ£o', '3', '3,00', ''),
(117, 'Milho Verde', 'Milho Verde', '12', '2,50', 'https://apucarana.cidadecancao.com/media/catalog/product/cache/1/image/420x565/9df78eab33525d08d6e5fb8d27136e95/2/b/2b5d8cc209ac1e280f4fa7e27998d98a3d8a1b.png_4.png'),
(118, 'Goiabada', 'Goiabada', '14', '5,00', 'https://lh3.googleusercontent.com/proxy/9X0K99tGUW8U6tvGZ29DPfPcrEYI5WfjHsHqABDL8x5W08L6d596WE7sYEHwZzPITTMm5HEP6p8j2c1AKWnNl-4NYRijh7HXOtT6ITSqIVIThGfYrhKrfR9rH6cnNDfnOk1urB7qwwNHC2MEPfhneTHO_og'),
(119, 'Toddynho', 'Toddynho', '16', '1,50', 'https://www.mercadou.com.br/media/catalog/product/cache/1/image/1200x630/9df78eab33525d08d6e5fb8d27136e95/b/e/bebida-lactea-toddynho-uht-chocolate-levinho-caixa-200ml_2.jpg'),
(120, 'Bala de Menta', 'Bala de Menta', '13', '0,50', 'https://www.arcor.com.br/wp-content/uploads/2019/07/produto-butter-toffees-bala-chokko-menta.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
