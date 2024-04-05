<?php

include('rsvp.html');

// Connection parameters
$host = "db-mysql-nyc3-66972-do-user-16093887-0.c.db.ondigitalocean.com:25060";
$username = "doadmin";
$password = "AVNS_RQkKohyXhwGAb8pXEgf";
$database = "rsvp_db";
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$full_name = $_POST['full_name'];
$guest_email = $_POST['guest_email'];
$guest_attending = $_POST['guest_attending'];
$num_guests = $_POST['num_guests'];

// SQL to enter data into phpmyadmin
$sql = "INSERT INTO guestinfo VALUES ('$full_name','$guest_email','$guest_attending','$num_guests')";

// Checking if the query was successful
if(mysqli_query($conn, $sql))
{
  echo "RSVP received!";
}

// Close the connection
mysqli_close($conn);

?>

</body>
</html>
