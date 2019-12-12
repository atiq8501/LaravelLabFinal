<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<center>
<body>
    <a href="<?php echo e(route('admin.index')); ?>">Home</a> | 
    <a href="<?php echo e(route('admin.viewprofile')); ?>">View Profile</a> | 
    <a href="<?php echo e(route('admin.addproduct')); ?>">Add Product</a> | 
	<a href="<?php echo e(route('admin.updateproduct')); ?>">Update Product</a> | 
    <a href="<?php echo e(route('admin.deleteproduct')); ?>">Delete Product</a> |
    <a href="<?php echo e(route('admin.deletecustomer')); ?>">Delete Customer</a> |
	<a href="/logout">Logout</a>

    <!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	
</head>
<body>

<fieldset>
	<legend>View Profile</legend>
	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

</fieldset>
</body>
</html>

</body>
</center>
</html>