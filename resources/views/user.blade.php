<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-6 col-md-offset-3">
		<h1>This place is completely belongs to Memo!</h1>
		<table class="table table-bordered ">
			<tr>
				<th>Id</th>
				<td>{{$user->id}}</td>
			</tr>
			<tr>
				<th>Admin(1)/User(0)</th>
				<td>$user->admin</td>
			</tr>
	    	<tr>
	    		<th>Name</th>
	    		<td>{{$user->name}}</td>
	    	</tr>
	    	<tr>
	    		<th>Surname</th>
	    		<td>{{$user->surname}}</td>
	    	</tr>
	    	<tr>
	    		<th>Email</th>
	    		<td>{{$user->email}}</td>
	    	</tr>
	    	<tr>
	    		<th>Password</th>
	    		<td>{{$user->password}}</td>
	    	</tr>
	    	<tr>
	    		<th>Born</th>
	    		<td>{{$user->born}}</td>
	    	</tr>
	    	<tr>
	    		<th>Photo</th>
	    		<td>
	    			<img height="75" src="/images/{{$user->photo}}" alt="">
	    		</td>
	    	</tr>
	    	<tr>
	    		<th>Read</th>
	    		<td>{{$user->read}}</td>
	    	</tr>
	    	<tr>
	    		<th>Joined</th>
	    		<td>{{$user->created_at}}</td>
	    	</tr>
	    	<tr>
	    		<th>Last seen</th>
	    		<td>{{$user->updated_at}}</td>
	    	</tr>
		</table>
	</div>
</body>
</html>