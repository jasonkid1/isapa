<!DOCTYPE html>
<html>
<head>
	<title>Pagination AJAX JQuery</title>


		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
	  	<script src ="js/jquery-3.2.1.min.js"></script>
	  	<script src = "js/bootstrap.min.js"></script>
</head>
<body>

	<br><br>
	<div class="container">
		
		<h3 align="center">Make Pagination Using AJAX Jquery with MySQL PHPz</h3>

		
	


		<div class="table-responsive" id="pagination_data">
			
		</div>

	</div>

	
</body>
</html>
	<script>
		
		$(document).ready(function(){
			load_data();
			function load_data(page)
			{
				$.ajax({
					url:"paginationAjaxJQueryMysqlExec.php",
					method:"POST",
					data:{page:page},
					success:function(data){
						$('#pagination_data').html(data);
					}
				})
			}

			$(document).on('click','.pagination_link', function()
			{
				var page = $(this).attr("id");
				load_data(page);
			});

		});

	</script>
