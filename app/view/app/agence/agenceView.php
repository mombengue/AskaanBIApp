<?php $title = "Liste des agences Askaan Bii"; ?>

<?php ob_start(); ?>

<!-- content -->
    <div class="app">
        <div class="top-app bg-bleu">
            <div class="app-name">
                <h1 class="blanc">Askaan Bii</h1>
            </div>
            <div class="user-name">
            </div>
            <div class="app-user">
                <div class="img-user" id="drop-click">
                    <img src="<?= PUBLICS ;?>img/user.png" alt="AskaanBiBanque">
                </div>
                <div class="user-down remove-drop" id="drop-block">
                    <div class="down-item mt-25 mb-25">
                        <?= $roleUser->libellet(); ?>
                    </div>
                    <hr>
                    <div class="down-item mt-25 mb-25">
                        <a href="" class="noir">Mes informations</a>
                    </div>
                    <hr>
                    <div class="down-item mt-25 mb-25">
                        <a href="index.php?action=disconnect" class="noir">Se deconnecter</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-app bg-bleu-fonce">
            <ul>
                <li class="nav-item">
                    <a href="index.php?action=dashboard">Tableau de bord</a>
                </li>
                <li class="nav-item active">
                    <a href="index.php?action=agences">Agences</a>
                </li>
                <li class="nav-item">
                    <a href="">Administrateurs</a>
                </li>
                <li class="nav-item">
                    <a href="">Agents</a>
                </li>
                <li class="nav-item">
                    <a href="">Clients</a>
                </li>
            </ul>
        </div>
        <div class="right-app">
            <div class="container">
                <h2 class="mb-50"><a href="" class="noir">Agences</a></h2>
                <div class="data-users">
                    <div class="mb-50">
                        <a href="" class="btn bg-bleu-fonce blanc">Ajouter</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 5%;">#</th>
                                <th style="width: 20%;">Nom Agence</th>
                                <th style="width: 15%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($agences as $agence) { ?>
                                <tr>
                                    <td><?= $agence->idAgence(); ?></td>
                                    <td><?= $agence->nom(); ?></td>
                                    <td>
                                        <div class="table-action">
                                            <a href="" class="bleu-fonce mb-10">Voire</a>
                                            <a href="" class="orange mb-10">Editer</a>
                                            <a href="" class="rouge mb-10">Supprimer</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'app/app.php'); ?>
