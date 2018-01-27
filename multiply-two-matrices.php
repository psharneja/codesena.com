<html>
<head>
	<title>Multiply two matrices in Java | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="Matrix multiplication: Two matrices can be multiplied only if the number of columns in the first matrix is equal to the number of rows in the second matrix.">
        <meta name="keywords" content="Java, Algorithms, Matrix multiplication, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='add-two-matrices.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='transpose-a-matrix.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to multiply two matrices.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p>Two matrices can be multiplied only if the number of columns in the first matrix is equal to the number of rows in the second matrix.</p>
				<p>
				Consider two matrices, [A] of order x * y, i.e 'x' rows and 'y' columns and [B] of order m * n, i.e 'm' rows and 'n' columns such that y = m.
				</p>
				<div class="container-fluid">
				<div class="col-sm-2">
				<p style="margin-top : 40%;">[A]<sub>xy</sub> =</p>
				</div>
				<div class="col-sm-4">
				<table class="matrix">
						<tr>
							<td>A<sub>11</sub></td>
							<td>A<sub>12</sub></td>
							<td>. .</td>
							<td>A<sub>1y</sub></td>
						</tr>
						<tr>
							<td>A<sub>21</sub></td>
							<td>A<sub>22</sub></td>
							<td>. .</td>
							<td>A<sub>2y</sub></td>
						</tr>
						<tr>
							<td>:</td>
							<td>:</td>
							<td>:</td>
							<td>:</td>
						</tr>
						<tr>
							<td>A<sub>x1</sub></td>
							<td>A<sub>x2</sub></td>
							<td>. .</td>
							<td>A<sub>xy</sub></td>
						</tr>
				</table>
				</div>				
				<div class="col-sm-2">
				<p style="margin-top : 40%;">[B]<sub>mn</sub> =</p>
				</div>				
				<div class="col-sm-4">
				<table class="matrix">
						<tr>
							<td>B<sub>11</sub></td>
							<td>B<sub>12</sub></td>
							<td>. .</td>
							<td>B<sub>1n</sub></td>
						</tr>
						<tr>
							<td>B<sub>21</sub></td>
							<td>B<sub>22</sub></td>
							<td>. .</td>
							<td>B<sub>2n</sub></td>
						</tr>
						<tr>
							<td>:</td>
							<td>:</td>
							<td>:</td>
							<td>:</td>
						</tr>
						<tr>
							<td>B<sub>m1</sub></td>
							<td>B<sub>m2</sub></td>
							<td>. .</td>
							<td>B<sub>mn</sub></td>
						</tr>
				</table>	
					</div>
				</div>
				<p id="sigma">Then the product of [A] and [B] is,</p>
				
				<p> [AB]<sub>ij</sub> = <span class="summation">&Sigma;</span>A<sub>ik</sub>B<sub>kj</sub> , where k = 1, 2, 3 . . . . n.</p>
				<br>
				
<p>Now, see the below implementation of how to multiply two matrices. </p>				
<pre class="language-java line-numbers" style="margin-top : 15px;">
<code>package com.algorithms.intermediate;

import java.util.Scanner;

/**
 * The MultiplicationOfMatrices program will perform the multiplication of two
 * matrices.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-05-26
 */
public class MultiplicationOfMatrices {

	public static void main(String args[]) {
		int x, y, m, n, i, j, k;
		int sum = 0;

		Scanner sc = new Scanner(System.in);

		System.out.println("Enter the number of rows of matrix_1 :");
		x = sc.nextInt();

		System.out.println("Enter the number of columns of matrix_1 :");
		y = sc.nextInt();

		int matrix_1[][] = new int[x][y];

		System.out.println("Enter the elements of matrix_1 :");

		for (i = 0; i < x; i++) {
			for (j = 0; j < y; j++) {
				matrix_1[i][j] = sc.nextInt();
			}
		}

		System.out.println("Enter the number of rows of matrix_2 :");
		m = sc.nextInt();

		System.out.println("Enter the number of columns of matrix_2 :");
		n = sc.nextInt();

		if (y != m) {
			System.out.println("These matrices can't be multiplied.");
		} else {
			int matrix_2[][] = new int[m][n];
			int multiply[][] = new int[x][n];

			System.out.println("Enter the elements of matrix_2");

			for (i = 0; i < m; i++) {
				for (j = 0; j < n; j++) {
					matrix_2[i][j] = sc.nextInt();
				}
			}

			for (i = 0; i < x; i++) {
				for (j = 0; j < n; j++) {
					for (k = 0; k < m; k++) {
						sum = sum + matrix_1[i][k] * matrix_2[k][j];
					}
					multiply[i][j] = sum;
					sum = 0;
				}
			}

			System.out.println("Product of matrix_1 and matrix_2 :");
			for (i = 0; i < x; i++) {
				for (j = 0; j < n; j++) {
					System.out.print(multiply[i][j] + "\t");
				}
				System.out.println();
			}
		}
		sc.close();
	}
}
</code>
</pre>
				<p>Standard output 1 :</p>
<pre class="language-java">
<code>
Enter the number of rows of matrix_1 :
2
Enter the number of columns of matrix_1 :
3
Enter the elements of matrix_1 :
1 2 3
3 2 1
Enter the number of rows of matrix_2 :
3
Enter the number of columns of matrix_2 :
2
Enter the elements of matrix_2
1 2
3 4
5 6
Product of matrix_1 and matrix_2 :
22	28	
14	20	
</code>
</pre>

				<p>Standard output 2 :</p>
<pre class="language-java">
<code>
Enter the number of rows of matrix_1 :
3
Enter the number of columns of matrix_1 :
2
Enter the elements of matrix_1 :
1 2 
3 4
2 4
Enter the number of rows of matrix_2 :
3
Enter the number of columns of matrix_2 :
3
These matrices can't be multiplied.
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('multiply-matrices', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('multiply-matrices', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'multiply-matrices' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='add-two-matrices.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='transpose-a-matrix.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
