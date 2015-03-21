<?php
$book = fopen("book.txt", "a") or die("Error!");
echo ($_POST['email']);
fwrite($book, $email);
fclose($book);
?>
