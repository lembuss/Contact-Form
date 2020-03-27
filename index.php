<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="custom.css"> -->
</head>
<body>
<!-- jumbotron as page title	 -->
	<div class="jumbotron text-center">
		<h1>Contact Us</h1> 
	</div>

<!-- Divide the page into divs accordingly -->
	<div class="row">
		<div class="col-2"></div>

		<div class="col-8">
			<form action="#" class="was-validated">

<!-- Name input -->
				<div class="form-group">
					<label>First Name: </label>
					<input type="text" name="fn" id="fname" class="form-control" placeholder="First name" required>
					<div class="invalid-feedback">Please fill out this field</div>
					
				</div>

				<div class="form-group">
					<label for="lname">Last Name: </label>
					<input type="text" name="ln" id="lname" class="form-control" placeholder="Last name" required>
					<div class="invalid-feedback">Please fill out this field</div>
				</div>

<!-- email input -->
				<div class="form-group">
					<label for="email">Email: </label>
					<!-- appending a sample on the input box for email -->
					<div class="input-group mb-3">
    					<input type="email" name="em" id="email" class="form-control" placeholder="Enter e-mail" required>	
    					<div class="input-group-append">
      						<span class="input-group-text">@example.com</span>
    					</div>
  					</div>
					<div class="invalid-feedback">Please fill out this field</div>
				</div>

<!-- Country input -->
				<div class="form-group">
					<label for="country">Country: </label>
						<select class="form-control" id="country" required>
							<option value="Kenya">Kenya</option>
							<option value="Uganda">Uganda</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Burundi">Burundi</option>
						</select>					
				</div>

<!-- phone number input -->
				<div class="form-group">
					<label for="phone">Phone Number: </label>
					<!-- prepending the area code for the phone number -->
					<div class="input-group">
						<div class="input-group-prepend">
							<select required>
								<option value="+254">+254</option>
								<option value="+256">+256</option>
								<option value="+255">+255</option>
								<option value="+250">+250</option>
								<option value="+257">+257</option>
							</select>
						</div>

						<input type="text" name="pnum" id="phone" class="form-control" placeholder="Enter phone number" required>
						<div class="invalid-feedback">Please fill out this field</div>	
					</div>	
				</div>

<!-- desired communication is here -->
				<div class="form-group">
					<label for="message">Message: </label>
					<textarea name="txt" id="message" class="form-control" required></textarea>
					<div class="invalid-feedback">Please fill out this field</div>
				</div>

<!-- check box prior to submission -->
				<div class="form-group form-check">
					<label class="form-check-label"></label>
					<input type="checkbox" class="form-check-input" name="check" required> I agree to submit my information.
					<div class="invalid-feedback">Please check this box to proceed</div>
				</div>

<!-- Buttons for submitting and clearing the data entry -->
				<input type="submit" value="Submit" name="msg_submit" class="btn btn-primary">
				<input type="reset" value="Clear" class="btn btn-danger">
			</form>

		</div>	

		<div class="col-2"></div>	
	</div>
</body>
</html>