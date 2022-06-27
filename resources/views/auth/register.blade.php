<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BetterliDays -Inscription</title>

    
    

    <!-- Custom styles for this template-->
	
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">

	<script src="{{ asset('js/sb-admin.js') }}"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">INSCRIPTION</h1>
                            </div>
                            <form class="user" action="{{ route('register') }}" method="post">
							@csrf
                            <div class="form-group">
                                <label>S'incrire en tant que:</label>
                                    <select   name="role" class="form-control form-control-user" id="role" value="{{ old('role') }}" required autocomplete="role">
                                        <option value="vacancier">Vacancier</option>
                                        <option value="organisme">Organisme</option>
                                        
                                    
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nom</label>
                                        <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    
                                    <div class="col-sm-6">
									<label>Identifiant</label>
                                        <input type="text" name="username" class="form-control form-control-user" id="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                <label>Adresse email</label>
                                    <input type="email"  name="email" class="form-control form-control-user" id="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Pays</label>
                                        <input type="text" name="pays" class="form-control form-control-user"
                                            id="pays" value="{{ old('pays') }}" required autocomplete="pays">
                                
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Ville</label>
                                        <input type="text" name="ville" class="form-control form-control-user"
                                            id="ville" value="{{ old('ville') }}" required autocomplete="ville">
                                    </div>
                                </div>
								
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>{{ __('Password') }}</label>
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" required autocomplete="new-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-sm-6">
                                    <label>{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" class="form-control form-control-user"
                                            id="comfirm_password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    S'incrire
								</button>
                                <hr>
                                
                            </form>
                            <hr>
                            
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Deja un compte? Connectez-vous!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   

    <!-- Custom scripts for all pages-->
    

</body>

</html>