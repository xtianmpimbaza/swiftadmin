<!DOCTYPE html>
<html>
<head>
	<title>Swiftpay Admin</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:90%;">
	<span style="font-size:25px; color:blue"><center><strong>Swiftpay Admin</strong></center></span>
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Code</th>
				<th>Biz Type</th>
				<th>Biz Name</th>
				<th>Location</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');

				$query=mysqli_query($conn,"select * from `merchants` ORDER BY id DESC");
				$m_id = 0;
				while($row=mysqli_fetch_array($query)){
				    $m_id += 1;
					?>
					<tr>
						<td><?php echo $m_id; ?></td>
						<td><?php echo $row['merchant_name']; ?></td>
						<td><?php echo $row['merchant_code']; ?></td>
						<td><?php echo $row['m_business_type']; ?></td>
						<td><?php echo $row['m_business_name']; ?></td>
						<td><?php echo $row['m_location']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm col-md-6" style=""><span class="glyphicon glyphicon-edit"></span> </a>
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm col-md-6 "><span class="glyphicon glyphicon-trash"></span> </a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}

			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>