CREATE DATABASE IF NOT EXISTS comforceproyecto;
--
-- Database: `comforceproyecto`
--
USE comforceproyecto;
-- --------------------------------------------------------


--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(255)  auto_increment NOT NULL,
  `apellido1` varchar(255) NOT NULL,
  `apellido2` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `tipo` int(1) NOT NULL,
  `estado` int(1) NOT NULL,
  `fecharegistro` datetime NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY(idusuario)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `apellido1`, `apellido2`, `nombre`, `usuario`, `clave`, `tipo`, `estado`, `fecharegistro`) VALUES
(1, 'Garcia', 'Forero', 'felipe', 'admin', '123456', 1, 1, '2018-07-08 10:02:42');

--
-- Table structure for table `procesos`
--

CREATE TABLE `procesos` (
  `NumeroProceso` int(11)  auto_increment  NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `fcreacion` date NOT NULL,
  `sede` int(11) NOT NULL,
  `presupuesto` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  CONSTRAINT pk_usuarios PRIMARY KEY(NumeroProceso),
  FOREIGN KEY (usuario) REFERENCES  usuarios (idusuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
