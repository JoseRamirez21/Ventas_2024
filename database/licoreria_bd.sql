-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2024 a las 23:55:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `licoreria_bd`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarcategoria` (IN `p_id` INT(11), IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	UPDATE categoria SET nombre=p_nombre,detalle=p_detalle,detalle=p_detalle WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarcompras` (IN `p_id` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	UPDATE compras SET id_producto=p_id_producto,cantidad=p_cantidad,precio=p_precio,id_trabajador=p_id_trabajador WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizardetalle_venta` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	UPDATE detalle_venta SET id_venta=p_id_venta,id_producto=p_id_producto,cantidad=p_cantidad WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarpagos` (IN `p_id` INT(11), IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	UPDATE pagos SET id_venta=p_id_venta,fecha_hora=p_fecha_hora,monto=p_monto,metodo_pago=p_metodo_pago,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarpersona` (IN `p_id` INT(11), IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_reg` DATETIME)   BEGIN
	UPDATE persona SET nro_identidad=p_nro_identidad,razon_social=p_razon_social,telefono=p_telefono,correo=p_correo,departamento=p_departamento,provincia=p_provincia,distrito=p_distrito,cod_postal=p_cod_postal,direccion=p_direccion,rol=p_rol,password=p_password,estado=p_estado,fecha_reg=p_fecha_reg WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarproducto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_id_categoria` INT(11), IN `p_fecha_vencimiento` DATE, IN `p_imagen` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	UPDATE producto SET codigo=p_codigo,nombre=p_nombre,detalle=p_detalle,precio=p_precio,id_categoria=p_id_categoria,fecha_vencimiento=p_fecha_vencimiento,imagen=p_imagen,id_proveedor=p_id_proveedor WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarsesiones` (IN `p_id` INT(11), IN `p_id_persona` INT(11), IN `fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `p_token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	UPDATE sesiones SET id_persona=p_id_persona,fecha_hora_inicio=fecha_hora_inicio,fecha_hora_fin=p_fecha_hora_fin,token=p_token,ip=p_ip WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarventa` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	UPDATE venta SET codigo=p_codigo,fecha_hora=p_fecha_hora,id_cliente=p_id_cliente,id_vendedor=p_id_vendedor,estado=p_estado WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcategoria` ()   BEGIN
	SELECT * FROM categoria;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcategoriaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM categoria WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcompras` ()   BEGIN
	SELECT * FROM compras;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarcomprasId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM compras WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscardetalle_venta` ()   BEGIN
	SELECT * FROM detalle_venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscardetalle_ventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM detalle_venta WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpagos` ()   BEGIN
	SELECT * FROM pagos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpagosId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM pagos WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpersona` ()   BEGIN
	SELECT * FROM persona;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarpersonaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM persona WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproductoId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM producto WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproductos` ()   BEGIN
	SELECT * FROM producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarsesiones` ()   BEGIN
	SELECT * FROM sesiones;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarsesionesId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM sesiones WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarventa` ()   BEGIN
	SELECT * FROM venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarventaId` (IN `p_id` INT(11))   BEGIN
	SELECT * FROM venta WHERE id=p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarcategoria` (IN `p_id` INT(11))   BEGIN
	DELETE FROM categoria WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarcompras` (IN `p_id` INT(11))   BEGIN
	DELETE FROM compras WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminardetalle_venta` (IN `p_id` INT(11))   BEGIN
	DELETE FROM detalle_venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarpagos` (IN `p_id` INT(11))   BEGIN
	DELETE FROM pagos WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarpersona` (IN `p_id` INT(11))   BEGIN
	DELETE FROM persona WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarproducto` (IN `p_id` INT(11))   BEGIN
	DELETE FROM producto WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarsesiones` (IN `p_id` INT(11))   BEGIN
	DELETE FROM sesiones WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarventa` (IN `p_id` INT(11))   BEGIN
	DELETE FROM venta WHERE id=p_id;
    SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcategoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
	DECLARE existe_categoria INT;
    DECLARE id INT;
    SET existe_categoria = (SELECT COUNT(*) FROM categoria WHERE nombre=p_nombre);
    
    IF existe_categoria=0 THEN
    	INSERT INTO categoria (nombre,detalle)
        	VALUES 
(p_nombre,p_detalle);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertcompras` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6,2), IN `p_id_trabajador` INT(11))   BEGIN
	DECLARE existe_compras INT;
    DECLARE id INT;
    SET existe_compras = (SELECT COUNT(*) FROM compras WHERE id_producto=p_id_producto);
    
    IF existe_compras=0 THEN
    	INSERT INTO compras (id_producto,cantidad,precio,id_trabajador)
        	VALUES 
(p_id_producto,p_cantidad,p_precio,p_id_trabajador);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertdetalle_venta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` INT(6))   BEGIN
	DECLARE existe_detalle_venta INT;
    DECLARE id INT;
    SET existe_detalle_venta = (SELECT COUNT(*) FROM detalle_venta WHERE id_venta=p_id_venta);
    
    IF existe_detalle_venta=0 THEN
    	INSERT INTO detalle_venta (id_venta,id_producto,cantidad)
        	VALUES 
(p_id_venta,p_id_producto,p_cantidad);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertpagos` (IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6,2), IN `p_metodo_pago` VARCHAR(20), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_pagos INT;
    DECLARE id INT;
    SET existe_pagos = (SELECT COUNT(*) FROM pagos WHERE id_venta=p_id_venta);
    
    IF existe_pagos=0 THEN
    	INSERT INTO pagos (id_venta,fecha_hora,monto,metodo_pago,estado)
        	VALUES 
(p_id_venta,p_fecha_hora,p_monto,p_metodo_pagop_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertpersona` (IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(130), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500))   BEGIN
    DECLARE existe_persona INT;
    DECLARE id INT;

    -- Verificar si la persona ya existe
    SET existe_persona = (SELECT COUNT(*) FROM persona WHERE nro_identidad = p_nro_identidad);
    
    IF existe_persona = 0 THEN
        -- Insertar la nueva persona
        INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password ) 
        VALUES (p_nro_identidad, p_razon_social, p_telefono, p_correo, p_departamento, p_provincia, p_distrito, p_cod_postal, p_direccion, p_rol, p_password);
        
        -- Obtener el ID de la nueva persona insertada
        SET id = LAST_INSERT_ID();
    ELSE
        SET id = 0; -- Persona ya existe
    END IF;

    -- Retornar el ID de la persona insertada o 0 si hubo un error
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertproducto` (IN `p_codigo` INT(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6,2), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_fecha_vencimiento` DATE, IN `p_imagen` VARCHAR(100), IN `p_id_proveedor` INT(11))   BEGIN
	DECLARE existe_producto INT;
    DECLARE id INT;
    SET existe_producto = (SELECT COUNT(*) FROM producto WHERE codigo=p_codigo);
    
    IF existe_producto=0 THEN
    	INSERT INTO producto (codigo,nombre,detalle,precio,stock,id_categoria,fecha_vencimiento,imagen,id_proveedor)
        	VALUES 
