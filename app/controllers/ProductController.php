<?php
namespace app\controllers;

class ProductController{

    public function index(){
        $data=[
            'page'=>'product/index'
        ];
        view('master',$data);
    }

    public function allproduct(){
        $data=[
            'page'=>'product/allproduct'
        ];
        view('master',$data);
    }

    

}

