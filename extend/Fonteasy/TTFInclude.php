<?

namespace Fonteasy;

class TTFInclude
{
//$fonts=array("../fonts/F148-9276.ttf","../fonts/fz_hp.ttf","../fonts/fz_lx.ttf","../fonts/jd_yt.ttf","../fonts/csj_zt.ttf","../fonts/fz_sj.ttf");

function MyGetFont($index)
{
	switch ($index){
		case 0:return("../fonts/F148-9276.ttf"); break;//��
		case 1:return("../fonts/fz_hp.ttf"); break;  //����
		case 2:return("../fonts/fz_lx.ttf"); break;  //����
		case 3:return("../fonts/jd_yt.ttf"); break;  //��
		case 4:return("../fonts/csj_zt.ttf"); break; //׭
		case 5:return("../fonts/fz_sj.ttf"); break;  //�ݽ�
		case 6:return("../fonts/_fz_zb.ttf"); break; //��
		case 7:return("../fonts/fz_jz.ttf"); break;  //��ֽ
		case 8:return("../fonts/fz_pty.ttf"); break; //��ͷ��
		case 9:return("../fonts/fz_l2.ttf"); break; //����
		case 10:return("../fonts/hk_hb.ttf"); break; //����
		case 11:return("../fonts/FZTCGHJW.ttf"); break; //�����ع��
		case 12:return("../fonts/mn_xz.ttf"); break; //����С׭
		}
}

//������ɫ
$black=0;
$white=0xFFFFFF;
$gray=0xB4B4B4;

$color1=0xFF0000;
$color2=0xFF9900;
$color3=0xFFFF00;
$color4=0x00CC00;
$color5=0x0033CC;
$color6=0x3775E4;
$color7=0x660099;

$color8=0xFFB200;
$color9=0x1919B3;
$color10=0x5F0099;
$color11=0xFFFB00;

$color12=0xFF0000;
$color13=0xFF6600;
$color14=0xFFCC00;
$color15=0xFFFF00;

$color16=0x0033CC;
$color17=0x00248F;
$color18=0x809FFF;

$color19=0xCC0099;
$color20=0x660099;
$color21=0x330099;
$color22=0x0033CC;

$color23=0xFEFEFF;
$color24=0x0000c0;

$color25=0x144B19;
$color26=0x448D1C;
$color27=0xA1D616;
$color28=0xCAEF68;

$color29=0xCC0000;
$color30=0xFF0000;

$color31=0xFEFEFF;
$color32=0xFEFEFF;

$color33=0;
$color34=0;

$color35=0xFEFEFF;
$color36=0xF63969;

$color37=0x330000;
$color38=0x330000;

$color39=0x0;
$color40=0x0;

$color41=0xFFcc00;
$color42=0xFFFF00;

$color43=0x660000;

$colors=array($color1,$color2,$color3,$color4,$color5,$color6,$color7,$color8,$color9,$color10,$color11,$color12,$color13,$color14,$color15,$color16,$color17,$color18,$color19,$color20,$color21,$color22,$color23,$color24,$color25,$color26,$color27,$color28,$color29,$color30,$color31,$color32,$color33,$color34,$color35,$color36,$color37,$color38,$color39,$color40,$color41,$color42,$color43);

$cstyles=array(0,7,11,15,18,22,24,28,30,32,34,36,38,40,42,43);

//$padding=array(15,20);
//$background=array("./background/bck1.gif","./background/bck2.gif","./background/bck3.gif","./background/bck4.gif","./background/bck5.gif","./background/bck6.gif","./background/bck7.gif","./background/bck8.gif","./background/bck9.gif","./background/bck10.gif","./background/bck11.gif","./background/bck12.gif","./background/bck13.gif","./background/bck14.gif","./background/bck15.gif","./background/bck16.gif","./background/bck17.gif","./background/bck18.gif","./background/bck19.gif","./background/bck20.gif");

function MyGetBackground($index){

	return("./background/bck".($index-1+2).".gif"); break;
	
}

function imagettftextB($img,$fontsize,$angle,$x,$y,$color,$font,$text){

		imagettftext($img,$fontsize,$angle,$x+1,$y+1,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x+1,$y,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x+1,$y-1,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x,$y+1,$color,$font,$text);

		imagettftext($img,$fontsize,$angle,$x,$y-1,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-1,$y+1,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-1,$y,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-1,$y-1,$color,$font,$text);

}

function imagettftextw($img,$fontsize,$angle,$x,$y,$color,$font,$text,$weight){

		imagettftext($img,$fontsize,$angle,$x+$weight,$y+$weight,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x+$weight,$y,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x+$weight,$y-$weight,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x,$y+$weight,$color,$font,$text);

		imagettftext($img,$fontsize,$angle,$x,$y-$weight,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-$weight,$y+$weight,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-$weight,$y,$color,$font,$text);
		imagettftext($img,$fontsize,$angle,$x-$weight,$y-$weight,$color,$font,$text);

}

function swapcolor($img,$oldcolor,$newcolor,$deep){

	$rgb=$newcolor+1-1;
	$r = ($rgb >> 16) & 0xFF;
	$g = ($rgb >> 8) & 0xFF;
	$b = $rgb & 0xFF;

	$rgb2=$oldcolor+1-1;
	$r2 = ($rgb2 >> 16) & 0xFF;
	$g2 = ($rgb2 >> 8) & 0xFF;
	$b2 = $rgb2 & 0xFF;

	for ($i=0;$i<=$deep;$i++){
	  $idx=imagecolorclosest($img,$r2,$g2,$b2);
	  imagecolorset($img,$idx,$r,$g,$b);
	}
}
}
?>