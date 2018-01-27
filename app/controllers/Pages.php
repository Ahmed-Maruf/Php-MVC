<?php
/**
 * Created by PhpStorm.
 * User: spider
 * Date: 1/25/18
 * Time: 7:49 PM
 */

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        $this->view('pages/index',[
            'title'=>'Welcome'
        ]);
    }

    public function about(){
        $this->view('pages/about',[
            'title' => 'About'
        ]);
    }


}