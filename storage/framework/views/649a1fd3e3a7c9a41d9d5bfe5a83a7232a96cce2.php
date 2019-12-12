<!DOCTYPE html>
<html>
<head>
	<title>Customer Index</title>
	
</head>

<center>
<body>
    <a href="<?php echo e(route('customer.index')); ?>">Home</a> | 
    <a href="<?php echo e(route('customer.viewprofile')); ?>">View Profile</a> | 
    <a href="<?php echo e(route('customer.updateprofile')); ?>">Update Profile</a> | 
	<a href="/logout">logout</a>

</body>
</center>
</html>