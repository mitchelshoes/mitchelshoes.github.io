<?php
$errors = '';
$myemail = 'slots@mitchel.shoes';//<-----Put Your email address here.
if(empty($_POST['item'])  ||
   empty($_POST['size']) ||
   empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['address']) ||
   empty($_POST['city']) ||
   empty($_POST['zip']) ||
   empty($_POST['phone']) ||
   empty($_POST['card']) ||
   empty($_POST['cvv']) ||
   empty($_POST['exp']) ||
   empty($_POST['twitter']) ||
   empty($_POST['release']) ||
   )
{
    $errors .= "\n Error: all fields are required";
}
$name = $_POST['name'];
$email = $_POST['email'];
$item = $_POST['item']
$size = $_POST['size']
$address = $_POST['address']
$city = $_POST['city']
$zip = $_POST['zip']
$phone = $_POST['phone']
$card = $_POST['card']
$cvv = $_POST['cvv']
$exp = $_POST['exp']
$twitter = $_POST['twitter']
$release = $_POST['release']
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "$release Slot Submission: $name";
$email_body = "New Slot submission. ".
" Here are the details:\n Name: $name \n ".
"Email: $email \n Item: $item \n ".
"Size: $size \n Address: $address \n "
"City: $city \n Zip: $zip \n ".
"Phone: $phone \n Card: $card \n ".
"Cvv: $cvv \n Exp: $exp \n ".
"Twitter: $twitter \n Release: $release \n ".;
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: thank-you.html');
}
?>