-- ==========================================================
-- SCRIPT COMPLETO - BASE DE DATOS INOVATIE  (MySQL/MariaDB)
-- Corregido: tipos, longitudes VARCHAR, llaves, comentarios.
-- ==========================================================
CREATE DATABASE IF NOT EXISTS inovatie CHARACTER
SET
  utf8mb4 COLLATE utf8mb4_unicode_ci;

USE inovatie;

-- =========================
-- 1) CATÁLOGOS Y SEGURIDAD
-- =========================
CREATE TABLE
  IF NOT EXISTS tipo_usuario (
    id_tipo_usuario INT UNSIGNED AUTO_INCREMENT COMMENT 'PK del tipo de usuario',
    tipo VARCHAR(50) NOT NULL COMMENT 'Nombre corto del tipo (ej. ADMIN, CLIENTE)',
    descripcion VARCHAR(255) NULL COMMENT 'Descripción del tipo de usuario',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_tipo_usuario),
    UNIQUE KEY uk_tipo_usuario_tipo (tipo)
  ) ENGINE = InnoDB COMMENT = 'Catálogo de tipos de usuario';

CREATE TABLE
  IF NOT EXISTS usuarios (
    id_usuario INT UNSIGNED AUTO_INCREMENT COMMENT 'PK del usuario',
    usuario VARCHAR(60) NOT NULL COMMENT 'Nombre de usuario para inicio de sesión',
    correo VARCHAR(150) NOT NULL COMMENT 'Correo electrónico del usuario',
    password_hash VARCHAR(255) NOT NULL COMMENT 'Hash de contraseña',
    id_tipo_usuario INT UNSIGNED NOT NULL COMMENT 'FK al tipo de usuario',
    estatus ENUM ('A', 'B', 'P', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, B=Bloqueado, P=Pausado, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_usuario),
    UNIQUE KEY uk_usuarios_usuario (usuario),
    UNIQUE KEY uk_usuarios_correo (correo),
    KEY idx_usuarios_tipo (id_tipo_usuario),
    CONSTRAINT fk_usuarios_tipo_usuario FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario (id_tipo_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
  ) ENGINE = InnoDB COMMENT = 'Usuarios del sistema';

-- ===================
-- 2) PRODUCTOS / SKU
-- ===================
CREATE TABLE
  IF NOT EXISTS producto_base (
    id_producto_base INT UNSIGNED AUTO_INCREMENT COMMENT 'PK del producto base',
    producto VARCHAR(120) NOT NULL COMMENT 'Nombre del producto base',
    descripcion VARCHAR(500) NULL COMMENT 'Descripción general del producto base',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_producto_base),
    UNIQUE KEY uk_producto_base_producto (producto)
  ) ENGINE = InnoDB COMMENT = 'Catálogo de productos base';

CREATE TABLE
  IF NOT EXISTS categoria (
    id_categoria INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de categoría',
    id_producto_base INT UNSIGNED NOT NULL COMMENT 'FK al producto base',
    categoria VARCHAR(120) NOT NULL COMMENT 'Nombre de la categoría',
    descripcion VARCHAR(500) NULL COMMENT 'Descripción de la categoría',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_categoria),
    KEY idx_categoria_producto_base (id_producto_base),
    UNIQUE KEY uk_categoria_producto (id_producto_base, categoria),
    CONSTRAINT fk_categoria_producto_base FOREIGN KEY (id_producto_base) REFERENCES producto_base (id_producto_base) ON UPDATE CASCADE ON DELETE RESTRICT
  ) ENGINE = InnoDB COMMENT = 'Categorías por producto base';

CREATE TABLE
  IF NOT EXISTS codigo_sku (
    id_codigo_sku INT UNSIGNED AUTO_INCREMENT COMMENT 'PK del SKU',
    id_categoria INT UNSIGNED NOT NULL COMMENT 'FK a categoría',
    codigo_sku VARCHAR(60) NOT NULL COMMENT 'Código SKU único',
    descripcion VARCHAR(500) NOT NULL COMMENT 'Descripción del SKU',
    ambiente VARCHAR(100) NULL COMMENT 'Ambiente o contexto de uso',
    imagen VARCHAR(255) NULL COMMENT 'Ruta/URL de la imagen asociada',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_codigo_sku),
    UNIQUE KEY uk_codigo_sku_codigo (codigo_sku),
    KEY idx_codigo_sku_categoria (id_categoria),
    CONSTRAINT fk_codigo_sku_categoria FOREIGN KEY (id_categoria) REFERENCES categoria (id_categoria) ON UPDATE CASCADE ON DELETE RESTRICT
  ) ENGINE = InnoDB COMMENT = 'Códigos SKU de productos';

