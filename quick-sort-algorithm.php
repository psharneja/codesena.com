<html>
<head>
	<title>Quick Sort Algorithm | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="Quick Sort Algorithm: Quick Sort Algorithm, which is also called as partition-exchange sort, works on the principle of Divide and Conquer.">
        <meta name="keywords" content="Java, Algorithms, Odd Numbers, Even Numbers, Odd or Even, Even or Odd, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='insertion-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='merge-sort-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to sort an array using Quick Sort Algorithm.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p><b>Quick Sort Algorithm :</b> Quick Sort Algorithm, which is also called as <b>partition-exchange sort</b>, works on the principle of <b>Divide and Conquer</b>.
				The same concept is used by <a href='quick-sort-algorithm.php'>Merge Sort algorithm</a>. But, the Quick Sort algorithm has an advantage over the Merge sort algorithm,
				as it does not use any additional memory space.
				Its worst-case complexity is <b>O(n<sup>2</sup>)</b>, where 'n' is the number of elements in the given array. 
				</p>
				<p>Firstly, it picks a value, which is called as <b>pivot value</b>. There are a few different ways to choose the pivot value.
				</p>
                <ul>
					<li>Picking first element as a pivot.</li>
					<li>Picking last element as a pivot.</li>
					<li>Picking random element as a pivot.</li>
					<li>Picking the median as a pivot.</li>
				</ul>
				<p>Then, the input array is divided into two sub-arrays, one holding values which are greater than the pivot and the other holding values smaller than the pivot.
				Again, the above steps are repeated to sort the two sub arrays.</p>
				<p>In our demo, we are going to explain the Quick Sort algorithm with an example of picking last element as a pivot. Please read carefully the below steps :</p>
				<ol>
					<li>Select the element with highest index value as the <b>pivot</b>.</li>
					<li>Take two variables say <b>low</b> and <b>high</b>. Here, <b>low</b> points to the low index and <b>high</b> points to the high index (excluding pivot).</li>
					<li>If value at <b>low &lt; pivot</b>, move to right. Update <b>low</b>.</li>
					<li>If value at <b>high &gt; pivot</b>, move to left. Update <b>high</b>.</li>
					<li>If the step no. 3 and 4 doesn't match, then swap <b>low</b> and <b>high</b>.</li>
					<li>If <b>low = high</b>, then swap that element with the pivot.</li>
					<li>Now, we will have two sub-arrays, one having values greater than the pivot and the other having values smaller than the pivot. Quick sort these two sub-arrays.</li>
				</ol>
				<div class="container-fluid">
				<p>Still confused? Do not worry. See the below example for better understanding.</p>
				<p>Initially, we have <b>pivot value = 30</b>, value at <b>low = 34</b> and value at <b>high = 27</b>. 
				Here, <b>34 &gt; 30</b> and <b>27 &lt; 30</b>. So, the value at <b>low</b> and <b>high</b> will swap.
				</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">34</td>
							<td>32</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td>28</td>
							<td>45</td>
							<td class="bg-success">27</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>In this step, we have <b>pivot value = 30</b>, value at <b>low = 27</b> and value at <b>high = 34</b>.
				Clearly, <b>27 &lt; 30</b>. Hence, the <b>low</b> will shift to the right.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td class="bg-danger">27</td>
							<td>32</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td>28</td>
							<td>45</td>
							<td class="bg-success">34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>Now, we have <b>pivot value = 30</b>, value at <b>low = 32</b> and value at <b>high = 34</b>.
				Here, <b>32 &gt; 30</b> and <b>34 &gt; 30</b>. Hence, the <b>low</b> will remain unchanged and <b>high</b> will shift to the left.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td class="bg-danger">32</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td>28</td>
							<td>45</td>
							<td class="bg-success">34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>Here we have <b>pivot value = 30</b>, value at <b>low = 32</b> and value at <b>high = 45</b>.
				Here, <b>32 &gt; 30</b> and <b>45 &gt; 30</b>. Hence, the <b>low</b> will remain unchanged and <b>high</b> will shift to the left.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td class="bg-danger">32</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td>28</td>
							<td class="bg-success">45</td>
							<td>34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>At this stage, <b>pivot value = 30</b>, value at <b>low = 32</b> and value at <b>high = 28</b>.
				We can see, <b>32 &gt; 30</b> and <b>28 &lt; 30</b>. Hence, the values at <b>low</b> and <b>high</b> will swap.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td class="bg-danger">32</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td class="bg-success">28</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>				
				
				<p>Here, <b>pivot value = 30</b>, value at <b>low = 28</b> and value at <b>high = 32</b>.
				We can see, <b>28 &lt; 30</b>. Hence, the <b>low</b> will shift to the right</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td class="bg-danger">28</td>
							<td>42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td class="bg-success">32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table >
				</div>
				
				<p>Here, <b>pivot value = 30</b>, value at <b>low = 42</b> and value at <b>high = 32</b>.
				Here, <b>42 &gt; 30</b> and <b>32 &lt; 30</b>. Hence, the <b>low</b> will remain unchanged and <b>high</b> will shift to the left.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td>28</td>
							<td class="bg-danger">42</td>
							<td>11</td>
							<td>15</td>
							<td>20</td>
							<td class="bg-success">32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table >
				</div>
				
				<p>Here we have <b>pivot value = 30</b>, value at <b>low = 42</b> and value at <b>high = 20</b>.
				We can see that <b>42 &gt; 30</b> and <b>20 &lt; 30</b>. Hence, the values at <b>low</b> and <b>high</b> will swap.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
							<td>27</td>
							<td>28</td>
							<td class="bg-danger">42</td>
							<td>11</td>
							<td>15</td>
							<td class="bg-success">20</td>
							<td>32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>Here, <b>pivot value = 30</b>, value at <b>low = 20</b> and value at <b>high = 42</b>.
				We can see, <b>20 &lt; 30</b>. Therefore, the <b>low</b> will shift to right.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td>27</td>
							<td>28</td>
							<td class="bg-danger">20</td>
							<td>11</td>
							<td>15</td>
							<td class="bg-success">42</td>
							<td>32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>							
						</tr>
				</tbody>
				</table>
				</div>
				
				<p>Here we have <b>pivot value = 30</b>, value at <b>low = 11</b> and value at <b>high = 42</b>.
				We can see, <b>11 &lt; 30</b>. Therefore, the <b>low</b> will shift to right.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td>27</td>
							<td>28</td>
							<td>20</td>
							<td class="bg-danger">11</td>
							<td>15</td>
							<td class="bg-success">42</td>
							<td>32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>							
						</tr>
				</tbody>
				</table >
				</div>
				
				<p>Here we have <b>pivot value = 30</b>, value at <b>low = 15</b> and value at <b>high = 42</b>.
				We can see, <b>15 &lt; 30</b>. Therefore, the <b>low</b> will shift to right.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td>27</td>
							<td>28</td>
							<td>20</td>
							<td>11</td>
							<td class="bg-danger">15</td>
							<td class="bg-success">42</td>
							<td>32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>							
						</tr>
				</tbody>
				</table >
				</div>
				
				<p>At this point, we have <b>pivot value = 30</b> and <b>low = high</b> having value equals to 42.
				Therefore, swap 42 with the pivot value.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td>27</td>
							<td>28</td>
							<td>20</td>
							<td>11</td>
							<td>15</td>
							<td class="bg-primary">42</td>
							<td>32</td>
							<td>45</td>
							<td>34</td>
							<td class="bg-warning">30</td>							
						</tr>
				</tbody>
				</table >
				</div>
				<p>Now, we will have two sub-arrays, one having values greater than the pivot and the other having values smaller than the pivot. 
		Quick sort these two sub-arrays to obtain final sorted array.</p>
				<div class="col-sm-12">
				<table  id= "binary-search" class="table table-bordered text-center">
				<tbody>
						<tr>
						    <td class="bg-danger">27</td>
							<td class="bg-danger">28</td>
							<td class="bg-danger">20</td>
							<td class="bg-danger">11</td>
							<td class="bg-danger">15</td>
							<td class="bg-warning">30</td>
							<td class="bg-success">32</td>
							<td class="bg-success">45</td>
							<td class="bg-success">34</td>
							<td class="bg-success">42</td>							
						</tr>
				</tbody>
				</table >
				</div>
				</div>
		 <p>You can go through the below program if the above explanation is clear to you.</p>
<pre class="language-java line-numbers" style="margin-top : 15px;">
<code>package com.algorithms.complex;

/**
 * The QuickSort program to sort an array using Quick Sort algorithm.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-06-01
 */
public class QuickSort {

	int doPartition(int arr[], int low, int high) {
		int pivot = arr[high]; // last element as pivot
		int i = low - 1; // index of smaller element
		for (int j = low; j < high; j++) {
			if (arr[j] <= pivot) {
				i++;

				int temp = arr[i];
				arr[i] = arr[j];
				arr[j] = temp;
			}
		}

		int temp = arr[i + 1];
		arr[i + 1] = arr[high];
		arr[high] = temp;

		return i + 1;
	}

	void quickSort(int arr[], int low, int high) {
		if (low < high) {
			// partition index
			int parIndex = doPartition(arr, low, high);

			quickSort(arr, low, parIndex - 1);
			quickSort(arr, parIndex + 1, high);
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

		int size = input.length;

		System.out.println("Unsorted Array :");
		printArray(input);

		QuickSort quick = new QuickSort();
		quick.quickSort(input, 0, size - 1);

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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('quick-sort', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('quick-sort', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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

			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'quick-sort' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='insertion-sort-algorithm.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='merge-sort-algorithm.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
