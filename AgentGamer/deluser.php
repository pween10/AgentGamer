<?php 
    session_start();
    include 'conDB.php';
    
//     echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// $id =  $_POST['id'];

// $id = $_POST['id'];
// $fullname =  $_POST['fullname'];
// $phone =  $_POST['phone'];
// $email =  $_POST['email'];
// $address =  $_POST['address'];


if(isset($_GET['uid'])){
  // echo $_GET['uid'];
  $userID = $_GET['uid'];
}
elseif(isset($_SESSION['userID'])) {
  $userID = $_SESSION['userID'];
}
echo $userID;


// if (isset($_SESSION['userID'])) {
//   $userID = $_SESSION['userID'];

$sql = "UPDATE tbl_users SET userStatus = 'N' WHERE userID = {$userID}; ";

//  print_r($res);
if ($con->query($sql)) {
    // echo"<script language='javascript'> alert('Record updated successfully') </script>";
    // echo "update successfully";
    header("Location:showuser.php");
    
  } else {
    // echo"<script language='javascript'> alert('Error updating record'. $conn->error;) </script>";
  }

?>