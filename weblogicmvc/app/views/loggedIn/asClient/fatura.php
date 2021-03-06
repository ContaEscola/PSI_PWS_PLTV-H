<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatura <?= $fatura->id ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">

    <script src="./js/dropdowns.js" defer></script>
    <script src="./js/print-fatura.js" defer></script>
</head>

<body class="[ body ] [ grid ]">
    <header class="[ header ] [ flex ]" data-type="logged-in">
        <div class="grid g-place-items-center">
            <img src="./assets/logo.png" alt="Logo">
        </div>
        <div class="[ dropdown ] [ grid g-place-items-center margin-left-auto ]">
            <button class="[ dropdown-toggle ] [ grid g-direction-column g-place-items-center  ] [ text-dark bg-white ] " data-dropdown-toggle>
                <?= $sessionInfo['username'] ?> / <?= $sessionInfo['role'] ?>
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
    <main class="main-content">

        <a class="d-inline-block" href="./?c=Dashboard&a=index" aria-label="voltar atrás">
            <img src="./assets/go-back.svg" alt="">
        </a>

        <div class="[ fatura__menu ]  [ grid ]">
            <div>
                <h1 class="[ main-content__title ] [ margin-top-2 text-align-center ] [ fs-600 fw-bold ]">Fatura: <span id="fatura-id"><?= $fatura->id ?></span></h1>
                <p class="[ main-title__subtext ] [ text-align-center ]">A fatura em baixo será a fatura própria para impressão!
                </p>
            </div>
            <button class="button" data-type="primary" data-print-receipt>Imprimir</button>
        </div>
        <div id="fatura" class="[ fatura-container ] [ container margin-top-2 ] [ box-shadow-1 ]">
            <div class="[ fatura-container__subcontainer ] [ grid text-black ]">
                <div class="flex">
                    <section class="flex-grow flow flow-space-2" aria-label="Dados do cliente">
                        <h2>Dados do cliente:</h2>
                        <p><?= $cliente->username ?></p>
                        <p>NIF: <?= $cliente->nif ?></p>
                        <p>Email: <?= $cliente->email ?></p>
                        <p>Telemóvel: <?= $cliente->telefone ?></p>
                        <p>Morada: <?= $cliente->morada ?></p>
                    </section>
                    <section class="[ fatura__dados-empresa ] [ flow flow-space-1 word-wrap-break-word ]" aria-label="Dados da empresa">
                        <h2><?= $empresa->designacaosocial ?></h2>
                        <p>Email: <?= $empresa->email ?></p>
                        <p>NIF: <?= $empresa->nif ?></p>
                    </section>
                </div>
                <hr class="fatura-content__separator">
                <section aria-label="Produtos comprados">
                    <h2>Produtos comprados:</h2>
                    <table class="[ fatura__products-list ] [ margin-top-2 text-align-left ]">
                        <thead>
                            <tr class="table-row" data-type="header">
                                <th class="[ table-cell ] [ word-wrap-break-word ]" data-type="fatura-products-referencia">Referência</th>
                                <th class="[ table-cell ] [ word-wrap-break-word ]" data-type="fatura-products-descricao">Descrição</th>
                                <th class="[ table-cell ] [ word-wrap-break-word ]" data-type="fatura-products-preco-uni">Preço Un.</th>
                                <th class="[ table-cell ] [ word-wrap-break-word text-align-right ]" data-type="fatura-products-quantidade">Qtd.</th>
                                <th class="[ table-cell ] [ word-wrap-break-word text-align-right ]" data-type="fatura-products-iva">IVA
                                </th>
                                <th class="[ table-cell ] [ word-wrap-break-word text-align-right ]" data-type="fatura-products-total">Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            if (is_array($faturaFormatada)) {
                                foreach ($faturaFormatada as $linhaFatura) {

                            ?>

                                    <tr class="table-row" data-type="body">
                                        <td class="[ table-cell ] [ word-wrap-break-word ]"><?= $linhaFatura->referencia ?></td>
                                        <td class="[ table-cell ] [ word-wrap-break-word ]"><?= $linhaFatura->descricao ?></td>
                                        <td class="[ table-cell ] [ word-wrap-break-word ]"><?= round($linhaFatura->preco, 2) . '€' ?></td>
                                        <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= $linhaFatura->quantidade ?></td>
                                        <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= round($linhaFatura->valoriva) . '€' ?></td>
                                        <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= round($linhaFatura->valorunitario) . '€' ?></td>
                                    </tr>

                                <?php
                                }
                            } else {
                                ?>
                                <tr class="table-row" data-type="body">
                                    <td class="[ table-cell ] [ word-wrap-break-word ]"><?= $faturaFormatada->referencia ?></td>
                                    <td class="[ table-cell ] [ word-wrap-break-word ]"><?= $faturaFormatada->descricao ?></td>
                                    <td class="[ table-cell ] [ word-wrap-break-word ]"><?= round($faturaFormatada->preco, 2) . '€' ?></td>
                                    <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= $faturaFormatada->quantidade ?></td>
                                    <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= round($faturaFormatada->valoriva) . '€' ?></td>
                                    <td class="[ table-cell ] [ word-wrap-break-word text-align-right ]"><?= round($faturaFormatada->valorunitario) . '€' ?></td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>

                        <tfoot>
                            <tr class="table-row" data-type="body">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="[ table-cell ] [ word-wrap-break-word text-align-right ] [ border-top-1 ]">
                                    <?= round($fatura->ivatotal, 2) . '€' ?></td>
                                <td class="[ table-cell ] [ word-wrap-break-word text-align-right ] [ border-top-1 ]">
                                    <?= round($fatura->valortotal, 2) . '€' ?> </td>
                            </tr>
                        </tfoot>
                    </table>
                </section>
                <hr class="fatura-content__separator">
                <section aria-label="Operador">
                    <p>Operador: <?= $funcionario->username ?></p>
                </section>
            </div>
        </div>
    </main>
</body>

</html>