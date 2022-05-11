<?php
include_once 'connection.php';
include_once 'mail.php';
header('Access-Control-Allow-Origin: *');


$sql = "INSERT INTO `feedback` ( `rating`, `feedbackName`, `feedback`) VALUES ('".$_POST['rating']."', '".$_POST['name']."','".$_POST['comment']."')";


$rs = mysqli_query($conn, $sql);

if ($rs) {
	$message = "<p><h1>Feedback from ".$_POST['name']."</h1> 
				<p>Rating ".$_POST['rating']."</p>
				<p>".$_POST['comment']."</p>
				<p>";
	sendMail($message, "Feedback", "ajeetkg094@gmail.com");

    $data = "data inserted";
    echo json_encode($data);
    return;
}
echo json_encode($rs);


return;
