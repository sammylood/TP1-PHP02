<?php

class CRUD extends PDO
{
    public function __construct()
    {
        parent::__construct('mysql:host=localhost; dbname=test; port=3306; charset=utf8', 'root', '');
    }

    public function select($table, $field = 'id', $order = 'ASC')
    {
        $sql = "SELECT * FROM $table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $value, $field = 'id')
    {
        $sql = "SELECT * FROM $table WHERE $field = :$field";
        // return  $sql;
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        $count = $stmt->rowCount();
        if ($count == 1) {
            return $stmt->fetch();
        } else {
            return false;
        }
    }

    public function insert($table, $data)
    {

        $fieldName = implode(', ', array_keys($data));
        $fieldValue = ":" . implode(', :', array_keys($data));

        $sql = "INSERT INTO $table ($fieldName) VALUES($fieldValue)";
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

        return $this->lastInsertId();
    }

    public function update($table, $data, $field = "id")
    {

        $fieldName = null;
        foreach ($data as $key => $value) {
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');

        $sql = "UPDATE $table SET $fieldName WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // public function delete($table, $value, $field = "id")
    // {
    //     $sql = "DELETE FROM $table WHERE $field = :$field";
    //     $stmt = $this->prepare($sql);
    //     $stmt->bindValue("$field", $value);
    //     if ($stmt->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
