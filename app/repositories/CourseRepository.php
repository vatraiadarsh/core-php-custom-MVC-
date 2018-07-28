<?php
namespace app\repositories;

class CourseRepository{
    public function getAll(){
        return[
            'PHP','Java','ASP.net'
        ];
    }
}