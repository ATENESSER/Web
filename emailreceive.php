<?php
$book = fopen("https://cdn.jsdelivr.net/gh/ATENESSER/Web/book.txt", "a") or die("Error!");
echo ($_POST['email']);
fwrite($book, $email);
fclose($book);
?>
