<?php

?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<?php require "includes/header.php";?>
</head>
<body>
	<div class="row navigation-part">
		<?php require "includes/menu.php";?>
	</div>
	<div class="container">
		<div class="row">
			<div class="row text-center">
					<h3>Current Average rating</h3>
					<h4>4/5 Stars</h4>
				</div>
			<div class="col-md-5">
				
				<div class="row">
					<h3>Rate Us</h3>
					<form>
						<div class="form-group">
							<label class="control-label">Rating out 0f 5</label>
							<input class="form-control" type="number" name="rate">
						</div>
						<div class="form-group">
							<label class="control-label">Reason (Optional)</label>
							<textarea class="form-control" rows="3" name="rate"></textarea>
						</div>
						<div class="text-center">
							<input type="submit" class="btn" name="" value="Submit rating">
						</div>
						
					</form>
				</div>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<div class="row">
					<h3>Give Your Feedback</h3>
					<form>
						<div class="form-group">
							<label class="control-label">Subject</label>
							<input class="form-control" type="text" name="rate">
						</div>
						<div class="form-group">
							<label class="control-label">Message</label>
							<textarea class="form-control" rows="3" name="rate"></textarea>
						</div>
						<div class="text-center">
							<input type="submit" class="btn" name="" value="Submit Feedback">
						</div>
						
					</form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="row text-center">
				<h3>Some of our Feebacks</h3>
			</div>
			<div class="col-md-8 col-md-offset-2">
				
				<div class="row">
					<!-- use a courosel-->
					<p style="font-size: 16px;">With our search domain, you can search for vacancies in your geographic area or you can explore opportunities in the next city, across the country or on the other side of the world with minimal key strokes and mouse clicks.From the comfort of your current location, you can access thousands of attachment vacancies</p>
				</div>
			</div>
		</div>
	</div>
</body>