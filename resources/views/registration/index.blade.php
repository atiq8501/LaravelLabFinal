<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	
</head>
<body>

<fieldset>
	<legend>Registration</legend>
	<form method="post" >
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>

       <tr>
			<td>Name:</td>
			<td><input type="text" name="name" value="{{old('name')}}"> </td>
		</tr>

        <tr>
			<td>Contact:</td>
			<td><input type="text" name="contact" value="{{old('contact')}}"></td>
		</tr>

		<tr>
			<td>Gender:</td>
			<td>
				<select name="gender">
					<option value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</td>
		</tr>
		   
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="{{old('username')}}"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Registration"></td>
			<td></td>
		</tr>


        <tr>
			<td colspan="2">If You already have account
            <a href="/login">Click Here </a> to Login </td>
		</tr>
	</table>
	</form>
</fieldset>
</body>
</html>