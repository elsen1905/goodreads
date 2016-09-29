<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="/scripts/jquery-3.1.0.min.js"></script>
	</head>
	<style>
		.space{
			height: 10px;
		}
	</style>
	<body>
		<div class="container">
			<h3 class="page-header" style="text-align: center;">Update user!</h3>
			<div class="col-md-6 col-md-offset-3">
				<form class="" method="POST" action="/admin/{{$user->id}}">
					{{ method_field('PATCH') }}
					 {{ csrf_field() }}
					<input type="text" class="form-control" name="name" id="email" value="{{$user->name}}"> 
					<div class="space"></div>
					<input type="text" class="form-control" name="surname" id="pwd" value="{{$user->surname}}">
					<div class="space"></div>
					<input type="text" class="form-control" name="email" value="{{$user->email}}">
					<div class="space"></div>
					@if($user->admin == 0)
					<label for="admin">Make a Admin</label>
					<script>
						$(document).ready(function(){
							$user = $('#USER');
							$admin = $('#ADMIN');
							$user.attr({
								disabled: ''
							});
							$admin.attr({
								selected: 'selected'
							});
						})
					</script>
					@else
					<label for="admin">Make a User</label>
					<script>
						$(document).ready(function(){
							$user = $('#USER');
							$admin = $('#ADMIN');
							$admin.attr({
								disabled: ''
							});
							$user.attr({
								selected: 'selected'
							});
						})
					</script>
					@endif 
					<select name="admin" class="form-control">
						<option value="0" id="USER">User</option>
						<option value="1" id="ADMIN">Admin</option>
					</select>
					<div class="space"></div>
					<button type="submit" class="btn btn-success">Finish update</button>
				</form>
			</div>
		</div>
	</body>
</html>