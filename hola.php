<?php
if (isset($_POST['boton'])) {
    header('Location:./adios.php');
    }
 echo "
<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>Prueba de PHP
            <meta charset='utf-8'>
        </title>
    </head>

    <body>
        <h1> hola </h1>

        <form action='' method='post'>
            <button type='submit' name='boton'>Adiós</button>
        </form>
    </body>
</html>"
?>
