<?php
    /* File eliminar_proceso.php
       Contiene el codigo de eliminacion de un registro 
      
    */
    include("abrir_conexion.php");

    //AQUI SE RECIBE LA INFORMACION ENVIADA POR EL BOTON ELIMINAR
    $matricula = $_GET['matricula'];

    //Comprobamos que los datos no esten vacios
    if($matricula==""){
        echo "<center><h3>Faltan campos por llenar</h3></center>";
    }else{
        //"ELIMINAR!" codigo para eliminar registros en una tabla de la base de datos 
        $tabla_db= 'alumnos';
        
        //Se crea la instruccion
        $sql = "DELETE FROM alumnos WHERE matricula = $matricula";

        // Se ejecuta la consulta
        $query = mysqli_query($conexion,$sql);

        // Comprobamos si el producto fue insertado exitosamente.
        if ($query) {
            
            header("location: index.php");
        } else {
            echo "Lo sentimos, falló. Por favor, regrese y vuelva a intentarlo. <a href='index.php'>Regresar</a>";
        }
        //------------------------------------------------
    }

    include("cerrar_conexion.php");
?>

