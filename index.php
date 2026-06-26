<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
    <div class="logo">
        <h1>TechFix</h1>
    </div>
    <div class="menu-toggle" id="menu-toggle">
        ☰
    </div>

    <nav id="menu">
        <a href="#inicio">Inicio</a>
        <a href="#servicios">Servicios</a>
        <a href="#trabajos">Trabajos</a>
        <a href="#contacto">Contacto</a>
    </nav>
</header>

<section id="inicio" class="hero">

    <div class="overlay"></div>

    <div class="hero-contenido">

        <h2>Servicio Técnico Profesional</h2>

        <h3>Computadoras y Laptops</h3>

        <p>
            Reparación, mantenimiento y optimización de equipos.
        </p>

        <a href="#contacto" class="btn">
            Solicitar Servicio
        </a>

    </div>

</section>

<section id="servicios" class="servicios">

    <div class="titulo-seccion">
        <p>Nuestros Servicios</p>
        <h2>SERVICIOS DESTACADOS</h2>
    </div>

    <div class="grid-servicios">

        <!-- Card 1 -->
        <article class="card">
            <img src="img/servicios/formateo.png" alt="Formateo">

            <div class="contenido-card">
                <h3>Formateo de Equipos</h3>

                <p>
                    Instalación limpia del sistema operativo y configuración inicial.
                </p>
            </div>
        </article>

        <!-- Card 2 -->
        <article class="card">
            <img src="img/servicios/virus.jpg" alt="Virus">

            <div class="contenido-card">
                <h3>Eliminación de Virus</h3>

                <p>
                    Limpieza de malware y protección del sistema.
                </p>
            </div>
        </article>

        <!-- Repetimos hasta completar 6 -->
         <!-- Card 3 -->
        <article class="card">
            <img src="img/servicios/optimizacion.jpg" alt="Optimización">

            <div class="contenido-card">
                <h3>Optimización de equipos</h3>

                <p>
                    Mejoramos la velocidad y estabilidad de tu computadora.
                </p>
            </div>
        </article>
         <!-- Card 4 -->
        <article class="card">
            <img src="img/servicios/Mantenimiento.jpg" alt="mantenimiento">

            <div class="contenido-card">
                <h3>Mantenimiento de equipos</h3>

                <p>
                    Limpieza interna y revisión de componentes.
                </p>
            </div>
        </article>
         <!-- Card 5 -->
        <article class="card">
            <img src="img/servicios/Respaldo.png" alt="Respaldo">

            <div class="contenido-card">
                <h3>Respaldo de Datos</h3>

                <p>
                    Protección, recuperación y transferencia segura de archivos importantes.
                </p>
            </div>
        </article>
         <!-- Card 6 -->
        <article class="card">
            <img src="img/servicios/Software.jpg" alt="Software">

            <div class="contenido-card">
                <h3>Instalación de Software</h3>

                <p>
                    Instalación y configuración de programas, controladores y herramientas.
                </p>
            </div>
        </article>
        
    </div>

</section>

<section id="trabajos" class="trabajos">

    <div class="titulo-seccion">

        <p>Nuestros Proyectos</p>

        <h2>TRABAJOS REALIZADOS</h2>

    </div>

    <div class="galeria carrusel">

        <div class="trabajo">
            <img src="img/trabajos/trabajo1.jpg" alt="Trabajo 1">

            <div class="info-trabajo">
                <h3>Mantenimiento Completo</h3>
            </div>
        </div>

        <div class="trabajo">
            <img src="img/trabajos/trabajo2.jpg" alt="Trabajo 2">

            <div class="info-trabajo">
                <h3>Instalación de Software</h3>
            </div>
        </div>

        <div class="trabajo">
            <img src="img/trabajos/trabajo3.png" alt="Trabajo 3">

            <div class="info-trabajo">
                <h3>Recuperación de Datos</h3>
            </div>
        </div>

        <div class="trabajo">
            <img src="img/trabajos/trabajo4.jpg" alt="Trabajo 4">

            <div class="info-trabajo">
                <h3>Formateo e Instalación de Windows</h3>
            </div>
        </div>

    </div>

</section>
<section id="contacto" class="contacto">

    <div class="titulo-seccion">
        <p>Contáctanos</p>
        <h2>SOLICITAR SERVICIO</h2>
    </div>

    <form action="guardar.php" method="POST">

        <input
            type="text"
            name="nombre"
            placeholder="Nombre completo"
            required>

        <input
            type="email"
            name="correo"
            placeholder="Correo electrónico"
            required>

        <input
            type="text"
            name="telefono"
            placeholder="Teléfono"
            required>

        <input
            type="text"
            name="servicio"
            placeholder="Servicio requerido"
            required>

        <textarea
            name="descripcion"
            placeholder="Describe el problema"
            rows="5"
            required>
        </textarea>

        <button type="submit">
            Enviar Solicitud
        </button>

    </form>

</section>
<footer>

    <div class="footer-contenido">

        <h3>TechFix</h3>

        <p>
            Servicio técnico profesional para computadoras y laptops.
        </p>

        <p>
            © 2026 Todos los derechos reservados.
        </p>

    </div>

</footer>
<script>

const boton = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");
const enlaces = document.querySelectorAll("#menu a");

boton.addEventListener("click", function(){

    menu.classList.toggle("activo");

    if(menu.classList.contains("activo")){
        boton.innerHTML="✕";
    }else{
        boton.innerHTML="☰";
    }

});

enlaces.forEach(function(link){

    link.addEventListener("click", function(){

        menu.classList.remove("activo");
        boton.innerHTML="☰";

    });

});

</script>
<script>

const trabajos = document.querySelectorAll(".trabajo");

let actual = 0;

setInterval(function(){

    actual++;

    if(actual >= trabajos.length){
        actual = 0;
    }

    trabajos.forEach(function(item){

        item.style.transform =
        `translateX(-${actual * 100}%)`;

    });

},4000);

</script>


    
</body>
</html>