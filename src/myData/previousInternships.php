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
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"pfNumber":"'  . $rs["pfNumber"] . '",';
    $outp .= '"userName":"'   . $rs["userName"]        . '",';
    $outp .= '"Branch":"'. $rs["Branch"]     . '",';
    $outp .= '"applicationStatus":"'  . $rs["applicationStatus"] . '",';
    $outp .= '"startDate":"'   . $rs["startDate"]        . '",';
    $outp .= '"endDate":"'. $rs["endDate"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

print_r($outp);
return $outp;
?>