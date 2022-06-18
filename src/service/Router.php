<?php

require_once "../src/controller/HomeController.php";
require_once "../src/controller/ErrorController.php";
require_once "../src/controller/ArticleController.php";
require_once "../src/controller/ConnexionController.php";
require_once "../src/controller/ArticleViewController.php";
require_once "../src/controller/MemoryController.php";

$page = 'home';

if (array_key_exists("page", $_GET)) $page = $_GET["page"];
switch ($page) {
    case 'home' :
        $home = new HomeController();
        $home->renderView();
        break;
    case 'article' :
        $article = new ArticleController();
        $article->index();
        break;
    case 'add_article' :
        $article = new ArticleController();
        $article->add();
        break;
    case 'view_article' :
        $article = new ArticleController();
        $article->index();
        break;
    case 'vue_article' :
        $article = new ArticleViewController();
        $article->indexView();
        break;
    case 'connexion':
        $connexion = new ConnexionController();
        $connexion->index();
        break;
    case 'deleteArticle':
        $deleteArticle = new ArticleController();
        $deleteArticle->deleteSelectedArticle();
        break;
    case 'updateArticle':
        $updateArticle = new ArticleController();
        $updateArticle->updateArticle();
        break;
    case 'selectedArticle':
        $selectArticle = new ArticleController();
        $selectArticle->selectedArticle();
        break;
    case 'memory':
        $memory = new MemoryController();
        $memory->renderView();
        break;
    default:
        $error = new ErrorController();
        $error->renderView();
        break;
}