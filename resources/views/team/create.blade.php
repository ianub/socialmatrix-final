@extends('master')

@section('title', 'Social Matrix | Create')

@section('content')

	
	<div class="contact">
		<div class="home-text">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<div class="home-text-container">
							<h1>ADD A MEMBER</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form method="post" enctype="multipart/form-data" action="/team/store">
		{{ csrf_field() }}
		<div class="contact1">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3 text-center">
							
							
							
							<div class="form-group row">
							  <label for="first_name" class="col-2 col-form-label">FIRST NAME</label><br>
							  
							    <input class="form-control" type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
						    		@if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
							 
							</div>

							<div class="form-group row">
							  <label for="last_name" class="col-2 col-form-label">LAST NAME</label><br>
							  
							    <input class="form-control" type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
							    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
							  
							</div>

							<div class="form-group row">
							  <label for="position" class="col-2 col-form-label">POSITION</label><br>
							  
							    <input class="form-control" type="text" id="position" name="position" value="{{ old('position') }}">
							    @if ($errors->has('position'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('position') }}</strong>
                                        </span>
                                    @endif
							  
							</div>

							<div class="form-group row">
							  <label for="description" class="col-2 col-form-label">DESCRIPTION</label><br>
							  
							     <textarea class="form-control" rows="10" id="description" name="description">{{ old('description') }}</textarea>
							     @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
							 
							</div>

							<div class="form-group row">
							  <label for="image" class="col-2 col-form-label">IMAGE</label><br>
							  
							    <input class="form-control" type="file" id="image" name="image" value="{{ old('image') }}">
							    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
							 
							</div>


							<input type="submit" value="SUBMIT" class="btn btn-default">
					</div>
						

				
						
				</div>
			</div>
		</div>
	</form>

@endsection