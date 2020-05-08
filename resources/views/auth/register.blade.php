@extends('layouts.auth')

@section('content')
<div class="register">
	<form method="POST" action="{{ route('register') }}">
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
		<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">
		<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Passwort">
		<input id="password-confirm" type="password" class="mb-50" name="password_confirmation" required autocomplete="new-password" placeholder="Passwort wiederholen">
		<button type="submit" class="btn btn-primary">
			Registrieren
		</button>
  </form>
</div>
@endsection
