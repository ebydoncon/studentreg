<?php
include("connection.php");
$pg=(isset($_GET["pg"])?$_GET["pg"]:false);
if($pg == 2) {
	// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = (isset($_POST['name'])?$_POST['name']:false);
$email    = (isset($_POST['email'])?$_POST['email']:false);
$subject  = (isset($_POST['subject'])?$_POST['subject']:false);
$comments = (isset($_POST['comments'])?$_POST['comments']:false);



if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}

$xdate =date('Y-m-d');
mysqli_query($con, "insert into feedback(fname, feeBackType, email, comments, xdate) values('$name', '$subject', '$email', '$comments','$xdate')");

//$address = "example@themeforest.net";
$address = "sanderjesusacademy@yahoo.com";



$e_subject = 'Sander Jesus Academy School, You\'ve been contacted by ' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have been contacted by $name with regards to $subject, their additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name via email or via $email";

$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
 


	if(mail($address, $e_subject, $msg, $headers)) {
	
		// Email has sent successfully, echo a success page.
	
		echo "<fieldset>";
		echo "<div id='success_page'>";
		echo "<h1>Email Sent Successfully.</h1>";
		echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
		echo "</div>";
		echo "</fieldset>";
	} 
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Sander Jesus Academy, Creche, Nursery, Primary &amp; Secondary School | Contact:: Sander</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<link rel="stylesheet" href="css/styles.css" media="all" />
<link rel="icon" href="images/logo.png" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sander Jesus Academy  Nursery, Primary and Secondary School, Sander Jesus Academy Home, SCHOOLHELP, SwiftoTech Microsystems, 40 Abagana Road Aba W.B.H.E Aba, Abia State., Schools in Aba, good schools in Aba, Sander Jesus Academy, Quality education, good school with good teachers, good and affordable education, Sander jesus model academy, school with a difference." />
	
		<meta name="description" content="Sander Jesus international academy is one the best schools in the city of Aba, that has been over a decade producing exellent kids..." />
		<meta name="author" content="SwiftoTech Microsystems">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body>
<!--header--><!--start-banner-->
		<?php include("header1.php"); ?>
<!--end-banner-->	
<!--content-->

<div class="about">
	 <div class="container" style="margin-bottom:40px; margin-top:60px;">    
	   <div style="padding-left:100px; float:left" class="contact-form">
				  	<h3 class="error_message" style="color:#036">Contact Us</h3>
					    <form method="post" action="?pg=2" style=" margin-top:20px">
					    	<table width="" class="tablecont">
                            <tr>
						    	<td width=""><label>Name</label></td>
						    	<td width=""><input name="name" type="text" class="textbox"></td>
						    </tr>
						    <tr>
						    	<td><label>E-Mail</label></td>
						    	<td><input name="email" type="text" class="textbox"></td>
						    </tr>
						    <tr>
						    	<td><label>Subject</label></td>
						    	<td><input name="subject" type="text" class="textbox"></td>
						    </tr>
						    <tr>
						    	<td><label>Message</label></td>
						    	<td><textarea name="comments"> </textarea></td>
                             </tr>
                                <tr>
						    	<td></td>
						    	<td><input type="submit" value="Submit"></td>
                             </tr>
                             </table>
					    </form>
				  </div>
  				
			
					
	   <div class="company_address" style="float:left; margin-left:50px">
		     	  <h3 style="margin-bottom:20px; font:Arial, Helvetica, sans-serif; color:#036">Address</h3>
						    	<p>40 Abagana Road Aba W.B.H.E Aba, Abia State.</p>
						    	
		    	  <p>Phone:08037309925, 08103409676, 08090676534</p>
				 	 	<p>Email: info@sanderjesusacademy.org, sanderjesusacademy@gmail.com</p>
				   		<p>Follow on: <span><a href="http://facebook.com/sanderjesusacademy">Facebook</a></span>, <span>Twitter</span></p>
			      
				 </div></div>
				 <div class="clear"></div> 
		
              
     
     </div></div>
<!--footer-->
	
			<?php include("footer.php") ?>
</body>
</html>
	