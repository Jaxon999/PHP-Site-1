<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->



<html>
<head>
<title>Title goes here</title>
<?php 
session_start();
// php library loading first
// local php functions go here 
// local php startup code goes here
function Set_user(){ 
    if (isset($_SESSION['username']) && isset($_SESSION['password']) ) {
        echo '<h3>Hello, '. $_SESSION['username'] .', Welcome to my page</h3>';
    } else {
        echo '<h3> it doent look like you have logged in, how did you get here? Bye Bye</h3>';
        sleep(5);
        header('Location: Login.php');
    }              }



?>
<?php Set_user() ?>

</head>
<body>

</body>
</html>