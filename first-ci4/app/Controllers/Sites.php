<?php
//généré avec la commande php spark make:controller
namespace App\Controllers;

use App\Controllers\BaseController;

class Sites extends BaseController
{
    private $db;
    private $table;
    public function __construct()//création des objets table et BDD via un constructeur
    {
        $this->db = db_connect();  //on se connecte à la BDD définie dans .env
        $this->table = $this->db->table("students"); //on agit sur la table student
    }
    public function insertStudent()
    {
        $data = [
            "name" => "Jacques Beauregard",
            "email" => "jb@gmail.com",
            "phone" => "0611223300",
        ];

        if($this->table->insert($data)){
            echo "<h3>Student created!</h3>";
        }else{
            echo "<h3>Failed to create student!</h3>";
        }
        
    }
    public function updateStudent()
    {
        $student_id = 2;

        $updated_data= [ //données mises à jour
            "email" => "jb@outlook.net",
        ];

        if($this->table->update($updated_data, [ //on doit indiquer l'id de l'entrée concernée
            "id" => $student_id
        ])){
            echo "<h3>Student updated!</h3>";
        }else{
            echo "<h3>Failed to update student!</h3>";
        }
    }
    public function deleteStudent()
    {
        $student_id = 2;

        if($this->table->delete([
            "id" => $student_id
        ])){
            echo "<h3>Student deleted!</h3>";
        }else{
            echo "<h3>Failed to delete student!</h3>";
        }
    }
    public function selectStudents()
    {

        $students = $this->table->where([
            "id" => 3
        ])->get()->getRowArray();
        
        echo "<pre>";

        print_r($students);
        
    }
}
