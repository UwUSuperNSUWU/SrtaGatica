<?php include 'components/header.php'; ?>

<div class="container">
    <h1 class="mt-5">Galería de Casas</h1>
    <div class="row">
        <!-- Aquí se agregarán las tarjetas de las casas -->
        <?php
        // Ejemplo de datos de casas
        $casas = [
            ["id" => 1, "titulo" => "Casa 75mts cuadrados", "imagen" => "img/casas/Casa_75mts_cuadrados/exterior 1.PNG", "descripcion" => "SE VENDE CASA EN CURACAVÍ...Terreno 75 mts2 Estacionamiento para dos vehículos", "precio" => 68000000],
            ["id" => 2, "titulo" => "Casa 170mts cuadrados", "imagen" => "img/casas/Casa_170mts_cuadrados/exterior 1.PNG", "descripcion" => "Propiedad en centro de la comuna de Curacaví...la propiedad se puede adquirir con crédito hipotecario.", "precio" => 120000000],
            ["id" => 3, "titulo" => "Terreno Sector Urbano", "imagen" => "img/terrenos/parcela_challaco/exterior 4.PNG", "descripcion" => "TERRENO EN SECTOR URBANO...Curacaví. 440 MTRS CUADRADOS", "precio" => 58000000],
            ["id" => 4, "titulo" => "Parcela Sector urbano", "imagen" => "img/terrenos/terreno_sector_urbano/exterior 2.PNG", "descripcion" => "TERRENO (CESIÓN DE DERECHOS)...275 METRO CUADRADOS", "precio" => 26000000],
            ["id" => 5, "titulo" => "Parcela Don Cheto", "imagen" => "img/terrenos/parcela_don_cheto/Exterior 3.PNG", "descripcion" => "Casa con terraza y jardín.", "precio" => 200000],

            // Agregar más casas según sea necesario
        ];

        foreach ($casas as $casa) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<img src="' . $casa["imagen"] . '" class="card-img-top galeria-img" alt="' . $casa["titulo"] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $casa["titulo"] . '</h5>';
            echo '<p class="card-text">' . $casa["descripcion"] . '</p>';
            echo '<p class="card-text">$' . number_format($casa["precio"], 0, ',', '.') . '</p>';
            echo '<a href="detalle.php?id=' . $casa["id"] . '" class="btn btn-primary">Ver Detalles</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'components/footer.php'; ?>

