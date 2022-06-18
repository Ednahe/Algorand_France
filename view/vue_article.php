<?php
include_once "./../view/template/head.php";
include_once "./../view/template/_navbar.php";
?>

<h1>Articles</h1>

<main>
    <section>
        <article class="article">
            <div class="contain_scroll_article">
                <h2>scroll</h2>
                <div id="contain_arrow">
                    <img src="/image/arrow-down-solid.svg" alt="fleche pointant vers le bas">
                </div>
            </div>
            <?php if (isset($options["articles"])) {
                    foreach ($options["articles"] as $key => $article) { ?>
                    <div class="contain_article"> 
                        <div class="contain_content">
                            <h2 class="view view_article"><?php echo $article->getTitle() ?></h2>
                            <p class="view view_article"><?php echo $article->getContent() ?></p>
                            <p class="view view_article"><?php echo $article->getPublishedDate() ?></p>
                        </div>

                    </div> 
                    <?php }
                } ?>
            
        </article>
    </section>
</main>
<script src="/script/article.js"></script>
<script src="/script/main.js"></script>
<?php
include_once "./../view/template/footer.php";
?>