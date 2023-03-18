<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
       $name = $email = $gender = $comment = $website = "";
        if($_SERVER['REQUEST_METHOD']=='POST'){
            // test_input: ktra du lieu bien
            $name = test_input($_POST['name']);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            if(isset($_POST['gender']))
            $gender = test_input($_POST['gender']);
        }
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
    <h2> Vi du nhap form </h2>
    <form action="<?php echo 
    htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method='POST'>

        Name: <input type="text" name='name'> <br> <br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name='gender' value='famale'> Famale
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        echo "<h2> Thong tin da nhap:</h2>" ;
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
    ?>

</body>

</html>