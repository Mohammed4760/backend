<?php
if (isset($_POST['submit'])) {

   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['pass'];
   $image_name=$_FILES['image_name']['name'];
   $tmp_name=$_FILES['image_name']['tmp_name'];
   move_uploaded_file($tmp_name,"./images/". $image_name);
 

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <form method="POST" enctype="multipart/form-data">
     <pre>
     
     <h3>username</h3> <input type="name" name="name">
     <h3>Email</h3><input type="email" name="email">
     <h3>password</h3> <input type="password" name="pass">
     <h3>upload your picture</h3> <input type="file" name="image_name">
     <br>
      <button type="submit" name="submit">submit</button>
     </pre>

    </form>
   
  </body>
</html>