<?php
// POSTで送った情報を変数に代入する
$name = $_POST["name"];
$email = $_POST["email"];
$checkbox = $_POST["checkbox"];
$pw = $_POST["pw"];
$text = $_POST["textarea"];
// inputで入力された値が表示する
echo $name."<br>";
echo $email."<br>";
echo $checkbox."<br>";
echo $pw."<br>";
echo $text."<br>";

?>