function reload() {
    location.reload(true);
    // alert("Hello");
}

// JavaScript Document
function Leyenda_Bien(){
divResultado2 = document.getElementById("Resultado2");
divResultado2.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Bien! </strong> Datos Guardados Exitosamente <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>';

}

function Hoja_Prospecto_Registro(){  //Archivo origen: Prospecto.php
    divResultado = document.getElementById("Resultado"); //donde se mostrará el resultado
    id_area = document.Formulario_Area.Combo_Area.value;    //tomamos el valor de la lista desplegable
divResultado.innerHTML='<p align="center">Procesando...<br><img src="../imagenes/loading.gif" /></p>';

    $.ajax({
      url: '../ajax/Empleado/Prospecto_Registro_Hoja.php',
      type: 'POST',
      data: "id_area="+id_area,
      success: function(respuesta) {
          divResultado.innerHTML = respuesta; //mostrar resultados en esta capa
          // alert( "success" );
      }
    });
}


function Prospecto_Registro(){    
  divResultado = document.getElementById("Resultado");
  divResultado2 = document.getElementById("Resultado2");
  var datos = $('#Form_Prospecto').serialize();
  divResultado2.innerHTML='<p align="center">Procesando...<br><img src="../imagenes/loading.gif" /></p>';

  $.ajax({
    url: '../ajax/Empleado/Prospecto_Registro_Sql.php',
    type: 'POST',
    data: datos,
    success: function(respuesta){
    if (respuesta == "false") {
        divResultado2.innerHTML = "&nbsp;"
        alert("No hay registros para los datos seleccionados.\nVerifica los datos."); //mostrar resultados en un alert
      } else //Leyenda_Bien();
        divResultado.innerHTML='<p>&nbsp;</p>';
        divResultado2.innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Bien! </strong> Datos Guardados Exitosamente <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span> </button></div>';
        myVar = setTimeout(reload, 2000);
    }
  });
}


function upload_image(){//Funcion encargada de enviar el archivo via AJAX
      $(".upload-msg").text('Cargando...');
      var inputFileImage = document.getElementById("fileToUpload");
      var file = inputFileImage.files[0];
      var data = new FormData();
      data.append('fileToUpload',file);
      
      /*jQuery.each($('#fileToUpload')[0].files, function(i, file) {
        data.append('file'+i, file);
      });*/
            
      $.ajax({
        url: "../ajax/Empleado/upload.php",        // Url to which the request is send
        type: "POST",             // Type of request to be send, called as method
        data: data,         // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,        // To send DOMDocument or non processed data file it is set to false
        success: function(data)   // A function to be called if request succeeds
        {
          $(".upload-msg").html(data);
          window.setTimeout(function() {
          $(".alert-dismissible").fadeTo(500, 0).slideDown(500, function(){
          $(this).remove();
          }); }, 5000);
        }
      });
    }


function Profesor_Carrera_Agregar(){  
  
  var datos= $('#Formulario').serialize();
  
  $.ajax({
    url: '../ajax/Posgrado/Profesor_Carrera_Agregar.php',
    type: 'POST',
    data: datos,
    success: function(respuesta) {
    alert(respuesta); 
    Profesor_Carrera(); 
    }     
  });    
}

// $("button").click(function(){
//     $.ajax({url: "demo_test.txt", success: function(result){
//         $("#div1").html(result);
//     }});
// });