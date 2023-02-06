<?php
$titulo = "Iniciar sesión";
include_once( "includes/Redireccion.inc.php" );
include_once( "includes/config.inc.php" );
include_once( "includes/documento-declaracion.php" );

if ( isset( $_POST[ 'entrar' ] ) ) {
    if ( $_POST[ 'user' ] == "daniel" && $_POST[ 'password' ] == "123" ) {
        Redireccion::redirigir( RUTA_ADMIN );
    }
}

?>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 login">
            <form class="text-center" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                    <label for="user" class="float-left">
                        Usuario
                    </label>
                    <input type="text" class="form-control" name="user" aria-describedby="User" autofocus>
                </div>
                <div class="form-group">
                    <label for="password" class="float-left">
                        Contraseña
                    </label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary" name="entrar">Entrar</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once( "includes/documento-cierre.php" )
?>