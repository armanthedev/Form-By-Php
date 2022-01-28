<?php
    if(isset($_POST['btn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone= $_POST['phone'];
        $age =$_POST['age'];
        $img = $_FILES['upload_img']['name'];
        $temp_name=$_FILES['upload_img']['tmp_name'];
        move_uploaded_file($temp_name,"upload/".$img);
    }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bio.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content-wrapper">
        <div class="card">
            <div class="card-title">
                <h1>php form practice</h1>
            </div>
            <div class="card-content">
                <div class="image">
                    <img src="upload/<?php if(isset($img)) {echo $img;} ?>" alt="img">
                </div>

                <div class="text">
                    <h3>Username: <?php if(isset($username)){echo $username;} ?></h3>
                    <h3>email: <?php if(isset($email)){echo $email;}  ?></h3>
                    <h3>password: <?php if(isset($password)){echo $password;} ?></h3>
                    <h3>phone: <?php if(isset($phone)){echo $phone;} ?></h3>
                    <h3>age: <?php if(isset($age)){echo $age;} ?></h3>
                </div>




            </div>
        </div>

    </div>
</body>

</html>