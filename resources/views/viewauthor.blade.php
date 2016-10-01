<!DOCTYPE html>
<html>
<head>
	<title>Goodreads | {{$author->author_name}}</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="icon" href="/images/goodreads-icon.png">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-default" style="margin-bottom: 0px;" id="navbar">
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
	<section>
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-3">
					<img src="{{$author->author_photo}}" height="200" alt="">
				</div>
				<div class="col-md-9">
					<div class="page-header">
						<h3>{{$author->author_name}}</h3>
					</div>
					<div class="row">
						<h5>
							{{$author->author_biography}}
						</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-2">
						<span class="span-l">&copy 2016 Goodreads Inc</span>
					</div>
					<div class="col-md-8">
						<ul>
							<li>
								<a href="#">about us</a>
							</li>
							<li>
								<a href="#">advertise</a>
							</li>
							<li>
								<a href="#">author program</a>
							</li>
							<li>
								<a href="#">jobs</a>
							</li>
							<li>
								<a href="#">api</a>
							</li>
							<li>
								<a href="#">our blog</a>
							</li>
							<li>
								<a href="#">authors & advertisers blog</a>
							</li>
							<li>
								<a href="#">terms</a>
							</li>
							<li>
								<a href="#">privacy</a>
							</li>
							<li>
								<a href="#">help</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2">
						<span>switch to:</span>
						<a href="#">mobile version</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>