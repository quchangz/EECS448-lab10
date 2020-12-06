<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "quchanzhang", "nech7eji", "quchanzhang");

/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["id"];
$sql = "INSERT INTO users (user_id) VALUES ('$user');";

    if ($mysqli->query($sql) === TRUE)
    {
      echo "<p>User created successfully</p>";
    }
    else
    {
      echo "<p>Error, user not created or user already exists</p>";
    } 

    echo "<br><a href='AdminHome.html'>Back to Admin Home </a>";
  
/* close connection */
$mysqli->close();
?>