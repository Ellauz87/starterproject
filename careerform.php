<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('info@surfweb.com.ng'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php#thankyou");
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Nucleous 3 Limited Oil and gas plant integrity management, project management, and supply chain services for the Oil and gas, power and manufacturing industry. </title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
	
	<link rel="STYLESHEET" type="text/css" href="contact.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
	
	
	
	
	
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
    <style type="text/css">
<!--
.style1 {color: #CE1414}
.style2 {
	color: #000000;
	font-weight: bold;
}
.style3 {
	color: #FF0000;
	font-weight: bold;
}
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
				<div class="contact">				</div>
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
		<!-- slider-holder -->
		<div class="slider-holder">
			<div class="shell">
				<span class="slider-shadow"></span>
				<div class="slider flexslider">
					<ul class="slides"><li>
							<img src="css/images/careerslider.png" alt="best oil and gas company in Nigeria" />
							<div class="slide-cnt">
								<h2>A Friendly Environment</h2>
								<p></p>
							</div>
						</li>
						<li>
							<img src="css/images/careerslider2.png" alt="" />
							<div class="slide-cnt">
								<h2>Diversity and Inclusiveness</h2>
								<p>  </p>
							</div>
						</li>
						<li>
							<img src="css/images/careerslider3.png" alt="" />
							<div class="slide-cnt">
								<h2>Team Work</h2>
						<p>						</p>
							</div>
						</li>
						<li>
							<img src="css/images/manpower.png" alt="" />
							
								<h2>Technical Professional</h2>
								<p>                          </p>
							
						</li>
						<li>
							
								
					  </li>
					</ul>
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
						<a href="#"class="tittle">
							<img src="css/images/print-design.png" alt="" />
							<h3>SUPPLY CHAIN</h3>
						</a>					</div>
					<div class="box">
						<a href="#"class="tittle">
							<img src="css/images/graphic-design.png" alt="" />
							<h3>ASSET INTEGRITY</h3>
						</a>					</div>
					<div class="box">
						<a href="#"class="tittle">
							<img src="css/images/logo-design.png" alt="" />
							<h3>MAINTENANCE SERVICES</h3>
						</a>					</div>
					<div class="box">
						<a href="#" class="tittle">
							<img src="css/images/vector-characters.png" alt="" />
							<h3>PROJECT SUPPORT</h3>
						</a>					</div>
					<div class="cl">&nbsp;</div>
				</div>
		  </div>
		</section>
		<!-- end of services -->
		<!-- main -->
		<div class="main">
			<div class="shell">
				<section>
					<!-- content -->
					<div class="content">
					<a name="form"></a>
					  <h2 class="style1">Career</h2>
                          <p class="style3">&nbsp;</p>
						  
						  <!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
<table border="0" style="border-collapse:collapse; width:100%;" cellspacing="0" cellpadding="0">
	<tr>
		<td>Name:</td>
		<td>
			<input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_name_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td>
			<input type='text' name='lname' id='lname' value='<?php echo $formproc->SafeDisplay('lname') ?>' maxlength="50" style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_lname_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>Other Name:</td>
		<td>
			<input type='text' name='oname' id='oname' value='<?php echo $formproc->SafeDisplay('oname') ?>' maxlength="50" style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_oname_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>Picture:</td>
		<td>
			<input type="file" name='photo' id='photo' style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_photo_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>E-mail:</td>
		<td>
			<input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_email_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>Phone Number:</td>
		<td>
			<input type='text' name='tel' id='tel' value='<?php echo $formproc->SafeDisplay('tel') ?>' maxlength="50" style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_tel_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td>Resume:</td>
		<td>
			<input type="file" name='resume' id='resume' style="border-radius:5px; width:50%; padding:5px;" /><br/>
			<span id='contactus_resume_errorloc' class='error'></span>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<div class='container'>
				<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
				<label for='scaptcha' >Enter the code above here:</label>
				<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
				<span id='contactus_scaptcha_errorloc' class='error'></span>
				<div class='short_explanation'>Can't read the image?
				<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
			</div>
		</td>
	</tr>
	<tr>
	<td></td>
	<td>
		<div class='container'>
		<input type='submit' name='Submit' value='Submit' style="border-radius:5px; width:30%; padding:5px;"/>
		</div>
	</td>
	</tr>
</table>


</form>


<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");
	
    frmvalidator.addValidation("lname","req","Please provide your Last name");
	
    frmvalidator.addValidation("oname","req","Please provide your Other name");
	
    frmvalidator.addValidation("tel","req","Please provide your Phone Number");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>

						  
				  </div>
      <!-- end of content -->
					<!-- aside -->
					<aside>
						<div class="widget">
							<h2>&nbsp;</h2>
							<p><img src="css/images/career.png" width="263" height="453"></p>
						  <div class="cl">&nbsp;</div>
						</div>
						<div class="widget">
							<h2>&nbsp;</h2>
					        <div class="cl">&nbsp;</div>
						</div>
					</aside>
					<!-- end of aside -->
					<div class="cl">&nbsp;</div>
				</section>
			</div>
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