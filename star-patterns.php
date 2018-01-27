<html>
<head>
	<title>Star Patterns - Fun with Java | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="Here, we are going to show you how to print various  asterisk patterns like right angled triangles, isosceles triangles or pyramids and their mirror patterns.">
        <meta name="keywords" content="Java, Algorithms, Odd Numbers, Even Numbers, Odd or Even, Even or Odd, Program, Beginner level, Codesena">
 
		  <!-- css file for bootstrap functionalities : minified -->
		  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		  <!-- css file for code block functionalities : minified -->
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='floyds-triangle.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='number-patterns.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Programs to print various asterisk or star patterns.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p>
				In this demo, we are going to show you how to print various <b>triangular shaped asterisk or star patterns</b> in Java. 
				As mentioned before, in this demo, we are going to cover only triangular shapes, i.e. right angled triangles, isosceles triangles or pyramids and their mirror patterns. 
				If you are interested in learning how to print Diamond Patterns, please go through this link - <a href="diamond-patterns.php">Diamond Patterns.</a></p>
				<hr>
				<p><h4 id="title">Pattern no. 1</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				*<br>
				* *<br>
				* * *<br>
				* * * *
				</p>	
                <p>See the code below to print the given pattern.</p>				
<pre class="language-java line-numbers">
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 1
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-05-06
 */
public class StarPatternOne {
	
	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 1 ====");

		for (int i = 1; i <= rowsCount; i++) {
			for (int j = 1; j <= i; j++) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 1 ====
*
**
***
****
*****
</code>
</pre>
<br>
<hr>
<p><h4 id="title">Pattern no. 2</h4></p>
<hr>
<p style="font-size : 24px; color : green; margin-left : 20px;">
				* * * *<br>
				* * *<br>
				* * <br>
				* 
				</p>
                <p>See the code below to print the given pattern.</p>					
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 2
 *
 * @author Pawan
 * @version 1.1
 * @since 2017-05-07
 */
public class StarPatternTwo {
	
	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 2 ====");

		for (int i = rowsCount; i >= 1; i--) {
			for (int j = 1; j <= i; j++) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 2 ====
*****
****
***
**
*
</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 3</h4></p>
<hr>
<p style="font-size : 24px; color : green; margin-left : 20px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* *<br>
				&nbsp;&nbsp;&nbsp;* * *<br>
				* * * *
				</p>
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 3
 *
 * @author Pawan
 * @version 1.2
 * @since 2017-05-08
 */
public class StarPatternThree {

	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 3 ====");

		for (int i = rowsCount; i >= 1; i--) {
			
			for (int j = 1; j < i; j++) {
				System.out.print(" ");
			}
			
			for (int k = rowsCount; k >= i; k--) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 3 ====
    *
   **
  ***
 ****
*****
</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 4</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				* * * *<br>
				&nbsp;&nbsp;&nbsp;* * *<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* *<br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
				</p>	
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 4
 *
 * @author Pawan
 * @version 1.3
 * @since 2017-05-09
 */
public class StarPatternFour {

	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 4 ====");

		for (int i = rowsCount; i >= 1; i--) {
			
			for (int j = rowsCount; j > i; j--) {
				System.out.print(" ");
			}
			
			for (int k = 1; k <= i; k++) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 4 ====
*****
 ****
  ***
   **
    *
</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 5</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* * *<br>
				 &nbsp;&nbsp;&nbsp;* * * * *<br>
				 * * * * * * *<br>
				</p>	
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers">
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 5
 *
 * @author Pawan
 * @version 1.4
 * @since 2017-05-10
 */
public class StarPatternFive {

	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 5 ====");

		for (int i = 1; i <= rowsCount; i++) {
			
			for (int j = rowsCount-1; j >= i; j--) {
				System.out.print(" ");
			}
			
			for (int k = 1; k <= (2*i-1); k++) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 5 ====
    *
   ***
  *****
 *******
*********
</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 6</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				 * * * * * * *<br>
				 &nbsp;&nbsp;&nbsp;* * * * *<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* * *<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
				</p>	
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers">
<code>package com.algorithms.beginner;

import java.util.Scanner;

/**
 * Program to print Star Pattern no. 6
 *
 * @author Pawan
 * @version 1.5
 * @since 2017-05-11
 */
public class StarPatternSix {

	public static void main(String[] args) {

		System.out.println("Enter number of rows :");

		Scanner scanner = new Scanner(System.in);
		int rowsCount = scanner.nextInt();
		scanner.close();

		System.out.println("==== Star Pattern No. 6 ====");

		for (int i = rowsCount; i >= 1; i--) {
			
			for (int j = rowsCount-1; j >= i; j--) {
				System.out.print(" ");
			}
			
			for (int k = 1; k < (2*i); k++) {
				System.out.print("*");
			}
			System.out.println();
		}
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter number of rows :
5
==== Star Pattern No. 6 ====
*********
 *******
  *****
   ***
    *
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('star-pattern', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('star-pattern', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			//change page_id for other pages
			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'star-pattern' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='floyds-triangle.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='number-patterns.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
