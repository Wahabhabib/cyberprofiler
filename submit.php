<?php
  session_start();

  $db_host = 'db4free.net';
  $db_name = 'iamtesting';
  $db_user = "iamtestinguser";
  $db_password = "Godisgood9084555";
  $db_tablename = "subscriptions";


  // Connect to the sql database
  $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
  if(!$db) {
    die('database not connected');
  }



  // Function to check if email is valid
  function checkemail($str) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

  // Check if the user makes a post request and respond to it
  if(isset($_POST['submit'])){ 
    // assign the value of the email to a variable of same name
    $email = $_POST['email'];

    // VAlidate Email
    if(!checkemail($email)){
      $_SESSION["error"] = "This email is invalid 💀";
      header("Location:index.php");
    }
      

    // Retrieve any email in db that matches $email
    $sql_e = "SELECT * FROM subscriptions WHERE email='$email'";
    $res_e = mysqli_query($db, $sql_e);

    // Check if email exists
    if(mysqli_num_rows($res_e) > 0){
      $_SESSION["error"] = "This email has already been registered 😜";
      header("Location:index.php");
  	} else {

      // Insert new email inside DB
      $query = "INSERT INTO subscriptions(email) values('$email')";

      $result = mysqli_query($db, $query);

      if ($result == true) {
        $_SESSION["success"] = "Registered successfully 😙";
        header("Location:index.php");
      } else {
        $_SESSION["error"] = "An error occured, try again";
        header("Location:index.php");
      }
    }

    
  }
?>