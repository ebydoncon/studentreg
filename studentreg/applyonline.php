<?php require_once ('connection.php');

//include_once("myphpclass/studentOOP.php");

include_once("myphpclass/studentinserts.php");


$pg = trim(isset($_GET['pg'])?$_GET['pg']:false);
if ($pg == 8)
		{
			
 $surname=trim(isset($_POST['surname'])?$_POST['surname']:false);
 $othername=trim(isset($_POST['othername'])?$_POST['othername']:false);
 $class=trim(isset($_POST['class'])?$_POST['class']:false);
 
 $sex=trim(isset($_POST['sex'])?$_POST['sex']:false);
 $dateofbirth=trim(isset($_POST['dateofbirth'])?$_POST['dateofbirth']:false);
 $address=trim(isset($_POST['address'])?$_POST['address']:false);
 
 $lga=trim(isset($_POST['lga'])?$_POST['lga']:false);
 $state=trim(isset($_POST['state'])?$_POST['state']:false);
 $country=trim(isset($_POST['country'])?$_POST['country']:false);
 
 
 $email=trim(isset($_POST['email'])?$_POST['email']:false);

 $username=trim(isset($_POST['username'])?$_POST['username']:false);
 
$odate=date("Y-m-d");

$passportname="";
$passport=$_FILES["passport"]["name"];
$tablename="students";
//Checking whether logo was uploaded(browsed)
  
   if($passport!=""){
    $target_dir = "images/uploads/student/";
    $passporttmp=$_FILES['passport']['tmp_name']; 
    $temp = explode(".", $_FILES["passport"]["name"]);
    $passportname =strtolower($surname).round(microtime(true)) . '.' . strtolower(end($temp));
 
    move_uploaded_file($_FILES["passport"]["tmp_name"], $target_dir . $passportname);

    }

$insertedrow=0;


$tablestudents=new insertTable;
$state=$tablestudents->insert_13fields($tablename, 'surname', $surname, 'othername', $othername, 'class', $class, 'sex', $sex, 'dateofbirth', $dateofbirth, 'address', $address, 'lga', $lga, 'state', $state, 'country', $country, 'odate', $odate, 'email', $email, 'passport', $passportname, 'username', $username);
$display=$state;

$sql=$display.":: Insertion, affected records = 1";
			
			$sql= "<b>Operation was Successful: Record Inserted<b>";
            exit();

	echo "
			<script language='javascript'>
				location.href='applyonline?sql=$sql'
			</script>
		";			
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Swiftotech Integrated School | About:: Swiftotech</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  

<link rel="stylesheet" href="css/styles.css" media="all" />
<link rel="icon" href="images/swifto_logo.png" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Registration" />
    
        <meta name="description" content="SwiftoTech Microsystem" />
        <meta name="author" content="SwiftoTech Microsystems"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
<!--//fonts-->
<style>
.columncount1{
	-webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
	-webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
	text-align:justify;
	padding-right:55px;
}
	
.effect {
	width:400px;
	height:40px;
	border-radius:5px;
	-o-border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	
	box-shadow: 5px 5px 5px #000033;
    -o-box-shadow: 5px 5px 5px #000033;
	-webkit-box-shadow: 5px 5px 5px #000033;
	-moz-box-shadow: 5px 5px 5px #000033;
	}

</style>
</head>
<body>
<!--header--><!--start-banner-->
		<?php include("header1.php"); ?>
<!--end-banner-->	
<!--content-->

<div class="about">
	 <div class="container"><div class="wrap" style=" padding-bottom:50px">
			<div class="main-top">
				<div class="main">
                    <div class="section group" >
                       <div class="wrap" style="margin-left:100px; margin-top:30px ">
			<div class="main-top">
				<div class="main contact-form" style="">
                    <h2 style="font-weight:bold; padding-bottom:20px; margin-bottom:10px; background-color:#336; text-align:center; color:#FFF">Application Form</h2>
                    <div style="width:80%; margin-left:auto; margin-right:auto">
                     <?php 
                     $sql=(isset($_GET["sql"])?$_GET["sql"]:false);
                      if($sql== ""){ ?>
                         <form method="post" action="?pg=8" name="frmstuReg" onsubmit="return regcheck()" enctype="multipart/form-data">
                                <table style="border:2px thick #036">
                                    <tr>
                                        <td>
                                            Class <span style="color:red"> *</span>
                                        </td>
                                        <td style="height:30px">
                                             <select class="effect" name="class"  style="width:250px" >
                                                  <option value="">--Select Class--</option>
                                                  
                                                  <option value="Pre-Nursery">Pre-Nursery</option>
                                                  <option value="Nursery 1">Nursery 1</option>
                                                  <option value="Nursery 2">Nursery 2</option>
                                                  <option value="Nursery 3">Nursery 3</option>
                                                  <option value="Primary 1">Primary 1</option>
                                                  <option value="Primary 2">Primary 2</option>
                                                  <option value="Primary 3">Primary 3</option>
                                                   <option value="Primary 1">Primary 4</option>
                                                  <option value="Primary 2">Primary 5</option>
                                                  <option value="Primary 3">Primary 6</option>
                                                </select>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Surname <span style="color:red"> *</span>
                                        </td>
                                        <td style="height:35px; padding-top:15px">
                                            <input type="text" class="input-xlarge" name="surname" style="width:250px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Othername <span style="color:red"> *</span>
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="mini" name="othername" style="width:250px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                Gender <span style="color:red"> *</span>
                                        </td>
                                        <td style="height:35px">
                                            <select class="effect" id="select" name="sex"  style="width:250px">
                                              <option value="">--Select--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                           
                                        </td>
                                    </tr>
                                     <tr>
                                        <td> 
                                                Date of Birth <span style="color:red">*</span>
                                        </td>
                                        <td  style="height:35px">
                                            <input class="effect" name="dateofbirth" type="date" id="dateofbirth"  style="width:250px"/>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Residential  Address <span style="color:red">*</span>
                                        </td>
                                        <td  style="height:35px">
                                            <input type="text" class="mini" name="address" style="width:250px"/>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>
                                            L.G.A: <span style="color:red">*</span>
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="mini" name="lga" style="width:250px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            State of Origin: <span style="color:red">*</span>
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="input-xlarge" name="state" style="width:250px"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Country: <span style="color:red">*</span>
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="mini" name="country" style="width:250px"/>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            Email Address: <span style="color:red">*</span>
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="mini" name="email" style="width:250px"/>
                                        </td>
                                    </tr>
                                                          
                                    <tr>
                                        <td style="padding-right:20px">
                                            
                                                Passport Photograph
                                        </td>
                                        <td style="height:35px">
                                            <input  type="file" name="passport"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                          Username 
                                        </td>
                                        <td style="height:35px">
                                            <input type="text" class="mini" name="username" style="width:250px"/>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>

                                          
                                        </td>
                                        <td>
                                            <input  type="submit" class="btn btn-blue" value="  Submit  " />
                                        </td>
                                    </tr>
                                </table>
                                </form>
                                </div>
                    <?php } else{?>
                        
                        <div class="alert alert-success">
                          Your application was successful! We will get back to you through your Email address.
                        </div>
                    <?php } ?>
				</div>
			</div>
		</div>
                        
                   </div>
                   <div class="clear"></div> 
			  </div>
          </div>
      </div>
     </div></div>
<!--footer-->
	
    
	
			<?php include("footer.php") ?>
</body>
</html>
<script language="javascript">
function regcheck() {

if(document.frmstuReg.class.value == "") {
alert ("Please Select Class")
document.frmstuReg.class.focus();
return false
}
if(document.frmstuReg.surmame.value == "") {
alert ("Please enter Surname")
document.frmstuReg.surname.focus();
return false
}

if(document.frmstuReg.othername.value == "") {
alert ("Please Select Othernames")
document.frmstuReg.othername.focus();
return false
}
if(document.frmstuReg.sex.value == "") {
alert ("Please Select Sex")
document.frmstuReg.sex.focus();
return false
}

if(document.frmstuReg.dateofbirth.value == "") {
alert ("Please Select Date of Birth")
document.frmstuReg.dateofbirth.focus();
return false
}
if(document.frmstuReg.address.value == "") {
alert ("Please enter Residential Address")
document.frmstuReg.address.focus();
return false
}


if(document.frmstuReg.lga.value == "") {
alert ("Please enter Local Government")
document.frmstuReg.lga.focus();
return false
}

if(document.frmstuReg.state.value == "") {
alert ("Please Enter State")
document.frmstuReg.state.focus();
return false
}


if(document.frmstuReg.country.value == "") {
alert ("Please Enter Country of Origin")
document.frmstuReg.country.focus();
return false
}

if(document.frmstuReg.email.value == "") {
alert ("Please Enter email Address")
document.frmstuReg.email.focus();
return false
}
if(document.frmstuReg.username.value == "") {
alert ("Please enter Username")
document.frmstuReg.username.focus();
return false
}



else {
return true
}

}
</script>