<?php 
include_once "../header.php";
include_once "./../view/template/_navbar.php";
?>

<h1>Ici les articles</h1>

<div>
    <div>
        <table>
            <thead>
                <tr>
                    <th class="view">Id</th>
                    <th class="view">Titre</th>
                    <th class="view">Date de publication</th>
                    <th class="view">Content</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($options["articles"])) {
                    foreach ($options["articles"] as $key => $article) { ?>
                        <tr>
                            <th class="view"><?php echo $article->getId() ?></th>
                            <td class="view"><?php echo $article->getTitle() ?></td>
                            <td class="view"><?php echo $article->getPublishedDate() ?></td>
                            <td class="view"><?php echo $article->getContent() ?></td>
                            <td> 
            <a class="a_admin" href="?page=deleteArticle&id=<?= $article->getId(); ?>">Supprimer</a>
            <a class="a_admin" href="?page=selectedArticle&id=<?= $article->getId(); ?>">Modifier</a></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <?php  if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
        <div>
            <a class="a_admin" href="/?page=add_article">Ajouter un article</a> 
        </div>
    <?php  } ?>
</div>