<?php
// POSTリクエストから入力データを取得
$employee_name = $_POST['employee_name'];
$employee_age = $_POST['employee_age'];
$department = $_POST['department'];

$errors = []; // 最初はエラーなし

// お名前のバリデーション
if (empty($employee_name) ) {
    $errors[] = 'お名前を入力してください。';
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2>入力内容をご確認ください。</h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>お名前</td>
            <td><?php echo $employee_name; ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo $employee_age; ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cancel-btn" onclick="history.back();">キャンセル</button>
    </p>
</body>

</html>
