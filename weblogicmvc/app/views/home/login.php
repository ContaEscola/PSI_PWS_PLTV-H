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

    <link rel="stylesheet" href="./css/style.css">

</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="">
        </div>
        <nav class="flex margin-left-auto align-items-center">
            <ul class="[ nav__list ] [ flex ]">
                <li><a href="./?c=Home&a=index" class="button" data-type="outline">Home</a></li>
            </ul>
        </nav>
    </header>


    <main class="main-content">
        <form action="./?c=Login&a=login" method="POST" class="[ form ] [ flex f-direction-column ] [ box-shadow-1 ]" data-type="login">
            <h1 class="[ main-content__title ] [ text-align-center ] [ fs-600 fw-bold ]">Login</h1>
            <p>A empresa enviou-lhe os dados da conta, utilize-os aqui!</p>


            <div class="[ form__email ] [ flex f-direction-column f-gap-1 ]">
                <label for="username">Nome de Utilizador:</label>
                <input type="text" class="[ input ] [ width-100 ]" name="username" id="username" value="<?= $user->username ?>" <?php
                                                                                                                                if (isset($customErrors['username'])) {
                                                                                                                                    echo 'data-state="error"';
                                                                                                                                } else if (isset($user->errors)) {
                                                                                                                                    if ($user->errors->on('username') != null)
                                                                                                                                        echo 'data-state="error"';
                                                                                                                                }
                                                                                                                                ?>>

                <?php

                if (isset($customErrors['username'])) {
                    echo '<p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrors['username'] . '</p>';
                } else if (isset($user->errors)) {
                    echo '<p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $user->errors->on('username') . '</p>';
                } else {
                    echo '<p class="[ input__error ] [ fs-200 italic ]"></p>';
                }
                ?>

            </div>

            <div class="[ form__password ] [ flex f-direction-column f-gap-1 ]">
                <label for="password">Password:</label>
                <input type="password" class="[ input ] [ width-100 ]" name="password" id="password" value="<?= $user->password ?>" <?php
                                                                                                                                    if (isset($customErrors['password'])) {
                                                                                                                                        echo 'data-state="error"';
                                                                                                                                    } else if (isset($user->errors)) {
                                                                                                                                        if ($user->errors->on('password') != null)
                                                                                                                                            echo 'data-state="error"';
                                                                                                                                    }
                                                                                                                                    ?>>

                <?php

                if (isset($customErrors['password'])) {
                    echo '<p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrors['password'] . '</p>';
                } else if (isset($user->errors)) {
                    echo '<p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $user->errors->on('password') . '</p>';
                } else {
                    echo '<p class="[ input__error ] [ fs-200 italic ]"></p>';
                }
                ?>

            </div>

            <input type="submit" class="[ button ] [ form__submit ]" data-type="primary" value="Login" />
        </form>
    </main>


</body>

</html>