-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 06:10:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdnutricion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentesclinicos`
--

CREATE TABLE `antecedentesclinicos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `diabetes` tinyint(1) NOT NULL,
  `diabetesNota` varchar(100) NOT NULL,
  `sobrepeso` tinyint(1) NOT NULL,
  `sobrepesoNota` varchar(100) NOT NULL,
  `tiroides` tinyint(1) NOT NULL,
  `tiroidesNota` varchar(100) NOT NULL,
  `presionArterial` tinyint(1) NOT NULL,
  `presionArterialNota` varchar(100) NOT NULL,
  `oncologico` tinyint(1) NOT NULL,
  `oncologicoNota` varchar(100) NOT NULL,
  `OtrosHeredo` varchar(100) NOT NULL,
  `tabaquismo` tinyint(1) NOT NULL,
  `tabaquismoNota` varchar(100) NOT NULL,
  `alcoholismo` tinyint(1) NOT NULL,
  `alcoholismoNota` varchar(100) NOT NULL,
  `deportes` tinyint(1) NOT NULL,
  `deportesNota` varchar(100) NOT NULL,
  `sinEntrenar` varchar(50) NOT NULL,
  `sinEntrenarNota` varchar(100) NOT NULL,
  `otrosNoPato` varchar(100) NOT NULL,
  `alergias` tinyint(1) NOT NULL,
  `alergiasNota` varchar(100) NOT NULL,
  `presionArtPato` tinyint(1) NOT NULL,
  `presionArtPatoNota` varchar(100) NOT NULL,
  `constipacion` tinyint(1) NOT NULL,
  `constipacionNota` varchar(100) NOT NULL,
  `retencionLiq` tinyint(1) NOT NULL,
  `retencionLiqNota` varchar(100) NOT NULL,
  `quirurgico` tinyint(1) NOT NULL,
  `quirurgicoNota` varchar(100) NOT NULL,
  `endocrinopatias` tinyint(1) NOT NULL,
  `endocrinopatiasNota` varchar(100) NOT NULL,
  `gastritis` tinyint(1) NOT NULL,
  `gastritisNota` varchar(100) NOT NULL,
  `colitis` tinyint(1) NOT NULL,
  `colitisNota` varchar(100) NOT NULL,
  `hemorroides` tinyint(1) NOT NULL,
  `hemorroidesNota` varchar(100) NOT NULL,
  `hepatitis` tinyint(1) NOT NULL,
  `hepatitisNota` varchar(100) NOT NULL,
  `diabetesPato` tinyint(1) NOT NULL,
  `diabetesPatoNota` varchar(100) NOT NULL,
  `tratamientos` tinyint(1) NOT NULL,
  `tratamientosNota` varchar(100) NOT NULL,
  `otrosPato` varchar(100) NOT NULL,
  `encamado` tinyint(1) NOT NULL,
  `encamadoNota` varchar(100) NOT NULL,
  `ambulatorio` tinyint(1) NOT NULL,
  `ambulatorioNota` varchar(100) NOT NULL,
  `inanicion` tinyint(1) NOT NULL,
  `inanicionNota` varchar(100) NOT NULL,
  `postquirurgico` tinyint(1) NOT NULL,
  `postquirurgicoNota` varchar(100) NOT NULL,
  `peritonitis` tinyint(1) NOT NULL,
  `peritonitisNota` varchar(100) NOT NULL,
  `fractura` tinyint(1) NOT NULL,
  `fracturaNota` varchar(100) NOT NULL,
  `cancer` tinyint(1) NOT NULL,
  `cancerNota` varchar(100) NOT NULL,
  `infeccion` tinyint(1) NOT NULL,
  `infeccionNota` varchar(100) NOT NULL,
  `trauma` tinyint(1) NOT NULL,
  `traumaNota` varchar(100) NOT NULL,
  `quemadura10` tinyint(1) NOT NULL,
  `quemadura10Nota` varchar(100) NOT NULL,
  `quemadura30` tinyint(1) NOT NULL,
  `quemadura30Nota` varchar(100) NOT NULL,
  `quemadura50` tinyint(1) NOT NULL,
  `quemaduraNota` varchar(100) NOT NULL,
  `otrosFactor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antlongitudes`
