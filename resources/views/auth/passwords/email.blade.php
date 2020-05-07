@extends('layouts.auth')

@section('content')
<div class="email">
    @if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
    @endif

		<form method="POST" action="{{ route('password.email') }}">
			@csrf
			<input id="email" type="email" class="mb-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

			@error('email')
					<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
					</span>
			@enderror

			<button type="submit" class="btn btn-primary">
				Passwort zurücksetzen
			</button>
		</form>
    </div>
</div>
@endsection
