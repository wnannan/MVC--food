<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/9
 * Time: 14:00
 */
//验证码
/*
 * 属性：
 * width,height,line,pointer,num,chars,result
 * 创建图片
 * createimg,getbgcolor,drawline,drawpointer,getchar,drawtext,output
 *
 * */
class code{
//    可修改，不固定
    public $width;
    public $height;
    public $chars;  //显示的字符
    public $result;
    public $fontpath;
//    不可修改
    private $line; //干扰线
    private $pointer; //干扰点
    private $num;   //num位字符
    function __construct($w=100,$h=50)
    {
        $this->width = $w;
        $this->height = $h;
        $this->num = 4;
        $this->chars = '123456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
        $this->line = 10;
        $this->pointer = 50;
        $this->fontpath = FONT_PATH;
    }
    function createimg(){
//        创建真彩图片
        $this->img = imagecreatetruecolor($this->width,$this->height);
//        创建颜色标识
        $arr = $this->createbgcolor();
        $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
//        用颜色填充
        imagefill($this->img,0,0,$color);
    }
//    干扰线
    function drawline(){
        for($i=0;$i<$this->line;$i++){
            if($i%2){
                $x1 = mt_rand(0,$this->width/2);
                $y1 = mt_rand(0,$this->height/2);
                $x2 = mt_rand($this->width/2,$this->width);
                $y2 = mt_rand($this->height/2,$this->height);
            }else{
                $x1 = mt_rand($this->width/2,$this->width);
                $y1 = mt_rand(0,$this->height/2);
                $x2 = mt_rand(0,$this->width/2);
                $y2 = mt_rand($this->height/2,$this->height);
            }
            $arr = $this->createbgcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            imageline($this->img,$x1,$y1,$x2,$y2,$color);
        }

    }
//     点
    function drawpointer(){
        for($i=0;$i<$this->pointer;$i++){
            $arr = $this->createbgcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand(0,$this->width);
            $y = mt_rand(0,$this->height);
            imagesetpixel($this->img,$x,$y,$color);
        }
    }
//    字符
    function drawtext(){
        $str = $this->getChar();
        $w = $this->width / $this->num;
        for($i=0;$i<$this->num;$i++){
            $arr = $this->createfontcolor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand($w*$i+2,$w*($i+1)-18);
            $y = mt_rand($this->height/2,$this->height/2+18);
            imagettftext($this->img, mt_rand(20,30), mt_rand(-15,15),$x,$y,$color,$this->fontpath,$str[$i]);
        }
    }
//  创建字符
    function getChar(){
        $str = "";
        for($i=0;$i<$this->num;$i++){
            $index = mt_rand(0,strlen($this->chars)-1);
            $str .= substr($this->chars,$index,1);
        }
//        转换为小写，不需区分大小写
        $this->result = strtolower($str);
        return $str;
    }

//    创建随机色
    function createbgcolor(){
        $arr = [];
        for($i=0;$i<3;$i++){
//            随机数，深色系
            $arr[$i] = mt_rand(0,107);
        }
        return $arr;
    }
    function createfontcolor(){
        $arr = [];
        for($i=0;$i<3;$i++){
//            随机数，浅色系
            $arr[$i] = mt_rand(107,207);
        }
        return $arr;
    }
//    输出图片
    function output(){
//        设置头信息
        header('Content-type:image/png');
//        调用方法创建图片
        $this->createimg();
        $this->drawline();
        $this->drawpointer();
        $this->drawtext();
//        输出
        imagepng($this->img);
    }
}
//输出
//$code = new code();
//$code->output();