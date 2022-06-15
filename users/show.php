<?php

Layout::includeLayout('header') ?>
<?php $users = Data::get('user') ?>

<!-- container -->
<div class="container">

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Detalhes do Utilizador</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <hr>

                        <form method="post" action="<?=Url::toRoute('user/index')?>">
                            <div class="top-margin">
                                <label>Username <span class="text-danger">*</span></label>
                                <input readonly="true" type="text" value="<?=$users->username?>" name="username" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label> Password <span class="text-danger">*</span></label>
                                <input readonly="true" type="text" value="<?=$users->password?>" name="password" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Email <span class="text-danger">*</span></label>
                                <input readonly="true" type="text" value="<?=$users->email?>" name="email" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Telefone <span class="text-danger">*</span></label>
                                <input readonly="true" type="number" value="<?=$users->telefone?>" name="telefone" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Nif <span class="text-danger">*</span></label>
                                <input readonly="true" type="number" value="<?=$users->nif?>" name="nif" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label> Morada <span class="text-danger">*</span></label>
                                <input readonly="true" type="text" value="<?=$users->morada?>" name="morada" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>CodPostal <span class="text-danger">*</span></label>
                                <input readonly="true" type="number"  value="<?=$users->codPostal?>" name="codPostal" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Localidade <span class="text-danger">*</span></label>
                                <input readonly="true" type="text"  value="<?=$users->localidade?>" name="localidade" class="form-control">
                            </div>

                            <div class="top-margin">
                                <label>Estado <span class="text-danger">*</span></label>
                                <input readonly="true" type="text"  value="<?=$users->estado?>" name="estado" class="form-control">
                            </div>



                            <hr>

                            <div class="col-lg-4 text-right">
                                <button class="btn btn-action" type="submit">Return</button>
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
