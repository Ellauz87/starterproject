<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Nucleous 3 Limited Oil and gas plant integrity management, project management, and supply chain services for the Oil and gas, power and manufacturing industry. </title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/slide.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
    <style type="text/css">
<!--
.style3 {color: #EB0707}
.style4 {
	color: #FF0000;
	font-weight: bold;
}
.style6 {color: #EB0707; font-weight: bold; }
-->
    </style>
</head>
<body>
	<!-- wrapper -->
	<div  id="wrapper">
		<!-- header -->
		<header>
			<div class="shell">
				<h1 id="logo"><a href="#">Core</a></h1>
				<div class="contact">
					<a href="#" ><img src="css/images/facebook11.png" width="30" height="30" onmouseover="this.src='css/images/facebook12.png'" onmouseout="this.src='images/facebook11.png'"></a>
				
					<a href="#" ><img src="css/images/twitter11.png" width="30" height="30" onmouseover="this.src='css/images/twitter12.png'" onmouseout="this.src='images/twitter11.png'"></a>
				
					<a href="#" ><img src="css/images/linkedin11.png" width="60" height="26" onmouseover="this.src='css/images/linkedin12.png'" onmouseout="this.src='css/images/linkedin11.png'"></a>
				</div>
			</div>	
	  </header>
		<!-- end of header -->
		<!-- navigation -->
		<nav id="navigation">
			<div class="shell">
				<ul>
					<li class="active"><a href="index.html"><span></span>HOME</a></li>
				  <li><a href="about.html"><span class="bottom-arr"></span>ABOUT</a>
                  
                   <ul>
                  <li><a href="vision.html">Vision</a></li>
                    <li><a href="mission.html">Mission</a></li>
                    <li><a href="edge.html">Our Edge</a></li>
           
               </ul>
                  </li>
				  <li><a href="#"><span class="bottom-arr"></span>SERVICES</a>
                  <ul>
                  <li><a href="supply.html">Supply Chain</a></li>
                    <li><a href="asset.html">Asset Integrity</a></li>
                    <li><a href="maintenance.html">Maintenance</a></li>
                    <li><a href="support.html">Project Support</a></li>
               </ul>
                  </li>
				  <li><a href="safety.html"><span class="bottom-arr"></span>QHSE</a></li>
                  <li><a href="team.html"><span class="bottom-arr"></span>CSR</a></li>
                
				  <li><a href="career.html"><span class="bottom-arr"></span>CAREER</a></li>
				  <li><a href="contact.html"><span class="bottom-arr"></span>CONTACT US</a></li>
			  </ul>
			</div>	
		</nav>
		<!-- end of navigation -->
		<!-- slider-holder -->
		<div class="slider-holder">
			<div class="shell">
				<span class=""></span>
				<div class="slider flexslider">
					<ul class="slides">
						<li>
							<img src="css/images/contact2.png" alt="best oil and gas company in Nigeria" />						</li>
						<li>
							<img src="css/images/contact1.png" alt="" />
							</div>
	                      </div>	
                            </div>	
                            <!-- end of slider-holder -->
		<!-- services -->
		<section class="services">
			<div class="shell">
				<div class="boxes">
					<h2>What We Do</h2>
					<div class="cl">&nbsp;</div>
					<div class="box">
						<a href="#">
							<img src="css/images/print-design.png" alt="" />
							<h3>SUPPLY CHAIN</h3>
						</a>					</div>
					<div class="box">
						<a href="#">
							<img src="css/images/graphic-design.png" alt="" />
							<h3>ASSET INTEGRITY</h3>
						</a>					</div>
					<div class="box">
						<a href="#">
							<img src="css/images/logo-design.png" alt="" />
							<h3>MAINTENANCE SERVICES</h3>
						</a>					</div>
					<div class="box">
						<a href="#">
							<img src="css/images/vector-characters.png" alt="" />
							<h3>PROJECT SUPPORT</h3>
						</a>					</div>
					<div class="cl">&nbsp;</div>
				</div>
		  </div>
		</section>
		<!-- end of services -->
		<!-- main -->
		<div class="main" align="center">
		  <p>&nbsp;</p>
		  <table width="935" border="0" align="center">
            <tr>
              <td colspan="2"><h3 align="left" class="style3"> Kindly use this form for enquiries</h3></td>
            </tr>
            <tr>
              <td width="596" rowspan="7"><form action="contact.php" method="post" name="contactform" id="contactform">
        <ol>
          <li>
            <label for="name">Full Name <span class="red">*</span></label>
            <input id="name" name="name" class="text" />
          </li>
          <li>
            <label for="email"> email <span class="red">*</span></label>
            <input id="email" name="email" class="text" />
          </li>
          <li>
            <label for="address">Address <span class="style1">*</span></label>
            <input id="address" name="address" class="text" />
          </li>
          <li>
            <label for="phone">Phone <span class="style1">*</span></label>
            <input id="phone" name="phone" class="text" />
          </li>
          <li>
            <label for="message">Message <span class="red">*</span></label>
            <textarea id="message" name="message" rows="6" cols="50"></textarea>
          </li>
          <li class="buttons">
           <span class="clr">
            <input name="imageField" type="image" class="send" id="imageField" src="css/images/send.gif" />
            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
          <li class="buttons">
            <div align="center">&nbsp;&nbsp;
              
             <?php

if(!$_POST) exit;

$email = $_POST['email'];


//$error[] = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';
if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email )){
	$error.="Invalid email address entered";
	$errors=1;
}
if($errors==1) echo $error;
else{
	$values = array ('name','email','message','address','phone');
	$required = array('name','email','message','address','phone');
	 
	$your_email = "info@nucleous3energy.com";
	$email_subject = "Online Message: ".$_POST['subject'];
	$email_content = "Online message:\n";
	
	foreach($values as $key => $value){
	  if(in_array($value,$required)){
		if ($key != 'address' && $key != 'phone') {
		  if( empty($_POST[$value]) ) { echo 'PLEASE FILL IN REQUIRED FIELDS'; exit; }
		}
		$email_content .= $value.': '.$_POST[$value]."\n";
	  }
	}
	 
	if(@mail($your_email,$email_subject,$email_content)) {
		echo 'Message sent!'; 
	} else {
		echo 'ERROR!';
	}
}
?></div>
            <div class="clr" align="right"></div>
          </li>
        </ol>
      
       
      </form></td>
              <td width="329"><span class="style4">NIGERIA- LAGOS</span>
              <p>24 Ologun Agbaje Street, <br>
