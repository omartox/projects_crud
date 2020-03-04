<?php
    /* File insertar_proceso.php
       Contiene el codigo de insercion a la base de datos
      
    */
    include("abrir_conexion.php");

    
   // $Matricula = $_POST['txtMatricula'];
    $Nombre = $_POST['txtNombre'];
    $Apellidos = $_POST['txtApellidos'];
    $Edad =  $_POST['txtEdad'];
    $Telefono = $_POST['txtTelefono'];
    $Carrera =  $_POST['cbCarrera'];

    //Comprobamos que los datos no esten vacios
    if($Nombre =="" || $Apellidos =="" || $Edad =="" || $Telefono=="" || $Carrera ==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"INSERTAR!" codigo para insertar en una tabla de la base de datos 
        $tabla_db= 'alumnos';
        
        //Se crea la instruccion
        $sql = "INSERT INTO $tabla_db (nombre, apellidos, edad , telefono, carrera) values 
                ('$Nombre','$Apellidos','$Edad','$Telefono','$Carrera')";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue insertado exitosamente.
        if ($query) {
            echo "El dato ha sido guardado con éxito. <a href='index.php'>Regresar</a>";
        } else {
            echo "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
        }
        //------------------------------------------------
    }

    include("cerrar_conexion.php");
?>

