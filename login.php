<?php

$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $mysqli = require __DIR__ ."/config/db_conn.php";

    $sql = sprintf("SELECT * FROM usuarios
                    WHERE email = '%s'",
                    $mysqli->real_escape_string($_POST["email"]));
    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if($user)
    {
        if(password_verify($_POST["pwd"], $user["password_hash"]))
        {
            session_start();

            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];

            header("Location: index.php");
            exit;
            
        }
    }

    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/redimetusmultas/css/bootstrap.css">
    <link rel="stylesheet" href="/redimetusmultas/css/bootstrap.min.css">
    <link rel="stylesheet" href="/redimetusmultas/css/style.css">
    <title>Iniciar Sesión</title>
</head>

<body style="background-color: #1BA140;">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-6">
                <div class="welcome-screen d-flex align-items-center justify-content-center">
                    <h1>Iniciar Sesión</h1>
                    <form action="" method="POST" id="myForm">
                    <?php if($is_invalid): ?>
                        <em class="invalid-login">Invalid login</em>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" id="email" name="email" 
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="pwd" required>
                        </div>

                        <div class="btns-form-login">
                            <button type="submit" class="btn btn-primary">Acceder</button>
                            <a href="home.php"><button type="button" class="btn-back btn btn-primary">Volver</button></a>
                        </div>
                        
                    </form>
                    <img class="welcome-img" src="/redimetusmultas/img/caspar-rae-MBPgdHD_SA-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="/redimetusmultas/js/script.js"></script>
</body>
</html>