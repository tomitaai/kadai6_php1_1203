<!DOCTYPE html>
<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
echo "<table border='1'><tr>
<th>閲覧日時</th>
<th>名前</th>
<th>メールアドレス</th>
<th>星座</th>
<th>メッセージ</th>
<th>ラッキーアイテム</th>
<th>ラッキーカラー</th>
</tr>";
while ($str = fgets($openFile)) {
    nl2br($str);
    $parts = explode("/", $str);

    echo "<tr>";
    foreach ($parts as $val) {
    echo "<td>" . $val . "</td>";
    }
echo "</tr>";};
echo "</table>";


fclose($openFile);

?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閲覧履歴</title>
</head>
<body>

<li>
<a href="input.php">入力フォームに戻る</a>
</li>

</body>

</html>
