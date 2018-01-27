<html>
<head>
	<title>Check Palindrome - Beginner Level Java Algorithms | Codesena</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Codesena">
		<meta name="description" content="A Palindrome can be a number, word or sentence which will remain the same after reversing it. Here are the five different ways to check palindrome in Java.">
        <meta name="keywords" content="Java, Algorithms, Palindrome Numbers, Palindrome Strings, Program, Beginner level, Codesena">
 
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
				<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='check-armstrong-number.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
				</div>

				<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='swap-two-numbers.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
				</div>
				</div>
				<div id="middle">
				<div class="row-fluid" id="notification"></div>
				<div id="title-row" class = "row-fluid">
				<hr>
				<h3 id="title">Program to check whether the given input is Palindrome or not.</h3>
				<hr>
				</div>
				<div id="program" class = "row-fluid">
				<p>
				A Palindrome can be a number, word or sentence which will remain the same after reversing it. For example, madam, 121, level etc.</p>
				<p>There are a number of ways in Java to check whether the provided string or number is a palindrome or not. We will show you 5 different ways to check palindrome which are listed as below :</p>
				<ol>
				<li><a href="#number-palindrome">Check if the input integer is a Palindrome or not.</a></li>
				<li><a href="#for-palindrome">Check Palindrome String using <b>for loop</b> of Java.</a></li>
				<li><a href="#reverse-palindrome">Check Palindrome String using <b>reverse()</b> function of the <b>StringBuilder</b> class of Java.</a></li>
				<li><a href="#stack-palindrome">Check Palindrome String using <b>java.util.Stack</b> class.</a></li>
				<li><a href="#queue-palindrome">Check Palindrome String using <b>java.util.Queue</b> class.</a></li>
				</ol>
				<hr>
				<p id="number-palindrome"><h4 id="title">1. Program to check if the input integer is a Palindrome or not?</h4></p>
				<hr>
				<p>One can follow this approach if the given input is an integer. It simply uses some mathematical  operators and calculation to reverse the integer.</p>				
<pre class="language-java line-numbers">
<code>package com.algorithms.beginner;

/**
 * The PalindromeNumber program checks whether the input integer is a palindrome
 * or not and display the result in console.
 *
 * @author Pawan
 * @version 1.0
 * @since 2017-04-23
 */
public class PalindromeNumber {

	// function to check whether the number is palindrome
	public void checkPalindrome(int number) {
		int remainder, original, reverse = 0;

		original = number;

		// reverse the number
		while (number != 0) {
			remainder = number % 10;
			reverse = reverse * 10 + remainder;
			number = number / 10;
		}

		if (reverse == original) {
			System.out.println(original + " is a Palindrome Number.");
		} else {
			System.out.println(original + " is not a Palindrome Number.");
		}
	}

