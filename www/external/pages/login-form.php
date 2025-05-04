<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <script src="https://kit.fontawesome.com/0197b6ebf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/medlab-analyses/www/external/css/main.css">
    <link rel="stylesheet" href="/medlab-analyses/www/external/css/pages/login-form.css">
</head>

<body>
    <div class="sticky-top">
        <?php
        include '../includes/topbar.php';
        include '../includes/navigation.php';
        ?>
    </div>
    <div class="login-container">
        <div class="login-box">
            <h1>Connexion</h1>
            <form class="login-form" method="post" action="login.php">
                <div class="form-group">
                    <label for="email">
                        <i class="fa-solid fa-envelope"></i>
                        Email
                    </label>
                    <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                </div>

                <div class="form-group">
                    <label for="password">
                        <i class="fa-solid fa-lock"></i>
                        Mot de passe
                    </label>
                    <input type="password" id="password" name="password" required pattern=".{3,}">
                </div>

                <div class="form-group remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>

                <button type="submit" class="login-button">
                    <i class="fa-solid fa-sign-in-alt"></i>
                    Se connecter
                </button>

                <div class="form-links">
                    <a href="#">Mot de passe oublié?</a>
                    <a href="#">Créer un compte</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    include '../includes/contact.php';
    include '../includes/footer.php';
    ?>
</body>

</html>