<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo_favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/un_artiste.css">

    <title>WonderLand - Accueil</title>
</head>

<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-top">
            <div class="contactInfos">
                <div class="info">
                    <img src="img/mail-fill.svg" alt="ws">
                    <p>nom-festival.com</p>
                </div>
                <div class="info">
                    <img src="img/phone-fill.svg" alt="tel">
                    <p>01 02 03 04 05</p>
                </div>
            </div>

            <div class="socials">
                <a href=""><img src="img/instagram-fill.svg" alt="instagram"></a>
                <a href=""><img src="img/facebook-fill.svg" alt="facebook"></a>
                <a href=""><img src="img/twitter-fill.svg" alt="twitter"></a>
                <a href="" id="tiktok-link"><img id="tiktok" src="img/tiktok-fill.svg" alt="tiktok"></a>
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        <a href="index.html"><img class="logo-hamburger" src="img/logo_mobile.png" alt="logo"></a>
        <a href="reserver.php"><svg class="icon-reserver" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16"> <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/> </svg></a>

        <div class="nav-bottom">
            <a href="index.html" class="link">ACCUEIL</a>
            <a href="artistes.php" class="link active">ARTISTES</a>
            <a href="planning.html" class="link">PLANNING</a>
            <a href="index.html"><img class="logo" src="img/logo_mobile.png" alt="logo"></a>
            <a href="a_propos.html" class="link">A PROPOS</a>
            <a href="contact.php" class="link">CONTACT</a>
            <a href="reserver.php" class="link" id="reserver">RÉSERVER</a>
        </div>
    </div>







    <footer>
        <div class="informations">
            <div class="text">
                <img class="logo" src="img/logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra nunc ante velit vitae. Est tellus vitae, nullam lobortis enim.</p>
                <div class="socials">
                    <a href=""><img src="img/instagram-fill.svg" alt="instagram"></a>
                    <hr>
                    <a href=""><img src="img/facebook-fill.svg" alt="facebook"></a>
                    <hr>
                    <a href=""><img src="img/twitter-fill.svg" alt="twitter"></a>
                    <hr>
                    <a href="" id="tiktok-link"><img id="tiktok" src="img/tiktok-fill.svg" alt="tiktok"></a>
                </div>
            </div>
            <div class="newsletter">
                <h2>NEWSLETTER</h2>
                <p>Inscrivez-vous à notre newsletter et bénéficiez de tous nos avantages !</p>
                <form action="#">
                    <input type="text" name="mail" placeholder="Votre adresse mail...">
                    <button type="submit">
                        <img src="img/send.svg" alt="envoyer">
                    </button>
                </form>
            </div>
        </div>
        <div class="copyright">
            <hr>
            <p>&copy Copyright 2023 .Wonderland. All Right Reserved.</p>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>