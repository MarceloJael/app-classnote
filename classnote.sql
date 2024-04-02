SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `data_aula` date NOT NULL,
  `anotacao` varchar(255) NOT NULL,
  `link_aula` varchar(255) DEFAULT NULL,
  `numero_aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `aulas` (`id`, `materia_id`, `data_aula`, `anotacao`, `link_aula`, `numero_aula`) VALUES
(10, 16, '2024-01-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum cursus lorem, sed dignissim tortor facilisis nec. Integer vestibulum commodo lectus ut vulputate. Proin placerat aliquam metus eu pellentesque. Sed maximus nisi iaculis urna finibus v', 'https://drive.google.com/file/d/1-g18cADFFOIV053m-IsV3A3ZeSuxmI0u/view?usp=drivesdk', 1),
(11, 16, '2024-02-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum cursus lorem, sed dignissim tortor facilisis nec. Integer vestibulum commodo lectus ut vulputate. Proin placerat aliquam metus eu pellentesque. Sed maximus nisi iaculis', 'https://drive.google.com/file/d/13IMnF-Lc-7b-9ZuVqkf9sywImJDNNA2A/view?usp=drivesdk', 2),
(12, 16, '2024-02-06', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla', 'https://drive.google.com/file/d/10HELyn8ssZO_Xws7qO1uxOzOFQ2ks86E/view?usp=drivesdk', 3),
(13, 16, '2024-02-08', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum cursus lorem, sed dignissim tortor facilisis nec. Integer vestibulum commodo lectus ut vulputate. Proin placerat aliquam', 'https://drive.google.com/file/d/1DYtzWN3JtL1YKGHBnoko5WxIZzCLBXD3/view?usp=drivesdk', 4),
(14, 16, '2024-02-15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum cursus lorem, sed dignissim tortor facilisis nec. Integer vestibulum commodo lectus ut vulputate. Proin placerat aliquam metus eu pellentesque', 'https://drive.google.com/file/d/13l2dE0yRneCVdJQq362aYHSVSf_EJuCq/view?usp=drivesdk', 5);


CREATE TABLE `entregas` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `tipo_entrega` varchar(255) NOT NULL,
  `data_entrega` date NOT NULL,
  `status_entrega` varchar(255) NOT NULL,
  `anotacao_entrega` varchar(255) NOT NULL,
  `link_entrega` varchar(255) NOT NULL,
  `nota_entrega` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `entregas` (`id`, `materia_id`, `tipo_entrega`, `data_entrega`, `status_entrega`, `anotacao_entrega`, `link_entrega`, `nota_entrega`) VALUES
(7, 16, 'Trabalho', '2024-02-19', 'Já feito', '1. Quais são os conselhos dados para a escolha de uma ferramenta UML?/ 2. Identifique quais são as etapas fundamentais para o início da iteração 2 da fase de Elaboração do projeto./ 3. Explique a razão pela qual um cenário não deve ser dividido entre iter', 'https://lms.infnet.edu.br/moodle/mod/assign/view.php?id=383845', 'DML'),
(8, 16, 'Trabalho', '2024-03-04', 'Já feito', 'A maioria dos princípios e padrões de projeto, incluindo o polimorfismo, as interfaces, a indireção e o encapsulamento de dados é constituída de mecanismos de…', 'https://lms.infnet.edu.br/moodle/mod/assign/view.php?id=383857', 'DML'),
(9, 16, 'Trabalho', '2024-03-18', 'Já feito', '1. Por que uma das intenções do padrão Adapter do GoF é introduzir um componente legado ou código de biblioteca (não modificável) no sistema?', 'https://lms.infnet.edu.br/moodle/mod/assign/view.php?id=383869', ''),
(10, 16, 'Trabalho', '2024-04-02', 'Pra entregar', 'Assessment da materia de Análise, Projeto e Construção Disciplinada de Softwares II', 'https://lms.infnet.edu.br/moodle/mod/assign/view.php?id=379136', '');


CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `segunda` tinyint(1) NOT NULL,
  `terca` tinyint(1) NOT NULL,
  `quarta` tinyint(1) NOT NULL,
  `quinta` tinyint(1) NOT NULL,
  `sexta` tinyint(1) NOT NULL,
  `sabado` tinyint(1) NOT NULL,
  `domingo` tinyint(1) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `materias` (`id`, `nome`, `professor`, `segunda`, `terca`, `quarta`, `quinta`, `sexta`, `sabado`, `domingo`, `hora`) VALUES
(14, 'Projeto de Bloco: Engenharia Disciplinada de Softwares', 'Armênio Cardoso', 0, 0, 1, 0, 0, 0, 0, '20:30:00'),
(15, 'Análise, Projeto e Construção Disciplinada de Softwares I', 'Orlando Fonseca', 0, 1, 0, 1, 0, 0, 0, '20:30:00'),
(16, 'Análise, Projeto e Construção Disciplinada de Softwares II', 'Luiz Maia', 0, 1, 0, 1, 0, 0, 0, '20:30:00'),
(17, 'Melhores Práticas de Codificação', 'Luiz Maia', 1, 0, 0, 0, 1, 0, 0, '20:30:00'),
(18, 'Refatoração', 'Luiz Maia', 1, 0, 0, 0, 1, 0, 0, '20:30:00'),
(19, 'Aplicações de Cloud Computing', 'Gustavo Marchisotti', 0, 0, 0, 0, 1, 0, 0, '18:50:00');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `privacidade` tinyint(1) NOT NULL,
  `comunicacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `email`, `senha`, `instituicao`, `privacidade`, `comunicacao`) VALUES
(9, 'Marcelo', 'Jael', 'marcelo@marcelo.com', '123456', 'INFNET', 1, 1),
(10, 'Bárbara', 'Starling', 'barbarastarling@email.com', '123456', 'UNA', 1, 1);


ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK materia` (`materia_id`) USING BTREE;

ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK materia 1` (`materia_id`);

ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`,`nome`) USING BTREE;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `entregas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `aulas`
  ADD CONSTRAINT `FK materia` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;