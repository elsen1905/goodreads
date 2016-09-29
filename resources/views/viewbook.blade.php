<!DOCTYPE html>
<html>
<head>
	<title>Goodreads | </title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: -10px;" id="navbar">
	  <div class="container">
		<div class="col-sm-9">
				<div class="navbar-header">
		      <a href="{{url('/')}}"><img src="/images/logo.png"></a>
		    </div>
		      <ul class="nav navbar-nav ">
		        <li><a href="{{url('/')}}">Home</a></li>
		        <li><a href="#">My Books</a></li>
		      </ul> 
	      	<form class="navbar-form navbar-left" action="{{url('/search-result')}}" method="POST" >
	      	{{csrf_field()}}
		        <div class="form-group">
		          <input type="text" class="form-control" name="search" placeholder="Search books">
		        </div>
		       {{--  <a href="{{url('/search-result')}}" class="btn"> 
		        	<i class="fa fa-search" aria-hidden="true"></i>
		        </a> --}}
		        <button type="submit" class="btn btn-default" style="background-color: #F4F1EA">Search</button>
	     	</form>
			</div>
			<div class="col-sm-3">
	  		<ul class="nav navbar-nav">
		        <li><a href="#"><img src="/images/friend.svg"></a></li>
		        <li><a href="{{url('/profile/'.Auth::user()->id)}}"><img src="/{{Auth::user()->photo}}" class="profile"></a></li>
		        <li><a href="{{url('/logout')}}" class="btn btn-default" style="margin-top: 10px;background-color: #F4F1EA; ">Log out</a></li>
		      </ul>
	     </div>
	  </div>   
	</nav>
	<section id="show_book">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-7">
					<div class="col-md-12">
						<div class="col-md-4">
							<img height="220" width="150" src="/{{$book->icon}}" alt="">
						</div>
						<div class="col-md-8">
							<div class="row book_name">
								<p class="">{{$book->name}}</p>
								<span>by</span> <a href="">{{$book->author}}</a>
							</div>
							<div class="row book_description">
								<p>{{$book->description}}</p>
							</div>
						</div>
						<h2>{{$book->seen}}</h2>
					</div>
				</div>
				<div class="col-md-5"></div>
			</div>
		</div>
	</section>
</body>
</html>