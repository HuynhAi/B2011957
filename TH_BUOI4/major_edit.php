<!DOCTYPE html>
<html>
<?php
        $servername="localhost";
        $uername="root";
        $password="";
        $dbname="qlsv";

        $conn = new mysqli("$servername","$uername","$password","$dbname");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        $sql = " select * from major where id_major = '".$_POST['id']."' ";
        $result = $conn->query($sql);
       $row = $result->fetch_assoc();
    ?>

<body>

    <h3>Sửa thông tin lớp học</h3>
    <form action="major_edit_save.php" method="POST">
        Mã lớp: <input type="text" name="id_lop" VALUE=" <?php echo $row['id_major']; ?>"> <br>
        Tên Lớp: <input type="text" name="ten_lop" VALUE=" <?php echo $row['name_major']; ?>"> <br>
        <input type="submit" VALUE="Cập Nhật">
    </form>
</body>

</html>