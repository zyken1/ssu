<?php
session_start();
// include ("../php/Funciones.php");
// $sql_escuela = "SELECT escuela FROM escuela WHERE id_escuela = '".$_POST["id_Escuela"]."';";
// $resultado_escuela = mysqli_query($conexion,$sql_escuela);
// $fila_escuela = mysqli_fetch_array($resultado_escuela);

?>
<!-- <form name="Form_Prospecto" role="form" id="Form_Prospecto" class="contact-form" data-toggle="validator" class="shake"> -->
<form name="Form_Prospecto" id="Form_Prospecto" class="contact-form">
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h2>Registro Prospecto</h2>   
        <!-- Start Contact Form -->
        <!-- <form role="form" id="Form_Prospecto" class="contact-form" data-toggle="validator" class="shake"> -->
<!--           <div class="form-group col-md-3">
            <div class="controls">
              <input type="text" id="" class="form-control" placeholder="Name" >
              <div class="help-block with-errors"></div>
            </div>
          </div> -->
          <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required data-error="Please enter your name">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="" >
              </div>
           </div>

 		   <div class="row">
              <div class="col-md-3 mb-3">
               		<input type="email" class="email form-control" name="telefono" id="telefono" placeholder="Telefono">
              </div>
               <div class="col-md-3 mb-3">
               		<input type="email" class="email form-control" name="telefono2" id="telefono2" placeholder="Telefono 2 (Opcional)">
              </div>
              <div class="col-md-3 mb-3">
                	<input type="email" class="email form-control" name="celular" id="celular" placeholder="Celular  (Opcional)">
              </div>
           </div>

            <div class="row">
              <div class="col-md-6 mb-3">
               		<input type="email" class="email form-control" name="correo1" id="correo1" placeholder="Email">
              </div>
              <div class="col-md-6 mb-3">
                	<input type="email" class="email form-control" name="correo2" id="correo2" placeholder="Email 2  (Opcional)">
              </div>
           </div>

          <div class="form-group">
            <div class="controls">
              <input type="text" class="form-control" id="inputAddress" name="direccion" placeholder="1234 Numero Calle">
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="form-row">
		    <div class="form-group col-md-6">
		      <input type="text" class="form-control" name="estado" id="inputCity" placeholder="Estado" value="Michoacán">
		    </div>
		    <div class="form-group col-md-3">
		      <select id="inputState" name="ciudad" class="form-control">
		        <option selected>...</option>
		        <option>Uruapan</option>
		      </select>
		    </div>
		    <div class="form-group col-md-3">
		      <input type="text" class="form-control" name="codigo_postal" id="inputZip" placeholder="Codigo Postal">
		    </div>
		 </div>

        <div class="form-group">
          <div class="controls">
          <textarea id="message" rows="7" placeholder="Comentarios..." name="comentarios" class="form-control" onBlur="this.value=this.value.toUpperCase()" required></textarea>
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">SUBIR </span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fileToUpload" aria-describedby="inputGroupFileAddon01" onchange="upload_image();">
                    <label class="custom-file-label" for="inputGroupFile01">SELECCIONA UN RECIBO DE CFE</label>
              </div>
            </div>
        </form>
        <div class="upload-msg"></div>  <!--Para mostrar la respuesta del archivo llamado via ajax -->

        <p align="center"><input name="Guardar" id="submit" class="btn btn-success" type="button" id="Guardar" value="Guardar" onClick="Validar_Guardar()"></p>
        <!-- <button type="submit" id="submit" class="btn btn-success" onClick="Validar_Guardar()"></i>Guardar Datos</button> -->
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
      </form>

      <!-- End Contact Form -->
      </div>
      <div class="col-md-3">
        <h2 class="big-title">Información</h2>
        <div class="information">
          <div class="contact-datails">
            <p class="texto">Libramiento Oriente No. 3218-3 Col. San José de la Mina C.P. 60120 Uruapan, Mich., Méx.</p>
            <p class="texto">Tel Of. 01 (452) 119.18.96 </p>
            <p class="texto">E-mail: sistemassolaresdeuruapan@hotmail.com</p>
            <p class="texto">RFC: GHS080814-KT5</p>
            
<?php
// Switch para Abrir Un PDF externo y consultar datos segun el Área que corresponda
$_SESSION["id_area"] = $_POST["id_area"];
$area = $_POST["id_area"];

switch ($area) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "<a href='../catalogo/CALENTADORES-ACTUALIZADA-FEBRERO-2018.pdf' target='_blank'>";
        echo "<img src='../imagenes/calentador_solar.jpg' alt='Calentador Solar' style='width:184px;height:183px;'>"."</a>";
        echo "<p style='color: brown;'> CLICK EN LA IMAGEN </p>";
        break;
    case 2:
        echo "<a href='#' target='_blank'>";
        echo "<img src='../imagenes/calentador_solar.jpg' alt='Calentador Solar' style='width:184px;height:183px;'>"."</a>";
        echo "<p style='color: brown;'> CLICK EN LA IMAGEN </p>";
        break;
    case 3:
        echo "<a href='#' target='_blank'>";
        echo "<img src='../imagenes/calentador_solar.jpg' alt='Calentador Solar' style='width:184px;height:183px;'>"."</a>";
        echo "<p style='color: brown;'> CLICK EN LA IMAGEN </p>";
        break;
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Content Section  -->