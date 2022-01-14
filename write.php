<?php
//postの処理
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$email = $_POST['email'];
$reason = $_POST['reason'];
$kind = $_POST['kind'];
$detail = $_POST['detail'];

//無効化の処理
$name = htmlspecialchars($name, ENT_QUOTES);
$furigana = htmlspecialchars($furigana, ENT_QUOTES);
$email = htmlspecialchars($email, ENT_QUOTES);
$reason = htmlspecialchars($reason, ENT_QUOTES);
$kind = htmlspecialchars($kind, ENT_QUOTES);
$detail = htmlspecialchars($detail, ENT_QUOTES);


//かきこむデータ
$data = date('Y/m/d H:i:s');
$data = $data."お名前:".$name."\n";
$data = $data."フリガナ:".$furigana."\n";
$data = $data."メール:".$email."\n";
$data = $data."きっかけ:".$reason."\n";
$data = $data."お悩み:".$kind."\n";
$data = $data."その他:".$detail."\n";


//ファイルの用意
$file = fopen('./data/data.txt','a');

//書き込み
fwrite($file, $data. "\n");


//クローズ
fclose($file);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書き込み：write</title>
</head>
<body>

<p>こちらの内容で登録完了しました</p>

<table>
    <tr>
        <th>お名前：</th>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <th>フリガナ：</th>
        <td><?php echo $furigana; ?></td>
    </tr>

    <tr>
        <th>メール：</th>
        <td><?php echo $email; ?></td>
    </tr>

    <tr>
        <th>きっかけ：</th>
        <td><?php echo $reason; ?></td>
    </tr>

    <tr>
        <th>お悩み：</th>
        <td><?php echo $kind; ?></td>
    </tr>

    <tr>
        <th>その他：</th>
        <td><?php echo $detail; ?></td>
    </tr>
</table>

</body>
</html>