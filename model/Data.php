<?php
/*
Item Name : Easy titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

class ModelData {

    public function clean_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = nl2br($data);

        $data = str_replace("\n", "", $data);
        $data = str_replace("\r", "", $data);

        $search = array(chr(145),
            chr(146),
            chr(147),
            chr(148),
            chr(151));

        $replace = array("'",
            "'",
            '"',
            '"',
            '-');

        $data = str_replace($search, $replace, $data);

        return $data;
    }

    public function manual_subtitles($data) {

        $data = utf8_encode($data);
        return preg_split('/<br[^>]*>/i', $data);
    }


    function auto_subtitles($data, $numberOfChars) {

        $data = utf8_encode($data);
        $data = wordwrap($data, $numberOfChars, "<br />" , true);

        return preg_split('/<br[^>]*>/i', $data);

    }

}

