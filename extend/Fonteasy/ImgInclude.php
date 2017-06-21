<?

namespace Fonteasy;

class ImgInclude
{
//$backin=array("./backin/in1.gif","./backin/in2.gif","./backin/in3.gif","./backin/in4.gif","./backin/in5.gif","./backin/in6.gif","./backin/in7.gif","./backin/in8.gif","./backin/in9.gif","./backin/in10.gif","./backin/in11.gif","./backin/in12.gif","./backin/in13.gif","./backin/in14.gif","./backin/in15.gif","./backin/in16.gif","./backin/in17.gif","./backin/in18.gif","./backin/in19.gif","./backin/in20.gif","./backin/in21.gif","./backin/in22.gif","./backin/in23.gif","./backin/in24.gif","./backin/in25.gif","./backin/in26.gif","./backin/in27.gif","./backin/in28.gif","./backin/in29.gif","./backin/in30.gif");
//$backfontcolor=array(0x186218,0xF4BED4,0xFFFFFE,0x448B28,0xC6240C,0xC6240C,0x8F6CB2,0xFC669B,0x659AFC,0xFCC654,0x53C52B,0xA43ACC,0xECD684,0xFCC91D,0x042254,0x043204,0x043264,0xFC9A04,0xFF0000,0xDC6A5C,0xFCC22C,0xA4E2FC,0xFCB6BC,0x2C328C,0x4C8A2C,0x742E8C,0x8C822C,0x04C6D4);
//$backfontcolor=array(0x186218,0xF4BED4,0xFFFFFE,0x448B28,0xC6240C,0xC6240C,0x8F6CB2,0xFC669B,0x659AFC,0xFCC654,0x53C52B,0xA43ACC,0xECD684,0xFCC91D,0x042254,0x043204,0x043264,0xFC9A04,0xFF0000,0xDC6A5C,0xFCC22C,0xA4E2FC,0xFCB6BC,0x2C328C,0x4C8A2C,0x742E8C,0x8C822C,0x04C6D4,0x000000);
//$backfontcolor=array(,,,,,,,,,,,,,,,,,,,,,,,,,,,);
//$backfontbckcolor=array(,,,,,,,,,,,,,,,,,,,,,,,,,,,);

function MyGetBackin($index){
	return ("./backin/in".($index-1+2).".gif");
}

function MyGetBackFontColor($index){
	switch ($index){
		case 0:return(0x186218); break;
		case 1:return(0xF4BED4); break;
		case 2:return(0xFFFFFE); break;
		case 3:return(0x448B28); break;
		case 4:return(0xC6240C); break;
		case 5:return(0xC6240C); break;
		case 6:return(0x8F6CB2); break;
		case 7:return(0xFC669B); break;
		case 8:return(0x659AFC); break;
		case 9:return(0xFCC654); break;
		case 10:return(0x53C52B); break;
		case 11:return(0xA43ACC); break;
		case 12:return(0xECD684); break;
		case 13:return(0xFCC91D); break;
		case 14:return(0x042254); break;
		case 15:return(0x043204); break;
		case 16:return(0x043264); break;
		case 17:return(0xFC9A04); break;
		case 18:return(0xFF0000); break;
		case 19:return(0xDC6A5C); break;
		case 20:return(0xFCC22C); break;
		case 21:return(0xA4E2FC); break;
		case 22:return(0xFCB6BC); break;
		case 23:return(0x2C328C); break;
		case 24:return(0x4C8A2C); break;
		case 25:return(0x742E8C); break;
		case 26:return(0x8C822C); break;
		case 27:return(0x04C6D4); break;
		case 28:return(0x000000); break;
		case 29:return(0xD7CB6B); break;
		case 30:return(0xD7CB6B); break;
		case 31:return(0x04065C); break;
		case 32:return(0x94C2DC); break;
		case 33:return(0x04629C); break;
		case 34:return(0x000000); break;
		case 35:return(0x000000); break;
		case 36:return(0x000000); break;
		case 37:return(0x000000); break;
		case 38:return(0x000000); break;
		case 39:return(0xEC4A2C); break;
		case 40:return(0xFCAE14); break;
		case 41:return(0x94CEFC); break;
		case 42:return(0xFCE6E4); break;
		case 43:return(0x9CD23C); break;
		case 44:return(0x040207); break;
		case 45:return(0x1C1908); break;
		case 46:return(0x865ACC); break;
		case 47:return(0x397492); break;
		case 48:return(0x0C1A21); break;
		case 49:return(0x046604); break;
		case 50:return(0x7C7D7C); break;
		case 51:return(0xEBE9E0); break;
		case 52:return(0xCEC8A0); break;
		case 53:return(0xFBCCCD); break;
		case 54:return(0xF981B1); break;
		case 55:return(0x00A0C6); break;
		case 56:return(0x765EAA); break;
		case 57:return(0x99B9D8); break;
		case 58:return(0x9AD8DE); break;
		case 59:return(0xCCEA97); break;
		case 60:return(0xEC97CA); break;
		case 61:return(0x8DCD57); break;
		case 62:return(0x4E1C79); break;
		case 63:return(0x0670B0); break;
		case 64:return(0xAF47A0); break;
		case 65:return(0xFF8C00); break;
		case 66:return(0x95CF3A); break;
		case 67:return(0xBFCBE2); break;
		case 68:return(0xFF8000); break;
		case 69:return(0xFEFEFF); break;
		case 70:return(0x000000); break;
		case 71:return(0x02A1C6); break;
		case 72:return(0xFFB46A); break;
		case 73:return(0x41B8D4); break;
		case 74:return(0xFDDFEE); break;
		case 75:return(0xC2D1D4); break;
		case 76:return(0xCBC1B2); break;
		case 77:return(0x80C3C9); break;
		case 78:return(0xFEFEFF); break;
		case 79:return(0xFEFEFF); break;
		case 80:return(0x5B5855); break;
		case 81:return(0xFEFEFF); break;
		case 82:return(0xF2FAE3); break;
		case 83:return(0xFEFEFF); break;
		case 84:return(0xFEFEFF); break;
		case 85:return(0xB2DE69); break;
		case 86:return(0x33A02C); break;
		case 87:return(0xFFFFB2); break;
		case 88:return(0xFEFEFF); break;
		case 89:return(0x80C41C); break;
		case 90:return(0x9AC2D3); break;
		case 91:return(0xC5D9E6); break;
		case 92:return(0x34B3D1); break;
		case 93:return(0x6BBA26); break;
		case 94:return(0x6BBA26); break;
		case 95:return(0xFFD638); break;
		case 96:return(0x36A1C8); break;
		case 97:return(0x66B822); break;
		case 98:return(0x110A03); break;
		case 99:return(0xA402C4); break;
		case 100:return(0x7C9A04); break;
		case 101:return(0x0456BC); break;
		case 102:return(0xFCCA04); break;
		case 103:return(0xFC3204); break;
		case 104:return(0xFC02D4); break;
		case 105:return(0xBC9204); break;
		case 106:return(0xBC0294); break;
		case 107:return(0x5C7204); break;
		case 108:return(0xA4D2FC); break;
		case 109:return(0xFCC204); break;
		case 110:return(0xAC623C); break;
		case 111:return(0xFC6A04); break;
		case 112:return(0x5C567C); break;
		case 113:return(0xB4C2A4); break;
		case 114:return(0xCC9ACC); break;
		case 115:return(0x94C204); break;
		case 116:return(0x8C8E3C); break;
		case 117:return(0xeeeeee); break;
		case 118:return(0xCCE2D3); break;
		case 119:return(0xF4D2D3); break;
		case 120:return(0xFCFCE7); break;
		case 121:return(0xEEC6EA); break;
		case 123:return(0xCECFEB); break;
		case 123:return(0xDDF7E6); break;
		case 124:return(0xDAD9DA); break;
		case 125:return(0xC4F2F4); break;
		case 126:return(0xFCEAEC); break;
		case 127:return(0xFCF2CC); break;
		case 128:return(0xF2E33C); break;
		case 129:return(0xBC12A4); break;
		case 130:return(0xDCD3C7); break;
		case 131:return(0xECCBF4); break;
		case 132:return(0xB4C610); break;
		case 133:return(0xF4C3BB); break;
		case 134:return(0xFC9DDC); break;
		case 135:return(0xFCAD64); break;
		case 136:return(0x44FE6C); break;
		case 137:return(0xBCBEFC); break;
		case 138:return(0xC4C3E6); break;
		case 139:return(0xF3C3DF); break;
		case 140:return(0xFCFCAF); break;
		case 141:return(0xFCFCD8); break;
		case 142:return(0xA6D2A6); break;
		case 143:return(0xF4DAD9); break;
		case 144:return(0xCCCDCC); break;
		case 145:return(0xF4EFDB); break;
		case 146:return(0xD6D6D6); break;
		case 147:return(0xECE9D1); break;
		case 148:return(0x740204); break;
		case 149:return(0xDEA1A3); break;
		case 150:return(0xFCE2DC); break;
		case 151:return(0xBCCEBC); break;
		case 152:return(0xFCEAC4); break;
		case 153:return(0xEC9694); break;
		case 154:return(0xE4DA9C); break;
		case 155:return(0xDCB2A4); break;
		case 156:return(0xACAEC4); break;
		case 157:return(0xBCBABC); break;
		case 158:return(0x9C9A9C); break;
		case 159:return(0xFCDA9C); break;
		case 160:return(0xECDABC); break;
		case 161:return(0xDCA254); break;
		case 162:return(0xCCF204); break;
		case 163:return(0xFCD284); break;
	}
}

function MyGetBackFontBckColor($index){
	switch ($index){
		case 0:return(0x104310); break;
		case 1:return(0xDD3277); break;
		case 2:return(0x7400A0); break;
		case 3:return(0x004B14); break;
		case 4:return(0xeeeeee); break;
		case 5:return(0xeeeeee); break;
		case 6:return(0x2842BD); break;
		case 7:return(0xC80234); break;
		case 8:return(0x0222AF); break;
		case 9:return(0xA47003); break;
		case 10:return(0x33771A); break;
		case 11:return(0x48185B); break;
		case 12:return(0xA28519); break;
		case 13:return(0x9C02CC); break;
		case 14:return(0x6A9FF8); break;
		case 15:return(0x0FCB0F); break;
		case 16:return(0x4099F8); break;
		case 17:return(0x000000); break;
		case 18:return(0xEEEEEE); break;
		case 19:return(0x8A2A1C); break;
		case 20:return(0xC38303); break;
		case 21:return(0x3091DF); break;
		case 22:return(0xB62555); break;
		case 23:return(0x787ED5); break;
		case 24:return(0x9ED781); break;
		case 25:return(0xBC7AD3); break;
		case 26:return(0xD5CB78); break;
		case 27:return(0x036870); break;
		case 28:return(0x000000); break;
		case 29:return(0x948828); break;
		case 30:return(0xAC5614); break;
		case 31:return(0x2C4DED); break;
		case 32:return(0x1EA600); break;
		case 33:return(0x120072); break;
		case 34:return(0x145E1C); break;
		case 35:return(0x145E1C); break;
		case 36:return(0x000000); break;
		case 37:return(0x252977); break;
		case 38:return(0x9B0204); break;
		case 39:return(0x99240E); break;
		case 40:return(0xFDD584); break;
		case 41:return(0x2099F9); break;
		case 42:return(0xF4B6B4); break;
		case 43:return(0xCBE89A); break;
		case 44:return(0xC5A2DF); break;
		case 45:return(0xFCD559); break;
		case 46:return(0x452577); break;
		case 47:return(0x142935); break;
		case 48:return(0x95B5DD); break;
		case 49:return(0xA5FBA5); break;
		case 50:return(0xFFDD7C); break;
		case 51:return(0x626478); break;
		case 52:return(0xD58243); break;
		case 53:return(0xF46E71); break;
		case 54:return(0xF9FFB1); break;
		case 55:return(0x00A000); break;
		case 56:return(0xA591C5); break;
		case 57:return(0x38608E); break;
		case 58:return(0xB10A61); break;
		case 59:return(0x15505E); break;
		case 60:return(0xAE6B03); break;
		case 61:return(0xFFCD57); break;
		case 62:return(0xCDAAEB); break;
		case 63:return(0xAFDFFC); break;
		case 64:return(0xE7C4E2); break;
		case 65:return(0xFFD900); break;
		case 66:return(0x659B16); break;
		case 67:return(0x819CC9); break;
		case 68:return(0xFFDB00); break;
		case 69:return(0x80C41C); break;
		case 70:return(0xFFFF00); break;
		case 71:return(0xC1F3FE); break;
		case 72:return(0xFF8E1B); break;
		case 73:return(0x80CFE3); break;
		case 74:return(0xF98CB6); break;
		case 75:return(0xC2D100); break;
		case 76:return(0x584D3A); break;
		case 77:return(0x848437); break;
		case 78:return(0xFA353D); break;
		case 79:return(0x0670B0); break;
		case 80:return(0xFFFF00); break;
		case 81:return(0x986B41); break;
		case 82:return(0x80C41C); break;
		case 83:return(0x80C41C); break;
		case 84:return(0xA3D45B); break;
		case 85:return(0xE5F5C9); break;
		case 86:return(0x0D4717); break;
		case 87:return(0x6BB921); break;
		case 88:return(0x535C31); break;
		case 89:return(0xFEBE39); break;
		case 90:return(0x36677B); break;
		case 91:return(0x64426F); break;
		case 92:return(0xFFFFB2); break;
		case 93:return(0xD9EF7F); break;
		case 94:return(0xD9EF7F); break;
		case 95:return(0x66B822); break;
		case 96:return(0x236984); break;
		case 97:return(0x447B16); break;
		case 98:return(0xE3A160); break;
		case 99:return(0xE479FE); break;
		case 100:return(0xFEFFA2); break;
		case 101:return(0x7AC7FD); break;
		case 102:return(0xFEFF8D); break;
		case 103:return(0xFCB108); break;
		case 104:return(0xFE8DFE); break;
		case 105:return(0xFEFF97); break;
		case 106:return(0xFC02FC); break;
		case 107:return(0xF49604); break;
		case 108:return(0xF2D88F); break;
		case 109:return(0xFDFE98); break;
		case 110:return(0xF4D2C4); break;
		case 111:return(0xFEFF8D); break;
		case 112:return(0xFEFF8D); break;
		case 113:return(0xF5CDB6); break;
		case 114:return(0xFCCAFC); break;
		case 115:return(0xCCFE04); break;
		case 116:return(0xCCCA94); break;
		case 117:return(0x000000); break;
		case 118:return(0xB9C600); break;
		case 119:return(0xD363FF); break;
		case 120:return(0xFFA500); break;
		case 121:return(0xFFA5FF); break;
		case 122:return(0x000074); break;
		case 123:return(0x29C65C); break;
		case 124:return(0x000000); break;
		case 125:return(0xD29900); break;
		case 126:return(0xFB9B9B); break;
		case 127:return(0xFDB047); break;
		case 128:return(0xAF4E0C); break;
		case 129:return(0x8A11C3); break;
		case 130:return(0xD4C9BC); break;
		case 131:return(0xA41CD1); break;
		case 132:return(0x2446BA); break;
		case 133:return(0xE7E095); break;
		case 134:return(0xE7E095); break;
		case 135:return(0xFDBDB8); break;
		case 136:return(0xFFC325); break;
		case 137:return(0xFEFFC1); break;
		case 138:return(0x000000); break;
		case 139:return(0x000000); break;
		case 140:return(0xC45634); break;
		case 141:return(0xC45634); break;
		case 142:return(0x0F850A); break;
		case 143:return(0x511315); break;
		case 144:return(0x595859); break;
		case 145:return(0xB41B15); break;
		case 146:return(0x000000); break;
		case 147:return(0x000000); break;
		case 148:return(0x8C8E8C); break;
		case 149:return(0xAC0A0C); break;
		case 150:return(0xC4C6EC); break;
		case 151:return(0xC4C600); break;
		case 152:return(0xFCF6BC); break;
		case 153:return(0xBD7CAA); break;
		case 154:return(0xBD7C00); break;
		case 155:return(0x4B99BB); break;
		case 156:return(0xF4B6F4); break;
		case 157:return(0x000000); break;
		case 158:return(0x000000); break;
		case 159:return(0x9AB1DD); break;
		case 160:return(0xDDC9E2); break;
		case 161:return(0x5BA5A5); break;
		case 162:return(0xD4FD99); break;
		case 163:return(0xFC463C); break;
	}
}

function TipPicture($despic,$srcpic,$offset){

	$dx=imagesx($despic);
	$dy=imagesy($despic);

	$sx=imagesx($srcpic);
	$sy=imagesy($srcpic);

	for ($i=-$offset;$i<$dx;$i+=$sx){
		for ($j=-$offset;$j<$dy;$j+=$sy){
			imagecopy($despic,$srcpic,$i,$j,0,0,$sx,$sy);
		}
	}

}

function TipPicturexy($despic,$srcpic,$offsetx,$offsety){

	$dx=imagesx($despic);
	$dy=imagesy($despic);

	$sx=imagesx($srcpic);
	$sy=imagesy($srcpic);

	for ($i=-$offsetx;$i<$dx;$i+=$sx){
		for ($j=-$offsety;$j<$dy;$j+=$sy){
			imagecopy($despic,$srcpic,$i,$j,0,0,$sx,$sy);
		}
	}

}

function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct){
        $opacity=$pct;
        // getting the watermark width
        $w = imagesx($src_im);
        // getting the watermark height
        $h = imagesy($src_im);
         
        // creating a cut resource
        $cut = imagecreatetruecolor($src_w, $src_h);
        // copying that section of the background to the cut
        imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
        // inverting the opacity
        $opacity = 100 - $opacity;
         
        // placing the watermark now
        imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $src_w, $src_h);
        imagecopymerge($dst_im, $cut, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $opacity);
    }

