<?php
Layout::includeLayout('header');?>
<?php $users = Data::get('users') ?>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="<?=Url::toRoute('home/index')?>">Home</a></li>
        <li class="active">Lista de Utilizadores</li>
    </ol>

    <h2 class="text-left top-space">Utilizadores</h2>
    <h2 class="top-space"></h2>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped"><thead><th><h3>Id</h3></th><th><h3>Nome</h3></th><th><h3>Username</h3></th><th><h3>Estado</h3></th><th><h3>Operações</h3></th></thead>
                <tbody>
                <?php foreach ($users as $user) {
                    if ($user->estado == 'autenticado'){?>
                        <tr>
                            <td><?=$user->id?></td>
                            <td><?=$user->username?></td>
                            <td><?=$user->role?></td>
                            <td>
                                <a href="<?=Url::toRoute('user/show', $user->id)?>" class="btn btn-info" role="button">Informações</a>
                                <?php

                                if (isset($_SESSION['tipo'])){
                                    if ($_SESSION['tipo']=='admin'){
                                        echo "<a href='". URL::toRoute('user/editadmin',$user->id) ."' class='btn btn-info role='button'>Alterar Registo</a>";
                                    }
                                    else{
                                        echo "<a href='" . URL::toRoute('user/edit',$user->id) ."'class='btn btn-info role='button'>Alterar Registo</a>";
                                    }
                                }

                                ?>
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
            <h3>Adicionar novo utilizador</h3>
            <p>
                <a href="<?=Url::toRoute('user/create')?>" class="btn btn-info" role="button">Novo</a>
            </p>
        </div>
    </div> <!-- /row -->

</div>	<!-- /container -->
<?php Layout::includeLayout('footer')?>

