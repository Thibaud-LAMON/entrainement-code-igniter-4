<?php
// généré avec php spark make:seeder Student --suffix

//php spark db:seed StudentSeeder pour l'envoyer

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory; // permet de générer des données fausses

class StudentSeeder extends Seeder
{
    public function run()
    {
        $builder = $this->db->table('students');

        /*$builder->insert([ //à l'execution de la commande, ce dataset sera envoyé dans la table students
            "name" => "Quentin Terminal",
            "email" => "q.terminal@outlook.net",
            "phone" => "0202020202",
        ]);*/

        for($i = 0; $i < 10; $i++){
            $builder->insert($this->generateStudent()); //appel generateStudent() une dizaine de fois pour générer de fausses entrées
        }
    }

    public function generateStudent(){
        $faker = Factory::create(); //faker génère de fausses données

        return [
            "name" => $faker->name, //les faux noms sont générés
            "email" => $faker->email,
            "phone" => $faker->phoneNumber,
        ];
    }
}
