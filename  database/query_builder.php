<?php
class QueryBuilder {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function select($table, $columns = '*') {
        $stmt = $this->pdo->prepare("SELECT $columns FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $data) {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_map(fn($value) => ":$value", array_keys($data)));
        $stmt = $this->pdo->prepare("INSERT INTO $table ($columns) VALUES ($values)");
        return $stmt->execute($data);
    }

    public function update($table, $data, $condition) {
        $set = implode(', ', array_map(fn($key) => "$key = :$key", array_keys($data)));
        $stmt = $this->pdo->prepare("UPDATE $table SET $set WHERE $condition");
        return $stmt->execute($data);
    }

    public function delete($table, $condition) {
        $stmt = $this->pdo->prepare("DELETE FROM $table WHERE $condition");
        return $stmt->execute();
    }
}
?>
