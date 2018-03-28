<?php
/**
 * Created by PhpStorm.
 * User: ruchi
 * Date: 3/14/2018
 * Time: 3:28 PM
 */


require_once("config.php");

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['dateofbirth'];
$email = $_POST['email'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$thisuserid = $_POST['userid'];

print $thisuserid;

if (isset($thisuserid))
{
    $row = deleteUser($thisuserid);
}
else
{
    print "User not found";
}
if ($row == 1)
{
    echo "<script>
    alert('User Dleteted Successfully !');
    window.location.href='displayAllRecords.php';
    </script>";
}
?>