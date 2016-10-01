<!DOCTYPE html>
<html>
<head>
	<title>
		Goodreads | Account Settings
	</title>
	<link rel="icon" href="/images/goodreads-icon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="assets/vendor/font-awesome.css"> -->
	<link rel="stylesheet" href="/css/app.css">
	<script src="/scripts/jquery-3.1.0.min.js"></script>
	<script src="/scripts/accountsettings.js"></script>
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
	<div class="container">
		<section id="info">
			<div class="row">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-3">
							<p>ACCOUNT SETTINGS</p>
						</div>
						<div class="col-md-2 col-md-offset-7">
							<a href="{{url('/profile/'.Auth::user()->id)}}">View My Profile</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10  col-md-offset-1">
						<ul>
							<li class="active-li">
								<a href="#">Profile</a>
							</li>
							<li>
								<a href="#">Settings</a>
							</li>
							<li>
								<a href="#">Emails</a>
							</li>
							<li>
								<a href="#">Feeds</a>
							</li>
							<li>
								<a href="#">Apps</a>
							</li>
							<li>
								<a href="#">Widgets</a>
							</li>
							<li>
								<a href="#">Book Links</a>
							</li>
							<li>
								<a href="#">Purchases</a>
							</li>
						</ul>
						<div class="col-md-12 border-bottom"></div>
					</div>
				</div>
			</div>
		</section>
		<section id="change_account">
			<div class="col-md-10 col-md-1">
				<div class="col-md-8 col-md-offset-1">
					<form action="/profile/{{$user->id}}" method="post">
					{{ method_field('PATCH') }}
					 {{ csrf_field() }}
						<div class="row">
							<p class="paragraph">First Name</p>
							<input type="text" name="name" class="input-border" value="{{$user->name}}">
						</div>
						<div class="row">
							<p class="paragraph">Last Name</p>
							<input type="text" name="surname" class="input-border" value="{{$user->surname}}">
						</div>
						<div class="row">
							<p class="paragraph">Email</p>
							<input type="text" name="email" class="input-border" value="{{$user->email}}">
						</div>
						{{-- <div class="row">
							<p class="paragraph">Middle Name</p>
							<input type="text" class="input-border" disabled="true">
						</div>
						<div class="row" style="margin-top: 12px;">
							<p class="paragraph">Display Name</p>
							<select name="" id="" disabled="">
								<option value=""></option>
								<option value=""></option>
							</select>
						</div>
						<div class="row">
							<p class="paragraph">Show my last name to: </p>
							<input type="radio" class="radio" disabled=""> <span class="paragraph">Anyone (including search engines)(?)</span> <br>
							<input type="radio" class="radio"> <span class="paragraph">Friends</span> 
						</div>
						<div class="row">
							<p class="paragraph" style="margin-bottom: -18px;">User Name <span class="span-color">(customize your URL - goodreads.com/user_name)</span> </p> <br>
							<input type="text" class="input-border" disabled="">
						</div>
						<div class="row">
							<p class="paragraph">Gender</p>
							<select name="gender" id="" disabled="">
								<option value="Select">Select</option>	
								<option value="Male">Male</option>	
								<option value="Female">Female</option>	
								<option value="Custom">Custom</option>	
							</select>
						</div>
						<div class="row">
							<p class="paragraph">Gender viewable By</p>
							<select name="" id="" disabled="">
								<option value="everyone">Everyone</option>	
								<option value="friends">Friends only</option>	
								<option value="noone">No One</option>	
							</select>
						</div>
						<div class="row">
							<p class="paragraph">Date of Birth</p>
							<select name="" id="" disabled="">
								<option value=""></option>
								<script>					
									for (var i = 2003; i >= 1916; i--) {					
										document.write("<option>" + i +" </option>");	
									}
								</script>
							</select>
							<select name="months" id="month" disabled="">
								<option value=""></option>
								<option value="">January</option>
								<option value="">February</option>
								<option value="">March</option>
								<option value="">April</option>
								<option value="">May</option>
								<option value="">Juny</option>
								<option value="">July</option>
								<option value="">August</option>
								<option value="">September</option>
								<option value="">October</option>
								<option value="">November</option>
								<option value="">December</option>
							</select>
							<select name="" id="" disabled="">
								<option value=""></option>
								<script>
									for (var i = 1; i <= 31; i++) {
										document.write("<option>" + i +" </option>");
									}
								</script>
							</select>
						</div>
						<div class="row">
							<p class="paragraph">My Web Site <span class="span-color">(e.g. http://www.myblog.com)</span></p>
							<input type="text" style="width:550px;" disabled="" class="input-border">
						</div>
						<div class="row">
							<p class="paragraph">My Interests - favorite subjects, or really anything you know a lot about </p>
							<h5 class="h5">(in comma separated phrases, please)</h5>
							<input type="text" style="width:550px;" disabled="" class="input-border">
						</div>
						<div class="row">
							<p class="paragraph">What Kind of Books Do You Like to Read?</p>
							<textarea class="input-textarea" name="" id="" disabled="" cols="75" rows="1"></textarea>
						</div>
						<div class="row">
							<p class="paragraph">About Us <a href="#">(tips)</a></p>
							<textarea class="input-textarea" name="" disabled="" id="" cols="75" rows="10"></textarea>
						</div> --}}
						<div class="row">
							<input type="submit" class="btn" value="Save Profile Settings">
						</div>
					</form>
				</div>
				<div class="col-md-3 profile-picture">
					<div class="row" style="text-align: center;">
						<a href="#">
							<img src="/{{$user->photo}}" style="height:111px;" alt="">
						</a>
					</div>
					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<div class="col-md-6 col-md-offset-3">
								<form action="{{url('profile/upload-a-picture/'.Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}
									<div class="row">
										<input type="file" name="image">
									</div>
									<div class="row" style="margin-top: 5px;">
										<button type="submit" class="upload-picture">Upload Photo</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<style>
						.upload-picture{
							border: 0;
							border: 1px solid rgb(214, 208, 196);
							border-radius: 3px;
							background-color: rgb(244, 241, 234);
							font-size: 12px;
							padding: 5px 10px;
						}
						.upload-picture:hover{
							background-color: rgb(237, 230, 214);
						}
					</style>
				</div>
			</div>
		</section>
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