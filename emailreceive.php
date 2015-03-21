<?php
$book = fopen("https://cdn.rawgit.com/ATENESSER/Web/master/book.txt", "a") or die("Error!");
echo ($_POST['email']);
fwrite($book, $email);
fclose($book);
?>
