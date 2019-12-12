<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	
</head>
<body>
<center>
    <a href="{{route('admin.index')}}">Home</a> | 
    <a href="{{route('admin.viewprofile')}}">View Profile</a> | 
    <a href="{{route('admin.addproduct')}}">Add Product</a> | 
	<a href="{{route('admin.updateproduct')}}">Update Product</a> |
    <a href="{{route('admin.deleteproduct')}}">Delete Product</a> | 
    <a href="{{route('admin.deletecustomer')}}">Delete Customer</a> |
	<a href="/logout">Logout</a>
<fieldset>
	<legend>Add Product</legend>

	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

       <tr>
			<td> Product Name:</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>

        <tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="{{old('type')}}"></td>
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
			<td>Price:</td>
			<td><input type="text" name="price" value="{{old('price')}}"></td>
		</tr>

        <tr>
			<td>Quantity:</td>
			<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="submit" value="Add Product"></center></td>
			
		</tr>

	</table>
	</form>

    
</fieldset>
</center>
</body>
</html>