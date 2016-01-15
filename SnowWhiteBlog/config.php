<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/21
 * Time: 15:40
 */
$q = mysql_connect("localhost:3306","root","");
if(!$q){
    $mysql_error=iconv('gbk', 'utf-8', mysql_error());
    die('Could not connect:'.$mysql_error());
}
session_start();
//以utf8读取数据
mysql_query("set names utf8");
//数据库
mysql_select_db("thirteenchicken",$q);
//设置时区
date_default_timezone_set('Asia/Shanghai');
?>

