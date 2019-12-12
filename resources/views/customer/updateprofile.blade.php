<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	
</head>
<body>
<center>
    <a href="{{route('customer.index')}}">Home</a> | 
    <a href="{{route('customer.viewprofile')}}">View Profile</a> | 
    <a href="{{route('customer.updateprofile')}}">Update Profile</a> | 
	<a href="/logout">logout</a>
<fieldset>
	<legend>Update Profile</legend>
	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="{{$user->name}}"> </td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" value="{{$user['contact']}}"></td>
		</tr>   
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="{{$user['password']}}"></td>
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
