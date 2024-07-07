<?php
 include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action= "<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method ="post" >
    <h2>Welcome to Necktapers Registration Form</h2><br>
    <label>username:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="register"><br>
  </form>
</body>
</html>
<?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username)){
      echo "Please enter your username.<br>";
    }
    else{
      if(empty($password)){
        echo "Please enter your password.<br>";
      }
      else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO necktapers_users (user, password) VALUES('$username', '$hash')";
        try{
          mysqli_query($connection, $sql);
          echo "You are now registered !<br>";
        }
        catch(mysqli_sql_exception){
          echo "This username is taken, please try another username.<br>";
        }
        
      }
    }
  }
  mysqli_close($connection);
?>