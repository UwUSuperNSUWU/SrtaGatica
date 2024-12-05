<?php include 'components/header.php'; ?>

<style>
.carousel {
    width: 90%;
    margin: 0 auto; /* Centra el carrusel horizontalmente */
}

.carousel-inner img {
    width: 100%;
    height: 500px; /* Ajusta esta altura según tus necesidades */
    object-fit: cover; /* Esto asegura que la imagen cubra el contenedor sin distorsionarse */
    border-radius: 10px; /* Bordes redondeados para las imágenes */
}

.carousel-caption {
    background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro transparente */
    padding: 10px; /* Espaciado interno */
    border-radius: 10px; /* Bordes redondeados */
}

.box {
    background-color: #fff; /* Fondo blanco para la caja */
    border-radius: 10px; /* Bordes redondeados */
    padding: 20px; /* Espaciado interno */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para la caja */
    margin-bottom: 20px; /* Espaciado inferior entre cajas */
}
.section {
    margin-top: 40px; /* Añade margen superior a las secciones */
    margin-bottom: 40px; /* Añade margen inferior a las secciones */
}
</style>

<div class="container mt-5 text-center">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido a mi página web</h1>
            <p class="lead">Esta es una página web simple creada como ejemplo utilizando Bootstrap.</p>
            <hr class="my-4">
            <p>Bootstrap facilita la creación de páginas web responsivas y atractivas.</p>
        </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://puntimmobiliari.com/wp-content/uploads/2021/08/venta-vivienda.jpg" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Texto sobre la imagen 1</h5>
                <p>Descripción adicional sobre la imagen 1.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://urbania.pe/blog/wp-content/uploads/2023/09/imovelwebcomunicacaoltda_quintoandarperu_image_638.jpeg" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Texto sobre la imagen 2</h5>
                <p>Descripción adicional sobre la imagen 2.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://www.rvc.cl/wp-content/uploads/2023/09/not-inmob-2.jpg" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Texto sobre la imagen 3</h5>
                <p>Descripción adicional sobre la imagen 3.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="row section">
    <div class="col-md-4 box">
        <h2>Sección 1</h2>
        <p>Contenido de la sección 1.</p>
    </div>
    <div class="col-md-4 box">
        <h2>Sección 2</h2>
        <p>Contenido de la sección 2.</p>
    </div>
    <div class="col-md-4 box">
        <h2>Sección 3</h2>
        <p>Contenido de la sección 3.</p>
    </div>
</div>

<section id="sobre-nosotros" class="mt-5 p-5 bg-light shadow-sm">
    <h2>Sobre Nosotros</h2>
    <p>
        Soy Claudia Gatica, Corredora de propiedades y asesora, dedicados a
        tu asesoría y atención para adquirir una vivienda. Ofrecemos
        múltiples formas de pago, diferentes tipos de ayuda y atención sobre
        las propiedades.
    </p>
</section>

<section id="nuestra-historia" class="mt-5 p-5 bg-light shadow-sm">
    <h2>Nuestra Historia</h2>
    <p>Fundada en 2000, nuestra empresa ha crecido constantemente, adaptándose a los cambios del mercado y siempre poniendo a nuestros clientes en primer lugar.</p>
</section>

<section id="conoce-al-equipo" class="mt-5 p-5 bg-light shadow-sm" style="padding-bottom: 30px;">
    <h2>Conoce al Equipo</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Claudia Andrea Gatica Díaz</h3>
            <p>
                Presentación de Claudia Andrea Gatica Díaz. Mi nombre es Claudia
                Andrea Gatica Díaz. Soy una profesional amable y sincera,
                comprometida en ayudar a las personas a encontrar su hogar ideal o
                su espacio seguro. A lo largo de mi vida, me he dedicado a asistir a
                personas en diversas áreas, y ahora he decidido dar un paso más
                grande para apoyar a aquellos que buscan adquirir su casa y avanzar
                en sus proyectos de vida. Además de mi labor en el sector
                inmobiliario, disfruto de la pintura en mis tiempos libres y cuido
                de mis queridos gatos. Si estás interesado en comprar una casa, no
                dudes en contactarme. Estoy aquí para ayudarte en cada paso del
                proceso.
            </p>
        </div>
    </div>
</section>



<?php include 'components/footer.php'; ?>