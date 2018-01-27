<html>
<head>
	<title>Find LCM and GCD - Algorithms in Java | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="How to find LCM and GCD? What is the meaning of these two terms? Let's understand these terms with some examples and write a Java program for the same.">
        <meta name="keywords" content="Java, Algorithms, lcm, gcd, lowest common factor, highest common factor, common factor, Program, Beginner level, Codesena">
 
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
                <div id="coding-pane">
				 <!-- <div class="loader"></div> -->	
				<div id="navigation" class = "row-fluid" style="margin-top:5px;">
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='diamond-patterns.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='check-anagrams.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to calculate LCM and GCD of two numbers.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p>How to find LCM and GCD? What is the meaning of these two terms? Let's understand these terms with some mathematical examples.</p>
				<p>
				<b>LCM :</b> LCM stands for <b>Least Common Multiple</b>. LCM of two integers, say x and y is defined as the smallest positive integer that is divisible by both x and y.<br>
				Consider these two integers 4 and 10.
				The multiples of 4 are : <mark>4, 8, 12, 16, 20, 24, 28 and so on</mark>. 
				Similarly, the multiples of 10 are <mark>10, 20, 30, 40, 50, 60, 70 and so on</mark>.
                As we can see, the least common multiple of 4 and 10 is 20. This is the way to find LCM of two numbers.</p>
				<p>  
				<b>GCD :</b> GCD stands for <b>Greatest Common Divisor</b>. The GCD of two or more non-zero integers is defined as the largest positive integer that divides each of the integers.<br>
				Consider these two integers 24 and 36.
				The divisors of 24 are : <mark>1, 2, 3, 4, 6, 8, 12 and 24</mark>. 
				Similarly, the divisors of 36 are <mark>1, 2, 3, 4, 6, 9, 12, 18 and 36</mark>.
                As we can see, the greatest common divisor of 24 and 36 is 12. This is how we determine GCD.<br>
				See below the programmatical way of calculating LCM and GCD of two numbers.                				
				</p>
			
<pre class="language-java line-numbers" >
<code>package com.algorithms.intermediate;

import java.util.Scanner;

/**
 * The LCMandGCD program will calculate the LCM and GCD of two numbers and print
 * the result in console.
 *
 * @author Pawan Kumar
 * @version 1.0
 * @since 2017-05-22
 */
public class LCMandGCD {

	// method to calculate GCD of two numbers
	public int calculateGCD(int num1, int num2) {

		int temp = 0, big, small;

		if (num1 > num2) {
			big = num1;
			small = num2;
		} else {
			big = num2;
			small = num1;
		}

		while (big % small != 0) {
			temp = big % small;
			big = small;
			small = temp;
		}
		return temp;
	}

	// method to calculate LCM of two numbers
	public int calculateLCM(int num1, int num2) {

		int big;
		if (num1 > num2) {
			big = num1;
		} else {
			big = num2;
		}

		while (true) {
			if (big % num1 == 0 && big % num2 == 0) {
				return big;
			}
			++big;
		}
	}

