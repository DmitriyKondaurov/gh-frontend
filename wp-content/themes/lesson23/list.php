<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head lang="ru">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Домашняя работа № 3 (данные заполненной формы)</title>
</head>
<body>
<h1>Таблиця даних, які заповнили юзери</h1>
<table border="2">
    <thead>
    <tr>
        <th>#</th>
        <th>first name</th>
        <th>second name</th>
        <th>gender</th>
        <th>age</th>
        <th>birthday</th>
        <th>family status</th>
        <th>social status</th>
        <th>address</th>
        <th>activities</th>
        <th>frequency</th>
        <th>books have read</th>
        <th>comments</th>
        <th>multiple select</th>
        <th>spam</th>
        <th>complexity</th>
    </tr>
    </thead>
    <tbody>

<?php
$c = mysqli_connect("localhost", "myuser", "111", "mydatabase");

$sql = "SELECT * FROM anketa;";

$res = $c->query($sql);
if ($res) {
    while($row = $res->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['firstname'] ?></td>
            <td><?= $row['secondname'] ?></td>
            <td><?= $row['gender'] ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['birthday'] ?></td>
            <td><?= $row['familystatus'] ?></td>
            <td><?= $row['socialstatus'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['activities'] ?></td>
            <td><?= $row['frequency'] ?></td>
            <td><?= $row['bookshaveread'] ?></td>
            <td><?= $row['comments'] ?></td>
            <td><?= $row['multipleselect'] ?></td>
            <td><?= $row['spam'] ?></td>
            <td><?= $row['complexity'] ?></td>
        </tr>
<?php
    }
}
?>
    </tbody>
</table>
</body>
</html>