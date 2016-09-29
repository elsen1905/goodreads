<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<style>
	.space{
		height: 15px;
	}
</style>
<body>
	<div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-3 col-lg-offset-3 col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<form action="{{url('admin/books/create-new-book')}}" method="POST" role="form" enctype="multipart/form-data">
		{{csrf_field()}}
			<legend>New book</legend>
			<input type="text" class="form-control" name="name" placeholder="Book name">
			<div class="space"></div>
			<input type="text" name="isbn" class="form-control" placeholder="ISBN">
			<div class="space"></div>
			<input type="file" name="image" class="form-control">
			<div class="space"></div>
			Genres<select name="category" id="" class="form-control">
				<option value="0">Art</option>
				<option value="1">Romance</option>
				<option value="2">Horror</option>
				<option value="3">Comics</option>
			</select>
			<div class="space"></div>
			<input type="text" class="form-control" placeholder="Book Author name" name="author">
			<div class="space"></div>
			<input type="text" class="form-control" placeholder="Book Author surname">
			<div class="space"></div>
			<textarea id="" cols="30" rows="10" name="description" class="form-control" placeholder="Add a description"></textarea>
			<div class="space"></div>
			Language<select name="language" id="" class="form-control">
				<option value="English">English</option>
				<option value="German">German</option>
			</select>
			<div class="space"></div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>