<?php

require_once "./../lib/repository/Repository.php";
require_once "./../src/model/Article.php";

class ArticleRepository extends Repository {
    
    private string $table;

    public function __construct(string $table) {
        $this->table = $table;
    }

    public function findAll(): array {
        $query = "SELECT * FROM $this->table ;";
        return ($this->executeQuery($query))->fetchAll(PDO::FETCH_CLASS, "Article");
    }

    public function insert(Article $article) {
        $query = "INSERT INTO article (title, content) VALUES (:title, :content);";
        $params = [
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(),
        ];
        $this->executeQuery($query, $params);
    }

    public function deleteArticle($id) {        
        
        $query = "DELETE FROM article WHERE id=:id;";
        $params = [
            ":id" => $id
        ];
        return $this->executeQuery($query, $params);
    }

    public function updateArticle($id, Article $article) {

        $query = "UPDATE article SET content=:content, title=:title WHERE id=:id;";
        $params = [
            ":content" => $article->getContent(),
            ":title" => $article->getTitle(),
            ":id" => $id
        ];
        $result = $this->executeQuery($query, $params);
    }

    public function selectArticle($id)
    {
        $query = "SELECT * FROM article WHERE id = :id ;";

        $params = [
            ":id" => $id
        ];

        $result = $this->executeQuery($query, $params);
        return $result->fetchAll(PDO::FETCH_CLASS, "article");
    }
}