--

CREATE TABLE `antlongitudes` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` date NOT NULL,
  `acromial` int(11) NOT NULL,
  `femur` int(11) NOT NULL,
  `radial` int(11) NOT NULL,
  `altTibial` int(11) NOT NULL,
  `estiloide` int(11) NOT NULL,
  `tibial` int(11) NOT NULL,
  `altIliespinal` int(11) NOT NULL,
  `pie` int(11) NOT NULL,
  `altTrocanter` int(11) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antperimetroscircunferencias`
--

CREATE TABLE `antperimetroscircunferencias` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `cabeza` int(11) NOT NULL,
  `cintura` int(11) NOT NULL,
  `cuello` int(11) NOT NULL,
  `gluteos` int(11) NOT NULL,
  `brazoRelajado` int(11) NOT NULL,
  `muslo` int(11) NOT NULL,
  `brazoFlexionado` int(11) NOT NULL,
  `musloMedio` int(11) NOT NULL,
  `antebrazo` int(11) NOT NULL,
  `musloMedioVariante` int(11) NOT NULL,
  `munieca` int(11) NOT NULL,
  `pantorrilla` int(11) NOT NULL,
  `pecho` int(11) NOT NULL,
  `tobillo` int(11) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antplieguescutaneos`
--

CREATE TABLE `antplieguescutaneos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `triceps` int(11) NOT NULL,
  `supraespinal` int(11) NOT NULL,
  `biceps` int(11) NOT NULL,
  `abdominal` int(11) NOT NULL,
  `subescapular` int(11) NOT NULL,
  `musloAnterior` int(11) NOT NULL,
  `crestaIliaca` int(11) NOT NULL,
  `pantorrilla` int(11) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ant_diametros`
--

CREATE TABLE `ant_diametros` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `biepiCodo` int(11) NOT NULL,
  `antero` int(11) NOT NULL,
  `biepiFemur` int(11) NOT NULL,
  `bileocrestal` int(11) NOT NULL,
  `biacromial` int(11) NOT NULL,
  `bimaleolar` int(11) NOT NULL,
  `transverso` int(11) NOT NULL,
  `biepiMunieca` int(11) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ant_medbasictallas`
--

CREATE TABLE `ant_medbasictallas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `peso` float NOT NULL,
  `estatura` int(11) NOT NULL,
  `sentada` float NOT NULL,
  `brazos` float NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_otrosestudios`
--

CREATE TABLE `bio_otrosestudios` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_perfilhepatico`
--

CREATE TABLE `bio_perfilhepatico` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `colesterol` int(11) NOT NULL,
  `fosfatasa` int(11) NOT NULL,
  `bilirrubinaTotal` int(11) NOT NULL,
  `globulinas` int(11) NOT NULL,
  `albumina` int(11) NOT NULL,
  `relAlbumina` int(11) NOT NULL,
  `Proteínas` int(11) NOT NULL,
  `ggt` int(11) NOT NULL,
  `tgo` int(11) NOT NULL,
  `bilirrubinaDirecta` int(11) NOT NULL,
  `tgp` int(11) NOT NULL,
  `bilirrubinaIndirecta` int(11) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_perfillipidos`
--

CREATE TABLE `bio_perfillipidos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `colesterol` int(11) NOT NULL,
  `trigliceridos` int(11) NOT NULL,
  `hdl` int(11) NOT NULL,
  `vldl` int(11) NOT NULL,
  `ldl` int(11) NOT NULL,
  `lipidos` int(11) NOT NULL,
  `aterogenico` int(11) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_perfiltiroideo`
--

