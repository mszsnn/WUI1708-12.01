<?php
/**
 * Created by PhpStorm.
 * User: 陶慧勇
 * Date: 2017/11/30
 * Time: 21:55
 */
    $user=$_REQUEST['user'];
    $pass=$_REQUEST['pass'];

    if($user=="admin"){
        if($pass=="123456"){
            echo "登陆成功";
        }else{
            echo "密码错误";
        }
    }else{
        echo "账户不存在";
    }