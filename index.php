<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up ang Login Form</title>
</head>

<!-- LOGIN -->

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="index.php" autocomplete="off" class="login">
                        <div class="logo">
                            <img src="./img/Logo.png" alt="logo">
                            <h3>Logo</h3>
                        </div>
                        <div class="heading">
                            <h2>Login</h2>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Prénom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Mot de Passe</label>
                            </div>
                        </div>

                        <button type="submit" value="loginButton" class="loginButton">Se Connecter</button>

                        <div class="account">
                            <h6>Pas encore de compte ?</h6>
                            <a href="#" class="toggle">S'inscrire</a>
                        </div>
                    </form>

                    <!-- SIGN UP -->

                    <form action="index.php" autocomplete="off" class="signUp">
                        <div class="logo">
                            <img src="./img/Logo.png" alt="logo">
                            <h3>Logo</h3>
                        </div>
                        <div class="heading">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Prénom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Nom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" class="input-field" autocomplete="off" required>
                                <label>Mot de Passe</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" class="input-field" autocomplete="off" required>
                                <label>Confirmez votre mot de passe</label>
                            </div>
                        </div>

                        <button type="submit" value="loginButton" class="loginButton">S'inscrire</button>

                        <div class="account">
                            <h6>Vous avez déjà un compte ?</h6>
                            <a href="#" class="toggle">Se Connecter</a>
                        </div>
                    </form>
                </div>


                <div class="carousel"></div>
            </div>
        </div>
    </main>

    <script src="app.js"></script>
</body>

</html>