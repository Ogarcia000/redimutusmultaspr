<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/redimetusmultas/css/bootstrap.css">
    <link rel="stylesheet" href="/redimetusmultas/css/bootstrap.css">
    <link rel="stylesheet" href="/redimetusmultas/css/style.css">
    <title>Registrarse</title>
</head>

<body style="background-color: #1BA140;">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-6">
                <div class="welcome-screen d-flex align-items-center justify-content-center">
                    <h1>Registrate</h1>
                    <form action="../redimetusmultas/config/process-signup.php" id="signup" method="POST" class="register-form" novalidate>

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input value="" type="name" class="form-control" id="inputName" name="name" required>
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Número de teléfono:</label>
                            <input type="phone" class="form-control" id="inputPhone" name="phone">
                            <div class="valid-feedback">
                                Bien!
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="inputPassword" name="pwd">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Confirmar Contraseña:</label>
                            <input type="password" class="form-control" id="inputPassword" name="confirm_pwd">
                        </div>

                        <div class="btns-form">
                            <button name="signup_btn" type="submit" class="btn btn-primary" >Crear</button>
                            <button type="submit" class="btn-back btn btn-primary">Volver</button>
                        </div>

                    </form>
                    <img class="welcome-img" src="/redimetusmultas/img/caspar-rae-MBPgdHD_SA-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../redimetusmultas/config/validation.php"></script>
</body>
</html>