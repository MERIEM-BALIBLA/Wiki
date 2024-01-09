<?php
namespace App\Controller;
class BaseController
{
    // fonction pour affihcer les elements d'un tableau en utilisont la fonction extract pour extraire les données
    protected function show($view, $data = []){
        extract($data);
        include "App/view/$view.php";
    }
}
