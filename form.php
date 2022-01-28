<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
   

    <form action="bio.php" method="POST" enctype="multipart/form-data">

    <label for="username" >Username</label>
    <input type="text" name="username" placeholder="username">
<br><br>
    <label for="">Email</label>
    <input type="Email" placeholder="Email" name="email">
    <br>
    <br>
    <label for="">password</label>
    <input type="text" placeholder="password" name="password">
    <br><br>
    <label for="phone" >Phone</label>
    <input type="text" placeholder="Phone Number" name="phone">
    <br><br>
    <label for="age">Age</label>
    <input type="number" placeholder="age" name="age">
    <br><br>
    <input type="file" name="upload_img">
    <button style="background-color:blue;padding:10px;color:#fff" name="btn"> Submit </button>


    </form>
    

</body>
</html>
