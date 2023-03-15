<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
</head>

<body>
    <form action="sua_mk.php" method="POST">
        Mật khẩu cũ: <input type="password" name="old_psw"> <br>
        Mật khẩu mới: <input type="password" name="new_psw"> <br>
        Nhập lại mật khẩu: <input type="password" name="new_psw1"> <br>
        <input type="submit" name="sb">
    </form>

    <?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlbanhang";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

   if(isset($_POST["sb"])){
    session_start();
  // echo $_SESSION["email"] .'====';
  // echo md5($_POST["old_psw"]).'======' .$_SESSION["email"] .'======';
  $sql = "select fullname, email from customers 
  where email = '".$_SESSION["email"]."' 
  and password = '".md5($_POST["old_psw"])."'";
  $result = $conn->query($sql);
  //  print_r($result); 
 // echo $result->num_rows .'<br>';
    if($result->num_rows > 0){
        if($_POST["new_psw"]== $_POST["old_psw"]){
            echo'Mật khẩu cũ không được giống mật khẩu mới!';
        }
        elseif($_POST["new_psw"] != $_POST["new_psw1"]){
            echo'Mật khẩu nhập lại không khớp!';
        }
        else{
            $sql=" UPDATE customers set password = ' ".md5($_POST["new_psw"])." ' 
            where email = '".$_SESSION["email"]." '";
          //  print_r($sql);
            $result1 = $conn->query($sql);
                echo'đổi mật khẩu thành công!'; 
            
        }
    }
    else
     echo'Mật khẩu cũ không đúng';
   }
    ?>
</body>

</html>