	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<style>
		.space{
			height: 10px;
		}
	</style>
	<body>
		<div class="conatiner">
			<div class="col-md-6 col-md-offset-3">
				<div class="page-header">
				  <h1>Update Book</h1>
				  <a href="{{url('admin/books/actions')}}" class="btn btn-warning">Back to the actions menu</a>
				</div>
				<form action="{{url('admin/books/update/'.$book->id)}}" method="POST" enctype="multipart/form-data">
					{{-- {{ method_field('PATCH') }} --}}
					{{ csrf_field() }}
					<input type="text" class="form-control" name="name" value="{{$book->name}}">
					<div class="space"></div>
					<input type="text" class="form-control" name="isbn" value="{{$book->isbn}}">
					<div class="space"></div>
					<input type="file" class="form-control" name="image">
					<div class="space"></div>
					<input type="text" class="form-control" name="author" value="{{$book->author}}">
					<div class="space"></div>
					<select name="category" class="form-control" id="">
						<option value="0">Art</option>
						<option value="1">Horror</option>
						<option value="2">Fantasy</option>
					</select>
					<div class="space"></div>
					<select name="language" class="form-control" id="">
						<option value="English">English</option>
						<option value="German">German</option>
					</select>
					<div class="space"></div>

					<textarea name="description" class="form-control" id="" cols="30" rows="10">{{$book->description}}
					</textarea>
					<div class="space"></div>
					<button type="submit" class="btn btn-success">Finish update</button>
				</form>
			</div>
		</div>
	</body>
	</html>