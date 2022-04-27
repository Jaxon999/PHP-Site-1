<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->

<html>
<head>
<title>Jaxon's mall</title>
<?php 
include "lib/header.php";      
include "lib/footer.php";
require("lib/PHPfunt.php");
session_start();
validate_or_bounce();


$ITEM = 'Memory';

if (!isset( $_SESSION[$ITEM] ))
{
    $_SESSION[$ITEM] = 0;
}


if ( isset( $_POST['choice'] ) ) 
{
    $choice = $_POST['choice'];
    if ($choice == 'Add 1')
    {
    $_SESSION[$ITEM] += 1;
    }
    else if ($choice == 'Add 10')
    {
    $_SESSION[$ITEM] += 10;
    }
    else if ($choice == 'Remove All')
    {
    $_SESSION[$ITEM] = 0;
    }
}

?>
</head>
<body>
<div class="productbody">
<img src="img/Memory.jfif" alt="Rgb Ram">
<?php echo $_SESSION[$ITEM] . " $ITEM <br>"; ?>

<form method='POST'>
<input type='submit' name='choice' value='Add 1'> <b>+125.99$</b><br>
<input type='submit' name='choice' value='Add 10'> <b>+1,259.90$</b><br>
<input type='submit' name='choice' value='Remove All'> <b>-<?php echo $_SESSION[$ITEM] * 125.99?>$</b><br>
</form>
</div>
</body>
</html>