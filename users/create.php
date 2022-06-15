<?php


Layout::includeLayout('header') ?>
<?php $users = Data::get('users')?>
<?php ErrMgr::attach($users) ?>


<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Novo Utilizador</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <hr>
                        <form method="post" action="<?=Url::toRoute('user/store')?>">
                            <div class="top-margin">
                                <label>Insira o seu username <span class="text-danger">*</span></label>
                                <input type="text" value="<?=$users->username?>" name="username" class="form-control" placeholder="Username">
                                <?= ErrMgr::bind('username') ?>
                            </div>
                            <div class="top-margin">
                                <label>Insira a sua Password <span class="text-danger">*</span></label>
                                <input type="password" value="<?=$users->password?>" name="password" class="form-control" placeholder="Password">
                                <?= ErrMgr::bind('password') ?>
                            </div>


                            <div class="top-margin">
                                <label>Insira o seu Email <span class="text-danger">*</span></label>
                                <input type="email" value="<?=$users->email?>" name="email" class="form-control" placeholder="Email">
                                <?= ErrMgr::bind('email') ?>
                            </div>

                            <div class="top-margin">
                                <label>Insira o seu telefone <span class="text-danger">*</span></label>
                                <input type="number" value="<?=$users->contacto?>" name="contacto" class="form-control" placeholder="Contacto">
                                <?= ErrMgr::bind('telefone') ?>
                            </div>

                            <div class="top-margin">
                                <label>Insira o seu nif <span class="text-danger">*</span></label>
                                <input type="number" value="<?=$users->nif?>" name="nif" class="form-control" placeholder="Nif">
                                <?= ErrMgr::bind('nif') ?>
                            </div>

                            <div class="top-margin">
                                <label>Insira a sua morada <span class="text-danger">*</span></label>
                                <input type="text" value="<?=$users->morada?>" name="morada" class="form-control" placeholder="Morada">
                                <?= ErrMgr::bind('morada') ?>
                            </div>

                            <div class="top-margin">
                                <label>Insira o seu CodPostal <span class="text-danger">*</span></label>
                                <input type="number" value="<?=$users->codpostal?>" name="codpostal" class="form-control" placeholder="CodPostal">
                                <?= ErrMgr::bind('CodPostal') ?>
                            </div>

                            <div class="top-margin">
                                <label>Insira a sua Localidade <span class="text-danger">*</span></label>
                                <input type="text" value="<?=$users->localidade?>" name="localidade" class="form-control" placeholder="Localidade">
                                <?= ErrMgr::bind('localidade') ?>
                            </div>

                            <hr>

                            <div class="col-lg-4 text-right">
                                <button class="btn btn-action" type="submit">Criar Utilizador</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

    </div>

    </article>
    <!-- /Article -->

</div>
</div>	<!-- /container -->

<?php Layout::includeLayout('footer') ?>
