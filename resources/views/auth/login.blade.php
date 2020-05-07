@extends('layouts.auth')

@section('content')
<div class="login">
	<form method="POST" action="{{ route('login') }}">
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

		<div class="badge">
			Prüfen Sie Ihren E-Mail-Ordner. <br>
			Bestätigen Sie dort Ihre Registrierung.
		</div>

		<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">

		<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Passwort">
		
		<a class="password-reset" href="{{ route('password.request') }}">
			Passwort vergessen?
		</a>

		<button type="submit" class="btn btn-primary">
			Anmelden
		</button>

		<a href="{{route('register')}}" class="btn btn-secondary">
			Registrieren
		</a>

	</form>
</div>
@endsection
