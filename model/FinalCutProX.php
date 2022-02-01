<?php
/*
Item Name : Fast titles
Item URI : http://www.ilgattohanuovecode.it
Author URI : Irene Iaccio (@nuovecode)
Version : 0.1
*/

class FinalCutProX {

    public function createFile($array) {

            $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><fcpxml version=\"1.5\"></fcpxml>");

            $resources = $xml->addChild("resources");

            foreach($array as $key => $value ) {

                $medianum= $key +3;
                $num= $key +1;
                $uidlength = 10;

                $uid = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $uidlength);

                $media = $resources->addChild("media");

                if ($key == 0) {
                    $media->addAttribute('id',  "r1");
                } else {
                    $media->addAttribute('id',  "r${medianum}");
                }

                $media->addAttribute('name', $value);
                $media->addAttribute('uid', $uid );


                $sequence = $media->addChild("sequence");
                $sequence->addAttribute('duration', "3s");
                $sequence->addAttribute('format', "r2");
                $sequence->addAttribute('tcStart', "0s");

                $spine = $sequence->addChild("spine");

                $title = $spine->addChild("title");
                $title->addAttribute('name', "Basic Title:" . " " . $value);
                $title->addAttribute('offset', "0s");
                $title->addAttribute('ref', "r3");
                $title->addAttribute('duration', "3s");
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

                if (isset($_POST['gap'])) {
                    $gap = $spine->addChild("gap");
                    $gap->addAttribute('offset', "3s");
                    $gap->addAttribute('duration',"1s");
                    $gap->addAttribute('start', "3600s");
                }

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

                    $format = $resources->addChild("format");
                    $format->addAttribute('id', "r2");
                    $format->addAttribute('name', "FFVideoFormat720p60");
                    $format->addAttribute('frameDuration', "100/6000s");
                    $format->addAttribute('width', "1280");
                    $format->addAttribute('height', "720");

                    $effect = $resources->addChild("effect");
                    $effect->addAttribute('id', "r3");
                    $effect->addAttribute('name', "Basic Title");
                    $effect->addAttribute('uid', ".../Titles.localized/Bumper:Opener.localized/Basic Title.localized/Basic Title.moti");
                }

            }

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

    }

}

