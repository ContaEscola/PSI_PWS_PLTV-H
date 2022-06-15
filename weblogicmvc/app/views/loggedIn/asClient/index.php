<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas faturas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">

    <script src="./js/dropdowns.js" defer></script>

</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]" data-type="logged-in">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="Logo">
        </div>
        <div class="[ dropdown ] [ grid g-place-items-center margin-left-auto ]">
            <button class="[ dropdown-toggle ] [ grid g-direction-column g-place-items-center  ] [ text-dark bg-white ] " data-dropdown-toggle>
                <?= $username ?> / <?= $role ?>
                <img src="./assets/dropdown-toggle__icon.svg" alt="" class="dropdown-toggle__icon">
            </button>
            <nav class="dropdown-nav" data-visible="false" aria-label="opções navegação">
                <ul class="[ dropdown-list ] [ bg-white box-shadow-1 ]">
                    <li>
                        <a class="[ dropdown-item__link ]  [ grid ]" href="./?c=Configuracoes&a=index">
                            Configurações
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="dropdown-item__icon">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="[ dropdown-item__link ] [ grid ] " data-type="warning" href="./?c=Login&a=logout">
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
    <main class="main-content" data-page="minhas-faturas">
        <h1 class="[ main-content__title ] [ text-align-center ] [ fs-600 fw-bold ] ">As
            minhas faturas
        </h1>
        <p class="[ main-title__subtext ] [ margin-top-2 text-align-center ]">
            Aqui estão apresentadas todas as suas faturas, você pode visualizá-las individualmente!
        </p>
        <p class="[ main-title__subtext ] [ margin-top-1 text-align-center ]"><span class="fw-bold">Atenção:</span> só irá aparecer as <span class="fw-bold">emitidas</span>!</p>

        <div class="[ table-container ] [ margin-top-4 ] ">
            <div class="table-subcontainer">
                <table class="[ table ] [ text-align-left ]">
                    <thead>
                        <tr class="table-row" data-type="header">
                            <th class="table-cell" data-type="faturas-list-num">Número</th>
                            <th class="table-cell" data-type="faturas-list-total">Total</th>
                            <th class="table-cell" data-type="faturas-list-dta-emissao">Data de
                                Emissão</th>
                            <th class="[ table-cell ] [ text-align-right ] " data-type="faturas-list-see"></th>
                            <th class="table-cell" data-type="padding-left-fix"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($faturas == null) {

                        ?>

                            <tr class="table-row" data-type="body">
                                <td class="[ table-cell ] [ text-align-center italic ]" colspan="5">Não tem nenhuma fatura por ver !</td>
                            </tr>

                            <?php
                        } else if (is_array($faturas)) {
                            foreach ($faturas as $fatura) {
                            ?>
                                <tr class="table-row" data-type="body">
                                    <td class="table-cell"><?= $fatura->id ?></td>
                                    <td class="table-cell"><?= round($fatura->valortotal, 2) . '€' ?></td>
                                    <td class="table-cell"><?= date_format($fatura->data, "d-m-Y H:i") ?></td>
                                    <td class="table-cell">
                                        <a href="./?c=Fatura&a=index&id=<?= $fatura->id ?>" class="flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-primary">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr class="table-row" data-type="body">
                                <td class="table-cell"><?= $faturas->id ?></td>
                                <td class="table-cell"><?= round($faturas->valortotal, 2) . '€' ?></td>
                                <td class="table-cell"><?= date_format($faturas->data, "d-m-Y H:i") ?></td>
                                <td class="table-cell">
                                    <a href="./?c=Fatura&a=index&id=<?= $fatura->id ?>" class="flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-primary">
                                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z" />
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
    </main>
</body>

</html>