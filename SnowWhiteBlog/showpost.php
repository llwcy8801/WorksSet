<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/28
 * Time: 16:26
 */
//引入数据库链接文件
include('config.php');
$postid = $_GET['postid'];
//增加访问量
$sql_pv = 'update posts set pv=pv+1 where id=' . $postid;
mysql_query($sql_pv, $q);
//搜索数据表posts
$sql_post = 'select * from posts where id =' . $postid;
$result_post = mysql_query($sql_post, $q);
$row_post = mysql_fetch_array($result_post);
//搜索数据表reply
$sql_reply = 'select * from reply where posts_id=' . $postid;
$result_reply = mysql_query($sql_reply, $q);
?>

<?php include('header.php'); ?>
<div class="col">
    <h2 class="post-title"><?php echo $row_post[1]; ?></h2>
    <div class="post-jointime"><?php echo $row_post[3]; ?></div>
    <div class="post-content"><?php echo $row_post[2]; ?></div>
    <div class='post-edit'>
        <?php
        if (isset($_SESSION['user_id'])) {
            echo "<span>浏览量（" . $row_post['pv'] . "）</span>";
            echo "<a href='editpost.php?postid=$row_post[0]'>编辑</a>";
        } else {
            echo "<span>浏览量（" . $row_post['pv'] . "）</span>";
        }
        ?>
        <!--<a onclick='doUp(<?php //echo $postid;?>)' href=''>赞(<span id='doup'><?php //echo $row_post['up']; ?></span>)</a>-->
    </div>
</div>

<div class="replies">
    <?php
    while ($row_reply = mysql_fetch_array($result_reply)) {
        echo "<div class='reply'>";
        echo "<div class='reply-username'>$row_reply[2]</div>";
        echo "<div class='reply-email'>$row_reply[3]</div>";
        echo "<div class='reply-content'>$row_reply[1]</div>";
        echo "</div>";
        echo "<hr/>";
    }
    ?>
    <div class="new-reply">
        <form action='action.php?action=reply&postid=<?php echo $postid; ?>' method='post'>
            <div class='reply-titel'>Reply:</div>
            <div class='reply-username'>
                <div>username</div>
                <div><input type='text' name='username'/></div>
            </div>
            <div class='reply-email'>
                <div>email</div>
                <div><input type='text' name='email'/></div>
            </div>
            <div class='reply-content'>
                <div>content</div>
                <div><input type='text' name='content'/></div>
            </div>
            <input type="hidden" name="posts_id" value="<?php echo $postid; ?>">
            <input type='submit' value='提交'/>
            <input type='reset' value='重置'/>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>

<script>
    var title = "博客页-<?php echo $row_post[1];?>";
    document.title = title;
</script>