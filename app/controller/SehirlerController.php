<?php

require_once(CORE . "controller.php");



class SehirlerController extends Controller {

    public function IndexAction(){
       // view/Home/Index.php

        $this->View("/sehirler/index");
    }
    
    public function SehirAction($sehir) {
        require_once(MODEL."sehirModel.php");
        $sehirModel = new SehirModel();


        $this->View("/sehirler/sehir",["sehir"=>  $sehirModel->GetSehir($sehir)]);
    }
 }