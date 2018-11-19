<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/10/25
 * Time: 15:38
 */
class DB {
    public $mysql;
    public $tablename;
    public $wherestr;
    private $orderstr;
    private $limitstr;
    function __construct($tablename)
    {
        $this->config();
        $this->tablename = $tablename;
        $this->wherestr = '';
        $this->orderstr = '';
        $this->limitstr = '';
    }
    function config(){
        $this->mysql = new mysqli('localhost','root','','10.24food',3306);

        if($this->mysql->connect_error){
            echo '数据库连接失败'.$this->mysql->connect_error;
            exit();
        }
        $this->mysql->query('set names utf8');
    }
//    添加
    function insert($data){
        if(is_string($data)){
            $this->mysql->query($data);
        }else if(is_array($data)){
            $sql = "insert into $this->tablename (";
            $keys = array_keys($data);
            for($i=0;$i<count($keys);$i++){
                $sql .= $keys[$i].',';
            }
            $sql = substr($sql,0,-1).') values (';
            foreach($data as $v){
                $sql .= "'$v',";
            }
            $sql =substr($sql,0,-1).')';
//            var_dump($sql);
//            exit();
            $this->mysql->query($sql);
        }
        return $this->mysql->affected_rows;
    }
//    修改
    function update($str){
        if(is_string($str) && strpos($str,'pdate')){
            $sql = $str;
        }else if(is_string($str)){
            $jql = "update $this->tablename set $str ".$this->wherestr;
        }else if(is_array($str)){
            $sql = "update $this->tablename set ";
            foreach($str as $key=>$v){
                $sql .= "$key='$v',";
            }
            $sql = substr($sql,0,-1).$this->wherestr;
        }
            var_dump($sql);
            exit();
        $this->mysql->query($sql);
        return $this->mysql->affected_rows;
    }
//    删除
    function delete($sql){
        if(strpos($sql,'elete')){
            $sql=$sql;
            $this->mysql->query($sql);
        }else {
            $sql = "delete from $this->tablename where ".$sql;
//            var_dump($sql);
//            exit();
            $this->mysql->query($sql);
        }
        return $this->mysql->affected_rows;
    }

//    查询
    function query($str){
        if(is_string($str)&&strpos($str,'elect')){
            $sql = $str;
        }else {
            $sql = "select $str from $this->tablename";
            $sql .= $this->wherestr . $this->orderstr . $this->limitstr;
        }
//        var_dump($sql);
//        exit();
        $result = $this->mysql->query($sql)->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    function where($str){
        if(is_string($str)){
            $this->wherestr = " where ".$str;
        }else if(is_array($str) && count($str)!=0){
            $this->wherestr = " where ";
            foreach($str as $key=>$v){
                $this->wherestr .= " $key='$v' and";
            }
            $this->wherestr = substr($this->wherestr,0,-3);
        }
        return $this;
    }
    function order($key,$type){
        $this->orderstr = " order by $key $type ";
        return $this;
    }
    function limit($offset,$limit){
        $this->limitstr = " limit $offset,$limit ";
        return $this;
    }
}
