<?php
// Database settings
// database hostname or IP. default:localhost // localhost will be correct for 99% of times $servername = "localhost";
// Database user
$username = "procodecg";
// Database password
$password = "procodecg";
// Database name
$dbname = "contoh";
############## Make the mysql connection ###########
$conn = new mysqli($servername, $username, $password, $dbname); if ($conn->connect_error)
{
// the connection failed so quit the script
die('Could not connect!<br />Contact the site\'s admin.'); }
$sql = "SELECT * FROM login"; $result = $conn->query($sql);
 
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "loginid: " . $row["loginid"] . " Name: " . $row["username"] . " Password: " . $row["password"] . " <br>";
}
} else {
echo "0 results"; }
$conn->close(); ?>
