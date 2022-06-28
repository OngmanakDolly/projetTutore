@extends('layouts.app')
 
 
 @section('content')

    <div class="a">

    </div>
    
    <div class="container">
        <h5>Nous avons trouvés {{$users->total()}} résultat(s) de la recherche</h5>
        <div class="col-md-3">
            <div class="list-group">

                @foreach($users as $user)
                    <a class="list-group-item" href="{{ route( 'conversations.chat', $user->id) }}">{{ $user->name }}</a>
                @endforeach

            </div>
      </div>    
    </div>


 @endsection




