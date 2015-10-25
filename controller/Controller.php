<?php
/*
Item Name : Easy titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

include_once __SITE_PATH . '/model/'. 'Data.php';
include_once __SITE_PATH . '/model/'. 'FinalCutPro7.php';
include_once __SITE_PATH . '/model/'. 'FinalCutProX.php';

class Controller {

    public $modelfcp7;
    public $modelfcpx;
    public $modelData;

    public function __construct()  {

        $this->modelData  = new  ModelData();
        $this->modelfcp7  = new  FinalCutPro7();
        $this->modelfcpx  = new  FinalCutProX();
    }

    public function invoke() {

        include __SITE_PATH . '/view/'. 'subtitles.php';
    }


    public function fcp()  {

        if(isset($_POST['submit'])){

            $input = $this->modelData->clean_input($_POST["subtitles"]);

            if ($_POST['division'] == "auto") {
                $subtitles = $this->modelData->auto_subtitles($input, 50);
            } else {
                $subtitles = $this->modelData->manual_subtitles($input);
            }

            if ($_POST['version'] == "7") {
                $this->modelfcp7->createFile($subtitles);
            } else {
                $this->modelfcpx->createFile($subtitles);
            }
        }
    }

}

