@extends('master')

@section('title', 'Social Matrix | Change Password')

@section('content')

<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('change/password') }}">
                            {{ csrf_field() }}

                            <h1>CHANGE YOUR PASSWORD</h1>

                            <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Old Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="passwordold" placeholder="Old Password" required>

                                    @if ($errors->has('passwordold'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('passwordold') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="New Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <link rel="stylesheet" type="text/css" href="/css/alertify.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="/js/alertify.js" type="text/javascript"></script>
{{--     <script src="//cdn.jsdelivr.net/alertifyjs/1.10.0/alertify.min.js"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.10.0/css/themes/bootstrap.min.css"/> --}}

    @if (session('success'))
    <script type="text/javascript">
        $ (document).ready(function(){
            alertify.success('{{session('success')}}');
        });
    </script>
    @endif

    @if (session('error'))
    <script type="text/javascript">
        $ (document).ready(function(){
            alertify.error('{{session('error')}}');
        });
    </script>
    @endif

@endsection
