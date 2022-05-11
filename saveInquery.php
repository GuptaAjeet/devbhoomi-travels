<?php
include_once 'connection.php';
include_once 'mail.php';
header('Access-Control-Allow-Origin: *');

$sql = "INSERT INTO `enquiry` ( `enquiryName`, `phoneNumber`, `email`, `message` ) VALUES ('".$_POST['name']."', '".$_POST['mobile_no']."','".$_POST['email']."','".$_POST['text']."')";


$rs = mysqli_query($conn, $sql);

if ($rs) {
	$message = "<p><h1>Inquiry from ".$_POST['name']."</h1> 
				<p>Phone ".$_POST['mobile_no']."</p>
				<p>Email ".$_POST['email']."</p>
				<p>".$_POST['text']."</p>
				<p>";
	sendMail($message, "Inquiry", "ajeetkg094@gmail.com");

    $data = "data inserted";
    echo json_encode($data);
    return;
}
echo json_encode($rs);


return;
