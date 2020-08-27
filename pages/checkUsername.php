<?php
    header("content-type:text/html;charset=utf-8");
    // 接受前端数据
    $name = $_REQUEST['user_name'];
    // 连接数据库
    $conn = mysqli_connect("localhost","root","root","user");
    $result = mysqli_query($conn,"select * from info where user_name='{$name}'");
    //关闭数据库
    mysqli_close($conn);
    $arr = mysqli_fetch_all($result, MYSQL_ASSOC);
    if(count($arr)==1){
        echo "1";  //用户名已存在
    }else{
        echo "0"; //用户名不存在
    }
?>