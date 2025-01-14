<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


        // BaseController fournit des fonctionnalités de base pour tous les contrôleurs de l'application (par exemple, la méthode middleware, qui ajoute des middleware à un contrôleur).

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}



