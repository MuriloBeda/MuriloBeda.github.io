#
# Structure for the `tb_aluno` table : 
#

CREATE TABLE `tb_aluno` (
  `alu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `alu_nome` varchar(120) DEFAULT NULL,
  `alu_data_nascimento` date DEFAULT NULL,
  `alu_sexo` char(20) DEFAULT NULL,
  `alu_cep` int(8) DEFAULT NULL,
  `alu_logradouro` varchar(128) DEFAULT NULL,
  `alu_numero` varchar(10) DEFAULT NULL,
  `alu_complemento` varchar(255) DEFAULT NULL,
  `alu_cidade` varchar(38) DEFAULT NULL,
  `alu_estado` char(2) DEFAULT NULL,
  `alu_email` varchar(180) DEFAULT NULL,
  `alu_telefone` int(14) DEFAULT NULL,
  `alu_celular` varchar(15) DEFAULT NULL,
  `alu_escolaridade` varchar(120) DEFAULT NULL,
  `alu_serie` varchar(10) DEFAULT NULL,
  `alu_ano_conclusao` date DEFAULT NULL,
  `alu_escola` varchar(60) DEFAULT NULL,
  `alu_objetivo` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`alu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;