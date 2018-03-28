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
$active = $_POST['active'];
$thisuserid = $_POST['userid'];

print $thisuserid;

if (isset($thisuserid))
{
    $row = deactivateUser($thisuserid);
}
else
{
    print "User not found";
}
if ($row == 1)
{
    echo "<script>
    alert('User Deactivated');
    window.location.href='displayAllRecords.php';
    </script>";
}
?>