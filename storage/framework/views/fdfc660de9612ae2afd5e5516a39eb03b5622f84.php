<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	
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
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($item->name); ?>"><?php echo e($item->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
			</td>
            
		</tr>
         
		<tr>
			<td>For:</td>
			<td>
				<select name="gender">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</td>
		</tr>
        <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="<?php echo e(old('type')); ?>"></td>
		</tr>

        <tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="<?php echo e(old('type')); ?>"></td>
		</tr>
       
		<tr>
			<td>Price:</td>
			<td><input type="text" name="price" value="<?php echo e(old('price')); ?>"></td>
		</tr>

        <tr>
			<td>Quantity:</td>
			<td><input type="text" name="quantity" value="<?php echo e(old('quantity')); ?>"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="submit" value="Update Product"></center></td>
			
		</tr>


	</table>
	</form>
</fieldset>


</body>
</center>
</html>