<?php 
include_once "../view/template/head.php";
include_once "../view/template/_navbar.php" 
?>

<h1>Interface de connexion</h1>
<?php
if (isset($options["responseType"])) {
    if ($options["responseType"] === "error") {
        echo "<p>Identifiant ou mot de passe incorrect</p>";
    }
    if ($options["responseType"] === "success") {
        echo "<p>Connexion effectué avec succès</p>";
    }
}
?>

<section class="section_connect">
    <form method="POST" class="form_section">
        <div>
            <p class="view">Entrez votre identifiant</p>
            <label class="view" for="username">Nom d'utilisateur</label>            
            <input type="text" id="username" name="username">           
        </div>
        <div>
            <label class="view" for="password">mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="contain_btn_connect">
            <button class="btn_connect" type="submit">Se connecter</button>
            
        </div>
    </form>

    <?php  if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
            <div>
                <a class="a_article" href="/?page=add_article">Ajouter un article</a> 
            </div>
            <?php  } ?>

</section>
<script src="/script/main.js"></script>