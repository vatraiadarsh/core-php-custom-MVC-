<?php

function view($page,$data=null){
    include_once($_SERVER['DOCUMENT_ROOT']."./views/".$page.".php");
}
