<?php
namespace app\wordlist\controller;

use Grafika\Grafika;
use Grafika\Color;
use Fonteasy\GifMerge;
use Fonteasy\CNString;
use Fonteasy\ImgInclude;
use Fonteasy\TTFInclude;

class Index
{
    public function wordlist()
    {
        return 'word list';
    }

    public function ab(){
        return 'ab';
    }

    public function aaa($id){

    echo 'ID='.$id;
    echo Index::ab();
    return;

        $filepath =  'static/img/swieLogo.png';
        $fp=fopen($filepath,'r');

        ob_end_clean();
        header('Content-type: image/png');
        echo fread($fp,filesize($filepath));

    }

    public function abc()
    {
        $editor = Grafika::createEditor();
        $editor->open( $imageLogo, 'static/img/swieLogo.png');
        $editor->open( $imageBg, 'static/img/04.jpg');
        $editor->resizeFill($imageBg , 500 , 500);

        ob_start();
        $imageLogo->blob('GIF');
        $fp1 = ob_get_contents();
        ob_end_clean();

        ob_end_clean();
        header('Content-type: image/png');
        return $imageBg->blob('PNG');

    }

    public function def($word){

        $editor = Grafika::createEditor();

        $inputFile1 = 'static/nv01/1.png';
        $inputFile2 = 'static/nv01/2.png';

        $editor->open( $srcImg1, $inputFile1);
        $editor->open( $srcImg2, $inputFile2);

        $imgWidth = $srcImg1->getWidth();
        $imgHeight = $srcImg1->getHeight();

        $img1 = Grafika::createBlankImage($imgWidth,$imgHeight);
        $editor->blend ( $img1, $srcImg1 , 'normal', 0.9, 'top-left');

        $img2 = Grafika::createBlankImage($imgWidth,$imgHeight);
        $editor->blend ( $img2, $srcImg2 , 'normal', 0.9, 'top-left');

        $editor->text($img1 ,$word,16,0,0,new Color("#ff0000"),'static/fonts/fz_l2.ttf',0);
        $editor->text($img2 ,$word,16,0,0,new Color("#000000"),'static/fonts/fz_l2.ttf',0);

        $editor->draw($img1, Grafika::createDrawingObject('Line', array(0, 0), array(200, 200), 1, new Color('#FF0000')));


        $fp1 = $img1->blobRead('GIF');
        $fp2 = $img2->blobRead('GIF');

        $imgs = array($fp1,$fp2);
        $d = array(20, 20);
        $x = array(0, 0);
        $y = array(0, 0);
        $anim = new GifMerge($imgs, 252, 254, 252, 0, $d, $x, $y, 'C_MEMORY');


        ob_end_clean();
        header('Content-type: image/gif');
        echo $anim->getAnimation();
        return '';


    }


}
