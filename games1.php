<?php

$bh1 = $_GET['bh1'];
$bh2 = $_GET['bh2'];

If {isset($_GET('b1')){

if($bh2 == " " ){
    $bh2 = $bh1;
    $bh2 = " " ;
}
 
}
if(isset($_GET['b2'])){

if ($bh1 == " "){
    $bh1 = $bh2;
    $bh2 = " " ;
}
}
}

echo <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <form action='games1.php' method='get'>
        <input type='hidden' name='bh1' value='1'>
        <input type='submit' name='b1' value='1'>

        <input type='hidden' name='bh2' value='$bh2'>
        <input type='submit' name='b2' value='$b2'>
    </form>
</body>
</body>
</html>