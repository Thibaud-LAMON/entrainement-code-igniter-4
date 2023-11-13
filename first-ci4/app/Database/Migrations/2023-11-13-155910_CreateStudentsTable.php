<?php

//généré par php spark make:migration create_students_table

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class CreateStudentsTable extends Migration
{
    public function up() //défini la structure
    {
        $this->forge->addField([ //on spécifie nos colonnes dans un array
            'id'=>[
                "type" => "INT", //de type entier
                "constraint" => 5, //jusqu'à 99999
                "auto_increment" => true, //incrémentation auto
                "unsigned" => true //pas de nombre négatif
            ],
            'name'=>[
                "type" => "VARCHAR", //de type string
                "constraint" => 120, //jusqu'à 120 caractères
                "null" => false, //obligatoire
            ],
            'email'=>[
                "type" => "VARCHAR", //de type string
                "constraint" => 50, //jusqu'à 50 caractères
                "null" => true, //facultatif
            ],
            'phone'=>[
                "type" => "VARCHAR", //de type string
                "constraint" => 50, //jusqu'à 50 caractères
                "null" => true, //facultatif
            ],
        ]);
        $this->forge->addPrimaryKey('id');// nom de la colonne qui servira de clé primaire
        $this->forge->createTable("students");//on nomme la table 
    }

    public function down() //exécute une commande drop table
    {
        $this->forge->dropTable("students");//on supprime la table
    }
}

//php spark migrate:status
//php spark migrate