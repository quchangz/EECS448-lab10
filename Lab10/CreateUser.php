<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "quchanzhang", "nech7eji", "quchanzhang");

if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["id"];
$sql = "INSERT INTO users (user_id) VALUES ('$user');";

if ($mysqli->query($sql) === TRUE)
{
    echo "<h4>User created successfully</h4>";
}
else
{
    echo "<h4>User not created or user already exists</h4>";
} 

echo "<br><a href='AdminHome.html'>Back to Admin Home </a>";
  
$mysqli->close();
?>
