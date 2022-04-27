<?php
function validate_or_bounce($group="None")
{
    if (!isset($_SESSION['username']))
    header("Location: Login.php");
    // if the group is None, proceed

    // if the user's usergroup does't matches $group bounce to welcome.php (or an access denied page)

}

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

function validate_login($conn, $username, $password)
{
    // leave in emergancy password
    if ($username=="root" && $password=="passwd")
    return true;
    $row = getUserByUsername($conn, $username);
    
    if ($row == "fail")
    return false;
    if (password_verify($password, $row['encryptedpass']))
    return true;
    return false;
}

function connectDB()
{
    
// Create connection object
    $user = "jbrauman2";  
    $conn = mysqli_connect("localhost",$user,$user,$user);
    // Check connection
    if (mysqli_connect_errno()) {
    echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
    }
    return $conn;
}

function getUserByUsername($conn, $username)
{
    $sql = "SELECT * FROM users WHERE username=?";
    //echo "<h2>Searching for $username</h2>";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result

    if ($result->num_rows != 1) 
    {
    return "fail";
    }
    
    $row = $result->fetch_assoc(); // fetch the data   
    return $row;
}
 function isadmin($conn, $username){
    $sql = "SELECT usergroup FROM users WHERE username=?";
    //echo "<h2>Searching for $username</h2>";
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    $row = $result->fetch_assoc();
    if ($row['usergroup'] == "admin") 
    {
    return true;
    }
    else{
        return false;

    }


 }

function getallusers($conn)
{
    $sql = "SELECT username FROM users";
    //echo "<h2>Searching for $username</h2>";
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    echo '<b>All users</b>';
    echo '<table>';
    while($row = $result->fetch_assoc()){
      echo '<tr> 
            <td><font size="2" color=Green>' .$row['username'].'</td>
            </tr>';
    }
    echo '</table>';

}
?>