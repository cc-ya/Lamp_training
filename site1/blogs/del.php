<?php require_once("../common/base.php");
echo __FILE__. '<br />';
$base = new Base();
$base -> titleDisplay();
$base -> headerDisplay();
?>

<p>削除しますか？</p>
<p>--------------------------------------</p>
<p><a href="view.php">記事タイトル</a></p>
<p>--------------------------------------</p>
<p>記事内容</p>
<p>記事登録日時</p>
<p><a href="view.php">記事タイトル</a></p>
<p><input type="button" value="削除" onClick="location.href='http://localhost/lamp-blog/site1/blogs/view.php'"></p>

<p><a href="index.php">戻る</a></p>