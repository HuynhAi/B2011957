<?php
 $servername="localhost";
 $uername="root";
 $password="";
 $dbname="qlsv";

 $conn = new mysqli("$servername","$uername","$password","$dbname");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
     $id = $_POST['id_lop'];
     $sql = " update major set name_major = '$_POST[ten_lop]' 
                where id_major = '$id'";

     if ($conn->query($sql) == TRUE) {
          header('Location: major_index.php');
                  }
     else {
         echo "Error!" ;
                  }
                  
                  $conn->close();

?>