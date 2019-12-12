<!DOCTYPE html>
<html>
<head>
	<title>Update Product</title>
	
</head>

<center>
<body>
    <a href="{{route('admin.index')}}">Home</a> | 
    <a href="{{route('admin.viewprofile')}}">View Profile</a> | 
    <a href="{{route('admin.addproduct')}}">Add Product</a> | 
	<a href="{{route('admin.updateproduct')}}">Update Product</a> |
    <a href="{{route('admin.deleteproduct')}}">Delete Product</a> | 
    <a href="{{route('admin.deletecustomer')}}">Delete Customer</a> |
	<a href="/logout">Logout</a>

    <fieldset>
	<legend>Update Profile</legend>
	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

    <tr>
			<td> Select Product:</td>
			<td>
				<select name="name">
                    @foreach($products as $item)
						<option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
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
			<td><input type="text" name="name" value="{{old('type')}}"></td>
		</tr>

        <tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="{{old('type')}}"></td>
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
			<td colspan="2"><center><input type="submit" name="submit" value="Update Product"></center></td>
			
		</tr>


	</table>
	</form>
</fieldset>


</body>
</center>
</html>