(p_codigo,p_nombre,p_detalle,p_precio,p_stock,p_id_categoria,p_fecha_vencimiento,p_imagen,p_id_proveedor);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertsesiones` (IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_fin` DATETIME, IN `token` VARCHAR(20), IN `p_ip` VARCHAR(20))   BEGIN
	DECLARE existe_sesiones INT;
    DECLARE id INT;
    SET existe_sesiones = (SELECT COUNT(*) FROM sesiones WHERE id_persona=p_id_persona);
    
    IF existe_sesiones=0 THEN
    	INSERT INTO sesiones (id_persona,fecha_hora_inicio,fecha_hora_fin,token,ip)
        	VALUES 
(p_id_persona,p_fecha_hora_inicio,p_fecha_hora_fin,token,p_ip);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertventa` (IN `p_codigo` VARCHAR(20), IN `p_fecha_hora` DATETIME, IN `p_id_cliente` INT(11), IN `p_id_vendedor` INT(11), IN `p_estado` INT(1))   BEGIN
	DECLARE existe_venta INT;
    DECLARE id INT;
    SET existe_venta = (SELECT COUNT(*) FROM venta WHERE codigo=p_codigo);
    
    IF existe_venta=0 THEN
    	INSERT INTO venta (codigo,fecha_hora,id_cliente,id_vendedor,estado)
        	VALUES 
(p_codigo,p_fecha_hora,p_id_cliente,p_id_vendedor,p_estado);
           SET id = LAST_INSERT_ID();
    ELSE
           SET id=0;
    END IF;
    SELECT id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `detalle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'vinos', 'vino blanco'),
