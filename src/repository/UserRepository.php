<?php

require_once "./../lib/repository/Repository.php";
require_once "./../src/model/User.php";

class UserRepository extends Repository {

    public function __construct(string $table) {
        $this->table = $table;
    }

    public function findOneByUsername(string $username): ?User {

        $ser = NULL;
        $query = "SELECT * FROM $this->table WHERE username = :username LIMIT 1 ;";
        $params = [
            ":username" => $username
        ];
        $result = $this->executeQuery($query, $params);
        if (count($result = ($this->executeQuery($query, $params))->fetchAll(PDO::FETCH_CLASS, "user")) > 0) {
            $user = $result[0];
        }
        return $user;
    }
}