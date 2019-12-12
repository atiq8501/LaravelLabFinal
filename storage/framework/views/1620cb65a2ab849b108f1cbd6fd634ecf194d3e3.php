<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	
</head>
<body>
<center>
<a href="<?php echo e(route('customer.index')); ?>">Home</a> | 
    <a href="<?php echo e(route('customer.viewprofile')); ?>">View Profile</a> | 
    <a href="<?php echo e(route('customer.updateprofile')); ?>">Update Profile</a> | 
	<a href="/logout">logout</a>
<fieldset>
	<legend>View Profile</legend>
	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

       <tr>
			<td>Name:</td>
			<td> <?php echo e($user->name); ?></td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><?php echo e($user->contact); ?></td>
		</tr>

		<tr>
			<td>Gender:</td>
			<td>
			    <?php echo e($user->gender); ?>

			</td>
		</tr>
		   
		<tr>
			<td>Username:</td>
			<td><?php echo e($user->username); ?></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>******</td>
		</tr>

	</table>
	</form>
</fieldset>
<center>
</body>
</html>


