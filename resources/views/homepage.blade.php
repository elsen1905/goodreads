<!DOCTYPE html>
<html>
<head>
	<title>Goodreads | Recent Updates</title>
	<link rel="icon" href="/images/goodreads-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="assets/vendor/font-awesome.css"> -->
	<link rel="stylesheet" href="/css/app.css">
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
      	<form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search books">
	        </div>
	        <a href="{{url('/search-result')}}" class="btn"> 
	        	<i class="fa fa-search" aria-hidden="true"></i>
	        </a>
     	</form>
		</div>
		<div class="col-sm-3">
  		<ul class="nav navbar-nav">
	        <li><a href="#"><img src="/images/friend.svg"></a></li>
	        <li><a href="{{url('/profile/'.Auth::user()->id)}}"><img src="/images/{{Auth::user()->photo}}" class="profile"></a></li>
	        <li><a href="{{url('/logout')}}" class="btn btn-warning">Log out</a></li>
	      </ul>
     </div>
  </div>   
</nav>
	<section id="homepage">
		<div class="container-fluid">
			<div class="container">
				<div class="col-md-3 home-left">
					<div class="row current-read">
						<div class="col-md-12">
							<div class="row">
							<p>CURRENTLY READING</p>
						</div>
						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-book" aria-hidden="true"></i>
							</div>
							<div class="col-md-10">
								<h5>What are you reading?</h5>
							</div>
						</div>
						<div class="row">
							<form action="">
								<input type="text" placeholder="Search books">
							</form>
						</div>
						<div class="row">
							<ul>
								<li>
									<a href="#">Recommendations</a> 
									<span>.</span> 
								</li>
								<li>
									<a href="#">General update</a>
								</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="row challenge">
						<div class="col-md-12">
							<div class="row">
								<p>2016 READING CHALLENGE</p> 
								<span>Challenge yourself to read more this year!</span>
							</div>
							<div class="row challenge-mid">
								<div class="col-md-12">
									<div class="col-md-5">
										<img src="/images/challenge-book.png" alt="">
									</div>
									<div class="col-md-7">
										<div class="row">
											<h6>I want to read</h6>
										</div>
										<div class="row">
											<form action="">
												<input type="number" placeholder="12">
											</form>
										</div>
										<div class="row">
											<h5>books in 2016</h5>
										</div>
										<div class="row">
											<input type="submit" value="Start Challenge" disabled="">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<span>You can change your goal at any time</span>
							</div>
						</div>
					</div>
					<div class="row want-read">
						<div class="col-md-12">
							<div class="row">
								<p>WANT TO READ</p>
							</div>
							<div class="row w-r-mid">
								<div class="col-md-12">
									<div class="col-md-2">
										<i class="fa fa-book" aria-hidden="true"></i>
									</div>
									<div class="col-md-10">
										<h5>What do you want to read next?</h5>
									</div>
								</div>
							</div>
							<div class="row">
								<a href="#">Recommendations</a>
							</div>
						</div>
					</div>	
					<div class="row bookshelves">
						<div class="col-md-12">
							<div class="row">
								<p>BOOKSHELVES</p>
							</div>
							<div class="row">
								<div class="col-md-1">
									<a href="#">0</a>
								</div>
								<div class="col-md-10">
									<a href="#">Read</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
									<a href="#">0</a>
								</div>
								<div class="col-md-10">
									<a href="#">Currently reading</a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-1">
									<a href="#">0</a>
								</div>
								<div class="col-md-10">
									<a href="#">Want to read</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 home-center">
					<div class="row welcome">
						<div class="col-md-2 col-md-offset-5">
							<div class="logo">
								<img src="/images/logo.svg" height="42px" alt="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6 col-md-offset-3">
									<p>Welcome to Goodreads</p>
								</div> 
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h5>Meet your favorite book, find your reading community, and manage your reading life.</h5>
							</div>
						</div>
					</div>
					<div class="row homepage-customize">
						<div class="col-md-12">
							<div class="col-md-2">
								<p>UPDATES</p>
							</div>
							<div class="col-md-10">
								<div class="txt">
									<i class="fa fa-cog" aria-hidden="true"></i>Customize
								</div>
							</div>
						</div>
					</div>
					<div class="row homepage-news">
						<div class="row">
							<div class="col-md-1">
								<div class="logo">
									<a href="#">
										<img src="/images/logo.svg" height="42px" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-10">
								<p>Trending this week in one of your favorite genres, <a href="#">Mystery</a></p>
							</div>
							<div class="col-md-1">
								<a href="#">22h</a>
							</div>
						</div>
						<div class="row homepage-book-review">
							<div class="col-md-3">
								<img src="/images/samplebook.jpg" alt="">
							</div>
							<div class="col-md-9">
								<div class="row">
									<a href="#" class="f-a">Justice Redeemed</a>
								</div>
								<div class="row author">
									<span>by</span><a href="#"> Scott Pratt</a>
								</div>
								<div class="row">
									<form action="">
										<input type="submit" value="Want to Read">
									</form>
								</div>
								<div class="row">
									<h5>Two years ago, Darren Street made a name for himself as the man who rooted out corruption in the district attorney's office. Now the hotheaded young lawyer is in the public e...</h5>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-4 col-md-offset-3">
									<a href="#">Continue reading</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 home-right">
					<div class="row recommendations">
						<div class="col-md-12">
							<div class="row">
								<p>IMPROVE RECOMMENDATIONS</p>
							</div>
							<div class="row">
								<span>Rating at least 20 books improves your recommendations. You have rated 0.</span>
							</div>
							<div class="row">
								<div class="progress-br"></div>
								<div class="prgrss">
									0/20(0%)
								</div>
							</div>
							<div class="row">
								<a href="#">Read more books</a>
							</div>
						</div>
					</div>
					<div class="row featured">
						<div class="col-md-12">
							<div class="row">
								<p>FEATURED GROUP</p>
							</div>
							<div class="row">
								<a href="#">Oprah's September Book Announced</a>
							</div>
							<div class="row">
								<img src="/images/commerical.jpg" width="285px" alt="">
							</div>
							<div class="row">
								<span>19,691 members - Last active an hour ago</span>
							</div>
						</div>
					</div>
					<div class="row contact-us">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-5">
									<ul>
										<li>
											<a href="#">About Us</a>
										</li>
										<li>
											<a href="#">Authors</a>
										</li>
										<li>
											<a href="#">Our Blog</a>
										</li>
										<li>
											<a href="#">Jobs</a>
										</li>
										<li>
											<a href="#">Help</a>
										</li>
									</ul>
								</div>	
								<div class="col-md-7">
									<ul>
										<li>
											<a href="#">Authors & Ads Blog</a>
										</li>
										<li>
											<a href="#">Advertise</a>
										</li>
										<li>
											<a href="#">Terms</a>
										</li>
										<li>
											<a href="#">Privacy</a>
										</li>
										<li>
											<a href="#">API</a>
										</li>
									</ul>
								</div>	
							</div>
						</div>
						<div class="row home-mobile">
							<div class="col-md-12">
								<a href="#">Mobile Version</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p>&copy 2016 Goodreads</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>