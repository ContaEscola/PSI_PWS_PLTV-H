<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../../public/css/style.css">

</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]">
        <div class="grid g-place-items-center">
            <img src="img/Logo.png" alt="">
        </div>
        <nav class="margin-left-auto">
            <ul class="[ nav__list ] [ flex ]">
                <li><a href="#" class="button" data-type="outline">Home</a></li>
            </ul>
        </nav>
    </header>


<div class="grid g-place-items-center ">
    <form class="formcentrar flow flex f-direction-column box-shadow-1">
        <h1 class="fs-600 fw-bold uppercase ">Login</h1>
        <h5>A empresa enviou-lhe os dados da conta, utilize-os aqui!</h5>
        <p>Email:</p>
        <input type="text" class="input" name="username" required="" autofocus="">
       <p>Password:</p>
        <input style="width: 100%" type="password" class="input" name="password" required=""/>
        <label class="checkbox">
        </label>
        <a class="button d-block text-align-center" data-type="primary">Login</a>

    </form>
</div>


</body>
</html>
