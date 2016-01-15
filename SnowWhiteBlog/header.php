<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/21
 * Time: 15:31
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/base.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<!--    头部  -->
<div class="container logo-bc">
    <div class="row logo-bc">
        <div class="logo">
            <a href="index.php">酷酷</a>
        </div>
    </div>
</div>
<!--    导航栏  -->
<div class="container nav-bc">
    <div class="row nav-bc">
        <div class="nav">
            <ul id="index-nav">
                <li><a href="colorful.php">关于</a></li>
                <li><a href="investment.php">投资</a></li>
                <li><a href="bodybuilding.php">健身</a></li>
                <li><a href="friend.php">交友</a></li>
                <li><a href="reading.php">读书</a></li>
                <li><a href="index.php">博客</a></li>
                <?php
                if(isset($_SESSION['user_id'])){
                    echo "<li><a href='writepost.php'>写博客</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<div class="scrollnav nav-bc">
    <ul>
        <li><a href="colorful.php">关于</a></li>
        <li><a href="investment.php">投资</a></li>
        <li><a href="bodybuilding.php">健身</a></li>
        <li><a href="friend.php">交友</a></li>
        <li><a href="reading.php">读书</a></li>
        <li><a href="index.php">博客</a></li>
        <?php
        if(isset($_SESSION['user_id'])){
            echo "<li><a href='writepost.php'>写博客</a></li>";
        }
        ?>
        <li><a id="scrollnav-logo" href="index.php">酷酷</a></li>
    </ul>
</div>
<div class="cb"></div>