CREATE TABLE `bio_perfiltiroideo` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `T4` int(11) NOT NULL,
  `tiroideaSerica` int(11) NOT NULL,
  `FT4` int(11) NOT NULL,
  `yodoProteico` int(11) NOT NULL,
  `T3` int(11) NOT NULL,
  `tiroxinaLibre` int(11) NOT NULL,
  `tUptake` int(11) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bio_quimicasanguinea`
--

CREATE TABLE `bio_quimicasanguinea` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `Glucosa` int(11) NOT NULL,
  `bunSerico` int(11) NOT NULL,
  `ureaSerica` int(11) NOT NULL,
  `creatinina` int(11) NOT NULL,
  `Nitrógeno` int(11) NOT NULL,
  `acidoUrico` int(11) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `de` date NOT NULL,
  `deHora` time NOT NULL,
  `a` date NOT NULL,
  `aHora` time NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `enviarEmail` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosbasicos`
--

CREATE TABLE `datosbasicos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `actividadFisica` varchar(150) NOT NULL,
  `estatura` int(11) NOT NULL,
  `objetivos` varchar(150) NOT NULL,
  `pesoI` int(11) NOT NULL,
  `nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosbasicos`
--

INSERT INTO `datosbasicos` (`id`, `idUsuario`, `genero`, `actividadFisica`, `estatura`, `objetivos`, `pesoI`, `nacimiento`) VALUES
(1, 7, 'Masculino', 'Sedentario', 162, 'Perder peso', 46, '2022-11-15'),
(3, 1, 'Masculino', 'Moderadamente activo', 175, 'Mantener peso', 68, '2022-11-01'),
(4, 4, 'Femenino', 'Sedentario', 155, 'Perder peso', 70, '2022-11-09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `observaciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `calorias` int(11) NOT NULL,
  `comidas` int(11) NOT NULL,
  `dieta` varchar(250) NOT NULL,
  `ruta1` varchar(100) NOT NULL,
  `ruta2` varchar(100) NOT NULL,
  `ruta3` varchar(100) NOT NULL,
  `ruta4` varchar(100) NOT NULL,
  `ruta5` varchar(100) NOT NULL,
  `ruta6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imc`
--

CREATE TABLE `imc` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `imc` float NOT NULL,
  `peso` float NOT NULL,
  `altura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pesomedidas`
--

CREATE TABLE `pesomedidas` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `peso` int(11) NOT NULL,
  `grasaPorcent` int(11) NOT NULL,
  `notas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'administrador'),
(2, 'paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `apellidoP` varchar(150) NOT NULL,
  `apellidoM` varchar(150) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `username`, `password`, `nombres`, `apellidoP`, `apellidoM`, `telefono`, `rol_id`) VALUES
(1, 'a-lberto16@hotmail.com', '1111', 'Alberto', 'Montaño', 'Flores', '5674567654', 2),
(2, 'admin', 'admin', 'Katya ', 'Osorio', '', '', 1),
(4, 'nuevo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nuevo', 'usuario', '', '1231231212', 2),
(7, 'valenciaestudillo@gmail.com', 'root123', 'Leonel', 'Valencia', 'Estudillo', '111111', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentesclinicos`
--
ALTER TABLE `antecedentesclinicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioAntec` (`idUsuario`);

--
-- Indices de la tabla `antlongitudes`
--
ALTER TABLE `antlongitudes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioLongi` (`idUsuario`);

--
-- Indices de la tabla `antperimetroscircunferencias`
--
ALTER TABLE `antperimetroscircunferencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPeri` (`idUsuario`);

--
-- Indices de la tabla `antplieguescutaneos`
--
ALTER TABLE `antplieguescutaneos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPlie` (`idUsuario`);

--
-- Indices de la tabla `ant_diametros`
--
ALTER TABLE `ant_diametros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioDia` (`idUsuario`);

--
-- Indices de la tabla `ant_medbasictallas`
--
ALTER TABLE `ant_medbasictallas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioMedB` (`idUsuario`);

--
-- Indices de la tabla `bio_otrosestudios`
--
ALTER TABLE `bio_otrosestudios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioOtros` (`idUsuario`);

--
-- Indices de la tabla `bio_perfilhepatico`
--
ALTER TABLE `bio_perfilhepatico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPerHep` (`idUsuario`);

--
-- Indices de la tabla `bio_perfillipidos`
--
ALTER TABLE `bio_perfillipidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPerLip` (`idUsuario`);

