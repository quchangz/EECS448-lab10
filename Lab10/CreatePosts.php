<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "quchanzhang", "nech7eji", "quchanzhang");

if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["id"];
$posts = $_POST["posts"];
$data = "SELECT user_id FROM users WHERE user_id='$user'";
$flag = false;

if($result = $mysqli->query($data))
{
	if($row = $result->fetch_assoc())
	{
		if($row["user_id"] == $user)
		{
			$flag = true;
		}
    }
}
else
{
    echo "Error, user not found<br>";
    echo "<a href='AdminHome.html'>Back to Admin Home </a>";
}

if ($flag == true)
{
        $sql = "INSERT INTO post(content, author_id) VALUES ('$posts', '$user')";
        $query = $mysqli->query($sql);
        if ($query)
        {
            echo "Posted<br>";
            echo "<a href='AdminHome.html'>Back to Admin Home </a>";
        }
        else
        {
            echo "Error<br>";
            echo "<a href='AdminHome.html'>Back to Admin Home </a>";
        }  
}

$mysqli->close();
?>
