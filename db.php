<?php 

include("./db_mysql.php");

/**
 * Подключение к БД и работа с ней
 */
class DB{

    private $stmt;

    public static function query(string $sql):DB{
        $db = new self();
        $db->stmt = DBMysql::getInstance()->pdo()->prepare($sql);
        return $db;
    }

    public function execute(){
        $this->stmt->execute();
        return $this;
    }

    public function fetch(){
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll(){
        return $this->stmt->fetchAll();
    }

}

?>