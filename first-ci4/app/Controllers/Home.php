<?php

namespace App\Controllers; //le namespace indique l'arborescence du contrôleur

class Home extends BaseController //le contrôleur Home hérite du contrôleur BaseController
{
    public function index(): string //méthode baptisée index du contrôleur
    {
        return view('welcome_message'); //la méthode retourne la view welcome_message.php
    }
}
