<?php 
include_once "../header.php";
include_once "./../view/template/_navbar.php";
?>

<form method="POST" action="?page=updateArticle&id=<?= $options["article"]->getId(); ?>">
    <div>
        <label class="view" for="article-title">Titre</label>
        <input type="text" id="article-title" name="article-title" value="<?php echo htmlentities($options["article"]->getTitle()); ?>">
    </div>
    <div>
        <label class="view" for="article-content">Contenu</label>
        <textarea type="text" name="article-content" id="article-content" value="<?php echo htmlentities($options["article"]->getContent()); ?>"></textarea>
    </div>
    <input type="hidden" name="article-id" value="<?php echo $options["article"]->getId(); ?>">
    <button class="white">Modifier</button>
</form>