<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.js"></script>
</head>
<body class="valign-wrapper">
<div class="container">
    <div class="row">
        <div class="col l6 m9 s12 offset-l3 offset-m2">
            <div class="card">
                <div class="card-image ">
                    <img src="./img/background.png">
                    <span class="card-title">Inicio de sesión</span>
                    <span class="card-title"><img class="col s5" style="margin-left:-20px" src="./img/code.png"></span>
                </div>

                <div class="card-content">
                    <form method="POST" action="login.php">
                        <div class="input-field col s12 ">
                            <label for="correo">Correo</label>
                            <input type="email" class="validate" name="correo"/><br>
                        </div>
                        <div class="input-field col s12">
                            <label for="password" class="validate">Contraseña</label>
                            <input type="password" name="password"/><br>
                        </div>
                        <div class="input-field col right s5">
                            <div class="row">
                                <input class="waves-effect waves-light blue btn" type="submit" name="Iniciar Sesión"/>
                            </div>
                        </div>
                    </form>
                    <p> &nbsp</p><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
