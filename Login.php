<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->


<html>
<head>
<title>Jaxon's mall</title>
<?php 
require("lib/PHPfunt.php");
                  
include "lib/headernolog.php";      
include "lib/footer.php";
session_start();
// php library loading first
// local php functions go here 

// local php startup code goes here 
$message="";
$username = getPost('1stusername');
$password = getPost('1stpassword');
if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
    if (validate_login(connectDB(),$username, $password))
    { 
        $_SESSION['username'] = $_POST['1stusername'];
        $_SESSION['password'] = $_POST['1stpassword'];

        header('Location: Welcome.php');
    }
    $message = "Invalid username or password!";
    }
    elseif ($_POST['choice'] == 'Setup page'){
        header('Location: New_user.php');
    }
}  
?>
</head>
<body>
This is a student sample website. Do NOT use real passwords!!!
<form method='POST'>
Username: <input type='text' name='1stusername' value='<?php showPost("1stusername");?>'> <br>
Password: <input type='password' name='1stpassword' value='<?php showPost("1stpassword");?>'> <br>
<input type='submit' name='choice' value='Login'> 
New user setup: <input type='submit' name='choice' value='Setup page'> 
<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p></div>

</body>
</html>