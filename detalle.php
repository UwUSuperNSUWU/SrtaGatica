<?php include 'components/header.php'; ?>

<style>
.carousel-inner img {
    width: 100%;
    height: 500px; /* Ajusta esta altura según tus necesidades */
    object-fit: contain; /* Esto asegura que la imagen se ajuste al contenedor sin recortarse */
    background-color: #000; /* Color de fondo para que los bordes sean visibles */
    border-radius: 15px; /* Bordes redondeados para las imágenes */
}

.container-detalle {
    display: flex;
    flex-wrap: wrap;
    background-color: #fff; /* Fondo blanco para la caja */
    border-radius: 15px; /* Bordes redondeados para la caja */
    padding: 20px; /* Espaciado interno */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para la caja */
    margin: 20px; /* Margen externo */
}

.carousel-container {
    flex: 1;
    min-width: 300px; /* Ajusta según tus necesidades */
}

.text-container {
    flex: 1;
    min-width: 300px; /* Ajusta según tus necesidades */
    padding: 20px;
}
</style>

<div class="container-detalle">
    <?php
    $casas = [
        1 => [
            "titulo" => "Casa_75mts_cuadrados",
            "imagenes" => [
                "Img/casas/Casa_75mts_cuadrados/exterior_1.PNG",
                "Img/casas/Casa_75mts_cuadrados/terraza_1.PNG",
                "Img/casas/Casa_75mts_cuadrados/patio_1.PNG"
            ],
            "descripcion" => "Hermosa Parcela Sector Cercano al Pueblo.",
            "detalles" => "SE VENDE CASA EN CURACAVÍ...Terreno 75 mts2 Estacionamiento para dos vehículos",
            "precio" => "68.000.000"
        ],
        2 => [
            "titulo" => "Casa_170mts_cuadrados",
            "imagenes" => [
                "Img/casas/Casa_170mts_cuadrdados/exterior_1.png",
                "Img/casas/Casa_170mts_cuadrdados/interior_1.png",
                "Img/casas/Casa_170mts_cuadrdados/patio_1.png",
                 "Img/casas/Casa_170mts_cuadrdados/patio_2.png",
                  "Img/casas/Casa_170mts_cuadrdados/exterior_2.png"
            ],
            "descripcion" => "Casa Dentro De Curacavi.",
            "detalles" => "Propiedad en centro de la comuna de Curacaví...la propiedad se puede adquirir con crédito hipotecario.",
            "precio" => "120.000.000"
        ],
        3 => [
            "titulo" => "TERRENO_SECTOR_URBANO_440MTS",
            "imagenes" => [
                "Img/casas/Casa_75mts_cuadrados/exterior 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/terraza 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/patio 1.PNG"
            ],
            "descripcion" => "Hermosa casa frente al mar.",
            "detalles" => "Esta casa cuenta con 3 habitaciones, 2 baños y una vista espectacular al mar.",
            "precio" => " 58.000.000"
        ],
        4 => [
            "titulo" => "PARCELA_SECTOR_URBANO_275MTS",
            "imagenes" => [
                "Img/casas/Casa_75mts_cuadrados/exterior 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/terraza 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/patio 1.PNG"
            ],
            "descripcion" => "Hermosa casa frente al mar.",
            "detalles" => "Esta casa cuenta con 3 habitaciones, 2 baños y una vista espectacular al mar.",
            "precio" => "26.000.000"
        ],
        5 => [
            "titulo" => "PARCELA_CONDOMINIO",
            "imagenes" => [
                "Img/casas/Parcela_Don_Cheto/Exterior_1.PNG",
                "Img/casas/Parcela_Don_Cheto/Exterior_2.PNG",
                "Img/casas/Parcela_Don_Cheto/Exterior_3.PNG",
                "Img/casas/Parcela_Don_Cheto/Inetrior_Don_cheto_1.PNG",
                "Img/casas/Parcela_Don_Cheto/Inetrior_don_cheto_2.PNG"
            ],
            "descripcion" => "Hermosa casa frente al mar.",
            "detalles" => "Esta casa cuenta con 3 habitaciones, 2 baños y una vista espectacular al mar.",
            "precio" => "195000000"
        ],
        6 => [
            "titulo" => "Casa_75mts_cuadrados",
            "imagenes" => [
                "Img/casas/Casa_75mts_cuadrados/exterior 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/terraza 1.PNG",
                "Img/casas/Casa_75mts_cuadrados/patio 1.PNG"
            ],
            "descripcion" => "Hermosa casa frente al mar.",
            "detalles" => "Esta casa cuenta con 3 habitaciones, 2 baños y una vista espectacular al mar.",
            "precio" => "200000"
        ],
        // Agregar más casas según sea necesario
    ];

    // Obtener el ID de la casa desde la URL
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    // Verificar si la casa existe
    if (isset($casas[$id])) {
        $casa = $casas[$id];
        echo '<div class="carousel-container">';
        echo '<div id="carouselCasa' . $id . '" class="carousel slide" data-ride="carousel">';
        echo '<div class="carousel-inner">';
        foreach ($casa["imagenes"] as $index => $imagen) {
            $active = $index === 0 ? 'active' : '';
            echo '<div class="carousel-item ' . $active . '">';
            echo '<img src="' . $imagen . '" class="d-block w-100" alt="' . $casa["titulo"] . '">';
            echo '</div>';
        }
        echo '</div>';
        echo '<a class="carousel-control-prev" href="#carouselCasa' . $id . '" role="button" data-slide="prev">';
        echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
        echo '<span class="sr-only">Previous</span>';
        echo '</a>';
        echo '<a class="carousel-control-next" href="#carouselCasa' . $id . '" role="button" data-slide="next">';
        echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
        echo '<span class="sr-only">Next</span>';
        echo '</a>';
        echo '</div>';
        echo '</div>';

        echo '<div class="text-container">';
        echo '<h1 class="mt-5">' . $casa["titulo"] . '</h1>';
        echo '<p class="mt-3">' . $casa["descripcion"] . '</p>';
        echo '<p>' . $casa["detalles"] . '</p>';
        echo '<p> Precio: '. $casa["precio"] . '</p>';
        echo '</div>';
    } else {
        echo '<h1 class="mt-5">Casa no encontrada</h1>';
        echo '<p>Lo sentimos, pero la casa que estás buscando no existe.</p>';
    }
    ?>
</div>

<?php include 'components/footer.php'; ?>

<?php include 'components/footer.php'; ?>
