<?php
try {
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri;
    if(isset($uri) && $uri == "/MyFramework-php/app/controllers/HomeController" || isset($uri) && $uri == "/MyFramework-php/app/controllers/HomeController.php")
    {
        http_response_code(404);
        echo "Erro 404 - Página não encontrada";
        header('Location: http://localhost/MyFramework-php/public/');
        exit();
    }
}
catch(\Throwable $th)
{}

use App\Database;

class HomeController {
    public $view = "../app/Views/";

    public function index() { 
        include "{$this->view}login.php";
    }

    public function home() { 
        include "{$this->view}home.php";
    }

    public function logout(){
        include "{$this->view}funct/logout.php";
    }

}

