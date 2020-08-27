<?php
    header("content-type:text/html;charset=utf-8");
    //获取前端发送来的数据
    $name = $_REQUEST["user_name"];
    $pass = $_REQUEST["password"];
    //连接数据库
    $conn = mysqli_connect("localhost","root","root","user");
    $result = mysqli_query($conn,"insert into info(user_name,password) value ('".$name."','".$pass."')");    
    //关闭数据库
    mysqli_close($conn);
    if($result){
        echo "1"; //注册成功
    }else{
        echo "0"; //注册失败
    }
?>