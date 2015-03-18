<?php
/*
Item Name : Easy titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

class ModelFile {

    public function fcp7_xml($array) { //final cut pro 7

        $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\"?><xmeml version=\"5\"></xmeml>");

        $project = $xml->addChild("project");
        $name = $project->addChild("name", "sottotitoli");
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

    } //end final cut 7

    public function fcpx_xml($array) { //final cut pro x

            $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><fcpxml version=\"1.4\"></fcpxml>");
            $resources = $xml->addChild("resources");

            foreach($array as $key => $value ) {

                //variabili utili
                $medianum= $key +3;
                $num= $key +1;
                $uidlength = 10;
                $uid = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $uidlength);
                //end

                $media = $resources->addChild("media");

                if ($key == 0) {
                    $media->addAttribute('id',  "r1");
                } else {
                    $media->addAttribute('id',  "r${medianum}");
                }

                $media->addAttribute('name', $value);
                $media->addAttribute('uid', $uid );


                $sequence = $media->addChild("sequence");
                $sequence->addAttribute('duration', "19800/2500s");
                $sequence->addAttribute('format', "r2");
                $sequence->addAttribute('tcStart', "0s");

                $spine = $sequence->addChild("spine");

                $title = $spine->addChild("title");
                $title->addAttribute('name', "Basic Title:" . " " . $value);
                $title->addAttribute('offset', "0s");
                $title->addAttribute('ref', "r3");
                $title->addAttribute('duration', "19800/2500s");
                $title->addAttribute('start', "3600s");

                $param = $title->addChild("param");
                $param->addAttribute('name', "Baseline");
                $param->addAttribute('key', "9999/999166631/999166633/5/1999891762/6");
                $param->addAttribute('value', "-430");

                $param = $title->addChild("param");
                $param->addAttribute('name', "Font");
                $param->addAttribute('key', "9999/999166631/999166633/5/1999891762/83");
                $param->addAttribute('value', "32 0");

                $text = $title->addChild("text");

                $textstyle = $text->addChild("text-style", $value);
                $textstyle->addAttribute('ref', "ts${num}");

                $textstyledef = $title->addChild("text-style-def");
                $textstyledef->addAttribute('id', "ts${num}");


                $textstyle = $textstyledef->addChild("text-style");
                $textstyle->addAttribute('font', "Arial");
                $textstyle->addAttribute('fontSize', "63");
                $textstyle->addAttribute('fontFace', "Regular");
                $textstyle->addAttribute('fontColor', "1 0.999974 0.999991 1");
                $textstyle->addAttribute('alignment', "center");

                $adjusttransform = $title->addChild("adjust-transform");
                $adjusttransform->addAttribute('position', "0 -39.8148");

                $metadata = $sequence->addChild("metadata");

                $md = $metadata->addChild("md");
                $md->addAttribute('key', "com.apple.proapps.studio.metadataFieldDominanceOverride");
                $md->addAttribute('value', "0");

                $md = $metadata->addChild("md");
                $md->addAttribute('key', "com.apple.proapps.studio.metadataAnamorphicType");
                $md->addAttribute('value', "0");

                $md = $metadata->addChild("md");
                $md->addAttribute('key', "com.apple.proapps.studio.metadataDeinterlaceType");
                $md->addAttribute('value', "0");

                if ($key == 0) {
                    //R2-R3
                    $format = $resources->addChild("format");
                    $format->addAttribute('id', "r2");
                    $format->addAttribute('name', "FFVideoFormat720p25");
                    $format->addAttribute('frameDuration', "100/2500s");
                    $format->addAttribute('width', "1280");
                    $format->addAttribute('height', "720");

                    $effect = $resources->addChild("effect");
                    $effect->addAttribute('id', "r3");
                    $effect->addAttribute('name', "Basic Title");
                    $effect->addAttribute('uid', ".../Titles.localized/Bumper:Opener.localized/Basic Title.localized/Basic Title.moti");
                }

            }

            //LIBRARY
            $library = $xml->addChild("library");
            $library->addAttribute('location', "file:///Users/ilgattohanuovecode/Movies/fcp.fcpbundle/");

            $event = $library->addChild("event");
            $event->addAttribute('name', "Sottotitoli");
            $event->addAttribute('uid', "BA63E2F0-4D48-45F1-A158-D0D2164B1FC3");

            foreach($array as $key => $value ) {
                $medianum= $key +3;

                $refclip = $event->addChild("ref-clip");
                $refclip->addAttribute('name', $value);

                if ($key == 0) {
                    $refclip->addAttribute('ref', "r1");
                } else {
                    $refclip->addAttribute('ref', "r${medianum}");
                }

                $refclip->addAttribute('duration', "19900/2500s");

            }

        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="final-cut-pro-X-title.fcpxml"');

        echo $xml->asXML();
        exit();

    }//end final cut X

} //end Model

