@extends('auth.auth')

@section('_content')
<div class="login100-form-title" style="background-image: url(assetlogin/images/bg-01.jpg);">
					
					<img src="{{ url("assetlogin/images/logo/logo1.png") }}">
			
				</div>

				<form action="{{ route('login') }}" method="POST"  class="login100-form validate-form">
                {{csrf_field()}}

					<div class="wrap-input100 m-b-26{{ $errors->has('email') ? ' has-error' : '' }}"  >
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="email" value="{{ old('email') }}"  placeholder="Enter username">
						<span class="focus-input100"></span>

						 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="wrap-input100 m-b-18{{ $errors->has('password') ? ' has-error' : '' }}">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
					
						<span class="focus-input100"></span>

						  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="remember">
								Remember me
							</label>
						</div>

						<div>
							<a href="{{ route('password.request') }}" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
                @endsection