	public static void main(String[] args) {
		LCMandGCD object = new LCMandGCD();

		Scanner scanner = new Scanner(System.in);

		System.out.println("Enter the first number: ");
		int a = scanner.nextInt();

		System.out.println("Enter the second number: ");
		int b = scanner.nextInt();

		scanner.close();

		System.out.println("GCD of " + a + " and " + b + " is "
				+ object.calculateGCD(a, b));
		System.out.println("LCM of " + a + " and " + b + " is "
				+ object.calculateLCM(a, b));
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter the first number: 
336
Enter the second number: 
224
GCD of 336 and 224 is 112
LCM of 336 and 224 is 672

</code>
</pre>
<p>Comment your queries or give feedback :</p>
	<div id="comment-pane" class="row-fluid">
		<!-- write a comment section - start -->
		<div class="row-fluid " id="default-comment" style="margin:5px 5px 5px 15px;">		
			<form method="post">
			
			    <div class="input-group">
					<span class="input-group-addon contact-fields"><i class="fa fa-user fa-fw"></i></span>
					<input type="text" class="form-control" id="comment-user" placeholder="Enter your name*" name="comment_user">
				</div>
				
				<div class="input-group">
					<span class="input-group-addon contact-fields"><i class="fa fa-envelope fa-fw"></i></span>
					<input type="email" class="form-control" id="comment-email" placeholder="Enter your email address*" name="comment_email">
				</div>			
				
				<div class="input-group" style="margin-bottom :10px;">
					<span class="input-group-addon contact-fields"><i class="fa fa-comment fa-fw"></i></span>
					<textarea  class="form-control" id="user-comment"  name="comment" placeholder="Write your comments/queries here*"></textarea>
				</div> 
				
				<div class="captcha well" id="captcha" >
				</div> 
				
				<div class="input-group">
				    <span class="input-group-addon contact-fields"><i class="fa  fa-unlock fa-fw"></i></span>
				    <input  maxlength="4" size="4" id="comment-captcha" name="captcha" class="form-control contact-fields" type="text" placeholder="Enter captcha code">
				</div>

				<div id="comment-alert" style="margin-top : 15px;"></div>
				<div>
				<button id="submit-comment" type="submit" name="submit_comment" class="btn btn-primary pull-left">Comment <span><i class="fa fa-comments fa-fw"></i></span></button>
				</div>
			</form>	
   				<?php
					if(isset($_POST["submit_comment"]))
					{
					include 'conn.php';
					
					$name = $_POST["comment_user"];
					$email = $_POST["comment_email"];
					$comment = $_POST["comment"];
										
					//change page_id for other pages
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('lcm-gcd', '$name', '$email', '$comment', NOW(),0)"); 
										
					$conn->close();
					}					
				?>
				<?php
				 
				 if(isset($_POST["submit_reply"]))
					{
					include 'conn.php';
					
					$replier_name = $_POST["reply_user"];
					$replier_email = $_POST["reply_email"];
					$replier_comment = $_POST["user_reply"];
					$parent_id = $_POST["parent_id"];
					
					//change page_id for other pages
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('lcm-gcd', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
					$conn->close();
					}
				?>
			
		</div>
		<!-- write a comment section - end -->
		<br>
		<br>
		<!-- display comment section with replies - start -->		
		<div class="row-fluid" id="comment-reply">
		
		<?php
			include 'conn.php';

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'lcm-gcd' ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {					
					echo '<p style="margin:10px 5px 5px 5px"><b>' .$row["user_name"]. ' says </b> - ' .$row["timings"]. '</p>';
					echo '<p style="margin:5px;">' . $row["comment"]. '</p>';
					echo '<p style="margin:5px;"><a style="color:black" onclick="generateReplyBox('.$row["comment_id"].');"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></p><hr>';
					
					// reply form - start 
					echo '<div class="row-fluid" style="margin:5px;" id="'.$row["comment_id"].'"></div>';						
					// reply form - end 
										
					// replies - start
					$sql_reply = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = ". $row['comment_id'];
					$result_reply = $conn->query($sql_reply);
					while($row_reply = $result_reply->fetch_assoc()) {
					echo '<div style=" margin:10px; border: #cccccc solid 1px; background-color : #fcf9f9;"><p style="margin:5px 5px 0px 5px; padding :5px;"><b>' . $row_reply["user_name"]. ' replied </b> - '. $row_reply["timings"]. '</p>';
		            echo '<p style="margin:0px 5px 5px 5px;padding :0px 5px 5px 5px;">' . $row_reply["comment"]. '</p></div><hr>';
					// replies - end
					}
				}
			} 
			else {
				echo '<p style="margin:10px 5px 5px 5px">No user comments available.</p>';
			}
			$conn->close();
		?>
		
		</div>
		<!-- display comment section with replies - end -->
	</div>
				</div>
				</div>
				<div id="navigation" class = "row-fluid">
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='diamond-patterns.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='check-anagrams.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
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
