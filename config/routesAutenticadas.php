<?php
//ROTAS AUTENTICADAS

use Source\Controller\EditPetController;
use Source\Controller\LogoutController;
use Source\Controller\MyPetsController;
use Source\Controller\PerfilController;

return [
    '/mypets' => MyPetsController::class,
    '/perfil' => PerfilController::class,
    '/logout' => LogoutController::class,
    '/mypets/edit' => EditPetController::class
];