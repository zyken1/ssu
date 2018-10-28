
  </head>
  <body>
    <div id="wrapper">
      <header id="header">
          <!-- <img src="../imagenes/sips.png" id="logo" class="logo">           -->
            <!-- <img src="../imagenes/salle.png" alt="SIPS_imagen" class="SIPS_imagen"> -->
         
         <img src="../imagenes/logo.png" class="logo" class="img-fluid" alt="logo_vectores" class="logo_vectores" style="height: 145px;">
         <p class="text-right" id="nombre"><?php echo $_SESSION["Nombre"]; ?></p>
      </header>

<nav class="navbar navbar-expand-lg navbar-light" id="nav_SIPS">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <img src="../imagenes/golden.ico" alt="Logo" style="width:20px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <? include ("Menus/".$_SESSION["Menu"].".php"); ?>
  </div>
</nav>


<!-- p-5  Se refiere al padding del contenido -->
<div class="container-fluid p-5">