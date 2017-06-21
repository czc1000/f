<?php

namespace Fonteasy;

class CNString
{
//�������ִ�����
function cnStrLenUTF8($str)
{
  $tmp = $str;
  $tmp = preg_replace("/([^\x01-\x7F]{3})/","T",$tmp);
  return(strlen($tmp));
}

//�������ִ�����
function cnStrLen($str)
{
   if (1 == $_REQUEST["is-utf8"]){
     return cnStrLenUTF8($str);
   }

  $tmp = $str;
  $tmp = preg_replace("/([^\x01-\x7F]{2})/","T",$tmp);
  return(strlen($tmp));
}

//�������ִ���ȡ
function cnPosStrUTF8($string,$pos)
{
   $rpos = 0;
   $ppos = 0;

   while($rpos < $pos){
     if(ord($string{$ppos})>127){
		 $ppos=$ppos+3;
	 }else{
		 $ppos=$ppos+1;
	 }
	 $rpos=$rpos+1;
   }

	if(ord($string{$ppos})>127){
	 return($string{$ppos}.$string{$ppos+1}.$string{$ppos+2});
	}else{
	 return($string{$ppos});
	}
}

//�������ִ���ȡ
function cnPosStr($string,$pos)
{

   if (1 == $_REQUEST["is-utf8"]){
     return cnPosStrUTF8($string,$pos);
   }


   $rpos = 0;
   $ppos = 0;

   while($rpos < $pos){
     if(ord($string{$ppos})>127){
		 $ppos=$ppos+2;
	 }else{
		 $ppos=$ppos+1;
	 }
	 $rpos=$rpos+1;
   }

	if(ord($string{$ppos})>127){
	 return($string{$ppos}.$string{$ppos+1});
	}else{
	 return($string{$ppos});
	}
}


function ImageBackColor($img){
	$rgb = ImageColorAt($img, 1, 1);
	$color[] = ($rgb >> 16) & 0xFF;
	$color[] = ($rgb >> 8) & 0xFF;
	$color[] = $rgb & 0xFF;
	return $color;
}
function gettextwidth($fontsize,$font,$text){
	$arr=imagettfbbox($fontsize,0,$font,$text);
	return($arr[4]);
}

function imagettftextinboxcn($img,$fontsize,$angle,$x,$y,$color,$font,$text,$boxw){

	$posx=$x;
	$posy=$y;

	$wordlen=cnStrLen($text);

   		for ($i=0; $i<=$wordlen-1; $i++){

		  //��ȡ����
		  $str = (1 == $_REQUEST["is-utf8"])?cnPosStr($text,$i):iconv("GB2312","UTF-8",cnPosStr($text,$i));
		  
		  imagettftext($img,$fontsize,0,$posx,$posy+$fontsize,$color,$font,$str);

		  //����
		  $posx = $posx + gettextwidth($fontsize,$font,$str)*1.2;
		  if ($posx > ($boxw-$fontsize)){
			  $posy = $posy + ($fontsize + $fontsize/3);
			  $posx=$x;
			 }
		}


}

function imagettftextinboxfullcn($img,$fontsize,$angle,$x,$y,$color,$font,$text,$boxw){

	$posx=$x;
	$posy=$y;

	$wordlen=cnStrLen($text);

   		for ($i=0; $i<=$wordlen-1; $i++){

		  //��ȡ����
		  $str = (1 == $_REQUEST["is-utf8"])?cnPosStr($text,$i):iconv("GB2312","UTF-8",cnPosStr($text,$i));
		  
		  imagettftext($img,$fontsize,0,$posx,$posy+$fontsize,$color,$font,$str);

		  //����
		  $posx = $posx + gettextwidth($fontsize,$font,$str)*1.2;
		  if ($posx > ($boxw-$fontsize)){
			  $posy = $posy + ($fontsize + $fontsize/3);
			  $posx=$x;
			 }
		}


}

function CheckTextBoxReturnFontsize($width,$height,$wordlen){

	//����һ����, �Լ�������, ������ƥ������ִ�С

   $fontsize=$height;
  // echo "box width=".$width."<br>";
   //echo "box height=".$height."<br>";
   $flag=false;

   while(false==$flag){

	   $posx=0;
	   $posy=$fontsize;

   		for ($i=0; $i<=$wordlen-1; $i++){

			  //����
			  $posx = $posx + $fontsize * 1.2;
			  if ($posx > ($width-$fontsize)){
				  $posy = $posy + ($fontsize + $fontsize/3);
				  $posx=0;
				 }
			}  

			if ($posx <= ($width-$fontsize) && $posy<=$height){
				$flag=true;
              //  echo "last posx=".$posx."<br>";
             //   echo "last posy=".$posy."<br>";
			}else{
				$flag=false;
				$fontsize--;
			}

        
   }

   $info=array($fontsize,$posx,$posy);

   return($info);

}

function LightColor($color){
	$r = ($color >> 16) & 0xFF;
	$g = ($color >> 8) & 0xFF;
	$b = $color & 0xFF;

	$r += 0x44;
	if ($r > 0xFF){$r = 0xFF;}
	$g += 0x44;
	if ($g > 0xFF){$g = 0xFF;}
	$b += 0x44;
	if ($b > 0xFF){$b = 0xFF;}

//exit('$color='.dechex($color).';'.'0x' . (hexdec($r << 16) | hexdec($g << 8) | hexdec($b)));
	return  (($r << 16) | ($g << 8) | ($b)) ;
}
}
?>