<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->


<html>
<head>
<title>Jaxon's mall</title>
<?php 
// php library loading first
// local php functions go here 
// local php startup code goes here 
                  
include "lib/header.php";      
include "lib/footer.php";
require("lib/PHPfunt.php");
session_start();
validate_or_bounce();

function echoCart()
{
    $items = array('GPU', 'CPU', 'Fan' , 'Memory');
    $total = 0;
    foreach ($items as $item)
    {
        if (isset($_SESSION[$item]) && $_SESSION[$item] > 0)
        {

         if ($item == 'Fan') {$price = 40; $total += ($price * $_SESSION[$item]);}
         if ($item == 'Memory') {$price = 125.99; $total += ($price * $_SESSION[$item]);}
         if ($item == 'CPU') {$price = 350; $total += ($price * $_SESSION[$item]);}
         if ($item == 'GPU') {$price = 400; $total += ($price * $_SESSION[$item]);}

         echo $item . "s: ";
         echo $_SESSION[$item];
         echo " X " . $price . " = " . $price * $_SESSION[$item];
         echo "<br> <br>";
         
        }
    }
    echo '<b>Your Subtotal is $'.$total . '</b><br>';
    echo 'Tax rate: 9%<br>';
    echo '<b>Your Total is $'. round($total * 1.09, 2) . '</b>';
}

?>
</head>
<body>
<?php echoCart() ?>

</body>
</html>