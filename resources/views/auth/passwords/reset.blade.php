@extends('layouts.auth')

@section('content')
<div class="password">
	<form method="POST" action="{{ route('password.update') }}">
    @csrf
		<input type="hidden" name="token" value="{{ $token }}">
		<input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
		<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Passwort">
		<input id="password-confirm" type="password" class="mb-50" name="password_confirmation" required autocomplete="new-password" placeholder="Passwort wiederholen">
		<button type="submit" class="btn btn-primary">
			Passwort festlegen
		</button>
  </form>
</div>
@endsection
