<?php

namespace app\models;

use PDO;
use PDOException;

abstract class Model {

    protected $table;

    private function connect() {
        $dsn = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME . ";";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            return new PDO($dsn, DBUSER, DBPASS, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
    }

    public function fetchAll($query) {
        $connectedPDO = $this->connect();
        $statementObject = $connectedPDO->query($query);
        return $statementObject->fetchAll();
    }

    public function fetchAllWithParams($query, $data = []) {
        $connectedPDO = $this->connect();
        $statementObject = $connectedPDO->prepare($query);
        $statementObject->execute($data);
        return $statementObject->fetchAll();
    }
}

?>