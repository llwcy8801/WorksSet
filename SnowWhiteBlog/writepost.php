<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/23
 * Time: 21:31
 */
//引入数据库链接文件
include('config.php');
?>

<?php include('header.php'); ?>

<div class="col">
    <h2 align="center">写博客</h2>
    <form action="action.php?action=writepost" method="post">
        <div class="writepost-post">
            <div class="writepost-title">
                <div>Title</div>
                <div><input class="writepost-title-input" type="text" name="title"/></div>
            </div>
            <div class="writepost-content">
                <div>Content</div>
                <div><textarea content style="margin: 0px; padding: 0px;  font-size: 14px; word-wrap: break-word; line-height: 18px; overflow-y: auto; overflow-x: hidden; "
                               class="textarea" name="content"></textarea></div>
            </div>
            <input type="submit" value="添加"/>
            <input type="reset" value="重置"/>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>
<script>
    var title = "写博客";
    document.title = title;
</script>


