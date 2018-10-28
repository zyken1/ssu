<?php include ("../php/Header.php"); ?>

<script language="javascript">
<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>
</script>

<?php include ("../php/Body.php"); ?>

<?php 
$sql_catalogo = "SELECT * FROM areas ;";
$resultado_catalogo = mysqli_query($conexion,$sql_catalogo);
// $fila_catalogo = mysqli_fetch_array($resultado_catalogo);
?>

<div class="container">
<!-- contacts card -->
<div class="card card-default" id="card_contacts">
    <div id="contacts" class="panel-collapse collapse show" aria-expanded="true" style="">
        <ul class="list-group pull-down" id="contact-list">
<?php 
while($fila_catalogo = mysqli_fetch_array($resultado_catalogo)){
?>
    <li class="list-group-item">
        <div class="row w-100">
            <div class="col-12 col-sm-6 col-md-3 px-0">
               <a href='<?php echo $fila_catalogo["ruta"]; ?>' target='_blank'>
                 <img src="../imagenes/pdf.jpg" alt="name" class="img-fluid rounded" style=" width:100px;">
               </a>
            </div>
            <div class="col-12 col-sm-6 col-md-9 text-center text-sm-left">
                <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
                <label class="name lead"><?php echo $fila_catalogo["nombre"]; ?></label>
                <br> 
<!--            <span class="fa fa-map-marker fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="5842 Hillcrest Rd"></span>
                <span class="text-muted">5842 Hillcrest Rd</span>
                <br>
                <span class="fa fa-phone fa-fw text-muted" data-toggle="tooltip" title="" data-original-title="(870) 288-4149"></span>
                <span class="text-muted small">(870) 288-4149</span>
                <br>
                <span class="fa fa-envelope fa-fw text-muted" data-toggle="tooltip" data-original-title="" title=""></span>
                <span class="text-muted small text-truncate">mike.ana@example.com</span> -->
            </div>
        </div>
    </li>
<?php
}
?>
        </ul>
        <!--/contacts list-->
    </div>
</div>
</div>

<?php include ("../php/Footer.php"); ?>