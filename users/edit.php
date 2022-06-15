<?php


Layout::includeLayout('header'); ?>
<?php $users = Data::get('user') ?>
<?php ErrMgr::attach($users) ?>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Alterar utilizador</h1>
            </header>

            <div class="panel panel-default">
                <div class="panel-body">

                    <hr>
                    <form class="form-horizontal" id="edituser" method="post" action="<?=Url::toRoute('user/update', $users->id)?>">

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">username:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?=$users->username?>" class="form-control" required name="username" placeholder="username">
                                <?= ErrMgr::bind('username') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Password:<span class="tex-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?=$users->password?>" class="form-control" required name="password" placeholder="Password">
                                <?= ErrMgr::bind('password') ?>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Email:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="email" value="<?=$users->email?>" class="form-control" required name="email" placeholder="Email">
                                <?= ErrMgr::bind('email') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Telefone:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" value="<?=$users->telefone?>" class="form-control" required name="telefone" placeholder="telefone">
                                <?= ErrMgr::bind('telefone') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Nif:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" value="<?=$users->nif?>" class="form-control" required name="nif" placeholder="nif">
                                <?= ErrMgr::bind('nif') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Morada:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?=$users->morada?>" class="form-control" required name="morada" placeholder="morada">
                                <?= ErrMgr::bind('morada') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">CodPostal:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="number" value="<?=$users->codPostal?>" class="form-control" required name="codPostal" placeholder="codPostal">
                                <?= ErrMgr::bind('codPostal') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Localidade:<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="text" value="<?=$users->localidade?>" class="form-control" required name="localidade" placeholder="localidade">
                                <?= ErrMgr::bind('localidade') ?>
                            </div>
                        </div>
                        <hr>

                        <div class="col-lg-4 text-right">
                            <button class="btn btn-default" type="submit">Guardar!</button>
                        </div>
                </div>
                </form>
            </div>
    </div>

    </article>
    <!-- /Article -->

</div>
</div>	<!-- /container -->

<?php Layout::includeLayout('footer') ?>
