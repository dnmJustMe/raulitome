<?php
$titulo = "Raulitome - Administrador";
include_once( "includes/config.inc.php" );
include_once( "includes/documento-declaracion.php" );
?>
<body id="page-top">
<!-- Navigation -->
<div class="logo">
    <a href="<?php echo SERVIDOR ?>"><img src="images/logo-ps-transp.png" width="150" height="40" class="d-inline-block align-top" alt="Logo de Raulitome" loading="lazy"></a>
</div>
<a class="menu-toggle rounded" href="#">
<i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="smooth-scroll" href="#Header"></a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#Services">Servicios</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#Portfolio">Portafolio</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#Equipo">Equipo</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#About">Acerca de mi</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="smooth-scroll" href="#Contact">Contacto</a>
        </li>
    </ul>
</nav>
<!-- Header Starts -->
<section id="Banner" class="content-section">
<div  class="container content-wrap text-center">
<h1>Bienvenido Raul Navarro</h1>
<h3>
    <em>Listo para administrar raulitome.com</em>
</h3>
<div class="overlay">
</div>
</section>
<!-- Header Ends -->
<br>
<br>
<br>
<div class="container">
    <div class="block-heading">
        <h2>Las categorias disponibles son las siguientes:</h2>
    </div>
</div>
<?php
include_once( "includes/documento-cierre.php" )
?>
