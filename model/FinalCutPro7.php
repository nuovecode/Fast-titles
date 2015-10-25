<?php
/*
Item Name : Fast titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

class FinalCutPro7 {

    public function createFile($array) {

        $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><xmeml version=\"5\"></xmeml>");

        $project  = $xml->addChild("project");
        $name     = $project->addChild("name", "sottotitoli");
        $children = $project->addChild("children");

            foreach($array as $key => $value ) {

                $num= $key +1;

                $clip = $children->addChild("clip");
                $clip->addAttribute('id', $value);

                $clip->addChild("uuid", "${key}BCD77A8-F76B-4E55-956A-AE7F4B1C4ACF");
                $clip->addChild("updatebehavior", "add");
                $clip->addChild("name", sprintf("%04d" , $num) . '_' . $value);
                $clip->addChild("duration", "2880");

                $rate = $clip->addChild("rate");

                $rate->addChild("ntsc", "TRUE");
                $rate->addChild("timebase", "24");

                $clip->addChild("in", "1320");
                $clip->addChild("out", "1560");
                $clip->addChild("masterclipid", $value);
                $clip->addChild("ismasterclip", "TRUE");

                $logginginfo = $clip->addChild("logginginfo");

                $logginginfo->addChild("scene");
                $logginginfo->addChild("shottake");
                $logginginfo->addChild("lognote");
                $logginginfo->addChild("good", "false");

                $labels = $clip->addChild("labels");
                $labels->addChild("label2");

                $comments = $clip->addChild("comments");

                $comments->addChild("mastercomment1");
                $comments->addChild("mastercomment2");
                $comments->addChild("mastercomment3");
                $comments->addChild("mastercomment4");

                $media = $clip->addChild("media");

                $video = $media->addChild("video");

                $track = $video->addChild("track");
                $generatoritem = $track->addChild("generatoritem");
                $generatoritem->addAttribute('id', $value . ' '. $key);

                $generatoritem->addChild("name", $value);
                $generatoritem->addChild("duration", "2880");

                $rate = $generatoritem->addChild("rate");

                $rate->addChild("ntsc", "TRUE");
                $rate->addChild("timebase", "24");

                $generatoritem->addChild("in", "0");
                $generatoritem->addChild("out", "2880");
                $generatoritem->addChild("start", "0");
                $generatoritem->addChild("end", "2880");
                $generatoritem->addChild("anamorphic", "FALSE");
                $generatoritem->addChild("alphatype", "black");
                $generatoritem->addChild("masterclipid", $value);

                $logginginfo = $generatoritem->addChild("logginginfo");

                $logginginfo->addChild("scene");
                $logginginfo->addChild("shottake");
                $logginginfo->addChild("lognote");
                $logginginfo->addChild("good", "FALSE");

                $labels = $generatoritem->addChild("labels");

                $labels->addChild("label2");

                $comments = $generatoritem->addChild("comments");

                $comments->addChild("mastercomment1");
                $comments->addChild("mastercomment2");
                $comments->addChild("mastercomment3");
                $comments->addChild("mastercomment4");

                $effect = $generatoritem->addChild("effect");

                $effect->addChild("name", "Text");
                $effect->addChild("effectid", "Text");
                $effect->addChild("effectcategory", "Text");
                $effect->addChild("effecttype", "generator");
                $effect->addChild("mediatype", "video");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "str");
                $parameter->addChild("name", "Text");
                $parameter->addChild("value", $value);

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fontname");
                $parameter->addChild("name", "Font");
                $parameter->addChild("value", "Arial");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fontsize");
                $parameter->addChild("name", "Size");
                $parameter->addChild("valuemin", "0");
                $parameter->addChild("valuemax", "1000");
                $parameter->addChild("value", "22");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fontstyle");
                $parameter->addChild("name", "Style");
                $parameter->addChild("valuemin", "1");
                $parameter->addChild("valuemax", "4");

                $valuelist = $parameter->addChild("valuelist");

                $valueentry = $valuelist->addChild("valueentry");

                $valueentry->addChild("name", "Plain");
                $valueentry->addChild("value", "1");

                $valueentry = $valuelist->addChild("valueentry");

                $valueentry->addChild("name", "Bold");
                $valueentry->addChild("value", "2");

                $valueentry = $valuelist->addChild("valueentry");

                $valueentry->addChild("name", "Italic");
                $valueentry->addChild("value", "3");

                $valueentry = $valuelist->addChild("valueentry");

                $valueentry->addChild("name", "Bold/Italic");
                $valueentry->addChild("value", "4");

                $parameter->addChild("value", "1");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fontalign");
                $parameter->addChild("name", "Alignment");
                $parameter->addChild("valuemin", "1");
                $parameter->addChild("valuemax", "3");

                $valuelist = $parameter->addChild("valuelist");

                $valueentry = $valuelist->addChild("valueentry");
                $valueentry->addChild("name", "Left");
                $valueentry->addChild("value", "1");

                $valueentry = $valuelist->addChild("valueentry");
                $valueentry->addChild("name", "Center");
                $valueentry->addChild("value", "2");

                $valueentry = $valuelist->addChild("valueentry");
                $valueentry->addChild("name", "Right");
                $valueentry->addChild("value", "3");

                $parameter->addChild("value", "2");


                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fontcolor");
                $parameter->addChild("name", "Font Color");

                $value = $parameter->addChild("value");

                $value->addChild("alpha", "255");
                $value->addChild("red", "255");
                $value->addChild("green", "255");
                $value->addChild("blue", "255");


                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "origin");
                $parameter->addChild("name", "Origin");

                $value = $parameter->addChild("value");

                $value->addChild("horiz", "0");
                $value->addChild("vert", "0.398148");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "fonttrack");
                $parameter->addChild("name", "Tracking");
                $parameter->addChild("valuemin", "-200");
                $parameter->addChild("valuemax", "200");
                $parameter->addChild("value", "1");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "leading");
                $parameter->addChild("name", "Leading");
                $parameter->addChild("valuemin", "-100");
                $parameter->addChild("valuemax", "100");
                $parameter->addChild("value", "1");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "aspect");
                $parameter->addChild("name", "Aspect");
                $parameter->addChild("valuemin", "0.1");
                $parameter->addChild("valuemax", "5");
                $parameter->addChild("value", "1");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "autokern");
                $parameter->addChild("name", "Auto Kerning");
                $parameter->addChild("value", "TRUE");

                $parameter = $effect->addChild("parameter");

                $parameter->addChild("parameterid", "subpixel");
                $parameter->addChild("name", "Use Subpixel");
                $parameter->addChild("value", "TRUE");

                $sourcetrack = $generatoritem->addChild("sourcetrack");
                $sourcetrack->addChild("mediatype", "video");

                $itemhistory = $generatoritem->addChild("itemhistory");
                $itemhistory->addChild("uuid", "${key}A69794C-C7AD-470E-B832-76359FCADBDF");

                $track->addChild("enabled", "TRUE");
                $track->addChild("locked", "FALSE");


        }

        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="final-cut-pro-7-title.xml"');

        echo $xml->asXML();
        exit();
        //return $xml;

    }
}

