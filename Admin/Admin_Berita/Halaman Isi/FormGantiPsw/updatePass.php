<?php
include 'koneksi.php';

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'berita');

header("location: GantiPassword.php");

$currentPassword = $_POST['oldpsw'];
$newPassword = $_POST['newpsw'];
$confirmPassword = $_POST['cfrpsw'];

if ($newPassword === $confirmPassword) {
   // TODO: Update the password in the database or perform necessary actions

   $sql = "UPDATE tbl_login SET password = '$newPassword' WHERE password = '$currentPassword'";
   if ($conn->query($sql) === true) {
     echo "Password changed successfully!";
   } else {
     echo "Error updating password: " . $conn->error;
   }
 } else {
   echo "New password and confirm password do not match.";
 }

 // Close the database connection
 $conn->close();
?>