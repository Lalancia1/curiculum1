<?php
//$conn = new mysqli('localhost','root','', 'moncv');


$conn = mysqli_connect("localhost","root", "");
if ($conn->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $conn->db->connect_errno . ") " . $conn->db->connect_error;
}
$connectdb= mysqli_select_db($conn,'moncv') or die(" la connection à la base de donnée a échoué");
?>