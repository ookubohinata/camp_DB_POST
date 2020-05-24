<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="next.php" method="post">
    <!-- inputタグを↓に書いてく -->
    <input type="text" name = "name">
    <input type="text" name = "email">
    あ：<input type="checkbox" name = "checkbox" value = "a">
    <input type="password" name="pw">
    <textarea name="textarea" cols="30" rows="10"></textarea>
    <!-- 送信ボタン -->
    <input type="submit" value="送る！">
    </form>

</body>
</html>