function imagecopyresampled_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h, $pct){


        //imagecopyresampled($dst, $src, dst_start_x, dst_start_y + 10, src_start_x, src_start_y, dst_width, dst_height ?C 20, src_width, src_height)

        $opacity=$pct;
        // getting the watermark width
        $w = imagesx($src_im);
        // getting the watermark height
        $h = imagesy($src_im);
         
        // creating a cut resource
        $cut = imagecreatetruecolor($dst_w, $dst_h);
        // copying that section of the background to the cut
		imagecopyresampled($cut, $dst_im, 0, 0, $dst_x, $dst_y, $dst_w, $dst_h, $src_w, $src_h);
        //imagecopy($cut, $dst_im, 0, 0, $dst_x, $dst_y, $src_w, $src_h);
        // inverting the opacity
        $opacity = 100 - $opacity;
         
        // placing the watermark now
        imagecopy($cut, $src_im, 0, 0, $src_x, $src_y, $dst_w, $dst_h);
        imagecopymerge($dst_im, $cut, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $opacity);
    }

/*
function TipPicture2($despic,$srcpic){

	$dx=imagesx($despic);
	$dy=imagesy($despic);

	$sx=imagesx($srcpic);
	$sy=imagesy($srcpic);

	for ($i=-20;$i<sx;$i+=dx){
		for ($j=-20;$j<sy;$j+=dy){
			imagecopy($despic,$srcpic,i,j,0,0,dx,dy);
		}
	}

}*/
}
?>