
CREATE TABLE `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `img` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO `img` (`id`, `nombre`, `img`) VALUES
(1, 'Kelvin', 'img_gal/xd.jpg'),
(2, 'MyLogo', 'img_gal/logo.png'),
(3, 'Prueba', 'img_gal/alv.png');



CREATE TABLE  `publi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fec_hor` varchar(500) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO `publi` (`id`, `fec_hor`, `titulo`, `descripcion`, `img`) VALUES
(6, '2018-06-21 00:02:51', 'ReuniÃ³n Padres de Familia', 'La reunion se llevara a cabo en las instalaciones del colegio el dia 27/09/2018.', 'img_publi/sdami.png'),
(5, '2018-06-20 23:27:17', 'Huecos Todos', 'XDXDXDXDXD', 'img_publi/'),
(3, '2018-06-20 22:44:32', 'XD', 'DX', 'img_publi/logo.jpg'),
(4, '2018-06-20 23:05:07', 'a', 'a', 'img_publi/');



CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76599 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `usuario`, `pass`) VALUES
(2, 'caba', 'cabagt'),
(1, 'dama', 'damagt');
COMMIT;

