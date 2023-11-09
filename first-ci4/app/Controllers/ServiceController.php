<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ServiceController extends BaseController
{
    public function index()
    {
        $name = 'Thibaud LAMON';
        $email = 'thib@lamon.net';
        //affiche la vue services.php avec un tableau de données réutilisables dans la vue
        return view('services', array( 
            'name' => $name,
            'emailAddress' => $email,
        ));
    }
}
