<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELOCITY - INICIO DE SESION</title>

    <link href="{{ asset('css/style.css') }}"  rel="stylesheet">

</head>


<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">Iniciar sesion</h2>
        <h2 class="inactive underlineHover">Crear cuenta</h2>

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="https://cdn-icons-png.flaticon.com/128/3237/3237472.png" alt="Icono de usuario" />
        </div>

        <!-- Login Form -->
        <form action="procesar-credenciales.php" method="POST">
            <p>
                <input type="text" name="nickname" placeholder="Usuario">
            </p>
            <p>
                <input type="text" name="password" placeholder="Contraseña">
            </p>
            
            <input type="submit" class="fadeIn fourth" value="Iniciar sesion">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Olvidaste tu contraseña?</a>
        </div>

    </div>
</div>
</div>




</html>