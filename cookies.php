
php
<?php
setcookie("username","Ali",time()+ 3600); //
expiresin 1hour

?>
to read a cookie:
php
<?php
echo
$_COOKIE["username"];
?>

to delete a cookie:
php
<?php
setcookie("username","",
time()-3600);
?>
---
php