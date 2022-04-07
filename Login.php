<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Jaxon Brauman 
CSC-155-201H_2022SP -->


<html>
<head>
<title>Login</title>
<?php 
$title = "Php Header Footer";                   
include "header.php";      
include "footer.php";
session_start();
// php library loading first
// local php functions go here 
function showPost($key) 
{
    if ( isset($_POST[$key]) )
    echo htmlspecialchars($_POST[$key]);
}

function getPost($key) 
{
    if ( isset($_POST[$key]) )
    return htmlspecialchars($_POST[$key]);
    return "";
}

function validate_login($username, $password)
{
    if ($username=="Jackie" && $password=="New1")
    return true;
    return false;
}

// local php startup code goes here 
$message="";
$username = getPost('1stusername');
$password = getPost('1stpassword');
if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
    if (validate_login($username, $password))
    { 
        $_SESSION['username'] = $_POST['1stusername'];
        $_SESSION['password'] = $_POST['1stpassword'];

        header('Location: Welcome.php');
    }
    $message = "Invalid username or password!";
    }
}  
?>
</head>
<body>
This is a student sample website. Username is Jackie Password is New1 . Do NOT use real passwords!!!
<form method='POST'>
Name: <input type='text' name='1stusername' value='<?php showPost("1stusername");?>'> <br>
Password: <input type='password' name='1stpassword' value='<?php showPost("1stpassword");?>'> <br>
<input type='submit' name='choice' value='Login'> 
<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p></div>

</body>
</html>