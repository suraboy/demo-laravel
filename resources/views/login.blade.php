<style type="text/css">
	#navbar-second,.navbar.navbar-inverse {display: none;}
	.page-container{min-height:auto!important;}
</style>
<meta name="_token" content="{!! csrf_token() !!}"/>
@extends('layouts.login')

@section('content')
	<div class="login-container">
		<div class="page-container">
			<form action="user/login" method="POST">
				<div class="panel panel-body login-form">
					<div class="text-center">
						<div class="col-lg-12">
							<img src="images/logo.png" alt="Logo" width="100%;">
						</div>
						<h5 class="content-group">Login to your account<small class="display-block">Enter your credentials below</small></h5>
					</div>
					@if (session('status'))
					<div class="form-group">
						<div class="alert alert-danger" align="center">
							{{ session('status') }}
						</div>	
					</div>
					
					@endif
					<div class="form-group has-feedback has-feedback-left">
						<input type="email" name="email" class="form-control" placeholder="Email"
						 @if(session('email'))
						 value="{{session('email')}}"
						 @endif
						 >
						<div class="form-control-feedback">
							<i class="icon-user text-muted"></i>
						</div>
					</div>
					<div class="form-group has-feedback has-feedback-left">
						<input type="password" class="form-control" placeholder="Password" name="password"
						 @if(session('password'))
						 value="{{session('password')}}"
						 @endif
						>
						<div class="form-control-feedback">
							<i class="icon-lock2 text-muted"></i>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
					</div>
					<div class="text-center">
						<a href="#" data-toggle="modal" data-target="#myModal">Forgot password?</a>
					</div>
				</div>
			</form>
		</div>
	</div>

@endsection('content')
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <form action="user/forgetpassword" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reset password</h4>
      </div>
      <div class="modal-body">
        <label>Email:</label>
        <input type="text" name="email_forget" class="form-control" placeholder="email">
        <label>New Password:</label>
        <input type="password" name="password_forget" class="form-control" placeholder="password">
        <label>Comfirm Password:</label>
        <input type="password" name="cm_password_forget" class="form-control" placeholder="comfirm password">
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-default">Send</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  		</form>
    </div>

  </div>
</div>
