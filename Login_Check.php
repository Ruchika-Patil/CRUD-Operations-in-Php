<?php
/**
 * Praviin M
 */

//print_r($_POST);

require_once("config.php");

$username = $_POST['Username'];
$password = $_POST['Password'];
$submit = $_POST['Submit'];
//$msg = '';

if (isset($_POST['Submit']))
{
    if (!empty($password) && !empty($username))
    {
        $result = login($username,$password);

        if($result==1)
        {
            echo "Welcome '" . $username . "'";
            echo "<script>
                         alert('login successful');
                         window.location.href='Index.php';
                 </script>";
                                   // echo "Welcome '" . $fname . "'";
                                   // header("Location: Index.php");
                                   //  exit();
        }
        else
        {
            echo "<p align='center'> <font color=#d2691e  size='5pt'>Login Failed</font> </p>";

        }
    }
    else
    {
        echo "<p align='center'> <font color=#d2691e  size='5pt'>Username or Password is invalid</font> </p>";

    }
}
else
{
    echo "<p align='center'> <font color=blue  size='5pt'>Username or Password is invalid</font> </p>";
    $error = "Username or Password is invalid";
}
?>