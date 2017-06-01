@extends('master')

@section('title', 'Social Matrix | Contact')

@section('content')

	<div class="contact">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>GET IN TOUCH</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<form method="post" enctype="multipart/form-data" action="/contact/success">
		{{ csrf_field() }}
		<div class="contact1">
			<div class="container-fluid">
				<div class="row">

						<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
							<p>TOUCH A BASE TODAY.<br>LET US GET YOUR BUSINESS SOCIAL SALES READY.</p>
							
							
							<div class="form-group row">
							  <label for="example-text-input" class="col-2 col-form-label">FIRST NAME</label><br>
							  
							    <input class="form-control" type="text" id="example-text-input" name="first_name">
							    
							 
							</div>

							<div class="form-group row">
							  <label for="example-text-input" class="col-2 col-form-label">LAST NAME</label><br>
							  
							    <input class="form-control" type="text" id="example-text-input" name="last_name">
							  
							</div>

							<div class="form-group row">
							  <label for="example-text-input" class="col-2 col-form-label">COMPANY NAME</label><br>
							  
							    <input class="form-control" type="text" id="example-text-input" name="company_name">
							  
							</div>

							<div class="form-group row">
							  <label for="example-email-input" class="col-2 col-form-label">EMAIL</label><br>
							  
							    <input class="form-control" type="email" id="example-email-input" name="email">
							 
							</div>

							<div class="form-group row">
							  <label for="example-number-input" class="col-2 col-form-label">MOBILE NUMBER</label><br>
							  
							    <input class="form-control" type="number" id="example-number-input" name="mobile_number">
							 
							</div>

							<div class="form-group row">
							  <label for="comment">COMMENT</label><br>
							  
							  <textarea class="form-control" rows="6" id="comment" name="comment"></textarea>
							
							</div>

							<button type="submit" class="btn btn-default">SUBMIT</button>
						</div>
				</div>
			</div>
		</div>
	</form>



@endsection