<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Activity CRUD, Search, JOIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src ="js/jquery-3.2.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
	
</head>
<body>

	<p id="test">This is a paragraph test for jquery!</p>
		<script>
			$("#test").click(function() {    //syntax for jquery
				alert("You Clicked Me!");
			});
		</script>

	<div class="container">

		<h1>Index Page</h1>
		<div class="row">
	   	   <div class="col-md-4" style="background-color: #ff9999">Left</div>
	   	   <div class="col-md-4" style="background-color: #99ccff">Middle</div>
	   	   <div class="col-md-4" style="background-color: #ffcc99">Right</div> <br><br>
	   	   <p>You can highlight words or <mark> text using mark tags</mark></p>
	   	   <blockquote>
	   	   	<p>Sometimes I wet the bed, on purpose</p>
	   	   	<footer>My Grandpa</footer>
	   	   </blockquote>
	   	   <h4>Things to do when your bored.</h4>
	   	   <dl>
	   	   	 <dt>Indoors</dt>
	   	   	 	<dd> - take a nap</dd>
	   	   	 	<dd> - watch tv for 8 hours</dd>
	   	   	 <dt>Outdoors</dt>
	   	   	 	<dd> - go back inside</dd>
	   	   	 	<dd> - nothing</dd>
	   	   </dl>

	   	   <p>To set user weight use <code>setUserweight(323);</code> with an integer</p>

	   	   <p>For multi-line codes use pre tags</p>
	   	   <pre>
  for n in range(101):
  	if(n % 4 is 0):
  		print(n)
	   	   </pre>

	   	   <p>This is supposed to be keyboard input <kbd>CTRL-ALT-DEL</kbd> </p>

	   	   	<h4>Built in color classes</h4>
	   	   	<p class="text-muted">Text muted</p>
	   	   	<p class="text-success">Congrats you filled out that form correctly</p>
	   	   	<p class="text-danger">Danger Text</p>

	   	   	<p class="bg-success">Congrats you filled out that form correctly</p>
	   	   	<p class="bg-danger">Danger Text</p>

	  
	   <h2>Simple Table</h2>
  		<table class="table">
  		<thead>
			  <tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Exam Name</th>
				<th>Date</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
			  </tr>
		</thead>
		<tbody>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
		</tbody>

			  </table>

			  <h2>Condensed Table</h2>
  		<table class="table table-condensed">
  		<thead>
			  <tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Exam Name</th>
				<th>Date</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
			  </tr>
		</thead>
		<tbody>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
		</tbody>

			  </table>


		<h2 id="test1">Stripped Table</h2>
		
		<script>
		$("#test1").click(function(){
			$(this).hide();
		});
		</script>

  		<table class="table table-striped">
  		<thead>
			  <tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Exam Name</th>
				<th>Date</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
				<th>Grade Value</th>
			  </tr>
		</thead>
		<tbody>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
			<tr>
				<td>Bucky</td>
				<td>Roberts</td>
				<td>Prelim</td>
				<td>20001214</td>
				<td>98</td>
				<td>99</td>
				<td>85</td>
				<td>87</td>
				<td>87</td>
			</tr>
		</tbody>

			  </table>

		 </div>
	 </div>
	   	
		<a href="index2.php">Insert Data Here</a>
		<a href="search_filter.php">Search Data Here</a>
		<a href="update.php">Update Data Here</a>
		<a href="delete.php">Delete Data Here</a>
		<a href="innerjoin.php">How to Inner Join Here</a>
		<a href="innerjoin_3tbl.php">How to Inner Join 3 Table Here</a>
	
		


			<script src ="js/jquery-3.2.1.min.js"></script>
			<script src = "js/bootstrap.min.js"></script>
</body>
</html>