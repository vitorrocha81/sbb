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
