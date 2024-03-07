#
# Structure for the `tb_servicos` table : 
#

CREATE TABLE `tb_servicos` (
  `ser_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ser_titulo` varchar(100) DEFAULT NULL,
  `ser_descricao` varchar(160) DEFAULT NULL,
  `ser_icone` varchar(50) DEFAULT NULL,
  `ser_data_cadstro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ser_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;