<?php

$bh1  = $_GET['bh1'] ; 
$bh2  = $_GET['bh2'] ; 
$bh3  = $_GET['bh3'] ; 
$bh4  = $_GET['bh4'] ; 
$bh5  = $_GET['bh5'] ; 
$bh6  = $_GET['bh6'] ; 
$bh7  = $_GET['bh7'] ; 
$bh8  = $_GET['bh8'] ; 
$bh9  = $_GET['bh9'] ; 
$bh10  = $_GET['bh10'] ; 
$bh11  = $_GET['bh11'] ; 
$bh12  = $_GET['bh12'] ; 



if(isset($_GET['b1'])){
    if($bh2 == ""){
        $bh2 = $bh1;
        $bh1 = "";
    }elseif($bh4 == ""){
        $bh4 = $bh1;
        $bh1 = "";
    }
   
}


if(isset($_GET['b2'])){
    if($bh1 == ""){
        $bh1 = $bh2;
        $bh2 = "";
    }elseif($bh3 == ""){
        $bh3 = $bh2;
        $bh2 = "";
    }
     elseif($bh5 == ""){
        $bh5 = $bh2;
        $bh2= "";
    }
}

if(isset($_GET['b3'])){
    if($bh2 == ""){
        $bh2 = $bh3;
        $bh3 = "";
   
   
    }
    elseif($bh6 == ""){
        $bh6 = $bh3;
        $bh3 = "";
    }
}



if(isset($_GET['b4'])){
    if($bh1 == ""){
        $bh1 = $bh4;
        $bh4 = "";
   
}
elseif($bh5 == ""){
        $bh5 = $bh4;
        $bh4 = "";
    }
    elseif($bh7 == ""){
        $bh7 = $bh4;
        $bh4 = "";
    }
}

if(isset($_GET['b5'])){
    if($bh4 == ""){
        $bh4 = $bh5;
        $bh5 = "";
   
}
elseif($bh6 == ""){
        $bh6 = $bh5;
        $bh5 = "";
    }
     elseif($bh8 == ""){
        $bh8 = $bh5;
        $bh5 = "";
    }
     elseif($bh2 == ""){
        $bh2 = $bh5;
        $bh5 = "";
    }

}


if(isset($_GET['b6'])){
    if($bh5 == ""){
        $bh5 = $bh6;
        $bh6 = "";
   
}
elseif($bh9 == ""){
        $bh9 = $bh6;
        $bh6 = "";
    }
    elseif($bh3 == ""){
        $bh3 = $bh6;
        $bh6 = "";
    }

}


if(isset($_GET['b7'])){
    if($bh4 == ""){
        $bh4 = $bh7;
        $bh7 = "";
   
}
elseif($bh8 == ""){
        $bh8 = $bh7;
        $bh7 = "";
    }

    elseif($bh10 == ""){
        $bh10 = $bh7;
        $bh7 = "";
    }

}

if(isset($_GET['b8'])){
    if($bh7 == ""){
        $bh7 = $bh8;
        $bh8 = "";
   
}
elseif($bh9 == ""){
        $bh9 = $bh8;
        $bh8 = "";
    }
    elseif($bh11 == ""){
        $bh11 = $bh8;
        $bh8 = "";
    }
     elseif($bh5 == ""){
        $bh5 = $bh8;
        $bh8 = "";
    }

}


if(isset($_GET['b9'])){
    if($bh8 == ""){
        $bh8 = $bh9;
        $bh9 = "";
   
}
elseif($bh6 == ""){
        $bh6 = $bh9;
        $bh9 = "";
    }
    elseif($bh12 == ""){
        $bh12 = $bh9;
        $bh9 = "";
    }


}


if(isset($_GET['b10'])){
    if($bh7 == ""){
        $bh7 = $bh10;
        $bh10 = "";
   
}
elseif($bh11 == ""){
        $bh11 = $bh10;
        $bh10 = "";
    }

}




if(isset($_GET['b11'])){
    if($bh10 == ""){
        $bh10 = $bh11;
        $bh11 = "";
   
}
elseif($bh12 == ""){
        $bh12 = $bh11;
        $bh11 = "";
    }

    elseif($bh8 == ""){
        $bh8 = $bh11;
        $bh11 = "";
    }

}


if(isset($_GET['b12'])){
    if($bh11 == ""){
        $bh11 = $bh12;
        $bh12 = "";
   
}
elseif($bh9 == ""){
        $bh9 = $bh12;
        $bh12 = "";
    }

}









echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Game Grid</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }

        .game-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .btn-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        input[type='submit'] {
            padding: 15px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            transition: background 0.3s ease;
            width: 60px;
            height: 60px;
        }

        input[type='submit']:hover {
            background-color: #45a049;
        }

        input[type='submit'][value=''] {
            background-color: #ccc; 
        }
    </style>
</head>
<body>

    <div class='game-container'>
        <h2>PUZZLE GAME</h2>
        <form action='puzzle.php' method='get' class='btn-grid'>

          
            <input type='hidden' name='bh1' value='$bh1'>
            <input type='submit' name='b1' value='$bh1'>

         
            <input type='hidden' name='bh2' value='$bh2'>
            <input type='submit' name='b2' value='$bh2'>
            
           
            <input type='hidden' name='bh3' value='$bh3'>
            <input type='submit' name='b3' value='$bh3'>

            
            <input type='hidden' name='bh4' value='$bh4'>
            <input type='submit' name='b4' value='$bh4'>

            <!-- Button 5 -->
            <input type='hidden' name='bh5' value='$bh5'>
            <input type='submit' name='b5' value='$bh5'>

            <!-- Button 6 -->
            <input type='hidden' name='bh6' value='$bh6'>
            <input type='submit' name='b6' value='$bh6'>

            <!-- Button 7 -->
            <input type='hidden' name='bh7' value='$bh7'>
            <input type='submit' name='b7' value='$bh7'>

            <!-- Button 8 -->
            <input type='hidden' name='bh8' value='$bh8'>
            <input type='submit' name='b8' value='$bh8'>

            <!-- Button 9 -->
            <input type='hidden' name='bh9' value='$bh9'>
            <input type='submit' name='b9' value='$bh9'>

            <!-- Button 10 -->
            <input type='hidden' name='bh10' value='$bh10'>
            <input type='submit' name='b10' value='$bh10'>

            <!-- Button 11 -->
            <input type='hidden' name='bh11' value='$bh11'>
            <input type='submit' name='b11' value='$bh11'>

            <!-- Button 12 -->
            <input type='hidden' name='bh12' value='$bh12'>
            <input type='submit' name='b12' value='$bh12'>

        </form>
    </div>

</body>
</html>";
?>