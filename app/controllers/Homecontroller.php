<?php
namespace app\controllers;

use app\repositories\CourseRepository;
   

class HomeController{

    private $courseRepo;

    public function __construct(){
        $this->courseRepo=new CourseRepository();
    }

    public function index(){
        $data=[
            'courses'=>$this->courseRepo->getAll(),
            'page'=>'home/index'
        ];
        view('master_layout',$data);
    }

    public function about(){
        $data=[
            'page'=>'home/about'
        ];

         
        view('master_layout',$data);
    }

    public function contact(){
       echo"<h1>Contact Page</h1>";
    }

    public function services(){
        echo"<h1>Service Page</h1>";
    }

}