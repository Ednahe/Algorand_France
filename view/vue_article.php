<?php
include_once "../header.php";
include_once "./../view/template/_navbar.php";
?>

<h1>Ici les articles pour tout le monde</h1>

<div>
    <div>
        <table>
            <thead>
                <tr>
                    <th class="view">Titre</th>
                    <th class="view">Date de publication</th>
                    <th class="view">Content</th>
                </tr>
            </thead>
            <tbody class="contain_article">
                <?php if (isset($options["articles"])) {
                    foreach ($options["articles"] as $key => $article) { ?>
                        <tr>
                            <td class="view"><?php echo $article->getTitle() ?></td>
                            <td class="view"><?php echo $article->getPublishedDate() ?></td>
                            <td class="view"><?php echo $article->getContent() ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</div>