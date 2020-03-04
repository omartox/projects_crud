
<?php
/* Archivo principal que contiene
   La consulta de una tabla
   By Omar Toxqui */

  //Archivo de conexion
  include("abrir_conexion.php");

?>
<html>
  <head>
    <title>Programando Ando</title>
  </head>
  <body>
    
    <center><h1>ALUMNOS</h1></center>
    <!-- INICIA BOTON -->
    <center>
      <a href="insertar.php"><Button>Insertar</Button></a>
    </center>
    <br>
    <!-- INICIA Tabla de CONSULTA -->
    <center>
      <table border="1">
        <tr>
          <th width="10%">Matr.</th>
          <th width="15%">Nombre</th>
          <th width="20%">Apellidos</th>
          <th width="20%">Edad</th>
          <th width="22%">Telefono</th>
          <th width="20%">Carrera</th>
          <th width="15%">Acciones</th>
        </tr>
        <?php
          //Lista de Tablas
          $tabla_db = "alumnos"; 	   // TABLA DESEADA DE LA BASE DE DATOS
          $campos = "*";             // Campos de la tabla seleccionada
          //CONSULTAR
          $resultados = mysqli_query($conexion,"SELECT $campos FROM $tabla_db");
          while($consulta = mysqli_fetch_array($resultados))
        {?>
        <!-- 
          Ciclo que muestra campos uno por uno dentro de la tabla principal,
         
         -->
        <tr>
          <td><?php echo $consulta['matricula'];?></td>
          <td><?php echo $consulta['nombre'];?></td>
          <td><?php echo $consulta['apellidos'];?></td>
          <td><?php echo $consulta['edad'];?></td>
          <td><?php echo $consulta['telefono'];?></td>
          <td><?php echo $consulta['carrera'];?></td>
          <td>
              <a href="actualizar.php?matricula=<?php echo $consulta['matricula'];?>"><Button>Actualizar</Button></a>
              <a href="#" onclick="preguntar(<?php echo $consulta['matricula'];?>)"><button>Eliminar</button></a>
          </td>
        </tr>
        <?php
          }
          include("cerrar_conexion.php");
        ?>
      </table>
    </center>
    
    <!-- Funcion para preguntar antes de eliminar un registro  -->
    <script>
        //Iniciamos la funcion preguntar con un parametro de entrada en este caso credencial
        function preguntar(credencial){
          if(confirm('¿Estás seguro que deseas borrar?')){
            window.location.href= "eliminar_proceso.php?matricula="+credencial;
          }
        }
    </script>


</body>
</html>