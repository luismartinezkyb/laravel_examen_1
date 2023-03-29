@extends('layouts.oxigen')
@section('content')
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image:url({{asset ('assets/images/img_bg_1.jpg')}});">

		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Get In Touch</h1>
							<h2>Free html5 templates Made by <a href="http://gettemplates.co" target="_blank">gettemplates.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section">
		<div class="gtco-container">
			
			@if(session('info'))
			<div class="alert alert-success">
				{{session('info')}}	
			</div>
			
			@endif
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form action="{{route('createMessage')}}" method="post">
                		@csrf
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input required type="text" name="firstname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input required type="text" name="lastname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input required type="text" name="email" class="form-control" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject</label>
								<input required type="text" name="subject" class="form-control" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea required name="message" cols="30" rows="10" class="form-control" placeholder="Write us something"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="Submit" value="Submit" class="btn btn-primary" />
							
						</div>

					</form>	
					<div class="alert alert-success d-none" id="alertSuccess" role="alert">
					  ¡¡Message sent successfully!!
					</div>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
			</div>
			
		</div>
	</div>
@endsection

