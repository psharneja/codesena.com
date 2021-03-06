<html>
<head>
	<title>Insertion Sort Algorithm | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="How does Insertion Sort Algorithm work? How to write a program in Java to sort an array using the Insertion sort algorithm? Here is the answer on Codesena.">
        <meta name="keywords" content="Java, Algorithms, Insertion Sort Algorithm, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='selection-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='quick-sort-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to sort an array using Insertion Sort Algorithm.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p><b>Insertion Sort Algorithm :</b> In Insertion Sort Algorithm, we pick a key element and compare it with elements ahead of it and move it to the right position.
				This sorting starts by picking second element as a key and index of key will keep on increasing in every iteration. If the key element is smaller than the elements ahead of it, then the key will be moved ahead the element which is just larger than it.
				If the key is greater than the elements ahead of it, then no movement will take place.
				Its worst-case complexity is <b>O(n)</b>, where 'n' is the number of elements in the given array.  
				</p>
				<p>Let's try to understand the concept with below example. Below is the unsorted input array. Firstly, 10 will be picked as the key element. 
				There is only one element ahead of 10, which is 5. 5 is smaller than 10. So, 10 will not be moved.</p>				
				<div class="container-fluid">
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>5</td>
							<td class="bg-danger">10</td>
							<td>3</td>
							<td>37</td>
							<td>13</td>
							<td>22</td>
							<td>1</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>In the next iteration, 3 will be the key element. Now we will compare 3 with elements ahead of it which are 5 and 10. We can see 3 is smaller than 5 and 10. 
				So, 3 will be moved ahead of 5.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>5</td>
							<td>10</td>
							<td class="bg-danger">3</td>
							<td>37</td>
							<td>13</td>
							<td>22</td>
							<td>1</td>
						</tr>
				</tbody>
				</table>
				</div>
				<p>In this step, no movement will take place, as 37 is greater than all the elements ahead of it.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>3</td>
							<td>5</td>
							<td>10</td>
							<td class="bg-danger">37</td>
							<td>13</td>
							<td>22</td>
							<td>1</td>
						</tr>
				</tbody>
				</table>
				</div>
				<p>In this step, 13 is the key element. 13 will be moved ahead to 37.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>3</td>
							<td>5</td>
							<td>10</td>
							<td>37</td>
							<td class="bg-danger">13</td>
							<td>22</td>
							<td>1</td>
						</tr>
				</tbody>
				</table>
				</div>
				<p>Similarly, 22 will be moved ahead to 37.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>3</td>
							<td>5</td>
							<td>10</td>
							<td>13</td>
							<td>37</td>
							<td class="bg-danger">22</td>
							<td>1</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>In the final iteration, 1 will be moved ahead of 3. This is how the insertion sort algorithm works.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>3</td>
							<td>5</td>
							<td>10</td>
							<td>13</td>
							<td>22</td>
							<td>37</td>
							<td class="bg-danger">1</td>
						</tr>
				</tbody>
				</table >
				</div>
				<p>The given array is sorted now.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td class="bg-success">1</td>
							<td class="bg-success">3</td>
							<td class="bg-success">5</td>
							<td class="bg-success">10</td>
							<td class="bg-success">13</td>
							<td class="bg-success">22</td>
							<td class="bg-success">37</td>							
						</tr>
				</tbody>
				</table >
				</div>					
				</div>
		<p>Now you can go through the below implementation of the Insertion Sort algorithm in Java.</p>
<pre class="language-java line-numbers" style="margin-top : 15px;">
<code>package com.algorithms.complex;

/**
 * The InsertionSort program to sort an array using Insertion Sort algorithm.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-05-31
 */
public class InsertionSort {

	public static void main(String[] args) {
		InsertionSort obj = new InsertionSort();

		int[] array = { 5, 10, 3, 37, 13, 22, 1 };

		System.out.println("Before Sorting :");
		for (int k = 0; k < array.length; k++) {
			System.out.print(array[k] + " ");
		}
		System.out.println("\nDisplaying each step involved in Insertion Sort:");
		obj.insertionSort(array);
	}

	private void insertionSort(int[] arr) {
		int len = arr.length;
		for (int i = 1; i < len; ++i) {
			int key = arr[i];
			int j = i - 1;

			while (j >= 0 && arr[j] > key) {
				arr[j + 1] = arr[j];
				j = j - 1;
			}
			arr[j + 1] = key;
			for (int k = 0; k < arr.length; k++) {
				System.out.print(arr[k] + " ");
			}
			System.out.print("\n");
		}
		System.out.println("Sorting process completed.");
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Before Sorting :
5 10 3 37 13 22 1 
Displaying each step involved in Insertion Sort:
5 10 3 37 13 22 1 
3 5 10 37 13 22 1 
3 5 10 37 13 22 1 
3 5 10 13 37 22 1 
3 5 10 13 22 37 1 
1 3 5 10 13 22 37 
Sorting process completed.
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('insertion-sort', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('insertion-sort', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'insertion-sort' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='selection-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='quick-sort-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