	public static void main(String[] args) {
		PalindromeNumber object = new PalindromeNumber();
		object.checkPalindrome(1331); // prints 1331 is a Palindrome Number.
		object.checkPalindrome(6534); // prints 6534 is not a Palindrome Number.
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
1331 is a Palindrome Number.
6534 is not a Palindrome Number.
</code>
</pre>
<br>
<hr>
<p id="for-palindrome"><h4 id="title">2. Program to check Palindrome String using for loop of Java.</h4></p>
<hr>
<p>Here we are simply comparing characters from the beginning and end of the string in a loop till it reaches the middle position using <b>charAt(position)</b> function of <b>String</b> class of Java.</p>				
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

/**
 * The SimplePalindrome program uses simple java for loop to check whether the
 * input string is a palindrome or not and display the result in console.
 *
 * @author Pawan
 * @version 1.1
 * @since 2017-04-24
 */
public class SimplePalindrome {

	// function to check palindrome
	public void checkPalindrome(String str) {
		boolean isPalindrome = false;

		for (int i = 0; i < str.length() / 2; i++) {
			if (str.charAt(i) == str.charAt(str.length() - 1 - i)) {
				isPalindrome = true;
			} else {
				isPalindrome = false;
			}
		}

		if (isPalindrome) {
			System.out.println(str + " is a palindrome.");
		} else {
			System.out.println(str + " is not a  palindrome.");
		}
	}

	public static void main(String[] args) {
		SimplePalindrome sp = new SimplePalindrome();
		sp.checkPalindrome("level"); // prints level is a palindrome.
		sp.checkPalindrome("simple"); // prints simple is not a palindrome.
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
level is a palindrome.
simple is not a  palindrome.
</code>
</pre>
<hr>
<p id="reverse-palindrome"><h4 id="title">3. Program to check Palindrome String using <b>reverse()</b> function of the <b>StringBuilder</b> class.</h4></p>
<hr>
<p>The below code is self explanatory. In case of any issue, ask your queries in the comment section below or in the <a href="forum.php">forum</a>.<p>
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

/**
 * The PalindromeUsingReverse program uses reverse() method of StringBuilder to
 * check whether the input string is a palindrome or not and display the result
 * in console.
 *
 * @author Pawan
 * @version 1.2
 * @since 2017-04-25
 */
public class PalindromeUsingReverse {

	// function to check palindrome
	public void checkPalindrome(String str) {
		String reversed = "";
		StringBuilder sb = new StringBuilder(str);
		reversed = sb.reverse().toString();

		if (str.equals(reversed)) {
			System.out.println(str + " is a palindrome.");
		} else {
			System.out.println(str + " is not a  palindrome.");
		}
	}

	public static void main(String[] args) {
		PalindromeUsingReverse object = new PalindromeUsingReverse();
		object.checkPalindrome("racecar"); // prints racecar is a palindrome
		object.checkPalindrome("carrot"); // prints carrot is not a palindrome.
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
racecar is a palindrome.
carrot is not a  palindrome.
</code>
</pre>
<hr>
<p id="stack-palindrome"><h4 id="title">4. Program to check Palindrome String using <b>java.util.Stack</b> class.</h4></p>
<hr>
<p>Stack uses the concept of <b>LIFO</b> i.e. last in first out. In this case, we are pushing every character of a given string in a Stack and then popping out to form a reversed string. In the end, we are comparing if both, reversed and original strings are equal. Please note :</p>
<ul>
<li><b>push(Object element)</b> - This function will insert elements onto the Stack.</li>
<li><b>pop()</b> - This function will return the top element from the Stack and remove it.</li>
</ul>
<pre class="language-java line-numbers" >
<code>package com.algorithms.beginner;

import java.util.Stack;

/**
 * The PalindromeUsingStack program uses java.util.Stack to check whether the
 * input string is a palindrome or not and display the result in console.
 *
 * @author Pawan
 * @version 1.3
 * @since 2017-04-26
 */
class PalindromeUsingStack {

	// function uses java.util.Stack to check palindrome
	public void isPalindrome(String str) {

		Stack&lt;Character&gt; stackObj = new Stack&lt;Character&gt;();

		for (int i = 0; i < str.length(); i++) {
			stackObj.push(str.charAt(i));
		}

		String reversed = new String();

		while (!stackObj.isEmpty()) {
			reversed = reversed + stackObj.pop();
		}

		if (str.equals(reversed)) {
			System.out.println(str + " is a palindrome.");
		} else {
			System.out.println(str + " is not a palindrome.");
		}
	}

	public static void main(String[] args) {
		PalindromeUsingStack obj = new PalindromeUsingStack();
		obj.isPalindrome("rotor"); // prints rotor is a palindrome.
		obj.isPalindrome("program"); // prints program is not a palindrome.
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
rotor is a palindrome.
program is not a palindrome.
</code>
</pre>
<hr>
<p id="queue-palindrome"><h4 id="title">5. Program to check Palindrome String using <b>java.util.Queue</b> class.</h4></p>
<hr>
<p>Queue uses the concept of <b>FIFO</b> i.e. first in first out. In this case, we are adding every character of a given string in a Queue in the reverse order and then removing them to form a reversed string. In the end, we are comparing if both, reversed and original strings are equal. Please note :</p>
<ul>
<li><b>add(Object element)</b> - This function will insert elements into the Queue.</li>
<li><b>remove()</b> - This function will return the head element from the Queue and remove it.</li>
</ul>
<pre class="language-java line-numbers">
<code>package com.algorithms.beginner;

import java.util.LinkedList;
import java.util.Queue;

/**
 * The PalindromeUsingQueue program uses java.util.Queue to check whether the
 * input string is a palindrome or not and display the result in console.
 *
 * @author Pawan
 * @version 1.4
 * @since 2017-04-27
 */
class PalindromeUsingQueue {

	// function uses java.util.Queue to check palindrome
	public void isPalindrome(String str) {

		Queue&lt;Character&gt; queueObj = new LinkedList&lt;Character&gt;();

		for (int i = str.length() - 1; i >= 0; i--) {
			queueObj.add(str.charAt(i));
		}

		String reversed = new String();

		while (!queueObj.isEmpty()) {
			reversed = reversed + queueObj.remove();
		}
		if (str.equals(reversed)) {
			System.out.println(str + " is a palindrome.");
		} else {
			System.out.println(str + " is not a palindrome.");
		}
	}

	public static void main(String[] args) {
		PalindromeUsingStack obj = new PalindromeUsingStack();
		obj.isPalindrome("madam"); // prints madam is a palindrome.
		obj.isPalindrome("coder"); // prints coder is not a palindrome.
	}
}
</code>
</pre>
				<p>Standard output :</p>
<pre class="language-java">
<code>
madam is a palindrome.
coder is not a palindrome.
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('palindrome', '$name', '$email', '$comment', NOW(),0)"); 
										
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
					mysqli_query($conn,"INSERT INTO comment_reply_tab(page_id, user_name, email_id, comment, timings, parent_id) VALUES('palindrome', '$replier_name', '$replier_email', '$replier_comment', NOW(),$parent_id)"); 
					
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
			$sql = "SELECT comment_id, page_id, user_name, email_id, comment, timings, parent_id FROM comment_reply_tab where parent_id = 0 and page_id = 'palindrome' ";
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
					<div id="previous" class="col-md-2 col-lg-2 pull-left" onclick="location.href='check-armstrong-number.php'">Previous <i class="fa fa-chevron-left pull-left" aria-hidden="true"></i>
					</div>
					<div id="next" class="col-md-2 col-lg-2 pull-right" onclick="location.href='swap-two-numbers.php'">Next <i class="fa fa-chevron-right pull-right" aria-hidden="true"></i>
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
