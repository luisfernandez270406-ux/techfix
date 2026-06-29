# TechFix

Sitio web desarrollado para la gestión y promoción de servicios técnicos para computadoras y laptops. El proyecto fue realizado utilizando HTML, CSS, PHP y MySQL, aplicando principios básicos de diseño UI/UX y almacenamiento de datos mediante una base de datos.

---

## Características

- Landing Page moderna y profesional.
- Sección de presentación.
- Catálogo de servicios.
- Sección de trabajos realizados.
- Formulario de contacto.
- Diseño responsive para dispositivos móviles.
- Menú hamburguesa responsive.
- Carrusel automático de trabajos realizados.
- Efecto Parallax en la sección principal.
- Acordeón de preguntas frecuentes.
- Formulario de contacto.
- Almacenamiento de solicitudes en MySQL.
- Minificación del HTML y CSS mediante Webpack.

---

## Tecnologías Utilizadas

- HTML5
- CSS3
- PHP
- MySQL
- XAMPP
- Git
- GitHub
- Figma
- JavaScript
- Webpack

---

## Estructura del Proyecto

```text
techFix/
│
├── index.html
├── conexion.php
├── guardar.php
│
├── css/
│   └── estilos.css
│
├── img/
│   ├── banner.jpg
│   ├── servicios/
│   └── trabajos/
│ 
├── dist/
│   ├── index.html
│   ├── css/
│   ├── guardar.php
│   ├── conexion.php
│   └── img/
│
├── webpack.config.js
├── package.json
├── package-lock.json
│
└── README.md
```

---

## Requisitos

Antes de ejecutar el proyecto debe tener instalado:

- XAMPP
- Apache
- MySQL
- Navegador Web
- Git 
- Node.js y npm

---

## Instalación

### 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

### 2. Mover el proyecto a htdocs

Copiar la carpeta del proyecto dentro de:

```text
C:\xampp\htdocs
```

Debe quedar de la siguiente forma:

```text
C:\xampp\htdocs\techFix
```

### 3. Iniciar XAMPP

Abrir XAMPP Control Panel e iniciar:

- Apache
- MySQL

### 4. Crear la base de datos

Ingresar a:

```text
http://localhost/phpmyadmin
```

Crear una base de datos llamada:

```text
techfix
```

### 5. Crear la tabla

Ejecutar la siguiente consulta SQL:

```sql
CREATE TABLE solicitudes (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    servicio VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    PRIMARY KEY (id)
);
```

### 6. Ejecutar el proyecto

Abrir en el navegador:

```text
http://localhost/techFix
```

---

### 7. Generar la versión optimizada con Webpack
Abrir una terminal en la carpeta del proyecto y ejecutar:

```bash
npm install
```
Luego ejecutar:

```bash
npm run build
```

Al finalizar, Webpack generará automáticamente una carpeta llamada dist, donde se almacenará la versión optimizada y minificada del proyecto.

## Funcionamiento

La página web permite:

1. Visualizar información sobre los servicios técnicos ofrecidos.
2. Consultar trabajos realizados.
3. Enviar solicitudes mediante un formulario.
4. Almacenar la información ingresada por los usuarios en una base de datos MySQL.

Flujo de funcionamiento:

```text
Usuario
   ↓
Formulario Web
   ↓
PHP
   ↓
MySQL
   ↓
Tabla Solicitudes
```

---

## Base de Datos

### Nombre de la Base de Datos

```text
techfix
```

### Tabla

```text
solicitudes
```

### Campos

| Campo | Tipo |
|---------|---------|
| id | INT |
| nombre | VARCHAR(100) |
| correo | VARCHAR(100) |
| telefono | VARCHAR(20) |
| servicio | VARCHAR(100) |
| descripcion | TEXT |

---
