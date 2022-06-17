<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Funcionários</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="./css/style.css" />

    <script src="./js/dropdowns.js" defer></script>
    <script src="./js/mobile-nav-toggle.js" defer></script>
    <script src="./js/manage-modals.js" defer></script>
    <script src="./js/search-bar.js" defer></script>
</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]" data-type="logged-in">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="Logo" />
        </div>
        <div class="[ dropdown ] [ grid g-place-items-center margin-left-auto ]">
            <button class="[ dropdown-toggle ] [ grid g-direction-column g-place-items-center ] [ text-dark bg-white ]" data-dropdown-toggle>
                <?= $sessionInfo['username'] ?> / <?= $sessionInfo['role'] ?>
                <img src="./assets/dropdown-toggle__icon.svg" alt="" class="dropdown-toggle__icon" />
            </button>
            <nav class="dropdown-nav" data-visible="false" aria-label="opções navegação">
                <ul class="[ dropdown-list ] [ bg-white box-shadow-1 ]">
                    <li>
                        <a class="[ dropdown-item__link ] [ grid ]" href="./?c=Configuracoes&a=index">
                            Configurações
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="dropdown-item__icon">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="[ dropdown-item__link ] [ grid ]" data-type="warning" href="./?c=Login&a=logout">
                            Logout
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="dropdown-item__icon">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M96 480h64C177.7 480 192 465.7 192 448S177.7 416 160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64C177.7 96 192 81.67 192 64S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256C0 437 42.98 480 96 480zM504.8 238.5l-144.1-136c-6.975-6.578-17.2-8.375-26-4.594c-8.803 3.797-14.51 12.47-14.51 22.05l-.0918 72l-128-.001c-17.69 0-32.02 14.33-32.02 32v64c0 17.67 14.34 32 32.02 32l128 .001l.0918 71.1c0 9.578 5.707 18.25 14.51 22.05c8.803 3.781 19.03 1.984 26-4.594l144.1-136C514.4 264.4 514.4 247.6 504.8 238.5z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="[ main-content ] [ grid ]" data-page="dashboard">
        <button class="[ mobile-dashboard-toggle ] [ justify-self-center ]" aria-controls="dashboard-navigation" data-state="closed">
            <span class="sr-only" aria-expanded="false">Navegação primária</span>
        </button>

        <nav class="dashboard-navigation" id="dashboard-navigation" aria-label="navegação primária">
            <ul class="flex f-direction-column f-gap-0">
                <li class="dashboard__item">
                    <a href="./?c=Dashboard&a=index" class="navigation__link">Empresa</a>
                </li>
                <li class="dashboard__item">
                    <a href="#" class="navigation__link">Faturas</a>
                </li>
                <li class="dashboard__item">
                    <a href="#" class="navigation__link">Produtos e Stocks</a>
                </li>
                <li class="dashboard__item">
                    <a href="#" class="navigation__link">Taxas de Iva</a>
                </li>
                <li class="dashboard__item">
                    <a href="./?c=Funcionario&a=index" class="navigation__link" data-state="active">Funcionários</a>
                </li>
                <li class="dashboard__item">
                    <a href="#" class="navigation__link">Clientes</a>
                </li>
            </ul>
        </nav>

        <div class="main-content__page" data-page="dashboard">

            <h1 class="[ main-content__title ] [ text-align-center ] [ fs-600 fw-bold ]">
                Funcionários
            </h1>
            <p class="[ main-title__subtext ] [ text-align-center ]">Aqui estão apresentados todos os funcionários na
                empresa, pode editá-los ou removê-los!</p>
            <div class="flex justify-content-space-between margin-top-2">
                <button class="button" data-open-add-modal data-type="primary">Criar Funcionário</button>

                <button class="button" data-open-choose-modal data-type="outline">Editar Funcionário</button>


                <dialog class="modal" id="addModal">
                    <h2 class="fs-500 text-dark">Criação do Funcionário:</h2>
                    <p class="text-dark">Preencha todos os campos para criar o funcionário!</p>
                    <form action="./?c=Funcionario&a=create" method="POST" class="[ modal-form ] [ form ] [ margin-top-3 grid ]" data-type="funcionarios">
                        <div class="[ form__username ] [ flex f-direction-column f-gap-1 ]">
                            <label for="username" class="text-dark">Username</label>
                            <input type="text" class="input" id="username" name="username" value="<?= isset($funcionarioNovo->username) ? $funcionarioNovo->username : "" ?>" <?php
                                                                                                                                                                                if (isset($funcionarioNovo->errors) || isset($customErrorsOnOld['username']))
                                                                                                                                                                                    if ($funcionarioNovo->errors->on('username') != null || isset($customErrorsOnOld['username']))
                                                                                                                                                                                        echo 'data-state="error"';
                                                                                                                                                                                ?>>
                            <?php
                            if (isset($customErrorsOnOld['username'])) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrorsOnOld['username'] . '</p>';
                            }
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('username') . '</p>';
                            } else {
                            }
                            echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            ?>

                            </p>
                        </div>

                        <div class="[ form__password ] [ flex f-direction-column f-gap-1 ]">
                            <label for="password" class="text-dark">Password</label>
                            <input type="password" class="input" id="password" name="password" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->password : "" ?>" <?php
                                                                                                                                                                        if (isset($funcionarioNovo->errors))
                                                                                                                                                                            if ($funcionarioNovo->errors->on('password') != null)
                                                                                                                                                                                echo 'data-state="error"';
                                                                                                                                                                        ?>>

                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('password') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>
                        </div>

                        <div class="[ form__telefone ] [ flex f-direction-column f-gap-1 ]">
                            <label for="telefone" class="text-dark">Telefone</label>
                            <input type="text" class="input" id="telefone" name="telefone" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->telefone : "" ?>" <?php
                                                                                                                                                                    if (isset($funcionarioNovo->errors))
                                                                                                                                                                        if ($funcionarioNovo->errors->on('telefone') != null)
                                                                                                                                                                            echo 'data-state="error"';
                                                                                                                                                                    ?>>
                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('telefone') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__email ] [ flex f-direction-column f-gap-1 ]">
                            <label for="email" class="text-dark">Email</label>
                            <input type="text" class="input" id="email" name="email" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->email : "" ?>" <?php
                                                                                                                                                            if (isset($funcionarioNovo->errors))
                                                                                                                                                                if ($funcionarioNovo->errors->on('email') != null)
                                                                                                                                                                    echo 'data-state="error"';
                                                                                                                                                            ?>>

                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('email') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__nif ] [ flex f-direction-column f-gap-1 ]">
                            <label for="nif" class="text-dark">NIF</label>
                            <input type="text" class="input" id="nif" name="nif" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->nif : "" ?>" <?php
                                                                                                                                                        if (isset($funcionarioNovo->errors) || isset($customErrorsOnOld['nif']))
                                                                                                                                                            if ($funcionarioNovo->errors->on('nif') != null || isset($customErrorsOnOld['nif']))
                                                                                                                                                                echo 'data-state="error"';
                                                                                                                                                        ?>>

                            <?php
                            if (isset($customErrorsOnOld['nif'])) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrorsOnOld['nif'] . '</p>';
                            } else if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('nif') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__codigo-postal ] [ flex f-direction-column f-gap-1 ]">
                            <label for="cod-postal" class="text-dark">Código Postal</label>
                            <input type="text" class="input" id="cod-postal" name="codpostal" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->codpostal : "" ?>" <?php
                                                                                                                                                                        if (isset($funcionarioNovo->errors))
                                                                                                                                                                            if ($funcionarioNovo->errors->on('codpostal') != null)
                                                                                                                                                                                echo 'data-state="error"';
                                                                                                                                                                        ?>>

                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('codpostal') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__morada ] [ flex f-direction-column f-gap-1 ]">
                            <label for="morada" class="text-dark">Morada</label>
                            <input type="text" class="input" id="morada" name="morada" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->morada : "" ?>" <?php
                                                                                                                                                                if (isset($funcionarioNovo->errors))
                                                                                                                                                                    if ($funcionarioNovo->errors->on('morada') != null)
                                                                                                                                                                        echo 'data-state="error"';
                                                                                                                                                                ?>>

                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('morada') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__localidade ] [ flex f-direction-column f-gap-1 ]">
                            <label for="localidade" class="text-dark">Localidade</label>
                            <input type="text" class="input" id="localidade" name="localidade" value="<?= isset($funcionarioNovo) ? $funcionarioNovo->localidade : "" ?>" <?php
                                                                                                                                                                            if (isset($funcionarioNovo->errors))
                                                                                                                                                                                if ($funcionarioNovo->errors->on('localidade') != null)
                                                                                                                                                                                    echo 'data-state="error"';
                                                                                                                                                                            ?>>

                            <?php
                            if (isset($funcionarioNovo->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioNovo->errors->on('localidade') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>


                        <div class="[ form__options ] [ margin-top-1 ]">

                            <div class="[ form_options__subcontainer ] [ flex ]">
                                <button type="button" class="button" data-type="outline" data-close-add-modal>Cancelar</button>
                                <input type="submit" class="button" data-type="primary" value="Confirmar">
                            </div>
                        </div>
                    </form>

                    <input type="hidden" data-forced-toggle-add-modal="<?= $addModalToggle ?>">
                </dialog>

                <dialog class="[ modal ] [ flow flow-space-2 ]" id="chooseModal" data-type="choose">
                    <div class="flow flow-space-1">
                        <h2 class="text-dark">Escolha o funcionário</h2>
                        <p class="text-dark">Digite o nome do funcionário!</p>
                    </div>
                    <form action="./?c=Funcionario&a=update&username=" method="POST">
                        <div class="[ search-navigation ]">
                            <input type="text" class="[ input ] [ width-100 ]" data-searchbar>
                            <nav aria-label="funcionários navegação" class="[ search__results-container ] [ width-100 ]" data-search-results-container data-visible="false">
                                <ul class="search__results-subcontainer">
                                </ul>
                            </nav>
                        </div>
                        <div class="flex justify-content-space-between margin-top-2">
                            <button type="button" class="button" data-type="outline" data-close-choose-edit-modal>Cancelar</button>
                            <input type="submit" class="button" data-type="primary" value="Confirmar">
                        </div>
                    </form>
                </dialog>
                <dialog class="modal" id="editModal">
                    <h2 class="fs-500 text-dark">Editar Funcionário</h2>
                    <form action="./?c=Funcionario&a=update&username&id=<?= $funcionarioOld->id != null ? $funcionarioOld->id : "" ?>" method="POST" class="[ modal-form ] [ form ] [ margin-top-3 grid ]" data-type="funcionarios">
                        <div class="[ form__username ] [ flex f-direction-column f-gap-1 ]">
                            <label for="usernameOld" class="text-dark">Username</label>
                            <input type="text" class="input" id="usernameOld" name="username" value="<?= $funcionarioOld->username != null ? $funcionarioOld->username : ""  ?>" <?php
                                                                                                                                                                                    if (isset($funcionarioOld->errors) || isset($customErrorsOnOld['username']))
                                                                                                                                                                                        if ($funcionarioOld->errors->on('username') != null || isset($customErrorsOnOld['username']))
                                                                                                                                                                                            echo 'data-state="error"';
                                                                                                                                                                                    ?>>
                            <?php
                            if (isset($customErrorsOnOld['username'])) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrorsOnOld['username'] . '</p>';
                            }
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('username') . '</p>';
                            } else {
                            }
                            echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            ?>

                            </p>
                        </div>

                        <div class="[ form__password ] [ flex f-direction-column f-gap-1 ]">
                            <label for="passwordOld" class="text-dark">Password</label>
                            <input type="password" class="input" id="passwordOld" name="password" value="<?= $funcionarioOld->password != null ? $funcionarioOld->password : "" ?>" <?php
                                                                                                                                                                                    if (isset($funcionarioOld->errors))
                                                                                                                                                                                        if ($funcionarioOld->errors->on('password') != null)
                                                                                                                                                                                            echo 'data-state="error"';
                                                                                                                                                                                    ?>>

                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('password') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>
                        </div>

                        <div class="[ form__telefone ] [ flex f-direction-column f-gap-1 ]">
                            <label for="telefoneOld" class="text-dark">Telefone</label>
                            <input type="text" class="input" id="telefoneOld" name="telefone" value="<?= $funcionarioOld->telefone != null ? $funcionarioOld->telefone : "" ?>" <?php
                                                                                                                                                                                if (isset($funcionarioOld->errors))
                                                                                                                                                                                    if ($funcionarioOld->errors->on('telefone') != null)
                                                                                                                                                                                        echo 'data-state="error"';
                                                                                                                                                                                ?>>
                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('telefone') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__email ] [ flex f-direction-column f-gap-1 ]">
                            <label for="email" class="text-dark">Email</label>
                            <input type="text" class="input" id="email" name="email" value="<?= $funcionarioOld->email != null ? $funcionarioOld->email : "" ?>" <?php
                                                                                                                                                                    if (isset($funcionarioOld->errors))
                                                                                                                                                                        if ($funcionarioOld->errors->on('email') != null)
                                                                                                                                                                            echo 'data-state="error"';
                                                                                                                                                                    ?>>

                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('email') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__nif ] [ flex f-direction-column f-gap-1 ]">
                            <label for="nif" class="text-dark">NIF</label>
                            <input type="text" class="input" id="nif" name="nif" value="<?= $funcionarioOld->nif != null ? $funcionarioOld->nif : "" ?>" <?php
                                                                                                                                                            if (isset($funcionarioOld->errors) || isset($customErrorsOnOld['nif']))
                                                                                                                                                                if ($funcionarioOld->errors->on('nif') != null || isset($customErrorsOnOld['nif']))
                                                                                                                                                                    echo 'data-state="error"';
                                                                                                                                                            ?>>

                            <?php
                            if (isset($customErrorsOnOld['nif'])) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $customErrorsOnOld['nif'] . '</p>';
                            } else if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('nif') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__codigo-postal ] [ flex f-direction-column f-gap-1 ]">
                            <label for="cod-postal" class="text-dark">Código Postal</label>
                            <input type="text" class="input" id="cod-postal" name="codpostal" value="<?= $funcionarioOld->codpostal != null ? $funcionarioOld->codpostal : "" ?>" <?php
                                                                                                                                                                                    if (isset($funcionarioOld->errors))
                                                                                                                                                                                        if ($funcionarioOld->errors->on('codpostal') != null)
                                                                                                                                                                                            echo 'data-state="error"';
                                                                                                                                                                                    ?>>

                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('codpostal') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__morada ] [ flex f-direction-column f-gap-1 ]">
                            <label for="morada" class="text-dark">Morada</label>
                            <input type="text" class="input" id="morada" name="morada" value="<?= $funcionarioOld->morada != null ? $funcionarioOld->morada : "" ?>" <?php
                                                                                                                                                                        if (isset($funcionarioOld->errors))
                                                                                                                                                                            if ($funcionarioOld->errors->on('morada') != null)
                                                                                                                                                                                echo 'data-state="error"';
                                                                                                                                                                        ?>>

                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('morada') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>

                        <div class="[ form__localidade ] [ flex f-direction-column f-gap-1 ]">
                            <label for="localidade" class="text-dark">Localidade</label>
                            <input type="text" class="input" id="localidade" name="localidade" value="<?= $funcionarioOld->localidade != null ? $funcionarioOld->localidade : "" ?>" <?php
                                                                                                                                                                                        if (isset($funcionarioOld->errors))
                                                                                                                                                                                            if ($funcionarioOld->errors->on('localidade') != null)
                                                                                                                                                                                                echo 'data-state="error"';
                                                                                                                                                                                        ?>>

                            <?php
                            if (isset($funcionarioOld->errors)) {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]" data-visible="true">' . $funcionarioOld->errors->on('localidade') . '</p>';
                            } else {
                                echo ' <p class="[ input__error ] [ fs-200 italic ]"></p>';
                            }
                            ?>

                        </div>


                        <div class="[ form__options ] [ margin-top-1 ]">

                            <div class="[ form_options__subcontainer ] [ flex ]">
                                <button type="button" class="button" data-type="outline" data-close-edit-modal>Cancelar</button>
                                <input type="submit" class="button" data-type="primary" value="Confirmar">
                            </div>
                        </div>
                    </form>

                    <input type="hidden" data-forced-toggle-edit-modal="<?= $editModalToggle ?>">
                </dialog>

            </div>
            <div class="[ table-container ] [ margin-top-3 ] " data-type="dashboard">
                <div class="table-subcontainer">
                    <table class="[ table ] [ text-align-left ]" data-type="dashboard">
                        <thead>
                            <tr class="table-row" data-type="header">
                                <th class="table-cell" data-type="funcionarios-list-nome">Nome</th>
                                <th class="table-cell" data-type="funcionarios-list-email">Email</th>
                                <th class="table-cell" data-type="funcionarios-list-telefone">Telefone</th>
                                <th class="table-cell" data-type="funcionarios-list-nif">NIF</th>
                                <th class="table-cell" data-type="funcionarios-list-cod-postal">Código Postal</th>
                                <th class="table-cell" data-type="funcionarios-list-localidade">Localidade</th>
                                <th class="table-cell" data-type="funcionarios-list-morada">Morada</th>
                                <th class="table-cell" data-type="list-remove"></th>
                                <th class="table-cell" data-type="padding-left-fix"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($funcionarios == null) {
                            ?>

                                <tr class="table-row" data-type="body">
                                    <td class="[ table-cell ] [ text-align-center italic ]" colspan="9">Não tem nenhum funcionário !</td>
                                </tr>

                                <?php
                            } else if (is_array($funcionarios)) {

                                foreach ($funcionarios as $funcionario) {
                                ?>
                                    <tr class="table-row" data-type="body">
                                        <td class="table-cell"><?= $funcionario->username ?></td>
                                        <td class="table-cell"><?= $funcionario->email ?></td>
                                        <td class="table-cell"><?= $funcionario->telefone ?></td>
                                        <td class="table-cell"><?= $funcionario->nif ?></td>
                                        <td class="table-cell"><?= $funcionario->codpostal ?></td>
                                        <td class="table-cell"><?= $funcionario->localidade ?></td>
                                        <td class="table-cell"><?= $funcionario->morada ?></td>
                                        <td class="table-cell">
                                            <a href="./?c=Funcionario&a=delete&id=<?= $funcionario->id ?>" class="flex align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="fill-warning" viewBox="0 0 576 512">
                                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M576 384C576 419.3 547.3 448 512 448H205.3C188.3 448 172 441.3 160 429.3L9.372 278.6C3.371 272.6 0 264.5 0 256C0 247.5 3.372 239.4 9.372 233.4L160 82.75C172 70.74 188.3 64 205.3 64H512C547.3 64 576 92.65 576 128V384zM271 208.1L318.1 256L271 303C261.7 312.4 261.7 327.6 271 336.1C280.4 346.3 295.6 346.3 304.1 336.1L352 289.9L399 336.1C408.4 346.3 423.6 346.3 432.1 336.1C442.3 327.6 442.3 312.4 432.1 303L385.9 256L432.1 208.1C442.3 199.6 442.3 184.4 432.1 175C423.6 165.7 408.4 165.7 399 175L352 222.1L304.1 175C295.6 165.7 280.4 165.7 271 175C261.7 184.4 261.7 199.6 271 208.1V208.1z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                <?php
                                }
                            } else {
                                ?>
                                <tr class="table-row" data-type="body">
                                    <td class="table-cell"><?= $funcionarios->username ?></td>
                                    <td class="table-cell"><?= $funcionarios->email ?></td>
                                    <td class="table-cell"><?= $funcionarios->telefone ?></td>
                                    <td class="table-cell"><?= $funcionarios->nif ?></td>
                                    <td class="table-cell"><?= $funcionarios->codpostal ?></td>
                                    <td class="table-cell"><?= $funcionarios->localidade ?></td>
                                    <td class="table-cell"><?= $funcionarios->morada ?></td>
                                    <td class="table-cell">
                                        <a href="./?c=Funcionario&a=delete&id=<?= $funcionarios->id ?>" class="flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-warning" viewBox="0 0 576 512">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M576 384C576 419.3 547.3 448 512 448H205.3C188.3 448 172 441.3 160 429.3L9.372 278.6C3.371 272.6 0 264.5 0 256C0 247.5 3.372 239.4 9.372 233.4L160 82.75C172 70.74 188.3 64 205.3 64H512C547.3 64 576 92.65 576 128V384zM271 208.1L318.1 256L271 303C261.7 312.4 261.7 327.6 271 336.1C280.4 346.3 295.6 346.3 304.1 336.1L352 289.9L399 336.1C408.4 346.3 423.6 346.3 432.1 336.1C442.3 327.6 442.3 312.4 432.1 303L385.9 256L432.1 208.1C442.3 199.6 442.3 184.4 432.1 175C423.6 165.7 408.4 165.7 399 175L352 222.1L304.1 175C295.6 165.7 280.4 165.7 271 175C261.7 184.4 261.7 199.6 271 208.1V208.1z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>