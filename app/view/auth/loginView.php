<?php $title = "Connection sur Askaan Bi Banque"; ?>

<?php ob_start(); ?>

    <!-- content -->
    <div class="auth">
        <div class="login bg-blanc">
            <div class="login-banque">
                <img src="<?= PUBLICS ;?>img/logo.png" alt="AskaanBiBanque" >
            </div>
            <form action="index.php?action=loginVerify" method="POST" class="login-form">
                <h2 class="mb-50">Se connecter</h2>
                <?php if(isset($_SESSION['flash'])) { ?>
                    <div class="error mb-25 <?php echo $_SESSION['flash']['type']; ?>">
                        <div class="error-message">
                            <span class="blanc">
                                <?php echo $_SESSION['flash']['message']; ?>
                            </span>
                        </div>
                    </div>
                <?php unset($_SESSION['flash']); } ?>
                <div class="form-input mb-25">
                    <label for="login" class="mb-10">Nom d'utilisateur</label>
                    <input type="text" name="login" id="login" placeholder="Entrez votre login" required>
                </div>
                <div class="form-input mb-50">
                    <label for="password" class="mb-10">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>
                </div>
                <button type="submit" class="form-button bg-bleu-fonce blanc">Se connecter</button>
            </form>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>

<?php require('auth.php'); ?>
