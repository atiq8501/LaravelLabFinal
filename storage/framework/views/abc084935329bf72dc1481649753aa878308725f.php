<!DOCTYPE html>
<html>
<head>
	<title>Admin Index</title>
	
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
</body>
</center>
</html>