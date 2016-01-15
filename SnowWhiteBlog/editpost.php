<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/28
 * Time: 16:26
 */
//引入数据库链接文件
include('config.php');
$sql_select = "select * from posts where id=".$_GET['postid'];
$result = mysql_query($sql_select, $q);
$row = mysql_fetch_array($result);
$content = str_replace("<br/>", "\n", $row[2]);
?>
<?php include('header.php'); ?>

<div class="col">
    <h2 align="center">改博客</h2>
    <form action="action.php?action=editpost&postid=<?php echo $_GET['postid'];?>" method="post">
        <div class="editpost-post">
            <div class="editpost-title">
                <div>Title</div>
                <div><input class="editpost-title-input" type="text" name="title" value="<?php echo $row[1];?>"/></div>
            </div>
            <div class="editpost-content">
                <div>Content</div>
                <div><textarea content style="margin: 0px; padding: 0px;  font-size: 14px; word-wrap: break-word; line-height: 18px; overflow-y: auto; overflow-x: hidden; "
                               class="textarea" name="content"><?php echo $content;?></textarea></div>
            </div>
            <input type="submit" value="修改"/>
        </div>
    </form>
</div>

<?php include('footer.php'); ?>
<script>
    var title = "改博客";
    document.title = title;
</script>