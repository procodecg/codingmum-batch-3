<?php

$id = $_POST['identitas'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi']


echo "ID: " . ($id) . "<br />"; 
echo "Nama:" . ($nama) . "<br />";
echo "Deskripsi:" . ($deskripsi) . "<br />";


   $servername = "localhost";
   $username = "procodecg";
   $password = "procodecg";
   $dbname = "procodecgware";

   $conn = new mysqli($servername, $username, $password, $dbname); 
   if ($conn->connect_error) {
       die('Could not connect!<br />Contact the site\'s admin.'); 
   }

   //echo 'berhasil<br>';

   $sql = "INSERT INTO `produk`(`id`, `nama`, `deskripsi`) VALUES ($id, '$nama', '$deskripsi')";

   echo $sql;
   $result = $conn->query($sql);
   echo $result;

   $conn->close();

?>