<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel=" stylesheet" href="style.css">



    <title>Sign Up and Login Form</title>
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
                            <h2>Connexion</h2>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required>
                                <label>Prénom</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" class="input-field" autocomplete="off" required>
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
                            <h2>Inscription</h2>
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
                                <input onkeyup="trigger()" type="password" class="input-field" autocomplete="off"
                                    id="hello" required>
                                <label>Mot de Passe</label>
                            </div>

                            <div class="indicator">
                                <span class="faible"></span>
                                <span class="moyen"></span>
                                <span class="fort"></span>
                            </div>

                            <div class="texte"></div>


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

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="./img/étudiante.jpeg" class="image img-1 show" alt="Image slide - Bibliothécaire">
                        <img src="./img/Workspace.jpg" class="image img-2" alt="Image slide - Workspace">
                        <img src="./img/Diplomés.jpg" class="image img-3" alt="Image slide - Fille Diplômé">
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Créer tes propres cours</h2>
                                <h2>Personnaliser comme vous le souhaitez</h2>
                                <h2>Invite tes étudiants dans ta classe</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="app.js"></script>
</body>

</html>