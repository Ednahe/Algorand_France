<?php

abstract class Repository {

    private const DATABASE_NAME = "mysql:host=db.3wa.io;port=3306;dbname=emmanueldonahue_back_projet";
    private const DATABASE_USERNAME = "emmanueldonahue";
    private const DATABASE_PASSWORD = "e3753986f80a9fec08f4068a5b50f5d3";

    public function __construct() {

    }

    private function connect() {
        return new PDO(self::DATABASE_NAME, self::DATABASE_USERNAME, self::DATABASE_PASSWORD);   
    }

    protected function executeQuery(string $query, array $params = []) {
        
        $conn = $this->connect();
        $result = $conn->prepare($query);
        foreach($params as $key => $param) $result->bindValue($key, $param);
        $result->execute();
        $conn = null;
        return $result;
    }
}