<?php 
//fetch data backlog
$bLogType       = $_POST["type"];
$bLogSummary    = $_POST["summary"];
$bLogReporter   = $_POST["reporter"];
$bLogOwner      = $_POST["owner"];
$bLogDesc       = $_POST["editor1"];

//set server connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanban";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Connection successfull
$sql = "INSERT INTO backlog (log_type, log_summary, log_reporter, log_owner, log_description)
VALUES ('$bLogType','$bLogSummary','$bLogReporter','$bLogOwner','$bLogDesc')";

if ($conn->query($sql) === TRUE) {
    #Display backlogs here
    header('Location: display_backlog.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    die();
}


$conn->close();