<?PHP
$name = $_POST["name"];
$to = "admin@ashif.me";
$subject = "New Message from $name";
$headers = "From: $email\n";
$message = $_POST["message"];
mail($to,$subject,$message,$headers);
?>