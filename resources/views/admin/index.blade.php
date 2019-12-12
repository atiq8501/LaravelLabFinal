<!DOCTYPE html>
<html>
<head>
	<title>Admin Index</title>
	
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
</body>
</center>
</html>