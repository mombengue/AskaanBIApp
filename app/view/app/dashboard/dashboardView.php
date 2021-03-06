<?php $title = "Tableau de bord Askaan Bi"; ?>

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
                <li class="nav-item active">
                    <a href="index.php?action=dashboard">Tableau de bord</a>
                </li>
                <li class="nav-item">
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
                <h2 class="mb-50"><a href="" class="noir">Tableau de bord</a></h2>
                <div class="data">
                    <div class="data-item">
                        <h2 class="mb-25 noir">2000</h2>
                        <span class="">Administrateur</span>
                    </div>
                    <div class="data-item">
                        <h2 class="mb-25 noir">2000</h2>
                        <span class="">Agence</span>
                    </div>
                    <div class="data-item">
                        <h2 class="mb-25 noir">2000</h2>
                        <span class="">Agent</span>
                    </div>
                    <div class="data-item">
                        <h2 class="mb-25 noir">2000</h2>
                        <span class="">Client</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'app/app.php'); ?>