--
-- Indices de la tabla `bio_perfiltiroideo`
--
ALTER TABLE `bio_perfiltiroideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPerTir` (`idUsuario`);

--
-- Indices de la tabla `bio_quimicasanguinea`
--
ALTER TABLE `bio_quimicasanguinea`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioQuimS` (`idUsuario`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioCita` (`idUsuario`);

--
-- Indices de la tabla `datosbasicos`
--
ALTER TABLE `datosbasicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioDiag` (`idUsuario`);

--
-- Indices de la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioDiet` (`idUsuario`);

--
-- Indices de la tabla `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioImc` (`idUsuario`);

--
-- Indices de la tabla `pesomedidas`
--
ALTER TABLE `pesomedidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuarioPesoM` (`idUsuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `usuarios_idpk_` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentesclinicos`
--
ALTER TABLE `antecedentesclinicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antlongitudes`
--
ALTER TABLE `antlongitudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antperimetroscircunferencias`
--
ALTER TABLE `antperimetroscircunferencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antplieguescutaneos`
--
ALTER TABLE `antplieguescutaneos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ant_diametros`
--
ALTER TABLE `ant_diametros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ant_medbasictallas`
--
ALTER TABLE `ant_medbasictallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bio_otrosestudios`
--
ALTER TABLE `bio_otrosestudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bio_perfilhepatico`
--
ALTER TABLE `bio_perfilhepatico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bio_perfillipidos`
--
ALTER TABLE `bio_perfillipidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bio_perfiltiroideo`
--
ALTER TABLE `bio_perfiltiroideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bio_quimicasanguinea`
--
ALTER TABLE `bio_quimicasanguinea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datosbasicos`
--
ALTER TABLE `datosbasicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dietas`
--
ALTER TABLE `dietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imc`
--
ALTER TABLE `imc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pesomedidas`
--
ALTER TABLE `pesomedidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentesclinicos`
--
ALTER TABLE `antecedentesclinicos`
  ADD CONSTRAINT `idUsuarioAntec` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `antlongitudes`
--
ALTER TABLE `antlongitudes`
  ADD CONSTRAINT `idUsuarioLongi` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `antperimetroscircunferencias`
--
ALTER TABLE `antperimetroscircunferencias`
  ADD CONSTRAINT `idUsuarioPeri` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `antplieguescutaneos`
--
ALTER TABLE `antplieguescutaneos`
  ADD CONSTRAINT `idUsuarioPlie` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `ant_diametros`
--
ALTER TABLE `ant_diametros`
  ADD CONSTRAINT `idUsuarioDia` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `ant_medbasictallas`
--
ALTER TABLE `ant_medbasictallas`
  ADD CONSTRAINT `idUsuarioMedB` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `bio_otrosestudios`
--
ALTER TABLE `bio_otrosestudios`
  ADD CONSTRAINT `idUsuarioOtros` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `bio_perfilhepatico`
--
ALTER TABLE `bio_perfilhepatico`
  ADD CONSTRAINT `idUsuarioPerHep` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `bio_perfillipidos`
--
ALTER TABLE `bio_perfillipidos`
  ADD CONSTRAINT `idUsuarioPerLip` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `bio_perfiltiroideo`
--
ALTER TABLE `bio_perfiltiroideo`
  ADD CONSTRAINT `idUsuarioPerTir` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `bio_quimicasanguinea`
--
ALTER TABLE `bio_quimicasanguinea`
  ADD CONSTRAINT `idUsuarioQuimS` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `idUsuarioCita` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `datosbasicos`
--
ALTER TABLE `datosbasicos`
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD CONSTRAINT `idUsuarioDiag` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `dietas`
--
ALTER TABLE `dietas`
  ADD CONSTRAINT `idUsuarioDiet` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `imc`
--
ALTER TABLE `imc`
  ADD CONSTRAINT `idUsuarioImc` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `pesomedidas`
--
ALTER TABLE `pesomedidas`
  ADD CONSTRAINT `idUsuarioPesoM` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_idpk_` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
