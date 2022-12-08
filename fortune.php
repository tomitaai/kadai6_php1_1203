<html>

<head>
    <meta charset="utf-8">
    <title>星座占い結果</title>
</head>

<body>

<?php
    include('funcs.php');
    session_start();
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $mail = $_POST['mail'];
    $_SESSION['mail'] = $mail;
    $seizaNo = $_POST['seizaNo'];
    $_SESSION['seizaNo'] = $seizaNo;

    $today = date("Y/m/d"); //今日の日付をyear/month/day形式で取得
    $url = "http://api.jugemkey.jp/api/horoscope/free/"; //日付部分を省いたURL
    $json = file_get_contents($url . $today); //上2行を合体させて当日の占い結果を取得
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'); //文字化けしないようコード変換
    $arr = json_decode($json,true); //jsonデータを配列に変換


    // echo '<pre>';
    // var_dump($arr["horoscope"][$today][0]);
    // echo '</pre>';

    // arrの各項目を変数に代入
    for ($i = 0; $i < 12; $i++) {
        $h_sign[$i] = $arr["horoscope"][$today][$i]["sign"]; // 星座
        $h_content[$i] = $arr["horoscope"][$today][$i]["content"]; // 運勢テキスト
        $h_item[$i] = $arr["horoscope"][$today][$i]["item"]; // ラッキーアイテム
        $h_color[$i] = $arr["horoscope"][$today][$i]["color"]; // ラッキーカラー
        $h_total[$i] = $arr["horoscope"][$today][$i]["total"]; // 総合運
        $h_money[$i] = $arr["horoscope"][$today][$i]["money"]; // 金運
        $h_job[$i] = $arr["horoscope"][$today][$i]["job"]; // 仕事運
        $h_love[$i] = $arr["horoscope"][$today][$i]["love"]; // 恋愛運
        $h_rank[$i] = $arr["horoscope"][$today][$i]["rank"]; // ランキング
        // imageファイルの配列を作成
        $h_icon[$i] = 'seizaIcon' . $i . '.png';
    }

    $_SESSION['seiza'] = $h_sign[$seizaNo];
    $_SESSION['content'] = $h_content[$seizaNo];
    $_SESSION['item'] = $h_item[$seizaNo];
    $_SESSION['color'] = $h_color[$seizaNo];


    echo h($name) . 'さま';
    echo '<br>';
    echo h($mail);
    echo '<br>';
    echo '<br>';

    echo h($h_sign[$seizaNo]) . 'のあなたの今日の運勢は・・・';
    echo '<br>';
    echo '「' . h($h_content[$seizaNo]) . '」'; 



?>

<ul>
    <img src="<?php echo $h_icon[$seizaNo]; ?>" alt="">

<?php
    echo '<br>';
    echo '<br>';
    echo 'ラッキーアイテム：' . h($h_item[$seizaNo]);
    echo '<br>';
    echo 'ラッキーカラー：' . h($h_color[$seizaNo]);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
?>
    <li><a href="write.php">占い結果を記録する</a></li>
    <li><a href="input.php">入力フォームに戻る</a></li>

</ul>

</body>

</html>
