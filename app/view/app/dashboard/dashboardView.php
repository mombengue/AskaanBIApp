<?php $title = "Tableau de bord Askaan Bi"; ?>

<?php ob_start(); ?>

<!-- content -->
    <div class="app">
        <div class="top-app bg-bleu">
            <div class="app-name">
                <h1 class="blanc">Askann Bii Banque</h1>
            </div>
            <div class="user-name">
            </div>
            <div class="app-user">
                <div class="img-user" id="drop-click">
                    <img src="<?= PUBLICS ;?>img/user.png" alt="AskaanBiBanque">
                </div>
                <div class="user-down remove-drop" id="drop-block">
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
                    <a href="">Tableau de bord</a>
                </li>
                <li class="nav-item">
                    <a href="">Client</a>
                </li>
                <li class="nav-item">
                    <a href="">Administrateur</a>
                </li>
            </ul>
        </div>
        <div class="right-app">
            <div class="container">
                <div class="all-data">
                    
                </div>
            </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require(VIEW.'app/app.php'); ?>
