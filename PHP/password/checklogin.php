<?php
$username = $_POST['username'];
echo "Username: " . ($username) . "<br />"; $password = $_POST['password'];
echo "Password:" . ($password) . "<br />";
// the code below is actually the same as dbconnect // but with minor changes below
// can you see the difference and why
$dbservername = "localhost";
 
"procodecg"; $dbpassword = "procodecg"; $dbname = "procodecg";
######## Make the mysql connection ######
//$conn = mysql_connect(HOST, DBUSER, PASS);
$conn = new mysqli ($dbservername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error)
{
// the connection failed so quit the script
die('Could not connect !<br />Please contact the site\'s administrator.');
}
$sql ="SELECT * FROM login where username=\"$username\"";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "loginid: " . $row["loginid"]. " - Name: " . $row["username"]. " Password " . $row["password"]. "<br>";
}
} else {
echo "0 results"; }
