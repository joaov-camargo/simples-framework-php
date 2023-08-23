<?php

session_destroy();
unset($_SESSION['sessionUser']);
http_response_code(404);
echo "Erro 404 - Página não encontrada";
header('Location: http://localhost/MyFramework-php/public/');
exit();
