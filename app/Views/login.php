<?php
    require_once './../app/config/UrlBase.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../public/asset/css/cssstyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="vw-100 vh-90 position-relative">
    <!-- <nav class="navbar shadow-lg" style="background:#f0f0f0">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center justify-content-center" href="#">
                <span class="material-symbols-outlined" width="30" height="24" class="d-inline-block align-text-top">smart_display</span>
                <span style="margin-left: 10px;">TaskCursos</span>
            </a>
        </div>
    </nav> -->
    <main class="position-fixed container-fluid vh-100">
        <div class="row">
            <div class="col-sm-12 col-md-4 vh-100 d-flex align-items-center justify-content-center" style="background: #f9f9f9">
                <form method="POST" action="<?= $url;?>login" class="p-4 rounded col-sm-12 col-md-12">
                    <div class="mb-3">
                        <h2>Login</h2>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-center" style="background: url('../public/asset/img/login-cover-1.png') no-repeat;background-size:cover;">
                <div class="rounded p-5 d-flex flex-column" style="background:#333333ad;color:white;width:60%;height:auto">  
                    <div class="item1">
                        <h3>Bem-vindo!</h3>
                        <span>Aprenda sempre, venha se especializar conosco!</span>
                        <ul>
                            <li>Engenharia da Computação</li>
                            <li>Engenharia mecânica</li>
                            <li>Administração</li>
                            <li>More+</li>
                        </ul>
                    </div>
                    <div class="d-flex mt-3">
                        <div class="d-flex btn btn-primary" style="padding:10px;border-radius:7px">
                            <span class="material-symbols-outlined">camera</span> 
                            <span class="ms-1">Instagram</span>
                        </div>
                        <div class="d-flex btn btn-primary ms-3" style="padding:10px;border-radius:7px">
                            <span class="material-symbols-outlined" class="me-3">web</span> 
                            <span class="ms-1">Linkedin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>