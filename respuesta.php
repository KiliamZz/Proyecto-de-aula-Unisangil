<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body class="respuesta">

    <div class="contenedor container ">
      <h1 class="centrar_texto seccion fw-300">Pre-Registro</h1>
      <h3 class="centrar_texto seccion fw-300">Información personales</h3>

      <?php
    
    if(isset($_POST['nombre']) && trim($_POST['nombre'])){

        $nombre =  $_POST['nombre'];
        echo "Nombre: ".$nombre;

    }else{

        echo "No se ha recibido el nombre";

    }

    ?>
    <hr>

    <?php
    
    if(isset($_POST['email']) && trim($_POST['email'])){

        $email =  $_POST['email'];
        echo "Correo: ".$email;

    }else{

        echo "No se ha recibido el email";

    }

    ?>
    <hr>



    <?php
    
    if(isset($_POST['telefono']) && trim($_POST['telefono'])){

        $telefono =  $_POST['telefono'];
        echo "Telefono: ".$telefono;

    }else{

        echo "No se ha recibido el telefono";

    }

    ?>
    <hr>


    <?php
if(isset($_POST['mensaje']) && trim($_POST['mensaje'])){
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
    echo "Su Descripción es: ".$mensaje;

}else{

    echo 'no hay mensaje';

}

?>

<h3 class="centrar_texto seccion fw-300">Aspirante a:</h3>

<?php

            if(isset($_POST['opciones']) && $_POST['opciones'] != ""){

            $opciones = $_POST['opciones'];

            switch ($opciones) {
                case 'Pregrado':
                    echo 'Pregrado';
                    break;
                case 'Postgrado':
                    echo 'Postgrado';
                    break;
                case 'Bilingue':
                    echo 'Lenguas Extranjeras';
                    break;
                
                default:
                    echo 'Ópcion no valida';
                    break;
            }
            }else{

            echo 'no selecciono area de interes';

            }

         ?>
            <hr>

<h3 class="centrar_texto seccion fw-300">En la facultad de: </h3>

<?php

            if(isset($_POST['opciones1']) && $_POST['opciones1'] != ""){

            $opciones1 = $_POST['opciones1'];

            switch ($opciones1) {
                case 'cn':
                    echo 'Ciencias Naturales e Ingenieria';
                    break;
                case 'fd':
                    echo 'Derecho';
                    break;
                case 'fa':
                    echo 'Administración';
                    break;
                case 'i':
                        echo 'Idiomas';
                     break;
                default:
                    echo 'Ópcion no valida';
                    break;
            }
            }else{

            echo 'no selecciono area de interes';

            }

         ?>
            <hr>

        
            <h3 class="centrar_texto seccion fw-300">Desea ser contactado mediante: </h3>
            <?php

        if(isset($_POST['grupocontacto'])){

            $grupocontac = $_POST['grupocontacto'];
            
           
                 echo 'Será contactado por '.$grupocontac;
            

        }else{
            echo 'usted no selecciono manera de contactarlo';
        }

     ?>
        <hr>


        <?php
    
    if(isset($_POST['fecha']) && trim($_POST['fecha'])){

        $fecha =  $_POST['fecha'];
        echo "El dia: ".$fecha;

    }else{

        echo "No se ha recibido fecha";

    }

    ?>
    <hr>


    <?php
    
    if(isset($_POST['hora']) && trim($_POST['hora'])){

        $hora =  $_POST['hora'];
        echo "A las: ".$hora;

    }else{

        echo "No se ha recibido hora";

    }

    ?>
    <hr>

  </body>
</html>