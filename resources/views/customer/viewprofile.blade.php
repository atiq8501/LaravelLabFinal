<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
	
</head>
<body>
<center>
<a href="{{route('customer.index')}}">Home</a> | 
    <a href="{{route('customer.viewprofile')}}">View Profile</a> | 
    <a href="{{route('customer.updateprofile')}}">Update Profile</a> | 
	<a href="/logout">logout</a>
<fieldset>
	<legend>View Profile</legend>
	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

       <tr>
			<td>Name:</td>
			<td> {{$user->name}}</td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td>{{$user->contact}}</td>
		</tr>

		<tr>
			<td>Gender:</td>
			<td>
			    {{$user->gender}}
			</td>
		</tr>
		   
		<tr>
			<td>Username:</td>
			<td>{{$user->username}}</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>******</td>
		</tr>

	</table>
	</form>
</fieldset>
<center>
</body>
</html>