(2, 'whisky', 'añejo'),
(4, 'vzdv', 'sdvsd'),
(5, 'etfh', 'sdgfh'),
(6, 'Vinos red xtreme', 'russ kaya'),
(7, 'ggh', 'hgh'),
(8, 'rojas verdes', 'weawe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `id_trabajador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `id_producto`, `cantidad`, `precio`, `id_trabajador`) VALUES
(1, 1, 1, 1.00, 1),
(2, 2, 1, 1.00, 2),
(3, 10, 12, 1.00, 2),
(4, 14, 12, 1.00, 2),
(5, 11, 12, 12.00, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `monto` decimal(6,2) DEFAULT NULL,
  `metodo_pago` varchar(20) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) NOT NULL,
  `razon_social` varchar(130) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `cod_postal` int(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha_reg` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `cod_postal`, `direccion`, `rol`, `password`, `estado`, `fecha_reg`) VALUES
(1, '76122823', 'jose', '900654123', 'jose@gmail.com', 'ayacucho', 'huanta', 'huanta', 123456, 'San Martin', 'proveedor', '123', 1, '2024-12-12 00:00:00'),
(2, '78965412', 'jota', '987456321', 'jota@gmail.com', 'Ayacucho', 'Huanta', 'Huanta', 51, 'Cedropata', 'trabajador', '123', 1, '2024-11-12 11:03:50'),
(3, '32456a', 'sdfa<', 'sdf', 'azsxdcf', 'zx', 'zx', 'zxz', 0, 'zxc', 'zxc', 'zxc', 0, '0000-00-00 00:00:00'),
(4, '23', 'sdf', 'sdfg', 'szdxf', 'zsdf', 'zdx', 'sd', 0, 'sd', 'sd', 'sd', 0, '0000-00-00 00:00:00'),
(5, '12', 'sdf', 's<dzfx<szdf', 'asdf', '<szdxs', 'df', 'sdf', 0, 'df', 'Proveedor', '$2y$10$ZIaoNV2IfuTazVEnWDWB5u1h25gEhbw9ttkli.LQgmQ7OVYJohGWO', 0, '2024-11-15 00:00:00'),
(6, '12', 'sdf', 's<dzfx<szdf', 'asdf', '<szdxs', 'df', 'sdf', 0, 'df', 'Proveedor', '$2y$10$9118tffZVf/GJc/B1IBGmeS/w6MkQNZoaFeGsfBMVzt72kNcefMRe', 0, '2024-11-15 00:00:00'),
(7, '12', 'sdf', 's<dzfx<szdf', 'asdf', '<szdxs', 'df', 'sdf', 0, 'df', 'Proveedor', '$2y$10$2V.Mf5KIvLhfAh3B/8mPzO3CITi0XIQ/A22H8vunIsh2xziXbUw.e', 0, '2024-11-15 00:00:00'),
(8, '12', 'sdf', 's<dzfx<szdf', 'asdf', '<szdxs', 'df', 'sdf', 0, 'df', 'Proveedor', '$2y$10$l/IkjXboGV.mcVJPCbnxiu1F61Tu/VZVR5rYuOt0.DiuNUKBDDNxS', 0, '2024-11-15 00:00:00'),
(9, '12', 'sdf', 's<dzfx<szdf', 'asdf', '<szdxs', 'df', 'sdf', 0, 'df', 'Proveedor', '$2y$10$i7j.6MCj7KOnLWNgcvxdRueIOQVT4VtF62ATwvbaGgij4QmujEfyi', 0, '2024-11-15 00:00:00'),
(10, '324a', 'sfdg', 'sdf', 'sdf', 'as', 'zxc', 'zxc', 0, 'xc', 'zxc', 'zxc', 0, '0000-00-00 00:00:00'),
(11, '3456a', 'szdxf', 'czdxf', 'zxc', 'xc', 'xcx', 'c', 0, 'd', 'Proveedor', '$2y$10$abhSH3l2npzTQVblIP3eN.rO4JaaiKXUqasPWfqKd6rq0kwFIy.VK', 0, '2024-11-21 00:00:00'),
(12, '3456a', 'szdxf', 'czdxf', 'zxc', 'xc', 'xcx', 'c', 0, 'd', 'Proveedor', '$2y$10$IRMXVpxxQlAG7PBUYcYz1uF2hSs2tFU083xnVbnlXygfZ0h/CLdE6', 0, '2024-11-21 00:00:00'),
(13, '3456a', 'szdxf', 'czdxf', 'zxc', 'xc', 'xcx', 'c', 0, 'd', 'trabajador', '$2y$10$V939oLC6xMC301mnl0k9.eREyTffz29.LpaA1lRVlTm0/P2LXmo4y', 0, '2024-11-21 00:00:00'),
(14, '3456a', 'szdxf', 'czdxf', 'zxc', 'xc', 'xcx', 'c', 0, 'd', 'trabajador', '$2y$10$bM.SB9qnJAqoq8vLkpmuGuXdyePkPhZXmQjU8KXg.nxAFQx7OtVai', 0, '2024-11-21 00:00:00'),
(15, '76122823', 'wqdqdqdw', 'qdqwd', 'wqdqwd', 'qww', 'wqw', 'wqw', 1234, 'wqw', 'trabajador', 'asdfg', 1, '2024-11-11 11:03:50'),
(16, '', '', '', '', '', '', '', 0, '', '', '', 0, '0000-00-00 00:00:00'),
(17, '12222222', 'df', 'asd', 'sad', 'sd', 'sd', 'sd', 0, 'sd', 'Cliente', '$2y$10$Icvzs4OubFzAkv9BOr3Pa.suQwOT.oQHQHkKMxzPoVnoHAxEBmSHi', 0, '2024-11-21 00:00:00'),
(18, '1234321', 'xtreme', '234', 'wedf@gmail', 'asd', 'sd', 'sd', 0, 'asd', 'Proveedor', '$2y$10$85vl2rrNiZKq60q2zKyZrecyT2w.Ro5qOt3yV9Cz1kHQJcAjmtLf2', 0, '2024-11-13 00:00:00'),
(19, '2002', 'ssd', '2344', '423', '4234', '423', '432', 324, '42', 'Cliente', '$2y$10$XvG5Fp1oaagpqbyrq6CTr.lVuQddqaqdMDfJ9okw5gwGAcQTGg4Du', 1, '2024-11-14 08:47:53'),
(20, '2312', 'dsf', '42', 'sdfs', 'sfd', 'sdf', 'sfd', 2345, 'sdf', 'Cliente', '$2y$10$MHT/nlee61fse.IwGlZcZewqrw4bzgyfkJuuAIVUAHQIlRCwaRmUy', 1, '2024-11-14 09:01:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `detalle` varchar(100) DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL,
  `stock` int(5) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `detalle`, `precio`, `stock`, `id_categoria`, `fecha_vencimiento`, `imagen`, `id_proveedor`) VALUES
(1, '001', 'Vino Rojo', 'San marco', 60.99, 20, 1, '2024-12-12', 'vino.jpg', 1),
(2, '002', 'whisky', 'real good', 45.00, 4, 2, '2024-10-10', 'whisky.png', 2),
(3, '003', 'vino blanco', 'San Marco', 9999.99, 20, 1, '2024-11-13', 'vinos.png', 1),
(4, '004', 'vinos liar', 'peruana', 23.00, 13, 1, '2024-11-08', '2002.png', 1),
(6, '006', 'vinos blue', 'chincha', 20.00, 25, 1, '2024-10-10', '1122.png', 1),
(7, '007', 'whisky red', 'xtreme', 45.00, 50, 2, '2024-10-10', '1122.png', 1),
(8, '008', 'vinos', 'xtreme uva', 28.00, 20, 1, '2024-10-03', '1.png', 2),
(9, '009', 'vinos whithe', 'ica version', 45.00, 56, 1, '2024-10-02', 'vinopisco.png', 1),
(10, '010', 'whisky', 'xtreme full', 34.00, 40, 1, '2024-10-03', '1.png', 1),
(11, '011', 'vino', 'uva and red', 34.00, 40, 1, '2024-10-03', 'vinossss.png', 1),
(12, '012', 'whisky', 'and whithe experienc', 112.00, 19, 2, '2024-10-11', 'das.png', 2),
(13, '013', 'Vino', 'Blanco', 12.00, 16, 1, '2024-11-14', 'imagen', 1),
(14, '015', 'Vino', 'Blanco', 12.00, 16, 1, '2024-11-14', 'imagen', 2),
(15, '016', 'Vino', 'Blanco Xtreme', 122.00, 16, 1, '2024-11-14', 'imagen', 2),
(16, '017', 'Vino', 'Blanco Xtreme', 122.00, 16, 1, '2024-11-14', 'imagen', 1),
(17, '018', 'Vino', 'Blanco Xtreme', 122.00, 16, 1, '2024-11-14', 'imagen', 1),
(18, '019', 'Vino', 'Blanco Xtreme', 122.00, 16, 1, '2024-11-14', 'imagen', 1),
(19, '20', 'vino', 'red', 11.00, 1, 1, '2024-11-12', 'imagen', 1),
(20, '21', 'vino', 'red', 11.00, 1, 1, '2024-11-12', 'imagen', 1),
(21, '2222', 'fxdf', 'dfgdgdf', 0.00, 24, 1, '0000-00-00', 'er', 1),
(22, '1212', 'sdd', 'szd', 3.00, 2, 1, '2024-11-22', 'imagen', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `fecha_hora_inicio` datetime DEFAULT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `token` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
