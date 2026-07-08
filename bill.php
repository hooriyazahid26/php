<?php
$in = $_POST['input'];

if($in >=1 && $in <=100){
    echo "<center>";

    echo"<br>";echo"<br>";echo"<br>";
    echo"per unit price was 5rs";
    echo"<br>";echo"<br>";
    echo"your bill was:".$in *5;
    echo"</center>";
}

elseif($in >=100 && $in <= 200){
    echo"<center>";

    echo"<br>";echo"<br>";echo"<br>";
    echo"per unit price was : 10rs";
    echo"<br>";echo"<br>";
    echo"if your bill was less than 100 per unit price was 5rs";
    echo"<br>";echo"<br>";
    echo"your bill was :".$in *10;
    echo"</center>";
}

elseif($in >=200 && $in <=300){
    echo"<center>";

    echo"<br>";echo"<br>";echo"<br>";
    echo"per unit price was : 15rs";
    echo"<br>";echo"<br>";
    echo"if your bill was less than 100 per unit price was 5rs";
    echo"<br>";echo:"<br>";
echo"your bill was::".$in *15;
echo"</center>";

}

elseif($in >=300 && $in <=400){
    echo"<center>";
    
    echo"<br>";echo"<br>";echo"<br>";
    echo"per unit price was :20rs";
    echo"<br>";echo"<br>";
    echo"if your bill was less than 100 per unit price was 5rs";
    echo"<br>";echo"<br>";
    echo"if your bill was less than 200 per unit was 10rs";
      echo"<br>";echo"<br>";
    echo"if your bill was less than 300 per unit was 15rs";
      echo"<br>";echo"<br>";
    echo"if your bill was less than 400 per unit was 20rs";
      echo"<br>";echo"<br>";
    echo"if your bill was ";

}