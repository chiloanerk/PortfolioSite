<?php

namespace App\models;

use PDO;

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        try {
            $dbConfig = require __DIR__ . '/../../config.php';

            $dsn = 'mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['database'];
            $this->pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo->setAttribute(PDO::ATTR_TIMEOUT, 5);

        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function fetchSingle($query, $params = [])
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll($query, $params = [])
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execute($query, $params = [])
    {
        $statement = $this->pdo->prepare($query);
        return $statement->execute($params);
    }

    public function getLastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}