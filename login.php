<?php
	
	if(isset($_SESSION['username'])){
		header('location: index.php.php');
	}

	if( isset($_POST['username']) && isset($_POST['password']) ){
		if($_POST['username']=="uname" && $_POST['password']=="pword"){
			session_start();
			$_SESSION['username']="uname";
			header('location: index.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="public/bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row" style="margin-top: 200px;	 ">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-4">
							</div>
							<div class="col-md-4">
								<div class="row"><h3 style="text-align: center; margin-bottom: 30px">Login</h3></div>	
								<form role="form" method="post">
									<div class="form-group">
										<input type="text" class="form-control" name="username" placeholder="Enter username" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Enter password" />
									</div>
									<button type="submit" class="btn btn-default btn-block btn-primary">
										Login
									</button>
								</form>
							</div>
							<div class="col-md-4">
							</div>
						</div>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>