<?php
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
  
$sql = "SELECT * FROM subscriptions";
$retrieve_val = mysqli_query($db, $sql);
?>
<ul>
<?php
while ($row = mysqli_fetch_array($retrieve_val)) { ?>
        <li>
            <?php echo $row['email'] ?>
        </li>
<?php } ?>
    
</ul>
