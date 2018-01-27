<html>
<head>
	<title>Binary Search Algorithm | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Binary Search Algorithm: Binary Search can be performed only on the sorted arrays or collections. This algorithm works on the principle of divide and conquer.">
		<meta name="description" content="">
        <meta name="keywords" content="Java, Algorithms, Binary Search, Complexity, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='transpose-a-matrix.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='linear-search-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to search an element in the array using Binary Search Algorithm.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p><b>Binary Search Algorithm :</b> Binary Search can be performed only on the sorted arrays or collections. This algorithm works on the principle of divide and conquer. Its run-time complexity is <b>O(log n)</b>, where 'n' is the number of elements in the given array. . 
				</p>
				<p>
				In this algorithm, we compare the element to locate with the middle element of the given array or collection.
				If both matches, then the index of that element is returned. 
				</p>
				<p>In case, the middle element is greater than the element we are looking for, 
				then the element is searched in the sub-array to the left of the middle element. 
				And if the middle element is smaller than the element we are looking for, then the element is searched in the sub-array to the right of the middle element. 
				This process continues until the size of the sub-array reduces to zero.</p>
				<p>
				For better understanding of the concept, see the below example. Consider the following array having 10 elements. Suppose we want to locate the index of element 29.</p>
				<p>First, find out the middle element of the given array. We know that the index of the middle element can be found using below formula :</p><p> <mark>int MIDDLE_ELEMENT_INDEX = (FIRST_ELEMENT_INDEX + LAST_ELEMENT_INDEX) / 2</mark>.
				</p>				
				<div class="container-fluid">
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">7</td>
							<td class="bg-success">11</td>
							<td class="bg-success">13</td>
							<td class="bg-success">19</td>
							<td class="bg-success">24</td>
							<td class="bg-success">29</td>
							<td class="bg-success">33</td>
							<td class="bg-success">41</td>
							<td class="bg-success">52</td>
							<td class="bg-success">66</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>In first step, we have 
				MIDDLE_ELEMENT_INDEX = (0 + 9) / 2 = 4. Note that MIDDLE_ELEMENT_INDEX is not 4.5 because we are taking integer value only. 
				Just keep in mind that the index of an array always starts from Zero. So at index no. 4, we have an element having value equals to 24. Mark it as middle element.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">7</td>
							<td class="bg-success">11</td>
							<td class="bg-success">13</td>
							<td class="bg-success">19</td>
							<td class="bg-primary">24</td>
							<td class="bg-success">29</td>
							<td class="bg-success">33</td>
							<td class="bg-success">41</td>
							<td class="bg-success">52</td>
							<td class="bg-success">66</td>
						</tr>
				</tbody>
				</table>
				</div>
				<p>Now, compare the element to locate, i.e. 29 with the middle element which is 24. Clearly, 24 is smaller than 29. So, now the element will be searched in the sub-array to the right of 24.
				In the next step, update the middle index.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">7</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">13</td>
							<td class="bg-danger">19</td>
							<td class="bg-danger">24</td>
							<td class="bg-success">29</td>
							<td class="bg-success">33</td>
							<td class="bg-success">41</td>
							<td class="bg-success">52</td>
							<td class="bg-success">66</td>
						</tr>
				</tbody>
				</table>
				</div>
				<p>Now, as we can that the FIRST_ELEMENT_INDEX is 5 and LAST_ELEMENT_INDEX is 9. Therefore, MIDDLE_ELEMENT_INDEX = (5 + 9) / 2 = 7. Hence 41 is the middle element.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">7</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">13</td>
							<td class="bg-danger">19</td>
							<td class="bg-danger">24</td>
							<td class="bg-success">29</td>
							<td class="bg-success">33</td>
							<td class="bg-primary">41</td>
							<td class="bg-success">52</td>
							<td class="bg-success">66</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>Now again compare 29 with 41. Clearly, 41 is greater than 29. So, now the element will be searched in the sub-array to the left of 41.
				Update the middle index one more time.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">7</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">13</td>
							<td class="bg-danger">19</td>
							<td class="bg-danger">24</td>
							<td class="bg-success">29</td>
							<td class="bg-success">33</td>
							<td class="bg-danger">41</td>
							<td class="bg-danger">52</td>
							<td class="bg-danger">66</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>Like we have done in previous steps, now the MIDDLE_ELEMENT_INDEX = (5 + 6) / 2 = 5, i.e. 29 is the middle element.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">7</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">13</td>
							<td class="bg-danger">19</td>
							<td class="bg-danger">24</td>
							<td class="bg-primary">29</td>
							<td class="bg-success">33</td>
							<td class="bg-danger">41</td>
							<td class="bg-danger">52</td>
							<td class="bg-danger">66</td>
						</tr>
				</tbody>
				</table >
				</div>
                <p>After comparing 29 with the current middle element, we can see both are same. So, the index of middle element will be returned, which is the index of the element we were searching for.</p>
                <div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">7</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">13</td>
							<td class="bg-danger">19</td>
							<td class="bg-danger">24</td>
							<td class="bg-success">29</td>
							<td class="bg-danger">33</td>
							<td class="bg-danger">41</td>
							<td class="bg-danger">52</td>
							<td class="bg-danger">66</td>
						</tr>
				</tbody>
				</table >
				</div>					
				</div>
		<p>I hope, after reading the explanation, it will be easier for you to understand the below program.</p>
<pre class="language-java line-numbers" style="margin-top : 15px;">
<code>package com.algorithms.intermediate;

import java.util.Arrays;
import java.util.Scanner;

/**
 * The BinarySearch program implements Binary Search algorithm.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-05-27
 */
public class BinarySearch {

	private void binarySearch(int[] array, int element) {

		Arrays.sort(array); // make sure input array is sorted.

		int len = array.length;
		int first = 0;
		int last = len - 1;
		int mid = (first / last) / 2;

		while (first <= last) {
			if (array[mid] == element) {
				System.out.println(element + " found at index : " + mid + ".");
				break;
			} else if (array[mid] < element) {
				first = mid + 1;
			} else {
				last = mid - 1;
			}
			mid = (first + last) / 2; // update the middle element.
		}
		if (first > last) {
			System.out.println(element + " is not present in the given array.");
		}
	}

	public static void main(String[] args) {
		BinarySearch ref = new BinarySearch();
        
		int array[] = { 7, 11, 13, 19, 24, 29, 33, 41, 55, 66 };

		Scanner scan = new Scanner(System.in);

		System.out.println("Enter the element to search :");
		int element = scan.nextInt(); // element to search

		ref.binarySearch(array, element);
		scan.close();
	}
}
</code>
</pre>
				<p>Standard output 1 :</p>
<pre class="language-java">
<code>
Enter the element to search :
29
29 found at index : 5.
</code>
</pre>

<p>Standard output 2 :</p>
<pre class="language-java">
<code>
Enter the element to search :
88
88 is not present in the given array.
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('binary-search', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('binary-search', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'binary-search' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='transpose-a-matrix.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='linear-search-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
