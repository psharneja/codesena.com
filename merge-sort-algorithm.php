<html>
<head>
	<title>Merge Sort Algorithm | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="Merge sort algorithm uses the concept of Divide and Conquer. Firstly, it divides the unsorted array into equal halves and then combines them in a sorted manner.">
        <meta name="keywords" content="Java, Algorithms, Merge Sort Algorithm, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='quick-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='check-odd-or-even.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to sort an array using Merge Sort Algorithm.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p><b>Merge Sort Algorithm :</b> Merge sort algorithm uses the concept of <b>Divide and Conquer</b> which is also used in <a href='quick-sort-algorithm.php'>Quick Sort algorithm</a>.
				Merge sort algorithm first divides the unsorted array into equal halves and then combines them in a sorted manner.								
				Its worst-case complexity is <b>O(n log n)</b>, where 'n' is the number of elements in the given array. . 
				</p>
				<p>Let's try to understand the concept with the help of an example. We will keep on dividing the array until it cannot be divided further.</p>				
				<div class="container-fluid">
				
				<div class="row-fluid">
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>15</td>
							<td>34</td>
							<td>28</td>
							<td>11</td>
							<td>36</td>
							<td>20</td>
							<td>43</td>
							<td>45</td>
						</tr>
				</tbody>
				</table >
				</div>
				</div>
				
				<p>The size of the given unsorted array is 8. Firstly, we will divide the array into two halves each of size equals to 4.</p>
				<div class="row-fluid">
				<div class="col-sm-6">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">15</td>
							<td class="bg-success">34</td>
							<td class="bg-success">28</td>
							<td class="bg-success">11</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-6">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">36</td>
							<td class="bg-danger">20</td>
							<td class="bg-danger">43</td>
							<td class="bg-danger">45</td>
						</tr>
				</tbody>
				</table >
				</div>
				</div>
				
				<p>Now, we divide the above two arrays into halves.</p>
				<div class="row-fluid">
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">15</td>
							<td class="bg-success">34</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>28</td>
							<td>11</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">36</td>
							<td class="bg-danger">20</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-warning">43</td>
							<td class="bg-warning">45</td>
						</tr>
				</tbody>
				</table >
				</div>
				</div>
				
				<p>Again divide the above arrays into halves. Now, we are left with atom values. Hence, these cannot be further divided.</p>
				<div class="row-fluid flex" >
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">15</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">34</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>28</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>11</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">36</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">20</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-warning">43</td>
						</tr>
				</tbody>
				</table>
				</div>
				<div class="col-sm-1">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-warning">45</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-4">
				</div>
				</div>	
				<br><br>
				<div>
				<br>
 				<p class="pull-left">Now, we will start merging elements in the same manner we have divided them. We will compare the atomic elements having same background color and merge them in a sorted manner.</p>
				</div>
				<div class="row-fluid">
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">15</td>
							<td class="bg-success">34</td>
						</tr>
				</tbody>
				</table >
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>11</td>
							<td>28</td>
						</tr>
				</tbody>
				</table>
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">20</td>
							<td class="bg-danger">36</td>
						</tr>
				</tbody>
				</table>
				</div>
				<div class="col-sm-3">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-warning">43</td>
							<td class="bg-warning">45</td>
						</tr>
				</tbody>
				</table>
				</div>
				</div>
				
				<p>In the next iteration, merge the above sub-arrays in the same manner we have divided them, but in sorted manner.<p>
				<div class="row-fluid">
				<div class="col-sm-6">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-success">11</td>
							<td class="bg-success">15</td>
							<td class="bg-success">28</td>
							<td class="bg-success">34</td>
						</tr>
				</tbody>
				</table>
				</div>
				<div class="col-sm-6">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">20</td>
							<td class="bg-danger">36</td>
							<td class="bg-danger">43</td>
							<td class="bg-danger">45</td>
						</tr>
				</tbody>
				</table>
				</div>
				</div>
				<p>After merging the remaining two halves in a sorted manner, we will finally get the sorted array.
				<div class="row-fluid">
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>11</td>      
							<td>15</td>
							<td>20</td>
							<td>28</td>
							<td>34</td>
							<td>36</td>
							<td>43</td>
							<td>45</td>
						</tr>
				</tbody>
				</table>
				</div>
				</div>
				
				</div>
		<p>Now you can go through the below implementation of the Merge Sort algorithm in Java.</p>
<pre class="language-java line-numbers" style="margin-top : 15px;">
<code>package com.algorithms.complex;

/**
 * The MergeSort program to sort an array using Merge Sort algorithm.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-06-02
 */
public class MergeSort {

	void mergeSortedHalves(int arr[], int left, int middle, int right) {

		int size1 = middle - left + 1; // size of first half
		int size2 = right - middle; // size of second half

		int tempLeft[] = new int[size1];
		int tempRight[] = new int[size2];

		for (int i = 0; i < size1; ++i) {
			tempLeft[i] = arr[left + i];
		}
		for (int j = 0; j < size2; ++j) {
			tempRight[j] = arr[middle + 1 + j];
		}

      
		int i = 0, j = 0;		
		int k = left;
		
		while (i < size1 && j < size2) {
			if (tempLeft[i] <= tempRight[j]) {
				arr[k] = tempLeft[i];
				i++;
			} else {
				arr[k] = tempRight[j];
				j++;
			}
			k++;
		}

		// copy remaining elements of tempLeft[] 
		while (i < size1) {
			arr[k] = tempLeft[i];
			i++;
			k++;
		}

		// copy remaining elements of tempRight[]
		while (j < size2) {
			arr[k] = tempRight[j];
			j++;
			k++;
		}
	}

	void mergeSort(int arr[], int leftIndex, int rightIndex) {
		if (leftIndex < rightIndex) {
			// calculate the mid point
			int midPoint = (leftIndex + rightIndex) / 2;

			// sort first and second halves of the array
			mergeSort(arr, leftIndex, midPoint);
			mergeSort(arr, midPoint + 1, rightIndex);

			// merge the sorted halves
			mergeSortedHalves(arr, leftIndex, midPoint, rightIndex);
		}
	}

	// function to print an array
	static void printArray(int arr[]) {
		int size = arr.length;
		for (int i = 0; i < size; ++i) {
			System.out.print(arr[i] + " ");
		}
		System.out.println();
	}

	public static void main(String args[]) {

		int input[] = { 17, 16, 18, 7, 8, 9 };

		System.out.println("Unsorted Array :");
		printArray(input);

		int leftIndex = 0;
		int rightIndex = input.length - 1;

		MergeSort merge = new MergeSort();
		merge.mergeSort(input, leftIndex, rightIndex);

		System.out.println("\nSorted Array :");
		printArray(input);
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
Unsorted Array :
17 16 18 7 8 9 

Sorted Array :
7 8 9 16 17 18 
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('merge-sort', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('merge-sort', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'merge-sort' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='quick-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='check-odd-or-even.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
		<!-- Footer section - end -->		  <!-- js file to use jquery functionalities : minified -->
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
