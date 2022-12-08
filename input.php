<html>

<head>
    <meta charset="utf-8">
    <title>星座占い入力</title>
</head>

<body>
    <form action="fortune.php" method="post">
        お名前: <input type="text" name="name">
        メアド: <input type="text" name="mail">
        星座: <select name="seizaNo">
            <option value="" selected="selected">選択してください</option>
            <option value="0">おひつじ座</option>
            <option value="1">おうし座</option>
            <option value="2">ふたご座</option>
            <option value="3">かに座</option>
            <option value="4">しし座</option>
            <option value="5">おとめ座</option>
            <option value="6">てんびん座</option>
            <option value="7">さそり座</option>
            <option value="8">いて座</option>
            <option value="9">やぎ座</option>
            <option value="10">みずがめ座</option>
            <option value="11">うお座</option>
            </select>
        <input type="submit" value="送信">
    </form>

</body>

</html>
