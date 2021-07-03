<!DOCTYPE html>
<?php $this->start('body'); ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="../css/register.css">

	<!--<link rel="stylesheet" href="https//font.googleapis.com/icon?family=Material+Icons">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">--->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.1/css/font-awesome.min.css">

</head>
<body>
	<div class="wrapper">


		<form class="form" action="" method="post">
			<div class="bg-danger"><?= $this->displayErrors ?></div>
		<div class="dbl-field">

	    <div class="field">
	      <label for="fname">First Name</label>
	      <input type="text" id="fname" name="fname" class="form-control" value="<?=$this->post['fname'] ?>">
				<i class="fa fa-user" aria-hidden="true"></i>
	    </div>
	      <div class="field">
	        <label for="lname">Last Name</label>
	        <input type="text" id="lname" name="lname" class="form-control" value="<?= $this->post['lname'] ?>">
<i class="fa fa-user" aria-hidden="true"></i>
				</div>
	      <div class="field">
	        <label for="email">E-mail</label>
	        <input type="email" id="email" name="email" class="form-control" value="<?= $this->post['email'] ?>">
<i class="fa fa-user" aria-hidden="true"></i>
				</div>
	      <div class="field">
	        <label for="username">Choose a username</label>
	        <input type="text" id="username" name="username" class="form-control" value="<?=$this->post['username'] ?>">
<i class="fa fa-user" aria-hidden="true"></i>
				</div>
	      <div class="field">
	        <label for="password">Choose a Password</label>
	        <input type="password" id="password" name="password" class="form-control" value="<?=$this->post['password'] ?>">
<i class="fa fa-user" aria-hidden="true"></i>
				</div>
	      <div class="field">
	        <label for="confirm">Confirm Password</label>
	        <input type="password" id="confirm" name="confirm" class="form-control" value="<?= $this->post['confirm'] ?>">
<i class="fa fa-user" aria-hidden="true"></i>
				</div>
	      <div class="pull-right">
	        <input type="submit" class"btn btn-primary btn-large" value="Register">
	      </div>

	  </form>


		<!-- <form action="#" method="post" name="form" onsubmit="return validated()">
			<div class="dbl-field">
				<div class="field">
					<div class="name">Full Name</div>
					<input type="text" name="fname" placeholder="Enter your name" required autofocus>
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Email</div>
					<input type="text" name="email" placeholder="Enter your email">
					<i class="fa fa-envelope"aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Mobile Number</div>
					<input type="text" name="number" placeholder="Enter your phone">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">NIC Number</div>
					<input type="text" name="nic" placeholder="Enter your NIC">
					<i class="fa fa-id-card" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Address</div>
					<textarea  placeholder="Write your address"></textarea>
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Birth Day</div>
					<input type="date" name="bday" placeholder="Enter your brith day">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Gender</div>
					<select name="gender" >required
						<option value="">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<i class="fa fa-venus-mars" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Age</div>
					<input type="text" name="age" placeholder="Enter your age">
					<i class="fa fa-baby" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name">Role</div>
					<select name="state">
						<option value="">Select your role</option>
						<option value="User" selected>User</option>
						<option value="Donor">Donor</option>
						<option value="Nures">Nures</option>
						<option value="Doctor">Doctor</option>
					</select>
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>

				<div class="field">
					<div class="name"> Blood Group</div>
					<select name="bloodgroup" class="form-control">
						<option value="">blood group</option>
						<option value="A-" selected>A-</option>
  						<option value="AB-">AB-</option>
  						<option value="O-">O-</option>
  						<option value="A-">A-</option>
  						<option value="A+">A+</option>
  						<option value="AB+">AB+</option>
					</select>
					<i class="fa fa-tint" aria-hidden="true"></i>
				</div>


				<div class="massage">
					<div class="name">Password</div>
					<i class="fa fa-lock" aria-hidden="true" id="icon"></i>
					<input type="password"  name="password" id="password" placeholder="Enter Your Password" required>
					<i class="fa fa-eye" id="eye" ></i>
				</div>

				<div class="massage">
					<div class="name">Conform Password</div>
					<i class="fa fa-lock" aria-hidden="true" id="icon"></i>
					<input type="password"  name="password" id="password1" placeholder="Enter Your Password" required>
					<i class="fa fa-eye" id="eye1" ></i>
				</div>

				<div class="button-area">
					<button type="submit" name="submit">Submit</button>
				</div>
			</div>
		</form> -->
	</div>
</div>

	<script src="../js/register.js"></script>

</body>
</html>
<?php $this->end(); ?>
