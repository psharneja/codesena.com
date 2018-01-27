<html>
<head>
	<title>Contact us at - contact@codesena.com | Codesena </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="In case of any queries, feel free to reach out to us at contact@codesena.com or fill the contact form given below. Stay in touch. Wishing you Happy learning!!">
        <meta name="keywords" content="Java, Algorithms, contact us , contact@codesena.com, email, Programs, queries, Happy learning, Codesena">
 
		  <!-- css file for bootstrap functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		  <!-- css file for bootstrap functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/prism.css">
		  <!-- css file for font-awesome icons functionality : minified -->
		  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		  <!-- css file for custom functionalities -->
		  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
		  <!-- css file for jquery ui functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">		     
</head>
<body>
    <!-- scripts to add facebook like and twitter follow button - begin -->
	<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "js/sdk.js";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<script>
			window.twttr = (function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0],
				t = window.twttr || {};
			  if (d.getElementById(id)) return t;
			  js = d.createElement(s);
			  js.id = id;
			  js.src = "js/widgets.js";
			  fjs.parentNode.insertBefore(js, fjs);

			  t._e = [];
			  t.ready = function(f) {
				t._e.push(f);
			  };
			  return t;
			}(document, "script", "twitter-wjs"));
		</script>
		<!-- scripts to add facebook like and twitter follow button - end -->
		
		<!-- header section - begin -->
		<header>
			<?php include 'header-page.html';?>
		</header>
		<!-- header section - end -->
		
		<!-- area between header and footer - begin -->
		<div class="container-fluid">
			<div class="row-fluid">
			    <!-- left panel area - begin -->
				<?php include 'left-panel.html';?>
				<!-- left panel area - end -->
				
				<!-- middle panel area - begin -->
				<div class="col-md-7 col-lg-7" id="wrap">
				<!-- design contact us page within contact-pane div -->
				<div id="contact-pane"> 
				 <!-- <div class="loader"></div> -->	
				<h1 class="text-center">Contact Us </h1>
                <hr>				
				</div>
				
				
				<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					
					  <!-- Modal content-->
					  <div class="modal-content" style="border-radius:0px;">
						<div class="modal-header bg-success">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title" id="title">Success!</h4>
						</div>
						<div class="modal-body">
						  <p>Data submitted successfully.</p>
						</div>
					  </div>
					  
					</div>
				  </div>
				
				
				<div class="row-fluid" id="notification"></div>
				
				<h4 id="title" class="text-center">Thank you for visiting <a href="index.php" style="color : black;">Codesena</a>.</h4>
				<h4 id="title" class="text-center">In case of any queries, feel free to reach out to us at <b>contact@codesena.com</b> or fill the contact form given below. 
				We will try to respond to your queries as soon as possible. Stay in touch. Happy learning 😊 </h4>
				
				<div id="contact-us-form">
				
				<form method="post">
				
				<div class="input-group">
					<span class="input-group-addon contact-fields"><i class="fa fa-user fa-fw"></i></span>
					<input class="form-control contact-fields" type="text" id="contact-name" name="contact_name" placeholder="Enter your name*">
				</div>
				
				<div class="input-group">
					<span class="input-group-addon contact-fields"><i class="fa fa-envelope fa-fw"></i></span>
					<input class="form-control contact-fields" type="text" id="contact-email" name="contact_email" placeholder="Enter your email address*">
				</div>			
				
				<div class="input-group">
					<span class="input-group-addon contact-fields"><i class="fa fa-comment fa-fw"></i></span>
					<textarea style="min-height : 60px;" class="form-control contact-fields" id="contact-query" name="contact_query" type="text" placeholder="Write your query*"></textarea>
				</div> 

				<div class="captcha-contact" id="captcha" >
				</div> 
				
				<div class="input-group">
				    <span class="input-group-addon contact-fields"><i class="fa  fa-unlock fa-fw"></i></span>
				    <input  maxlength="4" size="4" name="captcha" id="contact-captcha" class="form-control contact-fields" type="text" placeholder="Enter captcha code">
				</div>
				
				<div id="contact-alert" style="margin-top : 15px;"></div>
				<div class="input-group">
				<button id="submit-contact" type="submit" name="submit_contact" class="btn btn-primary pull-left">Submit <span><i class="fa fa-send fa-fw"></i></span></button>
				</div>
				</form>
   				<?php
				    
					if(isset($_POST["submit_contact"]))
					{
					include 'conn.php';
					
					$name = $_POST["contact_name"];
					$email = $_POST["contact_email"];
					$comment = $_POST["contact_query"];
										
					//change page_id for other pages
					mysqli_query($conn,"INSERT INTO contact_us_tab(user_name, email_id, comment, timings) VALUES('$name', '$email', '$comment', NOW())"); 
										
					$conn->close();
					
					echo "<script>
						 $(window).load(function(){
							 $('#myModal').modal('show');
						 });
					</script>";
					}					
				?>				
				</div>
				</div>
				<!-- middle panel area - end -->
				
				<!-- right panel area - begin -->
				<?php include 'right-panel.html';?>
				<!-- right panel area - end -->
			</div>
		</div>
		<!-- area between header and footer - end -->
		
		<!-- Scroll to top - begin -->
		<a href="#" class="scrollToTop"></a>
		<!-- Scroll to top - end -->
		
		<!-- Footer section - begin -->
		<div>
			<?php include 'footer-page.html';?>
		</div>
		<!-- Footer section - end -->
		  <!-- js file to use jquery functionalities : minified -->
		  <script src="js/jquery-1.12.4.min.js"></script>
		  <!-- js file to use jquery ui functionalities : minified -->
		  <script src="js/jquery-ui.min.js"></script>
		  <!-- js file for bootstrap functionalities : minified -->
		  <script src="js/bootstrap.min.js"></script>
		  <!-- js file for code block functionalities : minified -->
		  <script src="js/prism.min.js"></script>
		  <!-- js file for custom functionalities -->
		  <script src="js/custom.js"></script>
		  <!-- Place this tag to add googleplus follow button : minified -->
		  <script src="js/platform.js" async defer></script>
		  <!-- json file to populate left panel -->
		  <script src="js/props.json"></script>	
</body>
</html>
