<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	
</head>
<body>
<center>
    <a href="<?php echo e(route('customer.index')); ?>">Home</a> | 
    <a href="<?php echo e(route('customer.viewprofile')); ?>">View Profile</a> | 
    <a href="<?php echo e(route('customer.updateprofile')); ?>">Update Profile</a> | 
	<a href="/logout">logout</a>
<fieldset>
	<legend>Update Profile</legend>
	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo e($user->name); ?>"> </td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" value="<?php echo e($user['contact']); ?>"></td>
		</tr>   
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="<?php echo e($user['username']); ?>"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="<?php echo e($user['password']); ?>"></td>
		</tr>
		<tr>
			<td colspan="2" ><center><input type="submit" name="submit" value="Update"></center></td>
			
		</tr>

	</table>
	</form>
</fieldset>
<center>
</body>
</html>
