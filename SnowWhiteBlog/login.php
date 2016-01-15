<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/24
 * Time: 14:21
 */
//引入数据库链接文件
include('config.php');
?>

<?php include('header.php'); ?>
<?php
if (!isset($_SESSION['user_id'])) {
    echo
    "<div class='login'>
    <h2 align='center'>登录</h2>
        <form action='action.php?action=login' method='post'>
            <div class='login-part'>
                <div class='login-name'>
                    <div>账号</div>
                    <div><input type='text' name='name'/></div>
                </div>
                <div class='login-pw'>
                    <div>密码</div>
                    <div><input type='password' name='pw'/></div>
                </div>
                <input type='submit' value='登录'/>
                <input type='reset' value='重置'/>
            </div>
        </form>
    </div>";
} else {
    echo
        "<div  class='logout'>
    <h2 align='center'>登出</h2>
        <form action='action.php?action=logout' method='post'>
            <div class='logout-part'>
                <div>确认登出账号？{$_SESSION['user_id']}</div>
                <input type='submit' value='确认'/>
            </div>
        </form>
    </div>";
}
?>

<?php include('footer.php'); ?>
<script>
    var title = "登录";
    document.title = title;
</script>
