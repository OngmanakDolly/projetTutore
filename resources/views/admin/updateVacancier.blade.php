@extends('layouts.baseAdmin2')

@section('title')
    BetterliDays | tableau De Bord Admin
@endsection

@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Vacancier</h1>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Modifier les informations du vacancier</h6>
                        </div>
                        <div class="card-body">
                            
							@foreach($user as $user)
                                <form method="POST" action="{{ route('UpdateVacancier', ['id' => $user->id]) }}"  width="100%" cellspacing="0">
                                    
								@csrf

<div class="row mb-3">
	<label for="name" class="col-md-2 col-form-label text-md-end">Nom</label>

	<div class="col-md-6">
		<input id="name" type="text" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

		@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="row mb-3">
	<label for="username" class="col-md-2 col-form-label text-md-end">Identifiant</label>

	<div class="col-md-6">
		<input type="text" id="email"  value="{{ $user->username}}" class="form-control @error('username') is-invalid @enderror" name="username"  required autocomplete="username">

		@error('username')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="row mb-3">
	<label for="email" class="col-md-2 col-form-label text-md-end">Email</label>

	<div class="col-md-6">
		<input id="password" type="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="row mb-3">
	<label for="pays" class="col-md-2 col-form-label text-md-end">Pays</label>

	<div class="col-md-6">
		<input id="password-confirm" type="text" class="form-control" name="pays" value="{{ $user->pays }}" required autocomplete="pays">
	</div>
	@error('pays')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="row mb-3">
	<label for="ville" class="col-md-2 col-form-label text-md-end">Ville</label>

	<div class="col-md-6">
		<input id="password-confirm" value="{{ $user->ville }}" type="text" class="form-control" name="ville" required autocomplete="ville">
	</div>
	@error('ville')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
</div>

<div class="row mb-0">
	<div class="col-md-6 offset-md-4">
		<button type="submit" class="btn btn-primary">Enregistrer</button>
		<a href="{{ route('AdminViewOrganismes' ) }}" class="btn btn-danger">Annuler</a>
	</div>
</div>
</form>
@endforeach
                            
                        </div>
                    </div>
            @endsection
