<?php require_once("../common/base.php");
echo __FILE__. '<br />';
$base = new Base();
$base -> titleDisplay();
$base -> headerDisplay();
?>
<body>
	<p><a href="edit.php">編集</a></p>
	<p><a href="del.php">削除</a></p>

	<p>--------------------------------------</p>
	<p><a href="view.php">記事タイトル</a></p>
	<p>--------------------------------------</p>

	<p>記事内容</p>

	<p>登録日時　登録</p>
	<p>更新日時　更新</p>

	<p><a href="index.php">戻る</a></p>
</body>
</html>