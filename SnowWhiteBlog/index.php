<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/21
 * Time: 17:36
 */
//引入数据库链接文件
include('config.php');
//搜索数据表posts
$sql = 'select * from posts order by id desc';
$result = mysql_query($sql, $q);
?>

<?php include('header.php'); ?>
<div class="col">
    <h2 align="center">博客列表</h2>
    <?php

    while ($row = mysql_fetch_array($result)) {
        echo "<div class='post'>";
        echo "<h3 class='post-title'><a href='showpost.php?postid=$row[0]'>$row[1]</a></h3>";
        echo "<div class='post-jointime'>posted @ " . $row[3] . "</div>";
        echo "<div class='post-content'>" . $row[2] . "</div>";
        if (isset($_SESSION['user_id'])) {
            echo "<div class='post-edit'> ";
            echo "<span>浏览量（" . $row['pv'] . "）</span>";
            //echo "<a onclick='doUp($row[0])' href=''>赞（<span id='doup'>" . $row['up'] . "</span>）</a>";
            echo "<a href='editpost.php?postid=$row[0]'>编辑</a>";
            echo "</div>";
        } else {
            echo "<div class='post-edit'> ";
            echo "<span>浏览量（" . $row['pv'] . "）</span>";
            //echo "<a onclick='doUp($row[0])' href=''>赞（<span id='doup'>" . $row['up'] . "</span>）</a>";
            echo "</div>";
        }
        echo "</div>";
    }
    ?>
</div>
<?php include('footer.php'); ?>

<script>
    var title = "酷酷-首页";
    document.title = title;
</script>
