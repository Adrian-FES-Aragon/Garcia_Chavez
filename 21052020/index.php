<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logic</title>
</head>

<body>
    <div align="center">
        <h1>Ingresando al sistema de Adrian</h1>
        <!-- ./ para decirle que va a entrar a una carpeta -->
        <form action="./logica/submit_login.php" method="POST">
            <input type="text" name="no_cuenta" placeholder="Ingresa tu numero de cuenta">
            <br>
            <input type="password" name="contraseña" placeholder="Ingresa tu contraseña">
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>