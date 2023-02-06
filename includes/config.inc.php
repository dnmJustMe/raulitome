<?php

define( 'NOMBRE_SERVIDOR', 'localhost' );
define( 'NOMBRE_USUARIO', 'root' );
define( 'PASSWORD', 'root' );
define( 'NOMBRE_BD', 'bd_raulitome' );


//rutas de la web
define( "SERVIDOR", "http://" . $_SERVER[ 'HTTP_HOST' ] . "/raulitome-prueba" );
define( "RUTA_ADMIN", SERVIDOR . "/administrar.php" );
define( "RUTA_GALERIAS", SERVIDOR . "/galerias" );


//rutas utiles
define( "RUTA_CSS", SERVIDOR . "/styles" );
define( "RUTA_JS", SERVIDOR . "/scripts" );
define( "RUTA_IMAGES", SERVIDOR . "/images" );
define( "RUTA_IMAGES_GALERIA", RUTA_GALERIAS . "/img" );