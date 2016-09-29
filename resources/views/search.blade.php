<!DOCTYPE html>
<html>
<head>
	<title>Goodreads | Search results for {{$any}}</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="icon" href="/images/goodreads-icon.png">
</head>
<body>
<nav class="navbar navbar-default" id="navbar">
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
	        <button type="submit" class="btn btn-default" style="background-color: #F4F1EA;">Search it</button>
     	</form>
		</div>
		<div class="col-sm-3">
  		<ul class="nav navbar-nav">
	        <li><a href="#"><img src="/images/friend.svg"></a></li>
	        <li><a href="#"><img src="/images/1.jpg" class="profile"></a></li>
	      </ul>
     </div>
  </div>   
</nav>
	<div class="container" id="search-main">
		<div class="row">
			<div class="col-sm-8">
				<h4><strong>Search</strong></h4>
				<form action="{{url('/search-result')}}" method="POST" name="searchForm" class="navbar-form">
					<div class="form-group">
						<input type="text" name="search-text" class="form-control" placeholder="Search by Book Title, Author or Genre" size="55">
						<input type="submit" name="submit" class="btn btn-default" value="Search">
					</div><!-- form-group -->
					<div class="radio">
						<label class="radio-inline">
							<input type="radio" name="searchOption" id="search_all" value="all" checked="checked"> all
						</label>
						<label class="radio-inline">
							<input type="radio" name="searchOption" id="search_by_title" value="title"> title
						</label>
						<label class="radio-inline">
							<input type="radio" name="searchOption" id="search_by_author" value="author"> author
						</label>
						<label class="radio-inline">
							<input type="radio" name="searchOption" id="search_by_genre" value="genre"> genre
						</label>
					</div><!-- radio -->
				</form>
				<div class="search-result">
					<h5 class="search-result-nav">Page NOTWORKING of about XXX results (0.17 seconds)</h5>
					<ul class="list-unstyled search-result-list">
						@foreach($post as $result)
						<li>
							<div class="img-wrapper inline-block">
								<img alt="" src="/{{$result->icon}}">
							</div><!-- img-wrapper -->
							<div class="book-details inline-block">
								<a class="bookTitle" href="{{url('book/'.$result->id)}}">{{$result->name}}</a><br>
								<span class="by">by </span><a class="authorName" href="authorName" href="#">{{$result->author}}</a>
								<br>
								<span class="greyText smallText inline-block">
									<span class="p10">*</span>
									<span class="p10">*</span>
									<span class="p10">*</span>
									<span class="p6">*</span>
									<span class="p0">* </span>
									3.76 avg rating - 3,082 ratings - published 2006 -
									<a class="greyText" href="#">15 editions</a>
								</span>
							</div><!-- book-details -->
							<div class="readButton inline-block pull-right">
								<button type="button" class="btn btn-success">Want to Read</button>
								<br>
								<span class="star">* * * * *</span>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			
				
			
			</div><!-- col-sm-8 -->
			<div class="col-sm-3 col-sm-offset-1">

			</div><!-- col-sm-3 col-sm-offset-1 -->
		</div><!-- row -->
	</div><!-- container -->
</body>
</html>