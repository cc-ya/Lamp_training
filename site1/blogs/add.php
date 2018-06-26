<?php require_once("../common/base.php");
echo __FILE__. '<br />';
$base = new Base();
$base -> titleDisplay();
$base -> headerDisplay();
?>

<body>
	<p>記事タイトル</p>
	<form action="view.php" method="post">
	<input type="text" name="title">
	<p>記事内容</p>
	<textarea name="contents" cols="50" rows="10"></textarea>
	<p><input type="button" value="登録" onClick="location.href='http://localhost/lamp-blog/site1/blogs/view.php'"></p>
	</form>

	<p><a href="index.php">戻る</a></p>
</body>
</html>