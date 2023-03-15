<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlsv";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
   
    // cach 1
    if ($result->num_rows > 0) {
          print_r ($result);
          echo '<br>';
          echo '<br>';
          
        //Cach 2: show theo tung dong voi for
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Hoten: " . $row["fullname"]. " " 
          . $row["email"].' ngaysinh: '.$row['Birthday']. "<br>";
        }
        echo '<br>';
        echo '<br>';
        $result -> free_result();
        
        //Cach 3: trinh bay voi bang html
        $result = $conn->query($sql);
        $result_all = $result -> fetch_all();
        print_r($result_all );
          echo "<table border=1>
                      <tr>
                        <th>ID</th>
                        <th>Hoten</th>
                        <th>email</th>
                        <th>ngaysinh</th>
                      </tr>";
                      foreach ($result_all as $row) {
                            $date = date_create($row[3]);
                          echo "<tr>
                          <td>" . $row[0]. "</td>
                          <td>" . $row[1]. "</td>
                          <td>" . $row[2]. "</td>
                          <td>" . $date ->format('d-m-Y'). "</td>
                          </tr>";
                          }
                      
            echo "</table>";
                        } else {
                          echo "0 ket qua tra ve";
                        }
                        $conn->close();
                        echo '<br>';
                        echo '<br>';
    
        // cach 4 su dung fetch_array
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);
       while($row = $result->fetch_array()) {
        echo "id: " . $row["id"]. " - Hoten: " . $row["fullname"]. " " 
        . $row["email"].' ngaysinh: '.$row['Birthday']. "<br>";
      }
      $result -> free_result();
      echo '<br>';
      echo '<br>';
    
      // cach 5 su dung fetch_row()
      $sql = "SELECT * FROM student";
      $result = $conn->query($sql);
        while ($row = $result -> fetch_row()) {
          printf("ID: %s - Ho ten: %s -email: %s ngay sinh: %s \n", $row[0], $row[1],$row[2],$row[3]);
          echo '<br>';
    
        }
      echo '<br>';
      echo '<br>';
      // cach 5 su dung fetch_object()
      $sql = "SELECT * FROM student";
      $result = $conn->query($sql);
      while ($obj = $result -> fetch_object()) {
        printf("mssv: %s - Ho ten: %s -email: %s ngay sinh: %s \n", $obj->id, $obj->fullname,$obj->email,$obj->Birthday);
        echo '<br>';
      }
      $result -> free_result();
        
?>