<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["Upload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
  
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

      if($imageFileType != "csv" && $imageFileType != "CSV"  ) {
          echo "Sorry, only CSV files are allowed.";
          $uploadOk = 0;
      }

      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

      } 
    else {
        if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file)) {
          echo "The file ". htmlspecialchars( basename( $_FILES["Upload"]["name"])).
           " has been uploaded.";
        echo '<br>';
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlbanhang";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        // cach 1
        $name_file = 'qlbanhang.csv';
        $lines = file($name_file, FILE_IGNORE_NEW_LINES);
        foreach ($lines as $key => $value)
        {
          $data = explode(",", $value);
        //  $date = date_create($data[3]);
          $new_format = date("Y-m-d", strtotime($data[3]));
        //  echo $new_format;
          /
          $sql = "INSERT INTO customers (id,fullname,email ,birthday,password)
          VALUES ('$data[0]', '$data[1]', '$data[2]','$new_format','".md5($data[4])."')";
          $result = $conn->query($sql);  
        }
      /*
      cach 2
          $file = fopen("uploads/qlbanhang.csv","r");
          while(! feof($file)){
            $data = fgetcsv($file);
            $sql = "INSERT INTO customers (id,fullname,email ,birthday,password)
            VALUES ('$data[0]', '$data[1]', '$data[2]','$data[3]','$data[4]')";
            $result = $conn->query($sql);
        }
        */
      }
      else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
}
?>