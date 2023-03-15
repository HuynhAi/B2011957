<?php
 $servername="localhost";
 $uername="root";
 $password="";
 $dbname="qlsv";

 $conn = new mysqli("$servername","$uername","$password","$dbname");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
     $id = $_POST['id'];
     $sql = " DELETE FROM major
                where id_major = '$id'";

     if ($conn->query($sql) == TRUE) {
          header('Location: major_index.php');
                  }
     else {
         echo "Error!" ;
                  }
                  
                  $conn->close();

?>