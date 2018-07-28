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
        view('master',$data);
    }

    public function about(){
        $data=[
            'page'=>'home/about'
        ];

         
        view('master',$data);
    }

    public function contact(){
        $data=[
            'page'=>'home/contact'
        ];

         
        view('master',$data);
    }

    public function services(){
        echo"<h1>Service Page</h1>";
    }


}