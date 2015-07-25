<?php
/*
Item Name : Easy titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

include_once __SITE_PATH . '/model/'. 'Data.php';
include_once __SITE_PATH . '/model/'. 'File.php';

class Controller {

    public $modelFile;
    public $modelData;


    public function __construct()  {

        $this->modelData = new ModelData();
        $this->modelFile = new ModelFile();
    }


    // Chiama il Frontend
    public function invoke() {

        include __SITE_PATH . '/view/'. 'subtitles.php';
    }


    //Gestisce il form
    public function fcp()  {

        if(isset($_POST['submit'])){

            $input = $this->modelData->clean_input($_POST["subtitles"]);

            if ($_POST['division'] == "auto") {
                $subtitles = $this->modelData->auto_subtitles($input, 50);
            } else {
                $subtitles = $this->modelData->manual_subtitles($input);
            }

            if ($_POST['version'] == "1") {
                $this->modelFile->fcp7_xml($subtitles);
            } else {
                $this->modelFile->fcpx_xml($subtitles);
            }
        }
    }



}

