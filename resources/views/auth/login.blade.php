@extends('layouts.auth')

@section('content')
<div class="login">
	<form method="POST" action="{{ route('login') }}">
		<img src="{{asset('img/logo.png')}}" alt="">
		@csrf

		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
		@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror

		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">

		<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Passwort">
		
		<a class="password-reset" href="{{ route('password.request') }}">
			Passwort vergessen?
		</a>

		<button type="submit" class="btn btn-primary">
			Anmelden
		</button>

		<button type="submit" class="btn btn-secondary">
			Registrieren
		</button>

	</form>
</div>
@endsection