-- =========================
-- 3) CONTENIDO / MARKETING
-- =========================
CREATE TABLE
  IF NOT EXISTS alianzas (
    id_alianza INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de alianza',
    nombre_alianza VARCHAR(150) NOT NULL COMMENT 'Nombre de la alianza',
    descripcion VARCHAR(500) NOT NULL COMMENT 'Descripción de la alianza',
    tipo_alianza VARCHAR(80) NULL COMMENT 'Tipo o clasificación de la alianza',
    fecha_inicio DATETIME NULL COMMENT 'Fecha de inicio de la alianza',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_alianza)
  ) ENGINE = InnoDB COMMENT = 'Alianzas comerciales o estratégicas';

CREATE TABLE
  IF NOT EXISTS servicios (
    id_servicio INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de servicio',
    servicio VARCHAR(150) NOT NULL COMMENT 'Nombre del servicio',
    descripcion VARCHAR(500) NULL COMMENT 'Descripción del servicio',
    fecha_inicio DATETIME NULL COMMENT 'Fecha de inicio del servicio',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_servicio),
    UNIQUE KEY uk_servicios_servicio (servicio)
  ) ENGINE = InnoDB COMMENT = 'Servicios ofrecidos';

CREATE TABLE
  IF NOT EXISTS segmentos (
    id_segmento INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de segmento',
    segmento VARCHAR(120) NOT NULL COMMENT 'Nombre del segmento',
    descripcion VARCHAR(500) NULL COMMENT 'Descripción del segmento',
    fecha_inicio DATETIME NULL COMMENT 'Fecha de inicio del segmento',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_segmento),
    UNIQUE KEY uk_segmentos_segmento (segmento)
  ) ENGINE = InnoDB COMMENT = 'Segmentos de mercado';

CREATE TABLE
  IF NOT EXISTS slider (
    id_slider INT UNSIGNED AUTO_INCREMENT COMMENT 'PK del slider',
    titulo VARCHAR(150) NOT NULL COMMENT 'Título principal de la diapositiva',
    subtitulo VARCHAR(255) NULL COMMENT 'Subtítulo opcional',
    imagen_pantalla VARCHAR(255) NOT NULL COMMENT 'Ruta/URL de imagen para escritorio',
    imagen_movil VARCHAR(255) NULL COMMENT 'Ruta/URL de imagen para móvil',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_slider)
  ) ENGINE = InnoDB COMMENT = 'Banners del carrusel principal';

-- ==================
-- 4) CONTACTO / CRM
-- ==================
CREATE TABLE
  IF NOT EXISTS contacto (
    id_contacto INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de mensaje de contacto',
    fecha_envio DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de envío',
    mensaje VARCHAR(1000) NOT NULL COMMENT 'Contenido del mensaje',
    emisor VARCHAR(150) NOT NULL COMMENT 'Nombre o correo del remitente',
    receptor VARCHAR(150) NOT NULL COMMENT 'Nombre o correo del destinatario',
    producto VARCHAR(150) NOT NULL COMMENT 'Producto sobre el que consulta',
    contacto VARCHAR(100) NOT NULL COMMENT 'Canal de contacto (teléfono/correo/etc.)',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_contacto)
  ) ENGINE = InnoDB COMMENT = 'Mensajes recibidos desde formularios de contacto';

