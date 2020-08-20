<?php
session_start();
include("connection.php");
include_once("myphpclass/studentOOP.php");
$studentrec=new studentOOP;
$page=trim(isset($_GET['page'])?$_GET['page']:false);

?>
<!DOCTYPE html>
<html>
<head>
<title>Swiftotech Integrated School | View Student :: Swiftotech</title>

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Student Registration" />
	
		<meta name="description" content="SwiftoTech Microsystem" />
		<meta name="author" content="SwiftoTech Microsystems"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css"    media="all" >
<link href="css/style.css" rel="stylesheet" type="text/css"   media="all" />
	
<link href="css/style2.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/swifto_logo.png" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100' rel='stylesheet' type='text/css'>
<!--//fonts-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<!--End of Header-->	

</head>
<body>
   
<!--header-->
<?php include("header1.php") ?>
<!--header-->

<!--End of Header-->	
<!-- requried-jsfiles-for owl -->
							
		<div class="content">
			<div class="container" style="padding-top:20px; padding-right:10px; padding-left:10px; ">
				<?php if ($page=="") { ?>
					
					 <div class="x_panel ">
                         <fieldset>
                        <legend style="color:#063">Student Record</legend>
                    <table id="datatable-buttons" style="width:100%" class="table table-striped table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th style="width:3%;">Passport</th>
                          
                          <th>Surname</th>
                          <th>Othername</th>
                         
                          <th>Class Name</th>
                          
                          
                          <th>Sex</th>
                          <th>Address</th>
                          <th>LGA</th>
                          <th>State</th>
                           <th>Country</th>
                      
                        
                         <th style="width:5%;"><i class="fa fa-print" style="color:green"></i> Print</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                             $state="";
                             $sex="";
                            
                             $state="";
                             

                             
                                //Active Students
                              $records=$studentrec->allstudent('students', 'stid', 'DESC');
                            

                              if (is_array($records)) {
                               $k=0;
                              foreach($records as $fieldrecord){
                              $k+=1;
                              ?>
                                      <tr>
                                        <td><?php echo  $k; ?></td>
                                        <td style="width:3%"><img src="images/uploads/student/<?php echo  trim($fieldrecord['passport']); ?>" class="img img-responsive img-rounded"></td>
                                        
                                        <td><?php echo  substr($fieldrecord['surname'],0, 12); ?></td>
                                        <td><?php echo  substr($fieldrecord['othername'],0, 12); ?></td>
                                         <td><?php echo  substr($fieldrecord['class'],0, 12); ?></td>
                                       
                                        <td><?php echo  substr($fieldrecord['sex'],0, 12); ?></td>
                                        <td><?php echo  substr($fieldrecord['address'],0, 12); ?></td>
                                         <td><?php echo  substr($fieldrecord['lga'],0, 12); ?></td>
                                        <td><?php echo  substr($fieldrecord['state'],0, 12); ?></td>
                                        <td><?php echo  substr($fieldrecord['country'],0, 12); ?></td>
                                       
                                         <td><button onclick="funcprint('<?php echo $fieldrecord['stid']; ?>')"><center>Print</center></button></td>
                                         
                                       
                                      </tr>
                                      <?php }
                              
                              }
                             ?>
                        
                      </tbody>
                    </table>
                   </fieldset>
                    </div>
                    <?php } ?>

                    <?php if ($page==1) { 
                     $stid=trim(isset($_GET['id'])?$_GET['id']:false);
                     $odate=date("Y-m-d");
                    
                     $records=$studentrec->allstudentedit('students', 'stid', $stid);
                      if (is_array($records)) {
                               
                              foreach($records as $fieldrecord){ ?>
                    	 <div class="x_panel" >
                  <div class="x_title">
                    <h3 class="schoolhelp">Student Details </h3>
                    <ul class="nav navbar-right panel_toolbox" id="panel_toolbox">
                      
                      <li class="pull-right"><a href="?schoolhelp=<?php echo $schoolhelp; ?>" class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" id="printrecord">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h3>
                                          <i class="fa fa-tag" style="color:#063"></i> <?php echo $fieldrecord['surname']; ?>.
                                          <small class="pull-right">Date: <?php echo $odate; ?></small>
                                      </h3>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                       
                       
                        <div class="col-sm-6 col-lg-6 col-xs-6 invoice-col">
                         <img id="userimage" <?php if ($fieldrecord['passport']!="") {?> style="display: block" src="images/uploads/student/<?php echo $fieldrecord['passport'] ?>" <?php } ?> class="img img-responsive img-thumbnail" >
                        </div>
                        <!-- /.col -->
                      
                      </div>
                      <!-- /.row -->

                      <div class="row">
                       
                        <div class="col-xs-12">
                          <hr>
                          <center><p class="lead schoolhelpcolor"><b><?php echo $fieldrecord['surname']; ?> Details</p></b></center>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Surname:</th>
                                  <td><?php echo $fieldrecord['surname']; ?></td>
                                </tr>
                                <tr>
                                  <th>Othername:</th>
                                  <td><?php echo $fieldrecord['othername']; ?></td>
                                </tr>
                               
                                <tr>
                                  <th>Class Name</th>
                                  <td><?php echo  $fieldrecord['class']; ?></td>
                                </tr>
                               
                                 
                                 <tr>
                                  <th>Sex:</th>
                                  <td><?php echo $fieldrecord['sex'] ?></td>
                                </tr>
                                 <tr>
                                  <th>Country:</th>
                                  <td><?php echo $fieldrecord['country']; ?></td>
                                </tr>
                                 <tr>
                                  <th>State:</th>
                                  <td><?php echo $fieldrecord['state']; ?></td>
                                </tr>
                                 <tr>
                                  <th>L.G.A:</th>
                                  <td><?php echo $fieldrecord['lga']; ?></td>
                                </tr>
                                <tr>
                                  <th>Address:</th>
                                  <td><?php echo $fieldrecord['address']; ?></td>
                                </tr>

                                

                               <tr>
                                  <th>Email:</th>
                                  <td><?php echo $fieldrecord['email']; ?></td>
                                </tr>
                               
                               
                                <tr>
                                  <th>Date of Birth:</th>
                                  <td><?php echo $fieldrecord['dateofbirth']; ?></td>
                                </tr>
                               
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <div class="col-xs-6"><button class="btn btn-default print-link" ><i class="fa fa-print"></i> Print</button></div>
                          
                          
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                    <?php }
                }
                } ?>

				</div>
				<!---->
				</div>
			<?php include("footer.php"); ?>
</body>
</html>
	