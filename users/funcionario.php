<?php


Layout::includeLayout('header');?>
<?php $users = Data::get('users') ?>



<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Lista de Funcionarios</li>
    </ol>

    <h2 class="text-left top-space">Lista de Funcionarios</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped"><thead><th><h3>Id</h3></th><th><h3>Username</h3></th><th><h3>role</h3></th><th><h3>funcionarios</h3></th></thead>
                <tbody>
                <?php foreach ($users as $user) {
                    if ($user->tipouser == 'funcionario'){?>
                        <tr>
                            <td><?=$user->id?></td>
                            <td><?=$user->username?></td>
                            <td><?=$user->role?></td>
                            <td>
                                <a href="<?=Url::toRoute('user/show', $user->id)?>" class="btn btn-info" role="button">Informações</a>
                                <a href="<?=Url::toRoute('user/edit', $user->id)?>" class="btn btn-info" role="button">Alterar</a>
                                <a href="<?=Url::toRoute('user/destroy', $user->id)?>" class="btn btn-warning" role="button">Apagar Registo</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php }
                ?>

                </tbody>

            </table>

        </div>
        <div class="col-sm-6">
            <p>
                <a href="<?=Url::toRoute('home/index')?>" class="btn btn-info" role="button">Menu Principal</a>
            </p>
        </div>
    </div> <!-- /row -->

</div>	<!-- /container -->
<?php Layout::includeLayout('footer')?>
