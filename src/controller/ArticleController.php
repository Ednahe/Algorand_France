<?php
require_once "./../lib/controller/Controller.php";
require_once "./../src/model/Article.php";
require_once "./../src/repository/ArticleRepository.php";

class ArticleController extends Controller {

    public function __construct() {
        parent::__construct("./../view/view_article.php");
    }

    public function index() {
        $articleRepository = new ArticleRepository("article");
        $articles = $articleRepository->findAll();
        $this->renderView(["articles"=> $articles]);
    }

    public function add() {
        $this->setPath("./../view/Add_article.php");
        if(isset($_POST["article_title"]) && isset($_POST["article_content"])) {
            $article = new Article();
            $article->setTitle(htmlentities($_POST["article_title"]));
            $article->setContent(htmlentities($_POST["article_content"]));
            $articleRepository = new ArticleRepository("article");
            $articleRepository->insert($article);
        }
    $this->renderView();
    }    

    public function SelectedArticle()
    {
        $this->setPath("./../view/selectedArticle.php");

        $articleRepository = new ArticleRepository('article');

        $article = $articleRepository->selectArticle($_GET["id"]);
        
        $this->renderView(["article" => $article[0]]);
    }

    public function deleteSelectedArticle() {
        $this->setPath("./../view/deleteArticle.php");
        $articleRepository = new ArticleRepository("article");
        $article = $articleRepository->deleteArticle($_GET["id"]);
        $this->renderView();
    }

    public function updateArticle()
    {
        $this->setPath("./../view/updateArticle.php");
        if (
            isset($_POST["article-title"]) 
            && isset($_POST["article-content"]) 
            && !empty(htmlentities($_POST["article-title"]))
            && !empty(htmlentities($_POST["article-content"]))
        ){
            $article = new Article();
            $article->setContent(htmlentities($_POST["article-content"]));
            $article->setTitle(htmlentities($_POST["article-title"]));
            
            $request = new ArticleRepository("article");
            $request->updateArticle($_GET["id"], $article);
        }
        $this->renderView();
        
    }
}