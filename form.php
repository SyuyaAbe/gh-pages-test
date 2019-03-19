<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>フォームの作成</title>
</head>
<body>
    <form action="form.php" method="POST">
        <p>名前：<input type="text" name="name"></p>
        <p>メッセージ：</p>
        <textarea name="message" rows="5" cols="40"></textarea>
        <p>性別：
        男性<input type="radio" name="gender" value="man">
        女性<input type="radio" name="gender" value="woman">
        </p>
        <p>今日の晩御飯：
        <select name="dinner">
            <option value="riceball">おにぎり</option>
            <option value="udon">うどん</option>
            <option value="ramen">ラーメン</option>
            <option value="soba">そば</option>
        </select>
        </p>
        <input type="submit" value="送信">
    </form>
</body>
</html>