<html>
<head>
	<title>Diamond Patterns - Algorithms in Java | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="In this demo of Codesena, we are going to show you how to print various Diamond patterns using numbers and asterisks or star symbol in Java.">
        <meta name="keywords" content="Java, Algorithms, Diamond Patterns, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='remove-duplicate.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='find-lcm-and-gcd.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Programs to print various Diamond patterns using numbers and asterisk.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p>
				In this demo, we are going to show you how to print various <b>Diamond patterns</b> using numbers and asterisks in Java.				
				If you are interested in learning how to print Triangles or Pyramids Patterns using asterisks and numbers, please go through these two links
				- <a href="star-patterns.php">Star Patterns</a> and <a href="number-patterns.php">Number Patterns.</a></p> 
				<hr>

<p><h4 id="title">Pattern no. 1. Diamond Pattern made of Stars.</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;* <br>
				 *&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;* <br>
				 &nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;* <br>
				 &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;* <br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
				</p>	
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers" >
<code>package com.algorithms.intermediate;

import java.util.Scanner;

/**
 * The FilledDiamond program will print the Diamond Pattern of asterisks in
 * console.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-05-18
 */
public class FilledDiamond {

	public static void main(String[] args) {
		
		Scanner scannerObj = new Scanner(System.in);

		System.out.print("Enter total number of rows : ");

		int totalRows = scannerObj.nextInt();
		scannerObj.close(); // close resource once it is used

		int row = 1;
		int middleRow = (totalRows) / 2; // middle row of diamond		

		System.out.println("--- Filled Diamond Pattern ---");

		// logic for upper triangle - start
		for (int i = middleRow; i > 0; i--) {
			
			for (int j = 1; j <= i; j++) {
				System.out.print(" ");
			}

			for (int j = 1; j <= row; j++) {
				System.out.print("* ");
			}

			System.out.println();
			row++;
		}
		// logic for upper triangle - end

		// logic for lower triangle - start
		for (int i = 0; i <= middleRow; i++) {
			
			for (int j = 1; j <= i; j++) {
				System.out.print(" ");
			}

			for (int j = row; j > 0; j--) {
				System.out.print("* ");
			}

			System.out.println();
			row--;
		}
		// logic for lower triangle - end
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter total number of rows : 8
--- Filled Diamond Pattern ---
    * 
   * * 
  * * * 
 * * * * 
* * * * * 
 * * * * 
  * * * 
   * * 
    * 

</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 2. Diamond Pattern made of Integers.</h4></p>
				<hr>
				<p style="font-size : 20px; color : green; margin-left : 20px;">
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;2<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;3&nbsp;&nbsp;3<br>
				 &nbsp;&nbsp;4&nbsp;&nbsp;4&nbsp;&nbsp;4&nbsp;&nbsp;4<br>
				 5&nbsp;&nbsp;5&nbsp;&nbsp;5&nbsp;&nbsp;5&nbsp;&nbsp;5<br>
				 &nbsp;&nbsp;4&nbsp;&nbsp;4&nbsp;&nbsp;4&nbsp;&nbsp;4<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;3&nbsp;&nbsp;3<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;2<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
				</p>	
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers">
<code>package com.algorithms.intermediate;

import java.util.Scanner;

/**
 * The NumberDiamond program will print the Diamond Pattern of Numbers in
 * console.
 *
 * @author Pawan 
 * @version 1.1
 * @since 2017-05-19
 */
public class NumberDiamond {
	
	public static void main(String[] args) {
		
		Scanner scannerObj = new Scanner(System.in);

		System.out.print("Enter total number of rows : ");

		int totalRows = scannerObj.nextInt();
		scannerObj.close(); // close resource once it is used

		int row = 1;
		int middleRow = (totalRows) / 2; // middle row of diamond		

		System.out.println("---  Diamond Pattern with Numbers---");

		// logic for upper triangle - start
		for (int i = middleRow; i > 0; i--) {
			
			for (int j = 1; j <= i; j++) {
				System.out.print(" ");
			}

			for (int j = 1; j <= row; j++) {
				System.out.print(row+" ");
			}

			System.out.println();
			row++;
		}
		// logic for upper triangle - end

		// logic for lower triangle - start
		for (int i = 0; i <= middleRow; i++) {
			
			for (int j = 1; j <= i; j++) {
				System.out.print(" ");
			}

			for (int j = row; j > 0; j--) {
				System.out.print(row+" ");
			}

			System.out.println();
			row--;
		}
		// logic for lower triangle - end
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter total number of rows : 8
---  Diamond Pattern with Numbers---
    1 
   2 2 
  3 3 3 
 4 4 4 4 
5 5 5 5 5 
 4 4 4 4 
  3 3 3 
   2 2 
    1 
</code>
</pre>
<hr>
<p><h4 id="title">Pattern no. 3. The Hollow Diamond Pattern.</h4></p>
				<hr>
				<p style="font-size : 24px; color : green; margin-left : 20px;">
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 *&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*<br>
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
				</p>		
                <p>See the code below to print the given pattern.</p>
<pre class="language-java line-numbers">
<code>package com.algorithms.intermediate;

import java.util.Scanner;

/**
 * The HollowDiamond program will print the Hollow Diamond Pattern in console.
 *
 * @author Pawan
 * @version 1.2
 * @since 2017-05-20
 */
public class HollowDiamond {

	public static void main(String[] args) {

		int col, row, totalRows;

		Scanner scannerObj = new Scanner(System.in);

		System.out.print("Enter total number of rows : ");
		
		totalRows = scannerObj.nextInt();		
		scannerObj.close(); // close resource once it is used

		System.out.println("--- Hollow Diamond Pattern ---");
		
		int middleRow = (totalRows) / 2; // middle row of diamond

		// logic for upper triangle - start
		for (row = 1; row <= middleRow + 1; row++) {

			for (col = 1; col <= totalRows - row; col++) {
				System.out.print(" ");
			}
			for (col = 1; col <= (2 * row) - 1; col++) {
				if ((col == 1) || (col == (2 * row) - 1)) {
					System.out.print("*");
				} else {
					System.out.print(" ");
				}
			}
			for (col = 1; col <= totalRows - row; col++) {
				System.out.print(" ");
			}
			System.out.println();
		}
		// logic for upper triangle - end

		// logic for lower triangle - start
		for (row = middleRow; row >= 1; row--) {
			for (col = 1; col <= totalRows - row; col++) {
				System.out.print(" ");
			}
			for (col = 1; col <= (2 * row) - 1; col++) {
				if ((col == 1) || (col == (2 * row) - 1)) {
					System.out.print("*");
				} else {
					System.out.print(" ");
				}
			}

			for (col = 1; col <= totalRows - row; col++) {
				System.out.print(" ");
			}
			System.out.println();
		}
		// logic for lower triangle - end
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Enter total number of rows : 8
--- Hollow Diamond Pattern ---
       *       
      * *      
     *   *     
    *     *    
   *       *   
    *     *    
     *   *     
      * *      
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('diamond-pattern', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('diamond-pattern', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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
			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'diamond-pattern' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='remove-duplicate.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='find-lcm-and-gcd.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
