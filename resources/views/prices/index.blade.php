@extends('master')

@section('title', 'Social Matrix | Prices')

@section('content')

	<div class="prices">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>SMB SOCIAL SOLUTIONS</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="pricesbox">
			<div class="prices1">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center">
							<h2>STANDARD</h2>
							<hr>
							<h1>$999</h1>
							<p>PER MONTH</p>
							<hr>
							<p>Included Budget for Campaigns</p>
							<p>Platform Optimisation - up to 2</p>
							<p>Monthly Strategy Workshop</p>
							<p>Content Culture Project Management</p>
							<p>Content Culture Coaching</p>
							<p>Managed Content</p>
							<p>Community Overwatch</p>
							<p>Social Selling Coaching</p>
						</div>
					</div>
				</div>
			</div>

			<div class="prices2">
				<div class="container-fluid">
					<div class="row">
						<div class="text-center">
							<h2>PREMIUM</h2>
							<hr>
							<h1>$1995</h1>
							<p>PER MONTH</p>
							<hr>
							<p>Included Budget for Campaigns</p>
							<p>Platform Optimisation - up to 2</p>
							<p>Monthly Strategy Workshop</p>
							<p>Content Culture Project Management</p>
							<p>Content Culture Coaching</p>
							<p>Managed Content</p>
							<p>Community Overwatch</p>
							<p>Social Selling Coaching</p>
							<p>Social Selling Interventions</p>
						</div>
					</div>
				</div>
			</div>	

		</div>
	 

	
	<div class="prices3">	
		<div class="container-fluid">
			<div class="row">
				<div class="text-center">

					<a href="{{ url('/contact') }}"><button type="button" class="btn btn-default">CONTACT US</button></a>
				</div>
			</div>
		</div>		
	</div>

@endsection