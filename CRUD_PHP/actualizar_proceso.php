<?php
    /* File actualizar_proceso.php
       Contiene el codigo de actualización de un registro
    */
    include("abrir_conexion.php");

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL FORMULARIO
   
    $Matricula = $_POST['txtMatricula'];
    $Nombre = $_POST['txtNombre'];
    $Apellidos = $_POST['txtApellidos'];
    $Edad =  $_POST['txtEdad'];
    $Telefono = $_POST['txtTelefono'];
    $Carrera =  $_POST['cbCarrera'];

    //Comprobamos que los datos no esten vacios
    if($Matricula=="" || $Nombre =="" || $Apellidos =="" || $Edad =="" ||  $Carrera ==""  || $Telefono==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"Modificar!" codigo para modificar un registro en una tabla de la base de datos 
        $tabla_db= 'alumnos';
        
        //Se crea la instruccion
        $sql = "UPDATE $tabla_db SET nombre='$Nombre', apellidos='$Apellidos', edad='$Edad',  telefono='$Telefono', carrera='$Carrera' WHERE matricula = $Matricula";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue modificado exitosamente.
        if ($query) {
            echo "El dato ha sido modificado con éxito. <a href='index.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
        }
        //------------------------------------------------
    }
    include("cerrar_conexion.php");
?>

