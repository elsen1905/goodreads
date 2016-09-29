<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<script src="https://use.fontawesome.com/f32c1fcfb3.js"></script>
		<title>login</title>
	</head>
	<body>
		<header id="header">
			<div class="menu">
				<div class="container">
					<nav class="navbar">
						<div class="col-md-7">
							<a class="navbar-brand" href="#">
								<img src="/images/logo.png" class="img-responsive">
							</a>
						</div>
						<div class="col-md-5 login-left">
							<!-- <form class="navbar-form navbar-right">
								<input  class="login" type="text" class="form-control" placeholder="Email Address">
								<input  class="login" type="password" class="form-control" placeholder="Password">
								<a href="{{-- {{url('/homepage')}} --}}" class="btn btn-default">Sign In</a>
								<br>
									<label class="checkbox-inline text">
										<input type="checkbox" value="">Remember me
								</label>
								<a class="text" href="#">Forgot it?</a>
							</form> -->
							
							{{-- @if (Auth::guest()) --}}
							<form class="" role="form" method="POST" action="{{ url('/login') }}">
								{{ csrf_field() }}
								<ul class="login-input">
									<li>
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											{{-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> --}}
											<div class="">
												<input id="email" type="email" placeholder="Email address" class="" name="email" value="{{ old('email') }}">
												@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</li>
									<li>
										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											{{-- <label for="password" class="col-md-4 control-label">Password</label> --}}
											<div class="">
												<input id="password" placeholder="Password" type="password" class="" name="password">
												@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
												@endif
											</div>
										</div>
									</li>
									<li>
										
										<div class="">
											<div class="">
												<button type="submit" class="login-btn" {{-- style="border:0px; background-color: #382110; --}}">
												Sign In
												</button>
												
											</div>
										</div>
									</li>
								</ul>
								<ul class="login-help">
									<li>
										<input type="checkbox" name="remember"> <span>Remember Me</span>
									</li>
									<li>
										<a class="" href="{{ url('/password/reset') }}">Forgot it?</a>
									</li>
								</ul>
								{{--
								<div class="">
									<div class="">
										<div class="">
											<label>
											</label>
										</div>
									</div>
								</div> --}}
							</form>
						</div>
					</nav>
					<div class="secondPart">
						<div class="col-md-6">
							<div class="book">
								<img src="/images/logo2.png" class="img-responsive">
							</div>
						</div>
						<div class="col-md-4 col-md-offset-2">
							<div class="register">
								<h4>New here? Create a free account!</h4>
								{{-- <form class="form-group">
									<input type="text" class="form-control" placeholder="Name">
									<input type="text" class="form-control" placeholder="Email Address">
									<input type="password" class="form-control" placeholder="Password">
									<div class="row">
										<a href="#"><button type="submit" class="btn btn-default col-md-3 col-sm-3">Sign Up</button></a>
									</form> --}}
									{{-- ================================================================================ --}}
									<form class="{{-- form-horizontal --}}" role="form" method="POST" action="{{ url('/register') }}">
										{{ csrf_field() }}
										<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
											{{--  <label for="name" class="col-md-4 control-label">Name</label> --}}
											{{-- form-control --}}
											<div class="">
												<input id="name" placeholder="Name" type="text" class="new-class-input" name="name" value="{{ old('name') }}"> <br>
												@if ($errors->has('name'))
												<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
												</span>
												@endif
											</div>
										</div>
										
										{{-- <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
											<label for="surname" class="col-md-4 control-label">Surname</label>
											--     <div class="">
												<input id="surname" placeholder="Surname" type="text" class="form-control" name="surname" value="{{ old('name') }}">
												@if ($errors->has('surname'))
												<span class="help-block">
													<strong>{{ $errors->first('surname') }}</strong>
												</span>
												@endif
											</div>
										</div> --}}
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											{{-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> --}}
											<div class="">
												<input id="email" placeholder="Email" type="email" class="new-class-input" name="email" value="{{ old('email') }}"> <br>
												@if ($errors->has('email')) 
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>
										</div>
										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											{{--  <label for="password" class="col-md-4 control-label">Password</label> --}}
											<div class="">
												<input id="password" placeholder="Password" type="password" class="new-class-input" name="password">
												@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
												@endif
											</div>
										</div>
										{{--  <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
											<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
											<div class="col-md-6">
												<input id="password-confirm" type="password" class="form-control" name="password_confirmation">
												@if ($errors->has('password_confirmation'))
												<span class="help-block">
													<strong>{{ $errors->first('password_confirmation') }}</strong>
												</span>
												@endif
											</div>
										</div> --}}
										<div class="form-group">
											<div class="{{-- col-md-6 col-md-offset-4 --}}">
												<button type="submit" class="btn btn-primary">
												{{-- <i class="fa fa-btn fa-user"></i> --}} Register
												</button>
											</div>
										</div>
									</form>
									
									{{-- ================================================================================--}}
									<h6 class="col-md-8 col-sm-8">By clicking "Sign up" I agree to the Goodreads <a href="#">Terms of Service</a> and confirm that I am at least 13 years old.</h6>
								</div>
								<div class="col-md-12 sign-another-sn">
									<div class="sign">
										<ul>
											<li><h5> or sign in using</h5></li>
											<li><a href="#"><img src="/images/fb.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="/images/twitter.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="/images/google.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="/images/amazon.png" class="img-responsive"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="clearFix"></div>
		<section id="information">
			<div class="container">
				<div class="col-md-4">
					<div>
						<h3>
						Deciding what to read next?
						</h3>
						<p>
							You're in the right place. Tell us what titles or genres you've enjoyed in the past, and we'll give you surprisingly insightful recommendations.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div>
						<h3>
						What are your friends reading?
						</h3>
						<p>
							Chances are your friends are discussing their favorite (and least favorite) books on Goodreads. Want to learn more?<a href="#" style="color:#00635d; ">Take the tour</a>
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="stores">
						<h3>
						Get the app!
						</h3>
						<ul>
							<li><a href="#"><img src="/images/applestore.svg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/playstore.png" class="img-responsive"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="clearFix"></div>
		<section id="discoverUsers">
			<div class="container">
				<div id="leftPart" class="col-md-8">
					<div id="discover">
						<h3>
						What will you discover?
						</h3>
						<div class="row" style="margin: 0;">
							<div class="firstPart">
								<p>Because Meagan liked...</p>
								<ul>
									<li><a href="#"><img src="/images/1.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/1.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
									<li><img src="/images/arrow.png" class="img-responsive" style="margin-top:50px; width:21px; height:28px"></li>
								</ul>
							</div>
							<div class="firstPart">
								<p>She discovered:</p>
								<ul>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
								</ul>
							</div>
							<div style="padding-top: 80px;">
								<h6><b>Historical Fiction, Book Club</b></h6>
							</div>
						</div>
						<div class="row" style="margin:50px 0;">
							<div class="firstPart">
								<p>Because Meagan liked...</p>
								<ul>
									<li><a href="#"><img src="/images/1.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/1.jpg" class="img-responsive"></a></li>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
									<li><img src="/images/arrow.png" class="img-responsive" style="margin-top:50px; width:21px; height:28px"></li>
								</ul>
							</div>
							<div class="firstPart">
								<p>She discovered:</p>
								<ul>
									<li><a href="#"><img src="/images/2.jpg" class="img-responsive"></a></li>
								</ul>
							</div>
							<div style="padding-top: 80px;">
								<h6><b>Historical Fiction, Book Club</b></h6>
							</div>
						</div>
					</div>
					<div class="clearFix"></div>
					<div id="search">
						<div class="row" style="margin:0">
							<div class="col-md-6">
								<h4>Search and browse books</h4>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Title/Author/ISBN">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									</span>
								</div>
							</div>
						</div>
						<div class="clearFix"></div>
						<div class="row">
							<div class="col-md-3">
								<ul>
									<li><a href="#">Art</a></li>
									<li><a href="#">Biography</a></li>
									<li><a href="#">Business</a></li>
									<li><a href="#">Chick Lit</a></li>
									<li><a href="#">Children's</a></li>
									<li><a href="#">Christian</a></li>
									<li><a href="#">Classics</a></li>
									<li><a href="#">Comics</a></li>
									<li><a href="#">Contemporary</a></li>
									<li><a href="#">Cookboks</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li><a href="#">Crime</a></li>
									<li><a href="#">Ebooks</a></li>
									<li><a href="#">Fantasy</a></li>
									<li><a href="#">Fiction</a></li>
									<li><a href="#">Gay and Lesbian</a></li>
									<li><a href="#">Christian</a></li>
									<li><a href="#">Graphic Novels</a></li>
									<li><a href="#">Historical Fiction</a></li>
									<li><a href="#">History</a></li>
									<li><a href="#">Horror</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li><a href="#">Humor and Comedy</a></li>
									<li><a href="#">Manga</a></li>
									<li><a href="#">Memoir</a></li>
									<li><a href="#">Music</a></li>
									<li><a href="#">Mystery</a></li>
									<li><a href="#">Nonfiction</a></li>
									<li><a href="#">Paranormal</a></li>
									<li><a href="#">Philosophy</a></li>
									<li><a href="#">Poetry</a></li>
									<li><a href="#">Psychology</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li><a href="#">Romance</a></li>
									<li><a href="#">Science</a></li>
									<li><a href="#">Science Fiction</a></li>
									<li><a href="#">Self Help</a></li>
									<li><a href="#">Suspense</a></li>
									<li><a href="#">Spirituality</a></li>
									<li><a href="#">Sports</a></li>
									<li><a href="#">Thriller</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#"><b>More genres...</b></a></li>
								</ul>
							</div>
						</div>
						<div class="clearFix"></div>
						<div class="row" style="margin: 0">
							<div class="col-md-4">
								<div class="trivia">
									<h3>Trivia</h3>
									<br>
									<p>In literature, what term refers to a recurring theme or image?</p>
									<br>
									<ul>
										<li><a href="#">a. Unreliable Narrator</a></li>
										<li><a href="#">b. Anxiety of Influence</a></li>
										<li><a href="#">c. Narratology</a></li>
										<li><a href="#">d. Motif</a></li>
									</ul>
									<br>
									<a href="#"><b>More trivia...</b></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="Quizzes">
									<h3>Quizzes</h3>
									<br>
									<div class="row" style="padding: 3px 0; margin:0; border-bottom: 1px solid #aaaaaa">
										<div style="float:left">
											<img src="/images/sp1.jpg" class="img-responsive">
										</div>
										<div style="float:right">
											<a href="#" style="color: #00635d; font-size:11px;">The Spirit of Imaginat...</a>
											<h6>6 questions, taken 740,606 times</h6>
										</div>
									</div>
									<div class="row" style="padding: 3px 0; margin:0; border-bottom: 1px solid #aaaaaa">
										<div style="float:left">
											<img src="/images/sp1.jpg" class="img-responsive">
										</div>
										<div style="float:right">
											<a href="#" style="color: #00635d; font-size:11px;">The Spirit of Imaginat...</a>
											<h6>6 questions, taken 740,606 times</h6>
										</div>
									</div>
									<div class="row" style="padding: 3px 0; margin:0; border-bottom: 1px solid #aaaaaa">
										<div style="float:left">
											<img src="/images/sp1.jpg">
										</div>
										<div style="float:right">
											<a href="#" style="color: #00635d; font-size:11px;">The Spirit of Imaginat...</a>
											<h6>6 questions, taken 740,606 times</h6>
										</div>
									</div>
									<a href="#"><b>More quizzes...</b></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="quotes">
									<h3>Quotes</h3>
									<br>
									<img src="/images/1.jpg" class="img-responsive">
									<p>"No one can make you feel inferior without your consent." - Eleanor Roosevelt, This is My Story
									</p>
								</div>
								<br>
								<a href="#" style="color:#00635d;"><b>More quotes...</b></a>
							</div>
						</div>
						<br>
						<br>
						<br>
						<br>
						<div class="clearFix"></div>
						<br>
						<br>
						<br>
						<br>
						<div class="row">
							<div class="awards">
								<h4>Goodreads Choice Awards:<a href="#" style="color:black">The Best Books 2015</a></h4>
								<div class="col-md-2">
									<img src="/images/awards.png" class="img-responsive">
								</div>
								<div class="col-md-5">
									<ul>
										<li><a href="#">Best Fiction 2015</a></li>
										<li><a href="#">Best Mystery & Thriller 2015</a></li>
										<li><a href="#">Best Historical Fiction 2015</a></li>
										<li><a href="#">Best Fantasy 2015</a></li>
										<li><a href="#">Best Romance 2015</a></li>
										<li><a href="#">Best Science Fiction 2015</a></li>
										<li><a href="#">Best Horror 2015</a></li>
										<li><a href="#">Best Humor 2015</a></li>
										<li><a href="#">Best Nonfiction 2015</a></li>
										<li><a href="#">Best Memoir & Autobiography 2015</a></li>
									</ul>
								</div>
								<div class="col-md-5">
									<ul>
										<li><a href="#">Best History & Biography 2015</a></li>
										<li><a href="#">Best Science & Technology 2015</a></li>
										<li><a href="#">Best Food & Cookbooks 2015</a></li>
										<li><a href="#">Best Graphic Novels & Comics 2015</a></li>
										<li><a href="#">Best Poetry 2015</a></li>
										<li><a href="#">Best Debut Goodreads Author 2015</a></li>
										<li><a href="#">Best Young Adult Fiction 2015</a></li>
										<li><a href="#">Best Young Adult Fantasy & Science Fiction 2015</a></li>
										<li><a href="#">est Middle Grade & Children's 2015</a></li>
										<li><a href="#">Best Picture Books 2015</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="rightPart" class="col-md-4">
					<div id="users">
						<h3>
						Readers online now
						</h3>
						<ul>
							<li><a href="#"><img src="/images/p1.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p2.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p3.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p4.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p1.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p2.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p3.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p4.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p2.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p1.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p3.jpg" class="img-responsive"></a></li>
							<li><a href="#"><img src="/images/p4.jpg" class="img-responsive"></a></li>
						</ul>
					</div>
					<div class="clearFix"></div>
					<div id="sponsored">
						<div class="col-md-12" style="background-color: #F4F1EA;">
							<div class="books">
								<h5>SPONSORED BOOKS</h5>
							</div>
							<div class="book">
								<div class="col-md-4">
									<img src="/images/pp1.jpg" class="img-responsive">
								</div>
								<div class="col-md-8">
									<a href="#">Tommy's Exodus</a>
									<p>A new, page turning, romantic adventure by Robert Hobkirk</p>
									<span>www.amazon.com</span>
									<br>
									<a href="#">3 people added it >>></a>
								</div>
							</div>
							<div class="clearFix"></div>
							<div class="book">
								<div class="col-md-4">
									<img src="/images/pp1.jpg" class="img-responsive">
								</div>
								<div class="col-md-8">
									<a href="#">Cries in the Wind (Wind Series, #3)</a>
									<p>Megan solves a cold-case murder then must face the killer and disaster. Read as Book 3 in the Wind Series or as a stand-alone mystery.</p>
									<span>www.goodreads.com</span>
									<br>
									<a href="#">255 people added it >>></a>
								</div>
							</div>
							<a href="#" style="color:#00635d;">More Books...</a>
						</div>
					</div>
					<div class="clearFix"></div>
					<div id="lists">
						<div class="col-md-12 lists">
							<div class="row">
								<h3>Love lists?</h3>
							</div>
							<div class="row" style="border-bottom: 1px solid #aaaaaa">
								<div style="float:left">
									<h5>Best for Book Clubs</h5>
									<h6>4,040 books | 10,057 voters</h6>
								</div>
								<div style="float:right; padding-top: 10px">
									<ul>
										<li><a href="#"><img src="/images/sp1.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp2.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp3.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp4.jpg" class="img-responsive"></a></li>
									</ul>
								</div>
							</div>
							<div class="clearFix"></div>
							<div class="row" style="border-bottom: 1px solid #aaaaaa">
								<div style="float:left">
									<h5>Best Crime & Mystery Books</h5>
									<h6>4,040 books | 10,057 voters</h6>
								</div>
								<div style="float:right; padding-top: 10px">
									<ul>
										<li><a href="#"><img src="/images/sp1.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp2.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp3.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp4.jpg" class="img-responsive"></a></li>
									</ul>
								</div>
							</div>
							<div class="clearFix"></div>
							<div class="row" style="border-bottom: 1px solid #aaaaaa">
								<div style="float:left">
									<h5>Best for Book Clubs</h5>
									<h6>4,040 books | 10,057 voters</h6>
								</div>
								<div style="float:right; padding-top: 10px;">
									<ul>
										<li><a href="#"><img src="/images/sp1.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp2.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="/images/sp3.jpg" class="img-responsive"></a></li>
										<li><a href="#"><img src="	/images/sp4.jpg" class="img-responsive"></a></li>
									</ul>
								</div>
							</div>
							<a href="#" style="color:#00635d"><b>More book lists...</b></a>
						</div>
					</div>
					<div class="clearFix"></div>
					<div id="author">
						<h3>Are you an author or a publisher?</h3>
						<p>Gain access to a massive audience of more than 50 million book lovers. Goodreads is a great place to promote your books.</p>
						<a href="#"><button>Author Program</button></a>
						<a href="#"><button>Advertise</button></a>
					</div>
				</div>
			</div>
		</section>
		<div class="clearFix"></div>
		<footer id="footer">
			<div class="container">
				<div class="col-md-2">
					<p>© 2016 Goodreads Inc</p>
				</div>
				<div class="col-md-8">
					<ul>
						<li><a href="#"> about us |</a></li>
						<li><a href="#"> advertise |</a></li>
						<li><a href="#"> authore program |</a></li>
						<li><a href="#"> jobs |</a></li>
						<li><a href="#"> api |</a></li>
						<li><a href="#"> our blog |</a></li>
						<li><a href="#"> authors & advertise blog |</a></li>
						<li><a href="#"> terms |</a></li>
						<li><a href="#"> privacy |</a></li>
						<li><a href="#"> help </a></li>
					</ul>
				</div>
				<div class="col-md-2">
					<p style="text-align:right"><b>switch to:</b></p><a href="#" style="float:center">mobile version</a>
				</div>
			</div>
		</footer>
	</body>
</html>