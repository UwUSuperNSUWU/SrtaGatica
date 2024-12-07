<?php include 'components/header.php'; ?>

<div class="container">
    <h1 class="mt-5">Galería de Casas</h1>
    <div class="row">
        <!-- Aquí se agregarán las tarjetas de las casas -->
        <?php
        // Ejemplo de datos de casas
        $casas = [
            ["id" => 1, "CASA 75MTS '2" => "Casa 75mts cuadrados", "imagen" => "img/casas/Casa_75mts_cuadrados/exterior 1.PNG", "descripcion" => "SE VENDE CASA EN CURACAVÍ
Cercana a avenida principal, a locomoción colectiva, municipalidad y comercio.
Casa de dos pisos
3 dormitorios  en segundo piso
1 baño
cocina 
Living/comedor
Sector seguro y tranquilo
50 mts2 aprox. entre casa y  cobertizo para estacionamiento  todo regularizado.
Terreno 75 mts2
Estacionamiento para dos vehículos", "precio" => 68.000.000],
            ["id" => 2, "CASA 170MTS '2" => "Casa 170mts cuadrados", "imagen" => "img/casas/Casa_170mts_cuadrados/exterior 1.PNG", "descripcion" => "Propiedad en centro de la comuna de curacaví,  perfecta para uso habitacional más colocar un negocio, total terreno de 170 metros cuadrados,  posee dos casas, cada una  con cocina, living/comedor,  baño y dos dormitorios en total de  60 mtrs cuadrados.
propiedad con recepción final 
ya me encuentro agendado visitas
la propiedad se puede adquirir  con crédito hipotecario y recursos propios para el pie. si estás  interesad@, hablame para más detalles.", "precio" => $120.000.000],
            ["id" => 3, "TERRENO SECTOR URBANO 440MTS '2" => "Terreno Sector Urbano", "imagen" => "img/terrenos/parcela_challaco/exterior 4.PNG", "descripcion" => "TERRENO EN SECTOR URBANO
Curacaví ❤️
440 MTRS CUADRADOS
SECTOR TRANQUILO Y RELATIVAMENTE CERCA A LA AVENIDA PRINCIPAL", "precio" => 58.000.000],
            ["id" => 4, "PARCELA SECTOR URBANO 275MTS '2" => "Parcela Sector urbano", "imagen" => "img/terrenos/terreno_sector_urbano/exterior 2.PNG", "descripcion" => "TERRENO (CESIÓN DE DERECHOS) 
Sector  curacaví
DOCUMENTOS REVISADOS CON ABOGADO, DERECHOS PLENAMENTE TRANSFERIBLES,  TERRENO CUENTA CON ACCESO A LUZ,  NO TIENE AGUA POR EL MOMENTO, MIENTRAS PUEDEN USAR ESTANQUES.
Información importante
La cesión de derechos puede ser de distintos tipos:
Cesión de derechos de una propiedad
El cesionario adquiere todos los derechos y obligaciones que el cedente asumió previamente mediante un contrato de cesión de derechos. 
Cesión de derechos hereditarios
El cedente transfiere la totalidad o una cuota de su derecho real de herencia a otro heredero o a un tercero. Para que pueda haber una cesión de derechos de herencia, es necesario que la sucesión esté abierta.
275 METRO CUADRADOS .", "precio" => 26.000.000],
            ["id" => 5, "PARCELA CAMINO 'EL TORO'" => "Parcela Don Cheto", "imagen" => "img/terrenos/parcela_don_cheto/Exterior 3.PNG", "descripcion" => "Casa con terraza y jardín.", "precio" => 200000],

            // Agregar más casas según sea necesario
        ];

        foreach ($casas as $casa) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<img src="' . $casa["imagen"] . '" class="card-img-top galeria-img" alt="' . $casa["titulo"] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $casa["titulo"] . '</h5>';
            echo '<p class="card-text">' . $casa["descripcion"] . '</p>';
            echo '<p class="card-text">' . $casa["precio"] . '</p>';
            echo '<a href="detalle.php?id=' . $casa["id"] . '" class="btn btn-primary">Ver Detalles</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php include 'components/footer.php'; ?>
