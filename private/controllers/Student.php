<?php 



class Student extends Controller{
    public function __construct(){
        echo "Welcome to the Student Controller!";
    }

    public function index(){
        echo "This is the index method of the Student Controller.";
    }

    public function show($id){
        echo "Showing details for student with ID: $id";
    }
}