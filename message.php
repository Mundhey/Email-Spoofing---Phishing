<?PHP
$from=$_POST['from'];
$to=$_POST['to'];
$subject=$_POST['subject'];
$message=$_POST['message'];


mail($to,$subject,$message,"From:".$from);


print "Your Email Has Been Send ";




?>