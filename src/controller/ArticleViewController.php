<?php
require_once "./../lib/controller/Controller.php";
require_once "./../src/model/Article.php";
require_once "./../src/repository/ArticleRepository.php";

class ArticleViewController extends Controller {

    public function __construct() {
        parent::__construct("./../view/vue_article.php");
    }

    public function indexView() {
        $articleRepository = new ArticleRepository("article");
        $articles = $articleRepository->findAll();
        $this->renderView(["articles"=> $articles]);
    }
}