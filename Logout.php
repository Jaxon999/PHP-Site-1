<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->


<html>
<head>
<title>Jaxon's mall</title>
<?php 
include "lib/headernolog.php";      
include "lib/footer.php";
session_start();
// php library loading first
// local php functions go here 
// local php startup code goes here


session_destroy();
header("refresh: 5; url=Login.php");

?>
</head>
<body>
    <center><b> Thank you for visiting my site, redirecting you to the login page.<b></center>
</body>
</html>