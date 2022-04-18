<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/search.css">
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>-->
	</head>
<body>
	<h1  align="center" style= "font-size:400%;color: black;">Library</h1>
	 <center>
	 	<fieldset style="width:350px">
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Search Book</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<form  method="POST">
			<div class="form-inline">
				<input type="text" id="search_data" class="form-control" placeholder="Search here..."/>
				<button type="button" id="search" class="btn btn-primary">Search</button>
				<button type="button" id="refresh" class="btn btn-success">Refresh</button>
				
				<a href="homepage.php"><button type="button">Home</button></a><br><br>
			</div>
		</form>
		<br /><br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Book Name</th>
					<th>Author Name</th>
					<th>Publish Date</th>
					
				</tr>
			</thead>
			<tbody class="alert-warning" id="data"></tbody>
		</table>
	</div>
	</fieldset>
      </center>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
</html>