Victoria Island <br>
Lagos. <br>
<a href="mailto:enquiries@nucleous3energy.com">info@nucleous3energy.com</a>,<br>
<strong>+2348188889995, +2348187358282</strong></p></td>
            </tr>
            <tr>
              <td><p><span class="style6">UK- LONDON</span><br>
Cottage 39,<br>
Tithe Walk,<br>
Mill Hill,<br>
London NW7 2PY<br>
<span class="style7">info@nucleous3energy.com</span><br>
<strong>+447958281664</strong></p></td>
            </tr>
            <tr>
              <td><a href="mailto:enquiries@nucleous3energy.com"></td>
            </tr>
            <tr>
              <td></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
		  <p>&nbsp;</p>
		</div>
    <!-- end of main -->
		<div id="footer-push"></div>
	</div>
	<!-- end of wrapper -->
	<div id="footer">
		<div class="shell">
			<nav class="footer-nav">
				<a href="index.html"><span></span>HOME</a></li>
				  <a href="about.html"><span class="bottom-arr"></span>ABOUT</a>
				  <a href="supply.html"><span class="bottom-arr"></span>SERVICES</a>
				  <a href="safety.html"><span class="bottom-arr"></span>SAFETY POLICY</a>
                   <a href="team.html"><span class="bottom-arr"></span>OUR TEAM</a>
              
				  <a href="career.html"><span class="bottom-arr"></span>CAREER</a>
				  <a href="contact.html"><span class="bottom-arr"></span>CONTACT US</a>
			</nav>
			<p class="copy">Copyright &copy; 2014 Design by <a href="http://surfweb.com.ng" target="_blank" title="+2348026298030">Surfweb</a></p>
			<div class="cl">&nbsp;</div>
		</div>
	</div>
</body>
</html>