<?php


$errmsg  = ''; // error message
$travel   = ''; // sender's name
$from   = ''; // sender's name
$to2   = ''; // sender's name
$date   = ''; // sender's name
$sname   = ''; // sender's name

$email   = ''; // sender's email addres

$mobile = ''; // mobile


$description = ''; // the message itself



if(isset($_POST['send']))

{
    
	$name   = $_POST['name'];
	$email   = $_POST['email'];	
	$phone   = $_POST['phone'];
	$country   = $_POST['country'];
	$state   = $_POST['state'];
	$city   = $_POST['city'];
	$address   = $_POST['address'];
	$postal-code   = $_POST['postal-code'];
	$message   = $_POST['message'];
	
    $subject = "Tech Sahaye";
	
	 /*session_start();
    if(($_SESSION['security_code'] != $_POST['security_code']) || (empty($_SESSION['security_code'])) ) {
      unset($_SESSION['security_code']);
	  show("Incorrect Code.","index.html");	
	  die();
	  
 		}
	
	

    if($errmsg == '')

    {

        if(get_magic_quotes_gpc())

        {

            $subject = stripslashes($subject);

            $message = stripslashes($message);

        }  
*/

        

        // the email will be sent here

                   //$to      = "info@euro-built.com";
                 $to = "smrt.bijay@gmail.com";
         
        //echo $to;

        // the email subject ( modify it as you wish )

       $subject = 'Enquiry from : ' . $subject;

        

        // the mail message ( add any additional information if you want )

        $msg     = " 
		Name : $name \r\n\n<br><br>
		Email : $email \r\n\n<br><br>  
		Phone : $phone \r\n\n<br><br>
		Country : $country \r\n\n<br><br>
		State : $state \r\n\n<br><br>
		City : $city \r\n\n<br><br>
		Address : $address \r\n\n<br><br>
		Postal Code : $postal-code \r\n\n<br><br>
		Message : $message \r\n\n
		";

        SendEmail($to,$subject,$msg);
		
		//$msg = "Enquiry from ".$travel.", ".$from.", ".$to2.", ".$date.", ".$sname.", ".$mobile.", ".$email.", from site:".$subject.". Message: ".$description.". Thanks";
		//echo $msg1;
		
		
show("Enquiry submitted Successfully.","donation.php"); 


}


?>
<?php



function SendEmail($to,$subject,$msg)
{
	$headers = "From: info@techsahaye.in/ \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
    mail($to, $subject, $msg, $headers);
}

function show($msg,$loc)
{
?>
	<script language="javascript">
		alert("<?php print($msg); ?>");
		window.location = "<?php print($loc); ?>"
	</script>
<?php
die("");
}

?><?php
function showback($msg)
{
?>
	<script language="javascript">
		alert("<?php print($msg); ?>");
		history.back();
	</script>
<?php
die("");
}
?>
