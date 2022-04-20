<html><head>
<?php
$title = "Php Header Footer";                   
include "header.php";      
include "footer.php";
// Create connection object
$user = "jbrauman2";  
$conn = mysqli_connect("localhost",$user,$user,$user);
// Check connection
if (mysqli_connect_errno()) {
  echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
}

if (isset($_POST['choice']))
{
    $choice = $_POST['choice'];
    if ($choice == "Create User")
    {
        $password = $_POST['pass'];
        $veripass = $_POST['Verifypass'];
        if ($password == $veripass && (strlen($password) > 6) && (strlen($_POST['username155']) > 5)){

            $stmt = $conn->prepare("INSERT INTO users SET username=?, 
                                     email=?, 
                                     usergroup=?,
                                     encryptedpass=? 
                                     ");
            $stmt->bind_param("ssss", $username, $email, $usergroup, $encrypted);

            $username=$_POST['username155'];
            $usergroup=$_POST['usergroup'];
            $email=$_POST['email155'];
            $encrypted = password_hash($password, PASSWORD_DEFAULT);
    
            $stmt->execute();
            echo "success, Returning to login";
            sleep(2);
            header('Location: Login.php');

        }

    }
    elseif ($choice == "Cancel"){
        header('Location: Login.php');
    }

}
?>
</head>
<body>

<form method='POST'>
<b>Password must be greater than 6 character length and username must be greater than 5!</b>
<br>Username:<input type='text' name='username155' >
<br>Email:<input type='text' name='email155' >
<br>Usergroup:<input type='text' name='usergroup' >
<br>Password:<input type='password' name='pass' >
<br>Verify Password:<input type='password' name='Verifypass' >
<br><input type='submit' name='choice' value='Create User'>
<br><input type='submit' name='choice' value='Cancel'>
</form>

</body>
</html>