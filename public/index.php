<?php

use App\Database;
ini_set('session.gc_maxlifetime',3600);
session_start();

require_once '../app/Controllers/HomeController.php';
require_once '../app/Database.php';

$request = str_replace("/MyFramework-php/public","",$_SERVER['REQUEST_URI']);

// Roteamento básico

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function viewLogin(){
    http_response_code(404);
    header('Location:/MyFramework-php/public/');
    exit();
  }

switch ($request) {
    case '/':
        $controller = new HomeController();  
        $controller->index();
        break;
    
    case '/login':
        $dba = new Database();
        $dateUser = array();

        if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST")
        {
            if(isset($_POST['email']) && isset($_POST['password']))
            {
                $email = test_input($_POST['email']);
                $password = md5(test_input($_POST['password']));
                
                $resultado = $dba->verifyUser($email, $password);

                if(count($resultado) == 1){
                    $_SESSION['sessionUser'] = array(
                        'email' => $resultado[0]['email'],
                        'password' => $resultado[0]['senha'],
                    );

                    header('Location:/MyFramework-php/public/home');
                    exit();
                }
                else{viewLogin();} 
            }
            else{viewLogin();} 
        }
        else{viewLogin();}
        
        break;
    case '/home':
        $view = new HomeController();
        $view->home();
        break;
    
        case '/logout':
            $view = new HomeController();
            $view->logout();
            break;
    default:
            http_response_code(404);
            echo "Erro 404 - Página não encontrada";
            header('Location: http://localhost/MyFramework-php/public/');
            exit();
        break;
}
