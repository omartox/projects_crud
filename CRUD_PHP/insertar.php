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
        <center><h1>INSERTAR REGISTRO</h1></center>
        <br>
        <center>
            <form method="POST" action="insertar_proceso.php" >

            <!--<div class="form-group">
            <label for="doc">Matricula: </label>
            <input type="text" name="txtMatricula" class="form-control" id="doc">
            </div>-->

            <div class="form-group">
                <label for="nombre">Nombre: &nbsp;</label>
                <input type="text" name="txtNombre" class="form-control" id="nombre" >
            </div>

            <div class="form-group">
                <label for="dir">Apellidos: </label>
                <input type="text" name="txtApellidos" class="form-control" id="dir">
            </div>

            <div class="form-group">
                <label for="dir">Edad: </label>
                <input type="text" name="txtEdad" class="form-control" id="edad" >
            </div>

            <div class="form-group">
                <label for="tel">Telefono: </label>
                <input type="text" name="txtTelefono" class="form-control" id="tel">
            </div>

            <div class="form-group">
                <label for="dir">Carrera: </label>
                <select name="cbCarrera" id="cbCarrera">
                    <option value="Desarrollador de Sistemas">Desarrollador de Sistemas</option>
                    <option value="Redes CCNA">Redes CCNA</option>
                    <option value="Asistente Ejecutivo">Asistente Ejecutivo</option>
                </select>
            </div>

            <button type="submit">Guardar</button>
            <a href="index.php"><input type="button" value="Regresar"></a>
            </form>
        </center>
    </body>
</html>