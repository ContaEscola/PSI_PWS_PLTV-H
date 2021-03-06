<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como começar ?</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href=".//css/style.css">

</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="">
        </div>
        <nav class="flex margin-left-auto align-items-center">
            <ul class="[ nav__list ] [ flex ]">
                <li><a href="./?c=Home&a=index" class="button" data-type="primary">Home</a></li>
                <li><a href="./?c=Login&a=index" class="button" data-type="outline">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="[ main-content ] [ flow ]" data-page="how-to-start">
        <h1 class="[ main-content__title ] [ text-align-center ] [ fs-600 fw-bold ] ">Como começar ?
        </h1>
        <div>
            <h2 class="fs-500 fw-bold">1. Ter uma conta</h2>
            <div class="margin-top-2">
                <p>Claro que para começar a usar este serviço precisa de uma conta.</p>
                <p>Neste caso, nós iremos enviar os dados da sua conta.</p>
                <p>Assim só tem de esperar por esta informação.</p>
            </div>
        </div>
        <div>
            <h2 class="fs-500 fw-bold">2. Efetuar o Login</h2>
            <div class="margin-top-2">
                <p>Assim que tiver acesso à informação sobre a conta, só precisa de efetuar o <a href="./?c=Login&a=index">Login</a>.</p>
                <p>
                    Depois de efetuar o <a href="./?c=Login&a=index">Login</a>, terá acesso total ao serviço, que inclui, gerir as suas
                    faturas, etc.
                </p>
            </div>
        </div>
    </main>

</body>

</html>