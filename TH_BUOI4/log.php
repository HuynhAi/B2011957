<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "select fullname, email from customers 
where email = '".$_POST["email"]."' 
and password = '".md5($_POST["pass"])."'";
$result = $conn->query($sql);
//print_r($result->num_rows);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  /*
    $cookie_name = "user";
    $cookie_value = $row['email'] ;
    setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");
    setcookie("fullname", $row['fullname'], time() + (86400 / 24), "/");
    setcookie("id", $row['id'], time() + (86400 / 24), "/");
    */
     session_start(); //print_r($_SESSION);
    $_SESSION["username"] = $row['fullname'];
    $_SESSION["email"] = $row['email'] ;
    
   header('Location: homepage.php');
}
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  header('Refresh: 3;url=login.php');
}

$conn->close();
?>