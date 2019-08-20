
<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"crud");
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}



include('connect.php');
if(isset($_POST['save']))
{
    $user_name = $_POST['user_name'];
    $email_id = $_POST['email_id'];
    $user_password = $_POST['password'];
    $duplicate=mysqli_query($conn,"select * from user_login where user_name='$user_name' or email_id='$email_id'");
    if (mysqli_num_rows($duplicate)>0)
    {
        header("Location: index.php?message=User name or Email id already exists.");
    }
    else{
        try {
            date_default_timezone_set("Asia/Calcutta");
            $insertdate = date("Y-m-d H:i:s");
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO user_login (email_id,user_name,password,date_time)
VALUES ('$email_id', '$user_name','$user_password','$insertdate')";
            $conn->exec($sql);
            header("Location: index.php?message=Thank you for register. Please login to continue.");
        }
        catch(PDOException $e)
        {
            echo $sql . "
          " . $e->getMessage();
        }
        $conn = null;
    }
}














/*

$servername = "localhost";
$name = "root";
$password = "root";
$dbname = "my computer";

// Create connection
$conn = mysqli_connect($servername, $name, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = "SELECT * FROM `booked` WHERE

    `name` = '{$username}'
    `date` = '{$date}'
    `computer_id` = '{$select3}'
    `start_time` = '{$select1}'
    `end_time` = '{$select2}'
    `room` = '{$room}'

    ";

$result = mysqli_query($conn, $query);



if ( mysqli_num_rows ( $result ) > 1 )
{

    echo "data already exists";

}




else
{
    $sql = "INSERT INTO booked (date, computer_id, name, start_time, end_time, room)
        VALUES ('$date', '$select3', '$username', '$select1', '$select2', '$room')";



    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

}

*/

?>


<!DOCTYPE html>
<html>
<body>

<form method="post" action="process.php">
    First name:<br>
    <input type="text" name="user_name" >
    <br>
    Last name:<br>
    <input type="text" name="email_id">
    <br><br>
    Password:<br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="Submit">
</form>



</body>
</html>