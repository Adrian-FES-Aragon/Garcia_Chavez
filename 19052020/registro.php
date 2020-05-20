<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <header>
        <h1 style="text-align:center">Registro alumnos ICO</h1>
    </header>
    <form action="mandar_registro.php" method="POST">

    <label for="nombre_usuario"> Nombre de usuario: </label>
    <input type="text" name="nombre_usuario" maxlength="155" require>
    <br><br>

    <label for="carrera">Carrera: </label>
    <input type="text" name="carrera" maxlength="155" require>
    <br><br>

    <label for="cuenta">Numero de Cuenta: </label>
    <input type="text" name="cuenta" maxlength="155" require>
    <br><br>

    <label for="nombre_completo"> Nombre completo: </label>
    <input type="text" name="nombre_completo" maxlength="155" require>
    <br><br>

    <label for="numero_celular"> Numero de celular: </label>
    <input type="text" name="numero_celular" maxlength="155" require>
    <br><br>

    <label for="email"> Correo electronico: </label>
    <input type="email" name="email" maxlength="155" require>
    <br><br>

    <label for="password"> Ingresa tu contraseña: </label>
    <input type="password" name="password" maxlength="155" require>
    <br><br>

    <input type="submit" name="submit" value="Registro de alumno">
    <input type="reset" name="clear" value="Borrar campos">
    </form>
</body>

</html>