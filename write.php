<!DOCTYPE html>
<?php
session_start();

date_default_timezone_set('Asia/Tokyo');
$time = date('Y-m-d H:i:s');


$file = fopen('data/data.txt', 'a');
fwrite($file, $time 
. '/' . $_SESSION['name'] 
. '/' . $_SESSION['mail'] 
. '/' . $_SESSION['seiza'] 
. '/' . $_SESSION['content'] 
. '/' . $_SESSION['item'] 
. '/' . $_SESSION['color']
. "\n");


fclose($file);

?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星座占い結果</title>
</head>
<body>
    <h1>占い結果記録完了！</h1>
    <h2></h2>

    <ul>
        <li><a href="read.php">閲覧履歴をチェックしよう</a></li>
        <li><a href="input.php">入力フォームに戻る</a></li>
    </ul>
</body>

</html>
