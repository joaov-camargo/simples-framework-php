<?php

try {
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri;
    if(isset($uri) && $uri == "/MyFramework-php/app/config/database.php" || isset($uri) && $uri == "/MyFramework-php/app/config/database")
    {
        http_response_code(404);
        echo "Erro 404 - Página não encontrada";
        header('Location: http://localhost/MyFramework-php/public/');
        exit();
    }
    else
    {
        return [
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'database' => '',
        ];     
    }
} 
catch (\Throwable $th) {}
