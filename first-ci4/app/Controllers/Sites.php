<?php
//généré avec la commande php spark make:controller
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class Sites extends BaseController
{
    private $studentObject;

    public function __construct()
    {
        $this->studentObject = new StudentModel();//on définit une nouvelle instance de StudentModel
    }

    public function insertStudent()
    {
        $data = [
            "name" => "Victor Pivert",
            "email" => "vicpiv@gmail.com",
            "phone" => "0601020304",
        ];

        if($this->studentObject->insert($data)){
            echo "<h3>Student created!</h3>";
        }else{
            echo "<h3>Failed to create student!</h3>";
        }
        
    }

    public function updateStudent()
    {
        $student_id = 3;

        $updated_data= [ //données mises à jour
            "phone" => "0711223344",
        ];

        if($this->studentObject->update([ //on doit indiquer l'id de l'entrée concernée
            "id" => $student_id
        ], $updated_data)){
            echo "<h3>Student updated!</h3>";
        }else{
            echo "<h3>Failed to update student!</h3>";
        }
    }

    public function deleteStudent()
    {
        $student_id = 4;

        if($this->studentObject->delete($student_id)){
            echo "<h3>Student deleted!</h3>";
        }else{
            echo "<h3>Failed to delete student!</h3>";
        }
    }

    public function selectStudents()
    {

        $students = $this->studentObject->findAll();
        echo "<pre>";
        print_r($students);
        echo "<br>";
        
        $students = $this->studentObject->find(3);//on aura seulement l'entré avec id = 3
        echo "<pre>";
        print_r($students);
        echo "<br>";

        $student = $this->studentObject->where([
            "email" => "louis@germain.com"
        ])->get()->getRowArray();
        echo "<pre>";
        print_r($student);
    }

    /* Méthodes query builder

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
    */
}
