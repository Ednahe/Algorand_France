<?php  
include_once "../header.php";
include_once "../view/template/_navbar.php";
?>

<h1>Ajoutez des articles</h1>

<div>
    <form method="POST">
        <div>
            <label class="view" for="article_title">Titre</label>
            <input type="text" id="article_title" name="article_title">
        </div>
        <div>
            <label class="view" for="article_content">Contenu</label>
            <textarea name="article_content" id="article_content"></textarea>
        </div>
        <input class="btn_create" type="submit" value="créer">
    </form>
    <a class="a_nav" href="/?page=view_article">Voir les articles</a> 
</div>