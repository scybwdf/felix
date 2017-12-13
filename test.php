<?php
require_once('./response.php');
/*$arr=array(
    'id'=>1,
    'name'=>'wf'
);*/
$arr=array('dd','ss','ss');
//echo Response::json('200','返回数据成功',$arr);

echo Response::show('200','返回数据成功',$arr,'xml');