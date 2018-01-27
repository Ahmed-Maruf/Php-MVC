<?php
/**
 * Created by PhpStorm.
 * User: spider
 * Date: 1/25/18
 * Time: 6:19 PM
 *
 * @- Base Controller
 * @- Loads the models and views
 */

class Controller
{
    //@- Load model

    public function model($model){
        //Require model file
        require_once '../app/models/'. $model . '.php';

        // Instantiate Model
        return new $model();
    }

    //@- Load view

    public function view($view, $data = []){
        // Check for the view file
        if(file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/'.$view.'.php';
        }else{
            //View does not exits

            die('View does not exits');
        }
    }
}