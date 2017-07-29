-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2016 a las 21:16:16
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kiosko_informacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso_vehicular`
--

CREATE TABLE IF NOT EXISTS `acceso_vehicular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `acceso_vehicular`
--

INSERT INTO `acceso_vehicular` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Acceso Vehicular', 'En caso de tener vehículo tendrás que llevar a servicios escolares copia de la credencial de la escuela, tarjeta de circulación y licencia de manejo vigente. Para activación de plumas.\nTiempo de trámite: mismo día.\nPago por trámite: Gratuito.\n', 'Imagen/image(8).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bajas`
--

CREATE TABLE IF NOT EXISTS `bajas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `bajas`
--

INSERT INTO `bajas` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Baja de asignatura', 'Este tramite se realiza después de la 2da evaluación parcial, mediante una solicitud escrita al Director del Programa Educativo para su autorización (Verificar Calendario académico vigente).\nTiempo de trámite: mismo día.\n', 'Imagen/image(12).png', ' ', 'Card'),
(2, 'Baja temporal', 'Para darte de baja de manera temporal requieres no tener adeudos económicos, en Biblioteca, Talleres ni Laboratorios.\nElaboraras una solicitud dirigida al Director de tu Programa Educativo solicitando la baja temporal explicando las causas (incluir MATRICULA, cuatrimestre y grupo).\nTiempo de trámite: mismo día.\n', 'Imagen/image(10).png', ' ', 'Card'),
(3, 'Baja definitiva', 'Elaboraras una solicitud dirigida al Director de tu Programa Educativo solicitando la baja definitiva explicando las causas (incluir MATRICULA, cuatrimestre y grupo).\nRecabaras el sello y la firma de No Adeudos en: Caja, Biblioteca, Talleres y laboratorios.\nEn Servicios Escolares entregaras la Credencial de la UPT o la fotocopia de Credencial para Votar. Deberás llenar el formato de baja definitiva.\nTiempo de trámite: mismo día.\nPago por trámite: $50.00\n', 'Imagen/image(11).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becas`
--

CREATE TABLE IF NOT EXISTS `becas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `becas`
--

INSERT INTO `becas` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Beca de excelencia', 'No deberás tener adeudos económicos en Biblioteca, Talleres ni en Laboratorios.\nPresentaras tu Constancia de estudios (con el promedio establecido en la CONVOCATORIA) y la Solicitud de beca por escrito en Rectoría dirigido al Rector Mtro. Narciso Xicoténcatl Rojas.\nEsperarás la publicación de los resultados de acuerdo con el Calendario Académico vigente.\nTiempo de trámite: mismo día.\nPago por trámite: El costo de tu Constancia de estudios, a cambio de lo cual podrás obtener el descuento del 50% y 100% sobre la cuota de recuperación cuatrimestral.\nNota: La documentación soporte de pago se conservara durante el cuatrimestre correspondiente a pago de trámite.\n', 'Imagen/image(14).png', ' ', 'Card'),
(2, 'Beca PRONABES y beca de educación superior CNBES (', 'Cumplir con los requisitos establecidos en las Convocatorias de la "CNBES" que publicaremos.\nResponsable: Ligia Nohemi López Hernández del área de Planeación, ubicada en UD2, planta alta.\n', 'Imagen/image(15).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE IF NOT EXISTS `certificados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Certificados parciales', 'Para obtener un Certificado Parcial requieres no tener adeudos económicos en Biblioteca, Talleres ni en Laboratorios.\n2 fotos tamaño ovalito b/n, fondo blanco, con retoque, auto adheribles, papel mate, de frente.\nHombres: saco obscuro, camisa blanca, corbata, sin barba, bigote y cabello recortado.\nMujeres: saco obscuro, blusa blanca, maquillaje discreto, sin aretes o con aretes discretos, cabello recogido.\nTiempo de trámite: mismo día.\nPago por trámite: $1,500.00\n', 'Imagen/image(5).png', ' ', 'Card'),
(2, 'Certificado y Título profesional', 'Para tramitar tu Certificado de Estudios así como el Título Profesional deberás descargar desde la pagina de la universidad www.uptlax.edu.mx la Constancia de No Adeudo de Áreas, recabaras el sello y la firma de no adeudos de: Biblioteca, Centro de Cómputo, Laboratorio de Carrera, Laboratorio de Idiomas y Administrativo.\nEntregaras Fotografías iguales: 2 t/título y 4 t/infantil.\nCaracterísticas: b/n fondo blanco, con retoque, adheribles, papel mate, de frente.\nHombres: saco obscuro, camisa blanca, corbata, sin barba, bigote y cabello recortado.\nMujeres: saco obscuro, blusa blanca, maquillaje discreto, sin aretes o con aretes discretos, cabello recogido.\nAnexaras el Comprobante de Donación bibliográfica o de equipo.\nEl oficio del Comité Académico de titulación que expide la Direccion de la Ingeniería.\nDeberás verificar las fechas de Titulación en el Calendario Académico vigente.\nPago por trámite: $1,500.00\n', 'Imagen/image(13).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credencial`
--

CREATE TABLE IF NOT EXISTS `credencial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `credencial`
--

INSERT INTO `credencial` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Credencial para alumnos de nuevo ingreso', 'Para tramitar tu credencial primero deberás verificar que tus datos sean correctos en tu cuenta sii.uptlax.edu.mx y completar tu información personal.\nServicios Escolares te avisara con anticipación el día que habrás de acudir par que te tomen la foto de tu credencial\nPor ultimo se te entrega tu credencial, misma que debes cuidar ya que es tu acceso a la Institución por estar habilitada para los torniquetes.\nTiempo de trámite: 15 días hábiles posteriores a la solicitud.\nPago por trámite: $50.00(incluido en la inscripción).\nNota: Recuerda que la credencial es tu identificación personal, intransferible y su mal uso causará sanciones.\n', 'Imagen/image(16).png', ' ', 'Card'),
(2, 'Reposición de credencial', 'En caso de robo o extravió tendrás que reportarla de inmediato a Servicios Escolares y solicitar la reposición al correo electrónico hermelinda.lara@uptlax.edu.mx\ncon copia a luisfernando.ramirez@uptlax.edu.mx \nEnseguida tendrás que realizar tu pago en caja.\nTiempo de trámite: 1 día hábil posterior a tu pago.\nPago por trámite: $50.00\n', 'Imagen/image(17).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `video` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Inscripción', 'Deberás descargar el formato de Solicitud de inscripción (Núm. FIHA) y Convenio en: sii.uptlax.edu.mx (llenar y presentar).\nDescargaras también, y llenaras el Formato de Incorporación de Estudiantes al IMSS(sii.uptlax.edu.mx).\n    -Vas a entregar 4 fotografías tamaño infantil b/n, adheribles( recientes e iguales).\nTu Certificado de Bachillerato (original y 2 copias).\nActa de nacimiento o en su defecto extracto (original y 2 copias).\nEl Certificado Médico con química sanguínea completa que incluya tu grupo sanguíneo expedido por el IMSS, SESA o ISSSTE.\nCopia de la CURP.\nTiempo de trámite: mismo día.\nPago por trámite: $2,400\nNota: Conservarás la documentación soporte del pago durante el cuatrimestre correspondiente a pago de trámite $2,400 ($1,000.00 Inscripción Anual, $1,250.00 Cuota Cuatrimestral, $100.00 Seguro Anual y $500.00 Credencial).\n', 'Imagen/image.png', ' ', 'Card'),
(2, 'Reinscripción', 'Deberás haber cubierto las cuotas de recuperación hasta el cuatrimestre inmediato y no tener adeudos en Biblioteca  ni en Laboratorios.\nDescargaras el recibo de pago del sii.uptlax.edu.mx y realiza el pago correspondiente en el Banco Santander. La cuenta y la referencia bancaria aparecen en el recibo. \nVerifica tu carga de asignaturas correspondientes 2 días después  de que concluya el proceso de reinscripción; y en caso de existir algún problema, por favor pasa a Servicios Escolares de manera inmediata con tu recibo de pago para solucionarlo.\nTiempo de trámite: mismo día.\nPago por trámite: $1,250.00\nNota: Conservaras la documentación soporte de pago durante el cuatrimestre correspondiente al pago del trámite.\n', 'Imagen/image(4).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `links_interes`
--

CREATE TABLE IF NOT EXISTS `links_interes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `links_interes`
--

INSERT INTO `links_interes` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Links de interés', 'PORTAL SERVICIOS ESCOLARES:\nhttps://sii.uptlax.edu.mx\nREGLAMENTO DE ESTUDIOS UPTlax:\nhttp://www.uptlax.edu.mx/UPT/PDF/NORMATECA_DIGITAL/NORMATIVIDAD_VIGENTE/Reglamento%20de%20Estudios.pdf\nCALENDARIO ACADEMICO:\nhttp://www.uptlax.edu.mx/PDF/calendario_academico/calen_a.pdf\nFACEBOOK UPTlax:\nhttps://www.facebook.com/universidad.politecnicadetlaxcala\nTODO TRAMITE ES PERSONAL Y DEBERAS RESPETAR LAS FECHAS ESTABLECIDAS EN EL CALENDARIO ACADEMICO, ya que no habrá dispensas de ningún tipo en este sentido.\n', 'Imagen/image(9)', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion`
--

CREATE TABLE IF NOT EXISTS `recuperacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `recuperacion`
--

INSERT INTO `recuperacion` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Exámenes de recuperación', 'Parta solicitar un Examen de recuperación, recuerda que no deberás tener adeudos económicos en Biblioteca, Talleres ni Laboratorios.\nPagaras $100 por cada examen a presentar.\nDescargaras el formato en sii.uptlax.edu.mx en la opción correspondiente a "Documentos Generales". Una vez que  lo hayas llenado con la información solicitada, lo entregaras en Servicios Escolares para su autorización.\nTiempo de trámite: mismo día.\nPago por tramite: $100.00 por examen.\nNota: Deberás conservar la documentación soporte de pago durante el cuatrimestre correspondiente a pago de trámite. \n', 'Imagen/image(2).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursamiento`
--

CREATE TABLE IF NOT EXISTS `recursamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `recursamiento`
--

INSERT INTO `recursamiento` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Recursamiento o asignaturas no cursadas', 'Descargaras el formato en sii.uptlax.edu.mx en la opción correspondiente a "Documentos Generales".\nUna vez que lo llenes con la información requerida; lo entregaras en Servicios Escolares, con el visto bueno de tu Tutor Académico y la autorización del Director del Programa Educativo.\nAnexa tu Historial Académico (PDF). \nTiempo de trámite: mismo día.\nPago por tramite: $200.00 por asignatura.\n(si estas en baja temporal pregunta por el pago del tramite en la caja)\nNota: Conservaras la documentación soporte de pago durante el cuatrimestre correspondiente a pago de trámite. \n', 'Imagen/image(3).png', ' ', 'Card');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revalidacion`
--

CREATE TABLE IF NOT EXISTS `revalidacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `revalidacion`
--

INSERT INTO `revalidacion` (`id`, `nombre`, `contenido`, `imagen`, `video`, `tipo`) VALUES
(1, 'Revalidación de estudios', 'Harás la solicitud al Director de tu Programa Educativo.\nIntegraras el Certificado parcial original de la Institución de Educación Superior de la que procedes. \nAnexaras también el comprobante de pago por derechos de equivalencia de estudio y el \nOficio de equivalencia emitido por el Director del Programa Académico correspondiente, \nTambién harás lo correspondiente a los Requisitos de INSCRIPCION (Depto. Pregunta por el pago del tramite en el área de caja).\nNota: Deberás conservarla documentación soporte de pago durante el cuatrimestre correspondiente a pago de trámite.\n', 'Imagen/image(1).png', ' ', 'Card');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
