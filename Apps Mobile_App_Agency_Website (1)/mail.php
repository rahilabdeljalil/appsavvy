<?php

if(isset($_REQUEST['n11']))
{
$name=$_REQUEST['n11']." ".$_REQUEST['n22'];
$address=$_REQUEST['n44'];
$email=$_REQUEST['n55'];
$phone=$_REQUEST['n66'];
$info=$_REQUEST['n88'];

//echo $name,$phone,$email,$website;
//sending to mail

$to      = 'email@gmail.com';  //add your email id
$subject = 'Mobile App Solutions/Message';  // add mail subject

$message = "Name:".$name.
			"\nAddress:".$address.
            "\nPhone:".$phone.
            "\nE-mail: ".$email.
             "\nAdditional Info: ".$info;

$headers = "Reply-To: $email \r\n";

if(mail($to, $subject, $message,$headers))
{
    header("location:contact.html");
}

}

?>