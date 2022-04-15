<html>

	<head>
		<title>WFD</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="wnameth=device-wnameth, initial-scale=1" />
		<link href="bootstrap.min.css" rel="stylesheet" />
		<link href="style.css" rel="stylesheet" />
		<script type="text/javascript" src="jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap.min.js"></script>
	</head>

	<body>
	<FORM action="createaccount.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-md-2">&nbsp;</div>
				<div class="col-md-8">
				<br/>
					<center><h3>Create Account</h3></center><br/>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							
								<label>Name of (Person/Organization/Restaurant/Marriage hall)</label>
								<input name="Name" type="text" class="form-control" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input name="txtpsw" type="password" class="form-control" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Confirm Password</label>
								<input name="txtcpsw" type="password" class="form-control" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							
								<Address>Address</Address>
								<input name="Add" type="text" class="form-control" required />
							</div>
						</div>
					</div>
					
					<div class="row">
					<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input name="State" type="text" class="form-control" required />
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>City</label>
								<input name="City" type="text" class="form-control" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Pin code</label>
								<input name="Pincode" type="text" class="form-control" required />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Mobile</label>
								<input name="mobile" type="text" class="form-control" required />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>ID Proof</label>
								<select name="Id" class="form-control" >
									<option value="select">-Select-</option>
									<option value="Aadhaar">Aadhaar</option>
									<option value="Pan card">Pan card</option>
									<option value="Voter name">Voter name</option>
									<option value="Driving licence">Driving licence</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>ID Number</label>
								<input name="IdNumber" type="text" class="form-control" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="SUBMIT" value="Create Account" class="btn btn-primary" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<a href="index.php">If you have already account then Login</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">&nbsp;</div>
			</div>
		</div>
	</FORM>	
	</body>
	
</html>
