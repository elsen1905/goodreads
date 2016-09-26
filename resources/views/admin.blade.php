<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | Welcome {{Auth::user()->name}}</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="/images/goodreads-icon.png">
</head>
<body>
	<div class="">
	<h1 style="text-align: center;">ADMIN PANEL</h1>
		<table class="table table-hover">
    		<thead>
    			<tr>Users</tr>
		    	<tr>
			        <th>Id</th>
			        <th>Role</th>
			        <th>Name</th>
			        <th>Surname</th>
			        <th>Email</th>
			        {{-- <th>Password</th>
			        <th>Read Books</th> --}}
			        {{-- <th>Profile pic</th> --}}
			        <th>Last seen</th>
			        {{-- <th>Joined</th> --}}
			        <th colspan="3" style="text-align: center;">Actions</th>
		     	</tr>
    		</thead>
    		<tbody>
			  	
				@foreach($user as $users)
					<tr>
						
						<td>{{$users->id}}</td>
						<td>{{$users->admin}}</td>
						<td>{{$users->name}}</td>
						<td>{{$users->surname}}</td>
						<td>{{$users->email}}</td>
						{{-- <td>{{$users->password}}</td>
						<td>{{$users->read}}</td> --}}
						{{-- <td><img height="50" src="/images/{{$users->photo}}"></td> --}}
						<td>{{$users->updated_at}}</td>
						{{-- <td>{{$users->created_at}}</td> --}}
						<td><a href="{{url('admin/'.$users->id)}}" class="btn btn-default">Info</a></td>
						<td><a href="" class="btn btn-primary">Update</a></td>
						<td><a href="" class="btn btn-danger">Delete</a></td>
					</tr>	
				@endforeach
  			</tbody>
  			{{-- <a href="{{url('/admin/create')}}" class="btn btn-success">Create New User</a> --}}
 		</table>
	</div>
</body>
</html>