<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>5.12 HAPPY SUMMER WEDDING</title>
</head>
<body>
  <h1>入力を受け付けました</h1>
<table border="1">
  <tr>
    <td>お名前</td><td><?php if (isset($_POST["name"])) {echo($_POST["name"]);} ?></td>
  </tr>
  <tr>
    <td>郵便番号</td><td><?php if (isset($_POST["yuubin"])) {echo($_POST["yuubin"]);} ?></td>
  </tr>
  <tr>
    <td>住所</td><td><?php if (isset($_POST["jyuusyo"])) {echo($_POST["jyuusyo"]);} ?></td>
  </tr>
  <tr>
    <td>電話番号</td><td><?php if (isset($_POST["tel"])) {echo($_POST["tel"]);} ?></td>
  </tr>
  <tr>
    <td>出欠</td><td><?php if (isset($_POST["syukketsu"])) {if ($_POST["syukketsu"] === "s") {echo("出席");} elseif ($_POST["syukketsu"] === "k") {echo("欠席");}else{echo("保留");}}?></td>
  </tr>
</table>
</body>
</html>
