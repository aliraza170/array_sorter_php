<!DOCTYPE html>
<html>
<head>
	<title>My Boarding Pass Sorter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/resources/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid dash_cus"> 
	<div class="container">
		<div class="row">
			<h2>Pass Sorter</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="pass_info">
					<div class="col-md-12">
					</div>
					<div class="col-sm-12">
						<form id="data" action="sort.php" enctype="multipart/form-data" >
							<div class="form-group row">								
								<div class="col-md-9">
									<textarea class="form-control cus_input" rows="5" id="json_text" name="json_text" placeholder="Enter data here" required></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label"></label>
								<div class="col-md-4">
									<button class="btn btn-success form-control cus_input_btn">Submit</button>
								</div>
								<div class="col-md-4">
									<button type="reset" class="btn btn-warning form-control cus_input_btn">Clear</button>
								</div>
							</div>
						
						</form>
					</div>
				</div>		
			</div>
			<div class="col-md-12">
				<div class="pass_info">
					<div class="col-sm-12">
						<h2>Response: </h2>
					</div>
					<div class="col-md-12">
						<div id="response_here">
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="/resources/custom.js" crossorigin="anonymous"></script>

</body>
</html>