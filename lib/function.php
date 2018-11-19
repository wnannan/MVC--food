<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/15
 * Time: 15:17
 */
//创建对象
class Menu {
    public $str;
//    构造函数
    function __construct()
    {
        $this-> str = '';
    }
//    方法  $currentid当前要修改的栏目id
    function getCate($mysql,$tablename,$parentid,$flag,$currentid=null){
        $pid = null;
        if($currentid){
            $arr = $mysql->query("select * from $tablename where cid=$currentid")->fetch_assoc();
            $pid = $arr['pid'];
        }

        $sql = "select * from $tablename where pid=$parentid";
        $result = $mysql->query($sql);
        $flag++;
        while ($row = $result->fetch_assoc()){
            $str = str_repeat('-',$flag);

            if($row['cid'] ==$pid){
                $this->str .= "<option selected value={$row['cid']}> {$str}{$row['title']} </option>";
            }else{
                $this->str .= "<option value={$row['cid']}> {$str}{$row['title']} </option>";
            }

            $this->getCate($mysql,$tablename,$row['cid'],$flag);
        }
        return $this->str;
    }
}