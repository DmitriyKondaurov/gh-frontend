<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head lang="ru">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Домашняя работа № 3 (данные заполненной формы)</title>
</head>
<body>

<?php

//var_dump($_REQUEST); exit;
//echo $_REQUEST['firstname'];
$firstName = $_REQUEST['firstname'];
$secondName = $_REQUEST['secondname'];
$gender = $_REQUEST['gender'];
if ($gender = 'm') {
    $genderWord = 'Чоловіча';
} else {
    $genderWord = 'Жіноча';
}
$age = $_REQUEST['age'];
$gender2 = $_REQUEST['gender2'];
$gender2Word = ($gender2 == 'm') ? 'Чоловіча' : 'Жіноча'; //тернарний оператор розгалудження:
// http://php.net/manual/ru/language.operators.comparison.php#language.operators.comparison.ternary
$genderAlert = '';
// @todo порівняти змінні $gender і $gender2 і додати меседж, якщо вони виявляться різними
$birthday = $_REQUEST['birthday'];
$status = $_REQUEST['status'];
$familyStatusWord = $status;
// @todo використовуючи оператор switch-case записати сімейний стан словом у змінну $familyStatusWord
$statusSocial = $_REQUEST['status-soc'];
$address = $_REQUEST['address'];

function activityToUkr($activityName)
{
    switch($activityName)
    {
        case 'sleeping':
            return 'сплю';
            break;
        case 'friends':
            return 'гуляю з друзями';
            break;
        case 'fishing':
            return 'ходжу на рибалку';
            break;
        case 'games':
            return 'граю в ігри';
            break;
        default:
            return 'щось невірне вказали';
    }
}

$activitiesAsString = '';
if (array_key_exists('activities', $_REQUEST)) {
    $activities = $_REQUEST['activities']; // it's an array!!!
    foreach ($activities as $activityName => $activityAnswer) {
        $activityNameUkr = activityToUkr($activityName);
        $activitiesAsString = $activitiesAsString . $activityNameUkr . ',';
    }
// @todo Переписати код вище, застосувавши php-функцію implode
}

$frequency = $_REQUEST['frequency'];
$booksHaveRead = $_REQUEST['books'];
$comments = $_REQUEST['comments'];
$multipleselAsString = '';
if (array_key_exists('multiplesel', $_REQUEST)) {
    $multiplesel = $_REQUEST['multiplesel'];
    // @ Самостійно напишіть код, щоб масив опцій відображався як рядок символів
}
//$samplefield = $_REQUEST['samplefield']; // як виявилось, disabled поля не відправляються на сервер
$spamAsString = '';
if (array_key_exists('spam', $_REQUEST)) {
    $spam = $_REQUEST['spam']; // array!!!
    // @ Самостійно напишіть код, щоб масив опцій відображався як рядок символів (див. приклад вище)
}
$complexity = $_REQUEST['complexity'];
// @todo написати функцію-перекладач на українську (див. приклад вище)



$c = mysqli_connect("localhost", "myuser", "111", "mydatabase");
$firstName = mysqli_real_escape_string($c, $firstName);
$secondName = mysqli_real_escape_string($c, $secondName );
$genderWord = mysqli_real_escape_string($c, $genderWord);
$age = mysqli_real_escape_string($c, $age);
$gender2Word = mysqli_real_escape_string($c, $gender2Word);
$birthday = mysqli_real_escape_string($c, $birthday);
$familyStatusWord = mysqli_real_escape_string($c, $familyStatusWord);
$statusSocial = mysqli_real_escape_string($c, $statusSocial);
$address = mysqli_real_escape_string($c, $address);
$activitiesAsString = mysqli_real_escape_string($c, $activitiesAsString);
$frequency = mysqli_real_escape_string($c, $frequency);
$booksHaveRead = mysqli_real_escape_string($c, $booksHaveRead);
$comments = mysqli_real_escape_string($c, $comments);
$multipleselAsString = mysqli_real_escape_string($c, $multipleselAsString);
$spamAsString = mysqli_real_escape_string($c, $spamAsString);
$complexity = mysqli_real_escape_string($c, $complexity);

$sql = "INSERT INTO anketa (firstname, secondname, gender, age, birthday, familystatus, socialstatus, address, activities, frequency, bookshaveread, multipleselect, comments, spam, complexity)".
    " VALUES ('$firstName', '$secondName', '$genderWord', '$age', '$birthday', '$familyStatusWord',".
    "'$statusSocial', '$address', '$activitiesAsString', '$frequency', '$booksHaveRead', '$multipleselAsString', '$comments', '$spamAsString', '$complexity');";
echo $sql;
$res = $c->query($sql);
if ($res) {
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:".$c->error;
}