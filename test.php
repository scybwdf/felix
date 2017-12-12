<?php
require_once('./response.php');
$arr=array(
    'id'=>1,
    'name'=>'wf'
);
echo Response::json('200','返回数据成功',$arr);