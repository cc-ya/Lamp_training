<?php require_once("../common/base.php");
echo __FILE__. '<br />';
$base = new Base();
$base -> titleDisplay();
$base -> headerDisplay();
?>

<body>

<a href="add.php">新規登録</a><br>
<p>--------------------------------------</p>
<a href="view.php">記事タイトル</a>
<p>--------------------------------------</p>
<p>記事内容</p>
<p>記事登録日時</p>
<p>--------------------------------------</p>
<a href="view.php">記事タイトル</a>
<p>--------------------------------------</p>
<p>記事内容</p>
<p>記事登録日時</p>
<p>--------------------------------------</p>


</body>
</html>