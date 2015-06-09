<?php
class gjPhone
{
  protected $imgPath;//图片路径   
  protected $imgSize;//图片大小
  protected $hecData;//分离后数组
  protected $horData;//横向整理的数据
  protected $verData;//纵向整理的数据

  public $foundImgPosX;
  public $foundImgPosY;
   
  function __construct($path){
      $this->imgPath = $path;
  }
    /**
     * Save Clip to file...
     *
     * @param 
     * @return 
     */
    public function saveClip($tofile,$left,$top,$right,$bottom) {
        //创建源图的实例
        $size = getimagesize($this->imgPath);
        $src = imagecreatefromstring(file_get_contents($this->imgPath));
        //裁剪区域的宽和高
        $width = $right-$left;
        $height = $bottom-$top;
        //最终保存成图片的宽和高，和源要等比例，否则会变形
        $final_width = $right-$left;
        $final_height = $bottom-$top;
        //将裁剪区域复制到新图片上，并根据源和目标的宽高进行缩放或者拉升
        $new_image = imagecreatetruecolor($final_width, $final_height);
        imagecopyresized($new_image, $src, 0, 0, $left, $top, $final_width, $final_height, $width, $height);
        //输出图片
        imagejpeg($new_image, $tofile);
        imagedestroy($src);
        imagedestroy($new_image);
        echo "<h3>{$this->imgPath}文件裁剪區域({$left},{$top},{$right},{$bottom})保存到{$tofile}...</h3>";
    }

    /**
     * searchImg...
     *
     * @param unknown_type $path
     * @return unknown
     */
    public function searchImg($imgfile)
    {
        $src_size = getimagesize($this->imgPath);
        $src_img = imagecreatefromstring(file_get_contents($this->imgPath));
        $size = getimagesize($imgfile);
        $img = imagecreatefromstring(file_get_contents($imgfile));
        $rgb1st = imagecolorat($img,0,0);
        $rgb1starray = imagecolorsforindex($img, $rgb1st);
        $found = false;
        for($y=0; $y < $src_size[1]; ++$y)
        {  
            for($x=0; $x < $src_size[0]; ++$x)
            {
                $src_rgb = imagecolorat($src_img,$x,$y);
                $src_rgbarray = imagecolorsforindex($src_img, $src_rgb);
                /*if(122==$x && 275==$y){
                  print_r($src_rgbarray);
                  print_r($rgb1starray);
                }*/
                if(abs($src_rgbarray['red']-$rgb1starray['red']) < 16 &&
                    abs($src_rgbarray['green']-$rgb1starray['green']) < 16 &&
                    abs($src_rgbarray['blue']-$rgb1starray['blue']) < 16)
                {
                    // candidate position, check deeper...
                    $this->foundImgPosX = $x;
                    $this->foundImgPosY = $y;
                    $found = true;
                    break;
                }
            }
            if($found) break;
        }
        
        if(!$found) {
            $this->foundImgPosX = -1;
            $this->foundImgPosY = -1;
        }
        imagedestroy($src_img);
        imagedestroy($img);
    }

/**
 * 颜色分离转换...
 *
 * @param unknown_type $path
 * @return unknown
 */
  public function getHec()
    {  
        $size = getimagesize($this->imgPath);
        $res = imagecreatefromjpeg($this->imgPath);       
        for($i=0; $i < $size[1]; ++$i)
        {  
            for($j=0; $j < $size[0]; ++$j)
            {
                $rgb = imagecolorat($res,$j,$i);
                $rgbarray = imagecolorsforindex($res, $rgb);              
                if($rgbarray['red'] < 125 || $rgbarray['green']<125
                || $rgbarray['blue'] < 125)
                {
                    $data[$i][$j]=1;
                }else{
                    $data[$i][$j]=0;
                }
            }
        }
        $this->imgSize = $size;
        $this->hecData = $data;
    }
/**
 * 颜色分离后的数据横向整理...
 *
 * @return unknown
 */
public function magHorData()
{  
      
    $data = $this->hecData;
    $size = $this->imgSize;   
    $z = 0;
    for($i=0; $i<$size[1]; ++$i)  
    {
        if(in_array('1',$data[$i])){
            $z++;
            for($j=0; $j<$size[0]; ++$j)
            {  
                if($data[$i][$j] == '1'){                   
                   $newdata[$z][$j] = 1;
                }else{
                   $newdata[$z][$j] = 0;
                }
            }          
       }   
          
    }
    return $this->horData = $newdata;
}
/**
 * 整理纵向数据...
 *
 * @return unknown
 */
public function magVerData($newdata){
    for ($i=0;$i<132;++$i){
        for($j=1;$j<13;++$j){
            @$ndata[$i][$j] = $newdata[$j][$i];
        }
    }
  
      
    $sum = count($ndata);
    $c = 0;
    for ($a=0;$a<$sum;$a++){
        $value = $ndata[$a];
        if(in_array(1,$value)){           
              $ndatas[$c] = $value;
            @  $c++;
        }elseif(is_array($ndatas)){
          @$b = $c-1;
          if(in_array(1,$ndatas[$b])){
              $ndatas[$c] = $value;
              $c++;
          }
        }       
    }
      
    return $this->verData = $ndatas;
      
}
/**
 * 显示电话号码...
 *
 * @return unknown
 */
public function showPhone($ndatas){
    $phone = null;
    $d = 0;
    foreach ($ndatas as $key => $val){
        if(in_array(1,$val)){
            foreach ($val as $k => $v){
@               $ndArr[$d].=$v;
            }
        }       
        if(!in_array(1,$val)){
            $d++;
        }
    }
   foreach ($ndArr as $key01 =>$val01){
        $phone .= $this->initData($val01);
   }  
   return $phone;
}
/**
 * 分离显示...
 *
 * @param unknown_type $dataArr
 */
function drawWH($dataArr){
    if(is_array($dataArr)){
        foreach ($dataArr as $key => $val){
            foreach ($val as $k => $v){
                if($v == 0){
                    $c .= "<font color='#FFFFFF'>".$v."</font>";
                }else{
                  $c .= $v;
                }
            }
            $c .= "<br/>";
        }   
    }
   // echo $c;
}
    /**
     * 初始数据...
     *
     * @param unknown_type $numStr
     * @return unknown
     */
    public function initData($numStr){
        $result = null;
        $data = array(
            0=>'001111111001000000111000000001100000000101000000100011111100',
            1=>'010000000101000000011111111111000000000100000000010000000001',
            2=>'000000000110000000111000001101100001100111001100010111000001',
            3=>'10000000011000100001100010000111011100110111011110',
            4=>'0000000100000001110000001001000011000100110000010011111111110000000100',
            5=>'11111000011000100001100010000110001100101000011110',
            6=>'001111111001100100111000100001100010000110001100110000011110',
            7=>'1000000000100000000010000000111000011100100111000011110000001000000000',
            8=>'011100111010011100111000100001100011000111011110110111001110',
            9=>'011110000011001100011000010001100001000101001001100011111000',
        );
        foreach ($data as $key => $val){
           similar_text($numStr,$val,$pre);
           if($pre>95){//相似度95%以上
               $result = $key;
               break;
           }
        }
        return $result;
    }
}
?>