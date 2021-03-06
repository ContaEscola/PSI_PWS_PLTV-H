<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página Inicial</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./css/style.css" />
</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="" />
        </div>
        <nav class="flex margin-left-auto align-items-center">
            <ul class="[ nav__list ] [ flex ]">
                <li><a href="./?c=Login&a=index" class="button" data-type="primary">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="[ main-content ] [ grid ]" data-page="landing-page">
        <div class="[ landing-page-content__text ] [ flow ]">
            <div>
                <h1 class="[ main-content__title ] [ text-align-center ] [ fs-600 fw-bold uppercase ]">
                    Deixe as suas faturas connosco!
                </h1>
                <p class="[ main-title__subtext ] [ text-align-center margin-top-2 ]">
                    Cansado de ter as suas faturas desorganizadas e em molhos, deixe
                    connosco. <br />
                    Nós guardamos-as e organizamos-as por si!
                </p>
            </div>
            <div class="[ main-title__subtext ] [ text-align-center ]">
                <a href="./?c=Home&a=comoComecar" class="button" data-type="outline">Começar</a>
            </div>
        </div>

        <div class="grid justify-items-center">
            <img src="./assets/landingPage-Man.svg" alt="Uma pessoa com uma fatura na mão" />
        </div>
    </main>
</body>

</html>