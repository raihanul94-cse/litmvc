<?php
// Load the model and view
class Controller{
    // Load the model (checks the file)
    public function model($model){
        // Require model file
        require_once '../app/models/' . $model . '.php';
        // Instantiate model
        return new $model();
    }

    // Load the view (checks the file)
    
    public function view($view, $data = []){
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }else{
            die("View does not exists");
        }
    }
}