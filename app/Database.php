<?php
namespace App;

try {
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri;
    if(isset($uri) && $uri == "/MyFramework-php/app/Database" || isset($uri) && $uri == "/MyFramework-php/app/Database.php")
    {
        http_response_code(404);
        echo "Erro 404 - Página não encontrada";
        header('Location: http://localhost/MyFramework-php/public/');
        exit();
    }
}
catch(\Throwable $th)
{}



class Database {
    protected $connection;
    protected $pdo;
    public function __construct() {
        $config = require_once('config/database.php');
        try {
            $this->pdo = new \PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();
        }
    }

    public function verifyUser($email, $password)
    {
        $statement = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
       
        $statement->bindParam(':email', $email, \PDO::PARAM_STR);
        $statement->bindParam(':senha', $password, \PDO::PARAM_STR);
        $statement->execute();

        $resultado = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }
}

