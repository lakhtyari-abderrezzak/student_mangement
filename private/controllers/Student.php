<?php 


use core\Controller;
class Student extends Controller{
    public function index(){
        echo "This is the index method of the Student Controller.";
    }

    public function show($id){
        echo "Showing details for student with ID: $id";
    }
}