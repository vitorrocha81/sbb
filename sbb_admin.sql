CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL,
  `disciplina` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 


 
CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 


INSERT INTO `professores` (`id`, `nome`, `disciplina`, `email`, `telefone`, `celular`, `created`, `modified`) VALUES
(1, 'prrofessor 1', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(2, 'prrofessor 2', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(3, 'prrofessor 3', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(4, 'prrofessor 4', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(5, 'prrofessor 5', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(6, 'prrofessor 6', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(7, 'prrofessor 7', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(8, 'prrofessor 8', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(9, 'prrofessor 9', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
(10, 'prrofessor 10', 'ingles', 'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');



INSERT INTO `alunos` (`id`, `nome`, `email`, `telefone`, `celular`, `created`, `modified`) VALUES
('', 'prrofessor 1',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 2',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 3',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 4',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 5',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 6',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 7',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 8',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 9',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');
('', 'prrofessor 10',  'professor1@gmail.com', '(11)954849281', '1141130853', '2015-08-02 12:04:03', '2015-08-06 06:59:18');


ALTER TABLE `alunos` ADD `nivel_id` INT( 2 ) NOT NULL ,
ADD `idioma_id` INT( 2 ) NOT NULL ,
ADD `valor_hora` DECIMAL( 8, 2 ) NOT NULL DEFAULT '0.00';
AADD `aulas_mes` INT( 2 ) NOT NULL DEFAULT '0';