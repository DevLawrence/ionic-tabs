<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$hostName = "localhost";
$userName = "root";
$password = "";
$db = "demo";

$conn = new mysqli($hostName, $userName, $password, $db);

$result = $conn->query("SELECT * FROM previousinternships where pfNumber = 17001");

//return $result;


$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outpt != "") {$outpt .= ",";}
    $outpt .= '{"pfNumber":"'  . $rs["pfNumber"] . '",';
    $outpt .= '"userName":"'   . $rs["userName"]        . '",';
    $outpt .= '"Branch":"'. $rs["Branch"]     . '",';
    $outpt .= '"applicationStatus":"'  . $rs["applicationStatus"] . '",';
    $outpt .= '"startDate":"'   . $rs["startDate"]        . '",';
    $outpt .= '"endDate":"'. $rs["endDate"]     . '"}';
}
$outpt ='{"records":['.$outpt.']}';
$conn->close();

print_r($outpt);
return $outpt;
?>
