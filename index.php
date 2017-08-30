<?php

$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "userInfo";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 


	$sql = "SELECT * FROM user_info";
	$result = $conn->query($sql);
	


?>
<!DOCTYPE html>
<html>
<head>
	<title>User info</title>
	<link rel="stylesheet" type="text/css" href="public/bootstrap/bootstrap.min.css">
	<script type="text/javascript" src="public/bootstrap/jquery.min.js"></script>
	<script type="text/javascript" src="public/bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="margin-top: 100px; margin-bottom: 100px;">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<table class="table table-hover table-condensed">
						<thead>
							<tr>
								<th>ID</th>
								<th>Date</th>
								<th>Website</th>
								<th>Username</th>
								<th>Password</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while ($row = $result->fetch_assoc()) {
							?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['date']; ?></td>
									<td><?php echo $row['website']; ?></td>
									<td><?php echo $row['username']; ?></td>			
									<td><?php echo $row['password']; ?></td>
								</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>