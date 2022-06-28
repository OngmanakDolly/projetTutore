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
                    <div class="col-lg-5 d-none d-lg-block "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">REINITIALISER LE MOT DE PASSE</h1>
                            </div>
                            <form class="user" action="{{ route('password.email') }}" method="post">
							@csrf
							
                                
                                <div class="form-group">
                                <label>Adresse email</label>
                                    <input type="email"  name="email" class="form-control form-control-user" id="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
								
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reinitialiser
								</button>
                                <hr>
                                
                            </form>
                            <hr>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

   

    <!-- Custom scripts for all pages-->
    

</body>

</html>