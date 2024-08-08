<?php

class DBMysql{

    private string $host;
    private string $port;
    private string $user;
    private string $password;
    private string $charset;
    private string $db_name;

    private ?PDO $pdo;

    private static ?DBMysql $instance = null;

    private function __construct(){
        $this->host = "127.0.0.1";
        $this->db_name = "db-driver-test";
        $this->port = "3306";
        $this->user = "root";
        $this->password = "root";
        $this->charset = "utf8mb4_unicode_ci";

        $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $this->user, $this->password, $opt);
    }

    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function pdo(){
        return $this->pdo;
    }
}

?>