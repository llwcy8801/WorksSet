<?php
/**
 * Created by PhpStorm.
 * User: Jarry
 * Date: 2015/12/22
 * Time: 16:35
 */
//引入数据库链接文件
include('config.php');
?>

<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/colorful.css">
<div class="boxes">
    <?php
    for ($i = 1; $i <= 200; $i++) {
        echo "<div class='box'></div>";
    }
    ?>
</div>
<div class="cb"></div>
<?php include('footer.php'); ?>
<script src="js/colorful.js"></script>

<script>
    var title = "Colorful";
    document.title = title;
</script>
