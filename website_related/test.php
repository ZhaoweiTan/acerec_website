<?php

//$keyword2 = $_GET["q"];
//trim($keyword2);

$keyword2 = 'CDL';
$mysqli = new mysqli("localhost", "root", "", "acemap");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$result2 = $mysqli->query("SELECT * FROM conference WHERE FullName LIKE '%". urlencode($keyword2) ."%'OR ShortName LIKE '%". urlencode($keyword2) ."%'");

$sendBack = '';

for ($row_no = $result2->num_rows - 1; $row_no >= 0; $row_no--) {
    $result2->data_seek($row_no);
    $row = $result2->fetch_assoc();
    $sendBack = $sendBack."{author:\"".$row['ShortName']."\",title:\"".$row['FullName']."\"};";
}
echo $sendBack;

?>