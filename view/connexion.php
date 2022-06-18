<?php 
include_once "../view/template/head.php";
include_once "../view/template/_navbar.php" 
?>

<h1>Interface de connexion</h1>
<?php
if (isset($options["responseType"])) {
    if ($options["responseType"] === "error") {
        echo "<div>Identifiant ou mot de passe incorrect</div>";
    }
    if ($options["responseType"] === "success") {
        echo "<div>Connexion effectué avec succès</div>";
    }
}
?>

<div>
    <form method="POST">
        <div>
            <label class="view" for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username">
            <div class="view">Entrer un nom d'utilisateur</div>
        </div>
        <div>
            <label class="view" for="password">mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button class="btn_connect" type="submit">Se connecter</button>
    </form>
</div>

<?php  if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
    <div>
        <a class="a_article" href="/?page=add_article">Ajouter un article</a> 
    </div>
<?php  } ?>