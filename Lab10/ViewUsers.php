<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "quchanzhang", "nech7eji", "quchanzhang");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$data = "SELECT user_id FROM users";
$result = $mysqli->query($data);
echo "<table><tr><th>Username</th></tr>";
if ($result)
{
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>";
    }
    echo "</table><br>";
    echo "<a href='AdminHome.html'>Back to Admin Home </a>";
}

else
{
    echo "No user found<br>";
    echo "<a href='AdminHome.html'>Back to Admin Home </a>";
}


$result->free();


/* close connection */
$mysqli->close();

?>