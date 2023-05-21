<?php
  $full_name = $_POST['full_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $conn = new mysqli('localhost','root','','lap');

  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into students(full_name, email, gender) values(?, ?, ?)");
    $stmt->bind_param("sss",$full_name, $email, $gender);
    $execval = $stmt->execute();
    echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();    
}

?>




