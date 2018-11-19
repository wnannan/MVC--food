<?php
/**
 * Created by PhpStorm.
 * User: 王雅囡
 * Date: 2018/11/9
 * Time: 21:04
 */
class shop extends main {
    function __construct()
    {
        parent::__construct();
    }
    function init(){
        $id = $_GET['id'];
        $db = new DB('shop');
        $shop = $db->where("id=$id")->query("*")[0];
        $this->smarty->assign('shop',$shop);
        $this->smarty->display('shop.html');
    }
    function detail(){
//        店铺id
        $id = $_GET['id'];
        $db = new DB('goodstype');
        $types = $db->where("id=$id")->query("*");

        $gid = array_map(function ($n){
            return $n['gid'];
        },$types);

        $dbs = new DB('goods');
        $str = implode(',',$gid);
        $goods = $db->mysql->query("select * from goods where gid in ($str)")->fetch_all(MYSQLI_ASSOC);
//        var_dump($goods);
//        exit();
        $result = [];
        for($i=0;$i<count($gid);$i++){
            $result[$i] = [];
            //goodstype.title
            $result[$i]['title'] = $types[$i]['title'];
            $result[$i]['goods'] = [];
            for($j=0;$j<count($goods);$j++){
                if($goods[$j]['gid'] == $gid[$i]){
                    array_push($result[$i]['goods'],$goods[$j]);
                }
            }
        };
        echo json_encode($result);
    }
    function car(){
//        判断是否登录
        if(!$this->checklogin()){
            echo json_encode(['code'=>1,'msg'=>'请登录']);
            exit();
        }
//        订单
//        var_dump($_POST);
        $data = $_POST;
        $data['uid']=$_SESSION['userid'];
        unset($data['goods']);
        $db = new DB('orders');
        $row = $db->insert($data);
        if($row){
            $oid = $db->mysql->insert_id;
            $db = new DB('orderextra');
            $goods = $_POST['goods'];
            $keys = array_keys($goods[0]);
            array_push($keys,'oid');
            $str = implode(',',$keys);

            $sql = "insert into orderextra (";
            $sql .= $str.') values';
            $str = '';
            for($i=0;$i<count($goods);$i++){
                $str .= "(";
                $goods[$i]['oid'] = $oid;
                foreach ($goods[$i] as $v){
                    $str .= "'$v',";
                }
                $str = substr($str,0,-1) ."),";
            }
            $str = substr($str,0,-1);
            $sql .= $str;
//            var_dump($sql);
//            exit();
            $db->mysql->query($sql);
            if($db->mysql->affected_rows){
                echo json_encode(['code'=>0,'msg'=>'下单成功','orderid'=>$oid]);
            }else {
                echo json_encode(['code'=>2,'msg'=>'下单失败']);
            }
        }else{
            echo json_encode(['code'=>1,'msg'=>'下单失败']);
        }
    }
    function confirm(){
//        挂载页面
        $this->smarty->display('confirm.html');
    }
    function orderdetail(){
        $oid = $_POST['oid'];
//        orderextra表
        $db = new DB('orders');
        $order = $db->where("oid=$oid")->query("*");
        $db = new DB('orderextra');
        $goods = $db->where("oid=$oid")->query("*");
        $sid = $goods[0]['sid'];
        $db = new DB('shop');
        $shop = $db->where("id=$sid")->query("shopname");
        $result = [];
        $result['shopname'] = $shop[0]['shopname'];
        $result['goods'] = $goods;
        $result['order'] = $order[0];
        echo json_encode($result);
    }
    function paysuccess(){
        $this->smarty->display('paysuccess.html');
    }

}