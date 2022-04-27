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
// php library loading first
// local php functions go here 
// local php startup code goes here
function Set_user(){ 
    if (isset($_SESSION['username']) && isset($_SESSION['password']) ) {
        echo '<h3>Hello, '. $_SESSION['username'] .', Welcome to my page</h3>';
    } else {
        header('Location: Login.php');
    } 
            }



function Displayusers(){  
  if (isadmin(connectDB(), ($_SESSION['username']))){
        getallusers(connectDB());
     }
    }

?>


</head>
<body>
<?php Set_user(); 
Displayusers();?>
</body>
</html>