-- ====================
-- 5) PERFIL DE USUARIO
-- ====================
CREATE TABLE
  IF NOT EXISTS persona (
    id_persona INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de persona',
    id_usuario INT UNSIGNED NOT NULL COMMENT 'FK al usuario',
    nombre VARCHAR(80) NOT NULL COMMENT 'Nombre(s) de la persona',
    apellido_paterno VARCHAR(80) NOT NULL COMMENT 'Apellido paterno',
    apellido_materno VARCHAR(80) NOT NULL COMMENT 'Apellido materno',
    telefono VARCHAR(20) NOT NULL COMMENT 'Teléfono de contacto',
    fecha_nacimiento DATE NOT NULL COMMENT 'Fecha de nacimiento',
    sexo ENUM ('M', 'F', 'X') NOT NULL COMMENT 'M=Masculino, F=Femenino, X=No especificado',
    curp CHAR(18) NOT NULL COMMENT 'CURP de la persona',
    rfc CHAR(13) NOT NULL COMMENT 'RFC de la persona',
    codigo_postal CHAR(5) NOT NULL COMMENT 'Código postal',
    calle VARCHAR(120) NULL COMMENT 'Calle',
    numero VARCHAR(20) NULL COMMENT 'Número exterior/interior',
    colonia VARCHAR(120) NULL COMMENT 'Colonia',
    municipio_delegacion VARCHAR(120) NOT NULL COMMENT 'Municipio o delegación',
    estado VARCHAR(120) NOT NULL COMMENT 'Estado o entidad federativa',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_persona),
    UNIQUE KEY uk_persona_id_usuario (id_usuario),
    UNIQUE KEY uk_persona_curp (curp),
    UNIQUE KEY uk_persona_rfc (rfc),
    CONSTRAINT fk_persona_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT
  ) ENGINE = InnoDB COMMENT = 'Datos personales asociados al usuario';

CREATE TABLE
  IF NOT EXISTS empresa (
    id_empresa INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de empresa',
    id_usuario INT UNSIGNED NOT NULL COMMENT 'FK al usuario propietario/administrador',
    id_persona INT UNSIGNED NULL COMMENT 'FK opcional al contacto persona',
    nombre_empresa VARCHAR(180) NOT NULL COMMENT 'Razón social o nombre comercial',
    giro VARCHAR(120) NOT NULL COMMENT 'Giro empresarial',
    telefono VARCHAR(20) NOT NULL COMMENT 'Teléfono de la empresa',
    enlace VARCHAR(255) NOT NULL COMMENT 'Enlace de referencia o landing',
    pagina_web VARCHAR(255) NOT NULL COMMENT 'Sitio web oficial',
    whatsapp VARCHAR(20) NOT NULL COMMENT 'Número de WhatsApp',
    rfc CHAR(13) NOT NULL COMMENT 'RFC de la empresa',
    codigo_postal CHAR(5) NOT NULL COMMENT 'Código postal',
    calle VARCHAR(120) NULL COMMENT 'Calle',
    numero VARCHAR(20) NULL COMMENT 'Número exterior/interior',
    colonia VARCHAR(120) NULL COMMENT 'Colonia',
    municipio_delegacion VARCHAR(120) NOT NULL COMMENT 'Municipio o delegación',
    estado VARCHAR(120) NOT NULL COMMENT 'Estado o entidad federativa',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_empresa),
    UNIQUE KEY uk_empresa_id_usuario (id_usuario),
    UNIQUE KEY uk_empresa_rfc (rfc),
    KEY idx_empresa_id_persona (id_persona),
    CONSTRAINT fk_empresa_usuario FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario) ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT fk_empresa_persona FOREIGN KEY (id_persona) REFERENCES persona (id_persona) ON UPDATE CASCADE ON DELETE SET NULL
  ) ENGINE = InnoDB COMMENT = 'Datos empresariales asociados al usuario';

CREATE TABLE
  IF NOT EXISTS redes_sociales (
    id_red_social INT UNSIGNED AUTO_INCREMENT COMMENT 'PK de red social',
    nombre_red VARCHAR(60) NOT NULL COMMENT 'Nombre de la red social (Facebook, Instagram, etc.)',
    url VARCHAR(255) NOT NULL COMMENT 'URL de perfil o página',
    estatus ENUM ('A', 'I', 'E') NOT NULL DEFAULT 'A' COMMENT 'A=Activo, I=Inactivo, E=Eliminado',
    fecha_creacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de creación del registro',
    fecha_modificacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Fecha de última modificación',
    usuario_creacion VARCHAR(60) NOT NULL DEFAULT 'CREACION_INICIAL' COMMENT 'Usuario/sistema que creó el registro',
    PRIMARY KEY (id_red_social),
    UNIQUE KEY uk_redes_sociales_nombre_red (nombre_red)
  ) ENGINE = InnoDB COMMENT = 'Catálogo de redes sociales';