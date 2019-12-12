<!DOCTYPE html>
<html>
<head>
	<title>Delete Customer</title>
	
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
                    @foreach($customers as $item)
						<option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
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