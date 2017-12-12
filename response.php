<?php

class Response{

    /**
     * 按json格式输出通信数据
     * @param integer $code 状态码
     * @param string $message 提示信息
     * @param array $data //数据
     * return string
     */
    public static function json($code,$message='',$data=array())
    {
        if(!is_numeric($code)){
            return '';
        }
        $res=array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        return json_encode($res);
        exit;

    }

    /**
     *
     */
    public static function xml(){
        echo '';
    }
}