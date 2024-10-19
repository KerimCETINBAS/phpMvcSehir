<?php


require_once(CORE . "controller.php");
class HomeController extends Controller {
    public function IndexAction(){
       // view/Home/Index.php

        $this->View("/home/index");
    }
    

 }