<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="Shortcut icon" href="images/tareaTerminada.png">
    <link rel="stylesheet" type="text/css" href="style.php">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yan Ken Po</title>
</head>

<body>
    <div align="center">
        <form action="logic.php" name="form1" id="form1" method="POST">
            <br>
            <h1>Vence a Gon en su propio juego!</h1>
            <br>
            <div class="container2" align="center">
                <br>
                <img src="images/challenge.gif" alt="Piedra" class="imagen" style="width: 100%">
                <br>
                <h1>Escoje tu siguiente movimiento!</h1>
                <br>
            </div>
            <table class="table1">
                <tr>
                    <td>
                        <div class="container">
                            <img src="images/roca.png" alt="Piedra" class="imagen" style="width: 100%">
                            <div class="middle">
                                <input type="submit" class="btn" value="¡PIEDRA!" id="evento_piedra" name="eveto_piedra"/>
                            </div>
                        </div>
                    </td>

                    <td class="td1">
                        <div class="container">
                            <img src="images/papel.png" alt="Papel" class="imagen" >
                            <div class="middle">
                                <input type="submit" class="btn" value="¡PAPEL!" id="evento_papel" name="evento_papel"/>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="container">
                            <img src="images/tijeras.jpg" alt="Tijeras" class="imagen" style="width: 100%">
                            <div class="middle">
                                <input type="submit" class="btn" value="¡TIJERAS!" id="evento_tijeras" name="evento_tijeras" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>