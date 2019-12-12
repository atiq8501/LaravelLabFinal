<!DOCTYPE html>
<html>
<head>
	<title>Delete Customer</title>
	
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

    <fieldset>
	<legend>Update Profile</legend>
	<form method="post" >
		<!-- @csrf  -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>

    <tr>
			<td> Select Product:</td>
			<td>
				<select name="name">
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</td>
       
		<tr>
			<td colspan="2"><center><input type="submit" name="submit" value="Delete"></center></td>
			
		</tr>


	</table>
	</form>
</fieldset>
</body>
</center>
</html>