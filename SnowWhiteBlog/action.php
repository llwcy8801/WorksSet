<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/24
 * Time: 10:59
 */
//引入数据库链接文件
include('config.php');

switch ($_GET['action']) {
    case "writepost"://添加文章
        $title = $_POST['title'];
        $patch = $_POST['content'];
        $content = str_replace("\n", "<br/>", $patch);
        $jointime = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user_id'];

        $sql_insert = "insert into posts(title,content,jointime,user_id) values('{$title}','{$content}','{$jointime}',{$user_id})";
        if (mysql_query($sql_insert, $q)) {
            echo "<script>alert('添加成功');window.location='index.php'</script>";
        } else {
            echo "<script>alert('添加失败:' + mysql_error());window.history.back();</script>";
        }
        break;

    case "editpost"://修改博客
        $postid = $_GET['postid'];
        $title = $_POST['title'];
        $patch = $_POST['content'];
        $content = str_replace("\n", "<br/>", $patch);
        $jointime = date('Y-m-d H:i:s');
        $user_id = $_SESSION['user_id'];
        $sql_edit = "update posts set title='$title',content='$content',jointime='$jointime',user_id='$user_id' where id=".$postid;
        if (mysql_query($sql_edit, $q)) {
            echo "<script>alert('修改成功');window.location='showpost.php?postid=$postid'</script>";
        } else {
            echo "<script>alert('修改失败:' + mysql_error());window.history.back();</script>";
        }
        break;


    case "login"://登录
        $name = $_POST['name'];
        $pw = $_POST['pw'];
        $sql_select = "select password,id from users where username='{$name}'";
        $result = mysql_query($sql_select, $q);
        $row = mysql_fetch_array($result);

        if ($row[0]==$pw) {
            $_SESSION['user_id'] = $row[1];
            echo "<script>alert('登录成功');window.location='index.php'</script>";
        } else {
            echo "<script>alert('登录失败');window.history.back();</script>";
        }
        break;

    case "logout"://登出
        if (isset($_SESSION)) {
            unset($_SESSION['user_id']);
            echo "<script>alert('退出成功');window.location='index.php'</script>";
        } else {
            echo "<script>alert('退出失败');window.history.back();</script>";
        }
        break;

    case "reply"://添加回复
        $postid = $_GET['postid'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $patch = $_POST['content'];
        $content = str_replace("\n", "<br/>", $patch);
        $jointime = date('Y-m-d H:i:s');
        $sql_reply = "insert into reply(username,email,replytime,content,posts_id) values('$username','$email','$jointime','$content','$postid')";
        if (mysql_query($sql_reply, $q)) {
            echo "<script>alert('添加成功');window.history.back();</script>";
        } else {
            echo "<script>alert('添加失败:' + mysql_error());window.history.back();</script>";
        }
        break;

    case "doup"://点赞
        $postid = $_GET['postid'];
        $sql_up = 'update posts set up=up+1 where id=' . $postid;
        mysql_query($sql_up, $q);
        $_SESSION['doup'] = $row[1];
        break;


//    case "del"; //删除操作
//        $id = $_GET['id'];
//        $sql = "delete from stu where id={$id}";
//        $pdo->exec($sql);
//        header("Location:index.php");
//        break;
//
}
?>