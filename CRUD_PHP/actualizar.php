
<?php
/* Archivo principal que contiene
   el llenado automatico de el registro a modificar
   By Omar Toxqui */

  //Archivo de conexion
  include("abrir_conexion.php");

  //obtenemos la clave del registro a actualizar
  $matricula = $_GET['matricula'];

  //Lista de Tablas
  $tabla_db = "alumnos"; 	   // TABLA DESEADA DE LA BASE DE DATOS
  $campos = "*";             // Campos de la tabla seleccionada
  
  $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db WHERE matricula=$matricula");
                                                                      //_______________________    <<-----
  $consulta = mysqli_fetch_array($resultados);
  include("cerrar_conexion.php");
?>

<!-- Solo contiene el codigo HTML del formulario -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
    </head>
    <body>
        <center><h1>MODIFICAR REGISTRO</h1></center>
        <br>
        <center>
            <form method="POST" action="actualizar_proceso.php" >

            <div class="form-group">
            <label for="doc">Matricula: </label>
            <input type="text" name="txtMatricula" class="form-control" id="doc" value="<?php echo $consulta['matricula'];?>" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre: &nbsp;</label>
                <input type="text" name="txtNombre" class="form-control" id="nombre" value="<?php echo $consulta['nombre'];?>">
            </div>

            <div class="form-group">
                <label for="dir">Apellidos: </label>
                <input type="text" name="txtApellidos" class="form-control" id="dir" value="<?php echo $consulta['apellidos'];?>">
            </div>

            <div class="form-group">
                <label for="dir">Edad: </label>
                <input type="text" name="txtEdad" class="form-control" id="edad" value="<?php echo $consulta['edad'];?>">
            </div>

            <div class="form-group">
                <label for="tel">Telefono: </label>
                <input type="text" name="txtTelefono" class="form-control" id="tel" value="<?php echo $consulta['telefono'];?>">
            </div>
            <div class="form-group">
                <label for="dir">Carrera: </label>
                <select name="cbCarrera" id="cbCarrera">
                    <option value="Desarrollador de Sistemas">Desarrollador de Sistemas</option>
                    <option value="Redes CCNA">Redes CCNA</option>
                    <option value="Asistente Ejecutivo">Asistente Ejecutivo</option>
                </select>
            </div>
            <button type="submit">Modificar</button>
            <a href="index.php"><input type="button" value="Regresar"></a>
            </form>
        </center>

        <!-- Funcion para asignar valor al select  -->
        <script>
        iniciar("<?php echo $consulta['carrera'];?>");

        function iniciar(valor){
          document.getElementById("cbCarrera").value = valor;
        }
    </script>
    </body>
</html>

 