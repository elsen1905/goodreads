<!DOCTYPE html>
<html>
<head>
<title>
	Goodreads | {{$user->name}} {{$user->surname}} - user_city, month, country (count_readed book)
</title>
<link rel="icon" href="/images/goodreads-icon.png">	
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body id="profile">
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
      	<form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search books">
	        </div>
       		 <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
     	</form>
		</div>
		<div class="col-sm-3">
  		<ul class="nav navbar-nav">
	        <li><a href="#"><img src="/images/friend.svg"></a></li>
	        <li><a href="{{url('/profile/'.$user->id)}}"><img src="/{{Auth::user()
->photo}}" class="profile"></a></li>
	      </ul>
     </div>
  </div>   
</nav>
	<div class="container">
		<div class="main">		
			<div class="col-md-6 col-md-offset-1">
				<div class="leftSide">
					<div class="photo col-md-4">
						<img src="/{{$user
->photo}}" class="img-responsive">
						{{-- <a href="#">18 ratings</a> 
						<a href="#">(2.39 avg) </a><br>
						<a href="#">0 reviews</a><br>
						<a href="#">more photos (0)</a> --}}
					</div>
					<div class="info col-md-8">
						<h1> {{$user
->name}} {{$user
->surname}} </h1>
				@if($user->id == Auth::user()->id)
					<a href="{{url('/profile/'.$user->id.'/settings')}}">(edit profile)</a>
				@endif	
						<hr>
						<label>Details</label><p>Age 19</p>
						<label>Birthday</label><p>{{$user->born}}</p>
						<label>Activity</label><p>Joined in {{$user->created_at}}</p>
					</div>
					{{-- <div class="col-md-12 bookshelves">
						<h5><b>USER'S BOOKSHELVES</b></h5>
						<hr>
						<a href="#">read (17)</a>
						<a href="#">currently-reading (0)</a>
						<a href="#">to-read (0)</a>
						<br>
						<div class="pullRight">
							<a href="#">Stats | </a>
						<a href="#">More...</a>
						</div>	
					</div> --}}
					{{-- <div class="col-md-12 updates">
						<h5><b>USER'S RECENT UPDATES</b></h5>
						<hr>
						<p><a href="#" class="black"><b>User User</b></a> is now friends with <a href="#" class="black"><b>Name Surname</b></a></p>						
						<a href="#"><img src="/images/profile2.jpg" class="img-responsive profile2"></a>
						<a href="#" style="color:gray">Sep 08, 2016 03:21AM | </a> <a href="#">like | </a> 
						<a href="#">comment</a>
						<a href="#"><img src="/images/x.png" class="img-responsive col-md-1 pullRight"></a>
						<hr>
						
						<p><a href="#" class="black"><b>User User</b></a> wants to read</p>
						<a href="#"><img src="/images/book.jpg" class="img-responsive col-md-2"></a>
						<div class="about col-md-10">
							<a href="#" class="black"><b>The Study of Language</b></a>
								<button class="btn btn-success" onclick="
							">Want to Read</button> <!-- js ile islenmelidi -->
							<br>
 							<a href="#" class="black">by George Yule</a>
						</div>
						<a href="#" style="color:gray">Sep 08, 2016 03:21AM | </a> <a href="#">like | </a> 
						<a href="#">comment</a>
						<a href="#"><img src="/images/x.png" class="img-responsive col-md-1 pullRight"></a>
						<hr>
						<p><a href="#" class="black"><b>User User</b></a> rated a book <i class="fa fa-star" style="color: #FA604A" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i>
							<i class="fa fa-star" aria-hidden="true"></i></p>
						<a href="#"><img src="/images/book.jpg" class="img-responsive col-md-2"></a>
						<div class="about col-md-10">
							<a href="#" class="black"><b>The Study of Language</b></a>
								<button class="btn btn-success">Want to Read</button>
							<h6>Rate this book</h6>
							<br>
 							<a href="#" class="black">by George Yule</a>
						</div>
						<a href="#" style="color:gray">Sep 08, 2016 03:21AM | </a> <a href="#">like | </a> 
						<a href="#">comment</a>
						<a href="#"><img src="/images/x.png" class="img-responsive col-md-1 pullRight"></a>
					</div> --}}
					{{-- <div class="quotes col-md-12">
						<h5><b><a href="#">USER'S QUOTES</a></b><a href="#" style="color:gray">(edit)</a></h5><hr>
						<p>User hasn't added any quotes yet. <a href="#">  Add quotes now>></a></p>
					</div>
					<div class="comments col-md-12">
						<h5><b><a href="#">USER'S FRIEND COMMENT</a></b></h5><hr>
						<form class="form-row">
						<h6><b>comment</b></h6>
						<textarea name = "comment" placeholder = "Comment"></textarea>
						<input type="submit" name="send" value="SEND" class="btn btn-success pullRight">
						</form>
					</div> --}}
				</div>
			</div>
			<div class="col-md-4">
				<div class="rightSide">
					{{-- <h5><b><a href="#">USER'S FRIENDS (100)</a></b></h5>
						<hr> --}}
						{{-- <div class="friends col-md-12">
							<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-3"></a>
							<a href="#">Name Surname</a>
							<p>0 books | 18 friends</p>
						</div>
						<div class="friends col-md-12">
							<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-3"></a>
							<a href="#">Name Surname</a>
							<p>0 books | 18 friends</p>
						</div>
						<div class="friends col-md-12">
							<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-3"></a>
							<a href="#">Name Surname</a>
							<p>0 books | 18 friends</p>
						</div>
						<div class="friends col-md-12">
							<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-3"></a>
							<a href="#">Name Surname</a>
							<p>0 books | 18 friends</p>
						</div>
						<div class="friends col-md-12">
							<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-3"></a>
							<a href="#">Name Surname</a>
							<p>0 books | 18 friends</p>
						</div> --}}
						{{-- <a href="#" class="pullRight">More firends...</a>
				<div class="clear"></div> --}}
				<div class="follow col-md-12">
					{{-- <h6><b><a href="#">PEOPLE USER IS FOLLOWING</a></b></h6>
						<hr>
						<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-2"></a>
						<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-2"></a>
						<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-2"></a>
						<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-2"></a>
						<a href="#"><img src="/images/profile3.png" class="img-responsive col-md-2"></a> --}}
					</div>
					{{-- <div class="clear"></div>
					<div class="genres col-md-12">
						<h6><b>FAVORITE GENRES</b></h6><hr>
						<p><a href="#">Biography</a>, <a href="#">Children's</a>, <a href="#">Historical fictions</a> and <a href="#">Science fictions</a></p>
					</div> --}}
					{{-- <div class="clear"></div>
					<div class="readingChallenge col-md-12">
						<h6><b><a href="#">2016 READING CHALLENGE</a></b></h6>
						<hr>
						<a href="#"><img src="/images/read.jpg" class="img-responsive pullLeft"></a>
						<p><a href="#"> User has read 0 of 4 books</a></p>
						<div class="percent col-md-7 pullRight">
							<p>0%</p>
						</div>
						<button class="btn btn-default">View Books</button>
					</div>		 --}}		
					{{-- <a href="#">Polls voted on by User</a><br>
					<a href="#">List liked by User</a> --}}	
				</div>
			</div>
		</div>	
	</div>
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