<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>

<!-- <form> -->
<div class="col-md-12 order-md-1">
          <h4 class="mb-3">Registro de Proveedores</h4>

          <form class="needs-validation" novalidate="" action="action.php"  method="post">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre del proveedor</label>
                <input type="text" class="form-control" name="Nombre_Proveedor" id="Nombre_Proveedor" placeholder="Nombre de la empresa" value="" required="">
                <div class="invalid-feedback">
                 Ingrese un nombre valido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Numero telefonico</label>
                <input type="text" class="form-control" name="Numero_Telefonico" id="Numero_Telefonico" placeholder="(452)-000-000-000" value="" required="">
                <div class="invalid-feedback">
                  Ingrese un numero valido.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="email">Correo Electrónico general <span class="text-muted"></span></label>
                <input type="email" class="form-control" name="Correo_general"  id="Correo_general">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="email">Correo Electrónico facturacion <span class="text-muted">(Opcional)</span></label>
                <input type="email" class="form-control" name="Correo_Facturacion" id="Correo_Facturacion">
                <div class="invalid-feedback">Please enter a valid email address for shipping updates.</div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Domicilio</label>
              <input type="text" class="form-control" name="Domicilio" id="Domicilio" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">Proporcione una direccion valida.</div>
            </div>

            <div class="mb-3">
            	<div>
              <label for="address2">Tipo de insumos</label>
              <input type="text" class="form-control" name="Tipos_Insumos" id="Tipos_Insumos" placeholder="Paneles, baterias, etc.">
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Area</label>
                <select class="custom-select d-block w-100" name="Area" id="Area" required="">
                  <option value="">Interconexion, calentadores, etc....</option>
                  <option>Interconexion</option>
                  <option>Autonomo</option>
                  <option>Calentadores</option>
                </select>
                <div class="invalid-feedback">Proporcione un estado valido.</div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="state">Estado</label>
                 <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese el estado.">
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Codigo postal</label>
                <input type="text" class="form-control" name="Codigo_Postal" id="Codigo_Postal" placeholder="" required="">
                <div class="invalid-feedback">
                  Codigo postal requerido.
                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="country">RFC</label>
                <input type="text" class="form-control" name="RFC" id="RFC" placeholder="" required="">
                <div class="invalid-feedback">
                  Codigo postal requerido.
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar informacion</button>              
            <hr class="mb-4">
          </form>
        </div>



<?php include ("../php/Footer.php"); ?>

